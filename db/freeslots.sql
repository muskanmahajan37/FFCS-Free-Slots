-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 11:33 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeslots`
--

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

DROP TABLE IF EXISTS `friday`;
CREATE TABLE IF NOT EXISTS `friday` (
  `8to9` varchar(150) NOT NULL,
  `9to10` varchar(150) NOT NULL,
  `10to11` varchar(150) NOT NULL,
  `11to12` varchar(150) NOT NULL,
  `12to1` varchar(150) NOT NULL,
  `1to2` varchar(150) NOT NULL,
  `2to3` varchar(150) NOT NULL,
  `3to4` varchar(150) NOT NULL,
  `4to5` varchar(150) NOT NULL,
  `5to6` varchar(150) NOT NULL,
  `6to7` varchar(150) NOT NULL,
  `7to8` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`8to9`, `9to10`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
('Shivam, Ananya, Shivi, Vinit, Himanshu, Raj', 'Aastha Solanki, Vinit Shahdeo', 'Shivam, Ananya, Aastha Solanki, Vinit Shahdeo', 'Aastha Solanki, Vinit Shahdeo', 'Shivam, Ananya, Shivi, Vinit, Himanshu, Raj', 'Shivam, Ananya, Aastha Solanki, Vinit Shahdeo', 'Shivam, Ananya, Aastha Solanki, Vinit Shahdeo', 'Vinit Shahdeo, Aastha, Ashika, Diksha, Shreya Aanand', 'Aastha Solanki, Vinit Shahdeo, Archit Roy', 'Shivam, Ananya, Shivi, Vinit, Himanshu, Raj', '', 'Shivam, Ananya, Shivi, Vinit, Himanshu, Raj');

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

DROP TABLE IF EXISTS `monday`;
CREATE TABLE IF NOT EXISTS `monday` (
  `8to9` varchar(150) NOT NULL,
  `9to10` varchar(150) NOT NULL,
  `10to11` varchar(150) NOT NULL,
  `11to12` varchar(150) NOT NULL,
  `12to1` varchar(150) NOT NULL,
  `1to2` varchar(150) NOT NULL,
  `2to3` varchar(150) NOT NULL,
  `3to4` varchar(150) NOT NULL,
  `4to5` varchar(150) NOT NULL,
  `5to6` varchar(150) NOT NULL,
  `6to7` varchar(150) NOT NULL,
  `7to8` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`8to9`, `9to10`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
('Vinit Ananya Anubhuti', 'Himashu Kritika', 'Mallika Rajat Pallavraj ', 'Ashika Vrinda', 'Kunal Karthik Munish', 'Teja Harshit', 'Rajani Shruti', 'Shreya Yashna Aastha', 'Fayeed Vaibhaw Munish Karthik Vineet', 'Vinit Aastha Shivi Suvitha', 'Vinit Astha Shivi Suvitha', 'Suvitha Ananya Anubhuti');

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

DROP TABLE IF EXISTS `thursday`;
CREATE TABLE IF NOT EXISTS `thursday` (
  `8to9` varchar(150) NOT NULL,
  `9to10` varchar(150) NOT NULL,
  `10to11` varchar(150) NOT NULL,
  `11to12` varchar(150) NOT NULL,
  `12to1` varchar(150) NOT NULL,
  `1to2` varchar(150) NOT NULL,
  `2to3` varchar(150) NOT NULL,
  `3to4` varchar(150) NOT NULL,
  `4to5` varchar(150) NOT NULL,
  `5to6` varchar(150) NOT NULL,
  `6to7` varchar(150) NOT NULL,
  `7to8` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`8to9`, `9to10`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
('Vinit, Shruti, Ishita, Kaavya', 'Kamini, Damini, Riya, Ridhhi', 'Kanika, Shivi, Suvitha', 'Ranjani, Himanshu, Upanshu', 'Rajat, Mallika', 'Mallika, Vinit, Vineet', 'Aastha, Arpit, Vinit Shahdeo', 'Shreya Anand, Yashna Jawrani', 'Rewa, Sonal, Jhnasi, Vinit', 'Archit, Mayank, Tanuj', 'Aastha, Arpit, Vinit Shahdeo', 'Aastha, Arpit, Vinit Shahdeo, Archit, Mayank, Tanuj');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

DROP TABLE IF EXISTS `tuesday`;
CREATE TABLE IF NOT EXISTS `tuesday` (
  `8to9` varchar(150) NOT NULL,
  `9to10` varchar(150) NOT NULL,
  `10to11` varchar(150) NOT NULL,
  `11to12` varchar(150) NOT NULL,
  `12to1` varchar(150) NOT NULL,
  `1to2` varchar(150) NOT NULL,
  `2to3` varchar(150) NOT NULL,
  `3to4` varchar(150) NOT NULL,
  `4to5` varchar(150) NOT NULL,
  `5to6` varchar(150) NOT NULL,
  `6to7` varchar(150) NOT NULL,
  `7to8` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`8to9`, `9to10`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
('Archit, Karthik, Saurabh, Varnika, Surbhi', 'Naina, Daiyaan, Shivi, Vineet', 'Fayeed, Heena, Radhika', 'Ritwika, Kanupriya, Abhinav, Himanshu, Shivam', 'Anubhuti, Suvitha, Varnika, Namita', 'Upanshu, Ishita, Prasoon', 'Kajal, Ananya, Adhaya, Shailja', 'Aastha, Vinit', 'Shreya, Vinit, Radhika', 'Vinit, Vineet, Ganesan', 'Suvansh, Dhiraj, Sidhhartha', 'Ratnesh, Rishabh, Mayank');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

DROP TABLE IF EXISTS `wednesday`;
CREATE TABLE IF NOT EXISTS `wednesday` (
  `8to9` varchar(150) NOT NULL,
  `9to10` varchar(150) NOT NULL,
  `10to11` varchar(150) NOT NULL,
  `11to12` varchar(150) NOT NULL,
  `12to1` varchar(150) NOT NULL,
  `1to2` varchar(150) NOT NULL,
  `2to3` varchar(150) NOT NULL,
  `3to4` varchar(150) NOT NULL,
  `4to5` varchar(150) NOT NULL,
  `5to6` varchar(150) NOT NULL,
  `6to7` varchar(150) NOT NULL,
  `7to8` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`8to9`, `9to10`, `10to11`, `11to12`, `12to1`, `1to2`, `2to3`, `3to4`, `4to5`, `5to6`, `6to7`, `7to8`) VALUES
('Vinit, Himanshu, Archit, Pragya', 'Ritika, Kajal, Ansha, Adhya, Shailja', 'Radhe, Sonal, Rewa, Yashna, Shreya', 'Himadri, Gargi, Saarah, Saina', 'Vinit, Komal, Shivi, Annaya, Shivi, Suvitha', 'Raj, John, Rajat, Pallavraj, Arpit', 'Raxit, Varnika, Namita, Amulya, Adhya', 'Munish, Karthik, Komal, Vinit', 'Vinit Shhadeo, Himanshu Singh, Komal', 'Radhika, Amisha, Ashika, Shruti', 'Archit, Ratnesh, Maynak Nigam', 'Vinit Shahdeo, Aastha Solanki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
