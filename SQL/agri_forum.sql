-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2014 at 03:44 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agri_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` smallint(6) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `position`) VALUES
(1, 'à¦§à¦¾à¦¨à§‡à¦° à¦ªà§à¦°à¦•à¦¾à¦°à¦­à§‡à¦¦', 'à§§. à¦§à¦¾à¦¨à§‡à¦° à¦œà¦¾à¦¤\r\nà§¨. à¦§à¦¾à¦¨à§‡à¦° à¦°à§‹à¦—\r\nà§©. à¦§à¦¾à¦¨à§‡à¦° à¦šà¦¾à¦·à¦¾à¦¬à¦¾à¦¦', 1),
(2, 'à¦—à¦®à§‡à¦° à¦šà¦¾à¦·à¦¾à¦¬à¦¾à¦¦', 'à¦à¦–à¦¾à¦¨à§‡ à¦—à¦®à§‡à¦° à¦¸à¦¬ à¦§à¦°à¦¨à§‡à¦° à¦šà¦¾à¦·à¦¾à¦¬à¦¾à¦¦ à¦ªà¦¦à§à¦§à¦¤à¦¿ à¦†à¦²à§‹à¦šà¦¨à¦¾ à¦•à¦°à¦¾ à¦¹à¦¬à§‡\r\nà¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦ à¥¤', 2);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `parent` smallint(6) NOT NULL,
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` longtext NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `timestamp2` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`parent`, `id`, `id2`, `title`, `message`, `authorid`, `timestamp`, `timestamp2`) VALUES
(1, 1, 1, 'Topic-Rice 1', '1.Topic 1<br />\r\n2.Topic 2<br />\r\n3.Topic 3<br />\r\n4.Topic 4', 2, 1401413010, 1401840122),
(1, 1, 3, '', 'à¦†à¦®à¦¾à¦° à¦•à¦®à§‡à¦¨à§à¦Ÿà§‡à¦° à¦°à¦¿à¦ªà§à¦²à¦¾à¦‡ à¦à¦–à¦¨à¦“ à¦ªà§‡à¦²à¦¾à¦® à¦¨à¦¾ !', 3, 1401840122, 1401840122),
(1, 1, 2, '', 'It was a nice topic.<br />\r\nThnx for the post :)', 3, 1401694437, 1401694437);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `avatar`, `signup_date`) VALUES
(2, 'Ashif', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nmujtoba@gmail.com', '', 1401138843),
(3, 'Rocky', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'rocky@yahoo.com', '', 1401838973);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
