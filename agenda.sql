-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 18:58:19
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecha` date DEFAULT NULL,
  `domicilio` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `fecha`, `domicilio`, `tel`, `mail`) VALUES
(7, 'Gonzalez Hugo', '1973-01-25', 'Sagari 831', '154222222', 'hugo@gmail.com'),
(10, 'Roberto Sanchez', '1960-11-11', 'Chiclana 123', '154333333', 'roberto@gmail.com'),
(16, 'Fort Ricardito', '1970-01-24', 'Las Vegas 123', '154111111', 'riky@gmail.com'),
(25, 'Giannetti Claudio Alberto', '1973-01-24', 'Chiclana 123', '154-11223344', 'cagiannetti@gmail.com'),
(28, 'García Ricardo', '2020-08-06', 'Chiclana 123', '154987987', 'garcia@garcia.com'),
(30, 'Alvarez Cristian', '1975-03-03', 'Saavedra 123', '154-654987', 'alvarez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
