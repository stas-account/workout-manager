docker-restart: docker-down docker-up

docker-up:
	docker compose up -d
docker-down:
	docker compose down --remove-orphans
migrate:
	docker-compose exec php-fpm php artisan migrate
migrate-refresh:
	docker-compose exec php-fpm php artisan migrate:refresh
migrate-refresh-seed:
	docker-compose exec php-fpm php artisan migrate:refresh --seed
migrate-testing:
	docker-compose exec php-fpm php artisan migrate --env=testing
db-seed:
	docker-compose exec php-fpm php artisan db:seed
test:
	docker-compose exec php-fpm php artisan test
test-coverage:
	docker-compose exec php-fpm php artisan test --coverage
test-profile:
	docker-compose exec php-fpm php artisan test --profile
test-phpunit:
	docker-compose exec php-fpm ./vendor/bin/phpunit
clear:
	docker-compose exec php-fpm php artisan view:clear; \
	docker-compose exec php-fpm php artisan cache:clear; \
	docker-compose exec php-fpm php artisan config:clear; \
	docker-compose exec php-fpm php artisan route:clear; \
