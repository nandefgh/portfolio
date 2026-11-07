# Website Portofolio PHP

Website portofolio pribadi dengan tema gelap dan aksen oranye, menggunakan PHP native, MySQL, HTML, CSS, dan JavaScript.

## Fitur
- Hero / perkenalan
- Profil singkat
- Daftar keterampilan
- Galeri proyek yang dapat diambil dari database MySQL
- Tautan WhatsApp, email, Instagram, GitHub, dan LinkedIn
- Navigasi mobile dan animasi reveal sederhana
- Layout responsif

## Persiapan XAMPP
1. Instal dan jalankan XAMPP.
2. Aktifkan **Apache** dan **MySQL**.
3. Salin folder `portfolio_php` ke `C:\xampp\htdocs\`.
4. Buka `http://localhost/phpmyadmin`.
5. Pilih tab **Import**, pilih file `database.sql`, lalu klik **Import** atau **Go**.
6. Buka `config/database.php`. Konfigurasi bawaan memakai host `localhost`, database `portfolio_db`, user `root`, dan password kosong. Sesuaikan bila MySQL milikmu berbeda.
7. Buka `index.php` melalui `http://localhost/portfolio_php/`.

> Jika belum mengimpor database, halaman masih mencoba menampilkan tiga proyek contoh. Untuk penggunaan yang stabil, tetap buat database sesuai langkah di atas.

## Personalisasi
Buka `index.php`, lalu ubah array `$profile`:
- `name`: nama yang ditampilkan
- `role`: pekerjaan atau profesi
- `tagline`: kalimat perkenalan
- `about`: deskripsi diri
- `email`: alamat email aktif
- `whatsapp`: nomor WhatsApp format internasional, angka saja (contoh Indonesia: `62812...`)
- `instagram`, `github`, `linkedin`: tautan profil media sosial

Ubah array `$skills` untuk mengganti keterampilan.

## Mengelola proyek melalui phpMyAdmin
Buka database `portfolio_db` > tabel `projects`. Kamu dapat menambah, mengedit, atau menghapus proyek melalui tab **Insert**, **Browse**, atau **SQL**.

Kolom utama:
- `title`: judul proyek
- `description`: deskripsi
- `image_url`: URL gambar yang dapat diakses browser
- `project_url`: URL demo atau detail proyek
- `category`: kategori
- `is_published`: `1` untuk tampil, `0` untuk disembunyikan
- `sort_order`: urutan tampil (angka lebih kecil tampil lebih dahulu)

Contoh SQL:
```sql
INSERT INTO projects (title, description, image_url, project_url, category, is_published, sort_order)
VALUES ('Proyek Baru', 'Deskripsi proyek kamu.', 'https://example.com/gambar.jpg', 'https://example.com', 'Web Development', 1, 4);
```

## Struktur folder
```text
portfolio_php/
├── index.php
├── database.sql
├── README.md
├── config/
│   └── database.php
└── assets/
    ├── css/
    │   └── style.css
    └── js/
        └── main.js
```

## Catatan
- Konten, nama, nomor telepon, dan media sosial masih berupa contoh; ganti sebelum dipublikasikan.
- Foto proyek contoh memakai URL gambar eksternal, sehingga browser perlu koneksi internet untuk menampilkannya.
- Jangan mengunggah konfigurasi berisi kredensial database ke repositori publik. Untuk hosting produksi, gunakan kredensial database khusus dan HTTPS.
- Kode ini belum menyertakan halaman admin/login. Proyek dapat dikelola dari phpMyAdmin untuk versi awal.
