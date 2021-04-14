-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 12:02 PM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `story`, `created_at`, `updated_at`) VALUES
(1, 'ss', 'Pink ponies and purple giraffes roamed the field. Cotton candy grew from the ground as a chocolate river meandered off to the side. What looked like stones in the pasture were actually rock candy.', '2021-04-12 02:40:39', '2021-04-12 02:40:39'),
(9, 'celebrity portfolio', 'She had been an angel for coming up on 10 years and in all that time nobody had told her this was possible. The fact that it could ever happen never even entered her mind.', '2021-04-13 04:19:40', '2021-04-13 04:19:40'),
(10, 'param', 'The red ball sat proudly at the top of the toybox. It had been the last to be played with and anticipated it would be the next as well. The other toys grumbled beneath.', '2021-04-13 04:20:02', '2021-04-13 04:20:02'),
(11, 'Hello There', 'How you doing', '2021-04-13 05:54:45', '2021-04-13 05:54:45'),
(15, 'Kajal', 'Balloons are pretty and come in different colors, different shapes, different sizes, and they can even adjust sizes as needed. But don\'t make them too big .', '2021-04-13 06:48:26', '2021-04-13 06:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_24_104203_test', 2),
(5, '2021_03_24_104525_create_members_table', 2),
(6, '2021_03_30_162450_create_privates_table', 3),
(7, '2021_03_30_162639_create_myprivates_table', 4),
(8, '2021_03_30_163419_create_myprivates_table', 5),
(9, '2021_03_30_163623_create_myprivates_table', 6),
(10, '2021_04_12_013545_create_myprivates_table', 7),
(11, '2021_04_12_072053_create_myprivates_table', 8),
(12, '2021_04_12_073759_create_members_table', 9),
(13, '2021_04_12_080938_create_members_table', 10);

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

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myprivates`
--
ALTER TABLE `myprivates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `myprivates`
--
ALTER TABLE `myprivates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
