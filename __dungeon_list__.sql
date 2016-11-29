-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 04:28
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
