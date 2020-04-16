# Inventori Toko HP
* Tiara Arista Hasanah (17090010)
* Nur Aviatun Janah (17090091)

# Cara Instalasi
* cd ke htdocs lalu ketik git clone https://github.com/mirza-alim-m/laravel2020-A-G2.git pada terminal
* composer instal
* Ubah nama file .env.example menjadi .env
* buat database pada phpMyAdmin
* lalu pada file .env rubah "DB_DATABASE = laravel" (database name sesuai yang dibuat sebelumnya pada phpMyAdmin)
* php artisan key:generate
* php artisan migrate --seed
* php artisan serve
