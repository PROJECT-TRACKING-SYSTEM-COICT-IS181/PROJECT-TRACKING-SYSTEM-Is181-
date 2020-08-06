-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 02:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `project_name` varchar(60) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `employee_code` int(30) NOT NULL,
  `employee_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`project_name`, `employee_name`, `email`, `description`, `employee_code`, `employee_id`) VALUES
('Project Tracker', 'Jesse Xibona', 'jxibona@gmail.com', 'Jesse please give me the feedback', 8, 12918),
('TTCL views', 'Subira Msangi', 'subrahm@gmail.com', 'Sabrah what is your progress', 9, 8137),
('Hello Motto', 'Subira Msangi', 'subrahm@gmail.com', 'Good progress', 10, 8137),
('Jesse Projects', 'Jesse Xibona', 'jxibona@gmail.com', 'Please change the progress', 11, 12918),
('BCX project', 'Jesse Xibona', 'jxibona@gmail.com', 'Nice progress', 12, 12918),
('BCX project', 'Jesse Xibona', 'jxibona@gmail.com', 'Please come to my office', 13, 12918),
('BCX project', 'Jesse Xibona', 'jxibona@gmail.com', 'Please change the description', 24, 12918);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `project_name` varchar(60) NOT NULL,
  `progress` varchar(60) NOT NULL,
  `progress_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`project_name`, `progress`, `progress_id`) VALUES
('Jesse Projects', 'System Implementation and Prototype testing', 34),
('Project Tracker', 'System Analysis and Design', 37),
('Hello Motto', 'Report Writing', 38),
('BCX project', 'Documentation', 39),
('TTCL views', 'System Implementation and Prototype testing', 45);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_name` varchar(60) NOT NULL,
  `project_id` int(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `start_date` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_name`, `project_id`, `employee_id`, `employee_name`, `start_date`, `description`) VALUES
('Project Tracker', 29, '12918', 'Jesse Xibona', '12-09-2019', 'strictly official'),
('Jesse Projects', 30, '12918', 'Jesse Xibona', '12-09-2020', 'just for codes'),
('Hello Motto', 31, '08137', 'Subira Msangi', '12-09-2019', 'for school'),
('BCX project', 32, '12918', 'Jesse Xibona', '12-09-2020', 'for excel purposes'),
('TTCL views', 33, '08137', 'Subira Msangi', '12-09-2019', 'Employee data structures');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `employee_name` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(60) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`employee_name`, `password`, `email`, `phone_number`, `employee_id`, `designation`) VALUES
('Alice Tom', '1234', 'arleenmarck@gmail.com', '0769850188', '05343', 'Admin'),
('Subira Msangi', '1234', 'subrahm@gmail.com', '0768345232', '08137', 'user'),
('Jesse Xibona', '0000', 'jxibona@gmail.com', '0769789654', '12918', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`employee_code`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progress_id`),
  ADD KEY `progress` (`project_name`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_name` (`project_name`),
  ADD KEY `project` (`employee_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_name` (`employee_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `employee_code` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `progress_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress` FOREIGN KEY (`project_name`) REFERENCES `project` (`project_name`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project` FOREIGN KEY (`employee_id`) REFERENCES `registration` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
