FROM php:7.3-apache
MAINTAINER username

RUN apt-get update

RUN apt-get update && apt-get install -y \
        libssl-dev \
        libicu-dev \
        libzip-dev \
  && docker-php-ext-install -j$(nproc) iconv pdo_mysql mysqli intl mbstring zip pcntl \
  && curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

COPY my.ini /usr/local/etc/php/
COPY server-ca-ogatism.crt /etc/apache2/ssl.crt/
COPY ssl-cert-ogatism.key /etc/apache2/private/
COPY ssl-cert-ogatism.pem /etc/apache2/

RUN a2enmod rewrite
RUN a2enmod ssl
COPY default-ssl.conf /etc/apache2/sites-available/
RUN a2ensite default-ssl
