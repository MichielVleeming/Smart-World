-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 dec 2017 om 11:20
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `dataset2015` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Percentage` varchar(100) DEFAULT 'NULL'
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dataset2015`
--

INSERT INTO `dataset2015` (`id`, `Pcodering`, `Percentage`) VALUES
(4, '#T101', '-3'),
(5, '#T102', '5'),
(6, '#T103', '4.921350581498212'),
(7, '#T104', '-3.4718804140313346'),
(8, '#L101', '2.876546492685142'),
(9, '#L102', '-0.20162598714383861'),
(10, '#L102', '-4.637769106438168'),
(11, '#L103', '2.416032736577124'),
(12, '#L104', '0.9934713095365755'),
(13, '#L105', '2.7192586452879555'),
(14, '#L106', '-4.384120394833499'),
(15, '#L107', '4.921622397305093'),
(16, '#L108', '2.760473478362405'),
(18, '#L201', '4.037500507233199'),
(19, '#L202', '-3.09391759158477'),
(20, '#L203', '-2.582089172286996'),
(21, '#L204', '1.3713072206557797'),
(22, '#L205', '-0.3971960725236645'),
(23, '#L206', '-1.0999017172492125'),
(24, '#L207', '0.6920799386613821'),
(25, '#L208', '1.7601051523909952'),
(26, '#L301', '1.7242862533072811'),
(27, '#L302', '-1.658883883300129'),
(28, '#L303', '1.5327221309139603'),
(29, '#L304', '-2.3597373881933628'),
(30, '#L305', '-1.3968530263722432'),
(31, '#L306', '-4.90505265994468'),
(32, '#L307', '4.66529608672978'),
(33, '#L308', '3.041638720819389'),
(34, '#L309', '-3.787694348755939'),
(35, '#L310', '-3.063387598901417'),
(36, '#L401', '1.0461453590971832'),
(37, '#L402', '-0.5791101004733799'),
(38, '#L403', '-1.033986272322001'),
(39, '#L404', '1.567399247146584'),
(40, '#L405', '-4.06104463996463'),
(41, '#L406', '-0.007420633926447984'),
(42, '#L407', '-2.853968942401902'),
(43, '#L408', '0.7524174971062862'),
(44, '#M101', '-2.6760053799264183'),
(45, '#M102', '-0.6372790836144979'),
(46, '#M103', '-0.15837897095678244'),
(47, '#M104', '-3.8800572966039715'),
(48, '#M105', '-3.9251492628130586'),
(49, '#M106', '-2.98557411691693'),
(50, '#M107', '1.8475775111909742'),
(51, '#M108', '3.1946102140421146'),
(52, '#M201', '-4.5696811560259025'),
(53, '#M202', '2.567763885080594'),
(54, '#M203', '1.5478632008171296'),
(55, '#M204', '-4.963975343819684'),
(56, '#M205', '-4.463466014213362'),
(57, '#M206', '-2.4254037322713096'),
(58, '#M207', '-3.73662031138001'),
(59, '#M208', '3.5931099472503263'),
(60, '#M301', '4.1754109777281165'),
(61, '#M302', '-4.90227464577395'),
(62, '#M303', '-2.0376058547176474'),
(63, '#M304', '-0.48120502892993855'),
(64, '#M305', '-1.2932072731603004'),
(65, '#M306', '-0.0224209716752366'),
(66, '#M307', '-1.2324827315588323'),
(67, '#M308', '-1.095150435432001'),
(68, '#M309', '3.221696324852944'),
(69, '#M310', '4.393933237897169'),
(70, '#M401', '-2.6954224777365314'),
(71, '#M402', '-1.6589117950377164'),
(72, '#M403', '4.791708765357463'),
(73, '#M404', '3.935279519236907'),
(74, '#M405', '0.3012716074485997'),
(75, '#M406', '4.700519786868728'),
(76, '#M407', '-2.401215580665707'),
(77, '#M408', '-1.107636956598271'),
(78, '#R101', '-3.334537733657786'),
(79, '#R102', '1.650222508842333'),
(80, '#R103', '3.254726052521473'),
(81, '#R104', '-3.6770369565831844'),
(82, '#R105', '-3.1493626331438893'),
(83, '#R106', '0.2842980113665554'),
(84, '#R107', '-4.1304217363991045'),
(85, '#R108', '3.49499759124126'),
(86, '#R201', '4.866253472740066'),
(87, '#R202', '-1.153725102686999'),
(88, '#R203', '4.632614375681257'),
(89, '#R204', '1.6242474938037326'),
(90, '#R205', '-0.7766053506886639'),
(91, '#R206', '-3.755768927518063'),
(92, '#R207', '-1.4490282781878747'),
(93, '#R208', '-0.9778343010487358'),
(94, '#R301', '4.457913636656398'),
(95, '#R302', '0.2230713937646449'),
(96, '#R303', '2.7416163661904775'),
(97, '#R304', '-1.9611320430050903'),
(98, '#R305', '-3.030509006260437'),
(99, '#R306', '-4.269148594950464'),
(100, '#R307', '2.7457843513654403'),
(101, '#R308', '1.5363678490150425'),
(102, '#R309', '4.4444864983153405'),
(103, '#R310', '2.6133292518680253'),
(104, '#R401', '4.733187071730557'),
(105, '#R402', '0.8259479103851577'),
(106, '#R403', '4.930178644070569'),
(107, '#R404', '-2.8269502034661826'),
(108, '#R405', '-3.9252866422061685'),
(109, '#R406', '3.8544177067041563'),
(110, '#R407', '-3.952051232524264'),
(111, '#R408', '3.6764910246026616');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dataset2015amersfoort`
--

CREATE TABLE IF NOT EXISTS `dataset2015amersfoort` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Percentage` varchar(100) DEFAULT 'NULL'
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dataset2015amersfoort`
--

INSERT INTO `dataset2015amersfoort` (`id`, `Pcodering`, `Percentage`) VALUES
(4, '#T101', '-5'),
(5, '#T102', '5'),
(6, '#T103', '4.921350581498212'),
(7, '#T104', '-3.4718804140313346'),
(8, '#L101', '2.876546492685142'),
(9, '#L102', '-0.20162598714383861'),
(10, '#L102', '-4.637769106438168'),
(11, '#L103', '2.416032736577124'),
(12, '#L104', '0.9934713095365755'),
(13, '#L105', '2.7192586452879555'),
(14, '#L106', '-4.384120394833499'),
(15, '#L107', '4.921622397305093'),
(16, '#L108', '2.760473478362405'),
(18, '#L201', '4.037500507233199'),
(19, '#L202', '-3.09391759158477'),
(20, '#L203', '-2.582089172286996'),
(21, '#L204', '1.3713072206557797'),
(22, '#L205', '-0.3971960725236645'),
(23, '#L206', '-1.0999017172492125'),
(24, '#L207', '0.6920799386613821'),
(25, '#L208', '1.7601051523909952'),
(26, '#L301', '1.7242862533072811'),
(27, '#L302', '-1.658883883300129'),
(28, '#L303', '1.5327221309139603'),
(29, '#L304', '-2.3597373881933628'),
(30, '#L305', '-1.3968530263722432'),
(31, '#L306', '-4.90505265994468'),
(32, '#L307', '4.66529608672978'),
(33, '#L308', '3.041638720819389'),
(34, '#L309', '-3.787694348755939'),
(35, '#L310', '-3.063387598901417'),
(36, '#L401', '1.0461453590971832'),
(37, '#L402', '-0.5791101004733799'),
(38, '#L403', '-1.033986272322001'),
(39, '#L404', '1.567399247146584'),
(40, '#L405', '-4.06104463996463'),
(41, '#L406', '-0.007420633926447984'),
(42, '#L407', '-2.853968942401902'),
(43, '#L408', '0.7524174971062862'),
(44, '#M101', '-2.6760053799264183'),
(45, '#M102', '-0.6372790836144979'),
(46, '#M103', '-0.15837897095678244'),
(47, '#M104', '-3.8800572966039715'),
(48, '#M105', '-3.9251492628130586'),
(49, '#M106', '-2.98557411691693'),
(50, '#M107', '1.8475775111909742'),
(51, '#M108', '3.1946102140421146'),
(52, '#M201', '-4.5696811560259025'),
(53, '#M202', '2.567763885080594'),
(54, '#M203', '1.5478632008171296'),
(55, '#M204', '-4.963975343819684'),
(56, '#M205', '-4.463466014213362'),
(57, '#M206', '-2.4254037322713096'),
(58, '#M207', '-3.73662031138001'),
(59, '#M208', '3.5931099472503263'),
(60, '#M301', '4.1754109777281165'),
(61, '#M302', '-4.90227464577395'),
(62, '#M303', '-2.0376058547176474'),
(63, '#M304', '-0.48120502892993855'),
(64, '#M305', '-1.2932072731603004'),
(65, '#M306', '-0.0224209716752366'),
(66, '#M307', '-1.2324827315588323'),
(67, '#M308', '-1.095150435432001'),
(68, '#M309', '3.221696324852944'),
(69, '#M310', '4.393933237897169'),
(70, '#M401', '-2.6954224777365314'),
(71, '#M402', '-1.6589117950377164'),
(72, '#M403', '4.791708765357463'),
(73, '#M404', '3.935279519236907'),
(74, '#M405', '0.3012716074485997'),
(75, '#M406', '4.700519786868728'),
(76, '#M407', '-2.401215580665707'),
(77, '#M408', '-1.107636956598271'),
(78, '#R101', '-3.334537733657786'),
(79, '#R102', '1.650222508842333'),
(80, '#R103', '3.254726052521473'),
(81, '#R104', '-3.6770369565831844'),
(82, '#R105', '-3.1493626331438893'),
(83, '#R106', '0.2842980113665554'),
(84, '#R107', '-4.1304217363991045'),
(85, '#R108', '3.49499759124126'),
(86, '#R201', '4.866253472740066'),
(87, '#R202', '-1.153725102686999'),
(88, '#R203', '4.632614375681257'),
(89, '#R204', '1.6242474938037326'),
(90, '#R205', '-0.7766053506886639'),
(91, '#R206', '-3.755768927518063'),
(92, '#R207', '-1.4490282781878747'),
(93, '#R208', '-0.9778343010487358'),
(94, '#R301', '4.457913636656398'),
(95, '#R302', '0.2230713937646449'),
(96, '#R303', '2.7416163661904775'),
(97, '#R304', '-1.9611320430050903'),
(98, '#R305', '-3.030509006260437'),
(99, '#R306', '-4.269148594950464'),
(100, '#R307', '2.7457843513654403'),
(101, '#R308', '1.5363678490150425'),
(102, '#R309', '4.4444864983153405'),
(103, '#R310', '2.6133292518680253'),
(104, '#R401', '4.733187071730557'),
(105, '#R402', '0.8259479103851577'),
(106, '#R403', '4.930178644070569'),
(107, '#R404', '-2.8269502034661826'),
(108, '#R405', '-3.9252866422061685'),
(109, '#R406', '3.8544177067041563'),
(110, '#R407', '-3.952051232524264'),
(111, '#R408', '3.6764910246026616');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dataset2015arnhem`
--

