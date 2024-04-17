-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 12:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_seeker`
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
(2, 2, 2, 'SELECTED', '23-03-2020', '17:18:11 pm', '6886hong_kong.jpg'),
(3, 5, 3, 'APPLIED', '10-05-2022', '13:42:54 pm', '1576Screenshot (10).png'),
(4, 0, 3, 'APPLIED', '10-05-2022', '20:53:17 pm', '3377Screenshot (8).png'),
(5, 10, 3, 'APPLIED', '11-05-2022', '20:04:34 pm', '6998BD ARYA COLLEGE LOGO.jpg'),
(6, 0, 5, 'APPLIED', '12-05-2022', '20:15:05 pm', '7571BD ARYA COLLEGE LOGO.jpg'),
(7, 36, 8, 'APPLIED', '20-05-2022', '14:46:53 pm', '2244BD ARYA COLLEGE LOGO.jpg'),
(8, 42, 5, 'REJECTED', '25-05-2022', '15:06:08 pm', '4178BD ARYA COLLEGE LOGO.jpg'),
(10, 49, 11, 'APPLIED', '30-05-2022', '13:31:00 pm', '2061BD ARYA COLLEGE LOGO.jpg'),
(11, 42, 13, 'APPLIED', '30-05-2022', '13:42:31 pm', '1217BD ARYA COLLEGE LOGO.jpg'),
(12, 50, 13, 'SHORT LISTED', '30-05-2022', '13:49:30 pm', '7501BD ARYA COLLEGE LOGO.jpg'),
(13, 50, 13, 'APPLIED', '30-05-2022', '13:50:04 pm', '8269BD ARYA COLLEGE LOGO.jpg');

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
(6, 'Job', 'working', '10-05-22', '13:15:th'),
(7, 'IT', 'working', '10-05-22', '13:15:th'),
(8, 'teaching', 'working\r\n\r\n', '10-05-22', '13:16:th'),
(9, 'management', 'working', '10-05-22', '13:16:th'),
(12, 'full time', 'working', '12-05-22', '14:49:th'),
(13, 'part time', 'working', '12-05-22', '14:50:th'),
(16, 'accounting', 'working', '12-05-22', '14:53:th'),
(17, 'human resourse', 'working', '12-05-22', '14:53:th'),
(18, 'home science', 'working', '12-05-22', '14:54:th'),
(19, 'construction', 'working', '12-05-22', '14:54:th'),
(20, 'Education', 'education', '12-05-22', '15:00:th'),
(21, 'MULTIMEDIA', 'multi', '12-05-22', '15:00:th'),
(22, 'work from home', 'working', '17-05-22', '16:42:th'),
(23, 'freelancing', 'working\r\n', '20-05-22', '14:42:th');

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
(11, 'Rk Enterpeises', 'jalandhar', 'working', '9815240739', '2 years', 'bhawnachandla28@gmail.com', 'abc'),
(13, 'bhawna', 'jalandhar', 'working', '9815240739', '2 years', 'bhawnachandla28@gmail.com', 'abc'),
(16, 'HINDUSTAN CONSTRUCTION COMPANY LIMITED', 'MUMBAI', 'construction company', '9988861284', '20 years', 'hindustanconstruction@gmail.com', '123'),
(17, 'ARK INFO SOLUTIONS', 'INDIA', 'working', '9988861284', '6 YEARS', 'arkinfosolutions@gmail.com', '123'),
(18, 'FINACC GLOBAL', 'INDIA', 'Team FinAcc Global is apt at helping you with your finance and accounting tasks.', '9988861284', '7 YEARS', 'finaccglobal@gmail.com', '123'),
(19, 'INCRUTER', 'INDIA', 'Incruiter is a Human Resources company and has headquarters in Bengaluru, Karnataka, India. Incruiter has 33 employees. It has a revenue of $1M. It was founded in 2018. Incruiter specialises in human resources.', '9988861284', '10 years', 'incruter@gmail.com', '123'),
(20, 'ACCENTURE', 'india', 'Human Resourse Company', '9988861284', '7 YEARS', 'accenture@gmail.com', '123'),
(21, 'APPKNIT', 'india', 'applicatoion development company', '9988861284', '6 YEARS', 'appknit@gmail.com', '123'),
(22, 'GENIUS ACADEMY', 'india', 'teaching faculty for all subjects', '9988861284', '10 years', 'geniusacademy@gmail.com', '123'),
(23, 'sk enterprises', 'MUMBAI', 'working', '9988861284', '2 years', 'skenterprises@gmail.com', '123');

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
(3, 8, 'new ', 'eefhka', '23-03-2020', '12:22:33 pm'),
(5, 15, 'hi there', 'hello im bhawna', '12-05-2022', '02:43:02 pm'),
(6, 21, 'hi', 'hello\r\n', '20-05-2022', '02:48:44 pm'),
(7, 22, 'hi', 'hi', '30-05-2022', '01:48:15 pm');

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
(2, 1, 'job one', '5', 'tetsing', '', 'testonbf', 'djal', 'PENIDNG', 7),
(6, 6, 'receptionist', '2', 'working', '30000', 'soft spoken', 'graduate', 'PENIDNG', 11),
(8, 7, 'web developer', '23', '9 to 5 job', '30000', 'soft spoken, multitasker', 'graguate', 'PENIDNG', 8),
(9, 7, 'Cloud Computing Engineer.', '7', '9 to 5 job', '40000', 'punctual,soft spoken', 'graduate', 'PENIDNG', 8),
(10, 7, 'Computer Network Specialist', '23', '9 to 5 job', '40000', 'soft spoken', 'graduate', 'PENIDNG', 8),
(11, 7, 'Database Administrator', '21', '9 to 5 job \r\nwork from home', '55000', 'soft spoken, punctual, multitasker', 'graduate\r\nexperience min 2 year', 'PENIDNG', 8),
(12, 7, 'Computer Engineer', '11', '9 to 5 job', '45000', 'disciplined,punctual', 'graduate', 'PENIDNG', 8),
(13, 7, 'programmer', '33', '9 to 5 job', '45000', 'soft spoken', 'graduate', 'PENIDNG', 8),
(14, 8, 'MATHS TEACHER', '4', '9 TO 5 JOB', '30000', 'SOFT SPOKEN', 'MA B.ED', 'PENIDNG', 12),
(15, 8, 'ENGLISH TEACHER', '5', 'WORKING', '40000', 'SOFT SPOKEN', 'BA B.ED ', 'PENIDNG', 12),
(16, 8, 'assistant professor', '4', 'working', '45000', 'soft spoken', 'ba b.ed\r\nma m.ed', 'PENIDNG', 12),
(17, 7, 'web developer', '21', 'working', '46000', 'soft spoken', 'graduate', 'PENIDNG', 15),
(18, 19, 'CONSTRUCTION MANAGER', '4', 'FULL TIME', '40000', 'communication skills, good listener', 'Foreign languages, ,Digital communication ,Presentations', 'PENIDNG', 16),
(19, 19, 'CONSTRUCTION COORDINATER', '11', 'FULL TIME', '45000', 'communication skills, good listener, displined,punctual', 'Risk management, Strategic planning, Project lifecycle management,Budgeting', 'PENIDNG', 16),
(20, 19, 'PROJECT ENGINEER', '4', 'FULL TIME', '55000', 'good listener , communcation skills, soft spoken', 'Risk management, Strategic planning ,Project lifecycle management, Budgeting', 'PENIDNG', 16),
(21, 19, 'CONSTRUCTION SUPERVISER', '7', 'FULL TIME', '30000', 'soft spoken, punctual, communication skills', 'Risk management, Strategic planning, Project lifecycle management ,Budgeting', 'PENIDNG', 16),
(22, 19, 'SITE SUPERVISER', '23', 'FULL TIME', '35600', 'Leadership ,Management ,Managing difficult conversation, Managing remote/virtual teams ,Meeting management, Mentoring', 'Risk management ,Strategic planning ,Project lifecycle management ,Budgeting\r\n', 'PENIDNG', 16),
(23, 14, 'MULTIMEDIA INTERNS', '21', 'Engage Students to Revolutionize Tradition Education to Modern Education.', '15000', 'Adaptability\r\nArtistic aptitude\r\nCreativity\r\nCritical observation ,Critical thinking ,Design aptitude ,Desire to learn', 'Writing press releases ,Report writing Formal presentations ,Investigative journalism ,SEO copywriting\r\n', 'PENIDNG', 17),
(24, 21, '3D DESIGNER', '11', 'FULL TIME /REGULAR/PERMANENT\r\nCell phone reimbursement\r\nCommuter assistance\r\nFood allowance', '55000', '1. Good Visualization skills. Has a creative bent of mind.\r\n2. To be able to make thematic set designs, stages, venue layouts, exhibition displays & stalls with detailed lighting & texturing abilities\r\n3. Has knowledge about the latest technology used in ', 'Advance Diploma In Multimedia or MAC Institute or Bachelors in Mass Comm / Advertising / Marketing or NIFT', 'PENIDNG', 17),
(25, 21, 'HTML5 MULTIMEDIA', '4', 'You will be part of Front end team converting designs to HTML with the latest Frameworks along with working on Landing page ESPs like Marketo, Salesforce, Pardot etc.\r\nAlso, you will be working on developing Static & Dynamic animated Display Ads.', '46000', 'Ability to learn new technologies quickly', 'Good Communication. Able to work directly with the client.\r\nProficiency with JavaScript & modern libraries\r\nWorking knowledge of building HTML5 Banners with CSS3\r\nGood Experience with animation libraries and working with SVGâ€™s (e.g., Green Sock Animatio', 'PENIDNG', 17),
(26, 21, 'DATA ANNOTOR', '2', 'Looking for Data Annotators to join our team in Bangalore, to work on two different positions â€“ Image Processing and Data Set Analysis. You will be involved in tasks requiring expertise in Photoshop and other image processing tools or bulk dataset colle', '36000', 'Strong communication and presentation skills are essential', 'Expertise in Photoshop, other image processing tools and image quality evaluation & analysis; Knowledge of Android architecture, Linux user / kernel drivers, Linux multimedia framework, Image formats, Buffer management\r\nExpertise in bulk dataset collectio', 'PENIDNG', 17),
(27, 21, 'SOCIAL MEDIA MANAGER', '4', 'Looking for social media manager for developing creative and engaging social media strategy', '10000', 'soft spoken, communication skills', 'Excellent knowledge of Facebook, Twitter, LinkedIn, Pinterest, Instagram, Snapchat and other social media best practices\r\n Understanding of SEO and web traffic metrics\r\nFULL TIME ,REGULAR,PERMANENT', 'PENIDNG', 17),
(28, 16, 'ACCOUNTING AND TEXATION SPECIALIST', '2', 'work from home', '37000', 'good communication skills , punctual , task manager,good listner', 'Experience in finance and accounts\r\nExperience in ERP systems\r\nProficiency with accounting standards/tax provisions\r\nCommerce Graduate', 'PENIDNG', 18),
(29, 16, 'FINANCE CONTROLLER', '1', 'Schedule: Regular\r\n\r\nShift: Standard\r\n\r\nJob Type: Full-time\r\n\r\nDay Job', '29000', 'Good listener, multitasker ,communication skills', 'Analytical., Detail oriented, Communication/interpersonal', 'PENIDNG', 18),
(30, 16, 'ACCONTANT(FINANCE AND ACCOUNTS)', '1', 'Accountant both male and female can apply\r\nDay shift', '27000', 'communication skills ,punctual', 'commerce graduate', 'PENIDNG', 18),
(31, 16, 'ACCONTANT(FINANCE AND ACCOUNTS)', '1', 'The Analyst is a key position in the Accounts Payable team of the India Finance Team. He/She is the point person for activities surrounding vendor invoice processing, payments and vendor queries.', '36000', 'communication skills ,punctual', 'commerce graduate', 'PENIDNG', 18),
(32, 17, 'Associate Manager-Human Resources', '2', 'Skill required: Talent Acquisition - Recruitment\r\nDesignation: Associate Manager', '25000', 'Ability to establish strong client relationship\r\nStrong analytical skills\r\nCollaboration and interpersonal skills\r\nAbility to manage multiple stakeholders', 'any gradution', 'PENIDNG', 20),
(33, 17, 'Human Resources Clerk', '1', 'All applicants under consideration will be required to pass medical and security certifications.\r\njob type: permanent  40 hrs per week', '18000', 'Excellent interpersonal skills are required.', 'proficient in excel and word', 'PENIDNG', 20),
(34, 17, 'HR SPECIALIST', '1', 'Benefits: \r\nFood allowance\r\nDay shift\r\nMorning shift\r\nPerformance bonus\r\nYearly bonus', '49000', 'communication skills, multitasker, soft spoken', 'Proven experience as HR officer, administrator or other HR position\r\nKnowledge of HR functions (pay & benefits, recruitment, training & development etc.)', 'PENIDNG', 20),
(35, 17, 'Deputy Manager- Human Resources', '1', 'full time job \r\npost graduate degree in human resourses required', '33000', 'communication skills ,good in english and hindi', 'Very high levels of initiative, self-drive and achievement orientation with strong closure focus.\r\nHigh levels of tenacity and perseverance.\r\nIdeation balanced by a strong bias for action / execution focus.\r\nAbility to engage with a wide variety of stakeh', 'PENIDNG', 20),
(36, 7, 'Office Administrator', '1', 'Job Types: Full-time, Part-time, FresherSalary: INR12,000.00 - INR18,000.00 per monthBenefits:\r\nPaid sick time  Work from home  \r\nSchedule: Day shift\r\nSupplemental Pay: Performance bonus ,Yearly bonus\r\nEducation: Higher Secondary(12th Pass) (Preferred)', '18000', 'communication skills ,good in english', 'management skills , budgeting, multitasker', 'PENIDNG', 11),
(39, 7, 'IT-PROJECT COORDINATER', '1', 'full time, day shift\r\ngraduation degree required\r\nexperince: 03-05 years', '29000', 'communication skills', 'Strong organizational and multitasking skills.\r\nExcellent analytical and problem-solving abilities\r\nTeam management and leadership skills\r\nDocumentation management and ability to use project management tools\r\nAttention to details', 'PENIDNG', 21),
(42, 7, 'web developer', '3', 'full time', '30000', 'communication skills', 'graduation', 'PENIDNG', 21),
(48, 8, 'ECONOMICS LECTURER', '1', 'full time', '55000', 'communication skills', 'bachelor degree ', 'PENIDNG', 22),
(49, 8, 'ONLINE MATH TUTOR', '1', 'full time\r\n bachelor degree required\r\n3 years experience', '12000', 'communication skills', 'language skills', 'PENIDNG', 22),
(50, 8, 'ASSISTANT PROFESSOR -COMMERCE', '1', 'full time\r\n3 years experience\r\nday shift', '46000', 'communication skills', 'doctrate(preferred)', 'PENIDNG', 22),
(51, 8, 'LECTURER-BIOLOGY', '1', 'full time', '46000', 'communication skills', 'Advocating for others\r\nBeing aware of body language\r\nBuilding communities\r\nBuilding relationships', 'PENIDNG', 22),
(52, 13, 'tutor', '2', 'part time', '10000', 'soft spoken', 'graduate', 'PENIDNG', 21);

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
(2, 'User', 'user@gmail.com', 'user', 'address', '7896541230', 'graduate', '1 year', 'hawaii-hd-7.jpg'),
(5, 'bhawna', 'bhawnachandla28@gmail.com', 'abc', 'jalandhar', '9815240739', 'graguate', 'fresher', 'BD ARYA COLLEGE LOGO.jpg'),
(6, 'user1', 'user1@gmail.com', 'user1', 'jalandhar', '9988861284', 'graduate', 'fresher', 'BD ARYA COLLEGE LOGO.jpg'),
(7, 'bhawna', 'bhawnachandla28@gmail.com', 'abc', 'jalandhar', '9815240739', 'graduation', 'fresher', 'BD ARYA COLLEGE LOGO.jpg'),
(13, 'robin', 'robin@gmail.com', '9779259850', 'puranpur', '9779259850', '+12', 'fresher', '');

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
(1, 2, 'sh', 'sbcajb', '23-03-2020', '05:59:18 pm'),
(2, 3, 'hithere', 'hello', '11-05-2022', '08:05:06 pm'),
(3, 5, 'hi ', 'im bhawna', '30-05-2022', '01:24:01 pm'),
(4, 11, 'ajay', 'hello', '30-05-2022', '01:31:33 pm'),
(5, 13, 'hey', 'hey', '30-05-2022', '01:42:57 pm');

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
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `coid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company_complaint`
--
ALTER TABLE `company_complaint`
  MODIFY `ccid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_complaint`
--
ALTER TABLE `user_complaint`
  MODIFY `ucid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
