-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 02:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--
CREATE DATABASE IF NOT EXISTS `miniproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `miniproject`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `ID` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lbook`
--

DROP TABLE IF EXISTS `lbook`;
CREATE TABLE IF NOT EXISTS `lbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lbook`
--

INSERT INTO `lbook` (`id`, `bname`, `author`, `review`, `status`) VALUES
(1, 'wings of fire', 'vijay', 'kolam pwli sanm', ''),
(2, 'kayar', 'KR Meera', 'kollila\r\n', ''),
(3, 'story of my soul', 'little flower', 'no words', ''),
(4, 'helen keller', 'hellen keller', 'good book', '');

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

DROP TABLE IF EXISTS `lend`;
CREATE TABLE IF NOT EXISTS `lend` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `issuedate` date NOT NULL,
  `returndate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `cid` int(10) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ID`, `Username`, `Password`, `cid`, `dept`) VALUES
(1, 'Jithu', 'jolly', NULL, NULL),
(2, 'Kevin', 'Kevin', NULL, NULL),
(7, 'vijay', 'vijay', 19, 'CS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
