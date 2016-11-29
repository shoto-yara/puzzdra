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
