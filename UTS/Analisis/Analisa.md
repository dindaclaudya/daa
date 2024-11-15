# Dokumentasi Aplikasi Pengelolaan Pembayaran Produk

## Tujuan Aplikasi
Aplikasi ini dirancang untuk membantu dalam pengelolaan data pembayaran produk secara efisien. Fitur utamanya mencakup pembuatan, pengelolaan, dan pelacakan pembayaran yang terhubung dengan produk. Dengan aplikasi ini, pengguna dapat memantau status pembayaran, memvalidasi transaksi, dan melihat detail produk yang terkait dengan pembayaran tersebut.

---

## Aktor
### 1. Admin
- Memiliki akses penuh untuk mengelola data produk dan pembayaran.
- Dapat menambahkan, mengedit, dan menghapus produk maupun pembayaran.
- Memantau status pembayaran untuk memastikan kelancaran transaksi.

### 2. Pengguna Umum (User)
- Memiliki akses terbatas untuk melihat daftar produk dan pembayaran.
- Dapat melihat detail produk dan status pembayaran yang relevan.

---

## Fitur dan Fungsionalitas
### Fitur untuk Admin
#### 1. Manajemen Produk
- Menambahkan, mengedit, dan menghapus produk.
- Setiap produk memiliki atribut seperti nama, deskripsi, dan harga.
- Harga produk dicatat dalam format desimal untuk akurasi.

#### 2. Manajemen Pembayaran
- Menambahkan, mengedit, dan menghapus data pembayaran.
- Setiap pembayaran memiliki atribut seperti produk yang dibayar, jumlah pembayaran, dan status pembayaran (pending, completed, atau failed).

#### 3. Pemantauan Status Pembayaran
- Admin dapat melihat daftar pembayaran dengan filter berdasarkan status pembayaran untuk memantau transaksi.

### Fitur untuk Pengguna Umum
#### 1. Melihat Daftar Produk
- Pengguna dapat melihat daftar produk dengan detail seperti nama, deskripsi, dan harga.

#### 2. Melihat Status Pembayaran
- Pengguna dapat melihat status pembayaran terkait produk, termasuk jumlah pembayaran dan statusnya.

---

## Hubungan Data
### Produk dan Pembayaran
- **Relasi:** Satu produk dapat memiliki banyak pembayaran, tetapi satu pembayaran hanya terhubung ke satu produk.
- **Implementasi:** Menggunakan relasi One-to-Many di Laravel:
  - Model `Product` memiliki relasi `hasMany` ke model `Payment`.
  - Model `Payment` memiliki relasi `belongsTo` ke model `Product`.

---

## Struktur Database
### 1. Tabel `products`
| Kolom         | Tipe Data  | Keterangan                        |
|---------------|------------|------------------------------------|
| id            | Primary Key | ID unik untuk produk              |
| name          | String      | Nama produk                      |
| description   | Text        | Deskripsi produk                 |
| price         | Decimal     | Harga produk                     |
| timestamps    | Timestamps  | Waktu pembuatan dan pembaruan data|

### 2. Tabel `payments`
| Kolom          | Tipe Data   | Keterangan                        |
|----------------|-------------|------------------------------------|
| id             | Primary Key | ID unik untuk pembayaran          |
| product_id     | Foreign Key | Terhubung ke tabel `products`     |
| amount         | Decimal     | Jumlah pembayaran                 |
| payment_status | Enum        | Status pembayaran (pending, completed, failed) |
| timestamps     | Timestamps  | Waktu pembuatan dan pembaruan data|

---

## Deskripsi Fungsionalitas
### 1. Admin Menambahkan Produk
- Admin dapat memasukkan detail produk seperti nama, deskripsi, dan harga.
- Produk yang ditambahkan akan otomatis tersedia di daftar produk.

### 2. Admin Menambahkan Pembayaran
- Admin memilih produk dari daftar produk, kemudian memasukkan jumlah pembayaran dan statusnya.
- Data pembayaran ini dicatat dengan relasi ke produk terkait.

### 3. Admin Melihat Status Pembayaran
- Admin dapat memantau daftar pembayaran dengan filter berdasarkan status (pending, completed, atau failed).

### 4. Pengguna Melihat Daftar Produk
- Pengguna dapat melihat daftar produk yang tersedia beserta detailnya.

### 5. Pengguna Melihat Data Pembayaran
- Pengguna dapat melihat pembayaran terkait produk yang dipilih, termasuk jumlah dan status pembayaran.

---

## Keunggulan Aplikasi
### 1. Efisiensi
- Data produk dan pembayaran terintegrasi dengan baik, memudahkan admin dalam pengelolaan data.

### 2. Transparansi
- Pengguna dapat memantau status pembayaran dengan jelas.

### 3. Relasi yang Jelas
- Relasi antara tabel `products` dan `payments` memastikan data saling terhubung dengan akurat.
