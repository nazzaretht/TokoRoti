# 🧁 Bakery App

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=flat-square&logo=laravel)
![Responsive](https://img.shields.io/badge/Responsive-Yes-36d399?style=flat-square&logo=css3)
![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)

> **Bakery App** adalah aplikasi manajemen toko roti modern berbasis web, dibuat dengan Laravel.  
> Dirancang dengan UI kekinian, mobile friendly, dan fitur lengkap untuk kebutuhan bakery masa kini.

---

## ✨ Fitur Unggulan

-   🔐 **Autentikasi User** (Register, Login, Lupa Password, Verifikasi Email)
-   🛒 **Manajemen Produk & Kategori**
-   📦 **Manajemen Pesanan**
-   👤 **Admin Dashboard**
-   🌐 **Login dengan Google**
-   📱 **UI Responsive & Modern** (bukan default Laravel)
-   🎨 **Desain Clean & Professional**

---

## 🚀 Instalasi

1. **Clone repository ini**

    ```sh
    git clone https://github.com/angfemas/bakery-app.git
    cd bakery-app
    ```

2. **Install dependency**

    ```sh
    composer install
    npm install && npm run build
    ```

3. **Copy file environment & konfigurasi**

    ```sh
    cp .env.example .env
    ```

    Edit `.env` dan sesuaikan database, mail, dsb.

4. **Generate key aplikasi**

    ```sh
    php artisan key:generate
    ```

5. **Migrasi database**

    ```sh
    php artisan migrate
    ```

6. **(Opsional) Seed database**

    ```sh
    php artisan db:seed
    ```

7. **Jalankan server**
    ```sh
    php artisan serve
    ```

---

## 📸 Preview

| Login Page                                 | Dashboard                                          |
| ------------------------------------------ | -------------------------------------------------- |
| ![Login Screenshot](screenshots/login.png) | ![Dashboard Screenshot](screenshots/dashboard.png) |

---

## 🙌 Kontribusi

Pull request sangat diterima!  
Silakan fork repo ini, buat branch baru, dan ajukan PR untuk fitur/bugfix.

---

## 📄 Lisensi

MIT License © 2025 [angfemas](https://github.com/angfemas)

---

> Dibuat dengan ❤️ menggunakan Laravel & Tailwind CSS.
