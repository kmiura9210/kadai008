-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 6 月 30 日 04:38
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ej_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `article_table`
--

CREATE TABLE `article_table` (
  `id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `content` mediumtext NOT NULL,
  `counter` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `article_table`
--

INSERT INTO `article_table` (`id`, `author_id`, `title`, `content`, `counter`, `date`, `status`) VALUES
(1, NULL, 'aaa', 'aaa', NULL, '2015-06-15 00:00:00', 1),
(2, NULL, 'aaa', 'aaa', NULL, '2023-06-28 00:40:32', 1),
(3, NULL, 'aaa', 'aaaaa', NULL, '2023-06-28 00:41:19', 1),
(4, NULL, 'テスト', 'テスト', NULL, '2023-06-28 00:44:10', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `article_table`
--
ALTER TABLE `article_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `article_table`
--
ALTER TABLE `article_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
