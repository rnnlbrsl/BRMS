-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 12:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-brms`
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

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_no`, `official_id`, `title`, `details`, `is_active`, `date_posted`) VALUES
(1, 0, 'Barangay Fiesta', 'Our Barangay Fiesta will be on December 24. We urge everyone to join and celebrate our fiesta!', 1, ' 06 Dec 2019 ');

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
  `location` varchar(255) NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `cert_of_indigency`
--

INSERT INTO `cert_of_indigency` (`indigency_cert_no`, `resident_no`, `purpose`, `date_issued`) VALUES
(1, 2, 'Wala lang.', '2019-12-07'),
(2, 2, 'Wala lang.', '2019-12-07'),
(3, 2, 'Wala Lang.', '2019-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `minor_brgy_clearance`
--

CREATE TABLE `minor_brgy_clearance` (
  `minor_clearance_no` int(11) NOT NULL,
  `resident_no` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `issued_at` date NOT NULL
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
  `position` varchar(255) NOT NULL,
  `tmp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`official_id`, `resident_no`, `lastname`, `firstname`, `middlename`, `position`, `tmp`) VALUES
(1, 0, 'Brosola', 'Ronnel', 'Valdez', 'Barangay Captain', 'user3862.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
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
(1, 'Brosola', 'Rian Jed', 'Valdez', '2012-03-05', 7, '004 Bugarin St., Quibuar, Alaminos City, Pangasinan', 'M', ' 06 Dec 2019 ', ''),
(2, 'Brosola', 'Ronnel', 'Valdez', '1992-12-24', 27, '004 Bugarin St., Quibuar, Alaminos City, Pangasinan', 'M', ' 06 Dec 2019 ', ''),
(3, 'Brosola', 'Rio Amor', 'Valdez', '1994-04-09', 25, '004 Bugarin St., Quibuar, Alaminos City, Pangasinan', 'F', ' 06 Dec 2019 ', '');

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
(2, 'Ronnel', 'Brosola', 'ronnel.brosola@gmail.com', 'ronnel', 'c77c8ed22d2eb97676981ceea1f6d9d9', ' 06 Dec 2019 ', 'admin', '1', 'M', '09271908082');

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
-- Indexes for table `cert_of_indigency`
--
ALTER TABLE `cert_of_indigency`
  ADD PRIMARY KEY (`indigency_cert_no`);

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
  MODIFY `announcement_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `cert_of_indigency`
--
ALTER TABLE `cert_of_indigency`
  MODIFY `indigency_cert_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `minor_brgy_clearance`
--
ALTER TABLE `minor_brgy_clearance`
  MODIFY `minor_clearance_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordinances`
--
ALTER TABLE `ordinances`
  MODIFY `ordinance_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resolutions`
--
ALTER TABLE `resolutions`
  MODIFY `resolution_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
