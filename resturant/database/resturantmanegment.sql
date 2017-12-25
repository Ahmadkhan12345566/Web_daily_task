-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2017 at 11:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturantmanegment`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookedtabeleinfo`
--

DROP TABLE IF EXISTS `bookedtabeleinfo`;
CREATE TABLE IF NOT EXISTS `bookedtabeleinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `tables` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedtabeleinfo`
--

INSERT INTO `bookedtabeleinfo` (`id`, `user_id`, `date`, `tables`) VALUES
(5, 3, '1980', '5'),
(6, 3, '1968', ''),
(7, 3, '1968', '');

-- --------------------------------------------------------

--
-- Table structure for table `custumerinfo`
--

DROP TABLE IF EXISTS `custumerinfo`;
CREATE TABLE IF NOT EXISTS `custumerinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custumerinfo`
--

INSERT INTO `custumerinfo` (`id`, `name`, `number`, `address`, `email`, `password`) VALUES
(2, 'raja anwar', '03023023021', 'alipur', 'raja@gmail.com', 'rajaraja'),
(3, 'an', 'an', 'an', 'an', 'an'),
(4, 'rj ', 'rj', 'rj', 'rj', 'rj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
