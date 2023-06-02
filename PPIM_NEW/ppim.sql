-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2022 at 05:42 PM
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
-- Database: `ppim`
--

-- --------------------------------------------------------

--
-- Table structure for table `CAMPUS`
--

CREATE TABLE `CAMPUS` (
  `PPI_NAME` varchar(50) NOT NULL,
  `CAMPUS` varchar(50) NOT NULL,
  `CUR_LIVING` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CAMPUS`
--

INSERT INTO `CAMPUS` (`PPI_NAME`, `CAMPUS`, `CUR_LIVING`, `USERNAME`) VALUES
('PPI AIU', 'Albukhary International University', 'Malaysia', 'PIKA'),
('PPI UTM', 'Universitas Teknologi Malaysia', 'Indonesia', 'Rangga');

-- --------------------------------------------------------

--
-- Table structure for table `IDENTITY`
--

CREATE TABLE `IDENTITY` (
  `STUDENT_ID` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `F_NAME` varchar(50) NOT NULL,
  `L_NAME` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PHONE_NUM` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PASSPORT` varchar(10) NOT NULL,
  `IKAD` varchar(30) NOT NULL,
  `ADD_ID` text NOT NULL,
  `ADD_MY` text NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `IDENTITY`
--

INSERT INTO `IDENTITY` (`STUDENT_ID`, `password`, `F_NAME`, `L_NAME`, `email`, `PHONE_NUM`, `DOB`, `PASSPORT`, `IKAD`, `ADD_ID`, `ADD_MY`, `STATUS`) VALUES
('AIU1283', '9dc35e5f831b31362df395afe145a9c1', 'Billie Ellish', 'O Connor', 'billieelesh@gmail.com', '0183568718', '2002-02-07', 'K819213', '123456', 'Surabaya', 'Kuala Lumpur', 'Penuh'),
('PIKA', '2121', 'Pica ', 'Atmauswan', 'atmauswan9@gmail.com', '0163564267', '2001-01-20', 'B7877563', '1234567', 'Makassar', 'Kedah', ''),
('PPI29173', '902bfab22a2fe56b84ce8ad267884b5b', 'GREGORIUS KEVIN', 'GORAT', 'gregoriuskevin152@gmail.com', '6281328107776', '2002-05-01', 'A1234151', 'DG81910', 'Surabaya', 'Selangor', 'Biasa'),
('Rangga ', '12345', 'Rangga', 'Handitra', 'rangga25@gmail.com', '011345789', '2002-03-19', 'C654987', '098765', 'Jakarta Barat', 'Selangor', ''),
('TP058475', 'a', 'a', 'a', 'a', '6281328107776', '2005-07-03', 'a', 'a', 'SUB', 'A', 'Biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CAMPUS`
--
ALTER TABLE `CAMPUS`
  ADD PRIMARY KEY (`PPI_NAME`);

--
-- Indexes for table `IDENTITY`
--
ALTER TABLE `IDENTITY`
  ADD PRIMARY KEY (`STUDENT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
