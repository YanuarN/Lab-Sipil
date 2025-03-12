<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Lab;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpWord\TemplateProcessor;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab = Lab::all();
        $dosen = Dosen::all();
        return view('page.form', compact('lab', 'dosen'));
    }

    /**
     * Store a newly created resource in storage and generate document.
     */
    public function store(Request $request)
    {
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
            'penguji1' => 'nullable',
            'penguji2' => 'nullable',
            'instansi' => 'nullable|string|max:255',
            'alamat_di_solo' => 'nullable|string|max:255',
            'alamat_rumah' => 'nullable|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'nullable|in:daftar,proses,selesai',
        ]);
    
        // Simpan data ke database
        $booking = new booking();
        $booking->nama = $request->nama;
        $booking->email = $request->email;
        $booking->nim = $request->nim;
        $booking->nomor = $request->nomor;
        $booking->prodi = $request->prodi;
        $booking->judul_penelitian = $request->judul_penelitian;
        $booking->lab_tujuan = $request->lab_tujuan;
        $booking->pembimbing = $request->pembimbing;
        $booking->penguji1 = $request->penguji1;
        $booking->penguji2 = $request->penguji2;
        $booking->instansi = $request->instansi;
        $booking->alamat_di_solo = $request->alamat_di_solo;
        $booking->alamat_rumah = $request->alamat_rumah;
        $booking->tanggal_mulai = $request->tanggal_mulai;
        $booking->tanggal_selesai = $request->tanggal_selesai;
        $booking->status = $request->status ?? 'daftar'; 
        $booking->save();
    

        // Generate and return the document
        return redirect('.index')-> with($this->generateDocument($booking)); 
    }

    /**
     * Generate document based on booking data.
     */
    public function generateDocument($booking)
    {
        // Path to the template file
        $templatePath = public_path('Template A.docx');

        // Create a new TemplateProcessor instance
        $templateProcessor = new TemplateProcessor($templatePath);

        // Get related data
        $lab = Lab::find($booking->lab_tujuan);
        $pembimbing = Dosen::find($booking->pembimbing);

        // Data to replace placeholders in the template
        $data = [
            'nama' => $booking->nama,
            'nim' => $booking->nim,
            'email' => $booking->email,
            'nomor' => $booking->nomor,
            'prodi' => $booking->prodi,
            'univ' => $booking->instansi, // Assuming university is stored in instansi field
            'judul_penelitian' => $booking->judul_penelitian,
            'lab_tujuan' => $lab ? $lab->nama_lab : 'Unknown Lab',
            'dosen' => $pembimbing ? $pembimbing->nama : 'Unknown Dosen',
            'instansi' => $booking->instansi,
            'alamat_di_solo' => $booking->alamat_di_solo,
            'alamat_rumah' => $booking->alamat_rumah,
        ];

        // Replace placeholders with actual data
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}