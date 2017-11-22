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
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `SCH_ID` int(11) NOT NULL,
  `ID_DEPT` int(11) DEFAULT NULL,
  `SCH_DEPT` varchar(65) NOT NULL,
  `SCH_TITLE` char(100) DEFAULT NULL,
  `SCH_DATE` date DEFAULT NULL,
  `SCH_TIME` time DEFAULT NULL,
  `SCH_INFO` varchar(1024) DEFAULT NULL,
  `SCHDT_INFO` varchar(20000) DEFAULT NULL,
  `STATUS` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`SCH_ID`, `ID_DEPT`, `SCH_DEPT`, `SCH_TITLE`, `SCH_DATE`, `SCH_TIME`, `SCH_INFO`, `SCHDT_INFO`, `STATUS`) VALUES
(1, NULL, '3', 'Test 2', '2017-11-02', '11:53:00', 'vdsvsvss', NULL, NULL),
(2, NULL, '3', 'Test 1', '2017-11-01', '11:54:00', 'sfsfaa', NULL, NULL),
(3, NULL, '5', 'Test 3', '2017-11-01', '11:55:00', 'dfsdfsf', NULL, NULL),
(4, NULL, '3', 'Test 3', '2017-11-01', '14:14:00', 'fsvfsdv', NULL, NULL),
(5, NULL, '3', 'n', '2017-11-15', '14:17:00', 'm', NULL, NULL),
(6, NULL, '3', 'j', '2017-11-22', '14:18:00', 'm', NULL, NULL),
(7, NULL, '4', 'k', '2017-11-30', '14:19:00', 'm', NULL, NULL),
(8, NULL, '4', 'dsf', '2017-11-01', '14:20:00', 'cxgch', NULL, NULL),
(9, NULL, '4', 'R2', '2017-11-01', '14:27:00', 'scascsa', NULL, NULL),
(10, NULL, '6', 'R4', '2017-11-01', '14:28:00', 'sdsaca', NULL, NULL),
(11, NULL, '4', 'Dgb', '2017-11-01', '14:29:00', 'scasca', NULL, NULL),
(12, NULL, '4', 'xz xz', '2017-11-01', '14:29:00', 'csavas', NULL, NULL),
(13, NULL, '4', 'vh', '2017-11-01', '14:32:00', 'bjmbm', NULL, NULL),
(14, NULL, '1,2,4', 'vsdvds', '2017-11-01', '14:32:00', 'ganti', NULL, 'on'),
(15, NULL, '', 'Test 5', '2017-11-01', '15:36:00', 'vnvh', NULL, NULL),
(16, NULL, '', 'Test 6', '2017-11-01', '15:38:00', 'ganti', NULL, NULL),
(17, NULL, '', 'Test 6', '2017-11-01', '15:39:00', 'chchv', NULL, NULL),
(19, NULL, '1,4', 'Test 7', '2017-11-02', '14:31:00', 'Test', 'xcxzvxzvzxvzvz  z ,zcnksnkna,a s . scslasasa\r\nsasansavsav,sav,savksanvksnvknsakvnsavnsvaksascsacsa sdvsdvsvasvasvas asvsavsavsa asvsavsavasvv asasvasv ', 'on'),
(20, NULL, '2', NULL, '2017-11-17', NULL, 'ssfsfaaca                             ', NULL, NULL),
(21, NULL, '2', NULL, '2017-11-15', NULL, 'vsdvsdvdsdvs                                            ', NULL, NULL),
(22, NULL, '2', NULL, '2017-11-17', NULL, 'ffafasf,akf askfas                                            ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`SCH_ID`),
  ADD KEY `FK_R3` (`ID_DEPT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `SCH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
