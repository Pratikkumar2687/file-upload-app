<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# File Upload System

A simple **Laravel 12** project for uploading files, listing uploaded files, and downloading them.

---

## **Features**

- Upload files (max 10 MB)
- List all uploaded files
- Download uploaded files
- Simple **Tailwind CSS** UI
- Laravel 12 backend

---

## **Requirements**

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Laravel 12

---

## **Installation**

1. **Clone the repository**

```bash
git clone https://github.com/your-username/file-upload-app.git
cd file-upload-app
Install PHP dependencies

composer install


Install Node dependencies

npm install


Copy environment file

cp .env.example .env


Generate application key

php artisan key:generate


Configure database

Update .env with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=file_upload_db
DB_USERNAME=root
DB_PASSWORD=


Create the database

CREATE DATABASE file_upload_db;


Run migrations

php artisan migrate


Link storage folder

php artisan storage:link


Compile assets

npm run dev


For production:

npm run build

Running the Application
php artisan serve


Open your browser: http://127.0.0.1:8000

Click “Go to Upload Page” to upload files.

Routes
Route	Method	Description
/	GET	Welcome page
/upload	GET	Show file upload form
/upload	POST	Handle file upload
Project Structure
app/
 └── Http/Controllers/FileUploadController.php
 └── Models/FileUpload.php
database/
 └── migrations/xxxx_create_file_uploads_table.php
resources/views/
 └── welcome.blade.php
 └── upload_form.blade.php
resources/css/
 └── app.css
tailwind.config.js
routes/web.php
README.md

License

MIT License0