-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 09:10 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(100) CHARACTER SET utf8 NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`, `comments`, `date_publish`) VALUES
(1, 'fdfdd', '', '2019-10-13 12:15:26'),
(2, 'fdffgf', 'fgfgfgsd', '2019-10-13 12:16:28'),
(3, 'rergg', 'dgfdgfd', '2019-10-13 12:19:33'),
(4, 'ggfggg', 'gfdg', '2019-10-13 12:24:38'),
(5, 'ramil', 'hellllooooo worllllldddddddddddddddddd', '2019-10-13 16:07:14'),
(6, 'cxccc', 'zCzxczXC', '2019-10-14 01:06:02'),
(7, 'gfdg', 'dgfg', '2019-10-14 15:39:47'),
(8, 'LAMBATING', 'HELLLLOOOO..... WORLD!!!!', '2019-10-15 03:13:57'),
(9, 'willei', 'jdkshdgasdajd', '2019-10-15 04:34:02'),
(10, 'asasas', 'asasas', '2019-10-15 05:16:36'),
(11, 'asasa', 'asass', '2019-10-15 05:37:43'),
(12, 'asasa', 'asass', '2019-10-15 05:43:44'),
(13, 'asasas121212', 'asasasasas121212', '2019-10-15 05:45:16'),
(14, 'dsd', 'sdsds', '2019-10-15 06:10:01'),
(15, 'www', 'com', '2019-10-15 06:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `passwd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin123'),
(2, 'ramil', 'limar'),
(3, 'ramil', 'limar'),
(4, 'Ramil', 'Garcia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `pro_id` int(200) NOT NULL,
  `pro_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `quantity` int(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`pro_id`, `pro_name`, `image`, `quantity`, `price`) VALUES
(1, 'BMW i6', './asset/img/4.jpg', 1, 2000000),
(2, 'BMW i7', './asset/img/3.jpg', 1, 2000000),
(3, 'BMW i8', './asset/img/2.jpg', 1, 2000000),
(5, 'BMW i5', './asset/img/5.jpg', 1, 2000000),
(6, 'BMW i4', './asset/img/6.jpg', 1, 2000000),
(7, 'BMW i3', './asset/img/7.jpg', 1, 2000000),
(8, 'BMW i9', './asset/img/8.jpg', 1, 2000000),
(9, 'BMW i10', './asset/img/9.jpg', 1, 2000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `pro_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
