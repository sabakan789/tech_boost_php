cd `dirname $0`/..

cd mynews

cp .env.example .env

composer install

php artisan migrate