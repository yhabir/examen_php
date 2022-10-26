-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2022 a las 16:11:49
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `referencia` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `stock` int(20) NOT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='carrito de compra del cliente' AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `producto`, `referencia`, `precio`, `stock`, `fecha`) VALUES
(8, 'te', '2daacd', 1200, 2, '2022-10-22'),
(10, 'limones', '047758', 14500, 2, '2022-10-22'),
(11, 'malteada', 'dax95a', 1962, 12, '2022-10-22'),
(12, 'chocolate', 'da54fa', 4200, 4, '2022-10-22'),
(13, 'cacao cafe', 'c8d9a3', 1680, 3, '2022-10-22'),
(15, 'empanadas', 'd04d92', 1200, 43, '2022-10-22'),
(16, 'galletas', '9eb0bd', 15200, 6, '2022-10-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendacafe`
--

CREATE TABLE IF NOT EXISTS `tiendacafe` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
  `producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `referencia` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `peso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `stock` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fechacreacion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='solicitud de creditos de los clientes' AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `tiendacafe`
--

INSERT INTO `tiendacafe` (`id`, `producto`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fechacreacion`) VALUES
(4, 'cacao cafe', 'c8d9a3', '1680', '6', 'arabica', '33', '2022-10-22'),
(5, 'malteada', 'dax95a', '1962', '3', 'bebida', '44', '2022-10-22'),
(7, 'te helado', '2daacd', '1200', '1', 'bebida', '61', '2022-10-22'),
(8, 'Pastelitos', '9dec95', '2300', '1', 'comida', '35', '2022-10-22'),
(9, 'galletas', '9eb0bd', '15200', '2', 'comida', '13', '2022-10-22'),
(10, 'limones', '047758', '14500', '2', 'comida', '19', '2022-10-22'),
(11, 'chocolate', 'da54fa', '4200', '1', 'comida', '41', '2022-10-22'),
(12, 'empanadas', 'd04d92', '1200', '1', 'comida', '31', '2022-10-22'),
(13, 'limonada', '440d7a', '1500', '1', 'bebida', '58', '2022-10-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
