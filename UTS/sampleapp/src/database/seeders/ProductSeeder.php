<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Laptop ASUS ROG',
                'description' => 'Laptop gaming dengan performa tinggi.',
                'price' => 25000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone Samsung Galaxy',
                'description' => 'Smartphone dengan kamera luar biasa.',
                'price' => 12000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headset Sony WH-1000XM4',
                'description' => 'Headset dengan noise cancelling terbaik.',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
