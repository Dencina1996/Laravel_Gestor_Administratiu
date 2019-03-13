-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-03-2019 a las 20:19:30
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2
-- Versión de PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proyecto_Admin_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Archivos`
--

CREATE TABLE `Archivos` (
  `ID_Archivo` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Venta` int(11) DEFAULT NULL,
  `Ruta_Archivo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Archivos`
--

INSERT INTO `Archivos` (`ID_Archivo`, `ID_Cliente`, `ID_Venta`, `Ruta_Archivo`) VALUES
(1, 3, 2, '1.3._Apache_Dencina.odt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE `Clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `CIF_NIF` varchar(9) NOT NULL,
  `Direccion` varchar(100) DEFAULT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `Fecha_Modificacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`ID_Cliente`, `Nombre`, `Email`, `Telefono`, `CIF_NIF`, `Direccion`, `Provincia`, `Localidad`, `CP`, `Fecha_Modificacion`) VALUES
(1, 'Santiago Insegura Rodríguez', 'sinsegurar@gmail.com', 655443322, '47771234J', 'Paseo de los Pinos Verdes, 6', 'Madrid', 'Villarobledo', 28300, '2019-02-19'),
(2, 'José María Cacahuete Palomo', 'jmcacapalomo@gmail.com', 612345678, '47474747K', 'Calle Gaviota Torcía, 777', 'Euskadi', 'Villa Nueva del Río y Minas', 30000, '2019-02-19'),
(3, 'Luis Domínguez Pineda', 'ldompineda@gmail.com', 632414416, '48205849O', 'C/ Fistro Pecador 55', 'Madrid', 'Getafe', 28901, '2019-03-05'),
(4, 'David Encina Martínez', 'dencina1996@gmail.com', 655432183, '48138493J', 'C/ Pelayo 25', 'Barcelona', 'Cornellá', 8950, '2019-03-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Archivos`
--
ALTER TABLE `Archivos`
  ADD PRIMARY KEY (`ID_Archivo`);

--
-- Indices de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Archivos`
--
ALTER TABLE `Archivos`
  MODIFY `ID_Archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
