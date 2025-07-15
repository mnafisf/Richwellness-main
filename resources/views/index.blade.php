<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rich Wellness</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/homepage/img/favicon.png" rel="icon">
    <link href="assets/homepage/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/homepage/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/homepage/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/homepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <!-- Template Main CSS File -->
    <link href="assets/homepage/css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --gold-primary: #D4AF37;
            --gold-secondary: #FBDA6B;
            --gold-light: #F9F1DC;
            --cream-bg: #FEF9E7;
            --dark-gold: #A67C00;
            --text-dark: #3C3C3C;
            --text-gold: #9D8833;
            --text-cream: #F8F0E0;
            --shadow-gold: rgba(212, 175, 55, 0.2);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: #FFF;
        }

        /* Change header background color */
        #header {
            background-color: var(--cream-bg);
            box-shadow: 0 2px 15px var(--shadow-gold);
            transition: all 0.3s ease;
            padding: 15px 0;
        }

        #header .logo h1 a {
            color: var(--gold-primary);
            font-weight: 700;
            transition: all 0.3s ease;
        }

        #header .logo h1 a:hover {
            color: var(--dark-gold);
        }

        #navbar ul li a {
            color: var(--text-dark);
            transition: all 0.3s ease;
        }

        #navbar ul li a:hover, 
        #navbar ul li a.active {
            color: var(--gold-primary);
        }

        .getstarted.scrollto {
            background: var(--gold-primary);
            color: white !important;
            border-radius: 30px;
            padding: 8px 25px !important;
            transition: all 0.3s ease;
            border: 2px solid var(--gold-primary);
        }

        .getstarted.scrollto:hover {
            background: transparent;
            color: var(--gold-primary) !important;
        }

        /* Ganti warna background footer */
        #footer {
            background-color: var(--cream-bg);
            border-top: 1px solid var(--gold-light);
        }
        
        #footer h3 {
            color: var(--dark-gold);
        }
        
        #footer .footer-top .footer-links ul a {
            color: var(--text-dark);
            transition: all 0.3s ease;
        }
        
        #footer .footer-top .footer-links ul a:hover {
            color: var(--gold-primary);
        }

        /* Customize Swiper container size */
        .swiper-container {
            width: 100%;
            height: 650px;
            box-shadow: 0 5px 25px var(--shadow-gold);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 70px;
        }

        /* Customize Swiper slide image size */
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .swiper-button-next, 
        .swiper-button-prev {
            color: var(--gold-primary);
        }
        
        .swiper-pagination-bullet-active {
            background: var(--gold-primary);
        }

        /* Style untuk memastikan peta berada di tengah secara horizontal */
        .map-container {
            display: flex;
            justify-content: center;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px var(--shadow-gold);
        }

        /* Style untuk memastikan peta berada di tengah secara vertikal */
        .map-container iframe {
            margin-top: auto;
            margin-bottom: auto;
            border: none;
        }

        .my-3 {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .justify-content-between>.col-lg-2 {
            margin-bottom: 20px;
            border: 1px solid transparent;
            transition: all 0.3s ease;
            border-radius: 10px;
            padding: 15px;
        }

        .justify-content-between>.col-lg-2:hover {
            border-color: var(--gold-primary);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px var(--shadow-gold);
        }

        /* Ganti warna background container penilaian */
        #penilaian {
            background-color: var(--cream-bg);
        }

        /* PERBAIKAN KHUSUS UNTUK SECTION PAKET UNGGULAN */
#paket-unggulan {
    background-color: var(--cream-bg);
    padding: 80px 0;
}

/* Perbaikan container row */
.paket-unggulan .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
    gap: 25px;
    margin: 0;
}

/* Perbaikan kolom */
.paket-unggulan .col-lg-3 {
    flex: 0 0 calc(25% - 25px);
    max-width: calc(25% - 25px);
    display: flex;
    margin-bottom: 0;
    padding: 0;
}

/* Perbaikan card */
.paket-unggulan .card {
    width: 100%;
    max-width: 300px;
    height: 100%;
    display: flex;
    flex-direction: column;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px var(--shadow-gold);
    transition: all 0.3s ease;
    border: none;
    margin: 0 auto;
}

.paket-unggulan .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 35px var(--shadow-gold);
}

/* Perbaikan card body */
.paket-unggulan .card-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 25px 20px;
    text-align: center;
    background: linear-gradient(to bottom, white, var(--gold-light));
}

/* Icon box */
.paket-unggulan .icon-box {
    margin-bottom: 20px;
    flex-shrink: 0;
}

.paket-unggulan .icon-box i {
    font-size: 3rem;
    color: var(--gold-primary);
    margin-bottom: 10px;
}

/* Card title */
.paket-unggulan .card-title {
    color: var(--dark-gold) !important;
    font-weight: 700 !important;
    font-size: 1.3rem;
    margin-bottom: 15px;
    flex-shrink: 0;
}

/* Card text */
.paket-unggulan .card-text {
    flex: 1;
    margin-bottom: 20px;
    line-height: 1.6;
    color: var(--text-dark);
    font-size: 14px;
    text-align: center;
}

/* PERBAIKAN TOMBOL PESAN SEKARANG */
.paket-unggulan .btn-primary {
    background-color: var(--gold-primary);
    color: white !important;
    border: 2px solid var(--gold-primary);
    padding: 12px 20px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    width: 180px;
    margin: 0 auto;
    flex-shrink: 0;
    align-self: center;
}

.paket-unggulan .btn-primary:hover {
    background-color: transparent;
    color: var(--gold-primary) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
    text-decoration: none;
}

/* Responsivitas */
@media (max-width: 1200px) {
    .paket-unggulan .col-lg-3 {
        flex: 0 0 calc(50% - 25px);
        max-width: calc(50% - 25px);
    }
}

@media (max-width: 768px) {
    .paket-unggulan .col-lg-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .paket-unggulan .card {
        max-width: 350px;
    }
    
    .paket-unggulan .row {
        gap: 20px;
        padding: 0 15px;
    }
}

@media (max-width: 480px) {
    .paket-unggulan .card-body {
        padding: 20px 15px;
    }
    
    .paket-unggulan .btn-primary {
        width: 160px;
        padding: 10px 15px;
        font-size: 13px;
    }
}

/* PERBAIKAN UNTUK REKOMENDASI LAYANAN KESEHATAN */
.rekomendasi-kesehatan .swiper-container {
    padding-bottom: 50px;
}

.rekomendasi-kesehatan .swiper-slide {
    height: auto;
    display: flex;
    align-items: stretch;
}

.rekomendasi-kesehatan .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    min-height: 500px;
    max-width: 350px;
    margin: 0 auto;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px var(--shadow-gold);
    transition: all 0.3s ease;
    border: none;
}

.rekomendasi-kesehatan .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 35px var(--shadow-gold);
}

.rekomendasi-kesehatan .card-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 20px;
    text-align: center;
}

.rekomendasi-kesehatan .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    flex-shrink: 0;
}

