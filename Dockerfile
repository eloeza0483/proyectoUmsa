FROM php:8.2-apache

# 1. Instalar dependencias del sistema y Node.js
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodesource-repo nodesource-repo \
    && apt-get install -y nodejs

# 2. Configurar Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# 3. Copiar proyecto
COPY . /var/www/html
WORKDIR /var/www/html

# 4. Instalar dependencias de PHP (Composer)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# 5. Instalar dependencias de Frontend y COMPILAR (Esto quita el error de Vite)
RUN npm install
RUN npm run build

# 6. Base de datos y Permisos
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database public/build

EXPOSE 80

CMD ["apache2-foreground"]