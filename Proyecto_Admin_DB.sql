-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-03-2019 a las 19:39:53
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
(6, 2, 1, 'web.html'),
(7, 1, 1, 'laravel.txt'),
(8, 1, 1, 'archivo.pdf');

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
(1, 'Santiago Insegura Rodríguez', 'sinsegurar@gmail.com', 655443322, '47771234J', 'Paseo de los Pinos Verdes, 6', 'Madrid', 'Aranjuez', 28300, '2019-02-19'),
(2, 'Enrique Martinez Garrido', 'enrique@yahoo.com', 932224532, '47889237S', 'Calle Pino Verde 43', 'Cadiz', 'Gibraltar', 99888, '2019-02-26'),
(3, 'Kevin Sedano', 'kevinsedanosmx@gmail.com', 617183420, '47939006Z', 'C/ Lluis G. Rius 6', 'Barcelona', 'Sant Feliu de Llobregat', 8980, '2019-03-06'),
(4, 'Rubén', 'ruben@gmail.com', 673849284, '48392038K', 'C/ Almeda 34', 'Barcelona', 'Barcelona', 8940, '2019-03-07'),
(5, 'kjh', 'lukh@gmail.com', 323213213, '32132132A', 'kh', 'kjh', 'kj', 0, '2019-03-14'),
(6, 'Juan Francisco', 'juanfa@gmail.com', 934445566, '32445444A', 'Calle de las mariposas sin alas', 'Aranjuez', 'Badajoz', 97889, '2019-03-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ventas`
--

CREATE TABLE `Ventas` (
  `ID_Venta` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `ID_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ventas`
--

INSERT INTO `Ventas` (`ID_Venta`, `Descripcion`, `Estado`, `ID_Cliente`) VALUES
(1, 'Venta de melocotones', 'Activa', 3);

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
-- Indices de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  ADD PRIMARY KEY (`ID_Venta`);

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
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  MODIFY `ID_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
