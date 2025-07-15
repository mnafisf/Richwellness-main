<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_kamar')->insert([
            [
                'tipe_kamar' => 'Standard',
                'jumlah_kamar' => 10,
                'harga' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Deluxe',
                'jumlah_kamar' => 8,
                'harga' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Superior',
                'jumlah_kamar' => 5,
                'harga' => 400000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Suite',
                'jumlah_kamar' => 3,
                'harga' => 600000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Executive Suite',
                'jumlah_kamar' => 2,
                'harga' => 800000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Family Room',
                'jumlah_kamar' => 4,
                'harga' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_kamar' => 'Single Room',
                'jumlah_kamar' => 6,
                'harga' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
