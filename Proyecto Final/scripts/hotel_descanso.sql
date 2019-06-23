-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-05-2018 a las 19:43:38
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_descanso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alimentacion`
--

CREATE TABLE `tbl_alimentacion` (
  `id_alimentacion` int(11) NOT NULL,
  `descripccion` varchar(200) DEFAULT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alimentacion`
--

INSERT INTO `tbl_alimentacion` (`id_alimentacion`, `descripccion`, `precio`) VALUES
(0, 'Desayuno', 5000),
(1, 'Almuerzo', 10000),
(2, 'Comida', 8000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `id_factura` int(11) NOT NULL,
  `tbl_reserva_id_reserva` int(11) NOT NULL,
  `tbl_pagos_id_pagos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_habitaciones`
--

CREATE TABLE `tbl_habitaciones` (
  `id_habitaciones` int(11) NOT NULL,
  `tipo_habitacion` varchar(45) DEFAULT NULL,
  `id_piso` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `reserba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_habitaciones`
--

INSERT INTO `tbl_habitaciones` (`id_habitaciones`, `tipo_habitacion`, `id_piso`, `costo`, `reserba`) VALUES
(101, 'mediana', 0, 40000, 0),
(102, 'pequeña', 0, 30000, 1),
(103, 'mediana', 0, 40000, 1),
(104, 'mediana', 0, 40000, 0),
(105, 'mediana', 0, 40000, 0),
(106, 'grande', 0, 60000, 0),
(107, 'pequeña', 0, 30000, 0),
(108, 'pequeña', 0, 30000, 0),
(109, 'pequeña', 0, 30000, 0),
(110, 'pequeña', 0, 30000, 0),
(201, 'mediana', 1, 40000, 0),
(202, 'mediana', 1, 40000, 0),
(203, 'mediana', 1, 40000, 0),
(204, 'mediana', 1, 40000, 0),
(205, 'mediana', 1, 40000, 0),
(206, 'mediana', 1, 40000, 0),
(207, 'grande', 1, 60000, 0),
(208, 'grande', 1, 60000, 0),
(209, 'grande', 1, 60000, 0),
(210, 'pequeña', 1, 30000, 0),
(301, 'grande', 2, 60000, 0),
(302, 'mediana', 2, 40000, 0),
(303, 'mediana', 2, 40000, 0),
(304, 'grande', 2, 60000, 0),
(305, 'grande', 2, 60000, 0),
(306, 'grande', 2, 0, 1),
(307, 'grande', 2, 0, 1),
(308, 'grande', 2, 0, 1),
(309, 'mediana', 2, 0, 0),
(310, 'mediana', 2, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id_hotel` int(11) NOT NULL,
  `direccion_hotel` varchar(45) DEFAULT NULL,
  `telefono_hotel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id_hotel`, `direccion_hotel`, `telefono_hotel`) VALUES
(1, 'CARRETERA EL BOSQUE – UBRIQUE, KM. 3', 689631897);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagos`
--

CREATE TABLE `tbl_pagos` (
  `id_pagos` int(11) NOT NULL,
  `forma_pago` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_pagos`
--

INSERT INTO `tbl_pagos` (`id_pagos`, `forma_pago`) VALUES
(12, 'tarjeta_credito'),
(13, 'PSE'),
(14, 'PAYPAL'),
(15, 'consignacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_piso`
--

CREATE TABLE `tbl_piso` (
  `id_piso` int(11) NOT NULL,
  `piso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_piso`
--

INSERT INTO `tbl_piso` (`id_piso`, `piso`) VALUES
(0, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `tbl_usuario_id_usuario` int(11) NOT NULL,
  `tbl_habitaciones_id_habitaciones` int(11) NOT NULL,
  `tbl_alimentacion_id_alimentacion` int(11) NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_final` datetime DEFAULT NULL,
  `id_pagos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `tbl_usuario_id_usuario`, `tbl_habitaciones_id_habitaciones`, `tbl_alimentacion_id_alimentacion`, `fecha_inicio`, `fecha_final`, `id_pagos`) VALUES
(3, 1013645062, 103, 0, '2018-05-22 00:00:00', '2018-05-25 00:00:00', 14),
(20, 1013645062, 102, 1, '2018-05-30 00:00:00', '2018-06-01 00:00:00', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `tbl_hotel_id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nombre`, `apellido`, `correo_electronico`, `contraseña`, `tbl_hotel_id_hotel`) VALUES
(1013645062, 'andres', 'zambrano', 'azambr12@uniminuto.edu.co', 'uniminuto', 1),
(1015645879, 'armando', 'mesas', 'amesas@unimnuto.edu.co', 'lasmesas', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alimentacion`
--
ALTER TABLE `tbl_alimentacion`
  ADD PRIMARY KEY (`id_alimentacion`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `fk_tbl_factura_tbl_reserva1_idx` (`tbl_reserva_id_reserva`),
  ADD KEY `fk_tbl_factura_tbl_pagos1_idx` (`tbl_pagos_id_pagos`);

--
-- Indices de la tabla `tbl_habitaciones`
--
ALTER TABLE `tbl_habitaciones`
  ADD PRIMARY KEY (`id_habitaciones`),
  ADD KEY `id_piso` (`id_piso`);

--
-- Indices de la tabla `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indices de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD PRIMARY KEY (`id_pagos`);

--
-- Indices de la tabla `tbl_piso`
--
ALTER TABLE `tbl_piso`
  ADD PRIMARY KEY (`id_piso`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_tbl_reserva_tbl_usuario1_idx` (`tbl_usuario_id_usuario`),
  ADD KEY `fk_tbl_reserva_tbl_habitaciones1_idx` (`tbl_habitaciones_id_habitaciones`),
  ADD KEY `fk_tbl_reserva_tbl_alimentacion1_idx` (`tbl_alimentacion_id_alimentacion`),
  ADD KEY `id_pagos` (`id_pagos`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_tbl_usuario_tbl_hotel1_idx` (`tbl_hotel_id_hotel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  MODIFY `id_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD CONSTRAINT `tbl_factura_ibfk_1` FOREIGN KEY (`tbl_reserva_id_reserva`) REFERENCES `tbl_reserva` (`id_reserva`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_factura_ibfk_2` FOREIGN KEY (`tbl_pagos_id_pagos`) REFERENCES `tbl_pagos` (`id_pagos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_habitaciones`
--
ALTER TABLE `tbl_habitaciones`
  ADD CONSTRAINT `tbl_habitaciones_ibfk_1` FOREIGN KEY (`id_piso`) REFERENCES `tbl_piso` (`id_piso`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `tbl_reserva_ibfk_1` FOREIGN KEY (`tbl_habitaciones_id_habitaciones`) REFERENCES `tbl_habitaciones` (`id_habitaciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reserva_ibfk_2` FOREIGN KEY (`tbl_usuario_id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reserva_ibfk_3` FOREIGN KEY (`tbl_alimentacion_id_alimentacion`) REFERENCES `tbl_alimentacion` (`id_alimentacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reserva_ibfk_4` FOREIGN KEY (`id_pagos`) REFERENCES `tbl_pagos` (`id_pagos`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
