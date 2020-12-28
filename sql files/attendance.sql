-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:27 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admtdb`
--

CREATE TABLE `admtdb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admtdb`
--

INSERT INTO `admtdb` (`srno`, `value`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `adsadb`
--

CREATE TABLE `adsadb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adsadb`
--

INSERT INTO `adsadb` (`srno`, `value`) VALUES
(12, 16);

-- --------------------------------------------------------

--
-- Table structure for table `bcedb`
--

CREATE TABLE `bcedb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcedb`
--

INSERT INTO `bcedb` (`srno`, `value`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cnsdb`
--

CREATE TABLE `cnsdb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cnsdb`
--

INSERT INTO `cnsdb` (`srno`, `value`) VALUES
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ipdb`
--

CREATE TABLE `ipdb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipdb`
--

INSERT INTO `ipdb` (`srno`, `value`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mepdb`
--

CREATE TABLE `mepdb` (
  `srno` int(255) NOT NULL,
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mepdb`
--

INSERT INTO `mepdb` (`srno`, `value`) VALUES
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `signupdb`
--

CREATE TABLE `signupdb` (
  `srno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupdb`
--

INSERT INTO `signupdb` (`srno`, `username`, `password`, `rpassword`, `email`) VALUES
(15, 'rony', '123', '123', 'rony@yahoo.in'),
(16, 'tejal', 'panda', 'panda', 'swedel@yahoo.in'),
(17, 'mobile', 'hello', 'hello', 'ronybenny2812@gmail.com'),
(18, 'nevin', '123', '123', 'nevin@yahoo.in'),
(19, '', '', '', ''),
(20, '501751', '123', '123', 'kevin@gmail.com'),
(21, 'hello', '123', '123', 'hello@gmail.com'),
(22, 'Alone', '123', '123', 'alltimelow@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ttdb`
--

CREATE TABLE `ttdb` (
  `day` varchar(50) NOT NULL,
  `lec1` varchar(50) NOT NULL,
  `lec2` varchar(50) NOT NULL,
  `lec3` varchar(50) NOT NULL,
  `lec4` varchar(50) NOT NULL,
  `lec5` varchar(50) NOT NULL,
  `lec6` varchar(50) NOT NULL,
  `lec7` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttdb`
--

INSERT INTO `ttdb` (`day`, `lec1`, `lec2`, `lec3`, `lec4`, `lec5`, `lec6`, `lec7`) VALUES
('Mon', 'BCE', 'MEP', 'CNS', 'BREAK', 'ADMT', 'IOT', 'IOT'),
('Tue', 'ADMT', 'ADSA', 'CNS', 'BREAK', 'MEP', 'IP', 'OLAP'),
('Wed', 'SL', 'SL', 'IP', 'BREAK', 'BCE', 'CNS', 'ADSA'),
('Thur', 'CNS', 'ADSA', 'MEP', 'BREAK', 'ADSA', 'IPL', 'IPL'),
('Fri', 'IP', 'ADMT', 'IP', 'BREAK', 'BCE', 'BCE', 'MEP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signupdb`
--
ALTER TABLE `signupdb`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signupdb`
--
ALTER TABLE `signupdb`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
