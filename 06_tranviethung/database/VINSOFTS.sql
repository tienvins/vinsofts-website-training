-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2018 at 05:30 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VINSOFTS`
--

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `description`, `logo`) VALUES
(1, 'Mobie', 'Thiết kế các ứng dụng trên điện thoại', 'mobie.png'),
(2, 'Marketing', 'Hoạt động hướng tới khách hàng nhằm thỏa mãn nhu cầu và mong muốn của họ thông qua quá trình tiếp thị sản phẩm, phát triển thương hiệu', 'marketing.png'),
(3, 'Job Manager', 'Khai thác và sử dụng nguồn nhân lực của một tổ chức hay một công ty một cách hợp lý và hiệu quả', 'JobManager.png'),
(4, 'Department of Planning', 'Lên kế hoạch cho nhhững hoạt động, công việc được sắp xếp theo trình tự nhất định để đạt được mục tiêu đã đề ra', 'kehoach.jpeg'),
(5, 'Accounting', 'Xác định, ghi chép, tổng hợp và báo cáo các thông tin kinh tế trong công ty.', 'ketoan.png'),
(6, 'Web', 'Tạo các ứng dụng trên web', 'db.jpg'),
(7, 'tara', 'khogn co gi', 'user1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_personal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` int(11) NOT NULL,
  `current_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `hobby` text COLLATE utf8_unicode_ci NOT NULL,
  `language_skills` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_days` float NOT NULL,
  `team_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `phone_number`, `current_address`, `salary`, `hobby`, `language_skills`, `leave_days`, `team_id`, `status`) VALUES
(2, 'Tran viet hung', 'hunghamhoc101@gmail.', 'hung@gmail.com', '12345', NULL, NULL, 2, '1992-03-11', 53432131, 'THPT Ninh Giang', 5000000, '11', 'ko co11', 10, 1, 2),
(5, '1', 'tes4@gmail.com', 'tes4@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, 1, '1992-03-24', 1675211855, 'dfsa', 2, '1', 'asdf', 2, 2, 1),
(6, 'test4', 'tes4@gmail.com1', 'tranviethun@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, 1, '1992-03-27', 1675211855, 'dfsa', 2, '1', 'asdf', 1, 2, 1),
(7, 'test4', 'tes4@gmail.com11', 'tes4@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, 'hung.jpeg', 1, '1992-03-27', 1675211855, 'dfsa', 2, '1', 'asdf', 1, 2, 2),
(8, 'nguyen anh tuan', 'nguyenanhuan@gmail.com', 'nguyentuananh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, 2, '1992-03-11', 53432131, 'THPT Ninh Giang', 5000000, '11', 'china', 10, 2, 1),
(9, 'nguyen anh tuan', 'nguyenanhuan@gmail.com', 'nguyentuananh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, 2, '1992-03-11', 53432131, 'THPT Ninh Giang', 5000000, '11', 'china', 10, 2, 1),
(10, 'nguyen anh tuan', 'nguyenanhuan@gmail.com', 'nguyentuananh@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, 2, '1992-03-11', 53432131, 'THPT Ninh Giang', 5000000, '11', 'china', 10, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
