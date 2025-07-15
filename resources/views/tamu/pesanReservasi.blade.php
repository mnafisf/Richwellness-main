<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/homepage/img/favicon.png" type="image/png">

    <title>Reservasi Eksklusif - Rich Wellness</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="assets/tamu/css/bootstrap.min.css" />
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Custom stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/tamu/css/style.css" />
    
    <!-- Custom Gold/Cream Theme Styles -->
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
            background-color: var(--cream-bg);
            color: var(--text-dark);
            line-height: 1.7;
        }
        
        .container {
            padding: 30px 15px;
            max-width: 1200px;
            margin-top: 20px;
        }
        
        .row {
            margin: 0 -15px;
        }
        
        /* Form styles */
/* Enhanced Form Container */
.form-container {
    background: linear-gradient(135deg, #ffffff 0%, #fefbf3 100%);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}

.form-container::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    border-radius: 50%;
}

/* Enhanced Form Title */
.form-container h2 {
    color: var(--dark-gold);
    font-family: 'Playfair Display', serif;
    margin-bottom: 30px;
    font-size: 32px;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
    text-align: center;
}

.form-container h2:after {
    content: '';
    position: absolute;
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, var(--dark-gold), var(--gold-primary), var(--gold-secondary));
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
}

/* Enhanced Form Controls */
.form-control {
    border: 2px solid var(--gold-light);
    border-radius: 12px;
    padding: 15px 20px;
    height: auto;
    transition: all 0.3s ease;
    color: var(--text-dark);
    background-color: #fafafa;
    font-size: 15px;
}

.form-control:focus {
    border-color: var(--gold-primary);
    box-shadow: 0 0 0 0.3rem rgba(212, 175, 55, 0.25);
    background-color: white;
    transform: translateY(-2px);
}

/* Enhanced Labels */
.form-group label {
    font-weight: 600;
    color: var(--dark-gold);
    margin-bottom: 10px;
    display: block;
    font-size: 16px;
    position: relative;
    padding-left: 25px;
}

.form-group label::before {
    content: '✦';
    position: absolute;
    left: 0;
    color: var(--gold-primary);
    font-size: 14px;
}

/* Enhanced Room Cards */
.card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(212, 175, 55, 0.15);
    transition: all 0.4s ease;
    margin-bottom: 25px;
    background: linear-gradient(135deg, #ffffff 0%, #fefbf3 100%);
    position: relative;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--dark-gold), var(--gold-primary), var(--gold-secondary));
}

.card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(212, 175, 55, 0.25);
}

.card-body {
    padding: 25px;
    text-align: center;
    position: relative;
}

.icon-box {
    margin-bottom: 20px;
    color: var(--gold-primary);
    font-size: 40px;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
}

.card:hover .icon-box {
    transform: scale(1.2) rotate(5deg);
    color: var(--dark-gold);
}

.card-title {
    color: var(--dark-gold);
    font-weight: 700;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
}

.card-text {
    color: var(--text-dark);
    margin-bottom: 10px;
    font-size: 14px;
    font-weight: 500;
}

/* Enhanced Kamar Container */
.kamar-container {
    padding: 40px;
    background: linear-gradient(135deg, #ffffff 0%, #fefbf3 100%);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.15);
    position: relative;
    overflow: hidden;
}

.kamar-container::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
    border-radius: 50%;
}

/* Enhanced Section Title */
.section-title h2 {
    color: var(--dark-gold);
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    position: relative;
    padding-bottom: 20px;
    display: inline-block;
}

.section-title h2:after {
    content: '';
    position: absolute;
    width: 120px;
    height: 4px;
    background: linear-gradient(90deg, var(--dark-gold), var(--gold-primary), var(--gold-secondary));
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
}

/* Enhanced Button */
.btn-primary {
    background: linear-gradient(135deg, var(--dark-gold) 0%, var(--gold-primary) 50%, var(--gold-secondary) 100%);
    border: none;
    color: white;
    font-weight: 700;
    padding: 18px 40px;
    border-radius: 50px;
    transition: all 0.4s ease;
    text-transform: uppercase;
    letter-spacing: 2px;
    box-shadow: 0 8px 25px rgba(212, 175, 55, 0.3);
    position: relative;
    overflow: hidden;
    font-size: 16px;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: 0.6s;
}

.btn-primary:hover::before {
    left: 100%;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(212, 175, 55, 0.4);
    color: white;
}

/* Enhanced Summary Card */
.card-header {
    background: linear-gradient(135deg, var(--dark-gold) 0%, var(--gold-primary) 100%);
    color: white;
    padding: 20px 25px;
    font-weight: 700;
    border: none;
    font-size: 18px;
}

/* Enhanced Input Group */
.input-group .btn-info {
    background: linear-gradient(135deg, var(--gold-secondary), var(--gold-primary));
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 0 12px 12px 0;
    transition: all 0.3s ease;
}

.input-group .btn-info:hover {
    background: linear-gradient(135deg, var(--gold-primary), var(--dark-gold));
    transform: translateY(-2px);
}

