-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2025 at 11:35 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpijbzub_conc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `plan` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Delivery`
--

CREATE TABLE `Delivery` (
  `id` int NOT NULL,
  `truck` varchar(50) NOT NULL,
  `release_no` varchar(5) NOT NULL,
  `driver_name` varchar(15) NOT NULL,
  `delivery_serial_no` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `capacity` decimal(10,2) NOT NULL,
  `client_name` varchar(12) NOT NULL,
  `site_location` varchar(255) NOT NULL,
  `delivery_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Delivery`
--

INSERT INTO `Delivery` (`id`, `truck`, `release_no`, `driver_name`, `delivery_serial_no`, `class`, `capacity`, `client_name`, `site_location`, `delivery_date`, `created_at`) VALUES
(1, 'KCH 570K', '01', 'NICHOLAS', '00', 'C30', 6.70, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:44:28'),
(2, 'KHMA 917K', '02', 'JACKSON', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:45:00'),
(3, 'KCH 571K', '03', 'ALEX', '00', 'C30', 6.20, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:45:54'),
(4, 'KCH 573K', '04', 'RAHAB', '00', 'C25', 7.20, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:46:42'),
(5, 'KHMA 920K', '05', 'COSMAS', '00', 'C25', 7.00, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:47:25'),
(6, 'KHMA 918K', '06', 'NJONJO', '00', 'C25', 7.10, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:48:07'),
(7, 'KCH 572K', '07', 'PETER', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:48:49'),
(8, 'KHMA 919K', '08', 'ISAAC', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:49:23'),
(9, 'KDA 016D', '09', 'ALEX', '00', 'C30', 6.70, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:50:09'),
(10, 'KDA 135E', '10', 'ALEX', '00', 'C25', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 09:51:29'),
(11, 'KCH 570K', '11', 'NICHOLAS', '00', 'C25', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:36:44'),
(12, 'KHMA 920K', '12', 'COSMAS', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:37:32'),
(13, 'KCH 573K', '13', 'XX LL', '00', 'C30', 7.00, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:39:15'),
(14, 'KHMA 917K', '14', 'JACKSON', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:40:01'),
(15, 'KCH 571K', '15', 'XX LL', '00', 'C25', 6.50, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:40:50'),
(16, 'KHMA 918K', '16', 'NJONJO', '00', 'C25', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 10:41:36'),
(17, 'KHMA 919K', '17', 'ISAAC', '00', 'C30', 6.70, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 11:02:48'),
(18, 'KDA 016D', '18', 'XX LL', '00', 'C30', 6.70, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 11:19:19'),
(19, 'KHMA 920K', '19', 'COSMAS', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 11:44:33'),
(20, 'KDA 135E', '20', 'XX LL', '00', 'C25', 5.70, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 11:45:37'),
(21, 'KCH 570K', '21', 'NICHOLAS', '00', 'C25', 5.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 11:47:30'),
(22, 'KCH 573K', '22', 'XX LL', '00', 'C30', 7.00, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 12:03:47'),
(23, 'KCH 571K', '23', 'XX LL', '00', 'C30', 6.30, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 12:04:45'),
(24, 'KHMA 917K', '24', 'JACKSON', '00', 'C30', 6.80, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 12:05:33'),
(25, 'KHMA 919K', '25', 'ISAAC', '00', 'C30', 5.30, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 12:06:16'),
(26, 'KDA 016D', '26', 'XX LL', '00', 'C30', 5.50, 'ZJCC', 'OAKLANDS', '2025-02-02', '2025-02-18 12:06:58'),
(27, 'KHMA 918K', '01', 'Njonjo', '5175', 'C25', 6.40, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:29:03'),
(28, 'KCH 570K', '02', 'Peter N', '5176', 'C25', 6.40, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:31:20'),
(29, 'KHMA 920K', '03', 'George', '5177', 'C25', 6.60, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:32:09'),
(30, 'KCH 573K', '04', 'Nicholas', '5178', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:33:01'),
(31, 'KHMA 919K', '05', 'Bernard', '5179', 'C25', 5.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:33:52'),
(32, 'KCH 571K', '06', 'Mwangi', '5180', 'C25', 5.40, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:34:39'),
(33, 'KCH572K', '07', 'Peter Maina', '5181', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:47:05'),
(34, 'KHMA918K', '08', 'Kamau', '5182', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 06:54:54'),
(35, 'KCH570K', '09', 'Peter', '5183', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 07:04:20'),
(36, 'KHMA920K', '10', 'George', '5184', 'C25', 6.60, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 07:21:21'),
(37, 'KHMA 917K', '11', 'Patrick', '5185', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 07:53:20'),
(38, 'KHMA919K', '12', 'Benard', '5186', 'C25', 5.40, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 09:34:18'),
(39, 'KCH571K', '13', 'MWANGI', '5187', 'C25', 5.70, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 10:21:19'),
(40, 'KCH573K', '14', 'Nicholas', '5188', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 10:23:14'),
(41, 'KCH572K', '15', 'Peter', '5189', 'C25', 6.60, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 10:25:10'),
(42, 'KCH570K', '16', 'Peter', '5190', 'C25', 6.60, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 10:25:58'),
(44, 'KDA135E', '1', 'Samuel', '5191', 'C25', 5.50, 'WACHIRA', 'Soweto', '2025-03-05', '2025-03-05 11:44:49'),
(45, 'KHMA920K', '17', 'George', '5192', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 13:45:22'),
(46, 'KHMA918K', '18', 'Kamau', '5193', 'C25', 6.50, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 14:43:40'),
(47, 'KHMA917K', '19', 'Patrick', '5194', 'C25', 6.40, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 14:47:05'),
(48, 'KCH573K', '20', 'Nicholas', '5195', 'C25', 6.00, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 15:10:24'),
(49, 'KHMA920K', '21', 'Mwangi', '5196', 'C25', 6.20, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 19:06:31'),
(50, 'KHMA917K', '22', 'Patrick', '5197', 'C25', 6.70, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 19:07:25'),
(51, 'KCH572K', '23', 'Peter', '5198', 'C25', 5.30, 'Butare', 'Ruaka', '2025-03-05', '2025-03-05 19:08:42'),
(52, 'KCH 573K', '24', 'Nicholas', '5199', 'C25', 6.20, 'Butare', 'Ruaka', '2025-03-05', '2025-03-06 08:38:58'),
(53, 'KHMA 918K', '1', 'Njonjo', '5200', 'C20', 6.40, 'DERISCO PROP', 'RUNDA GARDENS', '2025-03-06', '2025-03-06 08:40:58'),
(54, 'KHMA 920K', '1', 'George', '5201', 'C20', 6.60, 'CREC 10', 'RYOSAMBU', '2025-03-06', '2025-03-06 08:43:24'),
(55, 'KCH 570K', '1', 'Peter N', '5202', 'C30', 5.80, 'Mr Kibunja', 'Njiru', '2025-03-06', '2025-03-06 08:44:23'),
(56, 'KCH 573K', '2', 'Mr Kibunja', '5203', 'C30', 5.90, 'Mr Kibunja', 'Njiru', '2025-03-06', '2025-03-06 08:45:48'),
(57, 'KCH 572K', '1', 'Peter M', '5204', 'C25', 4.60, 'Daniels Hold', 'Gigiri', '2025-03-06', '2025-03-06 08:48:26'),
(58, 'KCH 917K', '2', 'Nicholas', '5205', 'C20', 6.60, 'CREC 10', 'RYOSAMBU', '2025-03-06', '2025-03-06 08:50:17'),
(59, 'KHMA917K', '1', 'Nicholas', '5222', 'C30', 6.40, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 07:50:41'),
(60, 'KHMA920', '2', 'George', '5223', 'C30', 6.30, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 07:54:56'),
(61, 'KHMA918K', '3', 'Kamau', '5224', 'C30', 6.50, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 07:56:14'),
(63, 'KCH571K', '4', 'Mwangi', '5225', 'C30', 4.90, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 07:59:54'),
(64, 'KHMA917K', '5', 'Nicholas', '5226', 'C30', 6.40, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:00:53'),
(65, 'KHMA920K', '6', 'George', '5227', 'C30', 6.50, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:02:00'),
(66, 'KCH573K', '7', 'Isaac', '5228', 'C30', 6.20, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:03:26'),
(67, 'KCH570K', '8', 'Peter', '5229', 'C30', 6.40, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:04:28'),
(68, 'KHMA918K', '9', 'Kamau', '5230', 'C30', 6.80, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:05:28'),
(69, 'KCH571K', '10', 'Mwangi', '5231', 'C30', 5.70, 'SAMUEL', 'MARURUI', '2025-03-07', '2025-03-07 08:06:23'),
(70, 'KCH 571K', '1', 'Mwangi P', '5443', 'C25', 6.60, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:53:07'),
(71, 'KHMA 918K', '2', 'Kamau', '5444', 'C25', 6.20, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:54:03'),
(72, 'KHMA 920K', '3', 'George', '5445', 'C25', 6.70, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:55:01'),
(73, 'KCH 572K', '4', 'Peter', '5446', 'C25', 6.80, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:55:54'),
(74, 'KCH 570K', '5', 'Peter N', '5447', 'C25', 5.60, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:57:02'),
(75, 'KHMA 917K', '6', 'Fredrick', '5448', 'C25', 6.70, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:57:48'),
(76, 'KCH 571K', '7', 'Mwangi', '5449', 'C25', 6.60, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 13:58:36'),
(77, 'KHMA 919K', '1', 'Mureithi', '5450', 'C25', 4.20, 'Dancom', 'Mirema', '2025-03-24', '2025-03-24 13:59:28'),
(78, 'KHMA 918K', '8', 'Kamau', '5451', 'C25', 6.50, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 14:00:36'),
(79, 'KHMA 919K', '9', 'George', '5452', 'C25', 6.70, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 14:01:20'),
(80, 'KHMA 920K', '1', 'George', '6.5', 'C25', 6.50, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:02:11'),
(81, 'KCH 570K', '2', 'Peter N', '5454', 'C25', 6.00, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:03:00'),
(82, 'KCH 573K', '3', 'Fredrick', '5455', 'C25', 6.70, 'Deb', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:03:43'),
(83, 'KHMA 918K', '10', 'Kamau', '5456', 'C25', 4.60, 'Daniel', 'Kimbo', '2025-03-24', '2025-03-24 14:04:27'),
(84, 'KHMA 919K', '4', 'Benard', '5457', 'C25', 6.60, 'Debroso', 'Maj', '2025-03-24', '2025-03-24 14:05:12'),
(85, 'KCH 573K', '5', 'Mwangi', '5458', 'C25', 6.60, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:06:26'),
(86, 'KCH 572K', '6', 'Peter', '5459', 'C25', 6.10, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:07:17'),
(87, 'KCH 572K', '7', 'Pater', '5460', 'C25', 6.60, 'Debro', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:08:14'),
(88, 'KHMA 917K', '8', 'Fredrick', '5461', 'C25', 6.60, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:09:18'),
(89, 'KHMA 919K', '9', 'Benard', '5462', 'C25', 6.50, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:10:06'),
(90, 'KHMA 918K', '10', 'Kamau', '5463', 'C25', 6.50, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:10:46'),
(91, 'KCH 571K', '11', 'Mwangi', '5464', 'C25', 6.60, 'Debroso', 'Maji Mazuri', '2025-03-24', '2025-03-24 14:11:39'),
(92, 'KHMA920K', '12', 'George', '5465', 'C25', 6.50, 'Debroso', 'Maji mazuri', '2025-03-24', '2025-03-25 06:27:06'),
(93, 'KCH572K', '13', 'Peter', '5466', 'C25', 6.60, 'Debroso', 'Maji mazuri', '2025-03-24', '2025-03-25 06:27:47'),
(94, 'KCH573K', '14', 'Fredrick', '5467', 'C25', 6.40, 'Debroso', 'Maji mazuri', '2025-03-24', '2025-03-25 06:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_no` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `client_phone` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `site_location` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `delivery_fee` decimal(10,2) DEFAULT NULL,
  `pump` varchar(255) DEFAULT NULL,
  `pumping_fee` varchar(255) DEFAULT NULL,
  `net_amount` decimal(10,2) DEFAULT NULL,
  `gross_amount` decimal(10,2) DEFAULT NULL,
  `hardener` decimal(10,2) DEFAULT NULL,
  `water_proof` decimal(10,2) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `description` tinyint(1) DEFAULT '0',
  `reference_code` varchar(255) DEFAULT NULL,
  `order_type` varchar(255) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `capacity` tinyint(1) DEFAULT '0',
  `discount` decimal(10,2) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `partial_userid` int DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` varchar(255) NOT NULL,
  `company_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date_added`, `order_no`, `client`, `client_phone`, `product`, `site_location`, `class`, `product_price`, `delivery_fee`, `pump`, `pumping_fee`, `net_amount`, `gross_amount`, `hardener`, `water_proof`, `payment_status`, `payment_method`, `delivery_date`, `description`, `reference_code`, `order_type`, `amount_paid`, `capacity`, `discount`, `user_id`, `partial_userid`, `invoice_no`, `updated_at`, `unit`, `company_id`) VALUES
(17, '2025-02-20 22:37:36', 'ORD-1740091056', 'ELON MUSK', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C30', 10500.00, NULL, 'fixed_pump', '600', 11100.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 127, NULL, NULL, NULL, NULL, '2025-02-20 22:37:36', '', 1),
(18, '2025-02-20 22:40:14', 'ORD-1740091214', 'Alice', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C30', 12000.00, NULL, 'fixed_pump', '600', 12600.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 50, NULL, NULL, NULL, NULL, '2025-02-20 22:40:14', '', 1),
(19, '2025-02-20 22:41:17', 'ORD-1740091277', 'MARY K', NULL, 'Ready Mix Concrete', 'INDUSTRIAL AREA ', 'C15', 10500.00, NULL, 'fixed_pump', '600', 11100.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-18', 0, NULL, NULL, NULL, 54, NULL, NULL, NULL, NULL, '2025-02-20 22:41:17', '', 1),
(20, '2025-02-20 22:43:41', 'ORD-1740091421', 'ALEX C', NULL, 'Ready Mix Concrete', 'MARURUI', 'C35', 11500.00, NULL, 'fixed_pump', '600', 12100.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 127, NULL, NULL, NULL, NULL, '2025-02-20 22:43:41', '', 1),
(21, '2025-02-20 22:45:27', 'ORD-1740091527', 'ALEX C', NULL, 'Ready Mix Concrete', 'INDUSTRIAL AREA ', 'C30', 9900.00, NULL, 'fixed_pump', '600', 10500.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-20 22:45:27', '', 1),
(22, '2025-02-20 23:36:48', 'ORD-1740094608', 'ZJCC', NULL, 'Ready Mix Concrete', 'MARURUI', 'C30', 9900.00, NULL, 'fixed_pump', '600', 10500.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 127, NULL, NULL, NULL, NULL, '2025-02-20 23:36:48', '', 1),
(23, '2025-02-20 23:42:44', 'ORD-1740094964', 'ZJCC', NULL, 'Ready Mix Concrete', 'OAKLANDS', 'C35', 9900.00, NULL, 'fixed_pump', '600', 10500.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-19', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-20 23:42:44', '', 1),
(24, '2025-02-20 23:44:39', 'ORD-1740095079', 'ELON MUSK', NULL, 'Ready Mix Concrete', 'MARURUI', 'C15', 9900.00, NULL, 'fixed_pump', '600', 10500.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-20 23:44:39', '', 1),
(25, '2025-02-20 23:53:14', 'ORD-1740095594', 'ZJCC', NULL, 'Ready Mix Concrete', 'MARURUI', 'C30', 9900.00, NULL, 'boom_pump', '600', 10500.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-20 23:53:14', '', 1),
(26, '2025-02-20 23:54:34', 'ORD-1740095674', 'ELON MUSK', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C30', 9900.00, 400.00, 'fixed_pump', '600', 10900.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-20 23:54:34', '', 1),
(27, '2025-02-21 01:38:00', 'ORD-1740101880', 'MARK ZUCK', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C35', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-27', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-21 01:38:00', '', 1),
(28, '2025-02-21 01:50:30', 'ORD-21022025', 'ELON MUSK', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C25', 9900.00, 650.00, 'No Pump', '600', 11150.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-21 01:50:30', '', 1),
(29, '2025-02-21 01:50:30', 'ORD-21022025', 'ELON MUSK', NULL, 'Ready Mix Concrete', 'KIKUYU', 'C25', 9900.00, 650.00, 'No Pump', '600', 11150.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-21 01:50:30', '', 1),
(30, '2025-02-21 02:03:45', 'ORD-21022025', 'ZJCC', NULL, 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 1200.00, 'Fixed Pump', '600', 11700.00, NULL, 0.00, 0.00, NULL, NULL, '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, NULL, NULL, NULL, '2025-02-21 02:03:45', '', 1),
(31, '2025-02-21 02:19:37', 'ORD-21022025-67b7e2b97a9c2', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C35', 9900.00, 650.00, 'Boom Pump', '600', 11150.00, NULL, 0.00, 0.00, 'paid', 'bank', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 02:19:37', '', 1),
(32, '2025-02-21 02:22:20', 'ORD-21022025-67b7e35c85bfa', 'ZJCC', '0722708795', 'Ready Mix Concrete', 'RUIRU', 'C35', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, NULL, 0.00, 0.00, 'not_paid', 'mpesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 02:22:20', '', 1),
(33, '2025-02-21 02:23:54', 'ORD-21022025', 'ZJCC', '0722708795', 'Ready Mix Concrete', 'KIKUYU', 'C35', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, NULL, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 02:23:54', '', 1),
(34, '2025-02-21 02:32:30', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'KIKUYU', 'C45', 9900.00, 400.00, 'Boom Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 02:32:30', '', 1),
(35, '2025-02-21 03:01:35', 'ORD-21022025', 'ELON MUSK', '0710605050', 'Ready Mix Concrete', 'RUIRU', 'C45', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Not_Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:01:35', '', 1),
(36, '2025-02-21 03:22:04', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'MARURUI', 'C30', 9900.00, 2000.00, 'Fixed Pump', '600', 12500.00, 1500000.00, 0.00, 0.00, 'Not_Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:22:04', '', 1),
(37, '2025-02-21 03:23:10', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'MARURUI', 'C30', 9900.00, 2000.00, 'Fixed Pump', '600', 12500.00, 1500000.00, 0.00, 0.00, 'Not_Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:23:10', '', 1),
(38, '2025-02-21 03:23:42', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:23:42', '', 1),
(39, '2025-02-21 03:23:45', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:23:45', '', 1),
(40, '2025-02-21 03:23:50', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:23:50', '', 1),
(41, '2025-02-21 03:25:21', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:25:21', '', 1),
(42, '2025-02-21 03:27:07', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:27:07', '', 1),
(43, '2025-02-21 03:27:10', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:27:10', '', 1),
(44, '2025-02-21 03:27:13', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:27:13', '', 1),
(45, '2025-02-21 03:27:29', 'ORD-21022025', 'ZJCC', '0710605050', 'Ready Mix Concrete', 'OAKLANDS', 'C30', 9900.00, 400.00, 'Fixed Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-21', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:27:29', '', 1),
(46, '2025-02-21 03:35:06', 'ORD-21022025', 'ELON MUSK', '0710605050', 'Ready Mix Concrete', 'KIKUYU', 'C40', 9900.00, 400.00, 'Boom Pump', '600', 10900.00, 1308000.00, 0.00, 0.00, 'Paid', 'M-pesa', '2025-02-20', 0, NULL, NULL, NULL, 120, NULL, 1, NULL, NULL, '2025-02-21 03:35:06', '', 1),
(47, '2025-03-05 08:52:20', 'ORD-05032025', 'Smiles', '0722708795', 'Ready Mix Concrete', 'Kinamba', 'C25', 9900.00, 3500.00, 'Boom Pump', '700', 14100.00, 1974000.00, 0.00, 0.00, 'Not_Paid', 'Bank', '2025-03-14', 0, NULL, NULL, NULL, 127, NULL, 1, NULL, NULL, '2025-03-05 08:52:20', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_by` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `status_id` int NOT NULL,
  `location` text,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `current_stock` decimal(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `unit`, `company_id`, `updated_at`, `current_stock`) VALUES
