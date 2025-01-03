-- Creating table appointment1
CREATE TABLE IF NOT EXISTS `appointment1` (
  `id` int NOT NULL AUTO_INCREMENT,            -- Unique ID for each appointment
  `fullname` varchar(100) NOT NULL,            -- Full name of the person
  `email` varchar(100) NOT NULL,               -- Email address
  `time` time NOT NULL,                        /* Removed fractional precision for time */
  `address` varchar(100) NOT NULL,             -- Address of the person
  `date` date NOT NULL,                        -- Date of appointment
  `phnumber` varchar(20) NOT NULL,             -- Changed to varchar to store phone numbers as text
  PRIMARY KEY (`id`)                           -- Setting 'id' as the primary key
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into appointment1
INSERT INTO `appointment1` (`id`, `fullname`, `email`, `time`, `address`, `date`, `phnumber`) 
VALUES (1, 'Arfan', 'arfan12@gmail.com', '15:31:00', '103,om anant vaibhav', '2023-03-31', '2147483647');

-- Creating table appointment2
CREATE TABLE IF NOT EXISTS `appointment2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` time NOT NULL,            /* Removed fractional precision for time */
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into appointment2
INSERT INTO `appointment2` (`id`, `fullname`, `email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) 
VALUES (2, 'AA', 'arfan12@gmail.com', '15:41:00', '103,om anant vaibhav', '2023-04-07', '2147483647', 'New', '3571-product-2.jpg');

-- Creating table cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creating table corporateappoint
CREATE TABLE IF NOT EXISTS `corporateappoint` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companyname` varchar(100) NOT NULL,
  `contactpersonname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `industrytype` varchar(100) NOT NULL,
  `nmgarments` int NOT NULL,
  `phnumber` varchar(20) NOT NULL,
  `notes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into corporateappoint
INSERT INTO `corporateappoint` (`id`, `companyname`, `contactpersonname`, `email`, `address`, `industrytype`, `nmgarments`, `phnumber`, `notes`)
VALUES (1, 'Virtual Darzee', 'Arfan', 'arfan12@gmail.com', '103,om anant vaibhav', 'Tailor', 100, '2147483647', 'qwertyuoijuhg');

-- Creating table embroidery
CREATE TABLE IF NOT EXISTS `embroidery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` time NOT NULL,            /* Removed fractional precision for time */
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into embroidery
INSERT INTO `embroidery` (`id`, `fullname`, `email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) 
VALUES (1, 'Arfan', 'arfan12@gmail.com', '11:54:00', '103,om anant vaibhav', '2023-03-31', '2147483647', 'New', '6043-product-4.jpg');

-- Creating table measurement
CREATE TABLE IF NOT EXISTS `measurement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `custid` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` varchar(20) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into measurement
INSERT INTO `measurement` (`id`, `fullname`, `custid`, `type`, `address`, `date`, `phnumber`, `neck`, `chest`, `stomach`, `waist`, `hips`, `length`, `sleevelength`, `wrist`, `crotch`, `thighwidth`, `pantlength`, `inseam`, `kneelength`, `title`, `file`) 
VALUES (1, 'Arfan', 23, '2', '103,om anant vaibhav', '2023-04-02', '1234567890', 11, 23, 12, 33, 21, 11, 11, 21, 21, 12, 33, 21, 12, 'New', '2247-product-2.jpg');

-- Creating table message
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creating table orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creating table products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Creating table repairalteration
CREATE TABLE IF NOT EXISTS `repairalteration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` time NOT NULL,            /* Removed fractional precision for time */
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phnumber` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserting data into repairalteration
INSERT INTO `repairalteration` (`id`, `fullname`, `email`, `time`, `address`, `date`, `phnumber`, `title`, `file`) 
VALUES (1, 'Arfan', 'arfan12@gmail.com', '11:54:00', '103,om anant vaibhav', '2023-03-31', '2147483647', 'New', '6038-product-4.jpg');
