-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 12:43 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`) VALUES
(3, 'Iloilo'),
(4, 'cebu'),
(5, 'davao'),
(6, 'manila'),
(7, 'makati'),
(8, 'quezon'),
(12, 'baguio'),
(14, 'tagaytay'),
(16, 'dumaguete'),
(18, 'albay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_number`
--

CREATE TABLE `tbl_number` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_number`
--

INSERT INTO `tbl_number` (`id`, `city`, `cnumber`) VALUES
(597, '', ''),
(598, '', ''),
(599, '', ''),
(600, '', ''),
(601, '', ''),
(602, '', ''),
(603, '', ''),
(604, '', ''),
(605, '', ''),
(606, '', ''),
(607, '', ''),
(608, '', ''),
(609, '', ''),
(610, '', ''),
(611, '', ''),
(612, '', ''),
(613, '', ''),
(614, '', ''),
(615, '', ''),
(616, '', ''),
(617, '', ''),
(618, '', ''),
(619, '', ''),
(620, '', ''),
(621, '', ''),
(622, '', ''),
(623, '', ''),
(624, '', ''),
(625, '', ''),
(626, '', ''),
(627, '', ''),
(628, '', ''),
(629, '', ''),
(630, '', ''),
(631, '', ''),
(632, '', ''),
(633, '', ''),
(634, '', ''),
(635, '', ''),
(636, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sensor`
--

CREATE TABLE `tbl_sensor` (
  `id` int(11) NOT NULL,
  `AQ` varchar(255) NOT NULL,
  `THI` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `sdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sensor`
--

INSERT INTO `tbl_sensor` (`id`, `AQ`, `THI`, `city`, `sdate`) VALUES
(193, '10', '16', 'iloilo', '2018-11-15 13:50:28'),
(194, '10', '16', 'iloilo', '2018-11-15 13:51:16'),
(195, '10', '16', 'iloilo', '2018-11-15 13:52:04'),
(196, '10', '16', 'Cebu', '2018-11-15 13:52:52'),
(197, '10', '16', 'Cebu', '2018-11-15 13:53:40'),
(198, '10', '16', 'Cebu', '2018-11-15 13:54:34'),
(199, '10', '16', 'Manila', '2018-11-15 13:55:06'),
(200, '10', '16', 'Davao', '2018-11-15 13:56:41'),
(201, '9', '16', 'Davao', '2018-11-15 13:57:30'),
(202, '9', '16', 'Zamboanga', '2018-11-15 13:58:21'),
(203, '9', '16', 'Zamboanga', '2018-11-15 13:59:09'),
(204, '9', '16', 'Baguio', '2018-11-15 13:59:58'),
(205, '8', '16', 'Makati', '2018-11-15 14:01:08'),
(206, '7', '16', 'Makati', '2018-11-15 14:01:56'),
(207, '7', '16', 'Tagaytay', '2018-11-15 14:02:53'),
(208, '7', '16', 'Tagaytay', '2018-11-15 14:04:54'),
(209, '7', '16', 'Tagaytay', '2018-11-15 14:06:27'),
(210, '7', '16', 'Tagaytay', '2018-11-15 14:07:16'),
(211, '7', '16', 'Tagaytay', '2018-11-15 14:08:03'),
(212, '7', '16', 'Tagaytay', '2018-11-15 14:08:52'),
(213, '7', '16', 'Tagaytay', '2018-11-15 14:09:40'),
(214, '7', '16', 'Tagaytay', '2018-11-15 14:10:28'),
(215, '7', '16', 'Tagaytay', '2018-11-15 14:11:16'),
(216, '7', '16', 'Tagaytay', '2018-11-15 14:12:04'),
(217, '7', '16', 'Tagaytay', '2018-11-15 14:12:53'),
(218, '7', '16', 'Tagaytay', '2018-11-15 14:13:41'),
(219, '7', '16', 'Tagaytay', '2018-11-15 14:14:29'),
(220, '7', '16', 'Tagaytay', '2018-11-15 14:15:17'),
(221, '7', '16', 'Tagaytay', '2018-11-15 14:16:06'),
(222, '7', '16', 'Tagaytay', '2018-11-15 14:16:54'),
(223, '7', '16', 'Tagaytay', '2018-11-15 14:17:42'),
(224, '7', '16', 'Tagaytay', '2018-11-15 14:18:30'),
(225, '7', '16', 'Tagaytay', '2018-11-15 14:19:18'),
(226, '8', '16', '\"iloilo\"', '2018-11-15 14:29:58'),
(227, '8', '16', '\"iloilo\"', '2018-11-15 14:30:47'),
(228, '8', '16', '\"iloilo\"', '2018-11-15 14:31:35'),
(229, '8', '16', '\"iloilo\"', '2018-11-15 14:32:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_number`
--
ALTER TABLE `tbl_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sensor`
--
ALTER TABLE `tbl_sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_number`
--
ALTER TABLE `tbl_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=637;

--
-- AUTO_INCREMENT for table `tbl_sensor`
--
ALTER TABLE `tbl_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
