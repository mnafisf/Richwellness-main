<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherCheckController extends Controller
{
    /**
     * Check if a voucher is valid and calculate discount
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkVoucher(Request $request)
    {
        $request->validate([
            'voucher_code' => 'required|string|max:20',
            'total_harga' => 'required|numeric|min:0',
        ]);
        
        $voucher = Voucher::where('code', $request->voucher_code)->first();
        
        if (!$voucher) {
            return response()->json([
                'valid' => false,
                'message' => 'Voucher tidak ditemukan'
            ]);
        }
        
        if (!$voucher->isValid()) {
            $message = 'Voucher tidak valid';
            
            if (!$voucher->is_active) {
                $message = 'Voucher tidak aktif';
            } elseif (now() < $voucher->start_date) {
                $message = 'Voucher belum berlaku';
            } elseif (now() > $voucher->end_date) {
                $message = 'Voucher sudah berakhir';
            } elseif ($voucher->usage_limit !== null && $voucher->used_count >= $voucher->usage_limit) {
                $message = 'Batas penggunaan voucher telah tercapai';
            }
            
            return response()->json([
                'valid' => false,
                'message' => $message
            ]);
        }
        
        // Cek minimum order
        if ($voucher->min_order && $request->total_harga < $voucher->min_order) {
            return response()->json([
                'valid' => false,
                'message' => 'Minimum pemesanan Rp ' . number_format($voucher->min_order, 0, ',', '.')
            ]);
        }
        
        // Hitung diskon
        $discount = $voucher->calculateDiscount($request->total_harga);
        
        return response()->json([
            'valid' => true,
            'type' => $voucher->type,
            'value' => $voucher->value,
            'discount_amount' => $discount,
            'total_after_discount' => $request->total_harga - $discount,
            'message' => 'Voucher valid'
        ]);
    }
}
