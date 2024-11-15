# Dokumen Persyaratan Bisnis (BRD)
**Proyek:** Sistem Manajemen Pembayaran dan Produk  
**Versi:** 1.0  
**Tanggal:** 15 November 2024  

---

## 1. Tujuan Proyek
### Objektif:
Aplikasi ini bertujuan untuk mempermudah pengelolaan data pembayaran dan produk secara efisien. Sistem ini memungkinkan admin mengelola data produk dan pembayaran pelanggan, sekaligus memberikan transparansi pembayaran.

---

## 2. Fitur Utama

### Untuk Admin:
1. **Pengelolaan Produk:**
   - Menambah, mengubah, dan menghapus data produk.
   - Setiap produk mencakup informasi seperti:
     - Nama produk
     - Deskripsi
     - Harga

2. **Pengelolaan Pembayaran:**
   - Menambah, mengubah, dan menghapus data pembayaran.
   - Melihat status pembayaran (pending, completed, failed).
   - Setiap pembayaran mencakup informasi seperti:
     - Produk yang dibeli
     - Jumlah pembayaran
     - Status pembayaran

### Untuk Pengguna Umum (Customer):
1. **Melihat Data Produk:**
   - Mengakses daftar produk yang tersedia beserta detailnya (nama, deskripsi, harga).

2. **Melihat Status Pembayaran:**
   - Mengecek status pembayaran mereka berdasarkan ID pembayaran atau produk terkait.

---

## 3. Persyaratan Fungsional

### Sistem Login:
- **Akses Berdasarkan Peran:**
  - Admin: Mengelola produk dan pembayaran.
  - Pengguna Umum: Melihat produk dan status pembayaran mereka.

### Pengelolaan Data Produk:
- Admin dapat melakukan operasi CRUD (Create, Read, Update, Delete) untuk produk.

### Pengelolaan Data Pembayaran:
- Admin dapat menambah, mengedit, dan menghapus data pembayaran.
- Sistem mencatat status pembayaran (pending, completed, failed).

---

## 4. Persyaratan Non-Fungsional

- **Kegunaan:** Antarmuka yang sederhana dan ramah pengguna.
- **Keamanan:**
  - Admin memiliki hak akses penuh untuk pengelolaan data.
  - Pengguna umum hanya memiliki hak akses baca untuk produk dan status pembayaran mereka.
- **Kinerja:** Sistem harus mampu menangani setidaknya 1000 transaksi per hari tanpa penurunan performa.

---

## 5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat

### Produk (Products):
- **Model:**
  - Menyimpan informasi produk, meliputi:
    - id (bigint UNSIGNED - Primary Key)
    - name (varchar)
    - description (text, nullable)
    - price (decimal)
    - created_at (timestamp)
    - updated_at (timestamp)
- **Migration:** Tabel untuk menyimpan informasi produk.
- **Seeder:** Data awal untuk produk (contoh: Laptop, Smartphone, Headset).

### Pembayaran (Payments):
- **Model:**
  - Menyimpan informasi pembayaran, meliputi:
    - id (bigint UNSIGNED - Primary Key)
    - product_id (foreign key ke tabel produk)
    - amount (decimal)
    - payment_status (varchar)
    - created_at (timestamp)
    - updated_at (timestamp)
- **Migration:** Tabel untuk menyimpan informasi pembayaran.
- **Seeder:** Data awal untuk pembayaran (contoh: pembayaran selesai, pending, gagal).

### Resource API:
- **Produk:**
  - Endpoint untuk daftar produk, menambah, mengubah, dan menghapus data produk (khusus admin).
- **Pembayaran:**
  - Endpoint untuk melihat status pembayaran dan mengelola data pembayaran (khusus admin).

---

## 6. Analisis Permissions untuk Admin dan Pengguna

### Permissions untuk Admin:
- **manage_products:** Mengelola data produk (CRUD).
- **manage_payments:** Mengelola data pembayaran (CRUD).

### Permissions untuk Pengguna:
- **view_products:** Melihat daftar produk yang tersedia.
- **view_payment_status:** Melihat status pembayaran berdasarkan ID mereka.

### Implementasi Model dan Seeder untuk Permissions:
- **Model:** Menggunakan model bawaan dari Spatie Laravel Permission.
- **Seeder:** Seeder untuk menambahkan permissions:
  - Admin mendapatkan akses penuh (manage_products dan manage_payments).
  - Pengguna mendapatkan akses terbatas (view_products dan view_payment_status).

---

## Changelog

| Versi | Tanggal       | Penulis       | Deskripsi                                                              |
|-------|---------------|---------------|------------------------------------------------------------------------|
| 1.0   | 15-11-2024    | Dinda Claudya | Draft dokumen awal untuk aplikasi manajemen pembayaran dan produk.     |

