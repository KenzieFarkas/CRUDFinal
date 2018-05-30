-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 02:14 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lululemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `infromation`
--

CREATE TABLE IF NOT EXISTS `infromation` (
  `order_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `leggingtype` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `size_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `color_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `infromation`
--

INSERT INTO `infromation` (`order_id`, `lastname`, `firstname`, `leggingtype`, `size_id`, `color_id`) VALUES
(1, 'h', 'h', 'Flow & Go tight', '6', 'Olive Green'),
(2, 'h', 'h', 'Flow & Go tight', '6', 'Olive Green'),
(3, 'f', 'k', 'High Times Pant', '6', 'Black'),
(4, 'f', 'k', 'High Times Pant', '6', 'Black'),
(5, 'R', 'Mainhardt', 'Align Pant II', '10', 'Navy'),
(6, 'lol', 'bob', 'Flow & Go tight', '12', 'Black'),
(7, 'Anderle', 'Kyra', 'Align Pant II', '2', 'Olive Green'),
(8, 'Jasmine', 'Dixon', 'High Times Pant', '10', 'Maroon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
