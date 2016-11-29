-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 04:29
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
(1, 'aaa', 12345, 11885, 12435, 0, 1, 1),
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
