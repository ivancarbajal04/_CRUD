-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 13:35:12
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoriaID` int(11) NOT NULL,
  `tipo_producto` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoriaID`, `tipo_producto`, `marca`, `color`) VALUES
(1, 'Auriculares', 'Genius', 'Negro'),
(2, 'Auriculares Gamer', 'Razer', 'Negro'),
(3, 'Notebook Gamer', 'Asus', 'Negro'),
(4, 'Notebook', 'HP', 'Negro'),
(5, 'Notebook', 'Lenovo', 'Azul'),
(6, 'Gamepad', 'Redragon', 'Rojo'),
(7, 'Motherboard', 'MSI', '-'),
(8, 'Motherboard', 'GIGABYTE', '-'),
(9, 'Teclado gamer', 'Redragon', 'Multicolor'),
(10, 'Teclado Bluetooth', 'Logitech', 'Multicolor'),
(14, 'cgvnb', 'dfhg', 'dfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `clienteID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `domicilio` varchar(20) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`clienteID`, `nombre`, `apellido`, `domicilio`, `fecha_nacimiento`, `celular`, `email`) VALUES
(1, 'HECTOR', 'NEVARES', 'Velasco 342', '03-10-1974', '1143470589', 'HNEVARES@BNA.COM.AR'),
(2, 'MARIO', 'ZALDO', 'Juan B Justo 5243', '05-9-1947', '1143212230', 'ZALDOM@MARIVA.COM.AR'),
(3, 'HECTOR', 'CUNATI', 'Azcuenaga 87', '2-6-1953', '1153213748', 'HCUNATI@CLOSE-UP.COM'),
(4, 'MARIA INES', 'GONZALEZ', 'Olaya 1954', '2-7-1949', '1158267297', 'MARIA.GONZALEZ@FARMACITY.COM.AR '),
(5, 'ILDEBRANDO', 'SOUZA RIVEIRO', 'Av E Perón 4033', '27-5-1933', '1141322424', 'ILDEBRANDO.RIVEIRO@HSBC.COM.AR'),
(6, 'OSCAR', 'MAGLIO', 'Av J B Justo 3953', '10-11-1999', '1143189000', 'OSCAR.MAGLIO@SHERATON.COM'),
(7, 'XIMENA', 'VERGARA', 'Av Meeks 1269', '04-04-2001', '1148080520', 'XIMENA.VERGARA@PIONEERINVESTMENTS.COM'),
(8, 'JOSÉ MARÍA', 'SALAS', 'Manzanares 1135', '05-06-2000', '1143409800', 'JOSE.SALASCORREA@REFINOR.COM'),
(9, 'AGEDA', 'PERRIER', 'Lambaré 1074', '30-12-1973', '1143439001', 'JAIDUCIC@SGP.GOV.AR'),
(10, 'ANGEL MANUEL', 'MARTÍN', 'Deán Funes 964', '25-10-1989', '1142907362', 'A.MARTIN@ZUMARSRL.COM.AR'),
(11, 'LUIS', 'N.', 'Marmol Jose 28107', '21-3-1994', '1143744556', 'LAMPARAS@100000LAMPARAS.COM.AR'),
(12, 'ANDRES', 'PELLEGRINO', 'Uruguay 1292', '19-04-1978', '114659400', 'AAPELLEGRINO@MMM.COM'),
(13, 'FERNANDO', 'BOVE', 'Sarmiento 383', '27-8-1953', '1143483500', 'FBOVE@MMM.COM'),
(14, 'LILA', 'ORDOÑEZ', 'Bolivar 1300', '12-9-1979', '114659400', 'LMORDONEZ@MMM.COM'),
(15, 'SILVINA ', 'AMADEO PAZ', 'Del Libertador Avda ', '22-6-1987', '1146426067', 'MARKETING@CUATROMASD.COM'),
(16, 'SEBASTIAN ', 'SEIDENSTEIN', 'Belgrano 752', '05-03-1947', '1145673961', 'PRODUCCION2@CUATROMASD.COM'),
(17, 'ALFREDO', 'ALLAN', 'Blvd Juan Manuel De ', '05-03-1976', '11450290', 'AALLAN@GRUPOAONIKEN.COM.AR'),
(18, 'RAFAEL', 'BULLRICH', 'Avenida San Martin 4', '03-1-1956', '1158110595', 'RAFAEL.BULLRICH@5ASEC.COM.AR'),
(19, 'MARCELO', 'FLORES', 'Avenida Paseo Colon ', '10-10-1985', '114380192', 'CAPEMI@CAPEMI.COM.AR'),
(20, 'DAVID', 'TORANZO', 'Hernandarias 1948', '22-11-1993', '1143177400', 'DTORANZO@ASOCIART.COM.AR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productosID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(10) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productosID`, `nombre`, `categoria_id`, `precio`, `peso`, `descripcion`, `imagen`, `stock`) VALUES
(1, 'Auriculares Gamer', 1, 2699, '267 Gr', 'Auricular C/ Microfono Genius Gx Gaming Hs-g560 Gamer Pc', '-', 2000),
(2, 'Auriculares Gamer', 2, 25999, '312 Gr', 'AURICULAR GAMER RAZER NARI ESSENTIAL WIRELESS', '-', 200),
(3, 'Notebook Gamer ', 3, 188999, '1.26 Kg', 'NOTEBOOK GAMER ASUS UX433FLC I5 512GB OP 32GB 8G WIN 10', '-', 170),
(4, 'Notebook ', 4, 67499, '1.52 Kg', 'NOTEBOOK HP 14 245 G7 RYZEN 3 3250U 4GB 1T WINDOWS 10 HOME', '-', 300),
(5, 'Notebook ', 4, 76499, '1.78 Kg', 'NOTEBOOK HP 250 G7 153B7LT 15.6 CORE I3-1005G1 4GB 1TB', '-', 300),
(6, 'Notebook', 5, 79999, '1.78 Kg', 'NOTEBOOK LENOVO IDEAPAD S145 AMD A9 9425 8G 1TB 15.6 W10', '-', 100),
(7, 'Notebook', 5, 99749, '1.82 Kg', 'NOTEBOOK LENOVO S145 15.6 CORE I3 4GB 256GB WIN 10', '-', 250),
(8, 'Gamepad', 6, 2149, '310 Gr', 'GAMEPAD GAMER REDRAGON G807 SATURN – PC/PS3', '-', 350),
(9, 'Motherboard', 7, 21999, '-', 'MOTHER AM4 MSI X570-A PRO DDR4 USB 3.2 HDMI', '-', 1000),
(10, 'Motherboard', 8, 9499, '-', 'MOTHER GIGABYTE GA H310M DS2 2.0 DDR4 8VA GEN SOCKET 1151', '-', 500),
(11, 'Motherboard', 8, 7589, '-', 'MOTHER GIGABYTE H310M M.2 2.0 DDR4 9NA GEN SOCKET 1151', '-', 500),
(12, 'Motherboard', 8, 42999, '-', 'MOTHER GIGABYTE Z490 UD AC WIFI DDR4 INTEL 10TH GEN LGA 1200', '-', 500),
(13, 'Teclado', 9, 11999, '1.35 Kg', 'TECLADO GAMER REDRAGON K556 DEVARAJAS MECANICO RGB ESPAÑOL', '-', 1500),
(14, 'Teclado', 9, 7199, '1.35 Kg', 'TECLADO GAMER REDRAGON K550 YAMA NEGRO RGB ESPAÑOL MECANICO', '-', 1500),
(15, 'Teclado', 10, 4790, '-', 'TECLADO BLUETOOTH K480 MULTIDEVICE NEGRO', '-', 1500),
(35, 'prueba', 2, 3249, '324 gramos', 'prueba', '-', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioid` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `nacimiento` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioid`, `nombre`, `apellido`, `nacimiento`, `email`, `pass`) VALUES
(5, 'Ivan', 'Carbajal', '2000-06-05', 'ivanncarbajal@hotmail.com', 'holaquetal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ventasID` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ventasID`, `productos_id`, `cantidad`, `precio_total`) VALUES
(1, 12, 2, 85998),
(2, 8, 1, 2149),
(3, 6, 3, 239997),
(4, 5, 1, 76499),
(5, 10, 1, 9499),
(6, 15, 5, 23950),
(7, 14, 4, 28796),
(8, 7, 1, 99749),
(9, 1, 6, 16194),
(10, 13, 3, 35997),
(11, 4, 2, 134998),
(12, 3, 1, 188999),
(13, 11, 2, 15178),
(14, 2, 5, 129995);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoriaID`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clienteID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productosID`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioid`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ventasID`),
  ADD KEY `productos_id` (`productos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `clienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `productosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ventasID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoriaID`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`productosID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
