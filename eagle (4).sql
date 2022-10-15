-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 18:57:41
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
(2, 'matias.fleitas@gmail.com', '$2a$12$icl51ZmZpXBn6sKWBix6nOGtlEXOszLZsY9EIGsSqfYg.QGftJmiG');

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
(1, 'Acro'),
(2, 'Cross Country'),
(3, 'Tandem'),
(10, 'Speed Riding');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parapentes`
--

CREATE TABLE `parapentes` (
  `id_parapente` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type_paraglider` varchar(45) NOT NULL,
  `description` varchar(355) NOT NULL,
  `image` varchar(255) NOT NULL,
  `difficulty` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `id_category_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parapentes`
--

INSERT INTO `parapentes` (`id_parapente`, `name`, `type_paraglider`, `description`, `image`, `difficulty`, `price`, `id_category_fk`) VALUES
(9, 'Matox', 'Acro', 'njk njkon uik ikon', 'https://www.macpara.com/media/1988/paraglide-progress2-c01.jpg?anchor=center&mode=crop&width=525&height=525&rnd=131934212480000000', 'Dificil', 4000, 1),
(11, 'Artik', 'Acro', 'jii juik uji ikopioj', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLikjgI-hNC1_6E04kgK_P6UxmGniW3YcJuoMz-Y-_xVurj1VykPC7oW0UP_2SuRqRQbM&usqp=CAU', 'Dificil', 3200, 1),
(12, 'Artik', 'Acro', 'kl mko nujjk ion j', 'https://asagiri.ch/wp-content/uploads/2020/11/artik_6.jpg', 'Facil', 3200, 1),
(13, 'Artik', 'Cross Country', 'kjkonj ikpij ioju i', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQja8TRH1fXa_6rd5cobQBLEBE2YzWJIk6S5A&usqp=CAU', 'Facil', 2700, 2),
(14, 'ElShey', 'Speed Riding', 'km kmjik njkop nhij kokojuyuyyuyuyyy', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm67RVGH1K4gI4jUE6_bKEfw6papDtXxvE0lMSNZS-cjy00Ul-y-0oCf4qij9fPQ4DQ_w&usqp=CAU', 'Medio', 3200, 10);

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
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `parapentes`
--
ALTER TABLE `parapentes`
  MODIFY `id_parapente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
