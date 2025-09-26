📌 Kelola Tugas

Aplikasi sederhana berbasis CodeIgniter 4 untuk mengelola daftar tugas (CRUD: Create, Read, Update, Delete).

Proyek ini dibuat untuk latihan/pembelajaran framework PHP modern.
🚀 Fitur

    Tambah tugas baru dengan judul, deskripsi, deadline, dan status.

    Lihat daftar semua tugas.

    Edit tugas yang sudah ada.

    Hapus tugas.

    Status tugas: pending, progress, done.

🛠️ Teknologi

    PHP 8.4

    CodeIgniter 4.6.x

    MySQL/MariaDB

    Tailwind CSS (Digunakan di mockup) / Bootstrap 5 (opsional untuk tampilan lebih rapi)

📂 Struktur Project

kelola-tugas/
├── app/
│   ├── Controllers/TaskController.php
│   ├── Models/TaskModel.php
│   └── Views/tasks/
│       ├── index.php
│       ├── create.php
│       └── edit.php
├── public/
├── writable/
├── .env
└── README.md

🖼️ Pratinjau Antarmuka

Antarmuka utama (halaman /tasks) didesain agar bersih dan berfokus pada fungsionalitas CRUD.

Elemen Kunci
	

Deskripsi Visual

Daftar Tugas
	

Tampilan kartu (card) atau baris memanjang untuk setiap tugas, menampilkan Judul tebal, batas waktu, dan deskripsi singkat.

Aksi Cepat
	

Di setiap kartu terdapat tombol "Edit" (warna biru) dan "Hapus" (warna merah) untuk aksi langsung.

Status Badge
	

Status tugas (pending, progress, done) ditampilkan menggunakan lencana berwarna (Merah, Biru, Hijau) yang mudah dibedakan.

Tombol Tambah
	

Tombol utama "Tambah Tugas Baru" ditempatkan menonjol di bagian atas daftar untuk akses cepat.
⚙️ Setup
1. Clone project

git clone [https://github.com/username/kelola-tugas.git](https://github.com/username/kelola-tugas.git)
cd kelola-tugas

2. Install dependencies

composer install

3. Buat database

Login ke MySQL/MariaDB:

CREATE DATABASE kelola_tugas_db;
USE kelola_tugas_db;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    deadline DATE,
    status ENUM('pending', 'progress', 'done') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

4. Konfigurasi database

Edit file .env:

CI_ENVIRONMENT = development

database.default.hostname = 127.0.0.1
database.default.database = kelola_tugas_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

5. Jalankan server

php spark serve

Secara default jalan di:
👉 http://localhost:8080
Kalau port bentrok, bisa pakai:

php -S 127.0.0.1:9000 -t public

🖥️ Cara Pakai

    Buka /tasks → lihat daftar tugas.

    Klik Tambah Tugas untuk menambahkan.

    Klik Edit untuk mengubah tugas.

    Klik Hapus untuk menghapus tugas.

📜 Lisensi

MIT License – bebas digunakan untuk belajar atau dikembangkan lebih lanjut.