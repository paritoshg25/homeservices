-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 06:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `services`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `adder` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(30) NOT NULL,
  `queries` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `provider_id`, `fname`, `lname`, `email`, `contact`, `adder`, `date`, `payment`, `queries`, `status`) VALUES
(10, 1, 'PAritosh', 'Gupta', 'paritoshg84@gmail.com', '7600926273', 'kadi', '0000-00-00', 'dcc ', 'd dc', 'done'),
(16, 21, 'Nandita', 'Patel', 'dhyanand1132@gmail.com', '1322342342', 'ahmed', '2021-12-17', 'card', 'bijli', 'PENDING'),
(21, 6, 'shweta', 'panchal', 'panchalshweta312@gmail.com', '232334343', '3543434', '0000-00-00', 'cash', '353454', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `adder1` varchar(255) NOT NULL,
  `adder2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `contact`, `email`, `descr`, `adder1`, `adder2`, `city`, `password`, `photo`, `profession`) VALUES
(5, 'Anurag Mohanty', '1092723723', 'paritoshg84@gmail.com', 'I am Paritosh', 'kundal', 'kadi', 'Ahmedabad', '1234', '5ffc6e645bfec.jpg', 'electrician'),
(6, 'Suraj', '9138232398', 'shivgaming007@gmail.com', 'I am Suraj', 'Budasan', 'kadi', 'Ahmedabad', '1234', '5ff7119ad3760.jpg', 'plumber'),
(21, 'Vedant', '1092723723', 'shivanshg25701@gmail.com', 'Im Vedant', 'nani kadi', 'kadi', 'Ahmedabad', '1234', '5ffca3de1e98f.jpg', 'electrician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
