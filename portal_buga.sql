-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2016 a las 20:11:45
-- Versión del servidor: 5.5.43
-- Versión de PHP: 5.6.12

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

CREATE TABLE IF NOT EXISTS `bdp_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cat_descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `est_id` int(11) NOT NULL,
  `cat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_updated_at` timestamp NULL DEFAULT NULL,
  `cat_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `est_id` int(11) NOT NULL,
  `est_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

CREATE TABLE IF NOT EXISTS `bdp_imagen` (
  `img_id` int(11) NOT NULL,
  `eve_id` int(11) DEFAULT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `img_ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(10, NULL, 1, NULL, NULL, 'img/Estadio.JPG', '2016-06-03 15:19:38'),
(11, NULL, 2, NULL, NULL, 'img/COLISEO LUIS IGNACIO ALVARES OSPINA (1).JPG', '2016-06-03 15:42:24'),
(12, NULL, 3, NULL, NULL, 'img/CAMPEONATO LA BOMBONERA.jpg', '2016-06-03 15:33:38'),
(13, NULL, NULL, NULL, 4, 'img/historico_1.jpg', '2016-05-14 18:30:33'),
(14, NULL, NULL, NULL, 5, 'img/iglesias_1.jpg', '2016-05-14 18:30:57'),
(15, NULL, 4, NULL, NULL, 'img/noche.jpg', '2016-05-31 22:54:45'),
(16, NULL, 5, NULL, NULL, 'img/Basilica.jpg', '2016-05-14 18:37:24'),
(17, NULL, NULL, 7, NULL, 'img/hotel.jpg', '2016-05-18 01:01:03'),
(18, NULL, NULL, 8, NULL, 'img/familiar.jpg', '2016-05-18 01:04:16'),
(19, NULL, 6, NULL, NULL, 'img/tea.jpg', '2016-05-31 22:49:16'),
(20, NULL, 6, NULL, NULL, 'img/munic.JPG', '2016-05-31 22:49:16'),
(21, NULL, 6, NULL, NULL, 'img/Teatro.jpg', '2016-05-31 22:49:16'),
(22, NULL, 7, NULL, NULL, 'img/casa luis velasquez de buga valle del cauca.JPG', '2016-05-31 23:16:16'),
(23, NULL, 8, NULL, NULL, 'img/CASA DE LA CULTURA- BUGA (6).jpg', '2016-05-31 23:21:41'),
(24, NULL, 9, NULL, NULL, 'img/d2.jpg', '2016-05-31 23:27:50'),
(25, NULL, 10, NULL, NULL, 'img/san francisco.JPG', '2016-05-31 23:33:58'),
(26, NULL, 11, NULL, NULL, 'img/catedral  de sanpedro.JPG', '2016-05-31 23:44:11'),
(27, NULL, 13, NULL, NULL, 'img/Valle-del-cauca-guadalajara-de-buga-guadalajara-de-buga-1735.jpg', '2016-06-01 00:05:45'),
(28, NULL, 16, NULL, NULL, 'img/images.jpg', '2016-06-03 15:01:15'),
(29, NULL, 17, NULL, NULL, 'img/31601910.jpg', '2016-06-03 15:07:12'),
(30, NULL, 17, NULL, NULL, 'img/31602091.jpg', '2016-06-03 15:07:12'),
(31, NULL, 18, NULL, NULL, 'img/semi.png', '2016-06-03 15:45:36'),
(32, NULL, 19, NULL, NULL, 'img/olimpica.png', '2016-06-03 15:49:17'),
(33, NULL, 20, NULL, NULL, 'img/patinodromo.png', '2016-06-03 15:51:36'),
(34, NULL, 21, NULL, NULL, 'img/patinodromoita.png', '2016-06-03 16:01:45'),
(35, NULL, 22, NULL, NULL, 'img/vergel.jpg', '2016-06-03 16:06:58'),
(36, NULL, 25, NULL, NULL, 'img/vinculo.png', '2016-06-03 16:20:03'),
(37, NULL, 26, NULL, NULL, 'img/at-ecologicos-lagunadesonso.jpg', '2016-06-03 16:31:45'),
(38, NULL, 27, NULL, NULL, 'img/calima index.jpg', '2016-06-03 16:35:09'),
(39, NULL, 28, NULL, NULL, 'img/yotoco.jpg', '2016-06-03 16:39:21'),
(40, NULL, 29, NULL, NULL, 'img/campo hermoso.png', '2016-06-03 16:43:26'),
(41, NULL, 30, NULL, NULL, 'img/MARIA.png', '2016-06-03 16:46:32'),
(42, NULL, 31, NULL, NULL, 'img/alaska.png', '2016-06-03 16:48:59'),
(43, NULL, 32, NULL, NULL, 'img/floresta.png', '2016-06-03 16:50:58'),
(44, NULL, 33, NULL, NULL, 'img/oasis.png', '2016-06-03 16:52:20'),
(45, NULL, 34, NULL, NULL, 'img/janeiro.jpg', '2016-06-03 16:53:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_itinerario`
--

CREATE TABLE IF NOT EXISTS `bdp_itinerario` (
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

CREATE TABLE IF NOT EXISTS `bdp_rating` (
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

CREATE TABLE IF NOT EXISTS `bdp_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rol_updated_at` timestamp NULL DEFAULT NULL,
  `rol_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_sitio`
--

INSERT INTO `bdp_sitio` (`sit_id`, `sit_nombre`, `sit_descripcion`, `cat_id`, `sit_direccion`, `sit_telefono`, `sit_latitud`, `sit_longitud`, `est_id`, `sit_facebook`, `sit_twitter`, `sit_google_plus`, `sit_created_at`, `sit_updated_at`, `sit_deleted_at`, `usu_id`, `subcat_id`) VALUES
(1, 'Estadio Azcárate Martínez ', 'Fue inaugurado en 1915 y remodelado en 1971 donde fue subsede de los Juegos Panamericanos de Cali; en 1995 fue sede de la Primera B, año en el que tuvo al River Plate de Buga como anfitrión, esa misma temporada Cortulua y Once Caldas disputaron algunos partidos en la ciudad señora, en el 2000, Deportivo Pasto hizo las veces de local y el último se efectuó en mayo de 2010 cuando los escarlatas vencieron 2-1 al Once Caldas oficiando de locales por las reparaciones del Estadio Olímpico Pascual Guerrero.\r\nPara el primer semestre de 2015, América de Cali fue local en este escenario para sus juegos de "clase B", donde la convocatoria podría ser menor y el dispositivo de seguridad tendría características manejables para el municipio,1 esta localía obligó al club y a la alcaldía local a realizar adecuaciones a camerinos, bancos de suplentes y en las tribunas.\r\nEl Estadio Hernando Azcárate Martínez está situado en la ciudad de Buga, Valle del Cauca. Tiene capacidad de 8.000 espectadores repartidos en tribunas oriental y occidental, el estadio recibe su nombre en honor al Hernando Azcárate Martínez importante dirigente deportivo de Buga y el Valle del Cauca durante muchos años.\r\nEn su historial han sido locales varios equipos del occidente Colombiano por cortos periodos de tiempo, durante 2 años albergo al Guadalajara de Buga entre 1993 y 1994 y al River Plate de Buga entre 1995 y 1997. El tamaño de la cancha de Buga tiene dimensiones reglamentarias, 105 metros de largo por 68 metros de ancho.\r\n', 2, 'Carrera 12 con Calle 3 sur', '2275566', '11111111', '11111111', 1, NULL, NULL, NULL, '2016-05-14 16:52:44', '2016-06-03 15:29:01', NULL, 1, 2),
(2, 'Imder', 'El instituto municipal del deporte de Guadalajara de Buga, desarrolla programas que contribuyen al desarrollo humano, la salud, la convivencia y la paz, a través de la promoción de la recreación, educación física, la actividad física y el deporte; fortaleciendo los organismos municipales del sistema nacional del deporte y posicionando deportistas que gracias a su desempeño en las diferentes actividades se proyecten como ejemplos de vida para la comunidad, todo esto sumado a un equipo humano comprometido con las políticas y metas.\r\nEl instituto municipal del deporte y la recreación de Guadalajara de Buga es un ente descentralizado con autonomía financiera y presupuestal,  fue creado mediante acuerdo municipal no. 025 del 1. De diciembre de 1995. En este acuerdo se encuentran  establecidas las funciones del mismo.\r\nFunciona con un director ejecutivo nombrado por el alcalde municipal y  una junta directiva conformada así:\r\nEl alcalde o un representante.\r\nUn representante de indervalle que lo nombra indervalle.\r\nUn representante del sector educativo que se elige mediante asamblea de las instituciones educativas.\r\nUn representante de los clubes deportivos que se elige mediante asamblea de clubes deportivos.\r\nUn representante de la zona rural que se elige por asamblea del comité municipal de desarrollo rural.\r\nUn representante de la población discapacitada, elegido en la secretaria de bienestar social mediante asamblea.\r\nLas funciones de la junta directiva se encuentran establecidas en el acuerdo de creación.\r\n', 2, 'Carrera 12 No. 2a Sur - 117 ', '2360117', '12121212', '12121212', 1, NULL, NULL, NULL, '2016-05-14 16:54:50', '2016-06-03 15:42:24', NULL, 1, 2),
(3, 'La Bombonera', 'La ciudad de Guadalajara de Buga, cuenta con grandes escenarios deportivos, los cuales son utilizados también por los colegios públicos del municipio y todo con el propósito de que nuestros niños y jóvenes se beneficien del deporte y contribuyan al desarrollo social de la ciudad.', 2, 'Calle 16 con Carrera 5 Esquina', '2281752', '32323232', '32323232', 1, NULL, NULL, NULL, '2016-05-14 16:56:54', '2016-06-03 15:33:38', NULL, 1, 2),
(4, 'Estación del ferrocarril ', 'Desde el final de los años veinte surgió la inquietud de vincular las redes del Pacífico y el centro del país como un propósito nacional. En efecto, en 1929 se dio inicio a la construcción del túnel del cruce de la cordillera en la ruta Ibagué - Armenia, que algunos años después se suspendió ante las dificultades geológicas y las penurias fiscales.\r\n Pero el debate del proyecto continuó hasta 1950, en que la misión Currie abocó la evaluación de la infraestructura nacional, como un elemento fundamental del desarrollo económico del país. Para entonces la red del Pacífico contaba con 1.273 kilómetros en trocha de una yarda y la Central disponía de 1.221 kilómetros con 39 % en trocha de un metro y el resto en una yarda. \r\nLa primera recomendación de la misión consistió, pues, en unificar la trocha al ancho preponderante, para permitir una vinculación directa en condiciones económicas. En segundo término, la misión abocó el análisis de las soluciones alternativas para esa vinculación, en que la ruta Ibagué - Armenia era competida por una conexión al río Magdalena a través de los ferrocarriles del Norte y de Puerto Wilches. Sustitutivamente propuso una línea por el valle del río entre La Dorada y Gamarra, que se conectara a la red del Pacífico en Berrío. Finalmente conceptuó que esta solución podría ser más económica en inversión y costo de explotación.\r\nAsí nació la iniciativa del ferrocarril del Atlántico, que de inmediato fue acogida por el gobierno, al contratar con la Lockwood el estudio aerofoto gráfico de la línea, y su evaluación económica con la firma Madigan Hyland, para fundamentar un proyecto de ley que fue aprobado por el Congreso a fines de 1952. Actualmente se encuentra en ella la oficina de la Secretaria de Cultura y Turismo, la oficina de la Secretaria de Vivienda Municipal, oficina de la policía de Turismo Regional y la oficina de empleo SENA.\r\n', 5, 'Carrera 19 con calle 6', '2361100', '1010101010', '1010101010', 1, NULL, NULL, NULL, '2016-05-14 18:34:03', '2016-05-31 23:03:21', NULL, 1, 4),
(5, 'La Basílica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4, 'Carrera 14 con Calle 4', '2279999', '151515151', '151515151', 1, NULL, NULL, NULL, '2016-05-14 18:35:28', NULL, NULL, 1, 5),
(6, 'Teatro Municipal', 'Arquitectura Neoclásica Republicana. Su construcción data entre 1916 y 1922 a cargo del Dr. Julio Sanclemente Soto. Ubicada en la Zona III o Antiguo Barrio de Arriba en la esquina de la Calle 6a. (Calle de Bolivár) con Carrera 10 (Calle de los Coches).\r\nEl Teatro Municipal "Ernesto Salcedo Ospina" La primera Remodelación del Teatro Municipal, fue ejecutada en el año 1929 por el arquitecto Bugueño Don Enrique Figueroa, quien había venido de ejercer su profesión en la construcción del Canal de Panamá, dejando además algunas obras en el vecino país.\r\nFigueroa era además pintor y escultor y entre sus obras los bustos de Beethoven, Mozart y Liz, que adornan el teatro con escenarios para el desarrollo de actividades artísticas, teatrales y musicales.\r\nEl proyecto original pertenece al Dr. Julio Sanclemente Soto. tiene una capacidad aproximadamente para mil personas. de excelente acústica. La construcción del Teatro Municipal, está dotada completamente para el desarrollo de las actividades arísticas, teatrales y musicales.\r\nSu forma interna es circular, posee una hermosa sala de palcos soportados en columnas de madera; los barandajes con lindas aplicaciones de madera, dividos en cubiles cada uno con su puerta de ingreso y sus butacas, una platea grande con sus butacas, una galería amplia, con grandes escenearios, pasillos circulares dotados con amplias escaleras, cameríos, sótano, zona de taller, foro, foso de orquesta y de escenario, concha de apuntador, bastidores, telón de boca y fondo, salidas de emergencia, entre otras.\r\n', 5, 'Calle 6 con Carrera 10 Esquina', '22368206', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 21:27:03', '2016-05-31 22:49:16', NULL, 1, 4),
(7, 'Fiscalía General', 'La Fiscalía General de la Nación ejerce la acción penal y participa en el diseño de la política criminal del Estado; garantiza la tutela judicial efectiva de los derechos de los intervinientes en el proceso penal; genera confianza y seguridad jurídica en la sociedad mediante la búsqueda de la verdad, la justicia y la reparación.', 1, 'Carrera 9 Bis # 17-71', '2373064', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:16:16', NULL, NULL, 1, 4),
(8, 'Casa de la cultura', 'institución abierta y accesible al público y que se encarga de generar de manera permanente, procesos de desarrollo cultural concertados entre la comunidad y las entidades estatales, destinado a la preservación, transmisión y fomento de muestras artísticas y culturales propias de la comunidad. Es un lugar destinado para que una comunidad desarrolle actividades que promueven la cultura entre sus habitantes.\r\nLa casa de la cultura cuenta con una planta física que presta las facilidades para la enseñanza y la práctica de las diferentes expresiones culturales, así como para realizar la difusión, formación, capacitación, investigación, organización y apoyo a la creación artística, dictando talleres en diferentes áreas artísticas como son danza, teatro y narración oral, música, artes plásticas, literatura, entre otras; y dirigido a niños, jóvenes, adultos y adultos mayores.\r\n•	Es un espacio de encuentro de articulación de procesos sociales y culturales que posibilitan la inclusión de la población con el fin de diseñar las políticas, posibilitar los derechos, dar acceso al arte, desarrollar actividades de formación y capacitación en las diferentes áreas artísticas y culturales, apoyando la creación artística y fomentando el intercambio cultural.\r\n•	Las Casas de la Cultura usualmente tienen bibliotecas, ludotecas, auditorio, talleres culturales de danzas, música, artes plásticas, teatro y otras actividades generalmente gratuitas o a precios accesibles para la comunidad. Este tipo de locales tienen una gran importancia para la preservación de la cultura local, sobre todo en comunidades rurales que carecen de teatros, cines o salas de conciertos. Aunque también en las grandes ciudades las casas de la cultura tienen importancia para mantener actividades culturales con grupos de todas las edades y estratos sociales.\r\n', 1, 'Calle 6 # 11 - 11', '2271778', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:21:41', NULL, NULL, 1, 4),
(9, 'Alcaldía Municipal', 'Bellísima Construcción de estilo romántico, está ubicada en la Zona I o Área Fundacional en la Carrera 13 (Calle de Nariño o Calle de Santo Domingo o Calle del Comercio) con Calle 6a. (Calle de Bolívar) y 7a. (Calle de Santander). PALACIO MUNICIPAL. Arquitectura de estilo Repúblicano (1930).\r\nDel antiquísimo convento de la orden de Santo Domingo que databa del siglo XVI y que ocupaba un cuarto de manzana, nada se conserva; en 1919 fue abolido y demolido totalmente.\r\nCuentan los historiadores que esto aconteció a raíz de la ley del 28 de julio de 1891 expedida por el Congreso de Cúcuta la cual ordenaba que suprimieran los conventos menores y dedicaran sus bienes a la instrucción pública, por esta razón en los predios que ocupó el antiguo convento de Santo Domingo construyó, hacia 1930, la visión bugueña de un programa de escuelas modelos que adelantó el Gobierno por varias poblaciones del departamento, aunque nunca funcionó como escuela.\r\nLa construcción fue ejecutada por Don Enrique Figueroa Fernández, diseño y arquitectura de gran elegancia ornamental, la Administración Municipal la adoptó como sede para la Alcaldía. Alcaldía Municipal y la Iglesia Santo Domingo de Guzmán, las construcciones son de categoría de conservación integral.\r\nLa construcción fue ejecutada por Don Enrique Figueroa Fernández, diseño y arquitectura de gran elegancia ornamental, la Administración Municipal la adoptó como sede para la Alcaldía. Alcaldía Municipal y la Iglesia Santo Domingo de Guzmán, las construcciones son de categoría de conservación integral.\r\n', 5, 'Carrera 13 No. 6-50', '2377000', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:27:50', '2016-06-03 14:32:42', NULL, 1, 4),
(10, 'San Francisco de Asís', 'es una iglesia católica colombiana localizada en Guadalajara de Buga (Valle del Cauca) bajo la advocación de San Francisco de Asís que pertenece a la jurisdicción eclesiástica de la Diócesis de Buga. Entre los nombres que ha recibido figuran Capilla de Jesús de Nazaret, Capilla del Colegio de los Jesuítas y Ermita de Jesús Nazareno. Se encuentra localizada en el cruce de la Calle 5a. (Calle de San Francisco) con Carrera 14 (Calle de la Ermita o Calle del 20 de julio), a una manzana de la Catedral de San Pedro Apóstol y una más de la Basílica Menor del Señor de los Milagros, en la Zona 1 (Area Fundacional) del Centro Histórico de Buga.\r\nSe trata de una sencilla iglesia de una sola nave construida en piedra labrada, con coro y balcón. Por encima de la entrada principal hay una ventana protegida con una reja de hierro cuya función es iluminar al coro; en frente de dicha entrada, en la fachada principal, se encuentra una pequeña plazoleta en piedra, desde la cual se accede a un convento antiguo y un corredor, que lleva a la entrada lateral y posteriormente a la sacristía. Además, desde el corredor se accede al segundo piso. Sobre la entrada derecha, llamada del perdón, se encuentra grabado el año de construcción (1745). Es atribuida aljesuíta alemán Simón Schenherr, afectada por un sismo en 1766, por lo que su frente fue rediseñado en 1870 y posteriormente, el remate de la torre; sin embargo, con la expulsión de los jesuítas, la Capilla de Jesús Nazareno -nombre que recibía hasta entonces-, fue abandonada, y cayó en manos de la Tercera orden de San Francisco, hasta su restauración en 1970, cuando se la entregó a la Diócesis de Buga, que la administra desde entonces.\r\n', 4, 'Carrera 14 con Calle 5 Esquina', '2365454', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:33:58', NULL, NULL, 1, 5),
(11, 'Catedral de San Pedro Apóstol', 'La Catedral de San Pedro Apóstol (o simplemente Catedral de San Pedro) es una catedral católica colombiana localizada en Guadalajara de Buga (Valle del Cauca) bajo la advocación del Apóstol Simón Pedro, que es sede del obispo de Buga, al ser la iglesia mayor de la diócesis homónima. Se encuentra localizada en una esquina, en el cruce de la Calle 6 (Calle de la Iglesia Mayor o del 7 de agosto) con Carrera 15 (Calle de Bolívar), en la Zona 1 (Área Fundacional) del Centro Histórico de Buga, en el costado sur del Parque José María Cabal, a tres cuadras de la Basílica del Señor de los Milagros.\r\nSu planta es de tras naves, separadas por pilares de madera, en la nave derecha se encuentra la pila bautismal, de piedra, y en la central, el altar principal, obra del payanés Sebastián Usiña, revestido en laminillas de oro y plata.\r\nLa iglesia que es actualmente la catedral pertenecía a los jesuitas, pero al ser expulsados, la iglesia quedó abandonada, ésta, que fue siendo ampliada y ornamentada con el pasar de los años, quedó destruida en 1766 debido a un movimiento sísmico. Nueve años después, con la ayuda económica del Rey de España, fue reconstruida; reconstrucción que se dio por terminada el 30 de diciembre de 1781, para luego ser restaurada en el siglo XX. Con la creación de la Diócesis de Buga, fue elevada al rango de catedral.\r\n', 5, 'Calle 6 con Carrera 15 Esquina', '2282738', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:44:11', NULL, NULL, 1, 5),
(12, 'Santo Domingo', 'El origen de la Iglesia Santo Domingo se remonta al siglo XVI pero el templo se arruinó también durante el terremoto de 1766. Reconstruido en la misma línea estilística de la Iglesia Mayor y de la antigua Ermita; su arquitectura permaneció hasta 1930 cuando fue sometida a la intervención que ahora vemos, debido a don Enrique Figueroa. Las reformas solamente afectaron las fachadas y la ornamentación interior, pero la estructura colonial del templo pertenece aún.', 4, 'Calle 6 No. 12 - 32 ', '2277565', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-05-31 23:56:36', NULL, NULL, 1, 5),
(13, 'Museo Santuario Señor de los Milagros', 'El museo está ubicado en una casa de estilo colonial con patio central. Allí se muestra la colección en siete salas: El Señor de los Milagros, la Basílica, Exvotos, Acción de gracias, Historia y fundación de los Redentoristas, Vocacional, Artículos religiosos y Primera peregrinación con la imagen del Señor de los Milagros.	\r\nTestimonios como el de don Heriberto se escuchan diariamente en todo el país. En el Museo del Milagroso en Buga hay más de 10 mil placas de mármol de personas y familias con el testimonio de agradecimiento por el milagro otorgado.\r\nAsí mismo se encuentran en el Museo muletas y aparatos ortopédicos que fueron usados por decenas de enfermos que hoy se encuentran plenamente recuperados.\r\nLos sacerdotes Redentoristas que regentan la Basílica Menor del Señor de los Milagros tienen calculado que entre hoy y el próximo domingo más de 10 mil peregrinos visitarán el Museo del Milagroso que funciona en un antiquísimo inmueble de dos plantas que se halla frente a la torre de la Ermita Vieja.\r\n', 4, 'Carrera 14 No. 3 - 37', '2282823 ', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-01 00:05:45', NULL, NULL, 1, 4),
(15, 'El Faro', 'Su construcción se inicio en el año de 1954, construido como un homenaje al Doctor Alejandro Cabal Pombo, hijo ilustre de la ciudad Guadalajara de Buga, el Faro de Buga señala la ruta Buga - Madroñal - Buenaventura, ruta que a lo largo de los años se ha considerado una de las mas importantes a nivel nacional generando economía y progreso para la región.\r\nMonumento "Alejandro Cabal Pombo". Este monumento Histórico de la ciudad de Guadalajara de Buga, se encuentra erigido entre cuatro pilares que sirven de macetas adornando su periferia, rodeado de hermosos arboles nativos, un lugar encantador rodeado de vegetación. El lugar donde se encuentra ubicado también se frecuenta como parque, el cual posee algunas bancas en granito para el descanso y amplias zonas verdes para el goce y disfrute de todos los bugueños y turistas.', 1, 'Calle 1a entre Carrera 14 y 15', '2287653', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 14:44:38', NULL, NULL, 1, 4),
(16, 'Dulces del valle Cecilia Payan', 'Señora CECILIA PAYAN, nacida en Buga (Valle del Cauca, Colombia) el 10 de agosto de 1896. A sus 19 años de edad inicia la elaboración del manjarblanco artesanalmente en su lugar de residencia con las recetas de sus antepasados, fundando así la empresa CECILIA PAYAN DE DOMINGUEZ E HIJOS CIA LTDA propietaria de la marca comercial DULCES DEL VALLE en el año 1926.\r\nAl transcurrir los años fue evolucionando, innovando y perfeccionando los productos hasta convertirla en una gran industria cambiando su razón social a CECILIA PAYAN S.A, DULCES DEL VALLE S.A, ampliando su portafolio en una extensa variedad de productos como la línea light cero azúcar (apto para diabéticos) hasta el día de hoy sigue deleitando los paladares de niños jóvenes y adultos.\r\nDULCES DEL VALLE es una compañía Colombiana, fundada en 1.926, por la señora CECILIA PAYÁN en la ciudad de Buga (Valle del Cauca), pionera en la elaboración de manjarblanco con su principal materia prima la leche, diferenciándose en su procesamiento y delicada elaboración de su receta original, obteniendo altos estándares de eficiencia y calidad; innovando en productos a base de frutas, como la guayaba (bocadillos, jalea, mermelada) naranja, desamargados (cascos de limón, pimentón, breva) entre otras, ampliando así su portafolio, desarrollando procesos de secado, manufactura y empaques, estableciendo canales de distribución a nivel nacional e internacional conservando puntos propios en su canal de ventas, siguiendo las tendencias mundiales, desarrollando día a día nuevos y novedosos productos para satisfacer los mas exquisitos paladares.\r\n', 1, 'Carrera 11 No. 3-52', '2272351', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 15:01:15', NULL, NULL, 1, 4),
(17, 'Restaurante Cimarrón y Cilantro', 'Te esperamos en el restaurante cimarrón y cilantro un lugar acogedor, donde lo atenderemos con el mayor de los gusto, con comida de buena calidad, y un buen servicio de personal', 8, 'Crarera 12 Sur Quebradaseca ', '2282100', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 15:07:11', NULL, NULL, 1, 4),
(18, 'Piscina Semiolímpica Imder', 'Piscina Semi Olímpica está diseñada en estructura de hormigón armado, conformada con un área de esparcimiento y estacionamientos, con 7 carriles de capacidad, enfermería, Lavapiés cafetería, sala de bombas, sala de equipo electrógeno. El objetivo de la disposición de los recintos es ofrecer un espacio apto para el desarrollo de las disciplinas deportivas, como también la posibilidad de participación de la ciudadanía.', 2, 'Carrera 12 No. 2a  Sur - 117 (Imder)', '2360117', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 15:45:36', NULL, NULL, 1, 4),
(19, 'Piscina Olímpica Colegio Académico', 'Un sueño hecho realidad es la entrega de la Ciudadela Educativa colegio Académico en la ciudad de Guadalajara de Buga, una obra que se convierte en modelo de infraestructura educativa en esta región de Colombia y que fue realizada con el apoyo del Gobierno Nacional del Presidente  Juan  Manuel  Santos, con una inversión de $8.200 millones de pesos, de los cuales $4.900 millones fueron aportados por el Ministerio de Educación Nacional,$2.500 millones por la Alcaldía de Guadalajara de Buga y $800 millones por el Ministerio de Cultura.\r\nLa entrega se cumplió el 30 de Julio 2014 y contó con la presencia del Presidente Juan Manuel Santos Calderón, de la Ministra de Educación Nacional María Fernanda Campo Saavedra. La gran obra aspira a ser  referente junto a otras dos ciudadelas que se proyectan, una en zona rural y otra en el perímetro urbano, en las instalaciones del colegio Ita. Dentro de la gestión que adelanta el Alcalde de Guadalajara de Buga John Harold Suárez Vargas.\r\n', 2, 'Carrera 9 No. 2 Sur - 55', '2278675', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 15:49:17', NULL, NULL, 1, 4),
(20, 'Patinodromo Indulfo Lozano', 'Patinodromo Municipal Indulfo Lozano cuenta con pista plana, ruta, velocidad, también cancha para practicar el hockey y patinaje artístico, además sirve como escenario para la práctica de futbol de salón.\r\nHa sido escenario de campeonatos de patinaje aficionado a nivel municipal y departamental y por mucho tiempo fue el único patinodromo de la ciudad hasta el año 2015 donde fue construido el patinodromo internacional de la ciudadela educativa ITA\r\n', 2, 'Calle 1a con Carrera 12 Esquina', '2287675', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 15:51:36', NULL, NULL, 1, 3),
(21, 'Patinodromo Internacional ITA', 'El Patinodromo Internacional de la Ciudadela Educativa ITA a sido escenario de campeonatos recibiendo a  750 patinadores y más de 2.000 acompañantes en el marco del Campeonato Nacional de Patinaje, escuelas y novatos. “Buga es hoy en día la capital nacional del patinaje en Colombia, porque tiene un escenario número uno para la práctica de este deporte. El patinodromo de Buga es el primero en reunir las especificaciones que exige la Federación Internacional de Patinaje para eventos mundiales”, Este escenario es espectacular. Es un escenario excelente. \r\nEl patinodromo Internacional de la Ciudadela Educativa ITA consta de pistas plana, ruta, velocidad con peraltes. \r\nTambién cancha para practicar el hockey y el patinaje artístico; y es el único en Colombia que cuenta con pista de fundamentación.\r\nEstá dotado de un sofisticado sistema de drenaje que evacua las aguas lluvias y evita la inundación de las pistas, también de amplias zonas verdes.\r\nLas luminarias instaladas, cinco torres con 25 bombillas Led, permiten un nivel de iluminación ideal para todo tipo de competencias nocturnas y transmisiones de televisión y para definir mediante foto finish la llegada de los competidores a la línea de meta, con tal precisión que, en caso de ser necesario, pueda dilucidar el vencedor en un final.\r\nLa moderna obra está complementada con 190 patines italianos marca Roces Orlando, desde la talla 25 a 41, con kit de protección (rodilleras, coderas y antifracturantes, además de casco) que son utilizados por estudiantes y población en general que practica este deporte.', 2, 'Carrera 8 No. 26 - 313', '2288580', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:01:45', NULL, NULL, 1, 3),
(22, 'Parque Biosaludable el Vergel', 'En un terreno de más de 10 hectáreas de extensión fueron desarrolladas las obras que le dieron forma al primer parque Biosaludable, un espacio de esparcimiento y salud, con el que cuentan los bugueños.\r\nEspacios verdes, complementados con áreas con equipos para el ejercicio físico que buscan aportar a la ciudad una nueva filosofía de vida y el disfrute del tiempo libre, están desde ya a disposición de la comunidad.\r\nSu inauguración se realizó el pasado jueves en una cita a la que acudieron miles de ciudadanos para ser testigos de la entrega oficial por parte de la Administración municipal de este rincón en el oriente de la ciudad.\r\nEl Parque Biosaludable ‘El Vergel’, cuenta con completos equipos de gimnasia, espacio al aire libre, senderos peatonales, pista de deporte extremo, especialmente para la práctica del BMX, juegos infantiles y una plazoleta cultural, que recibirá a propios y visitantes.\r\nEste centro de atención se podrá disfrutar desde las 4:00 de la mañana hasta las 11:00 de la noche, pues cuenta con un moderno alumbrado.\r\nDe acuerdo con las autoridades administrativas se convierte El Vergel, en uno de los parques más completos del país. En él el municipio invirtió 2.690 millones de pesos.\r\n', 2, 'Calle 3 Este No. 61 - 87 (vía batallón) ', '2287374', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:06:58', NULL, NULL, 1, 4),
(23, 'Parque del ITA', 'Escenario para adultos,  jóvenes y niños amantes del deporte y la actividad física, cuenta con completos equipos de gimnasia, espacio al aire libre, pista de deporte extremo, especialmente para la práctica del BMX y patineta, cancha de micro fútbol rodeada por una mini pista de patinaje, cancha de básquet y espacios para practicar aeróbicos. ', 2, 'Carrera 9 y 8 con Calle 23', '221223', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:11:23', NULL, NULL, 1, 4),
(24, 'Parque La revolución', 'Unos de los parques más antiguos de la ciudad, recientemente renovado y transformado en un gran escenario para que adultos,  jóvenes y niños practiquen deportes y utilicen un espacio de sano esparcimiento en el parque.\r\nNuestro parque de la revolución cuenta con juegos de entretenimiento, juegos infantiles, pistas de BMX y patinetas para que los jóvenes tengan la mejor diversión, tres columpios, sube y baja, cancha de micro fútbol y cancha de futbol siete, todo esto y mucho más lo puedes encontrar en el parque del barrio la Revolución\r\n', 6, 'Calle 11 entre Carrera 2 y 3', '2282734', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:13:21', NULL, NULL, 1, 4),
(25, 'Parque Natural Regional El Vinculo', 'Es la más grande reserva del ecosistema de bosque seco tropical del Valle del Cauca, la cual fue declarada parque natural regional en el año 2006. El Parque está destinado para la investigación científica, conservación, restauración, ecoturismo, educación ambiental y cultural y en algunos casos para actividades recreativas de bajo impacto y esparcimiento al aire libre, como avistamiento de aves. Está localizado en el corregimiento del mismo nombre, 3 kilómetros al sur del municipio de Buga sobre la carretera Panamericana.\r\nSu terreno es un santuario donde la magia de la naturaleza se recrea y crece a sus anchas, pero también es un lugar privilegiado para la investigación básica de la flora y la fauna nativas. Un área para el montaje de ensayos y demostraciones acerca del uso racional de los recursos naturales y un conjunto de senderos ecológicos en el que se realiza un programa permanente de educación ambiental dirigido a estudiantes de todos los niveles y a la comunidad en general con el propósito de sensibilizarlos sobre la importancia de amar y proteger la naturaleza.', 3, 'Corregimiento El Vínculo', '2272678', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:20:03', NULL, NULL, 1, 4),
(26, 'Reserva Natural Laguna de Sonso', 'Las extensas Lagunas y Ciénagas que en épocas pretéritas cubrieron la actual región del Valle del Cauca fueron desecadas en este ultimo siglo, con el fin de integrar esas áreas a la producción agrícola. De todas esas hermosas áreas lacustres hábitat de varias especies de aves, mamíferos, peces, reptiles, etc., solo ha quedado la Laguna de Sonso o del Chirmacal como ultimo testimonio de la antigua formación del Valle.\r\nDurante siglos el río Cauca ha influido en la modelación del paisaje de su valle, inundando bajos o tierras de menor altura, dejando a su paso madreviejas o depositando materiales en sus diques naturales y en las épocas de grandes crecidas inundando extensas áreas.\r\n', 3, 'Afueras de Buga ', '2282731', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:31:45', NULL, NULL, 1, 4),
(27, 'Lago Calima', 'Desde el siglo XVII hasta nuestra era esta hermosa región ha sido hostal de muchos pioneros que vinieron en busca de riquezas mineras que no encontraron y se asentaron atraídos por su riqueza natural y paisajística, dedicándose en gran parte a la ganadería y a la agricultura.\r\nEn la fundación de El Darién intervinieron muchos colonos urgidos de crear un centro urbano donde se pudieran efectuar las tareas públicas del comercio y un punto de encuentro para los moradores de la región. Fue así como en enero de 1.907 se inició la tarea de derribar bosques, delimitar las áreas del parque y lotes públicos, donde se construirían más tarde la iglesia y locales administrativos. \r\nLa población del Darién fue fundada en 1.912 por colonos antioqueños, vallecaucanos y caldenses. En 1.918 la población fue erigida en cabecera de Corregimiento, en 1.920 en cabecera de Inspección Departamental y finalmente en 1.939 mediante la ordenanza No. 049, la Asamblea Departamental, lo constituyó como el Municipio de Calima, segregando su territorio del Municipio de Yotoco y designando al Darién por cabecera Municipal. \r\nEl nombre de Calima es en referencia a su tradicional neblina (calima o calina) que entra a la cuenca del Lago Calima por el cañón de Rio Bravo rutinariamente en las tardes, además de que los picos de sus montañas permanecen cubiertos de neblina casi todo el año.\r\nLa cabecera del municipio se llama Darién, gracias a Don Nicolás Restrepo, uno de sus fundadores, quien le encontró parecido con unos parajes de la región del Darién, en el departamento del Chocó. \r\nEl Embalse Calima fue construido por la empresa PERINI e inaugurado en 1966. La dimensión de su embalse es de 13 Kilómetros de largo por 1,5 Kilómetros de ancho, la superficie inundada es de 1934 hectáreas, el volumen total almacenado 581 millones de M3.', 3, 'Calima - Darien', '2284731', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:35:09', NULL, NULL, 1, 4),
(28, 'Reserva natural de Yotoco', 'La Reserva Natural de Yotoco alberga importantes especies forestales y faunísiticas, siendo el sitio donde nace el río Yotoco, que abastece el acueducto del municipio del mismo nombre y sirve de laboratorio natural en el que se pueden adelantar investigaciones tendientes a la identificación y caracterización del ecosistema natural.  \r\nLa reserva natural cuenta con un centro de educación ambiental, que ofrece al visitante un cupo para 30 personas en su zona de camping, salón de audiovisuales y batería sanitaria.', 3, 'Yotoco', '2278471', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:39:21', NULL, NULL, 1, 4),
(29, 'Reserva Forestal Campo Hermoso', 'PNN (Parque Nacional Natural) "Las Hermosas", creado en 1.977 este Parque Natural se encuentra ubicado en la Cordillera Central de Colombia en el Macizo Colombiano, entre los departamentos del Tolima (80%) y Valle del Cauca (20%); hace parte de los municipios de Rioblanco y Chaparral (Tolima) y de Palmira, Buga, El Cerrito, Tuluá y Pradera (Valle del Cauca).\r\nCubre una superficie de 125.000 ha y se alza sobre un área ubicada entre los 2.500 y los 4.000 m de altitud, de la que sobresalen los páramos de Las Hermosas, Domínguez y Miraflores. Tiene una temperatura media anual que oscila entre los 4 °C y los 24 °C. El promedio de precipitaciones anuales es de 2.500 milímetros. Alberga más de 300 lagunas de origen glaciar. Sobresalen el páramo de Las Hermosas, Domínguez y Miraflores. Al parque se llega por vía terrestre desde Palmira, El Cerrito o Pradera, en el Valle y se asciende la cordillera a través de caminos de herradura.', 3, 'Afueras de Buga ', '2287646', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:43:26', NULL, NULL, 1, 4),
(30, 'Balneario la María', 'Ven y disfruta de este espectacular Balneario, situado en el famoso sector de la María, Buga. Puedes disfrutar de un día lleno de diversión, con sus piscinas de agua natural, su espectacular tobogán y Garucha dentro de la misma piscina. Comparte en familia preparando un delicioso Sancocho de Gallina en los Fogónes de Leña.', 6, 'La Habana, 3 Km adelante de Crucebar', '2276381', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:46:32', NULL, NULL, 1, 4),
(31, 'Vereda Alaska', 'Ven y disfruta de este espectacular Balneario, situado en el famoso sector de Alaska, Buga. Puedes disfrutar de un día lleno de diversión, con sus piscinas de agua natural, su espectacular tobogán y Garucha dentro de la misma piscina. Comparte en familia preparando un delicioso Sancocho de Gallina en los Fogónes de Leña.', 6, 'Alaska - 30 Min. de Buga', '2276731', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:48:59', NULL, NULL, 1, 4),
(32, 'Balneario la Floresta', 'Ubicado a 8 km de la Basílica del Señor de los Milagros y rodeado de una imponente belleza natural, el Balneario La Floresta es lugar indicado para el descanso, la diversión y el contacto con la naturaleza. Este sitio turístico ofrece zonas de recreación, restaurante, piscinas, pesca deportiva, salón de baile y fogones de leña', 6, 'Via la Habana', '2272636', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:50:58', NULL, NULL, 1, 4),
(33, 'Balneario el Oasis', 'La zona rural de Buga se hace maravillosa por sus encantos naturales.. Hermosos paisajes que se conjugan con el atractivo de sus balnearios.. El balneario el Oasis, enclavado en medio de la naturaleza que con el verde encantador de su flora, el armonioso trinar de las aves, enlazado por la vistosidad de sus colores hacen un paraíso natural, con las refrescantes y cristalinas aguas que nos llaman a la diversión en familia.', 6, 'Vía Alaska', '2287361', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:52:20', NULL, NULL, 1, 4),
(34, 'Balneario el Janeiro', 'Ubicado a 12 km de la Basílica del Señor de los Milagros y rodeado de una imponente belleza natural, el Balneario El Janeiro es un lugar indicado para el descanso, la diversión y el contacto con la naturaleza. Este sitio turístico ofrece zonas de recreación (mesas de billar, juegos de sapo) servicio de restaurante a menos de 50 metros, piscinas de agua natural, ambientación musical, tienda y fogones de leña.', 6, 'Via la Habana', '2263521', '101010101010', '1100110011', 1, NULL, NULL, NULL, '2016-06-03 16:53:59', NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdp_subcategoria`
--

CREATE TABLE IF NOT EXISTS `bdp_subcategoria` (
  `subcat_id` int(11) NOT NULL,
  `subcat_nombre` varchar(80) NOT NULL,
  `subcat_descripcion` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `subcat_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subcat_updated_at` timestamp NULL DEFAULT NULL,
  `subcat_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
  `usu_id` int(11) NOT NULL,
  `usu_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `est_id` int(11) NOT NULL,
  `usu_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_updated_at` timestamp NULL DEFAULT NULL,
  `usu_deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `vis_id` int(11) NOT NULL,
  `sit_id` int(11) DEFAULT NULL,
  `vis_ip` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vis_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bdp_visitas`
--

INSERT INTO `bdp_visitas` (`vis_id`, `sit_id`, `vis_ip`, `vis_created_at`) VALUES
(4, NULL, '::1', '2016-05-18 00:00:43'),
(5, 5, '::1', '2016-05-18 16:42:29'),
(6, 2, '::1', '2016-05-24 13:16:20'),
(7, 4, '::1', '2016-05-24 13:23:08'),
(8, 1, '::1', '2016-05-26 15:46:35'),
(9, 3, '::1', '2016-05-26 20:51:06'),
(10, 6, '::1', '2016-05-31 22:50:35'),
(11, 10, '::1', '2016-05-31 23:36:14');

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `bdp_dato_usuario`
--
ALTER TABLE `bdp_dato_usuario`
  MODIFY `dus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_estado`
--
ALTER TABLE `bdp_estado`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bdp_evento`
--
ALTER TABLE `bdp_evento`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bdp_imagen`
--
ALTER TABLE `bdp_imagen`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `bdp_itinerario`
--
ALTER TABLE `bdp_itinerario`
  MODIFY `iti_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bdp_rol`
--
ALTER TABLE `bdp_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_sitio`
--
ALTER TABLE `bdp_sitio`
  MODIFY `sit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `bdp_subcategoria`
--
ALTER TABLE `bdp_subcategoria`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bdp_usuario`
--
ALTER TABLE `bdp_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bdp_visitas`
--
ALTER TABLE `bdp_visitas`
  MODIFY `vis_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
  ADD CONSTRAINT `bdp_subcategoria_ibfk_1` FOREIGN KEY (`est_id`) REFERENCES `bdp_estado` (`est_id`),
  ADD CONSTRAINT `bdp_subcat_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `bdp_categoria` (`cat_id`);

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

