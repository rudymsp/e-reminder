-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 02:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ematch`
--

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL,
  `nama_reminder` varchar(255) NOT NULL,
  `jenis_reminder` varchar(20) NOT NULL,
  `info_reminder` varchar(10000) NOT NULL,
  `tanggal_batas` date NOT NULL,
  `email_atasan` varchar(80) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `email3` varchar(5) DEFAULT NULL,
  `email2` varchar(5) DEFAULT NULL,
  `email1` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `nama_reminder`, `jenis_reminder`, `info_reminder`, `tanggal_batas`, `email_atasan`, `dept`, `email3`, `email2`, `email1`) VALUES
(1, 'Pajak', '2', 'davasvlasvnkNVLAV  SFSAFASFASKLDskfsfaslfal ddvdsgdsgdsbdsbdsbdvdsvsd ddsgds                                            ', '2017-11-17', 'rudy_s@match-advertising.com', '1', NULL, NULL, NULL),
(2, '', '6', '                                            ', '2017-11-20', '', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
