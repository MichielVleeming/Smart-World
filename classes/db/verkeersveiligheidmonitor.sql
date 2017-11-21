-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 nov 2017 om 12:01
-- Serverversie: 10.1.25-MariaDB
-- PHP-versie: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verkeersveiligheidmonitor`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dataset2015`
--

CREATE TABLE `dataset2015` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Percentage` varchar(100) DEFAULT 'NULL',
  `Tooltip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dataset2015`
--

INSERT INTO `dataset2015` (`id`, `Pcodering`, `Percentage`, `Tooltip`) VALUES
(4, '#T101', '0', ''),
(5, '#T102', '0.5', ''),
(6, '#T103', '-5', ''),
(7, '#T104', '0', ''),
(8, '#L101', '1', ''),
(9, '#L102', '-2', ''),
(10, '#L102', '4', ''),
(11, '#L103', '-1', ''),
(12, '#L104', '-3', ''),
(13, '#L105', '-4', ''),
(14, '#L106', '-1.5', ''),
(15, '#L107', '2.3', ''),
(16, '#L108', '2.4', ''),
(18, '#L201', '2.5', ''),
(19, '#L202', 'NULL', ''),
(20, '#L203', 'NULL', ''),
(21, '#L204', 'NULL', ''),
(22, '#L205', 'NULL', ''),
(23, '#L206', 'NULL', ''),
(24, '#L207', 'NULL', ''),
(25, '#L208', 'NULL', ''),
(26, '#L301', 'NULL', ''),
(27, '#L302', 'NULL', ''),
(28, '#L303', 'NULL', ''),
(29, '#L304', 'NULL', ''),
(30, '#L305', 'NULL', ''),
(31, '#L306', 'NULL', ''),
(32, '#L307', 'NULL', ''),
(33, '#L308', 'NULL', ''),
(34, '#L309', 'NULL', ''),
(35, '#L310', 'NULL', ''),
(36, '#L401', 'NULL', ''),
(37, '#L402', 'NULL', ''),
(38, '#L403', 'NULL', ''),
(39, '#L404', 'NULL', ''),
(40, '#L405', 'NULL', ''),
(41, '#L406', 'NULL', ''),
(42, '#L407', 'NULL', ''),
(43, '#L408', 'NULL', ''),
(44, '#M101', 'NULL', ''),
(45, '#M102', 'NULL', ''),
(46, '#M103', 'NULL', ''),
(47, '#M104', 'NULL', ''),
(48, '#M105', 'NULL', ''),
(49, '#M106', 'NULL', ''),
(50, '#M107', 'NULL', ''),
(51, '#M108', 'NULL', ''),
(52, '#M201', 'NULL', ''),
(53, '#M202', 'NULL', ''),
(54, '#M203', 'NULL', ''),
(55, '#M204', 'NULL', ''),
(56, '#M205', 'NULL', ''),
(57, '#M206', 'NULL', ''),
(58, '#M207', 'NULL', ''),
(59, '#M208', 'NULL', ''),
(60, '#M301', 'NULL', ''),
(61, '#M302', 'NULL', ''),
(62, '#M303', 'NULL', ''),
(63, '#M304', 'NULL', ''),
(64, '#M305', 'NULL', ''),
(65, '#M306', 'NULL', ''),
(66, '#M307', 'NULL', ''),
(67, '#M308', 'NULL', ''),
(68, '#M309', 'NULL', ''),
(69, '#M310', 'NULL', ''),
(70, '#M401', 'NULL', ''),
(71, '#M402', 'NULL', ''),
(72, '#M403', 'NULL', ''),
(73, '#M404', 'NULL', ''),
(74, '#M405', 'NULL', ''),
(75, '#M406', 'NULL', ''),
(76, '#M407', 'NULL', ''),
(77, '#M408', 'NULL', ''),
(78, '#R101', 'NULL', ''),
(79, '#R102', 'NULL', ''),
(80, '#R103', 'NULL', ''),
(81, '#R104', 'NULL', ''),
(82, '#R105', 'NULL', ''),
(83, '#R106', 'NULL', ''),
(84, '#R107', 'NULL', ''),
(85, '#R108', 'NULL', ''),
(86, '#R201', 'NULL', ''),
(87, '#R202', 'NULL', ''),
(88, '#R203', 'NULL', ''),
(89, '#R204', 'NULL', ''),
(90, '#R205', 'NULL', ''),
(91, '#R206', 'NULL', ''),
(92, '#R207', 'NULL', ''),
(93, '#R208', 'NULL', ''),
(94, '#R301', 'NULL', ''),
(95, '#R302', 'NULL', ''),
(96, '#R303', 'NULL', ''),
(97, '#R304', 'NULL', ''),
(98, '#R305', 'NULL', ''),
(99, '#R306', 'NULL', ''),
(100, '#R307', 'NULL', ''),
(101, '#R308', 'NULL', ''),
(102, '#R309', 'NULL', ''),
(103, '#R310', 'NULL', ''),
(104, '#R401', 'NULL', ''),
(105, '#R402', 'NULL', ''),
(106, '#R403', 'NULL', ''),
(107, '#R404', 'NULL', ''),
(108, '#R405', 'NULL', ''),
(109, '#R406', 'NULL', ''),
(110, '#R407', 'NULL', ''),
(111, '#R408', 'NULL', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dataset2015`
--
ALTER TABLE `dataset2015`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dataset2015`
--
ALTER TABLE `dataset2015`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
