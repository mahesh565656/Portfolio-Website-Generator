-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 06:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com\r\n', '5656');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(200) DEFAULT NULL,
  `event_description` varchar(500) DEFAULT NULL,
  `event_image` varchar(400) DEFAULT NULL,
  `event_date` varchar(20) DEFAULT NULL,
  `event_time` varchar(20) DEFAULT NULL,
  `event_venue` varchar(200) DEFAULT NULL,
  `event_url` varchar(400) DEFAULT NULL,
  `event_field` varchar(200) DEFAULT NULL,
  `post_with` varchar(200) DEFAULT NULL,
  `event_mode` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `event_image`, `event_date`, `event_time`, `event_venue`, `event_url`, `event_field`, `post_with`, `event_mode`) VALUES
(1, 'Dr. Smith\'s Cardiology Seminar', 'Discover latest heart treatments with Dr. Smith.', 'Resources/Event/Event1.jpg', '2024-04-14', '12:50', 'Nagpur', NULL, NULL, NULL, NULL),
(2, 'Panel with Dr. Patel', 'Learn mental health insights from Dr. Patel\'s panel.\n', 'Resources/Event/Event2.jpg', '2024-04-14', '12:50', 'Amravati', NULL, NULL, NULL, NULL),
(3, 'Dr. Garcia\'s Wellness Workshop', 'Get personalized wellness tips from Dr. Garcia.\n', 'Resources/Event/Event3.jpg', '2024-04-14', '12:50', 'Yavatmal', NULL, NULL, NULL, NULL),
(4, 'Dr. Johnson\'s Pediatric Talk', 'Delve into pediatric care nuances with Dr. Johnson\'s expertise.', 'Resources/Event/Event4.jpg', '2024-04-14', '12:50', 'Amravati', NULL, NULL, NULL, NULL),
(6, 'Interactive Session with Dr. Lee', 'Join Dr. Lee for a dynamic Q&A session on women\'s health issues.', 'Resources/Event/Event5.jpg', '2024-05-15', '08:56', 'Mumbai', NULL, NULL, NULL, NULL),
(7, 'Dr. Nguyen\'s Dermatology Workshop', 'Unlock skincare secrets and dermatological tips with Dr. Nguyen.', 'Resources/Event/Event6.jpg', '2024-04-13', '02:37', 'Amravati', NULL, NULL, NULL, NULL),
(8, 'New event', 'Online Webinar On Doctors day', 'Resources/Event/3895202.jpg', '2024-04-13', '17:41', 'Amravati', NULL, NULL, NULL, NULL),
(9, 'World Doctor Day', 'Event Description', 'Resources/Event/Doc2.jpg', '2024-04-12', '14:20', 'Amravati', 'http://www.google.com', '', 'Dental', 'Dental'),
(10, 'Annual Fest', 'Description', 'Resources/Event/post2.jpg', '2024-04-23', '22:38', 'Amravati', 'http://www.google.com', '', 'Medical', 'Medical'),
(11, 'Dr. Smith\'s Cardiology Seminar', 'Discover latest heart treatments with Dr. Smith.', 'Resources/Event/post3.jpg', '2024-04-18', '15:36', 'Amravati', 'http://www.google.com', 'Applied Science', 'Dental', 'Offline'),
(12, 'Dr. Smith\'s Cardiology Seminar', 'Discover latest heart treatments with Dr. Smith.', 'Resources/Event/post3.jpg', '2024-03-12', '12:34', 'Amravati', 'http://www.google.com', 'Medical', 'Name', 'Online'),
(13, 'World Doctor Day', '', 'Resources/Event/friendly-doctor-looking-camera.jpg', '2024-03-31', '22:50', 'Amravati', 'http://www.google.com', 'Pharmacist', 'Ananymously', 'Offsite');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `added_by` varchar(100) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `post_image` varchar(200) DEFAULT NULL,
  `post_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `liked_by` varchar(200) DEFAULT NULL,
  `like_count` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `added_by`, `text`, `post_image`, `post_date`, `liked_by`, `like_count`) VALUES
(1, 'roshan@gmail.com', 'First Post', 'Resources/Post/post1.jpg', '2024-04-15 11:55:51.231132', '', 0),
(2, 'user1@gmail.com', 'Hello World', 'Resources/Post/post2.jpg', '2024-04-15 11:56:07.229617', '', 0),
(3, 'roshanghongade2@gmail.com', 'Data Structure', 'Resources/Post/post3.jpg', '2024-04-15 11:56:30.709416', '', 0),
(4, 'maheshghongade62@gmail.com', 'Project Competetion', 'Resources/Post/post4.jpg', '2024-04-15 11:57:10.070980', '', 0),
(5, 'maheshghongade@gmail.com', 'Good Morning', 'Resources/Post/post5.jpg', '2024-04-15 11:56:00.281999', '', 0),
(6, 'studybuddybusiness@gmail.com', 'Good Afternoon', 'Resources/Post/post6.jpg', '2024-04-15 11:57:24.252707', '', 0),
(7, 'maheshghongade644@gmail.com', 'Friends', 'Resources/Post/post1.jpg', '2024-04-15 11:59:07.001030', '', 0),
(21, 'prpotecollege@gmail.com', 'Success', 'Resources/Post/post3.jpg', '2024-04-15 11:54:13.011570', '', 0),
(22, 'prpotecollege@gmail.com', 'Success', 'Resources/Post/man-with-stethoscope-around-his-neck-is-wearing-white-lab-coat.jpg', '2024-04-15 12:20:58.657441', '', 0),
(23, 'prpotecollege@gmail.com', 'Hello', 'Resources/Post/friendly-doctor-looking-camera.jpg', '2024-04-15 12:22:27.789305', '', 0),
(24, 'prpotecollege@gmail.com', ' New post', 'Resources/Post/Doc11.jpg', '2024-04-16 16:38:37.012134', NULL, NULL),
(49, 'prpotecollege@gmail.com', '', 'Resources/Post/post3.jpg', '2024-04-26 16:14:26.084122', NULL, NULL),
(50, 'prpotecollege@gmail.com', 'Success', 'Resources/Post/vecteezy_ai-generated-headphone-and-vivid-color-powder-creative_39651599.jpg', '2024-04-26 11:27:51.382600', NULL, NULL),
(51, 'prpotecollege@gmail.com', 'Broadcast Successfull', 'Resources/Post/pexels-tom-fisk-2361729.jpg', '2024-04-26 16:18:39.970580', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `country` varchar(400) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `collagename` varchar(100) NOT NULL,
  `universityname` varchar(100) NOT NULL,
  `endyear` varchar(100) NOT NULL,
  `expname` varchar(100) NOT NULL,
  `expposition` varchar(100) NOT NULL,
  `expsd` varchar(100) NOT NULL,
  `exped` varchar(100) NOT NULL,
  `currentlyworking` text NOT NULL,
  `license` varchar(100) NOT NULL,
  `researchtype` varchar(100) DEFAULT NULL,
  `researchurl` varchar(100) DEFAULT NULL,
  `birthdate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `image`, `Designation`, `qualification`, `gender`, `phoneNumber`, `country`, `state`, `city`, `collagename`, `universityname`, `endyear`, `expname`, `expposition`, `expsd`, `exped`, `currentlyworking`, `license`, `researchtype`, `researchurl`, `birthdate`) VALUES
