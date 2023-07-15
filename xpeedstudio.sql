-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 02:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpeedstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `receipt_id` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_ip` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hash_key` varchar(255) NOT NULL,
  `entry_at` date NOT NULL,
  `entry_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `amount`, `buyer`, `receipt_id`, `items`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `hash_key`, `entry_at`, `entry_by`) VALUES
(1, 5000, 'sadfas', '234', '32', 'fdasf@gma.com', '::0', 'efasdfsda', 'dfasfsadf', '01918276554', '23423', '2023-07-15', 234),
(3, 4555, 'Mr. Masud', '23432', '14', 'masud@gmail.com', '::0', 'This is sample data entry', 'Dhaka', '01415263526', '$2a$12$G0/KYlX6DMFwtn', '2023-06-15', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
