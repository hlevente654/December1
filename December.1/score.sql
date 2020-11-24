-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Nov 24. 13:02
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `score`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jatekos`
--

CREATE TABLE `jatekos` (
  `az` int(11) NOT NULL,
  `nev` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `pont` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- A tábla adatainak kiíratása `jatekos`
--

INSERT INTO `jatekos` (`az`, `nev`, `pont`) VALUES
(1, 'Erdei', 140),
(2, 'Fodor', 130),
(3, 'Kormos', 120),
(4, 'Szabó', 110),
(5, 'Szabó', 100),
(6, 'Tornyos', 90);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
