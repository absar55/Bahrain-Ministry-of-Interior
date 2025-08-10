-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 06:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ministry`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(40) UNSIGNED NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `department_name` varchar(40) NOT NULL,
  `department_no` varchar(40) NOT NULL,
  `section` varchar(40) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `callee_name` varchar(40) NOT NULL,
  `callee_link` varchar(100) NOT NULL,
  `upcomming_call` tinyint(1) DEFAULT NULL,
  `file_name` varchar(80) NOT NULL,
  `profile_pic` tinyint(1) DEFAULT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'Customer',
  `phone` bigint(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `department_name`, `department_no`, `section`, `designation`, `callee_name`, `callee_link`, `upcomming_call`, `file_name`, `profile_pic`, `role`, `phone`, `dob`) VALUES
(5, 'Absar', '123', '', '', '', 'HOD', '', '', NULL, '', NULL, 'Admin', 0, '0000-00-00'),
(10, 'Ali', '123', 'Assistant_Undersecretary', '1', 'S1', 'Assistant', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(11, 'Usama', '123', 'Assistant_Undersecretary', '1', 'S1', 'Peon', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(12, 'Daniyal', '123', 'Assistant_Undersecretary', '1', 'S1', 'Guard', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(13, 'Kamran', '123', 'Assistant_Undersecretary', '1', 'S1', 'Student', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(14, 'Absar12', '123', 'Officers_Affairs', '2', 'S2', 'Manager', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(15, 'Hamza', '123', 'Personal_Affairs', '1', 'S1', 'HOD', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(16, 'Hammad', '123', 'Officers_Affairs', '1', 'S1', 'Manager', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(17, 'Yasir', '123', 'Officers_Affairs', '2', 'S1', 'Hacker', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(18, 'Rafia', '123', 'Assistant_Undersecretary', '2', 'S1', 'Boss', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(19, 'Asjid', '123', 'Assistant_Undersecretary', '2', 'S1', 'HR', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(20, 'Eram', '123', 'Assistant_Undersecretary', '2', 'S1', 'Assistant', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(21, 'Waqas', '123', 'Assistant_Undersecretary', '2', 'S1', 'Student', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(22, 'Ali1', '123', 'Assistant_Undersecretary', '2', 'S1', 'Peon', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(23, 'Ahmad', '123', 'Assistant_Undersecretary', '1', 'S2', 'GM', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(25, 'Farhan', '123', 'Assistant_Undersecretary', '2', 'S2', 'HR', '', '', NULL, 'Farhan4eda81827da54a6d198b5558e11ce6c0.jpg', 1, 'Customer', 0, '0000-00-00'),
(26, 'Absar5', '123', 'Assistant_Undersecretary', '1', 'S1', 'HOD', '', '', NULL, '', NULL, 'Customer', 0, '0000-00-00'),
(27, 'Hamid', '123', 'Assistant_Undersecretary', '1', 'S1', 'Peon', '', '', NULL, 'HamidTHUNDER BOLT_EID.png', 1, 'Customer', 0, '0000-00-00'),
(28, 'Ammar', '123', 'Assistant_Undersecretary', '1', 'S1', 'Manager', '', '', NULL, 'Ammarimages.jpeg', 1, 'Customer', 0, '0000-00-00'),
(29, 'Shahid', '123', 'Assistant_Undersecretary', '1', 'S1', 'HR', '', '', NULL, 'ShahidAlone_boy_dp_-2798.jpg', 1, 'Customer', 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
