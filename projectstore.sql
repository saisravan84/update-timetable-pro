-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 08:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `section` varchar(2) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Name`, `branch`, `year`, `section`, `course`) VALUES
('Basha', 'Information Technology', 'IV', 'A', 'Multimedia and Appli'),
('Uma Mahesh', 'Information Technology', 'III', 'B', 'Web Programing'),
('Uma Mahesh', 'Information Technology', 'IV', 'B', 'Scripting Languages'),
('Uma Mahesh', 'Information Technology', 'II', 'A', 'Object Oriented prog'),
('Basha', 'Information Technology', 'III', 'B', 'OOAD'),
('Basha', 'Information Technology', 'IV', 'A', 'MMAD'),
('Basha', 'Information Technology', 'III', 'A', 'MPI'),
('Basheer', 'Information Technology', 'II', 'B', 'OOP'),
('Basheer', 'Information Technology', 'III', 'A', 'Web Programing'),
('Basheer', 'Information Technology', 'I', 'A', 'PSCP'),
('Trilok Reddy', 'Information Technology', 'II', 'B', 'TOC'),
('Trilok Reddy', 'Information Technology', 'III', 'B', 'DBMS'),
('Trilok Reddy', 'Information Technology', 'IV', 'B', 'CG'),
('Trilok Reddy', 'Information Technology', 'II', 'A', 'OS'),
('Ravi', 'Computer Science and Engineeri', 'II', 'B', 'OOP'),
('Ravi', 'Computer Science and Engineeri', 'III', 'B', 'CD'),
('Naveen', 'Computer Science and Engineeri', 'IV', 'B', 'MAD'),
('Durga', 'Computer Science', 'IV', 'A', 'CG'),
('Amar', 'Computer Science', 'I', 'A', 'PSCP'),
('Mahesh', 'Mechanical Engineering', 'I', 'A', 'Thermal Engineering'),
('Sasi', 'Mechanical Engineering', 'IV', 'A', 'Heat Mechanincs'),
('Rohan', 'Mechanical Engineering', 'III', 'B', 'Fluid Mechanincs'),
('Manasa', 'Civil Engineering', 'II', 'B', 'Water Technology'),
('Harish', 'Civil Engineering', 'III', 'B', 'Road Concrete'),
('Harika', 'Civil Engineering', 'II', 'A', 'Environment Science'),
('Gopi', 'Civil Engineering', 'II', 'B', 'Environment Science');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `email`, `pwd`) VALUES
('admin', 'admin@gmail.com', 'admin1234'),
('asdfg', 'asdfg@gmail.com', 'asdfghjfgh'),
('manasa', 'manasareddy@gmail.com', '123456789'),
('sai', 'sravan@gmail.com', 'saiqwerty'),
('sravan1234', 'sravan@gmail.com', 'sravan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
