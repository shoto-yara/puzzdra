-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 07:05
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
  `dungeon_id` int(11) NOT NULL AUTO_INCREMENT,
  `dungeon_list_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `battle` int(11) NOT NULL,
  PRIMARY KEY (`dungeon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- テーブルのデータをダンプしています `dungeon_data`
--

INSERT INTO `dungeon_data` (`dungeon_id`, `dungeon_list_id`, `category`, `name`, `stamina`, `battle`) VALUES
(1, 1, 1, 'n1-1', 2, 2),
(2, 1, 1, 'n1-2', 2, 2),
(3, 2, 1, 'n2-1', 3, 3),
(4, 2, 1, 'n2-2', 3, 3),
(5, 2, 1, 'n2-3', 3, 3),
(6, 1, 2, 't1-1', 5, 4),
(7, 1, 2, 't1-2', 5, 4),
(8, 1, 2, 't1-3', 5, 4),
(9, 1, 2, 't1-4', 5, 4),
(10, 2, 2, 't2-1', 6, 5),
(11, 2, 2, 't2-2', 6, 5),
(12, 2, 2, 't2-3', 6, 5),
(13, 2, 2, 't2-4', 6, 5),
(14, 2, 2, 't2-5', 6, 5),
(15, 3, 1, 'n3-1', 6, 4),
(16, 3, 1, 'n3-2', 6, 4),
(17, 3, 1, 'n3-3', 6, 4),
(18, 3, 1, 'n3-4', 6, 4),
(19, 1, 3, 's1-1', 4, 4),
(20, 1, 3, 's1-2', 4, 4),
(22, 1, 3, 's1-3', 4, 4),
(23, 1, 3, 's1-4', 4, 4),
(24, 2, 3, 's2-1', 4, 4),
(25, 2, 3, 's2-2', 4, 4),
(26, 2, 3, 's2-3', 4, 4),
(27, 2, 3, 's2-4', 4, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `dungeon_enemy`
--

CREATE TABLE IF NOT EXISTS `dungeon_enemy` (
  `dungeon_id` int(11) NOT NULL,
  `dungeon_category` int(11) NOT NULL,
  `monster_id` int(11) NOT NULL,
  ` hierarchy` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `dungeon_enemy`
--

INSERT INTO `dungeon_enemy` (`dungeon_id`, `dungeon_category`, `monster_id`, ` hierarchy`, `level`) VALUES
(1, 1, 1, 1, 1),
(1, 1, 1, 1, 1),
(1, 1, 1, 1, 1),
(1, 1, 1, 2, 1),
(1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `dungeon_list`
--

CREATE TABLE IF NOT EXISTS `dungeon_list` (
  `dungeon_list_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `dungeon_list`
--

INSERT INTO `dungeon_list` (`dungeon_list_id`, `category`, `name`) VALUES
(1, 1, 'n-a'),
(2, 1, 'n-b'),
(3, 1, 'n-c'),
(4, 1, 'n-d'),
(5, 1, 'n-e'),
(6, 1, 'n-f'),
(7, 1, 'n-g'),
(1, 2, 't-a'),
(2, 2, 't-b'),
(3, 2, 't-c'),
(4, 2, 't-d'),
(5, 2, 't-e'),
(6, 2, 't-f'),
(7, 2, 't-g'),
(1, 3, 's-a'),
(2, 3, 's-b'),
(3, 3, 's-c'),
(4, 3, 's-d'),
(5, 3, 's-e'),
(6, 3, 's-f');

-- --------------------------------------------------------

--
-- テーブルの構造 `friend_list`
--

CREATE TABLE IF NOT EXISTS `friend_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- テーブルのデータをダンプしています `friend_list`
--

INSERT INTO `friend_list` (`id`, `user_id`, `friend_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 1, 8),
(8, 2, 5),
(9, 2, 5),
(10, 1, 9),
(11, 2, 3),
(12, 2, 6);

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
-- テーブルの構造 `monsters`
--

CREATE TABLE IF NOT EXISTS `monsters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `money` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのデータをダンプしています `monsters`
--

INSERT INTO `monsters` (`id`, `name`, `Type`, `money`, `point`) VALUES
(1, 'ティラ', '1', 30, 20),
(2, 'プレシィ', '2', 30, 10),
(3, 'ブラッキィ', '3', 30, 30),
(4, 'プテーラ', '4', 30, 40),
(5, 'スピノン', '5', 30, 50);

-- --------------------------------------------------------

--
-- テーブルの構造 `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `user_monster_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`,`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `team`
--

INSERT INTO `team` (`team_id`, `id`, `user_monster_id`, `user_id`) VALUES
(1, 1, 22, 1),
(1, 2, 26, 1),
(1, 3, 30, 1),
(1, 4, 31, 1),
(1, 5, 1, 1);

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
  `monsters_point` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `stone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` (`id`, `name`, `exp`, `stamina`, `coin`, `monsters_point`, `rank`, `stone`) VALUES
(1, 'aaa', 12345, 11885, 12465, 20, 1, 1),
(2, 'きょうへい', 35, 32, 1000, 0, 11, 0),
(3, 'a', 12, 345, 67, 0, 90, 9),
(4, 'a', 12, 345, 67, 0, 90, 9),
(5, 'b', 12, 345, 67, 0, 90, 9),
(6, 'c', 12, 345, 67, 0, 90, 9),
(7, 'd', 12, 345, 67, 0, 90, 9),
(8, 'e', 12, 345, 67, 0, 90, 9),
(9, 'f', 12, 345, 67, 0, 90, 9),
(10, 'g', 12, 345, 67, 0, 90, 9),
(11, 'h', 12, 345, 67, 0, 90, 9),
(12, 'i', 12, 345, 67, 0, 90, 9);

-- --------------------------------------------------------

--
-- テーブルの構造 `user_monsters`
--

CREATE TABLE IF NOT EXISTS `user_monsters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `monsters_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- テーブルのデータをダンプしています `user_monsters`
--

INSERT INTO `user_monsters` (`id`, `user_id`, `monsters_id`, `level`) VALUES
(5, 1, 4, 2),
(6, 1, 5, 2),
(7, 1, 5, 3),
(8, 1, 2, 5),
(9, 1, 5, 2),
(10, 5, 3, 0),
(11, 1, 3, 4),
(12, 1, 5, 2),
(13, 1, 3, 4),
(14, 1, 4, 3),
(15, 1, 2, 5);
