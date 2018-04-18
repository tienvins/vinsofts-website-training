-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 06:23 PM
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
(1, 'Mobie', 'Thiết kế các ứng dụng trên điện thoại', 'T-Soft_Mobile_logo.png'),
(2, 'Marketing', 'Hoạt động hướng tới khách hàng nhằm thỏa mãn nhu cầu và mong muốn của họ thông qua quá trình tiếp thị sản phẩm, phát triển thương hiệu', 'marketing.png'),
(3, 'Job Manager', 'Khai thác và sử dụng nguồn nhân lực của một tổ chức hay một công ty một cách hợp lý và hiệu quả', 'JobManager.png'),
(5, 'Accounting', 'Xác định, ghi chép, tổng hợp và báo cáo các thông tin kinh tế trong công ty.', 'ketoan.png'),
(6, 'Web', 'Tạo các ứng dụng trên web', 'web.jpg');

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
  `status` tinyint(4) NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `date_of_birth`, `phone_number`, `current_address`, `salary`, `hobby`, `language_skills`, `leave_days`, `team_id`, `status`, `confirm_password`) VALUES
(41, 'haha', '11@gmail.com', 'hung@gmail.com', '09a5d10dc74b78fcc231b2deb57e47fd1565ca97', NULL, 'team.png', 1, '2018-04-12', 111, 'THPT Ninh Giang', 50000, '2', 'china', 10, 1, 1, '09a5d10dc74b78fcc231b2deb57e47fd1565ca97'),
(42, 'hung', 'hunghamhoc101111@gmail.com', 'hung@gmail.com', '3baaa792aa3eec25897a6a84cf8b30a096990336', NULL, 'ĐBQHCK.jpg', 1, '2018-04-05', 53432131, 'THPT Ninh Giang', 5000000, '1', 'ko co11', 10, 2, 1, '3baaa792aa3eec25897a6a84cf8b30a096990336'),
(43, 'hung', 'hunghamhoc10111111111@gmail.com', 'hung@gmail.com', '715e4a633a340a9c4c1f8c53399d05c0f3a434b6', NULL, 'web.jpg', 1, '2018-04-06', 53432131, 'THPT Ninh Giang', 5000000, '11', 'ko co11', 1111, 1, 1, '715e4a633a340a9c4c1f8c53399d05c0f3a434b6'),
(45, 'hung', 'hunghamhoc11117101@gmail.com', 'hung@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, 'kehoach.jpeg', 1, '2018-04-06', 53432131, 'THPT Ninh Giang', 1, '11', 'ko co11', 10, 1, 1, '356a192b7913b04c54574d18c28d46e6395428ab'),
(46, '1', 'hunghamhoc101@gmail.com', 'hunghamhoc101@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, '10610478_651501791631103_7285539054650985091_n.jpg', 1, '2018-04-10', 53432131, 'THPT Ninh Giang', 111111, '11', '11111', 10, 1, 1, '356a192b7913b04c54574d18c28d46e6395428ab');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
