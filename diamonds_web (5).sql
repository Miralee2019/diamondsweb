-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 05:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamonds_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(40) NOT NULL,
  `total_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `currency`, `size`, `color`, `total_price`) VALUES
(32, 1, 8, 3, '', 'Select Size', 'Select color', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `email`, `password`) VALUES
(1, 'mira', 'mirapansuriya10198@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `billing_detail`
--

CREATE TABLE `billing_detail` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_detail`
--

INSERT INTO `billing_detail` (`bill_id`, `user_id`, `f_name`, `l_name`, `company_name`, `address`, `country`, `state`, `city`, `zip`, `email_id`, `phone_no`) VALUES
(1, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 8596321452),
(2, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 8596321452),
(3, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 8596321452),
(4, 1, 'happy', 'bhadani', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'happybhadani@gmail.com', 8532415274),
(5, 1, 'happy', 'bhadani', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'happybhadani@gmail.com', 8532415274),
(6, 1, 'megha', 'pansuriaya', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 5745859685),
(7, 1, 'kaju', 'pansuriaya', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 7485963214),
(8, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', '1', '1', '1', 395010, 'mirapansuriya10198@gmail.com', 7585968585),
(9, 1, 'happy', 'bhadani', 'Roxon', '133, krishna row house', 'canada', 'Gujarat', 'Surat', 395010, 'happybhadani@gmail.com', 8596415252),
(10, 1, 'happyyy', 'bhadani', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'happybhadani@gmail.com', 8596748585),
(11, 1, 'happy', 'bhadani', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'happybhadani@gmail.com', 8596542121),
(12, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'mirapansuriya10198@gmail.com', 8596748596),
(13, 1, 'Mira', 'pansuriay', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'mirapansuriya10198@gmail.com', 8596748596);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(30) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `images`) VALUES
(1, 'Polished Diamonds', 'diamond(4)3.jpg'),
(2, 'Rough Diamonds', 'diamond(4)23.jpg'),
(3, 'Jewellery', 'diamond(4)3.jpg'),
(4, 'Diamond Beads (Drilled)', 'diamond(4)23.jpg'),
(5, 'Polished Diamonds', 'diamond(4)3.jpg'),
(6, 'Rough Diamonds', 'diamond(4)23.jpg'),
(7, 'Rough Diamonds', 'diamond(4)24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `state_id`) VALUES
(1, 'Surat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `f_name`, `l_name`, `email`, `phone_no`, `message`) VALUES
(1, 'Mira', 'pansuriay', 'mirapansuriya10198@gmail.com', 8574968574, 'hello '),
(2, 'happy', 'bhadani', 'happybhadani@gmail.com', 8596415252, 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'India'),
(2, 'canada');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `sub_total`, `shipping_id`, `total`) VALUES
(1, 1, 1500, 1, 1540),
(2, 1, 1500, 1, 1540);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payer_name` varchar(50) NOT NULL,
  `payer_email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `subc_id` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `weight` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `subc_id`, `pname`, `price`, `image`, `weight`, `stock`, `sale`) VALUES
