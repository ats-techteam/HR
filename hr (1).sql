-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 09:44 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appl_status`
--

CREATE TABLE `appl_status` (
  `appl_id` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appl_status`
--

INSERT INTO `appl_status` (`appl_id`, `id`, `job_id`, `Time_stamp`) VALUES
(19, 4, 1, '2020-08-26 06:52:26'),
(20, 4, 1, '2020-08-26 06:52:26'),
(21, 4, 1, '2020-08-26 06:52:26'),
(22, 4, 1, '2020-08-26 06:52:26'),
(23, 4, 1, '2020-08-26 06:52:26'),
(24, 4, 1, '2020-08-26 06:52:26'),
(25, 3, 1, '2020-08-26 06:52:26'),
(26, 3, 2, '2020-08-26 06:52:26'),
(27, 3, 3, '2020-08-26 06:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_type` varchar(255) NOT NULL,
  `emp_strength` int(11) NOT NULL,
  `com_reg_no` varchar(255) NOT NULL,
  `address` varchar(555) NOT NULL,
  `city` text NOT NULL,
  `contact_no` varchar(555) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `website` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`com_id`, `com_name`, `com_type`, `emp_strength`, `com_reg_no`, `address`, `city`, `contact_no`, `mail_id`, `website`, `created_at`) VALUES
(1, 'company 1', 'Software Services', 11, '#q2q2229398', 'rmm', 'Rameswaram', '9573899788', 'gam@gmai.com', 'www.com1.com', '2020-08-20 09:49:10'),
(2, 'company 2', 'Software Services', 11, '#q2q22293485', 'rmm', 'Rameswaram', '3949847394', 'ad@bc.com', 'www.com1.com', '2020-08-20 09:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(550) NOT NULL,
  `com_name` varchar(550) NOT NULL,
  `job_location` varchar(550) NOT NULL,
  `job_vacancy` int(11) NOT NULL,
  `job_req_exp` varchar(550) NOT NULL,
  `job_requirement` varchar(2500) NOT NULL,
  `job_salary` varchar(550) NOT NULL,
  `posted_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `com_name`, `job_location`, `job_vacancy`, `job_req_exp`, `job_requirement`, `job_salary`, `posted_datetime`) VALUES
(1, 'Python Developer', 'devpy', 'chennai', 20, 'Min 5 Yrs Exp', 'Good Knowledge in python Programming and SQL query', '10000 - 15000', '2020-08-17 06:22:28'),
(2, 'php dev', 'abc', 'madurai', 12, '5+ yrs', 'php html', '10000', '2020-08-21 05:07:49'),
(3, '.Net Programmer', 'ATS', 'Rameswaram', 2, 'Fresher', 'Basic Programming Knowledge & Oops Concepts', '20000', '2020-08-26 06:02:20');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `resumedb`
--

CREATE TABLE `resumedb` (
  `resume_id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumedb`
--

INSERT INTO `resumedb` (`resume_id`, `file_name`) VALUES
(1, 'header.blade.php'),
(2, 'header.blade.php'),
(3, 'site-setting.blade.php'),
(4, 'PHP Syllabus 21 july.docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobileno`, `address`, `exp`, `jobtype`, `city`, `resume`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$TfCJhOfwTQeEN0BP4QvSrehtJorJY0lEH6hJKwmvNaUwXQg6/rmgi', NULL, '2020-08-12 01:47:07', '2020-08-12 01:47:07'),
(3, 'admin', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '$2y$10$BEyUxDJ9BWpcqlX/OHlSyudFz0JoSvqwEBaNnT26piFv/uQSHEZG2', NULL, '2020-08-17 00:23:50', '2020-08-17 00:23:50'),
(4, 'user', 'user@user.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6q0fbjcUcj/WSZFm8YdLuOvCpF6G4oi4mSqOLdLBjyTc0kSTp8bQq', NULL, '2020-08-17 00:24:43', '2020-08-17 00:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appl_status`
--
ALTER TABLE `appl_status`
  ADD PRIMARY KEY (`appl_id`),
  ADD KEY `job_id key` (`job_id`),
  ADD KEY `id key` (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

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
-- Indexes for table `resumedb`
--
ALTER TABLE `resumedb`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appl_status`
--
ALTER TABLE `appl_status`
  MODIFY `appl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resumedb`
--
ALTER TABLE `resumedb`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appl_status`
--
ALTER TABLE `appl_status`
  ADD CONSTRAINT `id key` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `job_id key` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
