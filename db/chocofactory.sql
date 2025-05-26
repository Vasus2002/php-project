-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2022 at 10:43 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chocofactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`) VALUES
(5, 32);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(200) NOT NULL AUTO_INCREMENT,
  `Your_Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Your_Name`, `Email`, `Message`) VALUES
(15, 'raj dobariya', 'raj@gmail.com', 'I want to order in a bulk.'),
(16, 'yash ramani', 'yash@gmail.com', 'i want to lots of chocolates.'),
(17, 'bansil undhad', 'bansil@gmail.com', 'i want to chocolate.'),
(18, 'hiren patel', 'hiren@gmail.com', 'give me your full address');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(200) NOT NULL AUTO_INCREMENT,
  `Email` varchar(200) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Email`, `PhoneNo`, `Message`) VALUES
(1, 'vasu@gmail.com', '7878787878', 'very nice.'),
(2, 'vishrut@gmail.com', '1234567890', 'good'),
(3, 'prince@gmail.com', '0987654321', 'website is very good.'),
(6, 'meet@gmail.com', '9824551803', 'chocolates are looking so delicious and pretty.'),
(7, 'arpit@gmail.com', '1234567890', 'very nice');

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

DROP TABLE IF EXISTS `products_table`;
CREATE TABLE IF NOT EXISTS `products_table` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `min_order` int(11) NOT NULL,
  `n_likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`p_id`, `name`, `description`, `img_url`, `price`, `min_order`, `n_likes`) VALUES
(25, 'White choco balls', 'These white chocolate balls are the ultimate treat for white chocolate lover everywhere.', 'chocalateballs.jpeg', 50.5, 1, 0),
(24, 'White chocolate bar', 'A white chocolate bar with a mild milk falvour.', 'whitechocalate.jpg', 60, 1, 2),
(23, 'Strawberry chocolate', 'Dip each straberry in the chocolate and cover it 3/4 or fully.', 'slider1.jpg', 40.25, 1, 3),
(22, 'Dark chocolate', 'Dark chocolate is packed full of important minerals, including iron, magnesium, zinc, copper, phosphorus.', 'darkchocalate.jpg', 60, 1, 0),
(21, 'Fruit chocalate', 'Dry fruit &amp; nuts chocalate are the amazing source of energy.this way we made huge veriety of day fruit chocalate.', 'mixfruitchocalate.jpg', 100, 1, 0),
(26, 'Yummy chocolate', 'Best yummy chocolate with inside melted dark chocolate.', 'yummychocalate.png', 65.4, 1, 1),
(28, 'Strawberry chocolate', 'Dip each straberry in the chocolate and cover it 3/4 or fully.', 'strawberry.jpg', 100, 1, 1),
(29, 'mango chocolate mini bar', 'Exotic and spicy mango in 55% dark chocolate', 'IMG-20220912-WA0008.jpg', 180, 1, 0),
(30, 'Strawberry pieces bar', 'Exotic and spicy strawberry in 55% dark chocolate', 'IMG-20220912-WA0000.jpg', 200, 1, 0),
(31, 'special chocolate', 'Check out this wonderful custom box of our special chocolate', 'IMG-20220912-WA0005.jpg', 210, 1, 0),
(32, 'cookie chocolate', 'very yummy mix flavour chocolates', 'IMG-20220912-WA0003.jpg', 70, 1, 0),
(33, 'colorful choco balls', 'These colorful chocolate balls are the ultimate treat for white chocolate lover everywhere.', 'IMG-20220912-WA0001.jpg', 50, 1, 0),
(34, 'chocolate pops', 'Dark chocolate is packed full of important minerals, including iron, magnesium, zinc, copper, phosphorus.', 'IMG-20220912-WA0004.jpg', 90, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `city`, `contact`, `email`, `password`, `confirmpassword`) VALUES
(1, 'vasu', 'ramani', 'rajkot', 1236547899, 'vasu@gmail.com', 'i123', 'i123'),
(3, 'meet', 'ramani', 'DHORAJI', 1236547899, 'meet@gmail.com', 'i12355', 'i12355'),
(8, 'dhruv', 'babriya', 'ahmedabad', 9178937370, 'dhruv@gmail.com', '23456', '23456'),
(9, 'parth', 'viradiya', 'ahmedabad', 9178937370, 'parth@gmail.com', 'uj7899', 'uj7899'),
(10, 'riyan', 'prajapati', 'valsad', 9873546770, 'riyan@gmail.com', 'r8999', 'r8999'),
(12, 'kartik', 'babriya', 'godhara', 9876245689, 'kartik@gmail,com', 'ui88899', 'ui88899'),
(20, 'vasu', 'sojitra', 'dhoraji', 9313522089, 'vasu@gmail.com', 'vasu', 'vasu'),
(21, 'vishrut', 'thesiya', 'dhoraji', 8160408398, 'vishrut@gmail.com', 'vishrut', 'vishrut');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
