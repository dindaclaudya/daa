<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Payment::insert([
            [
                'product_id' => 1, // ID produk yang sudah ada
                'amount' => 25000000,
                'payment_status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2, // ID produk yang sudah ada
                'amount' => 12000000,
                'payment_status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3, // ID produk yang sudah ada
                'amount' => 5000000,
                'payment_status' => 'failed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
