-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2021 at 01:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookingCalendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `booking_id` bigint(20) DEFAULT NULL,
  `staff_name` varchar(100) DEFAULT NULL,
  `booking_type` varchar(250) DEFAULT NULL,
  `purpose` varchar(250) DEFAULT NULL,
  `booking_start_date` datetime DEFAULT NULL,
  `booking_end_date` datetime DEFAULT NULL,
  `action` enum('accept','reject') DEFAULT NULL,
  `status` enum('accept','reject','Suspend') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `booking_id`, `staff_name`, `booking_type`, `purpose`, `booking_start_date`, `booking_end_date`, `action`, `status`) VALUES
(1, 1, 'boychawin.com', 'ห้อง 1', 'ประชุม', '2021-04-17 12:40:49', '2021-04-18 17:40:49', 'accept', 'accept'),
(2, 2, 'boychawin.com', 'ห้อง 2', 'ประชุม 2', '2021-04-01 12:40:49', '2021-04-02 17:40:49', NULL, NULL),
(3, 3, 'boychawin.com', 'ห้อง 3', 'ประชุม 3', '2021-04-01 12:40:49', '2021-04-02 17:40:49', 'accept', NULL),
(4, 4, 'boychawin.com', 'ห้อง 4', 'ประชุม 4', '2021-04-01 12:40:49', '2021-04-02 17:40:49', 'accept', 'accept');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
