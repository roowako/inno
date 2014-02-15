-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2014 at 06:10 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `source`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(12) NOT NULL,
  `pword` varchar(12) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(88) NOT NULL,
  `ip` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `name`, `username`, `pword`, `gender`, `email`, `ip`) VALUES
(00001, 'ruther bergonia', 'roowako', 'roowako', 'male', 'roowbergonia@gmail.com', 1),
(00002, 'ruther bergonia', 'roowakodfd', 'df345a', 'male', 'roowbergonia08@gmail.com', 1),
(00003, 'Shadow demon', 'shadow', 'demon07', 'male', 'demon@yahoo.com', 1),
(00004, 'Shadow demon', 'shadow12', 'fghjtyi', 'male', 'demon12@yahoo.com', 1),
(00005, 'Snow Patrol', 'chasing', 'patrol', 'male', 'snowpatrol@yahoo.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
