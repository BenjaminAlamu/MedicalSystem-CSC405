-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 01:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11
=======
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2018 at 08:03 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f

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

<<<<<<< HEAD
CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass_word` varchar(10) NOT NULL,
  `staff_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
DROP TABLE IF EXISTS `login_info`;
CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pass_word` varchar(10) NOT NULL,
  `staff_type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f

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
-- Table structure for table `patient_bio`
--

CREATE TABLE `patient_bio` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phonenum` varchar(15) NOT NULL,
<<<<<<< HEAD
  `address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
  `address` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f

--
-- Dumping data for table `patient_bio`
--

INSERT INTO `patient_bio` (`id`, `firstname`, `lastname`, `phonenum`, `address`) VALUES
(1, 'Christian', 'Daniels', '08011111111', '24, Festac Drive Mile 2'),
<<<<<<< HEAD
(2, 'Asaph', 'Mic', '08022222222', 'F206, Enijokwu Hall Unilag');
=======
(2, 'Asaph', 'Mic', '08022222222', 'F206, Enijokwu Hall Unilag'),
(3, 'Daniel', 'Abudu', '08135608364', 'Unilag road, Akoka, Yaba, Lagos'),
(6, '$firstName', '$lastName', '$phoneNo', '$address'),
(7, '', '', '08135608364', 'Unilag road, Akoka, Yaba, Lagos'),
(8, '', '', '08135608364', 'Unilag road, Akoka, Yaba, Lagos');
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f

-- --------------------------------------------------------

--
-- Table structure for table `staff_bio`
--

CREATE TABLE `staff_bio` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `staff_type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_bio`
--

INSERT INTO `staff_bio` (`id`, `firstname`, `lastname`, `phonenumber`, `address`, `staff_type`, `username`) VALUES
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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

<<<<<<< HEAD
--
-- Indexes for table `patient_bio`
--
ALTER TABLE `patient_bio`
  ADD PRIMARY KEY (`id`);
=======
DROP TABLE IF EXISTS `staff_bio`;
CREATE TABLE IF NOT EXISTS `staff_bio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `homeaddress` varchar(200) NOT NULL,
  `staff_type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f

--
-- Indexes for table `staff_bio`
--
ALTER TABLE `staff_bio`
  ADD PRIMARY KEY (`id`);

<<<<<<< HEAD
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_bio`
--
ALTER TABLE `patient_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_bio`
--
ALTER TABLE `staff_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
INSERT INTO `staff_bio` (`id`, `firstname`, `lastname`, `phonenumber`, `homeaddress`, `staff_type`, `username`) VALUES
(1, 'Benjamin ', 'Alamu', '08103374289', 'Lagos', 'admin', 'admin1'),
(2, 'Daniel', 'Abudu', '08011111111', 'Mariere Hall, Unilag', 'admin', 'admin2'),
(3, 'Amaka', 'Ezeoke', '08022222222', 'Fagunwa Hall, Unilag', 'doctor', 'doc1'),
(4, 'Nifise', 'Oduduwa', '08033333333', 'Somewhere in Lagos', 'doctor', 'doc2'),
(5, 'Christian', 'Daniels', '08044444444', 'Jaja Hall, Unilag', 'supportstaff', 'support1'),
(6, 'Micheal', 'Ejeh', '08055555555', 'Enijokwu Hall, Unilag', 'supportstaff', 'support2');
>>>>>>> a48941005e34cbc6232afeba221dcba77919c62f
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
