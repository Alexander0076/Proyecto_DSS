-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2022 a las 02:30:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbdss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `Id_artista` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nombreartista` varchar(60) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `Id_comentario` int(11) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `Id_musica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `Id_eventos` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `Id_genero` int(11) NOT NULL,
  `genero` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `Id_musica` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cancion` varchar(255) NOT NULL,
  `duracion` decimal(10,2) NOT NULL,
  `Id_genero` int(11) NOT NULL,
  `Id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `Id_tipoUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(70) NOT NULL,
  `Id_tipousuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`Id_artista`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`Id_comentario`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_musica` (`Id_musica`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`Id_eventos`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`Id_genero`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`Id_musica`),
  ADD KEY `Id_genero` (`Id_genero`),
  ADD KEY `Id_artista` (`Id_artista`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`Id_tipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `Id_tipousuario` (`Id_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `Id_artista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `Id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `Id_eventos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `Id_genero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `Id_musica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `Id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`Id_musica`) REFERENCES `musica` (`Id_musica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`Id_genero`) REFERENCES `genero` (`Id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musica_ibfk_2` FOREIGN KEY (`Id_artista`) REFERENCES `artista` (`Id_artista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_tipousuario`) REFERENCES `tipousuario` (`Id_tipoUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
