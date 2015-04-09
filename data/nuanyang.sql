-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-02 15:08:50
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nuanyang`
--
CREATE DATABASE IF NOT EXISTS `nuanyang` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nuanyang`;

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

DROP TABLE IF EXISTS `cate`;
CREATE TABLE IF NOT EXISTS `cate` (
  `cId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cName` varchar(20) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`cId`, `cName`) VALUES
(1, '农业'),
(2, '工业'),
(3, 'IT');

-- --------------------------------------------------------

--
-- 表的结构 `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `itemName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `itemDeadline` date NOT NULL,
  `itemMoney` decimal(10,2) unsigned NOT NULL,
  `itemDesc` text CHARACTER SET utf8 NOT NULL,
  `itemPho` varchar(50) CHARACTER SET utf8 NOT NULL,
  `itemAlready` decimal(10,2) unsigned DEFAULT NULL,
  `itemLikeNo` int(10) unsigned DEFAULT NULL,
  `itemComNo` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `itemName` (`itemName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `item`
--

INSERT INTO `item` (`id`, `itemName`, `cName`, `itemDeadline`, `itemMoney`, `itemDesc`, `itemPho`, `itemAlready`, `itemLikeNo`, `itemComNo`) VALUES
(4, 'ads', 'å†œä¸š', '2015-03-04', '1222.00', 'å•Šæ”¶è´¹çš„æ‰“æ³•æ”¶è´¹çš„æ’’æ³•', 'a048ab2563c264b75d5c461eccf97202.jpg', '1000.00', 100, 201),
(5, 'æˆ‘è¦ä¸Šæ˜¥æ™š', 'å†œä¸š', '2015-04-09', '5000.00', 'æˆ‘è¦ä¸Šæ˜¥æ™šï¼Œä½ çœ‹è¡Œä¸è¡Œ<img src="/nuanyang/plugins/kindeditor/attached/image/20150402/20150402141238_53019.jpg" alt="" />', '5f2546ec1fab2ac9465359f8dedcaf5c.jpg', NULL, NULL, NULL),
(6, 'lalala', 'å†œä¸š', '2015-04-07', '40000.00', 'å•Šæ²™å‘æ²™å‘æ²™å‘æ²™å‘å‘ç”Ÿå‘ç”Ÿæ³•å‘é¡ºä¸°', '9a0f3e0ab26420613f097ec2ddeb6ebb.jpg', NULL, NULL, NULL),
(7, 'é˜¿æ–¹ç´¢', 'å†œä¸š', '2015-04-30', '111111.00', 'å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦å•¦', '58338d1621de890dcaad283a87c6503e.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` char(20) CHARACTER SET utf8 NOT NULL,
  `email` int(11) NOT NULL,
  `face` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `face`) VALUES
(1, 'liming', 'liming', 0, ''),
(2, 'li', 'li', 0, ''),
(3, 'ma', 'ma', 0, 'b93ea47e2a7fbd4ba4fd06a09414e431.jpg'),
(4, 'matj', '1', 1, '2247297ee998d2e047edc4de0740893c.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
