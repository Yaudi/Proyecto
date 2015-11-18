-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2015 a las 15:28:38
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdiglesia`
--
CREATE DATABASE IF NOT EXISTS `bdiglesia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdiglesia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcelula`
--

CREATE TABLE IF NOT EXISTS `tbcelula` (
`idcelula` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `ubicacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbentrada`
--

CREATE TABLE IF NOT EXISTS `tbentrada` (
  `fecha` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `monto` double NOT NULL,
  `idTipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbinventario`
--

CREATE TABLE IF NOT EXISTS `tbinventario` (
  `serie` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblogueo`
--

CREATE TABLE IF NOT EXISTS `tblogueo` (
`id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblogueo`
--

INSERT INTO `tblogueo` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmiembro`
--

CREATE TABLE IF NOT EXISTS `tbmiembro` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `edad` date NOT NULL,
  `lugarProcedencia` varchar(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `nivelTeologico` varchar(20) NOT NULL,
  `clasificacion` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `idcelula` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsalida`
--

CREATE TABLE IF NOT EXISTS `tbsalida` (
  `fecha` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `monto` double NOT NULL,
  `idTipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipo`
--

CREATE TABLE IF NOT EXISTS `tbtipo` (
  `idTipo` int(10) NOT NULL,
  `nombreTipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcelula`
--
ALTER TABLE `tbcelula`
 ADD PRIMARY KEY (`idcelula`);

--
-- Indices de la tabla `tbinventario`
--
ALTER TABLE `tbinventario`
 ADD PRIMARY KEY (`serie`);

--
-- Indices de la tabla `tblogueo`
--
ALTER TABLE `tblogueo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbmiembro`
--
ALTER TABLE `tbmiembro`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `tbtipo`
--
ALTER TABLE `tbtipo`
 ADD PRIMARY KEY (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcelula`
--
ALTER TABLE `tbcelula`
MODIFY `idcelula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tblogueo`
--
ALTER TABLE `tblogueo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
