# Sistem Manajemen Atlet Sepak Bola

Sistem ini digunakan untuk mengelola data atlet sepak bola, termasuk profil perusahaan, latihan, data pribadi atlet, penilaian atlet, klasemen, dan jadwal pertandingan.

## 1. Company Profile
Tabel ini menyimpan informasi profil perusahaan, yang mencakup misi, visi, dan data penting lainnya.

| **Field**             | **Description**                                      |
|-----------------------|------------------------------------------------------|
| ID Perusahaan         | ID unik perusahaan                                   |
| Nama Perusahaan       | Nama perusahaan yang mengelola pengembangan atlet.    |
| Misi                  | Misi perusahaan dalam mengembangkan atlet sepak bola. |
| Visi                  | Visi perusahaan untuk masa depan atlet sepak bola.    |
| Alamat                | Alamat kantor pusat perusahaan.                      |
| Kontak                | Kontak perusahaan untuk informasi lebih lanjut.      |

**Contoh Data**:

| **ID Perusahaan** | **Nama Perusahaan** | **Misi** | **Visi** | **Alamat** | **Kontak** |
|-------------------|---------------------|----------|----------|------------|------------|
| 1                 | PT. Atlet Muda      | Mencari dan mengembangkan bibit atlet muda | Menjadi pusat pelatihan atlet terbaik | Jl. Atlet No. 5, Jakarta | 021-12345678 |

## 2. Dashboard Kontrol
Tabel ini mencatat statistik yang digunakan di dashboard untuk memantau kinerja dan statistik perusahaan serta atlet.

| **Field**             | **Description**                                       |
|-----------------------|-------------------------------------------------------|
| ID Dashboard          | ID unik untuk dashboard                               |
| Total Atlet Terdaftar | Jumlah atlet yang terdaftar dalam program pelatihan  |
| Jumlah Atlet Aktif    | Jumlah atlet yang aktif dalam pelatihan               |
| Jumlah Atlet Siap Bertanding | Jumlah atlet yang siap bertanding              |
| Jumlah Turnamen Terkini | Jumlah turnamen yang sedang berlangsung            |
| Status Perusahaan     | Status terkini dari perusahaan (Aktif/Inaktif)       |

**Contoh Data**:

| **ID Dashboard** | **Total Atlet Terdaftar** | **Jumlah Atlet Aktif** | **Jumlah Atlet Siap Bertanding** | **Jumlah Turnamen Terkini** | **Status Perusahaan** |
|------------------|---------------------------|------------------------|----------------------------------|----------------------------|------------------------|
| 1                | 50                        | 45                     | 30                               | 3                          | Aktif                  |

## 3. Porsi Latihan
Tabel ini berfungsi untuk mencatat data latihan yang disesuaikan dengan kebutuhan atlet.

| **Field**             | **Description**                                       |
|-----------------------|-------------------------------------------------------|
| ID Latihan            | ID unik latihan                                        |
| ID Atlet              | ID atlet yang menjalani latihan                        |
| Jenis Latihan         | Jenis latihan yang dilakukan (fisik, teknik, mental)  |
| Frekuensi             | Frekuensi latihan (misalnya, 3x/minggu)                |
| Status Penyelesaian   | Status apakah latihan telah selesai atau belum        |
| Tanggal Latihan       | Tanggal latihan dilakukan                             |

**Contoh Data**:

| **ID Latihan** | **ID Atlet** | **Jenis Latihan** | **Frekuensi** | **Status Penyelesaian** | **Tanggal Latihan** |
|----------------|--------------|-------------------|---------------|-------------------------|---------------------|
| 1              | 1001         | Latihan Fisik     | 3x/minggu     | Selesai                 | 2025-01-15          |
| 2              | 1002         | Latihan Teknik    | 2x/minggu     | Belum Selesai           | 2025-01-18          |

## 4. Data Personal Atlet
Tabel ini menyimpan data pribadi atlet yang terdaftar dalam sistem.

| **Field**             | **Description**                                      |
|-----------------------|------------------------------------------------------|
| ID Atlet              | ID unik atlet                                        |
| Nama                  | Nama lengkap atlet                                   |
| Tanggal Lahir         | Tanggal lahir atlet                                  |
| Posisi                | Posisi atlet dalam tim                               |
| Tinggi Badan          | Tinggi badan atlet (dalam cm)                        |
| Berat Badan           | Berat badan atlet (dalam kg)                         |
| Tim                   | Tim tempat atlet bermain                             |

