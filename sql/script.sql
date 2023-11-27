CREATE TABLE `id21578183_biblioteca`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT , `usuario` VARCHAR(20) NOT NULL , `password` VARCHAR(50) NOT NULL , `nombre` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

CREATE TABLE `id21578183_biblioteca`.`persona` (`identificacion` VARCHAR(50) NOT NULL , `nombre` VARCHAR(100) NOT NULL , `fec_nacimiento` VARCHAR(50) NOT NULL , `sexo` VARCHAR(1) NOT NULL , `activo` VARCHAR(10) NOT NULL , PRIMARY KEY (`identificacion`)) ENGINE = InnoDB; 

CREATE TABLE `id21578183_biblioteca`.`libro` (`isbn` VARCHAR NOT NULL , `ejemplar` VARCHAR NOT NULL , `nombre` VARCHAR NOT NULL , `cod_categoria` INT NOT NULL , `num_paginas` INT NOT NULL , PRIMARY KEY (`isbn`, `ejemplar`)) ENGINE = InnoDB; 

CREATE TABLE `id21578183_biblioteca`.`prestamo` (`id` INT NOT NULL AUTO_INCREMENT , `dni_persona` INT(50) NOT NULL , `isbn` VARCHAR(10) NOT NULL , `ejemplar` VARCHAR(10) NOT NULL , `fec_prestamo` VARCHAR(50) NOT NULL , `fec_devolucion` VARCHAR(50) NULL , PRIMARY KEY (`id`), INDEX (`dni_persona`)) ENGINE = InnoDB; 