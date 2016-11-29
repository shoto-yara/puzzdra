-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2016 年 11 月 29 日 04:39
-- サーバのバージョン: 5.5.8
-- PHP のバージョン: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `puzzdra_`
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
(2, 'プレシィ', '2', 50, 10),
(3, 'ブラッキィ', '3', 40, 30),
(4, 'プテーラ', '4', 20, 40),
(5, 'スピノン', '5', 10, 50);
