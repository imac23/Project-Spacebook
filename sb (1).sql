-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2013 at 01:05 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sb`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `username` varchar(32) NOT NULL,
  `friend` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`username`, `friend`) VALUES
('Dave', 'Dan'),
('Dave', 'Pete'),
('Dave', 'Rick'),
('Dan', 'Dave'),
('Dan', 'Pete'),
('Dan', 'Rick'),
('Pete', 'Dan'),
('Pete', 'Dave'),
('Pete', 'Rick'),
('Kevin', 'Dan'),
('Kevin', 'Dave'),
('Kevin', 'Pete'),
('Kevin', 'Rick');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `galleryimage` varchar(255) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `username`, `galleryimage`) VALUES
(32, 'Bart', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Desert.jpg'),
(33, 'lisa', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Koala1.jpg'),
(34, 'lisa', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips1.jpg'),
(35, 'lisa', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Hydrangeas.jpg'),
(36, 'homer', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Desert1.jpg'),
(37, 'homer', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Chrysanthemum1.jpg'),
(38, 'homer', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Lighthouse.jpg'),
(39, 'Bart', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips2.jpg'),
(41, 'Thomas', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Penguins2.jpg'),
(42, 'Thomas', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Jellyfish2.jpg'),
(43, 'Thomas', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Lighthouse1.jpg'),
(45, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Penguins3.jpg'),
(47, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Jellyfish3.jpg'),
(48, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Lighthouse2.jpg'),
(49, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Hydrangeas1.jpg'),
(50, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips3.jpg'),
(51, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Koala2.jpg'),
(52, 'Alan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Desert3.jpg'),
(54, 'Bill', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Penguins.jpg'),
(55, 'Bill', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips.jpg'),
(56, 'Bill', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Koala.jpg'),
(57, 'Pete', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Chrysanthemum1.jpg'),
(58, 'Pete', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Jellyfish.jpg'),
(59, 'Pete', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips1.jpg'),
(60, 'Pete', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Penguins1.jpg'),
(61, 'Pete', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Hydrangeas.jpg'),
(62, 'Dan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Chrysanthemum2.jpg'),
(63, 'Dan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Jellyfish1.jpg'),
(64, 'Dan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Tulips2.jpg'),
(65, 'Dan', 'http://localhost:8080/ci/spacebook2/assets/images/thumbnails/Penguins2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`username`, `password`) VALUES
('Dan', 'pass3'),
('Dave', 'pass1'),
('Kevin', 'pass4'),
('Pete', 'pass2'),
('Rick', 'pass4');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(32) NOT NULL,
  `to` varchar(32) NOT NULL,
  `message` varchar(512) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `from`, `to`, `message`) VALUES
(2, 'Pete', 'Dan', 'Hi Pete, Fancy a pint later?'),
(3, 'Dan', 'Dave', 'Hi Dave!!!!!!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `privatemessages`
--

CREATE TABLE IF NOT EXISTS `privatemessages` (
  `message_id` int(20) NOT NULL AUTO_INCREMENT,
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `privatemessage` varchar(255) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `privatemessages`
--

INSERT INTO `privatemessages` (`message_id`, `from`, `to`, `privatemessage`) VALUES
(29, 'Pete', 'Dan', 'ps. don''t tell Dave');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `user` varchar(265) NOT NULL,
  `profiletext` varchar(256) NOT NULL,
  `imagelocation` varchar(255) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user`, `profiletext`, `imagelocation`) VALUES
('Dan', 'Hi, Dan here.....:)', 'http://localhost:8080/ci/spacebook2/assets/images/mug61.jpg'),
('Maggie', 'Maggie here!!!!!!!', 'http://localhost:8080/ci/spacebook2/assets/images/maggie1.gif'),
('Pete', 'Hi, Pete here!!!!!', 'http://localhost:8080/ci/spacebook2/assets/images/mug41.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
