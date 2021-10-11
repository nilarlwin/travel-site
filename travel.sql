-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 05:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Yangon', 'Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this                       ', '61637fb8a1dafimage2.jpg', '2021-10-10 22:11:35', '2021-10-10 22:11:35'),
(12, 'Mandalay', '                Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this         ', '6163715e8710dimage1.jpg', '2021-10-10 22:11:52', '2021-10-10 22:11:52'),
(13, 'Shwebo', '          Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this           ', '6163716a6b1f7image4.jpg', '2021-10-10 22:12:13', '2021-10-10 22:12:13'),
(14, 'Monya', '          Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this         ', '616371763a10fimage5.jpg', '2021-10-10 22:12:28', '2021-10-10 22:12:28'),
(15, 'Mogekok', '                 Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this        ', '6163719390b45image6.jpg', '2021-10-10 22:12:45', '2021-10-10 22:12:45'),
(16, 'Sagaing', '                Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this             ', '616371a19cb87image2.jpg', '2021-10-10 22:13:21', '2021-10-10 22:13:21'),
(17, 'Taunggyi', '                Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this               ', '616371ada9518slider2.jpg', '2021-10-10 22:13:48', '2021-10-10 22:13:48'),
(18, 'Bagan', '                 Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this Travel is the best for everyone.It is important for everyone and everyone must do this. Travel is the best for everyone.It is important for everyone and everyone must do this Tavel is the best for everyone.It is important for everyone and everyone must do this               ', '616371bbd3030image2.jpg', '2021-10-10 22:14:03', '2021-10-10 22:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ni Ni Lwin', 'nini@gmail.com', '12345', '2021-10-08 04:25:20', '2021-10-08 04:25:20'),
(6, 'Sue Nwe', 'suenwe@gmail.com', '$2y$10$S54viPoqQXi0AN2VDf6a9ep3g5C8gTjZminYuNQ8l7to1gHzPTIqq', '2021-10-10 23:33:38', '2021-10-10 23:33:38'),
(10, 'zar zar', 'zar@gmail.com', '$2y$10$7bAXzPMsCcfKyIjElCyqZutBj0C4UbxkMaiCfLh6SDC7w2bVYYKqm', '2021-10-11 03:00:21', '2021-10-11 03:00:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
