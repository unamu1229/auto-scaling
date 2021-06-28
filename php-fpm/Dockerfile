FROM php:8.0-fpm-alpine
RUN apk update
RUN apk add bash && apk add autoconf build-base && pecl install xdebug && docker-php-ext-enable xdebug
