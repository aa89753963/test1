-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 24 日 09:08
-- 服务器版本: 5.5.34-0ubuntu0.13.04.1
-- PHP 版本: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `title`, `summary`, `time`) VALUES
(5, '你好', '你好，这是测试', 1406095094),
(6, '你好', '你好，这是测试', 1406095181),
(7, '你好', '你好，这是测试', 1406095256),
(8, '萨达撒', '萨达', 1406095264),
(9, '', '', 1406096127),
(10, '你好', '这是测试', 1406096377),
(11, '你好', '你好这是测试\r\n', 1406163176),
(12, '阿三', '---------------------------------------\r\n\r\n留言标题:你好\r\n\r\n留言内容:这是测试\r\n\r\n留言时间:2014-07-23\r\n-------------------------------------------------------------------------\r\n\r\n留言标题:你好\r\n\r\n留言内容:这是测试\r\n\r\n留言时间:2014-07-23\r\n-----------------------------------------------------', 1406163405),
(13, '打打打', '的点点滴滴的点点滴滴单打独斗', 1406163955);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