CREATE TABLE IF NOT EXISTS `dataset2015arnhem` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Percentage` varchar(100) DEFAULT 'NULL'
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dataset2015arnhem`
--

INSERT INTO `dataset2015arnhem` (`id`, `Pcodering`, `Percentage`) VALUES
(4, '#T101', '2'),
(5, '#T102', '0'),
(6, '#T103', '0'),
(7, '#T104', '-3.4718804140313346'),
(8, '#L101', '2.876546492685142'),
(9, '#L102', '-0.20162598714383861'),
(10, '#L102', '-4.637769106438168'),
(11, '#L103', '2.416032736577124'),
(12, '#L104', '0.9934713095365755'),
(13, '#L105', '2.7192586452879555'),
(14, '#L106', '-4.384120394833499'),
(15, '#L107', '4.921622397305093'),
(16, '#L108', '2.760473478362405'),
(18, '#L201', '4.037500507233199'),
(19, '#L202', '-3.09391759158477'),
(20, '#L203', '-2.582089172286996'),
(21, '#L204', '1.3713072206557797'),
(22, '#L205', '-0.3971960725236645'),
(23, '#L206', '-1.0999017172492125'),
(24, '#L207', '0.6920799386613821'),
(25, '#L208', '1.7601051523909952'),
(26, '#L301', '1.7242862533072811'),
(27, '#L302', '-1.658883883300129'),
(28, '#L303', '1.5327221309139603'),
(29, '#L304', '-2.3597373881933628'),
(30, '#L305', '-1.3968530263722432'),
(31, '#L306', '-4.90505265994468'),
(32, '#L307', '4.66529608672978'),
(33, '#L308', '3.041638720819389'),
(34, '#L309', '-3.787694348755939'),
(35, '#L310', '-3.063387598901417'),
(36, '#L401', '1.0461453590971832'),
(37, '#L402', '-0.5791101004733799'),
(38, '#L403', '-1.033986272322001'),
(39, '#L404', '1.567399247146584'),
(40, '#L405', '-4.06104463996463'),
(41, '#L406', '-0.007420633926447984'),
(42, '#L407', '-2.853968942401902'),
(43, '#L408', '0.7524174971062862'),
(44, '#M101', '-2.6760053799264183'),
(45, '#M102', '-0.6372790836144979'),
(46, '#M103', '-0.15837897095678244'),
(47, '#M104', '-3.8800572966039715'),
(48, '#M105', '-3.9251492628130586'),
(49, '#M106', '-2.98557411691693'),
(50, '#M107', '1.8475775111909742'),
(51, '#M108', '3.1946102140421146'),
(52, '#M201', '-4.5696811560259025'),
(53, '#M202', '2.567763885080594'),
(54, '#M203', '1.5478632008171296'),
(55, '#M204', '-4.963975343819684'),
(56, '#M205', '-4.463466014213362'),
(57, '#M206', '-2.4254037322713096'),
(58, '#M207', '-3.73662031138001'),
(59, '#M208', '3.5931099472503263'),
(60, '#M301', '4.1754109777281165'),
(61, '#M302', '-4.90227464577395'),
(62, '#M303', '-2.0376058547176474'),
(63, '#M304', '-0.48120502892993855'),
(64, '#M305', '-1.2932072731603004'),
(65, '#M306', '-0.0224209716752366'),
(66, '#M307', '-1.2324827315588323'),
(67, '#M308', '-1.095150435432001'),
(68, '#M309', '3.221696324852944'),
(69, '#M310', '4.393933237897169'),
(70, '#M401', '-2.6954224777365314'),
(71, '#M402', '-1.6589117950377164'),
(72, '#M403', '4.791708765357463'),
(73, '#M404', '3.935279519236907'),
(74, '#M405', '0.3012716074485997'),
(75, '#M406', '4.700519786868728'),
(76, '#M407', '-2.401215580665707'),
(77, '#M408', '-1.107636956598271'),
(78, '#R101', '-3.334537733657786'),
(79, '#R102', '1.650222508842333'),
(80, '#R103', '3.254726052521473'),
(81, '#R104', '-3.6770369565831844'),
(82, '#R105', '-3.1493626331438893'),
(83, '#R106', '0.2842980113665554'),
(84, '#R107', '-4.1304217363991045'),
(85, '#R108', '3.49499759124126'),
(86, '#R201', '4.866253472740066'),
(87, '#R202', '-1.153725102686999'),
(88, '#R203', '4.632614375681257'),
(89, '#R204', '1.6242474938037326'),
(90, '#R205', '-0.7766053506886639'),
(91, '#R206', '-3.755768927518063'),
(92, '#R207', '-1.4490282781878747'),
(93, '#R208', '-0.9778343010487358'),
(94, '#R301', '4.457913636656398'),
(95, '#R302', '0.2230713937646449'),
(96, '#R303', '2.7416163661904775'),
(97, '#R304', '-1.9611320430050903'),
(98, '#R305', '-3.030509006260437'),
(99, '#R306', '-4.269148594950464'),
(100, '#R307', '2.7457843513654403'),
(101, '#R308', '1.5363678490150425'),
(102, '#R309', '4.4444864983153405'),
(103, '#R310', '2.6133292518680253'),
(104, '#R401', '4.733187071730557'),
(105, '#R402', '0.8259479103851577'),
(106, '#R403', '4.930178644070569'),
(107, '#R404', '-2.8269502034661826'),
(108, '#R405', '-3.9252866422061685'),
(109, '#R406', '3.8544177067041563'),
(110, '#R407', '-3.952051232524264'),
(111, '#R408', '3.6764910246026616');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dataset2015zwolle`
--

CREATE TABLE IF NOT EXISTS `dataset2015zwolle` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Percentage` varchar(100) DEFAULT 'NULL'
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dataset2015zwolle`
--

INSERT INTO `dataset2015zwolle` (`id`, `Pcodering`, `Percentage`) VALUES
(4, '#T101', '-1'),
(5, '#T102', '-2'),
(6, '#T103', '-3'),
(7, '#T104', '-3.4718804140313346'),
(8, '#L101', '2.876546492685142'),
(9, '#L102', '-0.20162598714383861'),
(10, '#L102', '-4.637769106438168'),
(11, '#L103', '2.416032736577124'),
(12, '#L104', '0.9934713095365755'),
(13, '#L105', '2.7192586452879555'),
(14, '#L106', '-4.384120394833499'),
(15, '#L107', '4.921622397305093'),
(16, '#L108', '2.760473478362405'),
(18, '#L201', '4.037500507233199'),
(19, '#L202', '-3.09391759158477'),
(20, '#L203', '-2.582089172286996'),
(21, '#L204', '1.3713072206557797'),
(22, '#L205', '-0.3971960725236645'),
(23, '#L206', '-1.0999017172492125'),
(24, '#L207', '0.6920799386613821'),
(25, '#L208', '1.7601051523909952'),
(26, '#L301', '1.7242862533072811'),
(27, '#L302', '-1.658883883300129'),
(28, '#L303', '1.5327221309139603'),
(29, '#L304', '-2.3597373881933628'),
(30, '#L305', '-1.3968530263722432'),
(31, '#L306', '-4.90505265994468'),
(32, '#L307', '4.66529608672978'),
(33, '#L308', '3.041638720819389'),
(34, '#L309', '-3.787694348755939'),
(35, '#L310', '-3.063387598901417'),
(36, '#L401', '1.0461453590971832'),
(37, '#L402', '-0.5791101004733799'),
(38, '#L403', '-1.033986272322001'),
(39, '#L404', '1.567399247146584'),
(40, '#L405', '-4.06104463996463'),
(41, '#L406', '-0.007420633926447984'),
(42, '#L407', '-2.853968942401902'),
(43, '#L408', '0.7524174971062862'),
(44, '#M101', '-2.6760053799264183'),
(45, '#M102', '-0.6372790836144979'),
(46, '#M103', '-0.15837897095678244'),
(47, '#M104', '-3.8800572966039715'),
(48, '#M105', '-3.9251492628130586'),
(49, '#M106', '-2.98557411691693'),
(50, '#M107', '1.8475775111909742'),
(51, '#M108', '3.1946102140421146'),
(52, '#M201', '-4.5696811560259025'),
(53, '#M202', '2.567763885080594'),
(54, '#M203', '1.5478632008171296'),
(55, '#M204', '-4.963975343819684'),
(56, '#M205', '-4.463466014213362'),
(57, '#M206', '-2.4254037322713096'),
(58, '#M207', '-3.73662031138001'),
(59, '#M208', '3.5931099472503263'),
(60, '#M301', '4.1754109777281165'),
(61, '#M302', '-4.90227464577395'),
(62, '#M303', '-2.0376058547176474'),
(63, '#M304', '-0.48120502892993855'),
(64, '#M305', '-1.2932072731603004'),
(65, '#M306', '-0.0224209716752366'),
(66, '#M307', '-1.2324827315588323'),
(67, '#M308', '-1.095150435432001'),
(68, '#M309', '3.221696324852944'),
(69, '#M310', '4.393933237897169'),
(70, '#M401', '-2.6954224777365314'),
(71, '#M402', '-1.6589117950377164'),
(72, '#M403', '4.791708765357463'),
(73, '#M404', '3.935279519236907'),
(74, '#M405', '0.3012716074485997'),
(75, '#M406', '4.700519786868728'),
(76, '#M407', '-2.401215580665707'),
(77, '#M408', '-1.107636956598271'),
(78, '#R101', '-3.334537733657786'),
(79, '#R102', '1.650222508842333'),
(80, '#R103', '3.254726052521473'),
(81, '#R104', '-3.6770369565831844'),
(82, '#R105', '-3.1493626331438893'),
(83, '#R106', '0.2842980113665554'),
(84, '#R107', '-4.1304217363991045'),
(85, '#R108', '3.49499759124126'),
(86, '#R201', '4.866253472740066'),
(87, '#R202', '-1.153725102686999'),
(88, '#R203', '4.632614375681257'),
(89, '#R204', '1.6242474938037326'),
(90, '#R205', '-0.7766053506886639'),
(91, '#R206', '-3.755768927518063'),
(92, '#R207', '-1.4490282781878747'),
(93, '#R208', '-0.9778343010487358'),
(94, '#R301', '4.457913636656398'),
(95, '#R302', '0.2230713937646449'),
(96, '#R303', '2.7416163661904775'),
(97, '#R304', '-1.9611320430050903'),
(98, '#R305', '-3.030509006260437'),
(99, '#R306', '-4.269148594950464'),
(100, '#R307', '2.7457843513654403'),
(101, '#R308', '1.5363678490150425'),
(102, '#R309', '4.4444864983153405'),
(103, '#R310', '2.6133292518680253'),
(104, '#R401', '4.733187071730557'),
(105, '#R402', '0.8259479103851577'),
(106, '#R403', '4.930178644070569'),
(107, '#R404', '-2.8269502034661826'),
(108, '#R405', '-3.9252866422061685'),
(109, '#R406', '3.8544177067041563'),
(110, '#R407', '-3.952051232524264'),
(111, '#R408', '3.6764910246026616');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `ID` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `Pcodering` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `enquete`
--

INSERT INTO `enquete` (`ID`, `text`, `Pcodering`) VALUES
(1, 'Hoe oud bent u?', '#T101'),
(2, 'Hoeveel procent van uw wegen is 50km/h?\r\n', '#T102');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tooltip`
--

