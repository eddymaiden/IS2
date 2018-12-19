-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 19-12-2018 a las 11:52:01
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eatnow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alergeno`
--

CREATE TABLE `alergeno` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alergeno`
--

INSERT INTO `alergeno` (`id`, `tipo`) VALUES
(1, 'gluten'),
(2, 'lactosa'),
(3, 'soja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `url_imagen` varchar(100) NOT NULL,
  `descripcion` text,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`id`, `nombre`, `id_usuario`, `url_imagen`, `descripcion`, `precio`) VALUES
(30, 'Macarrones', 12, 'macarrones.jpg', 'queso y pasta', 12),
(31, 'croquetas', 16, 'croquetas-de-jamon-con-bechamel-rapida.jpg', 'besamel de la buena', 12),
(32, 'lasaña', 17, 'lasaña_carne_ternera_cerdo-525x360.jpg', 'carne de calidad', 12),
(33, 'paella', 12, 'paella-mixta-665.jpg', 'la que queramos', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato_tiene_alergeno`
--

CREATE TABLE `plato_tiene_alergeno` (
  `id_plato` int(11) NOT NULL,
  `id_alergeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plato_tiene_alergeno`
--

INSERT INTO `plato_tiene_alergeno` (`id_plato`, `id_alergeno`) VALUES
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(30, 2),
(32, 2),
(33, 2),
(30, 3),
(32, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `url_imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `ciudad`, `nombre`, `apellido`, `url_imagen`) VALUES
(12, 'is2@gmail.com', 'Barcelona', 'is', 'ciclo', 'teka.jpg'),
(13, 'kevin@polako.com', 'Tekasi', 'Kevin', 'polako', 'teka.jpg'),
(14, 'javier.perez.martin@alumnos.upm.es', 'Madrid', 'Javier', 'Pérez', 'chef.jpg'),
(15, 'valen@gmail.com', 'valencia', 'Magis', 'Valentin', 'macarrones.jpg'),
(16, 'JP@gmail.com', 'Madrid', 'Javier', 'Perez', 'calvo.jpg'),
(17, 'javier@gmail.com', 'Valencia', 'Javier', 'Martin', 'chef.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_puntua_usuario`
--

CREATE TABLE `usuario_puntua_usuario` (
  `id_puntuador` int(11) NOT NULL,
  `id_puntuado` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_puntua_usuario`
--

INSERT INTO `usuario_puntua_usuario` (`id_puntuador`, `id_puntuado`, `puntos`) VALUES
(12, 13, 10),
(12, 13, 8),
(12, 13, 6),
(13, 12, 5),
(12, 12, 4),
(12, 12, 10),
(12, 13, 10),
(12, 13, 5),
(14, 12, 5),
(12, 14, 10),
(12, 14, 0),
(15, 12, 6),
(15, 14, 10),
(12, 15, 10),
(16, 12, 10),
(12, 16, 7),
(17, 12, 0),
(12, 17, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tiene_alergeno`
--

CREATE TABLE `usuario_tiene_alergeno` (
  `id_usuario` int(11) NOT NULL,
  `id_alergeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_tiene_alergeno`
--

INSERT INTO `usuario_tiene_alergeno` (`id_usuario`, `id_alergeno`) VALUES
(12, 3),
(16, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alergeno`
--
ALTER TABLE `alergeno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Indices de la tabla `plato_tiene_alergeno`
--
ALTER TABLE `plato_tiene_alergeno`
  ADD PRIMARY KEY (`id_plato`,`id_alergeno`),
  ADD KEY `id_alergeno` (`id_alergeno`),
  ADD KEY `id_plato` (`id_plato`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_puntua_usuario`
--
ALTER TABLE `usuario_puntua_usuario`
  ADD KEY `id_puntuador` (`id_puntuador`),
  ADD KEY `id_puntuado` (`id_puntuado`),
  ADD KEY `id_puntuador_2` (`id_puntuador`,`id_puntuado`) USING BTREE;

--
-- Indices de la tabla `usuario_tiene_alergeno`
--
ALTER TABLE `usuario_tiene_alergeno`
  ADD PRIMARY KEY (`id_usuario`,`id_alergeno`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_alergeno` (`id_alergeno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alergeno`
--
ALTER TABLE `alergeno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `plato`
--
ALTER TABLE `plato`
  ADD CONSTRAINT `plato_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `plato_tiene_alergeno`
--
ALTER TABLE `plato_tiene_alergeno`
  ADD CONSTRAINT `plato_tiene_alergeno_ibfk_1` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id`),
  ADD CONSTRAINT `plato_tiene_alergeno_ibfk_2` FOREIGN KEY (`id_alergeno`) REFERENCES `alergeno` (`id`);

--
-- Filtros para la tabla `usuario_puntua_usuario`
--
ALTER TABLE `usuario_puntua_usuario`
  ADD CONSTRAINT `usuario_puntua_usuario_ibfk_1` FOREIGN KEY (`id_puntuado`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_puntua_usuario_ibfk_2` FOREIGN KEY (`id_puntuador`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario_tiene_alergeno`
--
ALTER TABLE `usuario_tiene_alergeno`
  ADD CONSTRAINT `usuario_tiene_alergeno_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_tiene_alergeno_ibfk_2` FOREIGN KEY (`id_alergeno`) REFERENCES `alergeno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
