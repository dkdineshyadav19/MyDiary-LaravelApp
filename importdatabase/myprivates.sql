-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 10:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `myprivates`
--

CREATE TABLE `myprivates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myprivates`
--

INSERT INTO `myprivates` (`id`, `email`, `title`, `story`, `created_at`, `updated_at`) VALUES
(6, 'dy19@test.com', 'Dinesh', 'yadav', '2021-04-12 02:04:01', '2021-04-12 02:04:01'),
(8, 'dy19@test.com', 'dkdk', 'yadavvvv', '2021-04-12 02:11:39', '2021-04-12 02:11:39'),
(24, 'param@test.com', '1', 'param jeet', '2021-04-13 02:43:21', '2021-04-13 02:45:44'),
(27, 'dy28@test.com', 'ss', 'dd', '2021-04-13 03:23:36', '2021-04-13 03:23:36'),
(28, 'dkdineshyadav28@gmail.com', 'celebrity portfolio', 'He wondered if he should disclose the truth to his friends. It would be a risky move. Yes, the truth would make things a lot easier if they all stayed on the same page, but the truth might fracture the group..', '2021-04-13 03:45:10', '2021-04-13 04:31:27'),
(29, 'dkdineshyadav28@gmail.com', 'ddddd', 'yyyyyyyy', '2021-04-13 06:19:29', '2021-04-13 06:19:29'),
(32, 'kajal@test.com', 'celebrity portfolio', 'Balloons are pretty and come in different colors, different shapes, different sizes, and they can even adjust sizes as needed. But don\'t make them too', '2021-04-13 06:50:51', '2021-04-13 06:50:51'),
(33, 'dy19@test.com', 'cr7', 'Cristiano Ronaldo cr7 cr7', '2021-04-13 21:44:55', '2021-04-13 21:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myprivates`
--
ALTER TABLE `myprivates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myprivates`
--
ALTER TABLE `myprivates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
