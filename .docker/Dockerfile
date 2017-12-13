FROM php:7.1.8-apache

MAINTAINER Michael Rosmane

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng12-dev \
        libpq-dev \
        g++ \
        libicu-dev \
        libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install pdo_pgsql \
    && docker-php-ext-install soap

# install Imagemagick & PHP Imagick ext
RUN apt-get update && apt-get install -y \
libmagickwand-dev --no-install-recommends

RUN pecl install imagick && docker-php-ext-enable imagick

RUN chown -R www-data:www-data /srv/app