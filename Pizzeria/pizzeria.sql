-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 03:34:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_p`
--

CREATE TABLE `cliente_p` (
  `iduser` int(11) NOT NULL,
  `Nom_C` varchar(20) NOT NULL,
  `domicilio` varchar(30) NOT NULL,
  `colonia` varchar(15) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `referencia` varchar(11) NOT NULL,
  `idpizza` int(11) NOT NULL,
  `idpago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente_p`
--

INSERT INTO `cliente_p` (`iduser`, `Nom_C`, `domicilio`, `colonia`, `municipio`, `referencia`, `idpizza`, `idpago`) VALUES
(1, 'Alejandro', 'Camino Nuevo', 'Buenavista', 'Naucalpan', 'Presa', 3, 2),
(2, 'Melanie Marian', 'Camino Viejo ', 'Buenvista', 'Naucalpan', 'Presa', 1, 1),
(3, 'Judith', 'Monte Calvario', 'Pedregal', 'Huixquilucan', 'Capilla', 4, 1),
(4, 'Miriam', 'Monte Calvario', 'Pedregal', 'Huixquilucan', 'Capilla', 5, 1),
(5, 'Juan', 'Camino Nuevo', 'Buenavista', 'Naucalpan', 'Presa', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idpago` int(11) NOT NULL,
  `pago` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idpago`, `pago`) VALUES
(1, 'Tarjeta'),
(2, 'Efectivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `idpizza` int(11) NOT NULL,
  `pizza` varchar(30) NOT NULL,
  `tamano` varchar(30) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`idpizza`, `pizza`, `tamano`, `precio`) VALUES
(1, 'Hawahiana', 'grande', 195),
(2, 'Camarones', 'Mediana', 140),
(3, 'Carnes frias', 'Extrema', 230.15),
(4, 'Mexicana', 'Chica', 86.5),
(5, 'Habanera', 'Chica', 90);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente_p`
--
ALTER TABLE `cliente_p`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idpago` (`idpago`),
  ADD KEY `idpizza` (`idpizza`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idpago`);

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`idpizza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente_p`
--
ALTER TABLE `cliente_p`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `idpizza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_p`
--
ALTER TABLE `cliente_p`
  ADD CONSTRAINT `cliente_p_ibfk_1` FOREIGN KEY (`idpizza`) REFERENCES `pizzas` (`idpizza`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_p_ibfk_2` FOREIGN KEY (`idpago`) REFERENCES `pago` (`idpago`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
