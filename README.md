<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Sistem Pakar Diagnosa Masalah Internet

Sebuah aplikasi web sederhana yang dibangun dengan Laravel 11 untuk membantu pengguna mendiagnosis masalah koneksi internet di rumah mereka. Sistem ini menggunakan alur *Rule-Based* (Sistem Pakar) untuk mengajukan serangkaian pertanyaan dan memberikan diagnosis serta solusi yang mungkin.


## 🚀 Fitur Utama

* **Alur Logika Bertingkat:** Menggunakan *decision tree* dengan 10 pertanyaan untuk mengisolasi masalah.
* **Diagnosis Praktis:** Memberikan salah satu dari 10 diagnosis akhir yang spesifik, mulai dari masalah perangkat hingga gangguan ISP.
* **Frontend Modern:** Tampilan yang bersih dan responsif menggunakan Tailwind CSS v4.
* **Basis Pengetahuan Fleksibel:** Semua pertanyaan, opsi, dan diagnosis disimpan dalam database SQLite, sehingga mudah untuk diperbarui atau diperluas.

---

## 🛠️ Tumpukan Teknologi (Tech Stack)

* **Backend:** PHP 8.2+ / Laravel 11
* **Frontend:** Tailwind CSS v4 (via Vite)
* **Database:** SQLite (Berbasis file, tidak perlu server DB)
* **Tipe Sistem:** Rule-Based Decision Support System (DSS)
* **Lingkungan Lokal:** Dibuat dan diuji menggunakan **FlyEnv**

---

## 🚦 Instalasi dan Persiapan (Lokal)

Panduan ini mengasumsikan Anda menggunakan lingkungan seperti FlyEnv, XAMPP, atau Laragon.

### 1. Prasyarat PHP

Pastikan driver PHP untuk SQLite sudah aktif di lingkungan Anda (misalnya: FlyEnv).
Buka file `php.ini` Anda dan pastikan dua baris ini **tidak** diawali dengan tanda titik-koma (`;`):

```ini
extension=pdo_sqlite
extension=sqlite3
```
*(Jangan lupa restart layanan PHP Anda setelah mengubah ini!)*

### 2. Klona (Clone) Repositori

```bash
git clone [https://github.com/NAMA_ANDA/NAMA_REPOSitori_ANDA.git](https://github.com/NAMA_ANDA/NAMA_REPOSitori_ANDA.git)
cd NAMA_REPOSitori_ANDA
```

### 3. Instalasi Backend (Composer)

```bash
# Salin file .env.example menjadi .env
cp .env.example .env

# Hapus baris DB_HOST, DB_PORT, dll. dan pastikan hanya ada:
# DB_CONNECTION=sqlite
# ... (Edit file .env Anda sekarang) ...

# Instal dependensi PHP
composer install
```

### 4. Instalasi Frontend (NPM/Node.js)

```bash
# Instal semua paket dari package.json
npm install
```

### 5. Setup Aplikasi (Laravel)

```bash
# Buat kunci aplikasi
php artisan key:generate

# Buat file database SQLite yang kosong
touch database/database.sqlite

# Jalankan migrasi (membuat tabel) dan seeder (mengisi aturan)
php artisan migrate --seed
```

### 6. Jalankan Server!

Anda perlu menjalankan dua server di dua terminal terpisah:

**Di Terminal 1 (untuk Frontend/Vite):**
```bash
npm run dev
```

**Di Terminal 2 (untuk Backend/Laravel):**
```bash
php artisan serve
```

Buka aplikasi di `http://127.0.0.1:8000`.

---

## 🏛️ Struktur Basis Pengetahuan

Logika sistem pakar ini diatur oleh tiga tabel database utama:

1.  **`questions`**: Menyimpan teks untuk setiap pertanyaan.
2.  **`diagnoses`**: Menyimpan judul dan deskripsi untuk setiap hasil diagnosis akhir.
3.  **`options`**: Tabel penghubung utama. Setiap baris mewakili pilihan jawaban dan berisi:
    * `question_id`: Pertanyaan induk dari opsi ini.
    * `text`: Teks jawaban (misal: "Ya" atau "Tidak").
    * `next_question_id`: (Opsional) ID pertanyaan berikutnya jika opsi ini dipilih.
    * `diagnosis_id`: (Opsional) ID diagnosis akhir jika alur berhenti di sini.