(1, 1, 1, 'Natural Light Orange Round Loose Polished Diamonds', 10000, 'diamond(4).jpg,diamond(5)2.jpg,diamond3.jpg,diamond3.png,download2.jpg', '0.50 ct 1.00-2.00 MM', 0, 0),
(8, 3, 3, 'Brown Color Rose Cut Polished Diamond Sterling Silver Engage', 500, 'diamond(4).jpg,diamond(5)2.jpg,diamond1.jpg,diamond33.jpg,footerproduct.jpg', '0.50 ct 1.00-2.00 MM', 4, 0),
(9, 3, 4, 'White Grey Color Rose Cut polished Diamond Sterling Silver E', 1000, 'diamond(4).jpg,diamond(5)1.jpg,diamond(5)21.jpg,diamond1.jpg,diamond31.jpg,diamond32.jpg,diamond32.png,download24.jpg,footerproduct.jpg', '0.50 ct 1.00-2.00 MM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `f_name`, `l_name`, `company_name`, `address`, `country`, `state`, `city`, `zip`, `email_id`, `password`, `phone_no`) VALUES
(1, 'mira', 'pansuriya', 'roxon', '133,  krishna row house', 'india', 'gujarat', 'surat', 395010, 'mirapansuriya10198@gmail.com', '12345678', 9574856352);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `email`, `message`) VALUES
(1, 1, 'mirapansuriya10198@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `sale_product`
--

CREATE TABLE `sale_product` (
  `sale_id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `sale_percentage` int(11) NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `current_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_product`
--

INSERT INTO `sale_product` (`sale_id`, `product_id`, `sale_percentage`, `starttime`, `endtime`, `current_time`) VALUES
(1, '1,2,3,4,5,6', 10, '2021-02-15 14:43:07', '2021-03-07 19:22:00', '2021-03-07 19:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `shipping_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_name`, `shipping_rate`) VALUES
(1, 'Fast Shipping (Estimate 6 - 10 days)', 40),
(3, 'Standard Shipping ( Estimate 13 - 15 Days', 30);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_detail`
--

CREATE TABLE `shipping_detail` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `zip` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_detail`
--

INSERT INTO `shipping_detail` (`s_id`, `user_id`, `f_name`, `l_name`, `country`, `state`, `city`, `address`, `zip`, `company_name`) VALUES
(1, 1, 'mira', 'pansuriya', 'india', 'gujarat', 'surat', '133, krishna row house', 395010, 'roxon');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `slider_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image`, `slider_text`) VALUES
(1, 'diamond(4)3.jpg,diamond3.jpg', ''),
(2, 'diamond(4)3.jpg,diamond3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `country_id`) VALUES
(1, 'Gujarat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `subc_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `subcategories_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`subc_id`, `c_id`, `subcategories_name`) VALUES
(1, 1, 'Round Brilliant Cut'),
(2, 2, 'Blue Rough'),
(3, 3, 'Rings'),
(4, 3, 'Rings'),
(5, 1, 'Pear Shape');

-- --------------------------------------------------------

--
-- Table structure for table `variation`
--

CREATE TABLE `variation` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `shape` varchar(30) NOT NULL,
  `d_style` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `d_weight` varchar(20) NOT NULL,
  `metal` varchar(20) NOT NULL,
  `band_width` varchar(20) NOT NULL,
  `clarity` varchar(20) NOT NULL,
  `certification` varchar(20) NOT NULL,
  `d_color` varchar(30) NOT NULL,
  `d_type` varchar(20) NOT NULL,
  `ring_size` varchar(20) NOT NULL,
  `no_of_diamond` varchar(20) NOT NULL,
  `d_size` varchar(20) NOT NULL,
  `ring_weight` varchar(20) NOT NULL,
  `cut` varchar(20) NOT NULL,
  `treatment` varchar(20) NOT NULL,
  `luster` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `variation`
--

INSERT INTO `variation` (`id`, `p_id`, `shape`, `d_style`, `gender`, `d_weight`, `metal`, `band_width`, `clarity`, `certification`, `d_color`, `d_type`, `ring_size`, `no_of_diamond`, `d_size`, `ring_weight`, `cut`, `treatment`, `luster`) VALUES
(4, 1, 'kite', '', '', '', '', '', 'OPAQUE', 'NOT APPLICABLE', 'Salt,Pepper', 'NATURAL', '', '', '8.10*6.80*3.20 MM', '', 'Very Good', '100% NATURAL', 'SPARKLING'),
(5, 8, 'round', '', '', '', '', '', '', '', 'black', '', '', '', '', '', '1.5', '', ''),
(6, 9, 'round', '', '', '2.2', '', '', '', '', 'black,blue', 'round', '', '', '', '', '1.5 mm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `whishlist`
--

CREATE TABLE `whishlist` (
  `whishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whishlist`
--

INSERT INTO `whishlist` (`whishlist_id`, `product_id`, `user_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `sale_product`
--
ALTER TABLE `sale_product`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `shipping_detail`
--
ALTER TABLE `shipping_detail`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`subc_id`);

--
-- Indexes for table `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whishlist`
--
ALTER TABLE `whishlist`
  ADD PRIMARY KEY (`whishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_detail`
--
ALTER TABLE `billing_detail`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sale_product`
--
ALTER TABLE `sale_product`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_detail`
--
ALTER TABLE `shipping_detail`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `subc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `variation`
--
ALTER TABLE `variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `whishlist`
--
ALTER TABLE `whishlist`
  MODIFY `whishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
