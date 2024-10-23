FROM docker.io/library/php:8-apache

WORKDIR /var/www/html

# https://www.php.net/manual/en/image.installation.php
RUN apt-get update \
 && export DEBIAN_FRONTEND=noninteractive \
 && apt upgrade -y && apt install -y pwgen \
 && apt-get clean -y && rm -rf /var/lib/apt/lists/* \
 && docker-php-ext-install pdo pdo_mysql

RUN echo "FLAG{$(pwgen -c -n -s -B 12 1)}" > /flag
RUN chown www-data:www-data /flag

COPY --chown=www-data:www-data src/ .
