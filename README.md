# Sistem Peminjaman Ruangan

Proyek ini merupakan aplikasi web berbasis Laravel untuk mengelola peminjaman ruangan. Aplikasi memiliki fitur pengelolaan ruangan, user, peminjaman, serta laporan.

---

## 🚀 Fitur Utama

- Manajemen Ruangan (CRUD)
- Manajemen User (Admin/User)
- Peminjaman dan Persetujuan Ruangan
- Laporan Peminjaman

---

## ⚙️ Teknologi yang Digunakan

- **Backend**: Laravel
- **Frontend**: Blade, Bootstrap, Vite
- **Database**: MySQL
- **Build Tool**: Node.js (Vite)

---

## 📦 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

```bash
# 1. Clone Repository
git clone https://github.com/USERNAME/REPO-NAME.git
cd REPO-NAME

# 2. Install Dependency PHP
composer install

# 3. Install Dependency Frontend
npm install

# 4. Build Asset
npm run build

# 5. Salin file .env dan generate key
cp .env.example .env
php artisan key:generate

# 6. Migrasi database
php artisan migrate

# 7. Jalankan server lokal
php artisan serve
