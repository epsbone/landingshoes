-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2022 a las 04:56:43
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_al` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apodo` text COLLATE utf8_bin NOT NULL,
  `tel` text COLLATE utf8_bin NOT NULL,
  `correo` text COLLATE utf8_bin NOT NULL,
  `foto` text COLLATE utf8_bin NOT NULL,
  `nacimiento` text COLLATE utf8_bin NOT NULL,
  `lic` text COLLATE utf8_bin NOT NULL,
  `maes` text COLLATE utf8_bin NOT NULL,
  `doc` text COLLATE utf8_bin NOT NULL,
  `resumen` text COLLATE utf8_bin NOT NULL,
  `pass` varchar(100) COLLATE utf8_bin NOT NULL,
  `fk_carr` text COLLATE utf8_bin NOT NULL,
  `fk_duracion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_al`, `nombre`, `apodo`, `tel`, `correo`, `foto`, `nacimiento`, `lic`, `maes`, `doc`, `resumen`, `pass`, `fk_carr`, `fk_duracion`) VALUES
(1, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '234', '2', '6'),
(2, 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descriptions`
--

CREATE TABLE `descriptions` (
  `intro` varchar(600) COLLATE utf8_bin NOT NULL,
  `upper` varchar(600) COLLATE utf8_bin NOT NULL,
  `side` varchar(600) COLLATE utf8_bin NOT NULL,
  `front` varchar(600) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `descriptions`
--

INSERT INTO `descriptions` (`intro`, `upper`, `side`, `front`) VALUES
('The Air Force 1 is one of Nike’s most popular sneakers of all time, but the shoe almost didn’t become the phenomenon it’s known to be today. Designed by Bruce Kilgore, who also co-designed the Air Jordan 2, the Nike Air Force 1 was originally released in 1982 and was only intended to be in production for a year. But the shoe turned into a cultural icon, and the Air Force 1 became an important Nike model for years to come. \r\n\r\n', 'The Air Force 1 features an upper that is most frequently dressed in leather, a large Swoosh across the lateral and medial sides, perforated toe boxes, metal lace dubraes, and an Air-encapsulated midsole with signature “AIR” text near the rear. ', 'The sneaker prevailed with some help from Baltimore retailers Cinderella Shoes, Charley Rudo Sports, and Downtown Locker Room, which managed to convince Nike to keep making the shoe. ', 'Over the years, it’s been released in countless different colorways and material mock-ups, including Flyknit, Gore-Tex (GTX), Crater foam, Foamposite, and even a $2,000 Lux crocodile version for the sneaker’s 25th anniversary.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shoe`
--

CREATE TABLE `shoe` (
  `shoe_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `model` varchar(30) COLLATE utf8_bin NOT NULL,
  `color` varchar(10) COLLATE utf8_bin NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `shoe`
--

INSERT INTO `shoe` (`shoe_id`, `name`, `model`, `color`, `tipe`) VALUES
(1234567890, 'Air Force 1', '\'07', 'White', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tittles`
--

CREATE TABLE `tittles` (
  `top` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` varchar(30) COLLATE utf8_bin NOT NULL,
  `contact` varchar(30) COLLATE utf8_bin NOT NULL,
  `testimony` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tittles`
--

INSERT INTO `tittles` (`top`, `description`, `contact`, `testimony`) VALUES
('The Most Popular Sneaker', 'Description', 'Request a call back', 'Reviews');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `nickname` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(300) COLLATE utf8_bin NOT NULL,
  `tipe` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nombre`, `nickname`, `phone`, `tipe`) VALUES
(0, 'aaa', 'dd', 'ddjdjd@gmail.com', 'DDQD'),
(1, 'Esteban', 'prueba12', 'esteban@gmail.com', 'Esteban Pereda'),
(2, '0', '0', '0987654321', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_al`);

--
-- Indices de la tabla `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`shoe_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_al` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shoe`
--
ALTER TABLE `shoe`
  MODIFY `shoe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
