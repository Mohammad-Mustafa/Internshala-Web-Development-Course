-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2019 at 05:41 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `contact`, `city`) VALUES
(1, 'Mohammad Mustafa', '', 'mohammadmustafa2k19@gmail', '1', 'HOUSE NO. 191 WARD NO. 11 BALMIKI NAGAR SONAULI MA', 2147483647, 'Agra'),
(2, 'Rahul Sir VNS', '', 'rahulsirVNS@gmail.com', 'vns123', 'VNSassi ghat', 1234567891, 'VNS'),
(3, '', '', 'Mustafa007@gmail.co', '151656', '', 0, ''),
(4, 'lazy lad', '', 'lazylad@gmail.com', 'lazy@123', 'Bhagwan Talkies', 2147483647, 'AGRA');

-- --------------------------------------------------------

--
-- Table structure for table `users_item`
--

CREATE TABLE IF NOT EXISTS `users_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `item_id` int(20) NOT NULL,
  `status` enum('Added to cart','Confirm') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users_item`
--

INSERT INTO `users_item` (`id`, `user_id`, `item_id`, `status`) VALUES
(30, 1, 1, 'Added to cart'),
(29, 1, 2, 'Added to cart');
