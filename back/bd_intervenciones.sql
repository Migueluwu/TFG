-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2023 a las 01:40:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qahz656`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JAVIERPARODI_alumnos`
--

CREATE TABLE IF NOT EXISTS `JAVIERPARODI_JAVIERPARODI_alumnos` (
  `cod_alu` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `cod_grupo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `JAVIERPARODI_alumnos`
--

INSERT INTO `JAVIERPARODI_JAVIERPARODI_alumnos` (`cod_alu`, `nombre`, `apellidos`, `cod_grupo`) VALUES
(763, 'Jimena', 'Acosta Lérida', '1ESOF'),
(764, 'Kimmy', 'Acosta Lérida', '1ESOF'),
(765, 'Izan', 'Aguirre Silla', '1ESOE'),
(766, 'Vega', 'Aguirre Silla', '1ESOG'),
(767, 'Karla', 'Aiza Silla', '1ESOB'),
(768, 'Mikaela', 'Alegre López', '1ESOC'),
(769, 'Carmen', 'Algarín Reyes', '1ESOB'),
(770, 'Lucía', 'Algarín Reyes', '1ESOB'),
(771, 'Frank Logan', 'Alonso García', '1ESOH'),
(772, 'Kimmy', 'Álvarez Hoyos', '1ESOG'),
(773, 'Daniel', 'Amador Egea', '1ESOD'),
(774, 'Manuela', 'Amador Egea', '1ESOH'),
(775, 'Thalia', 'Andrade Borrero', '1ESOE'),
(776, 'Cataleya', 'Antonete Bádenas', '1ESOB'),
(777, 'Máximo', 'Aranda Ruiz', '1ESOB'),
(778, 'Paula', 'Asenova Calvo', '1ESOG'),
(779, 'Hugo', 'As-Sadeqi Márquez', '1ESOC'),
(780, 'Patrick', 'As-Sadeqi Márquez', '1ESOF'),
(781, 'Valeria', 'As-Sadeqi Márquez', '1ESOB'),
(782, 'Carla', 'Astilleros Díaz', ''),
(783, 'Hernán', 'Banta Bustos', '1ESOG'),
(784, 'Marcelo', 'Baquero Espadero', ''),
(785, 'Andrés', 'Baraza Muñoz', '1ESOC'),
(786, 'Carlos', 'Barragán Candón', '1ESOB'),
(787, 'Andrés', 'Barragán Pérez', '1ESOG'),
(788, 'Marta', 'Belo Palacio', '1ESOE'),
(789, 'Alina', 'Beltrán Huertas', '1ESOD'),
(790, 'Darío', 'Bermejo Fernández', '1ESOF'),
(791, 'Elsa', 'Bermejo Fernández', '1ESOG'),
(792, 'Ada', 'Bernabé Rodríguez Roales', '1ESOF'),
(793, 'Antonio', 'Bernal Alonso', '1ESOH'),
(794, 'Darío', 'Bernal Alonso', '1ESOH'),
(795, 'Laura', 'Bernal Alonso', '1ESOF'),
(796, 'Carlos', 'Bolaños Cárdenas', '1ESOA'),
(797, 'Elena', 'Boumaloui Palacios', '1ESOC'),
(798, 'Leo', 'Boumaloui Palacios', '1ESOB'),
(799, 'Elsa', 'Bueno Díaz', '1ESOH'),
(800, 'Izan', 'Burgos Calderón', '1ESOA'),
(801, 'Helena', 'Butrón López', '1ESOC'),
(802, 'Hugo', 'Cabanillas Marchante', '1ESOC'),
(803, 'Mia Martina', 'Cabello Martín', '1ESOC'),
(804, 'Lucas', 'Cabrera Tíscar', ''),
(805, 'Vega', 'Cabrera Tíscar', '1ESOB'),
(806, 'Laura', 'Calle Andrés', '1ESOE'),
(807, 'Belén', 'Camacho Martínez', '1ESOE'),
(808, 'Darío Gael', 'Camacho Ramos', '1ESOA'),
(809, 'Ibrahim', 'Cano Barbero', '1ESOD'),
(810, 'Juan', 'Cardoso Pérez', '1ESOG'),
(811, 'Yamileth', 'Cardoso Pérez', '1ESOE'),
(812, 'Alejandra', 'Carmena Caballero', '1ESOF'),
(813, 'Pau', 'Carmona Trujillo', '1ESOE'),
(814, 'Carla', 'Carrillo Guevara', '1ESOC'),
(815, 'Bruno Mateo', 'Castilla Morales', '1ESOH'),
(816, 'Darío', 'Castilla Morales', ''),
(817, 'Erick', 'Castilla Morales', '1ESOH'),
(818, 'Martín', 'Castilla Morales', '1ESOD'),
(819, 'Miguel', 'Castilla Morales', '1ESOB'),
(820, 'Roma', 'Cazesova Ruiz', '1ESOF'),
(821, 'Wasim', 'Cazesova Ruiz', '1ESOD'),
(822, 'Julia', 'Ceballos Ion', '1ESOB'),
(823, 'Cataleya', 'Cerdán López', '1ESOF'),
(824, 'Adonay', 'Chicón Ramos', '1ESOH'),
(825, 'Ayman', 'Clavero García', '1ESOH'),
(826, 'Máximo', 'Clavero García', '1ESOC'),
(827, 'Gonzalo', 'Cote Ana', '1ESOD'),
(828, 'Anta', 'Cruz Utrilla', '1ESOG'),
(829, 'Darío', 'Cruz Utrilla', '1ESOG'),
(830, 'Mario', 'Cruz Utrilla', '1ESOC'),
(831, 'Yanis', 'Dascualu Basusaga', '1ESOC'),
(832, 'Gala', 'De la Herranz Ortiz', '1ESOA'),
(833, 'José Antonio', 'De la Vega Arroyo', '1ESOD'),
(834, 'Marcos', 'De la Vega Martínez', '1ESOC'),
(835, 'Vazco Gabriel', 'De la Vega Martínez', '1ESOF'),
(836, 'Martín', 'Del Río Ros', '1ESOF'),
(837, 'Victoria', 'Díaz Morilla', '1ESOG'),
(838, 'María', 'Djebari Casado', '1ESOD'),
(839, 'Hugo', 'El Ammaoui Silla', '1ESOH'),
(840, 'Alina', 'El Bennani Candón', '1ESOA'),
(841, 'Leyre', 'El Bennani Candón', '1ESOD'),
(842, 'Lola', 'El Bennani Candón', '1ESOC'),
(843, 'Maira', 'El Jajji Rodríguez', '1ESOF'),
(844, 'Leo', 'Expósito López', '1ESOG'),
(845, 'Paloma Aylen', 'Fajardo Chuecos', '1ESOB'),
(846, 'Souhaib', 'Fernández Cano', '1ESOH'),
(847, 'Leo', 'Fernández Ferrete', '1ESOB'),
(848, 'Candela', 'Fernández López', '1ESOA'),
(849, 'Lola', 'Fernández López', '1ESOC'),
(850, 'Noe', 'Flores Jiménez', '1ESOD'),
(851, 'Rocío', 'Flores Jiménez', ''),
(852, 'Ada', 'Fratila Caro', '1ESOA'),
(853, 'Marcos', 'Gamero Moreno', '1ESOE'),
(854, 'Abril', 'Garamendi Tinoco', '1ESOA'),
(855, 'Mateo', 'Garamendi Tinoco', '1ESOC'),
(856, 'Alejandro', 'García Borrego', '1ESOA'),
(857, 'Gonzalo', 'García Borrego', '1ESOA'),
(858, 'Luis Miguel', 'García Borrego', '1ESOD'),
(859, 'María Dolores', 'García Borrego', '1ESOF'),
(860, 'Erick', 'García Franco', '1ESOE'),
(861, 'Enzo', 'García Guzmán', '1ESOG'),
(862, 'Africa', 'Garrido Guzmán', '1ESOD'),
(863, 'Olivia', 'Garzón Ranea', '1ESOF'),
(864, 'Pablo', 'Garzón Ranea', '1ESOD'),
(865, 'Roma', 'Garzón Ranea', '1ESOG'),
(866, 'Claudia', 'Gato Maldonado', '1ESOB'),
(867, 'Lylya', 'Gato Maldonado', '1ESOF'),
(868, 'Wasim', 'Giménez Martín', '1ESOF'),
(869, 'Izan', 'Gómez Membrillo', '1ESOE'),
(870, 'Pablo', 'Gómez Membrillo', ''),
(871, 'Fabiola', 'Gómez Román', '1ESOF'),
(872, 'Heng', 'González Cruz', '1ESOH'),
(873, 'Ilyas', 'González Cruz', ''),
(874, 'Frank Logan', 'González La Torre', '1ESOE'),
(875, 'Lucía', 'González Márquez', '1ESOC'),
(876, 'Martina', 'González Márquez', '1ESOE'),
(877, 'Lia', 'González Mejías', '1ESOG'),
(878, 'Carlota', 'González Sánchez', '1ESOC'),
(879, 'Fanta', 'González Sánchez', '1ESOC'),
(880, 'Marcelo', 'González Silla', '1ESOB'),
(881, 'Manuel', 'Guerra Fernández', '1ESOC'),
(882, 'Jara', 'Gusano Domínguez', '1ESOE'),
(883, 'Lidia', 'Gusano Domínguez', '1ESOE'),
(884, 'Alina', 'Herero Sbaa', '1ESOH'),
(885, 'María', 'Herero Sbaa', ''),
(886, 'Dina', 'Hernández López', '1ESOE'),
(887, 'Celia', 'Hierro González', '1ESOA'),
(888, 'Laura', 'Hierro González', '1ESOD'),
(889, 'Izan', 'Hortas Carnero', '1ESOB'),
(890, 'Victoria', 'Jordan Picazo', '1ESOA'),
(891, 'Adhara', 'Jovani Algar', '1ESOH'),
(892, 'Manuel', 'Leflet Álvarez', '1ESOA'),
(893, 'Nathan', 'Leflet Álvarez', '1ESOH'),
(894, 'Miguel', 'Leiva Fernández', ''),
(895, 'Elena', 'León Molina', '1ESOH'),
(896, 'Marta', 'León Molina', '1ESOA'),
(897, 'Fermín', 'Linares Valdés', ''),
(898, 'Francisco Bernardo', 'López Fernández', '1ESOE'),
(899, 'Gala', 'López García', ''),
(900, 'Máximo', 'López León', '1ESOH'),
(901, 'Leyre', 'Luca Salazar', '1ESOD'),
(902, 'Manuela', 'Manzano Sánchez', '1ESOG'),
(903, 'Marín', 'Marín Malia', '1ESOB'),
(904, 'Kimmy', 'Martín Lobato', '1ESOA'),
(905, 'Nathan', 'Martín Lobato', '1ESOC'),
(906, 'Patrick', 'Martín Silla', '1ESOF'),
(907, 'Luca', 'Martínez Canteero', '1ESOD'),
(908, 'Mikaela', 'Martínez Canteero', ''),
(909, 'Ilyas', 'Martínez De la Guerra', '1ESOH'),
(910, 'Mateo', 'Martínez Peralbo', '1ESOH'),
(911, 'Sonia Stefania', 'Martínez Peralbo', '1ESOB'),
(912, 'Enzo', 'Martínez Silla', '1ESOG'),
(913, 'Manuela', 'Martínez Soto', '1ESOC'),
(914, 'Olivia', 'Martínez Soto', '1ESOH'),
(915, 'Ayman', 'Merino Godrid', '1ESOB'),
(916, 'Claudio', 'Mida Altea', '1ESOA'),
(917, 'Izan', 'Montenegro Romero', '1ESOC'),
(918, 'María', 'Morano Cazorla', '1ESOF'),
(919, 'Frank Logan', 'Moreno Castillejo', '1ESOD'),
(920, 'Karla', 'Moreno Castillejo', '1ESOG'),
(921, 'Leo', 'Moreno Castillejo', '1ESOB'),
(922, 'Jimena', 'Morilla López', '1ESOD'),
(923, 'María Gracia', 'Motahir Escobar', '1ESOH'),
(924, 'Inés', 'Navarro Silla', '1ESOD'),
(925, 'Mario', 'Ndiaye Gálvez', ''),
(926, 'Mario', 'Ndiaye Gálvez', ''),
(927, 'José Luis', 'Núñez Silla', '1ESOG'),
(928, 'Olivia', 'Núñez Silla', '1ESOF'),
(929, 'Thiago', 'Núñez Silla', '1ESOC'),
(930, 'Bianca', 'Ojeda Alba', '1ESOB'),
(931, 'Marina', 'Ojeda Alba', '1ESOG'),
(932, 'Aicha', 'Ortega Cobo', '1ESOB'),
(933, 'Triana', 'Ortega Cobo', '1ESOE'),
(934, 'Carla', 'Páez González', '1ESOE'),
(935, 'Lucas', 'Paichucama Olvera', '1ESOE'),
(936, 'Irene', 'Paiva Ordiales', '1ESOH'),
(937, 'Lidia', 'Paiva Ordiales', '1ESOH'),
(938, 'Enzo', 'Páramo Díaz', ''),
(939, 'Lucía', 'Paredes Molina', '1ESOE'),
(940, 'Valentín', 'Parra Melguizo', '1ESOH'),
(941, 'Valentín', 'Parras Romero', '1ESOA'),
(942, 'Fermín', 'Pavón Jiménez', '1ESOE'),
(943, 'Dayra', 'Perales Jiménez', '1ESOD'),
(944, 'Helena', 'Pérez Astacio', '1ESOE'),
(945, 'Ángela', 'Pérez Cárdenas', ''),
(946, 'Lia', 'Pérez Jaaidi', '1ESOA'),
(947, 'Karla', 'Pérez Lerga', '1ESOC'),
(948, 'Yeray', 'Porcel Mejía', '1ESOD'),
(949, 'Leo', 'Poyato Ferreras', '1ESOC'),
(950, 'Vera', 'Poyato Ferreras', '1ESOD'),
(951, 'Inés', 'Puerta García', ''),
(952, 'Nathan', 'Puerta García', '1ESOH'),
(953, 'Marta', 'Rafik el Akri Fernández', '1ESOG'),
(954, 'Juan', 'Ramdani García', '1ESOG'),
(955, 'Haron', 'Raya Márquez', '1ESOC'),
(956, 'Miriam', 'Rivera Coronel', '1ESOB'),
(957, 'Vazco Gabriel', 'Rodríguez González', '1ESOF'),
(958, 'Vega', 'Rodríguez González', '1ESOA'),
(959, 'Zaira', 'Rodríguez Martínez', '1ESOA'),
(960, 'Dorian', 'Rodríguez Pitta', '1ESOE'),
(961, 'Valentina', 'Rodríguez Pitta', '1ESOC'),
(962, 'Álvaro', 'Rodríguez Sarmiento', '1ESOC'),
(963, 'Martina', 'Rodríguez Sarmiento', '1ESOA'),
(964, 'José Antonio', 'Rodríguez Tejada', '1ESOB'),
(965, 'Nikolai', 'Rodríguez Tejada', '1ESOD'),
(966, 'Alejandra', 'Romero Henares', '1ESOB'),
(967, 'Manuel', 'Romero Henares', '1ESOA'),
(968, 'Abril', 'Ruiz Fernández', '1ESOD'),
(969, 'Lucía', 'Ruiz Noguerol', ''),
(970, 'Darío', 'Ruiz Silla', '1ESOF'),
(971, 'Miguel Ángel', 'Russell Moyano', '1ESOG'),
(972, 'Triana', 'Russell Moyano', '1ESOG'),
(973, 'Darío Gael', 'Salas Correa', '1ESOA'),
(974, 'Antonio Manuel', 'Salas Hans', '1ESOG'),
(975, 'Belén', 'Sánchez Caballero', '1ESOE'),
(976, 'Claudia', 'Sánchez Caballero', '1ESOG'),
(977, 'Darío', 'Sánchez Caballero', '1ESOA'),
(978, 'Chloe', 'Sánchez Castilla', '1ESOA'),
(979, 'Inés', 'Sánchez Delgado', '1ESOE'),
(980, 'Rafael', 'Sánchez Molinero', '1ESOH'),
(981, 'Laura', 'Santiago Acosta', '1ESOD'),
(982, 'Darío', 'Santiago Silla', '1ESOC'),
(983, 'Laura', 'Santiago Silla', '1ESOE'),
(984, 'Martín', 'Santiago Silla', '1ESOG'),
(985, 'Daniel', 'Santos Parada', ''),
(986, 'Daniel', 'Segura Piñero', '1ESOH'),
(987, 'Álex', 'Solís Quesada', '1ESOD'),
(988, 'Candela', 'Sosa Rodríguez', '1ESOD'),
(989, 'Fatoumata Tata', 'Sosa Rodríguez', '1ESOF'),
(990, 'Yanis', 'Sosa Rodríguez', '1ESOG'),
(991, 'Enzo', 'Soumaoro Terradez', '1ESOG'),
(992, 'Rafael', 'Sousa Sánchez', ''),
(993, 'Sofía Leonarda', 'Stewart Luque', '1ESOF'),
(994, 'Jimena', 'Terrero Granados', '1ESOB'),
(995, 'López', 'Torrecillas Polanco', '1ESOE'),
(996, 'Justo', 'Torres Gómez', '1ESOB'),
(997, 'Manuel', 'Torres Gómez', '1ESOH'),
(998, 'Maira', 'Traore Mejías', '1ESOA'),
(999, 'Lucía', 'Urbaneja Basabe', '1ESOF'),
(1000, 'Safwan', 'Valentín Ramos', '1ESOC'),
(1001, 'Antonio Manuel', 'Valiente López', ''),
(1002, 'Claudia', 'Valle Suárez', '1ESOH'),
(1003, 'Ángela', 'Vargas Castrillón', '1ESOE'),
(1004, 'Javier', 'Vargas Castrillón', '1ESOB'),
(1005, 'Pablo', 'Vázquez Ibarra', '1ESOC'),
(1006, 'Candela', 'Vega Gil', '1ESOF'),
(1007, 'Pablo', 'Vega Gil', ''),
(1008, 'Martín', 'Velázquez Ruiz', ''),
(1009, 'Ayman', 'Vidal Pérez', '1ESOA'),
(1010, 'Martín', 'Vidal Pérez', '1ESOA'),
(1011, 'Lucía', 'Vieira Richardson', '1ESOD'),
(1012, 'Elsa María', 'Yepes Silla', ''),
(1013, 'Sandra', 'Yepes Silla', '1ESOD'),
(1014, 'Fabio', 'Zarza Caicedo', '1ESOF'),
(1015, '', ' ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JAVIERPARODI_grupos`
--

CREATE TABLE `JAVIERPARODI_grupos` (
  `cod_grupo` varchar(10) NOT NULL,
  `denominacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `JAVIERPARODI_grupos`
--

INSERT INTO `JAVIERPARODI_grupos` (`cod_grupo`, `denominacion`) VALUES
('', '1º de E.S.O.'),
('1ESOA', '1º de E.S.O.'),
('1ESOB', '1º de E.S.O.'),
('1ESOC', '1º de E.S.O.'),
('1ESOD', '1º de E.S.O.'),
('1ESOE', '1º de E.S.O.'),
('1ESOF', '1º de E.S.O.'),
('1ESOG', '1º de E.S.O.'),
('1ESOH', '1º de E.S.O.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JAVIERPARODI_intervenciones`
--

CREATE TABLE IF NOT EXISTS `JAVIERPARODI_intervenciones` (
  `cod_intervencion` tinyint(11) NOT NULL,
  `cod_prof` int(11) NOT NULL,
  `cod_grupo` varchar(10) NOT NULL,
  `cod_alu` int(11) NOT NULL,
  `causa` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `JAVIERPARODI_intervenciones`
--

INSERT INTO `JAVIERPARODI_intervenciones` (`cod_intervencion`, `cod_prof`, `cod_grupo`, `cod_alu`, `causa`, `tipo`, `fecha`, `descripcion`) VALUES
(1, 279, '1ESOA', 768, 'causa', 'tipo', '1994-12-22', 'descripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `JAVIERPARODI_profesores`
--

CREATE TABLE IF NOT EXISTS `JAVIERPARODI_profesores` (
  `cod_prof` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `is_jefatura` tinyint(1) NOT NULL DEFAULT 0,
  `is_orientacion` tinyint(1) NOT NULL DEFAULT 0,
  `is_tutor` tinyint(1) NOT NULL DEFAULT 0,
  `is_cotutor` tinyint(1) NOT NULL DEFAULT 0,
  `cod_grupo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `JAVIERPARODI_profesores`
--

INSERT INTO `JAVIERPARODI_profesores` (`cod_prof`, `nombre`, `apellido`, `usuario`, `clave`, `email`, `is_jefatura`, `is_orientacion`, `is_tutor`, `is_cotutor`, `cod_grupo`) VALUES
(279, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 0, 0, 0, NULL),
(280, 'Isabel', 'Aguilera Rodríguez', 'dvelmar355', '48f477c0d22a41dc68717518432c11aa', 'dvelmar355@educaand.es', 0, 0, 0, 0, NULL),
(283, 'Rocío', 'Alba Mayor', 'mvasjim931', '34855411eaafb5a243f488ffa0ec3ec1', 'mvasjim931@educaand.es', 0, 0, 0, 0, NULL),
(284, 'Rosario', 'Álvarez Gómez', 'agarzot544', '79f6da0a71ac5c4ac6a28b106ea3cb75', 'agarzot544@educaand.es', 0, 0, 0, 0, NULL),
(285, 'Míriam', 'Andrés Leal', 'pocavar262', '4a1160958b7ed98ded0ededf64432c9e', 'pocavar262@educaand.es', 0, 0, 0, 0, NULL),
(286, 'Myriam', 'Andreu Ibarra', 'aperlop686', 'ce9fa571b114ebf86d9dca1a92d72547', 'aperlop686@educaand.es', 0, 0, 0, 0, NULL),
(287, 'Nerea', 'Arman Martínez', 'mliecam995', 'b84050ec5843fe381d4dbd35daf13a21', 'mliecam995@educaand.es', 0, 0, 0, 0, NULL),
(288, 'África', 'Barrios Alonso', 'fgartor211', '56ae52dfe6769f33ebcbc683525bb2fa', 'fgartor211@educaand.es', 0, 0, 0, 0, NULL),
(289, 'Natalia', 'Benítez Cedeño', 'mlascer674', '91a2d9ca678111740587c4cd8e9b4c07', 'mlascer674@educaand.es', 0, 0, 0, 0, NULL),
(290, 'María Cinta', 'Benítez Pereira', 'aonagon573', 'cb6fd2c87c74ad3a81ac382e78396ad3', 'aonagon573@educaand.es', 0, 0, 0, 0, NULL),
(291, 'María Nuria', 'Berlanga Mena', 'mmedrio031', '36cd6df3e5c66955f293625201312613', 'mmedrio031@educaand.es', 0, 0, 0, 0, NULL),
(292, 'María Yolanda', 'Blasco Fernández', 'mframon342', '7337ed6a43b52dead7a2aba96f662622', 'mframon342@educaand.es', 0, 0, 0, 0, NULL),
(293, 'María', 'Bonilla Pérez', 'jfervic933', '14bc0285e77d03d3f2b18f1b8ab40570', 'jfervic933@educaand.es', 0, 0, 0, 0, NULL),
(294, 'María del Carmen', 'Botija García', 'jmangil316', '635a722275972473626e23c099d8de27', 'jmangil316@educaand.es', 0, 0, 0, 0, NULL),
(295, 'José Manuel', 'Brito Silla', 'jacomor297', '4b4784ff4c498753ea082bc10d2f39f1', 'jacomor297@educaand.es', 0, 0, 0, 0, NULL),
(296, 'Manuel', 'Cabrera López', 'egarlop255', '4bf43a1b261b819f5bb6fdd5ea5a8653', 'egarlop255@educaand.es', 0, 0, 0, 0, NULL),
(297, 'Marina', 'Camacho Castellano', 'jjimgra234', '46a73232d859e1a50d8d998c6cc1540b', 'jjimgra234@educaand.es', 0, 0, 0, 0, NULL),
(298, 'María Isabel', 'Cano Cobos', 'bbartor998', '5b2a1975397200fd75d91ca2d7907de5', 'bbartor998@educaand.es', 0, 0, 0, 0, NULL),
(299, 'Pablo', 'Carmona López', 'mmunviv131', '2088b5e005d30ae906dfa0ec4f00ac0e', 'mmunviv131@educaand.es', 0, 0, 0, 0, NULL),
(300, 'Marina', 'Carnerero Alonso', 'mjimlop737', '53a38ffcb29373b8b3b60512ff0a66a4', 'mjimlop737@educaand.es', 0, 0, 0, 0, NULL),
(301, 'Marina', 'Carnerero Alonso', 'imolrui690', '864c3dc8dc88c04658c709fc8e7ffd7c', 'imolrui690@educaand.es', 0, 0, 0, 0, NULL),
(302, 'Aurora', 'Carrillo Navarro', 'mmonzaf159', '844deeabb443987ee91ddf4b448e6619', 'mmonzaf159@educaand.es', 0, 0, 0, 0, NULL),
(303, 'Rut', 'Castillo Pérez', 'saracue673', 'adf686229c9d0f652f7ee922ebd53d89', 'saracue673@educaand.es', 0, 0, 0, 0, NULL),
(304, 'Rut', 'Castillo Pérez', 'agarcar489', '445de4b44d6145cec0515a58967bd096', 'agarcar489@educaand.es', 0, 0, 0, 0, NULL),
(305, 'Iván', 'Cazalla Dorantes', 'rpaltor366', 'e07231eb610fa72c3cba5c3792973bf8', 'rpaltor366@educaand.es', 0, 0, 0, 0, NULL),
(306, 'Iván', 'Cazalla Dorantes', 'frodcan412', 'a9497702cb96742161c72e08da5d6806', 'frodcan412@educaand.es', 0, 0, 0, 0, NULL),
(308, 'Paula', 'Chica Infante', 'jgarruz572', '78cf44f9d8f0894ec4c208be2661138c', 'jgarruz572@educaand.es', 0, 0, 0, 0, NULL),
(309, 'María Mónica', 'Concepción Moreno', 'jalaort138', 'f577a194b3a0063e65c35bc571ea9c47', 'jalaort138@educaand.es', 0, 0, 0, 0, NULL),
(310, 'María Mónica', 'Concepción Moreno', 'mgonmol481b', '216a0475b3f33a3ee3523b9546c8c275', 'mgonmol481b@educaand.es', 0, 0, 0, 0, NULL),
(311, 'Antonio', 'Cortejosa Ponce', 'dmarara916', '00da428ee131926ae5a52cd4a660f1ef', 'dmarara916@educaand.es', 0, 0, 0, 0, NULL),
(312, 'Antonio', 'Cortejosa Ponce', 'cmarsan407', '7fafd2bc9ec95685d67e7e8701287940', 'cmarsan407@educaand.es', 0, 0, 0, 0, NULL),
(313, 'Abigail Alejandra', 'Cortés González', 'lgramar339', 'e0692a6ee03dd8b4a395e1364ae25f47', 'lgramar339@educaand.es', 0, 0, 0, 0, NULL),
(314, 'Marie-Pier', 'De la Borbolla Muñoz', 'mjimfer842', '1a2cb93cd14667bee5887aee99bab8d4', 'mjimfer842@educaand.es', 0, 0, 0, 0, NULL),
(315, 'Agustín', 'De la Gala Martín', 'aruecas008', '36d082fc8b755463bfffb8f036925596', 'aruecas008@educaand.es', 0, 0, 0, 0, NULL),
(316, 'Rocío', 'Del Campo Lavela', 'jmarmar833', '5b6f1e1e657698f35568d7d942696206', 'jmarmar833@educaand.es', 0, 0, 0, 0, NULL),
(317, 'Rosario', 'Díaz Sarmiento', 'icarlom004', '21df7b645f029fbb59439514e25451e4', 'icarlom004@educaand.es', 0, 0, 0, 0, NULL),
(318, 'Silvia María', 'El Boukhary León', 'emancar002', '783f42977e3cee6dca018a9c9074829c', 'emancar002@educaand.es', 0, 0, 0, 0, NULL),
(319, 'Silvia María', 'El Boukhary León', 'rbaecar158', 'cf633e9221fd1e41e8ffe04b30e47021', 'rbaecar158@educaand.es', 0, 0, 0, 0, NULL),
(320, 'Juan Jesús', 'Escobar Martínez', 'fmarcal307', '2f59eaf9e178f4986dddae2a79db40ba', 'fmarcal307@educaand.es', 0, 0, 0, 0, NULL),
(321, 'Juan Jesús', 'Escobar Martínez', 'mrutper559', 'a32c5de003945222b2e4b28dd2db74bf', 'mrutper559@educaand.es', 0, 0, 0, 0, NULL),
(322, 'Laura', 'Expósito Rodríguez', 'jpaepol580', '9f10b65c0a67a7591290c30fddb7cef2', 'jpaepol580@educaand.es', 0, 0, 0, 0, NULL),
(323, 'Alicia', 'Fernández Pérez', 'jgonrui310', 'b9b11ba3b381b57a95e68bf30c6381c1', 'jgonrui310@educaand.es', 0, 0, 0, 0, NULL),
(324, 'Setefilla', 'Fernández Ríos', 'mservar976', 'acd4298163b10eba29cddf67fbea102d', 'mservar976@educaand.es', 0, 0, 0, 0, NULL),
(325, 'Adrián', 'Formanti Lezama', 'ajimram794', '7d9c60a36d81dff09902130dd89b0504', 'ajimram794@educaand.es', 0, 0, 0, 0, NULL),
(326, 'Adrián', 'Formanti Lezama', 'nmarred615', '4ca34e2357eef1aa1c3a2a8e1a572b57', 'nmarred615@educaand.es', 0, 0, 0, 0, NULL),
(327, 'María Isabel', 'Fuentes Gómez', 'eortrom202', '57ae240a7f6fcd9f011383e1a65c5371', 'eortrom202@educaand.es', 0, 0, 0, 0, NULL),
(328, 'Noelia', 'Gaona Tobaruela', 'rcarsan748', '0e01eb4ac23fd0ffffcd0105838fb0ce', 'rcarsan748@educaand.es', 0, 0, 0, 0, NULL),
(329, 'David', 'García Doblado', 'csotmor984', '679091a88d94c1bfee8eae68cf221e70', 'csotmor984@educaand.es', 0, 0, 0, 0, NULL),
(330, 'Juan Manuel', 'García Entrena', 'mgonrod333', 'a342bd68849a86424c38fb8f882f9e6d', 'mgonrod333@educaand.es', 0, 0, 0, 0, NULL),
(331, 'Arancha', 'García Martín', 'ahevgue479', '3d8769b89b32b69faa726a2092fd718a', 'ahevgue479@educaand.es', 0, 0, 0, 0, NULL),
(332, 'Rafael', 'Garrido Dueñas', 'afabnav554', '25c3ce5b1094e6d7932eb77003d8f4c1', 'afabnav554@educaand.es', 0, 0, 0, 0, NULL),
(333, 'Alejandro', 'Gilabert Lozano', 'mmoracu624', 'd68c0fab8a0dfca714fb23e3a177bf2e', 'mmoracu624@educaand.es', 0, 0, 0, 0, NULL),
(334, 'Alejandro', 'Gilabert Lozano', 'psanroq669', '019ba145549e8d2cc88af84f2d312be6', 'psanroq669@educaand.es', 0, 0, 0, 0, NULL),
(335, 'Alejandro', 'Gilabert Lozano', 'jurbmar279', '14841a6eba55bad85d6aeb2c2cd42612', 'jurbmar279@educaand.es', 0, 0, 0, 0, NULL),
(336, 'MªCarmen', 'Gómez De la Torre', 'fvarmar157', '9dcc0241220cd1058bcfb144a9741a2c', 'fvarmar157@educaand.es', 0, 0, 0, 0, NULL),
(337, 'Juan Manuel', 'Gómez Fernández', 'jrodcal303', '116ab92246e42f29c220eacf7149b288', 'jrodcal303@educaand.es', 0, 0, 0, 0, NULL),
(338, 'María Mónica', 'González Clemente', 'lcorfue426', '91d422c5a1131f642311a297821132ef', 'lcorfue426@educaand.es', 0, 0, 0, 0, NULL),
(339, 'María Mónica', 'González Clemente', 'aperval268', 'c01576f2f24c7da3af7d73b51e554240', 'aperval268@educaand.es', 0, 0, 0, 0, NULL),
(340, 'Asunción', 'González Martínez', 'ssalmol827', '3cbd12677a96e6033dccd79e14bc8332', 'ssalmol827@educaand.es', 0, 0, 0, 0, NULL),
(341, 'Dolores', 'González Pérez', 'aamasan485', 'ac98ba9910d55d8a166b311467f2b435', 'aamasan485@educaand.es', 0, 0, 0, 0, NULL),
(342, 'Denis Luis', 'González Simón', 'tgonutr297', '72fab84869a4700ed43886a72ec9fc28', 'tgonutr297@educaand.es', 0, 0, 0, 0, NULL),
(343, 'Denis Luis', 'González Simón', 'jjusher921', '51482ad8e6e45ce03cb6d189286ad094', 'jjusher921@educaand.es', 0, 0, 0, 0, NULL),
(345, 'José Manuel', 'Guerrero Múgica', 'bmarque859', '01d824b7f1da2edd4b71931f8c5e91b6', 'bmarque859@educaand.es', 0, 0, 0, 0, NULL),
(346, 'José Manuel', 'Guerrero Múgica', 'jgarmar278', '3a4151ec29f152fce0874b992f66b2be', 'jgarmar278@educaand.es', 0, 0, 0, 0, NULL),
(347, 'Soledad', 'Guillén Roldán', 'mcabpad348', 'd069a01a350ec4af0c3221ae5fff0c42', 'mcabpad348@educaand.es', 0, 0, 0, 0, NULL),
(348, 'Luca', 'Ichim Alvarado', 'fjurpon178h', '58ee86fa0f265867e6ee8af1825dc627', 'fjurpon178h@educaand.es', 0, 0, 0, 0, NULL),
(349, 'María Jessica', 'Jiménez Aguilera', 'emey120', '3d39760fab92fdf831c671a8727aed9a', 'emey120@educaand.es', 0, 0, 0, 0, NULL),
(350, 'Mariana Carolina', 'Jiménez Olmo', 'aherser211', '09fb08ed2680be9066f81cf1f8d16073', 'aherser211@educaand.es', 0, 0, 0, 0, NULL),
(351, 'Francisco Javier', 'Jurado Olalla', 'pruiara515', 'eb39dd3aff728b898f40c65ff2c6a238', 'pruiara515@educaand.es', 0, 0, 0, 0, NULL),
(352, 'Francisco Javier', 'Jurado Olalla', 'mgonser635', '3eb84905da96964fd2fc74b011b25f50', 'mgonser635@educaand.es', 0, 0, 0, 0, NULL),
(353, 'Francisco Javier', 'Jurado Olalla', 'rmolsan687', '635a0b34bd0ea1b6289fcc0c29dfab64', 'rmolsan687@educaand.es', 0, 0, 0, 0, NULL),
(354, 'Juan Carlos', 'Jurado Peña', 'pjimbon932', '219ce9f80a979135c14e8e47a6dc0d9e', 'pjimbon932@educaand.es', 0, 0, 0, 0, NULL),
(355, 'Francisco Javier', 'Lagares Martín', 'rcabgar958', 'b026ce62f8c5d10c24a70aea683c2230', 'rcabgar958@educaand.es', 0, 0, 0, 0, NULL),
(356, 'Carolina', 'Lara Muñoz', 'rpalrod739', '717f129a0cce9e70d840efa6dc6770f6', 'rpalrod739@educaand.es', 0, 0, 0, 0, NULL),
(357, 'Carolina', 'Lara Muñoz', 'arodmar577', '38cefb5b70e95064f4dd35c5fb5ab291', 'arodmar577@educaand.es', 0, 0, 0, 0, NULL),
(358, 'Carolina', 'Lara Muñoz', 'rortrub148', 'c68dca245083b9140b24bbe2a2f944e4', 'rortrub148@educaand.es', 0, 0, 0, 0, NULL),
(359, 'Miguel Ángel', 'Le Cam Pérez', 'apuemed666', '4ee6e93ef9637f2dc171931859bc0a3e', 'apuemed666@educaand.es', 0, 0, 0, 0, NULL),
(360, 'Nerea', 'Lobato Aznar', 'acomcob670', '82905edf2945f796086c443e8fff556f', 'acomcob670@educaand.es', 0, 0, 0, 0, NULL),
(361, 'María Isabel', 'Lobato Bereginal', 'callrod489', '903b9826380efcd586d3db5e792bb788', 'callrod489@educaand.es', 0, 0, 0, 0, NULL),
(362, 'María Isabel', 'Lobato Bereginal', 'jsollop116', 'ac94073f0b1f75567a756b30beaf9ce1', 'jsollop116@educaand.es', 0, 0, 0, 0, NULL),
(363, 'María Teresa', 'López Carmona', 'cloplop714', '8267a6d6a20a565638f753aa399b371d', 'cloplop714@educaand.es', 0, 0, 0, 0, NULL),
(364, 'María del Mar', 'López Porras', 'etistis492', '85ed8a9be29b2b1d0bb3a89f98a2c6ff', 'etistis492@educaand.es', 0, 0, 0, 0, NULL),
(365, 'María del Mar', 'López Porras', 'mgueara426', '4431aa973f0240c7236520b3af38706e', 'mgueara426@educaand.es', 0, 0, 0, 0, NULL),
(366, 'Marta', 'López Ramírez', 'mmunrui524', '951daf4d98409c717ac1ee7491770248', 'mmunrui524@educaand.es', 0, 0, 0, 0, NULL),
(367, 'María Ángeles', 'Márquez Rosado', 'lpergar982', '49944d4d838fbd3ca76a1d9f23eddff0', 'lpergar982@educaand.es', 0, 0, 0, 0, NULL),
(368, 'Guillermo', 'Martín Martínez', 'jcarjim716', 'd6e06d115cb34fb54b95c91b924714bb', 'jcarjim716@educaand.es', 0, 0, 0, 0, NULL),
(369, 'Verónica', 'Martín Reyes', 'malcgon649', '005e6ad644109c04fff39a7d2d444677', 'malcgon649@educaand.es', 0, 0, 0, 0, NULL),
(370, 'Nuria', 'Martínez Cortijo', 'msansan265', 'a0603672a1e193df7df9e26049509fe6', 'msansan265@educaand.es', 0, 0, 0, 0, NULL),
(371, 'Nuria', 'Martínez Cortijo', 'jrocmou173', 'a5db6cd40bb0a745da28706c54666230', 'jrocmou173@educaand.es', 0, 0, 0, 0, NULL),
(372, 'Cristobalina', 'Martínez Fernández', 'jluqser848', 'faa3a494d29e2fba97c94240cff97a67', 'jluqser848@educaand.es', 0, 0, 0, 0, NULL),
(373, 'Cristobalina', 'Martínez Fernández', 'mdommar555', '932263fecb8bf792ef0d4ae5969396b5', 'mdommar555@educaand.es', 0, 0, 0, 0, NULL),
(374, 'María Amparo', 'Martínez García', 'msangom305', '1899c003dd8f69e5382d64c25bf4b3d9', 'msangom305@educaand.es', 0, 0, 0, 0, NULL),
(375, 'Josu', 'Martínez Heredia', 'csalala714', 'ea01b1a3bc8897a01f453379f85917ed', 'csalala714@educaand.es', 0, 0, 0, 0, NULL),
(376, 'Nieves', 'Maysounave Romero', 'erodcar849', '367a7b2bd39b52c154046f48a49ceeb3', 'erodcar849@educaand.es', 0, 0, 0, 0, NULL),
(377, 'Lorena', 'Mellado Paulete', 'msolfac941', '480b8e299b8d7697334fe5f891aade26', 'msolfac941@educaand.es', 0, 0, 0, 0, NULL),
(378, 'Adolfo', 'Mendes Buades', 'pmorgon537m', 'c8e1d17d7f854c0e7ba649540c9c4723', 'pmorgon537m@educaand.es', 0, 0, 0, 0, NULL),
(379, 'María', 'Morales Arroyo', 'aruegom134', 'b0d7081a234004ae2d65e613460daeb1', 'aruegom134@educaand.es', 0, 0, 0, 0, NULL),
(380, 'José Manuel', 'Moreno Salvador', 'asotalc466', 'bd06db939afcb51a65addfd22d939082', 'asotalc466@educaand.es', 0, 0, 0, 0, NULL),
(381, 'María', 'Morillo Monge', 'arodgut547', '4669900525baf5a7b4c8a08279d8587c', 'arodgut547@educaand.es', 0, 0, 0, 0, NULL),
(382, 'Ana María', 'Morillo Sánchez', 'epensan825', 'de266334e622067ae3c1be7210bee7be', 'epensan825@educaand.es', 0, 0, 0, 0, NULL),
(383, 'Manuel', 'Muñoz Muñoz', 'fsamveg129', '46d1d317d2e05cdd4ba3f61aa8fb66d1', 'fsamveg129@educaand.es', 0, 0, 0, 0, NULL),
(384, 'Abraham', 'Navarro Sellés', 'ainssar363', '98abcd58de38939f086fda70f670fdf5', 'ainssar363@educaand.es', 0, 0, 0, 0, NULL),
(385, 'María de los Ángeles', 'Ortega Martagón', 'bmarolm784', '999b5559d597732e770005267458ef6e', 'bmarolm784@educaand.es', 0, 0, 0, 0, NULL),
(386, 'Laura', 'Ortiz Gómez', 'smarcue143', 'f7172824ad79e9c75f45a76c67fe0639', 'smarcue143@educaand.es', 0, 0, 0, 0, NULL),
(387, 'Laura', 'Ortiz Gómez', 'jmorflo717', '47d8a19eae9df92d56f62e43bde07b4b', 'jmorflo717@educaand.es', 0, 0, 0, 0, NULL),
(388, 'Alba', 'Oviedo Jiménez', 'igonfer648', '7a0b8dab30c8118d15d942e9dcd3285d', 'igonfer648@educaand.es', 0, 0, 0, 0, NULL),
(389, 'Alba', 'Oviedo Jiménez', 'jjorgom027', '38c9e5b5f4a0b64b40a6f820f4e62bd9', 'jjorgom027@educaand.es', 0, 0, 0, 0, NULL),
(390, 'Gema', 'Pardo Sánchez', 'avilmar625', 'f1fdb4eb57ceee3dff1fadc0a2b3c9a4', 'avilmar625@educaand.es', 0, 0, 0, 0, NULL),
(391, 'Bella', 'Parrado Ramiro', 'riglgav422', '8238d2ace25a34f6d686dc93bf3a2b91', 'riglgav422@educaand.es', 0, 0, 0, 0, NULL),
(392, 'Aida', 'Pereira Bernal', 'framper143', 'e92fa1ee8d8bfbc05ad4d6e2e0437e18', 'framper143@educaand.es', 0, 0, 0, 0, NULL),
(393, 'Mará Ángeles', 'Polo García', 'epoysog643', '666f6f66505c07813313eeefebfe128b', 'epoysog643@educaand.es', 0, 0, 0, 0, NULL),
(394, 'Abraham', 'Pozo Macías', 'jortsor046', 'e95cb58a4995b14a06ebc72c47e766ad', 'jortsor046@educaand.es', 0, 0, 0, 0, NULL),
(395, 'Francisco José', 'Ramírez Martín', 'etorsan182', 'bd30f115fa13d1f2d752786c9091558a', 'etorsan182@educaand.es', 0, 0, 0, 0, NULL),
(396, 'José Francisco', 'Ramírez Ramos', 'pfueort486', 'b15334dd21957f922914fc07bc6d054e', 'pfueort486@educaand.es', 0, 0, 0, 0, NULL),
(397, 'José Francisco', 'Ramírez Ramos', 'fperfer377', 'c9c55827db3be28a44b93d9e5bee8f94', 'fperfer377@educaand.es', 0, 0, 0, 0, NULL),
(398, 'José Francisco', 'Ramírez Ramos', 'mgutgar915', '972e687c757b11b886642207fbfb83f9', 'mgutgar915@educaand.es', 0, 0, 0, 0, NULL),
(399, 'María Dolores', 'Raya González', 'jmorper037', 'fbade138699b98f4baa0021e8e51ac65', 'jmorper037@educaand.es', 0, 0, 0, 0, NULL),
(400, 'María Dolores', 'Raya González', 'mmenram730', '6182075370459092544481c51eaa8983', 'mmenram730@educaand.es', 0, 0, 0, 0, NULL),
(401, 'Mónica', 'Reyes Blanco', 'cjalgir614', '8e5917a26835f2f0e047a97e54a93205', 'cjalgir614@educaand.es', 0, 0, 0, 0, NULL),
(402, 'María de Gracia', 'Rivera Fernández', 'nherrod779', 'e27294aa0ba4a59edc11b2eca5ebc5da', 'nherrod779@educaand.es', 0, 0, 0, 0, NULL),
(403, 'Cristina', 'Rodríguez Camacho', 'cgarara046', '2e1beb447eaf73a0f4920c98033a2c41', 'cgarara046@educaand.es', 0, 0, 0, 0, NULL),
(404, 'Alba', 'Rodríguez Gavilán', 'mserser020', '7b838cb61d8e6004e988b375133ae497', 'mserser020@educaand.es', 0, 0, 0, 0, NULL),
(405, 'Juan Eugenio', 'Rodríguez Silla', 'mgarnav618', 'b81cefc92ea0e7fba2dbfc9f4d5e3a62', 'mgarnav618@educaand.es', 0, 0, 0, 0, NULL),
(406, 'Juan Eugenio', 'Rodríguez Silla', 'planqui495', 'f522989824795f8667aa4707ce251cae', 'planqui495@educaand.es', 0, 0, 0, 0, NULL),
(407, 'Juan Eugenio', 'Rodríguez Silla', 'ilaslas231', 'f0ef01cc14b5040aa3958750266548cf', 'ilaslas231@educaand.es', 0, 0, 0, 0, NULL),
(408, 'Beatriz', 'Rodríguez Soriano', 'rluqtor049', 'c26e3c9eedafb708326a195215247e81', 'rluqtor049@educaand.es', 0, 0, 0, 0, NULL),
(409, 'Carmen Belén', 'Rodríguez Vigo', 'asantel687', '2b0b0ecbc3ab646cb6fcc1507ed33e56', 'asantel687@educaand.es', 0, 0, 0, 0, NULL),
(410, 'José María', 'Rosa Conejo', 'cortsan284', '9a95b794d14a79639b0802f9d05a9e0e', 'cortsan284@educaand.es', 0, 0, 0, 0, NULL),
(411, 'Julia', 'Ruiz Jiménez Panadero', 'ljimcab075', '91e498cbdf239581e5dc2a638dfee736', 'ljimcab075@educaand.es', 0, 0, 0, 0, NULL),
(412, 'Raquel', 'Ruiz Ramírez', 'msanmor150n', '3290da16b675f44053cbdf7e96e9f24b', 'msanmor150n@educaand.es', 0, 0, 0, 0, NULL),
(413, 'Laura', 'Salmerón Haro', 'ibarram411', '79fbde62bea8e93dded83aae2ecf2793', 'ibarram411@educaand.es', 0, 0, 0, 0, NULL),
(414, 'Marta', 'Sánchez García', 'mgarlor043', 'ce5bbf9374207f426e4cc33778f7c306', 'mgarlor043@educaand.es', 0, 0, 0, 0, NULL),
(415, 'María Rosario', 'Sánchez Mounard', 'ahidpoz600', '4e6d42fe440946434008a4620f1d3239', 'ahidpoz600@educaand.es', 0, 0, 0, 0, NULL),
(416, 'Lorena', 'Sánchez Muñoz', 'forbgue086', '57b9c45607fb5c7e9868c64152444efd', 'forbgue086@educaand.es', 0, 0, 0, 0, NULL),
(417, 'Carlos David', 'Segura Gallego', 'igarbla560', '3002f0f9d901d77cf7614e24b6ca95dd', 'igarbla560@educaand.es', 0, 0, 0, 0, NULL),
(418, 'Rosario', 'Serrano Castillo', 'jcabmar185s', 'b88ed09906ba9a3355c32ae610adf7dc', 'jcabmar185s@educaand.es', 0, 0, 0, 0, NULL),
(419, 'María del Carmen', 'Serrano Jiménez', 'ncamcor401', '1050de85226b71c901c297d94d9e9116', 'ncamcor401@educaand.es', 0, 0, 0, 0, NULL),
(420, 'Irene', 'Setien Lloréns', 'mmengil402', '8507ecfacac1f920e10486642b7bb272', 'mmengil402@educaand.es', 0, 0, 0, 0, NULL),
(421, 'Concepción', 'Severini Blázquez', 'mrodrue754', 'cc57d4ba7d45ff5f9146fc2ca91052b4', 'mrodrue754@educaand.es', 0, 0, 0, 0, NULL),
(422, 'Encarnación', 'Tejera Muñoz', 'icamalg931', '08ca167e8c7d324055fa1a83c9069526', 'icamalg931@educaand.es', 0, 0, 0, 0, NULL),
(423, 'Lucía', 'Torres Hernández', 'eyudtej118', 'dfd01c4681015c4ae04ff3e2816f6ca9', 'eyudtej118@educaand.es', 0, 0, 0, 0, NULL),
(424, 'María Isabel', 'Valdivia Guerrero', 'iosujim807', '4822e9e63ed4f7bc98b9b7925da0a851', 'iosujim807@educaand.es', 0, 0, 0, 0, NULL),
(425, 'María Isabel', 'Valdivia Guerrero', 'rruimor610', 'bd1e05edb7aa8f7181fa3f564b56d4d1', 'rruimor610@educaand.es', 0, 0, 0, 0, NULL),
(426, 'María Teresa', 'Vergel Plaza', 'amorrui123', '6e34f3d7bad8322760eec3ddbc095054', 'amorrui123@educaand.es', 0, 0, 0, 0, NULL),
(427, 'Erica Mariana', 'Vílchez Chacón', 'sberram848', 'e2ad907a3546d61997588a6b956fb6da', 'sberram848@educaand.es', 0, 0, 0, 0, NULL),
(428, 'Paula', 'Villegas Durán', 'nalvpab231', '3fa1dae4476706db924c0a04b713821e', 'nalvpab231@educaand.es', 0, 0, 0, 0, NULL),
(429, 'Paula', 'Villegas Durán', 'pmarval789', '723f3f4557b450f61591506d046ac762', 'pmarval789@educaand.es', 0, 0, 0, 0, NULL),
(430, 'Vanesa María', 'Villodres Alcón', 'rpiealb297', '9b4d7e23309ca8ca3f19b8a912eecbb4', 'rpiealb297@educaand.es', 0, 0, 0, 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `JAVIERPARODI_alumnos`
--
ALTER TABLE `JAVIERPARODI_alumnos`
  ADD PRIMARY KEY (`cod_alu`),
  ADD KEY `cod_grupo` (`cod_grupo`);

--
-- Indices de la tabla `JAVIERPARODI_grupos`
--
ALTER TABLE `JAVIERPARODI_grupos`
  ADD PRIMARY KEY (`cod_grupo`);

--
-- Indices de la tabla `JAVIERPARODI_intervenciones`
--
ALTER TABLE `JAVIERPARODI_intervenciones`
  ADD PRIMARY KEY (`cod_intervencion`),
  ADD KEY `cod_prof` (`cod_prof`,`cod_grupo`),
  ADD KEY `cod_grupo` (`cod_grupo`),
  ADD KEY `cod_alu` (`cod_alu`);

--
-- Indices de la tabla `JAVIERPARODI_profesores`
--
ALTER TABLE `JAVIERPARODI_profesores`
  ADD PRIMARY KEY (`cod_prof`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD UNIQUE KEY `usuario_4` (`usuario`),
  ADD UNIQUE KEY `usuario_6` (`usuario`),
  ADD KEY `usuario_3` (`usuario`),
  ADD KEY `usuario_5` (`usuario`),
  ADD KEY `cod_grupo` (`cod_grupo`),
  ADD KEY `cod_grupo_2` (`cod_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `JAVIERPARODI_alumnos`
--
ALTER TABLE `JAVIERPARODI_alumnos`
  MODIFY `cod_alu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT de la tabla `JAVIERPARODI_intervenciones`
--
ALTER TABLE `JAVIERPARODI_intervenciones`
  MODIFY `cod_intervencion` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `JAVIERPARODI_profesores`
--
ALTER TABLE `JAVIERPARODI_profesores`
  MODIFY `cod_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `JAVIERPARODI_alumnos`
--
ALTER TABLE `JAVIERPARODI_alumnos`
  ADD CONSTRAINT `JAVIERPARODI_alumnos_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `JAVIERPARODI_grupos` (`cod_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `JAVIERPARODI_intervenciones`
--
ALTER TABLE `JAVIERPARODI_intervenciones`
  ADD CONSTRAINT `JAVIERPARODI_intervenciones_ibfk_2` FOREIGN KEY (`cod_grupo`) REFERENCES `JAVIERPARODI_grupos` (`cod_grupo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `JAVIERPARODI_intervenciones_ibfk_3` FOREIGN KEY (`cod_alu`) REFERENCES `JAVIERPARODI_alumnos` (`cod_alu`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `JAVIERPARODI_intervenciones_ibfk_4` FOREIGN KEY (`cod_prof`) REFERENCES `JAVIERPARODI_profesores` (`cod_prof`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `JAVIERPARODI_profesores`
--
ALTER TABLE `JAVIERPARODI_profesores`
  ADD CONSTRAINT `JAVIERPARODI_profesores_ibfk_1` FOREIGN KEY (`cod_grupo`) REFERENCES `JAVIERPARODI_grupos` (`cod_grupo`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
