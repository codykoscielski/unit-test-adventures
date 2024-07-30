# Official PHP with Apache
FROM php:8.2-apache

WORKDIR /var/www/html

# Required PHP stuff
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY ./src /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
