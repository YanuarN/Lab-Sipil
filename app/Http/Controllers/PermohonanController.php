<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Lab;
use App\Models\Booking;
use App\Models\DaftarAlat;
use App\Models\KepalaLab;
use App\Models\AlatBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpWord\TemplateProcessor;
use Barryvdh\DomPDF\Facade\Pdf;


class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab = Lab::all();
        $dosen = Dosen::all();
        $daftar_alat = DaftarAlat::all();
        $kepala_lab = KepalaLab::all();
        $booking = Booking::all();
        return view('page.BookingMahasiswa', compact('lab', 'dosen', 'daftar_alat', 'kepala_lab', 'booking'));
    }

    // Add this method to your PermohonanController.php

    public function getBookingEvents()
    {
        // Get counts of bookings by date
        $bookings = Booking::select('tanggal_mulai', DB::raw('count(*) as count'))
            ->groupBy('tanggal_mulai')
            ->get();

        $events = [];
        foreach ($bookings as $booking) {
            $events[] = [
                'date' => $booking->tanggal_mulai,
                'count' => $booking->count
            ];
        }

        return response()->json($events);
    }

    public function getKepalaLab($labId)
{
    $lab = Lab::findOrFail($labId);
    return response()->json([
        'kepala_lab_id' => $lab->kepala_lab_id
    ]);
}

    public function checkKuota(Request $request)
    {
        try {
            $tanggal = $request->query('date');
            $kuotaMaksimal = 10;

            // Sesuaikan model dengan nama tabel booking Anda
            $jumlahBooking = Booking::where('tanggal_mulai', $tanggal)->count();

            return response()->json([
                'status' => ($jumlahBooking >= $kuotaMaksimal) ? 'penuh' : 'tersedia',
                'sisa_kuota' => max(0, $kuotaMaksimal - $jumlahBooking),
                'message' => ($jumlahBooking >= $kuotaMaksimal) ? 'Kuota penuh' : 'Kuota tersedia',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Terjadi kesalahan',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage and generate document.
     */
    public function store(Request $request)
    {
        $existingBooking = Booking::where('nim', $request->nim)
            ->where('status', '!=', 'selesai')
            ->first();

        if ($existingBooking) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nim' => 'NIM ini masih memiliki booking yang belum selesai. Silakan hubungi admin lab.']);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|string|max:255',
            'nomor' => 'required',
            'prodi' => 'required|in:Sarjana Teknik Sipil,Magister Teknik Sipil',
            'judul_penelitian' => 'required|string|max:255',
            'lab_tujuan' => 'nullable',
            'pembimbing' => 'nullable',
            'instansi' => 'nullable|string|max:255',
            'alamat_di_solo' => 'nullable|string|max:255',
            'alamat_rumah' => 'nullable|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'alat' => 'nullable|array',
            'alat.*' => 'nullable|string',
            'status' => 'nullable|in:daftar,proses,selesai',
            'kepalalab' => 'nullable',
        ]);

        // Simpan data ke database
        $booking = new Booking();
        $booking->nama = $request->nama;
        $booking->email = $request->email;
        $booking->nim = $request->nim;
        $booking->nomor = $request->nomor;
        $booking->prodi = $request->prodi;
        $booking->judul_penelitian = $request->judul_penelitian;
        $booking->lab_tujuan = $request->lab_tujuan;
        $booking->pembimbing = $request->pembimbing;
        $booking->instansi = $request->instansi;
        $booking->alamat_di_solo = $request->alamat_di_solo;
        $booking->alamat_rumah = $request->alamat_rumah;
        $booking->tanggal_mulai = $request->tanggal_mulai;
        $booking->tanggal_selesai = $request->tanggal_selesai;
        $booking->status = $request->status ?? 'daftar';
        $booking->kepala = $request->kepalalab;
        $booking->save();

        if (!empty($request->alat)) {
            foreach ($request->alat as $alatId) {
                AlatBooking::create([
                    'booking_id' => $booking->id,
                    'alat_id' => $alatId
                ]);
            }
        }

        // Generate and return the document
        return $this->generateDocument($booking);
    }

    /**
     * Generate document based on booking data.
     */
    public function generateDocument($booking)
    {
        // Path to the template file
        $templatePath = storage_path('app/private/Template Permohonan.docx');

        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Get related data
        $lab = Lab::find($booking->lab_tujuan);
        $pembimbing = Dosen::find($booking->pembimbing);
        $kepalaLab = KepalaLab::find($booking->kepala);
        $id = $booking->orderBy('id', 'desc')->first()->id + 1;

        // Get current date in Indonesian format
        setlocale(LC_TIME, 'id_ID');
        $currentDate = \Carbon\Carbon::now()->isoFormat('D MMMM Y');

        // Data to replace placeholders in the template
        $data = [
            'id' => $id,
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'email' => $booking->email,
            'nomor' => $booking->nomor,
            'prodi' => $booking->prodi,
            'univ' => $booking->instansi,
            'judul_penelitian' => $booking->judul_penelitian,
            'lab_tujuan' => $lab ? $lab->nama_lab : 'Unknown Lab',
            'dosen' => $pembimbing ? $pembimbing->nama : 'Unknown Dosen',
            'kepalalab' => $kepalaLab ? $kepalaLab->nama : 'Kepala Lab',
            'instansi' => $booking->instansi,
            'alamat_di_solo' => $booking->alamat_di_solo,
            'alamat_rumah' => $booking->alamat_rumah,
            'tanggal' => $currentDate, // Add current date
        ];

        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        // Get booked equipment
        $alatBookings = AlatBooking::where('booking_id', $booking->id)->get();
        $alatItems = [];

        foreach ($alatBookings as $alatBooking) {
            $alat = DaftarAlat::find($alatBooking->alat_id);
            if ($alat) {
                $alatItems[] = [
                    'nama' => $alat->nama_alat,
                ];
            }
        }

        if (count($alatItems) > 0) {
            $templateProcessor->cloneRow('no', count($alatItems));
            
            foreach ($alatItems as $index => $item) {
                $rowNum = $index + 1;
                $templateProcessor->setValue("no#$rowNum", $rowNum);
                $templateProcessor->setValue("nama_alat#$rowNum", $item['nama']);
            }
        } else {
            // Handle empty case
            $templateProcessor->setValue("no", "");
            $templateProcessor->setValue("nama_alat", "(Tidak ada alat yang dipinjam)");
        }

        // Save the modified document with unique filename
        $filename = 'permohonan_' . $booking->nim . '_' . date('Ymd_His') . '.docx';
        $path = storage_path('app/public/documents/' . $filename);

        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        $templateProcessor->saveAs($path);

        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }

    // Add new method for URL-based document generation
    public function generateDocumentById($id)
    {
        $booking = Booking::findOrFail($id);
        return $this->generateDocument($booking);
    }

    public function generateNota(string $id)
    {
        $asisten = Auth::user(); // Mengambil data user yang sedang login
        $asistenNama = $asisten->name;
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        $kepalaLab = KepalaLab::find($booking->kepala);

        $booking->status = 'proses';
        $booking->save();
        // Generate the surat number
        $today = now();
        $nomorSurat = $today->format('Ymd') . $booking->id;

        // Path to the nota template file
        $templatePath = public_path('NotaMahasiswa.docx');

        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat,
            'asisten' => $asistenNama
        ];

        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        // Save the modified document with unique filename
        $filename = 'Nota' . $booking->nim . '_' .  '.docx';
        $path = storage_path('app/public/documents/' . $filename);

        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        $templateProcessor->saveAs($path);

        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }

    public function generateBebasLab(string $id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        $kepalaLab = KepalaLab::find($booking->kepala);

        $booking->status = 'selesai';
        $booking->save();

        // Generate the surat number
        $today = now();
        $bulan = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        $nomorSurat = $booking->id . '/Lab. Sipil/BL/' . $bulan[$today->format('n') - 1] . '/' . $today->format('Y');
        $tanggal = $today->format('d F Y');

        // Path to the surat template file
        $templatePath = storage_path('app/private/BebasLab.docx');

        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat,
            'tanggal' =>$tanggal,
        ];

        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        // Save the modified document with unique filename
        $filename = 'Bebas Lab' . $booking->nim . '_' . '.docx';
        $path = storage_path('app/public/documents/' . $filename);

        // Make sure the directory exists
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        $templateProcessor->saveAs($path);

        // Download the document
        return response()->download($path, $filename)->deleteFileAfterSend(true);
    }

    public function generateBebasLabPDF(string $id)
    {
        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        $kepalaLab = KepalaLab::find($booking->kepala);

        $booking->status = 'selesai';
        $booking->save();

        // Generate the surat number
        $today = now();
        $bulan = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
        $nomorSurat = $booking->id . '/Lab. Sipil/BL/' . $bulan[$today->format('n') - 1] . '/' . $today->format('Y');

        // Prepare data for PDF
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat
        ];

        // Generate PDF using view template
        $pdf = PDF::loadView('template.bebasLab', $data);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // For improved image and CSS support
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'sans-serif'
        ]);

        // Generate filename
        $filename = 'BebasLab_' . $booking->nim . '.pdf';

        // Return view with print script
        return $pdf->stream($filename);
    }

    public function generateNotaPDF(string $id)
    {
        $laboran = Auth::user(); // Get logged in user
        $laboranNama = $laboran->name;

        // Find the booking by ID
        $booking = Booking::findOrFail($id);

        $kepalaLab = KepalaLab::find($booking->kepala);

        $booking->status = 'proses';
        $booking->save();

        // Generate the surat number
        $today = now();
        $nomorSurat = $today->format('Ymd') . $booking->id;

        // Prepare data for PDF
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'judul_penelitian' => $booking->judul_penelitian,
            'kepala' => $kepalaLab ? $kepalaLab->nama : 'Unknown',
            'nomorSurat' => $nomorSurat,
            'laboran' => $laboranNama
        ];

        // Generate PDF using view template
        $pdf = PDF::loadView('template.notaMhs', $data);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Set PDF options
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'sans-serif'
        ]);

        // Generate filename
        $filename = 'Nota_' . $booking->nim . '.pdf';

        // Return PDF response
        return $pdf->stream($filename);
    }
}
