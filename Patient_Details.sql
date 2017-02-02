-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 03:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_details`
--
CREATE DATABASE IF NOT EXISTS `patient_details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `patient_details`;

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`first_name`, `last_name`, `age`, `dob`, `gender`, `phone_no`, `description`) VALUES
('check', 'cekck', 321, '7 February, 2017', '1', 1234567890, 'kkn'),
('check', 'cekck', 321, '7 February, 2017', '1', 1234567890, 'kkn'),
('check', 'cekck', 321, '9 February, 2017', '1', 1234567890, 'kkn'),
('devansh', 'cekck', 321, '', '1', 1234567890, 'kkn'),
('Rohit', 'Rajwani', 21, '6 February, 2017', 'male', 987654321, 'adfda'),
('Rohit', 'Rajwani', 21, '6 February, 2017', 'male', 987654321, 'adfda'),
('devansh', 'raghuvanshi', 21, '1 February, 2017', 'female', 1234567890, 'adad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
