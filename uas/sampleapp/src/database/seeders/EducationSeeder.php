<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education; // Tambahkan ini agar model dikenali

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'technology_name' => 'Learning Management System (LMS)',
            'category' => 'LMS',
            'description' => 'Sistem untuk manajemen pembelajaran daring.',
            'implemented_by' => 'Sekolah & Universitas',
            'implemented_since' => '2015-01-01',
            'location' => 'Online & Hybrid',
            'benefits' => 'Mempermudah akses dan monitoring pembelajaran.',
            'challenges' => 'Butuh pelatihan bagi pendidik.',
        ]);    
    }
}
