-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 01:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USER_NAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Mohammed Alfaify', 'admin1@gmail.com', 123),
(2, 'Salim Azibi', 'admin2@gmail.com', 123),
(3, 'Ahmed hakami', 'admin3@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `DONOR_NAME` varchar(50) NOT NULL,
  `BLOOD_TYPE` varchar(5) NOT NULL,
  `AMOUNT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`DONOR_NAME`, `BLOOD_TYPE`, `AMOUNT`) VALUES
('mohamed', 'O+', 3),
('Salem', 'A+', 2),
('Ahmed', 'B+', 4),
('Ahmed', 'B+', 2),
('Ahmed', 'B+', 2),
('fahad', 'A-', 3),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 4),
('Mohammed', 'O+', 3),
('ziad', 'B-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `DONATE_NUMBER` int(10) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BLOOD_TYPE` varchar(10) NOT NULL,
  `AMOUNT` int(10) NOT NULL,
  `BLOOD_DISEASE` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`DONATE_NUMBER`, `USER_NAME`, `GENDER`, `BLOOD_TYPE`, `AMOUNT`, `BLOOD_DISEASE`, `EMAIL`, `STATUS`) VALUES
(1, 'mohamed', 'Male', 'O+', 3, 'no disease', 'mmm@gmail.com', 'wait'),
(2, 'Salem', 'Male', 'A+', 2, 'no disease', 'sss@gmail.com', 'ACCEPTED'),
(3, 'Ahmed', 'Male', 'B+', 4, 'no disease', 'aaa@gmail.com', 'wait'),
(7, 'Mohammed', 'Male', 'O+', 4, 'no disease', 'mmm@gmail.com', 'wait'),
(17, 'ziad', 'Male', 'B-', 3, 'no disease', 'zzz@gmail.com', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(20) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `USER_NAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Khaled', 'emp1@gmail.com', 123),
(2, 'Nasser', 'emp2@gamail.com', 123),
(4, 'Abrar', 'emp3@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `H_ID` int(20) NOT NULL,
  `H_NAME` varchar(100) NOT NULL,
  `H_PWD` varchar(30) NOT NULL,
  `A_P` int(10) NOT NULL,
  `B_P` int(10) NOT NULL,
  `O_P` int(10) NOT NULL,
  `AB_P` int(10) NOT NULL,
  `A_N` int(10) NOT NULL,
  `B_N` int(10) NOT NULL,
  `O_N` int(10) NOT NULL,
  `AB_N` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_ID`, `H_NAME`, `H_PWD`, `A_P`, `B_P`, `O_P`, `AB_P`, `A_N`, `B_N`, `O_N`, `AB_N`) VALUES
(101, 'Jazan Public Hospital', '123', 25, 22, 18, 12, 25, 9, 30, 5),
(202, 'Mahammed Ben Nasser Hospital', '123', 13, 11, 16, 5, 19, 14, 22, 7),
(303, 'King Fahad Hospital', '123', 19, 15, 22, 8, 15, 16, 21, 11);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `USER_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `ACCESS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USER_NAME`, `EMAIL`, `PASSWORD`, `ACCESS`) VALUES
('Mohammed Alfaify', 'admin1@gmail.com', '123', 'admin'),
('mohamed', 'mmm@gmail.com', '123', 'user'),
('Ahmed', 'aaa@gmail.com', '123', 'user'),
('Khaled', 'emp1@gmail.com', '123', 'emp'),
('Salim Azibi', 'admin2@gmail.com', '123', 'admin'),
('Ahmed hakami', 'admin3@gmail.com', '123', 'admin'),
('Fahad', 'fff@gmail.com', '123', 'user'),
('sarah', 'sarah@gamil.com', '123', 'user'),
('nasser', 'emp2@gamail.com', '123', 'emp'),
('ziad', 'zzz@gmail.com', '123', 'user'),
('hassan', 'hhh@gmail.com', '123', 'user'),
('gomanah', 'ggg@gmail.com', '123', 'user'),
('Basem', 'bbb@gmail.com', '123', 'user'),
('turky', 'ttt@gmail.com', '123', 'user'),
('Abrar', 'emp3@gmail.com', '123', 'emp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_NUMBER` int(20) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BLOOD_TYPE` varchar(10) NOT NULL,
  `AMOUNT` int(20) NOT NULL,
  `HOSPITAL` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDER_NUMBER`, `USER_NAME`, `GENDER`, `BLOOD_TYPE`, `AMOUNT`, `HOSPITAL`, `EMAIL`, `STATUS`) VALUES
(1, 'Mohamed', 'Male', 'O+', 8, 'Mohamed Ben Nasser', 'mmm@gmail.com', 'ACCEPTED'),
(3, 'Ahmed', 'Male', 'B+', 8, 'King Fahad Hospital', 'aaa@gmail.com', 'ACCEPTED'),
(4, 'Mohammed', 'Male', 'O+', 10, 'King Fahad Hospital', 'mmm@gmail.com', 'wait'),
(9, 'ziad', 'Male', 'B-', 6, 'Jazan Public Hospital', 'zzz@gmail.com', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `REQUEST_N` int(10) NOT NULL,
  `H_ID` int(10) NOT NULL,
  `H_NAME` varchar(100) NOT NULL,
  `REQUEST` varchar(250) NOT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`REQUEST_N`, `H_ID`, `H_NAME`, `REQUEST`, `STATUS`) VALUES
(4, 101, 'Jazan Public Hospital', 'we need 20 bags of A+ for surgery', 'ACCEPTED'),
(7, 202, 'Mahammed Ben Nasser Hospital', 'we need 20 bags of O+ for surgery', 'ACCEPTED'),
(9, 101, 'Jazan Public Hospital', 'we need 20 bags of AB- for surgery', 'wait'),
(14, 101, 'Jazan Public Hospital', 'we need 20 bags of A+ for surgery', 'ACCEPTED'),
(15, 101, 'Jazan Public Hospital', 'we need 20 bags of B+ for surgery', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `USER_NAME` text NOT NULL,
  `GENDER` text NOT NULL,
  `BLOOD_TYPE` text NOT NULL,
  `BLOOD_DISEASE` text NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USER_NAME`, `GENDER`, `BLOOD_TYPE`, `BLOOD_DISEASE`, `EMAIL`, `PASSWORD`) VALUES
(2, 'Ahmed', 'Male', 'B+', 'no disease', 'aaa@gmail.com', '123'),
(8, 'Basem', 'Male', 'O+', 'no disease', 'bbb@gmail.com', '123'),
(4, 'Fahad', 'Male', 'A-', 'no disease', 'fff@gmail.com', '123'),
(7, 'gomanah', 'Female', 'AB+', 'Anemia', 'ggg@gmail.com', '123'),
(6, 'hassan', 'Male', 'O-', 'no disease', 'hhh@gmail.com', '123'),
(1, 'Mohammed', 'Male', 'O+', 'no disease', 'mmm@gmail.com', '123'),
(9, 'turky', 'Male', 'AB-', 'no disease', 'ttt@gmail.com', '123'),
(5, 'ziad', 'Male', 'B-', 'no disease', 'zzz@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`DONATE_NUMBER`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`H_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_NUMBER`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`REQUEST_N`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`EMAIL`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `DONATE_NUMBER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `H_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDER_NUMBER` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `REQUEST_N` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
