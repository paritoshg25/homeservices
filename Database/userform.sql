-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 10:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `contact`, `address`, `city`, `photo`, `password`, `code`, `status`) VALUES
(1, 'admin', 'admin.servify.24x7@gmail.com', '', '', '', '', 'admin123', 481913, 'verified'),
(5, 'Paritosh', 'shivgaming007@gmail.com', '', '', '', '', '$2y$10$h1K1kECGvmtIKRsJv6Ucx.3RUjUEdMkd1l/t5WbWtf58pBAH5Vc0i', 0, 'verified'),
(6, 'Suraj Mehta', 'mehtasuraj7984@gmail.com', '', '', '', '', '$2y$10$sEsUilAaPchVY5/ETSWwJOvrVTEI6LtMbXbfazIqL/r44OC3N2KU.', 564458, 'verified'),
(13, 'Tirth', 'paritoshg84@gmail.com', '', '', '', '', '$2y$10$knbNw5aY2JKsKDDWFtTwrOWYZ/5jAE.0r20OrMv0ncYfzIzfmd/pu', 0, 'verified'),
(15, 'Nandita', 'dhyanand1132@gmail.com', '2323232323', 'Nani Kadi', 'Ahmedabad', 'profile.jpg', '$2y$10$WtDw49eVTZD7GMhl5wEFAuLQ.q.Hbbvme55dodf79gCsy1BjNA0iC', 362048, 'verified'),
(16, 'Shweta', 'panchalshweta312@gmail.com', '', '', '', '', '$2y$10$GwrndCb1a1x6LyOLE6pmLu3aWMVMh5JCgo5YFL1P/B.En94hPULcC', 0, 'verified');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
