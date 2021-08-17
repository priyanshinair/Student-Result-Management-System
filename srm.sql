-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 05:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srm`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  `english` int(2) NOT NULL,
  `hindi` int(2) NOT NULL,
  `maths` int(2) NOT NULL,
  `science` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `class`, `english`, `hindi`, `maths`, `science`) VALUES
(5, 'priyanshi nair', 10, 98, 97, 100, 95),
(127, 'sarita sharma', 10, 78, 89, 88, 90),
(132, '', 0, 0, 0, 0, 0),
(134, 'vedika garg', 10, 80, 90, 80, 90),
(135, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `result2`
--

CREATE TABLE `result2` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `class` int(2) NOT NULL,
  `english` int(2) NOT NULL,
  `hindi` int(2) NOT NULL,
  `maths` int(2) NOT NULL,
  `science` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result2`
--

INSERT INTO `result2` (`id`, `name`, `class`, `english`, `hindi`, `maths`, `science`) VALUES
(5, 'sarita sharma', 10, 88, 86, 90, 89),
(7, '', 0, 0, 0, 0, 0),
(8, 'vedika garg', 10, 90, 89, 88, 87),
(9, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `class`) VALUES
(3, 'priyanshi nair', 'uk nair', 10),
(6, 'sarita sharma', 'vivek sharma', 10),
(7, 'vedika garg', 'praveen garg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result2`
--
ALTER TABLE `result2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `result2`
--
ALTER TABLE `result2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
