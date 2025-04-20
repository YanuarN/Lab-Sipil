<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Permohonan Material</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page {
            size: A4;
            margin: 5mm 15mm;
        }
        
        body {
            font-family: "Times New Roman", serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 0;
        }

        /* Header */
        .header {
            padding-bottom: 4mm;
            margin-bottom: 8mm;
        }

        .logo-container {
            float: left;
            width: 45mm;
            margin-right: 10mm;
        }

        .logo-container img {
            width: 50mm;
            height: 30mm;
        }

        .university-info {
            overflow: hidden;
        }

        .university-name {
            font-weight: bold;
            font-size: 14pt;
            text-transform: uppercase;
        }

        .lab-name {
            font-weight: bold;
            font-size: 12pt;
            margin-bottom: 3mm;
        }

        .address {
            font-weight: normal;
            font-size: 10pt;
            line-height: 1.3;
            opacity: 50%;
        }

        /* Metadata Surat */
        .surat-meta {
            margin-top: 2mm;
        }

        /* Tabel */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin:  0;
        }

        .custom-table td, .custom-table th {
            border: 1px solid black;
            padding: 0mm;
            text-align: center;
        }

        .custom-table .nim-column {
            width: 25%;
        }

        /* Signature Section */
        .signature-box {
            margin-top: 2mm;
            float: right;
            text-align: center;
        }

        .stamp-placeholder {
            margin-top: 20mm;
        }
    </style>
</head>
<body>
    <!-- Kop Surat -->
    <div class="header">
        <div class="logo-container">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/logoUMS.png'))) }}" alt="UMS Logo">
        </div>
        
        <div class="university-info">
            <div class="university-name">UNIVERSITAS MUHAMMADIYAH SURAKARTA</div>
            <div class="lab-name">Laboratorium Teknik Sipil 
            <div class="address">
                Jl. A. Yani No:157, Pabelan, Kartasura, Sukoharja, Jawa Tengah 57169<br>
                Telp. +62 27717417 psw. 3219<br>
                Website: <span style="color: lightskyblue;">https://ums.ac.id</span> | E-mail: ums@ums.ac.id
            </div>
        </div>
    </div>

    <!-- Metadata Surat -->
    <div class="surat-meta">
        <table style="width: 100%">
            <tr>
                <td>No</td>
                <td>: {{$no_surat}}</td>
            </tr>
            <tr>
                <td>Hal</td>
                <td>: Permohonan Material</td>
            </tr>
            <tr>
                <td>Lamp</td>
                <td colspan="3">: 1 Lembar</td>
            </tr>
        </table>
    </div>

    <!-- Isi Surat -->
    <div class="content">
        <p>Kepada Yth.<br>
        Plant Manager<br>
        {{$instansi_tujuan}}<br>
        {{$alamat_instansi}}</p>

        <p>Assalamualaikum Wr. Wb. <br>
        Ba'da salam dan bahagia, dengan ini kami memberitahukan bahwa untuk menunjang kegiatan mahasiswa Fakultas Teknik Universitas Muhammadiyah Surakarta untuk kepentingan Penelitian Tugas Akhir yang berjudul <strong>"{{$judul_penelitian}}"</strong>. Maka melalui surat ini kami memohon ijin untuk meminta material agregat pada instansi/kantor/lokasi yang Bapak/Ibu pimpin.</p>
        <p>Permohonan peminjaman agregat dengan spesifikasi sebagai berikut:</p>

        <table class="custom-table">
            <tr>
                <th style="width: 5%;">No</th>
                <th>Nama Material</th>
                <th>Jumlah</th>
            </tr>
            @forelse($material_list as $material)
            <tr>
                <td>{{ $material['no'] }}</td>
                <td>{{ $material['nama'] }}</td>
                <td>{{ $material['jumlah'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Tidak ada material yang diminta</td>
            </tr>
            @endforelse
        </table>

        <p>Adapun mahasiswa yang mengajukan permohonan ini adalah sebagai berikut:</p>

        <table class="custom-table">
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 40%">Nama Mahasiswa</th>
                <th style="width: 15%">Prodi</th>
                <th class="nim-column">NIM</th>
            </tr>
            @forelse($anggota_list as $anggota)
            <tr>
                <td>{{ $anggota['no'] }}</td>
                <td>{{ $anggota['nama'] }}</td>
                <td>Teknik Sipil</td>
                <td>{{ $anggota['nim'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Tidak ada anggota</td>
            </tr>
            @endforelse
        </table>

        <p>Demikian permohonan kami, atas perhatian dan kerjasamanya diucapkan terima kasih.<br>
        Wassalamualaikum Wr.Wb.</p>

        <div class="signature-box">
            <div>Surakarta, {{$tanggal}}</div>
            <div class="stamp-placeholder">
                {{ $laboran }}
            </div>
        </div>
    </div>
</body>
</html>