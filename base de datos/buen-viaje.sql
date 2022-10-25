-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2022 a las 00:29:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buen-viaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigo_categoria` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigo_categoria`, `nombre`, `usuario`) VALUES
(1, 'Dulceria', 'JERSON'),
(2, 'Snack', 'JERSON'),
(3, 'Bebidas', 'JERSON'),
(4, 'Biscochos', 'JERSON'),
(5, 'Artesanias\r\n', 'JERSON'),
(6, 'Vitrina', 'JERSON'),
(7, 'Caliente', 'JERSON'),
(8, 'Drogueria', 'JERSON'),
(9, 'prueba1', 'JERSON'),
(10, 'Pruebas2', 'JERSON'),
(11, 'Prueba3', 'JERSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `codigo_detalle` int(11) NOT NULL,
  `codigo_venta` int(11) DEFAULT NULL,
  `codigo_producto` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `codigo_gasto` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `precio` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `codigo_kardex` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `tp_documento` varchar(20) DEFAULT NULL,
  `entrada` int(11) DEFAULT NULL,
  `salida` int(11) DEFAULT NULL,
  `devolucion` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `sede` varchar(50) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`codigo_kardex`, `id_producto`, `tp_documento`, `entrada`, `salida`, `devolucion`, `fecha`, `hora`, `descripcion`, `usuario`, `sede`, `motivo`, `saldo`) VALUES
