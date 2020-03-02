-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 10:00 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE `achivements` (
  `Achivement_id` int(10) UNSIGNED NOT NULL,
  `prof_id` int(10) UNSIGNED NOT NULL,
  `Activty_Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Add_Details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achivements`
--

INSERT INTO `achivements` (`Achivement_id`, `prof_id`, `Activty_Type`, `Add_Details`, `created_at`, `updated_at`) VALUES
(1, 1, 'Workshop / Seminar / STTP:', 'I have attended in Machine Learning workshop .', '2020-01-30 03:04:53', '2020-01-30 03:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(10) UNSIGNED NOT NULL,
  `depart_short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart_full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `depart_short_name`, `depart_full_name`, `created_at`, `updated_at`) VALUES
(1, 'MCA', 'Master Of Computer Application', '2020-01-27 03:01:16', '2020-01-27 03:01:16'),
(3, 'BE.Co', 'Computer  Engineering', '2020-01-28 03:22:41', '2020-02-06 09:36:35'),
(4, 'BE.IT', 'Information Technology', '2020-01-30 01:01:04', '2020-01-30 01:01:04'),
(5, 'BE.A&H', 'Applied Science & Humanities', '2020-01-30 01:02:08', '2020-01-30 01:02:08'),
(6, 'BE.chemical', 'Chemical Engineering', '2020-01-30 01:02:45', '2020-01-30 01:02:45'),
(7, 'BE.Civil', 'Civil Engineering', '2020-01-30 01:03:25', '2020-01-30 01:03:25'),
(8, 'BE.Electrical', 'Electrical Engineering', '2020-01-30 01:03:58', '2020-01-30 01:03:58'),
(9, 'BE.EC', 'Electronics & Communication Engineering', '2020-01-30 01:04:22', '2020-01-30 01:04:22'),
(10, 'BE.IC', 'Instrumentation and Control', '2020-01-30 01:04:48', '2020-01-30 01:04:48'),
(11, 'BE.TT', 'Textile Technology', '2020-01-30 01:05:12', '2020-01-30 01:05:12'),
(12, 'BE.Mechanical', 'Mechanical Engineering', '2020-01-30 01:05:40', '2020-01-30 01:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(10) UNSIGNED NOT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_name`, `created_at`, `updated_at`) VALUES
(1, 'Verve', '2020-02-06 03:48:40', '2020-02-06 03:48:40'),
(2, 'SAWC Activities', '2020-02-06 03:49:04', '2020-02-06 03:49:04'),
(3, 'NSS Activities/Social Activities', '2020-02-06 03:49:36', '2020-02-06 03:49:36'),
(4, 'Art and Intellect', '2020-02-06 03:49:56', '2020-02-06 03:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `librarys`
--

CREATE TABLE `librarys` (
  `l_id` int(10) UNSIGNED NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension_no` int(11) NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `librarys`
--

INSERT INTO `librarys` (`l_id`, `l_name`, `email`, `extension_no`, `details`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'Vishal', 'vishalchauhan@gmail.com', 405, 'hsfh', 'images/1580970485.jpg', '2020-02-06 00:58:05', '2020-02-06 23:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2020_01_27_082609_create_department_table', 2),
(11, '2020_01_28_035056_create_professor_table', 3),
(12, '2020_01_24_080547_create_achivement_table', 4),
(13, '2020_02_05_075316_create_librarys_table', 5),
(14, '2020_02_04_043744_create_events_table', 6),
(15, '2020_02_04_091859_create_sub_events_table', 7),
(16, '2020_02_06_052431_create_tnps_table', 8),
(17, '2020_02_06_121639_create_administrations_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `prof_id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exprience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proflie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`prof_id`, `dept_id`, `fname`, `lname`, `Qualification`, `dob`, `gender`, `position`, `area_interest`, `exprience`, `phone`, `email`, `url`, `proflie`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vishal', 'Chauhan', 'MCA,Phd', 'Tuesday 26 May 1998', 'Male', 'Prof.(Dr.)', 'Machine Learning', '10', '9978274939', 'vishalchauhan@gmail.com', 'vishal.ac.in', 'images/1580454981.jpg', '2020-01-27 23:22:53', '2020-01-31 02:27:38'),
(2, 1, 'Jay', 'Chauhan', 'BE', 'Saturday 05 January 2002', 'Male', 'Prof', 'Web', '1', '7894561320', 'jay@gmail.com', 'jay.ac.in', 'images/1580189457.jpg', '2020-01-28 00:00:57', '2020-01-28 00:00:57'),
(4, 12, 'Harsh', 'Patel', 'BE', 'Monday 30 January 1995', 'Male', 'Ass.Prof', 'Machinal Feliesd', '2', '8745632109', 'harsh@gmail.com', 'harsh.ac.in', 'images/1580459161.jpg', '2020-01-31 02:56:01', '2020-01-31 02:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_events`
--

CREATE TABLE `sub_events` (
  `se_id` int(10) UNSIGNED NOT NULL,
  `e_id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `se_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_events`
--

INSERT INTO `sub_events` (`se_id`, `e_id`, `dept_id`, `se_name`, `details`, `profile`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Quiz', 'asked Quection', 'images/1580981252.jpg', '2020-02-06 03:57:32', '2020-02-06 23:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `tnps`
--

CREATE TABLE `tnps` (
  `tnp_id` int(10) UNSIGNED NOT NULL,
  `tnp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tnps`
--

INSERT INTO `tnps` (`tnp_id`, `tnp_name`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Invitation letter', 'document/1580994724.pdf', '2020-02-06 07:42:04', '2020-02-06 23:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vishal Chauhan', 'vishalchauhan@gmail.com', NULL, '$2y$10$D8Ik5Y8mle/F0/Zlsj6lR.BQUC7oXEh6l1/7VzLMVRfihrw531kgq', 'bF81ghji3PxwTmYQssvhfHmeAanNcJbQVjujo5wlQJIKwns6Vj2qXdtuuPv8', '2020-01-26 22:32:25', '2020-01-26 22:32:25'),
(8, 'abc', 'abc@gmail.com', NULL, '$2y$10$2wUFlFExnlXDToOIKYEUIOhC3DA00vHUMpZbcACY5ypqXfc0tDk.C', NULL, '2020-01-29 22:49:42', '2020-01-29 22:49:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivements`
--
ALTER TABLE `achivements`
  ADD PRIMARY KEY (`Achivement_id`),
  ADD KEY `achivements_prof_id_foreign` (`prof_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `librarys`
--
ALTER TABLE `librarys`
  ADD PRIMARY KEY (`l_id`);

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
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `professors_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `sub_events`
--
ALTER TABLE `sub_events`
  ADD PRIMARY KEY (`se_id`),
  ADD KEY `sub_events_e_id_foreign` (`e_id`),
  ADD KEY `sub_events_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `tnps`
--
ALTER TABLE `tnps`
  ADD PRIMARY KEY (`tnp_id`);

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
-- AUTO_INCREMENT for table `achivements`
--
ALTER TABLE `achivements`
  MODIFY `Achivement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `librarys`
--
ALTER TABLE `librarys`
  MODIFY `l_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `prof_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_events`
--
ALTER TABLE `sub_events`
  MODIFY `se_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tnps`
--
ALTER TABLE `tnps`
  MODIFY `tnp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achivements`
--
ALTER TABLE `achivements`
  ADD CONSTRAINT `achivements_prof_id_foreign` FOREIGN KEY (`prof_id`) REFERENCES `professors` (`prof_id`);

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`);

--
-- Constraints for table `sub_events`
--
ALTER TABLE `sub_events`
  ADD CONSTRAINT `sub_events_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `sub_events_e_id_foreign` FOREIGN KEY (`e_id`) REFERENCES `events` (`e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
