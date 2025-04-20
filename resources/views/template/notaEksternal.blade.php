<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rincian Biaya Penggunaan Alat dan Test Lab</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 0px;
            font-size: 10pt;
            line-height: 1.2;
        }
        
        .page {
            margin-bottom: 1px;
            position: relative;
        }
        
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .nomor {
            text-align: right;
            margin-bottom: 15px;
        }
        
        .info-section {
            margin-bottom: 15px;
        }
        
        .info-row {
            margin-bottom: 5px;
        }
        
        .info-label {
            display: inline-block;
            width: 80px;
            vertical-align: top;
        }
        
        .info-separator {
            display: inline-block;
            width: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2px;
        }
        
        th, td {
            border: 1px solid #000;
            padding: 2px 3px;
            text-align: center;
        }
        
        .col-jenis {
            width: 40%;
            text-align: left;
        }
        
        .col-jumlah {
            width: 15%;
        }
        
        .col-harga {
            width: 20%;
        }
        
        .col-subtotal {
            width: 25%;
        }
        
        .signature-block {
            text-align: right;
            width: 40%;
            float: right;
            margin-top: 10px;
            margin-bottom: 30px;
        }
        
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        
        .watermark-text {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 80pt;
            color: rgba(8, 103, 63, 0.1);
            font-weight: bold;
            z-index: -1;
        }
    </style>
</head>
<body>
    <!-- First form -->
    <div class="page">
        <div class="header">
            RINCIAN BIAYA PENGGUNAAN ALAT DAN TEST LAB.
        </div>
        <div class="nomor">Nomor: {{ $nomorSurat }}</div>
        
        <div class="info-section">
            {{-- <div class="info-row">
                <span class="info-label">NAMA</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_pemesan ?? '' }}</span>
            </div> --}}
            <div class="info-row">
                <span class="info-label">INSTANSI</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_instansi ?? '' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">PROYEK</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_proyek ?? '' }}</span>
            </div>
        </div>
        
        <table>
            <div class="watermark-text">Sementara</div>
            <thead>
                <tr>
                    <th class="col-jenis">Jenis Pembayaran</th>
                    <th class="col-jumlah">Jumlah</th>
                    <th class="col-harga">Harga Satuan</th>
                    <th class="col-subtotal">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testDetails as $detail)
                <tr>
                    <td class="col-jenis">{{ $detail['jenis_pembiayaan'] }}</td>
                    <td class="col-jumlah">{{ $detail['jumlah'] }} smpl</td>
                    <td class="col-harga">Rp {{ $detail['harga_satuan'] }}</td>
                    <td class="col-subtotal">Rp {{ $detail['subtotal'] }}</td>
                </tr>
                @endforeach
                
                @for($i = count($testDetails); $i < 2; $i++)
                <tr>
                    <td class="col-jenis">&nbsp;</td>
                    <td class="col-jumlah"></td>
                    <td class="col-harga"></td>
                    <td class="col-subtotal"></td>
                </tr>
                @endfor
                
                <tr>
                    <td colspan="3" style="text-align: center; border-left: none; border-bottom: none; border-right: none;">TOTAL</td>
                    <td class="col-subtotal">Rp {{ number_format($booking->total_biaya, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="signature-block">
            <div>Surakarta,......................................</div>
            <div style="margin-right: 116px;">Mengetahui,</div>
            <div>Kepala Laboratorium Teknik Sipil</div>
            <div style="margin-top: 30px;">Ir. Budi Setiawan, S.T, M.T.</div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Second form with watermark -->
    <div class="page">
        <div style="position: relative;">
            <div class="header">
                RINCIAN BIAYA PENGGUNAAN ALAT DAN TEST LAB.
            </div>
        </div>
        <div class="nomor">Nomor: {{ $nomorSurat }}</div>
        
        <div class="info-section">
            {{-- <div class="info-row">
                <span class="info-label">NAMA</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_pemesan ?? '' }}</span>
            </div> --}}
            <div class="info-row">
                <span class="info-label">INSTANSI</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_instansi ?? '' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">PROYEK</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_proyek ?? '' }}</span>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th class="col-jenis">Jenis Pembayaran</th>
                    <th class="col-jumlah">Jumlah</th>
                    <th class="col-harga">Harga Satuan</th>
                    <th class="col-subtotal">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testDetails as $detail)
                <tr>
                    <td class="col-jenis">{{ $detail['jenis_pembiayaan'] }}</td>
                    <td class="col-jumlah">{{ $detail['jumlah'] }} smpl</td>
                    <td class="col-harga">Rp {{ $detail['harga_satuan'] }}</td>
                    <td class="col-subtotal">Rp {{ $detail['subtotal'] }}</td>
                </tr>
                @endforeach
                
                @for($i = count($testDetails); $i < 2; $i++)
                <tr>
                    <td class="col-jenis">&nbsp;</td>
                    <td class="col-jumlah"></td>
                    <td class="col-harga"></td>
                    <td class="col-subtotal"></td>
                </tr>
                @endfor
                
                <tr>
                    <td colspan="3" style="text-align: center; border-left: none; border-bottom: none; border-right: none;">TOTAL</td>
                    <td class="col-subtotal">Rp {{ number_format($booking->total_biaya, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="signature-block">
            <div>Surakarta,......................................</div>
            <div style="margin-right: 116px;">Mengetahui,</div>
            <div style="margin-right: 40px;">Laboratorium Teknik Sipil</div>
            <div style="margin-top: 30px;">Tri Utami Murniati,S.T</div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Third form -->
    <div class="page">
        <div class="header">
            RINCIAN BIAYA PENGGUNAAN ALAT DAN TEST LAB.
        </div>
        <div class="nomor">Nomor: {{ $nomorSurat }}</div>
        
        <div class="info-section">
            {{-- <div class="info-row">
                <span class="info-label">NAMA</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_pemesan ?? '' }}</span>
            </div> --}}
            <div class="info-row">
                <span class="info-label">INSTANSI</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_instansi ?? '' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">PROYEK</span>
                <span class="info-separator">:</span>
                <span>{{ $booking->nama_proyek ?? '' }}</span>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th class="col-jenis">Jenis Pembayaran</th>
                    <th class="col-jumlah">Jumlah</th>
                    <th class="col-harga">Harga Satuan</th>
                    <th class="col-subtotal">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testDetails as $detail)
                <tr>
                    <td class="col-jenis">{{ $detail['jenis_pembiayaan'] }}</td>
                    <td class="col-jumlah">{{ $detail['jumlah'] }} smpl</td>
                    <td class="col-harga">Rp {{ $detail['harga_satuan'] }}</td>
                    <td class="col-subtotal">Rp {{ $detail['subtotal'] }}</td>
                </tr>
                @endforeach
                
                @for($i = count($testDetails); $i < 2; $i++)
                <tr>
                    <td class="col-jenis">&nbsp;</td>
                    <td class="col-jumlah"></td>
                    <td class="col-harga"></td>
                    <td class="col-subtotal"></td>
                </tr>
                @endfor
                
                <tr>
                    <td colspan="3" style="text-align: center; border-left: none; border-bottom: none; border-right: none;">TOTAL</td>
                    <td class="col-subtotal">Rp {{ number_format($booking->total_biaya, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class="signature-block">
            <div>Surakarta, {{ date('d F Y') }}</div>
            <div style="margin-right: 116px;">Mengetahui,</div>
            <div>Kepala Laboratorium Teknik Sipil</div>
            <div style="margin-top: 30px;">Ir. Budi Setiawan, S.T, M.T.</div>
        </div>
    </div>
</body>
</html>