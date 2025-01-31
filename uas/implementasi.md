# Sistem Inovasi Pendidikan

## 1. Persiapkan Lingkungan
Pastikan bahwa Anda telah menginstal PHP, Composer, dan Laravel di Ubuntu Anda. Jika belum, Anda bisa menginstalnya melalui terminal:

```bash
sudo apt update
sudo apt install php php-cli php-fpm php-mbstring php-xml php-curl unzip curl
sudo apt install composer
composer global require laravel/installer

## 2. Buat Proyek Laravel
Buat proyek Laravel baru menggunakan perintah berikut:

laravel new sistem_inovasi_pendidikan
cd sistem_inovasi_pendidikan

## 3. Konfigurasi Database
Edit file .env untuk mengonfigurasi koneksi database Anda:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistem_inovasi_pendidikan
DB_USERNAME=root
DB_PASSWORD=

Pastikan Anda telah membuat database di MySQL:

CREATE DATABASE sistem_inovasi_pendidikan;

## 4. Membuat Migration untuk Tabel
4.1. Profil Institusi Pendidikan
Buat migration untuk tabel institusi:

php artisan make:migration create_institusi_table
Edit file migration di database/migrations/{timestamp}_create_institusi_table.php:

public function up()
{
    Schema::create('institusi', function (Blueprint $table) {
        $table->id();
        $table->string('nama_institusi');
        $table->text('misi');
        $table->text('visi');
        $table->string('alamat');
        $table->string('kontak');
        $table->timestamps();
    });
}
4.2. Dashboard Kontrol
Buat migration untuk tabel dashboard:

php artisan make:migration create_dashboard_table
Edit file migration untuk tabel dashboard:

public function up()
{
    Schema::create('dashboard', function (Blueprint $table) {
        $table->id();
        $table->integer('total_program');
        $table->integer('jumlah_program_aktif');
        $table->integer('jumlah_program_berhasil');
        $table->integer('jumlah_program_gagal');
        $table->string('status_institusi');
        $table->timestamps();
    });
}
4.3. Program Inovasi Pendidikan
Buat migration untuk tabel program_inovasi:

php artisan make:migration create_program_inovasi_table
Edit file migration untuk tabel program_inovasi:

public function up()
{
    Schema::create('program_inovasi', function (Blueprint $table) {
        $table->id();
        $table->string('nama_program');
        $table->string('jenis_program');
        $table->string('status_program');
        $table->date('tanggal_mulai');
        $table->date('tanggal_selesai');
        $table->timestamps();
    });
}
4.4. Evaluasi dan Penilaian Program
Buat migration untuk tabel penilaian_program:

php artisan make:migration create_penilaian_program_table
Edit file migration untuk tabel penilaian_program:

public function up()
{
    Schema::create('penilaian_program', function (Blueprint $table) {
        $table->id();
        $table->foreignId('program_id')->constrained('program_inovasi');
        $table->string('kinerja');
        $table->text('penilaian_feedback');
        $table->string('peringkat');
        $table->timestamps();
    });
}
4.5. Penjadwalan Pelatihan Teknologi
Buat migration untuk tabel pelatihan_technology:

php artisan make:migration create_pelatihan_technology_table
Edit file migration untuk tabel pelatihan_technology:

public function up()
{
    Schema::create('pelatihan_technology', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelatihan');
        $table->string('jenis_pelatihan');
        $table->date('tanggal_pelatihan');
        $table->string('lokasi');
        $table->integer('peserta');
        $table->timestamps();
    });
}
4.6. Inovasi Penggunaan Teknologi dalam Pembelajaran
Buat migration untuk tabel inovasi_pembelajaran:

php artisan make:migration create_inovasi_pembelajaran_table
Edit file migration untuk tabel inovasi_pembelajaran:

public function up()
{
    Schema::create('inovasi_pembelajaran', function (Blueprint $table) {
        $table->id();
        $table->string('nama_inovasi');
        $table->text('deskripsi');
        $table->date('tanggal_implementasi');
        $table->text('hasil');
        $table->timestamps();
    });
}
## 5. Membuat Seeder
5.1. Seeder untuk Institusi
Buat seeder untuk institusi:

php artisan make:seeder InstitusiSeeder
Edit file seeder di database/seeders/InstitusiSeeder.php:

public function run()
{
    DB::table('institusi')->insert([
        'nama_institusi' => 'Universitas EduTech',
        'misi' => 'Meningkatkan kualitas pendidikan dengan inovasi teknologi',
        'visi' => 'Menjadi pusat unggulan dalam penerapan teknologi pendidikan',
        'alamat' => 'Jl. Pendidikan No. 10, Jakarta',
        'kontak' => '021-98765432',
    ]);
}
5.2. Seeder untuk Dashboard
Buat seeder untuk dashboard:

php artisan make:seeder DashboardSeeder
Edit file seeder di database/seeders/DashboardSeeder.php:

public function run()
{
    DB::table('dashboard')->insert([
        'total_program' => 10,
        'jumlah_program_aktif' => 7,
        'jumlah_program_berhasil' => 5,
        'jumlah_program_gagal' => 2,
        'status_institusi' => 'Aktif',
    ]);
}
5.3. Seeder untuk Program Inovasi
Buat seeder untuk program_inovasi:

php artisan make:seeder ProgramInovasiSeeder
Edit file seeder di database/seeders/ProgramInovasiSeeder.php:

public function run()
{
    DB::table('program_inovasi')->insert([
        'nama_program' => 'Digitalisasi Pembelajaran',
        'jenis_program' => 'Digitalisasi',
        'status_program' => 'Selesai',
        'tanggal_mulai' => '2024-03-01',
        'tanggal_selesai' => '2024-08-01',
    ]);
}
## 6. Menjalankan Migrasi dan Seeder
Jalankan migrasi dan seeder untuk menambahkan tabel dan data:

php artisan migrate --seed
## 7. Membuat User dan Auth
Untuk autentikasi pengguna, Anda bisa menggunakan Laravel Breeze atau Laravel Jetstream. Sebagai contoh, untuk Laravel Breeze:

composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate
## 8. Membuat Controller dan Route
untuk menangani Institusi, buat controller:

php artisan make:controller InstitusiController
Dan tentukan route di routes/web.php:

use App\Http\Controllers\InstitusiController;

Route::resource('institusi', InstitusiController::class);
