-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 10:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ase`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id_budget` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id_budget`, `year`, `amount`) VALUES
(1, 2556, 2000),
(2, 2556, 2000),
(3, 2556, 2000),
(4, 2563, 500),
(5, 2559, 100),
(6, 2557, 1),
(7, 2, 1),
(8, 2557, 88);

-- --------------------------------------------------------

--
-- Table structure for table `develop_budget`
--

CREATE TABLE `develop_budget` (
  `develop_budget_id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `personal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `give_money`
--

CREATE TABLE `give_money` (
  `give_money_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_13_071314_create_yearsummary_table', 1),
(5, '2019_12_13_080325_create_proposal_table', 1),
(6, '2019_12_13_080357_create_give_money_table', 1),
(7, '2019_12_13_080641_create_develop_budget_table', 1),
(8, '2020_03_13_164155_create_budget_table', 1);

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
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `follower_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `objective` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Attachments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Allowances_fee` int(11) NOT NULL,
  `Allowances_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accommodation_fee` int(11) NOT NULL,
  `Accommodation_deail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Travel_expenses` int(11) NOT NULL,
  `Travel_deail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Other_expenses` int(11) NOT NULL,
  `Other_deail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_people` int(11) DEFAULT NULL,
  `Place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activity_code` int(11) DEFAULT NULL,
  `Activity` int(11) DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Project_cost` int(11) NOT NULL,
  `Own_cost` int(11) DEFAULT NULL,
  `Bosses_opinion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bosses_aproval_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dean_opinion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dean_aproval_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Staff_ aproval_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Apoval_date` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_Allowances` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_Accommodation` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_Travel` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_Other` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `user_id`, `date`, `project_name`, `follower_name`, `Start_date`, `end_date`, `note`, `type`, `objective`, `vehicle`, `registration_fee`, `Attachments`, `Allowances_fee`, `Allowances_detail`, `Accommodation_fee`, `Accommodation_deail`, `Travel_expenses`, `Travel_deail`, `Other_expenses`, `Other_deail`, `Num_people`, `Place`, `Activity_code`, `Activity`, `Status`, `Project_cost`, `Own_cost`, `Bosses_opinion`, `Bosses_aproval_result`, `dean_opinion`, `dean_aproval_result`, `Staff_ aproval_result`, `Apoval_date`, `deleted_at`, `created_at`, `updated_at`, `file`, `file_Allowances`, `file_Accommodation`, `file_Travel`, `file_Other`) VALUES
(10, 1, '2020-03-16 17:23:18', 'คอมพิวเตอร์', 'ชญาดา', '2020-03-17', '2020-03-19', 'ลา', 2, 'อบรม', 'เรือ', '100', NULL, 1500, 'ค่าเบี้ยเลี้ยง', 3500, 'ค่าเบี้ยเลี้ยง', 1000, 'ค่าเบี้ยเลี้ยง', 4002, 'ค่าเบี้ยเลี้ยง', NULL, 'โรงเรียน', NULL, NULL, 'เสนอแผน', 9000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ASE_A20200316172318.doc', 'ASE_B20200316172318.doc', 'ASE_C20200316172318.doc', 'ASE_D20200316172318.doc', 'ASE_E20200316172318.docx'),
(11, 1, '2020-03-17 13:43:30', 'สตาร์ทอัพ', 'ชญาดา', '2020-03-18', '2020-03-18', 'ลา', 4, 'อบรม', 'รถยนต์', '4644', NULL, 236, 'เดัะพัะด', 3500, 'ีนร้', 20000, 'ะัดเร', 2000, 'พดะัดแ', NULL, 'ฮาวาย', NULL, NULL, 'เสนอแผน', 80000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ASE_A20200317134330.doc', 'ASE_B20200317134330.doc', 'ASE_C20200317134330.doc', 'ASE_D20200317134330.doc', 'ASE_E20200317134330.doc'),
(12, 1, '2020-03-17 15:34:40', 'สตาร์ทอัพ', 'ชญาดา', '2020-03-18', '2020-03-18', 'ลา', 4, 'อบรม', 'รถยนต์', '4644', NULL, 236, 'เดัะพัะด', 3500, 'ีนร้', 20000, 'ะัดเร', 2000, 'พดะัดแ', NULL, 'ฮาวาย', NULL, NULL, 'เสนอแผน', 80000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ASE_A20200317153440.doc', 'ASE_B20200317153440.doc', 'ASE_C20200317153440.doc', 'ASE_D20200317153440.doc', 'ASE_E20200317153440.doc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'อาริสา ผดุงศรี', 'arisa.Pbee@gmail.com', NULL, '$2y$10$mEn617SncYzr0QkjoaHim.r4RKXevfjCIu5BC1xZgR5C84QDZ4Pn.', NULL, '2020-03-13 10:35:35', '2020-03-13 10:35:35'),
(2, 2, 'Bee', 'admin@admin.com', NULL, '$2y$10$9urpkanMPvQV3DfXhi.CpOyBPWGTTikL3Zx4Un7NOHp8vxfbNvgsq', NULL, '2020-03-13 10:36:28', '2020-03-13 10:36:28'),
(3, 3, 'lisa', 'guuaem@gmail.com', NULL, '$2y$10$1XY.bYvgCkNl2voMo2jEgeO2RXFlickSTit7KBzMfjpK6tbIlV.6G', NULL, '2020-03-13 10:48:26', '2020-03-13 10:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_spend`
--

CREATE TABLE `user_spend` (
  `id` int(225) NOT NULL,
  `propose_id` int(225) NOT NULL,
  `amount` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `status` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yearsummary`
--

CREATE TABLE `yearsummary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `total_budget` int(11) NOT NULL,
  `remaining_budget` int(11) NOT NULL,
  `num_people` int(11) NOT NULL,
  `project_total` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id_budget`);

--
-- Indexes for table `develop_budget`
--
ALTER TABLE `develop_budget`
  ADD PRIMARY KEY (`develop_budget_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `give_money`
--
ALTER TABLE `give_money`
  ADD PRIMARY KEY (`give_money_id`);

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
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yearsummary`
--
ALTER TABLE `yearsummary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id_budget` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `develop_budget`
--
ALTER TABLE `develop_budget`
  MODIFY `develop_budget_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `give_money`
--
ALTER TABLE `give_money`
  MODIFY `give_money_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `yearsummary`
--
ALTER TABLE `yearsummary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
