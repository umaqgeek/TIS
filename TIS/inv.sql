-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2014 at 02:47 PM
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
  `country` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `invoice_code` varchar(200) NOT NULL,
  `customer_ID` varchar(200) NOT NULL,
  `due_date` date NOT NULL,
  `bill_to` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(200) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(200) NOT NULL,
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`) VALUES
(1, 'archery'),
(3, 'arrow'),
(4, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `project_code` varchar(200) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `start_warranty` date NOT NULL,
  `end_warranty` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subitem`
--

CREATE TABLE IF NOT EXISTS `subitem` (
  `sub_id` int(200) NOT NULL AUTO_INCREMENT,
  `item_id` int(200) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `subitem`
--

INSERT INTO `subitem` (`sub_id`, `item_id`, `sub_name`, `quantity`, `price`) VALUES
(25, 1, 'compound bow', '1', 'RM2576'),
(26, 3, 'carbon arrow', '1', 'RM250'),
(27, 4, 'release', '1', 'RM190');

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
(1, 'tuffah', 'admin', 'Tuffah Informatics', '-', '-', '-', '-', '-', '+6019-9737579', 'admin'),
(9, 'kamarul9', 'marul94', 'Kamarul Bin Rizam', '941020-01-5897', 'MLO 2800 Kampung Melayu Sedenak', '81010', 'Kulaijaya', 'Johor', '+6017-7499736', 'staff'),
(13, 'ezwan94', 'wan123', 'Mohamad Ezwan Bin Mohd Shahrin', '941227-01-5915', 'NO 28 Kg Seri Maju Jaya machap', '86100', 'Ayer Hitam', 'Johor', '+6014-6241602', 'staff');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subitem`
--
ALTER TABLE `subitem`
  ADD CONSTRAINT `subitem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
