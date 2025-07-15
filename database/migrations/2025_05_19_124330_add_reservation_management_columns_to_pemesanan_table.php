<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            // Kolom untuk status check-in
            $table->string('status_checkin')->nullable()->default(null)->comment('null=belum check-in, checked_in=sudah check-in, checked_out=sudah check-out');
            $table->timestamp('checkin_at')->nullable();
            $table->timestamp('checkout_at')->nullable();
            
            // Kolom untuk informasi pembayaran
            $table->decimal('payment_amount', 12, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->text('payment_notes')->nullable();
            $table->timestamp('payment_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->dropColumn([
                'status_checkin',
                'checkin_at',
                'checkout_at',
                'payment_amount',
                'payment_method',
                'payment_notes',
                'payment_date'
            ]);
        });
    }
};
