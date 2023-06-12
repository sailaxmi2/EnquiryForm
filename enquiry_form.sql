-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 06:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_list`
--

CREATE TABLE `enquiry_list` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_Last_Name` varchar(250) NOT NULL,
  `User_Phone_pno` varchar(250) NOT NULL,
  `User_Gender` varchar(250) NOT NULL,
  `User_Email_id` varchar(250) NOT NULL,
  `User_Course` varchar(250) NOT NULL,
  `User_section` varchar(250) NOT NULL,
  `User_Timings` varchar(250) NOT NULL,
  `User_Training_program` varchar(250) NOT NULL,
  `User_Fee` varchar(250) NOT NULL,
  `User_Faculty` varchar(250) NOT NULL,
  `User_Address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `State` varchar(250) NOT NULL,
  `User_Laptop_status` varchar(250) NOT NULL,
  `Batch_Strength` varchar(250) NOT NULL,
  `User_Joining_Date` datetime NOT NULL,
  `User_Realving_Date` datetime NOT NULL,
  `Date_and_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_list`
--

INSERT INTO `enquiry_list` (`User_ID`, `User_Name`, `User_Last_Name`, `User_Phone_pno`, `User_Gender`, `User_Email_id`, `User_Course`, `User_section`, `User_Timings`, `User_Training_program`, `User_Fee`, `User_Faculty`, `User_Address`, `City`, `State`, `User_Laptop_status`, `Batch_Strength`, `User_Joining_Date`, `User_Realving_Date`, `Date_and_Time`) VALUES
(1, 'sai', 'laxmi', '9701525005', 'female', 'sai@gamil.com', 'python', 'Morning', '2022-11-13T19:28', 'School of Fundamentals', '4,500/-', 'Rajshekar', 'patancheru', 'hyderabad', 'Telengana', 'Avaliable', '5-10', '2022-11-27 19:28:00', '2022-12-08 19:28:00', '2022-11-13 13:58:37'),
(2, 'saiiiii', '', '', 'male', '', 'python', 'Morning', '', 'School of Fundamentals', '4,500/-', 'Rajshekar', '', '', 'Andhra Pradesh', 'Avaliable', '5-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-11-15 05:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Date_and_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `User_Name`, `Password`, `Name`, `Date_and_time`) VALUES
(1, 'admin', 'admin', 'sai', '2022-11-13 13:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry_list`
--
ALTER TABLE `enquiry_list`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry_list`
--
ALTER TABLE `enquiry_list`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
