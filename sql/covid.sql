-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2020 at 02:28 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14119152_covid	`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `name`, `UserName`, `pwd`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `casedetail`
--

DROP TABLE IF EXISTS `casedetail`;
CREATE TABLE IF NOT EXISTS `casedetail` (
  `Cid` int(11) NOT NULL AUTO_INCREMENT,
  `CaseDate` datetime NOT NULL,
  `TodTotCon` int(11) NOT NULL,
  `TodTotRec` int(11) NOT NULL,
  `TodTotDea` int(11) NOT NULL,
  PRIMARY KEY (`Cid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casedetail`
--

INSERT INTO `casedetail` (`Cid`, `CaseDate`, `TodTotCon`, `TodTotRec`, `TodTotDea`) VALUES
(2, '2020-06-14 07:54:54', 10, 20, 5),
(3, '2020-06-16 10:03:30', 2000, 1500, 200),
(4, '2020-06-17 13:03:29', 1000, 600, 100);

-- --------------------------------------------------------

--
-- Table structure for table `hospdata`
--

DROP TABLE IF EXISTS `hospdata`;
CREATE TABLE IF NOT EXISTS `hospdata` (
  `Tid` int(11) NOT NULL AUTO_INCREMENT,
  `Hospital` varchar(20) NOT NULL,
  `Entrydate` datetime NOT NULL,
  `CurrOccBed` int(11) NOT NULL,
  `CurrOccVent` int(11) NOT NULL,
  PRIMARY KEY (`Tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospdata`
--

INSERT INTO `hospdata` (`Tid`, `Hospital`, `Entrydate`, `CurrOccBed`, `CurrOccVent`) VALUES
(4, 'civil hospital', '2020-06-17 12:50:57', 100, 40);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `HospName` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `HosType` varchar(25) NOT NULL,
  `TotBed` int(11) NOT NULL,
  `TotVent` int(11) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `HospName`, `Address`, `HosType`, `TotBed`, `TotVent`) VALUES
(15, 'civil hospital', 'majura gate', '1', 100, 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
