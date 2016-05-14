-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2016 a las 21:07:55
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portal_buga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_categoria`
--

CREATE TABLE `bdp_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cat_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `est_id` int(11) NOT NULL,
  `cat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_updated_at` timestamp NULL DEFAULT NULL,
  `cat_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_categoria`
--

INSERT INTO `bdp_categoria` (`cat_id`, `cat_nombre`, `cat_descripcion`, `est_id`, `cat_created_at`, `cat_updated_at`, `cat_deleted_at`) VALUES
(1, 'Cultura y Tradición', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:29:38', NULL, NULL),
(2, 'Deportes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:30:40', NULL, NULL),
(3, 'Ecoturístico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:31:10', NULL, NULL),
(4, 'Religioso', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:31:46', NULL, NULL),
(5, 'Histórico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:32:38', NULL, NULL),
(6, 'Entretenimiento', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-05-14 16:33:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_dato_usuario`
--

CREATE TABLE `bdp_dato_usuario` (
  `dus_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `dus_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dus_correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dus_genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `dus_fecha_nacimiento` date NOT NULL,
  `dus_facebook` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dus_twitter` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dus_google_plus` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dus_avatar` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dus_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dus_updated_at` timestamp NULL DEFAULT NULL,
  `dus_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_dato_usuario`
--

INSERT INTO `bdp_dato_usuario` (`dus_id`, `usu_id`, `dus_nombre`, `dus_apellidos`, `dus_correo`, `dus_genero`, `dus_fecha_nacimiento`, `dus_facebook`, `dus_twitter`, `dus_google_plus`, `dus_avatar`, `dus_created_at`, `dus_updated_at`, `dus_deleted_at`) VALUES
(1, 1, 'Miguel', 'Ramírez', 'migue.r0812@gmail.com', 'M', '1992-12-08', NULL, NULL, NULL, '', '2016-05-10 00:47:03', NULL, NULL),
(2, 2, 'Lizeth', 'Giraldo', 'lizethg@gmail.com', 'F', '1993-02-15', NULL, NULL, NULL, NULL, '2016-05-14 17:06:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_estado`
--

CREATE TABLE `bdp_estado` (
  `est_id` int(11) NOT NULL,
  `est_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_estado`
--

INSERT INTO `bdp_estado` (`est_id`, `est_nombre`, `est_created_at`, `est_updated_at`) VALUES
(0, 'Inhabilitado', '2016-04-13 01:21:44', NULL),
(1, 'Habilitado', '2016-04-13 01:21:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_evento`
--

CREATE TABLE `bdp_evento` (
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `eve_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `eve_fecha_hora` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `eve_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_nombre_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_correo_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_telefono_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_valor_boleta` int(11) NOT NULL,
  `eve_latitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_longitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eve_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio_publicacion` date DEFAULT NULL,
  `fecha_fin_publicacion` date DEFAULT NULL,
  `est_id` int(11) NOT NULL,
  `eve_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `eve_updated_at` timestamp NULL DEFAULT NULL,
  `eve_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_imagen`
--

CREATE TABLE `bdp_imagen` (
  `img_id` int(11) NOT NULL,
  `eve_id` int(11) DEFAULT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `img_ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_imagen`
--

INSERT INTO `bdp_imagen` (`img_id`, `eve_id`, `sit_id`, `cat_id`, `subcat_id`, `img_ruta`, `img_created_at`) VALUES
(1, NULL, NULL, 1, NULL, 'img/fondo1_1.jpg', '2016-05-14 16:44:16'),
(2, NULL, NULL, 2, NULL, 'img/Deportes_1.jpg', '2016-05-14 16:44:39'),
(3, NULL, NULL, 3, NULL, 'img/natural_1.jpg', '2016-05-14 16:45:05'),
(4, NULL, NULL, 4, NULL, 'img/iglesias_1.jpg', '2016-05-14 16:45:28'),
(5, NULL, NULL, 5, NULL, 'img/historico_1.jpg', '2016-05-14 16:45:51'),
(6, NULL, NULL, 6, NULL, 'img/piscinas_1.jpg', '2016-05-14 16:46:10'),
(7, NULL, NULL, NULL, 1, 'img/BMX.jpg', '2016-05-14 16:47:41'),
(8, NULL, NULL, NULL, 2, 'img/futbol.jpg', '2016-05-14 16:48:01'),
(9, NULL, NULL, NULL, 3, 'img/patinaje.jpg', '2016-05-14 16:48:20'),
(10, NULL, 1, NULL, NULL, 'img/Estadio.jpg', '2016-05-14 16:58:38'),
(11, NULL, 2, NULL, NULL, 'img/imder.jpg', '2016-05-14 16:59:02'),
(12, NULL, 3, NULL, NULL, 'img/La bombonera.jpg', '2016-05-14 16:59:51'),
(13, NULL, NULL, NULL, 4, 'img/historico_1.jpg', '2016-05-14 18:30:33'),
(14, NULL, NULL, NULL, 5, 'img/iglesias_1.jpg', '2016-05-14 18:30:57'),
(15, NULL, 4, NULL, NULL, 'img/Ferro.jpg', '2016-05-14 18:36:22'),
(16, NULL, 5, NULL, NULL, 'img/Basilica.jpg', '2016-05-14 18:37:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_itinerario`
--

CREATE TABLE `bdp_itinerario` (
  `iti_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `eve_id` int(11) DEFAULT NULL,
  `iti_posicion` int(11) DEFAULT NULL,
  `iti_visitado` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `iti_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iti_updated_at` timestamp NULL DEFAULT NULL,
  `iti_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_rating`
--

CREATE TABLE `bdp_rating` (
  `rat_id` int(11) NOT NULL,
  `sit_id` int(11) NOT NULL,
  `rat_rating` double NOT NULL,
  `rat_ip` int(15) NOT NULL,
  `rat_cant_votos` int(11) NOT NULL,
  `rat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_rol`
--

CREATE TABLE `bdp_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rol_updated_at` timestamp NULL DEFAULT NULL,
  `rol_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_rol`
--

INSERT INTO `bdp_rol` (`rol_id`, `rol_rol`, `rol_created_at`, `rol_updated_at`, `rol_deleted_at`) VALUES
(1, 'Administrador', '2016-03-09 21:25:03', NULL, NULL),
(2, 'Usuario', '2016-03-09 21:25:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_sitio`
--

CREATE TABLE `bdp_sitio` (
  `sit_id` int(11) NOT NULL,
  `sit_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `sit_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sit_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sit_telefono` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `sit_latitud` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `sit_longitud` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `est_id` int(11) NOT NULL,
  `sit_facebook` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sit_twitter` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sit_google_plus` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sit_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sit_updated_at` timestamp NULL DEFAULT NULL,
  `sit_deleted_at` timestamp NULL DEFAULT NULL,
  `usu_id` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_sitio`
--

INSERT INTO `bdp_sitio` (`sit_id`, `sit_nombre`, `sit_descripcion`, `cat_id`, `sit_direccion`, `sit_telefono`, `sit_latitud`, `sit_longitud`, `est_id`, `sit_facebook`, `sit_twitter`, `sit_google_plus`, `sit_created_at`, `sit_updated_at`, `sit_deleted_at`, `usu_id`, `subcat_id`) VALUES
(1, 'Estadio', 'La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se beneficien del deporte y contribuyan al desarrollo social de la ciudad.', 2, 'Carrera 12, Calle 3 sur', '2275566', '11111111', '11111111', 1, NULL, NULL, NULL, '2016-05-14 16:52:44', NULL, NULL, 1, 2),
(2, 'Imder', 'La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se beneficien del deporte y contribuyan al desarrollo social de la ciudad.', 2, 'Carrera 12, Calle 4 sur', '2378899', '12121212', '12121212', 1, NULL, NULL, NULL, '2016-05-14 16:54:50', NULL, NULL, 1, 2),
(3, 'La Bombonera', 'La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se beneficien del deporte y contribuyan al desarrollo social de la ciudad.', 2, 'Carrera 1, Calle 16', '2373322', '32323232', '32323232', 1, NULL, NULL, NULL, '2016-05-14 16:56:54', NULL, NULL, 1, 2),
(4, 'Estación Ferrea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 'Carrera 18 con calle 8', '2361100', '1010101010', '1010101010', 1, NULL, NULL, NULL, '2016-05-14 18:34:03', NULL, NULL, 1, 4),
(5, 'La Basílica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4, 'Carrera 14 con Calle 4', '2279999', '151515151', '151515151', 1, NULL, NULL, NULL, '2016-05-14 18:35:28', NULL, NULL, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_subcategoria`
--

CREATE TABLE `bdp_subcategoria` (
  `subcat_id` int(11) NOT NULL,
  `subcat_nombre` varchar(80) NOT NULL,
  `subcat_descripcion` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `subcat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subcat_updated_at` timestamp NULL DEFAULT NULL,
  `subcat_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bdp_subcategoria`
--

INSERT INTO `bdp_subcategoria` (`subcat_id`, `subcat_nombre`, `subcat_descripcion`, `cat_id`, `est_id`, `subcat_created_at`, `subcat_updated_at`, `subcat_deleted_at`) VALUES
(1, 'BMX', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 1, '2016-05-14 16:40:27', NULL, NULL),
(2, 'Fútbol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 1, '2016-05-14 16:41:02', NULL, NULL),
(3, 'Patinaje', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 1, '2016-05-14 16:41:36', NULL, NULL),
(4, 'Lugares', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5, 1, '2016-05-14 18:27:14', NULL, NULL),
(5, 'Iglesias', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4, 1, '2016-05-14 18:27:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_usuario`
--

CREATE TABLE `bdp_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `usu_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_updated_at` timestamp NULL DEFAULT NULL,
  `usu_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_usuario`
--

INSERT INTO `bdp_usuario` (`usu_id`, `usu_usuario`, `usu_password`, `rol_id`, `est_id`, `usu_created_at`, `usu_updated_at`, `usu_deleted_at`) VALUES
(1, 'admin', 'admin123', 1, 1, '2016-05-09 17:04:56', NULL, NULL),
(2, 'liz', '123', 2, 1, '2016-05-14 17:04:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_visitas`
--

CREATE TABLE `bdp_visitas` (
  `vis_id` int(11) NOT NULL,
  `sit_id` int(11) NOT NULL,
  `vis_ip` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vis_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bdp_categoria`
--
ALTER TABLE `bdp_categoria`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `est_id` (`est_id`);

--
-- Indices de la tabla `bdp_dato_usuario`
--
ALTER TABLE `bdp_dato_usuario`
  ADD PRIMARY KEY (`dus_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `bdp_estado`
--
ALTER TABLE `bdp_estado`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `bdp_evento`
--
ALTER TABLE `bdp_evento`
  ADD PRIMARY KEY (`eve_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `est_id` (`est_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indices de la tabla `bdp_imagen`
--
ALTER TABLE `bdp_imagen`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `sit_id` (`sit_id`),
  ADD KEY `eve_id` (`eve_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indices de la tabla `bdp_itinerario`
--
ALTER TABLE `bdp_itinerario`
  ADD PRIMARY KEY (`iti_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `sit_id` (`sit_id`),
  ADD KEY `eve_id` (`eve_id`);

--
-- Indices de la tabla `bdp_rating`
--
ALTER TABLE `bdp_rating`
  ADD PRIMARY KEY (`rat_id`),
  ADD KEY `sit_id` (`sit_id`);

--
-- Indices de la tabla `bdp_rol`
--
ALTER TABLE `bdp_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `bdp_sitio`
--
ALTER TABLE `bdp_sitio`
  ADD PRIMARY KEY (`sit_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `est_id` (`est_id`),
  ADD KEY `usu_id` (`usu_id`),
  ADD KEY `id_subcat` (`subcat_id`);

--
-- Indices de la tabla `bdp_subcategoria`
--
ALTER TABLE `bdp_subcategoria`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE,
  ADD KEY `est_id` (`est_id`);

--
-- Indices de la tabla `bdp_usuario`
--
ALTER TABLE `bdp_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `est_id` (`est_id`);

--
-- Indices de la tabla `bdp_visitas`
--
ALTER TABLE `bdp_visitas`
  ADD PRIMARY KEY (`vis_id`),
  ADD KEY `sit_id` (`sit_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bdp_categoria`
--
ALTER TABLE `bdp_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `bdp_dato_usuario`
--
ALTER TABLE `bdp_dato_usuario`
  MODIFY `dus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_estado`
--
ALTER TABLE `bdp_estado`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bdp_evento`
--
ALTER TABLE `bdp_evento`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bdp_imagen`
--
ALTER TABLE `bdp_imagen`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `bdp_itinerario`
--
ALTER TABLE `bdp_itinerario`
  MODIFY `iti_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bdp_rol`
--
ALTER TABLE `bdp_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_sitio`
--
ALTER TABLE `bdp_sitio`
  MODIFY `sit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bdp_subcategoria`
--
ALTER TABLE `bdp_subcategoria`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bdp_usuario`
--
ALTER TABLE `bdp_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_visitas`
--
ALTER TABLE `bdp_visitas`
  MODIFY `vis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bdp_categoria`
--
ALTER TABLE `bdp_categoria`
  ADD CONSTRAINT `bdp_categoria_ibfk_1` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`);

--
-- Filtros para la tabla `bdp_dato_usuario`
--
ALTER TABLE `bdp_dato_usuario`
  ADD CONSTRAINT `bdp_dato_usuario_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`);

--
-- Filtros para la tabla `bdp_evento`
--
ALTER TABLE `bdp_evento`
  ADD CONSTRAINT `bdp_evento_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_evento_ibfk_2` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`),
  ADD CONSTRAINT `bdp_evento_ibfk_3` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_evento_ibfk_4` FOREIGN KEY (`subcat_id`) REFERENCES `bdp_subcategoria` (`subcat_id`);

--
-- Filtros para la tabla `bdp_imagen`
--
ALTER TABLE `bdp_imagen`
  ADD CONSTRAINT `bdp_imagen_ibfk_1` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`),
  ADD CONSTRAINT `bdp_imagen_ibfk_2` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`),
  ADD CONSTRAINT `bdp_imagen_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_imagen_ibfk_4` FOREIGN KEY (`subcat_id`) REFERENCES `bdp_subcategoria` (`subcat_id`);

--
-- Filtros para la tabla `bdp_itinerario`
--
ALTER TABLE `bdp_itinerario`
  ADD CONSTRAINT `bdp_itinerario_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_itinerario_ibfk_2` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`),
  ADD CONSTRAINT `bdp_itinerario_ibfk_3` FOREIGN KEY (`eve_id`) REFERENCES `bdp_evento` (`eve_id`);

--
-- Filtros para la tabla `bdp_rating`
--
ALTER TABLE `bdp_rating`
  ADD CONSTRAINT `bdp_rating_ibfk_1` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`);

--
-- Filtros para la tabla `bdp_sitio`
--
ALTER TABLE `bdp_sitio`
  ADD CONSTRAINT `bdp_sitio_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_sitio_ibfk_2` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`),
  ADD CONSTRAINT `bdp_sitio_ibfk_3` FOREIGN KEY (`usu_id`) REFERENCES `bdp_usuario` (`usu_id`),
  ADD CONSTRAINT `bdp_sitio_ibfk_4` FOREIGN KEY (`subcat_id`) REFERENCES `bdp_subcategoria` (`subcat_id`);

--
-- Filtros para la tabla `bdp_subcategoria`
--
ALTER TABLE `bdp_subcategoria`
  ADD CONSTRAINT `bdp_subcat_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`),
  ADD CONSTRAINT `bdp_subcategoria_ibfk_1` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`);

--
-- Filtros para la tabla `bdp_usuario`
--
ALTER TABLE `bdp_usuario`
  ADD CONSTRAINT `bdp_usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `bdp_rol` (`rol_id`),
  ADD CONSTRAINT `bdp_usuario_ibfk_2` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`);

--
-- Filtros para la tabla `bdp_visitas`
--
ALTER TABLE `bdp_visitas`
  ADD CONSTRAINT `bdp_visitas_ibfk_1` FOREIGN KEY (`sit_id`) REFERENCES `bdp_sitio` (`sit_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
