-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 04:34 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tis`
--
CREATE DATABASE IF NOT EXISTS `tis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tis`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(200) NOT NULL AUTO_INCREMENT,
  `client_code` varchar(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_comp` varchar(200) NOT NULL,
  `comp_address` varchar(200) NOT NULL,
  `comp_phone` varchar(200) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_code`, `client_name`, `client_comp`, `comp_address`, `comp_phone`) VALUES
(1, 'QA1008', 'Nur Fatin Nadia Bt Mohamad Sadon', 'Al Qanaah Resources Sdn. Bhd', 'No 6, Jln 9/9, Perjiranan 9, Pasir Gudang Industrial Estate, 81700 Pasir Gudang, Johor.', '07-2511170');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(200) NOT NULL AUTO_INCREMENT,
  `client_id` int(200) NOT NULL,
  `pro_id` int(200) NOT NULL,
  `inv_code` varchar(200) NOT NULL,
  `inv_date` date NOT NULL,
  `inv_due` date NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(200) NOT NULL AUTO_INCREMENT,
  `inv_id` int(200) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_quantity` varchar(200) NOT NULL,
  `item_price` varchar(200) NOT NULL,
  `item_total` varchar(200) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `pro_id` int(200) NOT NULL AUTO_INCREMENT,
  `pro_code` varchar(200) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_warranty` varchar(200) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_id`, `pro_code`, `pro_name`, `pro_warranty`) VALUES
(1, 'PZ109', 'Data Staff System', '6 Month');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `ic` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `ic`, `dob`, `phone`, `email`, `address`, `position`, `level`) VALUES
(1, 'tuffah', 'admin', 'Tuffah Informatics', '-', '2013-01-01', '019-9737579', 'umar@tuffah.info', 'No13, Lorong 1, Jalan Bukit Beruang Utama, Taman Bukit Puteri, 75450, Ayer Keroh, Melaka', 'Managing Director', 'admin'),
(2, 'kamarul', 'kamarul94', 'Kamalrul Bin Rizam', '941020-01-5897', '1994-10-20', '017-7499736', 'kamarulrizam94@gmail.com', 'MLO 2800, Kampung Melayu Sedenak, 81010 Kulaijaya, Johor', 'Internship Student', 'staff'),
(3, 'ezwan', 'wan123', 'Ka', '123344', '2015-02-04', '', '', '', 'Internship Student', 'staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
