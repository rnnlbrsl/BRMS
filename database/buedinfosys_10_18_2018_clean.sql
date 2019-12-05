-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 07:31 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buedinfosys`
--

-- --------------------------------------------------------

--
-- Table structure for table `adult_brgy_clearance`
--

CREATE TABLE `adult_brgy_clearance` (
  `adult_clearance_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `issued_at` varchar(255) NOT NULL,
  `receipt_no` varchar(255) NOT NULL,
  `ctc_no` varchar(255) NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_no` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `date_posted` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blotter_record`
--

CREATE TABLE `blotter_record` (
  `blotter_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `accused` varchar(255) NOT NULL,
  `blotter_details` text NOT NULL,
  `blotter_date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_permit`
--

CREATE TABLE `business_permit` (
  `business_permit_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `location` varchar(254) NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `severity` varchar(30) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `case_num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `employee_id`, `severity`, `notes`, `case_num`) VALUES
(2, '1029482', 'Critical', '<p>stole company property</p>', '201809111431489832'),
(3, '1029482', 'Critical', '<p>stole company property</p>', '20180911143244.2511'),
(4, '1029482', 'Critical', '<p>stole company property</p>', '20180911143429.2461');

-- --------------------------------------------------------

--
-- Table structure for table `cert_of_indigency`
--

CREATE TABLE `cert_of_indigency` (
  `indigency_cert_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `tmp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name`, `surname`, `phone`, `email`, `gender`, `joined`, `tmp`) VALUES
(8, '9246612', 'Crisanta', 'Valerio', '263773123123', 'crisanta@valerio.com', 'F', ' 30 Sep 2018 ', '168'),
(9, '8718445', 'Elaiza', 'Escano', '263773135123', 'elaiz@escano.com', 'F', ' 30 Sep 2018 ', '2416');

-- --------------------------------------------------------

--
-- Table structure for table `minor_brgy_clearance`
--

CREATE TABLE `minor_brgy_clearance` (
  `minor_clearance_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `issued_at` date NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `official_id` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordinances`
--

CREATE TABLE `ordinances` (
  `ordinance_no` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date_created` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `tmp` varchar(90) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `tmp`, `name`) VALUES
(2, '1301', 'user1301.jpg'),
(3, '5267', 'user5267.jpg'),
(4, '6954', 'user6954.jpg'),
(5, '7731', 'user7731.jpg'),
(6, '1672', 'user1672.jpg'),
(7, '168', 'user168.jpg'),
(8, '2416', 'user2416.jpg'),
(9, '8516', 'user8516.jpg'),
(10, '2797', 'user2797.jpg'),
(11, '4151', 'user4151.jpg'),
(12, '6675', 'user6675.png'),
(13, '8639', 'user8639.png'),
(14, '5075', 'user5075.png');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `birthdate` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `date_registered` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `lastname`, `firstname`, `middlename`, `birthdate`, `age`, `address`, `sex`, `date_registered`) VALUES
(2, 'Valerio', 'Crisanta', 'Rara', 1989, 29, 'asdasdasd', 'F', ' 07 Oct 2018 '),
(3, 'Rabago', 'Louie', 'Distance', 1998, 20, '609 Walwal St., Bued, Alaminos City, Pangasinan', 'M', ' 07 Oct 2018 '),
(4, 'Valerio', 'Crisanta', 'Rara', 1998, 20, 'Sheik St., Bued, Alaminos City, Pangasinan', 'F', ' 07 Oct 2018 '),
(5, 'Escano', 'Elaiza', 'Jane', 1996, 22, 'Jonathan Lopez\'s Residence', 'F', ' 07 Oct 2018 '),
(6, 'Kah', 'Malou', 'Pet', 1998, 20, 'Ggege', 'F', ' 08 Oct 2018 '),
(7, 'Escano', 'Elaiza', 'Pet', 1998, 20, 'wew', 'F', ' 08 Oct 2018 '),
(8, 'Doe', 'Malou', 'Distance', 1999, 19, '609 Walwal St., Bued, Alaminos City, Pangasinan', 'F', ' 08 Oct 2018 '),
(15, 'Ramos', 'Shekinah', 'Para', 1997, 21, '', 'F', '16 Oct 2018'),
(16, 'Escano', 'Elaiza', 'Faha', 1997, 21, '', 'F', '16 Oct 2018'),
(17, 'Nagazaki', 'Naruto', 'boruto', 2018, 0, '', 'M', ' 16 Oct 2018 '),
(18, 'Shekinah', 'Ramos', 'shekinah@ramos.com', 1997, 21, '09123456789', '8639', ''),
(19, 'Boom', 'Louie', 'Boom', 1999, 19, 'Boom Boom St., Nancy Binay, Philippines', 'M', ' 17 Oct 2018 '),
(20, 'Ramos', 'Shekinah', 'Rara', 1997, 21, '', 'F', ' 17 Oct 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `resolutions`
--

CREATE TABLE `resolutions` (
  `resolution_no` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `resolution_details` text NOT NULL,
  `date_created` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `permission` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `username`, `password`, `joined`, `type`, `permission`, `gender`, `phone`) VALUES
(8, 'shekina', 'ramos', 'shekinaramos@gmail.com', 'sheki', 'db3b992995b36a9d2ac616ea2867b14a', ' 29 Sep 2018 ', 'user', '1', 'F', '263773132312'),
(9, 'admin', 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', ' 30 Sep 2018 ', 'user', '1', 'M', '263773413123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adult_brgy_clearance`
--
ALTER TABLE `adult_brgy_clearance`
  ADD PRIMARY KEY (`adult_clearance_no`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_no`);

--
-- Indexes for table `blotter_record`
--
ALTER TABLE `blotter_record`
  ADD PRIMARY KEY (`blotter_no`);

--
-- Indexes for table `business_permit`
--
ALTER TABLE `business_permit`
  ADD PRIMARY KEY (`business_permit_no`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cert_of_indigency`
--
ALTER TABLE `cert_of_indigency`
  ADD PRIMARY KEY (`indigency_cert_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minor_brgy_clearance`
--
ALTER TABLE `minor_brgy_clearance`
  ADD PRIMARY KEY (`minor_clearance_no`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`official_id`);

--
-- Indexes for table `ordinances`
--
ALTER TABLE `ordinances`
  ADD PRIMARY KEY (`ordinance_no`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resolutions`
--
ALTER TABLE `resolutions`
  ADD PRIMARY KEY (`resolution_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adult_brgy_clearance`
--
ALTER TABLE `adult_brgy_clearance`
  MODIFY `adult_clearance_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blotter_record`
--
ALTER TABLE `blotter_record`
  MODIFY `blotter_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_permit`
--
ALTER TABLE `business_permit`
  MODIFY `business_permit_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cert_of_indigency`
--
ALTER TABLE `cert_of_indigency`
  MODIFY `indigency_cert_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `minor_brgy_clearance`
--
ALTER TABLE `minor_brgy_clearance`
  MODIFY `minor_clearance_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `official_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordinances`
--
ALTER TABLE `ordinances`
  MODIFY `ordinance_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `resolutions`
--
ALTER TABLE `resolutions`
  MODIFY `resolution_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
