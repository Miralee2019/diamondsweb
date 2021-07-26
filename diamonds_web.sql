-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:15 AM
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
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(40) DEFAULT NULL,
  `total_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `size`, `color`, `total_price`) VALUES
(213, 1, 77, 2, '', 'Salt', 30);

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
(1, 'mira', 'mirapansuriya10198@gmail.com', '12345678'),
(2, 'Mohit', 'mohitankoliya@gmail.com', 'mohit02A');

-- --------------------------------------------------------

--
-- Table structure for table `billing_detail`
--

CREATE TABLE `billing_detail` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(55) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_detail`
--

INSERT INTO `billing_detail` (`bill_id`, `user_id`, `order_id`, `f_name`, `l_name`, `company_name`, `address`, `country`, `state`, `city`, `zip`, `email_id`, `phone_no`, `date`) VALUES
(115, 0, 'order_607e87db52b9c', 'daxis', 'patel', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 07:51:13'),
(116, 0, 'order_607e8b2de67ca', 'roxon', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:05:32'),
(118, 0, 'order_607e913271695', 'pratik', 'patel', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:31:02'),
(119, 0, 'order_607e94515395d', 'Divyesh', 'Nabhoya', 'gGlopTechnologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:44:11'),
(120, 0, 'order_607e9506149e8', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:47:10'),
(121, 0, 'order_607e9643aa1c7', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:52:27'),
(122, 0, 'order_607e9680f0609', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:53:28'),
(123, 0, 'order_607e96adc3bc1', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 08:54:14'),
(124, 0, 'order_607e98771e7bd', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:01:51'),
(125, 0, 'order_607e993fae162', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:05:11'),
(126, 0, 'order_607e999746092', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:06:41'),
(127, 0, 'order_607e9ab6bdb70', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:11:28'),
(128, 0, 'order_607e9b5655076', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:14:09'),
(129, 1, 'order_607e9cd1ac43c', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:20:24'),
(130, 1, 'order_607e9cfabf5dc', 'Divyesh', 'Nabhoya', 'gGlopTechnologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:21:05'),
(131, 1, 'order_607e9d03dd17d', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:21:15'),
(132, 1, 'order_607e9d449a92a', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:22:20'),
(133, 1, 'order_607e9db21a43c', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:24:09'),
(134, 1, 'order_607e9dbb0e1c2', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:24:35'),
(135, 1, 'order_607e9de0db817', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:24:55'),
(136, 1, 'order_607e9e35a2d42', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:26:22'),
(137, 1, 'order_607e9e4093007', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:26:34'),
(138, 1, 'order_607e9e9b2f86d', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:28:02'),
(139, 1, 'order_607e9eec6c43f', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:29:22'),
(140, 1, 'order_607e9f66a2afe', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:31:23'),
(141, 1, 'order_607e9f720ea93', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:31:36'),
(142, 1, 'order_607e9f8be276b', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:32:06'),
(143, 1, 'order_607e9fa6154da', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:32:26'),
(144, 1, 'order_607e9fabe0f1f', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:32:29'),
(145, 1, 'order_607e9fba25862', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:32:50'),
(146, 1, 'order_607e9fc42e2ba', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:32:56'),
(147, 1, 'order_607e9fc98191d', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:33:00'),
(148, 0, 'order_607e9ffde9d78', 'Divyesh', 'Nabhoya', 'gGlopTechnologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:33:58'),
(149, 0, 'order_607ea0338ed0e', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:34:52'),
(150, 0, 'order_607ea16185369', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:40:05'),
(151, 0, 'order_607ea1b40f9ab', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:41:19'),
(152, 0, 'order_607ea21f19f6e', 'Divyesh', 'Nabhoya', 'gGlopTechnologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:43:08'),
(153, 0, 'order_607ea3420852d', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:48:18'),
(154, 0, 'order_607ea3b2d534b', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:49:46'),
(155, 0, 'order_607ea3d590110', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 09:50:22'),
(156, 1, 'order_607eabbad76b3', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:24:02'),
(157, 0, 'order_607eabbad76b3', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:24:21'),
(158, 1, 'order_607eac088b282', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:25:22'),
(160, 1, 'order_607eae10480e1', 'Divyesh', 'Nabhoya', 'fwf', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:33:59'),
(161, 0, 'order_607eae10480e1', 'Divyesh', 'Nabhoya', 'fwf', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:34:10'),
(162, 1, 'order_607eb08f0c604', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:44:44'),
(163, 1, 'order_607eb0b2ed959', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:47:42'),
(164, 0, 'order_607eb0b2ed959', 'Divyesh', 'Nabhoya', 'Charusat University', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:47:49'),
(165, 0, 'order_607eb24a97738', 'Divyesh', 'Nabhoya', 'Roxon Technologies', 'B/103,Santlal Society,Street No. 6,Hirabag,varachha Road', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', 7567776802, '2021-04-20 10:52:06');

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
(8, 'kk', 'istockphoto-943395064-640x6402.jpg'),
(9, 'mm', 'fvsvsgv1.jpg'),
(10, 'evf', 'istockphoto-146440925-640x640.jpg'),
(11, 'hh', 'photo-1599707367072-cd6ada2bc3753.jpg'),
(12, 'mm', 'fvsvsgv2.jpg'),
(13, 'Polished Diamonds', '506521458823092069.jpg');

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
  `message` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `f_name`, `l_name`, `email`, `phone_no`, `message`, `date`) VALUES
(1, 'Mira', 'pansuriay', 'mirapansuriya10198@gmail.com', 8574968574, 'hello ', '2021-04-16 03:57:08'),
(2, 'happy', 'bhadani', 'happybhadani@gmail.com', 8596415252, 'nice', '2021-04-16 03:57:08'),
(3, 'Divyesh', 'Nabhoya', 'divyeshnabhoya2@gmail.com', 7567776802, 'Hii', '2021-04-16 03:57:08'),
(4, 'happy', 'patel', 'happybhadani17@gmail.com', 9874563214, 'hii', '2021-04-16 03:57:08'),
(5, 'happy', 'patel', 'happybhadani17@gmail.com', 9874563214, 'hii', '2021-04-16 03:57:08');

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
-- Table structure for table `diamond_size`
--

CREATE TABLE `diamond_size` (
  `id` int(11) NOT NULL,
  `product_id` int(55) NOT NULL,
  `diamond_size` varchar(55) NOT NULL,
  `diamond_value` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diamond_size`
--

INSERT INTO `diamond_size` (`id`, `product_id`, `diamond_size`, `diamond_value`) VALUES
(1, 88, 'a', 1),
(2, 88, 'b', 2),
(3, 79, 'c', 3),
(4, 89, '10mm * 12mm', 1200),
(5, 89, '12mm * 14mm', 1400),
(6, 76, '14mm * 16mm', 1600),
(7, 74, '16mm * 18mm', 1800),
(8, 89, '18mm * 20mm', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `order_id` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `sub_total`, `shipping_id`, `total`, `order_id`, `date`) VALUES
(33, 1, 1046, 1, 1076, 'order_607e87db52b9c', '2021-04-20 07:51:14'),
(34, 1, 5585, 1, 5615, 'order_607e8b2de67ca', '2021-04-20 08:05:32'),
(36, 1, 6300, 1, 6330, 'order_607e913271695', '2021-04-20 08:31:03'),
(37, 1, 26185, 1, 26215, 'order_607e94515395d', '2021-04-20 08:44:11'),
(38, 1, 22995, 1, 23025, 'order_607e9506149e8', '2021-04-20 08:47:10'),
(39, 1, 22050, 1, 22080, 'order_607e9643aa1c7', '2021-04-20 08:52:27'),
(40, 1, 22050, 1, 22080, 'order_607e9680f0609', '2021-04-20 08:53:29'),
(41, 1, 160, 1, 190, 'order_607e96adc3bc1', '2021-04-20 08:54:14'),
(42, 1, 4800, 1, 4830, 'order_607e98771e7bd', '2021-04-20 09:01:51'),
(43, 1, 4800, 1, 4830, 'order_607e993fae162', '2021-04-20 09:05:12'),
(44, 1, 15263, 1, 15293, 'order_607e999746092', '2021-04-20 09:06:42'),
(45, 1, 330, 1, 360, 'order_607e9ab6bdb70', '2021-04-20 09:11:27'),
(46, 1, 0, 1, 30, 'order_607e9b5655076', '2021-04-20 09:14:08'),
(47, 1, 3150, 3, 3180, 'order_607e9ffde9d78', '2021-04-20 09:33:58'),
(48, 1, 1662, 2, 1692, 'order_607ea0338ed0e', '2021-04-20 09:34:51'),
(49, 1, 45, 2, 75, 'order_607ea16185369', '2021-04-20 09:40:05'),
(50, 1, 30, 2, 0, 'order_607ea1b40f9ab', '2021-04-20 09:41:19'),
(51, 1, 30, 2, 30, 'order_607ea21f19f6e', '2021-04-20 09:43:08'),
(52, 1, 30, 2, 30, 'order_607ea3420852d', '2021-04-20 09:48:18'),
(53, 1, 30, 3, 60, 'order_607ea3b2d534b', '2021-04-20 09:49:46'),
(54, 1, 30, 2, 130, 'order_607ea3d590110', '2021-04-20 09:50:22'),
(55, 1, 30, 2, 130, 'order_607eabbad76b3', '2021-04-20 10:24:21'),
(56, 1, 30, 2, 130, 'order_607eac088b282', '2021-04-20 10:25:26'),
(57, 1, 245700, 1, 245740, 'order_607eae10480e1', '2021-04-20 10:34:10'),
(58, 1, 15, 2, 115, 'order_607eb0b2ed959', '2021-04-20 10:47:48'),
(59, 1, 30, 2, 130, 'order_607eb24a97738', '2021-04-20 10:52:06'),
(60, 1, 40, 2, 140, 'order_607eb2da1e79c', '2021-04-20 10:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `diamond_size` varchar(255) NOT NULL,
  `diamond_value` varchar(255) NOT NULL,
  `quentity` int(50) NOT NULL,
  `color` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `user_id`, `product_id`, `pname`, `price`, `diamond_size`, `diamond_value`, `quentity`, `color`, `weight`, `date`) VALUES
(44, 'order_607e87db52b9c', 1, 0, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 1, '', '1', '2021-04-20 07:51:13'),
(45, 'order_607e87db52b9c', 1, 0, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', '31', '', '', 1, '', '11', '2021-04-20 07:51:13'),
(46, 'order_607e87db52b9c', 1, 0, 'demo roxon', '1000', '', '', 1, '', '100', '2021-04-20 07:51:13'),
(47, 'order_607e8b2de67ca', 1, 0, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 1, '', '1', '2021-04-20 08:05:32'),
(48, 'order_607e8b2de67ca', 1, 0, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', '35', '', '', 1, '', '1', '2021-04-20 08:05:32'),
(49, 'order_607e8b2de67ca', 1, 89, 'variation product', '1000', '10mm * 12mm', '1200', 2, 'blue', '1', '2021-04-20 08:05:32'),
(50, 'order_607e913271695', 1, 0, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 2, '', '1', '2021-04-20 08:31:02'),
(51, 'order_607e94515395d', 1, 0, '11BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '315', '', '', 3, '', '1', '2021-04-20 08:44:12'),
(52, 'order_607e94515395d', 1, 0, '83BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3155', '', '', 8, '', '100', '2021-04-20 08:44:12'),
(53, 'order_607e9506149e8', 1, 0, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 7, '', '1', '2021-04-20 08:47:10'),
(54, 'order_607e9506149e8', 1, 0, '11BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '315', '', '', 3, '', '1', '2021-04-20 08:47:10'),
(55, 'order_607e9680f0609', 1, 0, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 7, '', '1', '2021-04-20 08:53:29'),
(56, 'order_607e96adc3bc1', 1, 0, '66BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '20', '', '', 8, '', '1', '2021-04-20 08:54:14'),
(57, 'order_607e993fae162', 1, 76, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '14mm * 16mm', '1600', 3, '', '1', '2021-04-20 09:05:12'),
(58, 'order_607e999746092', 1, 76, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '14mm * 16mm', '1600', 9, '', '1', '2021-04-20 09:06:41'),
(59, 'order_607e999746092', 1, 81, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', '35', '', '', 22, '', '1', '2021-04-20 09:06:41'),
(60, 'order_607e999746092', 1, 80, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', '31', '', '', 3, '', '11', '2021-04-20 09:06:41'),
(61, 'order_607e9ab6bdb70', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 22, 'Salt', '1', '2021-04-20 09:11:28'),
(62, 'order_607e9b5655076', 1, 75, '33BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '0', '', '', 10, '', '0.77', '2021-04-20 09:14:09'),
(63, 'order_607e9ffde9d78', 1, 76, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 1, '', '1', '2021-04-20 09:33:58'),
(64, 'order_607ea0338ed0e', 1, 76, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '14mm * 16mm', '1600', 1, '', '1', '2021-04-20 09:34:52'),
(65, 'order_607ea0338ed0e', 1, 80, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', '31', '', '', 2, '', '11', '2021-04-20 09:34:52'),
(66, 'order_607ea16185369', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 3, '', '1', '2021-04-20 09:40:05'),
(67, 'order_607ea1b40f9ab', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 09:41:19'),
(68, 'order_607ea21f19f6e', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 09:43:09'),
(69, 'order_607ea3420852d', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 09:48:18'),
(70, 'order_607ea3b2d534b', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Pepper', '1', '2021-04-20 09:49:46'),
(71, 'order_607ea3d590110', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Pepper', '1', '2021-04-20 09:50:22'),
(72, 'order_607eabbad76b3', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 10:24:22'),
(73, 'order_607eac088b282', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 10:25:26'),
(74, 'order_607eae10480e1', 1, 76, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '3150', '', '', 78, '', '1', '2021-04-20 10:34:10'),
(75, 'order_607eb0b2ed959', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 1, 'Salt', '1', '2021-04-20 10:47:49'),
(76, 'order_607eb24a97738', 1, 77, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '15', '', '', 2, 'Salt', '1', '2021-04-20 10:52:07'),
(77, 'order_607eb2da1e79c', 1, 78, '66BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', '20', '', '', 2, '', '1', '2021-04-20 10:54:27'),
(78, 'order_607eb2da1e79c', 1, 89, 'variation product', '1000', '12mm * 14mm', '1400', 3, 'blue', '1', '2021-04-20 10:59:53');

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
(27, 1, 1, '11BUY ROUND BRILLIANT CUT LOOSE DIAMOND 1.09 CARAT NATURAL S', 10, 'vcdsvsdv.jpg,fvsvsgv.jpg', '1.0', 92, 0),
(74, 8, 10, '22BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 315, '1618027821390823I-Icopy.jpg,1618027821390823.jpg,1618027821466176I-Icopy.jpg', '1', 92, 0),
(75, 8, 10, '33BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 0, '1618028598buy-diamond-shape-loose-diamond-1.37-carat-natural-salt-and-pepper-diamond-2-768x744.jpg', '0.77', 82, 0),
(76, 8, 10, '44BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 3150, '16180289461-wtc.america-architecture-374710.jpg', '1', 0, 0),
(77, 8, 10, '55BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 15, '0.80642600I1618029134cutest_kitten_uhdI-Icopy.jpg,0.92924600I1618029134designIcolorsIchairsItablesIuhdI-Icopy.jpg,0.97201400I1618029134house_architectureIultraIhdIwallpapersI-IcopyI-Icopy.jpg,0.99471400I1618029134light_bulbs_uhd.jpg,0.01863300I1618029135lovelyIkitten_ultraIhd.jpg,0.04517600I1618029135morning_on_a_swamp-wallpaper-3840x2160.jpg,0.07371600I1618029135natureIleavesIforestIpathIuhd.jpg,0.10804100I1618029135oceanIshoreIfilledIwithIstones_hd.jpg', '1', 50, 0),
(78, 8, 10, '66BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 20, '0.68063400I1618029242houseonsunsetlaneIultraIhdIwallpapersI-IcopyI(2).jpg,0.70167200I1618029242lake-at-sunset097I-IcopyI-Icopy.jpeg,0.72381300I1618029242lake-at-sunset097I-IcopyI(2).jpeg,0.75010900I1618029242lake-at-sunset097.jpeg,0.77198800I1618029242lemansmedievalstreetsfrance-wallpaper-3840x2160I-IcopyI(2).jpg,0.93846300I1618029242lightbulbfromstoryvillecoffeeuhdI-Icopy.jpg', '1', 90, 0),
(79, 8, 10, '77BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 58, '0.95414000I1618029374appledesktop-wallpaper-1920x1080.jpg,0.98905000I1618029374bridalIveilIfallsIuhd.jpg,0.01796700I1618029375brooklyn-bridge-by-night-wallpaper-for-3840x2160-4k-136-730.jpg,0.04602800I1618029375browneyemacropictureuhd.jpg,0.07203400I1618029375capehauytasmannationalparkuhd.jpg,0.09572600I1618029375constanceIhalaveliImaldivesIuhd.jpg,0.11278000I1618029375cruise2-wallpaper-3840x2160.jpg,0.13706600I1618029375cutestkittenuhdI-Icopy.jpg', '11', 92, 0),
(80, 8, 10, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', 31, '1193437721.jpg,1546977172.jpg,892288658.jpg,1597706400.jpg,590733348.jpg,175807261.jpg,1828491373.jpg,316152599.jpg,1758554306.jpg,992831467.jpg', '11', 87, 0),
(81, 8, 10, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', 35, '864642317191615900.jpg,257807800368718257.jpg,158034011380493476.jpg', '1', 70, 0),
(82, 8, 10, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', 5, '1615789917857195790.jpg,9645667961856011220.jpg,7723523591406757762.jpg,15494993532013153428.jpg,18477057921032018779.jpg,460784003263214596.jpg,12809472411364929154.jpg,12531108821515540885.jpg,12683930271616927586.jpg,388730473330081680.jpg,1608333237856353622.jpg,21418333411721190650.jpg', '1', 92, 0),
(83, 8, 10, '83BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 3155, '4888268011060256226.jpg', '100', 92, 0),
(84, 8, 10, 'BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND PEP', 315, '731840189254489082.jpg,560654581476911264.jpg,596059091457418438.jpg,517953030316351574.jpg,793047492556345134.jpg,871027396551098248.jpg,143763128083303293.jpg,334624377915200253.jpg,734465034521827544.jpg', '1', 92, 0),
(86, 8, 10, 'demo roxon', 1000, '688551988618217865.jpg,329955669607969161.jpg,376642853363263759.jpg', '100', 92, 0),
(87, 8, 10, 'roxon demo', 31500000, '665363530939602630.jpg', '100', 92, 0),
(88, 8, 10, '11BUY KITE SHAPE LOOSE DIAMOND 0.77 CARAT NATURAL SALT AND P', 315, '718306304670149059.jpg', '1', 92, 0),
(89, 8, 10, 'variation product', 1000, '123722776021714760.png', '1', 89, 0),
(90, 8, 10, 'B11UY KITE SHAPE LOOSE DIAMOND 1.35 CARAT NATURAL SALT AND P', 315, '595431387067766630.jpg', '0.77', 92, 0);

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
(1, 'mira', 'pansuriya', 'roxon', '133,  krishna row house', 'india', 'gujarat', 'surat', 395010, 'mirapansuriya10198@gmail.com', '12345678', 9574856352),
(2, 'megha', 'patel', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'megha123@gmail.com', '12345678', 8596857485),
(3, 'megha', 'patel', 'Roxon', '133, krishna row house', 'India', 'Gujarat', 'Surat', 395010, 'meghapatel10@gmail.com', '12345678', 8563214578),
(4, 'kajal', 'patel', 'roxon', '122, yogi darshn', 'india', 'gujarat', 'surat', 395010, 'kajal123@gmail.com', '12345678', 8596859685),
(5, 'Divyesh', 'Nabhoya`', 'Roxon', 'Hii', 'India', 'Gujarat', 'Surat', 395006, 'divyeshnabhoya2@gmail.com', '12345678', 7567776802);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` varchar(250) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `product_id`, `email`, `message`, `rating`) VALUES
(1, 1, 1, 'mirapansuriya10198@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The \r\n                ', 0),
(2, 1, 22, 'mohitankoliya@gmail.com', 'good product.', 0),
(3, 5, 81, 'roxontechnologies@gmail.com', 'Really, really beautiful and high quality roller. The stones are beautiful. I love the fact that part of the roller is in wood and really comfortable to hold. Shipping was really fast and it came with a wonderful cream sample. If you are looking for ', 2),
(4, 1, 81, 'divyeshnabhoya2@gmail.com', 'JUST BEAUTIFUL - Amazing quality to the one I bought a few years ago from else were. Pleasantly surprised. The roller is a nice big size and works smoothly & the gua sha is a nice small but', 3),
(5, 5, 81, 'dassa', 'das', 2);

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
(35, '74', 12, '2021-04-19 11:13:00', '2021-04-19 12:13:00', '2021-04-19 11:13:17');

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
(2, 'Super Fast Shipping( Estimate 1 - 2 Days )', 100),
(3, 'Standard Shipping ( Estimate 13 - 15 Days )', 30);

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
(8, '_tag_8800x5000.jpg', 'Take a Look');

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
(5, 1, 'Pear Shape'),
(6, 4, 'Blue Rough Diamond'),
(7, 12, '12'),
(8, 1, 'gk'),
(9, 11, 'gk'),
(10, 8, 'hii');

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
(6, 9, 'round', '', '', '2.2', '', '', '', '', 'black,blue', 'round', '', '', '', '', '1.5 mm', '', ''),
(7, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 12, 'round', '', '', '', '', '', '', '', 'black', '', '', '', '', '', '', '', ''),
(10, 13, 'round', '', '', '', '', '', '', '', 'black', '', '', '', '', '', '', '', ''),
(11, 14, '', '', '', '3', '', '', '', '', '', '', '', '', '', '', 'round', '', ''),
(12, 15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 18, '', '', '', '', '', '', '', '', '', 'round', '', '', '', '', 'round', '', ''),
(16, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 20, 'round', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 21, 'round', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 22, '', '', '', '', '', '', '', '', '', '', '', '', '123', '', '', '', ''),
(20, 23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 27, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 28, 'oval', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 29, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 30, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 31, 'qq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 32, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 40, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 42, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 43, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 47, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 48, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 49, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 50, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 53, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 54, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 55, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 56, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 57, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 58, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 59, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 60, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 61, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 62, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 63, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 64, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 67, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 68, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 69, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 70, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 71, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 72, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, 77, '', '', '', '', '', '', '', '', 'Salt,Pepper', '', '', '', '8.10*6.80*3.20 MM, 8', '', '', '', ''),
(69, 78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 79, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 84, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 86, '', '', '', '', '', '', '', '', 'Salt,Pepper', '', '', '', '', '', '', '', ''),
(78, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', ''),
(79, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', ''),
(81, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', ''),
(82, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 88, 'Kite Shape', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 88, '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', '', '', '', ''),
(85, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '100', ''),
(87, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 88, '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', '', '', '', ''),
(90, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', ''),
(91, 88, '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', '', '', '', ''),
(92, 88, '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', ''),
(93, 88, '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', ''),
(94, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', ''),
(95, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', ''),
(96, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', 'Emerald', ''),
(97, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', ''),
(98, 88, '', '', '', '', '', '', 'Emerald', '', '', 'Kite Shape', '', '', '', '', '', '', ''),
(99, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 88, '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', '', '', '', ''),
(101, 88, '', '', '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', ''),
(102, 88, '', '', '', '', '', '', '', '', '', 'Emerald', '', '', '', '', '', '', ''),
(103, 88, '', '', '', '', '', '', '', '', '', '', 'Kite Shape', '', '', '', '', '', ''),
(104, 88, '', '', '', '', '', '', '', '', '', '', '', '', 'fds', '', '', 'Kite Shape', ''),
(105, 88, '', '', '', '', '', '', '', '', '', '', '', '', '423', '', '', '', '234'),
(106, 89, '', '', '', '', '', '', '', 'world best', 'blue, yello, red', 'heart', '', '', '', '', 'rounded', '', 'Kite Shape'),
(107, 90, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(17, 82, 1);

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
-- Indexes for table `diamond_size`
--
ALTER TABLE `diamond_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `billing_detail`
--
ALTER TABLE `billing_detail`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diamond_size`
--
ALTER TABLE `diamond_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_product`
--
ALTER TABLE `sale_product`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_detail`
--
ALTER TABLE `shipping_detail`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `subc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `variation`
--
ALTER TABLE `variation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `whishlist`
--
ALTER TABLE `whishlist`
  MODIFY `whishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
