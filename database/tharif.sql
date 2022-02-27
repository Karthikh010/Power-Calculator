-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 06:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tharif`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `UName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `UName`, `Password`) VALUES
(1, 'KSEB', 'kseb');

-- --------------------------------------------------------

--
-- Table structure for table `subsidy_tharif1`
--

CREATE TABLE `subsidy_tharif1` (
  `ID` int(11) NOT NULL,
  `MIN` int(11) DEFAULT NULL,
  `MAX` int(11) DEFAULT NULL,
  `SUBRATE` double DEFAULT NULL,
  `SUBCALCRATE` double DEFAULT NULL,
  `SUBFIXRATE` int(11) DEFAULT NULL,
  `TABLESEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subsidy_tharif1`
--

INSERT INTO `subsidy_tharif1` (`ID`, `MIN`, `MAX`, `SUBRATE`, `SUBCALCRATE`, `SUBFIXRATE`, `TABLESEL`) VALUES
(1, 0, 40, 0.35, 0, 20, 1),
(2, 40, 120, 0.5, 14, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tharif1`
--

CREATE TABLE `tharif1` (
  `ID` int(11) NOT NULL,
  `CONSMIN` int(11) DEFAULT NULL,
  `CONSMAX` int(11) DEFAULT NULL,
  `SFIX` int(11) DEFAULT NULL,
  `TFIX` int(11) DEFAULT NULL,
  `ERATE` float DEFAULT NULL,
  `LOAD1` int(11) DEFAULT NULL,
  `BPL` int(11) DEFAULT NULL,
  `TELES` int(11) DEFAULT NULL,
  `NONTELES` int(11) DEFAULT NULL,
  `TELEFIX` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif1`
--

INSERT INTO `tharif1` (`ID`, `CONSMIN`, `CONSMAX`, `SFIX`, `TFIX`, `ERATE`, `LOAD1`, `BPL`, `TELES`, `NONTELES`, `TELEFIX`) VALUES
(1, 0, 40, 0, 0, 1.5, 1000, 1, 0, 0, 0),
(2, 0, 50, 35, 90, 3.15, 0, 0, 1, 0, 0),
(3, 50, 100, 45, 90, 3.7, 0, 0, 1, 0, 157.5),
(4, 100, 150, 55, 100, 4.8, 0, 0, 1, 0, 342.5),
(5, 150, 200, 70, 100, 6.4, 0, 0, 1, 0, 582.5),
(6, 200, 250, 80, 100, 7.6, 0, 0, 1, 0, 902.5),
(7, 250, 300, 100, 110, 5.8, 0, 0, 0, 1, 0),
(8, 300, 350, 110, 110, 6.6, 0, 0, 0, 1, 0),
(9, 350, 400, 120, 120, 6.9, 0, 0, 0, 1, 0),
(10, 400, 500, 130, 130, 7.1, 0, 0, 0, 1, 0),
(11, 500, 5000, 150, 150, 7.9, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tharif2`
--

CREATE TABLE `tharif2` (
  `ID` int(11) NOT NULL,
  `SFIX` int(11) DEFAULT NULL,
  `TFIX` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif2`
--

INSERT INTO `tharif2` (`ID`, `SFIX`, `TFIX`, `ERATE`) VALUES
(1, 50, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tharif4`
--

CREATE TABLE `tharif4` (
  `ID` int(11) NOT NULL,
  `LOADMIN` int(11) DEFAULT NULL,
  `LOADMAX` int(11) DEFAULT NULL,
  `FIXED` int(11) DEFAULT NULL,
  `ADDFIXED` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL,
  `SELTABLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif4`
--

INSERT INTO `tharif4` (`ID`, `LOADMIN`, `LOADMAX`, `FIXED`, `ADDFIXED`, `ERATE`, `SELTABLE`) VALUES
(1, 0, 10, 0, 120, 5.65, 1),
(2, 11, 20, 75, 0, 5.65, 1),
(3, 21, 100, 170, 0, 5.75, 1),
(4, 0, 10, 0, 150, 6.2, 2),
(5, 11, 20, 100, 0, 6.2, 2),
(6, 21, 100, 170, 0, 6.25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tharif5`
--

CREATE TABLE `tharif5` (
  `ID` int(11) NOT NULL,
  `FIXED` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif5`
--

INSERT INTO `tharif5` (`ID`, `FIXED`, `ERATE`) VALUES
(1, 10, 2.3),
(2, 10, 2.8);

-- --------------------------------------------------------

--
-- Table structure for table `tharif6`
--

CREATE TABLE `tharif6` (
  `ID` int(11) NOT NULL,
  `CONSMIN` int(11) DEFAULT NULL,
  `CONSMAX` int(11) DEFAULT NULL,
  `FIXED` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL,
  `SFIX` int(11) DEFAULT NULL,
  `TFIX` int(11) DEFAULT NULL,
  `SELTABLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif6`
--

INSERT INTO `tharif6` (`ID`, `CONSMIN`, `CONSMAX`, `FIXED`, `ERATE`, `SFIX`, `TFIX`, `SELTABLE`) VALUES
(1, 0, 500, 65, 5.7, 0, 0, 1),
(2, 501, 5000, 65, 6.5, 0, 0, 1),
(3, 0, 500, 80, 6.3, 0, 0, 2),
(4, 501, 5000, 80, 7, 0, 0, 2),
(5, 0, 500, 180, 7, 0, 0, 3),
(6, 501, 5000, 180, 8.5, 0, 0, 3),
(7, 0, 5000, 35, 2.1, 0, 0, 4),
(8, 0, 50, 0, 3.4, 40, 100, 5),
(9, 51, 100, 0, 4.4, 40, 100, 5),
(10, 101, 200, 0, 5.1, 40, 100, 5),
(11, 201, 5000, 0, 6.8, 40, 100, 5),
(12, 0, 100, 0, 5.8, 70, 140, 6),
(13, 101, 200, 0, 6.5, 70, 140, 6),
(14, 201, 300, 0, 7.2, 70, 140, 6),
(15, 301, 500, 0, 7.8, 70, 140, 6),
(16, 501, 5000, 0, 9, 70, 140, 6),
(17, 0, 500, 0, 5.7, 70, 140, 7),
(18, 501, 1000, 0, 6.5, 70, 140, 7),
(19, 1001, 2000, 0, 7.5, 70, 140, 7),
(20, 2001, 5000, 0, 8.5, 70, 140, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tharif7`
--

CREATE TABLE `tharif7` (
  `ID` int(11) NOT NULL,
  `CONSMIN` int(11) DEFAULT NULL,
  `CONSMAX` int(11) DEFAULT NULL,
  `FIXED` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL,
  `SFIX` int(11) DEFAULT NULL,
  `TFIX` int(11) DEFAULT NULL,
  `SELTABLE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif7`
--

INSERT INTO `tharif7` (`ID`, `CONSMIN`, `CONSMAX`, `FIXED`, `ERATE`, `SFIX`, `TFIX`, `SELTABLE`) VALUES
(1, 0, 100, 0, 6, 70, 140, 1),
(2, 101, 200, 0, 6.7, 70, 140, 1),
(3, 201, 300, 0, 7.4, 70, 140, 1),
(4, 301, 500, 0, 8, 70, 140, 1),
(5, 501, 5000, 0, 9.3, 70, 140, 1),
(6, 0, 100, 50, 5.2, 0, 0, 2),
(7, 101, 200, 50, 6, 0, 0, 2),
(8, 201, 300, 50, 6.6, 0, 0, 2),
(9, 0, 1000, 100, 6, 0, 0, 3),
(10, 1001, 5000, 100, 7.4, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tharif9`
--

CREATE TABLE `tharif9` (
  `ID` int(11) NOT NULL,
  `FIXED` int(11) DEFAULT NULL,
  `ERATE` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tharif9`
--

INSERT INTO `tharif9` (`ID`, `FIXED`, `ERATE`) VALUES
(1, 550, 12.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subsidy_tharif1`
--
ALTER TABLE `subsidy_tharif1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif1`
--
ALTER TABLE `tharif1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif2`
--
ALTER TABLE `tharif2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif4`
--
ALTER TABLE `tharif4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif5`
--
ALTER TABLE `tharif5`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif6`
--
ALTER TABLE `tharif6`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif7`
--
ALTER TABLE `tharif7`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tharif9`
--
ALTER TABLE `tharif9`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tharif1`
--
ALTER TABLE `tharif1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
