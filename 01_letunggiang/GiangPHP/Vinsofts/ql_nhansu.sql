-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 09:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `letunggiang`
--

-- --------------------------------------------------------

--
-- Table structure for table `ql_nhansu`
--

CREATE TABLE IF NOT EXISTS `ql_nhansu` (
`id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=573 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ql_nhansu`
--

INSERT INTO `ql_nhansu` (`id`, `name`, `address`, `phonenumber`) VALUES
(2, 'Lê Tùng Giang', 'Quảng Ninh', '0979835888'),
(4, 'Nguyễn Việt Cảnh', 'Thanh Hóa', '0971780582'),
(5, 'Nguyễn Hữu Đại', 'Hải Dương', '01686273839'),
(6, 'Phan Công Hướng', 'Nam Định', '0164323823'),
(22, 'ryt', 'rty', '4554'),
(54, '54', '54', ''),
(571, '555', '666', '977'),
(572, '55', '66', '979835888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ql_nhansu`
--
ALTER TABLE `ql_nhansu`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ql_nhansu`
--
ALTER TABLE `ql_nhansu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=573;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
