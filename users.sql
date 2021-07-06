-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 03:56 PM
-- Server version: 8.0.25
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `userID`) VALUES
(13, 52),
(16, 52),
(15, 54),
(14, 57);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `page_id` int NOT NULL,
  `parent_id` int NOT NULL DEFAULT '-1',
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `parent_id`, `name`, `content`, `submit_date`) VALUES
(20, 1, -1, 'John Doe', 'Thanks for taking the time to write this article, I really appreciate it.', '2021-06-15 01:00:21'),
(21, 1, 20, 'efthymvs', 'You\'re welcome.', '2021-06-15 01:04:48'),
(22, 1, 21, 'Juan Perez', 'Thank you.', '2021-06-15 01:05:56'),
(23, 2, -1, 'Juan Perez', 'Thank you for the reccomendations.  \' Girls Rising \' is a really interesting film.', '2021-06-15 01:08:36'),
(24, 3, -1, 'Juan Perez', 'I will definitely donate for this cause.', '2021-06-15 01:09:07'),
(25, 3, 24, 'efthymvs', 'We are glad to hear that.', '2021-06-15 01:10:08'),
(26, 4, -1, 'John Doe', 'Thank you for the recommendations.', '2021-06-15 01:12:23'),
(28, 1, 21, 'John Smith', 'Thank you for sharing this information.', '2021-06-15 01:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `message`, `reg_date`) VALUES
(42, 'Efthymia Sarri', 'efthymvs@csd.auth.gr', '', 'This is a test!', '2021-06-14 21:31:31'),
(43, 'Efthymia Sarri', 'efthymvs@csd.auth.gr', '', 'This is another test message.', '2021-06-14 21:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(52, 'test', 'test@mail.com', '$2y$10$S6dcDYAh4qmTjyGLY8lwqu/04FQ2YLyEGjechfO1cfquHoyZC.gtq', '2021-06-13 17:12:55'),
(53, 'test1', 'test1@mail.com', '$2y$10$b7XhCYaXGFgVH4F8zLko6OtwvAgK71bOvbLMJC4O4lmx62Z0sBsrK', '2021-06-13 17:13:16'),
(54, 'test2', 'test2@mail.com', '$2y$10$yZ4Tt.Amwi/5BAz68egDluTkdI2gbtj/6Q5Gc/68pqaPs4/Lyz6du', '2021-06-13 17:13:42'),
(57, 'user', 'user@mail.com', '$2y$10$tExkwcxcnnWkjzd/68GU9uV82FqWtErIqfDcnSsbIApviozjbAKmm', '2021-06-13 17:15:55'),
(66, 'user1', 'user1@mail.com', '$2y$10$DvxzkeGiuCTuY4DPblRYwOlEuSz19oQ5iu5Vn7H76hwI/jwNvgVSG', '2021-06-14 21:57:25'),
(67, 'user2', 'user2@mail.com', '$2y$10$rJxwUw9WWmZOp4S3.WRJeegDGO7/VxF1P5fAHptVAGiKHgt84iGHW', '2021-06-14 21:57:40'),
(70, 'efthymvs', 'efthymvs@csd.auth.gr', '$2y$10$xU2cbpIdIKPE05Bn9P1VueBaSgiOU0NNyFEGEPWGdGPO8udyNd/by', '2021-06-14 22:01:22'),
(71, 'Juan Perez', 'juanperez@mail.com', '$2y$10$FRU2C3Uidz3BKdcypZug2e7MRvPZS1UlCG1cwdB8l6CT3Uei2FsUO', '2021-06-14 22:05:17'),
(72, 'John Doe', 'johndoe@mail.com', '$2y$10$AXvH/TOLQ5RKPRNZdq26Fey/s6mYNkcyiLcAaB1tmLDI86I32oHc.', '2021-06-14 22:11:42'),
(73, 'John Smith', 'johnsmith@mail.com', '$2y$10$Tbdzs83xSmEY5V0SKCIt4.K/IsI3Y5YcdOVH7/vUDIDEzJTXRe1Mi', '2021-06-14 22:12:45'),
(74, 'efthymvss', 'efthymvss@csd.auth.gr', '$2y$10$PwU2ZqWIa4cTm0LZFPHLtuxxJct1z5Uic64pwTBsFVymjF2hNRjcC', '2021-06-15 08:08:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
