-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 00:57:38
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE IF NOT EXISTS `aprendiz` (
  `Documento` varchar(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Correo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Documento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`Documento`, `Nombre`, `Apellido`, `Correo`) VALUES
('6666', 'Andres', 'Mora', 'edin@gmail.com'),
('9999', 'Camila', 'Rios', 'edin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroaprendiz`
--

CREATE TABLE IF NOT EXISTS `registroaprendiz` (
  `regId` int(11) NOT NULL AUTO_INCREMENT,
  `regNombre` varchar(55) NOT NULL,
  `regApellido` varchar(55) NOT NULL,
  `regDocumento` varchar(15) NOT NULL,
  `regCorreo` varchar(55) NOT NULL,
  PRIMARY KEY (`regId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `registroaprendiz`
--

INSERT INTO `registroaprendiz` (`regId`, `regNombre`, `regApellido`, `regDocumento`, `regCorreo`) VALUES
(1, 'Edinson', 'Martinenez', '7020', 'edi@gmail.com'),
(7, 'Camila', 'Rios', '6666', 'cami@gmail.com'),
(9, 'Andres', 'Martinez', '3322', 'andre@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
