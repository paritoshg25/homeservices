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
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `contact`, `address`, `city`, `password`, `code`, `status`) VALUES
(1, 'admin', 'admin.servify.24x7@gmail.com', '', '', '', 'admin123', 481913, 'verified'),
(5, 'Paritosh', 'shivgaming007@gmail.com', '5656565656', 'Kadi', 'kadi', '$2y$10$h1K1kECGvmtIKRsJv6Ucx.3RUjUEdMkd1l/t5WbWtf58pBAH5Vc0i', 0, 'verified'),
(6, 'Suraj Mehta', 'mehtasuraj7984@gmail.com', '5757465767', 'Budasan', 'kadi', '$2y$10$sEsUilAaPchVY5/ETSWwJOvrVTEI6LtMbXbfazIqL/r44OC3N2KU.', 564458, 'verified'),
(20, 'Aalis', 'shivanshg25701@gmail.com', '9908833334', 'Gota', 'Ahmedabad', '$2y$10$Qq0F0WzmDOnrjOGi4NTIz.nIS8xHGbvDIm3D.Pcvg7lW5Cd/01CTe', 0, 'verified'),
(21, 'Nandita', '19becse54015@vsitr.ac.in', '1092723723', 'kundal', 'Ahmedabad', '$2y$10$pn8DAM4JMdXp3sK8r.2is.VCrSbna2ZB3fpJqPRZFcgcgLocSVKBC', 0, 'verified'),
(22, 'Paritosh', 'paritoshg84@gmail.com', '7600926273', 'kadi', 'Ahmedabad', '$2y$10$h8wmnstF6UEkF9F0nAktbOFjgB5NAVWyU91cQFHKs8bSOLOHOWglq', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
