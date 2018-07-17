-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 07:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` int(80) NOT NULL,
  `age` int(80) NOT NULL,
  `roll` int(80) NOT NULL,
  `blood` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `age`, `roll`, `blood`) VALUES
(1, 'Imtiaz Epu', 'info@imtiazepu.com', 1616567207, 30, 1, 'O-'),
(21, 'Emteaz Ahmed', 'emteaz_ahmed_epu@gmail.com', 1812824880, 29, 2, 'O+'),
(20, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(19, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(18, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(17, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(16, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(14, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(13, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(22, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(23, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(24, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(25, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(27, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(29, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+'),
(30, 'Thorn Venen', 'Thorn_Venen@gmail.com', 123456789, 45, 32, 'AB+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
