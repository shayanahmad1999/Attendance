-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 11:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `aId` int(11) NOT NULL,
  `scId` int(10) UNSIGNED NOT NULL,
  `ctId` int(10) UNSIGNED NOT NULL,
  `aStatus` varchar(10) DEFAULT NULL,
  `aDate` date NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`aId`, `scId`, `ctId`, `aStatus`, `aDate`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 1, 1, 'present', '2022-06-16', '2022-06-18 19:01:29', '0000-00-00'),
(2, 2, 1, 'present', '2022-06-16', '2022-06-18 19:01:29', '0000-00-00'),
(3, 3, 1, 'present', '2022-06-16', '2022-06-18 19:01:29', '0000-00-00'),
(4, 4, 1, 'present', '2022-06-16', '2022-06-18 19:01:29', '0000-00-00'),
(5, 1, 1, 'present', '2022-06-17', '2022-06-18 19:01:41', '0000-00-00'),
(6, 2, 1, 'present', '2022-06-17', '2022-06-18 19:01:41', '0000-00-00'),
(7, 3, 1, 'absent', '2022-06-17', '2022-06-18 19:01:41', '0000-00-00'),
(8, 4, 1, 'present', '2022-06-17', '2022-06-18 19:01:41', '0000-00-00'),
(9, 1, 1, 'present', '2022-06-18', '2022-06-18 19:01:53', '0000-00-00'),
(10, 2, 1, 'present', '2022-06-18', '2022-06-18 19:01:53', '0000-00-00'),
(11, 3, 1, 'leave', '2022-06-18', '2022-06-18 19:01:53', '0000-00-00'),
(12, 4, 1, 'absent', '2022-06-18', '2022-06-18 19:01:53', '0000-00-00'),
(13, 1, 1, 'present', '2022-06-19', '2022-06-21 18:09:49', '0000-00-00'),
(14, 2, 1, 'present', '2022-06-19', '2022-06-21 18:09:49', '0000-00-00'),
(15, 3, 1, 'present', '2022-06-19', '2022-06-21 18:09:49', '0000-00-00'),
(16, 4, 1, 'present', '2022-06-19', '2022-06-21 18:09:49', '0000-00-00'),
(17, 1, 1, 'present', '2022-06-20', '2022-06-21 18:10:00', '0000-00-00'),
(18, 2, 1, 'absent', '2022-06-20', '2022-06-21 18:10:00', '0000-00-00'),
(19, 3, 1, 'present', '2022-06-20', '2022-06-21 18:10:00', '0000-00-00'),
(20, 4, 1, 'leave', '2022-06-20', '2022-06-21 18:10:00', '0000-00-00'),
(21, 1, 1, 'leave', '2022-06-21', '2022-06-21 18:10:10', '0000-00-00'),
(22, 2, 1, 'present', '2022-06-21', '2022-06-21 18:10:10', '0000-00-00'),
(23, 3, 1, 'present', '2022-06-21', '2022-06-21 18:10:10', '0000-00-00'),
(24, 4, 1, 'present', '2022-06-21', '2022-06-21 18:10:10', '0000-00-00'),
(25, 1, 1, 'present', '2022-05-21', '2022-06-21 18:11:06', '0000-00-00'),
(26, 2, 1, 'present', '2022-05-21', '2022-06-21 18:11:07', '0000-00-00'),
(27, 3, 1, 'present', '2022-05-21', '2022-06-21 18:11:07', '0000-00-00'),
(28, 4, 1, 'present', '2022-05-21', '2022-06-21 18:11:07', '0000-00-00'),
(29, 1, 1, 'present', '2022-07-21', '2022-06-21 18:11:35', '0000-00-00'),
(30, 2, 1, 'present', '2022-07-21', '2022-06-21 18:11:35', '0000-00-00'),
(31, 3, 1, 'present', '2022-07-21', '2022-06-21 18:11:35', '0000-00-00'),
(32, 4, 1, 'present', '2022-07-21', '2022-06-21 18:11:35', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `clId` int(11) NOT NULL,
  `cllName` varchar(50) NOT NULL,
  `clStatus` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`clId`, `cllName`, `clStatus`) VALUES
