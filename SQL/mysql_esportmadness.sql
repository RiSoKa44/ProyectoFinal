-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: proxysql-01.dd.scip.local
-- Tiempo de generación: 03-06-2020 a las 21:13:56
-- Versión del servidor: 10.4.13-MariaDB-1:10.4.13+maria~buster
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ddb148915`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entrenadores`
--

CREATE TABLE `Entrenadores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Equipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Entrenadores`
--

INSERT INTO `Entrenadores` (`ID`, `Nombre`, `Imagen`, `Equipo`) VALUES
(1, 'Youngbuck', 'league_of_legends_lec_equipos_excel_coach_youngbuck.png', 1),
(2, 'Mithy', 'league_of_legends_lec_equipos_fnatic_coach_mithy.png', 2),
(3, 'Grabbz', 'league_of_legends_lec_equipos_g2_coach_grabbz.png', 3),
(4, 'Mac', 'league_of_legends_lec_equipos_madlions_coach_mac.png', 4),
(5, 'Jandro', 'league_of_legends_lec_equipos_misfits_coach_jandro.png', 5),
(6, 'Guilhoto', 'league_of_legends_lec_equipos_origen_coach_guilhoto.png', 6),
(7, 'Fredy122', 'league_of_legends_lec_equipos_rogue_coach_fredy122.png', 7),
(8, 'Dylan Falco', 'league_of_legends_lec_equipos_schalke04_coach_dylan_falco.png', 8),
(9, 'Unlimited', 'league_of_legends_lec_equipos_skgaming_coach_unlimited.png', 9),
(10, 'Duke', 'league_of_legends_lec_equipos_vitality_coach_duke.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE `Equipos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Actual_Campeon` tinyint(1) NOT NULL,
  `ID_Liga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Equipos`
--

INSERT INTO `Equipos` (`ID`, `Nombre`, `Logo`, `Actual_Campeon`, `ID_Liga`) VALUES
(1, 'Excel Esports', 'league_of_legends_lec_equipos_excel_cover_image.png', 0, 2),
(2, 'Fnatic', 'league_of_legends_lec_equipos_fnatic_cover_image.png', 0, 2),
(3, 'G2', 'league_of_legends_lec_equipos_g2_cover_image.png', 1, 2),
(4, 'MadLions', 'league_of_legends_lec_equipos_madlions_cover_image.png', 0, 2),
(5, 'Misfits', 'league_of_legends_lec_equipos_misfits_cover_image.png', 0, 2),
(6, 'Origen', 'league_of_legends_lec_equipos_origen_cover_image.png', 0, 2),
(7, 'Rouge', 'league_of_legends_lec_equipos_rouge_cover_image.png', 0, 2),
(8, 'Schalke04', 'league_of_legends_lec_equipos_shalke04_cover_image.png', 0, 2),
(9, 'SK Gaming', 'league_of_legends_lec_equipos_skgaming_cover_image.png', 0, 2),
(10, 'Vitality', 'league_of_legends_lec_equipos_vitality_cover_image.png', 0, 2),
(12, 'T1', 'league_of_legends_lec_equipos_sktt1_cover_image.png', 0, 1),
(14, 'DragonX', 'league_of_legends_lec_equipos_dragonx_cover_image.png', 0, 1),
(15, 'KT Rolster', 'league_of_legends_lec_equipos_ktrolster_cover_image.png', 0, 1),
(16, 'Africa Freecs', 'league_of_legends_lec_equipos_afreecafreecs_cover_image.png', 0, 1),
(17, 'Invictus Gaming', 'league_of_legends_lec_equipos_invictusgaming_cover_image.png', 1, 3),
(18, 'Fun Plus Phoenix', 'league_of_legends_lec_equipos_fpx_cover_image.png', 0, 3),
(19, 'Royal Never Give up', 'league_of_legends_lec_equipos_rng_cover_image.png', 0, 3),
(20, 'Mad Lions Madrid', 'league_of_legends_lec_equipos_madlionsmadrid_cover_image.png', 0, 4),
(21, 'Vodafone Giants', 'league_of_legends_lec_equipos_giants_cover_image.png', 1, 4),
(22, 'Movistar Riders', 'league_of_legends_lec_equipos_movistarriders_cover_image.png', 0, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Juegos`
--

CREATE TABLE `Juegos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Plataforma` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Juegos`
--

INSERT INTO `Juegos` (`ID`, `Nombre`, `Imagen`, `Plataforma`) VALUES
(3, 'League of Legends', 'league_of_legends_cover_image.jpeg', 'PC'),
(4, 'Counter Strike', 'csgo_cover_image.jpeg', 'PC'),
(5, 'Clash Royale', 'clash_royale_cover_image.jpeg', 'Móvil'),
(6, 'Teamfight Tactics', 'tft_cover_image.jpeg', 'PC'),
(7, 'Brawl Stars', 'brawl_stars_cover_image.jpeg', 'Móvil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Jugador`
--

CREATE TABLE `Jugador` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Rol` varchar(10) NOT NULL,
  `Equipo` int(11) NOT NULL,
  `Liga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Jugador`
--

INSERT INTO `Jugador` (`ID`, `Nombre`, `Imagen`, `Rol`, `Equipo`, `Liga`) VALUES
(1, 'Wunder', 'league_of_legends_lec_equipos_g2_player_wunder.png', 'Top', 3, 2),
(2, 'Jankos', 'league_of_legends_lec_equipos_g2_player_jankos.png', 'Jungla', 3, 2),
(3, 'Perkz', 'league_of_legends_lec_equipos_g2_player_perkz.png', 'Mid', 3, 2),
(4, 'Caps', 'league_of_legends_lec_equipos_g2_player_caps.png', 'Adc', 3, 2),
(5, 'Mikyx', 'league_of_legends_lec_equipos_g2_player_mikyx.png', 'Supp', 3, 2),
(6, 'Bwipo', 'league_of_legends_lec_equipos_fnatic_player_bwipo.png', 'Top', 2, 2),
(7, 'Selfmade', 'league_of_legends_lec_equipos_fnatic_player_selfmade.png', 'Jungla', 2, 2),
(8, 'Nemesis', 'league_of_legends_lec_equipos_fnatic_player_nemesis.png', 'Mid', 2, 2),
(9, 'Rekkles', 'league_of_legends_lec_equipos_fnatic_player_rekkles.png', 'Adc', 2, 2),
(10, 'Hylissang', 'league_of_legends_lec_equipos_fnatic_player_hylissang.png', 'Supp', 2, 2),
(11, 'Send0o', 'league_of_legends_lec_equipos_excel_player_send0o.png', 'Top', 1, 2),
(12, 'Caedrel', 'league_of_legends_lec_equipos_excel_player_caedrel.png', 'Jungla', 1, 2),
(13, 'Special', 'league_of_legends_lec_equipos_excel_player_special.png', 'Mid', 1, 2),
(14, 'Deadly', 'league_of_legends_lec_equipos_excel_player_deadly.png', 'Adc', 1, 2),
(15, 'Kasing', 'league_of_legends_lec_equipos_excel_player_kasing.png', 'Supp', 1, 2),
(16, 'Orome', 'league_of_legends_lec_equipos_madlions_player_orome.png', 'Top', 4, 2),
(17, 'Shad0w', 'league_of_legends_lec_equipos_madlions_player_shad0w.png', 'Jungla', 4, 2),
(18, 'Humanoid', 'league_of_legends_lec_equipos_madlions_player_humanoid.png', 'Mid', 4, 2),
(19, 'Carzzy', 'league_of_legends_lec_equipos_madlions_player_carzzy.png', 'Adc', 4, 2),
(20, 'Kaiser', 'league_of_legends_lec_equipos_madlions_player_kaiser.png', 'Supp', 4, 2),
(21, 'Dan Dan', 'league_of_legends_lec_equipos_misfits_player_dandan.png', 'Top', 5, 2),
(22, 'Razork', 'league_of_legends_lec_equipos_misfits_player_razork.png', 'Jungla', 5, 2),
(23, 'Febiven', 'league_of_legends_lec_equipos_misfits_player_febiven.png', 'Mid', 5, 2),
(24, 'Bvoy', 'league_of_legends_lec_equipos_misfits_player_bvoy.png', 'Adc', 5, 2),
(25, 'Denyk', 'league_of_legends_lec_equipos_misfits_player_denyk.png', 'Supp', 5, 2),
(26, 'Alphari', 'league_of_legends_lec_equipos_origen_player_alphari.png', 'Top', 6, 2),
(27, 'Xerxe', 'league_of_legends_lec_equipos_origen_player_xerxe.png', 'Jungla', 6, 2),
(28, 'Nukeduck', 'league_of_legends_lec_equipos_origen_player_nukeduck.png', 'Mid', 6, 2),
(29, 'Upset', 'league_of_legends_lec_equipos_origen_player_upset.png', 'Adc', 6, 2),
(30, 'Destiny', 'league_of_legends_lec_equipos_origen_player_destiny.png', 'Supp', 6, 2),
(31, 'Finn', 'league_of_legends_lec_equipos_rogue_player_finn.png', 'Top', 7, 2),
(32, 'Inspired', 'league_of_legends_lec_equipos_rogue_player_inspired.png', 'Jungla', 7, 2),
(33, 'Larssen', 'league_of_legends_lec_equipos_rogue_player_larssen.png', 'Mid', 7, 2),
(34, 'Hans sama', 'league_of_legends_lec_equipos_rogue_player_hanssama.png', 'Adc', 7, 2),
(35, 'Vander', 'league_of_legends_lec_equipos_rogue_player_vander.png', 'Supp', 7, 2),
(36, 'Odoamne', 'league_of_legends_lec_equipos_schalke04_player_odoamne.png', 'Top', 8, 2),
(37, 'Gilius', 'league_of_legends_lec_equipos_schalke04_player_gilius.png', 'Jungla', 8, 2),
(38, 'Abbedagge', 'league_of_legends_lec_equipos_schalke04_player_abbedagge.png', 'Mid', 8, 2),
(39, 'Forg1ven', 'league_of_legends_lec_equipos_schalke04_player_forg1ven.png', 'Adc', 8, 2),
(40, 'Dreams', 'league_of_legends_lec_equipos_schalke04_player_dreams.png', 'Supp', 8, 2),
(41, 'Sacre', 'league_of_legends_lec_equipos_skgaming_player_sacre.png', 'Top', 9, 2),
(42, 'Trick', 'league_of_legends_lec_equipos_skgaming_player_trick.png', 'Jungla', 9, 2),
(43, 'Jenax', 'league_of_legends_lec_equipos_skgaming_player_jenax.png', 'Mid', 9, 2),
(44, 'Crowshot', 'league_of_legends_lec_equipos_skgaming_player_crownshot.png', 'Adc', 9, 2),
(45, 'Limit', 'league_of_legends_lec_equipos_skgaming_player_limit.png', 'Supp', 9, 2),
(46, 'Cabochard', 'league_of_legends_lec_equipos_vitality_player_cabochard.png', 'Top', 10, 2),
(47, 'Mowgli', 'league_of_legends_lec_equipos_vitality_player_mowgli.png', 'Jungla', 10, 2),
(48, 'Milica', 'league_of_legends_lec_equipos_vitality_player_milica.png', 'Mid', 10, 2),
(49, 'Comp', 'league_of_legends_lec_equipos_vitality_player_comp.png', 'Adc', 10, 2),
(50, 'Jactroll', 'league_of_legends_lec_equipos_vitality_player_jactroll.png', 'Supp', 10, 2),
(53, 'Faker', 'league_of_legends_lec_equipos_skt_player_faker.png', 'Mid', 12, 1),
(51, 'Roach', 'league_of_legends_lec_equipos_skt_player_roach.png', 'Top', 12, 1),
(52, 'Cuzz', 'league_of_legends_lec_equipos_skt_player_cuzz.png', 'Jungla', 12, 1),
(54, 'Teddy', 'league_of_legends_lec_equipos_skt_player_teddy.png', 'Adc', 12, 1),
(55, 'Effort', 'league_of_legends_lec_equipos_skt_player_effort.png', 'Supp', 12, 1),
(556, 'Kiin', 'league_of_legends_lec_equipos_afreecafreecs_player_kiin.png', 'Top', 16, 1),
(557, 'Spirit', 'league_of_legends_lec_equipos_afreecafreecs_player_spirit.png', 'Jungla', 16, 1),
(558, 'Fly', 'league_of_legends_lec_equipos_afreecafreecs_player_fly.png', 'Mid', 16, 1),
(559, 'SS', 'league_of_legends_lec_equipos_afreecafreecs_player_ss.png', 'Adc', 16, 1),
(560, 'Ben', 'league_of_legends_lec_equipos_afreecafreecs_player_ben.png', 'Supp', 16, 1),
(561, 'Doran', 'league_of_legends_lec_equipos_dragonx_player_doran.png', 'Top', 14, 1),
(562, 'Pyosik', 'league_of_legends_lec_equipos_dragonx_player_pyosik.png', 'Jungla', 14, 1),
(563, 'Chovy', 'league_of_legends_lec_equipos_dragonx_player_chovy.png', 'Mid', 14, 1),
(564, 'Deft', 'league_of_legends_lec_equipos_dragonx_player_deft.png', 'Adc', 14, 1),
(565, 'Keria', 'league_of_legends_lec_equipos_dragonx_player_keria.png', 'Supp', 14, 1),
(566, 'Ray', 'league_of_legends_lec_equipos_ktrolster_player_ray.png', 'Top', 15, 1),
(567, 'Malrang', 'league_of_legends_lec_equipos_ktrolster_player_malrang.png', 'Jungla', 15, 1),
(568, 'Kuro', 'league_of_legends_lec_equipos_ktrolster_player_kuro.png', 'Mid', 15, 1),
(569, 'Aiming', 'league_of_legends_lec_equipos_ktrolster_player_aiming.png', 'Adc', 15, 1),
(570, 'Tusin', 'league_of_legends_lec_equipos_ktrolster_player_tusin.png', 'Supp', 15, 1),
(571, 'TheShy', 'league_of_legends_lec_equipos_invictusgaming_player_theshy.png', 'Top', 17, 3),
(572, 'Ning', 'league_of_legends_lec_equipos_invictusgaming_player_ning.png', 'Jungla', 17, 3),
(573, 'Rookie', 'league_of_legends_lec_equipos_invinctusgaming_player_rokie.png', 'Mid', 17, 3),
(574, 'Jackylove', 'league_of_legends_lec_equipos_invinctusgaming_player_jakielove.png', 'Adc', 17, 3),
(575, 'Baolan', 'league_of_legends_lec_equipos_invictusgaming_player_baolan.png', 'Supp', 17, 3),
(576, 'New', 'league_of_legends_lec_equipos_rng_player_new.png', 'Top', 19, 3),
(577, 'XLB', 'league_of_legends_lec_equipos_rng_player_xlb.png', 'Jungla', 19, 3),
(578, 'Xiaohu', 'league_of_legends_lec_equipos_rng_player_xiaohu.png', 'Mid', 19, 3),
(579, 'Betty', 'league_of_legends_lec_equipos_rng_player_betty.png', 'Adc', 19, 3),
(580, 'Ming', 'league_of_legends_lec_equipos_rng_player_ming.png', 'Supp', 19, 3),
(581, 'Gimgoon', 'league_of_legends_lec_equipos_fpx_player_gimgoon.png', 'Top', 18, 3),
(582, 'Tian', 'league_of_legends_lec_equipos_fpx_player_tian.png', 'Jungla', 18, 3),
(583, 'Doinb', 'league_of_legends_lec_equipos_fpx_player_doinb.png', 'Mid', 18, 3),
(584, 'Lwx', 'league_of_legends_lec_equipos_fpx_player_lwx.png', 'Adc', 18, 3),
(585, 'Crisp', 'league_of_legends_lec_equipos_fpx_player_crisp.png', 'Supp', 18, 3),
(586, 'Beansu', 'league_of_legends_lec_equipos_movistarriders_player_beansu.png', 'Top', 22, 4),
(587, 'Elyoya', 'league_of_legends_lec_equipos_movistarriders_player_elyoya.png', 'Jungla', 22, 4),
(588, 'Xico', 'league_of_legends_lec_equipos_movistarriders_player_xico.png', 'Mid', 22, 4),
(589, 'Javaa', 'league_of_legends_lec_equipos_movistarriders_player_javaa.png', 'Adc', 22, 4),
(590, 'Ruckhs', 'league_of_legends_lec_equipos_movistarriders_player_ruckhs.png', 'Supp', 22, 4),
(591, 'Werlyb', 'league_of_legends_lec_equipos_madlaionsmadrid_player_werlyb.png', 'Top', 20, 4),
(592, 'Koldo', 'league_of_legends_lec_equipos_madlaionsmadrid_player_koldo.png', 'Jungla', 20, 4),
(593, 'Hatrixx', 'league_of_legends_lec_equipos_madlaionsmadrid_player_hatrixx.png', 'Mid', 20, 4),
(594, 'Flakked', 'league_of_legends_lec_equipos_madlaionsmadrid_player_flakked.png', 'Adc', 20, 4),
(595, 'Prime', 'league_of_legends_lec_equipos_madlaionsmadrid_player_prime.png', 'Supp', 20, 4),
(596, 'Th3Antonio', 'league_of_legends_lec_equipos_giants_player_th3antonio.png', 'Top', 21, 4),
(597, 'Lamabear', 'league_of_legends_lec_equipos_giants_player_lamabear.png', 'Jungla', 21, 4),
(598, 'Pretty', 'league_of_legends_lec_equipos_giants_player_pretty.png', 'Mid', 21, 4),
(599, 'Attila', 'league_of_legends_lec_equipos_giants_player_attila.png', 'Adc', 21, 4),
(600, 'Erdote', 'league_of_legends_lec_equipos_giants_player_erdote.png', 'Supp', 21, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ligas`
--

CREATE TABLE `Ligas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Juego` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ligas`
--

INSERT INTO `Ligas` (`ID`, `Nombre`, `Imagen`, `Juego`) VALUES
(1, 'LCK', 'league_of_legends_lck_cover_image.jpeg', 3),
(2, 'LEC', 'league_of_legends_lec_cover_image.jpeg', 3),
(3, 'LPL', 'league_of_legends_lpl_cover_image.jpeg', 3),
(4, 'Superliga Orange', 'league_of_legends_superliga_cover_image.jpeg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partidos`
--

CREATE TABLE `Partidos` (
  `ID` int(11) NOT NULL,
  `Jornada` int(11) NOT NULL,
  `Equipo1` int(11) NOT NULL,
  `Equipo2` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Partidos`
--

INSERT INTO `Partidos` (`ID`, `Jornada`, `Equipo1`, `Equipo2`, `Fecha`) VALUES
(1, 1, 1, 2, '2020-05-24'),
(2, 1, 3, 4, '2020-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ResultadosPartido`
--

CREATE TABLE `ResultadosPartido` (
  `ID` int(11) NOT NULL,
  `Partido` int(11) NOT NULL,
  `Top_Rojo` int(11) NOT NULL,
  `Jungla_Rojo` int(11) NOT NULL,
  `Mid_Rojo` int(11) NOT NULL,
  `Adc_Rojo` int(11) NOT NULL,
  `Supp_Rojo` int(11) NOT NULL,
  `Top_Azul` int(11) NOT NULL,
  `Jungla_Azul` int(11) NOT NULL,
  `Mid_Azul` int(11) NOT NULL,
  `Adc_Azul` int(11) NOT NULL,
  `Supp_Azul` int(11) NOT NULL,
  `Ganador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ResultadosPartido`
--

INSERT INTO `ResultadosPartido` (`ID`, `Partido`, `Top_Rojo`, `Jungla_Rojo`, `Mid_Rojo`, `Adc_Rojo`, `Supp_Rojo`, `Top_Azul`, `Jungla_Azul`, `Mid_Azul`, `Adc_Azul`, `Supp_Azul`, `Ganador`) VALUES
(1, 1, 50, 60, 40, 45, 20, 40, 55, 60, 35, 40, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SalasJuego`
--

CREATE TABLE `SalasJuego` (
  `ID` int(11) NOT NULL,
  `Sala` varchar(100) NOT NULL,
  `Participantes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Participantes`)),
  `JefeSala` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SalasJuego`
--

INSERT INTO `SalasJuego` (`ID`, `Sala`, `Participantes`, `JefeSala`) VALUES
(18, '7dwqmwvk0b5xszzck3liap', '{\"1\":\"9\"}', 9),
(17, '2tb4qhyixl9zrkwu2d805o', '{\"1\":\"8\",\"2\":\"9\",\"3\":\"11\",\"4\":\"11\"}', 8),
(16, '9dzcdebslo81mpwu74w98k', '7', 7),
(15, 'ee38uvfg11dha4ixbrww0j', '5', 5),
(8, 'lghylty0b0qwl583bdjw4h', '6', 6),
(19, 'e574nj3e1sahj91u0xw7j6', '{\"1\":\"11\",\"2\":\"8\"}', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SeleccionJugador`
--

CREATE TABLE `SeleccionJugador` (
  `ID` int(11) NOT NULL,
  `Usuario` int(11) NOT NULL,
  `IDTOP` int(11) NOT NULL,
  `IDJUNGLA` int(11) NOT NULL,
  `IDMID` int(11) NOT NULL,
  `IDADC` int(11) NOT NULL,
  `IDSUPP` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `SeleccionJugador`
--

INSERT INTO `SeleccionJugador` (`ID`, `Usuario`, `IDTOP`, `IDJUNGLA`, `IDMID`, `IDADC`, `IDSUPP`) VALUES
(35, 7, 6, 12, 43, 24, 50),
(34, 5, 31, 32, 33, 34, 35),
(33, 2, 6, 7, 8, 9, 10),
(32, 8, 1, 22, 8, 19, 15),
(31, 3, 16, 2, 18, 19, 50),
(29, 1, 31, 47, 48, 4, 5),
(30, 4, 1, 2, 3, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `Nick` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `data_naixement` varchar(100) NOT NULL,
  `Avatar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `Nombre`, `Apellido`, `password`, `Nick`, `data_naixement`, `Avatar`) VALUES
(1, 'rsk@gmail.com', 'RiSoKa', 'Javier', 'RSK', 'RiSoKa', '1996-10-31', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(2, 'test1@gmail.com', 'test', 'testeo', '123', 'test1', '2000-12-22', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(3, '3lk119@gmail.com', 'Javier', 'Diaz', 'atar20', '3lk', '1992-08-08', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(4, 'zeroisora', 'Zero', 'Sora', '@usias38', 'Zero', '2000-10-08', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(5, 'prova2@gmil.com', 'oscar', 'ortega', 'e2oqn2HKbYRI', 'oscar123', '2000-01-22', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(6, 'rrsskk@gmail.com', 'RisokaJavier', 'Suárez', 'IDlvwjGOKNUCfxz6iKE=', 'Rskk', '1996-10-31', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(7, 'cris@gmail.com', 'Cris', 'Arcos', 'e2oqyieY', 'LaCris', '1978-03-10', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(8, 'admin', 'admin', 'admin', 'Kzx0wjo=', 'admin', '1996-10-31', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(9, 'admin2', 'admin2', 'admin2', 'Kzx0wjo=', 'admin2', '1996-12-31', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(10, 'prova3@gmail.com', 'oscar2', 'ortega2', 'e2oq', 'oscar1234', '2000-02-22', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg'),
(11, 'qwert', '123', '123', 'e2oq', '123', '2000-02-22', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Nick` varchar(40) NOT NULL,
  `Sexo` int(11) NOT NULL,
  `País` varchar(40) NOT NULL,
  `Avatar` varchar(100) NOT NULL,
  `Fecha_Cumpleanos` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`ID`, `Nombre`, `Apellido`, `Nick`, `Sexo`, `País`, `Avatar`, `Fecha_Cumpleanos`) VALUES
(1, 'Javier', 'Suárez', 'RiSoKa44', 0, 'España', 'https://www.cinemascomics.com/wp-content/uploads/2020/04/lucifer-tom-ellis.jpg', '1996-10-31'),
(2, 'Oscar', 'Mis Huevos', 'Oscarsito', 1, 'España', 'https://images.vexels.com/media/users/3/145908/preview2/52eabf633ca6414e60a7677b0b917d92-creador-de-', '2018-05-08'),
(3, 'AdminGod', 'El Borracho', 'OmniRich', 0, 'España', 'https://images.vexels.com/media/users/3/145908/preview2/52eabf633ca6414e60a7677b0b917d92-creador-de-', '2020-05-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Entrenadores`
--
ALTER TABLE `Entrenadores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Juegos`
--
ALTER TABLE `Juegos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Jugador`
--
ALTER TABLE `Jugador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Ligas`
--
ALTER TABLE `Ligas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Partidos`
--
ALTER TABLE `Partidos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ResultadosPartido`
--
ALTER TABLE `ResultadosPartido`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `SalasJuego`
--
ALTER TABLE `SalasJuego`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `SeleccionJugador`
--
ALTER TABLE `SeleccionJugador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Entrenadores`
--
ALTER TABLE `Entrenadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `Juegos`
--
ALTER TABLE `Juegos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Jugador`
--
ALTER TABLE `Jugador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT de la tabla `Ligas`
--
ALTER TABLE `Ligas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Partidos`
--
ALTER TABLE `Partidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ResultadosPartido`
--
ALTER TABLE `ResultadosPartido`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `SalasJuego`
--
ALTER TABLE `SalasJuego`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `SeleccionJugador`
--
ALTER TABLE `SeleccionJugador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
