-- phpMyAdmin SQL Dump
-- version 5.2.1
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 08:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `shoppingcart`

-- Table structure for table `contact`
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `contact`
INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Student152', '', '', '');

-- Table structure for table `customer`
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `shopping_cart`
CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `shopping_cart`
INSERT INTO `shopping_cart` (`id`, `name`, `img`, `price`, `discount`, `description`) VALUES
(1, 'gift bag', 'bag2.jpg', 100, 90, 'Ramadan / Eid Gift Bag...'),
(2, 'Ramadan / Eid Gift Bag', 'bag1.jpg', 200, 180, 'Ramadan / Eid Gift Bag...'),
(3, 'Barbie-Happy Birthday Doll', 'doll4.webp', 300, 240, 'Barbie doll...'),
(4, 'Wallet', 'wallet1.jfif', 200, 180, 'Wallets for men...'),
(5, 'Moscow Wallet', 'wallet2.jfif', 300, 290, 'The Moscow wallet...'),
(6, 'Barbie-Fashion Doll', 'doll3.webp', 300, 240, 'Barbie Fashionistas...'),
(7, 'Christmas Greeting Card', 'giftcard3.jpg', 200, 10, 'We have a huge collection...');

-- Table structure for table `shopping_cart_index`
CREATE TABLE `shopping_cart_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `shopping_cart_index`
INSERT INTO `shopping_cart_index` (`id`, `name`, `img`, `price`, `discount`, `description`) VALUES
(1, 'gift bag', 'bag2.jpg', 100, 5, 'Ramadan / Eid Gift Bag...'),
(2, 'bag ', 'bag1.jpg', 200, 10, 'Ramadan / Eid Gift Bag...'),
(3, 'Barbie-Happy Birthday Doll', 'doll4.webp', 100, 10, 'Barbie doll...'),
(4, 'Moscow Wallet', 'wallet2.jfif', 300, 20, 'The Moscow wallet...');

-- Table structure for table `userlogin`
CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `userlogin`
INSERT INTO `userlogin` (`id`, `name`, `email`, `password`, `confirm_pass`) VALUES
(1, 'hassan', 'siddiqui09@gmail.com', '1234', '1234'),
(2, 'mavi', 'siddiqui02@gmail.com', '0299', '0299');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
