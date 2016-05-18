-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2016 a las 03:39:25
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `portal_buga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_categoria`
--

CREATE TABLE IF NOT EXISTS `bdp_categoria` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cat_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `est_id` int(11) NOT NULL,
  `cat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_updated_at` timestamp NULL DEFAULT NULL,
  `cat_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `est_id` (`est_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `bdp_categoria`
--

INSERT INTO `bdp_categoria` (`cat_id`, `cat_nombre`, `cat_descripcion`, `est_id`, `cat_created_at`, `cat_updated_at`, `cat_deleted_at`) VALUES
(1, 'Cultura y Tradición', 'Contamos con una rica tradición gastronómica, unión de costumbres de las cocinas indígenas y africanas que se mezclaron en el pasado colonial de esta región. Una cocina en la que sobresalen sus dulces, dignos representantes de una región azucarera que en medio de la idiosincracia de sus tradiciones y el sincretismo de su cultura, le da cabida a uno de los destinos más bellos del occidente colombiano, un lugar que a pesar de su carácter religioso le da la bienvenida a todos los viajeros que como tú están dispuestos a descubrir la magia de las historias que esconde Colombia.', 1, '2016-05-14 16:29:38', NULL, NULL),
(2, 'Deportes', 'La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, de talla internacional como patinodromos profesionales y piscinas olímpicas, las cuales son utilizados también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se beneficien del deporte y contribuyan al desarrollo social de la ciudad.', 1, '2016-05-14 16:30:40', NULL, NULL),
(3, 'Ecoturístico', 'EL municipio ofrece un paisaje hermoso con un estupendo clima que permite visitar y tener contacto con la naturaleza en sitios recreativos como la maría, la floresta, la casa lago y demás lugares agradables que muestran lo maravilloso que es salir de la ciudad y disfrutar en familia de momentos inolvidables que no podemos dejar pasar  ', 1, '2016-05-14 16:31:10', NULL, NULL),
(4, 'Religioso', 'Aunque no hay duda que es el santuario del Señor de los Milagros el principal atractivo de la población de Buga, su importancia histórica para la región y sus manifestaciones culturales también son parte de los elementos que convirtieron a esta ciudad en uno de los pueblos patrimonio de Colombia. Todo eso además enmarcado por los sabores de una región exuberante de valles y montañas con el océano Pacífico hacia el occidente, que ejerce su influencia natural sobre la biodiversidad y el encanto de los paisajes que rodean a Buga.', 1, '2016-05-14 16:31:46', NULL, NULL),
(5, 'Histórico', 'Esta historia tiene como escenario una bella ciudad que guarda imponentes edificaciones que hacen parte del legado arquitectónico de Buga y que son considerados bienes de interés cultural para todo el país: edificaciones como la Estación del Ferrocarril, la Casa Hacienda La Julia, el Teatro Municipal de Buga y el sector antiguo de la ciudad, guardan parte de la historias que suceden alrededor del Señor de los Milagros. Más allá de tus creencias religiosas, la ciudad guarda todo un encanto histórico y cultural que podrás disfrutar sin importar cuál sea tu fe, todo mientras compartes y disfrutas de las manifestaciones culturales de miles de peregrinos que llegan de todos los rincones del país y del extranjero para conocer de cerca la historia y las leyendas que se cuentan sobre esta ciudad.', 1, '2016-05-14 16:32:38', NULL, NULL),
(6, 'Entretenimiento', 'El municipio de Buga, es un lugar privilegiado por los paisajes que lo rodean y por su buen clima, que permiten a sus visitantes pasar un agradable rato con su familia y amigos.  Es ideal para hacer turismo religioso y complementarlo con un ambiente recreativo inigualable. \r\nBuga ofrece mucho entretenimiento en sus parques, piscinas y balnearios ', 1, '2016-05-14 16:33:03', NULL, NULL),
(7, 'Hoteles', 'La hotelería, se concibe como el conjunto de actividades derivadas de la hospitalidad y el servicio de alojamiento a visitantes. La hotelería hoy es vista como una industria primordial e idónea para realizar una gestión eficaz y ser capaz de proponer estrategias competitivas así como desarrollar planes de acción que coadyuven al desarrollo  social de la localidad. En ese sentido  permitimos desarrollar  gestión eficaz de la hoteleria.', 0, '2016-05-18 01:01:01', NULL, NULL),
(8, 'Restaurantes', 'Contamos con una rica tradición gastronómica, unión de costumbres de las cocinas indígenas y africanas que se mezclaron en el pasado colonial de esta región. Una cocina en la que sobresalen sus dulces, dignos representantes de una región azucarera que en medio de la idiosincracia de sus tradiciones y el sincretismo de su cultura, le da cabida a uno de los destinos más bellos del occidente colombiano, un lugar que a pesar de su carácter religioso le da la bienvenida a todos los viajeros que como tú están dispuestos a descubrir la magia de las historias que esconde Colombia.', 0, '2016-05-18 01:04:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_dato_usuario`
--

CREATE TABLE IF NOT EXISTS `bdp_dato_usuario` (
  `dus_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `dus_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dus_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `bdp_estado` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`est_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

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

CREATE TABLE IF NOT EXISTS `bdp_evento` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `eve_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `cat_id` (`cat_id`),
  KEY `est_id` (`est_id`),
  KEY `usu_id` (`usu_id`),
  KEY `subcat_id` (`subcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_imagen`
--

CREATE TABLE IF NOT EXISTS `bdp_imagen` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `eve_id` int(11) DEFAULT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `img_ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`img_id`),
  KEY `sit_id` (`sit_id`),
  KEY `eve_id` (`eve_id`),
  KEY `cat_id` (`cat_id`),
  KEY `subcat_id` (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=19 ;

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
(16, NULL, 5, NULL, NULL, 'img/Basilica.jpg', '2016-05-14 18:37:24'),
(17, NULL, NULL, 7, NULL, 'img/hotel.jpg', '2016-05-18 01:01:03'),
(18, NULL, NULL, 8, NULL, 'img/familiar.jpg', '2016-05-18 01:04:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_itinerario`
--

CREATE TABLE IF NOT EXISTS `bdp_itinerario` (
  `iti_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) NOT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `eve_id` int(11) DEFAULT NULL,
  `iti_posicion` int(11) DEFAULT NULL,
  `iti_visitado` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `iti_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iti_updated_at` timestamp NULL DEFAULT NULL,
  `iti_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iti_id`),
  KEY `usu_id` (`usu_id`),
  KEY `sit_id` (`sit_id`),
  KEY `eve_id` (`eve_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_rating`
--

CREATE TABLE IF NOT EXISTS `bdp_rating` (
  `rat_id` int(11) NOT NULL,
  `sit_id` int(11) NOT NULL,
  `rat_rating` double NOT NULL,
  `rat_ip` int(15) NOT NULL,
  `rat_cant_votos` int(11) NOT NULL,
  `rat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rat_id`),
  KEY `sit_id` (`sit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_rol`
--

CREATE TABLE IF NOT EXISTS `bdp_rol` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rol_updated_at` timestamp NULL DEFAULT NULL,
  `rol_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `bdp_sitio` (
  `sit_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `subcat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sit_id`),
  KEY `cat_id` (`cat_id`),
  KEY `est_id` (`est_id`),
  KEY `usu_id` (`usu_id`),
  KEY `id_subcat` (`subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `bdp_subcategoria` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_nombre` varchar(80) NOT NULL,
  `subcat_descripcion` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `subcat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subcat_updated_at` timestamp NULL DEFAULT NULL,
  `subcat_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `cat_id` (`cat_id`) USING BTREE,
  KEY `est_id` (`est_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `bdp_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `usu_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_updated_at` timestamp NULL DEFAULT NULL,
  `usu_deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `rol_id` (`rol_id`),
  KEY `est_id` (`est_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `bdp_visitas` (
  `vis_id` int(11) NOT NULL AUTO_INCREMENT,
  `sit_id` int(11) DEFAULT NULL,
  `vis_ip` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vis_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`vis_id`),
  KEY `sit_id` (`sit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `bdp_visitas`
--

INSERT INTO `bdp_visitas` (`vis_id`, `sit_id`, `vis_ip`, `vis_created_at`) VALUES
(4, NULL, '::1', '2016-05-18 00:00:43');

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
