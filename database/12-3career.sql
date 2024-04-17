-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2020 at 09:26 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin12@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `jid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `resume` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `apply`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `cdescription` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdescription`, `cdate`, `ctime`) VALUES
(1, 'job', 'hkjl', '05-03-20', '20:19:th');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `coid` int(255) NOT NULL AUTO_INCREMENT,
  `coname` varchar(255) NOT NULL,
  `coaddress` varchar(255) NOT NULL,
  `codescription` varchar(255) NOT NULL,
  `cophone` varchar(20) NOT NULL,
  `coexperience` varchar(255) NOT NULL,
  `comail` varchar(50) NOT NULL,
  `copassword` varchar(250) NOT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`coid`, `coname`, `coaddress`, `codescription`, `cophone`, `coexperience`, `comail`, `copassword`) VALUES
(5, 'Jalandhar Height', 'jalandhar,punjab', 'this is an equcational app', '09872127998', '4', 'jalheights@gmail.com', '12345678'),
(6, 'Kuldeep Singh', '', '', '09872127998', '', 'jalheights@gmail.com', 'ygfyghhkj');

-- --------------------------------------------------------

--
-- Table structure for table `company_complaint`
--

CREATE TABLE IF NOT EXISTS `company_complaint` (
  `ccid` int(255) NOT NULL AUTO_INCREMENT,
  `coid` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`ccid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_complaint`
--

INSERT INTO `company_complaint` (`ccid`, `coid`, `subject`, `message`, `date`, `time`) VALUES
(1, 1, 'regarding job', 'gud', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `jid` int(255) NOT NULL AUTO_INCREMENT,
  `cid` int(255) NOT NULL,
  `jname` varchar(50) NOT NULL,
  `jvacancy` varchar(255) NOT NULL,
  `jdescription` varchar(255) NOT NULL,
  `soft_skills` varchar(255) NOT NULL,
  `hard_skills` varchar(255) NOT NULL,
  `status` varchar(250) NOT NULL,
  `coid` int(255) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `job`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `uaddress` varchar(20) NOT NULL,
  `ucontact` varchar(255) NOT NULL,
  `uqualification` varchar(50) NOT NULL,
  `uexperience` varchar(255) NOT NULL,
  `upic` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upassword`, `uaddress`, `ucontact`, `uqualification`, `uexperience`, `upic`) VALUES
(1, 'jot', 'jot.pal1107@gmail.com', 'kamlesh87', 'sammipur,jalandhar', '7866434378', 'bca', 'fresher', 'pic');

-- --------------------------------------------------------

--
-- Table structure for table `user_complaint`
--

CREATE TABLE IF NOT EXISTS `user_complaint` (
  `ucid` int(255) NOT NULL AUTO_INCREMENT,
  `uid` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`ucid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_complaint`
--

