-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 10:26 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paclar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `user_id` int(200) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `add` varchar(200) NOT NULL,
  `course` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(20) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `cstat` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`user_id`, `fullname`, `gender`, `bday`, `add`, `course`, `contact`, `email`, `age`, `bp`, `cp`, `rn`, `cstat`) VALUES
(1, 'GEYSON B. PACLAR', 'Male', '1998-08-06', 'San Jose Medina Misamis', 'BSIT-III', 2147483647, 'geysonpaclar@gmail.com', 21, 'Gingoog City Mis. Or', 'Filipino', 'Roman Catholic', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `cname` varchar(90) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `cname`, `comment`) VALUES
(12, 'geyson', 'hi'),
(13, 'geyson', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE IF NOT EXISTS `tbl_shop` (
  `product_Id` int(200) NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `Quantity` int(200) NOT NULL,
  `Price` int(200) DEFAULT NULL,
  PRIMARY KEY (`product_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`product_Id`, `Product_name`, `img`, `Quantity`, `Price`) VALUES
(1, 'Kawasaki Ninja H2R', './assets/image/h2r.png', 1, 1400000),
(2, ' HONDA CBR 1000', './assets/image/cbr1000rr.png', 1, 130000000),
(3, '  SUZUKI GSX-R 1000', './assets/image/GSX-R1000-Thumbnail.png', 1, 955000),
(4, 'YAMAHA YZF-R3 1000', './assets/image/yamaha-yzf-r15.png', 1, 1185000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `accountID`, `username`, `passwd`) VALUES
(19, 0, 'admin', 'user'),
(20, 0, 'admin', 'admin'),
(21, 0, 'admin', 'admin'),
(22, 0, 'admin', 'user12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccount`
--

CREATE TABLE IF NOT EXISTS `tbl_useraccount` (
  `accountID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `bday` date NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_useraccount`
--

INSERT INTO `tbl_useraccount` (`accountID`, `firstname`, `middlename`, `lastname`, `bday`) VALUES
(1, 'Geyson', 'Basadre', 'Paclar', '1998-06-08'),
(2, 'Darinn', 'Lambating', 'Macabundag', '1992-11-13'),
(5, 'Darinn', 'Paclar', 'Basadre', '1998-08-06'),
(6, 'Darinn', 'Paclar', 'Basadre', '1992-11-13'),
(7, 'Darinn', 'Paclar', 'Macabundag', '1992-11-13'),
(8, 'Darinn', 'Lambating', 'Basadre', '1992-11-13'),
(9, 'Jonathan', 'Batahoy', 'Gaston', '1998-08-06'),
(10, 'Jonathan', 'Batahoy', 'Gaston', '1992-11-13'),
(11, 'Jonathan', 'Batahoy', 'Lambating', '1998-08-06'),
(12, 'Jonathan', 'Macabundag', 'Lambating', '1998-08-06'),
(13, 'Darinn', 'Basadre', 'Lambating', '1998-08-06'),
(14, 'Geyson', 'Macabundag', 'Gaston', '1998-08-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
