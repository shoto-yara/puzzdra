-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 04:11
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

-- --------------------------------------------------------

--
-- テーブルの構造 `dungeon_enemy`
--

CREATE TABLE IF NOT EXISTS `dungeon_enemy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dungeon_id` int(11) NOT NULL,
  `dungeon_category` int(11) NOT NULL,
  `monster_id` int(11) NOT NULL,
  ` hierarchy` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのデータをダンプしています `dungeon_enemy`
--

INSERT INTO `dungeon_enemy` (`id`, `dungeon_id`, `dungeon_category`, `monster_id`, ` hierarchy`, `level`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 1),
(3, 1, 1, 1, 1, 1),
(4, 1, 1, 1, 2, 1),
(5, 1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dungeon_list`
--

CREATE TABLE IF NOT EXISTS `dungeon_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dungeon_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- テーブルのデータをダンプしています `dungeon_list`
--

INSERT INTO `dungeon_list` (`id`, `dungeon_id`, `category`, `name`) VALUES
(1, 1, 1, 'n-a'),
(2, 2, 1, 'n-b'),
(3, 3, 1, 'n-c'),
(4, 4, 1, 'n-d'),
(5, 5, 1, 'n-e'),
(6, 6, 1, 'n-f'),
(7, 7, 1, 'n-g'),
(8, 1, 2, 't-a'),
(9, 2, 2, 't-b'),
(10, 3, 2, 't-c'),
(11, 4, 2, 't-d'),
(12, 5, 2, 't-e'),
(13, 6, 2, 't-f'),
(14, 7, 2, 't-g'),
(15, 1, 3, 's-a'),
(16, 2, 3, 's-b'),
(17, 3, 3, 's-c'),
(18, 4, 3, 's-d'),
(19, 5, 3, 's-e'),
(20, 6, 3, 's-f');

-- --------------------------------------------------------

--
-- テーブルの構造 `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `mail`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `exp` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `coin` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `stone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` (`id`, `name`, `exp`, `stamina`, `coin`, `rank`, `stone`) VALUES
(1, 'aaa', 12345, 11885, 12435, 1, 1),
(2, 'きょうへい', 35, 32, 1000, 11, 0),
(3, 'a', 12, 345, 67, 90, 9),
(4, 'a', 12, 345, 67, 90, 9),
(5, 'b', 12, 345, 67, 90, 9),
(6, 'c', 12, 345, 67, 90, 9),
(7, 'd', 12, 345, 67, 90, 9),
(8, 'e', 12, 345, 67, 90, 9),
(9, 'f', 12, 345, 67, 90, 9),
(10, 'g', 12, 345, 67, 90, 9),
(11, 'h', 12, 345, 67, 90, 9),
(12, 'i', 12, 345, 67, 90, 9);
