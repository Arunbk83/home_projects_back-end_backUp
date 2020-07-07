-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 08:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkmg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bkmg_cart_items`
--

CREATE TABLE `bkmg_cart_items` (
  `id` bigint(12) NOT NULL,
  `cart_id` varchar(125) NOT NULL,
  `productId` varchar(125) NOT NULL,
  `product_unit_price` varchar(125) NOT NULL,
  `product_qty` varchar(125) NOT NULL,
  `total_product_price` int(11) NOT NULL,
  `userId` varchar(12) NOT NULL,
  `cart_createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bkmg_cart_items`
--

INSERT INTO `bkmg_cart_items` (`id`, `cart_id`, `productId`, `product_unit_price`, `product_qty`, `total_product_price`, `userId`, `cart_createdon`) VALUES
(4, 'BKMGCRN903951', 'BKMGPR0001', '3', '55', 356, '3', '2019-01-23 21:36:22'),
(5, 'BKMGCRN44154', 'BKMGPR0001', '3', '55', 356, '3', '2019-01-23 21:38:30'),
(6, 'BKMGCRN491216', 'BKMGPR0001', '3', '55', 356, '3', '2019-01-23 21:38:34'),
(7, 'BKMGCRN434851', 'BKMGPR0001', '3', '55', 356, '2', '2019-01-23 21:52:14'),
(8, 'BKMGCRN266368', 'BKMGPR0001', '3', '55', 356, '2', '2019-01-23 21:52:21'),
(9, 'BKMGCRN767224', 'BKMGPR0001', '45', '2', 90, '2', '2019-01-24 05:29:01'),
(10, 'BKMGCRN777065', '', '217', '3', 56, '2', '2019-01-25 19:53:27'),
(11, 'BKMGCRN36315', '', '217', '3', 56, '2', '2019-01-25 19:53:29'),
(12, 'BKMGCRN53850', '', '', '', 0, '', '2019-01-26 21:54:23'),
(13, 'BKMGCRN27645', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-26 21:54:23'),
(14, 'BKMGCRN603904', '', '', '', 0, '', '2019-01-26 21:54:34'),
(15, 'BKMGCRN453784', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-26 21:54:34'),
(16, 'BKMGCRN492045', '', '', '', 0, '', '2019-01-27 10:17:42'),
(17, 'BKMGCRN146575', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 10:17:42'),
(18, 'BKMGCRN279101', '', '', '', 0, '', '2019-01-27 10:28:30'),
(19, 'BKMGCRN67871', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 10:28:30'),
(20, 'BKMGCRN983146', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 10:28:31'),
(21, 'BKMGCRN403580', '', '', '', 0, '', '2019-01-27 17:14:10'),
(22, 'BKMGCRN254681', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 17:14:10'),
(23, 'BKMGCRN84420', '', '', '', 0, '', '2019-01-27 17:15:12'),
(24, 'BKMGCRN823322', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 17:15:12'),
(25, 'BKMGCRN60476', '', '', '', 0, '', '2019-01-27 17:15:41'),
(26, 'BKMGCRN363390', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 17:15:41'),
(27, 'BKMGCRN909511', '', '', '', 0, '', '2019-01-27 17:16:13'),
(28, 'BKMGCRN952212', 'BKMGPR0002', '217', '3', 56, '2', '2019-01-27 17:16:13'),
(29, 'BKMGCRN971294', '', '', '', 0, '', '2019-01-27 17:19:06'),
(30, 'BKMGCRN140063', 'BKMGPR0002', '217', '3', 56, '3', '2019-01-27 17:19:06'),
(31, 'BKMGCRN39975', '', '', '', 0, '', '2019-01-27 17:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `bkmg_orders`
--

CREATE TABLE `bkmg_orders` (
  `orId` int(11) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `product_qty` varchar(122) NOT NULL,
  `product_unit_price` varchar(122) NOT NULL,
  `gst_amount` varchar(255) NOT NULL,
  `delivery_charges` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `userId` varchar(122) NOT NULL,
  `order_createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bkmg_orders`
--

INSERT INTO `bkmg_orders` (`orId`, `orderId`, `productId`, `product_qty`, `product_unit_price`, `gst_amount`, `delivery_charges`, `total_price`, `userId`, `order_createdon`) VALUES
(14, 'BKMGORD904845', 'BKMGPR0001,BKMGPR0002', '2', '200,450', '35', '50', '650', '3', '2019-01-25 19:54:43'),
(15, 'BKMGORD544740', 'BKMGPR0001,BKMGPR0002', '2', '200,450', '35', '50', '650', '3', '2019-01-25 19:54:48'),
(16, 'BKMGORD285500', '', '', '', '', '', '', '', '2019-01-27 18:26:17'),
(17, 'BKMGORD431690', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 18:26:17'),
(18, 'BKMGORD38897', '', '', '', '', '', '', '', '2019-01-27 18:27:29'),
(19, 'BKMGORD178293', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 18:27:29'),
(20, 'BKMGORD51250', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 18:27:32'),
(21, 'BKMGORD454402', '', '', '', '', '', '', '', '2019-01-27 18:28:36'),
(22, 'BKMGORD642164', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 18:28:36'),
(23, 'BKMGORD676633', '', '', '', '', '', '', '', '2019-01-27 18:29:07'),
(24, 'BKMGORD887758', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 18:29:07'),
(25, 'BKMGORD493969', '', '', '', '', '', '', '', '2019-01-27 20:04:23'),
(26, 'BKMGORD546613', 'BKMGPR0001,BKMGPR0002', '226', '200,450', '35', '50', '1124', '3', '2019-01-27 20:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `bkmg_products`
--

CREATE TABLE `bkmg_products` (
  `id` int(11) NOT NULL,
  `productId` varchar(122) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` varchar(12) NOT NULL,
  `product_type` varchar(125) NOT NULL,
  `product_small_image` varchar(225) NOT NULL,
  `product_image_1` varchar(225) NOT NULL,
  `product_image_2` varchar(225) NOT NULL,
  `product_image_3` varchar(225) NOT NULL,
  `product_image_4` varchar(225) NOT NULL,
  `product_image_5` varchar(225) NOT NULL,
  `product_stock` varchar(12) NOT NULL,
  `product_color` varchar(122) NOT NULL,
  `product_createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bkmg_products`
