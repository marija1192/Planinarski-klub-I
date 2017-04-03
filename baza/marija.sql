-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 12:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marija`
--

-- --------------------------------------------------------

--
-- Table structure for table `drustvo`
--

CREATE TABLE IF NOT EXISTS `drustvo` (
  `udruzenjeid` int(10) NOT NULL AUTO_INCREMENT,
  `nazivDrustva` varchar(30) NOT NULL,
  `grad` varchar(30) NOT NULL,
  `brojClanova` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`udruzenjeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `drustvo`
--

INSERT INTO `drustvo` (`udruzenjeid`, `nazivDrustva`, `grad`, `brojClanova`, `id`) VALUES
(1, 'Planinarsko društvo Beograd', 'Beograd', 3000, 0),
(2, 'Planinarsko društvo Niš', 'Niš', 1000, 0),
(3, 'Planinarsko društvo Novi sad', 'Novi sad', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pol` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefon` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datumRodjenja` date NOT NULL,
  `oprema` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `planine` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `napomena` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pripada` varchar(10) NOT NULL,
  `planinarskoDrustvo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=889 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `ime`, `prezime`, `pol`, `email`, `telefon`, `datumRodjenja`, `oprema`, `planine`, `napomena`, `pripada`, `planinarskoDrustvo`) VALUES
(123, 'Ljiljana', 'Simovic', 'zenski', 'ljiljana93@gmail.com', '0611122334', '1993-10-21', 'obuca, stap', 'Rtanj', '', 'da', 'Planinasko društvo Novi sad'),
(211, 'Kristina', 'Pajic', 'zenski', 'kica92@gmail.com', '0611122335', '1993-03-04', 'obuca', 'Kopaonik', '', 'da', 'Planinarsko društvo Niš'),
(222, 'Marija', 'Jankovic', 'zenski', 'marija192@gmail.com', '0691919000', '1992-10-11', 'obuca, stap', 'Rtanj', '', 'da', 'Planinarsko društvo Niš'),
(234, 'Marija', 'Kosaric', 'zenski', 'marija93@gmail.com', '0692233445', '1993-11-15', 'nema', 'Midzor', '', 'da', 'Planinarsko društvo Beograd'),
(333, 'Milena', 'Vujovic', 'zenski', 'milena92@gmail.com', '0660022330', '1992-02-28', 'nema', 'Rtanj', '', 'da', 'Planinarsko društvo Beograd'),
(345, 'Stefan', 'Mitrovic', 'muski', 'stevdzula93@gmail.com', '0611199223', '1993-09-23', 'nema', 'Stara planina', '', 'da', 'Planinarsko društvo Novi sad'),
(444, 'Andrijana', 'Miletic', 'zenski', 'andrijana92@gmail.com', '0655511223', '1992-03-24', 'nema', 'Zlatibor', '', 'da', 'Planinarsko društvo Niš'),
(456, 'Djordje', 'Radovanovic', 'muski', 'djole93@gmail.com', '0622342345', '1993-06-03', 'obuca', 'Suva planina', '', 'da', 'Planinarsko društvo Beograd'),
(567, 'Aleksandar', 'Kandic', 'muski', 'coa93@gmail.com', '0699911229', '1993-04-16', 'nema', 'Ozren', '', 'da', 'Planinarsko društvo Beograd'),
(666, 'Jelena', 'Milovanovic', 'zenski', 'jelena92@gmail.com', '0690022334', '1992-09-02', 'obuca, stap', 'Zlatibor', '', 'da', 'Planinarsko društvo Niš'),
(678, 'Milan', 'Vukajlovic', 'muski', 'milan93@gmail.com', '0623456123', '1993-11-20', 'stap', 'Kopaonik', '', 'da', 'Planinarsko društvo Niš'),
(777, 'Nikola', 'Gajic', 'muski', 'nikola83@gmail.com', '0641212123', '1983-07-16', 'stap', 'Tara', '', 'da', 'Planinarsko društvo Beograd'),
(789, 'Nikolina', 'Momcilovic', 'zenski', 'nina93@gmail.com', '0638989123', '1993-12-21', 'nema', 'Stara planina', '', 'da', 'Planinarsko društvo Novi sad'),
(888, 'Ana', 'Miletic', 'zenski', 'ana93@gmail.com', '0622212123', '1993-05-09', 'nema', 'Rtanj', '', 'da', 'Planinarsko društvo Beograd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
