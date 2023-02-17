-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 06:55 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`) VALUES
('V1846', 'jahnavi', 'JAHNAVI');

-- --------------------------------------------------------

--
-- Table structure for table `assoc`
--

CREATE TABLE `assoc` (
  `name` varchar(255) DEFAULT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assoc`
--

INSERT INTO `assoc` (`name`, `id`, `password`, `pin`, `village`, `college`, `gender`) VALUES
('jahnavi', 'N181022', '1234', 531011, 'ramannapalem', 'rgukt', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `name` varchar(255) DEFAULT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`name`, `id`, `password`, `pin`, `village`, `college`, `gender`) VALUES
('Nag', 'N180638', '9082384238', 343432, 'kljsafk', 'lkjsdio', 'male'),
('NAGENDRA', 'N181022', 'jahnavi', 531011, 'RAMANNAPALEM', 'RGUKT', 'MALE'),
('jp', 'n181027', 'dk', 3232, 'kddk', 'dkdk', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `date` varchar(255) DEFAULT NULL,
  `game` varchar(255) NOT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `assoc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`date`, `game`, `venue`, `assoc`) VALUES
('2022-12-20', 'football', 'steelplant', 'SGF'),
('2022-12-21', 'handball', 'steelplant', 'SGF'),
('2022-09-30', 'soccer', 'ramannapalem', 'ukku club'),
('2022-09-30', 'football', 'ramannapalem', 'ukku club'),
('2022-10-09', 'football', 'dkdk', 'dkdk');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `date` varchar(255) DEFAULT NULL,
  `game` varchar(255) NOT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `assoc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`date`, `game`, `venue`, `assoc`) VALUES
('2022-09-30', 'football', 'ramannapalem', 'ukku club'),
('2022-09-30', 'soccer', 'steelplant', 'ukku club'),
('2022-09-30', 'football', 'ramannapalem', 'ukku club'),
('2022-10-09', 'football', 'dkdk', 'dkdk');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `date` varchar(255) DEFAULT NULL,
  `game` varchar(255) NOT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `assoc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`date`, `game`, `venue`, `assoc`) VALUES
('2022-09-30', 'football', 'ramannapalem', 'ukku club'),
('', '', '', ''),
('dkd', 'kdkd', 'dkkd', 'kdkd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assoc`
--
ALTER TABLE `assoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
