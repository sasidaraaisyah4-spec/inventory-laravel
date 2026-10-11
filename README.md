# 🛍️ Inventory Pakaian Laravel

Aplikasi manajemen data inventory pakaian berbasis web menggunakan framework Laravel. Proyek ini dibangun untuk memenuhi tugas perkuliahan dengan mengimplementasikan arsitektur terstruktur MVC (Model-View-Controller).

## ✨ Fitur Utama

*   **Arsitektur MVC:** Pemisahan logika yang rapi antara Model (`Product`, `Category`), View (Blade Template), dan Controller (`ProductController`).
*   **Create & Read:** Fitur penambahan data pakaian dengan sistem validasi keamanan (mencegah form kosong dan duplikasi SKU), serta tampilan daftar barang.
*   **Dark Mode UI:** Antarmuka pengguna modern dengan palet warna tema gelap (Dark Mode).
*   **Smart Search:** Fitur pencarian data pakaian secara *real-time* berdasarkan SKU maupun Nama Pakaian.
*   **Pagination:** Pembagian halaman tabel secara otomatis agar tampilan tetap rapi meski data menumpuk.
*   **Migration & Seeder:** Kerangka tabel *database* otomatis beserta data *dummy* awal untuk mempermudah pengujian.

## 🚀 Panduan Instalasi (Cara Menjalankan)

1. **Clone Repository**
   ```bash
   git clone [https://github.com/USERNAME-GITHUB-SASI/inventory-laravel.git](https://github.com/USERNAME-GITHUB-SASI/inventory-laravel.git)
   cd inventory-laravel