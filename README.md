1) Clone 
- SSH : git@gitlab.com:zulwaqarzain96/potf.git
- HTTPS : https://gitlab.com/zulwaqarzain96/potf.git

2) run - composer install

3) Copy .env file 
- DB_DATABASE=dev_potf

4) run - php artisan key:generate

5) run - php artisan storage:link

6) Create database - dev_potf

7) run - php artisan migrate

8) run - php artisan db:seed --class=UserSeeder

9) You`re Good to go! Run the system and input the 6 Key Passcode "123456" 