CREATE TABLE IF NOT EXISTS `tooltip` (
  `id` int(11) NOT NULL,
  `Pcodering` varchar(10) NOT NULL,
  `Tooltip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tooltip`
--

INSERT INTO `tooltip` (`id`, `Pcodering`, `Tooltip`) VALUES
(4, '#T101', '123'),
(5, '#T102', '31'),
(6, '#T103', ''),
(7, '#T104', ''),
(8, '#L101', ''),
(9, '#L102', ''),
(10, '#L102', ''),
(11, '#L103', ''),
(12, '#L104', ''),
(13, '#L105', ''),
(14, '#L106', ''),
(15, '#L107', ''),
(16, '#L108', ''),
(18, '#L201', ''),
(19, '#L202', ''),
(20, '#L203', ''),
(21, '#L204', ''),
(22, '#L205', ''),
(23, '#L206', ''),
(24, '#L207', ''),
(25, '#L208', ''),
(26, '#L301', ''),
(27, '#L302', ''),
(28, '#L303', ''),
(29, '#L304', ''),
(30, '#L305', ''),
(31, '#L306', ''),
(32, '#L307', ''),
(33, '#L308', ''),
(34, '#L309', ''),
(35, '#L310', ''),
(36, '#L401', ''),
(37, '#L402', ''),
(38, '#L403', ''),
(39, '#L404', ''),
(40, '#L405', ''),
(41, '#L406', ''),
(42, '#L407', ''),
(43, '#L408', ''),
(44, '#M101', ''),
(45, '#M102', ''),
(46, '#M103', ''),
(47, '#M104', ''),
(48, '#M105', ''),
(49, '#M106', ''),
(50, '#M107', ''),
(51, '#M108', ''),
(52, '#M201', ''),
(53, '#M202', ''),
(54, '#M203', ''),
(55, '#M204', ''),
(56, '#M205', ''),
(57, '#M206', ''),
(58, '#M207', ''),
(59, '#M208', ''),
(60, '#M301', ''),
(61, '#M302', ''),
(62, '#M303', ''),
(63, '#M304', ''),
(64, '#M305', ''),
(65, '#M306', ''),
(66, '#M307', ''),
(67, '#M308', ''),
(68, '#M309', ''),
(69, '#M310', ''),
(70, '#M401', ''),
(71, '#M402', ''),
(72, '#M403', ''),
(73, '#M404', ''),
(74, '#M405', ''),
(75, '#M406', ''),
(76, '#M407', ''),
(77, '#M408', ''),
(78, '#R101', ''),
(79, '#R102', ''),
(80, '#R103', ''),
(81, '#R104', ''),
(82, '#R105', ''),
(83, '#R106', ''),
(84, '#R107', ''),
(85, '#R108', ''),
(86, '#R201', ''),
(87, '#R202', ''),
(88, '#R203', ''),
(89, '#R204', ''),
(90, '#R205', ''),
(91, '#R206', ''),
(92, '#R207', ''),
(93, '#R208', ''),
(94, '#R301', ''),
(95, '#R302', ''),
(96, '#R303', ''),
(97, '#R304', ''),
(98, '#R305', ''),
(99, '#R306', ''),
(100, '#R307', ''),
(101, '#R308', ''),
(102, '#R309', ''),
(103, '#R310', ''),
(104, '#R401', ''),
(105, '#R402', ''),
(106, '#R403', ''),
(107, '#R404', ''),
(108, '#R405', ''),
(109, '#R406', ''),
(110, '#R407', ''),
(111, '#R408', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `city`) VALUES
(1, 'amersfoort', 'uriot', 'amersfoort');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `dataset2015`
--
ALTER TABLE `dataset2015`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dataset2015amersfoort`
--
ALTER TABLE `dataset2015amersfoort`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dataset2015arnhem`
--
ALTER TABLE `dataset2015arnhem`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dataset2015zwolle`
--
ALTER TABLE `dataset2015zwolle`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `enquete`
--
ALTER TABLE `enquete`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `tooltip`
--
ALTER TABLE `tooltip`
  ADD KEY `Tooltip` (`Tooltip`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `dataset2015`
--
ALTER TABLE `dataset2015`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT voor een tabel `dataset2015amersfoort`
--
ALTER TABLE `dataset2015amersfoort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT voor een tabel `dataset2015arnhem`
--
ALTER TABLE `dataset2015arnhem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT voor een tabel `dataset2015zwolle`
--
ALTER TABLE `dataset2015zwolle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT voor een tabel `enquete`
--
ALTER TABLE `enquete`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
