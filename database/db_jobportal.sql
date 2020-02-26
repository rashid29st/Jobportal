-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 02:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_lavel`) VALUES
(1, 'Mamun ', 'r@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Sakib', 's@gmail.com', '81b073de9370ea873f548e31b8adc081', 1),
(3, 'Sabiha', 'k@gmail.com', 'def7924e3199be5e18060bb3e1d547a7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cv`
--

CREATE TABLE `tbl_cv` (
  `cv_id` int(2) NOT NULL,
  `list_name` varchar(50) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cv`
--

INSERT INTO `tbl_cv` (`cv_id`, `list_name`, `publication_status`) VALUES
(7, 'Doctor', 1),
(8, 'Enineer', 1),
(9, 'Banker', 1),
(10, 'Teacher', 1),
(11, 'Lawyer', 1),
(12, 'Actor', 1),
(13, 'Driving', 1),
(14, 'Research', 1),
(15, 'Motor Technician', 1),
(16, 'Consultancy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cv_detail`
--

CREATE TABLE `tbl_cv_detail` (
  `cv_id` int(5) NOT NULL,
  `list_name` varchar(23) NOT NULL,
  `job_detail` text NOT NULL,
  `ex_detail` text NOT NULL,
  `attachment` varchar(10) NOT NULL,
  `publication_status` int(2) NOT NULL,
  `hit_count` int(10) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_joblist`
--

CREATE TABLE `tbl_joblist` (
  `list_id` int(2) NOT NULL,
  `list_name` varchar(50) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_joblist`
--

INSERT INTO `tbl_joblist` (`list_id`, `list_name`, `publication_status`) VALUES
(40, 'Doctor', 1),
(41, 'Engineer', 1),
(42, 'Banker', 1),
(43, 'Teacher', 1),
(44, 'Lawyer', 1),
(45, 'Actor', 1),
(46, 'Driver', 1),
(47, 'Researcher', 1),
(48, 'Motor Technician', 1),
(49, 'Consultancy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_detail`
--

CREATE TABLE `tbl_job_detail` (
  `job_id` int(5) NOT NULL,
  `list_name` varchar(23) NOT NULL,
  `job_detail` text NOT NULL,
  `ex_detail` text NOT NULL,
  `attachment` varchar(10) NOT NULL,
  `publication_status` int(2) NOT NULL,
  `hit_count` int(10) NOT NULL DEFAULT '0',
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_detail`
--

INSERT INTO `tbl_job_detail` (`job_id`, `list_name`, `job_detail`, `ex_detail`, `attachment`, `publication_status`, `hit_count`, `created_date_time`, `author_name`) VALUES
(4, '49', 'পদের নাম: অধ্য্যাপক/সহযোগী অধ্যাপক/সহকারী অধ্যাপক এবং কনসালটেন্ট\r\nবিভাগ: অনকোলজি, রেডিওলজি এন্ড ইমেজিং,মেডিসিন, ইনফার্টিলিটি, গাইনী এন্ড অবস, ইন্টারভেনশনাল কার্ডিওলজি\r\nবেতন: আলোচনাসাপেক্ষে', 'এফসিপিএস, এমডি, এফআরসিআর', '0', 1, 0, '2017-04-24 21:22:12', ''),
(5, '46', 'Company: Agriculture\r\ncity: Mymensingh\r\nContract type: Full time\r\nDriver, HSC', 'Less than 2 years', '0', 1, 0, '0000-00-00 00:00:00', 'Mamun '),
(6, '43', 'Lecturer', '2 Years', '0', 0, 0, '2017-04-25 05:50:51', ''),
(7, '40', 'MBBS doctor', 'less than 3 year of field work', '0', 1, 0, '2017-04-25 12:41:48', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tips`
--

CREATE TABLE `tbl_tips` (
  `tips_id` int(20) NOT NULL,
  `tip_title` text NOT NULL,
  `tips_detail` text NOT NULL,
  `publication_status` tinyint(2) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hit_count` int(20) NOT NULL,
  `author_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tips`
--

INSERT INTO `tbl_tips` (`tips_id`, `tip_title`, `tips_detail`, `publication_status`, `created_date_time`, `hit_count`, `author_name`) VALUES
(1, 'Medical Fitness', 'Medical FitnessMedical FitnessMedical FitnessMedical FitnessMedical Fitness', 1, '2016-10-04 18:20:34', 0, 'Mamun '),
(2, 'Daily Worth Experts Says', 'Daily Worth Experts SaysDaily Worth Experts SaysDaily Worth Experts SaysDaily Worth Experts Says', 1, '2016-10-04 18:24:15', 0, 'Mamun '),
(3, 'communication in managerial efficiency', 'communication in managerial efficiencycommunication in managerial efficiencycommunication in managerial efficiencycommunication in managerial efficiencycommunication in managerial efficiencycommunication in managerial efficiencycommunication in managerial efficiency', 1, '2017-04-25 06:17:56', 0, 'Sakib'),
(5, 'Essential Factors of good Communication', 'Essential Factors of good CommunicationEssential Factors of good CommunicationEssential Factors of good CommunicationEssential Factors of good CommunicationEssential Factors of good Communication', 1, '2016-10-04 18:33:39', 0, 'Sabiha'),
(6, 'Todays weather', 'take a umbrella with you when you going out', 1, '0000-00-00 00:00:00', 0, 'Sabiha'),
(7, 'Health fitness', 'Health fitnessHealth fitnessHealth fitnessHealth fitness', 1, '0000-00-00 00:00:00', 0, 'Mamun ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(3) NOT NULL,
  `user_name` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` text NOT NULL,
  `email_address` varchar(25) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `publication_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `full_name`, `email_address`, `mobile_no`, `publication_status`) VALUES
(1, 'Bappi', '81dc9bdb52d04dc20036dbd8313ed055', 'Attaus Samad Bappi', 'b@gmail.com', 1739373198, 0),
(2, 'Shaon', '81dc9bdb52d04dc20036dbd8313ed055', 'Liakot Ali Fakir', 's@gmail.com', 1736384165, 0),
(3, 'Mahmud', '81dc9bdb52d04dc20036dbd8313ed055', 'Mahmud jomadder', 'm@gmail.com', 1743065550, 0),
(4, 'Mamun', '81dc9bdb52d04dc20036dbd8313ed055', 'Mohiminul Islam Mamun', 'i@gmail.com', 1750718148, 0),
(5, 'Santanu', '81dc9bdb52d04dc20036dbd8313ed055', 'Santanu Dipta Sarkar', 'd@gmail.com', 1748062211, 0),
(6, 'kamal', '827ccb0eea8a706c4c34a16891f84e7b', 'rashid', 'k@gmail.com', 1818804034, 0),
(7, 'sakib', 'e10adc3949ba59abbe56e057f20f883e', 'sakib ahmed', 'sa@gmai.com', 987654321, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cv`
--
ALTER TABLE `tbl_cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `cv_id` (`cv_id`,`list_name`,`publication_status`);

--
-- Indexes for table `tbl_cv_detail`
--
ALTER TABLE `tbl_cv_detail`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `author_name` (`author_name`),
  ADD KEY `created_date_time` (`created_date_time`),
  ADD KEY `hit_count` (`hit_count`),
  ADD KEY `publication_status` (`publication_status`),
  ADD KEY `attachment` (`attachment`),
  ADD KEY `list_name` (`list_name`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `tbl_joblist`
--
ALTER TABLE `tbl_joblist`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `tbl_job_detail`
--
ALTER TABLE `tbl_job_detail`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  ADD PRIMARY KEY (`tips_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_cv`
--
ALTER TABLE `tbl_cv`
  MODIFY `cv_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_cv_detail`
--
ALTER TABLE `tbl_cv_detail`
  MODIFY `cv_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_joblist`
--
ALTER TABLE `tbl_joblist`
  MODIFY `list_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_job_detail`
--
ALTER TABLE `tbl_job_detail`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  MODIFY `tips_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
