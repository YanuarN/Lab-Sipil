<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Surat Keterangan Bebas Lab</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page {
            size: A4;
            margin: 1mm;
        }
        
        body {
            font-family: "Times New Roman", serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 0;
            padding: 10mm 12mm;
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
        }
        .header-line {
            border-bottom: 3px solid black;
            margin-bottom: 20px;
        }

        /* Konten Surat */
        .document-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            font-size: 14pt;
     
        }

        .document-number {
            text-align: center;
            margin-bottom: 8mm;
        }

        .content {
            margin-bottom: 6mm;
            text-align: justify;
        }

        /* Tabel Data */
        .data-table {
            width: 100%;
            margin: 6mm 0;
            border-collapse: collapse;
        }

        .data-table td {
            padding: 1mm 0;
            vertical-align: top;
        }

        .data-table td:first-child {
            width: 25mm;
        }

        /* Tanda Tangan */
        .signature {
            margin-top: 20mm;
            margin-right: 10mm;
            text-align: right;
        }

        .signature-name {
            margin-top: 15mm;
            font-weight: bold;
            text-decoration: underline;
        }

        .page-break {
            page-break-after: always;
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
                Website: https://ums.ac.id | E-mail: ums@ums.ac.id
            </div>
        </div>
    </div>
    <div class="header-line"></div>

    <!-- Konten Surat -->
    <div>
        <div class="document-title">SURAT KETERANGAN BEBAS LAB</div>
        <div class="document-number">No : <span>{{ $nomorSurat }}</span></div>

        <div class="content">
            <p><em>Assalamu’alaikum Wr.Wb</em></p>
            
            <p>Kepala Laboratorium Teknik Sipil Universitas Muhammadiyah Surakarta, menerangkan bahwa :</p>

            <table class="data-table">
                <tr>
                    <td>Nama</td>
                    <td>: {{ $nama }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: {{ $nim }}</td>
                </tr>
                <tr>
                    <td>Judul TA</td>
                    <td>: {{ $judul_penelitian }}</td>
                </tr>
            </table>

            <p>Telah menyelesaikan segala sesuatu yang berhubungan dengan Lab. Teknik Sipil, Fakultas Teknik Universitas Muhammadiyah Surakarta, sehingga <strong>DINYATAKAN BEBAS</strong> dari tanggungan/urusan Laboratorium. Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

            <p><em>Wassalamu’alaikum Wr.Wb</em></p>
        </div>

        <div class="signature">
            <div>Surakarta, {{ date('d F Y') }}</div>
            <div>Kepala Laboratorium</div>
            <div class="signature-name">{{ $kepala }}</div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="page">
        <!-- Salinan konten yang sama persis -->
        <div class="header">
            <div class="logo-container">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/logoUMS.png'))) }}" alt="UMS Logo">
            </div>
            
            <div class="university-info">
                <div class="university-name">UNIVERSITAS MUHAMMADIYAH SURAKARTA</div>
                <div class="lab-name">Laboratorium Teknik Sipil</div>
                <div class="address">
                    Jl. A. Yani No:157, Pabelan, Kartasura, Sukoharja, Jawa Tengah 57169<br>
                    Telp. +62 27717417 psw. 3219<br>
                    Website: https://ums.ac.id | E-mail: ums@ums.ac.id
                </div>
            </div>
        </div>
        <div class="header-line"></div>

        <div>
            <div class="document-title">SURAT KETERANGAN BEBAS LAB</div>
            <div class="document-number">No : <span>{{ $nomorSurat }}</span></div>

            <div class="content">
                <p><em>Assalamu’alaikum Wr.Wb</em></p>
                
                <p>Kepala Laboratorium Teknik Sipil Universitas Muhammadiyah Surakarta, menerangkan bahwa :</p>

                <table class="data-table">
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $nama }}</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: {{ $nim }}</td>
                    </tr>
                    <tr>
                        <td>Judul TA</td>
                        <td>: {{ $judul_penelitian }}</td>
                    </tr>
                </table>

                <p>Telah menyelesaikan segala sesuatu yang berhubungan dengan Lab. Teknik Sipil, Fakultas Teknik Universitas Muhammadiyah Surakarta, sehingga <strong>DINYATAKAN BEBAS</strong> dari tanggungan/urusan Laboratorium. Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

                <p><em>Wassalamu’alaikum Wr.Wb</em></p>
            </div>

            <div class="signature">
                <div>Surakarta, {{ date('d F Y') }}</div>
                <div>Kepala Laboratorium</div>
                <div class="signature-name">{{ $kepala }}</div>
            </div>
        </div>
    </div>
</body>
</html>