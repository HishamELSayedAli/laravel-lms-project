-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 أبريل 2024 الساعة 19:37
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` varchar(255) DEFAULT NULL,
  `excert` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `lectures` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `duretion` int(11) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `requirments` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`id`, `titel`, `excert`, `description`, `level`, `lectures`, `student`, `duretion`, `language`, `requirments`, `price`, `sale_price`, `feature_image`, `background_image`, `state`, `author`, `created_at`, `updated_at`) VALUES
(2, 'Data Structures', NULL, 'Learn the basics of programming and data structures.', 'option1', 10, 50, 1, 'english', '<ul>\r\n<li>\r\n<p>Data cleaning and visualization</p>\r\n</li>\r\n<li>\r\n<p><a href=\"https://www.coursera.org/articles/types-of-machine-learning\" target=\"_self\" rel=\"\">Machine learning</a>&nbsp;techniques</p>\r\n</li>\r\n<li>\r\n<p><a href=\"https://www.coursera.org/articles/statistical-modeling\" target=\"_self\" rel=\"\">Statistical modeling</a></p>\r\n</li>\r\n<li>\r\n<p><a href=\"https://www.coursera.org/articles/data-warehouse\" target=\"_self\" rel=\"\">Data warehousing</a>&nbsp;and querying</p>\r\n</li>\r\n<li>\r\n<p>Multivariate statistics, such as regression principal components analysis and clustering</p>\r\n</li>\r\n<li>\r\n<p><a href=\"https://www.coursera.org/articles/big-data-technologies?trk_ref=relatedArticlesCard\" target=\"_self\" rel=\"\">Big data management</a></p>\r\n</li>\r\n<li>\r\n<p><a href=\"https://www.coursera.org/learn/what-is-datascience\" target=\"_self\" rel=\"\">Database design</a></p>\r\n</li>\r\n</ul>', 2500, 10, 'courses\\February2024\\LNyLShk2YC2g8VrW2t2n.png', 'courses\\February2024\\QUyS0pkq56rWg5BHAXKP.jpg', 1, 1, '2024-02-01 18:39:00', '2024-02-22 16:29:50'),
(3, 'laravel', 'learn fronend and backend', 'Web application framework\r\n', 'option3', 10, 55, 2, 'english', '<h3>PHP</h3>\r\n<h3>PHPUnit&nbsp;</h3>\r\n<h3>Composer&nbsp;</h3>\r\n<h3>Web server configuration&nbsp;</h3>\r\n<h3>Additional PHP Extensions&nbsp;</h3>\r\n<p>&nbsp;</p>', 200, 250, 'courses\\February2024\\jD4No1qFto9oFKhudcXe.jpg', 'courses\\February2024\\cAacr88DjiFyLxWBYSq5.jpg', 1, 1, '2024-02-22 22:07:00', '2024-02-22 22:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
