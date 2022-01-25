-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2022 at 02:44 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qwikrepairdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointmentID` int NOT NULL AUTO_INCREMENT,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time NOT NULL,
  `appointmentStatus` int NOT NULL DEFAULT '1',
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int NOT NULL,
  `serviceID` int NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`appointmentID`),
  KEY `serviceID` (`serviceID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `appointmentDate`, `appointmentTime`, `appointmentStatus`, `street`, `city`, `state`, `postcode`, `serviceID`, `userID`) VALUES
(12, '2022-01-05', '17:53:09', 4, 'Persiaran Bukit Amalina', 'Kuala Lumpur', 'Wilayah Persekutuan Kuala Lumpur', 54200, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `serviceID` int NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serviceDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`serviceID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `serviceName`, `serviceDescription`, `userID`) VALUES
(6, 'Wall Repair', 'I provide the best wall repair service, have expertise of over 5 years!', 11);

-- --------------------------------------------------------

--
-- Table structure for table `service_review`
--

DROP TABLE IF EXISTS `service_review`;
CREATE TABLE IF NOT EXISTS `service_review` (
  `reviewID` int NOT NULL AUTO_INCREMENT,
  `reviewFeedback` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reviewRating` int NOT NULL,
  `appointmentID` int NOT NULL,
  PRIMARY KEY (`reviewID`),
  KEY `appointmentID` (`appointmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_review`
--

INSERT INTO `service_review` (`reviewID`, `reviewFeedback`, `reviewRating`, `appointmentID`) VALUES
(24, 'The wall repair service is the best, will definitely book an appointment again!', 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `role` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` int DEFAULT NULL,
  `profilePicture` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` int DEFAULT NULL,
  `emailAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date DEFAULT NULL,
  `firstName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `role`, `street`, `city`, `state`, `postcode`, `profilePicture`, `phoneNumber`, `emailAddress`, `password`, `DOB`, `firstName`, `lastName`) VALUES
(9, 'senior', 'Persiaran Bukit Amalina', 'Kuala Lumpur', 'Wilayah Persekutuan Kuala Lumpur', 54200, 'abuBakar', 132083324, 'abu@gmail.com', '$2y$10$wrXYBQPoYxRgEN92jLoN6e/DK1dRsmTjVkQivGVMaf07HwF.Th/k.', '1970-12-14', 'Abu ', 'Bakar'),
(11, 'technician', 'Persiaran Bukit Changkat', 'Cheras', 'Selangor', 45600, 'aliKhan', 145679988, 'ali@gmail.com', '$2y$10$ozAJ6Ca.aGE8m5BzAcFZSO6ZsSNPEN5oFjFgAGgewR6yAsfcUY0Au', '1996-01-06', 'Ali', 'Khan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`serviceID`) REFERENCES `service` (`serviceID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `service_review`
--
ALTER TABLE `service_review`
  ADD CONSTRAINT `service_review_ibfk_1` FOREIGN KEY (`appointmentID`) REFERENCES `appointment` (`appointmentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
