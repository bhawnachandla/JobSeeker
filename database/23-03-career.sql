-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 01:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin12@gmail.com', 'password');
(2, 'admin', 'bhawnachandla28@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `aid` int(255) NOT NULL,
  `jid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `astatus` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`aid`, `jid`, `uid`, `astatus`, `date`, `time`, `resume`) VALUES
(1, 2, 2, 'APPLIED', '23-03-2020', '16:52:56 pm', '9915holiday-in-bangkok.jpg'),
(2, 2, 2, 'SELECTED', '23-03-2020', '17:18:11 pm', '6886hong_kong.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdescription` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `ctime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdescription`, `cdate`, `ctime`) VALUES
(1, 'job', 'hkjl', '05-03-20', '20:19:th');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `coid` int(255) NOT NULL,
  `coname` varchar(255) NOT NULL,
  `coaddress` varchar(255) NOT NULL,
  `codescription` varchar(255) NOT NULL,
  `cophone` varchar(20) NOT NULL,
  `coexperience` varchar(255) NOT NULL,
  `comail` varchar(50) NOT NULL,
  `copassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`coid`, `coname`, `coaddress`, `codescription`, `cophone`, `coexperience`, `comail`, `copassword`) VALUES
(5, 'Jalandhar Height', 'jalandhar,punjab', 'this is an equcational app', '09872127998', '4', 'jalheights@gmail.com', '12345678'),
(6, 'Kuldeep Singh', '', '', '09872127998', '', 'jalheights@gmail.com', 'ygfyghhkj'),
(7, 'Company', 'Jalandhar', 'Working', '7896541230', '5 years', 'company@gmail.com', 'company'),
(8, 'rk enterprises', 'Jalandhar', 'Working', '9988861284', '2 years', 'bhawnachandla28@gmail.com', 'abc');


-- --------------------------------------------------------

--
-- Table structure for table `company_complaint`
--

CREATE TABLE `company_complaint` (
  `ccid` int(255) NOT NULL,
  `coid` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_complaint`
--

INSERT INTO `company_complaint` (`ccid`, `coid`, `subject`, `message`, `date`, `time`) VALUES
(1, 1, 'regarding job', 'gud', '', ''),
(3, 8, 'new ', 'eefhka', '23-03-2020', '12:22:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `jname` varchar(50) NOT NULL,
  `jvacancy` varchar(255) NOT NULL,
  `jdescription` varchar(255) NOT NULL,
  `jsalary` varchar(255) NOT NULL,
  `soft_skills` varchar(255) NOT NULL,
  `hard_skills` varchar(255) NOT NULL,
  `status` varchar(250) NOT NULL,
  `coid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `cid`, `jname`, `jvacancy`, `jdescription`, `jsalary`, `soft_skills`, `hard_skills`, `status`, `coid`) VALUES
(2, 1, 'job one', '5', 'tetsing', '', 'testonbf', 'djal', 'PENIDNG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `uaddress` varchar(20) NOT NULL,
  `ucontact` varchar(255) NOT NULL,
  `uqualification` varchar(50) NOT NULL,
  `uexperience` varchar(255) NOT NULL,
  `upic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upassword`, `uaddress`, `ucontact`, `uqualification`, `uexperience`, `upic`) VALUES
(1, 'jot', 'jot.pal1107@gmail.com', 'kamlesh87', 'sammipur,jalandhar', '7866434378', 'bca', 'fresher', 'pic'),
(2, 'User', 'user@gmail.com', 'user', 'address', '7896541230', 'graduate', '1 year', 'hawaii-hd-7.jpg');
(3,'bhawna','bhawnachandla28@gmail.com','jalandhar','9815240739','graduate','fresher');
-- --------------------------------------------------------

--
-- Table structure for table `user_complaint`
--

CREATE TABLE `user_complaint` (
  `ucid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_complaint`
--

INSERT INTO `user_complaint` (`ucid`, `uid`, `subject`, `message`, `date`, `time`) VALUES
(1, 2, 'sh', 'sbcajb', '23-03-2020', '05:59:18 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `company_complaint`
--
ALTER TABLE `company_complaint`
  ADD PRIMARY KEY (`ccid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_complaint`
--
ALTER TABLE `user_complaint`
  ADD PRIMARY KEY (`ucid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `coid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_complaint`
--
ALTER TABLE `company_complaint`
  MODIFY `ccid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_complaint`
--
ALTER TABLE `user_complaint`
  MODIFY `ucid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
