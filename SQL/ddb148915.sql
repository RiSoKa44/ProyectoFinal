-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: bbddsrv15.dondominio.com
-- Tiempo de generación: 08-05-2020 a las 08:50:27
-- Versión del servidor: 10.4.10-MariaDB-1:10.4.10+maria~buster
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
(10, 'Vitality', 'league_of_legends_lec_equipos_vitality_cover_image.png', 0, 2);

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
  `Equipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Jugador`
--

INSERT INTO `Jugador` (`ID`, `Nombre`, `Imagen`, `Rol`, `Equipo`) VALUES
(1, 'Wunder', 'league_of_legends_lec_equipos_g2_player_wunder.png', 'Top', 3),
(2, 'Jankos', 'league_of_legends_lec_equipos_g2_player_jankos.png', 'Jungla', 3),
(3, 'Perkz', 'league_of_legends_lec_equipos_g2_player_perkz.png', 'Mid', 3),
(4, 'Caps', 'league_of_legends_lec_equipos_g2_player_caps.png', 'Adc', 3),
(5, 'Mikyx', 'league_of_legends_lec_equipos_g2_player_mikyx.png', 'Supp', 3),
(6, 'Bwipo', 'league_of_legends_lec_equipos_fnatic_player_bwipo.png', 'Top', 2),
(7, 'Selfmade', 'league_of_legends_lec_equipos_fnatic_player_selfmade.png', 'Jungla', 2),
(8, 'Nemesis', 'league_of_legends_lec_equipos_fnatic_player_nemesis.png', 'Mid', 2),
(9, 'Rekkles', 'league_of_legends_lec_equipos_fnatic_player_rekkles.png', 'Adc', 2),
(10, 'Hylissang', 'league_of_legends_lec_equipos_fnatic_player_hylissang.png', 'Supp', 2),
(11, 'Send0o', 'league_of_legends_lec_equipos_excel_player_send0o.png', 'Top', 1),
(12, 'Caedrel', 'league_of_legends_lec_equipos_excel_player_caedrel.png', 'Jungla', 1),
(13, 'Special', 'league_of_legends_lec_equipos_excel_player_special.png', 'Mid', 1),
(14, 'Deadly', 'league_of_legends_lec_equipos_excel_player_deadly.png', 'Adc', 1),
(15, 'Kasing', 'league_of_legends_lec_equipos_excel_player_kasing.png', 'Supp', 1),
(16, 'Orome', 'league_of_legends_lec_equipos_madlions_player_orome.png', 'Top', 4),
(17, 'Shad0w', 'league_of_legends_lec_equipos_madlions_player_shad0w.png', 'Jungla', 4),
(18, 'Humanoid', 'league_of_legends_lec_equipos_madlions_player_humanoid.png', 'Mid', 4),
(19, 'Carzzy', 'league_of_legends_lec_equipos_madlions_player_carzzy.png', 'Adc', 4),
(20, 'Kaiser', 'league_of_legends_lec_equipos_madlions_player_kaiser.png', 'Supp', 4),
(21, 'Dan Dan', 'league_of_legends_lec_equipos_misfits_player_dandan.png', 'Top', 5),
(22, 'Razork', 'league_of_legends_lec_equipos_misfits_player_razork.png', 'Jungla', 5),
(23, 'Febiven', 'league_of_legends_lec_equipos_misfits_player_febiven.png', 'Mid', 5),
(24, 'Bvoy', 'league_of_legends_lec_equipos_misfits_player_febiven.png', 'Adc', 5),
(25, 'Denyk', 'league_of_legends_lec_equipos_misfits_player_denyk.png', 'Supp', 5),
(26, 'Alphari', 'league_of_legends_lec_equipos_origen_player_alphari.png', 'Top', 6),
(27, 'Xerxe', 'league_of_legends_lec_equipos_origen_player_xerxe.png', 'Jungla', 6),
(28, 'Nukeduck', 'league_of_legends_lec_equipos_origen_player_nukeduck.png', 'Mid', 6),
(29, 'Upset', 'league_of_legends_lec_equipos_origen_player_upset.png', 'Adc', 6),
(30, 'Destiny', 'league_of_legends_lec_equipos_origen_player_destiny.png', 'Supp', 6),
(31, 'Finn', 'league_of_legends_lec_equipos_rogue_player_finn.png', 'Top', 7),
(32, 'Inspired', 'league_of_legends_lec_equipos_rogue_player_inspired.png', 'Jungla', 7),
(33, 'Larssen', 'league_of_legends_lec_equipos_rogue_player_larssen.png', 'Mid', 7),
(34, 'Hans sama', 'league_of_legends_lec_equipos_rogue_player_hanssama.png', 'Adc', 7),
(35, 'Vander', 'league_of_legends_lec_equipos_rogue_player_vander.png', 'Supp', 7),
(36, 'Odoamne', 'league_of_legends_lec_equipos_schalke04_player_odoamne.png', 'Top', 8),
(37, 'Gilius', 'league_of_legends_lec_equipos_schalke04_player_gilius.png', 'Jungla', 8),
(38, 'Abbedagge', 'league_of_legends_lec_equipos_schalke04_player_abbedagge.png', 'Mid', 8),
(39, 'Forg1ven', 'league_of_legends_lec_equipos_schalke04_player_forg1ven.png', 'Adc', 8),
(40, 'Dreams', 'league_of_legends_lec_equipos_schalke04_player_dreams.png', 'Supp', 8),
(41, 'Sacre', 'league_of_legends_lec_equipos_skgaming_player_sacre.png', 'Top', 9),
(42, 'Trick', 'league_of_legends_lec_equipos_skgaming_player_trick.png', 'Jungla', 9),
(43, 'Jenax', 'league_of_legends_lec_equipos_skgaming_player_jenax.png', 'Mid', 9),
(44, 'Crowshot', 'league_of_legends_lec_equipos_skgaming_player_crownshot.png', 'Adc', 9),
(45, 'Limit', 'league_of_legends_lec_equipos_skgaming_player_limit.png', 'Supp', 9),
(46, 'Cabochard', 'league_of_legends_lec_equipos_vitality_player_cabochard.png', 'Top', 10),
(47, 'Mowgli', 'league_of_legends_lec_equipos_vitality_player_mowgli.png', 'Jungla', 10),
(48, 'Milica', 'league_of_legends_lec_equipos_vitality_player_milica.png', 'Mid', 10),
(49, 'Comp', 'league_of_legends_lec_equipos_vitality_player_comp.png', 'Adc', 10),
(50, 'Jactroll', 'league_of_legends_lec_equipos_vitality_player_jactroll.png', 'Supp', 10);

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
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `ID` int(11) NOT NULL,
  `google_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `randomCode` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Juegos`
--
ALTER TABLE `Juegos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Jugador`
--
ALTER TABLE `Jugador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `Ligas`
--
ALTER TABLE `Ligas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
