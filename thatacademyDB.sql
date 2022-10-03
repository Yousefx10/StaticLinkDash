-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 09:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thatacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `onlineclasses`
--

CREATE TABLE `onlineclasses` (
  `link_id` int(5) NOT NULL,
  `link_name` varchar(20) NOT NULL,
  `link_linkedto` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `onlineclasses`
--

INSERT INTO `onlineclasses` (`link_id`, `link_name`, `link_linkedto`) VALUES
(1, 'Class1', ''),
(2, 'Class2', ''),
(3, 'Class3', ''),
(4, 'Class4', ''),
(5, 'Class5', ''),
(6, 'Class6', ''),
(7, 'Class7', ''),
(8, 'Class8', ''),
(9, 'Class9', ''),
(10, 'Class10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `onlineclasses`
--
ALTER TABLE `onlineclasses`
  ADD PRIMARY KEY (`link_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `onlineclasses`
--
ALTER TABLE `onlineclasses`
  MODIFY `link_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
