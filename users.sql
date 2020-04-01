-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 مارس 2020 الساعة 05:01
-- إصدار الخادم: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Terhar`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `gender`, `age`, `trn_date`) VALUES
(1, 'dina', 'dina@yahoo.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:36:54'),
(2, 'dina2', 'dina@ya.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:39:31'),
(3, 'dina4', 'dina@ya.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:55:56'),
(4, 'dina4', 'dina@ya.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:56:59'),
(5, 'dina5', 'dina3@y.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:57:19'),
(6, 'dinashaldoum90@gmail.com', 'dina@ya.co', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '2020-03-19 02:58:18'),
(7, 'dinashaldoum90@gmail.com', 'dina@ya.co', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '2020-03-19 02:58:55'),
(8, 'dina6', 'di@y.com', 'e274648aed611371cf5c30a30bbe1d65', '', '', '', '2020-03-19 02:59:57'),
(9, 'dinaShaldom', 'din@y.com', 'e274648aed611371cf5c30a30bbe1d65', '01068058978', '', '', '2020-03-19 04:31:53'),
(10, 'dinsety', 'dinsety@ya.com', 'f88639f78d5d6da6dfb8498fd5e763b1', '0102589785', 'Male', '', '2020-03-19 04:32:39'),
(11, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '3434324', 'Male', '', '2020-03-19 04:56:54'),
(12, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '3434324', 'Male', '', '2020-03-19 04:57:47'),
(13, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '3434324', 'Male', '', '2020-03-19 04:58:14'),
(14, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '3434324', 'Male', '', '2020-03-19 04:58:14'),
(15, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '3434324', 'Male', '', '2020-03-19 04:58:26'),
(16, 'dinashaldoum90@gmail.com', 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', '01068058978', 'Male', '', '2020-03-19 04:59:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
