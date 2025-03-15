<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Buat Booking Pengujian Eksternal</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('booking.store') }}">
                        @csrf
                        
                        <h4>Data Booking</h4>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_instansi">Nama Instansi</label>
                                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_proyek">Nama Proyek</label>
                                    <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="{{ old('nama_proyek') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal_tes">Tanggal Tes</label>
                                    <input type="date" class="form-control" id="tanggal_tes" name="tanggal_tes" value="{{ old('tanggal_tes') }}" required>
                                </div>
                            </div>
                        </div>

                        <h4>Pilih Jenis Pengujian</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="tabel-pengujian">
                                <thead>
                                    <tr>
                                        <th>Jenis Pengujian</th>
                                        <th>Harga Satuan</th>
                                        <th width="150">Jumlah</th>
                                        <th width="200">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftarHarga as $index => $item)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input pengujian-checkbox" type="checkbox" name="jenis_tes[]" value="{{ $item->id }}" id="pengujian{{ $item->id }}" data-harga="{{ $item->harga }}" data-index="{{ $index }}">
                                                <label class="form-check-label" for="pengujian{{ $item->id }}">
                                                    {{ $item->order }} ({{ $item->keterangan }})
                                                </label>
                                            </div>
                                        </td>
                                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td>
                                            <input type="number" class="form-control jumlah-input" name="jumlah_pengetesan[]" value="0" min="0" data-index="{{ $index }}" disabled>
                                        </td>
                                        <td>
                                            <span class="subtotal" data-index="{{ $index }}">Rp 0</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-right">Total</th>
                                        <th><span id="total-harga">Rp 0</span></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit Booking</button>
                            <a href="{{ route('booking.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.pengujian-checkbox');
        const jumlahInputs = document.querySelectorAll('.jumlah-input');
        const subtotals = document.querySelectorAll('.subtotal');
        const totalHarga = document.getElementById('total-harga');
        
        // Fungsi untuk memformat angka sebagai mata uang Rupiah
        function formatRupiah(angka) {
            return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        
        // Fungsi untuk menghitung subtotal dan total
        function hitungTotal() {
            let total = 0;
            
            checkboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    const harga = parseInt(checkbox.dataset.harga);
                    const jumlah = parseInt(jumlahInputs[index].value) || 0;
                    const subtotal = harga * jumlah;
                    
                    subtotals[index].textContent = formatRupiah(subtotal);
                    total += subtotal;
                } else {
                    subtotals[index].textContent = 'Rp 0';
                }
            });
            
            totalHarga.textContent = formatRupiah(total);
        }
        
        // Event listener untuk checkbox
        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                jumlahInputs[index].disabled = !this.checked;
                
                if (this.checked) {
                    jumlahInputs[index].value = 1;
                } else {
                    jumlahInputs[index].value = 0;
                }
                
                hitungTotal();
            });
        });
        
        // Event listener untuk input jumlah
        jumlahInputs.forEach((input) => {
            input.addEventListener('input', hitungTotal);
        });
    });
</script>