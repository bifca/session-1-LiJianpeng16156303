-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-02-29 11:14:14
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `albumdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `album`
--

CREATE TABLE `album` (
  `albumid` int(100) NOT NULL,
  `albumname` varchar(100) NOT NULL,
  `time` date NOT NULL,
  `introduce` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `album`
--

INSERT INTO `album` (`albumid`, `albumname`, `time`, `introduce`, `photo`) VALUES
(1, 'Let me stay by your side', '2016-11-08', 'Produced by Wong Kar Wai, directed by Zhang Jiajia\'s new year\'s romantic comedy \"the ferryman\" officially released the film version of love theme song \"let me stay with you\".', 'images/1.jpg'),
(2, 'I Do', '2016-09-26', 'A Do I I would like to actually seem simple, but it is the world\'s most able to bear the infinite invisible force. It is also marked imprint of the faithful love witness.', 'images/2.jpg'),
(3, 'Four seasons', '2016-09-29', 'If life is like a four seasons, we do not know how many changes, but no matter how much fortune? Any experience, will be changed in the quarter.', 'images/3.jpg'),
(4, 'Meet in this world', '2016-06-16', 'Each fish will meet; everyone will reunite \"sung in the film to construct the world view, the sea is the ultimate goal of every person, a big fish through the clouds fly away, the journey of life, endless reciprocating.', 'images/4.jpg'),
(5, 'Sleep Alone', '2015-11-10', 'Eason with its highly recognizable warm voice with melodious beautiful lyrics, who sing a man experiences in the song \"company is the most long love\" lyrics are every watch heart.', 'images/5.jpg'),
(6, 'Dinosaur evolution theory', '2015-09-10', 'Silently in the world, the development of the sky, is weak and passive, but also each has its role, but some varieties, I would not even know the slightest.', 'images/6.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
