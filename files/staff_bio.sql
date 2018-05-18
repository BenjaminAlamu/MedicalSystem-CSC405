-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 12:31 AM
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
-- Indexes for table `staff_bio`
--
ALTER TABLE `staff_bio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_bio`
--
ALTER TABLE `staff_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
