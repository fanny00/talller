-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-09-2020 a las 00:36:29
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller_software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `Rut` varchar(10) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Telefono` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_up` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `ultima_visita` varchar(30) DEFAULT NULL,
  `tiempo_visita` time DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `ip_cliente` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Rut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Rut`, `Nombre`, `Apellido`, `Email`, `Direccion`, `Telefono`, `password`, `fecha`, `fecha_creacion`, `fecha_up`, `ultima_visita`, `tiempo_visita`, `info`, `ip_cliente`) VALUES
('18339188-7', 'Victor', 'Castillo', 'carlos@castillo.cl', 'las flores 2020', '654123655', '$2y$10$dZ/wN4XUCmintYEwLzo0pOUoWjJxHsGrJoJ2XYkV99IqPAaH7wc26', '2020-09-07 19:38:38', '2020-09-07 15:51:53', '2020-09-07 19:38:38', '2020 07 09  19:31:08', '19:33:24', NULL, NULL),
('24935605-0', 'Javiera', 'Miranda', 'javi@javi.com', 'los alamos 254', '987456325', '$2y$10$FKl/XK17JUTAVII54zwSvuT7iKx643KCqztRS4zErUKIA6wnkU9p.', '2020-09-07 16:58:53', '2020-09-07 15:51:53', '2020-09-07 16:58:53', '2020 07 09  15:01:28', '16:58:53', NULL, NULL),
('8448232-3', 'Manuel', 'Lopez', 'manuel@manuel.cl', 'las golondrinas 555', '874565777', '$2y$10$a.l6.rMN6FOF7k8BNCul1uaxKlzB5AstLeB4bQ3p1r30M2WCPhQyG', '2020-09-07 19:38:42', '2020-09-07 19:36:33', '2020-09-07 19:38:42', '2020 07 09  19:37:58', '19:38:42', NULL, NULL),
('15018662-5', 'Estevan', 'Rozas', 'estevan@gmail.com', 'las amapolas 145', '321564852', '$2y$10$lVkSf4lBX7tbLmu8pSTG..IWUTtpl3gsY/YwHzBYvJ9NW2vfbk.KK', '2020-09-07 20:18:36', '2020-09-07 20:14:40', '2020-09-07 20:18:36', '2020 07 09  20:18:34', '20:18:36', 'Windows NT LAPTOP-A7TMQ9HO 10.0 build 19041 (Windows 10) AMD64', '::1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
