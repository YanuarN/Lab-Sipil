<form action="{{ route('permohonan.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>
    </div>
    <div>
        <label for="nomor">Nomor wa</label>
        <input type="text" name="nomor" id="nomor" required>
    </div>
    <div>
        <label for="prodi">Program Studi:</label>
        <select name="prodi" id="prodi" required>
            <option value="Sarjana Teknik Sipil">Sarjana Teknik Sipil</option>
            <option value="Magister Teknik Sipil">Magister Teknik Sipil</option>
        </select>
    </div>
    <div>
        <label for="judul_penelitian">Judul Penelitian:</label>
        <input type="text" name="judul_penelitian" id="judul_penelitian" required>
    </div>
    <div>
        <label for="lab_tujuan">Lab Tujuan:</label>
        <select name="lab_tujuan" id="lab_tujuan" required>
            @foreach($lab as $lab)
                <option value="{{ $lab->id }}">{{ $lab->nama_lab }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="pembimbing">Pembimbing:</label>
        <select name="pembimbing" id="pembimbing" required>
            @foreach($dosen as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="penguji1">Penguji 1:</label>
        <select name="penguji1" id="penguji1" required>
            @foreach($dosen as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="penguji2">Penguji 2:</label>
        <select name="penguji2" id="penguji2" required>
            @foreach($dosen as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="instansi">Instansi:</label>
        <input type="text" name="instansi" id="instansi" required>
    </div>
    <div>
        <label for="alamat_di_solo">Alamat di Solo:</label>
        <input type="text" name="alamat_di_solo" id="alamat_di_solo" required>
    </div>
    <div>
        <label for="alamat_rumah">Alamat Rumah:</label>
        <input type="text" name="alamat_rumah" id="alamat_rumah" required>
    </div>
    <div>
        <label for="tanggal_mulai">Tanggal Mulai:</label>
        <input type="date" name="tanggal_mulai" id="tanggal_mulai" required>
    </div>
    <div>
        <label for="tanggal_selesai">Tanggal Selesai:</label>
        <input type="date" name="tanggal_selesai" id="tanggal_selesai" required>
    </div>
    <button type="submit">Submit</button>
</form>