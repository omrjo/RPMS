-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 04:49 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Computer Science'),
(3, 'medecine'),
(2, 'Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `depid` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `firstname`, `lastname`, `password`, `email`, `depid`) VALUES
(1, 'Mourad', 'Almdar', '67890', 'mourad@admin.com', 1),
(2, 'ahmad', 'salem', '22222', 'ahmad55@gmail.com', 2),
(3, 'khaled', 'osama', 'gfgmm##lkk', 'khaled@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `id` int(6) UNSIGNED NOT NULL,
  `Proid` int(6) UNSIGNED DEFAULT NULL,
  `Resid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`id`, `Proid`, `Resid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(90) NOT NULL,
  `domain` varchar(90) NOT NULL,
  `budget` decimal(12,2) NOT NULL,
  `file` blob NOT NULL,
  `state` enum('pass','drop','hold','') DEFAULT 'hold'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `domain`, `budget`, `file`, `state`) VALUES
(1, 'Online path planning', 'AI', '10000.00', '', 'pass'),
(2, 'Mobile App', 'Programming', '10000.00', 0x2623313539333b2623313538353b2623313539303b202623313537353b2623313630343b2623313537353b2623313538333b2623313537353b2623313538353b2623313537373b2e706466, 'pass'),
(3, 'real-time vehicle tracking ', 'Software engerinng', '5000.00', 0x4d5f303731322e706466, 'pass'),
(4, 'voice recognition', 'HCI', '7000.00', 0x2623313539333b2623313538353b2623313539303b202623313537353b2623313630343b2623313537353b2623313538333b2623313537353b2623313538353b2623313537373b2e706466, 'pass'),
(5, 'website design', 'web development', '6000.00', 0x6578616d73202620616e737765727331202d20436f70792e706466, 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `recive`
--

CREATE TABLE `recive` (
  `id` int(6) UNSIGNED NOT NULL,
  `Proid` int(6) UNSIGNED DEFAULT NULL,
  `Empid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(90) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Resid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `date`, `Resid`) VALUES
(1, 'First Report', '2016-12-31 21:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `researchers`
--

CREATE TABLE `researchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Depid` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researchers`
--

INSERT INTO `researchers` (`id`, `firstname`, `lastname`, `password`, `email`, `date`, `Depid`) VALUES
(1, 'Abdullah', 'Al sheday', '123456', 'alsheday@ccsis.com', '2016-12-31 21:00:00', 1),
(2, 'Ahmad', 'Abaood', '123456', 'abaood@ccsis.com', '2016-12-31 21:00:00', 3),
(3, 'Salem', 'Al dosari', '123456', 'aldosri@ccsis.com', '2016-12-31 21:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `validate`
--

CREATE TABLE `validate` (
  `id` int(6) UNSIGNED NOT NULL,
  `Proid` int(6) UNSIGNED DEFAULT NULL,
  `Resid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate`
--

INSERT INTO `validate` (`id`, `Proid`, `Resid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Depname` (`name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Depid` (`depid`);

--
-- Indexes for table `participate`
--
ALTER TABLE `participate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Resid` (`Resid`),
  ADD KEY `Proid` (`Proid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recive`
--
ALTER TABLE `recive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Empid` (`Empid`),
  ADD KEY `Proid` (`Proid`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Resid` (`Resid`);

--
-- Indexes for table `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Depid` (`Depid`);

--
-- Indexes for table `validate`
--
ALTER TABLE `validate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Resid` (`Resid`),
  ADD KEY `Proid` (`Proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participate`
--
ALTER TABLE `participate`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recive`
--
ALTER TABLE `recive`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `researchers`
--
ALTER TABLE `researchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `validate`
--
ALTER TABLE `validate`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`Depid`) REFERENCES `departments` (`id`);

--
-- Constraints for table `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `participate_ibfk_1` FOREIGN KEY (`Resid`) REFERENCES `researchers` (`id`),
  ADD CONSTRAINT `participate_ibfk_2` FOREIGN KEY (`Proid`) REFERENCES `projects` (`id`);

--
-- Constraints for table `recive`
--
ALTER TABLE `recive`
  ADD CONSTRAINT `recive_ibfk_1` FOREIGN KEY (`Empid`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `recive_ibfk_2` FOREIGN KEY (`Proid`) REFERENCES `projects` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`Resid`) REFERENCES `researchers` (`id`);

--
-- Constraints for table `researchers`
--
ALTER TABLE `researchers`
  ADD CONSTRAINT `researchers_ibfk_1` FOREIGN KEY (`Depid`) REFERENCES `departments` (`id`);

--
-- Constraints for table `validate`
--
ALTER TABLE `validate`
  ADD CONSTRAINT `validate_ibfk_1` FOREIGN KEY (`Resid`) REFERENCES `researchers` (`id`),
  ADD CONSTRAINT `validate_ibfk_2` FOREIGN KEY (`Proid`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
