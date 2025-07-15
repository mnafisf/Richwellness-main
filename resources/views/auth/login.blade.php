<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Rich Wellness</title>
    <!-- Logo -->
    <link href="assets/homepage/img/favicon.png" rel="icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/login-register/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/login-register/css/style.css">
    <style>
        :root {
            --primary-color: #c8a97e;
            --secondary-color: #f8f6f0;
            --accent-color: #a17d46;
            --text-color: #4a4a4a;
            --shadow-color: rgba(0, 0, 0, 0.08);
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f6f0 0%, #e9e5dc 100%);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }
        
        .logo-container {
            text-align: center;
            padding: 15px 0;
            position: relative;
        }
        
        .logo-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--primary-color), transparent);
        }
        
        .logo-container img {
            max-height: 60px;
            width: auto;
            transition: all 0.3s ease;
        }
        
        .logo-container img:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.1));
        }
        
        .main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            min-height: calc(100vh - 100px);
        }
        
        .auth-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            width: 100%;
            max-width: 950px;
            display: flex;
            box-shadow: 0 15px 35px var(--shadow-color);
            transition: all 0.4s ease;
            border: 1px solid rgba(200, 169, 126, 0.1);
            position: relative;
        }
        
        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(to right, var(--accent-color), var(--primary-color));
            z-index: 1;
        }
        
        .auth-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 45px rgba(161, 125, 70, 0.18);
        }
        
        .form-side {
            flex: 1;
            padding: 40px 30px;
            background-color: #fff;
            position: relative;
        }
        
        .form-side::after {
            content: '';
            position: absolute;
            top: 40px;
            right: 0;
            width: 1px;
            height: calc(100% - 80px);
            background: linear-gradient(to bottom, transparent, var(--primary-color), transparent);
        }
        
        .image-side {
            flex: 1;
            background-image: url('{{ asset('assets/homepage/img/hero-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .image-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(200, 169, 126, 0.8) 0%, rgba(80, 60, 40, 0.9) 100%);
            backdrop-filter: blur(2px);
        }
        
        .image-content {
            position: relative;
            color: white;
            text-align: center;
            padding: 0 30px;
            z-index: 1;
        }
        
        .image-content::before {
            content: '';
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .image-content::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .image-content h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .image-content p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            line-height: 1.6;
            font-weight: 300;
        }
        
        .form-title {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            font-weight: 600;
            text-align: center;
            position: relative;
            letter-spacing: 0.5px;
        }
        
        .form-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-control {
            height: 50px;
            border-radius: 8px;
            padding-left: 45px;
            font-size: 14px;
            border: 1px solid #e5e0d5;
            background-color: #fdfcfa;
            transition: all 0.3s ease;
            color: #5a5245;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(200, 169, 126, 0.2);
            background-color: #fff;
        }
        
        .form-control::placeholder {
            color: #aca395;
            font-weight: 300;
        }
        
        .form-group i {
            position: absolute;
            left: 15px;
            top: 16px;
            color: var(--primary-color);
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-group:focus-within i {
            color: var(--accent-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 20px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 8px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            text-transform: uppercase;
            font-size: 14px;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
            z-index: -1;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(161, 125, 70, 0.3);
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-google {
            background-color: white;
            color: #5a5245;
            border: 1px solid #e5e0d5;
            padding: 12px 20px;
            font-weight: 500;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-google::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, #4285F4, #EA4335, #FBBC05, #34A853);
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: center;
        }
        
        .btn-google:hover {
            background-color: #fdfcfa;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
        }
        
        .btn-google:hover::after {
            transform: scaleX(1);
        }
        
        .btn-google img {
            height: 16px;
            margin-right: 10px;
        }
        
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 25px 0;
            position: relative;
        }
        
        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e0d5;
        }
        
        .separator span {
            padding: 0 15px;
            color: #a79d8c;
            font-size: 13px;
            font-weight: 300;
            position: relative;
            background: #fff;
        }
        
        .separator span::before,
        .separator span::after {
            content: '♦';
            position: absolute;
            font-size: 8px;
            color: var(--primary-color);
        }
        
        .separator span::before {
            left: 0;
        }
        
        .separator span::after {
            right: 0;
        }
        
        .form-check-label {
            font-size: 13px;
            color: #7a7267;
            margin-left: 5px;
            font-weight: 300;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .invalid-feedback {
            display: block;
            margin-top: 5px;
            font-size: 12px;
            color: #c25146;
        }
        
        .footer-link {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #7a7267;
            font-weight: 300;
        }
        
        .footer-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .footer-link a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: var(--primary-color);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .footer-link a:hover {
            color: var(--accent-color);
        }
        
        .footer-link a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        /* Tablet Styles */
        @media (max-width: 991px) {
            .auth-card {
                max-width: 700px;
            }
            
            .form-side {
                padding: 35px 25px;
            }
            
            .image-side {
                min-height: 450px;
            }
            
            .image-content h2 {
                font-size: 2.2rem;
            }
            
            .image-content p {
                font-size: 1rem;
            }
            
            .form-title {
                font-size: 1.8rem;
            }
        }
        
        /* Mobile Styles */
        @media (max-width: 768px) {
            .logo-container {
                padding: 10px 0;
            }
            
            .logo-container img {
                max-height: 50px;
            }
            
            .main {
                padding: 10px;
                min-height: calc(100vh - 80px);
            }
            
            .auth-card {
                flex-direction: column;
                max-width: 100%;
                margin: 0 10px;
            }
            
            .auth-card:hover {
                transform: none;
            }
            
            .image-side {
                min-height: 200px;
                order: -1;
            }
            
            .image-content {
                padding: 0 20px;
            }
            
            .image-content h2 {
                font-size: 1.8rem;
                margin-bottom: 10px;
            }
            
            .image-content p {
                font-size: 0.9rem;
                margin-bottom: 15px;
                line-height: 1.5;
            }
            
            .image-content::before,
            .image-content::after {
                display: none;
            }
            
            .form-side {
                padding: 30px 20px;
            }
            
            .form-side::after {
                display: none;
            }
            
            .form-title {
                font-size: 1.6rem;
                margin-bottom: 20px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-control {
                height: 45px;
                font-size: 14px;
                padding-left: 40px;
            }
            
            .form-group i {
                left: 12px;
                top: 14px;
                font-size: 15px;
            }
            
            .btn-primary,
            .btn-google {
                padding: 10px 15px;
                font-size: 13px;
            }
            
            .btn-google img {
                height: 14px;
                margin-right: 8px;
            }
            
            .separator {
                margin: 20px 0;
            }
            
            .separator span {
                font-size: 12px;
                padding: 0 10px;
            }
            
            .footer-link {
                font-size: 12px;
                margin-top: 15px;
            }
        }
        
        /* Small Mobile Styles */
        @media (max-width: 480px) {
            .main {
                padding: 5px;
            }
            
            .auth-card {
                margin: 0 5px;
                border-radius: 10px;
            }
            
            .form-side {
                padding: 25px 15px;
            }
            
            .image-side {
                min-height: 150px;
            }
            
            .image-content h2 {
                font-size: 1.5rem;
            }
            
            .image-content p {
                font-size: 0.85rem;
            }
            
            .form-title {
                font-size: 1.4rem;
            }
            
            .form-control {
                height: 42px;
                font-size: 13px;
            }
            
            .btn-primary,
            .btn-google {
                padding: 8px 12px;
                font-size: 12px;
            }
            
            .btn-google img {
                height: 12px;
                margin-right: 6px;
            }
        }
        
        /* Extra Small Mobile Styles */
        @media (max-width: 360px) {
            .form-side {
                padding: 20px 12px;
            }
            
            .image-side {
                min-height: 120px;
            }
            
            .image-content h2 {
                font-size: 1.3rem;
            }
            
            .image-content p {
                font-size: 0.8rem;
            }
            
            .form-title {
                font-size: 1.3rem;
            }
            
            .form-control {
                height: 40px;
                font-size: 12px;
            }
            
            .btn-primary,
            .btn-google {
                padding: 7px 10px;
                font-size: 11px;
            }
        }
        
        /* Landscape Mobile Styles */
        @media (max-height: 500px) and (orientation: landscape) {
            .logo-container {
                padding: 5px 0;
            }
            
            .logo-container img {
                max-height: 40px;
            }
            
            .main {
                min-height: calc(100vh - 60px);
                padding: 10px;
            }
            
            .auth-card {
                flex-direction: row;
                max-width: 900px;
            }
            
            .image-side {
                min-height: 300px;
                order: 0;
            }
            
            .form-side {
                padding: 20px 25px;
            }
            
            .form-title {
                font-size: 1.4rem;
                margin-bottom: 15px;
            }
            
            .form-group {
                margin-bottom: 15px;
            }
            
            .form-control {
                height: 40px;
            }
            
            .separator {
                margin: 15px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Logo Container -->
    <div class="logo-container">
        <a href="/">
            <img src="{{ asset('assets/homepage/img/logo.png') }}" alt="Rich Wellness Logo">
        </a>
    </div>

    <div class="main">
        <div class="auth-card">
            <!-- Form Side -->
            <div class="form-side">
                <h2 class="form-title">Selamat Datang</h2>
                <p class="text-center text-muted mb-4" style="font-size: 14px; margin-top: -15px; color: #a79d8c;">Silakan masuk untuk menikmati layanan eksklusif kami</p>
                
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="hidden" name="role" id="form_role" value="user">
                    
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" id="email" placeholder="Email Anda" 
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                            name="password" id="password" placeholder="Password Anda" required>
                        @error('password')
                            <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-sign-in-alt me-2"></i> Masuk
                        </button>
                    </div>
                    
                    <div class="separator">
                        <span>atau</span>
                    </div>
                    
                    <div class="form-group">
                        <a href="{{ route('login.google') }}" class="btn btn-google w-100">
                            <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo">
                            Masuk dengan Google
                        </a>
                    </div>
                    
                    <div class="footer-link">
                        Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a>
                    </div>
                    
                    @if (Route::has('password.request'))
                        <div class="footer-link mt-2">
                            <a href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
            
            <!-- Image Side -->
            <div class="image-side">
                <div class="image-content">
                    <h2>Rich Wellness</h2>
                    <p>Manjakan diri Anda di Rich Wellness, destinasi spa premium untuk keseimbangan jiwa dan raga. Rasakan sentuhan ketenangan dan kemewahan dalam setiap perawatan eksklusif kami.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/login-register/vendor/jquery/jquery.min.js"></script>
    <script src="assets/login-register/js/main.js"></script>

</body>
</html>
