-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2023 at 06:55 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment1`
--

DROP TABLE IF EXISTS `appointment1`;
CREATE TABLE IF NOT EXISTS `appointment1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `time` time(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment1`
--

INSERT INTO `appointment1` (`id`, `fullname`, `Email`, `time`, `address`, `date`, `phnumber`) VALUES
(1, 'Arfan', 'arfan12@gmail.com', '15:31:00.0', '103,om anant vaibhav', '2023-03-31', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `appointment2`
--

DROP TABLE IF EXISTS `appointment2`;
CREATE TABLE IF NOT EXISTS `appointment2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `time` time(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment2`
--

INSERT INTO `appointment2` (`id`, `fullname`, `Email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) VALUES
(2, 'AA', 'arfan12@gmail.com', '15:41:00.0', '103,om anant vaibhav', '2023-04-07', 2147483647, 'New', '3571-product-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporateappoint`
--

DROP TABLE IF EXISTS `corporateappoint`;
CREATE TABLE IF NOT EXISTS `corporateappoint` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companyname` varchar(100) NOT NULL,
  `contactpersonname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `industrytype` varchar(100) NOT NULL,
  `nmgarments` int NOT NULL,
  `phnumber` int NOT NULL,
  `notes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `corporateappoint`
--

INSERT INTO `corporateappoint` (`id`, `companyname`, `contactpersonname`, `Email`, `address`, `industrytype`, `nmgarments`, `phnumber`, `notes`) VALUES
(1, 'Virtual Darzee', 'Arfan', 'arfan12@gmail.com', '103,om anant vaibhav', 'Tailor', 100, 2147483647, 'qwertyuoijuhg');

-- --------------------------------------------------------

--
-- Table structure for table `embroidery`
--

DROP TABLE IF EXISTS `embroidery`;
CREATE TABLE IF NOT EXISTS `embroidery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `time` time(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `embroidery`
--

INSERT INTO `embroidery` (`id`, `fullname`, `Email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) VALUES
(1, 'Arfan', 'arfan12@gmail.com', '11:54:00.0', '103,om anant vaibhav', '2023-03-31', 2147483647, 'New', '6043-product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

DROP TABLE IF EXISTS `measurement`;
CREATE TABLE IF NOT EXISTS `measurement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `custid` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `neck` int NOT NULL,
  `chest` int NOT NULL,
  `stomach` int NOT NULL,
  `waist` int NOT NULL,
  `hips` int NOT NULL,
  `length` int NOT NULL,
  `sleevelength` int NOT NULL,
  `wrist` int NOT NULL,
  `crotch` int NOT NULL,
  `thighwidth` int NOT NULL,
  `pantlength` int NOT NULL,
  `inseam` int NOT NULL,
  `kneelength` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`id`, `fullname`, `custid`, `type`, `address`, `date`, `phnumber`, `neck`, `chest`, `stomach`, `waist`, `hips`, `length`, `sleevelength`, `wrist`, `crotch`, `thighwidth`, `pantlength`, `inseam`, `kneelength`, `title`, `file`) VALUES
(1, 'Arfan', 23, '2', '103,om anant vaibhav', '2023-04-02', 1234567890, 11, 23, 12, 33, 21, 11, 11, 21, 21, 12, 33, 21, 12, 'New', '2247-product-2.jpg'),
(2, 'AA', 12, '3', '103,om anant vaibhav', '2023-04-08', 2147483647, 11, 12, 21, 21, 12, 12, 21, 21, 32, 32, 34, 21, 12, 'New', '8026-product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `measurement2`
--

DROP TABLE IF EXISTS `measurement2`;
CREATE TABLE IF NOT EXISTS `measurement2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `custid` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `neck` int NOT NULL,
  `chest` int NOT NULL,
  `stomach` int NOT NULL,
  `backshoulder` int NOT NULL,
  `underbusttowaist` int NOT NULL,
  `waisttohips` int NOT NULL,
  `waist` int NOT NULL,
  `hips` int NOT NULL,
  `length` int NOT NULL,
  `sleevelength` int NOT NULL,
  `wrist` int NOT NULL,
  `crotch` int NOT NULL,
  `thighwidth` int NOT NULL,
  `pantlength` int NOT NULL,
  `inseam` int NOT NULL,
  `kneelength` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `measurement2`
--

INSERT INTO `measurement2` (`id`, `fullname`, `custid`, `type`, `address`, `date`, `phnumber`, `neck`, `chest`, `stomach`, `backshoulder`, `underbusttowaist`, `waisttohips`, `waist`, `hips`, `length`, `sleevelength`, `wrist`, `crotch`, `thighwidth`, `pantlength`, `inseam`, `kneelength`, `title`, `file`) VALUES
(1, 'AA', 12, 'Designer Boutique For Women', '103,om anant vaibhav', '2023-04-02', 2147483647, 21, 12, 12, 22, 0, 3, 32, 12, 21, 21, 22, 3, 11, 22, 12, 22, 'New', '5631-product-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repairalteration`
--

DROP TABLE IF EXISTS `repairalteration`;
CREATE TABLE IF NOT EXISTS `repairalteration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `time` time(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `repairalteration`
--

INSERT INTO `repairalteration` (`id`, `fullname`, `Email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) VALUES
(1, 'Arfan', 'arfan12@gmail.com', '07:00:00.0', '103,om anant vaibhav', '2023-03-24', 1234567890, 'New', '8119-product-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'arfan', 'arfan12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(2, 'admin', 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'tailor', 'tailor1@gmail.com', '202cb962ac59075b964b07152d234b70', 'tailor');

-- --------------------------------------------------------

--
-- Table structure for table `weddingappoint`
--

DROP TABLE IF EXISTS `weddingappoint`;
CREATE TABLE IF NOT EXISTS `weddingappoint` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `time` time(1) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `weddingappoint`
--

INSERT INTO `weddingappoint` (`id`, `fullname`, `Email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) VALUES
(1, 'Arfan', 'arfan12@gmail.com', '21:51:00.0', '103,om anant vaibhav', '2023-03-26', 1234567890, 'New', '4473-product-2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
