<div class="space-y-1">
    @foreach($getRecord()->details as $detail)
        <div class=" text-xs">
            <span class="font-thin">
                @php
                    // Jika perlu, ambil nama jenis tes dari tabel referensi
                    // Ganti dengan kode yang sesuai untuk mendapatkan nama jenis tes
                    $jenisTes = \App\Models\DaftarHarga::find($detail->jenis_tes)?->order ?? 'Jenis Tes #' . $detail->jenis_tes;
                @endphp
                {{ $jenisTes }}:
            </span>
            <span class="ml-1">{{ $detail->jumlah_pengetesan }}</span>
        </div>
    @endforeach
</div>