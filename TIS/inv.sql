-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2014 at 02:16 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inv`
--
CREATE DATABASE IF NOT EXISTS `inv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inv`;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `county` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `invoice_code` varchar(200) NOT NULL,
  `customer_ID` varchar(200) NOT NULL,
  `due_date` datetime NOT NULL,
  `bill_to` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(200) NOT NULL,
  `subitem_name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `project_code` varchar(200) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `start_warranty` datetime NOT NULL,
  `end_warranty` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ic` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `ic`, `address`, `postcode`, `state`, `country`, `phone`, `level`) VALUES
(1, 'tuffah', 'admin', 'Tuffah Informatics', '-', '-', '-', '-', '-', '019-9737579', 'admin'),
(2, 'kamarul94', 'marul94', 'Kamalrul bin Rizam', '941020-01-5897', 'MLO 2800 Kampung Melayu Sedenak', '81010', 'Kulaijaya', 'Johor', '017-7499736', 'staff'),
(3, 'ezwan10', 'wan123', 'Mohamad Ezwan Bin Mohd Shahrin', '941227-01-5915', 'No28 kampung seri maju jaya', '86100', 'ayer hitam', 'johor', '014-6241620', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
