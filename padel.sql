-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 02:47:36
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `padel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `categoria`, `nivel`) VALUES
(1, 'viborita', 'mixta', 2),
(2, 'Enorme', 'Femenina', 1),
(3, 'Dejadita', 'femenina', 0),
(5, 'Las Huesos', 'Femenina', 1),
(7, 'Los Cansados', 'Masculina', 2),
(8, 'Reves', 'Femenina', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tfno` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `idEquipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `apellidos`, `email`, `tfno`, `idEquipo`) VALUES
(1, 'Mar&iacute;a', 'Lopez Sosa', 'maria@maria.com', '369258147', 2),
(2, 'Cesar', 'Medina', 'cesar@m.com', '258963147', 3),
(3, 'Paco', 'Diaz', 'paco@m.com', '258963147', 2),
(5, 'Mario', 'Fleitas', 'mario@m.com', '879654123', 2),
(10, 'Rafa', 'Paez', 'rafa@rafa.com', '655355255', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Jornada` int(2) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `nombre`, `Jornada`, `fecha`) VALUES
(1, 'Viborita-Dejadita', 1, '2019-06-28'),
(2, '', 0, '0000-00-00'),
(3, 'Uno-Dos', 2, '2019-06-29'),
(4, 'Huesos-RevÃ©s', 12, '2019-12-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
