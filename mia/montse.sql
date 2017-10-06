-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2017 a las 14:08:13
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `montse`
--
CREATE DATABASE IF NOT EXISTS `montse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `montse`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_usu` int(11) NOT NULL,
  `usu_mail` varchar(50) NOT NULL,
  `usu_nivel` varchar(20) NOT NULL,
  `usu_nombre` varchar(25) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_apellido` varchar(25) NOT NULL,
  `usu_actiu` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usu`, `usu_mail`, `usu_nivel`, `usu_nombre`, `usu_password`, `usu_apellido`, `usu_actiu`) VALUES
(1, 'fasion4@hotmail.com', '1', 'German', '81dc9bdb52d04dc20036dbd8313ed055', 'Luque', 1),
(2, 'Montseaaron@hotmail.com', '2', 'Montse', '81dc9bdb52d04dc20036dbd8313ed055', 'Moreno', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
