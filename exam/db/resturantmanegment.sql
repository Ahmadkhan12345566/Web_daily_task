-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2017 at 12:38 AM
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
-- Table structure for table `admitcards`
--

DROP TABLE IF EXISTS `admitcards`;
CREATE TABLE IF NOT EXISTS `admitcards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admitcards`
--

INSERT INTO `admitcards` (`id`, `regno`, `title`, `date`, `room`) VALUES
(1, 1101, 'Itp', '25/13/2017', '4a'),
(2, 1101, 'Itc', '29/13/2017', '4b'),
(3, 1101, 'ss104', '22/12/2017', '3a'),
(4, 1101, 'tt008', '30/12/2017', '1b');

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
-- Table structure for table `coursdetails`
--

DROP TABLE IF EXISTS `coursdetails`;
CREATE TABLE IF NOT EXISTS `coursdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `semester` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursdetails`
--

INSERT INTO `coursdetails` (`id`, `s_id`, `title`, `grade`, `semester`) VALUES
(1, 1101, 'Itp', 'A+', '1'),
(2, 1101, 'Itc', 'B+', '1'),
(3, 1101, 'Mt101', 'D+', '1'),
(4, 1101, 'ss010', 'c+', '1'),
(5, 1101, 'oop', 'c+', '2'),
(6, 1101, 'cal-1', 'c+', '2'),
(7, 1101, 'se1', 'c+', '2'),
(8, 1101, 'ss104', 'c+', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custumerinfo`
--

INSERT INTO `custumerinfo` (`id`, `name`, `number`, `address`, `email`, `password`) VALUES
(2, 'raja anwar', '03023023021', 'alipur', 'raja@gmail.com', 'rajaraja'),
(3, 'an', 'an', 'an', 'an', 'an'),
(4, 'rj ', 'rj', 'rj', 'rj', 'rj'),
(5, 'Aqib ', '03110011001', 'auic', '1101', '111111'),
(6, 'khan', '00000000000', 'tramri', '0001', '000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
