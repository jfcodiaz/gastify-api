FROM php:8.2-fpm

# Configurar locales para soportar UTF-8 y emojis
RUN apt-get update && apt-get install -y \
    locales \
    git \
    curl \
    unzip \
    libzip-dev \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen \
    && dpkg-reconfigure -f noninteractive locales \
    && update-locale LANG=en_US.UTF-8

ENV LANG=en_US.UTF-8
ENV LC_ALL=en_US.UTF-8

# Instalar extensiones requeridas por Laravel
RUN docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar Laravel Installer (CLI)
RUN composer global require laravel/installer && \
    ln -s /root/.composer/vendor/bin/laravel /usr/local/bin/laravel

# Establecer el PATH para comandos globales de Composer
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Definir el directorio de trabajo
WORKDIR /app
