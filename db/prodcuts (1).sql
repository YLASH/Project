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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(19, 'beef', '2020-12-1 12:0', '603', 'place', 'on', 'too much', 'SCvDjqiCM6gr58Zg3rvONhz4lGOODbvhhXZKFevB.jpeg', '1', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `prodcuts`
--
ALTER TABLE `prodcuts`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `prodcuts`
--
ALTER TABLE `prodcuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
