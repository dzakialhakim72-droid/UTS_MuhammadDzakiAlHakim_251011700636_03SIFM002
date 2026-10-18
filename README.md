# UTS Rekayasa Web - Kim'sCells

Website toko aksesoris HP (Laravel 13, Blade, Bootstrap lokal, MySQL).

Tabel: `accessories` (id, name, type, compatibility, price, image, description)

## Menjalankan

1. Buat database MySQL bernama `db_uts_251011700636`
2. Jalankan:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Buka http://127.0.0.1:8000

Bootstrap ada di `public/Bootstrap`, gambar produk di `public/assets/images`.
