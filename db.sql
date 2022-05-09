-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2022 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparring`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`) VALUES
(1, 'SE', 'Software Engineering '),
(2, 'IT', 'Information Technology'),
(3, 'IS', 'Information Systems'),
(4, 'DB', 'Digital Business'),
(5, 'IF', 'Informatics'),
(6, 'DS', 'Data Science'),
(7, 'EE', 'Electrical Engineering'),
(8, 'CE', 'Computer Engineering'),
(9, 'TE', 'Telecommunication Engineering'),
(10, 'IE', 'Industrial Engineering'),
(11, 'LE', 'Logistics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `mnp` int(255) NOT NULL,
  `pur` int(255) NOT NULL,
  `zul` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `text`, `mnp`, `pur`, `zul`) VALUES
(1, 'IoT', 1, 5, 10),
(2, 'visualization', 3, 3, 3),
(3, 'Surabaya', 1, 12, 3),
(4, 'Application', 1, 7, 10),
(5, 'dummy', 34, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `key_col_name` varchar(255) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `nidn`, `key_col_name`, `department_id`, `nip`, `email`, `phone`) VALUES
(1, 'Muhammad Nizar, S.Kom, M.Kom', '1234567890', 'mnp', 3, '1234567890', 'nizar@ittelkom-sby.ac.id', '081234567890'),
(2, 'Purnama Anaking, S.Kom, M.Kom', '0987654321', 'pur', 3, '0987654321', 'purnama.anaking@ittelkom-sby.ac.id', '082345678912'),
(3, 'Muhammad Dzulfikar, S.Kom, M.Kom', '345678123', 'zul', 3, '12345609876', 'dzulfikar@ittelkom-sby.ac.id', '089876543214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_department` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `fk_department` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
