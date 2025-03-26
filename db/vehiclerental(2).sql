-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 12:41 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehiclerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE IF NOT EXISTS `adminregistration` (
  `id` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Opassword` varchar(50) NOT NULL,
  `Npassword` varchar(40) NOT NULL,
  `Rpassword` varchar(40) NOT NULL,
  `sex` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`id`, `fname`, `lname`, `Opassword`, `Npassword`, `Rpassword`, `sex`) VALUES
(234, 'ern', 'sd', '23', '23', '23', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `canceledreservations`
--

CREATE TABLE IF NOT EXISTS `canceledreservations` (
  `cust_name` varchar(34) NOT NULL,
  `cust_id` int(34) NOT NULL,
  `vehicle_name` varchar(43) NOT NULL,
  `plate_no` varchar(34) NOT NULL,
  `cause` text NOT NULL,
  PRIMARY KEY (`cust_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canceledreservations`
--

INSERT INTO `canceledreservations` (`cust_name`, `cust_id`, `vehicle_name`, `plate_no`, `cause`) VALUES
('google', 6655, 'TOYOTA', 'et 4532', 'finish'),
('RETA', 321, 'yaris', 'ET 2098764', 'hjghfuidjskfjn'),
('terefe', 543, 'TOYOTA', 'et 1002', 'widding cause!');

-- --------------------------------------------------------

--
-- Table structure for table `changepwd`
--

CREATE TABLE IF NOT EXISTS `changepwd` (
  `username` varchar(30) NOT NULL,
  `opassword` varchar(40) NOT NULL,
  `npassword` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `e_mail` varchar(90) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `fname`, `lname`, `e_mail`, `message`, `time`) VALUES
(3, 'dad', 'fi', 'dad@gmail.com', 'good ', '2015-06-13 00:00:00'),
(4, 'ERmias', 'YILMA', 'erm@gmail.com', 'very good and amazing service keep it up!!\r\n', '2015-06-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Table structure for table `rentregistration`
--

CREATE TABLE IF NOT EXISTS `rentregistration` (
  `customer_id` int(34) NOT NULL,
  `Customer_Name` varchar(43) NOT NULL,
  `sex` varchar(43) NOT NULL,
  `City` varchar(43) NOT NULL,
  `phone_no` varchar(43) NOT NULL,
  `vehicle_name` varchar(43) NOT NULL,
  `plate_number` varchar(43) NOT NULL,
  `brand` varchar(43) NOT NULL,
  `model` year(4) NOT NULL,
  `dailyprice` int(34) NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentregistration`
--

INSERT INTO `rentregistration` (`customer_id`, `Customer_Name`, `sex`, `City`, `phone_no`, `vehicle_name`, `plate_number`, `brand`, `model`, `dailyprice`, `rent_date`, `return_date`) VALUES
(332, 'dadi', 'Male', 'Wolaita Sodo', '921686968', 'TOYOTA', 'et 2003', 'y570', 2011, 2000, '2015-06-13', '2015-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `customer_id` int(34) NOT NULL,
  `Customer_Name` varchar(43) NOT NULL,
  `sex` varchar(43) NOT NULL,
  `City` varchar(43) NOT NULL,
  `phone_no` varchar(43) NOT NULL,
  `vehicle_name` varchar(43) NOT NULL,
  `plate_number` varchar(43) NOT NULL,
  `brand` varchar(43) NOT NULL,
  `model` year(4) NOT NULL,
  `dailyprice` int(34) NOT NULL,
  `rdate` date NOT NULL,
  `ddate` date NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`customer_id`, `Customer_Name`, `sex`, `City`, `phone_no`, `vehicle_name`, `plate_number`, `brand`, `model`, `dailyprice`, `rdate`, `ddate`) VALUES
(1234, 'adisu', 'Male', 'Arbaminch', '0920980648', 'toyata', 'sn 1001', 'YARIS', 2009, 2000, '0000-00-00', '0000-00-00'),
(4444, 'hooy', 'Female', 'Adama', '0991234565', 'TOYOTA', 'ET 4532', 'LAND CRUSER', 2009, 3000, '2015-06-16', '2015-06-21'),
(5555, 'ERMIAS YILMA', 'Male', 'Arbaminch', '0991234565', 'TOYOTA', 'et 234567', 'A123', 2003, 2000, '2015-06-16', '2015-06-22'),
(6655, 'google', 'Female', 'Adama', '0991234565', 'TOYOTA', 'ET 4532', 'FORD', 2009, 10000, '2015-06-01', '2015-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `updaterent`
--

CREATE TABLE IF NOT EXISTS `updaterent` (
  `cust_name` varchar(34) NOT NULL,
  `cust_id` int(34) NOT NULL,
  `vehiclename` varchar(34) CHARACTER SET utf8 NOT NULL,
  `plate_no` varchar(34) NOT NULL,
  `currentdays` int(34) NOT NULL,
  `additional_days` int(34) NOT NULL,
  `cause` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updaterent`
--

INSERT INTO `updaterent` (`cust_name`, `cust_id`, `vehiclename`, `plate_no`, `currentdays`, `additional_days`, `cause`) VALUES
('demis', 556, 'TOYOTA', 'aa 667', 10, 5, 'weading'),
('debeb', 432, 'YARIS', 'sn 1001', 8, 2, 'BECAUSE I HAVINT!'),
('google', 6655, 'vehicle_name', 'et 4532', 10, 1, 'xdfg'),
('dadi', 332, 'vehicle_name', 'et 2003', 3, 3, 'for wedding and to vi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(22) NOT NULL,
  `mname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `user_id` int(22) NOT NULL,
  `sex` varchar(22) NOT NULL,
  `age` int(22) NOT NULL,
  `Phone` int(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `role` varchar(22) NOT NULL,
  `username` varchar(22) NOT NULL,
  `pass` int(22) NOT NULL,
  `status` varchar(23) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `mname`, `lname`, `user_id`, `sex`, `age`, `Phone`, `email`, `role`, `username`, `pass`, `status`) VALUES
('demis', 'desalegn', 'teferi', 21, 'male', 21, 916023589, 'demis@gmail.com', 'customer', 'DEMIS', 123, '1'),
('ERMIAS', 'YILMA', 'IRASHO', 123, 'male', 21, 920980648, 'erm@gmail.com', 'manager', 'ERM', 12345, '1'),
('sedes', 'yilma', 'YILM', 667, 'female', 23, 958767898, 'SENEDYENDASHAW @YAHOO.', 'customer', 'voot', 123, '1'),
('edel', 'dadi', 'demis', 676, 'female', 24, 911851794, 'een@yahid.com', 'employee', 'edel', 98765, '1'),
('demis', 'desta', 'endashaw', 887, 'male', 65, 918234568, 'dad@gmail.com', 'employee', 'dadi', 123, '1'),
('abera', 'abebe', 'desta', 1234, 'male', 2, 916023589, 'abe@gmail.com', 'customer', 'abera', 123, '1');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE IF NOT EXISTS `vehicleregistration` (
  `vehiclename` varchar(54) NOT NULL,
  `plate_no` varchar(40) NOT NULL,
  `brand` varchar(36) NOT NULL,
  `model` year(4) NOT NULL,
  `daily_price` int(45) NOT NULL,
  `status` varchar(23) NOT NULL,
  PRIMARY KEY (`plate_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicleregistration`
--

INSERT INTO `vehicleregistration` (`vehiclename`, `plate_no`, `brand`, `model`, `daily_price`, `status`) VALUES
('ISUZU', 'ET 2098764', 'LAND CRUSER', 2007, 2000, 'RESERVED'),
('skybus', 'SN 4325', 'TOYOTA', 2003, 3000, 'AVAILABLE'),
('skybus', 'SN 4325e5', 'TOYOTA', 2009, 2000, 'available'),
('TOYOTA', 'sn 543', 'TOYOTA', 2003, 3000, 'AVAILABLE'),
('skybus', 'sn 5432', 'FORD', 2003, 2009, 'AVAILABLE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
