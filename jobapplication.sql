-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2021 at 10:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relstatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`user_id`, `fname`, `lname`, `designation`, `address1`, `address2`, `email`, `phone`, `city`, `state`, `zipcode`, `gender`, `relstatus`, `dob`, `created_at`, `updated_at`) VALUES
(55, 'Nihang1', 'Desai', 'Developer', 'Navrangpura', 'Sardar Patel Stadium', 'nihang@gmail.com', '9099501437', 'Ahmedabd', 'Gujarat', '380014', 'Male', 'Single', '2000-08-08', '2021-08-03 13:33:03', '2021-08-03 13:35:57'),
(56, 'Vishal', 'Nayi', 'Developer', 'Santej', 'Ahmedabd', 'vishal@gmail.com', '9824294310', 'Ahmedabad', 'Gujarat', '380064', 'Male', 'Single', '1999-08-03', '2021-08-03 13:37:15', '2021-08-03 13:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `edu_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ssc_board_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_percentage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_board_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_percentage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_course_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_university` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_passing_year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_percentage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_course_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_university` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_passing_year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_percentage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`edu_id`, `user_id`, `ssc_board_name`, `ssc_passing_year`, `ssc_percentage`, `hsc_board_name`, `hsc_passing_year`, `hsc_percentage`, `degree_course_name`, `degree_university`, `degree_passing_year`, `degree_percentage`, `master_course_name`, `master_university`, `master_passing_year`, `master_percentage`, `created_at`, `updated_at`) VALUES
(21, 55, 'GSEB', '2015', '90', 'GSEB', '2017', '89', 'CS', 'Indus', '2021', '8.9', 'Data Science', 'Indus', '2023', '9', '2021-08-03 13:33:56', '2021-08-03 13:33:56'),
(22, 56, 'GSEB', '2015', '99', 'GSEB', '2017', '88', 'CS', 'Indus', '2021', '9.9', 'Data Science', 'Indus', '2023', '9.8', '2021-08-03 13:38:08', '2021-08-03 13:38:08');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `hindi` tinyint(1) NOT NULL,
  `hread` tinyint(1) NOT NULL,
  `hwrite` tinyint(1) NOT NULL,
  `hspeak` tinyint(1) NOT NULL,
  `english` tinyint(1) NOT NULL,
  `eread` tinyint(1) NOT NULL,
  `ewrite` tinyint(1) NOT NULL,
  `espeak` tinyint(1) NOT NULL,
  `gujarati` tinyint(1) NOT NULL,
  `gread` tinyint(1) NOT NULL,
  `gwrite` tinyint(1) NOT NULL,
  `gspeak` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`language_id`, `user_id`, `hindi`, `hread`, `hwrite`, `hspeak`, `english`, `eread`, `ewrite`, `espeak`, `gujarati`, `gread`, `gwrite`, `gspeak`, `created_at`, `updated_at`) VALUES
(18, 55, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, '2021-08-03 13:34:25', '2021-08-03 13:34:25'),
(19, 56, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, '2021-08-03 13:38:47', '2021-08-03 13:38:47');

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
(58, '2014_10_12_000000_create_users_table', 1),
(59, '2014_10_12_100000_create_password_resets_table', 1),
(60, '2019_08_19_000000_create_failed_jobs_table', 1),
(61, '2021_07_29_063254_create_basic_details', 1),
(62, '2021_07_29_101309_create_referance_contacts', 1),
(63, '2021_07_29_103608_create_preferances', 1),
(64, '2021_07_29_110715_create_education_details', 1),
(65, '2021_07_29_154801_create_work_experience', 1),
(66, '2021_07_31_170332_create_languages', 1),
(67, '2021_07_31_171839_create_technologies', 1);

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
-- Table structure for table `preferances`
--

CREATE TABLE `preferances` (
  `pref_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `prefered_location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_period` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expexted_ctc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_ctc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferances`
--

INSERT INTO `preferances` (`pref_id`, `user_id`, `prefered_location`, `notice_period`, `expexted_ctc`, `current_ctc`, `department`, `created_at`, `updated_at`) VALUES
(19, 55, 'Ahmedabad,Baroda', '1', '30000', '12000', 'Developer,Designer', '2021-08-03 13:35:22', '2021-08-03 13:35:22'),
(20, 56, 'Ahmedabad,Baroda', '1', '33333', '12222', 'Developer,Designer', '2021-08-03 13:39:24', '2021-08-03 13:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `referance_contacts`
--

CREATE TABLE `referance_contacts` (
  `refcon_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `ref_name1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_mobile1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_reloation1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_name2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_mobile2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_reloation2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referance_contacts`
--

INSERT INTO `referance_contacts` (`refcon_id`, `user_id`, `ref_name1`, `ref_mobile1`, `ref_reloation1`, `ref_name2`, `ref_mobile2`, `ref_reloation2`, `created_at`, `updated_at`) VALUES
(17, 55, 'Vishal', '9824294310', 'Friend', 'Nikhil', '7600784006', 'Friend', '2021-08-03 13:35:08', '2021-08-03 13:35:08'),
(18, 56, 'Nihang', '9099501437', 'Friend', 'Nikhil', '7600784006', 'Friend', '2021-08-03 13:39:09', '2021-08-03 13:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `tech_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `php` tinyint(1) NOT NULL,
  `plevel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mysql` tinyint(1) NOT NULL,
  `mlevel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laravel` tinyint(1) NOT NULL,
  `llevel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oracle` tinyint(1) NOT NULL,
  `olevel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`tech_id`, `user_id`, `php`, `plevel`, `mysql`, `mlevel`, `laravel`, `llevel`, `oracle`, `olevel`, `created_at`, `updated_at`) VALUES
(21, 55, 1, 'PExpert', 1, 'MExpert', 1, 'LMideator', 1, 'OBeginer', '2021-08-03 13:34:35', '2021-08-03 13:34:35'),
(22, 56, 1, 'PMideator', 0, NULL, 1, 'LBeginer', 0, NULL, '2021-08-03 13:38:51', '2021-08-03 13:38:51');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Bxu82koO8jmhFvhkUZG9nenMjXuHntxcABY7Z6xFSKVVsh.tBeAd2', NULL, '2021-07-31 12:25:36', '2021-07-31 12:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `exp_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`exp_id`, `user_id`, `company_name`, `designation`, `from`, `to`, `created_at`, `updated_at`) VALUES
(43, 55, 'Veritas', 'Developer', '2020-06-04', '2021-08-04', '2021-08-03 13:34:15', '2021-08-03 13:34:15'),
(44, 56, 'Pixal', 'Sr. Developer', '2021-08-02', '2021-08-05', '2021-08-03 13:38:41', '2021-08-03 13:38:41'),
(45, 56, 'Veritas', 'Developer', '2021-02-04', '2021-08-04', '2021-08-03 13:38:41', '2021-08-03 13:38:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

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
-- Indexes for table `preferances`
--
ALTER TABLE `preferances`
  ADD PRIMARY KEY (`pref_id`);

--
-- Indexes for table `referance_contacts`
--
ALTER TABLE `referance_contacts`
  ADD PRIMARY KEY (`refcon_id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`exp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `edu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `preferances`
--
ALTER TABLE `preferances`
  MODIFY `pref_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `referance_contacts`
--
ALTER TABLE `referance_contacts`
  MODIFY `refcon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `tech_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `exp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
