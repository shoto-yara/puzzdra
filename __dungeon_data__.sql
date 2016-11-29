-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 04:27
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `puzzdra`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `dungeon_data`
--

CREATE TABLE IF NOT EXISTS `dungeon_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dungeon_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `battle` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- テーブルのデータをダンプしています `dungeon_data`
--

INSERT INTO `dungeon_data` (`id`, `dungeon_id`, `category`, `name`, `stamina`, `battle`) VALUES
(1, 1, 1, 'n1-1', 2, 2),
(2, 1, 1, 'n1-2', 2, 2),
(3, 1, 1, 'n1-3', 2, 2),
(4, 1, 1, 'n1-4', 2, 2),
(5, 1, 1, 'n1-5', 2, 2),
(6, 2, 1, 'n2-1', 3, 3),
(7, 2, 1, 'n2-2', 3, 3),
(8, 2, 1, 'n2-3', 3, 3),
(9, 2, 1, 'n2-4', 3, 3),
(10, 2, 1, 'n2-5', 3, 3),
(11, 1, 2, 't1-1', 5, 5),
(12, 1, 2, 't1-2', 5, 5),
(13, 1, 2, 't1-3', 5, 5),
(14, 1, 2, 't1-4', 5, 5),
(15, 1, 2, 't1-5', 5, 5),
(17, 2, 2, 't2-1', 6, 6),
(18, 2, 2, 't2-2', 6, 6),
(19, 2, 2, 't2-3', 6, 6),
(20, 2, 2, 't2-4', 6, 6),
(21, 2, 2, 't2-5', 6, 6),
(22, 3, 1, 'n3-1', 6, 6),
(23, 3, 1, 'n3-2', 6, 6),
(24, 3, 1, 'n3-3', 6, 6),
(25, 3, 1, 'n3-4', 6, 6),
(26, 3, 1, 'n3-5', 6, 6),
(27, 1, 3, 's1-1', 4, 4),
(28, 1, 3, 's1-2', 4, 4),
(29, 1, 3, 's1-3', 4, 4),
(30, 1, 3, 's1-4', 4, 4),
(31, 1, 3, 's1-5', 4, 4),
(32, 2, 3, 's2-1', 4, 4),
(33, 2, 3, 's2-2', 4, 4),
(34, 2, 3, 's2-3', 4, 4),
(35, 2, 3, 's2-4', 4, 4),
(36, 2, 3, 's2-5', 4, 4);
