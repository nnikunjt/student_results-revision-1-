-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 04:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup_results_13-jul-2018.5:23 pm`
--

CREATE TABLE `backup_results_13-jul-2018.5:23 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `math_total` int(255) DEFAULT NULL,
  `math_obtain` varchar(255) DEFAULT NULL,
  `sci_total` int(255) DEFAULT NULL,
  `sci_obtain` int(255) DEFAULT NULL,
  `sst_total` int(255) DEFAULT NULL,
  `sst_obtain` int(255) DEFAULT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_results_13-jul-2018.5:23 pm`
--

INSERT INTO `backup_results_13-jul-2018.5:23 pm` (`id`, `roll_no`, `test_date`, `math_total`, `math_obtain`, `sci_total`, `sci_obtain`, `sst_total`, `sst_obtain`, `percentage`) VALUES
(2, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(3, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(5, 181201, '2018-07-19', 0, '0', 0, 0, 0, 0, 0),
(6, 181201, '2018-07-15', 0, '0', 0, 0, 0, 0, 0),
(7, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(8, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(11, 181201, '2018-07-18', 0, '0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `backup_results_13-jul-2018.5:24 pm`
--

CREATE TABLE `backup_results_13-jul-2018.5:24 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `math_total` int(255) DEFAULT NULL,
  `math_obtain` varchar(255) DEFAULT NULL,
  `sci_total` int(255) DEFAULT NULL,
  `sci_obtain` int(255) DEFAULT NULL,
  `sst_total` int(255) DEFAULT NULL,
  `sst_obtain` int(255) DEFAULT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_results_13-jul-2018.5:24 pm`
--

INSERT INTO `backup_results_13-jul-2018.5:24 pm` (`id`, `roll_no`, `test_date`, `math_total`, `math_obtain`, `sci_total`, `sci_obtain`, `sst_total`, `sst_obtain`, `percentage`) VALUES
(2, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(3, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(5, 181201, '2018-07-19', 0, '0', 0, 0, 0, 0, 0),
(6, 181201, '2018-07-15', 0, '0', 0, 0, 0, 0, 0),
(7, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(8, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(11, 181201, '2018-07-18', 0, '0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `backup_results_13-jul-2018.5:25 pm`
--

CREATE TABLE `backup_results_13-jul-2018.5:25 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `math_total` int(255) DEFAULT NULL,
  `math_obtain` varchar(255) DEFAULT NULL,
  `sci_total` int(255) DEFAULT NULL,
  `sci_obtain` int(255) DEFAULT NULL,
  `sst_total` int(255) DEFAULT NULL,
  `sst_obtain` int(255) DEFAULT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_results_13-jul-2018.5:25 pm`
--

INSERT INTO `backup_results_13-jul-2018.5:25 pm` (`id`, `roll_no`, `test_date`, `math_total`, `math_obtain`, `sci_total`, `sci_obtain`, `sst_total`, `sst_obtain`, `percentage`) VALUES
(2, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(3, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(5, 181201, '2018-07-19', 0, '0', 0, 0, 0, 0, 0),
(6, 181201, '2018-07-15', 0, '0', 0, 0, 0, 0, 0),
(7, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(8, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(11, 181201, '2018-07-18', 0, '0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `backup_students_13-jul-2018.5:23 pm`
--

CREATE TABLE `backup_students_13-jul-2018.5:23 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `std` int(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` varchar(15) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_students_13-jul-2018.5:23 pm`
--

INSERT INTO `backup_students_13-jul-2018.5:23 pm` (`id`, `roll_no`, `student_name`, `std`, `medium`, `birthdate`, `father_name`, `father_no`, `mother_name`, `mother_no`, `address`) VALUES
(1, 181201, 'KISHAN SHAILESHBHAI KHANT', 12, 'Gujarati', '2018-07-29', 'SHAILESHBHAI', '2147483647', 'LAXMIBEN', '2147483647', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011'),
(2, 180602, 'NIKUNJ NARESHBHAI THAKOR', 6, 'English(GSEB)', '2001-02-14', 'NARESHBHAI', '3543465', 'VARSHABEN', '111111', 'thfjyyuj'),
(3, 180103, 'YASH DIPESH KHANT', 1, 'English(GSEB)', '2018-07-08', 'DIPESH', '9898127048', 'LAXMIBEN', '7567542234', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011');

-- --------------------------------------------------------

--
-- Table structure for table `backup_students_13-jul-2018.5:24 pm`
--

CREATE TABLE `backup_students_13-jul-2018.5:24 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `std` int(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` varchar(15) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_students_13-jul-2018.5:24 pm`
--

INSERT INTO `backup_students_13-jul-2018.5:24 pm` (`id`, `roll_no`, `student_name`, `std`, `medium`, `birthdate`, `father_name`, `father_no`, `mother_name`, `mother_no`, `address`) VALUES
(1, 181201, 'KISHAN SHAILESHBHAI KHANT', 12, 'Gujarati', '2018-07-29', 'SHAILESHBHAI', '2147483647', 'LAXMIBEN', '2147483647', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011'),
(2, 180602, 'NIKUNJ NARESHBHAI THAKOR', 6, 'English(GSEB)', '2001-02-14', 'NARESHBHAI', '3543465', 'VARSHABEN', '111111', 'thfjyyuj'),
(3, 180103, 'YASH DIPESH KHANT', 1, 'English(GSEB)', '2018-07-08', 'DIPESH', '9898127048', 'LAXMIBEN', '7567542234', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011');

-- --------------------------------------------------------

--
-- Table structure for table `backup_students_13-jul-2018.5:25 pm`
--

CREATE TABLE `backup_students_13-jul-2018.5:25 pm` (
  `id` int(255) NOT NULL DEFAULT '0',
  `roll_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `std` int(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` varchar(15) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup_students_13-jul-2018.5:25 pm`
--

INSERT INTO `backup_students_13-jul-2018.5:25 pm` (`id`, `roll_no`, `student_name`, `std`, `medium`, `birthdate`, `father_name`, `father_no`, `mother_name`, `mother_no`, `address`) VALUES
(1, 181201, 'KISHAN SHAILESHBHAI KHANT', 12, 'Gujarati', '2018-07-29', 'SHAILESHBHAI', '2147483647', 'LAXMIBEN', '2147483647', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011'),
(2, 180602, 'NIKUNJ NARESHBHAI THAKOR', 6, 'English(GSEB)', '2001-02-14', 'NARESHBHAI', '3543465', 'VARSHABEN', '111111', 'thfjyyuj'),
(3, 180103, 'YASH DIPESH KHANT', 1, 'English(GSEB)', '2018-07-08', 'DIPESH', '9898127048', 'LAXMIBEN', '7567542234', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(255) NOT NULL,
  `roll_no` int(255) NOT NULL,
  `test_date` date NOT NULL,
  `math_total` int(255) DEFAULT NULL,
  `math_obtain` varchar(255) DEFAULT NULL,
  `sci_total` int(255) DEFAULT NULL,
  `sci_obtain` int(255) DEFAULT NULL,
  `sst_total` int(255) DEFAULT NULL,
  `sst_obtain` int(255) DEFAULT NULL,
  `percentage` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `roll_no`, `test_date`, `math_total`, `math_obtain`, `sci_total`, `sci_obtain`, `sst_total`, `sst_obtain`, `percentage`) VALUES
(2, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(3, 181201, '2018-07-01', 50, '45', 0, 0, 0, 0, 90),
(5, 181201, '2018-07-19', 0, '0', 0, 0, 0, 0, 0),
(6, 181201, '2018-07-15', 0, '0', 0, 0, 0, 0, 0),
(7, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(8, 181201, '2018-07-01', 0, '0', 0, 0, 0, 0, 0),
(11, 181201, '2018-07-18', 0, '0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `roll_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `std` int(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` varchar(15) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `student_name`, `std`, `medium`, `birthdate`, `father_name`, `father_no`, `mother_name`, `mother_no`, `address`) VALUES
(1, 181201, 'KISHAN SHAILESHBHAI KHANT', 12, 'Gujarati', '2018-07-29', 'SHAILESHBHAI', '2147483647', 'LAXMIBEN', '2147483647', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011'),
(2, 180602, 'NIKUNJ NARESHBHAI THAKOR', 6, 'English(GSEB)', '2001-02-14', 'NARESHBHAI', '3543465', 'VARSHABEN', '111111', 'thfjyyuj'),
(3, 180103, 'YASH DIPESH KHANT', 1, 'English(GSEB)', '2018-07-08', 'DIPESH', '9898127048', 'LAXMIBEN', '7567542234', 'BANK STREET AT PO ZADESHWAR  TA BHARUCH GUJARAT 392011');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'nikunj', '123456'),
(3, 'yash', 'yash'),
(4, 'kishan', 'kishan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll_no` (`roll_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`roll_no`) REFERENCES `students` (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
