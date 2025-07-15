<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Selamat Datang di Rich Wellness</title>
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
        .button {
            display: inline-block;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Selamat Datang di Rich Wellness</h1>
    </div>
    
    <div class="content">
        <p>Halo <strong>{{ $user->name }}</strong>,</p>
        
        <p>Terima kasih telah mendaftar di Rich Wellness. Akun Anda telah berhasil dibuat.</p>
        
        <p>Berikut adalah detail akun Anda:</p>
        <ul>
            <li>Nama: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
        </ul>
        
        <p>Anda sekarang dapat login ke akun Anda dan menikmati semua layanan yang kami tawarkan.</p>
        
        <p>
            <a href="{{ url('/login') }}" class="button">Login ke Akun Anda</a>
        </p>
        
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi tim dukungan kami.</p>
        
        <p>Salam hangat,<br>Tim Rich Wellness</p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} Rich Wellness. All rights reserved.</p>
        <p>Jika Anda tidak mendaftar untuk akun ini, silakan abaikan email ini.</p>
    </div>
</body>
</html>
