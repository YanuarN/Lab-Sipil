<div class="space-y-1">
    @foreach($getRecord()->details as $detail)
        <div class="flex justify-between text-sm">
            <span class="font-medium">
                @php
                    // Jika perlu, ambil nama jenis tes dari tabel referensi
                    // Ganti dengan kode yang sesuai untuk mendapatkan nama jenis tes
                    $jenisTes = \App\Models\DaftarHarga::find($detail->jenis_tes)?->nama_tes ?? 'Jenis Tes #' . $detail->jenis_tes;
                @endphp
                {{ $jenisTes }}:
            </span>
            <span class="ml-2">{{ $detail->jumlah_pengetesan }} pengetesan</span>
        </div>
    @endforeach
</div>