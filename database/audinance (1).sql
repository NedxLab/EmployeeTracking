-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 08:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(4) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `modified_date` varchar(255) NOT NULL,
  `verification_code` int(4) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `user_id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `user_level`, `created_date`, `modified_date`, `verification_code`, `status`) VALUES
(1, 'AD633a128785175', 'chineduodo', 'Chinedu', 'Odo', 'odoc047@gmail.com', '$2y$10$eNppeM6Osfrfsavs8IS3SOdDdSV0BiI/FcjjaPvNxD6M0bmN5Aruy', 1, '10/03/2022 12:36:55 am', '10/03/2022 12:36:55 am', 1, 1),
(2, 'AD633aabfb2458f', 'adminadmin', 'admin', 'admin', 'admin@admin.com', '$2y$10$aHAQQyDRd75EK9pgTFZTDuKOd7Fhbg.oKFec8zwpAHe6SwrbCtqlO', 2, '10/03/2022 11:31:39 am', '10/03/2022 11:31:39 am', 1, 1),
(3, 'AD633b22602179a', 'adminadmin1', 'admin', 'admin', 'admin@example.com', '$2y$10$VKjBL7mdbJQJquo456pLHOSRQph2BrpAio17oWuOsw4kfU81LKV.a', 3, '10/03/2022 07:56:48 pm', '10/03/2022 07:56:48 pm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `change_logs`
--

CREATE TABLE `change_logs` (
  `id` int(11) NOT NULL,
  `event_type` varchar(30) NOT NULL DEFAULT '0',
  `user_id` varchar(100) NOT NULL,
  `admin_id` varchar(25) NOT NULL,
  `summary` varchar(500) NOT NULL DEFAULT '',
  `extra` int(11) NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT 0,
  `created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `change_logs`
--

