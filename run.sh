#!/bin/bash

# Starting the containers
cd ms-transaction
docker-compose up -d

# ms-transaction container operations
docker exec -it transaction-app cp .env.example .env
docker exec -it transaction-app composer install
docker exec -it transaction-app php artisan migrate
docker exec -it transaction-app php artisan db:seed