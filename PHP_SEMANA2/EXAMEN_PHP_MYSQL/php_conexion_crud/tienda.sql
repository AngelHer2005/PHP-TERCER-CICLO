-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2024 a las 04:32:08
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEFONO` char(9) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `FECHACREACION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID`, `NOMBRE`, `EMAIL`, `TELEFONO`, `DIRECCION`, `FECHACREACION`) VALUES
(1, 'Juan Perez', 'juan.perez@email.com', '912345678', 'Av. Arequipa 1234, Lima', '2023-01-01'),
(2, 'Maria Gomez', 'maria.gomez@email.com', '922345678', 'Jr. de la Unión 456, Lima', '2023-01-02'),
(3, 'Carlos Ruiz', 'carlos.ruiz@email.com', '932345678', 'Calle Schell 789, Miraflores', '2023-01-03'),
(4, 'Ana Lopez', 'ana.lopez@email.com', '942345678', 'Av. Larco 101, Trujillo', '2023-01-04'),
(5, 'Luis Sanchez', 'luis.sanchez@email.com', '952345678', 'Av. Javier Prado 202, San Borja', '2023-01-05'),
(6, 'Laura Fernandez', 'laura.fernandez@email.com', '962345678', 'Calle Real 303, Huancayo', '2023-01-06'),
(7, 'Miguel Torres', 'miguel.torres@email.com', '972345678', 'Av. Ejercito 404, Arequipa', '2023-01-07'),
(8, 'Elena Ramirez', 'elena.ramirez@email.com', '982345678', 'Jr. Puno 505, Puno', '2023-01-08'),
(9, 'Roberto Martinez', 'roberto.martinez@email.com', '992345678', 'Av. Salaverry 606, Magdalena', '2023-01-09'),
(10, 'Sara Diaz', 'sara.diaz@email.com', '912345679', 'Av. Angamos 707, Surquillo', '2023-01-10'),
(11, 'Pablo Hernandez', 'pablo.hernandez@email.com', '922345679', 'Calle Los Pinos 808, La Molina', '2023-01-11'),
(12, 'Carmen Morales', 'carmen.morales@email.com', '932345679', 'Av. Grau 909, Callao', '2023-01-12'),
(13, 'Jorge Vega', 'jorge.vega@email.com', '942345679', 'Jr. Tacna 1010, Cusco', '2023-01-13'),
(14, 'Lucia Castillo', 'lucia.castillo@email.com', '952345679', 'Av. Universitaria 111, San Miguel', '2023-01-14'),
(15, 'Rafael Ortega', 'rafael.ortega@email.com', '962345679', 'Calle Comercio 212, Chiclayo', '2023-01-15'),
(16, 'Patricia Reyes', 'patricia.reyes@email.com', '972345679', 'Jr. Belén 313, Iquitos', '2023-01-16'),
(17, 'Fernando Ramos', 'fernando.ramos@email.com', '982345679', 'Av. Colonial 414, Cercado de Lima', '2023-01-17'),
(18, 'Beatriz Blanco', 'beatriz.blanco@email.com', '992345679', 'Calle San Martin 515, Barranco', '2023-01-18'),
(19, 'Diego Soto', 'diego.soto@email.com', '912345670', 'Av. Brasil 616, Breña', '2023-01-19'),
(20, 'Alicia Guzman', 'alicia.guzman@email.com', '922345670', 'Av. Tomas Valle 717, Los Olivos', '2023-01-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
