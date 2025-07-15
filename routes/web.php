<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\DataReservasiController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VoucherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 
    [FasilitasKamarController::class, 'homepage']
);

Route::resource('pesanReservasi', PemesananController::class)->except(['create', 'store']);
Route::get('pesanReservasi/create', [PemesananController::class, 'showForm'])->name('pesanReservasi.create');
Route::post('pesanReservasi/store', [PemesananController::class, 'store'])->name('pesanReservasi.store');
Route::get('bukti-online', [PemesananController::class, 'showBuktiOnline'])->name('bukti.online');
Route::get('/cetak-bukti', [PemesananController::class, 'cetakBukti'])->name('cetak.bukti');

Route::middleware(['is_admin'])->group(function () {
    Route::resource('dataKamar', DataKamarController::class);
    // Voucher management routes
    Route::resource('vouchers', VoucherController::class);
    Route::put('vouchers/{voucher}/toggle-status', [VoucherController::class, 'toggleStatus'])->name('vouchers.toggle-status');
    // Add other routes that can only be accessed by admin here
});

Route::get('cetak', [PemesananController::class, 'cetakBukti']);

Auth::routes();

// Route::get('dataKamar', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home'); // Commented out as duplicate
// Route::get('dataReservasi', [App\Http\Controllers\HomeController::class, 'resepsionis'])->name('home')->middleware('is_receptionist'); // Commented out as duplicate

// Add other routes here if needed

// Dashboard untuk resepsionis
Route::get('/dashboard', function () {
    return view('resepsionis.dashboard');
})->name('dashboard')->middleware(['auth', 'is_receptionist']);

// Route diagnosa foto profil user
use Illuminate\Support\Facades\Auth;
Route::get('/cek-foto', function() {
    $user = Auth::user();
    if (!$user) return 'Belum login';
    $path = $user->photo ? storage_path('app/public/'.$user->photo) : 'tidak ada photo';
    $url = $user->photo ? asset('storage/'.$user->photo) : 'tidak ada photo';
    $fileExists = $user->photo && file_exists($path);
    return [
        'photo_db' => $user->photo,
        'storage_path' => $path,
        'url' => $url,
        'file_exists' => $fileExists,
    ];
});
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::put('/update-status/{id}', [PemesananController::class, 'updateStatus']);

Route::resource('dataKamar', DataKamarController::class);
Route::resource('fasilitasKamar', FasilitasKamarController::class);

// Main route for receptionist reservation data
Route::get('/dataReservasi', [DataReservasiController::class, 'index'])->name('dataReservasi.index')->middleware('is_receptionist');
Route::get('/dataReservasi/search', [DataReservasiController::class, 'cari']);
Route::get('/dataReservasi/filter', [DataReservasiController::class, 'tanggal']);
Route::get('/dataReservasi/cari', [DataReservasiController::class, 'cari'])->name('dataReservasi.cari');


Route::get('/cetak', [PemesananController::class, 'cetakBukti']);

Auth::routes();
Route::get('/dataKamar', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
// Route for receptionist home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'resepsionis'])->name('home')->middleware('is_receptionist');

Route::get('/dataReservasi/edit/{id}', [DataReservasiController::class, 'edit'])->name('dataReservasi.edit');
Route::put('/dataReservasi/update/{id}', [DataReservasiController::class, 'update'])->name('dataReservasi.update');
Route::delete('/dataReservasi/delete/{id}', [DataReservasiController::class, 'destroy'])->name('dataReservasi.destroy');

// Rute untuk manajemen reservasi pada dashboard resepsionis
Route::post('/process-checkin/{id}', [DataReservasiController::class, 'processCheckIn'])->name('process.checkin')->middleware('is_receptionist');
Route::post('/process-checkout/{id}', [DataReservasiController::class, 'processCheckOut'])->name('process.checkout')->middleware('is_receptionist');
Route::post('/process-payment/{id}', [DataReservasiController::class, 'processPayment'])->name('process.payment')->middleware('is_receptionist');
Route::get('/print-invoice/{id}', [DataReservasiController::class, 'printInvoice'])->name('print.invoice')->middleware('is_receptionist');


// admin ganti password

// Route untuk halaman autentikasi
Auth::routes();

// Route untuk login dengan Google
Route::get('login/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

// Route untuk halaman lain yang membutuhkan autentikasi



Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');

Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');

// Route untuk validasi voucher
Route::post('/check-voucher', [App\Http\Controllers\VoucherCheckController::class, 'checkVoucher'])->name('check.voucher');

