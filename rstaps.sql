-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 01, 2023 at 01:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rstaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `email`, `phone`, `message`, `time`) VALUES
('Syed Qasim Ali', 'syedqasimali599@gmail.com', '9390265991', 'Need help regarding group pay', '2023-06-01 16:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `user` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `reason` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`user`, `phone`, `amount`, `reason`, `time`) VALUES
('qasim', '7330967653', 10000, 'Bday party', '2023-06-01 16:40:48'),
('qasim', '9390265992', 10000, 'Bday party', '2023-06-01 16:40:48'),
('qasim', '9390265992', 10000, 'Dinner', '2023-06-01 16:50:49'),
('qasim', '7330967653', 10000, 'Dinner', '2023-06-01 16:50:49'),
('salman', '9390265991', 16666.7, 'Road Trip', '2023-06-01 17:10:21'),
('salman', '7330967653', 16666.7, 'Road Trip', '2023-06-01 17:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`firstname`, `lastname`, `email`, `date`, `gender`, `phone`, `username`, `password`) VALUES
('Syed Qasim', 'Ali', 'syedqasimali599@gmail.com', '2002-02-24', 'm', '9390265991', 'qasim', '123456'),
('Zaid Ali ', 'Khan', 'zaidalikhan012@gmail.com', '2003-05-31', 'm', '7330967653', 'zaid', '123456'),
('Syed', 'Salman', 'salman@gmail.com', '2002-12-12', 'm', '9390265992', 'salman', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `settle_up`
--

CREATE TABLE `settle_up` (
  `user` varchar(20) NOT NULL,
  `why` text NOT NULL,
  `amount` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settle_up`
--

INSERT INTO `settle_up` (`user`, `why`, `amount`, `phone`, `time`) VALUES
('qasim', 'Rent', 10000, '9390265992', '2023-06-01 16:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
