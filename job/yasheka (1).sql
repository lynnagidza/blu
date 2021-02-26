-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 02:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yasheka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_inbox`
--

CREATE TABLE `admin_inbox` (
  `msg_id` int(11) NOT NULL,
  `from_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `recieved_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_inbox`
--

INSERT INTO `admin_inbox` (`msg_id`, `from_id`, `subject`, `recieved_date`, `message`) VALUES
(1, 'yash1996venugopal', 'hello admin', '2017-07-19 07:16:31', 'just saying hi');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `cad_id` int(11) NOT NULL,
  `cad_name` varchar(50) NOT NULL,
  `job_id` int(50) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cad_id`, `cad_name`, `job_id`, `skills`, `exp`, `qualification`, `email`, `contact`, `cv`) VALUES
(1, 'ram', 2, 'html,css,php', '2', 'BE', 'ram@gmail.com', '123456789', 'cv.doc'),
(2, 'ravi', 4, 'python,c,c++', '1', 'ME', 'ravi@gmai.com', '123456789', 'my_cv.doc'),
(7, 'yasheka', 3, 'dbms', '1', 'BE', 'yash1996venugopla@gmail.com', '8892773108', ''),
(8, 'yasheka', 4, 'dbms', '1', 'BE', 'yash1996venugopla@gmail.com', '8892773108', ''),
(9, 'yasheka', 6, 'html,php,mysql,css', '1', 'BE', 'yash1996venugopla@gmail.com', '8892773108', ''),
(10, 'yasheka', 9, 'html,css', '3', 'BE', 'yash1996venugopal@gmail.com', '8892773108', ''),
(11, 'yasheka', 9, 'html,css', '3', 'BE', 'yash1996venugopal@gmail.com', '8892773108', ''),
(12, 'emma watson', 1, 'dbms', '1', 'BE', 'emma.watson@gmail.com', '8892773108', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(10) NOT NULL,
  `ssn` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `ssn`, `mobile`, `city`) VALUES
('jhon deo', '180', '9036951392', 'mangalore'),
('jane deo', '181', '9876897756', 'kolkata'),
('jummy', '182', '7865473856', 'mysore'),
('micheal', '183', '9985647234', 'mumbai'),
('ben', '184', '9036051392', 'bangalore'),
('den', '185', '9481248679', 'mysore'),
('yasheka', '187', '8892773108', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `ceo` varchar(50) NOT NULL,
  `jobs_posted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`company_id`, `company_name`, `ceo`, `jobs_posted`) VALUES
(1, 'IBM', 'Ginni Rometty', 1),
(2, '3ACES', 'Ajeesh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(50) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(20) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `applied` int(20) NOT NULL DEFAULT '0',
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `employer`, `skills`, `qualification`, `experience`, `job_description`, `applied`, `posted`) VALUES
(1, 'web developer', '3aces', 'html,css,php,mysql', 'BE', 3, 'we are seeking for a web developer.', 1, '2017-07-19 11:12:58'),
(2, 'web designer', '3aces', 'css,bootstrap,javascript', 'BE (Computer science)', 2, 'we are seeking for a web designer', 1, '2017-07-13 05:29:01'),
(3, 'DBA', 'oracle', 'knowledge in database management system', 'BE(Computer science),ME(RDBMS)', 4, 'we are seeking for a DBA', 1, '2017-07-13 05:29:01'),
(4, 'programmer', 'microsoft', 'c,c++, java and phython', 'MS,BE (Computer science)', 1, 'we are seeking for a cadidate with good programming skills.', 2, '2017-07-13 05:29:01'),
(6, 'traniee', 'oracle', 'good knowledge in programming', 'BE', 0, 'we are seeking for a job traniee', 1, '2017-07-13 05:30:34'),
(8, 'design head', 'samsung', 'html,css', 'BE', 1, 'we are seeking for a web designer', 0, '2017-07-13 07:24:45'),
(9, 'senior engineer', 'ibm', 'html,css,php', 'BE,M.Tech', 5, 'we are seeking for a senior engineer with good experience.', 2, '2017-07-19 11:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` varchar(50) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
('1', 'karnataka'),
('10', 'bihar'),
('11', 'goa'),
('12', 'gujarath'),
('13', 'haryana'),
('14', 'Chhattisgarh'),
('15', 'telangana'),
('16', 'jammu and kashmir'),
('17', 'odisha'),
('2', 'tamil nadu'),
('3', 'kerala'),
('4', 'madya pradesh'),
('5', 'delhi'),
('6', 'mumbai'),
('7', 'rajasthan'),
('8', 'andhra pradesh'),
('9', 'assam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `session_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`user_id`, `name`, `mobile`, `email`, `username`, `password`) VALUES
(1, 'yasheka', '8892773108', 'yash1996venugopla@gmail.com', 'yasheka96', 'myselfyo'),
(2, 'emma watson', '9481248679', 'emma.watson@gmail.com', 'emma.watson', 'harry.potter'),
(3, 'harry potter', '9611677189', 'harry.potter@gmail.com', 'harry potter', 'hogwards');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `mobile`, `email`, `location`, `gender`, `skills`, `image`, `reg_date`) VALUES
(1, 'emma watson', '9481248679', 'emma.watson@gmail.com', 'Kerala', 'female', 'html,css,mysql,', 'images\\emma.jpg', '2017-07-11 05:57:35'),
(2, 'jane deo', '8277564477', 'jane.deo@gmail.com', 'telangana', 'female', 'php,mysql,', 'images/Koala.jpg', '2017-07-11 05:57:14'),
(3, 'jhonny depp', '9036051392', 'jhonny.depp@gmail.com', 'rajasthan', 'male', 'html,', 'images/jhonny.jpg', '2017-07-11 05:57:55'),
(4, 'selena gomez', '9611677189', 'selena.gomez@gmail.com', 'Karnataka', 'female', 'html,css,', 'images/selena.jpg', '2017-07-11 05:58:17'),
(5, 'swathi susi', '9909872536', 'swathi.susi@gmail.com', 'goa', 'female', 'html,css,', 'images/Chrysanthemum.jpg', '2017-07-11 06:16:45'),
(6, 'tanvi kulkarni', '9837456267', 'tanvi.kulkarni15@gmail.com', 'Karnataka', 'female', 'html,css,php,mysql,', 'images/Jellyfish.jpg', '2017-07-11 06:09:21'),
(7, 'tom cruise', '9786756389', 'tom.cruise@gmail.com', 'Tamil Nadu', 'male', 'css,php,', 'images/tom.jpg', '2017-07-11 05:58:36'),
(8, 'yasheka', '8892773108', 'yash1996venugopla@gmail.com', 'Karnataka', 'female', 'html,css,php,mysql,', 'images/yasheka.jpg', '2017-07-11 05:56:53'),
(9, 'Sumedh', '8900756377', 'sumedh.shriram@gmail.com', 'karnataka', 'male', 'html,css,', 'images/Penguins.jpg', '2017-07-11 11:22:14'),
(10, 'jhon deo', '98789718789', 'jhon.deo@gmail.com', 'jammu and kashmir', 'male', 'html,css,mysql,', 'images/Tulips.jpg', '2017-07-12 06:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`cad_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`password`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `cad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
