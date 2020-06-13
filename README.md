# Inventori Toko HP
```
1. Tiara Arista Hasanah (17090010)
2. Nur Aviatun Janah (17090091)
```

# Cara Instalasi
```
1. cd ke htdocs lalu ketik git clone https://github.com/mirza-alim-m/laravel2020-A-G2.git pada terminal
2. composer install
3. copy file .env.example lalu rename menjadi .env
4. buat database pada phpMyAdmin
5. lalu pada file .env rubah "DB_DATABASE = laravel" (database name sesuai yang dibuat sebelumnya pada phpMyAdmin)
6. php artisan key:generate
7. php artisan migrate --seed
8. php artisan storage:link
9. php artisan serve
```
