<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Konfirmasi Pemesanan Kamar - Rich Wellness</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .booking-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .button {
            display: inline-block;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Konfirmasi Pemesanan Kamar</h1>
    </div>
    
    <div class="content">
        <p>Halo <strong>{{ $reservation->nama_tamu }}</strong>,</p>
        
        <p>Terima kasih telah melakukan pemesanan kamar di Rich Wellness. Berikut adalah detail pemesanan Anda:</p>
        
        <div class="booking-details">
            <table>
                <tr>
                    <th>Kode Booking</th>
                    <td>{{ $reservation->kode_booking }}</td>
                </tr>
                <tr>
                    <th>Nama Tamu</th>
                    <td>{{ $reservation->nama_tamu }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $reservation->email }}</td>
                </tr>
                <tr>
                    <th>No. HP</th>
                    <td>{{ $reservation->no_hp }}</td>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <td>{{ $reservation->tipe_kamar }}</td>
                </tr>
                <tr>
                    <th>Jumlah Kamar</th>
                    <td>{{ $reservation->jumlah_kamar }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check-in</th>
                    <td>{{ date('d F Y', strtotime($reservation->tgl_check_in)) }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check-out</th>
                    <td>{{ date('d F Y', strtotime($reservation->tgl_check_out)) }}</td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td>Rp {{ number_format($reservation->harga, 0, ',', '.') }}</td>
                </tr>
                @if($reservation->diskon > 0)
                <tr>
                    <th>Diskon</th>
                    <td>Rp {{ number_format($reservation->diskon, 0, ',', '.') }}</td>
                </tr>
                @endif
                <tr>
                    <th>Total Bayar</th>
                    <td>Rp {{ number_format($reservation->total_bayar, 0, ',', '.') }}</td>
                </tr>
            </table>
        </div>
        
        <p>Silakan simpan kode booking Anda: <strong>{{ $reservation->kode_booking }}</strong> untuk keperluan check-in.</p>
        
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi tim dukungan kami.</p>
        
        <p>Terima kasih telah memilih Rich Wellness. Kami berharap Anda menikmati kunjungan Anda!</p>
        
        <p>Salam hangat,<br>Tim Rich Wellness</p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} Rich Wellness. All rights reserved.</p>
    </div>
</body>
</html>
