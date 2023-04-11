-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 07:29 AM
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
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment_results`
--

CREATE TABLE `assessment_results` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `question` varchar(2) NOT NULL,
  `user_answer` varchar(1) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assessment_results`
--

INSERT INTO `assessment_results` (`id`, `username`, `question`, `user_answer`, `correct_answer`, `result`) VALUES
(1, '', 'q1', '1', '1', 'Correct'),
(2, '', 'q2', '0', '1', 'Incorrect'),
(3, '', 'q3', '1', '1', 'Correct'),
(4, 'jayank', 'q1', '1', '1', 'Correct'),
(5, 'jayank', 'q2', '0', '1', 'Incorrect'),
(6, 'jayank', 'q3', '0', '1', 'Incorrect'),
(7, 'jayank', 'q4', '1', '1', 'Correct'),
(8, 'jayank', 'q5', '0', '1', 'Incorrect'),
(9, 'jayank', 'q6', '1', '1', 'Correct'),
(10, 'jayank', 'q1', '0', '1', 'Incorrect'),
(11, 'jayank', 'q2', '0', '1', 'Incorrect'),
(12, 'jayank', 'q3', '0', '1', 'Incorrect'),
(13, 'jayank', 'q4', '1', '1', 'Correct'),
(14, 'jayank', 'q5', '0', '1', 'Incorrect'),
(15, 'jayank', 'q6', '1', '1', 'Correct');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jayank', 'jayank@24'),
(2, 'jt', 'jt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment_results`
--
ALTER TABLE `assessment_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment_results`
--
ALTER TABLE `assessment_results`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
