FROM php:8.4.1-fpm-bookworm

RUN set -eux \
    && apt update -qq \
    && apt install -y vim git default-mysql-client zip unzip build-essential \
    && docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer
