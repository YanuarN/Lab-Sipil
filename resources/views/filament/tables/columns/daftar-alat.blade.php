<div class="space-y-1">
    @foreach($getRecord()->alatBookings as $alatBooking)
        <div class="flex justify-between text-xs">
            <span class="font-normal">
                @php
                    $namaAlat = $alatBooking->alat ? $alatBooking->alat->nama_alat : 'Alat #' . $alatBooking->alat_id;
                @endphp
                {{ $namaAlat }}
            </span>
        </div>
    @endforeach
</div>