/* Enhanced Alert */
.alert-danger {
    background: linear-gradient(135deg, #fff2f2, #ffe6e6);
    border: 2px solid #ffcaca;
    color: #d63031;
    border-radius: 15px;
    padding: 20px;
    font-size: 15px;
    position: relative;
    margin-bottom: 25px;
    border-left: 6px solid #d63031;
}

/* Add floating animation */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.icon-box {
    animation: float 3s ease-in-out infinite;
}

/* Enhanced responsive design */
@media (max-width: 768px) {
    .form-container, .kamar-container {
        padding: 25px 20px;
        margin-bottom: 20px;
    }
    
    .form-container h2, .section-title h2 {
        font-size: 26px;
    }
    
    .btn-primary {
        padding: 15px 30px;
        font-size: 14px;
        letter-spacing: 1px;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Form Container -->
            <div class="col-md-6 form-container">
                <h2>Formulir Reservasi Eksklusif</h2>
                <form method="post" action="{{ route('pesanReservasi.store') }}">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="nama_tamu">Nama Lengkap Tamu</label>
                        <input class="form-control" type="text" required placeholder="Masukkan nama lengkap untuk konfirmasi reservasi" name="nama_tamu"
                            value="{{ old('nama_tamu') }}" autofocus>
                        @error('nama_tamu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input class="form-control" type="email" required placeholder="Masukkan email untuk konfirmasi reservasi" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Telepon Aktif</label>
                        <input class="form-control" type="text" required placeholder="Masukkan nomor telepon untuk komunikasi layanan" name="no_hp"
                            value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kamar">Jumlah Kamar yang Diinginkan</label>
                        <input class="form-control" type="number" required placeholder="Tentukan jumlah kamar untuk kenyamanan Anda"
                            name="jumlah_kamar" value="{{ old('jumlah_kamar') }}">
                        @error('jumlah_kamar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">Nomor Identitas (NIK/Paspor)</label>
                        <input class="form-control" type="text" required placeholder="Masukkan nomor identitas untuk verifikasi" name="nik"
                            value="{{ old('nik') }}">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tipe_kamar">Pilihan Tipe Kamar</label>
                        <select class="form-control" name="tipe_kamar" id="tipe_kamar" required>
                            <option value="" disabled selected>Pilih Tipe Kamar Eksklusif</option>
                            @foreach($dataKamar as $row)
                                <option value="{{ $row->id }}" data-harga="{{ $row->harga }}">
                                    {{ $row->tipe_kamar }}
                                </option>
                            @endforeach
                        </select>
                        <small id="ketersediaan_kamar" class="form-text text-muted"></small>
                        @error('tipe_kamar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_check_in">Tanggal Check In</label>
                        <input class="form-control" type="date" required name="tgl_check_in"
                            value="{{ old('tgl_check_in') }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_check_out">Tanggal Check Out</label>
                        <input class="form-control" type="date" required name="tgl_check_out"
                            value="{{ old('tgl_check_out') }}">
                    </div>
                    <div class="form-group">
                        <label for="voucher_code">Kode Voucher Eksklusif (Opsional)</label>
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Masukkan kode voucher untuk mendapatkan diskon spesial" name="voucher_code" value="{{ old('voucher_code') }}">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-info" id="check-voucher">Cek Voucher</button>
                            </div>
                        </div>
                        <small id="voucher-info" class="form-text"></small>
                        @error('voucher_code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="metode_pembayaran">Metode Pembayaran Pilihan</label>
                        <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                            <option value="online">Pembayaran Online (Segera)</option>
                            <option value="offline">Pembayaran di Tempat (Saat Check-in)</option>
                        </select>
                    </div>
                    <!-- Ringkasan Harga -->
                    <div class="card mt-4 mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">Ringkasan Reservasi Anda</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Harga Per Kamar:</span>
                                <span id="harga-kamar">Rp 0</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Durasi Menginap:</span>
                                <span id="jumlah-malam">0 malam</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Jumlah Kamar:</span>
                                <span id="jumlah-kamar-display">0 kamar</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Total Tagihan:</span>
                                <span id="total-harga">Rp 0</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2" id="diskon-row" style="display: none;">
                                <span>Potongan Diskon:</span>
                                <span id="diskon-harga" class="text-success">- Rp 0</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between font-weight-bold">
                                <span>Total Pembayaran:</span>
                                <span id="total-bayar">Rp 0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-btn">
                        <button class="btn btn-primary btn-block">LANJUTKAN KE PEMBAYARAN</button>
                    </div>
                </form>
            </div>
            <!-- Kamar Container -->
            <div class="col-md-6 kamar-container">
                <div class="section-title">
                    <h2>Pilihan Kamar Eksklusif</h2>
                </div>
                <div class="row">
                    @php $counter = 0; @endphp
                    @foreach($dataKamar as $row)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="icon-box">
                                            <i class="bi bi-house-door-fill"></i>
                                        </div>
                                        <h4 class="card-title">{{ $row->tipe_kamar }}</h4>
                                        <p class="card-text">Tarif: Rp. {{ number_format($row->harga, 0, ',', '.') }} per malam</p>
                                        <p class="card-text">Ketersediaan: {{ $row->jumlah_kamar }} unit</p>
                                    </div>
                                </div>
                            </div>
                            @php    $counter++; @endphp
                            @if($counter % 2 == 0)
                                </div>
                                <div class="row">
                            @endif
                    @endforeach
                </div>
            </div>
    <!-- jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    $(document).ready(function() {
        var currentDiscount = 0;
        var currentTotalHarga = 0;
        
        // Fungsi untuk memformat angka menjadi format rupiah
        function formatRupiah(angka) {
            return 'Rp ' + angka.toLocaleString('id-ID');
        }
        
        // Fungsi untuk menghitung total harga
        function hitungTotalHarga() {
            var tipeKamar = $('#tipe_kamar').val();
            var jumlahKamar = $('input[name="jumlah_kamar"]').val() || 0;
            var tglCheckIn = $('input[name="tgl_check_in"]').val();
            var tglCheckOut = $('input[name="tgl_check_out"]').val();
            
            if (!tipeKamar || !jumlahKamar || !tglCheckIn || !tglCheckOut) {
                return 0;
            }
            
            // Hitung total harga
            var hargaKamar = $('#tipe_kamar option:selected').data('harga');
            var checkIn = new Date(tglCheckIn);
            var checkOut = new Date(tglCheckOut);
            var timeDiff = Math.abs(checkOut.getTime() - checkIn.getTime());
            var jumlahMalam = Math.ceil(timeDiff / (1000 * 3600 * 24));
            
            if (jumlahMalam <= 0) {
                jumlahMalam = 1; // Minimal 1 malam
            }
            
            // Update tampilan
            $('#harga-kamar').text(formatRupiah(hargaKamar));
            $('#jumlah-malam').text(jumlahMalam + ' malam');
            $('#jumlah-kamar-display').text(jumlahKamar + ' kamar');
            
            var totalHarga = hargaKamar * jumlahKamar * jumlahMalam;
            $('#total-harga').text(formatRupiah(totalHarga));
            
            // Update total bayar
            var totalBayar = totalHarga - currentDiscount;
            if (totalBayar < 0) totalBayar = 0;
            $('#total-bayar').text(formatRupiah(totalBayar));
            
            currentTotalHarga = totalHarga;
            return totalHarga;
        }
        
        // Event listener untuk perubahan pada form
        $('#tipe_kamar, input[name="jumlah_kamar"], input[name="tgl_check_in"], input[name="tgl_check_out"]').on('change', function() {
            hitungTotalHarga();
            // Reset voucher info jika form berubah
            $('#voucher-info').html('');
            $('#diskon-row').hide();
            currentDiscount = 0;
        });
        
        // Validasi voucher
        $('#check-voucher').click(function() {
            var voucherCode = $('input[name="voucher_code"]').val();
            var totalHarga = hitungTotalHarga();
            
            if (!voucherCode) {
                $('#voucher-info').html('<span class="text-danger">Mohon masukkan kode voucher eksklusif Anda</span>');
                return;
            }
            
            if (totalHarga <= 0) {
                $('#voucher-info').html('<span class="text-danger">Silakan lengkapi informasi reservasi Anda terlebih dahulu</span>');
                return;
            }
            
            // Kirim permintaan AJAX untuk memeriksa voucher
            $.ajax({
                url: '/check-voucher',
                type: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    voucher_code: voucherCode,
                    total_harga: totalHarga
                },
                success: function(response) {
                    if (response.valid) {
                        var diskonText = '';
                        if (response.type === 'percentage') {
                            diskonText = response.value + '% (' + formatRupiah(response.discount_amount) + ')';
                        } else {
                            diskonText = formatRupiah(response.discount_amount);
                        }
                        
                        $('#voucher-info').html('<span class="text-success">Voucher eksklusif berhasil diterapkan! Diskon: ' + diskonText + '</span>');
                        
                        // Update tampilan diskon
                        $('#diskon-row').show();
                        $('#diskon-harga').text('- ' + formatRupiah(response.discount_amount));
                        
                        // Update total bayar
                        currentDiscount = response.discount_amount;
                        var totalBayar = currentTotalHarga - currentDiscount;
                        if (totalBayar < 0) totalBayar = 0;
                        $('#total-bayar').text(formatRupiah(totalBayar));
                    } else {
                        $('#voucher-info').html('<span class="text-danger">' + response.message + '</span>');
                        $('#diskon-row').hide();
                        currentDiscount = 0;
                        $('#total-bayar').text(formatRupiah(currentTotalHarga));
                    }
                },
                error: function() {
                    $('#voucher-info').html('<span class="text-danger">Mohon maaf, terjadi kendala saat memverifikasi voucher Anda</span>');
                    $('#diskon-row').hide();
                    currentDiscount = 0;
                    $('#total-bayar').text(formatRupiah(currentTotalHarga));
                }
            });
        });
        
        // Hitung total harga awal saat halaman dimuat
        hitungTotalHarga();
    });
    </script>
</body>

</html>