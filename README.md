# first-laravel-project
First Laravel project using MVC

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

./composer.phar global require "laravel/installer"

./composer.phar create-project --prefer-dist laravel/laravel inventory

php artisan make:model Product --migrate

php artisan make:controller ProductController

../composer.phar require "laravelcollective/html":"^5.3.0"

../composer.phar require laracasts/flash

php artisan make:request ProductFormRequest
