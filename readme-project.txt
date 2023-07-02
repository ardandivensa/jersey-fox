cara run proyek ini
1. buka proyek ini di vscode
2. kemudian buat database di phpmyadmin, dan ubahlah nama database default-nya di .env
3. jalankan:
	php artisan migrate
	php artisan db:seed --class=LeagueSeeder
	php artisan db:seed --class=UserSeeder
4. jalankan php artisan serve
5. copy-kan sql yang ada di prototype.sql untuk create product dan paste di sql phpmyadmin anda
