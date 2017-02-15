# SYSTEM REQUIRED
PHP >= 5.5.9
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Laravel 5.2.45

## 1. Clone
```sh
$ git clone REPOSITORY
$ cd <httpdoc-folder>
```

## 2. Edit .env file
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Install
```sh
$ composer install
$ php artisan migrate

```

## 4. Install CMS
```sh
$ php artisan clear-compiled
$ php artisan optimize
$ php artisan cache:clear
$ php artisan view:clear
$ php artisan key:generate
```
