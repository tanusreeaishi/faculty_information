-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 02:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `convo_list`
--

CREATE TABLE `convo_list` (
  `id` int(30) NOT NULL,
  `from_user` int(30) NOT NULL,
  `to_user` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_credentials`
--

CREATE TABLE `faculty_credentials` (
  `uname` varchar(244) NOT NULL,
  `pass` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_credentials`
--

INSERT INTO `faculty_credentials` (`uname`, `pass`) VALUES
('saman', '123'),
('tanusree', '123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_information`
--

CREATE TABLE `faculty_information` (
  `id` varchar(244) NOT NULL,
  `name` varchar(244) NOT NULL,
  `initial` varchar(244) NOT NULL,
  `des` varchar(244) NOT NULL,
  `room` varchar(244) NOT NULL,
  `dep` varchar(244) NOT NULL,
  `scholar` varchar(244) NOT NULL,
  `phone` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_information`
--

INSERT INTO `faculty_information` (`id`, `name`, `initial`, `des`, `room`, `dep`, `scholar`, `phone`) VALUES
('saman', 'Saman Sarker Joy', 'SSJ', 'Baby Faculty', 'Ub021901', 'CSE', 'www.ogle.com', '0199837'),
('tanusree', 'Tanusree Das', 'TRD', 'Senior Faculty', 'UB201772', 'PSY', 'nai', '0187878');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `from_user` int(30) NOT NULL,
  `to_user` int(30) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = text , 2 = photos,3 = videos, 4 = documents',
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `popped` tinyint(1) NOT NULL DEFAULT 0,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_user`, `to_user`, `type`, `message`, `status`, `popped`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 1, 2, 1, 'test', 1, 1, 0, '2021-10-16 11:45:21', '2021-10-17 19:36:34'),
(2, 1, 2, 1, '1', 1, 1, 0, '2021-10-16 11:45:25', '2021-10-17 19:36:34'),
(3, 1, 2, 1, '2', 1, 1, 0, '2021-10-16 11:45:26', '2021-10-17 19:36:34'),
(4, 1, 2, 1, '3', 1, 1, 0, '2021-10-16 11:45:28', '2021-10-17 19:36:34'),
(5, 1, 2, 1, '4', 1, 1, 0, '2021-10-16 11:45:30', '2021-10-17 19:36:34'),
(6, 1, 2, 1, '5', 1, 1, 0, '2021-10-16 11:45:31', '2021-10-17 19:36:34'),
(7, 1, 2, 1, '6', 1, 1, 0, '2021-10-16 11:45:32', '2021-10-17 19:36:34'),
(8, 1, 2, 1, '7', 1, 1, 0, '2021-10-16 11:45:34', '2021-10-17 19:36:34'),
(9, 1, 2, 1, '8', 1, 1, 0, '2021-10-16 11:45:35', '2021-10-17 19:36:34'),
(10, 1, 2, 1, '9', 1, 1, 0, '2021-10-16 11:45:37', '2021-10-17 19:36:34'),
(11, 1, 2, 1, '10', 1, 1, 0, '2021-10-16 11:45:42', '2021-10-17 19:36:34'),
(12, 1, 2, 1, '11', 1, 1, 0, '2021-10-16 11:45:44', '2021-10-17 19:36:34'),
(13, 1, 2, 1, '12', 1, 1, 0, '2021-10-16 11:45:47', '2021-10-17 19:36:34'),
(14, 1, 2, 1, '13', 1, 1, 0, '2021-10-16 11:45:51', '2021-10-17 19:36:34'),
(15, 1, 2, 1, '14', 1, 1, 0, '2021-10-16 11:45:54', '2021-10-17 19:36:34'),
(16, 1, 2, 1, '15', 1, 1, 0, '2021-10-16 11:45:57', '2021-10-17 19:36:34'),
(17, 2, 1, 1, '16', 1, 1, 0, '2021-10-16 11:52:45', '2021-10-17 19:37:00'),
(18, 2, 1, 1, '17', 1, 1, 0, '2021-10-16 11:52:49', '2021-10-17 19:37:00'),
(19, 2, 1, 1, '18', 1, 1, 0, '2021-10-16 11:52:54', '2021-10-17 19:37:00'),
(20, 2, 1, 1, '19', 1, 1, 0, '2021-10-16 11:52:57', '2021-10-17 19:37:00'),
(21, 2, 1, 1, '20', 1, 1, 0, '2021-10-16 11:53:06', '2021-10-17 19:37:00'),
(22, 2, 1, 1, '21', 1, 1, 0, '2021-10-16 11:58:48', '2021-10-17 19:37:00'),
(23, 2, 1, 1, 'test', 1, 1, 0, '2021-10-16 12:03:40', '2021-10-17 19:37:00'),
(24, 2, 1, 1, 'test', 1, 1, 0, '2021-10-16 12:04:48', '2021-10-17 19:37:00'),
(25, 1, 2, 1, 're', 1, 1, 1, '2021-10-16 12:05:03', '2022-08-27 06:10:47'),
(26, 1, 2, 1, 'wew', 1, 1, 0, '2021-10-16 12:05:19', '2021-10-17 19:36:34'),
(27, 2, 1, 1, 'hey John', 1, 1, 0, '2021-10-17 18:43:58', '2021-10-17 19:37:00'),
(28, 1, 3, 1, 'Hi Sam', 1, 1, 0, '2021-10-17 18:50:20', '2021-10-17 19:42:15'),
(29, 1, 2, 1, 'claire', 1, 1, 1, '2021-10-17 18:50:37', '2022-08-27 06:10:31'),
(30, 3, 1, 1, 'hey john', 1, 1, 0, '2021-10-17 19:42:31', '2021-10-17 19:43:18'),
(31, 1, 2, 1, 'test', 1, 0, 1, '2021-10-17 19:42:43', '2022-08-27 06:10:33'),
(32, 3, 1, 1, 'yow', 1, 1, 0, '2021-10-17 19:43:22', '2021-10-17 19:43:49'),
(33, 1, 2, 1, 'claire', 1, 0, 1, '2021-10-17 19:43:57', '2021-10-18 00:01:46'),
(34, 3, 1, 1, 'john??', 1, 1, 0, '2021-10-17 19:44:30', '2021-10-17 19:46:01'),
(35, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:45:42', '2021-10-17 19:46:01'),
(36, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-17 19:46:12', '2021-10-17 19:46:26'),
(37, 3, 1, 1, 'psst', 1, 1, 0, '2021-10-17 19:46:33', '2021-10-17 19:47:47'),
(38, 3, 1, 1, 'John??', 1, 1, 0, '2021-10-17 19:47:00', '2021-10-17 19:47:47'),
(39, 3, 1, 1, 'hey you', 1, 1, 0, '2021-10-17 19:47:27', '2021-10-17 19:47:47'),
(40, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:47:54', '2021-10-17 19:50:50'),
(41, 1, 2, 1, '123', 1, 0, 0, '2021-10-17 19:49:08', '2021-10-17 19:49:09'),
(42, 3, 1, 1, '1234', 1, 1, 0, '2021-10-17 19:49:17', '2021-10-17 19:50:50'),
(43, 3, 1, 1, 'test', 1, 1, 0, '2021-10-17 19:50:04', '2021-10-17 19:50:50'),
(44, 3, 1, 1, 'qweqwe', 1, 1, 0, '2021-10-17 19:50:42', '2021-10-17 19:50:50'),
(45, 3, 1, 1, 'aaa', 1, 1, 0, '2021-10-17 19:50:57', '2021-10-17 19:52:52'),
(46, 3, 1, 1, 'John??', 1, 1, 0, '2021-10-17 19:51:38', '2021-10-17 19:52:52'),
(47, 1, 2, 1, 'calire??', 1, 0, 0, '2021-10-17 19:51:50', '2021-10-17 19:51:51'),
(48, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-17 19:52:02', '2021-10-17 19:52:52'),
(49, 3, 1, 1, 'yes ?', 1, 1, 0, '2021-10-17 19:52:58', '2021-10-17 19:53:09'),
(59, 4, 1, 1, 'dude', 1, 1, 0, '2021-10-17 20:15:38', '2021-10-17 20:15:43'),
(60, 1, 4, 1, 'hey', 1, 1, 0, '2021-10-17 20:15:50', '2021-10-17 20:16:04'),
(61, 4, 1, 1, 'men', 1, 1, 0, '2021-10-17 21:28:39', '2021-10-17 21:39:08'),
(62, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:32:31', '2021-10-17 21:39:08'),
(63, 1, 3, 1, 'test', 1, 1, 0, '2021-10-17 21:32:53', '2021-10-18 00:02:20'),
(64, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:33:00', '2021-10-17 21:39:08'),
(65, 4, 1, 1, 'dude', 1, 1, 0, '2021-10-17 21:33:27', '2021-10-17 21:39:08'),
(66, 4, 1, 1, 'yow', 1, 1, 0, '2021-10-17 21:35:24', '2021-10-17 21:39:08'),
(67, 4, 1, 1, 'test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test ', 1, 1, 0, '2021-10-17 21:38:07', '2021-10-17 21:42:42'),
(68, 4, 1, 1, 'teest', 1, 1, 0, '2021-10-17 21:49:16', '2021-10-17 21:49:18'),
(69, 4, 1, 1, 'dude??', 1, 1, 0, '2021-10-17 21:52:38', '2021-10-17 21:52:41'),
(70, 4, 1, 1, 'sup', 1, 1, 0, '2021-10-17 21:52:48', '2021-10-17 21:54:47'),
(71, 1, 4, 1, 'hey', 1, 1, 0, '2021-10-17 21:53:02', '2021-10-17 21:54:13'),
(72, 1, 4, 1, 'What ??', 1, 1, 0, '2021-10-17 21:54:54', '2021-10-17 21:55:15'),
(73, 1, 4, 1, 'How can I help you ?', 1, 1, 0, '2021-10-17 21:55:29', '2021-10-17 21:56:46'),
(74, 4, 1, 1, 'test only', 1, 1, 0, '2021-10-17 21:56:51', '2021-10-17 22:19:00'),
(75, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 21:57:08', '2021-10-17 22:19:00'),
(76, 4, 1, 1, 'a', 1, 1, 0, '2021-10-17 21:57:14', '2021-10-17 22:19:00'),
(77, 4, 1, 1, '123', 1, 1, 0, '2021-10-17 21:58:26', '2021-10-17 22:19:00'),
(78, 4, 1, 1, '123', 1, 1, 0, '2021-10-17 21:58:31', '2021-10-17 22:19:00'),
(79, 4, 1, 1, '2221\r\n25', 1, 1, 0, '2021-10-17 21:58:38', '2021-10-17 22:19:00'),
(80, 1, 4, 1, 'yes?\r\n22', 1, 1, 0, '2021-10-17 21:59:39', '2021-10-17 21:59:43'),
(81, 4, 1, 1, 'hey', 1, 1, 0, '2021-10-17 22:01:22', '2021-10-17 22:19:00'),
(82, 4, 1, 1, 'what\r\n??', 1, 1, 0, '2021-10-17 22:01:58', '2021-10-17 22:19:00'),
(83, 4, 1, 1, 'test\r\n', 1, 1, 0, '2021-10-17 22:15:43', '2021-10-17 22:19:00'),
(84, 4, 1, 1, 'test\r\n', 1, 1, 0, '2021-10-17 22:16:01', '2021-10-17 23:07:20'),
(85, 4, 1, 1, 'yow\r\n\r\nsup', 1, 1, 0, '2021-10-17 22:16:11', '2021-10-17 23:07:20'),
(86, 4, 1, 1, 'wew\r\ntest', 1, 1, 0, '2021-10-17 22:18:30', '2021-10-17 23:07:20'),
(87, 1, 4, 1, 'test', 1, 1, 0, '2021-10-17 22:19:08', '2021-10-17 22:29:46'),
(88, 1, 4, 1, 'test\r\ntest', 1, 1, 0, '2021-10-17 22:19:14', '2021-10-17 22:29:46'),
(89, 1, 4, 1, 'test\r\ntest', 1, 1, 0, '2021-10-17 22:21:13', '2021-10-17 22:29:46'),
(90, 1, 4, 1, 'dude\r\nCan I Ask ?', 1, 1, 1, '2021-10-17 22:30:01', '2021-10-17 23:36:55'),
(91, 4, 1, 1, 'What?\r\nIs it about something?', 1, 1, 1, '2021-10-17 22:30:32', '2021-10-17 23:37:56'),
(92, 1, 4, 1, 'Remeber test 101\r\nCan you check the bug ?', 1, 1, 1, '2021-10-17 22:31:09', '2021-10-17 23:36:01'),
(93, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 22:42:23', '2021-10-17 23:38:02'),
(94, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 22:43:28', '2021-10-17 23:07:29'),
(95, 4, 1, 1, 'test', 1, 1, 1, '2021-10-17 23:21:14', '2021-10-17 23:35:50'),
(96, 4, 1, 1, 'hey dude', 1, 1, 0, '2021-10-17 23:44:45', '2021-10-17 23:46:14'),
(97, 4, 1, 1, 'yow', 1, 1, 0, '2021-10-17 23:46:04', '2021-10-17 23:46:14'),
(98, 4, 1, 1, 'fs', 1, 1, 0, '2021-10-17 23:48:34', '2021-10-17 23:55:38'),
(99, 4, 1, 1, 'test', 1, 1, 0, '2021-10-17 23:49:12', '2021-10-17 23:55:38'),
(100, 1, 4, 1, 'what?', 1, 1, 0, '2021-10-17 23:49:22', '2021-10-17 23:51:07'),
(101, 1, 4, 1, 'yow', 1, 1, 0, '2021-10-17 23:55:42', '2021-10-18 00:01:56'),
(102, 3, 1, 1, 'JOhn?', 1, 1, 0, '2021-10-18 00:02:29', '2022-08-27 06:10:11'),
(103, 3, 1, 1, 'Hey John', 1, 1, 0, '2021-10-18 00:02:33', '2022-08-27 06:10:11'),
(104, 3, 1, 1, 'John', 1, 1, 0, '2021-10-18 00:02:49', '2022-08-27 06:10:11'),
(105, 3, 1, 1, 'test', 1, 1, 0, '2021-10-18 00:03:21', '2022-08-27 06:10:11'),
(106, 3, 1, 1, 'john', 1, 1, 0, '2021-10-18 00:03:26', '2022-08-27 06:10:11'),
(107, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-18 00:03:58', '2022-08-27 06:10:11'),
(108, 3, 1, 1, 'hey', 1, 1, 0, '2021-10-18 00:04:06', '2022-08-27 06:10:11'),
(109, 3, 1, 1, 'test', 1, 1, 0, '2021-10-18 00:07:23', '2022-08-27 06:10:11'),
(110, 3, 1, 1, 'test', 1, 1, 0, '2021-10-18 00:07:56', '2022-08-27 06:10:11'),
(111, 3, 1, 1, 'test', 1, 1, 0, '2021-10-18 00:07:59', '2022-08-27 06:10:11'),
(112, 1, 3, 1, 'heyyy', 0, 0, 0, '2022-08-27 06:10:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_credentials`
--

CREATE TABLE `student_credentials` (
  `uname` varchar(244) NOT NULL,
  `pass` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_credentials`
--

INSERT INTO `student_credentials` (`uname`, `pass`) VALUES
('ariyan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` varchar(244) NOT NULL,
  `name` varchar(244) NOT NULL,
  `student_id` varchar(244) NOT NULL,
  `credits` varchar(244) NOT NULL,
  `dep` varchar(244) NOT NULL,
  `cgpa` varchar(244) NOT NULL,
  `dob` date NOT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `thesis_status` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`id`, `name`, `student_id`, `credits`, `dep`, `cgpa`, `dob`, `supervisor`, `thesis_status`, `interest`, `msg`) VALUES
('ariyan', 'Ariyan Bhai', '201011111', '182', 'CSE', '6.00', '1989-08-05', 'Saman Sarker Joy', 'yes', 'ML, AI', NULL),
('blabla', 'Bla Bla', '2083837', '535', 'EEE', '69.00', '2022-08-03', '', '', 'AI', NULL),
('habijabi', 'Habi Jabi', '20834837', '935', 'ZZZ', '77.00', '2024-08-03', 'Tanusree Das', 'Yes', 'BRAC', NULL),
('lana', 'Lana Del Rey', '2048744', '345', 'CSE', '45.0', '2022-08-02', 'Saman Sarker Joy', 'yes', 'DL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `contact`, `gender`, `dob`, `email`, `password`, `date_created`, `date_updated`) VALUES
(1, 'John', 'D', 'Smith', '09123456789', 'Male', '1997-06-23', 'jsmith@sample.com', '39ce7e2a8573b41ce73b5ba41617f8f7', '2021-10-15 10:34:00', '2021-10-15 12:58:34'),
(2, 'Claire', 'C', 'Blake', '09123654987', 'Female', '1997-10-14', 'cblake@sample.com', '4744ddea876b11dcb1d169fadf494418', '2021-10-15 13:04:40', NULL),
(3, 'Samantha Jane', 'C', 'Lou', '78978511554', 'Female', '1997-07-15', 'slou@sample.com', '1ed1255790523a907da869eab7306f5a', '2021-10-15 13:05:23', NULL),
(4, 'Mike', 'C', 'Williams', '096546655588', 'Male', '1998-12-10', 'mwilliams@sample.com', 'a88df23ac492e6e2782df6586a0c645f', '2021-10-17 19:54:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convo_list`
--
ALTER TABLE `convo_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_credentials`
--
ALTER TABLE `faculty_credentials`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `faculty_information`
--
ALTER TABLE `faculty_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_credentials`
--
ALTER TABLE `student_credentials`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convo_list`
--
ALTER TABLE `convo_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
