-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2014 at 02:59 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `sr` int(5) NOT NULL AUTO_INCREMENT,
  `q1` int(5) NOT NULL,
  `q2` int(5) NOT NULL,
  `q3` int(5) NOT NULL,
  `q4` int(5) NOT NULL,
  `q5` int(5) NOT NULL,
  `topics` varchar(100) NOT NULL,
  `sspeaker` varchar(100) NOT NULL,
  `s` varchar(100) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`sr`, `q1`, `q2`, `q3`, `q4`, `q5`, `topics`, `sspeaker`, `s`) VALUES
(1, 5, 5, 5, 5, 5, 'karate', 'nope', 'nothing'),
(2, 5, 4, 5, 5, 4, 'second', 'second', 'second'),
(3, 5, 4, 5, 5, 4, 'second', 'second', 'second'),
(4, 3, 5, 5, 5, 2, '', '', ''),
(5, 4, 5, 4, 3, 4, 'abc', 'abc', 'abc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
