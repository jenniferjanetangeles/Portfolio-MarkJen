-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 05:50 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(12) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `user`, `pass`) VALUES
(1, 'admin1', 'admin2'),
(2, 'admin1', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lasname` varchar(20) NOT NULL,
  `usernam` varchar(30) NOT NULL,
  `passwor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id`, `name`, `lasname`, `usernam`, `passwor`) VALUES
(9, 'kim', 'tual', 'kim', 'tual'),
(10, 'weewewe', 'dwdwwdw', 'kiki', 'koko'),
(11, 'weweweweewe', 'wewewewewe', 'lolo', 'lola'),
(12, 'martina', 'aranez', 'miko', 'ahas'),
(13, 'sara', 'gardona', 'gabgab', 'pangit'),
(14, 'anabelle', 'isko', 'halaka', 'panagit'),
(15, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `record1`
--

CREATE TABLE `record1` (
  `id` int(20) NOT NULL,
  `dphone` int(20) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dtime` datetime NOT NULL,
  `dguest` int(12) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dcomment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record1`
--

INSERT INTO `record1` (`id`, `dphone`, `daddress`, `dname`, `dtime`, `dguest`, `demail`, `dcomment`) VALUES
(61, 2244352, 'asajshajshahs', 'kim pedoc', '2019-05-13 01:00:00', 3, 'mypersonalacount@yahoo.com', '  dsdsdsdsds\r\nsdsdsdsdd\r\nsdsdsdsdsd\r\nsdsdsdsdsd'),
(62, 2244352, 'asajshajshahs', 'kim pedoc', '2019-05-16 12:59:00', 5, 'mypersonalacount@yahoo.com', 'dsdsdsdsds\r\nsdsdsdsdd\r\nsdsdsdsdsd\r\nsdsdsdsdsd'),
(63, 2244352, 'asajshajshahs', 'kim pedoc', '2019-05-16 12:59:00', 5, 'mypersonalacount@yahoo.com', 'dsdsdsdsds\r\nsdsdsdsdd\r\nsdsdsdsdsd\r\nsdsdsdsdsd'),
(64, 2244352, 'asajshajshahs', 'kim pedoc', '2019-05-16 12:59:00', 5, 'mypersonalacount@yahoo.com', 'dsdsdsdsds\r\nsdsdsdsdd\r\nsdsdsdsdsd\r\nsdsdsdsdsd'),
(65, 2244352, 'asajshajshahs', 'kim pedoc', '2019-05-16 12:59:00', 5, 'mypersonalacount@yahoo.com', 'dsdsdsdsds\r\nsdsdsdsdd\r\nsdsdsdsdsd\r\nsdsdsdsdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record1`
--
ALTER TABLE `record1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `record1`
--
ALTER TABLE `record1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
