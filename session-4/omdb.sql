-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-03-21 10:51:32
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
-- 数据库： `omdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `filmName` varchar(100) NOT NULL,
  `imdbID` varchar(9) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `films`
--

INSERT INTO `films` (`id`, `filmName`, `imdbID`, `poster`, `trailer`) VALUES
(1, 'Iron Man', 'tt0371746', 'images/1.jpg', 'trailer/1.mp4'),
(2, 'Iron Man 2', 'tt1228705', 'images/2.jpg', 'trailer/2.mp4'),
(3, 'Iron Man 3', 'tt1300854', 'images/3.jpg', 'trailer/3.mp4'),
(4, 'Thor', 'tt0800369', 'images/4.jpg', 'trailer/4.mp4'),
(5, 'Thor: The Dark World', 'tt1981115', 'images/5.jpg', 'trailer/5.mp4'),
(6, 'Thor: Ragnarok', 'tt3501632', 'images/6.jpg', 'trailer/6.mp4'),
(7, 'Captain America: The First Avenger', 'tt0458339', 'images/7.jpg', 'trailer/7.mp4'),
(8, 'Captain America: The Winter Soldier', 'tt1843866', 'images/8.jpg', 'trailer/8.mp4'),
(9, 'Captain America: Civil War', 'tt3498820', 'images/9.jpg', 'trailer/9.mp4');

--
-- 转储表的索引
--

--
-- 表的索引 `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
