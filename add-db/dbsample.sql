-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 04:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(10) UNSIGNED NOT NULL,
  `choice_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sofia', NULL, '2017-10-31 12:44:40', '2017-10-31 12:44:40'),
(2, 'Vratza', NULL, '2017-10-31 12:45:23', '2017-10-31 12:45:23'),
(3, 'Plovdiv', NULL, '2017-10-31 12:46:07', '2017-10-31 12:46:07'),
(4, 'Pleven', NULL, '2017-11-01 16:43:01', '2017-11-02 10:28:27'),
(5, 'Varna', NULL, '2017-11-01 16:43:37', '2017-11-01 16:43:37'),
(6, 'Vidin', NULL, '2017-11-02 10:29:40', '2017-11-02 10:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `cities_routes`
--

CREATE TABLE `cities_routes` (
  `city_id_from` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `city_id_to` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities_routes`
--

INSERT INTO `cities_routes` (`city_id_from`, `route_id`, `city_id_to`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, NULL, NULL, NULL),
(2, 1, 1, NULL, NULL, NULL),
(1, 3, 3, '2017-11-01 13:34:32', '2017-11-01 13:34:32', NULL),
(3, 3, 1, '2017-11-01 13:36:10', '2017-11-01 13:36:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fuels`
--

CREATE TABLE `fuels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuels`
--

INSERT INTO `fuels` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'gasoline', NULL, '2017-10-31 19:34:13', '2017-10-31 19:34:13'),
(2, 'diesel', NULL, '2017-10-31 19:34:59', '2017-10-31 19:34:59'),
(3, 'LPG', NULL, '2017-10-31 19:35:33', '2017-10-31 19:35:33');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2017_10_24_142915_create_cities_table', 1),
(15, '2017_10_24_142943_create_fuels_table', 1),
(16, '2017_10_24_143001_create_routetypes_table', 1),
(17, '2017_10_24_143024_create_routes_table', 1),
(18, '2017_10_24_143043_create_stations_table', 1),
(19, '2017_10_24_143103_create_cities_routes_table', 1),
(20, '2017_10_24_143123_create_stations_fuels_table', 1),
(21, '2017_10_24_143140_create_user_roles_table', 1),
(22, '2017_10_24_143157_create_choices_table', 1),
(23, '2017_10_30_221525_add_role_to_users_table', 2),
(24, '2017_10_31_061843_add_cityto_to_cities_routes_table', 3),
(25, '2017_11_01_103708_add_timestamps_to_cities_routes_table', 4),
(26, '2017_11_01_104512_add_timestamps_to_stations_fuels_table', 5);

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
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `routetype_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `name`, `length`, `deleted_at`, `created_at`, `updated_at`, `routetype_id`) VALUES
(1, 'Sofia-Vratza', 120.00, NULL, '2017-10-31 17:36:32', '2017-10-31 17:36:32', 4),
(2, 'testr', 100.00, '2017-10-31 17:46:12', '2017-10-31 17:37:39', '2017-10-31 17:46:12', 1),
(3, 'test11', 120.00, NULL, '2017-10-31 17:46:51', '2017-10-31 17:46:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `routetypes`
--

CREATE TABLE `routetypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `routetype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxspeed` double(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routetypes`
--

INSERT INTO `routetypes` (`id`, `routetype`, `maxspeed`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rural', 50.00, NULL, '2017-10-31 15:10:05', '2017-10-31 15:10:05'),
(2, 'highway', 130.00, NULL, '2017-10-31 15:15:25', '2017-10-31 15:15:25'),
(3, 'mountainous', 40.00, NULL, '2017-10-31 15:16:46', '2017-10-31 15:16:46'),
(4, 'inter urban', 90.00, NULL, '2017-10-31 15:18:59', '2017-10-31 15:18:59'),
(5, 'test1000', 1000.00, '2017-10-31 15:42:55', '2017-10-31 15:19:39', '2017-10-31 15:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stations_fuels`
--

CREATE TABLE `stations_fuels` (
  `station_id` int(10) UNSIGNED NOT NULL,
  `fuel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role_id` int(10) UNSIGNED NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `user_role_id`) VALUES
(1, 'test1', 'test1@test1.test1', '$2y$10$N1u7dco8YOcD2YBVxN2svu3p6.InnZtVrngxLXwmT/gZXoswVhwJ2', NULL, 'ilTPEqUx1ecgP8kgDyvSCuCIa0wtLxRrE6VNPBPiFQBYeqPXB18RgE1hcfWE', '2017-10-31 06:25:05', '2017-10-31 06:25:05', 2),
(2, 'test2', 'test2@test2.test2', '$2y$10$rULK3bxJ0qTWI3cvmqcOF.m5HPmo32UzoMr9kL36.a2Pl00rODyX.', '2017-10-31 10:21:18', NULL, '2017-10-31 09:56:06', '2017-10-31 10:21:18', 1),
(3, 'admin', 'admin@admin.admin', '$2y$10$MWSm5ZjNNKMT4HvhntsikedZzyqT4eIUmKtc5/xuA5a2HVSr9X0Ay', NULL, 'NjMrzq8NHPYXFITzjOmxVKKyCxqxpeioldP5sHz2Kb8C6jHTvyJubKQ4NoAa', '2017-10-31 09:59:19', '2017-10-31 09:59:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL),
(2, 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities_routes`
--
ALTER TABLE `cities_routes`
  ADD KEY `cities_routes_city_id_foreign` (`city_id_from`),
  ADD KEY `cities_routes_route_id_foreign` (`route_id`),
  ADD KEY `cities_routes_city_id_to_foreign` (`city_id_to`);

--
-- Indexes for table `fuels`
--
ALTER TABLE `fuels`
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
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_routetype_id_foreign` (`routetype_id`);

--
-- Indexes for table `routetypes`
--
ALTER TABLE `routetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stations_route_id_foreign` (`route_id`);

--
-- Indexes for table `stations_fuels`
--
ALTER TABLE `stations_fuels`
  ADD KEY `stations_fuels_station_id_foreign` (`station_id`),
  ADD KEY `stations_fuels_fuel_id_foreign` (`fuel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_role_id_foreign` (`user_role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fuels`
--
ALTER TABLE `fuels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routetypes`
--
ALTER TABLE `routetypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities_routes`
--
ALTER TABLE `cities_routes`
  ADD CONSTRAINT `cities_routes_city_id_foreign` FOREIGN KEY (`city_id_from`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `cities_routes_city_id_to_foreign` FOREIGN KEY (`city_id_to`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `cities_routes_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`);

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_routetype_id_foreign` FOREIGN KEY (`routetype_id`) REFERENCES `routetypes` (`id`);

--
-- Constraints for table `stations`
--
ALTER TABLE `stations`
  ADD CONSTRAINT `stations_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`);

--
-- Constraints for table `stations_fuels`
--
ALTER TABLE `stations_fuels`
  ADD CONSTRAINT `stations_fuels_fuel_id_foreign` FOREIGN KEY (`fuel_id`) REFERENCES `fuels` (`id`),
  ADD CONSTRAINT `stations_fuels_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
