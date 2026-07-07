# System Requirement

## Minimum Requirement

| Komponen | Versi Minimum |
| -------- | ------------- |
| PHP      | 8.4           |
| Composer | 2.8.1         |
| MySQL    | 8.2           |
| Node.js  | 22            |

> Disarankan menggunakan **XAMPP**, **Laragon**, atau **MAMP** untuk mempermudah pengelolaan PHP dan MySQL di lingkungan lokal.

---

# Tech Stack

## Backend Stack
* **PHP 8.4** → Bahasa pemrograman
* **Laravel 12** → Backend framework
* **MySQL 8.2** → Database

## Admin / UI Stack
* **Filament v4.x** → Admin panel framework
* **Tailwind CSS v3** → CSS utility framework

## Authorization / Security Stack
* **Spatie Laravel Permission** → Role & permission engine
* **Filament Shield** → Integrasi permission dengan Filament

---

# Cara Deployment ke Localhost

## 1. Ekstrak Project
1. Download file project dalam format **.zip**
2. Ekstrak file tersebut ke direktori yang diinginkan

---

## 2. Import Database

1. Buka **phpMyAdmin** melalui browser:

   ```
   http://localhost/phpmyadmin
   ```
2. Buat database baru (contoh):

   ```
   db_mulaidigital (ganti sesuai nama database yang akan digunakan)
   ```
3. Masuk ke menu **Import**
4. Pilih file **.sql** yang terdapat di root directory project
5. Klik **Import** dan tunggu hingga proses selesai

---

## 3. Konfigurasi Environment

1. Buka project menggunakan code editor (disarankan **VS Code**)
2. Di root folder project:
   * Rename file `.env.example` menjadi `.env`
3. Ubah konfigurasi berikut:

### Database Configuration

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=db_mulaidigital (ganti sesuai nama database yang akan digunakan)
DB_USERNAME=root  (ganti sesuai username database yang akan digunakan)
DB_PASSWORD=
```

> **Catatan:** Sesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` dengan konfigurasi lokal Anda.

---

## 4. Install Dependency & Jalankan Aplikasi

Buka **Terminal** di VS Code pada root project, lalu jalankan perintah berikut secara berurutan:

```bash
composer install
npm install
php artisan key:generate
php artisan storage:link
php artisan serve
```

Buka **terminal baru**, lalu jalankan:

```bash
npm run dev
```

> Pastikan **dua service aktif bersamaan**:
>
> * `php artisan serve`
> * `npm run dev`

---

## 5. Akses Aplikasi

* **Landing Page**

  ```
  http://localhost:8000
  ```

* **Admin Panel**

  ```
  http://localhost:8000/admin
  ```

---

## 6. Akun Default Admin

Gunakan akun berikut untuk login ke panel admin:

* **Email**    : [admin@mail.com](mailto:admin@mail.com)
* **Password** : [admin@mail.com](mailto:admin@mail.com)

---

## 7. Status Aplikasi

Aplikasi siap untuk dikembangkan lebih lanjut dengan arsitektur **best practice Laravel 12**.

---

## Credit

**by [lynk.id/mulaidigital.com](https://lynk.id/mulaidigital.com)**
*Jasa pembuatan website cepat — tepat — powerful* 🚀


> ⚠️ **Legal Notice**
> Please read the disclaimer below before using or redistributing this application.

## Disclaimer
*This application is part of a source code collection provided by mulaidigital.com. Purchasers are permitted to use, modify, and further develop this application as needed. Reselling is allowed as long as the application has been significantly modified (at least 30%) and is not sold in its original form.*

*(Aplikasi ini merupakan bagian dari kumpulan source code yang disediakan oleh mulaidigital.com. Pembeli diperkenankan untuk menggunakan, mengubah, dan mengembangkan aplikasi ini sesuai kebutuhan. Penjualan kembali diperbolehkan selama aplikasi telah dimodifikasi secara signifikan (minimal 50%) dan tidak dalam bentuk versi asli.)* 🚀
