-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 12:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newemployee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin123', 'admin'),
('admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `newemp`
--

CREATE TABLE IF NOT EXISTS `newemp` (
  `eid` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phonenum` int(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newemp`
--

INSERT INTO `newemp` (`eid`, `ename`, `fathername`, `gender`, `dob`, `address`, `city`, `state`, `pincode`, `phonenum`, `designation`, `department`, `doj`) VALUES
(2333, 'sreenivasr', 'saravana', 'Female', '1944-12-12', 'afsf', 'asfsf', 'Select any', 600025, 2147483647, 'hr', 'eeeeeee', '2004-12-18'),
(2333, 'fafsf', '', '', '0000-00-00', '', '', 'Select any', 0, 0, '', '', '0000-00-00'),
(2333, 'sreenivasr', 'saravana', '', '1944-12-12', 'rrrrrr', 'bbbbbbbbbb', 'Select any', 0, 0, 'khkjk', 'sss', '2004-12-12'),
(0, 'afsf', 'saf', 'Female', '0000-00-00', 'afsf', 'asfsf', 'Select any', 600025, 2147483647, 'sfassfasf', 'fa', '2004-12-18'),
(0, '', 'saf', 'Female', '0000-00-00', 'afsf', 'asfsf', 'Select any', 600025, 2147483647, 'sfassfasf', 'fa', '2004-12-18'),
(0, '', 'saf', 'Female', '0000-00-00', 'afsf', 'asfsf', 'Select any', 600025, 2147483647, 'sfassfasf', 'fa', '2004-12-18'),
(12, 'radhika', 'kumarasamy', 'Female', '1994-12-18', 'dfs', 'fsfa', 'Select any', 600025, 2147483647, 'hr', 'sss', '2004-12-18'),
(0, '', '', '', '0000-00-00', '', '', 'Kerala', 0, 0, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `newempp`
--

CREATE TABLE IF NOT EXISTS `newempp` (
  `eid` int(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `phonenum` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `saltype` varchar(50) NOT NULL,
  `salamount` int(50) NOT NULL,
  `bonustype` varchar(50) NOT NULL,
  `bonusamount` int(50) NOT NULL,
  `hrap` int(50) NOT NULL,
  `dap` int(50) NOT NULL,
  `ccap` int(50) NOT NULL,
  `tap` int(50) NOT NULL,
  `medicalp` int(50) NOT NULL,
  `hraa` int(50) NOT NULL,
  `daa` int(50) NOT NULL,
  `ccaa` int(50) NOT NULL,
  `taa` int(50) NOT NULL,
  `medicala` int(50) NOT NULL,
  `adpay` int(50) NOT NULL,
  `proftax` int(50) NOT NULL,
  `proftaxamt` int(50) NOT NULL,
  `loan` int(50) NOT NULL,
  `proffund` int(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `totleave` int(50) NOT NULL,
  `leavefrom` date NOT NULL,
  `leaveto` date NOT NULL,
  `balanceleave` int(50) NOT NULL,
  `grossincen` int(50) NOT NULL,
  `grossded` int(50) NOT NULL,
  `netpay` int(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newempp`
--

INSERT INTO `newempp` (`eid`, `ename`, `fathername`, `gender`, `dob`, `address`, `city`, `state`, `pincode`, `phonenum`, `designation`, `department`, `doj`, `saltype`, `salamount`, `bonustype`, `bonusamount`, `hrap`, `dap`, `ccap`, `tap`, `medicalp`, `hraa`, `daa`, `ccaa`, `taa`, `medicala`, `adpay`, `proftax`, `proftaxamt`, `loan`, `proffund`, `leavetype`, `totleave`, `leavefrom`, `leaveto`, `balanceleave`, `grossincen`, `grossded`, `netpay`, `password`) VALUES
(23, '', '', 'Female', '1994-12-18', '', '', 'Select any', 0, '0', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239023, 'sridevi', 'kumarasamy', 'Female', '1994-12-18', 'madurai', 'madurai', 'Madhya Pradesh', 627001, '2147483647', 'hr', 'industrial', '2004-12-18', 'Monthly', 3000, '', 0, 15, 15, 15, 15, 15, 450, 450, 450, 450, 450, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(1111, '', '', '', '0000-00-00', '', '', 'Select any', 0, '0', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(333, 'hkh', 'hjh', '', '0000-00-00', '', '', 'Select any', 0, '0', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239027, 'chitra', 'Tttttt', 'Female', '1994-12-18', 'sakthinagar-extn', 'madurai', 'Tamil Nadu', 627001, '2147483647', 'hr', 'industrial', '2004-12-18', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239014, 'Lavanya', '', 'Male', '0000-00-00', '', '', 'Select any', 0, '0', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239012, 'keerthana', 'ravi', 'Female', '1994-12-18', '', '', 'Select any', 0, '0', 'hr', 'industrial', '2004-12-18', 'Monthly', 3000, 'Select Any', 0, 15, 15, 15, 15, 15, 450, 450, 450, 450, 450, 200, 10, 525, 200, 200, '', 0, '0000-00-00', '0000-00-00', 0, 5250, 1125, 4125, ''),
(0, '', '', '', '0000-00-00', '', '', 'Select any', 0, '0', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2020, 'jjjklj', 'ghghg', 'Female', '1994-12-18', 'hjhjgh', 'jkhjh', 'Manipur', 222222, '2147483647', 'khkh', 'hhjg', '2004-12-18', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2020, 'jjjklj', 'ghghg', 'Female', '1994-12-18', 'hjhjgh', 'jkhjh', 'Manipur', 222222, '9874561230', 'khkh', 'hhjg', '2004-12-18', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239019, '', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239019, 'priya', 'ramu', 'Female', '1994-12-18', 'sfsfasfsf', 'asfasf', 'Madhya Pradesh', 666666, '9999999999', 'hr', 'industrial', '2004-12-18', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239019, '', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(1234, 'priyaa', 'fsf', 'Female', '0000-00-00', 'sfsfasfsf', 'asfasf', 'Madhya Pradesh', 666666, '9874561230', 'hr', 'industrial', '2004-12-18', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(4321, 'priya', 'sfsaf', 'Female', '0000-00-00', 'sfsfasfsf', 'asfasf', 'Madhya Pradesh', 666666, '9874561230', 'hr', 'industrial', '2004-12-12', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(4444, 'priyaa', 'fsfsf', 'Female', '1994-09-09', 'fsafs', 'sfsaf', 'Select any', 999999, '7777777777', 'fdfsf', 'afsaf', '2000-09-09', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(2012239010, 'hema', 'fsfsf', 'Female', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(9876, 'hema', 'fsjfsjf', 'Female', '1995-07-28', '', '', 'Select any', 0, '', 'kfhjhdfjkaf', 'kjfasfasjf', '2004-12-18', 'Hourly', 900, 'Annual', 9000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 3000, 0, 3000, ''),
(0, '', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(0, '', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(0, '', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(0, '54535', '', '', '0000-00-00', '', '', 'Select any', 0, '', '', '', '0000-00-00', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(22222, '88789', 'hkhhk', 'Female', '1995-02-02', 'hghg', 'chennai', 'Tamil Nadu', 627001, '9999999999', 'hr', 'industrial', '1996-02-03', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, ''),
(5656, 'fafsf', 'afdsf', 'Female', '1994-12-18', 'afffasfsf', 'fasf', 'Madhya Pradesh', 0, '9999995555', 'hr', 'industrial', '2004-12-12', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
