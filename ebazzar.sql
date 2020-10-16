-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2020 at 01:22 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebazzar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abba`
--

DROP TABLE IF EXISTS `abba`;
CREATE TABLE IF NOT EXISTS `abba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Cena` int(11) NOT NULL,
  `Placanje` varchar(255) NOT NULL,
  `Isporuka` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abba`
--

INSERT INTO `abba` (`id`, `image`, `image_text`, `Ime`, `Cena`, `Placanje`, `Isporuka`) VALUES
(8, 'qwewqe.jpg', 'Novogodisnja jelka jako jeftin osamo 1000 dinara mozre baksis cenkanje sve', 'Jako lepa jelka', 100, 'samo beksom', 'samo beks nista drugo'),
(7, 'dsa.jpg', 'Pita sa jabukama ', 'Jabuka', 150, 'nista no na ruke ', 'postom'),
(6, 'qwewqe.jpg', 'Loptica skocica skace ', 'Loptica', 100, 'Na ruke samo', 'Isto samo na ruke ');

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

DROP TABLE IF EXISTS `predmeti`;
CREATE TABLE IF NOT EXISTS `predmeti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(255) NOT NULL,
  `Opis` longtext NOT NULL,
  `Cena` int(20) NOT NULL,
  `Placanje` varchar(255) NOT NULL,
  `Nacinisporuke` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`ID`, `Ime`, `Opis`, `Cena`, `Placanje`, `Nacinisporuke`, `image_text`, `image`) VALUES
(1, 'sda', 'sad', 213, 'sadasd', 'sadasd', 'sdas', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `probna`
--

DROP TABLE IF EXISTS `probna`;
CREATE TABLE IF NOT EXISTS `probna` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Opis` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Grad` varchar(255) NOT NULL,
  `Ulicabroj` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefon` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Grad`, `Ulicabroj`, `Email`, `Telefon`) VALUES
(9, 'admin', 'admin', 'novi sad', '21asd', 'stefanbulovic@gmail.com', 22),
(7, 'kistoa', '123', '214asd', '21asd', 'new@mail.com', 9325325),
(6, 'kisto', '123', '214asd', '21asd', 'new@mail.com', 9325325),
(8, 'kistooo', 'kistooo', '124', '214', '1243@sdf3321', 1245124),
(11, 'admin', 'admin', 'adimn', 'adiminas', 'stefalknsd@daw', 21421412),
(12, 'asdsad', 'asd', '214asd', '21asd', 'stefanbulovic@gmail.com', 124124214);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
