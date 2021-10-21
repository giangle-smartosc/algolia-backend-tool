#!/bin/bash
CURRENT_DIR=$(pwd)


echo "Building docker containers"

docker-compose build
wait

docker-compose up -d
wait

sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap

docker exec -it app_easyway composer install --prefer-source
docker exec -it app_easyway composer dump-autoload
docker exec -it app_easyway php artisan config:clear
docker exec -it app_easyway php artisan migrate


wait