(1, 'Cement_Silo_1', 128.00, 'Tonnes', 2, '2025-04-12 18:08:00', 0.00),
(2, 'Cement_Silo_2', 100.00, 'Tonnes', 2, '2025-02-09 22:04:00', 0.00),
(3, 'Ballast_520', 117.00, 'Tonnes', 2, '2025-03-08 15:39:00', 0.00),
(4, 'Ballast_2030', 100.00, 'Tonnes', 2, '2025-02-07 05:11:06', 0.00),
(5, 'Dust', 100.00, 'Tonnes', 2, '2025-02-06 22:13:44', 0.00),
(6, 'Washed', 100.00, 'Tonnes', 2, '2025-02-06 21:13:31', 0.00),
(7, 'Additive', 100.00, 'Litres', 2, '2025-02-06 21:13:59', 0.00),
(8, 'Hardener', 100.00, 'Litres', 2, '2025-02-07 05:13:48', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `item_class` varchar(255) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `paid_status` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `purchase_status` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `item`, `item_class`, `supplier`, `qty`, `cost`, `paid_status`, `description`, `image`, `payment_method`, `purchase_status`, `updated_at`, `added_date`) VALUES
(1, 'Cement_32.5', NULL, 'MSA_C', 30.00, 456235.12, 'Paid', '', '', 'M-pesa', 'Approved', '2025-02-09 09:55:49', '2025-02-09 09:55:49'),
(2, 'Cement_42.5', NULL, 'MSA_C', 12.00, 12.00, 'Not_Paid', '', '', 'M-pesa', 'Not_Approved', '2025-02-09 15:18:35', '2025-02-09 18:18:35'),
(3, 'Ballast_520', NULL, 'MSA_C', 30.00, 40.00, 'Not_Paid', '', '', 'Bank', 'Not_Approved', '2025-02-09 21:33:13', '2025-02-10 00:33:13'),
(7, 'Cement_42.5', NULL, 'Allen_B', 23.00, 23.00, 'Paid', '', '', 'Bank', 'Approved', '2025-02-10 14:53:56', '2025-02-10 17:53:56'),
(8, 'Cement_32.5', NULL, 'MSA_C', 29.00, 14100.00, 'Paid', '', '', 'M-pesa', 'Approved', '2025-02-10 20:11:15', '2025-02-10 23:11:15'),
(9, 'Cement_42.5', NULL, 'Allen_B', 50.00, 30.00, 'Paid', '', '', 'M-pesa', 'Approved', '2025-02-11 11:03:33', '2025-02-11 14:03:33'),
(10, 'Ballast_520', NULL, 'Allen_B', 50.00, 30.00, 'Paid', '', '', 'Bank', 'Approved', '2025-02-15 16:23:01', '2025-02-15 19:23:01'),
(11, 'Ballast_2030', NULL, 'Aristo', 1000.00, 1650.00, 'Paid', '', '', 'Bank', 'Approved', '2025-02-15 16:36:14', '2025-02-15 19:36:14'),
(12, 'Cement_42.5', NULL, 'MSA_C', 29.00, 567546.00, 'Paid', '', '', 'M-pesa', 'Approved', '2025-02-16 13:46:54', '2025-02-16 16:46:54'),
(13, 'Cement_42.5', NULL, 'MSA_C', 29.00, 5384995.00, 'Not_Paid', '', '', 'M-pesa', 'Not_Approved', '2025-02-16 21:41:41', '2025-02-17 00:41:41'),
(14, 'Cement_32.5', NULL, 'MSA_C', 30.00, 14100.00, 'Not_Paid', '', '', 'M-pesa', 'Not_Approved', '2025-02-16 21:42:05', '2025-02-17 00:42:05'),
(15, 'Cement_42.5', NULL, 'MSA_C', 50.00, 10500.00, 'Paid', '', '', 'Bank', 'Approved', '2025-02-20 19:20:42', '2025-02-20 22:20:42'),
(16, 'Dust', NULL, 'Allen_B', 20.00, 1200.00, 'Paid', '', '', 'Bank', 'Approved', '2025-03-06 11:07:27', '2025-03-06 14:07:27'),
(17, 'Cement_32.5', NULL, 'Allen_B', 89.00, 566.00, 'Paid', '', '', 'Bank', 'Approved', '2025-03-28 14:01:01', '2025-03-28 21:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `ratios`
--

CREATE TABLE `ratios` (
  `id` int NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `ballast520` decimal(10,2) DEFAULT NULL,
  `ballast2030` decimal(10,2) DEFAULT NULL,
  `cement` decimal(10,2) DEFAULT NULL,
  `washed` decimal(10,2) DEFAULT NULL,
  `dust` decimal(10,2) DEFAULT NULL,
  `additive` decimal(10,2) DEFAULT NULL,
  `hardener` decimal(10,2) DEFAULT NULL,
  `company_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ratios`
--

INSERT INTO `ratios` (`id`, `class`, `ballast520`, `ballast2030`, `cement`, `washed`, `dust`, `additive`, `hardener`, `company_id`) VALUES
(15, 'C15', 880.00, 880.00, 320.00, 300.00, 640.00, 2.00, 0.00, NULL),
(16, 'C20', 880.00, 880.00, 380.00, 300.00, 640.00, 3.00, 0.00, NULL),
(17, 'C25', 880.00, 880.00, 380.00, 300.00, 600.00, 3.00, 0.00, NULL),
(18, 'C30', 920.00, 920.00, 395.00, 300.00, 600.00, 4.00, 0.00, NULL),
(19, 'C35', 920.00, 920.00, 395.00, 300.00, 600.00, 3.00, 1.00, NULL),
(20, 'C40', 920.00, 880.00, 400.00, 310.00, 580.00, 4.00, 0.00, NULL),
(21, 'C45', 920.00, 920.00, 400.00, 310.00, 580.00, 3.00, 1.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `received_goods`
--

CREATE TABLE `received_goods` (
  `id` int NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `truck` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `company_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `received_goods`
--

INSERT INTO `received_goods` (`id`, `item`, `quantity`, `truck`, `source`, `price`, `added_date`, `updated_at`, `company_id`) VALUES
(1, 'Cement', 456.00, 'KCV 783K', 'Mombasa Cement', 443.00, '2024-10-29 19:38:37', '0000-00-00 00:00:00', 2),
(2, 'Cement', 456.00, 'KCV 783K', 'Mombasa Cement', 443.00, '2024-10-29 19:39:19', '2024-10-29 21:39:19', 2),
(3, 'Ballast', 25.00, 'KCV 783K', 'Allen Bridge', 2000.00, '2024-12-30 18:36:14', '2024-12-30 20:36:14', 2),
(7, 'Washed', 12.00, 'KDL 318M', 'Allen Bridge', 10000.00, '2025-01-18 14:21:39', '2025-01-18 16:21:39', 2),
(8, 'Ballast2030', 20.00, 'KCL 311P', 'Aristocrats', 12000.00, '2025-01-18 14:36:19', '2025-01-18 16:36:19', 2),
(9, 'Dust', 10.00, '', 'Allen Bridge', 13000.00, '2025-01-29 15:30:50', '2025-01-29 17:30:50', 2),
(24, 'Cement_Silo_1', 63.69, 'January Bal C/d', 'Mombasa Cement', 0.00, '2025-02-06 21:12:07', '2025-02-06 21:12:07', 2),
(25, 'Ballast_520', 431.07, 'January Bal C/d', 'Aristocrats', 0.00, '2025-02-06 21:13:03', '2025-02-06 21:13:03', 2),
(26, 'Washed', 80.48, 'January Bal C/d', 'Aristocrats', 0.00, '2025-02-06 21:13:31', '2025-02-06 21:13:31', 2),
(27, 'Additive', 190.00, 'January Bal C/d', 'Aristocrats', 0.00, '2025-02-06 21:13:59', '2025-02-06 21:13:59', 2),
(28, 'Hardener', 0.00, 'January Bal C/d', 'Allen Bridge', 0.00, '2025-02-06 21:14:21', '2025-02-06 21:14:21', 2),
(31, 'Cement_Silo_1', 26.52, 'January Bal C/d', 'Mombasa Cement', 0.00, '2025-02-06 21:29:51', '2025-02-06 21:29:51', 2),
(32, 'Ballast_2030', 0.00, '0A0+dr#3EnDX6t', 'Aristocrats', 0.00, '2025-02-06 21:34:23', '2025-02-06 21:34:23', 2),
(33, 'Dust', 486.31, 'January Bal C/d', 'Aristocrats', 0.00, '2025-02-06 22:13:44', '2025-02-06 22:13:44', 2),
(34, 'Ballast_2030', 1.00, 'Add Test 1', 'Aristocrats', 1.00, '2025-02-07 05:11:06', '2025-02-07 05:11:06', 2),
(35, 'Hardener', 1.00, 'Add Test 1', 'Aristocrats', 1.00, '2025-02-07 05:11:43', '2025-02-07 05:11:43', 2),
(36, 'Hardener', 1.00, 'Add Test 1', 'Aristocrats', 1.00, '2025-02-07 05:11:43', '2025-02-07 05:11:43', 2),
(37, 'Hardener', 2.00, 'Add Test 1', 'Aristocrats', 1.00, '2025-02-07 05:13:48', '2025-02-07 05:13:48', 2),
(38, 'Cement_Silo_1', 120.00, 'kbv 667h', 'Aristocrats', 120.00, '2025-02-08 16:39:37', '2025-02-08 16:39:37', 2),
(39, 'Cement_Silo_2', 150.00, 'KGW 120F', 'Mombasa Cement', 120.00, '2025-02-08 17:04:57', '2025-02-08 17:04:57', 2),
(41, 'Cement_Silo_2', 11111.00, 'kmm', 'Mombasa Cement', 0.00, '2025-02-09 22:04:00', '2025-02-09 19:04:39', 2),
(42, 'Cement_Silo_1', 23.78, 'KCH 675T', 'Allen Bridge', 23456.00, '2025-02-10 00:34:00', '2025-02-09 21:34:43', 2),
(43, 'Ballast_520', 17.00, 'KDQ 912G', 'Aristocrats', 1856.00, '2025-02-10 23:13:00', '2025-02-10 20:13:41', 2),
(44, 'Cement_Silo_1', 10.00, 'KCM 123Q', 'Mombasa Cement', 1234.00, '2025-02-24 13:08:00', '2025-02-24 10:08:38', 2),
(45, 'Ballast_520', 17.00, 'KAA 111F', 'Allen Bridge', 345.00, '2025-03-08 15:39:00', '2025-03-08 12:39:39', 2),
(46, 'Cement_Silo_1', 28.00, 'KCH 991K', 'Mombasa Cement', 0.00, '2025-04-12 18:08:00', '2025-04-12 18:08:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int NOT NULL,
  `support_ticket` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priority` enum('High','Medium','Low') NOT NULL,
  `urgency` enum('Very Urgent','Urgent','Not Urgent') NOT NULL,
  `working_status` enum('Working','Not Working') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `support_ticket`, `department`, `subject`, `description`, `priority`, `urgency`, `working_status`, `created_at`) VALUES
(1, 'Repairs', 'Logistics', 'KCH 570K', 'PUNCTURE', 'Medium', 'Very Urgent', 'Working', '2025-02-17 14:21:19'),
(2, 'Technical', 'Logistics', 'smilesspacetech.co.ke', 'dfg', 'High', 'Very Urgent', 'Working', '2025-02-18 00:11:36'),
(3, 'Maintenance', 'Logistics', 'KDB 533U Tyre Bust', 'The excelent buy a tyre', 'High', 'Very Urgent', 'Working', '2025-02-18 00:19:40'),
(4, 'Repairs', 'Logistics', 'ergd', 'dfg', 'High', 'Very Urgent', 'Not Working', '2025-02-18 00:43:19'),
(5, 'Maintenance', 'Logistics', 'VASTTALENTS.CO.KE', 'adsfghjkn,m', 'High', 'Very Urgent', 'Working', '2025-02-18 00:45:06'),
(6, 'Repairs', 'Logistics', 'erty', 'dsfgh', 'High', 'Very Urgent', 'Working', '2025-02-18 00:49:23'),
(7, 'Repairs', 'Logistics', 'KCH 572K', 'Puncture', 'High', 'Very Urgent', 'Not Working', '2025-02-18 01:03:26'),
(8, 'Repairs', 'HR', 'wer', 'ewrfe', 'Medium', 'Very Urgent', 'Working', '2025-02-18 01:16:57'),
(9, 'Repairs', 'Logistics', 'asfgh', 'sedrtfgh', 'Medium', 'Very Urgent', 'Working', '2025-02-18 01:22:30'),
(10, 'Repairs', 'Logistics', 'VASTTALENTS.CO.KE', 'w3456tyui', 'Low', 'Very Urgent', 'Not Working', '2025-02-18 01:38:12'),
(11, 'Maintenance', 'Logistics', 'fdgsadfg', 'dfg', 'Medium', 'Very Urgent', 'Not Working', '2025-02-18 01:41:02'),
(12, 'General', 'IT', 'it', 'it', 'Medium', 'Very Urgent', 'Not Working', '2025-02-18 01:45:23'),
(13, 'Technical', 'IT', 'cv', 'sd', 'Low', 'Very Urgent', 'Working', '2025-02-18 02:09:31'),
(14, 'Maintenance', 'Finance', 'HR', 'HR', 'Medium', 'Very Urgent', 'Working', '2025-02-18 02:13:15'),
(15, 'Repairs', 'IT', 'VASTTALENTS.CO.KE', 'wertyu', 'Medium', 'Not Urgent', 'Working', '2025-02-18 02:22:27'),
(16, 'General', 'IT', 'DATABASE CREATION', 'db', 'High', 'Very Urgent', 'Working', '2025-02-18 02:42:06'),
(17, 'Maintenance', 'Logistics', 'THIS IS A DEAL WELL DONE', 'This is a deal well done and it is no way going to a turn down to us. We must rise above and beyond.', 'High', 'Very Urgent', 'Working', '2025-02-18 02:46:24'),
(18, 'Repairs', 'Logistics', 'iuytfrdfghj', 'ewrtth', 'High', 'Very Urgent', 'Working', '2025-02-18 02:55:20'),
(19, 'Repairs', 'HR', 'ffgg gg', 'dfgdf', 'High', 'Urgent', 'Not Working', '2025-02-18 03:03:32'),
(20, 'Maintenance', 'IT', 'FACILITATION', 'Fare', 'High', 'Very Urgent', 'Not Working', '2025-02-18 03:26:01'),
(21, 'Maintenance', 'IT', 'On Phone', 'Gd', 'Medium', 'Urgent', 'Not Working', '2025-02-18 03:28:54'),
(22, 'Maintenance', 'Logistics', 'esrdfhg', 'dxfcgvh', 'Medium', 'Very Urgent', 'Working', '2025-02-18 12:21:58'),
(23, 'Technical', 'Logistics', 'GEAR NOT WORKING ', 'The gear box is not working ', 'High', 'Very Urgent', 'Not Working', '2025-03-06 11:52:47'),
(24, 'Maintenance', 'Logistics', 'DATABASE CONNECTION ERROR', 'Hey', 'High', 'Very Urgent', 'Working', '2025-03-18 23:01:28'),
(25, 'Repairs', 'Logistics', 'BELT', 'WERTFGHJ', 'High', 'Very Urgent', 'Working', '2025-04-12 15:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `next` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `type`, `active`, `last_login`, `added_date`, `updated_at`, `company_id`, `next`) VALUES
(1, 'F18', '', '0707574430', 'fl@gmail.com', '$2y$10$L5DR42699zxGTw2Nxleiz.lYU25Oo8LAuc9SZgnpXft8aOUb0V27a', 'user', 1, '2024-10-17 10:13:02', '2024-10-17 10:13:02', '2024-10-17 10:13:02', 1, NULL),
(20, 'Smiles', 'Smiles', '0796871750', 'smiles@gmail.com', '$2y$10$PFIL4eScq3J3Cxqg191wm.Kvi59aX7yqcorZ3cee.sdgQnq.iSw62', '4', 1, NULL, '2025-02-18 14:05:14', NULL, NULL, NULL),
(21, 'Simon', 'Mbatia', '0115290260', 'simon@gmail.com', '$2y$10$hKqoWbAg/.E941FvCWcGjOpX2qjxNCb0r.3C9IbwEiblLEiLhi4rq', '4', 1, NULL, '2025-02-18 14:18:36', NULL, NULL, NULL),
(22, 'HEZBORN', 'MUIRU', '0115290260', 'muiru@gmail.com', '$2y$10$Hr3HGZFBbD77eikyXmM2UeNvbjK6BE0Ktd5xjSQ/jPHSQo0Z3/DRu', '4', 1, NULL, '2025-02-18 14:38:06', NULL, NULL, NULL),
(23, 'Annie', 'Annie', '0710605032', 'hezbornmuiru627@gmail.com', '$2y$10$208HkkL9CL1SUn9Gd48hY.Xi70RRMmyRhx0zaEQ/kf6PG/a7.jXhe', '4', 1, NULL, '2025-02-18 16:30:34', NULL, NULL, NULL),
(24, 'Alice', 'Ale', '0729136507', 'alice.jeremoki00@gmail.com', '$2y$10$wEE4YhJ6MGFeP.jkzCqo7..4Ujk/68228RuqSq4X76L4aazcgsc7O', '4', 1, NULL, '2025-02-18 17:00:59', NULL, NULL, NULL),
(25, 'Kim', 'Kim', '0729136507', 'alice.jeremoki00@gmail.com', '$2y$10$HSTi9Gg9ooDfDravW5yTI.3L2jM4TDFHfiVpEoOZMVA/fWjgpjPoG', '4', 1, NULL, '2025-02-18 21:57:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `phone`, `email`, `location`, `product`, `added_date`) VALUES
(1, 'Mombasa Cement', '0706436992', 'msacement@gmail.com', 'Machakos', 'Cement', '2025-01-01 18:21:22'),
(2, 'AllenBridge', '(+254) 727 808 808', 'sales@allenbridgeltd.co.ke', 'Kipeto, Along Isinya-Kiserian road', 'Dust', '2025-01-06 13:32:39'),
(3, 'Juja blocka', '0722531085', 'jujablocks@gmail.com', 'juja', 'building blocks', '2025-02-06 15:19:11'),
(4, 'Smiles', '0722708795', 'Smiles@gmail.com', 'KIJI', 'Additive', '2025-02-08 15:47:35'),
(5, 'ARISTOCRATS', '0768550689', 'aristocrats@gmail.com', 'Kantani', 'AGREGATES', '2025-02-16 21:31:46'),
(6, 'EIGO LIMITED', '0720240858', 'eigolimited@gmail.com', 'Mlolongo', 'Additive', '2025-02-16 21:32:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratios`
--
ALTER TABLE `ratios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `received_goods`
--
ALTER TABLE `received_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Delivery`
--
ALTER TABLE `Delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ratios`
--
ALTER TABLE `ratios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `received_goods`
--
ALTER TABLE `received_goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD CONSTRAINT `order_statuses_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD CONSTRAINT `order_tracking_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_tracking_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `order_statuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
