-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2025 a las 22:30:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quintana_a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_ape` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL,
  `acepta_terminos` tinyint(1) NOT NULL DEFAULT 0,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_ape`, `telefono`, `email`, `pass`, `nacimiento`, `acepta_terminos`, `perfil_id`, `baja`) VALUES
(1, 'admin', '3794000000', 'admin@gmail.com', '$2y$10$9RJ1kAckJg1zbcrYTsNgHeKjBQs5GwxIHkzdrpd10L3oG1es7u17y', '1999-12-19', 1, 1, 'NO'),
(9, 'juanca25', '5544', 'juanca25@gmail.com', '$2y$10$Q/bgBVzMEL5pZgR4224SK.MAjDhLyCtOh//ZcdTHkdzLDfnsw3qH2', '2002-02-11', 1, 2, 'SI'),
(13, 'agostina', '1111', 'agos@gmail.com', '$2y$10$8lfVGOoZGvYqf.89MPXv.OtiXtlO/YjoWlfvnyXTLNCXf50kQJzJC', '2001-04-03', 1, 2, 'NO'),
(15, 'usuario2', '3333', 'usuario@gmail.com', '$2y$10$eaFZga1rFFadwgwzd.jkl.8qgwiTD9ed/d2p6mK5wMEsYxJpXx3fy', '1900-10-10', 1, 2, 'NO'),
(16, 'usuarionuevo', '1122', 'usuarionuevo@gmail.com', '$2y$10$JiHKnIDue03EUDT5PUdV.ufZ7zd.ycqE6uv/h.xnL2nTPtnbJ8bL2', '1990-11-11', 1, 2, 'NO'),
(17, 'pedro2', '1111', 'pedro@gmail.com', '$2y$10$lqEmcoEuewC9NmLgbh78TOrl2P.OUFcurrjwr5BdjMdkCjbNvFdbK', '1999-11-11', 1, 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
