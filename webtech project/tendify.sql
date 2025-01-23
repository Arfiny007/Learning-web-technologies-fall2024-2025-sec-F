-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2025 at 07:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tendify`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`ID`, `Name`, `Amount`) VALUES
(1, 'New Year', 250),
(1, 'New Year', 250);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` text NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Purchase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Purchase`) VALUES
('C-001', 'Shihab Shovon', 'shuvon@gmail.com', 100),
('C-002', 'Mahibullah Saikat', 'saikatalif@gmail.com', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `emplolyee`
--

CREATE TABLE `emplolyee` (
  `ID` varchar(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Mail` varchar(35) NOT NULL,
  `DOB` date NOT NULL,
  `Salary` int(15) NOT NULL,
  `Role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emplolyee`
--

INSERT INTO `emplolyee` (`ID`, `Password`, `Name`, `Mail`, `DOB`, `Salary`, `Role`) VALUES
('A-001', '123', 'Sunzidul Shaon', 'sunzidulshaon@gmail.com', '2002-02-01', 500002, 'Admin'),
('S-001', '123', 'Naim Islam', 'naimislam123@gmail.com', '2000-02-02', 30000, 'SR'),
('S-002', '123', 'Shoab', 'shoab123@gmail.com', '1995-02-08', 20000, 'SR'),
('S-003', '123', 'Shihab', 'shihab123@gmail.com', '1999-02-08', 20000, 'SR'),
('S-004', '123', 'Mohi', '', '2002-10-10', 20000, 'SR'),
('S-005', '123', 'Shihab', 'shihab123@gmail.com', '2000-01-01', 30000, 'SR'),
('S-007', '123', 'Maiasha', 'maiashabois@gmail.com', '2002-01-04', 21000, 'SR');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `image_url`) VALUES
(1, 'Laptop', 'High-performance laptop', 70000.00, 'Electronics', 'https://th.bing.com/th/id/OIP.sOdWXA8w_vNRtjpSjt6IdQHaFn?w=229&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7'),
(2, 'Smartphone', 'Latest model smartphone', 120000.00, 'Electronics', 'https://th.bing.com/th/id/R.a002310347ebef3cebc48ff2d983ff78?rik=Uo17pK8UH%2bfrJg&pid=ImgRaw&r=0'),
(3, 'Headphones', 'Noise-canceling headphones', 3500.00, 'Accessories', 'https://th.bing.com/th/id/OIP.qNGswysCT9dtyDF2RDz5ngHaHa?rs=1&pid=ImgDetMain'),
(4, 'Backpack', 'Stylish and durable backpack', 4999.00, 'Bags', 'https://th.bing.com/th/id/R.134f49409e03805acec3d410e536e563?rik=qOsKTL2zwBAUQw&pid=ImgRaw&r=0'),
(5, 'Shoes', 'Comfortable running shoes', 8999.00, 'Footwear', 'https://th.bing.com/th/id/OIP.8tQmmY_ccVpcxBxu0Z0mzwHaE8?rs=1&pid=ImgDetMain'),
(6, 'Smartphone Holder', 'Flexible arm smartphone holder for desks.', 599.00, 'Accessories', 'https://th.bing.com/th/id/OIP.ibM-bUOzS1YRjg-Xd4EVLwHaHa?rs=1&pid=ImgDetMain'),
(7, 'Portable Charger', '10,000mAh power bank with fast charging support.', 1999.00, 'Accessories', 'https://olikeindonesia.com/wp-content/uploads/2023/01/1.jpg'),
(8, 'Bluetooth Speaker', 'Portable speaker with deep bass and long battery life.', 3100.00, 'Electronics', 'https://th.bing.com/th/id/OIP.g-IXaRH2deMRDkasq9BDFQHaHa?rs=1&pid=ImgDetMain'),
(9, 'Noise-Cancelling Earbuds', 'True wireless earbuds with active noise cancellation.', 2699.00, 'Accessories', 'https://th.bing.com/th/id/R.1c75aa34edb1e66d1f91214609a24a5b?rik=rei2OyABVjFk0g&pid=ImgRaw&r=0'),
(10, 'Webcam', '1080p HD webcam with built-in microphone.', 3700.00, 'Electronics', 'https://th.bing.com/th/id/R.a5ce4b03b4017901dd560991ef189b77?rik=3wfAwjfx%2bjeBgw&pid=ImgRaw&r=0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created_at`, `profile_image`) VALUES
(12, 'Yeasin Arfin', 'Arfiny', 'Arfiny007@gmail.com', '12345678', '2025-01-06 10:28:28', NULL),
(13, 'Arfin', 'aruu', 'abc@gamil.com', '12345678', '2025-01-14 19:29:23', NULL),
(14, 'lima ', 'riya', 'riya@gmai.com', '12345678', '2025-01-15 07:21:33', NULL),
(17, 'Arfin', 'arfinn', 'khanalimran2@gmail.com', '12345678', '2025-01-17 20:21:43', ''),
(21, 'Arfin', 'aruuuu', 'qyqy@gamil.com', 'arfin1622', '2025-01-17 20:37:09', '../assets/uploads/1737146229_472041731_1148004630297160_4485340422865418713_n.jpg'),
(22, 'ok', 'okk', 'ok@gmail.com', '12345678', '2025-01-17 20:53:38', '../assets/uploads/1737147218_472041731_1148004630297160_4485340422865418713_n.jpg'),
(23, 'okok', 'okok', 'okok@gmail.com', '12345678', '2025-01-17 20:56:28', '../assets/uploads/1737147388_472041731_1148004630297160_4485340422865418713_n.jpg'),
(24, 'ashik', 'ashik', 'ashik@gmail.com', '12345678', '2025-01-18 10:24:06', '../assets/uploads/1737195846_Rifat Partho_The Event (317).jpg'),
(25, 'yeasin', 'arfin123', 'ok12@gmail.com', '12345678', '2025-01-19 23:05:40', '../assets/uploads/1737327940_Rifat Partho_The Event (326).jpg'),
(26, 'rony', 'ronys', 'rony@gmail.com', '12345678', '2025-01-19 23:16:42', '../assets/uploads/1737328602_Rifat Partho_The Event (321).jpg'),
(27, 'dasd', 'das', 'das@gmail.com', '12345678', '2025-01-20 00:05:07', ''),
(28, 'dasd', 'dafas', 'dsa@gmail.com', '12345678', '2025-01-20 00:06:58', ''),
(29, 'arfij', 'Arfin007', 'kbc@gmail.com', '12345678', '2025-01-20 00:11:11', ''),
(31, 'areq', 'fweaf', 'dd@gmail.com', '12345678', '2025-01-20 00:19:41', ''),
(32, 'asdfa', 'sadf', 'ak@gmail.com', '12345678', '2025-01-20 00:21:46', ''),
(33, 'dafa', 'dafa', 'dad@gmail.com', '12345678', '2025-01-20 00:28:02', ''),
(34, 'ereqdf', 'fsdf', 'fsd@gmail.com', '12345678', '2025-01-20 00:33:59', ''),
(35, 'yeasin', 'arfijd', 'we@gmail.com', '12345678', '2025-01-20 00:48:35', ''),
(36, 'rfcdrfc', 'crfcdd', 'ww@gmail.com', '12345678', '2025-01-20 01:07:42', ''),
(37, 'yeasin ', 'arfin22', 'ddd@gmail.com', '12345678', '2025-01-20 01:37:33', ''),
(40, 'arfin', 'arfin0088', 'arfin@gmail.com', '12345678', '2025-01-20 08:30:23', ''),
(41, 'rafi', 'rafi22', 'rafi@gmail.com', '12345678', '2025-01-20 10:15:34', ''),
(43, 'ashik', 'ashik009', 'ashik21@gmail.com', '12345678', '2025-01-23 18:07:17', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emplolyee`
--
ALTER TABLE `emplolyee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
