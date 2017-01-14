-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 03:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountant`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `coa` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `coa`, `type`, `updated_at`, `created_at`) VALUES
(0, 'bank negara', '123456', 'accounting', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE `accs` (
  `id` int(10) NOT NULL,
  `acc_id` varchar(20) DEFAULT NULL,
  `acc_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `curds`
--

CREATE TABLE `curds` (
  `id` int(10) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curds`
--

INSERT INTO `curds` (`id`, `title`, `date`, `description`, `status`, `updated_at`, `created_at`) VALUES
(1, 'nia', '2017-01-03', 'wdcwe', 'undone', '2017-01-12 14:35:56', '2017-01-12 05:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `date`, `type`, `size`, `priority`) VALUES
(0, 'Supplier Cost', NULL, '.doc', '132kb', 'High'),
(1, 'Consruction', '2017-01-12 16:00:00', '.file', '150kb', 'High'),
(2, 'Customer', '2017-01-08 16:00:00', '.doc', '108kb', 'Medium'),
(3, 'Food Stall', '2017-01-09 16:00:00', '.file', '145kb', 'Low');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curds`
--
ALTER TABLE `curds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curds`
--
ALTER TABLE `curds`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
