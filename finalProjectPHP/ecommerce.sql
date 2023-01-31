-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 05:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  `total_price` decimal(20,2) DEFAULT NULL,
  `sub_total` decimal(20,2) DEFAULT NULL,
  `tax` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `id`, `quantity`, `dateTime`, `total_price`, `sub_total`, `tax`) VALUES
(1, 3, 1, NULL, '2022-01-01 00:00:00', '100.00', NULL, NULL),
(2, 3, 1, NULL, '2022-01-01 09:15:23', '200.00', NULL, NULL),
(9, NULL, NULL, NULL, '2023-01-30 18:13:28', NULL, NULL, NULL),
(10, NULL, NULL, NULL, '2023-01-30 18:13:34', NULL, NULL, NULL),
(11, NULL, NULL, NULL, '2023-01-30 18:13:44', NULL, NULL, NULL),
(12, 2, 1, NULL, '2023-01-30 18:24:56', NULL, NULL, NULL),
(13, 2, 1, NULL, '2023-01-30 18:25:30', NULL, NULL, NULL),
(15, 2, 1, 8, '2023-01-30 18:34:44', '400.00', '400.00', '7.77'),
(16, 2, 1, 8, '2023-01-30 18:39:23', '400.00', '400.00', '7.77'),
(17, 2, 0, 8, '2023-01-30 18:40:20', '400.00', '400.00', '7.77'),
(21, 1, 0, 8, '2023-01-30 19:03:15', '400.00', '400.00', '7.77'),
(22, 1, 0, 8, '2023-01-30 19:58:14', '400.00', '400.00', '7.77'),
(23, 1, 3, 8, '2023-01-30 19:59:42', '400.00', '400.00', '7.77'),
(24, 1, 3, 8, '2023-01-30 20:00:45', '400.00', '400.00', '7.77'),
(32, 6, 0, 8, '2023-01-30 20:20:11', '400.00', '400.00', '7.77'),
(33, 6, 0, 8, '2023-01-30 20:20:17', '400.00', '400.00', '7.77'),
(34, 2, 0, 8, '2023-01-30 20:20:53', '400.00', '400.00', '7.77'),
(36, 5, 0, 8, '2023-01-30 20:21:51', '400.00', '400.00', '7.77'),
(40, 2, 0, 8, '2023-01-30 20:28:05', '400.00', '400.00', '7.77'),
(41, 2, 0, 8, '2023-01-30 20:28:31', '400.00', '400.00', '7.77'),
(43, 1, 0, 8, '2023-01-30 20:35:24', '400.00', '400.00', '7.77'),
(44, 1, 0, 8, '2023-01-30 20:35:53', '400.00', '400.00', '7.77'),
(46, 5, 0, 8, '2023-01-30 20:36:53', '400.00', '400.00', '7.77'),
(47, 1, 0, 8, '2023-01-30 20:37:43', '400.00', '400.00', '7.77'),
(48, 5, 0, 8, '2023-01-30 20:37:59', '400.00', '400.00', '7.77'),
(49, 6, 0, 8, '2023-01-30 20:38:12', '400.00', '400.00', '7.77'),
(59, 1, 0, 8, '2023-01-30 21:00:27', '400.00', '400.00', '7.77'),
(61, 1, 0, 8, '2023-01-30 21:09:00', '400.00', '400.00', '7.77'),
(62, 1, 0, 8, '2023-01-30 21:09:48', '400.00', '400.00', '7.77'),
(63, 1, 0, 8, '2023-01-30 21:10:20', '400.00', '400.00', '7.77'),
(64, 1, 0, 8, '2023-01-30 21:10:32', '400.00', '400.00', '7.77'),
(65, 1, 0, 8, '2023-01-30 21:26:04', '400.00', '400.00', '7.77'),
(66, 1, 0, 8, '2023-01-30 21:26:14', '400.00', '400.00', '7.77'),
(67, 2, 0, 8, '2023-01-30 21:33:41', '400.00', '400.00', '7.77'),
(68, 2, 0, 1, '2023-01-30 21:36:57', '400.00', '400.00', '7.77'),
(69, 5, 0, 1, '2023-01-30 21:37:06', '400.00', '400.00', '7.77'),
(70, 4, 0, 1, '2023-01-30 21:41:13', '400.00', '400.00', '0.00'),
(71, 2, 0, 1, '2023-01-30 21:41:46', '400.00', '0.00', '0.00'),
(72, 5, 0, 1, '2023-01-30 21:42:07', '400.00', '0.00', '0.00'),
(73, 5, 0, 1, '2023-01-30 21:42:43', '400.00', '0.00', '0.00'),
(74, 5, 0, 1, '2023-01-30 21:42:46', '400.00', '0.00', '0.00'),
(75, 2, 0, 1, '2023-01-30 21:53:38', '400.00', '0.00', '0.00'),
(76, 1, 0, 1, '2023-01-30 21:57:59', '300.00', '0.00', '0.00'),
(77, 1, 0, 1, '2023-01-30 22:02:14', '300.00', '300.00', '0.00'),
(78, 1, 0, 1, '2023-01-30 22:02:41', '300.00', '300.00', '0.00'),
(79, 1, 0, 1, '2023-01-30 22:03:52', '300.00', '300.00', '0.00'),
(80, 1, 0, 1, '2023-01-30 22:04:46', '300.00', '300.00', '0.00'),
(81, 1, 0, 8, '2023-01-30 22:07:10', '400.00', '400.00', '7.77'),
(82, 1, 0, 8, '2023-01-30 22:07:21', '400.00', '400.00', '7.77'),
(83, 1, 0, 8, '2023-01-30 22:08:11', '400.00', '400.00', '7.77'),
(84, 1, 0, 8, '2023-01-30 22:08:25', '400.00', '400.00', '7.77'),
(85, 5, 0, 8, '2023-01-30 22:08:48', '400.00', '400.00', '7.77'),
(86, 6, 0, 8, '2023-01-30 22:12:25', '400.00', '400.00', '7.77'),
(87, 5, 0, 1, '2023-01-30 22:16:02', '700.00', '0.00', '0.00'),
(88, 2, 3, 1, '2023-01-30 22:17:12', '400.00', '0.00', '0.00'),
(89, 1, 8, 1, '2023-01-30 22:36:58', '300.00', '0.00', '0.00'),
(90, 3, 8, 1, '2023-01-30 22:37:11', '500.00', '0.00', '0.00'),
(91, 2, 0, 1, '2023-01-31 02:27:58', '400.00', '0.00', '0.00'),
(92, 2, 0, 1, '2023-01-31 02:29:08', '400.00', '0.00', '0.00'),
(93, 6, 0, 1, '2023-01-31 02:29:49', '800.00', '0.00', '0.00'),
(94, 2, 0, 1, '2023-01-31 02:41:22', '400.00', '0.00', '0.00'),
(95, 5, 3, 1, '2023-01-31 03:33:41', '700.00', '0.00', '0.00'),
(96, 1, 8, 1, '2023-01-31 16:07:11', '300.00', '0.00', '0.00'),
(97, 2, 8, 1, '2023-01-31 16:07:19', '400.00', '0.00', '0.00'),
(98, 5, 0, 1, '2023-01-31 17:14:42', '700.00', '0.00', '0.00'),
(99, 5, 0, 1, '2023-01-31 17:17:07', '700.00', '0.00', '0.00'),
(100, 3, 0, 1, '2023-01-31 17:17:29', '500.00', '0.00', '0.00'),
(101, 3, 0, 1, '2023-01-31 17:17:49', '500.00', '0.00', '0.00'),
(102, 5, 0, 1, '2023-01-31 17:18:09', '700.00', '0.00', '0.00'),
(103, 4, 0, 1, '2023-01-31 17:22:18', '600.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`) VALUES
(1, 'One Plus 5T', '300.00'),
(2, 'Apple Iphone X', '400.00'),
(3, 'Samsung S8', '500.00'),
(4, 'Apple Iphone 7S', '600.00'),
(5, 'One Plus 3T', '700.00'),
(6, 'Oppo A57', '800.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contact` bigint(1) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(0, 'Kevin Bell', 'bellkevin@pm.me', 'c4ca4238a0b923820dcc509a6f75849b', 8015551234, 'Layton', '123 Main St'),
(1, 'Kevin Bell', 'kevinbellr@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 8011231234, 'SLC', '5 Main St'),
(3, 'kevin bell', 'bellkevin@proton.me', '5f4dcc3b5aa765d61d8327deb882cf99', 8011234567, 'slc', '9 State St'),
(7, 'Braiden', 'bp@email.com', '32250170a0dca92d53ec9624f336ca24', 4357555555, 'here', '123'),
(8, 'Geoge', 'george.ray@davistech.edu', '5a105e8b9d40e1329780d62ea2265d8a', 8019319244, 'kaysville', 'yep'),
(9, 'George 2', 'george@davistech.edu', 'ad0234829205b9033196ba818f7a872b', 8015551234, 'SLC', '5 Main St');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
