<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: "Arial", serif;
            margin: 20px;
            font-size: 10pt;
            line-height: 1.3;
        }

        .container {
            margin-bottom: 40px;
        }

        h2 {
            text-align: center;
            font-size: 13pt;
            margin-bottom: 15px;
        }

        .nomor {
            text-align: right;
            margin-bottom: 0px;
            font-weight: bold;
        }

        .info-section {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .info-section strong {
            display: inline-block;
            width: 90px;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }

        .total-row td {
            font-weight: bold;
            border-top: 2px solid #000;
        }

        .signature-section {
            text-align: right;
            width: 40%;
            float: right;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .notes {
            margin-top: 20px;
            font-size: 10pt;
            line-height: 1.2;
        }

        .watermark {
            position: absolute;
            opacity: 0.1;
            font-size: 80pt;
            transform: rotate(-45deg);
            z-index: -1;
            left: 30%;
            top: 40%;
        }

        .kegiatan-page {
            position: relative;
            width: 100%;
            margin-top: 5px;
            box-sizing: border-box;
            page-break-before: always;
            /* Forces a page break before this element */
        }

        .kegiatan-header {
            text-align: center;
            position: relative;
            height: 80px;
            margin-bottom: 20px;
        }

        .logo-left {
            position: absolute;
            left: 50px;
            top: 0;
            width: 60px;
            height: 60px;
        }

        .logo-right {
            position: absolute;
            right: 50px;
            top: 0;
            width: 60px;
            height: 60px;
        }

        .kegiatan-title {
            font-weight: bold;
            font-size: 11pt;
            padding-top: 5px;
        }

        .kegiatan-subtitle {
            font-size: 11pt;
            font-weight: bold;
        }

        .kegiatan-info-section {
            margin-bottom: 20px;
        }

        .kegiatan-info-row {
            margin-bottom: 5px;
        }

        .kegiatan-info-label {
            display: inline-block;
            width: 90px;
            font-weight: bold;
        }

        .kegiatan-info-separator {
            display: inline-block;
            width: 10px;
        }

        .kegiatan-table {
            width: 100%;
            border-collapse: collapse;
        }

        .kegiatan-table th,
        .kegiatan-table td {
            border: 1px solid #000;
            padding: 2px;
            text-align: center;
            font-size: 10pt;
            font-weight: normal;
        }

        .kegiatan-table th {
            background-color: #ffffff;
        }

        .col-no {
            width: 5%;
        }

        .col-kegiatan {
            width: 50%;
        }

        .col-tanggal {
            width: 9%;
        }

        .col-jam {
            width: 9%;
        }

        .col-hms {
            width: 9%;
        }

        .col-lab {
            width: 9%;
        }

        .page-control {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Bagian Pertama -->
    <div class="container">
        <h2>RINCIAN BIAYA PENELITIAN</h2>
        <div class="nomor">Nomor: {{ $nomorSurat }}</div>

        <table style="border: none; margin-bottom: 5px; padding: 0;">
            <tr>
                <td style="border: none; width: 90px; font-weight: bold; padding: 0px;">NAMA</td>
                <td style="border: none; width: 10px; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nama }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">NIM</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nim }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">JUDUL</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $judul_penelitian }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">SAMPEL</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">40</td>
            </tr>
        </table>

        <table>
            <thead>
                <tr>
                    <th style="width: 45%; text-align: center">Jenis Pembiayaan</th>
                    <th style="width: 15%; text-align: center">Jumlah</th>
                    <th style="width: 20%; text-align: center">Harga Satuan</th>
                    <th style="width: 20%; text-align: center">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sewa Alat Laboratorium</td>
                    <td>1 Paket</td>
                    <td>Rp 250.000,00</td>
                    <td>Rp 250.000,00</td>
                </tr>
                <tr>
                    <td>Tambahan Sewa Alat</td>
                    <td>0 Smpi</td>
                    <td>Rp 4.000,00</td>
                    <td>Rp -</td>
                </tr>
                <tr>
                    <td>Operasional Laboratorium</td>
                    <td>1 Paket</td>
                    <td>Rp 150.000,00</td>
                    <td>Rp 150.000,00</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">TOTAL</td>
                    <td>Rp 400.000,00</td>
                </tr>
            </tbody>
        </table>

        <div class="signature-section">
            <div style="margin-right: 52px">Surakarta, {{ date('d F Y') }}</div>
            <div style="margin-right: 116px;">Mengetahui,</div>
            <div>Kepala Laboratorium Teknik Sipil</div>
            <div style="margin-top: 50px; margin-right: 30">{{ $kepala }}</div>
        </div>

        <div class="notes">
            <strong>Laboran</strong>: {{ $laboran }}<br><br>
            Catatan:<br>
            1. Masa Berlaku Praktikum: 3 Bulan Setelah Pendaftaran Masuk Lab.<br>
            2. Lebih dari 3 Bulan harus ada pemberitahuan sebelumnya<br>
            3. Penelitian Dimulai Dari Jam 08:00 - 14:00 WIB
        </div>
    </div>

    <!-- Bagian Kedua dengan watermark -->
    <div class="container" style="position: relative;">
        <h2>RINCIAN BIAYA PENELITIAN</h2>
        <div class="nomor">Nomor: {{ $nomorSurat }}</div>

        <table style="border: none; margin-bottom: 5px; padding: 0;">
            <tr>
                <td style="border: none; width: 90px; font-weight: bold; padding: 0px;">NAMA</td>
                <td style="border: none; width: 10px; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nama }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">NIM</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nim }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">JUDUL</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $judul_penelitian }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">SAMPEL</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">40</td>
            </tr>
        </table>

        <table>
            <thead>
                <tr>
                    <th style="width: 45%; text-align: center">Jenis Pembiayaan</th>
                    <th style="width: 15%; text-align: center">Jumlah</th>
                    <th style="width: 20%; text-align: center">Harga Satuan</th>
                    <th style="width: 20%; text-align: center">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sewa Alat Laboratorium</td>
                    <td>1 Paket</td>
                    <td>Rp 250.000,00</td>
                    <td>Rp 250.000,00</td>
                </tr>
                <tr>
                    <td>Operasional Laboratorium</td>
                    <td>1 Paket</td>
                    <td>Rp 150.000,00</td>
                    <td>Rp 150.000,00</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3">TOTAL</td>
                    <td>Rp 400.000,00</td>
                </tr>
            </tbody>
        </table>

        <div class="signature-section">
            <div style="margin-right: 52px">Surakarta, {{ date('d F Y') }}</div>
            <div style="margin-right: 116px;">Mengetahui,</div>
            <div>Kepala Laboratorium Teknik Sipil</div>
            <div style="margin-top: 50px; margin-right: 30">{{ $kepala }}</div>
        </div>
    </div>

    <div class="kegiatan-page">
        <!-- Header with logos and title -->
        <div class="kegiatan-header">
            <img class="logo-left"
                src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/UMSBlack.png'))) }}"
                alt="Logo UMS">
            <div>
                <div class="kegiatan-title">LEMBAR KEGIATAN MAHA SISWA PENELITIAN</div>
                <div class="kegiatan-subtitle">LABORATORIUM TEKNIK SIPIL</div>
                <div class="kegiatan-subtitle">UNIVERSITAS MUHAMMADIYAH SURAKARTA</div>
            </div>
            <img class="logo-right"
                src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/UMSBlack.png'))) }}"
                alt="Logo Lab">
        </div>

        <!-- Info section -->
        <table style="border: none; margin-bottom: 5px; padding: 0;">
            <tr>
                <td style="border: none; width: 90px; font-weight: bold; padding: 0px;">NAMA</td>
                <td style="border: none; width: 10px; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nama }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">NIM</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $nim }}</td>
            </tr>
            <tr>
                <td style="border: none; font-weight: bold; padding: 0px;">JUDUL</td>
                <td style="border: none; padding: 0px;">:</td>
                <td style="border: none; padding: 0px;">{{ $judul_penelitian }}</td>
            </tr>
        </table>

        <!-- Activity table -->
        <table class="kegiatan-table">
            <thead>
                <tr>
                    <th class="col-no" rowspan="2">No.</th>
                    <th class="col-kegiatan" rowspan="2">KEGIATAN</th>
                    <th colspan="2">MULAI</th>
                    <th colspan="2">SELESAI</th>
                    <th colspan="2">PARAF</th>
                </tr>
                <tr>
                    <th class="col-tanggal">Tanggal</th>
                    <th class="col-jam">Jam</th>
                    <th class="col-tanggal">Tanggal</th>
                    <th class="col-jam">Jam</th>
                    <th class="col-hms">MHS</th>
                    <th class="col-lab">LAB</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 32; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor
            </tbody>
        </table>

</body>

</html>
