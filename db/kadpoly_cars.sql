-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 05:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kadpoly_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_admin_info`
--

CREATE TABLE `master_admin_info` (
  `userId` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPhoneNumber` varchar(100) NOT NULL,
  `userDesignation` varchar(50) NOT NULL,
  `userOffice` varchar(100) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userRecodDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_admin_info`
--

INSERT INTO `master_admin_info` (`userId`, `userName`, `userEmail`, `userPhoneNumber`, `userDesignation`, `userOffice`, `userPassword`, `userRecodDate`) VALUES
(0, 'Eno Isaiah', 'eno@eno.com', '08011111111', 'Admin', 'Administrator', '123456', '2022-03-20 00:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `master_user_info`
--

CREATE TABLE `master_user_info` (
  `userId` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPhoneNumber` varchar(100) NOT NULL,
  `userDesignation` varchar(50) NOT NULL,
  `userOffice` varchar(100) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userRecodDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_user_info`
--

INSERT INTO `master_user_info` (`userId`, `userName`, `userEmail`, `userPhoneNumber`, `userDesignation`, `userOffice`, `userPassword`, `userRecodDate`) VALUES
(0, 'Eno Isaiah', 'eno@eno.com', '08011111111', 'Admin', 'Administrator', '123456', '2022-03-20 00:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicleId` int(11) NOT NULL,
  `vehicleBrand` varchar(240) NOT NULL,
  `vehicleColor` varchar(100) NOT NULL,
  `vehiclePlateNumber` varchar(20) NOT NULL,
  `vehicleType` varchar(40) NOT NULL,
  `vehicleOwner` varchar(100) NOT NULL,
  `vehicleOwnerNumber` varchar(20) NOT NULL,
  `vehicleOwnerEmail` varchar(50) NOT NULL,
  `vehicleOwnerOffice` varchar(50) NOT NULL,
  `vehicleStatus` varchar(40) NOT NULL,
  `vehicleRecordBy` int(11) NOT NULL,
  `vehicleRecordDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicleId`, `vehicleBrand`, `vehicleColor`, `vehiclePlateNumber`, `vehicleType`, `vehicleOwner`, `vehicleOwnerNumber`, `vehicleOwnerEmail`, `vehicleOwnerOffice`, `vehicleStatus`, `vehicleRecordBy`, `vehicleRecordDate`) VALUES
(1, 'Toyota', 'Red', 'ABC123DE', 'wagon', 'Eno Isaiah', '0811112222', 'eno@isaiah.eno', 'Administrator', 'Car In', 0, '2022-06-08 14:16:19'),
(2, 'Honda', 'Blue', '321UYT12', 'bus', 'Nathan Chase', '789878987', 'nathan@nat.com', 'EA Sports', 'Car In', 0, '2022-06-08 14:16:26'),
(3, 'Benz', 'Black', '223WALE23', 'salon', 'Wale Walex', '0802536987', 'wale@gmail.com', 'Bursary', 'Car In', 0, '2022-06-08 14:16:32'),
(4, 'Lexus', 'Red', 'ABJ1234', 'salon', 'Israel Idoko', '08033669988', 'israel@idoko.com', 'Exams and records, Computer science', 'Car Out', 0, '2022-06-08 14:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_admin_info`
--
ALTER TABLE `master_admin_info`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `master_user_info`
--
ALTER TABLE `master_user_info`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
