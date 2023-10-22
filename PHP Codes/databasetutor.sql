-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 04:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasetutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(4) NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `credit` int(11) NOT NULL,
  `instructor` varchar(65) NOT NULL DEFAULT '',
  `fees` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `credit`, `instructor`, `fees`) VALUES
(5, 'BCA', 5, 'Rohan', '1000.00 RS'),
(6, 'MCA', 6, 'Mohan', '2000.00 RS'),
(7, 'Diploma', 4, 'Sohan', '500.00 RS');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `eid`, `comment`) VALUES
(1, 'AJIB', 'AJIB@FEEDBACK.COM', 'TESTING'),
(3, 'AJIB', 'AJIB@Feedback.com', 'Testing the software.');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `branch` varchar(65) NOT NULL DEFAULT '',
  `year` int(10) NOT NULL DEFAULT 1,
  `Telephone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `branch`, `year`, `Telephone`) VALUES
(4, 'Suresh', '1234', 'XII', 2020, '011-12345678'),
(5, 'Ramesh', '1234', 'Diploma', 2019, NULL),
(6, 'Rajesh', '1234', 'BCA', 2021, NULL),
(7, 'Dinesh', '1234', 'MSC IT', 2022, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(4) NOT NULL,
  `uname` varchar(65) NOT NULL DEFAULT '',
  `cname` varchar(65) NOT NULL DEFAULT '',
  `fpaid` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `uname`, `cname`, `fpaid`) VALUES
(1, 'Rajesh', 'MCA', ''),
(2, 'Rajesh', 'Diploma', ''),
(4, 'Rajesh', 'MasterCourse', '250.00 Rs'),
(5, 'Suresh', 'Diploma', '500.00 RS'),
(6, 'Ramesh', 'BCA', '250.00 RS'),
(7, 'Dinesh', 'MCA', '2000.00 RS');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `stime` time NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `course`, `subject`, `teacher`, `day`, `stime`, `class`) VALUES
(1, 'MCA', 'cs', 'arvind', '22-02-2022', '09:30:00', 'DEL'),
(2, 'Diploma', 'english', 'Rajkumar', '15-March-2022', '10:00:00', 'DEL'),
(3, 'MSC IT', 'database', 'Suresh', '26-04-2022', '04:30:00', 'DEL'),
(4, 'MCA', 'Algorithm', 'Kartik', '26-04-2022', '11:00:00', 'GUR');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `Qualification` varchar(65) NOT NULL DEFAULT '',
  `telephone` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `username`, `password`, `Qualification`, `telephone`) VALUES
(6, 'Kartik', '1234', 'MCA', ''),
(7, 'Mikhael', 'abcd', 'Ph.D.', ''),
(8, 'Suresh', '1234', 'MSC IT', '011-99887766'),
(9, 'Rohan', '1234', 'MCA', '011-22334455'),
(10, 'Sohan', '1234', 'BCA', '011-99887744'),
(11, 'Mohan', '1234', 'Ph.D.', '022-22002200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
