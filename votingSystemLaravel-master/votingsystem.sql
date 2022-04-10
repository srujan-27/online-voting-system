-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 07:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jc', 'mdjc787@gmail.com', '1', '2022-04-07 13:55:12', '2022-04-07 14:03:13'),
(2, 'mejba', 'mejba@gmail.com', '1', '2022-04-07 14:17:26', '2022-04-07 14:23:00'),
(3, 'jc', 'jc@gmail.com', '0', '2022-04-07 15:07:29', '2022-04-07 15:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `commissioners`
--

CREATE TABLE `commissioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commissioners`
--

INSERT INTO `commissioners` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'jc', 'mdjc787@gmail.com', '$2y$10$DSm3.oCJYAShSrbOGyWmGuzGwKjKEWXn3RNz.vJAEHjdRFv0lcnq.', '2022-04-07 13:48:39', '2022-04-07 13:48:39');

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
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `totalVote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateMail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `totalVote`, `candidateName`, `candidateMail`, `marka`, `created_at`, `updated_at`) VALUES
(1, '1', 'jc', 'mdjc787@gmail.com', '1649361680.jpg', '2022-04-07 14:01:20', '2022-04-08 11:12:31'),
(3, '0', 'mejba', 'mejba@gmail.com', '1649362980.jpg', '2022-04-07 14:23:00', '2022-04-07 14:23:00');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_29_084953_create_sessions_table', 1),
(7, '2022_03_29_220236_create_voters_table', 1),
(8, '2022_03_30_070623_create_commissioners_table', 1),
(9, '2022_04_02_074039_create_timers_table', 1),
(10, '2022_04_03_214012_create_applies_table', 1),
(11, '2022_04_04_014509_create_titles_table', 1),
(12, '2022_04_05_145630_create_masters_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3SfBWiX6f6m8abDVahgojjqxn7EDVGSpwfE7NLJt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibDBUMmRleUtUQUJpcmFNV29waHVVRkdwaWVIZ0RCc2p3Rkw5dzRtMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC92b3RlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJ2b3RlcmlkIjtPOjE2OiJBcHBcTW9kZWxzXFZvdGVyIjozMDp7czoxMzoiACoAY29ubmVjdGlvbiI7czo1OiJteXNxbCI7czo4OiIAKgB0YWJsZSI7czo2OiJ2b3RlcnMiO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEyOiJpbmNyZW1lbnRpbmciO2I6MTtzOjc6IgAqAHdpdGgiO2E6MDp7fXM6MTI6IgAqAHdpdGhDb3VudCI7YTowOnt9czoxOToicHJldmVudHNMYXp5TG9hZGluZyI7YjowO3M6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7czoxMzoiACoAYXR0cmlidXRlcyI7YTo3OntzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjI6ImpjIjtzOjc6InZvdGVyaWQiO3M6NToiamM3ODciO3M6NToiZW1haWwiO3M6MTc6Im1kamM3ODdAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTAkemZVQy9zZlozZGhPci53ZVBhRzN2ZXBZcDFTUHV1cS8vNnc0UkV6MkVIS2t2WmZWUW8wQ0ciO3M6MTA6ImNyZWF0ZWRfYXQiO3M6MTk6IjIwMjItMDQtMDggMTM6MDI6MjAiO3M6MTA6InVwZGF0ZWRfYXQiO3M6MTk6IjIwMjItMDQtMDggMTM6MDI6MjAiO31zOjExOiIAKgBvcmlnaW5hbCI7YTo3OntzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjI6ImpjIjtzOjc6InZvdGVyaWQiO3M6NToiamM3ODciO3M6NToiZW1haWwiO3M6MTc6Im1kamM3ODdAZ21haWwuY29tIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTAkemZVQy9zZlozZGhPci53ZVBhRzN2ZXBZcDFTUHV1cS8vNnc0UkV6MkVIS2t2WmZWUW8wQ0ciO3M6MTA6ImNyZWF0ZWRfYXQiO3M6MTk6IjIwMjItMDQtMDggMTM6MDI6MjAiO3M6MTA6InVwZGF0ZWRfYXQiO3M6MTk6IjIwMjItMDQtMDggMTM6MDI6MjAiO31zOjEwOiIAKgBjaGFuZ2VzIjthOjA6e31zOjg6IgAqAGNhc3RzIjthOjA6e31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czoyMToiACoAYXR0cmlidXRlQ2FzdENhY2hlIjthOjA6e31zOjg6IgAqAGRhdGVzIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6MTA6InRpbWVzdGFtcHMiO2I6MTtzOjk6IgAqAGhpZGRlbiI7YTowOnt9czoxMDoiACoAdmlzaWJsZSI7YTowOnt9czoxMToiACoAZmlsbGFibGUiO2E6MDp7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fX19', 1649438940);

-- --------------------------------------------------------

--
-- Table structure for table `timers`
--

CREATE TABLE `timers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `launch_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timers`
--

INSERT INTO `timers` (`id`, `title`, `launch_date`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'who want president', '2022-04-10 19:03:00', 0, NULL, '2022-04-08 07:03:43', '2022-04-08 07:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'who wanna president?', '2022-04-07 19:53:34', '2022-04-07 13:54:04');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'jc', 'mdjc787@gmail.com', NULL, '$2y$10$SGfum/G1xqQ.SWj2YszfH.KvwnI285tkYYjsG2eUYz.16AjJ5l8eC', NULL, NULL, NULL, NULL, NULL, '2022-04-07 13:49:58', '2022-04-07 13:49:58'),
(2, 'mejba', 'mejba@gmail.com', NULL, '$2y$10$lHdVrzTd383cYyLCnNQZe.64C.Wy9T8U7W9YSslvnZ0Nud12b4CYm', NULL, NULL, NULL, NULL, NULL, '2022-04-07 14:15:40', '2022-04-07 14:15:40'),
(3, 'jc', 'jc@gmail.com', NULL, '$2y$10$ocWiAloXF1NTZ.0F8S7dVux/6CQuWtWkQFcvALvQLUKUWhI2sLHgy', NULL, NULL, NULL, NULL, NULL, '2022-04-07 15:07:18', '2022-04-07 15:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voterid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `voterid`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'jc', 'jc787', 'mdjc787@gmail.com', '$2y$10$zfUC/sfZ3dhOr.wePaG3vepYp1SPuuq//6w4REz2EHKkvZfVQo0CG', '2022-04-08 07:02:20', '2022-04-08 07:02:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissioners`
--
ALTER TABLE `commissioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `timers`
--
ALTER TABLE `timers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commissioners`
--
ALTER TABLE `commissioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timers`
--
ALTER TABLE `timers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
