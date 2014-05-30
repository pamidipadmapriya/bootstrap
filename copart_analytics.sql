-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 03:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `copart_analytics`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_kicked`
--

CREATE TABLE IF NOT EXISTS `app_kicked` (
  `Userid` varchar(100) DEFAULT NULL,
  `kicked_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_kicked`
--

INSERT INTO `app_kicked` (`Userid`, `kicked_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `camera_used`
--

CREATE TABLE IF NOT EXISTS `camera_used` (
  `Userid` varchar(100) DEFAULT NULL,
  `camera_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera_used`
--

INSERT INTO `camera_used` (`Userid`, `camera_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `filter_used`
--

CREATE TABLE IF NOT EXISTS `filter_used` (
  `Userid` varchar(100) DEFAULT NULL,
  `filter_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_used`
--

INSERT INTO `filter_used` (`Userid`, `filter_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `installationinfo`
--

CREATE TABLE IF NOT EXISTS `installationinfo` (
  `Userid` char(100) DEFAULT NULL,
  `City` char(100) DEFAULT NULL,
  `app_version` varchar(100) NOT NULL DEFAULT '3.0',
  `device_version` varchar(100) NOT NULL DEFAULT '7.0',
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installationinfo`
--

INSERT INTO `installationinfo` (`Userid`, `City`, `app_version`, `device_version`, `created_date`) VALUES
('YXAPP102', 'Plano', '3.0', '7.0', '2014-03-13'),
('YXAPP02', 'Hamilton', '3.0', '7.0', '2014-03-13'),
('YXAPP11', 'Hyderabad', '3.0', '7.0', '2014-03-13'),
('YXAPP01', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP03', 'Dallas', '3.0', '7.0', '2014-03-13'),
('YXAPP04', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP05', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP06', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP07', 'Plano', '3.0', '7.0', '2014-03-14'),
('YXAPP08', 'Hyderabad', '3.0', '7.0', '2014-03-14'),
('YXAPP09', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP10', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP12', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP13', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP14', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP15', 'Dallas', '3.0', '7.0', '2014-03-14'),
('YXAPP16', 'Dallas', '3.0', '7.0', '2014-03-14'),
('TEST', 'California', '3.0', '7.0', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `logout_used`
--

CREATE TABLE IF NOT EXISTS `logout_used` (
  `Userid` varchar(100) DEFAULT NULL,
  `logout_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logout_used`
--

INSERT INTO `logout_used` (`Userid`, `logout_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `photos_deleted`
--

CREATE TABLE IF NOT EXISTS `photos_deleted` (
  `Userid` varchar(100) DEFAULT NULL,
  `photos_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos_deleted`
--

INSERT INTO `photos_deleted` (`Userid`, `photos_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP07', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP07', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP07', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `report_uploads`
--

CREATE TABLE IF NOT EXISTS `report_uploads` (
  `Userid` char(100) DEFAULT NULL,
  `WorkOrder` char(100) DEFAULT NULL,
  `status` char(100) DEFAULT NULL,
  `images_count` char(100) DEFAULT NULL,
  `videos_count` char(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_uploads`
--

INSERT INTO `report_uploads` (`Userid`, `WorkOrder`, `status`, `images_count`, `videos_count`, `created_date`) VALUES
('YXAPP02', 'ASWPP105', 'offline', '5', '10', '2014-03-18'),
('YXAPP01', 'ASWPP101', 'online', '6', '8', '2014-03-18'),
('YXAPP01', 'ASWPP102', 'online', '3', '9', '2014-03-18'),
('YXAPP02', 'ASWPP104', 'online', '4', '4', '2014-03-18'),
('YXAPP02', 'ASWPP105', 'online', '9', '3', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `search_used`
--

CREATE TABLE IF NOT EXISTS `search_used` (
  `Userid` varchar(100) DEFAULT NULL,
  `search_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_used`
--

INSERT INTO `search_used` (`Userid`, `search_count`, `created_date`) VALUES
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `sort_used`
--

CREATE TABLE IF NOT EXISTS `sort_used` (
  `Userid` varchar(100) DEFAULT NULL,
  `sort_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sort_used`
--

INSERT INTO `sort_used` (`Userid`, `sort_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18'),
('YXAPP06', '1', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `step_report`
--

CREATE TABLE IF NOT EXISTS `step_report` (
  `Userid` char(100) DEFAULT NULL,
  `WorkOrder` char(100) DEFAULT NULL,
  `Step1` char(100) DEFAULT NULL,
  `Step2` char(100) DEFAULT NULL,
  `Step3` char(100) DEFAULT NULL,
  `Step4` char(100) DEFAULT NULL,
  `Step5` char(100) DEFAULT NULL,
  `location` varchar(100) NOT NULL DEFAULT 'Dallas',
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `step_report`
--

INSERT INTO `step_report` (`Userid`, `WorkOrder`, `Step1`, `Step2`, `Step3`, `Step4`, `Step5`, `location`, `created_date`) VALUES
('YXAPP01', 'ASWPP101', '10', '10', '20', '30', '30', 'Dallas', '2014-03-20'),
('YXAPP01', 'ASWPP102', '20', '20', '20', '10', '30', 'Dallas', '2014-03-20'),
('YXAPP02', 'ASWPP103', '30', '30', '30', '10', '30', 'Dallas', '2014-03-20'),
('YXAPP02', 'ASWPP104', '20', '20', '20', '10', '30', 'Dallas', '2014-03-20'),
('YXAPP02', 'ASWPP106', '10', '10', '10', '10', '20', 'Dallas', '2014-03-20'),
('YXAPP02', 'ASWPP105', '10', '10', '10', '10', '20', 'Dallas', '2014-03-20'),
('YXAPP03', 'ASWPP107', '10', '20', '10', '10', '20', 'Dallas', '2014-03-17'),
('YXAPP03', 'ASWPP108', '30', '20', '10', '10', '10', 'Dallas', '2014-03-17'),
('YXAPP03', 'ASWPP108', '10', '10', '10', '10', '20', 'Dallas', '2014-03-17'),
('YXAPP03', 'ASWPP109', '10', '20', '40', '20', '30', 'Dallas', '2014-03-17'),
('YXAPP04', 'ASWPP110', '3', '5', '4', '10', '20', 'Dallas', '2014-03-17'),
('YXAPP04', 'ASWPP111', '1', '2', '4', '2', '3', 'Dallas', '2014-03-17'),
('YXAPP04', 'ASWPP112', '13', '15', '14', '10', '20', 'Dallas', '2014-03-17'),
('YXAPP04', 'ASWPP113', '11', '12', '14', '12', '13', 'Dallas', '2014-03-17'),
('YXAPP05', 'ASWPP114', '10', '15', '10', '10', '20', 'Dallas', '2014-03-17'),
('YXAPP05', 'ASWPP115', '10', '10', '10', '10', '10', 'Dallas', '2014-03-18'),
('YXAPP05', 'ASWPP116', '10', '15', '10', '10', '20', 'Dallas', '2014-03-18'),
('YXAPP05', 'ASWPP117', '10', '10', '10', '10', '10', 'Dallas', '2014-03-18'),
('YXAPP05', 'ASWPP118', '50', '23', '12', '34', '11', 'Dallas', '2014-03-18'),
('YXAPP05', 'ASWPP119', '5', '6', '8', '9', '23', 'Dallas', '2014-03-18'),
('YXAPP06', 'ASWPP120', '10', '10', '10', '10', '10', 'Dallas', '2014-03-18'),
('YXAPP06', 'ASWPP121', '5', '5', '5', '5', '5', 'Dallas', '2014-03-18'),
('YXAPP07', 'ASWPP122', '3', '3', '2', '1', '1', 'Hamilton', '2014-03-18'),
('YXAPP07', 'ASWPP123', '3', '2', '4', '5', '6', 'Hamilton', '2014-03-18'),
('YXAPP07', 'ASWPP124', '3', '3', '2', '1', '1', 'Hamilton', '2014-03-18'),
('YXAPP07', 'ASWPP125', '3', '2', '4', '5', '6', 'Hamilton', '2014-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('padma.pamid@popcornapps.com', 'padmapriya'),
('ravi.pulluri@popcornapps.com', 'popcorn'),
('samvit@popcornapps.com', 'popcorn'),
('rs@popcornapps.com', 'popcorn'),
('girish@popcornapps.com', 'popcorn'),
('padhupriya@gmail.com', 'padmapriya');

-- --------------------------------------------------------

--
-- Table structure for table `videos_deleted`
--

CREATE TABLE IF NOT EXISTS `videos_deleted` (
  `Userid` varchar(100) DEFAULT NULL,
  `videos_count` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos_deleted`
--

INSERT INTO `videos_deleted` (`Userid`, `videos_count`, `created_date`) VALUES
('YXAPP01', '1', '2014-03-18'),
('YXAPP01', '1', '2014-03-18'),
('YXAPP02', '1', '2014-03-18'),
('YXAPP03', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18'),
('YXAPP04', '1', '2014-03-18'),
('YXAPP05', '1', '2014-03-18');
