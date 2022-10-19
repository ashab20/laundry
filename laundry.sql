-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 07:31 AM
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
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `address`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ashab uddin', '01840065756', '                    chittagong\r\n                                    ', '2022-10-18 09:16:51', '2022-10-18 13:16:51', 1),
(3, 'Biplob Uiddn', '018400932423', 'Chittagong\n                  ', '2022-10-12 03:53:52', NULL, 1),
(4, 'Rahat Hasan', '01590065756', 'Ctg\n                  ', '2022-10-12 04:06:06', NULL, 1),
(5, 'Tawhidul Islam', '01560003242', 'Bangladesh\n                  ', '2022-10-12 04:11:12', NULL, 1),
(12, 'Ashab', '01840088189', '                    Dhaka                  ', '2022-10-18 09:17:11', '2022-10-18 13:17:11', 1),
(16, 'Mr. Rabib Hasan', '01735061377', 'Bhola', '2022-10-13 04:02:04', NULL, 1),
(35, 'Saed Hasan', '01478432534', 'Lohagara\r\n                  ', '2022-10-18 07:45:41', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `total_price` decimal(7,2) UNSIGNED NOT NULL,
  `paid` decimal(7,2) UNSIGNED DEFAULT NULL,
  `in_date` datetime NOT NULL,
  `out_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customer_id`, `product_id`, `total_price`, `paid`, `in_date`, `out_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 7, '[\"27\",\"28\"]', '110.00', NULL, '2022-10-13 09:49:00', '0000-00-00 00:00:00', 1, '2022-10-13 09:49:00', '0000-00-00 00:00:00'),
(3, 12, '[\"29\"]', '40.00', '40.00', '2022-10-18 06:33:25', '0000-00-00 00:00:00', 1, '2022-10-18 06:33:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `qty` decimal(10,0) UNSIGNED NOT NULL,
  `subtotal` decimal(7,2) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `customer_id`, `details`, `size`, `qty`, `subtotal`, `service_id`, `created_at`, `updated_at`, `status`) VALUES
(27, 7, '', '', '4', '100.00', 2, '2022-10-13 09:49:00', '0000-00-00 00:00:00', 1),
(28, 7, '', '', '1', '10.00', 1, '2022-10-13 09:49:00', '0000-00-00 00:00:00', 1),
(29, 12, 'red t-shirt', '', '4', '40.00', 4, '2022-10-18 06:33:25', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('LAUNDRY','TAILOR') NOT NULL,
  `price` decimal(7,2) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `role`, `price`, `created_at`, `updated_at`, `status`) VALUES
(1, 'shirt wash', 'LAUNDRY', '10.00', '2022-10-08 12:55:17', '2022-10-08 12:57:47', 1),
(2, 'jens pent wash', 'LAUNDRY', '25.00', '2022-10-08 12:55:17', '2022-10-08 12:57:22', 1),
(3, 'pant wash', 'LAUNDRY', '20.00', '2022-10-08 12:55:52', '2022-10-08 12:57:30', 1),
(4, 't-shirt wash', 'LAUNDRY', '10.00', '2022-10-08 12:55:52', '2022-10-08 12:57:37', 1),
(5, 'blazer wash', 'LAUNDRY', '100.00', '2022-10-08 12:57:01', NULL, 1),
(6, 'Shirt', 'TAILOR', '400.00', '2022-10-19 05:15:32', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` char(100) NOT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `role` enum('ADMIN','EMPLOYEE','','') NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `role`, `address`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ashab Uddin', 'ashab@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815', '01734534534', 'ADMIN', '                                                            ctg                                                ', '2022-10-06 06:13:48', NULL, 1),
(2, 'Rabib Hasan', 'rabib@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815', '01734534534', 'ADMIN', '                               Ctg                                                                             ', '2022-10-06 06:15:37', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
