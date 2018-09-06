-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 05:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `id` int(8) NOT NULL,
  `password` varchar(30) NOT NULL,
  `lastqualification` text NOT NULL,
  `semester` text NOT NULL,
  `batchyear` varchar(4) NOT NULL,
  `passingyear` varchar(4) NOT NULL,
  `organization` varchar(20) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `phone` int(16) NOT NULL,
  `presentaddress` varchar(50) NOT NULL,
  `parmanentaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`firstname`, `lastname`, `email`, `id`, `password`, `lastqualification`, `semester`, `batchyear`, `passingyear`, `organization`, `occupation`, `designation`, `phone`, `presentaddress`, `parmanentaddress`) VALUES
('', '', '', 454, '', 'HSC', 'Spring', '', '', '', '', '', 0, '', ''),
('', '', '', 3243, '', 'BACHELOR', 'Spring', '', '', '', '', '', 0, '', ''),
('', '', '', 44554, '', 'HSC', 'Spring', '', '', '', '', '', 0, '', ''),
('Rakibur', 'Rimon', 'rakiburrimon@gm', 14303044, '', 'HSC', 'Spring', '2012', '2016', 'CUFL', 'Engineer', 'Dept. Chie', 1762388879, 'E-22/6/ South chayabithi, Joydebpur, Gazipur', 'E-22/6/ South chayabithi, Joydebpur, Gazipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
