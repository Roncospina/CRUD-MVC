-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 01:12:26
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
-- Base de datos: `company`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employs`
--

CREATE TABLE `employs` (
  `id_emp` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `EPS` varchar(40) DEFAULT NULL,
  `ARL` varchar(65) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `employs`
--

INSERT INTO `employs` (`id_emp`, `name`, `last_name`, `telephone`, `email`, `EPS`, `ARL`, `salary`, `address`) VALUES
(1, 'martha', 'cardona', '3218096873', 'juan.perez@gmail.com', 'Sura', 'Seguros Bolivar', 1000000, 'Calle 21 #23-67'),
(11, 'Carlos', 'Luna', '3157514896', 'carlos.luna@gmail.com', 'Sura', 'Todo-Riesgos', 10000000, 'calle51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employs`
--
ALTER TABLE `employs`
  ADD PRIMARY KEY (`id_emp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employs`
--
ALTER TABLE `employs`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
