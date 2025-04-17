-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 12:23 PM
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
-- Database: `juice`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `grand_total`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(4, 4, 650, '2024-06-19 18:15:36', 'rohan', '2024-07-03 23:30:31', 'rohan'),
(8, 5, 100, '2024-06-25 21:44:31', 'manu', '2024-06-25 21:44:31', 'manu');

-- --------------------------------------------------------

--
-- Table structure for table `cart_line`
--

CREATE TABLE `cart_line` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `number` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_line`
--

INSERT INTO `cart_line` (`id`, `cart_id`, `product_id`, `quantity`, `number`, `product_name`, `product_price`, `total_price`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`, `price`) VALUES
(7, 4, 1, 'Small', 2, 'Strawberry Pineapple', 100, 200, '2024-06-19 18:15:36', 'rohan', '2024-07-03 23:30:31', 'rohan', 0),
(8, 4, 19, 'Small', 1, 'Cranberry', 150, 150, '2024-06-19 18:15:46', 'rohan', '2024-06-19 18:15:46', 'rohan', 0),
(9, 4, 2, 'Small', 2, 'Apple Cinnamon', 100, 200, '2024-06-19 18:20:24', 'rohan', '2024-07-02 18:09:54', 'rohan', 0),
(16, 8, 13, 'Small', 1, 'Peachy Oat', 100, 100, '2024-06-25 21:44:31', 'manu', '2024-06-25 21:44:31', 'manu', 0),
(17, 4, 13, 'Small', 1, 'Peachy Oat', 100, 100, '2024-07-02 18:09:43', 'rohan', '2024-07-02 18:09:43', 'rohan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catergory_name` varchar(50) NOT NULL,
  `create_ts` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catergory_name`, `create_ts`, `created_by`) VALUES
(1, 'Juice', '2024-06-16 14:52:25', ''),
(2, 'Smoothie', '2024-06-16 14:52:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `password`, `created_ts`, `created_by`) VALUES
(2, 'neha@gmail.com', '123', '2024-06-18 12:59:19', 'user'),
(3, 'sonu@gmail.com', '123', '2024-06-18 22:53:38', 'user'),
(4, 'rohan@gmail.com', '123', '2024-06-19 18:14:53', 'user'),
(5, 'manu@gmail.com', '123', '2024-06-25 21:43:50', 'user'),
(6, 'priti@gmail.com', '123', '2024-07-02 18:32:40', 'user'),
(7, 'pinku@gmail.com', '123', '2024-07-03 14:44:44', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `grand_total`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(3, 3, 250, '2024-06-22 15:08:18', 'sonu', '2024-06-22 15:08:18', 'sonu'),
(4, 3, 100, '2024-06-22 15:10:41', 'sonu', '2024-06-22 15:10:41', 'sonu'),
(5, 3, 100, '2024-06-22 15:13:23', 'sonu', '2024-06-22 15:13:23', 'sonu'),
(6, 6, 300, '2024-07-02 18:35:08', 'priti', '2024-07-02 18:35:08', 'priti'),
(7, 6, 100, '2024-07-02 18:36:24', 'priti', '2024-07-02 18:36:24', 'priti'),
(8, 6, 300, '2024-07-02 18:39:43', 'priti', '2024-07-02 18:39:43', 'priti'),
(9, 7, 100, '2024-07-03 14:45:31', 'pinku kumar', '2024-07-03 14:45:31', 'pinku kumar'),
(10, 7, 100, '2024-07-03 14:46:12', 'pinku kumar', '2024-07-03 14:46:12', 'pinku kumar');

-- --------------------------------------------------------

--
-- Table structure for table `order_address`
--

CREATE TABLE `order_address` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `last_updates_ts` datetime NOT NULL,
  `last_updated_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_address`
--

INSERT INTO `order_address` (`id`, `order_id`, `user_id`, `first_name`, `last_name`, `phone`, `email`, `address_line1`, `address_line2`, `city`, `state`, `country`, `pin`, `created_ts`, `created_by`, `last_updates_ts`, `last_updated_by`) VALUES
(2, 4, 3, 'neha', 'kumari', 8709383308, 'neha@gmail.com', 'D/21 officer colony dugda Bokaro', 'SBI BANK', 'Bokaro', 'Jharkhand', 'India', 828404, '2024-06-22 15:08:18', 'sonu', '2024-06-22 15:08:18', 'sonu'),
(3, 5, 3, 'neha', 'kumari', 8709383308, 'neha@gmail.com', 'D/21 officer colony dugda Bokaro', 'SBI BANK', 'Bokaro', 'Jharkhand', 'India', 828404, '2024-06-22 15:10:41', 'sonu', '2024-06-22 15:10:41', 'sonu'),
(4, 6, 3, 'neha', 'kumari', 8294372130, 'nehakumarigupta2322@gmail.com', 'AMARI ANANT BIGHA', '', 'AURANGABAD', 'BIHAR', 'India', 824101, '2024-06-22 15:13:23', 'sonu', '2024-06-22 15:13:23', 'sonu'),
(5, 7, 6, 'NEHA', 'KUMARI', 9999454053, 'roha@gmail.com', 'AMARI ANANT BIGHA', 'fgfg', 'AURANGABAD', 'BIHAR', 'India', 824101, '2024-07-02 18:35:08', 'priti', '2024-07-02 18:35:08', 'priti'),
(6, 8, 6, 'neha', 'kumari', 3453798392, 'roha@gmail.com', 'D/21 officer colony dugda Bokaro', 'SBI BANK', 'Bokaro', 'Jharkhand', 'India', 828404, '2024-07-02 18:36:24', 'priti', '2024-07-02 18:36:24', 'priti'),
(7, 9, 6, 'neha', 'kumari', 9876535352, 'dvddfgbvc@gmail.com', 'D/21 officer colony dugda Bokaro', 'SBI BANK', 'Bokaro', 'Jharkhand', 'India', 828404, '2024-07-02 18:39:43', 'priti', '2024-07-02 18:39:43', 'priti'),
(8, 10, 7, 'pinku', 'kumar', 8294372130, 'nehakumarigupta2322@gmail.com', 'D/21 officer colony dugda bokaro', '', 'Bokaro', 'Jharkhand', 'India', 828404, '2024-07-03 14:46:12', 'pinku kumar', '2024-07-03 14:46:12', 'pinku kumar');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `order_line_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `number` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`order_line_id`, `order_id`, `product_id`, `quantity`, `number`, `product_name`, `product_price`, `total_price`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(7, 3, 2, 'Small', 1, 'Apple Cinnamon', 100, 100, '2024-06-22 15:08:18', 'sonu', '2024-06-22 15:08:18', 'sonu'),
(8, 3, 19, 'Small', 1, 'Cranberry', 150, 150, '2024-06-22 15:08:18', 'sonu', '2024-06-22 15:08:18', 'sonu'),
(10, 4, 16, 'Small', 1, 'Beet', 100, 100, '2024-06-22 15:10:41', 'sonu', '2024-06-22 15:10:41', 'sonu'),
(11, 5, 9, 'Small', 1, 'Strawberry', 100, 100, '2024-06-22 15:13:23', 'sonu', '2024-06-22 15:13:23', 'sonu'),
(12, 6, 2, 'Small', 2, 'Apple Cinnamon', 100, 200, '2024-07-02 18:35:08', 'priti', '2024-07-02 18:35:08', 'priti'),
(13, 6, 1, 'Small', 1, 'Strawberry Pineapple', 100, 100, '2024-07-02 18:35:08', 'priti', '2024-07-02 18:35:08', 'priti'),
(15, 7, 2, 'Small', 1, 'Apple Cinnamon', 100, 100, '2024-07-02 18:36:24', 'priti', '2024-07-02 18:36:24', 'priti'),
(16, 8, 2, 'Small', 2, 'Apple Cinnamon', 100, 200, '2024-07-02 18:39:43', 'priti', '2024-07-02 18:39:43', 'priti'),
(17, 8, 1, 'Small', 1, 'Strawberry Pineapple', 100, 100, '2024-07-02 18:39:43', 'priti', '2024-07-02 18:39:43', 'priti'),
(19, 9, 16, 'Small', 1, 'Beet', 100, 100, '2024-07-03 14:45:31', 'pinku kumar', '2024-07-03 14:45:31', 'pinku kumar'),
(20, 10, 16, 'Small', 1, 'Beet', 100, 100, '2024-07-03 14:46:12', 'pinku kumar', '2024-07-03 14:46:12', 'pinku kumar');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `number` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `last_updated_ts` datetime NOT NULL,
  `last_updated_by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `number`, `category_id`, `image`, `created_ts`, `created_by`, `last_updated_ts`, `last_updated_by`) VALUES
(1, 'Strawberry Pineapple', 100, 'Small', 28, 2, '44..jpeg', '2024-06-16 21:55:15', 'admin', '2024-07-02 18:39:43', 'priti'),
(2, 'Apple Cinnamon', 100, 'Small', 38, 2, '43..jpeg', '2024-06-16 21:56:20', 'admin', '2024-07-02 18:39:43', 'priti'),
(3, 'Creamy Maca', 100, 'Small', 8, 2, '49..jpeg', '2024-06-16 21:57:06', 'admin', '2024-07-02 17:37:23', 'admin'),
(4, 'Beet Smoothie', 100, 'Small', 30, 2, '48..jpeg', '2024-06-16 21:57:49', 'admin', '2024-07-02 17:37:28', 'admin'),
(5, 'Tropical green Broccoli', 150, 'Small', 42, 2, '52..jpeg', '2024-06-16 21:58:37', 'admin', '2024-07-02 17:37:33', 'admin'),
(6, 'Chocolate Peanut Butter', 150, 'Small', 24, 2, '51..jpeg', '2024-06-16 21:59:25', 'admin', '2024-07-02 17:37:40', 'admin'),
(8, 'Blueberry', 100, 'Small', 29, 2, '56..jpeg', '2024-06-17 10:49:33', 'admin', '2024-07-02 17:40:36', 'admin'),
(9, 'Strawberry', 100, 'Small', 10, 2, '57..jpeg', '2024-06-17 10:50:36', 'admin', '2024-07-03 12:52:38', 'admin'),
(10, 'Oat Banana', 100, 'Small', 32, 2, '47..jpeg', '2024-06-17 10:52:03', 'admin', '2024-07-02 17:40:51', 'admin'),
(11, 'Aloha Smoothie', 100, 'Small', 92, 2, '53..jpeg', '2024-06-17 10:53:09', 'admin', '2024-07-02 17:43:03', 'admin'),
(12, 'Trail Mix', 100, 'Small', 30, 2, '55..jpeg', '2024-06-17 10:54:10', 'admin', '2024-07-02 17:42:54', 'admin'),
(13, 'Peachy Oat', 100, 'Small', 28, 2, '54..jpeg', '2024-06-17 10:57:15', 'admin', '2024-07-02 17:53:17', 'admin'),
(15, 'Apple', 100, 'Small', 65, 1, '59..jpeg', '2024-06-17 11:37:29', 'admin', '2024-07-02 17:42:34', 'admin'),
(16, 'Beet', 100, 'Small', 331, 1, '66..jpeg', '2024-06-17 11:37:56', 'admin', '2024-07-03 14:46:12', 'pinku kumar'),
(17, 'Pomegranate', 100, 'Small', 34, 1, '64..jpeg', '2024-06-17 11:39:15', 'admin', '2024-07-02 17:42:06', 'admin'),
(18, 'Blueberry', 100, 'Small', 40, 1, '65..jpeg', '2024-06-17 11:40:48', 'admin', '2024-07-02 17:41:48', 'admin'),
(19, 'Cranberry', 150, 'Small', 33, 1, '63..jpeg', '2024-06-17 11:42:02', 'admin', '2024-07-02 17:41:37', 'admin'),
(20, 'Carrot', 100, 'Small', 22, 1, '61..jpeg', '2024-06-17 11:42:56', 'admin', '2024-07-02 17:41:21', 'admin'),
(21, 'Orange', 100, 'Small', 48, 1, '60..jpeg', '2024-06-17 11:43:41', 'admin', '2024-07-02 17:41:15', 'admin'),
(23, 'Sugarcane', 100, 'Small', 35, 1, '68..jpeg', '2024-06-17 11:45:18', 'admin', '2024-07-02 17:41:05', 'admin'),
(24, 'Oat Banana', 100, 'Small', 13, 1, '67..jpeg', '2024-06-17 11:46:19', 'admin', '2024-07-02 17:40:58', 'admin'),
(25, 'Pineapple', 100, 'Small', 40, 1, '70..jpeg', '2024-06-17 11:47:15', 'admin', '2024-07-02 17:40:27', 'admin'),
(26, 'Kiwi', 100, 'Small', 29, 1, '71..jpeg', '2024-06-17 11:48:22', 'admin', '2024-07-02 17:37:48', 'admin'),
(27, 'Grapefruit', 100, 'Small', 34, 1, '62..jpeg', '2024-07-02 17:55:37', 'admin', '2024-07-02 17:56:40', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `created_ts` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `email`, `phone_no`, `created_ts`, `created_by`) VALUES
(1, 'neha kumari', 'nehakumarigupta2322@gmail.com', 8294372130, '2024-06-18 12:57:11', 'user'),
(2, 'Kumari', 'neha@gmail.com', 6002086224, '2024-06-18 12:59:19', 'user'),
(3, 'sonu', 'sonu@gmail.com', 9031642107, '2024-06-18 22:53:38', 'user'),
(4, 'rohan', 'rohan@gmail.com', 1234567890, '2024-06-19 18:14:53', 'user'),
(5, 'manu', 'manu@gmail.com', 9876543234, '2024-06-25 21:43:50', 'user'),
(6, 'priti', 'priti@gmail.com', 1234567891, '2024-07-02 18:32:40', 'user'),
(7, 'pinku kumar', 'pinku@gmail.com', 9031234210, '2024-07-03 14:44:44', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_line`
--
ALTER TABLE `cart_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_address`
--
ALTER TABLE `order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`order_line_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart_line`
--
ALTER TABLE `cart_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_address`
--
ALTER TABLE `order_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `order_line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
