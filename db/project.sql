-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_10_19_074741_create_sessions_table', 1),
(9, '2020_10_22_085841_create_uploaded_images_table', 2),
(14, '2020_10_28_031437_create_prodcuts_table', 3),
(16, '2020_11_05_191810_create_requests_table', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fufufu@yopmail.com', '$2y$10$0HVWcwq7k/lf6WGfRz/ceO0PEsTp.MY0Cx0RGRtw5oWN.79LiPoGO', '2020-11-11 06:05:25');

-- --------------------------------------------------------

--
-- 資料表結構 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `prodcuts`
--

CREATE TABLE `prodcuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picktime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickzip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `prodcuts`
--

INSERT INTO `prodcuts` (`id`, `pname`, `picktime`, `pickzip`, `pickplace`, `quantity`, `description`, `filename`, `userid`, `created_at`, `updated_at`) VALUES
(1, '精緻便當', '2020-10-29', '813', '那小店', '10', '當季食蔬多做了些分大家', 'F9yXj7jdYI7dNKBICNFsaYLwEJpYwLjuLpHkKXCB.png', '01', NULL, NULL),
(6, 'Cakes', '2020-11-1 10:15', '804', 'place', 'on', 'something', 'TbCXrWGn33MgbeLEH6cZxrol0vstzvSolbQ3FbKI.jpeg', '1', NULL, NULL),
(7, 'banana', '2020-11-1 18:0', '805', 'place2', 'on', 'help', 'F9yXj7jdYI7dNKBICNFsaYLwEJpYwLjuLpHkKXCB.png', '2', NULL, NULL),
(8, 'apple', '2020-11-2 12:0', '806', 'place3', 'on', 'too much', 'TbCXrWGn33MgbeLEH6cZxrol0vstzvSolbQ3FbKI.jpeg', '1', NULL, NULL),
(10, 'applepie', '2020-11-1 0:0', '806', 'place2', 'on', 'share', 'F9yXj7jdYI7dNKBICNFsaYLwEJpYwLjuLpHkKXCB.png', '2', NULL, NULL),
(14, 'onokomiyaki', '2020-11-1 0:0', '807', 'place5', 'on', 'too much', 'Yf4YG2ZsgMX4BMpb3yWavpCTPThllyGkBAwrN1pr.jpeg', '2', NULL, NULL),
(16, 'tacos', '2020-11-1 15:0', '804', 'place5', 'on', 'tacosss', 'F9yXj7jdYI7dNKBICNFsaYLwEJpYwLjuLpHkKXCB.png', '2', NULL, NULL),
(17, 'onokomiyaki', '2020-11-1 0:0', '807', 'place', 'on', 'bandun', 'Yf4YG2ZsgMX4BMpb3yWavpCTPThllyGkBAwrN1pr.jpeg', '2', NULL, NULL),
(18, 'onokomiyaki', '2020-11-1 0:0', '807', 'place', 'on', 'bandun', 'KzJCc0SCiCcSR6U7oMpx3jWfJ2lYHrdhU27RnJKL.jpeg', '2', NULL, NULL),
(19, 'beef', '2020-12-1 12:0', '603', 'place', 'on', 'too much', 'SCvDjqiCM6gr58Zg3rvONhz4lGOODbvhhXZKFevB.jpeg', '1', NULL, NULL),
(20, 'pork', '2020-1-1 0:0', '806', 'place5', 'on', 'share', 'grhc4AZVJXQ3AiWILsypMBtoYnzXkt7IK80FaaXj.png', '1', NULL, NULL),
(21, 'm&m', '2020-1-1 17:16', '603', 'thatplace', 'on', 'share', 'hwcwNGvPAEpz22PYDcP969swb2eCIQmWVqrXNaru.png', '1', NULL, NULL),
(23, 'toast', '2020-12-1 17:10', '608', 'place21', 'on', 'taste good', 'IRn5lV2rtQ0BvxHpo5OHLgdZ2zmQDtbTgnJxreZM.png', '3', NULL, NULL),
(24, 'toast', '2020-12-1 17:10', '608', 'place21', 'on', 'taste good', 'zVRFXxRAqAwgjoGOnoIMkAfpgRHpuuqhLA40sw13.png', '3', NULL, NULL),
(25, 'Cakes', '2020-1-1 0:0', '807', 'place2', 'on', 'too much', 'arB6oWXPv73CSYqeJaLI6Rf8LddkJRfAAVgTpA43.png', '3', NULL, NULL),
(26, 'Cakes', '2020-1-1 0:0', '807', 'place2', 'on', 'too much', 'WeS0FkOoC5boU2tTFE2QLXsHyNfMwi4gpSYuCOM8.png', '3', NULL, NULL),
(27, 'Cookies', '2020-1-1 0:0', '804', 's', 'on', 'a', 'fN53ahyCfZnGwc5J14WFf3TWy2LyaRasI7kNYqEG.png', '3', NULL, NULL),
(29, 'applepie', '2020-1-1 0:0', '804', 'thatplace', 'on', 'great!', 'JBnQxgFVjm7gsehCa7R20RvLdixadfX8M6gbM7B7.png', '3', NULL, NULL),
(30, 'katsudon', '2020-11-4 0:0', '803', 'place', 'on', 'great!', 'An0Pnw4aq8dbMjQRjCQ2vvewimqix3tzGSsVpsNY.png', '3', NULL, NULL),
(31, 'katsudon', '2020-11-4 0:0', '803', 'place', 'on', 'great!', '21hpwK9ikq58XI0cIkRM74ohJQahemKBBZYuCsPK.png', '3', NULL, NULL),
(41, 'curry', '2021-1-1 0:0', '801', 'thisplace', NULL, 'tasty', 'c74qHAY78qERtpLku7tePxDuQ7FQlywwmubiMPHX.png', '1', '2020-11-07 16:18:59', '2020-11-07 16:18:59'),
(42, 'pomelo', '2021-1-1 0:0', '801', 'thisplace', NULL, 'too much', 't45oooTLtukwz7P6YH0o6w4bIJDFEQHnkn0P1cTa.png', '1', '2020-11-07 16:21:08', '2020-11-07 16:21:08'),
(43, 'pizza', '2020-11-11 13:40', '807', 'thisplace', '12', 'great!', '4t4MaIwdun42BHZHk10Bwc5PP9NuSeyrsJzwuril.png', '2', '2020-11-10 03:14:07', '2020-11-10 03:14:07'),
(44, 'tomato', '2020-1-1 0:0', '811', 'placeA!', '5', 'too much!!!!', 'ksGYQ6foeYD2Sh7ytOFBFN2GTOfSktfwWCudxeId.png', '2', '2020-11-10 03:26:09', '2020-11-10 03:26:09'),
(45, 'curry', '2020-1-1 0:0', '812', 'a', 'uncountable', 'SHARE!', 'InzWGUuxltp0aNywGvFuIEjmceHQvIQ50Kc58rs7.png', '2', '2020-11-10 03:39:06', '2020-11-10 03:39:06'),
(46, '我的麻婆豆腐', '2020-11-1 0:0', '123', 'home', 'uncountable', '我媽的麻婆豆腐超好吃', 's4N6Jwj7PyPzIj77vZjl3J0pGVHxa7C1RpmVAuzn.png', '1', '2020-11-12 07:40:15', '2020-11-12 07:40:15');

-- --------------------------------------------------------

--
-- 資料表結構 `requests`
--

CREATE TABLE `requests` (
  `rid` bigint(20) UNSIGNED NOT NULL,
  `pid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rcreated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `requests`
--

INSERT INTO `requests` (`rid`, `pid`, `amount`, `uid`, `status`, `rcreated_at`, `updated_at`) VALUES
(1, '45', '1', '3', 'pass', '2020-11-10 16:45:52', '2020-11-10 16:45:52'),
(2, '41', '1', '2', 'w', '2020-11-11 02:12:04', '2020-11-11 02:12:04'),
(4, '42', '1', '2', 'w', '2020-11-11 03:39:38', '2020-11-11 03:39:38'),
(5, '17', '1', '1', 'w', '2020-11-11 03:40:45', '2020-11-11 03:40:45'),
(7, '26', '1', '1', 'w', '2020-11-11 03:48:07', '2020-11-11 03:48:07'),
(8, '44', '1', '1', 'w', '2020-11-11 09:13:24', '2020-11-11 09:13:24'),
(9, '45', '1', '1', 'w', '2020-11-12 02:42:04', '2020-11-12 02:42:04'),
(13, '43', '1', '3', 'w', '2020-11-12 07:09:41', '2020-11-12 07:09:41'),
(14, '41', '1', '3', 'w', '2020-11-12 07:12:55', '2020-11-12 07:12:55'),
(15, '14', '1', '1', 'w', '2020-11-12 07:41:28', '2020-11-12 07:41:28');

-- --------------------------------------------------------

--
-- 資料表結構 `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('g5ZUxzCRLJhYcdSYikoMVsx1R2JeSO6RRjOCjUIf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidkQxeDJ3WmIwMlB4aDkzSnBzdUxWVkU2blNPVUlyT09pQXBzeTZzMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zYXZlZm9vZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCROTUFYNHguUmNSWWJHYUpLblVJLlJPbjcyOTVXbXdqTXBoWVFzcnVyTVc5T2lHaEE1RHN4LiI7fQ==', 1605167467),
('owPrQmISMnnj0i51jAiaQegGQf6gm90Af7NT9pLc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.183 Safari/537.36', 'YTo1OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb3Jnb3QtcGFzc3dvcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiQ2I1OTlKcWhjcHhRTTBTRWFtVlE5OHo0YWYzMXprRnRYR0dYZW5oOCI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRJaVZWOE1iNmJYUHF3dFpzY2lnbDJlVzhuWHhmSy53U29Fa25pbWZlVGdWMGNzNDVFWFp2SyI7fQ==', 1605167364);

-- --------------------------------------------------------

--
-- 資料表結構 `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'amy\'s Team', 1, '2020-10-19 00:58:10', '2020-10-19 00:58:10'),
(2, 2, 'my\'s Team', 1, '2020-10-29 11:05:44', '2020-10-29 11:05:44'),
(3, 3, 'Yilin\'s Team', 1, '2020-11-03 23:09:05', '2020-11-03 23:09:05'),
(4, 4, 'fufu\'s Team', 1, '2020-11-11 06:04:08', '2020-11-11 06:04:08');

