-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 09:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information2`
--

CREATE TABLE `customer_information2` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_information2`
--

INSERT INTO `customer_information2` (`username`, `password`) VALUES
('Sadman', 'MTIzNA=='),
('Raj', 'MTIzNA=='),
('rana', 'MTIzNA=='),
('Sadman', 'MTIzNA=='),
('tanvir', 'MTIzNA=='),
('WERERW', 'RUFSR1Q=');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `customers` varchar(30) NOT NULL,
  `Restaurant_name` varchar(30) DEFAULT NULL,
  `grill` double DEFAULT NULL,
  `burger` double DEFAULT NULL,
  `friedrice` double DEFAULT NULL,
  `soup` double DEFAULT NULL,
  `hydrabadi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`customers`, `Restaurant_name`, `grill`, `burger`, `friedrice`, `soup`, `hydrabadi`) VALUES
('', 'masterchef', 6, NULL, 7, NULL, NULL),
('', 'Nanking', 4, NULL, NULL, 6, NULL),
('', 'facefood', NULL, 3, NULL, 5, NULL),
('', 'DFS', 7, NULL, NULL, NULL, 8),
('', 'sdff', 4, 4, NULL, NULL, NULL),
('', 'nds', 3, NULL, NULL, NULL, NULL),
('', 'Masterchef', 4, NULL, 3, NULL, NULL),
('', 'Masterchef', NULL, NULL, NULL, 6, 9),
('', 'Masterchef', 7, NULL, 5, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
