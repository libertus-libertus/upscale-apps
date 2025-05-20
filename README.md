# Project Cloning Upscale.id

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.3-06B6D4?logo=tailwindcss)
![AdminLTE](https://img.shields.io/badge/AdminLTE-2.4-3C8DBC)

## Tentang Project

Ini adalah project cloning dari perusahaan upscale.id yang dibangun dengan teknologi:

- **Backend**: Laravel 11
- **Database**: MySQL
- **Frontend**: 
  - Tailwind CSS
  - AdminLTE v2 (Dashboard Template)
- **Authentication**: Laravel Breeze
- **Asynchronous**: AJAX

## Fitur Utama

✅ Sistem Autentikasi (Login, Register, Forgot Password)  
✅ Manajemen Data CRUD  
✅ Antarmuka Responsif  
✅ Dashboard Admin  
✅ Operasi Asynchronous dengan AJAX  

## Persyaratan Sistem

- PHP 8.2+
- Composer 2.0+
- MySQL 5.7+ / MariaDB 10.3+
- Node.js 22
- NPM 8+

## Instalasi

1. Clone repository:
```bash
git clone [repository-url]
cd project-folder
```
2. Konfigurasi:
```bash
copy file .env-example -> .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
```

2. Ketikkan perintah diterminal di dalam project anda:
```bash
php artisan key:generate
```
2. Jalan projectnya:
```bash
php artisan serve
```