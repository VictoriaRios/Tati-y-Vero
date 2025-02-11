-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 00:58:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tatiyvero`
--
CREATE DATABASE IF NOT EXISTS `tatiyvero` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tatiyvero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido`, `dni`, `telefono`, `email`, `password`) VALUES
(1, 'Victoria', 'Rios', 44938279, 1132742025, 'mvriosdonadeo@emae.edu.ar', 'vicky123'),
(2, 'Tatiana', 'Diaz', 24213290, 1159106852, 'tati@gmail.com', 'tati123'),
(3, 'Veronica', 'Diaz', 25639878, 1136904720, 'vero@gmail.com', 'vero123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_cejas`
--

CREATE TABLE `servicio_cejas` (
  `id_servicio` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio_cejas`
--

INSERT INTO `servicio_cejas` (`id_servicio`, `nombre`, `precio`) VALUES
(1, 'Perfilado', 8500),
(2, 'Perfilado + Tinte', 9500),
(3, 'Lifting + Tinte', 15500),
(4, 'Lifting + Tinte + Perfilado', 20000),
(5, 'Laminado', 9500),
(6, 'Retirado', 3000),
(7, 'gola|', 12332);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_pestañas`
--

CREATE TABLE `servicio_pestañas` (
  `id_servicio` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio_pestañas`
--

INSERT INTO `servicio_pestañas` (`id_servicio`, `nombre`, `precio`) VALUES
(1, 'Pestañas Clasicas', 12500),
(2, 'Efecto Rimel', 13500),
(3, 'Volumen Bajo', 14000),
(4, 'Volumen Medio', 15000),
(5, 'Volumen Alto', 16000),
(6, 'Volumen Ruso', 17000),
(7, 'Retirado', 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_uñas`
--

CREATE TABLE `servicio_uñas` (
  `id_servicio` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio_uñas`
--

INSERT INTO `servicio_uñas` (`id_servicio`, `nombre`, `precio`) VALUES
(1, 'Semipermanente', 9500),
(2, 'Capping', 12000),
(3, 'Acrilicas', 15000),
(4, 'Soft Gel', 13000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `servicio` text DEFAULT NULL,
  `turno` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `nombre`, `apellido`, `telefono`, `fecha_nacimiento`, `servicio`, `turno`) VALUES
(1, 'Valeria Andrea', 'Donadeo', 1159106209, NULL, 'Uñas', 'Tarde'),
(2, 'Valeria Andrea', 'Donadeo', 1159106209, '1974-11-08', 'Uñas', 'Tarde'),
(3, 'Valeria Andrea', 'Donadeo', 1159106209, '1974-11-08', 'Uñas', 'Tarde'),
(4, 'Maria Sol', 'Donadeo', 1159863048, '2002-04-17', 'Pestañas', 'Tarde'),
(5, 'Maria', 'Rios', 1132742025, '2003-09-15', 'Cejas', 'Mañana'),
(6, 'Josefina', 'Diaz', 1166338844, '2003-08-15', 'Uñas', 'Mañana'),
(7, 'Marta', 'Mancebo', 1177559630, '2000-07-14', 'Uñas', 'Mañana'),
(8, 'ddsds', 'sdsds', 0, '3333-04-12', 'Seleccionar', 'Seleccionar'),
(9, 'dsada', 'asdas', 1122334455, '0000-00-00', 'Seleccionar', 'Seleccionar'),
(10, 'victoria', 'rios', 1132742025, '2003-09-15', 'Pestañas', 'Mañana'),
(11, 'sdasdsa', 'dsadas', 3243343, '0411-08-15', 'Uñas', 'Mañana'),
(12, 'maria', 'Diaz', 1144778855, '2002-04-17', 'Cejas', 'Mañana'),
(13, 'Remera', 'Salinas', 1166335588, '1820-03-15', 'Uñas', 'Tarde'),
(14, 'Tv', 'donadeo', 1166335588, '2006-05-14', 'Cejas', 'Mañana'),
(15, 'Remera', 'rios', 1122334455, '2057-08-14', 'Uñas', 'Mañana'),
(16, 'maria', 'Salinas', 1166335588, '2203-09-15', 'Pestañas', 'Mañana'),
(17, 'Remera', 'salinas', 1166335588, '0203-09-15', 'Pestañas', 'Tarde'),
(18, 'maria', 'rios', 1132742025, '2003-09-15', 'Uñas', 'Mañana'),
(19, 'victoria', 'salinas', 1122334455, '2003-09-15', 'Uñas', 'Mañana'),
(20, 'victoria', 'salinas', 1166335588, '0223-09-15', 'Uñas', 'Mañana'),
(21, 'victoria', 'rios', 1166335588, '2003-09-15', 'Uñas', 'Mañana'),
(22, 'victoria', 'rios', 1122334455, '2024-11-30', 'Uñas', 'Mañana'),
(23, 'Valeria', 'Donadeo', 1159106809, '2024-12-03', 'Pestañas', 'Tarde'),
(24, 'Sol', 'Rios', 1144996622, '2024-11-29', 'Pestañas', 'Tarde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `servicio_cejas`
--
ALTER TABLE `servicio_cejas`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicio_pestañas`
--
ALTER TABLE `servicio_pestañas`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicio_uñas`
--
ALTER TABLE `servicio_uñas`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicio_cejas`
--
ALTER TABLE `servicio_cejas`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio_pestañas`
--
ALTER TABLE `servicio_pestañas`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio_uñas`
--
ALTER TABLE `servicio_uñas`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
