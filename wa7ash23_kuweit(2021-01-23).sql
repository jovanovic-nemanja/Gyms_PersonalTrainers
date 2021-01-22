-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2021 at 05:27 PM
-- Server version: 5.6.40-84.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wa7ash23_kuweit`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(20, '156', 'upload/avatar/1611292116.png', '2021-01-21 20:04:23', '2021-01-22 04:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `description`, `image_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(50, '125', NULL, '1611092365603910318.jpg', NULL, '2021-01-19 20:40:19', '2021-01-19 20:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `bbanks`
--

CREATE TABLE `bbanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbanks`
--

INSERT INTO `bbanks` (`id`, `bank_name`, `bank_number`, `swift_code`, `holder_name`, `user_id`, `remember_token`, `created_at`, `updated_at`, `iban`) VALUES
(28, 'Commercial Bank', '11357896', 'COMBKWKW', 'Randy Ali', '156', NULL, '2021-01-21 10:38:00', '2021-01-21 10:38:00', '000000000000157896456');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weightlift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilates` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bodybuilding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bootcamp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMS` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gym` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gymnastics` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KickBoxing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MartialArts` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersonalFitness` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Spinning` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boxing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crosstraing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `week_date` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `all_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `country`, `address`, `email`, `website`, `contact`, `message`, `phone_number`, `weightlift`, `yoga`, `pilates`, `mma`, `Bodybuilding`, `Bootcamp`, `EMS`, `Gym`, `Gymnastics`, `KickBoxing`, `MartialArts`, `PersonalFitness`, `Spinning`, `boxing`, `karate`, `crosstraing`, `mon_from`, `mon_to`, `tue_from`, `tue_to`, `wed_from`, `wed_to`, `thu_from`, `thu_to`, `fri_from`, `fri_to`, `sat_from`, `sat_to`, `sun_from`, `sun_to`, `week_date`, `facebook`, `twitter`, `instagram`, `youtube`, `all_check`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, '156', 'Caru Gym', 'not', 'Manama, Street 4', 'sales@foodimporters.me', 'www.foodimporters.me', 'Cera Caru', 'we are the best gym in bahrain', '66993234', NULL, NULL, NULL, NULL, 'Bodybuilding', NULL, 'EMS', 'Gym', NULL, NULL, NULL, NULL, NULL, 'Boxing', 'Karate', 'Crosstraing', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, 'www.instagram.com/carugym', NULL, 'all', NULL, '2021-01-21 09:31:01', '2021-01-21 19:54:21'),
(21, '158', 'gym', 'not', 'address', 'petrosyanarsenii@outlook.com', 'admin.com', '1233', 'Gym information', '123', 'WeightLefting', NULL, 'Pilates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '0', '24', '[\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\",\"Sunday\"]', NULL, NULL, NULL, NULL, 'all', NULL, '2021-01-21 15:56:54', '2021-01-21 15:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `description`, `document_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, '156', NULL, '1611229115686Security Invoice Apache.pdf', NULL, '2021-01-21 10:38:34', '2021-01-21 10:38:34');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `user_id`, `price`, `service`, `perk`, `duration`, `app`, `remember_token`, `created_at`, `updated_at`) VALUES
(36, '156', 'US$ 50', 'Women\'s Only Class', '- Free Wifi\r\n- Valet Parking', '1 Month', 'computer', NULL, '2021-01-21 10:29:39', '2021-01-21 10:29:39'),
(37, '156', 'US$ 100', 'Men\'s MMA', 'Free Nutrition', '2 months', 'app', NULL, '2021-01-21 10:32:15', '2021-01-21 10:32:15'),
(38, '156', '250', 'Men\'s Championship MMA', 'Free Locker', '5 months', 'computer', NULL, '2021-01-21 10:32:51', '2021-01-21 10:32:51'),
(39, '156', '350', 'Kids classes', 'Free Valet\r\nFree Wifi\r\nFree food', '12 months', 'computer', NULL, '2021-01-21 10:36:42', '2021-01-21 10:36:42');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_11_042256_create_avatars_table', 2),
(5, '2020_12_11_073251_create_companies_table', 3),
(6, '2020_12_11_124523_create_banners_table', 4),
(7, '2020_12_11_135916_create_youtubes_table', 5),
(8, '2020_12_11_145707_create_offers_table', 6),
(9, '2020_12_11_151721_create_accounts_table', 7),
(10, '2020_12_12_025615_create_descriptions_table', 8),
(11, '2020_12_13_092322_create_memberships_table', 9),
(12, '2020_12_14_192110_create_personal_avatars_table', 10),
(13, '2020_12_14_192723_create_trainers_table', 11),
(14, '2020_12_14_210801_create_personal__memberships_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user1@gmail.com', '$2y$10$yweYYZaaxr4TVX9uavySVe.qTXk73t8djcNNmcQUzMnkWlOiiI/de', '2020-12-20 12:45:40'),
('petroyanarsenii@outlook.com', '$2y$10$P7nPn/LmJqoMzbxlJ7y/DOz5W/b435UwqF.iK2MnSbdniBeHEyLwC', '2020-12-21 12:47:37'),
('admin@admin.com', '$2y$10$MRzD5r7kFEsd4M.r0dEen.m0aOCiD46E2OeAwvdfQC1C5HUW4/y.i', '2020-12-24 20:12:02'),
('randyali80@gmail.com', '$2y$10$NZeuN0CxFsBPaezzIuTsmuZmEkdRQHnx3pNNqvjyeHvwojOOe50pu', '2020-12-24 21:33:44'),
('admin@gmail.com', '$2y$10$EDC0uJ7LtY2pshrQ4uja8.6wxNGaKtWO.kBAPKWKENu6uMrniJRIO', '2020-12-31 06:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_avatars`
--

CREATE TABLE `personal_avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_avatars`
--

INSERT INTO `personal_avatars` (`id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '13', 'upload/avatar/1608310967.jpg', '2020-12-14 17:25:17', '2020-12-18 16:02:47'),
(2, '35', 'upload/avatar/1608301603.psd', '2020-12-18 13:26:06', '2020-12-18 13:26:43'),
(3, '12', 'upload/avatar/1608316859.jpg', '2020-12-18 14:33:54', '2020-12-18 17:40:59'),
(4, '43', 'upload/avatar/1608428022.jpg', '2020-12-20 00:33:42', '2020-12-20 00:33:42'),
(5, '46', 'upload/avatar/1608428753.jpg', '2020-12-20 00:45:53', '2020-12-20 00:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal__memberships`
--

CREATE TABLE `personal__memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal__memberships`
--

INSERT INTO `personal__memberships` (`id`, `user_id`, `price`, `service`, `perk`, `duration`, `app`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, '12', NULL, NULL, NULL, NULL, 'computer', NULL, '2020-12-16 20:12:10', '2020-12-16 20:12:10'),
(10, '12', NULL, NULL, NULL, NULL, 'computer', NULL, '2020-12-16 20:12:12', '2020-12-16 20:12:12'),
(11, '12', NULL, NULL, NULL, NULL, 'computer', NULL, '2020-12-16 20:12:16', '2020-12-16 20:12:16'),
(15, '54', '3 months', '25', '2 weeks free', '150', 'computer', NULL, '2020-12-23 20:55:59', '2020-12-23 20:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `touristpasses`
--

CREATE TABLE `touristpasses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `touristpasses`
--

INSERT INTO `touristpasses` (`id`, `user_id`, `price`, `facility`, `duration`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, '156', 'US$ 10', 'Full Access', '1 day', NULL, '2021-01-21 10:37:23', '2021-01-21 10:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nutrition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `external_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `external_id`, `name`, `last_name`, `website`, `email`, `verify_code`, `email_verified_at`, `country`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(60, 'i-100060', 'Randy', 'Ali', 'admin.com', 'randyali80@gmail.com', '571160', '2021-01-16 09:52:35', 'kw', '$2y$10$8wTb64cCVMDxkEpsoT84rO5Mac1MBSh1U/m.ZitX8XPUzkgXekEQe', 1, 'butINBxqMlZEsPGjHSdOHsb99SXdrsJXKt0w6bV5fN0YbBWsdCNQSHEPfDyx', '2020-12-23 18:54:51', '2021-01-22 15:21:15'),
(125, 'i-100125', 'Sireen', 'Ali', NULL, 'orders@sirinas.com', NULL, NULL, 'dz', '$2y$10$BC2CcbA2OaXiqn/OWuNGNuIwjyjQCtZUWDfC.FuPeXA4r6CpWw9VO', 2, NULL, '2021-01-19 09:49:37', '2021-01-19 09:49:37'),
(128, 'i-100128', 'ravi', 'kumar', 'https://www.mozywuval.ws', 'ravi@peninftech.com', NULL, '2021-01-20 06:30:31', 'hm', '$2y$10$tUOuMLCPqCyAPHVIzRF5zOwy9T/1bnKj2Ot7tK7O.JJ7stPKlqZ7K', 2, NULL, '2021-01-20 06:28:49', '2021-01-20 06:30:31'),
(138, 'i-100138', 'bharti', 'jain', 'https://www.mozywuval.ws', 'bharti@peninftech.com', NULL, '2021-01-21 03:00:50', 'not', '$2y$10$haH7idKnNGOaUDjXsBCWXOVb6fi3l2fcrLG2moBGlvAg7ScDqcTQm', 2, NULL, '2021-01-21 02:58:46', '2021-01-21 03:00:50'),
(139, 'i-100139', 'Ravinn', 'kr', 'dgsd', 'engg.ravi434@gmail.com', NULL, NULL, 'at', '$2y$10$KHPV1Oxzf0awAAur7d7Rl.2VTzy27D0VMOLJSV05Ov0/V3QTwg/We', 2, NULL, '2021-01-21 03:04:38', '2021-01-21 03:04:38'),
(140, 'i-100140', 'gulab', 'kumar', 'https://www.mozywuval.ws', 'gulab@peninftech.com', NULL, NULL, 'in', '$2y$10$dwFOdN5OPput4Q7S7aOr/ermaRM/xBORMHFzqpNrqqfabrHNo2GK6', 2, NULL, '2021-01-21 03:10:26', '2021-01-21 03:10:26'),
(141, 'i-100141', 'dimpy', 'shah', 'https://www.mozywuval.ws', 'dimpy_shah@gmail.com', NULL, NULL, 'not', '$2y$10$GjTsl6iLzhk8kr0NmiIHWeXHrIS.1XlTuVulU6EzphSKb9uq2to9K', 2, NULL, '2021-01-21 04:03:27', '2021-01-21 04:03:27'),
(142, 'i-100142', 'dimpy', 'jain', 'https://www.mozywuval.ws', 'dimpyshah76@gmail.com', NULL, NULL, 'al', '$2y$10$VNu8Lku8aXzyE21der0iweA33pbptBoZ6CIlUK/qXGxzD7YyVKwnS', 2, NULL, '2021-01-21 04:06:07', '2021-01-21 04:06:07'),
(143, 'i-100143', 'apeksha', 'kumari', 'https://www.mozywuval.ws', 'apeksha@gmail.com', NULL, NULL, 'not', '$2y$10$A6KHiQvhKQKloEEF6AL1tOx4moCqNaavfnx68ZTp008Xq4PhxkzjO', 2, NULL, '2021-01-21 04:15:50', '2021-01-21 04:15:50'),
(144, 'i-100144', 'fg', 'zxc', 'https://www.mozywuval.ws', 'gmgori3@gmail.com', NULL, '2021-01-21 04:44:25', 'not', '$2y$10$7LsPMb2QxmGj.F0rdg1tjueOge3mg.KY96lquyMeQcDxy89/kPKX.', 2, NULL, '2021-01-21 04:26:46', '2021-01-21 04:44:25'),
(148, 'i-100148', 'bharti', 'jian', 'https://www.mozywuval.ws', 'jainbhartikol@gmail.com', NULL, NULL, 'ad', '$2y$10$I4AXyc3Qvaw2TETm2F37ue7KIUcAGX35plSYzf7v8JvsOBgvGQ/sa', 2, NULL, '2021-01-21 05:35:06', '2021-01-21 05:35:06'),
(156, 'i-100156', 'Cera', 'Caru', NULL, 'sales@foodimporters.me', NULL, '2021-01-21 08:33:49', 'bd', '$2y$10$CMw5fuJJ1Agy.cN3vmk3FOmjI0ImrptIlzHIoYYtLxlSu2WgnhXj6', 2, NULL, '2021-01-21 08:29:02', '2021-01-21 08:33:49'),
(158, 'i-100158', 'admin', 'admin', NULL, 'petrosyanarsenii@outlook.com', NULL, '2021-01-21 08:47:41', 'not', '$2y$10$F1Z0cu7fg.mO6CX.ljtIUegITRpuoXXpppfXmmU57Oki0mpAGzXQu', 2, NULL, '2021-01-21 08:47:19', '2021-01-21 08:47:41'),
(159, 'i-100159', 'Jovanovic', 'Nemanja', 'https://github.com/jovanovic-nemanja', 'jovanovic.nemanja.1029@gmail.com', NULL, '2021-01-22 05:47:07', 'rs', '$2y$10$ntC3JDERb21vf1/SDaxHZ.iT7OSLmldtB5V4tVsjUJsTnhci4GiMq', 2, NULL, '2021-01-22 05:46:13', '2021-01-22 05:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbanks`
--
ALTER TABLE `bbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
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
-- Indexes for table `personal_avatars`
--
ALTER TABLE `personal_avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal__memberships`
--
ALTER TABLE `personal__memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touristpasses`
--
ALTER TABLE `touristpasses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `bbanks`
--
ALTER TABLE `bbanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `personal_avatars`
--
ALTER TABLE `personal_avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personal__memberships`
--
ALTER TABLE `personal__memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `touristpasses`
--
ALTER TABLE `touristpasses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
