<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReservasi extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = [
        'nama_tamu', 'email', 'no_hp', 'nik', 'tipe_kamar', 'jumlah_kamar', 
        'tgl_check_in', 'tgl_check_out', 'harga', 'kode_booking', 'status_pembayaran', 
        'diskon', 'total_bayar', 'voucher_code',
        'status_checkin', 'checkin_at', 'checkout_at',
        'payment_amount', 'payment_method', 'payment_notes', 'payment_date'
    ];
    
}