.rekomendasi-kesehatan .card-title {
    color: #7AA2E3 !important;
    font-weight: bold !important;
    text-align: center;
    margin-bottom: 15px;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.rekomendasi-kesehatan .card-text {
    flex: 1;
    margin-bottom: 20px;
    text-align: center;
    line-height: 1.6;
    font-size: 14px;
    color: var(--text-dark);
}

/* PERBAIKAN TOMBOL KUNJUNGI SITUS */
.rekomendasi-kesehatan .btn-primary {
    background-color: var(--gold-primary);
    color: white !important;
    border: 2px solid var(--gold-primary);
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    width: 150px;
    margin: 0 auto;
    flex-shrink: 0;
    align-self: center;
}

.rekomendasi-kesehatan .btn-primary:hover {
    background-color: transparent;
    color: var(--gold-primary) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
    text-decoration: none;
}

/* PERBAIKAN UNTUK REKOMENDASI DESTINASI WISATA */
.rekomendasi-destinasi .swiper-container {
    padding-bottom: 50px;
}

.rekomendasi-destinasi .swiper-slide {
    height: auto;
    display: flex;
    align-items: stretch;
}

.rekomendasi-destinasi .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    min-height: 500px;
    max-width: 350px;
    margin: 0 auto;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px var(--shadow-gold);
    transition: all 0.3s ease;
    border: none;
}

.rekomendasi-destinasi .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 35px var(--shadow-gold);
}

.rekomendasi-destinasi .card-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 20px;
    text-align: center;
}

.rekomendasi-destinasi .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    flex-shrink: 0;
}

