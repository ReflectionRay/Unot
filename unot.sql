-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 06 月 09 日 10:23
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `unot`
--

-- --------------------------------------------------------

--
-- 表的结构 `un_article`
--

CREATE TABLE IF NOT EXISTS `un_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art_title` varchar(30) NOT NULL,
  `art_people` varchar(30) NOT NULL,
  `art_cate` int(11) NOT NULL,
  `art_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `un_article`
--

INSERT INTO `un_article` (`id`, `art_title`, `art_people`, `art_cate`, `art_content`) VALUES
(1, '测试文章', '测试文章', 3, '&lt;p&gt;测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;是v1&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `un_cate`
--

CREATE TABLE IF NOT EXISTS `un_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` varchar(200) NOT NULL,
  `open` enum('0','1') NOT NULL COMMENT '0为开放1为私密',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `un_cate`
--

INSERT INTO `un_cate` (`id`, `catename`, `open`) VALUES
(3, '原创', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
