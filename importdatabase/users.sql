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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Dinesh Yadav', 'dy19@test.com', NULL, '$2y$10$xlaz1jlZu2CyI6gpfjRNWeyy9S4CdkyHHFkZYsMZCm0lcduZtQSwS', NULL, '2021-03-30 11:19:43', '2021-03-30 11:19:43'),
(10, 'Dy28', 'dy28@test.com', NULL, '$2y$10$idMtoucCYEHXd5ggjpScb.OQg4cmOaAhB1ELtV.8fwAGq6b1oFsly', NULL, '2021-04-11 20:27:25', '2021-04-11 20:27:25'),
(11, 'param', 'param@test.com', NULL, '$2y$10$zf7iz3R0LKDHDZK.2ze6N.NjRaBP74X/bebMZT7JGLh4LbP9Fw46i', NULL, '2021-04-11 20:28:02', '2021-04-11 20:28:02'),
(12, 'Dinesh Yadav', 'dkdineshyadav19@gmail.com', NULL, '$2y$10$yuICv3vujqc9pQthyJwT1O2pxqQV9TfxGEv8KkebIGT5qqphlJg.C', NULL, '2021-04-13 03:37:11', '2021-04-13 03:37:11'),
(13, 'Dinesh Yadav', 'dkdineshyadav28@gmail.com', NULL, '$2y$10$FgeuRkTNOxMvcAIqbBReyO36jitrmbJGqasbv5USmiJK3rnVoRRrC', 'ar6J7K9TxGfEHjErerXeBP4iiBph5SrxJgj4yLvrZRD3TPBAtCF1Vjk1PPga', '2021-04-13 03:38:31', '2021-04-13 03:43:21'),
(15, 'kajal', 'kajal@test.com', NULL, '$2y$10$iEtstmcOKoSc0py9/elKUuN6/.wGzfubFV8eKy7KOQslS.Gf8E0j6', NULL, '2021-04-13 06:47:34', '2021-04-13 06:47:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
