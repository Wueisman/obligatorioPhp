# Sistema de gestión de biblioteca
![Badge en Desarollo](https://img.shields.io/badge/STATUS-EN%20DESAROLLO-green)

Prototipo de aplicación para el Taller de desarrollo de aplicaciones web php. El sistema simula un sistema de gestión de biblioteca que permite llevar un registro completo de los libros disponibles, los préstamos realizados y la gestión de usuarios.

## Índice

• [Código fuente de la aplicación](#Codigo-fuente)

• [Análisis y diseño](#Análisis-y-diseño)

• [Funcionalidades](#Funcionalidades)

• [Configuración e instalación](#Configuración-e-instalación)

• [Anexo](#Anexo)

• [Equipo de desarrollo](#Equipo-de-desarrollo)

## Codigo fuente
El codigo se encuentra en este link: https://github.com/Wueisman/obligatorioPhp

## Análisis y diseño

### Base de datos

![Esquema de base de datos](https://github.com/Wueisman/obligatorioPhp/blob/sofi/images/db.png)

Se adjunta en código fuente el archivo obli.sql para crear la base de datos y el usuario admin.

- Libros:
    - PK: id
- Usuarios:
    - PK: usuario
- Préstamos:
    - PK: id
    - FK: id_libro

### Casos de uso

![Diagrama de casos de uso](https://github.com/Wueisman/obligatorioPhp/blob/main/images/actores.png)

Se detallan los casos de uso en [Funcionalidades](#Funcionalidades)

### Patrón MVC

![Patròn MVC](https://github.com/Wueisman/obligatorioPhp/blob/main/images/mvc.png)

Se utilizó el patrón MVC para organizar el código de la siguiente manera:

- El modelo se encarga de la gestión de la base de datos, las consultas SQL y la manipulación de los datos de los libros y préstamos.
- La vista representa la interfaz de usuario, mostrando la lista de libros, los formularios de búsqueda y las opciones de menú.
- El controlador se encarga de recibir las solicitudes del usuario desde la vista, interactuar con el modelo para obtener los datos requeridos y actualizar la vista con los resultados.

## Funcionalidades

El sistema de gestión de biblioteca ofrece las siguientes funcionalidades:

1. Registro e inicio de sesión de usuarios:

Los usuarios pueden registrarse en el sistema proporcionando su nombre de usuario, contraseña, nombre y apellido.
Ya existe un usuario administrador con usuario 'admin' y contraseña 'admin'.
Los usuarios pueden iniciar sesión en el sistema proporcionando su nombre de usuario y contraseña.

2. Administración de libros:

Los usuario administrador puede agregar y eliminar libros al sistema.
Para agregar nuevos libros al sistema, se ingresa el título, autor y ID del libro.
Para eliminar libros existentes del sistema se utiliza el ID del libro.

3. Realización de préstamos:

Registrar préstamos de libros, indicando el ID del libro, la fecha de préstamo y la fecha de devolución prevista.
Se puede verificar la disponibilidad de libros antes de realizar un préstamo.

4. Devoluciones de libros:

Registrar la devolución de libros, ingresando el ID del libro.
Esta acción actualiza el estado de los libros devueltos para que estén disponibles nuevamente.

5. Listado de libros:

Mostrar todos los libros en una tabla.

## Configuración e instalación

1. Descargar e instalar XAMPP:

XAMPP es un paquete de software gratuito que proporciona un entorno de servidor web local para PHP y MySQL.
Puedes descargar XAMPP desde el sitio web oficial: https://www.apachefriends.org/index.html
Sigue las instrucciones de instalación proporcionadas por el instalador de XAMPP.

2. Configurar XAMPP:

Una vez que hayas instalado XAMPP, asegúrate de que los servicios de Apache y MySQL estén activos.
Puedes verificar esto abriendo el Panel de Control de XAMPP y asegurándote de que los botones "Start" junto a Apache y MySQL estén verdes.

3. Importar la base de datos:

El archivo obli.sql en el código fuente contiene el script para crear la estructura de la base de datos.
Abre phpMyAdmin desde el Panel de Control de XAMPP o ingresando la URL "http://localhost/phpmyadmin" en tu navegador.
Crea una nueva base de datos con el nombre que desees.
Selecciona la nueva base de datos y haz clic en la pestaña "Importar" en la parte superior.
Haz clic en el botón "Seleccionar archivo" y elige el archivo obli.sql.
Haz clic en "Continuar" para importar el archivo y crear las tablas y datos necesarios.

4. Colocar el código fuente en la carpeta correcta:

Coloca todos los archivos del sistema en la carpeta del servidor web local. En XAMPP, la carpeta para los archivos web es "htdocs".

5. Configurar la conexión a la base de datos:

Abre el archivo de configuración del sistema que se encuentra en la carpeta modelo > Conectar.php.
Asegúrate de que la configuración de conexión a la base de datos sea correcta, incluyendo el nombre de la base de datos, usuario, contraseña y host.

6. Acceder al sistema:

Abre tu navegador web e ingresa la URL "http://localhost/obligatorioPhp/index.php" para acceder al sistema.
Dependiendo de cómo hayas configurado las rutas en el sistema, es posible que necesites ajustar la URL según sea necesario.

## Anexo

Puede ver la presentación de este proyecto el el sigueunte link: https://shorturl.at/lrYZ2

## Equipo de desarrollo

- Wueismar Rivero
- Sofia Guerra

