-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 08:22 PM
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
-- Database: `resource_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Equipment'),
(2, 'Laboratory'),
(3, 'Room'),
(4, 'Auditorium'),
(12, 'office');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `ResourceID` int(11) NOT NULL,
  `ResourceName` varchar(255) NOT NULL,
  `ResourceDescription` text NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ResourceID`, `ResourceName`, `ResourceDescription`, `CategoryID`) VALUES
(1, 'Projector 1', 'High-definition projector', 1),
(2, 'Projector 2', 'High-definition projector', 1),
(3, 'HDMI', 'HDMI cable', 1),
(4, 'TV', '42-inch television', 1),
(5, 'Whiteboard', 'Portable whiteboard', 1),
(6, 'Lab 1', 'Computer lab', 2),
(7, 'Lab 2', 'Science lab', 2),
(8, 'Lec 1', 'Lecture room 1', 3),
(9, 'Lec 2', 'Lecture room 2', 3),
(10, 'Lec 3', 'Lecture room 3', 3),
(11, 'Lec 4', 'Lecture room 4', 3),
(15, 'office 1', 'faculty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resource_schedule`
--

CREATE TABLE `resource_schedule` (
  `id` int(11) NOT NULL,
  `resource_name` varchar(255) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resource_schedule`
--

INSERT INTO `resource_schedule` (`id`, `resource_name`, `day`, `time_slot`, `availability`) VALUES
(1, 'Projector 1', 'Monday', '7:00 AM - 9:00 AM', 'Available'),
(2, 'HDMI', 'Monday', '9:00 AM - 11:00 AM', 'Not Available'),
(3, 'TV', 'Tuesday', '1:00 PM - 3:00 PM', 'Not Available'),
(4, 'Projector 2', 'Wednesday', '9:00 AM - 11:00 AM', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `ScheduleID` int(11) NOT NULL,
  `ResourceID` int(11) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`ScheduleID`, `ResourceID`, `StartTime`, `EndTime`) VALUES
(1, 1, '2024-12-02 07:00:00', '2024-12-02 08:30:00'),
(2, 10, '2024-12-05 07:35:00', '2024-12-06 09:35:00'),
(3, 4, '2024-12-01 07:52:00', '2024-12-01 07:53:00'),
(5, 15, '2024-12-01 22:54:00', '2024-12-21 10:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Section` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UserType` enum('Admin','SubAdmin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Username`, `Course`, `Section`, `Password`, `UserType`) VALUES
(1, 'Marie', 'Tingas', 'Riee', 'BSCS ', '3-C', '$2y$10$Qo5qMpzrYaWuymFgVzZ5S.zQicxHm.HFo0xRC8n1F7IZUlubD37Zu', 'Admin'),
(2, 'Joy', 'Alviar', 'Ligaya', 'BSCS ', '3-C', '$2y$10$pOddJs5D1Ug9yZrCJNylM.0AcXVXlSd9D3ROzPb2K0Nqk7KBv.DWy', 'Admin'),
(3, 'Marie', 'Ello', 'Rieeee', 'BSCS ', '3-C', '$2y$10$jMbpF2fVS2p6fdL/XWnUR.1blwGw/Qe4jGCKsvhEnE95AV3IvIvJa', 'Admin'),
(4, 'Bom', 'Kundom', 'Bomski', 'BSIT', '3-C', '$2y$10$j8VBvZknUs7/tOpbvzote.m1G4/T1EH6g9yoewhOrNggupMwIxtdO', 'Admin'),
(5, 'Marie Colleen', 'Tingas', 'JustcallmeC', 'BSCS ', '3-C', '$2y$10$YFX12I113/Qdjr5u33bP0u4YfwH1KdZmPMa.4yTGaQYDOkyEgPldC', 'Admin'),
(6, 'Marie', 'Tingas', 'Leleng', 'BSIT', '3-c', '$2y$10$38jqul.lyVkvv5jUXyAzJ.QvitMPnnlFHt7lfNMwd7DlZsr5/UVUG', 'Admin'),
(7, NULL, NULL, 'Colleen', NULL, NULL, '$2y$10$2NtUcAqBbOSoNxR8VMN7cOvZEGa3T8zTJcdv/6BYbnSIseuzS7pnS', 'Admin'),
(10, NULL, NULL, 'Princess', NULL, NULL, '$2y$10$VIZUlP.LpJh0ymcTIqMJROtLYDcJ7UxYCvyY.WnrCRbhGlmMWHJFC', 'Admin'),
(11, NULL, NULL, 'Cess', NULL, NULL, '$2y$10$kvycaSlRqUI6A8fA7ywwpegMXVP3PohLG9hqKoFWyBkKiLl3RTI3i', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `usersadmin`
--

CREATE TABLE `usersadmin` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserType` enum('Admin','SubAdmin','Student','Teacher') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`ResourceID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `resource_schedule`
--
ALTER TABLE `resource_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`ScheduleID`),
  ADD KEY `ResourceID` (`ResourceID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ResourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resource_schedule`
--
ALTER TABLE `resource_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`ResourceID`) REFERENCES `resources` (`ResourceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
