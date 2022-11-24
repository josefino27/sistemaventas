# sistemaventas
Hola, este es un sistema de ventas desrrollado en 
-PHP nativo 
-- version 7.3.2
-Bootstrap
-- version 5.1.0

- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/

github repository: https://github.com/josefino27/sistemahv.git

se procede a instalar el XAMP compatible con la version 7+ de php.

una vez instalado el XAMP procederemos a importar la base de datos.
-- este archivo se encuentra en el archivo comprimido .rar y se llama "productos_db_backup".

-- dentro de phpMyAdmin creamos una bd llamada "productos_db" y seleccionamos cotejamiento "utf8_spanish_ci" y luego boton crear.

-- seleccionamos la base de datos creada y le damos al boton importar.

--- una vez importada nuestra base de datos tendremos los procedimientos almacenados disponibles para ver el producto mas vendido (sp_best_sale_product) y el producto con mas stock (SP_best_stock). estos se pueden ejecutar seleccionando la base de datos y luego en rutinas.

--- se agrego una columna llamada "estado", para no eliminar los registro de la base de datos inmediatamente, esta columna permite ocultar el boton de VENTA cuando el producto esta inactivo. luego si permite eliminar el producto

vamos a la carpeta "sistemaventas" en donde se encuentra nuestro proyecto, debemos extraer o clonar de nuestro repositorio en la en la ruta de "htdoc" de la carpeta xamp unbicada normalmente asi: "C:\xampp\htdocs"

UNA VEZ EXTRAIDO NUESTRO PROYECTO EN XAMP PODEMOS EJECUTAR EL SERVIDOR APACHE Y LA BASE DE DATOS MYSQL Y PROBAR LA APLICACION Y SUS FUNCIONALIDADES.

DESARROOLLADO POR JOSE DAVID NUÑEZ AGUDELO

SALUDOS
