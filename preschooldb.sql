-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 09:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preschooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserType`) VALUES
(2, 'Admin', 'admin', 181845546, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-03-16 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `teacherId` int(10) DEFAULT NULL,
  `className` varchar(255) DEFAULT NULL,
  `ageGroup` varchar(150) DEFAULT NULL,
  `classTiming` varchar(120) DEFAULT NULL,
  `capacity` varchar(10) DEFAULT NULL,
  `feacturePic` varchar(255) DEFAULT NULL,
  `addedBy` varchar(150) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `teacherId`, `className`, `ageGroup`, `classTiming`, `capacity`, `feacturePic`, `addedBy`, `postingDate`) VALUES
(7, 6, 'Math Fun', '3-4 Year', '9-10 AM', '20', '76a96a810d5b5ade05e63fc964429e221687676489.jpg', 'admin', '2023-06-25 07:01:29'),
(8, 8, 'Drawing Fun', '2-3 Year', '11-12 PM', '25', '6bbbf00d0b9a055bfbd9d2f2f8e0f86d1687682007.jpg', 'admin', '2023-06-25 08:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblclassroutine`
--

CREATE TABLE `tblclassroutine` (
  `id` int(11) NOT NULL,
  `teacherName` varchar(50) NOT NULL,
  `className` varchar(50) NOT NULL,
  `ageGroup` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclassroutine`
--

INSERT INTO `tblclassroutine` (`id`, `teacherName`, `className`, `ageGroup`, `day`, `time`, `room`) VALUES
(4, 'Mr. Kabir', 'Drawing Fun', '2-3 Year', 'Saturday', '11-12 PM', 352),
(6, 'Mst. Rokeya', 'Math Fun', '2-3 Year', 'Sunday', '2-3 PM', 369);

-- --------------------------------------------------------

--
-- Table structure for table `tblenrollment`
--

CREATE TABLE `tblenrollment` (
  `id` int(11) NOT NULL,
  `enrollmentNumber` bigint(12) DEFAULT NULL,
  `fatherName` varchar(120) DEFAULT NULL,
  `motherName` varchar(120) DEFAULT NULL,
  `parentmobNo` bigint(12) DEFAULT NULL,
  `parentEmail` varchar(150) DEFAULT NULL,
  `childName` varchar(150) DEFAULT NULL,
  `childAge` varchar(200) DEFAULT NULL,
  `enrollProgram` varchar(255) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `enrollStatus` varchar(100) DEFAULT NULL,
  `officialRemark` mediumtext DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblenrollment`
--

INSERT INTO `tblenrollment` (`id`, `enrollmentNumber`, `fatherName`, `motherName`, `parentmobNo`, `parentEmail`, `childName`, `childAge`, `enrollProgram`, `message`, `postingDate`, `enrollStatus`, `officialRemark`, `updationDate`) VALUES
(6, 327231346, 'Mr. Hasan', 'mrsakhi@gmail.com', 1588845521, 'mrsakhi@gmail.com', 'Sumiya', '3-4 Year', 'PlayGroup-1.8 to 3 years', 'I want to admit my children', '2023-06-25 08:39:42', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblexamroutine`
--

CREATE TABLE `tblexamroutine` (
  `id` int(11) NOT NULL,
  `teacherName` varchar(55) NOT NULL,
  `className` varchar(55) NOT NULL,
  `ageGroup` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblexamroutine`
--

INSERT INTO `tblexamroutine` (`id`, `teacherName`, `className`, `ageGroup`, `date`, `time`, `room`) VALUES
(1, 'Mr. Kabir', 'Math Fun', '2-3 Year', '2023-07-21', '09:10:00', 312),
(3, 'Roksana Begum', 'Drawing Fun', '18 Month-3 Year', '2023-07-20', '10:00:00', 636),
(4, 'Mr. Kabir', 'Math Fun', '5-6 Year', '2023-07-22', '00:30:00', 169),
(5, 'Mst. Rokeya', 'Math Fun', '4-5 Year', '2023-07-28', '13:30:00', 220);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About us', 'Little Learners Academie\'s mission is to develop curious, knowledgeable and caring young individuals, who will be equipped to tackle head-on the challenges of our modern-day \"global village.\" They will aspire to become responsible and productive citizens, who will contribute to their communities, and embrace and respect people from other cultures and walks of life.\r\n\r\nLittle Learners Academy was established in June 2023 by Sovrin Binte Karima & Azmeem Khanam. It was founded to provide a balanced and well-rounded education for students, using English as the primary medium of instruction but placing equal emphasis on Bangla.\r\n\r\nThe customized curriculum builds the knowledge, skills and attitudes that students need to succeed in their academic and professional careers after school. Students are encouraged to challenge themselves, their peers and their teachers in a setting that gives them confidence and builds their skills to think independently.\r\n', NULL, NULL, '2023-07-07 10:09:39'),
(2, 'contactus', 'Contact Us', 'Baridhara, Dhaka- 1212', 'LittleLearnersAcademy@gmail.com', 185545454, '2023-06-25 07:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `teacherEmail` varchar(255) DEFAULT NULL,
  `teacherMobileNo` bigint(11) DEFAULT NULL,
  `teacherSubject` varchar(255) DEFAULT NULL,
  `teacherPic` varchar(255) DEFAULT NULL,
  `AddedBy` varchar(120) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`id`, `fullName`, `teacherEmail`, `teacherMobileNo`, `teacherSubject`, `teacherPic`, `AddedBy`, `regDate`) VALUES
(6, 'Mr. Kabir', 'Kabir123@gmail.com', 1865221455, 'English Teacher', '1fb1f26afd2e56833ee46ec8dc5abe101688723609.jpg', 'admin', '2023-06-25 05:16:32'),
(7, 'Roksana Begum', 'roksana@gmail.com', 1688552227, 'Math Teacher', '2fa900054c9cc587a94eac03771365fd1688723625.jpg', 'admin', '2023-06-25 05:21:09'),
(8, 'Mst. Rokeya', 'Rokeya@gmail.com', 1866564544, 'Drawing Teacher', 'ffe2935af578ff5240d36e9cf75234691688724052.jpg', 'admin', '2023-06-25 08:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `id` int(11) NOT NULL,
  `gurdianName` varchar(220) DEFAULT NULL,
  `gurdianEmail` varchar(220) DEFAULT NULL,
  `childName` varchar(225) DEFAULT NULL,
  `childAge` varchar(120) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `officeRemark` mediumtext DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `visitTime` varchar(220) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`id`, `gurdianName`, `gurdianEmail`, `childName`, `childAge`, `message`, `officeRemark`, `status`, `visitTime`, `postingDate`, `updationDate`) VALUES
(3, 'Mr. Alam ', 'alam@gmail.com', 'Jenny', '3-4 Year', 'Hey There. I am mr. Alam. I want to talk about my daughters schooling in your school', 'I will meet this person.', 'Not-Visited', '2023-06-30T10:00', '2023-06-25 06:46:57', '2023-06-25 06:48:29'),
(4, 'Mr. Khan', 'khan@gmail.com', 'Sumiya', '3-4 Year', 'I want to admit my kids to your school. can you please meet me.', NULL, NULL, '2023-06-29T10:00', '2023-06-25 08:35:10', NULL),
(5, 'sristy', 'sistykarima@gmail.com', 'puspa', '4-5 Year', 'i want to talk about your accademy', NULL, NULL, '2023-07-06T10:10', '2023-07-07 06:58:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclassroutine`
--
ALTER TABLE `tblclassroutine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblenrollment`
--
ALTER TABLE `tblenrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblexamroutine`
--
ALTER TABLE `tblexamroutine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblclassroutine`
--
ALTER TABLE `tblclassroutine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblenrollment`
--
ALTER TABLE `tblenrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblexamroutine`
--
ALTER TABLE `tblexamroutine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
