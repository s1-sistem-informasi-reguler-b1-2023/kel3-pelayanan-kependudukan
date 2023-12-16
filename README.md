# Sistem Informasi Pelayanan kependudukan di RT/RW

**_Oleh: Kelompok 3 (S1 Sistem Informasi - Reguler B1)_**

| \*        | Tautan                                                                          |
| --------- | ------------------------------------------------------------------------------- |
| Framework | [laravel/laravel](https://github.com/laravel/laravel)                           |
| Template  | [jeroennoten/Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) |

# Development

Instruksi:

1. Pertama-tama, lakukan instalasi [Node.js](https://nodejs.org/en/blog/release/v18.12.0) dan [Composer](https://getcomposer.org/).

2. Kemudian, jalankan perintah-perintah di bawah ini secara berurutan:

    - Salin repositori dengan perintah: `git clone https://github.com/aipnurhayadi/kel3-pelayanan-kependudukan.git`
    - Pindah ke direktori proyek: `cd kel3-pelayanan-kependudukan`
    - Pindah ke branch development: `git checkout development`
    - Salin file `.env.example` dan ubah nama file salinan dengan nama `.env`, kemudian ubah bagian `DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD` sesuai konfigurasi database.
    - Jalankan instalasi Composer: `composer install`
    - Jalankan instalasi npm: `npm install`
    - Buat kunci aplikasi: `php artisan key:generate`
    - Jalankan migrasi database: `php artisan migrate`
    - Jalankan seeding database: `php artisan db:seed`

3. Selama tahap pengembangan, jalankan perintah-perintah berikut di dua jendela command prompt yang berbeda dan jangan menutup keduanya:

    - Jalankan server PHP: `php artisan serve`
    - Jalankan compiler untuk pengembangan frontend: `npm run dev`
