-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 03:31:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eagle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrator`
--

INSERT INTO `administrator` (`id_admin`, `email`, `password`) VALUES
(2, 'matias.fleitas@gmail.com', '$2a$12$lc4LDK0lXzJayVMHgxb66e2wQnnAZtnzVGBxdy.tSGPunfOrc/PLO\r\n'),
(3, 'juan.apellido@gmail.com', '$2y$10$vnwKvlFhygQbM.gO8qyghuBctyhcM764KgbCzjKqpVMI7X9lN1rJu'),
(4, 'matifleitas@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_category` int(11) NOT NULL,
  `type_paraglider` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_category`, `type_paraglider`) VALUES
(7, 'Tandem'),
(8, 'Acro'),
(9, 'Cross Country');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parapentes`
--

CREATE TABLE `parapentes` (
  `id_parapente` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type_paraglider` varchar(45) NOT NULL,
  `description` varchar(355) NOT NULL,
  `image` varchar(50) NOT NULL,
  `difficulty` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `id_category_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parapentes`
--

INSERT INTO `parapentes` (`id_parapente`, `name`, `type_paraglider`, `description`, `image`, `difficulty`, `price`, `id_category_fk`) VALUES
(3, 'Artik', 'Cross Country', 'fd knmjojcm nivhj jn', '', 'Facil', 2600, 9),
(5, 'ommikron', 'Acro', 'jhhjhuh jnh gb gjv lk ouih', '', 'Dificil', 3000, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `parapentes`
--
ALTER TABLE `parapentes`
  ADD PRIMARY KEY (`id_parapente`),
  ADD KEY `id_category_fk` (`id_category_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `parapentes`
--
ALTER TABLE `parapentes`
  MODIFY `id_parapente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `parapentes`
--
ALTER TABLE `parapentes`
  ADD CONSTRAINT `parapentes_ibfk_1` FOREIGN KEY (`id_category_fk`) REFERENCES `categoria` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
