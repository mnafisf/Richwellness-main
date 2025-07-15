<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->string('voucher_code')->nullable()->after('status_pembayaran');
            $table->bigInteger('diskon')->nullable()->after('voucher_code');
            $table->bigInteger('total_bayar')->nullable()->after('diskon');
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
            $table->dropColumn(['voucher_code', 'diskon', 'total_bayar']);
        });
    }
};
