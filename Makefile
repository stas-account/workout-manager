docker-up:
	cd docker/; \
	docker compose up -d

docker-down:
	cd docker/; \
	docker compose down

migrate:
	cd docker/; \
	docker-compose exec php-fpm php artisan migrate

clear:
	cd docker/; \
	docker-compose exec php-fpm php artisan view:clear
	docker-compose exec php-fpm php artisan cache:clear
	docker-compose exec php-fpm php artisan config:clear
	docker-compose exec php-fpm php artisan route:clear
