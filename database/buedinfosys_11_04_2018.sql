-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 09:38 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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

--
-- Dumping data for table `adult_brgy_clearance`
--

INSERT INTO `adult_brgy_clearance` (`adult_clearance_no`, `resident_no`, `purpose`, `issued_at`, `receipt_no`, `ctc_no`, `date_issued`) VALUES
(1, 9, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(2, 10, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(3, 11, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(4, 11, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(5, 11, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(6, 11, 'For nothing', '2018-10-15', '45123', '456789', '0000-00-00'),
(7, 12, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(8, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(9, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(10, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(11, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(12, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(13, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(14, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(15, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(16, 11, 'For nothing', '2018-10-17', '45123', '456789', '0000-00-00'),
(17, 11, 'For nothing', '2018-10-17', '45123', '456789', '0000-00-00'),
(18, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(19, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(20, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(21, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(22, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(23, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(24, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(25, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(26, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00'),
(27, 11, 'For nothing', '2018-10-16', '45123', '456789', '0000-00-00');

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

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_no`, `official_id`, `title`, `details`, `is_active`, `date_posted`) VALUES
(2, 0, 'Walwal Day', 'W\r\nA\r\nL\r\nQ\r\na\r\nL\r\n\r\nD\r\nA\r\nY', 0, ' 08 Oct 2018 ');

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

--
-- Dumping data for table `blotter_record`
--

INSERT INTO `blotter_record` (`blotter_no`, `resident_no`, `accused`, `blotter_details`, `blotter_date`) VALUES
(3, 4, 'Jonathan Lopez', 'The quick brown fox jumps over the lazy dog.', ' 07 Oct 2018 '),
(4, 5, 'Sinsho Aeb', 'excited robinson place pangasinan ', ' 08 Oct 2018 '),
(5, 6, 'Whew Meme', 'akdjdkgkeidcm', ' 08 Oct 2018 '),
(6, 8, 'Whew Meme', 'asdfsadf', ' 08 Oct 2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `business_permit`
--

CREATE TABLE `business_permit` (
  `business_permit_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `business_name` varchar(255) NOT NULL,
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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `is_active`, `created_at`) VALUES
(1, 'user742.jpg', 1, '');

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

--
-- Dumping data for table `minor_brgy_clearance`
--

INSERT INTO `minor_brgy_clearance` (`minor_clearance_no`, `resident_no`, `purpose`, `issued_at`, `date_issued`) VALUES
(1, 9, 'For nothing', '2018-10-15', '0000-00-00');

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
  `position` varchar(255) NOT NULL,
  `tmp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`official_id`, `resident_no`, `lastname`, `firstname`, `middlename`, `position`, `tmp`) VALUES
(2132314455, 15, 'Trump', 'Donald', 'USA', 'President', '4859');

-- --------------------------------------------------------

--
-- Table structure for table `ordinances`
--

CREATE TABLE `ordinances` (
  `ordinance_no` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordinances`
--

INSERT INTO `ordinances` (`ordinance_no`, `official_id`, `title`, `details`, `date_created`) VALUES
(1, 3213123, 'Grandest Chaseer', 'sadasdad', '0000-00-00'),
(2, 123123, '1adsadasd', 'asdasdasd', '0000-00-00'),
(3, 123123123, 'asdasdasd', 'ewadsadas12', '0000-00-00'),
(4, 213231, 'sadasdasdasdasd', 'asdasdasd', '0000-00-00');

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
(2, 'user', 'user.jpeg'),
(3, '168', 'user168.jpg'),
(4, '742', 'user742.jpg'),
(5, '1672', 'user1672.jpg'),
(6, '1672', 'user1672.jpg'),
(7, '168', 'user168.jpg'),
(8, '2416', 'user2416.jpg'),
(9, '8516', 'user8516.jpg'),
(10, '2797', 'user2797.jpg'),
(11, '4151', 'user4151.jpg'),
(12, '6675', 'user6675.png'),
(13, 'user4151', 'user.jpeg'),
(14, '7861', 'user7861.jpeg'),
(15, '8839', 'user8839.jpeg'),
(16, '5931', 'user5931.jpeg'),
(17, '4208', 'user4208.jpeg'),
(18, '20', 'user20.jpeg'),
(19, '9445', 'user9445.jpeg'),
(20, '9184', 'user9184.jpeg'),
(21, '8520', 'user8520.jpeg'),
(22, '5293', 'user5293.jpeg'),
(23, '4859', 'user4859.jpeg');

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
  `date_registered` varchar(32) NOT NULL,
  `tmp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `lastname`, `firstname`, `middlename`, `birthdate`, `age`, `address`, `sex`, `date_registered`, `tmp`) VALUES
(3, 'Rabago', 'Louie', 'Distance', 1998, 20, '609 Walwal St., Bued, Alaminos City, Pangasinan', 'M', ' 07 Oct 2018 ', '5267'),
(4, 'Valerio', 'Crisanta', 'Rara', 1998, 20, 'Sheik St., Bued, Alaminos City, Pangasinan', 'F', ' 07 Oct 2018 ', '6954'),
(5, 'Escano', 'Elaiza', 'Jane', 1996, 22, 'Jonathan Lopez\'s Residence', 'F', ' 07 Oct 2018 ', '7731'),
(6, 'Kah', 'Malou', 'Pet', 1998, 20, 'Ggege', 'F', ' 08 Oct 2018 ', '1672'),
(7, 'Escano', 'Elaiza', 'Pet', 1998, 20, 'wew', 'F', ' 08 Oct 2018 ', '168'),
(8, 'Doe', 'Malou', 'Distance', 1999, 19, '609 Walwal St., Bued, Alaminos City, Pangasinan', 'F', ' 08 Oct 2018 ', '2416'),
(9, 'Brosola', 'Rowel', 'Valdez', 1996, 22, '', 'M', '', '8516'),
(10, 'asdf', 'Rowel', 'Valdez', 2018, 0, '', 'M', ' 15 Oct 2018 ', '2797'),
(11, 'Brosola', 'Rowel', 'Valdez', 2018, 0, '', 'M', ' 15 Oct 2018 ', '4151'),
(12, 'Brosola', 'lkjsflkj', 'Valdez', 2018, 0, '', 'M', ' 15 Oct 2018 ', '6675'),
(13, 'Trump', 'December', 'Valdez', 1996, 22, '', '', '', '7861'),
(14, 'Trump', 'Donald', 'Valdez', 1996, 22, '', '', '03 Nov 2018', '8839'),
(15, 'Trump', 'Donald', 'Valdez', 1996, 22, '', 'M', '03 Nov 2018', '5931');

-- --------------------------------------------------------

--
-- Table structure for table `resolutions`
--

CREATE TABLE `resolutions` (
  `resolution_no` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `resolution_details` text NOT NULL,
  `date_created` date NOT NULL
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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
  MODIFY `adult_clearance_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blotter_record`
--
ALTER TABLE `blotter_record`
  MODIFY `blotter_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `minor_brgy_clearance`
--
ALTER TABLE `minor_brgy_clearance`
  MODIFY `minor_clearance_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordinances`
--
ALTER TABLE `ordinances`
  MODIFY `ordinance_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resolutions`
--
ALTER TABLE `resolutions`
  MODIFY `resolution_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
