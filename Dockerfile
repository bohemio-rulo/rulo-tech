# Usamos una imagen base de PHP con FPM
FROM php:8.4-fpm

# Instalar dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

# Instalar extensiones de PHP necesarias para Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar el código del proyecto
WORKDIR /var/www
COPY . .

# Instalar dependencias de PHP y optimizar
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Instalar Node.js para compilar los assets (Vite)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs
RUN npm install && npm run build

# Configurar permisos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Comando para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}