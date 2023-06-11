CREATE DATABASE IF NOT EXISTS biblioteca;
set character set utf8;
CREATE TABLE `biblioteca`.`usuarios` (`usuario` VARCHAR(20) NOT NULL , `contrasenia` VARCHAR(20) NOT NULL , `nombre` VARCHAR(20) NOT NULL , `apellido` VARCHAR(20) NOT NULL , PRIMARY KEY (`usuario`)) ENGINE = InnoDB;  