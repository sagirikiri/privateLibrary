#!/bin/sh

cd ./app/laravel/
cp .env.example .env 
php artisan key:generate
cd ../../

docker-compose up -d
