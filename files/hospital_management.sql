-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 01:46 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass_word` varchar(10) NOT NULL,
  `staff_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `pass_word`, `staff_type`) VALUES
(1, 'admin1', 'admin1', 'admin'),
(2, 'admin2', 'admin2', 'admin'),
(3, 'doc1', 'doc1', 'doctor'),
(4, 'doc2', 'doc2', 'doctor'),
(5, 'supportstaff1', 'support1', 'supportstaff'),
(6, 'supportstaff2', 'support2', 'supportstaff');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecord`
--

CREATE TABLE `patientrecord` (
  `complaintID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `staffID` int(11) NOT NULL,
  `staffName` varchar(50) DEFAULT NULL,
  `patientComplaint` varchar(200) DEFAULT NULL,
  `doctorsNotes` varchar(200) DEFAULT NULL,
  `prescription` varchar(200) DEFAULT NULL,
  `sessionCost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`complaintID`, `patientID`, `staffID`, `staffName`, `patientComplaint`, `doctorsNotes`, `prescription`, `sessionCost`) VALUES
(6, 3, 4, 'Nifise Oduduwa', 'School is a scam', 'So you are just knowing', 'Painkillers Suppliments ', 5500),
(7, 3, 4, 'Nifise Oduduwa', 'Test twp', 'Test two doctor notes', 'Painkillers Surgery ', 62500),
(8, 2, 3, 'Amaka Ezeoke', 'Testing another doctor', 'Doctor Notes', 'Suppliments Surgery ', 53800);

-- --------------------------------------------------------

--
-- Table structure for table `patient_bio`
--

CREATE TABLE `patient_bio` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
  `address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_bio`
--

INSERT INTO `patient_bio` (`id`, `firstname`, `lastname`, `phonenum`, `address`) VALUES
(1, 'Christian', 'Daniels', '08011111111', '24, Festac Drive Mile 2'),
(2, 'Asaph', 'Mic', '08022222222', 'F206, Enijokwu Hall Unilag'),
(3, 'Daniel', 'Abudu', '08135608364', 'Unilag road, Akoka, Yaba, Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_bio`
--

CREATE TABLE `staff_bio` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `homeaddress` varchar(200) NOT NULL,
  `staff_type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_bio`
--

INSERT INTO `staff_bio` (`id`, `firstname`, `lastname`, `phonenumber`, `homeaddress`, `staff_type`, `username`) VALUES
(1, 'Benjamin ', 'Alamu', '08103374289', 'Lagos', 'admin', 'admin1'),
(2, 'Daniel', 'Abudu', '08011111111', 'Mariere Hall, Unilag', 'admin', 'admin2'),
(3, 'Amaka', 'Ezeoke', '08022222222', 'Fagunwa Hall, Unilag', 'doctor', 'doc1'),
(4, 'Nifise', 'Oduduwa', '08033333333', 'Somewhere in Lagos', 'doctor', 'doc2'),
(5, 'Christian', 'Daniels', '08044444444', 'Jaja Hall, Unilag', 'supportstaff', 'support1'),
(6, 'Micheal', 'Ejeh', '08055555555', 'Enijokwu Hall, Unilag', 'supportstaff', 'support2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrecord`
--
ALTER TABLE `patientrecord`
  ADD PRIMARY KEY (`complaintID`);

--
-- Indexes for table `patient_bio`
--
ALTER TABLE `patient_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_bio`
--
ALTER TABLE `staff_bio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patientrecord`
--
ALTER TABLE `patientrecord`
  MODIFY `complaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patient_bio`
--
ALTER TABLE `patient_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_bio`
--
ALTER TABLE `staff_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
