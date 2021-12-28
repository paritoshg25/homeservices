-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 07:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
(21, 6, 'shweta', 'panchal', 'panchalshweta312@gmail.com', '232334343', '3543434', '0000-00-00', 'cash', '353454', 'PENDING'),
(23, 5, 'nandita', 'patel', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2021-12-15', 'cash', 'light', 'PENDING'),
(24, 21, 'nandita', 'patel', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2021-12-23', 'card', 'efredf', 'PENDING'),
(25, 5, 'nandita', 'patel', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2021-12-22', 'cash', 'wdeswd', 'PENDING');

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
  `profession` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `contact`, `email`, `descr`, `adder1`, `adder2`, `city`, `password`, `photo`, `profession`, `rating`) VALUES
(5, 'John walker', '1092723723', 'paritoshg84@gmail.com', 'I am Paritosh', 'kundal', 'kadi', 'Ahmedabad', '1234', '6MWH9Xi_.jpg', 'electrician', '4.5'),
(6, 'Andrew', '9138232398', 'shivgaming007@gmail.com', 'I am Suraj', 'Budasan', 'kadi', 'Ahmedabad', '1234', 'img2.jpg', 'plumber', '5'),
(21, 'Tom', '1092723723', 'shivanshg25701@gmail.com', 'Im Vedant', 'nani kadi', 'kadi', 'Ahmedabad', '1234', 'img3.jpg', 'electrician', '4'),
(311, 'Jerry', '21212123', 'abc@gmail.com', 'Plumber', 'kadi', 'gujarat', 'ahmedabad', '123', 'img4.jpg', 'Plumber', '3.9');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
