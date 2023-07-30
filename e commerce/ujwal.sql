-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', '7079@admin');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_section`
--

CREATE TABLE `carousel_section` (
  `carousel_id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `header_1` varchar(111) NOT NULL,
  `header_2` varchar(111) NOT NULL,
  `descr` varchar(111) NOT NULL,
  `btn` varchar(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel_section`
--

INSERT INTO `carousel_section` (`carousel_id`, `image`, `header_1`, `header_2`, `descr`, `btn`, `created_at`, `updated_at`) VALUES
(8, 0x75706c6f6164732f752e77656270, 'Super Deals', 'Home Furniture', 'Last call upto 24%', 'Shop Now', '2023-07-28 07:43:18', '2023-07-28 07:43:18'),
(9, 0x75706c6f6164732f756a2e77656270, 'Super Deals', '	Home Furniture', 'Last call upto 28%', 'Shop Now', '2023-07-28 07:46:06', '2023-07-28 07:46:06'),
(10, 0x75706c6f6164732f756a772e77656270, 'Super Deals', 'Home Furniture', 'Last call upto 38%', 'Shop Now', '2023-07-28 07:47:18', '2023-07-28 07:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `fashion_id` int(11) NOT NULL,
  `name` longblob NOT NULL,
  `image` longblob NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`fashion_id`, `name`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 0x53796e646f7261, 0x75706c6f6164732f6b75732e706e67, 23, '2023-07-28 12:11:53', '2023-07-28 12:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `image`, `name`, `price`, `created_at`, `updated_at`) VALUES
(4, 0x75706c6f6164732f6b69732e61766966, 'Washing Machine', 679, '2023-07-28 11:26:51', '2023-07-28 11:26:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel_section`
--
ALTER TABLE `carousel_section`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`fashion_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel_section`
--
ALTER TABLE `carousel_section`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `fashion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
