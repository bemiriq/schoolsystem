-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 04:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `year`, `faculty`, `course_name`, `date_posted`) VALUES
(1, 'Class-XII', 'Science', 'Chemistry', '2016-04-19'),
(2, 'Class-XII', 'Science', 'Biology', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `title`, `image`) VALUES
(1, 'Razeev', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `fee_id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester1` varchar(20) NOT NULL,
  `semester2` varchar(20) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fee_id`, `year`, `semester1`, `semester2`, `date_posted`) VALUES
(2, 'Class-XI', '67,000', '90,000', '2016-04-17'),
(3, 'Class-XII', '26,000', '80,000', '2016-04-17'),
(4, 'Class-XI', '80,000', '100,000', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `capacity` varchar(20) NOT NULL,
  `mlocation` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `embededMap` varchar(200) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `gender`, `capacity`, `mlocation`, `city`, `embededMap`, `date_posted`) VALUES
(2, 'Girls', '30', 'Bhaktapur', 'Suryavinayak', 'https://www.google.com.np/maps/place/Bhaktapur+Durbar+Square/@27.6721907,85.4262673,17z/data=!3m1!4b1!4m2!3m1!1s0x39eb1aafec32df31:0xdda339e731af9bfd?hl=en', '2016-04-19'),
(3, 'Boys', '55', 'New Baneshwor', 'Shantinagar', 'https://www.google.com.np/maps/place/Shantinagar/@26.7408676,88.0159025,12z/data=!3m1!4b1!4m2!3m1!1s0x39e5b67e8a2c6fd3:0xad5eac449b0656a1?hl=en', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `transportation_id` int(11) NOT NULL,
  `slocation` varchar(30) NOT NULL,
  `elocation` varchar(30) NOT NULL,
  `stime` varchar(30) NOT NULL,
  `etime` varchar(30) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`transportation_id`, `slocation`, `elocation`, `stime`, `etime`, `date_posted`) VALUES
(1, 'Baneshwor', 'Bhaktapur', '9:00 AM', '3:00 PM', '2016-04-19'),
(2, 'Kapan', 'Kalanki', '8:00 AM', '2:00 PM', '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_category` varchar(15) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `username`, `password`, `user_category`, `date_posted`) VALUES
(1, 'Kshitiz Raut', 'kshitiz@gmail.com', 'student', 'student', 'Student', '0000-00-00'),
(2, 'Monil Adhikari', 'monil@gmail.com', 'teacher', 'teacher', 'Teacher', '0000-00-00'),
(3, 'Razeev', 'razeev@gmail.com', 'admin', 'admin', 'Admin', '2016-04-07'),
(4, 'Sandesh Phuyal', 'sandeshphuyalc6@gmail.com', 'sandesh', 'sandesh', 'Student', '2016-04-17'),
(6, 'Prakash Shrestha', 'prakash@gmail.com', 'prakash', 'prakash', 'Teacher', '2016-04-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`transportation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `transportation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
