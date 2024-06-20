FROM php:8.1-apache

RUN docker-php-ext-install pdo pdo_mysql \
    && chmod -R 777 /var/www \
    && apt-get update \
    && apt-get install -y unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

RUN composer require "vlucas/phpdotenv:^5.0" "twig/twig:^3.0" "fakerphp/faker:^1.9" \
    && pecl install xdebug \
    && apt update \
    && apt install libzip-dev -y \
    && docker-php-ext-enable xdebug \
    && a2enmod rewrite \
    && docker-php-ext-install zip \
    && service apache2 restart

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html/
