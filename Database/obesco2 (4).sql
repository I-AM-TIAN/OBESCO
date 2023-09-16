-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3312
-- Tiempo de generación: 03-09-2023 a las 00:00:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `obesco2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

CREATE TABLE `barrio` (
  `id_barrio` int(11) NOT NULL,
  `Barrio` varchar(25) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`id_barrio`, `Barrio`, `id_municipio`) VALUES
(1, 'EL DORADO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `Departamento` varchar(25) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `Departamento`, `id_pais`) VALUES
(1, 'Huila', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `Municipio` varchar(25) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `Municipio`, `id_departamento`) VALUES
(1, 'La Plata', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE `organizaciones` (
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_tipoorg` int(11) NOT NULL,
  `redes_sociales` varchar(255) NOT NULL,
  `pagina_web` varchar(255) NOT NULL,
  `Año_fundacion` int(11) NOT NULL,
  `logo` blob DEFAULT NULL,
  `id_sectoreco` int(11) NOT NULL,
  `id_situaciongeo` int(11) NOT NULL,
  `idubi_geo` int(11) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `total_empleados` int(11) DEFAULT NULL,
  `empleados_2955` int(11) DEFAULT NULL,
  `empleados_56` int(11) DEFAULT NULL,
  `empleados_1828` int(11) NOT NULL,
  `empleados_1sm` int(11) DEFAULT NULL,
  `empleados_12s` int(11) DEFAULT NULL,
  `empleados_23s` int(11) DEFAULT NULL,
  `empleados_4sm` int(11) DEFAULT NULL,
  `empleados_arl` int(11) DEFAULT NULL,
  `empleados_pen` int(11) DEFAULT NULL,
  `empleados_sal` int(11) DEFAULT NULL,
  `empleados_rur` int(11) DEFAULT NULL,
  `empleados_urb` int(11) DEFAULT NULL,
  `empleados_dis` int(11) DEFAULT NULL,
  `empleados_mas` int(11) DEFAULT NULL,
  `empleados_mdiv` int(11) DEFAULT NULL,
  `empleados_fem` int(11) DEFAULT NULL,
  `empleados_fdiv` int(11) DEFAULT NULL,
  `total_asociados` int(11) DEFAULT NULL,
  `asociados_1sm` int(11) DEFAULT NULL,
  `asociados_dis` int(11) DEFAULT NULL,
  `asociados_56` int(11) DEFAULT NULL,
  `asociados_1828` int(11) DEFAULT NULL,
  `asociados_2955` int(11) DEFAULT NULL,
  `asociados_es1` int(11) DEFAULT NULL,
  `asociados_es2` int(11) DEFAULT NULL,
  `asociados_es3` int(11) DEFAULT NULL,
  `asociados_es4` int(11) DEFAULT NULL,
  `asociados_es5` int(11) DEFAULT NULL,
  `asociados_rur` int(11) DEFAULT NULL,
  `asociados_urb` int(11) DEFAULT NULL,
  `asociados_mas` int(11) DEFAULT NULL,
  `aso_pom` int(11) DEFAULT NULL,
  `aso_adm` int(11) DEFAULT NULL,
  `aso_vig` int(11) DEFAULT NULL,
  `aso_otc` int(11) DEFAULT NULL,
  `aso_div` int(11) DEFAULT NULL,
  `asociados_fem` int(11) DEFAULT NULL,
  `asa_pmd` int(11) DEFAULT NULL,
  `asa_adm` int(11) DEFAULT NULL,
  `asa_jvi` int(11) DEFAULT NULL,
  `asa_ocm` int(11) DEFAULT NULL,
  `asa_div` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`id_organizacion`, `nombre`, `id_tipoorg`, `redes_sociales`, `pagina_web`, `Año_fundacion`, `logo`, `id_sectoreco`, `id_situaciongeo`, `idubi_geo`, `Descripcion`, `total_empleados`, `empleados_2955`, `empleados_56`, `empleados_1828`, `empleados_1sm`, `empleados_12s`, `empleados_23s`, `empleados_4sm`, `empleados_arl`, `empleados_pen`, `empleados_sal`, `empleados_rur`, `empleados_urb`, `empleados_dis`, `empleados_mas`, `empleados_mdiv`, `empleados_fem`, `empleados_fdiv`, `total_asociados`, `asociados_1sm`, `asociados_dis`, `asociados_56`, `asociados_1828`, `asociados_2955`, `asociados_es1`, `asociados_es2`, `asociados_es3`, `asociados_es4`, `asociados_es5`, `asociados_rur`, `asociados_urb`, `asociados_mas`, `aso_pom`, `aso_adm`, `aso_vig`, `aso_otc`, `aso_div`, `asociados_fem`, `asa_pmd`, `asa_adm`, `asa_jvi`, `asa_ocm`, `asa_div`, `id_usuario`) VALUES
