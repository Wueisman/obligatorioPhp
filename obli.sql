CREATE DATABASE IF NOT EXISTS biblioteca;
set character set utf8;
CREATE TABLE `biblioteca`.`usuarios` (`usuario` VARCHAR(20) NOT NULL , `contrasenia` VARCHAR(20) NOT NULL , `nombre` VARCHAR(20) NOT NULL , `apellido` VARCHAR(20) NOT NULL , PRIMARY KEY (`usuario`)) ENGINE = InnoDB;
CREATE TABLE `biblioteca`.`libros` (`Id` INT(6) NOT NULL , `titulo` VARCHAR(40) NOT NULL , `autor` VARCHAR(40) NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;
CREATE TABLE `biblioteca`.`prestamos` (`id_libro` INT(6) NOT NULL , `nombre_usuario` VARCHAR(40) NOT NULL , `fecha_prestamo` DATE NOT NULL , `fecha_devolucion` DATE NOT NULL ) ENGINE = InnoDB; 