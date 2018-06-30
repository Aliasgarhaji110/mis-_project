-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 02:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `edit_activity`
--

CREATE TABLE `edit_activity` (
  `edit_act_id` int(11) NOT NULL,
  `edit_act_name` varchar(100) DEFAULT NULL,
  `edit_act_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_activity`
--

CREATE TABLE `main_activity` (
  `main_act_id` int(11) NOT NULL,
  `main_act_name` varchar(100) DEFAULT NULL,
  `main_act_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_activity`
--

INSERT INTO `main_activity` (`main_act_id`, `main_act_name`, `main_act_time`) VALUES
(1, 'Extra-Curricular', '2018-06-30 10:46:28'),
(2, 'Co-Curricular', '2018-06-30 10:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_id` bigint(20) NOT NULL,
  `stu_email` varchar(100) DEFAULT NULL,
  `stu_password` varchar(100) DEFAULT NULL,
  `stu_fname` varchar(100) DEFAULT NULL,
  `stu_mname` varchar(100) DEFAULT NULL,
  `stu_lname` varchar(100) DEFAULT NULL,
  `stu_dob` date DEFAULT NULL,
  `stu_gender` int(11) DEFAULT NULL,
  `stu_blood` varchar(10) DEFAULT NULL,
  `stu_year` int(11) DEFAULT NULL,
  `stu_year_of_joining` date DEFAULT NULL,
  `stu_division` varchar(10) DEFAULT NULL,
  `stu_branch` int(11) DEFAULT NULL,
  `stu_add1` varchar(100) DEFAULT NULL,
  `stu_add_locality` varchar(100) DEFAULT NULL,
  `stu_add_city` varchar(100) DEFAULT NULL,
  `stu_add_district` varchar(100) DEFAULT NULL,
  `stu_add_state` varchar(100) DEFAULT NULL,
  `stu_add_pincode` bigint(20) DEFAULT NULL,
  `stu_add_country` int(11) DEFAULT NULL,
  `stu_father_name` varchar(100) DEFAULT NULL,
  `stu_father_number` bigint(20) DEFAULT NULL,
  `stu_father_email` varchar(100) DEFAULT NULL,
  `stu_mother_name` varchar(100) DEFAULT NULL,
  `stu_mother_number` bigint(20) DEFAULT NULL,
  `stu_mother_email` varchar(100) DEFAULT NULL,
  `stu_img_path` text,
  `stu_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stu_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `stu_email`, `stu_password`, `stu_fname`, `stu_mname`, `stu_lname`, `stu_dob`, `stu_gender`, `stu_blood`, `stu_year`, `stu_year_of_joining`, `stu_division`, `stu_branch`, `stu_add1`, `stu_add_locality`, `stu_add_city`, `stu_add_district`, `stu_add_state`, `stu_add_pincode`, `stu_add_country`, `stu_father_name`, `stu_father_number`, `stu_father_email`, `stu_mother_name`, `stu_mother_number`, `stu_mother_email`, `stu_img_path`, `stu_timestamp`, `stu_status`) VALUES
(1513075, 'adnan.d@somaiya.edu', '7c222fb2927d828af22f592134e8932480637c0d', 'Adnan', 'Abdultaiyeb', 'Dedhawala', '0000-00-00', 1, 'O+', 4, '0000-00-00', 'A', 3, '405,Fakhri Manzil', 'Saifee park,Andheri-east', 'Mumbai', 'Mumbai', 'Maharashtra', 400059, 44, 'Abdultaiyeb', 9999888889, 'abc@gmail.com', 'jumana', 7777788888, 'zainab_74@gmail.com', 'student_img/single_2.jpg', '2018-06-30 10:34:11', 0),
(1513082, 'abc@somaiya.edu', '4c9b755dfffefb1e926ff835b38f1088a09b9715', 'Niti', 'Virendra', 'Patel', '0000-00-00', 2, 'A+', 2, '0000-00-00', 'B', 3, '501SJWWHIDGSSS', 'SJWBFIRIGFAAA', 'Mumbai', 'Mumbai', 'Maharashtra', 400059, 356, 'Virendra Patel', 9999888778, 'vqqp@gmail.com', 'Daksha Patel', 2223331235, 'fwafd@gmail.com', 'student_img/blog_2.jpg', '2018-06-30 10:34:26', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edit_activity`
--
ALTER TABLE `edit_activity`
  ADD PRIMARY KEY (`edit_act_id`);

--
-- Indexes for table `main_activity`
--
ALTER TABLE `main_activity`
  ADD PRIMARY KEY (`main_act_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edit_activity`
--
ALTER TABLE `edit_activity`
  MODIFY `edit_act_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_activity`
--
ALTER TABLE `main_activity`
  MODIFY `main_act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
