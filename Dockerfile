# Dockerfile

# Usa la imagen base de PHP con Apache
FROM php:7.4-apache

# Instala extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia todos los archivos de tu aplicación al contenedor
COPY . .

# Permite que Apache sirva el sitio web
RUN chown -R www-data:www-data /var/www/html && \
    a2enmod rewrite

# Expone el puerto 80 para que Apache pueda servir el sitio
EXPOSE 80

# Comando por defecto al iniciar el contenedor
CMD ["apache2-foreground"]





