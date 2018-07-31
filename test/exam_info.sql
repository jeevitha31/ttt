-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 02:55 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans_info`
--

CREATE TABLE `ans_info` (
  `Question` varchar(1000) NOT NULL,
  `Answer` varchar(10000) NOT NULL,
  `Correct` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans_info`
--

INSERT INTO `ans_info` (`Question`, `Answer`, `Correct`, `language`, `cid`, `id`) VALUES
('hi que', 'this is  for test ans', 'is  for', 'php', 1, 1),
('what is css?', 'cascading style sheet', 'cascading style sheet', 'js', 1, 2),
('what is html?', 'hyper text markuplanguage', '', 'html', 1, 3),
('what is install in xtc?', 'its is like the inserting tee box and check box in DB', '', 'php', 456, 4),
('what is jquery?', 'its an java script library?', 'its an java script library?', 'js', 456, 5),
('what is php?', 'php is a programming language', '', 'php', 123, 6),
('what is your name?', 'venkat', 'venk', 'php', 123, 7),
('hi', 'this is for test', '', 'js', 123, 8),
('mama', 'amam', 'amam', 'html', 123, 9);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `cid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `examdate` varchar(11) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `result` int(10) NOT NULL,
  `q&a` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`cid`, `cname`, `mobile`, `email`, `examdate`, `exp`, `result`, `q&a`) VALUES
(1, 'venkat', 123456789, 'venkat@gmail.com', '12-09-2017', '0', 2, 'hi'),
(123, 'bala', 12345678, 'bala@murugan.com', '12.12.2017', '2', 3, 'this'),
(456, 'gokul', 123456789, 'gokul@gmail.com', '12.12.2012', '2', 2, 'is');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pnum` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`fname`, `lname`, `email`, `pnum`) VALUES
('venkat', 'gquery', 'kakajkjkjkjkjkjkaka@gmail.com', 1456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans_info`
--
ALTER TABLE `ans_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans_info`
--
ALTER TABLE `ans_info`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `candidate_details`
--
ALTER TABLE `candidate_details`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
