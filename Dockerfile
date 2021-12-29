FROM php:8.0.3-fpm

WORKDIR /var/www

RUN apt-get update
RUN apt-get install -y git zip unzip

RUN docker-php-ext-install bcmath pdo_mysql

COPY --from=composer:2.2.1 /usr/bin/composer /usr/bin/composer

EXPOSE 9000