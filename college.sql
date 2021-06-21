-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 06:59 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `aid` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`aid`, `id`, `month`, `attendance`) VALUES
(1, 0, '', ''),
(2, 0, '', '0.00'),
(3, 0, '', '0.00'),
(4, 0, '', '0.00'),
(5, 0, '', '0.00'),
(6, 0, '', '0.00'),
(7, 0, '', '0.00'),
(8, 0, '', '0.00'),
(9, 2, 'JAN', '87'),
(10, 2, 'APR', '86'),
(11, 3, 'JAN', '85.63');

-- --------------------------------------------------------

--
-- Table structure for table `cau_mon`
--

CREATE TABLE `cau_mon` (
  `aid` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cau_mon`
--

INSERT INTO `cau_mon` (`aid`, `id`, `fname`, `lname`, `month`, `reason`, `fine`) VALUES
(1, '2', 'rohit', 'mahajan', '3', 'breaking something', 200),
(2, '3', 'rajiv', 'israni', 'march', 'for breaking camera ', 1000),
(5, '2', 'rohit', 'mahajan', '3', 'reason', 300);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `utf` int(11) NOT NULL,
  `uta` int(255) NOT NULL,
  `putf` int(11) NOT NULL,
  `puta` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`aid`, `id`, `fname`, `lname`, `utf`, `uta`, `putf`, `puta`) VALUES
(1, 2, 'rohit', 'mahajan', 5, 6, 7, 8),
(3, 3, 'rajiv', 'israni', 3, 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `aid` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `feespaid` varchar(255) NOT NULL,
  `feesremaining` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`aid`, `id`, `fname`, `lname`, `branch`, `sem`, `fees`, `feespaid`, `feesremaining`) VALUES
(1, 2, 'Rohit', 'Mahajan', 'CSE', '6', '40000', '2000', '38000'),
(2, 3, 'Rajiv', 'Israni', 'CSE', '6', '50000', '30000', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `lib_fine`
--

CREATE TABLE `lib_fine` (
  `aid` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `fine` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_fine`
--

INSERT INTO `lib_fine` (`aid`, `id`, `fname`, `lname`, `branch`, `fine`, `reason`) VALUES
(1, 2, 'rohit', 'mahajan', 'cse', '1500', 'no return of dbms book'),
(2, 3, 'rajiv', 'israni', '', '500', 'no return of se book'),
(3, 11, 'sumit', 'chandwani', 'CSE', '150', 'no return of OS  book');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `fname`, `lname`, `role`, `department`, `email`, `password`) VALUES
(1, 'rana', 'sayeda', ' TEACHER', ' CSE', 'nishabalani@gmail.com', 'nisha123'),
(2, 'monali', 'GULHANE', 'TEACHER', ' CSE', 'monalimam@gmail.com', 'monali123'),
(3, 'vikas', 'wani', 'ACCOUNTANT', 'NONE', 'vikas@gmail.com', 'vikas123'),
(5, 'vandana', 'patil', 'LIBRARIAN', 'NONE', 'vandana@gmail.com', 'vandana123');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `enroll` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`id`, `fname`, `lname`, `sem`, `branch`, `enroll`) VALUES
(2, 'rohit', 'mahajan', '6th', 'CSE', 2147483647),
(3, 'rajiv', 'israni', '6th', 'CSE', 2147483647),
(4, 'rajat', 'chaure', '6th', 'CSE', 1232131244),
(5, 'sunny', 'mansach', '6th', 'CSE', 234823434),
(6, 'vineet', 'thutheja', '6th', 'cse', 2147483647),
(7, 'nitin', 'sharma', '6th', 'cse', 2147483647),
(8, 'nilesh', 'ramchandani', '6th', 'cse', 2147483647),
(9, 'bhavesh', 'rochiramani', '6th', 'cse', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

CREATE TABLE `stud_reg` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `enroll` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`id`, `fname`, `lname`, `sem`, `branch`, `enroll`, `email`, `password`) VALUES
(2, 'rohit', 'mahajan', '6th', 'CSE', 2147483647, 'mahajanr26@gmail.com', 'rohit123'),
(3, 'rajiv', 'israni', '6th', 'CSE', 2147483647, 'rajivisrani@gmail.com', 'rajiv123'),
(4, 'rajat', 'chaure', '6th', 'CSE', 1232131244, 'rajatchaure@gmail.com', '6408326db1aa83c86a1301f11b0d7c12'),
(5, 'sunny', 'mansach', '6th', 'CSE', 234823434, 'sunnymansach@gmail.com', '7af4896825dfc7e94f8a1d6846a5a2d4'),
(6, 'vineet', 'thutheja', '6th', 'cse', 2147483647, 'vthutheja@gmail.com', '61c4b57ab8c9cda78db65de136217597'),
(7, 'nitin', 'sharma', '6th', 'cse', 2147483647, 'nikkasingh@gmail.com', '4c9caeef130daba286706adc3c675759'),
(8, 'nilesh', 'ramchandani', '6th', 'cse', 2147483647, 'nileshsir@gmail.com', 'dd0ff90ea41e1e7cd9a0db2565274c4a'),
(9, 'bhavesh', 'rochiramani', '6th', 'cse', 2147483647, 'harshit@gmail.com', 'a9ecab9aad682fbf1ec43cb2f5413810'),
(10, 'tejas', 'winchurkar', '6th', 'CSE', 2147483647, 'tejas@gmail.com', 'tejas123'),
(11, 'manoj', 'kale', 'lst', 'CSE', 123, 'manoj@gmail.com', 'manoj123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cau_mon`
--
ALTER TABLE `cau_mon`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `lib_fine`
--
ALTER TABLE `lib_fine`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_reg`
--
ALTER TABLE `stud_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cau_mon`
--
ALTER TABLE `cau_mon`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lib_fine`
--
ALTER TABLE `lib_fine`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stud_reg`
--
ALTER TABLE `stud_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
