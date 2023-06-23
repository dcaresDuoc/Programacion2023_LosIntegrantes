#!/bin/bash

# Obtener el ID del contenedor de MySQL
CONTAINER_ID=$(docker ps -qf "name=app_mysql")

echo $CONTAINER_ID

# Crear la base de datos
docker exec -it $CONTAINER_ID mysql -u root -pleandro123 -e "CREATE DATABASE fran_app;"

# Crear la tabla 'user' en la base de datos 'fran_app'
docker exec -it $CONTAINER_ID mysql -u root -pleandro123 -e "USE fran_app; CREATE TABLE user (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(255), password VARCHAR(255));"
