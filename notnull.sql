-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2017 a las 01:05:50
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notnull`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `patente` varchar(255) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `subject`, `created_at`, `mensaje`) VALUES
(0, 'luks', 'olivera', 'luks@gmail', '1234', '2017-09-19 20:58:17', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `telefono` int(12) NOT NULL,
  `precio_hora` int(11) DEFAULT NULL,
  `precio_estadia` int(11) DEFAULT NULL,
  `abierto_desde` time DEFAULT NULL,
  `abierto_hasta` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `codigo` varchar(255) NOT NULL,
  `id_seccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `fecha_desde` datetime NOT NULL,
  `fecha_hasta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_lugar`
--

CREATE TABLE `seccion_lugar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `rol` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `rol`, `password`, `nombre`, `apellido`, `e_mail`, `telefono`, `activo`) VALUES
(1, 'starkluks', 'ROLE_USER', '$2y$13$Ad8AOa3YaGgaim4R803HauL4ZpTc4JaFdlRD78aZWRukAiYQcxrny', 'lucas', 'olivera', 'luksolivera@gmail.com', '1134032295', NULL),
(3, 'lalsdk', 'ROLE_USER', '$2y$13$kbzrjsfutFCM/BAl8m9IjO/RHqVv9KHavgC.u1qW876PR5VGUyS8q', 'asdhjk', 'adjka12', 'alskdak@lask', '123', NULL),
(4, 'gonza', 'ROLE_USER', '$2y$13$CezB1nzA3UO3K6Z4LzOONusI.c.EXnnZAk/YJcWUtht/bQuwyphRC', 'gonza', 'gonza', 'gonza@gos', '1123', NULL),
(5, 'admin', 'ROLE_USER', '$2y$13$g/NGrCt/M6ZvwA2LTl30K.znk4ZcoeEZr0/cMxc17nTDwE98E0na6', 'admin', 'admin', 'admin@gmail.com', '23646', NULL),
(7, 'user', 'ROLE_USER', '$2y$13$513dg4jDWWOqPQGq5oihb.A0xI3oB7sroh2meXNwC2vcC7HYc.SIi', 'user', 'user', 'user@as', '56789', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_establecimiento`
--

CREATE TABLE `usuario_establecimiento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patente` (`patente`),
  ADD KEY `usuario` (`id_Usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_establecimiento` (`id_establecimiento`),
  ADD KEY `id_seccion` (`id_seccion`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_auto` (`id_auto`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `seccion_lugar`
--
ALTER TABLE `seccion_lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_establecimiento`
--
ALTER TABLE `usuario_establecimiento`
  ADD PRIMARY KEY (`id_usuario`,`id_establecimiento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_establecimiento` (`id_establecimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seccion_lugar`
--
ALTER TABLE `seccion_lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `FK_66BA25FA334520B1` FOREIGN KEY (`id_Usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD CONSTRAINT `Lugar_ibfk_2` FOREIGN KEY (`id_seccion`) REFERENCES `seccion_lugar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `Reserva_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reserva_ibfk_2` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_establecimiento`
--
ALTER TABLE `usuario_establecimiento`
  ADD CONSTRAINT `usuario_establecimiento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_establecimiento_ibfk_2` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
