docker-up:
	cd docker/; \
	docker compose up -d

docker-down:
	cd docker/; \
	docker compose down

migrate:
	cd docker/; \
	docker-compose exec php-fpm php artisan migrate

migrate-testing:
	cd docker/; \
	docker-compose exec php-fpm php artisan migrate --env=testing

test:
	cd docker/; \
	docker-compose exec php-fpm php artisan test

test-coverage:
	cd docker/; \
	docker-compose exec php-fpm php artisan test --coverage

test-profile:
	cd docker/; \
	docker-compose exec php-fpm php artisan test --profile

test-phpunit:
	cd docker/; \
	docker-compose exec php-fpm ./vendor/bin/phpunit

clear:
	cd docker/; \
	docker-compose exec php-fpm php artisan view:clear; \
	docker-compose exec php-fpm php artisan cache:clear; \
	docker-compose exec php-fpm php artisan config:clear; \
	docker-compose exec php-fpm php artisan route:clear; \
