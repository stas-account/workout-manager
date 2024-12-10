FROM php:8.3-fpm-alpine

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
RUN apk add autoconf \
    && apk add g++ \
    && apk add make \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www/workout-manager
