-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2022 at 06:55 PM
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
  `appointmentStatus` int NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int NOT NULL,
  `serviceID` int NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`appointmentID`),
  KEY `serviceID` (`serviceID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `appointmentDate`, `appointmentTime`, `appointmentStatus`, `street`, `city`, `state`, `postcode`, `serviceID`, `userID`) VALUES
(1, '2020-01-23', '12:01:00', 0, 'Setiawangsa', 'KL', 'WPKL', 54200, 1, 9),
(2, '2020-01-21', '07:01:00', 0, 'Setiawangsa', 'KL', 'WPKL', 54200, 1, 9);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `serviceName`, `serviceDescription`, `userID`) VALUES
(1, 'Electronic Repair', 'I can repair electronics', 11);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_review`
--

INSERT INTO `service_review` (`reviewID`, `reviewFeedback`, `reviewRating`, `appointmentID`) VALUES
(1, 'veli good', 3, 1);

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
  `profilePicture` longblob,
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
(9, 'senior', 'Setiawangsa', 'KL', 'KL', 54200, NULL, 132083324, 'gg@gmail.com', '$2y$10$wrXYBQPoYxRgEN92jLoN6e/DK1dRsmTjVkQivGVMaf07HwF.Th/k.', '2022-01-13', 'Yudhish', 'M'),
(11, 'technician', NULL, NULL, NULL, NULL, NULL, NULL, 'technician@gmail.com', '$2y$10$ozAJ6Ca.aGE8m5BzAcFZSO6ZsSNPEN5oFjFgAGgewR6yAsfcUY0Au', NULL, 'Ali', 'Khan');

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
