# project-1

Untuk memulai program ikuti langkah langkah berikut ini

## Instalasi

1. Clone/Download Project Dari repository ini
2. selanjutnya buat database baru, lalu lakukan konfigurasi koneksi database pada file `.env` 
3. setelah itu buka `comand line` atau `terminal` dan masuk pada posisi direktori project yang sudah di download tadi.
4. lakukan perintah migrasi database dan sedding data melalui comand line dengan perintah berikut `php artisan migrate --seed`.

## Pengujian
1. proses instalasi sudah selesai, selanutnya tinggal kita lakukan uji coba, jalankan laravel development server dengan perintah `php artisan serve` pada comand line, maka laravel server akan berjalan pada url [`http://127.0.0.1:8000`](http://127.0.0.1:8000)
2. selanjutnya buka url tersebut pada web browser.
3. untuk data admin username dan password sebagai berikut : 

* Username 	 `admin@demo.com`
* password 	 `password`

## API

Berikut adalah endpoint API yang ada Pada Program ini.
Path: /api/

| Endpoint        | Function| Method| Keterangan|
| ------------- |:---------:| -----:|------:|
| `/mobil  `    	| Read			| GET		|Menampilkan semua mobil yang ada|
| `/mobil/<BRAND>` | Read     |   GET		| Menampilkan semua mobil dengan merek BRAND |
| `/mobil/<BRAND>/<TYPE>` | Read      |    GET |Menampilkan data mobil dengan merek BRAND dan tipe TYPE|
|`/mobil/<BRAND>/<TYPE>`|Create|POST|Menambahkan mobil dengan merek BRAND dan tipe TYPE|
|`/mobil/<BRAND>/<TYPE>`|Update|PUT/PATCH|Memperbaharui data mobil dengan merek BRAND dan tipe TYPE|
|`/mobil/<BRAND>/<TYPE>`|Delete|DELETE| Menghapus mobil dengan merek BRAND dan tipe TYPE|
|`/data_mobil/<id>/edit`|Read|GET|Mengambil data berdasarkan id|
|`/mobil/<id>/update`|Update|PUT/PATCH| Update Data berdasarkan id|
|`/mobil`|Create|POST| Menambah data baru|
|`/mobil/<id>/delete`|Delete|DELETE| Menghapus data berdasarkan id



Terimakasih Banyak
