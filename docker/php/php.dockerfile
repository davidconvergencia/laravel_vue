FROM php:8.2.1-fpm

# defina o nome de usuário, ex: user=suporte
ARG user=suporte
ARG uid=1000

# Definir o diretório de trabalho
WORKDIR /var/www/api

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip\
    nano \
    libpq-dev \
    bash
    
# Limpar o cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensões do PHP
RUN docker-php-ext-install mbstring exif pcntl bcmath gd pdo pdo_mysql pdo_pgsql sockets

# Obter o Composer mais recente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Criar usuário do sistema para executar comandos do Composer e Artisan
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Copiar configurações personalizadas do PHP
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini
COPY src /var/www/app

USER $user
