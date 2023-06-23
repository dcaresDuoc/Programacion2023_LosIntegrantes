# Utiliza una imagen base con PHP y Apache
FROM php:7.4-apache

# Copia los archivos de tu aplicación al directorio de trabajo en el contenedor
COPY . /var/www/html/

RUN docker-php-ext-install mysqli

# Expone el puerto 80 para acceder al servidor web
EXPOSE 80
