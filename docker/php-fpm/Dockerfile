FROM php:8.3-fpm-alpine

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
RUN apk add autoconf \
    && apk add g++ \
    && apk add make \
    && apk add linux-headers \
    && pecl install redis \
    && pecl install xdebug \
    && docker-php-ext-enable redis \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql

COPY conf.d/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

WORKDIR /var/www/workout-manager
