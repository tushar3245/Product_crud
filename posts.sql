-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 03:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `undergraduate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_session` date NOT NULL,
  `reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_passing` date NOT NULL,
  `graduating_session_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_passing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduating_session_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `official_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transformation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenshot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `undergraduate_name`, `admission_session`, `reg_no`, `batch`, `year_of_passing`, `graduating_session_class`, `cgpa`, `graduate_name`, `session`, `reg_id_no`, `g_batch`, `year_passing`, `graduating_session_2`, `official_address`, `employer`, `designation`, `present_address`, `mobile`, `email`, `paid`, `bank_name`, `branch`, `bank_no`, `transformation`, `potu`, `screenshot`, `created_at`, `updated_at`) VALUES
(2, 'Abdur rahim', 'Mohammad idris', 'Rokeya Bugum', '0011-11-11', 'male', 'AAA', '0001-11-11', '122', '12', '0011-11-11', '11', '11', 'AAA', '222', '22', '11', '2019-2020', '2020', 'AAAAA', 'BBB', 'CCCC', 'DDD', '00000000', 'abdurrahimtrf@gmail.com', '1000', '1000', '2', '22', 'yes', 'images/homework_2.png', 'images/homework_2.png', '2024-02-17 07:49:36', '2024-02-17 07:49:36'),
(3, 'masum', 'monsur', 'lakhe', '0011-01-11', 'male', 'AAA', '0001-11-11', '123', '12', '0001-11-11', '2019-2020', '3', 'AAAA', '2020', '123', '12', '2021', '2019-2020', 'SSS', 'VVV', 'FFF', 'EEE', '11111', 'rahim@gmail.com', '10000', '2000', '3', '122', 'no', 'images/homework_2.png', 'images/homework_2.png', '2024-02-17 08:09:05', '2024-02-17 08:09:05'),
(4, 'Nahid', 'Gias', 'Afroza', '0002-02-22', 'male', 'ccc', '0002-02-22', '1232', '11', '0001-11-11', '2020', '22', 'BBB', '2020', '1212', '1111', '2020', '2020', 'GGG', 'RRR', 'HHH', 'WWW', '8888888', 'tus@gmail.com', '555555', '111111', '222222', '11111', 'yes', 'images/Homework_1.png', 'images/Homework_1.png', '2024-02-17 08:19:02', '2024-02-17 08:19:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
