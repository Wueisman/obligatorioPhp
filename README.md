# Sistema de gestión de biblioteca
![Badge en Desarollo](https://img.shields.io/badge/STATUS-EN%20DESAROLLO-green)

Prototipo de aplicación para el Taller de desarrollo de aplicaciones web php. El sistema simula un sistema de gestión de biblioteca que permite llevar un registro completo de los libros disponibles, los préstamos realizados y la gestión de usuarios.

## Índice

• [Código fuente de la aplicación](#Codigo-fuente)

• [Análisis y diseño](#Análisis-y-diseño)

• [Configuración e instalación](#configuracion)

## Codigo fuente
El codigo se encuentra en este link: https://github.com/Wueisman/obligatorioPhp

## Análisis y diseño

### Base de datos

![Diagrama de casos de uso](https://github.com/Wueisman/obligatorioPhp/images/actores.png)

### Base de datos

![Esquema de base de datos](https://github.com/Wueisman/obligatorioPhp/images/db.png)

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




# El sistema permitirá llevar un registro completo de los libros disponibles, los préstamos realizados y la gestión de usuarios. Por lo dicho, se deben guardar usuarios, préstamos y libros en la base de datos.
La base de datos se llamará biblioteca con tres tablas para las entidades mencionadas.
# La tabla de ususarios debera contar con un nombre de usuario único y una contraseña, asi como nombre y apellido del usuario. La de libros debe tener un id único el títlo del libro y el autor. Los prestamos deben tener el nombre de usuario del prestmo, el id del libro, fecha de préstamo y fecha de devolución.
# Como casos de uso debe haber un ingreso del usuario se puede dar de alta o si ya está registrado debe poder ingresar con su nombre de usuario y contraseña. Una vez dentro del sistema deberá poder listar los libros y luego, ingresando el id de un libro que no esté prestado, pedirlo. Tiene 10 días para devolverlo. Tambien debe haber un usuario administrador (usuario admin y contraseña admin ) que pueda agruegar y quitar libros

