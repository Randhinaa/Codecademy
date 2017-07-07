-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 07:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicians`
--

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `musianid` varchar(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `genre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`musianid`, `name`, `genre`) VALUES
('1000000001', 'Avril Lavign', 'Pop'),
('1000000002', 'Taylor Swift', 'Country'),
('1000000003', 'Chinmay', 'Classical'),
('1000000004', 'Shreya Ghoshal', 'Folk'),
('1000000005', 'Selena Gomaz', 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `perfomanceId` varchar(13) NOT NULL,
  `month-year` date NOT NULL,
  `musicianid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`perfomanceId`, `month-year`, `musicianid`) VALUES
('2000000000001', '2017-02-28', '1000000001'),
('2000000000002', '2017-01-25', '1000000002'),
('2000000000003', '2017-02-25', '1000000004'),
('2000000000004', '2017-05-25', '1000000005'),
('2000000000005', '2017-01-22', '1000000005'),
('2000000000006', '2017-05-03', '1000000001'),
('2000000000007', '2017-03-08', '1000000002'),
('2000000000008', '2017-03-29', '1000000003'),
('2000000000009', '2017-04-07', '1000000003'),
('2000000000010', '2017-04-12', '1000000001'),
('2000000000011', '2017-06-06', '1000000004'),
('2000000000012', '2017-06-22', '1000000002'),
('2000000000013', '2017-07-19', '1000000004'),
('2000000000014', '2017-07-11', '1000000005'),
('2000000000015', '2017-08-10', '1000000005'),
('2000000000016', '2017-08-26', '1000000001'),
('2000000000017', '2017-09-07', '1000000002'),
('2000000000018', '2017-09-15', '1000000003'),
('2000000000019', '2017-10-22', '1000000003'),
('2000000000020', '2017-10-12', '1000000001'),
('2000000000021', '2017-11-02', '1000000002'),
('2000000000022', '2017-11-24', '1000000003'),
('2000000000023', '2017-12-15', '1000000001'),
('2000000000024', '2017-12-31', '1000000003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`musianid`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`perfomanceId`),
  ADD KEY `index` (`musicianid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `performance`
--
ALTER TABLE `performance`
  ADD CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`musicianid`) REFERENCES `musician` (`musianid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
