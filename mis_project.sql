-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 04:28 AM
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
-- Table structure for table `add_type_activity`
--

CREATE TABLE `add_type_activity` (
  `add_type_act_id` int(11) NOT NULL,
  `add_type_act_name` varchar(100) DEFAULT NULL,
  `add_type_main_act_id` int(11) DEFAULT NULL,
  `add_type_act_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_type_activity`
--

INSERT INTO `add_type_activity` (`add_type_act_id`, `add_type_act_name`, `add_type_main_act_id`, `add_type_act_time`) VALUES
(2, 'Internship', 2, '2018-07-02 11:02:32'),
(3, 'Projects', 2, '2018-07-03 02:56:05'),
(4, 'Sports', 1, '2018-07-03 02:58:41'),
(5, 'Cultural Councils', 1, '2018-07-04 08:34:12'),
(6, 'Technical Councils', 2, '2018-07-03 03:05:39'),
(8, 'Cultural Activities', 1, '2018-07-03 03:10:04'),
(9, 'Social Service', 1, '2018-07-03 05:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `cultural_council`
--

CREATE TABLE `cultural_council` (
  `cultural_council_id` int(11) NOT NULL,
  `cultural_council_stu_id` bigint(20) DEFAULT NULL,
  `cultural_council_stu_current_year` int(11) DEFAULT NULL,
  `cultural_council_start_date` text,
  `cultural_council_end_date` text,
  `cultural_council_name` varchar(100) DEFAULT NULL,
  `cultural_council_position` varchar(100) DEFAULT NULL,
  `cultural_council_description` text,
  `cultural_council_certificate_path` text,
  `cultural_council_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `internship_id` int(11) NOT NULL,
  `internship_stu_id` bigint(20) DEFAULT NULL,
  `internship_stu_current_year` int(11) DEFAULT NULL,
  `internship_start_date` text,
  `internship_end_date` text,
  `internship_org` varchar(100) DEFAULT NULL,
  `internship_super_name` varchar(100) DEFAULT NULL,
  `internship_super_email` varchar(100) DEFAULT NULL,
  `internship_super_number` varchar(100) DEFAULT NULL,
  `internship_report_path` text,
  `internship_certificate_path` text,
  `internship_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`internship_id`, `internship_stu_id`, `internship_stu_current_year`, `internship_start_date`, `internship_end_date`, `internship_org`, `internship_super_name`, `internship_super_email`, `internship_super_number`, `internship_report_path`, `internship_certificate_path`, `internship_timestamp`) VALUES
(1, 1513075, 4, '2018-07-02', '2018-07-12', 'Adnan Enterprises', 'Abdultaiyeb Dedhawala', 'abcd@gmail.com', '9638527410', 'docs/internship/1530841725_1513075_report_kunjpdf.pdf', 'docs/internship/1530841725_1513075_certificate_kunjpdf.pdf', '2018-07-06 01:56:53');

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
-- Table structure for table `social_service`
--

CREATE TABLE `social_service` (
  `social_service_id` int(11) NOT NULL,
  `social_service_stu_id` bigint(20) DEFAULT NULL,
  `social_service_stu_current_year` int(11) DEFAULT NULL,
  `social_service_start_date` text,
  `social_service_end_date` text,
  `social_service_org` varchar(100) DEFAULT NULL,
  `social_service_incharge_name` varchar(100) DEFAULT NULL,
  `social_service_incharge_email` varchar(100) DEFAULT NULL,
  `social_service_incharge_number` varchar(100) DEFAULT NULL,
  `social_service_description` text,
  `social_service_report_path` text,
  `social_service_certificate_path` text,
  `social_service_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_service`
--

INSERT INTO `social_service` (`social_service_id`, `social_service_stu_id`, `social_service_stu_current_year`, `social_service_start_date`, `social_service_end_date`, `social_service_org`, `social_service_incharge_name`, `social_service_incharge_email`, `social_service_incharge_number`, `social_service_description`, `social_service_report_path`, `social_service_certificate_path`, `social_service_timestamp`) VALUES
(1, 1513075, 4, '2017-11-01', '2017-11-01', 'Adnan Welfare', 'Adnan Khan', 'adk@gmail.com', '7894561230', 'qwertyuiookjhgfdsazxcvbnbvdtg', 'docs/social_service/1530842905_1513075_report_kunjpdf.pdf', 'docs/social_service/1530842905_1513075_certificate_kunjpdf.pdf', '2018-07-06 02:08:25');

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
  `stu_dob` varchar(10) DEFAULT NULL,
  `stu_gender` int(11) DEFAULT NULL,
  `stu_blood` varchar(10) DEFAULT NULL,
  `stu_year` int(11) DEFAULT NULL,
  `stu_year_of_joining` int(11) DEFAULT NULL,
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
(1513075, 'adnan.d@somaiya.edu', '7c222fb2927d828af22f592134e8932480637c0d', 'Adnan', 'Abdultaiyeb', 'Dedhawala', '1997-08-03', 1, 'O+', 4, 2015, 'A', 3, '405,Fakhri Manzil', 'Saifee park,Andheri-east', 'Mumbai', 'Mumbai', 'Maharashtra', 400059, 44, 'Abdultaiyeb', 9999888889, 'abc@gmail.com', 'jumana', 7777788888, 'zainab_74@gmail.com', 'student_img/single_2.jpg', '2018-07-02 07:42:13', 0),
(1513082, 'abc@somaiya.edu', '4c9b755dfffefb1e926ff835b38f1088a09b9715', 'Niti', 'Virendra', 'Patel', '1997-08-03', 2, 'A+', 2, 2015, 'B', 3, '501SJWWHIDGSSS', 'SJWBFIRIGFAAA', 'Mumbai', 'Mumbai', 'Maharashtra', 400059, 356, 'Virendra Patel', 9999888778, 'vqqp@gmail.com', 'Daksha Patel', 2223331235, 'fwafd@gmail.com', 'student_img/blog_2.jpg', '2018-07-02 07:42:20', 0),
(1513750, 'niti.p@somaiya.edu', '64e40f4d6ed5fad216ecf5e83fd20831d9ff3e8d', 'Zainab', 'Hussian', 'Khokawala', '1997-08-26', 2, 'B+', 4, 2015, 'B', 3, '201/B,Spence Lane', 'Byculla(W)', 'Mumbai', 'Mumbai', 'Maharashtra', 400068, 356, 'Hussian Khokawala', 9879451223, 'hkhoka@gmail.com', 'Tasneem Khokawala', 7894556122, 'th.khoka@gmail.com', 'student_img/New Doc 2017-06-02 (1).jpg', '2018-07-02 08:50:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tech_council`
--

CREATE TABLE `tech_council` (
  `tech_council_id` int(11) NOT NULL,
  `tech_council_stu_id` bigint(20) DEFAULT NULL,
  `tech_council_stu_current_year` int(11) DEFAULT NULL,
  `tech_council_start_date` text,
  `tech_council_end_date` text,
  `tech_council_name` varchar(100) DEFAULT NULL,
  `tech_council_position` varchar(100) DEFAULT NULL,
  `tech_council_description` text,
  `tech_council_certificate_path` text,
  `tech_council_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `t_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`t_date`) VALUES
('2018-07-03'),
('1970-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_type_activity`
--
ALTER TABLE `add_type_activity`
  ADD PRIMARY KEY (`add_type_act_id`);

--
-- Indexes for table `cultural_council`
--
ALTER TABLE `cultural_council`
  ADD PRIMARY KEY (`cultural_council_id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `main_activity`
--
ALTER TABLE `main_activity`
  ADD PRIMARY KEY (`main_act_id`);

--
-- Indexes for table `social_service`
--
ALTER TABLE `social_service`
  ADD PRIMARY KEY (`social_service_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tech_council`
--
ALTER TABLE `tech_council`
  ADD PRIMARY KEY (`tech_council_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_type_activity`
--
ALTER TABLE `add_type_activity`
  MODIFY `add_type_act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cultural_council`
--
ALTER TABLE `cultural_council`
  MODIFY `cultural_council_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `internship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `main_activity`
--
ALTER TABLE `main_activity`
  MODIFY `main_act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_service`
--
ALTER TABLE `social_service`
  MODIFY `social_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tech_council`
--
ALTER TABLE `tech_council`
  MODIFY `tech_council_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
