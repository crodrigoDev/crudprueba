-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2026 a las 18:08:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudprueba`
--
CREATE DATABASE IF NOT EXISTS `crudprueba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crudprueba`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `updproducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updproducto` (`cod` INT, `name` VARCHAR(50), `marc` VARCHAR(100), `stk` INT, `price` DECIMAL)   update producto set Nombre=name, Marca=marc, Stock=stk, Precio=price where Id=cod$$

DROP PROCEDURE IF EXISTS `verproductoid`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verproductoid` (`cod` INT)   select * from producto where Id=cod$$

DROP PROCEDURE IF EXISTS `verproductos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `verproductos` ()   select * from producto$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Nombre`, `Marca`, `Stock`, `Precio`) VALUES
(1, 'Televisor 4K', 'LG', 15, 2700),
(2, 'Radio FM', 'Sony', 30, 400),
(3, 'Horno Electrico', 'Indurama', 10, 1200);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
