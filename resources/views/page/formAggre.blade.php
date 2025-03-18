@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('permohonan-bahan.store') }}" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required value="{{ old('email') }}">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>Nama Lengkap:</label>
    <input type="text" name="nama" required value="{{ old('nama') }}">
    @error('nama')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>NIM:</label>
    <input type="text" name="nim" required value="{{ old('nim') }}">
    @error('nim')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>Judul Penelitian:</label>
    <input type="text" name="judul_penelitian" required value="{{ old('judul_penelitian') }}">
    @error('judul_penelitian')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>Instansi yang Dituju:</label>
    <input type="text" name="instansi_tujuan" required value="{{ old('instansi_tujuan') }}">
    @error('instansi_tujuan')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>Alamat Instansi:</label>
    <input type="text" name="alamat_instansi" required value="{{ old('alamat_instansi') }}">
    @error('alamat_instansi')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    <label>Anggota:</label>
    <div id="anggota-container">
        @if(old('anggota'))
            @foreach(old('anggota') as $index => $anggota)
                <div class="anggota-item">
                    <input type="text" name="anggota[{{ $index }}][nama]" value="{{ $anggota['nama'] ?? '' }}" placeholder="Nama Anggota">
                    <input type="text" name="anggota[{{ $index }}][nim]" value="{{ $anggota['nim'] ?? '' }}" placeholder="NIM Anggota">
                    <button type="button" class="hapus-anggota">Hapus</button>
                </div>
            @endforeach
        @else
            <div class="anggota-item">
                <input type="text" name="anggota[0][nama]" placeholder="Nama Anggota">
                <input type="text" name="anggota[0][nim]" placeholder="NIM Anggota">
                <button type="button" class="hapus-anggota">Hapus</button>
            </div>
        @endif
    </div>
    <button type="button" id="tambah-anggota">Tambah Anggota</button>

    <label>Material:</label>
    <div id="nama-material-container">
        @if(old('nama_material'))
            @foreach(old('nama_material') as $index => $material)
                <div class="material-item">
                    <input type="text" name="nama_material[{{ $index }}][nama]" value="{{ $material['nama'] ?? '' }}" placeholder="Nama Material" required>
                    <input type="text" name="nama_material[{{ $index }}][jumlah]" value="{{ $material['jumlah'] ?? '' }}" placeholder="Jumlah" required>
                    <button type="button" class="hapus-material">Hapus</button>
                </div>
            @endforeach
        @else
            <div class="material-item">
                <input type="text" name="nama_material[0][nama]" placeholder="Nama Material" required>
                <input type="text" name="nama_material[0][jumlah]" placeholder="Jumlah" required>
                <button type="button" class="hapus-material">Hapus</button>
            </div>
        @endif
    </div>
    <button type="button" id="tambah-material">Tambah Material</button>
    
    <button type="submit">Submit</button>
</form>

<script>
// Script untuk menambah anggota
document.getElementById('tambah-anggota').addEventListener('click', function() {
    let container = document.getElementById('anggota-container');
    let index = container.children.length;
    let div = document.createElement('div');
    div.classList.add('anggota-item');
    div.innerHTML = `<input type="text" name="anggota[${index}][nama]" placeholder="Nama Anggota">
                     <input type="text" name="anggota[${index}][nim]" placeholder="NIM Anggota">
                     <button type="button" class="hapus-anggota">Hapus</button>`;
    container.appendChild(div);
    
    // Tambahkan event listener untuk tombol hapus
    addDeleteListeners();
});

// Script untuk menambah material
document.getElementById('tambah-material').addEventListener('click', function() {
    let container = document.getElementById('nama-material-container');
    let index = container.children.length;
    let div = document.createElement('div');
    div.classList.add('material-item');
    div.innerHTML = `<input type="text" name="nama_material[${index}][nama]" placeholder="Nama Material" required>
                     <input type="text" name="nama_material[${index}][jumlah]" placeholder="Jumlah" required>
                     <button type="button" class="hapus-material">Hapus</button>`;
    container.appendChild(div);
    
    // Tambahkan event listener untuk tombol hapus
    addDeleteListeners();
});

// Fungsi untuk menambahkan event listener tombol hapus
function addDeleteListeners() {
    // Event listener untuk hapus anggota
    document.querySelectorAll('.hapus-anggota').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            reindexInputs('anggota-container', 'anggota');
        });
    });
    
    // Event listener untuk hapus material
    document.querySelectorAll('.hapus-material').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            reindexInputs('nama-material-container', 'nama_material');
        });
    });
}

// Fungsi untuk reindex input setelah penghapusan
function reindexInputs(containerId, fieldName) {
    const container = document.getElementById(containerId);
    const items = container.children;
    
    for (let i = 0; i < items.length; i++) {
        const inputs = items[i].querySelectorAll('input');
        inputs.forEach(input => {
            const currentName = input.getAttribute('name');
            const newName = currentName.replace(/\[\d+\]/, `[${i}]`);
            input.setAttribute('name', newName);
        });
    }
}

// Panggil fungsi untuk menambahkan event listener saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    addDeleteListeners();
});
</script>