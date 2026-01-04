FROM php:8.2-apache

# Instalar dependencias básicas
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git

# Configurar Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Copiar el proyecto (incluyendo la carpeta public/build que subiste)
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Crear DB vacía para evitar errores de conexión
RUN mkdir -p database && touch database/database.sqlite

# PERMISOS: Muy importante para que Laravel pueda leer el manifiesto
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/build

EXPOSE 80

CMD ["apache2-foreground"]