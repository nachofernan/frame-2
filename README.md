# Framework Base

Framework ultra sencillo para manejar aplicaciones sencillas sin muchos controles.

## Instalación

Framework para copiar y pegar todos los archivos.

Es necesario crear una base de datos y aplicar el users.sql para crear una tabla de usuarios básica con los datos de un usuario genérico:

- Correo: admin@admin.com
- Contraseña: 123456

Luego, en el .env se actualizan los valores de conexión al MySQL

### Archivo .env

```php
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=framework // Nombre de la base de datos
DB_USERNAME=root // Usuario de la base de datos
DB_PASSWORD= // Contraseña del usuario
```

## Uso

Paso a paso para crear un modelo:

Se crea una nueva ruta en App/Routes/web.php

Lo que vaya a hacer la ruta se construye en el controlador que sea necesario (o se usa una función anónima).

El controlador puede usar un modelo particular traído de App/Models

Los modelos ya tienen una conexión interna a la BD

El controlador ejecuta el visualizador con los argumentos que se necesiten. Argumentos pseudo básicos:

- 'title' => Título del documento
- 'js' => Archivo JS que se encargará de aplicar funcionalidad

### ¿Y el resto de la documentación?

En la carpeta Vendor están todas las librerías que se usaron y cada una tiene su propia documentación.

### Librerías y cositas piolas

Opis/Database

Opis/ORM (sin uso)

Symfony/VarDumper

Symfony/DotEnv

Bramus/Router


## Contribuciones
Nada, todo a mano, salvo las librerías que hicieron todo esto posible

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Bugs conocidos

Al instalarlo, hay que borrar la carpeta de Symfony del vendor y meter en la consola:

```
composer update
```

## ChangeLog

- El Config/Model tiene clases de getAll y searchById para ser heredadas por todos los modelos
- El Config/Model tiene un constructor que pide un nombre de tabla para hacer búsquedas genéricas