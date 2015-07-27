-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2015 at 10:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anand`
--

-- --------------------------------------------------------

--
-- Table structure for table `plateforms`
--

CREATE TABLE IF NOT EXISTS `plateforms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filed_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `plateforms`
--

INSERT INTO `plateforms` (`id`, `filed_name`) VALUES
(1, 'Upwork'),
(2, 'Elance'),
(3, 'Guru'),
(4, 'Freelancer'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testname` varchar(100) DEFAULT NULL,
  `platform` enum('Upwork','Elance','Guru','Freelancer','Other') DEFAULT NULL,
  `img` varchar(200) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `testname`, `platform`, `img`, `created`, `modified`) VALUES
(2, 'kunwar', 'Freelancer', 'K-logo.png', '2015-06-10', '2015-06-10'),
(4, 'kunwar', 'Elance', 'Chrysanthemum.jpg', '2015-06-11', '2015-06-11'),
(5, 'kunwar', 'Elance', 'Lighthouse.jpg', '2015-06-11', '2015-06-11'),
(6, 'abc', 'Other', 'Tulips.jpg', '2015-06-11', '2015-06-11'),
(7, 'kunwar', 'Elance', 'Chrysanthemum.jpg', '2015-06-11', '2015-06-11'),
(8, 'kunwar', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(9, 'kunwarjk', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(10, 'kunwarjk', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(11, 'kunwarjk', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(13, 'kunwar', 'Guru', '', '2015-06-12', '2015-06-12'),
(14, 'kunwar', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(15, 'kunwar', 'Freelancer', '', '2015-06-12', '2015-06-12'),
(23, 'one', 'Upwork', 'Chrysanthemum.jpg', '2015-06-16', '2015-06-16'),
(28, 'ghhggg', 'Guru', '', '2015-06-17', '2015-06-17'),
(29, 'dd', 'Elance', 'Koala.jpg', '2015-06-19', '2015-06-19');