(1, 'UCC', 3, 'https://www.instagram.com/sebastian.alvarezla/?hl=es', 'https://www.transdigitalcoop.com/index.html', 2005, NULL, 3, 2, 3, 'SADASD', 184, 8, 8, 0, 8, 8, 88, 8, 8, 8, 8, 8, 8, 88, 88, NULL, 88, NULL, 27, 9, 9, 9, 99, 9, 9, 9, 9, 99, 9, 9, 9, 9, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `Pais` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `Pais`) VALUES
(1, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector_economico`
--

CREATE TABLE `sector_economico` (
  `idsec_eco` int(11) NOT NULL,
  `Sector` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sector_economico`
--

INSERT INTO `sector_economico` (`idsec_eco`, `Sector`) VALUES
(1, 'Agricultura'),
(2, 'Sistema financiero'),
(3, 'Servicios de comunicaciones'),
(4, 'Almacenamiento y transporte'),
(5, 'Comercio y restaurantes'),
(6, 'Minas y canteras'),
(7, 'Agua y energía'),
(8, 'Construcción'),
(9, 'Manufacturas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_geografica`
--

CREATE TABLE `situacion_geografica` (
  `idsit_geogra` int(11) NOT NULL,
  `Situacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `situacion_geografica`
--

INSERT INTO `situacion_geografica` (`idsit_geogra`, `Situacion`) VALUES
(1, 'Rural'),
(2, 'Urbana'),
(3, 'Urbana-Rural'),
(4, 'Centro poblado'),
(5, 'Rural disperso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_organizacion`
--

CREATE TABLE `tipo_organizacion` (
  `id_tipoorg` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_organizacion`
--

INSERT INTO `tipo_organizacion` (`id_tipoorg`, `tipo`) VALUES
(1, 'Cooperativa'),
(2, 'Pre-coperativa'),
(3, 'Fondo de empleados'),
(4, 'Asociación mutual'),
(5, 'Cooperativa de trabajo asociado'),
(6, 'Cooperativa multiactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(11) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_barrio` int(11) NOT NULL,
  `Detalle` varchar(50) NOT NULL,
  `id_organizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `id_pais`, `id_departamento`, `id_municipio`, `id_barrio`, `Detalle`, `id_organizacion`) VALUES
(1, 1, 1, 1, 1, 'CLL 28 #11W-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_geografica`
--

CREATE TABLE `ubicacion_geografica` (
  `idubi_geo` int(11) NOT NULL,
  `Ubicacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ubicacion_geografica`
--

INSERT INTO `ubicacion_geografica` (`idubi_geo`, `Ubicacion`) VALUES
(1, 'Barrial - Comunitaria'),
(2, 'Comuna o localidad'),
(3, 'Municipal'),
(4, 'Departamental'),
(5, 'Regional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `user_name`, `email`, `password`, `Apellido`, `Nombre`) VALUES
(1, 'sebas', 'slambertinez@gmail.com', '2812', 'Alvarez', 'Sebastian'),
(2, 'sebastian', 'sebastian.alvarezla@campu', '0000', 'Alvarez', 'Sebastian'),
(3, 'Marcos1', 'cabacca@gmail.com', '9090', 'Perez', 'Marcos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`id_barrio`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  ADD PRIMARY KEY (`id_organizacion`),
  ADD KEY `idtipo_org` (`id_tipoorg`),
  ADD KEY `organization_sector` (`id_sectoreco`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_situaciongeo` (`id_situaciongeo`),
  ADD KEY `idubi_geo` (`idubi_geo`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `sector_economico`
--
ALTER TABLE `sector_economico`
  ADD PRIMARY KEY (`idsec_eco`);

--
-- Indices de la tabla `situacion_geografica`
--
ALTER TABLE `situacion_geografica`
  ADD PRIMARY KEY (`idsit_geogra`);

--
-- Indices de la tabla `tipo_organizacion`
--
ALTER TABLE `tipo_organizacion`
  ADD PRIMARY KEY (`id_tipoorg`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `id_organizacion` (`id_organizacion`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `ubicacion_geografica`
--
ALTER TABLE `ubicacion_geografica`
  ADD PRIMARY KEY (`idubi_geo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `id_barrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  MODIFY `id_organizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sector_economico`
--
ALTER TABLE `sector_economico`
  MODIFY `idsec_eco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `situacion_geografica`
--
ALTER TABLE `situacion_geografica`
  MODIFY `idsit_geogra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_organizacion`
--
ALTER TABLE `tipo_organizacion`
  MODIFY `id_tipoorg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ubicacion_geografica`
--
ALTER TABLE `ubicacion_geografica`
  MODIFY `idubi_geo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD CONSTRAINT `barrio_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  ADD CONSTRAINT `organizaciones_ibfk_1` FOREIGN KEY (`id_tipoorg`) REFERENCES `tipo_organizacion` (`id_tipoorg`),
  ADD CONSTRAINT `organizaciones_ibfk_2` FOREIGN KEY (`id_sectoreco`) REFERENCES `sector_economico` (`idsec_eco`),
  ADD CONSTRAINT `organizaciones_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `organizaciones_ibfk_4` FOREIGN KEY (`id_situaciongeo`) REFERENCES `situacion_geografica` (`idsit_geogra`),
  ADD CONSTRAINT `organizaciones_ibfk_5` FOREIGN KEY (`idubi_geo`) REFERENCES `ubicacion_geografica` (`idubi_geo`);

--
-- Filtros para la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD CONSTRAINT `ubicacion_ibfk_1` FOREIGN KEY (`id_organizacion`) REFERENCES `organizaciones` (`id_organizacion`),
  ADD CONSTRAINT `ubicacion_ibfk_2` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  ADD CONSTRAINT `ubicacion_ibfk_3` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`),
  ADD CONSTRAINT `ubicacion_ibfk_4` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