--

INSERT INTO `bkmg_products` (`id`, `productId`, `product_name`, `product_description`, `product_price`, `product_type`, `product_small_image`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `product_image_5`, `product_stock`, `product_color`, `product_createdon`) VALUES
(1, 'BKMGPR0001', 'Red Rice', 'Red Rice', '55', 'Rice', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', '2060', 'kg', '2019-01-26 19:16:51'),
(2, 'BKMGPR0002', 'Rice', ' Rice', '55', 'Rice', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', 'http://bkmgfoodproducts.com/imgs/1.jpg', '2060', 'kg', '2019-01-26 19:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `bkmg_users`
--

CREATE TABLE `bkmg_users` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `city` varchar(125) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bkmg_users`
--

INSERT INTO `bkmg_users` (`userId`, `name`, `password`, `mobile`, `email`, `address`, `gender`, `city`, `createdon`) VALUES
(2, 'usha c', 'kushi@2017', '7795815458', 'cusha2787@gmail.com', 'bangalore', 'female', 'Bangalore', '2019-01-20 19:50:49'),
(3, 'Arun B Krishnegowda', 'kushi@2017', '8147683328', 'arunbk.kmg@gmail.com', 'bangalore', 'male', 'Bangalore', '2019-01-26 19:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `type` enum('coupon','deal','loyality','') NOT NULL,
  `userid` int(11) NOT NULL,
  `couponid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loyalityid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `type`, `userid`, `couponid`, `productid`, `created`, `loyalityid`) VALUES
(17, 'deal', 870, 0, 107, '2018-12-17 18:04:58', 0),
(18, 'deal', 839, 0, 107, '2018-12-17 22:11:29', 0),
(19, 'deal', 839, 0, 107, '2018-12-17 22:11:30', 0),
(41, 'coupon', 873, 80, 0, '2019-01-21 07:09:51', 0),
(42, 'deal', 873, 0, 95, '2019-02-07 03:58:40', 0),
(25, 'loyality', 840, 0, 0, '2019-01-02 13:54:05', 36),
(29, 'deal', 840, 0, 108, '2019-01-04 14:24:38', 0),
(30, 'coupon', 1, 76, 0, '2019-01-05 13:23:16', 0),
(31, 'coupon', 1, 80, 0, '2019-01-05 13:23:39', 0),
(36, 'deal', 885, 0, 108, '2019-01-07 14:31:47', 0),
(34, 'deal', 840, 0, 99, '2019-01-07 13:02:50', 0),
(48, 'coupon', 885, 74, 3, '2019-02-21 01:33:45', 4);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `Id` varchar(50) NOT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Id`, `Title`, `Status`) VALUES
('1', 'Go to Market tomorrow', 'done'),
('2', 'Email to manager', 'pending'),
('3', 'Push code to GitHub', 'done'),
('4', 'Go For Running', 'done'),
('5', 'Go to Movie', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, '8147683328', 'kmg12345', '2019-01-20 16:55:20'),
(0, '', '', '2019-01-20 14:48:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkmg_cart_items`
--
ALTER TABLE `bkmg_cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkmg_orders`
--
ALTER TABLE `bkmg_orders`
  ADD PRIMARY KEY (`orId`);

--
-- Indexes for table `bkmg_products`
--
ALTER TABLE `bkmg_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkmg_users`
--
ALTER TABLE `bkmg_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkmg_cart_items`
--
ALTER TABLE `bkmg_cart_items`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bkmg_orders`
--
ALTER TABLE `bkmg_orders`
  MODIFY `orId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bkmg_products`
--
ALTER TABLE `bkmg_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bkmg_users`
--
ALTER TABLE `bkmg_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
