-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2018 a las 11:50:57
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `montse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id_material` int(11) NOT NULL,
  `id_tipo_material` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `disponible` int(1) NOT NULL,
  `imagen` text NOT NULL,
  `precio` tinyint(1) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `id_tipo_material`, `descripcion`, `disponible`, `imagen`, `precio`, `nombre`) VALUES
(1, 1, 'Tecnología Intel® Turbo Boost 2.0.\r\nVideos de 360 grados.\r\n4K Ultra HD.\r\n12 MB Caché, 6 Núcleos.\r\n', 1, 'intel.jpg', 20, 'I7 CORE'),
(2, 1, '8 GB HBM2 de memoria VRAM.\r\nInterfaz de memoria de 2048 bits.\r\nConsumo energético de 210W.', 1, 'Radeon Rx.jpg', 0, 'TARJETA GRÁFICA'),
(3, 1, 'Capacidades 256GB a 1TB.\r\nLectura Hasta 550MB/seg.\r\nEscritura Hasta 540MB/seg.', 1, 'kingston.jpg', 0, 'DISCO DURO SSD'),
(4, 1, 'i7/Core™.\r\n4 X Memoria DIMM, Max. 64GB, DDR4.\r\nProcesador gráfico integrado - Intel® HD Graphics compatible.\r\nGigabit, GameFirst technology.\r\n8 canales CODEC de audio de alta definición.', 1, 'placaasus.jpg', 70, 'ASUS'),
(5, 2, '17,3 pulgadas LED FullHD.\r\nIntel Core i7 4 núcleos 2,5~3,5 GHz.\r\nIntel HD Graphics 4600 400 MHz.  \r\n16 GB DDR3 (2x8 GB).\r\nSSD 256 GB mSATA.\r\nHDD 1 TB 7.200 rpm SATA3.\r\nWi-Fi, Bluetooth, Windows 10.', 1, 'Gamming.jpg', 127, 'GAMMING MSI GT72 I7-6700HQ'),
(6, 3, 'Ultra alta definición (4K) a 30 fotogramas por segundo 12Mp de resolución y 30 FPS.\r\nModo WDR para capturar todos los detalles. Modo RAW para una mayor edición fotográfica avanzada.\r\nWiFi y Bluetooth', 1, 'Goprohero5.jpg', 0, 'GOPRO HERO5 SESSION'),
(7, 2, 'Procesadore Intel® Core™ I7.\r\nCapacidad: 750 GB.\r\nMemoria: 6 GB.\r\nPantalla: 15.6.\r\nPeso: 2449.\r\n320 DISCO DURO HDD.\r\nAutonomía 8 horas.\r\n4K Ultra HD sensacional.\r\n\r\n', 1, 'Delle6530.jpg', 100, 'DELL E6530'),
(8, 2, 'Core i5 de Intel de doble núcleo a 2,8 GHz \r\nCore i7 de Intel de doble núcleo a 3 GHz.\r\nFusion Drive de 1 TB. 8 GB de memoria LPDDR3 a 1.600 MHzIris Graphics de Intel.\r\nConexión hasta tres monitores.', 1, 'minimac.jpg', 0, 'MAC MINI'),
(9, 2, 'MacPro Ultra 6 núcleos a 3,5 Ghz.\r\nMacPro Ultra 8 núcleos a 3 Ghz.\r\n16 GD DDR3 a 1866 Mgz.\r\nDos Gpu AMD FirePro. 256 GB SSD.\r\nConexión tres monitores.\r\n', 1, 'Macpro.jpg', 100, 'MACPRO'),
(10, 1, 'Ratón gaming - Corsair Scimitar PRO, USB, Juego, Pressed buttons, Rueda, Óptico, 1600 DPI. ', 1, 'RatonGaming.jpg', 100, 'RATON GAMING');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_material`
--

CREATE TABLE `tbl_tipo_material` (
  `id_tipo_material` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipo_material`
--

INSERT INTO `tbl_tipo_material` (`id_tipo_material`, `tipo`) VALUES
(1, 'Componentes'),
(2, 'Ordenadores'),
(3, 'Ocio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usu` int(11) NOT NULL,
  `usu_mail` varchar(50) NOT NULL,
  `usu_nivel` varchar(20) NOT NULL,
  `usu_nombre` varchar(25) NOT NULL,
  `usu_password` varchar(50) NOT NULL,
  `usu_apellido` varchar(25) NOT NULL,
  `usu_actiu` int(1) NOT NULL,
  `img` varchar(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `dni` varchar(25) NOT NULL,
  `telefonofijo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usu`, `usu_mail`, `usu_nivel`, `usu_nombre`, `usu_password`, `usu_apellido`, `usu_actiu`, `img`, `telefono`, `dni`, `telefonofijo`) VALUES
(16, 'Aaron1234@hotmail.com', '2', 'Aaronsee', '1bbd886460827015e5d605ed44252251', 'Morenos Capuello', 1, '', 600443349, '44194769W', 933357685),
(18, 'fasion4@hotmail.com', '1', 'German', '25d55ad283aa400af464c76d713c07ad', 'Luque Sanchez', 1, '', 600443343, '44194765N', 934567865),
(19, 'montseAaron@hotmail.com', '2', 'Montse', '25d55ad283aa400af464c76d713c07ad', 'Morena', 1, '', 600443343, '44194765N', 934567898),
(21, 'daseari@hotmail.com', '2', 'Don Juan', 'bbb8aae57c104cda40c93843ad5e6db8', 'Saez Maria', 1, '', 678893456, '44197867C', 935678783),
(22, 'sanchez@hotmail.com', '2', 'Carmen', 'bae5e3208a3c700e3db642b6631e95b9', 'Asa Sanchez', 1, '', 658908978, '44190345V', 935676578),
(24, 'ruiz@hotmail.com', '2', 'Maria', 'f638f4354ff089323d1a5f78fd8f63ca', 'Ruiz Sanchez', 1, '', 657898754, '43567432E', 934567896),
(26, 'Gomez@hotmail.com', '2', 'Carlos', '30e535568de1f9231e7d9df0f4a5a44d', 'Gomez Gomez', 1, '', 678987868, '44564333C', 933389789),
(27, 'Martinez@hotmail.com', '2', 'Maria Joses', '1bbd886460827015e5d605ed44252251', 'Martinezi Martinez', 1, '', 934565678, '45678986V', 934567876),
(30, 'Gomez@hotmail.com', '2', 'ggg ', '8ddcff3a80f4189ca1c9d4d902c3c909', 'ggg gg', 1, '', 600443343, '54678467H', 934567875);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id_material`),
  ADD KEY `id_tipo_material` (`id_tipo_material`);

--
-- Indices de la tabla `tbl_tipo_material`
--
ALTER TABLE `tbl_tipo_material`
  ADD PRIMARY KEY (`id_tipo_material`),
  ADD KEY `id_tipo_material` (`id_tipo_material`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_material`
--
ALTER TABLE `tbl_tipo_material`
  MODIFY `id_tipo_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD CONSTRAINT `tbl_material_ibfk_1` FOREIGN KEY (`id_tipo_material`) REFERENCES `tbl_tipo_material` (`id_tipo_material`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