(1, 'one', 1),
(2, 'two', 1),
(3, 'three', 1),
(4, 'Four', 1),
(5, 'Five', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblclassassignteacher`
--

CREATE TABLE `tblclassassignteacher` (
  `ctId` int(11) NOT NULL,
  `clId` int(10) UNSIGNED NOT NULL,
  `tId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclassassignteacher`
--

INSERT INTO `tblclassassignteacher` (`ctId`, `clId`, `tId`) VALUES
(1, 5, 1),
(2, 4, 2),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE `tblrole` (
  `rId` int(11) NOT NULL,
  `rName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`rId`, `rName`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Teacher'),
(4, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentclass`
--

CREATE TABLE `tblstudentclass` (
  `scId` int(11) NOT NULL,
  `stId` int(10) UNSIGNED NOT NULL,
  `clId` int(10) UNSIGNED NOT NULL,
  `scCurrentYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudentclass`
--

INSERT INTO `tblstudentclass` (`scId`, `stId`, `clId`, `scCurrentYear`) VALUES
(1, 1, 5, 2016),
(2, 2, 5, 2016),
(3, 3, 5, 2016),
(4, 7, 5, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `stId` int(11) NOT NULL,
  `stName` varchar(50) NOT NULL,
  `stFatherName` varchar(50) NOT NULL,
  `stDoB` date NOT NULL,
  `stDoA` date NOT NULL,
  `stEmail` varchar(50) NOT NULL,
  `stGender` varchar(50) NOT NULL,
  `stContact` varchar(50) NOT NULL,
  `stAddress` varchar(50) NOT NULL,
  `stImage` varchar(200) NOT NULL,
  `stStatus` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`stId`, `stName`, `stFatherName`, `stDoB`, `stDoA`, `stEmail`, `stGender`, `stContact`, `stAddress`, `stImage`, `stStatus`) VALUES
(1, 'Shayan Ahmad', 'Muhammad Ali ', '2000-03-10', '2022-06-13', 'shayan235@gmail.com', 'male', '0316-8763563', 'Taru Jabba', 'Shayan Ahmad.jpg', 1),
(2, 'Tayyab Jan', 'kaka', '2018-05-14', '2022-06-13', 'tayyab@gmail.com', 'male', '0316-8763563', 'chamkani', 'person_2.jpg', 1),
(3, 'Atiq Khan', 'kaka', '2000-12-23', '2022-06-14', 'atiq@gmail.com', 'male', '0316-8763563', 'peshawar', 'person_3.jpg', 1),
(7, 'munim', 'auncle', '2002-02-05', '2022-06-16', 'munim@gmail.com', 'male', '0312-6534566', 'peshawar', 'person_4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `tId` int(11) NOT NULL,
  `tName` varchar(50) NOT NULL,
  `tUserName` varchar(50) NOT NULL,
  `tPassword` varchar(50) NOT NULL,
  `tEmail` varchar(50) NOT NULL,
  `tContact` varchar(50) NOT NULL,
  `tCnic` varchar(50) NOT NULL,
  `tGender` varchar(50) NOT NULL,
  `tImage` varchar(200) NOT NULL,
  `tAddress` varchar(50) NOT NULL,
  `tStatus` int(2) NOT NULL DEFAULT 1,
  `rId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`tId`, `tName`, `tUserName`, `tPassword`, `tEmail`, `tContact`, `tCnic`, `tGender`, `tImage`, `tAddress`, `tStatus`, `rId`) VALUES
(1, 'Dawood', '@dawood123', 'dawood321', 'dawood@gmail.com', '0316-8763563', '17202-0404340-7', 'male', 'Black and Pink Crypto Secrets YouTube Thumbnail.jpg', 'Shabqadar', 1, 1),
(2, 'umair khaliq', '@umair', 'umair321', 'umair@gmail.com', '0316-8763563', '17302-7845639-7', 'male', 'Blue Yellow Simple How to Be Successful Youtube Thumbnail.jpg', 'nowshera', 1, 2),
(4, 'shahzad', '@shahzad', '1234', 'shahzad@gmail.com', '0344-5623533', '324567890-98', 'male', 'make_img.jpg', 'taru', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`clId`);

--
-- Indexes for table `tblclassassignteacher`
--
ALTER TABLE `tblclassassignteacher`
  ADD PRIMARY KEY (`ctId`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `tblstudentclass`
--
ALTER TABLE `tblstudentclass`
  ADD PRIMARY KEY (`scId`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`stId`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `clId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblclassassignteacher`
--
ALTER TABLE `tblclassassignteacher`
  MODIFY `ctId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `rId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudentclass`
--
ALTER TABLE `tblstudentclass`
  MODIFY `scId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `stId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
