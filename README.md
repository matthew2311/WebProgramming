Evoba adalah website untuk mencari tempat makan yang direkomendasikan oleh para food blogger di sekitar Jakarta. Sekarang dengan banyaknya media sosial seperti Tiktok dan Instagram, seringkali kita temukan banyak rekomendasi restoran atau cafe yg bisa jadi tempat hangout kita.

Untuk menjalankan project ini dapat mengikuti langkah-langkah berikut:
1. Download project menggunakan "git clone https://github.com/matthew2311/WebProgramming.git"
2. Jalankan XAMPP, start Apache dan MySQL, kemudian klik Admin pada bagian MySQL
3. Buat database baru
4. Buka folder project pada VSCode
5. Buka terminal baru dan jalankan "composer update"
6. Copy .env.example dan paste salinannya. Kemudian, rename menjadi .env
7. Jalankan "php artisan key:generate" melalui terminal
8. Jalankan "php artisan config:cache" melalui terminal
9. Pastikan nama DB_DATABASE sudah sesuai dengan database yang dibuat di phpMyAdmin
10. Jalankan "php artisan migrate:fresh --seed" melalui terminal
11. Jalankan "php artisan storage:link" melalui terminal
12. Jalankan "php artisan serve" melalui terminal
13. Ctrl + click pada server yang telah dibuat
14. Tambahkan "/admin/login" pada url untuk membuka halaman admin
15. Masukkan "admin@evoba.com" sebagai email dan "AdminEvoba123" sebagai password
