-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2025 at 06:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camp_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'lisa@gmail.com', '$2y$10$geyNeOIsiEvY4OiqXi8DZ.t70Yg7epf7XnzGTEyQPfwlmQiL.stwe');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `idnumber` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `tenttype` varchar(100) DEFAULT NULL,
  `checkindate` date DEFAULT NULL,
  `checkoutdate` date DEFAULT NULL,
  `tents` int(11) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `firstname`, `lastname`, `idnumber`, `dob`, `email`, `phone`, `tenttype`, `checkindate`, `checkoutdate`, `tents`, `guests`, `created_at`) VALUES
(12, 'Jane', 'james', '33778873', '2025-09-30', 'jane@gmail.com', '07998799889', 'bush', '2025-09-15', '2025-09-20', 3, 3, '2025-09-06 17:44:19'),
(13, 'john', 'doe', '33339888', '2025-09-15', 'john@gmail.com', '07998799889', 'glamping', '2025-09-15', '2025-09-20', 1, 1, '2025-09-06 18:01:36'),
(14, 'mike ', 'doe', '33778873', '2025-09-23', 'mike@gmail.com', '07998799889', 'glamping', '2025-09-15', '2025-09-20', 1, 2, '2025-09-08 04:10:19'),
(15, 'mary', 'james', '33778873', '2025-09-22', 'mary@gmail.com', '07998799889', 'family', '2025-09-22', '2025-09-27', 1, 1, '2025-09-08 04:17:34'),
(16, 'lisa', 'mike', '33339888', '2025-09-30', 'lisamike@gmail.com', '07998799889', 'bush', '2025-09-22', '2025-09-27', 1, 1, '2025-09-08 04:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `tent_inventory`
--

CREATE TABLE `tent_inventory` (
  `id` int(11) NOT NULL,
  `tent_type` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` enum('available','unavailable') NOT NULL DEFAULT 'available',
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `price_min` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price_max` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tent_inventory`
--

INSERT INTO `tent_inventory` (`id`, `tent_type`, `total`, `capacity`, `price`, `availability`, `description`, `created_at`, `price_min`, `price_max`) VALUES
(1, 'bush', 8, 2, 0.00, 'available', '', '2025-09-06 17:25:49', 11000.00, 22000.00),
(2, 'Family', 4, 6, 0.00, 'available', '', '2025-09-06 17:27:51', 11000.00, 22000.00),
(3, 'Glamping', 6, 6, 0.00, 'available', '', '2025-09-06 17:29:14', 18000.00, 25000.00),
(4, 'honeymoon', 5, 2, 0.00, 'available', '', '2025-09-06 17:31:04', 18000.00, 25000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tent_inventory`
--
ALTER TABLE `tent_inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tent_inventory`
--
ALTER TABLE `tent_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
