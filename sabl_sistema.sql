-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2025 a las 00:45:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabl.sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `Id_asignacion` int(11) NOT NULL,
  `Id_Prof` int(11) NOT NULL,
  `Id_Mat` int(11) NOT NULL,
  `Id_Nivel_estud` int(11) NOT NULL,
  `Id_Seccion` int(11) NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletines`
--

CREATE TABLE `boletines` (
  `Id_Boletin` int(11) NOT NULL,
  `Id_Momento` int(11) NOT NULL,
  `Id_Est` int(11) NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `Id_Calif` int(11) NOT NULL,
  `Calif_obtenid` varchar(50) NOT NULL,
  `Fec_Registro` varchar(100) NOT NULL,
  `Id_Mat` int(11) NOT NULL,
  `Id_Boletin` int(11) NOT NULL,
  `Id_Periodo` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_socioeconómico`
--

CREATE TABLE `datos_socioeconómico` (
  `Id_Dat_socio` int(11) NOT NULL,
  `Tipo_de_Vivienta` varchar(50) NOT NULL,
  `Condición_de_la_Vivienda` varchar(50) NOT NULL,
  `Condición_de_la_Infraestructura` varchar(50) NOT NULL,
  `Posee_Beca` varchar(10) NOT NULL,
  `Tipo_de_Beca` varchar(10) NOT NULL,
  `Posee_Canaima` varchar(10) NOT NULL,
  `Id_Est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Id_Est` int(11) NOT NULL,
  `Ced_Est` varchar(15) NOT NULL,
  `Apell_Est` varchar(50) NOT NULL,
  `Nom_Est` varchar(50) NOT NULL,
  `Fec_Nac` date NOT NULL,
  `Luga_Nac` varchar(50) NOT NULL,
  `Nacionalidad` varchar(50) NOT NULL,
  `Dir_Exac` varchar(50) NOT NULL,
  `Id_Repres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`Id_Est`, `Ced_Est`, `Apell_Est`, `Nom_Est`, `Fec_Nac`, `Luga_Nac`, `Nacionalidad`, `Dir_Exac`, `Id_Repres`) VALUES
(21, '45678432', 'mendozas', 'Jhon', '2005-12-11', 'maracay/aragua', 'venezolano', 'zona nueva', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripción`
--

CREATE TABLE `inscripción` (
  `Id_Inscrip` int(11) NOT NULL,
  `Codigo_Inscrip` varchar(20) NOT NULL,
  `Fec_Inscrip` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Id_Est` int(11) NOT NULL,
  `Id_Seccion` int(11) NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Id_Mat` int(11) NOT NULL,
  `Codigo_Mat` varchar(20) NOT NULL,
  `Nom_Mat` varchar(50) NOT NULL,
  `Descripción` varchar(50) NOT NULL,
  `Estado_Mat` varchar(50) NOT NULL,
  `Fec_Registro` date NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momento`
--

CREATE TABLE `momento` (
  `Id_Momento` int(11) NOT NULL,
  `Mes_inicio` int(11) NOT NULL,
  `Dia_inicio` int(11) NOT NULL,
  `Numero_Momento` int(11) NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudio`
--

CREATE TABLE `nivel_estudio` (
  `Id_Nivel_estud` int(11) NOT NULL,
  `Nom_Nivel_estd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `Id_Periodo` int(11) NOT NULL,
  `Nom_Periodo` varchar(50) NOT NULL,
  `Fec_Inicio` varchar(50) NOT NULL,
  `Fec_fin` varchar(50) NOT NULL,
  `Número_semanas` varchar(50) NOT NULL,
  `Estad_Periodo` varchar(50) NOT NULL,
  `Fec_Creación` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Id_Prof` int(11) NOT NULL,
  `Ced_Prof` varchar(50) NOT NULL,
  `Nom_Prof` varchar(50) NOT NULL,
  `Apell_Prof` varchar(50) NOT NULL,
  `Fec_Nac` date NOT NULL,
  `Codigo_Carg_Prof` varchar(50) NOT NULL,
  `Codigo_Domina` varchar(50) NOT NULL,
  `Fec_Incres_T_Minis` date NOT NULL,
  `Email_Prof` varchar(50) NOT NULL,
  `Telf_Prof` bigint(50) NOT NULL,
  `Fec_Registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Id_Prof`, `Ced_Prof`, `Nom_Prof`, `Apell_Prof`, `Fec_Nac`, `Codigo_Carg_Prof`, `Codigo_Domina`, `Fec_Incres_T_Minis`, `Email_Prof`, `Telf_Prof`, `Fec_Registro`) VALUES
(1, '30680625', 'carolina', 'bueno', '1978-02-02', '23456782', 'matematica', '2016-11-01', 'email', 424, '2024-11-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `Id_Repres` int(11) NOT NULL,
  `Ced_Repres` varchar(50) NOT NULL,
  `Apell_Repres` varchar(50) NOT NULL,
  `Nom_Repres` varchar(50) NOT NULL,
  `Fec_Nac` date NOT NULL,
  `Luga_Nac` varchar(50) NOT NULL,
  `Nacionalidad` varchar(50) NOT NULL,
  `Dir_Exac` varchar(50) NOT NULL,
  `Afin_con_Est` varchar(50) NOT NULL,
  `Email_Repres` varchar(50) NOT NULL,
  `Telf_Repres` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`Id_Repres`, `Ced_Repres`, `Apell_Repres`, `Nom_Repres`, `Fec_Nac`, `Luga_Nac`, `Nacionalidad`, `Dir_Exac`, `Afin_con_Est`, `Email_Repres`, `Telf_Repres`) VALUES
(1, '83', 'Bueno', 'Cecilia', '1978-02-02', 'colombia', 'colombiana', 'La chinca', 'madre', 'email', 4247),
(2, '30', 'Bueno', 'Cecilia', '0000-00-00', 'venezolana', 'colombiana', 'La chinca', 'madre', 'email', 42472);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sección`
--

CREATE TABLE `sección` (
  `Id_Seccion` int(11) NOT NULL,
  `Nom_Seccion` varchar(50) NOT NULL,
  `Estad_Seccion` varchar(50) NOT NULL,
  `Fec_Creacion` date NOT NULL,
  `Id_Nivel_estud` int(11) NOT NULL,
  `Numero_matriculas` varchar(50) NOT NULL,
  `Id_Periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id` int(11) NOT NULL,
  `Cedula` varchar(30) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Usuario` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Privilegio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`id`, `Cedula`, `Nombres`, `Apellidos`, `Usuario`, `password`, `Privilegio`) VALUES
(1, '30680625', 'Chiqui', 'Pico', 'chiki', 'chiki12345', 'A'),
(2, '30680623', 'carelis', 'vargas', 'carelis', 'carelis1234', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`Id_asignacion`),
  ADD KEY `Id_Prof` (`Id_Prof`),
  ADD KEY `Id_Mat` (`Id_Mat`),
  ADD KEY `Id_Seccion` (`Id_Seccion`),
  ADD KEY `Id_Periodo` (`Id_Periodo`),
  ADD KEY `Id_Nivel_estud` (`Id_Nivel_estud`);

--
-- Indices de la tabla `boletines`
--
ALTER TABLE `boletines`
  ADD PRIMARY KEY (`Id_Boletin`),
  ADD KEY `Id_Momento` (`Id_Momento`),
  ADD KEY `Id_Est` (`Id_Est`),
  ADD KEY `Id_Periodo` (`Id_Periodo`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`Id_Calif`),
  ADD KEY `Id_Mat` (`Id_Mat`),
  ADD KEY `Id_Boletin` (`Id_Boletin`),
  ADD KEY `Id_Periodo` (`Id_Periodo`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `datos_socioeconómico`
--
ALTER TABLE `datos_socioeconómico`
  ADD PRIMARY KEY (`Id_Dat_socio`),
  ADD KEY `Id_Est` (`Id_Est`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Id_Est`),
  ADD KEY `Id_Repres` (`Id_Repres`);

--
-- Indices de la tabla `inscripción`
--
ALTER TABLE `inscripción`
  ADD PRIMARY KEY (`Id_Inscrip`),
  ADD KEY `Id_Est` (`Id_Est`),
  ADD KEY `Id_Seccion` (`Id_Seccion`),
  ADD KEY `Id_Periodo` (`Id_Periodo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`Id_Mat`),
  ADD KEY `Id_Periodo` (`Id_Periodo`);

--
-- Indices de la tabla `momento`
--
ALTER TABLE `momento`
  ADD PRIMARY KEY (`Id_Momento`),
  ADD KEY `Id_Periodo` (`Id_Periodo`);

--
-- Indices de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
  ADD PRIMARY KEY (`Id_Nivel_estud`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`Id_Periodo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Id_Prof`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`Id_Repres`);

--
-- Indices de la tabla `sección`
--
ALTER TABLE `sección`
  ADD PRIMARY KEY (`Id_Seccion`),
  ADD KEY `Id_Nivel_estud` (`Id_Nivel_estud`),
  ADD KEY `Id_Periodo` (`Id_Periodo`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `Id_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `boletines`
--
ALTER TABLE `boletines`
  MODIFY `Id_Boletin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `Id_Calif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_socioeconómico`
--
ALTER TABLE `datos_socioeconómico`
  MODIFY `Id_Dat_socio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `Id_Est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `inscripción`
--
ALTER TABLE `inscripción`
  MODIFY `Id_Inscrip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `Id_Mat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `momento`
--
ALTER TABLE `momento`
  MODIFY `Id_Momento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
  MODIFY `Id_Nivel_estud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `Id_Periodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `Id_Prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `Id_Repres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sección`
--
ALTER TABLE `sección`
  MODIFY `Id_Seccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `asignacion_ibfk_1` FOREIGN KEY (`Id_Prof`) REFERENCES `profesor` (`Id_Prof`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_2` FOREIGN KEY (`Id_Mat`) REFERENCES `materias` (`Id_Mat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_3` FOREIGN KEY (`Id_Nivel_estud`) REFERENCES `nivel_estudio` (`Id_Nivel_estud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_4` FOREIGN KEY (`Id_Seccion`) REFERENCES `sección` (`Id_Seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignacion_ibfk_5` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `boletines`
--
ALTER TABLE `boletines`
  ADD CONSTRAINT `boletines_ibfk_1` FOREIGN KEY (`Id_Momento`) REFERENCES `momento` (`Id_Momento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boletines_ibfk_2` FOREIGN KEY (`Id_Est`) REFERENCES `estudiante` (`Id_Est`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boletines_ibfk_3` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`Id_Mat`) REFERENCES `materias` (`Id_Mat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`Id_Boletin`) REFERENCES `boletines` (`Id_Boletin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_socioeconómico`
--
ALTER TABLE `datos_socioeconómico`
  ADD CONSTRAINT `datos_socioeconómico_ibfk_1` FOREIGN KEY (`Id_Est`) REFERENCES `estudiante` (`Id_Est`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`Id_Repres`) REFERENCES `representante` (`Id_Repres`);

--
-- Filtros para la tabla `inscripción`
--
ALTER TABLE `inscripción`
  ADD CONSTRAINT `inscripción_ibfk_1` FOREIGN KEY (`Id_Est`) REFERENCES `estudiante` (`Id_Est`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripción_ibfk_2` FOREIGN KEY (`Id_Seccion`) REFERENCES `sección` (`Id_Seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripción_ibfk_3` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `momento`
--
ALTER TABLE `momento`
  ADD CONSTRAINT `momento_ibfk_1` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sección`
--
ALTER TABLE `sección`
  ADD CONSTRAINT `sección_ibfk_1` FOREIGN KEY (`Id_Nivel_estud`) REFERENCES `nivel_estudio` (`Id_Nivel_estud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sección_ibfk_2` FOREIGN KEY (`Id_Periodo`) REFERENCES `periodo` (`Id_Periodo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