.rekomendasi-destinasi .card-title {
    color: #7AA2E3 !important;
    font-weight: bold !important;
    text-align: center;
    margin-bottom: 15px;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.rekomendasi-destinasi .card-text {
    flex: 1;
    margin-bottom: 20px;
    text-align: center;
    line-height: 1.6;
    font-size: 14px;
    color: var(--text-dark);
}

/* PERBAIKAN TOMBOL LIHAT MAPS */
.rekomendasi-destinasi .btn-primary {
    background-color: var(--gold-primary);
    color: white !important;
    border: 2px solid var(--gold-primary);
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
    width: 130px;
    margin: 0 auto;
    flex-shrink: 0;
    align-self: center;
}

.rekomendasi-destinasi .btn-primary:hover {
    background-color: transparent;
    color: var(--gold-primary) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
    text-decoration: none;
}

/* PERBAIKAN SWIPER UNTUK KEDUA SECTION */
.rekomendasi-swiper {
    overflow: visible;
    padding: 20px 0;
}

.rekomendasi-swiper .swiper-wrapper {
    align-items: stretch;
}

.rekomendasi-swiper .swiper-pagination {
    bottom: 10px;
}

/* RESPONSIVITAS */
@media (max-width: 768px) {
    .rekomendasi-kesehatan .card,
    .rekomendasi-destinasi .card {
        min-height: 450px;
        max-width: 300px;
    }
    
    .rekomendasi-kesehatan .card-body,
    .rekomendasi-destinasi .card-body {
        padding: 15px;
    }
    
    .rekomendasi-kesehatan .btn-primary {
        width: 140px;
        padding: 8px 15px;
        font-size: 13px;
    }
    
    .rekomendasi-destinasi .btn-primary {
        width: 120px;
        padding: 8px 15px;
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .rekomendasi-kesehatan .card,
    .rekomendasi-destinasi .card {
        min-height: 400px;
    }
    
    .rekomendasi-kesehatan .card-img-top,
    .rekomendasi-destinasi .card-img-top {
        height: 180px;
    }
}
        #rekomendasi-kesehatan {
            background-color: var(--cream-bg);
            padding: 80px 0;
        }
        
        #rekomendasi-destinasi {
            padding: 80px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            padding-right: 30px;
        }

        /* Atur lebar logo */
        .logo img {
            width: 70px;
            height: auto;
            margin-right: 15px;
        }

        .btn-primary {
            background-color: var(--gold-primary);
            color: white;
            border: 2px solid var(--gold-primary);
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
            font-weight: 500;
            font-size: 14px;
            box-shadow: 0 2px 10px var(--shadow-gold);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--gold-primary);
        }
        
        .section-title h2 {
            color: var(--dark-gold);
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            display: block;
            width: 50px;
            height: 3px;
            background: var(--gold-primary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px var(--shadow-gold);
            transition: all 0.3s ease;
            border: none;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px var(--shadow-gold);
        }
        
        .card .card-title {
            color: var(--dark-gold) !important;
            font-weight: 700 !important;
        }
        
        .icon-box i {
            color: var(--gold-primary);
        }
        
        /* Hero section styling */
        #hero {
            background-color: white;
            padding: 60px 0;
        }
        
        #hero h1 {
            color: var(--dark-gold);
            font-weight: 700;
            font-size: 2.5rem;
        }
        
        #hero h2 {
            color: var(--text-dark);
            font-size: 1.2rem;
            line-height: 1.7;
        }
        
        .btn-get-started {
            background: var(--gold-primary);
            color: white;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            border: 2px solid var(--gold-primary);
            box-shadow: 0 5px 15px var(--shadow-gold);
        }
        
        .btn-get-started:hover {
            background: transparent;
            color: var(--gold-primary);
        }
        
        /* Chatbot Styles Modern */
        .chat-widget {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 1000;
        }
        
        .chat-button {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #D4AF37, #A67C00);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            box-shadow: 0 8px 32px rgba(212,175,55,0.25);
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
        }
        .chat-button:hover {
            transform: scale(1.08) rotate(-6deg);
            box-shadow: 0 12px 40px rgba(212,175,55,0.35);
        }
        
        .chat-container {
            position: fixed;
            bottom: 100px;
            right: 24px;
            width: 370px;
            height: 500px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 16px 48px rgba(44,44,44,0.18);
            display: none;
            flex-direction: column;
            overflow: hidden;
            border: 2px solid #F9F1DC;
            animation: slideInUp 0.3s;
        }
        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(40px) scale(0.95);}
            to { opacity: 1; transform: translateY(0) scale(1);}
        }
        
        .chat-header {
            background: linear-gradient(135deg, #D4AF37, #A67C00);
            color: #fff;
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            border-bottom: 1px solid #F9F1DC;
        }
        .close-chat {
            background: rgba(255,255,255,0.18);
            border: none;
            color: #fff;
            font-size: 1.5rem;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }
        .close-chat:hover {
            background: rgba(255,255,255,0.35);
            transform: rotate(90deg);
        }
        
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: linear-gradient(180deg, #FEF9E7 0%, #fff 100%);
            scroll-behavior: smooth;
        }
        .message {
            margin-bottom: 14px;
            max-width: 80%;
            padding: 12px 18px;
            border-radius: 18px;
            line-height: 1.5;
            font-size: 0.98rem;
            box-shadow: 0 2px 8px rgba(212,175,55,0.07);
            position: relative;
            animation: messageIn 0.3s;
        }
        @keyframes messageIn {
            from { opacity: 0; transform: translateY(10px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .bot-message {
            background: linear-gradient(135deg, #fff, #F9F1DC);
            color: #3C3C3C;
            border-bottom-left-radius: 5px;
            align-self: flex-start;
            border: 1px solid #F9F1DC;
        }
        .user-message {
            background: linear-gradient(135deg, #D4AF37, #A67C00);
            color: #fff;
            border-bottom-right-radius: 5px;
            align-self: flex-end;
            margin-left: auto;
        }
        .chat-input-container {
            display: flex;
            padding: 14px;
            border-top: 2px solid #F9F1DC;
            background: #fff;
            gap: 10px;
        }
        .chat-input {
            flex: 1;
            padding: 12px 18px;
            border: 2px solid #F9F1DC;
            border-radius: 25px;
            outline: none;
            font-size: 1rem;
            background: #fff;
            transition: border 0.2s, box-shadow 0.2s;
        }
        .chat-input:focus {
            border-color: #D4AF37;
            box-shadow: 0 0 0 2px #F9F1DC;
        }
        .send-button {
            background: linear-gradient(135deg, #D4AF37, #A67C00);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(212,175,55,0.18);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .send-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 24px rgba(212,175,55,0.28);
        }
        .quick-questions {
            padding: 12px;
            display: flex;
            gap: 8px;
            border-top: 1px solid #F9F1DC;
            overflow-x: auto;
            background: #fff;
        }
        .quick-question-btn {
            background: #FEF9E7;
            border: 1.5px solid #F9F1DC;
            border-radius: 16px;
            padding: 7px 16px;
            font-size: 12px;
            color: #3C3C3C;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }
        .quick-question-btn:hover {
            background: linear-gradient(135deg, #D4AF37, #A67C00);
            color: #fff;
            border-color: #D4AF37;
        }
        @media (max-width: 600px) {
            .chat-container {
                width: 96vw;
                height: 70vh;
                right: 2vw;
                bottom: 80px;
            }
            .chat-button {
                width: 54px;
                height: 54px;
                font-size: 1.5rem;
            }
        }
        
        /* Quick Questions Styles */
        .quick-questions {
            padding: 10px;
            display: flex;
            gap: 8px;
            border-top: 1px solid var(--gold-light);
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: thin;
            -webkit-overflow-scrolling: touch;
            background-color: white;
        }
        
        .quick-questions::-webkit-scrollbar {
            height: 4px;
        }
        
        .quick-questions::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        .quick-questions::-webkit-scrollbar-thumb {
            background: var(--gold-primary);
            border-radius: 4px;
        }
        
        .quick-question-btn {
            background-color: var(--cream-bg);
            border: 1px solid var(--gold-light);
            border-radius: 15px;
            padding: 6px 12px;
            font-size: 12px;
            color: var(--text-dark);
            cursor: pointer;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }
        
        .quick-question-btn:hover {
            background-color: var(--gold-primary);
            color: white;
        }

        /* Voucher Promo Styles */
        #voucher-promo {
            background-color: var(--cream-bg);
            padding: 80px 0;
        }

        .voucher-promo .card {
            transition: transform 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 5px 15px var(--shadow-gold);
        }

        .voucher-promo .card:hover {
            transform: translateY(-5px);
        }

        .voucher-promo .card-body {
            padding: 25px;
            background: linear-gradient(to bottom, white, var(--gold-light));
        }

        .voucher-promo .discount-badge {
            font-size: 1.5em;
            font-weight: bold;
            color: var(--gold-primary);
            margin: 10px 0;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .voucher-promo .voucher-details {
            margin: 20px 0;
        }

        .voucher-promo .voucher-details p {
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .voucher-promo .voucher-details i {
            color: var(--gold-primary);
            margin-right: 8px;
        }

        .voucher-promo .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: 600;
            background-color: var(--gold-primary);
            border: 2px solid var(--gold-primary);
        }

        .voucher-promo .btn-primary:hover {
            background-color: transparent;
            color: var(--gold-primary);
        }
        
        /* About section styling */
        #about {
            padding: 80px 0;
        }
        
        #about p {
            line-height: 1.8;
            color: var(--text-dark);
        }
        
        /* Kamar section styling */
        #kamar {
            padding: 80px 0;
        }
        
        /* Fasilitas section styling */
        #fasilitas {
            padding: 80px 0;
            background-color: var(--cream-bg);
        }
        
        /* Contact section styling */
        #contact {
            padding: 80px 0;
        }
        
        #contact .info-box {
            box-shadow: 0 5px 15px var(--shadow-gold);
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            transition: all 0.3s ease;
        }
        
        #contact .info-box:hover {
            transform: translateY(-5px);
        }
        
        #contact .info-box i {
            color: var(--gold-primary);
        }
        
        #contact .php-email-form {
            box-shadow: 0 5px 15px var(--shadow-gold);
            padding: 30px;
            border-radius: 10px;
            background-color: white;
        }
        
        #contact .php-email-form .form-control {
            border-color: var(--gold-light);
            padding: 12px;
            border-radius: 8px;
        }
        
        #contact .php-email-form .form-control:focus {
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 0.2rem var(--shadow-gold);
        }
        
        #contact .php-email-form button[type="submit"] {
            background: var(--gold-primary);
            border: 2px solid var(--gold-primary);
            padding: 10px 24px;
            color: #fff;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        #contact .php-email-form button[type="submit"]:hover {
            background: transparent;
            color: var(--gold-primary);
        }
        
        
        /* Social links styling */
        .social-links a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background: var(--gold-primary);
            color: white;
            border-radius: 50%;
            margin-right: 8px;
            text-align: center;
            line-height: 36px;
            transition: all 0.3s ease;
            border: 2px solid var(--gold-primary);
        }
        
        .social-links a:hover {
            background: transparent;
            color: var(--gold-primary);
        }
        
        .footer-links a {
            margin: 0 15px;
            color: var(--text-dark);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .footer-links a:hover {
            color: var(--gold-primary);
        }
        
        /* User avatar styling */
        .user-avatar-placeholder {
            background-color: var(--gold-primary) !important;
        }
        
        .dropdown-menu {
            border-color: var(--gold-light) !important;
        }
        
        .dropdown-menu i {
            color: var(--gold-primary) !important;
        }
        /* Typing Indicator */
        .typing-indicator {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 10px 18px;
            background: linear-gradient(135deg, #fff, #F9F1DC);
            border-radius: 20px;
            border-bottom-left-radius: 5px;
            max-width: 60px;
            margin-bottom: 15px;
            border: 1px solid #F9F1DC;
        }
        .typing-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #D4AF37;
            animation: typing 1.4s infinite ease-in-out;
        }
        .typing-dot:nth-child(1) { animation-delay: -0.32s; }
        .typing-dot:nth-child(2) { animation-delay: -0.16s; }
        @keyframes typing {
            0%, 80%, 100% { transform: scale(0.8); opacity: 0.5; }
            40% { transform: scale(1); opacity: 1; }
        }
        /* Timestamp */
        .message-time {
            font-size: 10px;
            opacity: 0.7;
            margin-top: 4px;
            text-align: right;
        }
        .bot-message .message-time {
            text-align: left;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo d-flex align-items-center">
                <img src="assets/homepage/img/logo.png" alt="Rich Wellness Logo">
                <h1><a href="/">Rich Wellness</a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#paket-unggulan">Paket Unggulan</a></li>
                    <li><a class="nav-link scrollto" href="#kamar">Kamar</a></li>
                    <li><a class="nav-link scrollto" href="#fasilitas">Fasilitas</a></li>
                    <li><a class="nav-link scrollto" href="#rekomendasi-kesehatan">Kesehatan</a></li>
                    <li><a class="nav-link scrollto" href="#rekomendasi-destinasi">Wisata</a></li>
                    <li><a class="nav-link scrollto" href="#penilaian">Penilaian</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    @guest
    <li><a class="nav-link scrollto" href="{{ route('register') }}">Daftar</a></li>
    <li><a class="getstarted scrollto" href="{{ route('login') }}">Log In</a></li>
@endguest
@auth
    <li class="nav-item dropdown" style="position: static;">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if(Auth::user()->avatar)
                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="rounded-circle me-2" width="32" height="32" style="border: 2px solid var(--gold-primary);">
            @else
                <div class="user-avatar-placeholder rounded-circle me-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: var(--gold-primary); color: white; font-weight: bold; border: 2px solid var(--gold-secondary);">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            @endif
            <span style="color: var(--dark-gold); font-weight: 600;">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 280px; border-radius: 15px; box-shadow: 0 5px 15px var(--shadow-gold); border: 1px solid var(--gold-light); padding: 0; position: absolute; left: auto; right: 20px;">
            <li class="p-3" style="background-color: var(--cream-bg); border-radius: 15px 15px 0 0;">
                <div class="d-flex align-items-center">
                    @if(Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="rounded-circle me-3" width="50" height="50" style="border: 2px solid var(--gold-primary);">
                    @else
                        <div class="user-avatar-placeholder rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--gold-primary); color: white; font-weight: bold; font-size: 20px; border: 2px solid var(--gold-secondary);">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    @endif
                    <div>
                        <div style="font-weight: 600; color: var(--dark-gold); font-size: 16px;">{{ Auth::user()->name }}</div>
                        <div style="font-size: 13px; color: var(--text-dark);">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </li>
            <li><hr class="dropdown-divider" style="margin: 0; border-color: var(--gold-light);"></li>
            <li>
                <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('profile') }}" style="color: var(--text-dark); transition: all 0.3s ease;">
                    <i class="bi bi-person me-2" style="font-size: 18px; color: var(--gold-primary);"></i>
                    <span>Profil Saya</span>
                </a>
            </li>
            @if(Auth::user()->is_admin == 1)
            <li>
                <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('admin.home') }}" style="color: var(--text-dark); transition: all 0.3s ease;">
                    <i class="bi bi-speedometer2 me-2" style="font-size: 18px; color: var(--gold-primary);"></i>
                    <span>Dashboard Admin</span>
                </a>
            </li>
            @endif
            <li><hr class="dropdown-divider" style="margin: 0; border-color: var(--gold-light);"></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item d-flex align-items-center py-2" style="color: #dc3545; transition: all 0.3s ease;">
                        <i class="bi bi-box-arrow-right me-2" style="font-size: 18px;"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </li>
@endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <!-- Swiper -->
    <div class="container-fluid px-lg-4 pt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/nyoba/images/carousel/1.png" class="image-swipper d-block" alt="swipper-image-1">
                </div>
            </div>
            <!-- Add pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>

    </div>
    </div>
    <!-- End Swiper -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Rich Wellness</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">
                        Selamat datang di <span style="color: var(--gold-primary); font-weight: 600;">Rich Wellness</span>, destinasi eksklusif untuk kesehatan premium dan kebugaran di Hotel The Rich Jogja. Terletak strategis di jantung kota Yogyakarta, kami menawarkan pengalaman wellness terbaik dengan standar kemewahan tertinggi. 
                        <br><br>
                        Temukan harmoni tubuh, pikiran, dan jiwa melalui layanan kesehatan dan perawatan holistik kami yang didukung oleh tenaga profesional berpengalaman. Manjakan diri Anda dalam perjalanan transformatif menuju kesejahteraan optimal dan hidup yang lebih berkualitas.
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        @auth
    <a href="/pesanReservasi" class="btn-get-started scrollto">Pesan Sekarang <i class="bi bi-arrow-right"></i></a>
@else
    <a href="{{ route('login') }}" class="btn-get-started scrollto">Pesan Sekarang <i class="bi bi-arrow-right"></i></a>
@endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/homepage/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            <span style="font-weight: 600; color: var(--dark-gold);">Rich Wellness</span> adalah puncak dari perjalanan wellness premium di Yogyakarta, menghadirkan pengalaman eksklusif untuk para tamu yang menghargai kemewahan dan kesehatan optimal. Kami menawarkan kombinasi sempurna antara perawatan tradisional dan modern dalam lingkungan yang elegan dan menenangkan.
                        </p>
                        <p>
                            Dengan pendekatan holistik, kami merancang program wellness personalisasi yang mencakup yoga eksklusif, meditasi mendalam, terapi spa mewah, dan aktivitas revitalisasi untuk menyeimbangkan tubuh dan pikiran. Setiap sesi dirancang oleh ahli kesehatan terkemuka dan dilaksanakan oleh terapis bersertifikasi internasional.
                        </p>
                        <p>
                            Lokasi strategis kami di jantung Yogyakarta memungkinkan tamu untuk menikmati keindahan alam dan kekayaan budaya Jawa, sambil merasakan pelayanan berkelas dunia. Di <span style="font-weight: 600; color: var(--dark-gold);">Rich Wellness</span>, kami percaya bahwa perjalanan wellness bukan sekadar liburan, melainkan investasi berharga untuk kesehatan dan kebahagiaan jangka panjang Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- Paket Unggulan Section -->
        <section id="paket-unggulan" class="paket-unggulan aos" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Paket Unggulan</h2>
                    <p>Pengalaman Wellness Premium Eksklusif untuk Anda</p>
                </div>
                <div class="row justify-content-center">
                    <!-- Card pertama -->
                    <div class="col-lg-3 col-md-6 my-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="card border-0 shadow w-100" style="max-width: 350px; margin: auto;">
                            <div class="card-body d-flex flex-column">
                                <div class="icon-box text-center mb-4">
                                    <i class="bi bi-star-fill" style="font-size: 3rem; color: var(--gold-primary);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Serenity Retreat</h4>
                                <p class="card-text text-center">Temukan kedamaian sejati dengan pengalaman wellness premium eksklusif kami. Paket ini menawarkan akses penuh ke pusat kebugaran mewah, sesi yoga pagi dengan instruktur bersertifikat, dan perawatan spa menenangkan untuk merevitalisasi tubuh dan pikiran Anda dalam suasana yang elegan dan mewah.</p>
                                @auth
                                    <a href="/pesanReservasi" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <!-- Card kedua -->
                    <div class="col-lg-3 col-md-6 my-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                        <div class="card border-0 shadow w-100" style="max-width: 350px; margin: auto;">
                            <div class="card-body d-flex flex-column">
                                <div class="icon-box text-center mb-4">
                                    <i class="bi bi-heart-fill" style="font-size: 3rem; color: var(--gold-primary);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Renewal Journey</h4>
                                <p class="card-text text-center">Jalani perjalanan transformasi dengan paket eksklusif kami yang dirancang untuk meremajakan seluruh aspek kesehatan Anda. Nikmati akses VIP ke pusat kebugaran, sesi yoga personal, terapi pijat premium, dan menu gourmet sehat yang disajikan oleh chef berpengalaman.</p>
                                @auth
                                    <a href="/pesanReservasi" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <!-- Card ketiga -->
                    <div class="col-lg-3 col-md-6 my-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="700">
                        <div class="card border-0 shadow w-100" style="max-width: 350px; margin: auto;">
                            <div class="card-body d-flex flex-column">
                                <div class="icon-box text-center mb-4">
                                    <i class="bi bi-gem" style="font-size: 3rem; color: var(--gold-primary);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Harmony Experience</h4>
                                <p class="card-text text-center">Hadirkan keseimbangan sempurna dalam hidup Anda dengan paket premium terlengkap kami. Dapatkan akses tak terbatas ke semua fasilitas wellness eksklusif, sesi meditasi pribadi, terapi spa signature, dan aktivitas rekreasi terpilih untuk pengalaman wellness paling mewah di Yogyakarta.</p>
                                @auth
                                    <a href="/pesanReservasi" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <!-- Card keempat -->
                    <div class="col-lg-3 col-md-6 my-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="900">
                        <div class="card border-0 shadow w-100" style="max-width: 350px; margin: auto;">
                            <div class="card-body d-flex flex-column">
                                <div class="icon-box text-center mb-4">
                                    <i class="bi bi-sun-fill" style="font-size: 3rem; color: var(--gold-primary);"></i>
                                </div>
                                <h4 class="card-title text-center mb-3">Ultimate Wellness</h4>
                                <p class="card-text text-center">Rasakan kesejahteraan maksimal dengan paket Ultimate Wellness Retreat yang luar biasa. Termasuk akses eksklusif ke pusat kebugaran, berbagai sesi yoga dan meditasi, terapi spa yang menenangkan, serta paket makanan sehat yang menakjubkan untuk sepuluh hari yang akan mengubah hidup Anda.</p>
                                @auth
                                    <a href="/pesanReservasi" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-primary mt-auto align-self-center" style="max-width: 200px;">Pesan Sekarang</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Paket Unggulan Section -->


        <!-- ======= Services Section ======= -->
        <section id="kamar" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Fasilitas Kontolllllll puki</h2>
                    <p><strong>Terdiri dari beberapa jenis fasilitas kamar berdasarkan jumlah tempat tidur :</strong>
                    </p>
                </div>
                <section id="counts" class="counts">
                    <div class="container">
                        <div class="row">
                            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                                data-aos="fade-right" data-aos-delay="150">
                                <img src="assets/homepage/img/counts-img.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left"
                                data-aos-delay="300">
                                <div class="content d-flex flex-column justify-content-center">
                                    <div class="row">
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">
                                                <i class="bi bi-person-fill"></i>
                                                <span data-purecounter-start="0" data-purecounter-end="20"
                                                    data-purecounter-duration="1" class="purecounter"></span>
                                                <p>
                                                    <strong>Single Room </strong>
                                                    terdiri dari satu ruangan yang berisi satu tempat tidur, sofa, dan
                                                    kamar mandi.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">
                                                <i class="bi bi-people-fill"></i>
                                                <span data-purecounter-start="0" data-purecounter-end="15"
                                                    data-purecounter-duration="1" class="purecounter"></span>
                                                <p>
                                                    <strong>Twin Room </strong>
                                                    terdiri dari dua tempat tidur yang disatukan dan diletakkan
                                                    berdampingan.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">
                                                <i class="bi bi-person-plus-fill"></i>
                                                <span data-purecounter-start="0" data-purecounter-end="10"
                                                    data-purecounter-duration="1" class="purecounter"></span>
                                                <p>
                                                    <strong>Double Room </strong>
                                                    terdiri dari tempat tidur berukuran besar yang muat untuk dua orang.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <div class="count-box">
                                                <i class="bi bi-person-lines-fill"></i>
                                                <span data-purecounter-start="0" data-purecounter-end="5"
                                                    data-purecounter-duration="1" class="purecounter"></span>
                                                <p>
                                                    <strong>Family Room </strong>
                                                    terdiri dari satu tempat tidur besar dan kecil, dan ruangan lebih
                                                    besar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="section-title" data-aos="fade-up">
                    <p><strong>Terdiri dari beberapa jenis fasilitas kamar yang diberikan :</strong></p>
                </div>
                <div class="row justify-content-center">
                    @foreach($fasilitasKamar as $row)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href=""> {{ $row->tipe_kamar }} </a></h4>
                                <p class="description"> {{ $row->fasilitas }} </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="fasilitas" class="features">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Fasilitas Hotel</h2>
                    <p>Nikmati berbagai fasilitas eksklusif dan mewah kami</p>
                </div>
            </div>
        </section>

        <!-- ======= More Services Section ======= -->
        <section id="more-services" class="more-services">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="100" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/1.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Kolam Renang Mewah</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="100" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/6.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">SPA Premium</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="100" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/7.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Pusat Kebugaran</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="100" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/8.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Sauna Eksklusif</h5>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="100" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/3.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Sarapan Gourmet</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="200" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/4.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Valet Parking</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="300" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/5.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Fine Dining</h5>
                    </div>
                    <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3" data-aos="fade-up"
                        data-aos-delay="300" style="border: 1px solid var(--gold-light); border-radius: 15px; transition: all 0.3s ease;">
                        <img src="nyoba/images/fasilitas/2.jpg" width="180px" style="border-radius: 10px; box-shadow: 0 5px 15px var(--shadow-gold);">
                        <h5 class="mt-3" style="color: var(--dark-gold); font-weight: 600;">Wi-Fi Kecepatan Tinggi</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End More Services Section -->

        <!-- Rekomendasi Layanan kesehatan Section -->
        <section id="rekomendasi-kesehatan" class="rekomendasi-kesehatan" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Rekomendasi Layanan kesehatan spesialis organ tubuh</h2>
                </div>
                <div class="swiper-container rekomendasi-swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <!-- Card pertama -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                <div class="card-body">
                                <img src="/assets/homepage/img/kesehatan/4.png" class="card-img-top" alt="...">
                                    <div class="icon-box">
                                    </div>
                                    <h4 class="card-title" style="color: #7AA2E3; font-weight: bold; text-align: center">Poliklinik Mata RSUP Dr. Sardjito</h4>
                                    <p class="card-text" style="text-align: center;">Jika Anda atau orang terdekat Anda membutuhkan perawatan mata yang berkualitas, saya sangat merekomendasikan RSUP Dr. Sardjito. RSUP Dr. Sardjito terkenal dengan spesialis mata yang berpengalaman dan fasilitas medis yang canggih. Dengan pelayanan yang ramah, ahli, dan profesional.</p>
                                    <a href="https://sardjito.co.id/" class="btn btn-primary">Kunjungi Situs</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card kedua -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                <div class="card-body">
                                <img src="/assets/homepage/img/kesehatan/2.png" class="card-img-top" alt="...">
                                    <div class="icon-box">
                                    </div>
                                    <h4 class="card-title" style="color: #7AA2E3; font-weight: bold; text-align: center">Klinik Kulit RS. Panti Rapih</h4>
                                    <p class="card-text" style="text-align: center;">Klinik Kulit RS Panti Rapih di Yogyakarta menyediakan perawatan kulit komprehensif. Didukung oleh tim medis berpengalaman dan fasilitas lengkap, klinik ini menawarkan diagnosis, pengobatan, perawatan kecantikan, dan konsultasi dermatologi.</p>
                                    <a href="https://pantirapih.or.id/rspr/" class="btn btn-primary">Kunjungi Situs</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card ketiga -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                <div class="card-body">
                                <img src="/assets/homepage/img/kesehatan/3.png" class="card-img-top" alt="...">
                                    <div class="icon-box">
                                    </div>
                                    <h4 class="card-title" style="color: #7AA2E3; font-weight: bold; text-align: center">Klinik Ginjal RS. PKU Jogja</h4>
                                    <p class="card-text" style="text-align: center;">Jika Anda mencari perawatan terbaik untuk masalah ginjal, RS PKU Jogja adalah pilihan yang tepat! Dengan tim dokter spesialis ginjal yang berpengalaman dan fasilitas medis terkini, RS PKU Jogja siap memberikan perawatan yang komprehensif dan berkualitas tinggi. Dapatkan layanan profesional dan solusi terbaik untuk ginjal Anda.</p>
                                    <a href="https://rspkujogja.com/" class="btn btn-primary">Kunjungi Situs</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                                <div class="card-body">
                                <img src="/assets/homepage/img/kesehatan/1.png" class="card-img-top" alt="...">
                                    <div class="icon-box">
                                    </div>
                                    <h4 class="card-title" style="color: #7AA2E3; font-weight: bold; text-align: center">Klinik Jantung
                                    RSUP Dr. Sardjito</h4>
                                    <p class="card-text" style="text-align: center;">Jika Anda mencari layanan kesehatan spesialis jantung yang terpercaya, kami sangat merekomendasikan RSUP Dr. Sardjito. Dengan tim dokter ahli jantung yang berpengalaman dan fasilitas medis yang lengkap, RSUP Dr. Sardjito siap memberikan perawatan terbaik untuk kesehatan jantung Anda.</p>
                                    <a href="https://sardjito.co.id/" class="btn btn-primary">Kunjungi Situs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Rekomendasi Layanan kesehatan -->

        <!-- Rekomendasi Destinasi Section -->
        <section id="rekomendasi-destinasi" class="rekomendasi-destinasi" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Rekomendasi Destinasi Wisata Yogyakarta</h2>
                </div>
                <div class="swiper-container rekomendasi-swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <!-- Card pertama -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <img src="/assets/homepage/img/destinasi/4.png" class="card-img-top" alt="...">
                                    <div class="icon-box">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Heha Sky View
                                    </h4>
                                    <p class="card-text">HeHa Sky View adalah tempat wisata di Gunungkidul, Yogyakarta,
                                        yang menawarkan pemandangan indah dari ketinggian. Tempat ini memiliki berbagai
                                        fasilitas seperti restoran dan spot foto Instagramable, ideal untuk menikmati
                                        matahari terbenam dan panorama kota Yogyakarta.</p>
                                    <a href="https://www.google.com/maps/search/heha+sky+view/@-7.9774678,110.3051026,11z/data=!3m1!4b1?entry=ttu" class="btn btn-primary">Lihat Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card kedua -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/3.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Waduk Sermo
                                    </h4>
                                    <p class="card-text">Waduk Sermo merupakan waduk yang terletak di Kulon Progo,
                                        Yogyakarta, berperan sebagai sumber air bagi daerah sekitarnya. Selain itu,
                                        waduk ini juga menjadi tempat rekreasi di mana pengunjung dapat menikmati
                                        pemandangan dan aktivitas seperti perahu dan memancing.
                                    </p>
                                    <a href="https://maps.app.goo.gl/ASE7cBjm6QmCmuTU7" class="btn btn-primary">Lihat Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card ketiga -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/2.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Pantai
                                        Parangritis</h4>
                                    <p class="card-text">Pantai Parangtritis terletak di Bantul, Yogyakarta, terkenal
                                        dengan ombaknya yang besar dan panorama alam yang memukau. Pantai ini menjadi
                                        tujuan favorit wisatawan untuk menikmati laut, bermain ombak, dan menyaksikan
                                        indahnya senja di tepi pantai yang menakjubkan.
                                    </p>
                                    <a href="https://maps.app.goo.gl/n6XTkuQifzwpuynh7" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/5.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Mangunan
                                        Yogyakarta</h4>
                                    <p class="card-text">Mangunan Yogyakarta adalah daerah perbukitan yang terkenal
                                        dengan pesona sawah terasering dan spot-spot foto yang menarik. Lokasinya yang
                                        indah dan terbuka membuat Mangunan menjadi destinasi favorit untuk menikmati
                                        keindahan alam dan mengabadikan momen-momen indah.
                                    </p>
                                    <a href="https://maps.app.goo.gl/VPARov2kFjncvpS5A" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card kelima -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/1.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Bukit Bintang
                                    </h4>
                                    <p class="card-text">Bukit Bintang adalah salah satu bukit terkenal di Yogyakarta
                                        yang menawarkan pemandangan alam yang spektakuler. Dari puncak bukit ini,
                                        pengunjung dapat menikmati panorama yang luas, termasuk pemandangan Kota
                                        Yogyakarta dan sekitarnya yang memukau serta gemerlap malam.</p>
                                    <a href="https://maps.app.goo.gl/FgnNE6dUi71mULE27" class="btn btn-primary">Lihat
                                        Maps</a>
                                    <!-- Link -->
                                </div>
                            </div>
                        </div>
                        <!-- Card keenam -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/6.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Merapi Park
                                    </h4>
                                    <p class="card-text">Merapi Park adalah salah satu objek wisata yang terletak di
                                        Kabupaten Sleman, Daerah Istimewa Yogyakarta, Indonesia. Tempat ini menawarkan
                                        pengalaman wisata yang unik dengan berbagai miniatur landmark terkenal dunia
                                        yang dibuat dengan detail dan keindahan yang memukau.
                                    </p>
                                    <a href="https://maps.app.goo.gl/s791foTg1ttBx6um7" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/7.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Sungai Mudal
                                    </h4>
                                    <p class="card-text">Sungai Mudal adalah salah satu destinasi wisata alam yang
                                        populer di Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta, Indonesia. Sungai
                                        ini menawarkan pemandangan yang indah dengan air yang jernih, serta menjadi
                                        tempat yang ideal untuk bersantai dan menikmati keindahan alam.
                                    </p>
                                    <a href="https://maps.app.goo.gl/onBqxuNzR4kXVqEf8" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/9.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Candi Prambanan
                                    </h4>
                                    <p class="card-text">Candi Prambanan adalah salah satu situs warisan dunia UNESCO yang terletak di Yogyakarta, Indonesia. Candi ini adalah kompleks candi Hindu terbesar di Indonesia dan merupakan salah satu yang paling indah di Asia Tenggara yang sangat terkenal bagi para pengunjung internasional.
                                    </p>
                                    <a href="https://maps.app.goo.gl/BNNDnb4SqQDZ2NmSA" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/8.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Benteng Vredeburg
                                    </h4>
                                    <p class="card-text">Benteng Vredeburg adalah salah satu bangunan bersejarah yang terletak di pusat kota Yogyakarta, Indonesia. Benteng ini memiliki nilai sejarah yang tinggi dan kini berfungsi sebagai museum yang menampilkan sejarah perjuangan nasional bangsa Indonesia yang sangat berharga.
                                    </p>
                                    <a href="https://maps.app.goo.gl/EPz2nv6MZuivYQ6G8" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card keempat -->
                        <div class="swiper-slide">
                            <div class="card border-0 shadow"
                                style="max-width: 350px; margin: auto; text-align: center;">
                                <div class="card-body">
                                    <div class="icon-box">
                                        <img src="/assets/homepage/img/destinasi/10.png" class="card-img-top" alt="...">
                                    </div>
                                    <h4 class="card-title"
                                        style="color: #7AA2E3; font-weight: bold; display: inline-block;">Malioboro
                                    </h4>
                                    <p class="card-text">Jalan Malioboro adalah salah satu kawasan paling terkenal di Yogyakarta, Indonesia, yang menjadi ikon pariwisata kota ini. Jalan ini menawarkan berbagai atraksi, mulai dari belanja, kuliner, hingga pengalaman budaya yang kaya dan tradisional untuk wisatawan.
                                    </p>
                                    <a href="https://maps.app.goo.gl/9SPp3WNNBxD9mxDPA" class="btn btn-primary">Lihat
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Rekomendasi Destinasi -->

        <!-- Voucher Promo Section -->
        <section id="voucher-promo" class="voucher-promo">
            <div class="container">
                <div class="section-title">
                    <h2>Voucher Promo</h2>
                    <p>Dapatkan penawaran spesial untuk menginap di Rich Wellness</p>
                </div>

                <div class="row">
                    @forelse($vouchers as $voucher)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="discount-badge">
                                        @if($voucher->type == 'percentage')
                                            {{ $voucher->value }}% OFF
                                        @else
                                            Rp {{ number_format($voucher->value, 0, ',', '.') }} OFF
                                        @endif
                                    </div>
                                    <h5 class="card-title">{{ $voucher->description }}</h5>
                                    <div class="voucher-details">
                                        <p><i class="bi bi-calendar-event"></i> Berlaku hingga: {{ $voucher->end_date->format('d M Y') }}</p>
                                        <p><i class="bi bi-ticket-percent"></i> Kode: <strong>{{ $voucher->code }}</strong></p>
                                        @if($voucher->min_order)
                                            <p><i class="bi bi-currency-dollar"></i> Min. pembelian: Rp {{ number_format($voucher->min_order, 0, ',', '.') }}</p>
                                        @endif
                                    </div>
                                    @auth
                                        <a href="/pesanReservasi" class="btn btn-primary">Gunakan Voucher</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary">Login untuk Menggunakan</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Tidak ada voucher promo yang tersedia saat ini</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="penilaian" class="testimonials section-bg">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Penilaian</h2>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/homepage/img/testimonials/1.png"
                                        class="testimonial-img" alt="">
                                    <h3>Anies Baswedan</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Hotel ini menawarkan fasilitas wellness yang lengkap, termasuk spa, pusat
                                        kebugaran, kolam renang, dan aktivitas luar ruangan seperti yoga dan meditasi.
                                        Fasilitas ini memberikan pengalaman menyegarkan dan memungkinkan tamu untuk
                                        meraih kesehatan dan kebugaran optimal selama menginap. <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/homepage/img/testimonials/2.png"
                                        class="testimonial-img" alt="">
                                    <h3>Bahlawan</h3>
                                    <h4>Robotics Engineer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Staf hotel sangat ramah, responsif, dan peduli terhadap kebutuhan tamu. Mereka
                                        memberikan perhatian khusus dalam menyediakan pengalaman pribadi dan mendukung
                                        tamu dalam merencanakan aktivitas wellness selama menginap. <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/homepage/img/testimonials/4.png"
                                        class="testimonial-img" alt="">
                                    <h3>Xaviera Putri</h3>
                                    <h4>Lollipop Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Hotel ini menawarkan beragam program wellness yang disesuaikan dengan kebutuhan
                                        tamu, termasuk retreat, workshop, dan sesi pengembangan pribadi. Program-program
                                        ini membantu tamu untuk mencapai tujuan kesehatan dan kebugaran mereka dengan
                                        dukungan dari ahli terlatih. <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/homepage/img/testimonials/3.png"
                                        class="testimonial-img" alt="">
                                    <h3>Fahri Bahri</h3>
                                    <h4>Football Player</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Restoran hotel menawarkan beragam opsi makanan sehat dan bergizi, termasuk menu
                                        organik, vegetarian, dan bebas gluten. Bahan-bahan yang digunakan segar dan
                                        berkualitas, memastikan tamu mendapatkan nutrisi optimal selama menginap. <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/homepage/img/testimonials/5.png"
                                        class="testimonial-img" alt="">
                                    <h3>Palermo</h3>
                                    <h4>Coach Football</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Hotel ini memberikan pengalaman yang memuaskan bagi para tamu yang mencari
                                        liburan sehat dan menyegarkan. Dengan fasilitas, program, dan layanan yang
                                        berkualitas, tamu merasa terjaga dan terinspirasi selama menginap di sini. <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak Kami</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Rich Wellness</h3>
                            <p>adalah tujuan utama untuk kesehatan dan kebugaran di Hotel The Rich Jogja. Terletak di
                                jantung kota Jogja, kami menawarkan pengalaman unik dalam wisata kesehatan yang berfokus
                                pada kesehatan dan kebugaran. Dengan fasilitas modern dan program kesehatan yang
                                disesuaikan, kami berkomitmen untuk meningkatkan kualitas hidup dan memberikan
                                kesempatan untuk meremajakan tubuh, pikiran, dan jiwa.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>hotline@richwellness.com</p>
                            </div>
                            <div>
                                <i class="ri-phone-line"></i>
                                <p>(0274) 5305888</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-container">
                        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                            <iframe class="w-100 rounded" height="320px"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3518609055313!2d110.3585073750518!3d-7.752454192266415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f66517c121%3A0xfb7a1e4770007836!2sThe%20Rich%20Jogja%20Hotel!5e0!3m2!1sid!2sid!4v1712567527270!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <iframe class="w-100 rounded" height="320px"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3518609055313!2d110.3585073750518!3d-7.752454192266415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f66517c121%3A0xfb7a1e4770007836!2sThe%20Rich%20Jogja%20Hotel!5e0!3m2!1sid!2sid!4v1712567527270!5m2!1sid!2sid"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
