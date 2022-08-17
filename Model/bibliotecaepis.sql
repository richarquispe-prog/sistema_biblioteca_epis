-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2022 a las 20:43:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecaepis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `DNI` int(20) NOT NULL,
  `n_control` int(20) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `codigo_boleta` int(11) NOT NULL,
  `fecha_devolucion` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`DNI`, `n_control`, `fecha_entrega`, `codigo_boleta`, `fecha_devolucion`) VALUES
(71321445, 38, '2022-08-06', 6, '2022-08-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `n_control` int(20) NOT NULL,
  `dewey` varchar(20) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `fecha_edicion` date NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `cantidad` int(25) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `imagen` longblob NOT NULL,
  `estado` varchar(11) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `formato` varchar(10) NOT NULL,
  `PDF` text NOT NULL,
  `Acciones` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`n_control`, `dewey`, `titulo`, `autor`, `fecha_edicion`, `editorial`, `cantidad`, `fecha_adquisicion`, `imagen`, `estado`, `genero`, `formato`, `PDF`, `Acciones`) VALUES
(14, '044.22/G21', 'COMUNICACION ENTRE COMPUTADORAS Y TECNOLOGIA DE REDES', 'MICHAEL A. GALLO, WILLIAM M. HANCOCK', '2002-01-02', 'THOMSOM LEARNING, S.', 1, '2005-02-20', 0x696d6167656e65732f312e6a666966, 'Disponible', 'Redes', 'Fisico', 'pdf/', ''),
(15, '005.1/B85', 'INGENIERIA DEL SOFTWARE ORIENTADO A OBJETIVOS', 'BERND BRUEGGE, ALLEN H. DUTOIT', '2002-03-12', 'PEARSON EDUCACION, S', 1, '2005-01-12', 0x696d6167656e65732f322e6a666966, 'Disponible', 'ingenieria', 'Fisico', 'pdf/', ''),
(16, '005.133/F81a', 'DESARROLLO DE APLICACIONES ASP.NET', 'DARIO RAFAEL FRANCIA HUAMBACHANO', '2003-07-24', '', 1, '2005-05-12', 0x696d6167656e65732f332e6a7067, 'Disponible', 'programación', 'Fisico', 'pdf/', ''),
(17, '005.133/F81v', 'DESARROLLO DE APLICACIONES VISUAL C#.NET', 'DARIO RAFAEL FRANCIA HUAMBACHANO', '2003-03-12', 'MACRO E.I.R.L.', 0, '2005-02-12', 0x696d6167656e65732f342e6a666966, 'Prestado', 'programación', 'Fisico', 'pdf/', ''),
(18, '530,S42', 'TEXTO BASADO EN CALCULO', 'RAYMOND A. SERWAY, JOHN W. JEWETT, JR.', '2004-05-12', 'I.T.P. LATIN AMÉRICA', 2, '0000-00-00', 0x696d6167656e65732f312e6a666966, 'Disponible', 'matematica', 'PDF', 'pdf/Calculo-Varias-Variables.pdf', ''),
(19, '621.38195/F64', 'FUNDAMENTOS DE SISTEMAS DIGITALES', 'THOMAS L. FLOYD', '2000-02-10', 'PEARSON EDUCACIÓN, S', 2, '0000-00-00', 0x696d6167656e65732f322e6a7067, 'Disponible', 'fisica', 'PDF', 'pdf/codificador, decodificador, multiplexores, demultiplexor.pdf', ''),
(20, '147/G3', 'Algoritmos', 'Edison', '2021-11-02', 'bruño', 1, '2021-11-11', 0x696d6167656e65732f, 'Disponible', 'programación', 'PDF', 'pdf/', ''),
(31, '1258/3E', 'Algoritmos', 'PhD. Richar', '2022-07-01', 'Bruño', 1, '2022-08-01', 0x696d6167656e65732f, 'Disponible', 'ingenieria', 'Fisico', '../resources/pdf/', ''),
(38, '147/G32', 'ROBOTICA', 'NEIL WILKINS', '2022-03-11', 'Talent', 0, '2022-08-03', 0x2e2e2f7265736f75726365732f696d6167656e65732f526f626f746963612e6a7067, 'Prestado', 'Robotica', 'Fisico', '../resources/pdf/', ''),
(37, '147/G32', 'HTML 5', 'Dr. Edison', '2022-04-14', 'Ra-Ma', 1, '2022-08-01', 0x2e2e2f7265736f75726365732f696d6167656e65732f48544d4c2e6a7067, 'Disponible', 'Programación', 'Fisico', '../resources/pdf/', ''),
(33, '1258/3EF', 'PROGRAMACION WEB', 'Gallego Sanchez', '2022-07-02', 'Ra-Ma', 1, '2022-08-05', 0x696d6167656e65732f70726f6772616d6163696f6e2d7765622e706e67, 'Disponible', 'Programación', 'Fisico', '../resources/pdf/', ''),
(34, '1258/3EW', 'PROGRAMACION WEB 2', 'Gilmer Matos Vila', '2022-07-15', 'Ra-Ma', 1, '2022-07-14', 0x2e2e2f2e2e2f7265736f75726365732f696d6167656e65732f70726f6772616d6163696f6e2d7765622e706e67, 'Disponible', 'Programación', 'PDF', '../resources/pdf/', ''),
(36, '147/G7', 'PHP 2', 'Dr. Edison', '2022-07-08', 'Ra-Ma', 1, '2022-08-04', 0x2e2e2f7265736f75726365732f696d6167656e65732f5048502e6a7067, 'Disponible', 'Programación', 'PDF', '../resources/pdf/', ''),
(39, '', '', '', '0000-00-00', '', 1, '0000-00-00', 0x2e2e2f7265736f75726365732f696d6167656e65732f, 'Disponible', '', '', '../resources/pdf/', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` int(9) NOT NULL,
  `DNI` int(20) NOT NULL,
  `Correo_Institucional` varchar(21) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `repita_contraseña` varchar(20) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `telefono`, `DNI`, `Correo_Institucional`, `Password`, `repita_contraseña`, `tipo_usuario`) VALUES
('Yelina', 'Herrera Paucar', 982035466, 73978542, '2018141017@unh.edu.pe', '123', '123', 'ADMINISTRADOR'),
('Alexander', 'Briceño Carhuancho', 980976541, 77665544, '2018141002@unh.edu.pe', '123', '123', 'ESTUDIANTE'),
('Roberth', 'Huaman Campos', 984712365, 72714545, '2018141018@unh.edu.pe', '123', '123', 'ESTUDIANTE'),
('Dr. Edison', 'Ramos Ñahui', 987654321, 71321445, '2019141032@unh.edu.pe', '123', '123', 'ESTUDIANTE     '),
('edison', 'Ramos Ñahui', 987989898, 71234144, '2018141017@unh.edu.pe', '|12', '|12', 'ESTUDIANTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`codigo_boleta`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`n_control`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleta`
--
ALTER TABLE `boleta`
  MODIFY `codigo_boleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `n_control` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
