-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2017 a las 23:48:39
-- Versión del servidor: 5.7.20-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.25-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notnull`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `patente` varchar(255) NOT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id`, `patente`, `marca`, `modelo`, `id_Usuario`) VALUES
(1, 'OKK-704', 'Renault', 'Clio', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE `establecimiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `telefono` int(12) NOT NULL,
  `precio_hora` int(11) DEFAULT NULL,
  `precio_estadia` int(11) DEFAULT NULL,
  `abierto_desde` time DEFAULT NULL,
  `abierto_hasta` time DEFAULT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `coordenadas` point DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`id`, `nombre`, `direccion`, `provincia`, `localidad`, `telefono`, `precio_hora`, `precio_estadia`, `abierto_desde`, `abierto_hasta`, `lat`, `lng`, `coordenadas`) VALUES
(4, 'unaj', 'calchaqui 6200', 'Buenos Aires', 'Florencio Varela', 42312341, 100, 1000, '08:00:00', '23:00:00', '-34.7751535', '-58.26789550000001', NULL),
(5, 'Hospital el Cruce', 'calchaqui 5401', 'Buenos Aires', 'Florencio Varela', 42312341, 120, 1200, '24:00:00', '00:00:00', '-34.7710021', '-58.26978959999997', NULL),
(6, 'Estacionamiento Lavalle', ' Lavalle 677', 'Buenos Aires', 'Quilmes', 42312341, 120, 1200, '24:00:00', '00:00:00', '-34.7234179', '-58.25645500000002', NULL),
(7, 'Estacionamiento Privado el placer', 'Avenida La Plata 3402', 'Buenos Aires', 'Quilmes', 42312341, 50, 500, '24:00:00', '00:00:00', '-34.7497322', '-58.26868890000003', NULL),
(8, 'Estacionamiento la 147', ' Calle 147 1341-1367', 'Buenos Aires', 'Berazategui', 42312341, 40, 400, '24:00:00', '00:00:00', '-34.7619259', '-58.211047699999995', NULL),
(9, 'Canopus As', ' Pres. José Evaristo Uriburu 1054', 'Buenos Aires', 'Florencio Varela', 42312341, 70, 700, '24:00:00', '00:00:00', '-34.7882288', '-58.28484370000001', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `codigo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id`, `estado`, `codigo`) VALUES
(1, 0, 'cod5a1996468f1dd'),
(2, 0, 'cod5a1996470cd3d'),
(3, 0, 'cod5a199647392d3'),
(4, 0, 'cod5a199647521a4'),
(5, 0, 'cod5a1996475a525'),
(6, 0, 'cod5a199647627f1'),
(7, 0, 'cod5a1996476d5dc'),
(8, 0, 'cod5a1996477afb9'),
(9, 0, 'cod5a199647888a1'),
(10, 0, 'cod5a199647937a4'),
(11, 0, 'cod5a1996479ba6e'),
(12, 0, 'cod5a199647a689a'),
(13, 0, 'cod5a19965a318cb'),
(14, 0, 'cod5a19965a47902'),
(15, 0, 'cod5a19965a5a9e7'),
(16, 0, 'cod5a19965a75eb7'),
(17, 0, 'cod5a19965a8bacc'),
(18, 0, 'cod5a19965a96986'),
(19, 0, 'cod5a19965aa496a'),
(20, 0, 'cod5a19965abc70d'),
(21, 0, 'cod5a19965ad606f'),
(22, 0, 'cod5a19965af13fd'),
(23, 0, 'cod5a19965b07e01'),
(24, 0, 'cod5a19965b12bfb'),
(25, 0, 'cod5a19965b1da21'),
(26, 0, 'cod5a19965b28846'),
(27, 0, 'cod5a19965b33657'),
(28, 0, 'cod5a199663d3f5e'),
(29, 0, 'cod5a199663e7e2d'),
(30, 0, 'cod5a199664097cd'),
(31, 0, 'cod5a1996641495b'),
(32, 0, 'cod5a1996641f766'),
(33, 0, 'cod5a1996642acf0'),
(34, 0, 'cod5a19966435b08'),
(35, 0, 'cod5a199664408b2'),
(36, 0, 'cod5a1996644b6c0'),
(37, 0, 'cod5a19966456504'),
(38, 0, 'cod5a199664612c0'),
(39, 0, 'cod5a1996646c13c'),
(40, 0, 'cod5a19966476f82'),
(41, 0, 'cod5a19966481d3a'),
(42, 0, 'cod5a1996648cba8'),
(43, 0, 'cod5a19966497a29'),
(44, 0, 'cod5a199664d918c'),
(45, 0, 'cod5a199664f2e9c'),
(46, 0, 'cod5a1996650dd63'),
(47, 0, 'cod5a1996651b63c'),
(48, 0, 'cod5a1996652bd2f'),
(49, 0, 'cod5a19966554914'),
(50, 0, 'cod5a1996655f88c'),
(51, 0, 'cod5a1996656a70b'),
(52, 0, 'cod5a199665754c4'),
(53, 0, 'cod5a199665802f2'),
(54, 0, 'cod5a1996658b22b'),
(55, 0, 'cod5a19966595ef9'),
(56, 0, 'cod5a199665a0d9a'),
(57, 0, 'cod5a199665bc04d'),
(58, 1, 'cod5a19966c5ee10'),
(59, 0, 'cod5a19966c7086d'),
(60, 0, 'cod5a19966c86406'),
(61, 0, 'cod5a19966c91545'),
(62, 0, 'cod5a19966c9c327'),
(63, 0, 'cod5a1996772b6d2'),
(64, 0, 'cod5a1996773cd4e'),
(65, 0, 'cod5a19967755c53'),
(66, 0, 'cod5a19967760cc2'),
(67, 0, 'cod5a1996776ba91'),
(68, 0, 'cod5a199677768c7'),
(69, 0, 'cod5a19967781723'),
(70, 0, 'cod5a1996778c521'),
(71, 0, 'cod5a1996779738f'),
(72, 0, 'cod5a199677afa54'),
(73, 0, 'cod5a199677c8213'),
(74, 0, 'cod5a199677d3058'),
(75, 0, 'cod5a199677dde12'),
(76, 0, 'cod5a199677e8c48'),
(77, 0, 'cod5a199677f3a52'),
(78, 0, 'cod5a1996780a615'),
(79, 0, 'cod5a1996781548f'),
(80, 0, 'cod5a1996782033b'),
(81, 0, 'cod5a1996782b0ee'),
(82, 0, 'cod5a19967835f2b'),
(83, 0, 'cod5a19967840d36'),
(84, 0, 'cod5a1996784bb5f'),
(85, 0, 'cod5a19967856935'),
(86, 0, 'cod5a1996786175c'),
(87, 0, 'cod5a1996786c56e'),
(88, 0, 'cod5a199678773f4'),
(89, 0, 'cod5a19967882283'),
(90, 0, 'cod5a1996788d097'),
(91, 0, 'cod5a19967897e62'),
(92, 0, 'cod5a199678a83a7'),
(93, 0, 'cod5a199678e6004'),
(94, 0, 'cod5a199679034b6'),
(95, 0, 'cod5a19967910dc8'),
(96, 0, 'cod5a1996791e725'),
(97, 0, 'cod5a19967926a1e'),
(98, 0, 'cod5a199679317e2'),
(99, 0, 'cod5a1996793c69f'),
(100, 0, 'cod5a199679474f1'),
(101, 0, 'cod5a19967954e57'),
(102, 0, 'cod5a19967962752'),
(103, 0, 'cod5a1996796d5bd'),
(104, 0, 'cod5a199679783d0'),
(105, 0, 'cod5a199679839a3'),
(106, 0, 'cod5a1996798e80f'),
(107, 0, 'cod5a199679a6fc0'),
(108, 0, 'cod5a199679c7957'),
(109, 0, 'cod5a199679d278b'),
(110, 0, 'cod5a199679dd603'),
(111, 0, 'cod5a199679e842f'),
(112, 0, 'cod5a199679f322d'),
(113, 0, 'cod5a19967a09d7a'),
(114, 0, 'cod5a19967a14bb8'),
(115, 0, 'cod5a19967a1f990'),
(116, 0, 'cod5a19967a2a7d2'),
(117, 0, 'cod5a1996867859b'),
(118, 0, 'cod5a19968686a1d'),
(119, 0, 'cod5a1996869f152'),
(120, 0, 'cod5a199686aa276'),
(121, 0, 'cod5a199686b5069'),
(122, 0, 'cod5a199686bfeb1'),
(123, 0, 'cod5a199686cacaf'),
(124, 0, 'cod5a199686d5aee'),
(125, 0, 'cod5a199686e092d'),
(126, 0, 'cod5a199686eb73d'),
(127, 0, 'cod5a19968702b1c'),
(128, 0, 'cod5a1996870d855'),
(129, 0, 'cod5a199687186a2'),
(130, 0, 'cod5a19968723503'),
(131, 0, 'cod5a1996872e35d'),
(132, 0, 'cod5a1996874ecf4'),
(133, 0, 'cod5a19968759b67'),
(134, 0, 'cod5a1996876499f'),
(135, 0, 'cod5a1996876f7e2'),
(136, 0, 'cod5a1996877a562'),
(137, 0, 'cod5a19968785416'),
(138, 0, 'cod5a1996879028e'),
(139, 0, 'cod5a19968798533'),
(140, 0, 'cod5a199687a07e4'),
(141, 0, 'cod5a199687bba42'),
(142, 0, 'cod5a199687cea1f'),
(143, 0, 'cod5a199687d999a'),
(144, 0, 'cod5a199687e4743'),
(145, 0, 'cod5a199687ef584'),
(146, 0, 'cod5a1996880619a'),
(147, 0, 'cod5a19968810f5a'),
(148, 0, 'cod5a1996881e923'),
(149, 0, 'cod5a19968829698'),
(150, 0, 'cod5a19968834510'),
(151, 0, 'cod5a1996883f330'),
(152, 0, 'cod5a1996884a151'),
(153, 0, 'cod5a19968857b22'),
(154, 0, 'cod5a199688628af'),
(155, 0, 'cod5a1996886d6ce'),
(156, 0, 'cod5a19968878587'),
(157, 0, 'cod5a19968883339'),
(158, 0, 'cod5a1996888e196'),
(159, 0, 'cod5a19968898fc4'),
(160, 0, 'cod5a199688a3d6f'),
(161, 0, 'cod5a199688c4814'),
(162, 0, 'cod5a199688cf5b8'),
(163, 0, 'cod5a199688da49b'),
(164, 0, 'cod5a199688e52a0'),
(165, 0, 'cod5a199688f007a'),
(166, 0, 'cod5a19968906ca5'),
(167, 0, 'cod5a19968911aa6'),
(168, 0, 'cod5a1996891c82c'),
(169, 0, 'cod5a199689276ad'),
(170, 0, 'cod5a1996893250b'),
(171, 0, 'cod5a1996893d26b'),
(172, 0, 'cod5a199689480d4'),
(173, 0, 'cod5a19968952f43'),
(174, 0, 'cod5a1996895dd45'),
(175, 0, 'cod5a19968968bda'),
(176, 0, 'cod5a199689739d2'),
(177, 0, 'cod5a1996897e776'),
(178, 0, 'cod5a199689872dd'),
(179, 0, 'cod5a199689920a2'),
(180, 0, 'cod5a1996899cea3'),
(181, 0, 'cod5a199689a7ca8'),
(182, 0, 'cod5a199689c86d3'),
(183, 0, 'cod5a199689d6090'),
(184, 0, 'cod5a199689e39d7'),
(185, 0, 'cod5a199689ee827'),
(186, 0, 'cod5a19968a05415'),
(187, 0, 'cod5a19968a10205'),
(188, 0, 'cod5a19968a1b097'),
(189, 0, 'cod5a19968a28961'),
(190, 0, 'cod5a19968a36314'),
(191, 0, 'cod5a19968a43c2b'),
(192, 0, 'cod5a19968a4bf4e'),
(193, 0, 'cod5a19968a54275'),
(194, 0, 'cod5a19968a5c525'),
(195, 0, 'cod5a19968a69e39'),
(196, 0, 'cod5a19968a77865'),
(197, 0, 'cod5a19968a82584'),
(198, 0, 'cod5a19968a8d438'),
(199, 0, 'cod5a19968aab379'),
(200, 0, 'cod5a19968ad9674'),
(201, 0, 'cod5a19968ae4493'),
(202, 0, 'cod5a19968aef274'),
(203, 0, 'cod5a19968b05e1a'),
(204, 0, 'cod5a19968b10c5c'),
(205, 0, 'cod5a19968b1ba5d'),
(206, 0, 'cod5a19968b268e4'),
(207, 0, 'cod5a19968b316b8'),
(208, 0, 'cod5a19968b3c5ac'),
(209, 0, 'cod5a19968b49e26'),
(210, 0, 'cod5a19968b5a3b2'),
(211, 0, 'cod5a19968b653f9'),
(212, 0, 'cod5a19968b70107'),
(213, 0, 'cod5a19968b7af20'),
(214, 0, 'cod5a19968b8b5ae'),
(215, 0, 'cod5a19968b9640e'),
(216, 0, 'cod5a19968ba11cd'),
(217, 0, 'cod5a19df401aef1'),
(218, 0, 'cod5a19df5996f69'),
(219, 0, 'cod5a19df59ae84b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_establecimiento`
--

CREATE TABLE `lugar_establecimiento` (
  `id` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugar_establecimiento`
--

INSERT INTO `lugar_establecimiento` (`id`, `id_establecimiento`, `id_lugar`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 4, 5),
(6, 4, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 4, 10),
(11, 4, 11),
(12, 4, 12),
(13, 5, 13),
(14, 5, 14),
(15, 5, 15),
(16, 5, 16),
(17, 5, 17),
(18, 5, 18),
(19, 5, 19),
(20, 5, 20),
(21, 5, 21),
(22, 5, 22),
(23, 5, 23),
(24, 5, 24),
(25, 5, 25),
(26, 5, 26),
(27, 5, 27),
(28, 6, 28),
(29, 6, 29),
(30, 6, 30),
(31, 6, 31),
(32, 6, 32),
(33, 6, 33),
(34, 6, 34),
(35, 6, 35),
(36, 6, 36),
(37, 6, 37),
(38, 6, 38),
(39, 6, 39),
(40, 6, 40),
(41, 6, 41),
(42, 6, 42),
(43, 6, 43),
(44, 6, 44),
(45, 6, 45),
(46, 6, 46),
(47, 6, 47),
(48, 6, 48),
(49, 6, 49),
(50, 6, 50),
(51, 6, 51),
(52, 6, 52),
(53, 6, 53),
(54, 6, 54),
(55, 6, 55),
(56, 6, 56),
(57, 6, 57),
(58, 7, 58),
(59, 7, 59),
(60, 7, 60),
(61, 7, 61),
(62, 7, 62),
(63, 8, 63),
(64, 8, 64),
(65, 8, 65),
(66, 8, 66),
(67, 8, 67),
(68, 8, 68),
(69, 8, 69),
(70, 8, 70),
(71, 8, 71),
(72, 8, 72),
(73, 8, 73),
(74, 8, 74),
(75, 8, 75),
(76, 8, 76),
(77, 8, 77),
(78, 8, 78),
(79, 8, 79),
(80, 8, 80),
(81, 8, 81),
(82, 8, 82),
(83, 8, 83),
(84, 8, 84),
(85, 8, 85),
(86, 8, 86),
(87, 8, 87),
(88, 8, 88),
(89, 8, 89),
(90, 8, 90),
(91, 8, 91),
(92, 8, 92),
(93, 8, 93),
(94, 8, 94),
(95, 8, 95),
(96, 8, 96),
(97, 8, 97),
(98, 8, 98),
(99, 8, 99),
(100, 8, 100),
(101, 8, 101),
(102, 8, 102),
(103, 8, 103),
(104, 8, 104),
(105, 8, 105),
(106, 8, 106),
(107, 8, 107),
(108, 8, 108),
(109, 8, 109),
(110, 8, 110),
(111, 8, 111),
(112, 8, 112),
(113, 8, 113),
(114, 8, 114),
(115, 8, 115),
(116, 8, 116),
(117, 9, 117),
(118, 9, 118),
(119, 9, 119),
(120, 9, 120),
(121, 9, 121),
(122, 9, 122),
(123, 9, 123),
(124, 9, 124),
(125, 9, 125),
(126, 9, 126),
(127, 9, 127),
(128, 9, 128),
(129, 9, 129),
(130, 9, 130),
(131, 9, 131),
(132, 9, 132),
(133, 9, 133),
(134, 9, 134),
(135, 9, 135),
(136, 9, 136),
(137, 9, 137),
(138, 9, 138),
(139, 9, 139),
(140, 9, 140),
(141, 9, 141),
(142, 9, 142),
(143, 9, 143),
(144, 9, 144),
(145, 9, 145),
(146, 9, 146),
(147, 9, 147),
(148, 9, 148),
(149, 9, 149),
(150, 9, 150),
(151, 9, 151),
(152, 9, 152),
(153, 9, 153),
(154, 9, 154),
(155, 9, 155),
(156, 9, 156),
(157, 9, 157),
(158, 9, 158),
(159, 9, 159),
(160, 9, 160),
(161, 9, 161),
(162, 9, 162),
(163, 9, 163),
(164, 9, 164),
(165, 9, 165),
(166, 9, 166),
(167, 9, 167),
(168, 9, 168),
(169, 9, 169),
(170, 9, 170),
(171, 9, 171),
(172, 9, 172),
(173, 9, 173),
(174, 9, 174),
(175, 9, 175),
(176, 9, 176),
(177, 9, 177),
(178, 9, 178),
(179, 9, 179),
(180, 9, 180),
(181, 9, 181),
(182, 9, 182),
(183, 9, 183),
(184, 9, 184),
(185, 9, 185),
(186, 9, 186),
(187, 9, 187),
(188, 9, 188),
(189, 9, 189),
(190, 9, 190),
(191, 9, 191),
(192, 9, 192),
(193, 9, 193),
(194, 9, 194),
(195, 9, 195),
(196, 9, 196),
(197, 9, 197),
(198, 9, 198),
(199, 9, 199),
(200, 9, 200),
(201, 9, 201),
(202, 9, 202),
(203, 9, 203),
(204, 9, 204),
(205, 9, 205),
(206, 9, 206),
(207, 9, 207),
(208, 9, 208),
(209, 9, 209),
(210, 9, 210),
(211, 9, 211),
(212, 9, 212),
(213, 9, 213),
(214, 9, 214),
(215, 9, 215),
(216, 9, 216),
(217, 6, 217),
(218, 6, 218),
(219, 6, 219);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_auto` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL,
  `fecha_desde` varchar(20) NOT NULL,
  `fecha_hasta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `id_usuario`, `id_auto`, `id_lugar`, `fecha_desde`, `fecha_hasta`) VALUES
(25, NULL, 1, 38, '20170101000000', '20170914135500'),
(26, 7, 1, 32, '20170101000000', '20170914135500'),
(27, NULL, 1, 30, '20170101000000', '20170914135500'),
(28, 7, 1, 33, '20170101000000', '20170914135500'),
(29, NULL, 1, 34, '20170101000000', '20170914135500'),
(40, NULL, 1, 55, '20170101000000', '0'),
(41, NULL, 1, 39, '20170101000000', '0'),
(42, NULL, 1, 44, '20170101000000', '0'),
(43, 7, 1, 29, '20170101000000', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `roles` longtext NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `roles`, `password`, `nombre`, `apellido`, `e_mail`, `telefono`, `is_active`) VALUES
(7, 'FedeAdm', 'ROLE_USER', '$2y$13$wmXGbtQ/4etXYz24xvM02.I.nbGEmz69E57.hEUaEPOCNxC22Azje', 'Fede', 'Nevado', 'Federico.Nevado@gmail.com', '11010101010', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_establecimiento`
--

CREATE TABLE `usuario_establecimiento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_establecimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patente` (`patente`),
  ADD KEY `usuario` (`id_Usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugar_establecimiento`
--
ALTER TABLE `lugar_establecimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_establecimiento` (`id_establecimiento`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_auto` (`id_auto`),
  ADD KEY `id_lugar` (`id_lugar`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_establecimiento`
--
ALTER TABLE `usuario_establecimiento`
  ADD PRIMARY KEY (`id_usuario`,`id_establecimiento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_establecimiento` (`id_establecimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT de la tabla `lugar_establecimiento`
--
ALTER TABLE `lugar_establecimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `FK_66BA25FA334520B1` FOREIGN KEY (`id_Usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `lugar_establecimiento`
--
ALTER TABLE `lugar_establecimiento`
  ADD CONSTRAINT `lugar_establecimiento_ibfk_1` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id`),
  ADD CONSTRAINT `lugar_establecimiento_ibfk_2` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `Reserva_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reserva_ibfk_2` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_establecimiento`
--
ALTER TABLE `usuario_establecimiento`
  ADD CONSTRAINT `usuario_establecimiento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `usuario_establecimiento_ibfk_2` FOREIGN KEY (`id_establecimiento`) REFERENCES `establecimiento` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