(32, 2147483647, 'NE', 2, 0, 0, '2022-10-05', '12:15 PM', 'prueba', 'JERSON', 'buenviaje', 'Compra', 2),
(33, 2147483647, 'FO', 0, 2, 0, '2022-10-05', '12:16 PM', 'SE LO CONSUMIO ALVARO', 'JERSON', 'Salud madre y mujer', 'Gasto interno', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `codigo_nota` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`codigo_nota`, `titulo`, `descripcion`, `fecha`, `estado`, `usuario`) VALUES
(1, 'fefefe', 'fefefe', '2022-10-22', 'Activo', 'JERSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(11) NOT NULL,
  `url_imagen` varchar(300) NOT NULL,
  `categoria` int(11) DEFAULT NULL,
  `codigo` varchar(30) DEFAULT NULL,
  `codigo_barras` varchar(30) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `medida` varchar(40) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `costo_proveedor` float NOT NULL,
  `moneda` varchar(5) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `producto_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `url_imagen`, `categoria`, `codigo`, `codigo_barras`, `nombre`, `medida`, `precio`, `costo_proveedor`, `moneda`, `descripcion`, `stock`, `estado`, `cantidad`, `fecha`, `hora`, `usuario`, `producto_venta`) VALUES
(2, '', 3, '7702477476489', '7702477476489', 'AVANA LAG', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(3, '', 3, '7702477422622', '7702477422622', 'YOGURT MOR X125ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(4, '', 3, '7702477422639', '7702477422639', 'YUGURT MEL X125ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(5, '', 3, '7702535024423', '7702535024423', 'COCACOLA 1.5LT', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(6, '', 3, '7702090029512', '7702090029512', 'MANZANAP 1.5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(7, '', 3, '0', '0', 'COLOMBIANP 1.5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(8, '', 3, '7702090029857', '7702090029857', 'HIT MORA X500ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(9, '', 3, '7702090029864', '7702090029864', 'HIT MANGO X500ML ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(10, '', 3, '7702090029888', '7702090029888', 'HIT TROPICAL X500ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(11, '', 3, '7702090033601', '7702090033601', 'HIT LULO X500ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(12, '', 3, '7702090029871', '7702090029871', 'HIT PNARANJA X500ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(13, '', 3, '7702090027884', '7702090027884', 'H2O LIMON X600ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(14, '', 3, '7702090044577', '7702090044577', 'H2O LIMONATA X600ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(15, '', 3, '7702090029154', '7702090029154', 'HO2 MARACUYA X600ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(16, '', 3, '7702354946210', '7702354946210', 'SAVILOE 320ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(17, '', 3, '7702354929503', '7702354929503', 'VIVE100 X240ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(18, '', 3, '7702090039214', '7702090039214', 'SPEED MAX 269ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(19, '', 3, '0', '0', 'POKER ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(20, '', 3, '0', '0', 'PONY 330ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(21, '', 3, '7702617487368', '7702617487368', 'NECTAR MAZ 300ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(22, '', 3, '7702617487382', '7702617487382', 'NECTAR PER 300ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(23, '', 3, '7702090020847', '7702090020847', 'BRETA?A 300ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(24, '', 3, '7702535011119', '7702535011119', 'CC CERO 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(25, '', 3, '7702535011089', '7702535011089', 'CC 4OOML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(26, '', 3, '77035684', '77035684', 'CC 250ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(27, '', 3, '7702535012086', '7702535012086', 'SPRITE 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(28, '', 3, '0', '0', 'CUATRO 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(29, '', 3, '7702090031928', '7702090031928', 'MANZANA 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(30, '', 3, '7702090032017', '7702090032017', 'COLOMBIANA 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(31, '', 3, '7702090031942', '7702090031942', 'UVA 400ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(32, '', 3, '7702090031966', '7702090031966', 'PEPSI 400', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(33, '', 3, '7702090032604', '7702090032604', 'MANZANA 250ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(34, '', 3, '7702090032635', '7702090032635', 'COLOMBIA 250ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(35, '', 3, '7702192422051', '7702192422051', 'GETORADE TRO 500ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(36, '', 3, '7702090042054', '7702090042054', 'AGUA LT', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(37, '', 3, '7702090042269', '7702090042269', 'AGUA 600ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(38, '', 3, '7702090038651', '7702090038651', 'AGUA 300ML', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(39, '', 1, '7622201776510', '7622201776510', 'TRIDENT FRESHX5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(40, '', 1, '7622201776695', '7622201776695', 'TRIDENT MORAX5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(41, '', 1, '7622201776664', '7622201776664', 'TRIDENT MENTAX5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(42, '', 1, '0', '0', 'TRIDENT NARANJAX5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(43, '', 1, '7702011001764', '7702011001764', 'COFFEE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(44, '', 1, '7702993018668', '7702993018668', 'SUPER COCO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(45, '', 1, '7702133445118', '7702133445118', 'HALLS PEPA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(46, '', 1, '7702993012994', '7702993012994', 'BIG BEN', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(47, '', 1, '77010148', '77010148', 'JET 12GM', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(48, '', 1, '7702011001481', '7702011001481', 'MENTA HELADA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(49, '', 1, '7702011281180', '7702011281180', 'BONBONBUM', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(50, '', 1, '7622210427045', '7622210427045', 'HALLS B/CEREZA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(51, '', 1, '7622201776459', '7622201776459', 'HALLS B/LIMON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(52, '', 1, '7702133815782', '7702133815782', 'HALLS B/VERDE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(53, '', 1, '7622210427076', '7622210427076', 'HALLS B/MENTA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(54, '', 1, '7622210427137', '7622210427137', 'HALLS B/MORADO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(55, '', 1, '7622210427106', '7622210427106', 'HALLS B/NEGRO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(56, '', 1, '0', '0', 'FRUNAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(57, '', 1, '0', '0', 'CHICLE C/PEQUE?A', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(58, '', 1, '7702025100156', '7702025100156', 'TOSH MIEL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(59, '', 1, '7590011205158', '7590011205158', 'CLUB SOCIAL ORI', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(60, '', 1, '7750168001687', '7750168001687', 'CLUB SOCIAL INT', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(61, '', 1, '7702025136735', '7702025136735', 'FESTIBAL VAINILLA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(62, '', 1, '7702025136759', '7702025136759', 'FESTIVAL CHOCOLATE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(63, '', 1, '7702025136797', '7702025136797', 'FESTIVAL LIMON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(64, '', 1, '0', '0', 'FESTIVAL FRESA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(65, '', 1, '7702189057730', '7702189057730', 'MANI MOTO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(66, '', 1, '7702007228007', '7702007228007', 'MANICERO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(67, '', 1, '7702007074147', '7702007074147', 'M/ESPECIAL SAL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(68, '', 1, '7702007063899', '7702007063899', 'M/ESPECIAL ARAND', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(69, '', 1, '7702007074185', '7702007074185', 'M/ESPECIAL UVAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(70, '', 1, '0', '0', 'MANI SOTO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(71, '', 1, '7702024034186', '7702024034186', 'COCOSETE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(72, '', 1, '7702914597968', '7702914597968', 'GALA COCO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(73, '', 1, '7702914597982', '7702914597982', 'GALA VAINILLA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(74, '', 1, '7702914597951', '7702914597951', 'GALA CHOCOLATE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(75, '', 1, '7702914596787', '7702914596787', 'CHOCORAMO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(76, '', 1, '7702007212501', '7702007212501', 'JUMBO P40GM', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(77, '', 1, '0', '0', 'JUMBO G100G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(78, '', 1, '7702025142910', '7702025142910', 'MINI CHIP', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(79, '', 1, '7702174083133', '7702174083133', 'TROLLI ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(80, '', 1, '7702174083188', '7702174083188', 'TRILLI ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(81, '', 1, '7702174083195', '7702174083195', 'TROLLI', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(82, '', 1, '7702174083089', '7702174083089', 'TROLLI', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(83, '', 1, '7702174083171', '7702174083171', 'TROLLI', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(84, '', 2, '7702189055552', '7702189055552', 'DTODITO NATURAL 50G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(85, '', 2, '7702189055583', '7702189055583', 'DTODITO LIMON 50G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(86, '', 2, '7702189055545', '7702189055545', 'DTODITO BBQ 50G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(87, '', 2, '0', '0', 'DTODITO MIX 50G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(88, '', 2, '7702152008950', '7702152008950', 'TODO RICO ORIG 45G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(89, '', 2, '0', '0', 'TODO RICO BBQ 45G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(90, '', 2, '7702189056047', '7702189056047', 'PAPA POLLO 36G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(91, '', 2, '7702189056023', '7702189056023', 'PAPA LIMON  36G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(92, '', 2, '0', '0', 'PAPA BBQ 36G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(93, '', 2, '7702189056030', '7702189056030', 'PAPA NATU', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(94, '', 2, '7702189057822', '7702189057822', 'PAPA TOMATE 35G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(95, '', 2, '7702189055484', '7702189055484', 'NATUCHIPS 38G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(96, '', 2, '7702189057846', '7702189057846', 'CHOCLITOS 40G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(97, '', 2, '7702189053817', '7702189053817', 'DORITOS 43G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(98, '', 2, '7702189057877', '7702189057877', 'CHETTOS 40G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(99, '', 2, '0', '0', 'CHETTOS PICANTES 40G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(100, '', 2, '7702189053770', '7702189053770', 'PAPA F/POLLO 105G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(101, '', 2, '7702189053787', '7702189053787', 'PAPA F/NATURAL 105G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(102, '', 2, '7702189053794', '7702189053794', 'PAPA F/LIMON 105G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(103, '', 2, '0', '0', 'PAPA F/TOMATE 105G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(104, '', 2, '7702189057624', '7702189057624', 'DTODITO F/BBQ 165G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(105, '', 2, '7702189057617', '7702189057617', 'DTODITO F/NATURAL 165G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(106, '', 2, '7702189057631', '7702189057631', 'DTODITO F/MIX 165G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(107, '', 2, '0', '0', 'DTODITO F/LIMON 165G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(108, '', 2, '7703133030212', '7703133030212', 'GOLPE ORIGINAL 140G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(109, '', 2, '7703133030175', '7703133030175', 'GOLPE LIMON 140G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(110, '', 2, '7702152109701', '7702152109701', 'TODO RICO F/BBQ 150G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(111, '', 2, '7702152110493', '7702152110493', 'TODO RICO F/PICA 150G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(112, '', 2, '0', '0', 'TODO RICO F/ORIG 150G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(113, '', 2, '0', '0', 'CHOCLITOS FAM', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(114, '', 2, '0', '00', 'DORITOS FAM', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(115, '', 4, '150151202280', '150151202280', 'COTUDO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(116, '', 4, '150151202281', '150151202281', 'ALMUERZO GRANDE ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(117, '', 4, '150151202282', '150151202282', 'ALMUERZO PEQUE?O', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(118, '', 4, '150151202283', '150151202283', 'CUAJADA BIZC', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(119, '', 4, '150151202284', '150151202284', 'ROSCAS CAMPEON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(120, '', 4, '150151202285', '150151202285', 'MANTECADAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(121, '', 4, '150151202286', '150151202286', 'ACHIRA TIRA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(122, '', 4, '150151202287', '150151202287', 'ACHIRA MEDANO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(123, '', 4, '150151202288', '150151202288', 'ACHIRA GRAMDE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(124, '', 4, '150151202289', '150151202289', 'BIZCOCHUELOS ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(125, '', 4, '7707250570309', '7707250570309', 'PANDERO TIRA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(126, '', 4, '150151202290', '150151202290', 'PANDERO TARRO PEQ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(127, '', 4, '7707250570026', '7707250570026', 'PANDERO TARRO GRAN', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(128, '', 8, '7701021143655', '7701021143655', 'TOALLA WINNY', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(129, '', 8, '7509546015040', '7509546015040', 'CEPILLO DE DIENTES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(130, '', 8, '7702120010169', '7702120010169', 'PAPEL HIGIENICO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(131, '', 8, '7702132004484', '7702132004484', 'MAREOL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(132, '', 8, '7706569020659', '7706569020659', 'ACETAMINOFEN', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(133, '', 8, '7703763190119', '7703763190119', 'IBUPROFENO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(134, '', 8, '7702123006787', '7702123006787', 'ALKA ZELTZER', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(135, '', 8, '7702132009588', '7702132009588', 'ADVIL MAX', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(136, '', 8, '7703363005547', '7703363005547', 'DOLEX FORTE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(137, '', 8, '7509546666341', '7509546666341', 'JABON DE BA?O', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(138, '', 8, '7702010111464', '7702010111464', 'CREMA DE DIENTES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(139, '', 8, '7702006298971', '7702006298971', 'GEL EGO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(140, '', 8, '7702045557282', '7702045557282', 'DESODORANTE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(141, '', 5, '15015122601', '15015122601', 'PLACHIVA #10', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(142, '', 5, '15015122602', '15015122602', 'CHIVA # 13', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(143, '', 5, '15015122603', '15015122603', 'CHIVA #16', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(144, '', 5, '15015122604', '15015122604', 'CHIVA # 18', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(145, '', 5, '15015122605', '15015122605', 'CHIVA X3 ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(146, '', 5, '15015122606', '15015122606', 'CHIVA # 7 SOLA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(147, '', 5, '15015122607', '15015122607', 'CHIVA # 3', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(148, '', 5, '15015122608', '15015122608', 'POCILLO # 6', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(149, '', 5, '15015122609', '15015122609', 'POCILLO # 7', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(150, '', 5, '15015122610', '15015122610', 'POCILLO # 8', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(151, '', 5, '15015122611', '15015122611', 'POCILLO # 10', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(152, '', 5, '15015122612', '15015122612', 'POCILLO # 12', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(153, '', 5, '15015122613', '15015122613', 'POCILLO CERVECERO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(154, '', 5, '15015122614', '15015122614', 'POCILLO X3', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(155, '', 5, '15015122615', '15015122615', 'AJICERA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(156, '', 5, '15015122616', '15015122616', 'AZUCARERA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(157, '', 5, '15015122617', '15015122617', 'POCILLO BANX3', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(158, '', 5, '15015122618', '15015122618', 'WILLIS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(159, '', 5, '15015122619', '15015122619', 'CORAZON ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(160, '', 5, '15015122620', '15015122620', 'CANASTA PEQU?A', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(161, '', 5, '15015122621', '15015122621', 'CANASTA MEDIANA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(162, '', 5, '15015122622', '15015122622', 'CANASTA GRANDE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(163, '', 5, '15015122623', '15015122623', 'CANASTA CORAZON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(164, '', 5, '15015122624', '15015122624', 'CANASTA CUBIERTERO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(165, '', 5, '15015122625', '15015122625', 'PLATO JUMBO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(166, '', 5, '15015122626', '15015122626', 'PLATO MEDIANO ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(167, '', 5, '15015122627', '15015122627', 'PLATO PEQUE?O ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(168, '', 5, '15015122628', '15015122628', 'LECHONEROS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(169, '', 5, '15015122629', '15015122629', 'SILLA DOBLE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(170, '', 5, '15015122630', '15015122630', 'SILLA SENCILLA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(171, '', 5, '15015122631', '15015122631', 'LLAVEROS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(172, '', 5, '15015122632', '15015122632', 'IMANES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(173, '', 5, '15015122633', '15015122633', 'BURRO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(174, '', 5, '15015122634', '15015122634', 'GUITARA GRANDE ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(175, '', 5, '15015122635', '15015122635', 'GUITARA MEDIANA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(176, '', 5, '15015122636', '15015122636', 'CUELGA LLAVE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(177, '', 9, '15015122701', '15015122701', 'BREVA X 15', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(178, '', 9, '15015122702', '15015122702', 'BREVA X9', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(179, '', 9, '15015122703', '15015122703', 'BREVA X8', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(180, '', 9, '15015122704', '15015122704', 'BREVA X6', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(181, '', 9, '15015122705', '15015122705', 'BREVA X5', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(182, '', 9, '15015122706', '15015122706', 'TUMEX X3 ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(183, '', 9, '15015122707', '15015122707', 'TUMEX X 6', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(184, '', 9, '15015122708', '15015122708', 'TUMEX CELOFAN', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(185, '', 9, '15015122709', '15015122709', 'TURRON X 8', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(186, '', 9, '15015122710', '15015122710', 'TURRON X 12', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(187, '', 9, '15015122711', '15015122711', 'AREQUIPE CASUELA #8', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(188, '', 9, '15015122712', '15015122712', 'PIONONO REINA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(189, '', 9, '15015122713', '15015122713', 'PIONONO MEDIANO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(190, '', 9, '15015122714', '15015122714', 'AREQUIPE TT1/4', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(191, '', 9, '15015122715', '15015122715', 'AREQUIPE TT1/2', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(192, '', 9, '15015122716', '15015122716', 'AREQUIPE TT/G', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(193, '', 9, '15015122717', '15015122717', 'AREQUIPE COPA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(194, '', 11, '15015122801', '15015122801', 'COLOMBINA SUPER', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(195, '', 11, '15015122802', '15015122802', 'COLOMBINA MINISUPER', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(196, '', 11, '15015122803', '15015122803', 'COLOMBINA CORBATA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(197, '', 11, '15015122804', '15015122804', 'COLOMBINA CORAZON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(198, '', 11, '15015122805', '15015122805', 'COLOMBINA MICKEY', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(199, '', 11, '15015122806', '15015122806', 'COLOMBINA PUNTUDA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(200, '', 11, '15015122807', '15015122807', 'FLAUTA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(201, '', 11, '15015122808', '15015122808', 'TETERO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(202, '', 11, '15015122809', '15015122809', 'CABEZOTAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(203, '', 11, '15015122810', '15015122810', 'CHILLONES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(204, '', 11, '15015122811', '15015122811', 'SUPER HEROES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(205, '', 11, '6925374517463', '6925374517463', 'CHOCO CAR', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(206, '', 11, '6973443190796', '6973443190796', 'FOCUS CHOCO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(207, '', 11, '6925374517500', '6925374517500', 'ANIMAL CHO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(208, '', 11, '9243178630094', '9243178630094', 'WACKY VERDE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(209, '', 11, '0', '0', 'WACKY AZUL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(210, '', 11, '0', '0', 'WACKY ROSADO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(211, '', 11, '7702174079839', '7702174079839', 'MECHAS LOCAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(212, '', 11, '7703888423178', '7703888423178', 'ROLON', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(213, '', 11, '0', '0', 'PISTOLA CHIPI', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(214, '', 11, '0', '0', 'POLVITO FIGURITA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(215, '', 11, '6971324760342', '6971324760342', 'BORADOR ANIMAL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(216, '', 11, '0', '0', 'RELOJ DESNEY', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(217, '', 7, '15015122901', '15015122901', 'TINTO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(218, '', 7, '15015122902', '15015122902', 'CAF? EN LECHE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(219, '', 7, '15015122903', '15015122903', 'AROMATICA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(220, '', 7, '15015122904', '15015122904', 'CHOCOLISTO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(221, '', 7, '15015122905', '15015122905', 'EMPANADAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(222, '', 7, '15015122906', '15015122906', 'PASTELES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(223, '', 7, '15015122907', '15015122907', 'FLAUTAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(224, '', 7, '15015122908', '15015122908', 'MECHERA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(225, '', 7, '15015122909', '15015122909', 'CIGARRILLOS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(226, '', 7, '15015122910', '15015122910', 'TAPABOCAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(227, '', 10, '15015110101', '15015110101', 'SERVILLETAS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(228, '', 10, '15015110102', '15015110102', 'MESCLADORES', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(229, '', 10, '15015110103', '15015110103', 'AZUCAR', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(230, '', 10, '15015110104', '15015110104', 'CAF?', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(231, '', 10, '15015110105', '15015110105', 'BOLSA DE BASURA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(232, '', 10, '15015110106', '15015110106', 'LECHE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(233, '', 10, '15015110107', '15015110107', 'LIMPIA VIDRIOS', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(234, '', 10, '15015110108', '15015110108', 'LIMPIDO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(235, '', 10, '15015110109', '15015110109', 'JABON LIQUIDO', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(236, '', 10, '15015110110', '15015110110', 'LIMPIA DESINFECTANTE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(237, '', 10, '15015110111', '15015110111', 'BOLSA 10KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(238, '', 10, '15015110112', '15015110112', 'BOLSA 5 KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(239, '', 10, '15015110113', '15015110113', 'BOLSA 3KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(240, '', 10, '15015110114', '15015110114', 'BOLSA 2 KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(241, '', 10, '15015110115', '15015110115', 'BOLSA PAPEL 1KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(242, '', 10, '15015110116', '15015110116', 'BOLSA PAPEL 2 KL', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(243, '', 10, '15015110117', '15015110117', 'PAPELERIA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(244, '', 10, '15015110118', '15015110118', 'RECARGA', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(245, '', 10, '15015110119', '15015110119', 'ARRIENDO ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(246, '', 10, '15015110120', '15015110120', 'LUZ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(247, '', 10, '15015110121', '15015110121', 'SUELDO DIA ', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1),
(248, '', 10, '15015110122', '15015110122', 'SUELDO  NOCHE', 'UNIDADES', 0, 0, 'COP', '', 0, 'ACTIVO', 1, '0000-00-00', '9:00 a. m.', 'JERSON', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `rol_usuario` varchar(50) NOT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `usuario_creacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `ip`, `usuario`, `password`, `email`, `nombre`, `apellido`, `empresa`, `telefono`, `hora`, `fecha`, `rol_usuario`, `estado`, `usuario_creacion`) VALUES
(11, NULL, 'jersongalvez', '$2y$10$D2X9471Ix4jRjkjWIAN40.qmYF02HpJPwxo.6qm9f0G8mPDvFkNFy', 'solutionti2021@gmail.com', 'JERSON', 'GALVEZ ENSUNCHO', 'cr 26 # 67 - 30 B/AMBALA', '3155639791', '00:15:58', '2021-12-25', 'Administrador', 'Activo', ''),
(20, NULL, 'AENSUNCHO', '$2y$10$2LrhmRzHMlooKKsPACmbKu1QAqKNHrl25yykEqZJMJr9dIY2S3tOS', 'alvarocambiar@hotmail.com', 'ENSUCHO ARIAS', 'ALVARO', 'buen viaje', '3156573446', '02:29:00', '2022-10-02', 'Administrador', 'Activo', 'JERSON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `codigo_venta` int(11) NOT NULL,
  `codigo_consecutivo` int(11) DEFAULT NULL,
  `documento` varchar(10) DEFAULT NULL,
  `sede` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  `tipo_pago` varchar(10) DEFAULT NULL,
  `total_recibido` float DEFAULT NULL,
  `total_venta` float DEFAULT NULL,
  `cantidad_productos` int(11) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`codigo_detalle`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`codigo_gasto`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`codigo_kardex`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`codigo_nota`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`codigo_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `codigo_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `codigo_gasto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `codigo_kardex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `codigo_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `codigo_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`codigo_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
