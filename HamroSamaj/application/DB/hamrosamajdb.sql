-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 09:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamrosamajdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `CId` int(11) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `vName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Complain` text CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL,
  `ip` text NOT NULL,
  `Ack` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`CId`, `CName`, `vName`, `Email`, `Contact`, `Complain`, `Date`, `ip`, `Ack`) VALUES
(1036, 'Aryan', 'Hari', 'aryan@iComDroid.com', '9849985905', 'I saw there were some misunderstand between hari and their brother and the are quaralling so please short it out ', '0000-00-00', '192.168.1.1', 0),
(1038, 'bbbb', 'vvvv', 'vvv@vv.com', '9797', 'jjbgj', '2017-01-21', '192.168.1.1', 0),
(1039, 'HAri', 'Hari', 'hari@gmail.com', '98398293', 'Family Dispute', '0000-00-00', '192.168.1.1', 0),
(1040, 'jgj', 'jhjh', 'jjjj@ndjsd.com', '98888', 'sdsdsdsd', '0000-00-00', '192.168.1.1', 0),
(1041, 'sdgdgjj', 'jjgj', 'jgjg@sdjsgd.com', '7767', 'sdsds', '2017-01-21', '192.168.1.1', 0),
(1042, 'aaa', 'aaaa', 'aaa@aaa.com', '223', 'dfdfdfd', '2017-01-12', '192.168.1.1', 0),
(1044, 'Shyam', 'Hari', 'shyam@gmail.com', '9849985905', 'Family DIspute', '2017-01-21', '192.168.1.1', 0),
(1045, 'HAri', 'Ram', 'ram@icomdroid.com', '8878', 'dsdsd', '2017-01-22', '192.168.1.1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainstate`
--

CREATE TABLE `tbl_complainstate` (
  `Id` int(11) NOT NULL,
  `CId` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `ComplainState` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complainstate`
--

INSERT INTO `tbl_complainstate` (`Id`, `CId`, `Date`, `ComplainState`) VALUES
(3, 1044, '2017-01-21', 'Family DIspute (Complain Initiated)'),
(4, 1044, '2017-01-21', 'Complain Acknowledged.'),
(5, 1045, '2017-01-22', 'dsdsd (Complain Initiated)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `Id` int(11) NOT NULL,
  `Contacts` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`Id`, `Contacts`) VALUES
(1, 9841872343);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emailsubs`
--

CREATE TABLE `tbl_emailsubs` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emailsubs`
--

INSERT INTO `tbl_emailsubs` (`Id`, `Name`, `Email`) VALUES
(1, 'Aryan', 'aryan@icomdroid.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suggestion`
--

CREATE TABLE `tbl_suggestion` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Suggestion` text NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_suggestion`
--

INSERT INTO `tbl_suggestion` (`Id`, `Name`, `Email`, `Suggestion`, `contact`) VALUES
(1, 'Aryan', 'aryan@icomdroid.com', 'Please improve your system its too slow', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thingstoknow`
--

CREATE TABLE `tbl_thingstoknow` (
  `Id` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `UserId` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`UserId`, `fullName`, `Username`, `Password`, `Email`, `Contact`, `Role`) VALUES
(3, 'Aryan', 'aryan', 'aryan', 'aryan@icomdroid.com', 9849985905, 1),
(4, 'Binod Jung Bogati', 'binod', 'binod', 'binod@gmail.com', 9837838, 0),
(5, 'Sumit Bhattarai', 'sumit', 'sumit', 'suman@outlook.com', 9849985905, 0),
(10, 'Sumit Bhattarai', 'sumit', 'sumit', 'sumit@outlook.com', 99899, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`CId`);

--
-- Indexes for table `tbl_complainstate`
--
ALTER TABLE `tbl_complainstate`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CId` (`CId`);

--
-- Indexes for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_emailsubs`
--
ALTER TABLE `tbl_emailsubs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_suggestion`
--
ALTER TABLE `tbl_suggestion`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_thingstoknow`
--
ALTER TABLE `tbl_thingstoknow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `CId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1046;
--
-- AUTO_INCREMENT for table `tbl_complainstate`
--
ALTER TABLE `tbl_complainstate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_emailsubs`
--
ALTER TABLE `tbl_emailsubs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_suggestion`
--
ALTER TABLE `tbl_suggestion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_thingstoknow`
--
ALTER TABLE `tbl_thingstoknow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_complainstate`
--
ALTER TABLE `tbl_complainstate`
  ADD CONSTRAINT `tbl_complainstate_ibfk_1` FOREIGN KEY (`CId`) REFERENCES `tbl_complain` (`CId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