INSERT INTO `change_logs` (`id`, `event_type`, `user_id`, `admin_id`, `summary`, `extra`, `status`, `created_date`) VALUES
(1, '0', '633', '', '', 0, 1, '10/03/2022 10:42:21 am'),
(2, '0', '633aa9444332fchineduodo', 'AD633a128785175', '', 0, 1, '10/03/2022 11:20:04 am'),
(3, '0', '633aa99d1b7bauseruser', 'AD633a128785175', '', 0, 1, '10/03/2022 11:21:33 am'),
(4, 'create_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 1, '10/03/2022 11:24:30 am'),
(5, 'create_admins', 'AD633aabfb2458f', 'AD633a128785175', '', 0, 1, '10/03/2022 11:31:39 am'),
(6, 'create_employee', 'EM633aae01d70e7', 'AD633a128785175', '', 0, 1, '10/03/2022 11:40:17 am'),
(7, 'update_users', 'AD633a128785175', 'AD633a128785175', '', 0, 0, '10/03/2022 12:00:14 pm'),
(8, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 12:30:58 pm'),
(9, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:31:48 pm'),
(10, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:32:26 pm'),
(11, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:33:37 pm'),
(12, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:35:05 pm'),
(13, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:35:23 pm'),
(14, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:36:07 pm'),
(15, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:38:58 pm'),
(16, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:40:59 pm'),
(17, 'update_users', '633aa06d75be4kevindebruyne', 'AD633a128785175', '', 0, 0, '10/03/2022 06:44:25 pm'),
(18, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:45:00 pm'),
(19, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:47:25 pm'),
(20, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:48:18 pm'),
(21, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:49:20 pm'),
(22, 'update_users', '633aa9444332fchineduodo', 'AD633a128785175', '', 0, 0, '10/03/2022 06:49:32 pm'),
(23, 'update_users', '633aa9444332fchineduodo', 'AD633a128785175', '', 0, 0, '10/03/2022 06:49:45 pm'),
(24, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:51:10 pm'),
(25, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:52:02 pm'),
(26, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:52:22 pm'),
(27, 'update_users', '633aaa4e5f76bwizkid', 'AD633a128785175', '', 0, 0, '10/03/2022 06:52:30 pm'),
(28, 'create_employee', 'EM633b1370c80b0', 'AD633a128785175', '', 0, 1, '10/03/2022 06:53:04 pm'),
(29, 'create_employee', 'EM633b13eabb304', 'AD633a128785175', '', 0, 1, '10/03/2022 06:55:06 pm'),
(30, 'create_users', '633b14282addajoshuadaniel', 'AD633a128785175', '', 0, 1, '10/03/2022 06:56:08 pm'),
(31, 'create_users', '633b148012110jumokemide', 'AD633a128785175', '', 0, 1, '10/03/2022 06:57:36 pm'),
(32, 'create_admins', 'AD633b22602179a', 'AD633a128785175', '', 0, 1, '10/03/2022 07:56:48 pm');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(50) NOT NULL DEFAULT '',
  `surname` varchar(200) NOT NULL DEFAULT '',
  `firstname` varchar(200) NOT NULL DEFAULT '',
  `othername` varchar(200) NOT NULL DEFAULT '',
  `gradelevel` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `appointment` varchar(5) NOT NULL,
  `confirmation` varchar(5) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `created_date` varchar(23) NOT NULL,
  `modified_date` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `surname`, `firstname`, `othername`, `gradelevel`, `email`, `appointment`, `confirmation`, `status`, `created_date`, `modified_date`) VALUES
(1, 'EM633a2ceec1185', 'silva', 'david', 'captain', '1', 'city@city.com', '0000-', '0000-', 1, '10/03/2022 02:29:34 am', '10/03/2022 02:29:34 am'),
(2, 'EM633aac2b9e33b', 'nwafor', 'emeka', 'captain', '1', 'employee@em.com', 'yes', '1', 1, '10/03/2022 11:32:27 am', '10/03/2022 11:32:27 am'),
(3, 'EM633aacaa7a2f6', 'okafor', 'john', 'captain', '9', 'employ@em.com', 'yes', '1', 1, '10/03/2022 11:34:34 am', '10/03/2022 11:34:34 am'),
(4, 'EM633aad47a7f83', 'Odo', 'Chinedu', 'steve', '6', 'odoc047@gmail.com', 'yes', '1', 1, '10/03/2022 11:37:11 am', '10/03/2022 11:37:11 am'),
(5, 'EM633aae01d70e7', 'okafor', 'patrick', 'simeon', '6', 'employ@emod.com', 'yes', '1', 1, '10/03/2022 11:40:17 am', '10/03/2022 11:40:17 am'),
(6, 'EM633b1370c80b0', 'tola', 'temi', 'yemi', '7', 'omo@godabeg.com', 'yes', '1', 1, '10/03/2022 06:53:04 pm', '10/03/2022 06:53:04 pm'),
(7, 'EM633b13eabb304', 'jasmine', 'jest', 'console', '8', 'js@employ.com', 'yes', '1', 1, '10/03/2022 06:55:06 pm', '10/03/2022 06:55:06 pm');

-- --------------------------------------------------------

--
-- Table structure for table `estacode`
--

CREATE TABLE `estacode` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `serial` varchar(200) NOT NULL DEFAULT '',
  `voucher_no` varchar(200) NOT NULL DEFAULT '',
  `voucher_date` date NOT NULL,
  `voucher_amount` double NOT NULL DEFAULT 0,
  `voucher_currency` varchar(100) NOT NULL DEFAULT '',
  `program_title` varchar(500) NOT NULL DEFAULT '',
  `program_type` smallint(6) NOT NULL DEFAULT 0,
  `program_country` varchar(100) NOT NULL DEFAULT '',
  `long_haul` varchar(50) NOT NULL DEFAULT '',
  `trip_start_date` date NOT NULL,
  `trip_end_date` date NOT NULL,
  `remarks` varchar(1000) NOT NULL DEFAULT '',
  `status` smallint(2) NOT NULL DEFAULT 0,
  `time_added` varchar(255) NOT NULL,
  `time_updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estacode`
--

INSERT INTO `estacode` (`id`, `user_id`, `employee_id`, `serial`, `voucher_no`, `voucher_date`, `voucher_amount`, `voucher_currency`, `program_title`, `program_type`, `program_country`, `long_haul`, `trip_start_date`, `trip_end_date`, `remarks`, `status`, `time_added`, `time_updated`) VALUES
(1, '633a1bc2b499fsophiamomodu', '', '1234567', '12233', '0000-00-00', 0, '3242', '111', 11, '11', '11', '0000-00-00', '0000-00-00', 'xxx', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '633aaa4e5f76bwizkid', '', '12345678', '12233', '2022-09-28', 111, 'naira', '111', 11, '11', 'mjjj', '2022-10-05', '2022-10-01', 'it is good', 0, '0000-00-00 00:00:00', '10/03/2022 04:01:50 pm'),
(3, '633aa9444332fchineduodo', '', '1234567', '12233', '2022-09-30', 100, '3242', '111', 11, '11', '11', '2022-11-02', '2022-10-22', 'wertyp', 0, '10/03/2022 05:29:25 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `programfee`
--

CREATE TABLE `programfee` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `employee_id` varchar(110) NOT NULL,
  `serial` varchar(100) NOT NULL DEFAULT '',
  `voucher_no` varchar(100) NOT NULL DEFAULT '',
  `voucher_date` date NOT NULL,
  `voucher_amount` double NOT NULL DEFAULT 0,
  `voucher_currency` varchar(100) NOT NULL DEFAULT '0',
  `program_start_date` date NOT NULL,
  `program_end_date` date NOT NULL,
  `remarks` varchar(1000) NOT NULL DEFAULT '',
  `status` smallint(2) NOT NULL DEFAULT 0,
  `time_added` varchar(255) NOT NULL,
  `time_updated` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programfee`
--

INSERT INTO `programfee` (`id`, `user_id`, `employee_id`, `serial`, `voucher_no`, `voucher_date`, `voucher_amount`, `voucher_currency`, `program_start_date`, `program_end_date`, `remarks`, `status`, `time_added`, `time_updated`) VALUES
(1, '', '0', '1234567', '12233', '2022-09-27', 111, '3242', '2022-09-29', '2022-09-29', 'nice', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '633aa9444332fchineduodo', 'EM633aac2b9e33b', '123', '12233', '2022-10-06', 0, '3242', '2022-09-28', '2022-10-15', 'thanks', 0, '10/03/2022 06:10:36 pm', '10/03/2022 06:10:36 pm');

-- --------------------------------------------------------

--
-- Table structure for table `ticketing`
--

CREATE TABLE `ticketing` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `serial` varchar(100) NOT NULL DEFAULT '',
  `voucher_no` varchar(100) NOT NULL DEFAULT '',
  `voucher_date` date NOT NULL,
  `voucher_amount` double NOT NULL DEFAULT 0,
  `voucher_currency` varchar(100) NOT NULL DEFAULT '',
  `airline` varchar(500) NOT NULL DEFAULT '',
  `agent` varchar(500) NOT NULL DEFAULT '',
  `booking_ref` varchar(100) NOT NULL DEFAULT '',
  `ticket_no` varchar(100) NOT NULL DEFAULT '',
  `destination` varchar(100) NOT NULL DEFAULT '',
  `depart_date` date NOT NULL,
  `return_date` date NOT NULL,
  `remarks` varchar(1000) NOT NULL DEFAULT '',
  `status` smallint(2) NOT NULL DEFAULT 0,
  `time_added` varchar(255) NOT NULL,
  `time_updated` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketing`
--

INSERT INTO `ticketing` (`id`, `user_id`, `employee_id`, `serial`, `voucher_no`, `voucher_date`, `voucher_amount`, `voucher_currency`, `airline`, `agent`, `booking_ref`, `ticket_no`, `destination`, `depart_date`, `return_date`, `remarks`, `status`, `time_added`, `time_updated`) VALUES
(1, '', '0', '1234567', '112', '2022-09-28', 111, 'qw', 'dkdk', 'jss', 'dhd', 'djd', 'kdjjd', '2022-10-05', '2022-11-04', 'good', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '633aa9444332fchineduodo', 'EM633aac2b9e33b', '1234567', '12233', '2022-09-29', 200, 'doolar', 'arik', 'ewu', '12298', '1298', 'trenches', '2022-10-04', '2025-10-21', 'japa', 0, '10/03/2022 06:22:17 pm', '10/03/2022 06:22:17 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL DEFAULT '',
  `dob` varchar(34) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL DEFAULT '',
  `salt` varchar(100) NOT NULL DEFAULT '',
  `verified` smallint(2) NOT NULL DEFAULT 0,
  `auth` varchar(1000) NOT NULL DEFAULT '',
  `status` smallint(2) NOT NULL DEFAULT 0,
  `created_date` varchar(255) NOT NULL,
  `modified_date` varchar(255) NOT NULL,
  `verification_code` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `first_name`, `last_name`, `contact_no`, `email`, `dob`, `address`, `password`, `salt`, `verified`, `auth`, `status`, `created_date`, `modified_date`, `verification_code`) VALUES
(3, '633aa06d75be4kevindebruyne', 'kevindebruyne', 'kevin', 'debruyne', '2147483647', 'kdb@mancity.com', '11/12/2011', 'home', '$2y$10$yDq3rXNlx9n/gxjJ1EJevORyJOkNClhR1OkBfnCow1cq01B0llt96', '', 0, '', 1, '10/03/2022 10:42:21 am', '10/03/2022 06:44:25 pm', 1),
(4, '633aa9444332fchineduodo', 'chineduodo', 'Chinedu', 'Odo', '2147483647', '47@gmail.com', '11/12/2011', 'unity home, angwan sarki, orozo, Abuja', '$2y$10$xdSx0.RKf1T3pHKwJbtuW./wOungepGcF7SUxm8p7fjwN7/KJH3mq', '', 0, '', 1, '10/03/2022 11:20:04 am', '10/03/2022 06:49:45 pm', 1),
(6, '633aaa4e5f76bwizkid', 'wizkid', 'wiz', 'boy', '09034946540', 'wizzy@email.com', '01/12/2007', 'arab home', '$2y$10$P6cJWaLKnUzVLOrYRiVXWOc0M6A0v3VUzmr1tFm.vUyTsT9/S3PG6', '', 0, '', 1, '10/03/2022 11:24:30 am', '10/03/2022 06:52:30 pm', 1),
(7, '633b14282addajoshuadaniel', 'joshuadaniel', 'joshua', 'daniel', '09034946540', 'user@users.com', '01/12/2007', 'west side', '$2y$10$7tGa9beX7wh0LuK5LQ4FzeThatD/g1LKRa.UIz2Cp8n.2SvMqsr1C', '', 0, '', 1, '10/03/2022 06:56:08 pm', '10/03/2022 06:56:08 pm', 1),
(8, '633b148012110jumokemide', 'jumokemide', 'jumoke', 'mide', '09034946540', 'register@users.com', '2022-10-06', 'west side', '$2y$10$AFxGg3riUbwdCHNe2tLpIuXnszNnKWBzTYl3DB09/sTK05C/IIw0i', '', 0, '', 1, '10/03/2022 06:57:36 pm', '10/03/2022 06:57:36 pm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_logs`
--
ALTER TABLE `change_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estacode`
--
ALTER TABLE `estacode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programfee`
--
ALTER TABLE `programfee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketing`
--
ALTER TABLE `ticketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `change_logs`
--
ALTER TABLE `change_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estacode`
--
ALTER TABLE `estacode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programfee`
--
ALTER TABLE `programfee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticketing`
--
ALTER TABLE `ticketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
