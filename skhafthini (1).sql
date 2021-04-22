-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 04:06 PM
-- Server version: 10.1.38-MariaDB
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
-- Database: `skhafthini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Address` varchar(11) NOT NULL,
  `District` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `name`, `Gender`, `email`, `Address`, `District`, `phone_number`, `password`) VALUES
(1, 'Juliet Matela', 'female', 'juliet.matela@admin.org', 'Qoaling', 'maseru', 53770885, 'tsepang'),
(2, 'Dorcas', 'female', 'dorcas@makeoane.gmail', 'Ha-Abia', 'maseru', 6722, 'mamohale'),
(3, 'reitumetse', 'female', 'tumi@gmail.com', '', 'leribe', 5152, 'tsepy');

-- --------------------------------------------------------

--
-- Table structure for table `client_reg`
--

CREATE TABLE `client_reg` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Gender` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_reg`
--

INSERT INTO `client_reg` (`id`, `name`, `Gender`, `email`, `location`, `District`, `phone_number`, `password`) VALUES
(7, 'tsepy', 'female', 'tsepy@gmail', 'mft', 'mafeteng', 5152, 'tsepy'),
(11, 'KEKETSO', 'female', 'KEKE.LEKHORO@FOODS', 'THETSANE', 'maseru', 57544333, 'KEKETSO');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery`) VALUES
('delivery'),
('vehicle'),
(''),
('vehicle');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `suggest` varchar(100) NOT NULL,
  `concern` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`suggest`, `concern`) VALUES
('', ''),
('', ''),
('greatness ', 'time attendance'),
('opening time', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `meal_code` varchar(30) NOT NULL,
  `meal_name` varchar(20) NOT NULL,
  `meal_image` varchar(100) NOT NULL,
  `meal_price` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`meal_code`, `meal_name`, `meal_image`, `meal_price`) VALUES
('khe123', 'khemere', 'drink1.png', 'M10'),
('leh123', 'lehapu', 'lehapu.png', 'M25'),
('ber123', 'berries', '1592401382_berries.png', 'M5'),
('dri123', 'drink', '1592401672_drink1.png', 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `phone_number` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `resturant_name` varchar(30) NOT NULL,
  `meal_name` varchar(20) NOT NULL,
  `delivery_option` varchar(50) NOT NULL,
  `Date_of_delivery` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`phone_number`, `location`, `resturant_name`, `meal_name`, `delivery_option`, `Date_of_delivery`) VALUES
(53770885, 'moyeni', 'sesiu foods', 'MONOKOTSOAI', 'bicycle', '2020-08-14 22:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `resturant_reg`
--

CREATE TABLE `resturant_reg` (
  `name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `District` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resturant_reg`
--

INSERT INTO `resturant_reg` (`name`, `Email`, `location`, `District`, `phonenumber`, `password`) VALUES
('sesiu foods', 'sesiu@foods.org', 'haseoli', 'maseru', '2232 5467', 'sesiu.fo'),
('seqaqabola foods', 'seqaqabola@foods', 'ramokhele', 'mafeteng', '53770885', 'seqaqabo'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', 'QEDWRFGH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reg`
--
ALTER TABLE `client_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_reg`
--
ALTER TABLE `client_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
