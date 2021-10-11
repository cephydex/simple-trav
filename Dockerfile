FROM php:7.4-apache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# FROM composer:1.6.5 as build

# WORKDIR /app
RUN mkdir /app
WORKDIR /app
COPY . /app

# RUN composer install
EXPOSE 80
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app
RUN chmod -R 0777 /app/storage/ && a2enmod rewrite
