-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 07:30 PM
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
  `time` time(6) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `queries` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `provider_id`, `fname`, `lname`, `email`, `contact`, `adder`, `date`, `time`, `payment`, `queries`, `status`) VALUES
(24, 21, 'nandita', 'patel', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2021-12-23', '00:00:00.000000', 'card', 'efredf', 'done'),
(25, 5, 'nandita', 'patel', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2021-12-22', '00:00:00.000000', 'cash', 'wdeswd', 'done'),
(27, 5, 'Paritosh', 'mohan', 'dhyanand1132@gmail.com', '7600926273', 'ss', '2022-01-08', '16:08:00.000000', 'cash', 'sdsd', 'PENDING'),
(28, 5, 'sdsd', 'sdsd', 'dhyanand1132@gmail.com', '7600926273', 'budasan', '2022-01-22', '13:08:00.000000', 'cash', 'sd', 'done'),
(29, 21, 'Paritosh', 'Gupta', 'paritoshg84@gmail.com', '7600926273', 'kadi', '2022-01-31', '17:01:00.000000', 'cash', 'nothing', 'PENDING'),
(30, 5, 'Paritosh', 'Gupta', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2022-03-07', '18:35:00.000000', 'cash', 'Light', 'PENDING'),
(31, 5, 'Paritosh', 'Gupta', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2022-03-12', '18:41:00.000000', 'cash', 'Light', 'PENDING'),
(32, 5, 'Paritosh', 'Gupta', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2022-03-12', '18:41:00.000000', 'cash', 'Light', 'PENDING'),
(34, 5, 'Paritosh', 'Gupta', 'dhyanand1132@gmail.com', '7600926273', 'kadi', '2022-03-11', '19:44:00.000000', 'cash', 'Light Problem', 'PENDING'),
(35, 21, 'Hani', 'Kachoriya', 'paritoshg84@gmail.com', '7600926273', 'Kadi', '2022-04-27', '13:49:00.000000', 'card', 'TV not working', 'PENDING'),
(36, 314, 'Paritosh', 'Gupta', 'paritoshg84@gmail.com', '7600926273', 'kadi', '2022-04-28', '13:57:00.000000', 'cash', 'Cables Problem', 'PENDING');

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
(5, 'John', '1092723723', 'paritoshg84@gmail.com', 'I am Paritosh', 'kundal', 'kadi', 'Ahmedabad', '1234', '6MWH9Xi_.jpg', 'electrician', '4.5'),
(6, 'Andrew', '9138232398', 'shivgaming007@gmail.com', 'I am Suraj', 'Budasan', 'kadi', 'Ahmedabad', '1234', 'img2.jpg', 'plumber', '5'),
(21, 'Tom', '1092723723', 'shivanshg25701@gmail.com', 'Im Vedant', 'nani kadi', 'kadi', 'Ahmedabad', '1234', 'img3.jpg', 'electrician', '4'),
(311, 'Jerry', '21212123', 'abc@gmail.com', 'Plumber', 'kadi', 'gujarat', 'ahmedabad', '123', 'img4.jpg', 'Plumber', '3.9'),
(312, 'Aalis', '3445345556', 'aalis@test.com', 'i am electrician', 'kadi', 'Mehsana', 'Ahmedabad', '1234', '6224bb1ddeb99.jpg', 'Electrician', '0'),
(313, 'Robert', '9138232398', 'robert@test.com', 'electrician', 'Gota', 'Ahmedabad', 'Ahmedabad', '1234', '6224bb6e5e722.jpg', 'Electrician', '0'),
(314, 'Tirth', '7070808080', '19becse54015@vsitr.ac.in', 'I am an Electrician', 'Kadi', 'Kundal', 'Mehsana', '1234', '62682ae2d2323.jpg', 'Electrician', '0');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
