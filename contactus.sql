-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dues` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`id`, `name`, `age`, `gender`, `number`, `email`, `address`, `dues`, `payment`) VALUES
(1, 'James', '34', 'male', '9785643587', 'jamesvince76@gmail.com', '#877, Hamilton', 'None', 'Cash/Netbanking'),
(2, 'Arnav', '23', 'male', '9875435458', 'arnav76@gmail.com', '#5465, Vancouver', 'None', 'Cash/Netbanking'),
(3, 'Roberto', '28', 'male', '9876765438', 'roberto997@gmail.com', '#877, Vancouver', '$12.00', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`id`, `name`, `age`, `position`, `shift`, `gender`, `number`, `email`, `address`, `salary`) VALUES
(1, 'Jacob Mathews', '45', 'Assistant Chef', 'Night', 'male', '9876735789', 'jacob675@yahoo.com', '#567, Hamilton', 'salary'),
(2, 'Emily Paulson', '29', 'Staff Head', 'Day', 'female', '9876753567', 'emily98@gmail.com', '#8756, Hamilton', 'salary'),
(3, 'John Doe', '37', 'Manager', 'Day', 'male', '9876546587', 'johndoe76@hmail.com', '#766, Vancouver', 'salary'),
(4, 'Benjamin Specter', '39', 'Head Chef', 'Day', 'male', '8765679876', 'specter007@gmail.com', '#5667, Hamilton', 'salary');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fooditem` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `mobile`, `fooditem`, `message`) VALUES
(1, 'thomas', 'thomas454@gmail.com', '2315764743', 'Italian pasta', 'extra pepper'),
(2, 'james', 'james23@yahoo.com', '955436767', 'Chicken biryani', 'no'),
(3, 'Jessie', 'jessie67@gmail.com', '327215354', 'fruit cake', 'extra cherries'),
(4, 'julie', 'hellojulie4@gmail.com', '585443271', 'sandwich', 'no'),
(5, 'AAHNA', 'AAHNA88@YAHOO.COM', '892478324', 'BAKED PIZZA', 'EXTRA CHEESE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffinfo`
--
ALTER TABLE `staffinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
