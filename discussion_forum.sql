-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2020 at 03:55 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', '2019-04-09 14:57:21', '2019-04-09 14:57:21'),
(2, 'Vue.js', 'vuejs', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(3, 'Angular', 'angular', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(4, 'React', 'react', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(5, 'Jquery', 'jquery', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(6, 'Javascript', 'javascript', '2019-04-09 14:57:22', '2019-04-09 14:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `channel_id`, `title`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Lorem ipsum, dolor sit amet consectetur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.', 'lorem-ipsum-dolor-sit-amet-consectetur', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(2, 1, 2, 'Lorem ipsum, dolor sit amet consectetur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.', 'lorem-ipsum-dolor-sit-amet-consectetur', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(3, 2, 2, 'Lorem ipsum, dolor sit amet consectetur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.', 'lorem-ipsum-dolor-sit-amet-consectetur', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(4, 2, 2, 'Lorem ipsum, dolor sit amet consectetur', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, asperiores ad deleniti maxime voluptate dolore optio saepe voluptatibus dolorem est aperiam dolores ut! Iste laborum debitis obcaecati placeat ducimus ullam.', 'lorem-ipsum-dolor-sit-amet-consectetur', '2019-04-09 14:57:22', '2019-04-09 14:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `reply_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2020-03-24 10:45:44', '2020-03-24 10:45:44');

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
(3, '2019_03_18_182740_create_oauth_identities_table', 1),
(4, '2019_03_19_183756_create_channels_table', 1),
(5, '2019_03_19_183838_create_discussions_table', 1),
(6, '2019_03_19_184117_create_replies_table', 1),
(7, '2019_04_08_190742_create_likes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_identities`
--

CREATE TABLE `oauth_identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `discussion_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(2, 2, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(3, 1, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(4, 2, 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(5, 1, 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(6, 1, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eum quod corrupti eos animi, ut quasi nihil placeat. Magni, ullam? Magni nam illo quidem ullam expedita, reiciendis fugiat! Cumque, velit?', '2019-04-09 14:57:22', '2019-04-09 14:57:22'),
(7, 1, 1, 'dgdg', '2020-03-24 10:46:34', '2020-03-24 10:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Engr Adnan Ali', 'http://discussionform.test/avatars/admin.png', 1, 'adnan.qta2013@gmail.com', NULL, '$2y$10$neASmcePFzKb4mAwNlwAXeDVCIhRUDXHCfrwGzPBFaGBvvpCG5QIq', NULL, '2019-04-09 14:57:21', '2019-04-09 14:57:21'),
(2, 'Arslan Ali', 'http://discussionform.test/avatars/admin.png', 0, 'arslan@gmail.com', NULL, '$2y$10$6mjJPHy.TI55sSs.Pm4hL.ZY2dlQ3O2/./SScpWzKuq9NqjG4N8ge', NULL, '2019-04-09 14:57:21', '2019-04-09 14:57:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
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
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_identities`
--
ALTER TABLE `oauth_identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
