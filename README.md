
## image uploader api
simple image uploader api using laravel sanctum, if you find any bugs or errors you can let me know
## Usage <br>
Setup the repository <br>
```
git clone https://github.com/coswat/image-upload.git
cd google-login
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```

## Storage Setup <br>
```
php artisan storage:link

```
### api
```
http://127.0.0.1:8000/api/upload-image

```
api type = post
