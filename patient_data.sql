-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 07:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_report_data`
--

CREATE TABLE `patient_report_data` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_report_data`
--

INSERT INTO `patient_report_data` (`ID`, `name`, `age`, `weight`, `email`, `created_at`, `file`) VALUES
(4, 'harshit chandra', 2000, 105, 'harshit.mutton@gmail.com', '2023-07-11 20:58:18', ''),
(5, 'Jyoti', 2012, 55, 'jyoti.singh@gmail.com', '2023-07-11 21:47:33', ''),
(6, 'har', 2545, 45, 'harjyo@gmail.com', '2023-07-11 21:52:17', ''),
(7, 'Joy', 1998, 43, 'jyoti.singh.sb@gmail.com', '2023-07-11 22:02:58', 0x4172726179),
(8, 'harshit', 2000, 66, 'harshit.chand@gmail.com', '2023-07-11 22:05:29', 0x4172726179),
(10, 'Jo', 2001, 58, 'jo.abc@gmail.com', '2023-07-12 08:38:13', 0x4172726179),
(11, 'Jyoti', 2008, 89, 'singh@gmail.com', '2023-07-12 16:41:40', 0x4172726179);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_report_data`
--
ALTER TABLE `patient_report_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_report_data`
--
ALTER TABLE `patient_report_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
