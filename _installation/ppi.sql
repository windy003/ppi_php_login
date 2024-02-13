-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2024-02-13 08:37:23
-- 服务器版本： 8.0.36-0ubuntu0.22.04.1
-- PHP 版本： 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ppi`
--

-- --------------------------------------------------------

--
-- 表的结构 `ppiTable`
--

CREATE TABLE `ppiTable` (
  `id` int NOT NULL,
  `widthPixels` int NOT NULL,
  `heightPixels` int NOT NULL,
  `sizeInches` int NOT NULL,
  `ppi` int NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `ppiTable`
--

INSERT INTO `ppiTable` (`id`, `widthPixels`, `heightPixels`, `sizeInches`, `ppi`, `remark`) VALUES
(5, 1920, 1080, 23, 96, '小米'),
(6, 1920, 1080, 23, 96, '小米'),
(8, 1920, 1080, 23, 96, '12'),
(9, 1920, 1080, 23, 96, '12s');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'windy', '928920471@qq.com', '$2y$10$057MIn0SLEzNtnpfx6adIe3edhetwZG4LlRPIAOjOqTt8dyj94Nz.', '2024-02-10 18:48:01'),
(2, 'windy', '928920471@qq.com', '$2y$10$ABHCDHbL9EgHA3bUS1p.3uBuXFXY0HvVakQR4Va83DqSny2C1Mt2.', '2024-02-10 18:51:09');

--
-- 转储表的索引
--

--
-- 表的索引 `ppiTable`
--
ALTER TABLE `ppiTable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ppiTable`
--
ALTER TABLE `ppiTable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