(5, 'Dr. Mahesh  Ghongade', 'roshan@gmail.com', '$2y$10$8VSrls0OX1tZKbYUMMzH2eRRo1XIhbsyV9pUEXX9SL9bf0D4NxZ/S', 'Resources/images/Doc1.jpg', 'MBBS', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(12, 'Dr. Roshan Ghongade', 'maheshghongade@gmail.com', '$2y$10$8feIXWCowGXAv4TGl.b14.QK/3HTUh77YCmENRl6.e3OvjJPG5sca', 'Resources/images/Doc2.jpg', 'Anesthesiologist', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(14, 'Dr. Jayesh Deshmukh', 'user1@gmail.com', '$2y$10$VcAnjlcp5Z6CB7VVSnbDSeG54gNvRt3g/q2OIdw4cY/l3PZgJfcWe', 'Resources/images/Doc3.jpg', 'Neurologist', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(15, 'Dr. saurabh Bambal', 'roshanghongade2@gmail.com', '$2y$10$SX8doQI1rd4MeYVmTi2.weBoC.ttWpK7y.3ShgFa5GQA8FFP/ucoS', 'Resources/images/Doc4.jpg', 'Surgeon', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(16, 'Dr. Yash dalvi', 'studybuddybusiness@gmail.com', '$2y$10$uqSTTzaZy7XvUUIq5Agvi.ZFBLNskZlGMfbi0FPR3F4Gi235K/cxm', 'Resources/images/Doc5.jpg', 'Psychiatrist', '', '', '987263738', 'Amravati, Maharashtra, India 444801.', 'Maharashtra', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(17, 'Dr. Mahesh Ghongade', 'prpotecollege@gmail.com', '$2y$10$rQsKYGeDVIL5T28.2xO3ne74hVUQvwqzV54lOZilT6C9tBLXCZqoK', 'Resources/images/Profile Photo.png', 'Medical', 'Graduate', 'Female', '8767713150', 'India', 'Maharashtra', 'Amravati', '[\"p r pote\"]', '[\"sgbau\"]', '[\"\"]', '[\"Softtronix Solutions\"]', '[\"Php developer\"]', '[\"\"]', '[\"\"]', '', '565656', 'Article', '', 'Array'),
(18, 'Mahesh  Ghongade', 'maheshghongade62@gmail.com', '$2y$10$refQhiiNGv58AyzIPPxOBOmQJKTWELMQVqN7e0cxB9yVV7JoA7vnK', 'Resources/images/Doc7.jpg', 'Influencer', '', '', '987263738', 'Amravati, Maharashtra, India 444801.', 'Maharashtra', '345678', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(19, 'Rajesh Gandhe', 'rg@gmail.com', '$2y$10$JXfVAKbCGbZXt7bGlg7H0eHgqcfpoTDJIiicF49q6AUagyVHTf3UO', 'Resources/images/Doc8.jpg', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(20, 'Mahesh  Ghongade', 'email@gmail.com', '$2y$10$YeCSjIjbgHxD/xOOq.YaEurNlS3Y6P/Z8dcYKgw5HGjA8NycbUH8e', 'Resources/images/Doc9.jpg', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(21, 'Database Mission Successful !!!', 'd@gmail.com', '$2y$10$3y1QN2iVpAkOdyYZ0uDUU.qkVpYgOxNNpxD8nQgN.83MP/mKMlS8.', 'Resources/images/Doc10.jpg', 'Applied Science', 'Post Graduate', 'gender', '', '', 'Maharashtra', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL),
(22, 'Dr. Mahesh Ghongade', 'maheshghongade644@gmail.com', '$2y$10$.hlLMHjsSSUMEf.SKdOpa.nRjIPMVdX2EanpAzFLRphxLXR.2fkeC', 'Resources/images/Screenshot_2024-04-16_170533-removebg-preview.png', 'Medical', 'Graduate', 'Female', '8767713150', '', 'en', 'Amravati', '0', '0', '0', '0', '0', '0', '0', '', '', 'fr', 'https://www.google.com', ''),
(30, 'Mahesh Arunrao Ghongade', 'omraut@gmail.com', '$2y$10$1n0lxvLYwpi6wqwRPLefFeavMOTb/PRDK4oQUTDidLqOC6Ps.S8D6', 'Resources/images/Profile Photo.png', 'Dental', 'Graduate', 'Male', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
