-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2019 at 11:59 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `made_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_of_announcement` datetime DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `description`, `made_by`, `time_of_announcement`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(2, 'thankgiving sunday', 'czvdfnbvmfxb', 'mary', '2019-01-02 01:00:00', '2345', NULL, '2019-01-21 22:20:33', '2019-01-21 22:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Musicals', '2019-01-20 12:38:09', '2019-01-20 19:07:25'),
(2, 'Technicals', '2019-01-20 12:38:09', '2019-01-20 19:23:08'),
(3, 'Pastoral', '2019-01-20 12:38:09', '2019-01-20 12:38:09'),
(4, 'Editorial', '2019-01-20 12:38:09', '2019-01-20 12:38:09'),
(5, 'Publicity', '2019-01-20 12:38:09', '2019-01-20 12:38:09'),
(6, 'Sales', '2019-01-20 12:42:04', '2019-01-20 12:42:04'),
(7, 'Commercial', '2019-01-20 12:45:15', '2019-01-20 12:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `date_of_event`, `raw`, `created_at`, `updated_at`) VALUES
(1, 'Thank-giving', '23rd June, 2019', NULL, '2019-01-20 20:47:20', '2019-01-20 20:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `giving`
--

DROP TABLE IF EXISTS `giving`;
CREATE TABLE IF NOT EXISTS `giving` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `member_id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_giving` datetime DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `giving_member_id_foreign` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giving`
--

INSERT INTO `giving` (`id`, `member_id`, `item`, `amount`, `transaction_code`, `date_of_giving`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(1, 1, 'yam', '200000000', '23GFH', '2019-01-05 00:00:00', '1234', NULL, '2019-01-21 21:16:48', '2019-01-21 21:16:48'),
(2, 3, 'Rice', '3000000', '23GFH', '2019-01-02 00:00:00', '2222', NULL, '2019-01-21 21:17:06', '2019-01-21 21:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Choir', '2019-01-20 13:47:16', '2019-01-20 13:47:16'),
(2, 'Youth association', '2019-01-21 21:35:28', '2019-01-21 21:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_category` enum('elder','youth','teenager','kid','infant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_member_code_unique` (`member_code`),
  KEY `member_group_id_foreign` (`group_id`),
  KEY `member_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `group_id`, `department_id`, `firstname`, `lastname`, `gender`, `age_category`, `birth_date`, `address`, `phone_number`, `email`, `password`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mary', 'Mgbede', 'female', 'youth', '2019-01-01', 'cdsgvdfhfkjhkhhfcgdfbnjkl', '08109030672', 'adaamgbede@gmail.com', NULL, '1234', NULL, '2019-01-21 19:40:03', '2019-01-21 19:40:03'),
(3, 1, 5, 'Mark', 'Mgbede', 'male', 'teenager', '2019-01-08', 'cdsgvdfhfkjhkhhfcgdfbnjkl', '08109030672', 'godkith@gmail.com', NULL, '2222', NULL, '2019-01-21 19:42:07', '2019-01-21 19:42:07'),
(4, 2, 6, 'Ada', 'Obi', 'female', 'youth', '2019-01-02', 'cdsgvdfhfkjhkhhfcgdfbnjkl', '08109030672', 'adaamgbede@gmail.com', NULL, NULL, NULL, '2019-01-21 22:50:09', '2019-01-21 22:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_17_151416_create_event_table', 1),
(4, '2019_01_17_194916_create_sunday_school_table', 1),
(5, '2019_01_17_194941_create_visitor_table', 1),
(6, '2019_01_17_195039_create_announcement_table', 1),
(7, '2019_01_17_195125_create_weekly_activity_table', 1),
(8, '2019_01_17_195151_create_group_table', 1),
(9, '2019_01_17_195216_create_department_table', 1),
(10, '2019_01_17_151538_create_member_table', 2),
(11, '2019_01_17_151508_create_giving_table', 3),
(12, '2019_01_17_151607_create_offering_table', 3),
(13, '2019_01_17_194807_create_tithe_table', 3),
(15, '2019_01_20_001801_add_admin_column_to_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offering`
--

DROP TABLE IF EXISTS `offering`;
CREATE TABLE IF NOT EXISTS `offering` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `member_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offering_member_id_foreign` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`id`, `member_id`, `amount`, `transaction_code`, `payment_date`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(1, 1, '200000000', '23GFH', '2019-01-04 00:00:00', '1234', NULL, '2019-01-21 20:49:35', '2019-01-21 20:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sunday_school`
--

DROP TABLE IF EXISTS `sunday_school`;
CREATE TABLE IF NOT EXISTS `sunday_school` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ministered_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `total_attendees` int(11) DEFAULT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sunday_school`
--

INSERT INTO `sunday_school` (`id`, `ministered_by`, `topic`, `content`, `date_time`, `total_attendees`, `raw`, `created_at`, `updated_at`) VALUES
(1, 'Pst Paul', 'inheritance', 'fshgfnfghz', '2019-01-04 01:00:00', 45, NULL, '2019-01-21 22:21:12', '2019-01-21 22:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `tithe`
--

DROP TABLE IF EXISTS `tithe`;
CREATE TABLE IF NOT EXISTS `tithe` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `member_id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tithe_member_id_foreign` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tithe`
--

INSERT INTO `tithe` (`id`, `member_id`, `amount`, `transaction_code`, `payment_date`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(2, 1, '200000000', '23GFH', '2019-01-02 00:00:00', '1234', NULL, '2019-01-21 22:19:47', '2019-01-21 22:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Adaa', 'adaamgbede@gmail.com', NULL, '$2y$10$oRhVaEnaGYip1fThVZjGMOFGve2.rWp5fAwC5AzVipMNGegEJmpq2', '1', 'VSIl96VryeD5otZoydgYJylexp0qcQmirNdBmFIkTT22INhxQ6cIIp2lTJSR', '2019-01-19 23:28:24', '2019-01-19 23:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_category` enum('elder','youth','teenager','kid','infant') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `firstname`, `lastname`, `gender`, `age_category`, `birth_date`, `address`, `invited_by`, `phone_number`, `email`, `member_code`, `raw`, `created_at`, `updated_at`) VALUES
(2, 'Mary', 'Mgbede', 'male', 'youth', '2019-01-03', 'cdsgvdfhfkjhkhhfcgdfbnjkl', 'doris', '08109030672', 'adaamgbede@gmail.com', '2345', NULL, '2019-01-20 23:55:37', '2019-01-20 23:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_activity`
--

DROP TABLE IF EXISTS `weekly_activity`;
CREATE TABLE IF NOT EXISTS `weekly_activity` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_of_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_of_activity` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekly_activity`
--

INSERT INTO `weekly_activity` (`id`, `name`, `day_of_week`, `time_of_activity`, `created_at`, `updated_at`) VALUES
(2, 'Prayer Meeting', 'Wednesday', '04:00:08', '2019-01-21 22:20:45', '2019-01-21 22:20:45');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giving`
--
ALTER TABLE `giving`
  ADD CONSTRAINT `giving_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offering`
--
ALTER TABLE `offering`
  ADD CONSTRAINT `offering_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tithe`
--
ALTER TABLE `tithe`
  ADD CONSTRAINT `tithe_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
