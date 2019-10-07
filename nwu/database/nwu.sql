-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 03:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nwu`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `crs_id` varchar(50) NOT NULL,
  `crs_name` varchar(50) NOT NULL,
  `crs_code` varchar(50) NOT NULL,
  `crs_credit` int(50) NOT NULL,
  `crs_time` int(50) NOT NULL,
  `crs_details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crs_id`, `crs_name`, `crs_code`, `crs_credit`, `crs_time`, `crs_details`) VALUES
('25', 'Algorithm', '3212', 3, 40, 'Something'),
('36', 'Mathematics', '5367', 3, 20, 'Something'),
('36', 'Chemistry', '6531', 3, 20, 'dxgzd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(20) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_father_name` varchar(20) NOT NULL,
  `std_mother_name` varchar(20) NOT NULL,
  `std_number` int(20) NOT NULL,
  `std_email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_father_name`, `std_mother_name`, `std_number`, `std_email`) VALUES
('20142029010', 'Md Ismail Hossain', 'Md Maznur Rahman', 'Mst Rafeza Begum', 1933847681, 'ismai@gmail.com'),
('20132015010', 'Avijit', 'xy', 'x', 4565965, 'avi15@gmail.com'),
('20142032010', 'Jasebur Rahman', 'xy', 'x', 2147483647, 'sajal.cse.32@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('ismail29', '@ismail29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