`
    <!-- Chatbot Widget -->
    <div class="chat-widget">
        <div class="chat-button" id="chatButton">
            <i class="bi bi-chat-dots-fill"></i>
        </div>
        <div class="chat-container" id="chatContainer">
            <div class="chat-header">
                <h5 class="chat-title">Rich Wellness Assistant</h5>
                <button class="close-chat" id="closeChat">&times;</button>
            </div>
            <div class="chat-messages" id="chatMessages">
                <div class="message bot-message">
                    <p style="margin-bottom: 0;">Selamat datang di <span style="color: var(--gold-primary); font-weight: 600;">Rich Wellness</span>! Ada yang bisa saya bantu?</p>
                </div>
            </div>
            <div class="quick-questions">
                <button class="quick-question-btn">Jam Buka</button>
                <button class="quick-question-btn">Lokasi</button>
                <button class="quick-question-btn">Harga</button>
                <button class="quick-question-btn">Reservassi</button>
                <button class="quick-question-btn">Kontak</button>
                <button class="quick-question-btn">Paket</button>
                <button class="quick-question-btn">Layanan</button>
                <button class="quick-question-btn">Promo</button>
                <button class="quick-question-btn">Pembayaran</button>
                <button class="quick-question-btn">Pembatalan</button>
                <button class="quick-question-btn">Fasilitas</button>
                <button class="quick-question-btn">Kamar</button>
            </div>
            <div class="chat-input-container">
                <input type="text" class="chat-input" id="chatInput" placeholder="Ketik pesan Anda...">
                <button class="send-button" id="sendButton">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="logo-footer d-flex align-items-center justify-content-lg-start justify-content-center mb-3">
                        <img src="assets/homepage/img/logo.png" alt="Rich Wellness Logo" style="width: 50px; height: auto; margin-right: 10px;">
                        <h3 style="color: var(--gold-primary); margin: 0; font-weight: 700;">Rich Wellness</h3>
                    </div>
                    <div class="copyright">
                        &copy; Copyright <strong>Rich Wellness</strong>. Hak Cipta Dilindungi
                    </div>
                    <div class="credits">
                        Dirancang oleh <a href="{{ route('team.index') }}" style="color: var(--gold-primary); font-weight: 600;">Kelompok 6     </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="/" class="scrollto">Beranda</a>
                        <a href="#about" class="scrollto">Tentang</a>
                        <a href="#paket-unggulan" class="scrollto">Paket</a>
                        <a href="#contact" class="scrollto">Kontak</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="assets/homepage/vendor/purecounter/purecounter.js"></script>
    <script src="assets/homepage/vendor/aos/aos.js"></script>
    <script src="assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/homepage/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/homepage/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/homepage/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/homepage/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/homepage/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Inisialisasi Swiper untuk Rekomendasi Layanan Kesehatan
        var rekomendasiSwiper = new Swiper('.rekomendasi-swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 4, // Menampilkan 4 card sekaligus
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: false, // Nonaktifkan loop agar swiper berhenti setelah card ke-5
        });

        // Inisialisasi Swiper untuk Testimonials
        var testimonialsSwiper = new Swiper('.testimonials-swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>

    <!-- Chatbot Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatButton = document.getElementById('chatButton');
            const chatContainer = document.getElementById('chatContainer');
            const closeChat = document.getElementById('closeChat');
            const chatInput = document.getElementById('chatInput');
            const sendButton = document.getElementById('sendButton');
            const chatMessages = document.getElementById('chatMessages');

            // Fungsi format waktu
            function getCurrentTime() {
                const now = new Date();
                return now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
            }

            // Fungsi addMessage dengan timestamp
            function addMessage(message, sender) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', sender + '-message');
                messageElement.innerHTML = `
                    <div>${message}</div>
                    <div class="message-time">${getCurrentTime()}</div>
                `;
                chatMessages.appendChild(messageElement);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            // Typing indicator
            function showTypingIndicator() {
                const typingDiv = document.createElement('div');
                typingDiv.className = 'typing-indicator';
                typingDiv.id = 'typing-indicator';
                typingDiv.innerHTML = `
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                    <span class="typing-dot"></span>
                `;
                chatMessages.appendChild(typingDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            function removeTypingIndicator() {
                const typingDiv = document.getElementById('typing-indicator');
                if (typingDiv) typingDiv.remove();
            }

            // Predefined responses
            const responses = {
                'layanan': 'Kami menyediakan berbagai layanan kesehatan seperti pijat refleksi, terapi, dan konsultasi kesehatan.',
                'jam buka': 'Kami buka setiap hari dari jam 08.00 hingga 21.00 WIB.',
                'lokasi': 'Kami berlokasi di The Rich Jogja Hotel, Jl. Magelang No.KM. 5,5, Kutu Patran, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta.',
                'harga': 'Harga layanan kami bervariasi tergantung jenis paket. Silakan lihat halaman paket untuk informasi lebih lanjut.',
                'reservasi': 'Untuk reservasi, silakan login dan klik tombol "Pesan" pada halaman utama.',
                'kontak': 'Anda dapat menghubungi kami di nomor 085700626150 atau email ke info@richwellness.com',
                'paket': 'Kami memiliki berbagai paket unggulan yang bisa Anda pilih sesuai kebutuhan. Silakan cek halaman paket unggulan kami.',
                'promo': 'Kami sering mengadakan promo spesial. Silakan cek halaman promo atau ikuti media sosial kami untuk info terbaru.',
                'pembayaran': 'Kami menerima pembayaran tunai, kartu kredit/debit, dan transfer bank.',
                'kamar': 'Kami menyediakan berbagai tipe kamar seperti Single Room, Standard, Deluxe, Superior, Family Room, Suite, dan Executive Suite dengan jumlah unit terbatas. Segera lakukan pemesanan untuk memastikan ketersediaan.',
                'fasilitas': 'Kami menyediakan berbagai fasilitas eksklusif untuk menunjang kenyamanan Anda selama menginap, seperti kolam renang mewah, SPA premium, pusat kebugaran, sauna, sarapan gourmet, layanan valet parking, fine dining, serta Wi-Fi.',
                'batal': 'Untuk pembatalan reservasi, silakan hubungi kami minimal 24 jam sebelumnya.'
            };

            // Toggle chat container
            chatButton.addEventListener('click', function() {
                chatContainer.style.display = chatContainer.style.display === 'flex' ? 'none' : 'flex';
            });

            // Close chat
            closeChat.addEventListener('click', function() {
                chatContainer.style.display = 'none';
            });

            // Send message function
            function sendMessage() {
                const message = chatInput.value.trim();
                if (message === '') return;

                addMessage(message, 'user');
                chatInput.value = '';

                // Tampilkan typing indicator
                showTypingIndicator();

                setTimeout(function() {
                    removeTypingIndicator();
                    const botResponse = getBotResponse(message.toLowerCase());
                    addMessage(botResponse, 'bot');
                }, 700);
            }

            // Send message on button click
            sendButton.addEventListener('click', sendMessage);

            // Send message on Enter key
            chatInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });

            // Get bot response based on user input
            function getBotResponse(input) {
                // Check for keywords in the input
                for (const keyword in responses) {
                    if (input.includes(keyword)) {
                        return responses[keyword];
                    }
                }

                // Default responses for common greetings
                if (input.includes('halo') || input.includes('hai') || input.includes('hi')) {
                    return 'Halo! Ada yang bisa saya bantu?';
                } else if (input.includes('terima kasih') || input.includes('makasih')) {
                    return 'Sama-sama! Ada yang bisa saya bantu lagi?';
                } else if (input.includes('selamat pagi') || input.includes('pagi')) {
                    return 'Selamat pagi! Ada yang bisa saya bantu?';
                } else if (input.includes('selamat siang') || input.includes('siang')) {
                    return 'Selamat siang! Ada yang bisa saya bantu?';
                } else if (input.includes('selamat sore') || input.includes('sore')) {
                    return 'Selamat sore! Ada yang bisa saya bantu?';
                } else if (input.includes('selamat malam') || input.includes('malam')) {
                    return 'Selamat malam! Ada yang bisa saya bantu?';
                }

                // Default response
                return 'Maaf, saya tidak memahami pertanyaan Anda. Silakan tanyakan tentang layanan, jam buka, lokasi, harga, reservasi, atau kontak kami.';
            }

            // Add quick question functionality
            const quickQuestionButtons = document.querySelectorAll('.quick-question-btn');
            quickQuestionButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const question = this.textContent.toLowerCase();
                    addMessage(this.textContent, 'user');
                    showTypingIndicator();
                    setTimeout(function() {
                        removeTypingIndicator();
                        const botResponse = getBotResponse(question);
                        addMessage(botResponse, 'bot');
                    }, 700);
                });
            });
        });
    </script>
</body>

</html>