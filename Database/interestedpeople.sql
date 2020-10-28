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
-- Table structure for table `interestedpeople`
--

DROP TABLE IF EXISTS `interestedpeople`;
CREATE TABLE IF NOT EXISTS `interestedpeople` (
  `Slno` int(250) NOT NULL AUTO_INCREMENT,
  `Name` char(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `PhoneNumber` varchar(250) NOT NULL,
  `Address` varchar(400) NOT NULL,
  `Message` varchar(350) NOT NULL,
  `Plan` varchar(250) NOT NULL,
  PRIMARY KEY (`Slno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interestedpeople`
--

INSERT INTO `interestedpeople` (`Slno`, `Name`, `Email`, `PhoneNumber`, `Address`, `Message`, `Plan`) VALUES
(1, 'Veeraswamy Lingala', 'veeraveeru07@gmail.com', '8179311365', 'Hanamkonda', '.', '1,00,000'),
(2, 'Rajesh Mamu', 'vv@gmail.com', '918179311365', 'Hanamkonda', 'I want to KNow About Chits', '1,00,000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
