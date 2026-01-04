FROM php:8.2-apache

# Instalar dependencias mínimas
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git

# Configurar Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Copiar el proyecto (esto ya incluye tu carpeta public/build de GitHub)
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar Composer sin scripts que puedan fallar
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Asegurar que la DB exista y dar permisos
RUN mkdir -p database storage bootstrap/cache
RUN touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 storage bootstrap/cache public/build

EXPOSE 80

CMD ["apache2-foreground"]