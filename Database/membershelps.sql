-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2020 at 09:28 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `membershelps`
--

DROP TABLE IF EXISTS `membershelps`;
CREATE TABLE IF NOT EXISTS `membershelps` (
  `Slno` int(250) NOT NULL AUTO_INCREMENT,
  `Email` varchar(250) NOT NULL,
  `Help` varchar(250) NOT NULL,
  PRIMARY KEY (`Slno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershelps`
--

INSERT INTO `membershelps` (`Slno`, `Email`, `Help`) VALUES
(1, 'veeraveeru07@gmail.ocom', 'I want to know monthly plans'),
(2, 'veeraveeru07@gmail.ocom', 'I want to know Yearlyplans'),
(3, 'ran90@gmail.com', 'vvvvvvvvvvvveeeeeeeeeeeeeeeee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
