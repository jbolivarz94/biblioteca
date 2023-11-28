-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2023 at 02:49 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21578183_biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `isbn` varchar(50) NOT NULL,
  `ejemplar` varchar(50) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `num_paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `identificacion` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fec_nacimiento` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `activo` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`identificacion`, `nombre`, `fec_nacimiento`, `sexo`, `activo`, `tipo`) VALUES
('0000777654', 'martha', '1981-03-11', 'F', 'INACTIVO', 'PROFESOR'),
('1234', 'as', '2023-11-21', 'M', 'INACTIVO', ''),
('12345', 'bryan', '2001-09-09', 'M', 'INACTIVO', 'ALUMNO'),
('123456789', 'jorge', '1994-09-28', 'M', 'ACTIVO', 'ALUMNO'),
('987654321', 'armando casas', '1977-11-08', 'M', 'ACTIVO', 'PROFESOR');

-- --------------------------------------------------------

--
-- Table structure for table `prestamo`
--

CREATE TABLE `prestamo` (
  `id` int(11) NOT NULL,
  `dni_persona` varchar(50) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `ejemplar` varchar(10) NOT NULL,
  `fec_prestamo` varchar(50) NOT NULL,
  `fec_devolucion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`isbn`,`ejemplar`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indexes for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libro` (`isbn`,`ejemplar`),
  ADD KEY `dni_persona` (`dni_persona`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`id`) ON UPDATE NO ACTION;

--
-- Constraints for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`dni_persona`) REFERENCES `persona` (`identificacion`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `libro` (`isbn`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

