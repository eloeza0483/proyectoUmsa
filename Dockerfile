FROM php:8.2-apache

# ... (Instalación de dependencias igual que el anterior)

# Copiar proyecto
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar dependencias de PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Crear DB y dar permisos
RUN mkdir -p database storage bootstrap/cache public/build
RUN touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 storage bootstrap/cache public/build

# LIMPIEZA DE CACHÉ ANTES DE INICIAR
RUN php artisan config:clear && php artisan view:clear && php artisan route:clear

EXPOSE 80

CMD ["apache2-foreground"]