-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 06:58 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagiries`
--

CREATE TABLE IF NOT EXISTS `catagiries` (
  `catagery` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagiries`
--

INSERT INTO `catagiries` (`catagery`) VALUES
('php'),
('java'),
('jquery'),
('mysql'),
('Angularjs');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `Question` varchar(50) NOT NULL,
  `Option1` varchar(50) NOT NULL,
  `Option2` varchar(50) NOT NULL,
  `Option3` varchar(50) NOT NULL,
  `Option4` varchar(50) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
('Question1 Radio button', 'Option1', 'Option2', 'Option3', 'Option4', 'Answer'),
('Question2 text area', '', '', '', '', ''),
('Question1 Radio button', 'Option1', 'Option2', 'Option3', 'Option4', 'Answer'),
('Question2 text area', '', '', '', '', ''),
('Question 3 text area', '', '', '', '', ''),
('Question4 Radio', 'Option1', 'Option2', 'Option3', 'Option4', 'Answer'),
('Question 3 text area', '', '', '', '', ''),
('Question4 Radio', 'Option1', 'Option2', 'Option3', 'Option4', 'Answer');

-- --------------------------------------------------------

--
-- Stand-in structure for view `question`
--
CREATE TABLE IF NOT EXISTS `question` (
`Question` varchar(50)
,`Option1` varchar(50)
,`Option2` varchar(50)
,`Option3` varchar(50)
,`Option4` varchar(50)
);
-- --------------------------------------------------------

--
-- Structure for view `question`
--
DROP TABLE IF EXISTS `question`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `question` AS select `main`.`Question` AS `Question`,`main`.`Option1` AS `Option1`,`main`.`Option2` AS `Option2`,`main`.`Option3` AS `Option3`,`main`.`Option4` AS `Option4` from `main`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
