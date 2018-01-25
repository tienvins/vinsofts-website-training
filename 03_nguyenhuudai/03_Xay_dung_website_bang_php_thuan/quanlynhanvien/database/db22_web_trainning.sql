-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 09:08 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db22_web_trainning`
--

-- --------------------------------------------------------

--
-- Table structure for table `db22_nhanvien`
--

CREATE TABLE `db22_nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `QueQuan` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `GioiTinh` varchar(5) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` varchar(11) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaPB` int(11) DEFAULT NULL,
  `Hinh` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `db22_nhanvien`
--

INSERT INTO `db22_nhanvien` (`MaNV`, `TenNV`, `NgaySinh`, `QueQuan`, `GioiTinh`, `SDT`, `MaPB`, `Hinh`) VALUES
(2, 'Nguyễn Hữu Đại', '1994-01-22', 'Hải Dương', 'Nam', '01686273839', 1, 'images-1.jpg'),
(8, 'Nguyễn Viết Cảnh', '2018-01-04', 'Thanh Hóa', 'male', '', 1, 'img.jpg'),
(9, 'assssssss', '2018-01-04', '', 'femal', '', 1, 'picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `db22_phongban`
--

CREATE TABLE `db22_phongban` (
  `MaPB` int(11) NOT NULL,
  `TenPB` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `db22_phongban`
--

INSERT INTO `db22_phongban` (`MaPB`, `TenPB`) VALUES
(1, 'Web'),
(2, 'Mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db22_nhanvien`
--
ALTER TABLE `db22_nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaPB` (`MaPB`);

--
-- Indexes for table `db22_phongban`
--
ALTER TABLE `db22_phongban`
  ADD PRIMARY KEY (`MaPB`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db22_nhanvien`
--
ALTER TABLE `db22_nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `db22_phongban`
--
ALTER TABLE `db22_phongban`
  MODIFY `MaPB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `db22_nhanvien`
--
ALTER TABLE `db22_nhanvien`
  ADD CONSTRAINT `db22_nhanvien_ibfk_1` FOREIGN KEY (`MaPB`) REFERENCES `db22_phongban` (`MaPB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
