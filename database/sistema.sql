-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2018 a las 17:16:54
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `nombres` text NOT NULL,
  `apellidos` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` text NOT NULL,
  `motivo_consulta` text NOT NULL,
  `enfermedad_actual` text NOT NULL,
  `antecedentes_familiares` text NOT NULL,
  `antecedentes_personales` text NOT NULL,
  `inmunizaciones` text NOT NULL,
  `peso` int(100) NOT NULL,
  `talla` int(100) NOT NULL,
  `cc` int(100) NOT NULL,
  `tension_arterial` int(100) NOT NULL,
  `saturacion_oxigeno` int(100) NOT NULL,
  `tratamiento` text NOT NULL,
  `cedula` int(100) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`nombres`, `apellidos`, `fecha_nacimiento`, `direccion`, `motivo_consulta`, `enfermedad_actual`, `antecedentes_familiares`, `antecedentes_personales`, `inmunizaciones`, `peso`, `talla`, `cc`, `tension_arterial`, `saturacion_oxigeno`, `tratamiento`, `cedula`, `fecha`) VALUES
('Juan Pablo', 'Guzman', '0000-00-00', 'Calle Transversal Progreso', 'Rinitis', 'Rinitis', 'No', 'Enfermedad de Nacimiento', '0000-00-00', 50, 162, 50, 15, 20, 'Alprazolam', 30117262, '0000-00-00'),
('Juan', 'Guzman', '0000-00-00', 'Calle Transversal Progreso', 'Rinitis', 'Rinitis', '', 'Enfermedad de Nacimiento', '0000-00-00', 50, 162, 50, 15, 20, 'Alprazolam', 22333111, '0000-00-00'),
('', '', '2017-02-12', '', '', '', '', '', '0000-00-00', 0, 0, 0, 0, 0, '', NULL, '0000-00-00'),
('Jose', 'Marcano', '2017-11-02', 'Calle tal', 'asjka', 'ajksajsk', '', 'skajskasj', '0000-00-00', 60, 120, 22, 0, 0, 'jkdjsk', 11000000, '0000-00-00'),
('asals', 'akslaksl', '2018-11-05', 'sasa', 'motivo', 'enfermedad', 'antefam', 'anteper', 'inm', 50, 120, 0, 0, 0, 'sldksld', 12000000, '2018-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(200) DEFAULT NULL,
  `contrasena` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`) VALUES
('suraima', '1212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
