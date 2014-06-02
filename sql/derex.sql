-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2014 at 06:39 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `derex`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `job_type` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `skills` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `mandotary_skills` text NOT NULL,
  `desire_skills` text NOT NULL,
  `created_date` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`sno`, `job_type`, `job_title`, `location`, `skills`, `duration`, `mandotary_skills`, `desire_skills`, `created_date`) VALUES
(1, 'sr Php Programmer', 'php', 'Hyd', 'jquery', '9 months', '', 'ajax,json', '02/06/2014'),
(2, 'sr Php Programmer', 'php', 'Hyd', 'jquery', '9 months', '', 'ajax,json', '02/06/2014'),
(3, 'ghgfh', 'php', 'fghfgh', 'fghgf', 'hfgh', 'hfghfg', 'gfhfghfghgfh', '02/06/2014 06:06:21'),
(4, 'ghgfh', 'php', 'fghfgh', 'fghgf', 'hfgh', 'hfghfg', 'gfhfghfghgfh', '02/06/2014 06:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `firstname`, `lastname`, `phonenumber`, `email`, `resume`, `created_date`) VALUES
(4, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'checkout.xlsx', '0000-00-00 00:00:00'),
(5, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'daily work list_may30.xlsx', '0000-00-00 00:00:00'),
(6, 'POPCORNAPPS', 'PVT.LTD', '919581622225', 'padma.pamidi@popcornapps.com', 'daily work list.xlsx', '0000-00-00 00:00:00'),
(7, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'Oncue_Test Cases_may30th2014.xlsx', '0000-00-00 00:00:00'),
(8, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'Oncue_Test Cases.xlsx', '0000-00-00 00:00:00'),
(9, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'purchase.xlsx', '0000-00-00 00:00:00'),
(10, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'purchase.xlsx', '0000-00-00 00:00:00'),
(11, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'checkout.xlsx', '0000-00-00 00:00:00'),
(12, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'purchase.xlsx', '0000-00-00 00:00:00'),
(13, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'purchase.xlsx', '0000-00-00 00:00:00'),
(14, 'Priya', 'Pamidi', '919581622225', 'padma.pamidi@popcornapps.com', 'Oncue_Test Cases_may30th2014.xlsx', '0000-00-00 00:00:00');
