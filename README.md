
# 🚀 Instalasi Laravel 12 + XAMPP untuk teman teman lucuqu 

Panduan ini menjelaskan langkah-langkah untuk menjalankan proyek Laravel 12 yang telah di-clone, serta menghubungkan ke database menggunakan XAMPP.

---

## ✅ Prasyarat

Pastikan sudah menginstall:

- PHP >= 8.1
- Composer
- Git
- XAMPP (dengan MySQL dan Apache)

---

## 📥 Clone Repository

boleh pake terminal apa aja, pke cmd juga boleh, tapi pastiin direktorinya bener yaww
```bash
git clone https://github.com/salsarizkii/sipafestival.git
cd nama-repo

```

---

## 📦 Install Dependency Laravel
make sure composer dah punya yaw, kl blm punya donwload dulu cuy https://getcomposer.org/download/

```bash
composer install
```

---

## ⚙️ Salin File Environment

```bash
cp .env.example .env
```

---

## 🔑 Generate App Key

```bash
php artisan key:generate
```

---

## 🛠️ Konfigurasi Database (XAMPP)

1. Jalankan **XAMPP**, aktifkan **Apache** dan **MySQL**.
2. Buka **phpMyAdmin** di browser: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
3. Buat database baru, namanya: `sipafestival`
4. Edit file `.env`, sesuaikan bagian ini:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sipafestival
DB_USERNAME=root
DB_PASSWORD=
```

> ⚠️ Secara default, user `root` di XAMPP tidak memiliki password. Jika kamu mengubahnya, sesuaikan di `.env`.

---

## 🧱 Migrasi Database (Opsional)

Jika project menggunakan migration:

```bash
php artisan migrate
```

---

## 🌐 Jalankan Server Laravel

```bash
php artisan serve
```

Aplikasi akan berjalan di: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ✅ Selesai!

Laravel 12 sudah berhasil dijalankan dan terhubung ke database menggunakan XAMPP. Selamat ngoding! 😄

- slamat ngoding fwennn -salsa-
