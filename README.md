# Tugas Projek WEB

Kelompok 1:

-   M. Noor Ravi Deevan (D121201061)
-   Muh. Ilham Nur Furqan (D121201072)
-   Amiqatun Nasyati Yusri (D121201080)
-   Ali Husain (D121201097)

## GAME09

GAME09 merupakan website game yang berisi informasi terupdate
dan telengkap mengenai game.

GAME09 memiliki halaman Home, News, Features, Guides, Game Release,
dan Reviews

### Framework

Framework yang digunakan untuk mengembangkan website ini adalah
Laravel, HTML, CSS, dan BOOTSTRAP

### Link Github

-   [Laravel website backend & frontend](https://github.com/excalios/Tugas-Akhir-Web-Kelompok-1)
-   [HTML, CSS, BOOTSTRAP, frontend](https://github.com/meeyow02/FrontEndTugasAkhir)

## Requirments

-   php (min 8.1.12)
-   composer
-   docker compose (optional)
-   mysql

## How to install

1. Clone repository ini
2. Setup database mysql
   Untuk setup database dapat menggunakan beberapa cara
3. Gunakan [Docker Compose](https://docs.docker.com/compose/)
   Sudah ada `docker-compose.yaml` didalam repository ini sehingga akan otomatis
   menginstall dan melakukan setup database.
4. Dapat menggunakan xampp untuk database
   Jika menggunakan xampp pastikan untuk membuat database dengan nama `game` dan
   pastikan kalian tahu `username` dan `password` untuk databasenya
5. Gunakan mysql daemon/cli atau bare mysql
   Sama seperti jika menggunakan xampp buatlah database dan pastikan mengetahui
   `username` dan `password`
6. Buka folder yang sudah di clone, bukalah terminal dan jalankan `composer install`
7. copy file `env.example` ke `.env`
8. isi data di file `env` dengan bagian awal `DB_` dengan data yang sesuai (jika menggunakan docker-compose maka tidak ada yang perlu diubah)
9. jalankan `php artisan key:generate`
10. jalankan `php artisan migrate`
11. jalankan `php artisan storage:link`
12. jalankan `php artisan serve` Pastikan terlebih dahulu bahwa terminal sudah terbuka di folder yang tepat
13. Di terminal yang menjalankan `php artisan serve` lihat url yang diberikan dan buka file `.env` dan sesuaikan `APP_URL` agar sesuai dengan url tersebut
14. Jalankan `npm run dev` di terminal baru dengan `php artisan serve` masih berjalan
15. Bukalah website sesuai dengan url

## How to use

Di titik ini harusnya website sudah bisa dibuka dan berinteraksi dengan website. Namun halaman masih kosong untuk menambah data ada beberapa cara yang dapat dilakukan:

1. Isi data secara otomatis (sebanyak 1000 data) tetapi semua data akan terlihat sangat mirip dan memilki gambar yang sama
   Untuk melakukan ini hanya perlu menjalankan perintah `php artisan db:seed` maka data akan terisi secara otomatis
2. Menambah data secara manual:
   `{URL}` yang dimaksud adalah URL yang muncul di terminal yang menjalankan `php artisan serve`
    1. buka website dengan url `{URL}/register` mendaftar lah terlebih dahulu
    2. Jika sudah terdaftar maka kalian akan ke halaman dashboard disana kalian dapat menambahkan data secara manual
