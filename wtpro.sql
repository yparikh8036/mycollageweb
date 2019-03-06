-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 11:35 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wtpro`
--
CREATE DATABASE IF NOT EXISTS `wtpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wtpro`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) DEFAULT NULL,
  `fna` text,
  `lna` text,
  `una` text,
  `pass` text,
  `pos` text,
  `mob` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fna`, `lna`, `una`, `pass`, `pos`, `mob`, `email`) VALUES
(1, 'yash', 'parikh', 'yash', 'parikh', 'Student', '9409030825', 'yparikh102@gmail.com'),
(2, 'israr', 'mahedi', 'israr', 'mahedi', 'Faculty', '9879585700', 'israr.15beceg110@gmail.com'),
(3, 'meet', 'lalpurwala', 'meet', 'lalu', 'Guardian', '9409464685', 'meet.150410107036@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
