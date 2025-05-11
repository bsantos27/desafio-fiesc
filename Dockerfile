FROM php:8.2-fpm-alpine

# Instala dependências do sistema
RUN apk add --no-cache \
    bash \
    libpq \
    libzip-dev \
    zip \
    unzip \
    curl \
    oniguruma-dev \
    postgresql-dev \
    icu-dev \
    g++ \
    make \
    autoconf

# Instala extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_pgsql intl

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www

# Copia os arquivos da aplicação
COPY . .

# Instala dependências PHP (prod)
RUN composer install --no-dev --optimize-autoloader

# Permissões
RUN chown -R www-data:www-data /var/www

# Porta usada pelo PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
