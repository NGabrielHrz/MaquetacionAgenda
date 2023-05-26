-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 00:20:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
-- Estructura de tabla para la tabla `agendatelefonica`
--

CREATE TABLE `agendatelefonica` (
  `ruta_foto` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ID` int(5) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Apellido` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Correo` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Celular` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Compania` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Parentesco` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `agendatelefonica`
--

INSERT INTO `agendatelefonica` (`ruta_foto`, `ID`, `Nombre`, `Apellido`, `Correo`, `Celular`, `Compania`, `Parentesco`) VALUES
('fotos/2023-05-25 21-59-38-Frakma.jpg', 17, 'Néstor', 'Narvaez', 'vaservzsr@gmail.com', '98456120', 'Telcel', 'Escuela');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendatelefonica`
--
ALTER TABLE `agendatelefonica`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendatelefonica`
--
ALTER TABLE `agendatelefonica`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
