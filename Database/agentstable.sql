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
-- Table structure for table `agentstable`
--

DROP TABLE IF EXISTS `agentstable`;
CREATE TABLE IF NOT EXISTS `agentstable` (
  `Slno` int(250) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `PhoneNumber` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Active Members` int(250) NOT NULL,
  PRIMARY KEY (`Slno`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agentstable`
--

INSERT INTO `agentstable` (`Slno`, `Name`, `Email`, `Password`, `PhoneNumber`, `Address`, `Active Members`) VALUES
(1, 'Charan', 'charan@gmail.com', '123456789', '8989897889', 'Hyd', 0),
(2, 'Ram Nehan', 'ramm90@gmail.com', '123456789', '8585858686', 'Kammam', 0),
(3, 'Suresh Kumar', 'Suri90@gmail.com', '123456789', '7575848485', 'Secundrabad', 0),
(4, 'Praneeth', 'praneeth345@gmail.com', '123456789', '8745568978', 'Karimnagar', 0),
(5, 'Pooja Sharma', 'sharmapooja@gmail.com', '123456789', '8784858689', 'Adilabad', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
