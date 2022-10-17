# managments-test

cd docker

docker-compose up --build -d

  
docker-compose exec app composer install

docker-compose exec app php artisan db:seed --class=PositionsSeeder
