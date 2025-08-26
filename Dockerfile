# Usar uma imagem oficial do PHP 8.2
FROM php:8.2-fpm

# Instalar dependências do sistema necessárias para o Laravel e Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev

# Instalar as extensões do PHP que o Laravel usa (incluindo SQLite)
RUN docker-php-ext-install pdo_mysql pdo_sqlite exif pcntl bcmath gd zip

# Instalar o Composer (gerenciador de pacotes do PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho dentro do contêiner
WORKDIR /app

# Copiar todos os arquivos do seu projeto para dentro do contêiner
COPY . .

# Rodar o Composer Install para baixar as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Ajustar permissões da pasta de armazenamento e cache do Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Expor a porta 8000 para que o servidor possa ser acessado
EXPOSE 8000

# O comando final para iniciar o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000