**Contoh Data**:

| **ID Atlet** | **Nama**          | **Tanggal Lahir** | **Posisi**  | **Tinggi Badan** | **Berat Badan** | **Tim** |
|--------------|-------------------|-------------------|-------------|------------------|-----------------|--------|
| 1001         | Andi Santoso      | 2004-06-12        | Striker     | 180              | 75              | Tim A  |
| 1002         | Budi Pratama      | 2005-07-09        | Gelandang   | 170              | 68              | Tim B  |

## 5. Klasifikasi Penilaian Atlet
Tabel ini mencatat hasil penilaian atlet berdasarkan kinerja mereka dalam berbagai aspek (fisik, teknikal, taktis, mental).

| **Field**             | **Description**                                      |
|-----------------------|------------------------------------------------------|
| ID Penilaian          | ID unik penilaian                                    |
| ID Atlet              | ID atlet yang dinilai                                |
| Latihan Fisik         | Skor latihan fisik atlet                             |
| Latihan Teknik        | Skor latihan teknik atlet                            |
| Latihan Mental        | Skor latihan mental atlet                            |
| Total Nilai           | Total nilai atlet berdasarkan semua penilaian       |
| Klasifikasi           | Klasifikasi atlet berdasarkan total nilai (misal: A, B, C) |

**Contoh Data**:

| **ID Penilaian** | **ID Atlet** | **Latihan Fisik** | **Latihan Teknik** | **Latihan Mental** | **Total Nilai** | **Klasifikasi** |
|------------------|--------------|-------------------|--------------------|--------------------|-----------------|-----------------|
| 1                | 1001         | 90                | 85                 | 88                 | 263             | A               |

## 6. Klasemen Atlet
Tabel ini mencatat peringkat atlet berdasarkan hasil pertandingan dan pencapaian dalam latihan.

| **Field**             | **Description**                                      |
|-----------------------|------------------------------------------------------|
| ID Klasemen           | ID unik klasemen atlet                               |
| ID Atlet              | ID atlet yang tercatat dalam klasemen                |
| Jumlah Menang         | Jumlah kemenangan yang diraih atlet                  |
| Jumlah Kalah          | Jumlah kekalahan yang diterima atlet                 |
| Jumlah Seri           | Jumlah hasil seri yang diperoleh atlet               |
| Porsi Latihan Selesai | Status apakah atlet telah menyelesaikan porsi latihannya |
| Posisi Klasemen       | Posisi peringkat atlet dalam klasemen                |

**Contoh Data**:

| **ID Klasemen** | **ID Atlet** | **Jumlah Menang** | **Jumlah Kalah** | **Jumlah Seri** | **Porsi Latihan Selesai** | **Posisi Klasemen** |
|-----------------|--------------|-------------------|------------------|-----------------|---------------------------|---------------------|
| 1               | 1001         | 5                 | 1                | 0               | Ya                        | 1                   |

## 7. Manajemen Waktu Pertandingan
Tabel ini mengelola jadwal pertandingan atlet dengan rincian waktu, lokasi, dan status kesiapan atlet.

| **Field**             | **Description**                                      |
|-----------------------|------------------------------------------------------|
| ID Pertandingan       | ID unik pertandingan                                 |
| ID Atlet              | ID atlet yang akan bertanding                        |
| Tanggal Pertandingan  | Tanggal pertandingan                                 |
| Waktu                 | Waktu pertandingan                                   |
| Status Kesiapan       | Status kesiapan atlet untuk pertandingan (siap/belum siap) |
| Latihan Terkait       | Jenis latihan yang terkait dengan pertandingan       |

**Contoh Data**:

| **ID Pertandingan** | **ID Atlet** | **Tanggal Pertandingan** | **Waktu** | **Status Kesiapan** | **Latihan Terkait** |
|---------------------|--------------|--------------------------|-----------|---------------------|----------------------|
| 1                   | 1001         | 2025-02-05               | 15:00     | Siap                | Latihan Fisik, Teknik, Mental |
| 2                   | 1002         | 2025-02-07               | 17:00     | Belum Siap          | Latihan Teknik        |

