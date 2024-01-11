-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-01-04 11:08:49
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `game_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ff7_table`
--

CREATE TABLE `ff7_table` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `strong` int(64) NOT NULL,
  `defence` int(64) NOT NULL,
  `agility` int(64) NOT NULL,
  `life` int(64) NOT NULL,
  `magic` int(64) NOT NULL,
  `wepon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ff7_table`
--

INSERT INTO `ff7_table` (`id`, `name`, `strong`, `defence`, `agility`, `life`, `magic`, `wepon`) VALUES
(1, 'クラウド', 4, 4, 5, 3, 2, 'sword'),
(2, 'エアリス', 1, 2, 2, 2, 5, 'wand'),
(3, 'ティファ', 5, 3, 5, 3, 1, 'glove'),
(4, 'バレット', 3, 5, 2, 5, 2, 'gun'),
(5, 'ユフィ', 2, 2, 5, 3, 4, 'shuriken'),
(6, 'セフィロス', 4, 3, 4, 3, 4, 'Japan_Sword');

-- --------------------------------------------------------

--
-- テーブルの構造 `making_table`
--

CREATE TABLE `making_table` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `strong` int(64) NOT NULL,
  `defence` int(64) NOT NULL,
  `agility` int(64) NOT NULL,
  `life` int(64) NOT NULL,
  `magic` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `making_table`
--

INSERT INTO `making_table` (`id`, `name`, `strong`, `defence`, `agility`, `life`, `magic`) VALUES
(16, 'ガッツ', 2, 2, 2, 2, 2);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ff7_table`
--
ALTER TABLE `ff7_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `making_table`
--
ALTER TABLE `making_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `ff7_table`
--
ALTER TABLE `ff7_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `making_table`
--
ALTER TABLE `making_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
