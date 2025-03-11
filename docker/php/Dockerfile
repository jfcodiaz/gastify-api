FROM php:8.2-fpm

# Configurar locales para soportar UTF-8 y emojis
RUN apt-get update && apt-get install -y \
    locales \
    git \
    curl \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && echo "es_MX.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen \
    && dpkg-reconfigure -f noninteractive locales \
    && update-locale LANG=en_US.UTF-8

ENV LANG=en_US.UTF-8
ENV LC_ALL=en_US.UTF-8

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
