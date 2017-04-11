-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 06:06 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE IF NOT EXISTS `u_reg` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `st_name` text NOT NULL,
  `st_id` varchar(50) NOT NULL,
  `st_session` int(50) NOT NULL,
  `st_dept` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`id`, `st_name`, `st_id`, `st_session`, `st_dept`) VALUES
(1, 'Md.Touhidur Rahman', 'ASH1201059M', 2011, 'CSTE'),
(10, 'Tasfeya Afrin', 'BKH1201065F', 2011, 'BBA'),
(11, 'Hasan Zamil Ahmaed', 'ASH1201025M', 2011, 'CSTE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
