-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-04-22 17:08:09
-- 伺服器版本: 10.1.26-MariaDB
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `courage`
--

-- --------------------------------------------------------

--
-- 資料表結構 `courage_member`
--

CREATE TABLE `courage_member` (
  `cm_id` int(11) NOT NULL,
  `cm_name` varchar(255) NOT NULL,
  `cm_account` varchar(255) NOT NULL,
  `cm_password` varchar(255) NOT NULL,
  `cm_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `courage_member`
--

INSERT INTO `courage_member` (`cm_id`, `cm_name`, `cm_account`, `cm_password`, `cm_mail`) VALUES
(1, 'yge', '1234r', '123123', 'qr@uhg.w');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `courage_member`
--
ALTER TABLE `courage_member`
  ADD PRIMARY KEY (`cm_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `courage_member`
--
ALTER TABLE `courage_member`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