-- --------------------------------------------------------

--
-- 資料表結構 `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `uploaded_images`
--

CREATE TABLE `uploaded_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pid` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `uploaded_images`
--

INSERT INTO `uploaded_images` (`id`, `filename`, `pid`, `created_at`, `updated_at`) VALUES
(3, 'F9yXj7jdYI7dNKBICNFsaYLwEJpYwLjuLpHkKXCB.png', '1', NULL, NULL),
(4, 'TbCXrWGn33MgbeLEH6cZxrol0vstzvSolbQ3FbKI.jpeg', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'amy', 'akj_60403@yahoo.com.tw', NULL, '$2y$10$NMAX4x.RcRYbGaJKnUI.ROn7295WmwjMphYQsrurMW9OiGhA5Dsx.', NULL, NULL, 'SLYTJWnIiYAwu1mg42XsLrz5H3vYgpyrfWdc7NBxrglPxDlx92Zx1vSC4tC2', 1, NULL, '2020-10-19 00:58:10', '2020-11-11 23:50:12'),
(2, 'my', 'akj60403@yahoo.com.tw', NULL, '$2y$10$kxkG/HQyA6B5u24RdLSkrOGdihG0tJ5KgcgOHu1WkbeVSzDAv9Rde', NULL, NULL, NULL, 2, NULL, '2020-10-29 11:05:44', '2020-10-29 11:05:57'),
(3, 'Yilin', 'akj@gmail.com', NULL, '$2y$10$MoV8LbUipmQyE11UUd3eFOOiDrDJwsqvfki5meVHCBFotxnYHoKee', NULL, NULL, NULL, 3, NULL, '2020-11-03 23:09:05', '2020-11-04 19:28:48'),
(4, 'fufu', 'fufufu@yopmail.com', NULL, '$2y$10$q/a/U3.QSDW4vTdy.5/6b.qRn3ReypFW4YNuPAHmcmycYJ8T50Vki', NULL, NULL, NULL, NULL, NULL, '2020-11-11 06:04:08', '2020-11-11 06:04:08');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- 資料表索引 `prodcuts`
--
ALTER TABLE `prodcuts`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`);

--
-- 資料表索引 `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- 資料表索引 `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- 資料表索引 `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- 資料表索引 `uploaded_images`
--
ALTER TABLE `uploaded_images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `prodcuts`
--
ALTER TABLE `prodcuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `uploaded_images`
--
ALTER TABLE `uploaded_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
