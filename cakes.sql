-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 07:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cake` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `name`, `email`, `address`, `phone`, `date`, `time`, `cake`) VALUES
(1, '', '', '', '', '0000-00-00', '00:00:00', ''),
(2, 'raghav kumar', 'raghav123@gmail.com', 'fsgf', '6779909867', '0000-00-00', '00:00:00', ''),
(3, '', '', '', '', '0000-00-00', '00:00:00', ''),
(4, 'kushi kumari', 'khushi123@gmail.com', 'asdfghjkl', '6779909456', '0000-00-00', '00:00:00', ''),
(5, '', '', '', '', '0000-00-00', '00:00:00', ''),
(6, '', '', '', '', '0000-00-00', '00:00:00', ''),
(7, 'kushi kumari', 'khushi123@gmail.com', 'asdfghjkl', '6779909456', '0000-00-00', '00:00:00', ''),
(8, 'raghuveer sharma', 'admin@admin.com', 'ggfhfuyf', '23345678', '0000-00-00', '00:00:00', ''),
(9, '', '', '', '', '0000-00-00', '00:00:00', ''),
(10, 'raghav kumar', 'raghav123@gmail.com', 'fsgf', '6779909867', '0000-00-00', '01:30:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
