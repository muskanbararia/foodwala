-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 03:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'demo@demo.com', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quan` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `rest_id`, `name`, `price`, `quan`, `user_id`) VALUES
(4, 1, 10, ' Veg Sweet Corn Soup', 50, 4, 'demo@demo.com'),
(5, 2, 10, ' Veg Manchow Soup', 50, 3, 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(255) NOT NULL,
  `val` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dinein`
--

CREATE TABLE `dinein` (
  `id` int(11) NOT NULL,
  `restId` int(11) NOT NULL,
  `bTime` datetime NOT NULL,
  `bDate` datetime NOT NULL,
  `pNo` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `sub` text NOT NULL,
  `price` int(11) NOT NULL,
  `logo` text NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `rest_id`, `name`, `category`, `sub`, `price`, `logo`, `desk`) VALUES
(1, 10, ' Veg Sweet Corn Soup', 'Soups', 'Veg', 50, 'm9cbbf2cone.jpeg', ''),
(2, 10, ' Veg Manchow Soup', 'Soups', 'Veg', 50, 'm5fa5500two.jpeg', ''),
(3, 10, ' Veg Hot And Sour Soup', 'Soups', 'Veg', 50, 'mce4ade7one.jpeg', ''),
(4, 10, ' Chicken Sweet Corn Soup', 'Soups', 'Non-Veg', 60, 'm498eff1one.jpeg', ''),
(5, 10, ' Chicken Manchow Soup', 'Soups', 'Non-Veg', 60, 'mf8a9786one.jpeg', ''),
(6, 10, ' Chicken Hot And Sour Soup', 'Soups', 'Non-Veg', 60, 'm0aab852one.jpeg', ''),
(7, 10, ' Full Veg Biryani', 'BIRYANI', 'Veg Biryani', 240, 'm7acdd95one.jpeg', ''),
(8, 10, ' Half Veg Biryani', 'BIRYANI', 'Veg Biryani', 120, 'm425956done.jpeg', ''),
(9, 10, ' Full Biryani Rice', 'BIRYANI', 'Biryani Rice', 200, 'm53f1fc1one.jpeg', ''),
(10, 10, 'Half Biryani Rice', 'BIRYANI', 'Biryani Rice', 100, 'md27b40cone.jpeg', ''),
(11, 10, ' Full Chicken Biryani', 'BIRYANI', 'Chicken Biryani', 300, 'md2c7e6done.jpeg', ''),
(12, 10, 'Half Biryani Rice', 'BIRYANI', 'Chicken Biryani', 150, 'm83d397bone.jpeg', ''),
(13, 10, ' Full Chicken Special Leg Biryani ', 'BIRYANI', 'Chicken Special Leg Biryani ', 320, 'maa6a137index.jpeg', ''),
(14, 10, 'Half Chicken Special Leg Biryani ', 'BIRYANI', 'Chicken Special Leg Biryani', 170, 'mf445867images.jpeg', ''),
(15, 10, ' Full Kebab Biryani', 'BIRYANI', 'Kebab Biryani', 320, 'm1812ec2images.jpeg', ''),
(16, 10, ' Half Kebab Biryani', 'BIRYANI', 'Kebab Biryani', 170, 'm45b3218images.jpeg', ''),
(17, 10, ' Full Mutton Biryani', 'BIRYANI', 'Mutton Biryani', 340, 'ma8d6cf2images.jpeg', ''),
(18, 10, 'Half Mutton Biryani', 'BIRYANI', 'Mutton Biryani', 170, 'm65b2867images.jpeg', ''),
(19, 10, ' Full Prawn Biryani', 'BIRYANI', 'Prawn Biryani', 340, 'mf4c41e0index.jpeg', ''),
(20, 10, 'Half Prawn Biryani', 'BIRYANI', 'Prawn Biryani', 180, 'm17e878eimages.jpeg', ''),
(21, 10, 'BIG KULFI', 'BEVERAGE', '', 35, 'm6b5295dindex.jpeg', ''),
(22, 10, 'SMALL KULFI', 'BEVERAGE', '', 25, 'mb74cdc2images.jpeg', ''),
(23, 10, ' Sugar Free Kulfi', 'BEVERAGE', '', 40, 'm7e2d49dimages.jpeg', ''),
(24, 10, 'Cold Drink', 'BEVERAGE', '', 35, 'm63a76ffindex.jpeg', ''),
(25, 10, 'Lacha Paratha', 'PARATHA', '', 20, 'md3b88d4index.jpeg', ''),
(26, 10, ' Egg Lachha Paratha', 'PARATHA', '', 30, 'md86ea5bindex.jpeg', ''),
(27, 10, ' Double Egg Paratha', 'PARATHA', '', 40, 'm0d314a3images.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `logo` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `category` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `location`, `logo`, `phone`, `category`, `detail`) VALUES
(10, 'Green Chillyz MASTER CANTEEN ', 'Opp-Ashoka Market, Master Canteen Square, BBSR, Orissa, Pin- 751009.<strong></strong><br><strong>Mob -</strong> 7790053101<br><br>', 'f5f048a6one.jpg', '0674-2536501', 'CHINESE', 'n Bhubaneswar our fisrt Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>'),
(11, 'Green Chillyz SAHEED NAGAR ', 'Green Chillyz Parlour <br>Rupali Chhak, BBSR, Khurda, Pin- 751001<br>', 'f1e0b90fsec.jpg', '0674-2536501', 'CHINESE', 'In Bhubaneswar our first Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>'),
(12, 'Green Chillyz KALINGA SQR ', 'Kiosk-3/18 Kalinga Hospital SQR,<br>&nbsp;C.S Pur, BBSR, Khurda, Pin- 751023<br>', 'fc011b88third.jpg', '0674-2300930', 'CHINESE', 'In Bhubaneswar our fisrt Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>'),
(13, 'Green Chillyz GOPOBANDHU', 'Green Chillyz, Outa Guest House Road, <br>Gopabandhu Chalk, BBSR, Pin- 751012 <br><strong>Mob - </strong>7790053104<br><br>', 'f6965406four.jpg', ' 0674-2565156', 'CHINESE', 'In Bhubaneswar our fisrt Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>'),
(14, 'Green Chillyz LEWIS ROAD', 'Shop No- 01, Block- B, GR-Floor Madhab Nilayam Appt,<br>&nbsp;Lewis Road, BBSR, Khurda,\r\n                  <br>\r\n                  Pin- 751002<br><strong>Mob- </strong>7790053105<br><br>', 'fcab11e9five.jpg', '0674-2433272', 'CHINESE', 'In Bhubaneswar our fisrt Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>'),
(15, 'Green Chillyz INFO CITY', 'Near Patia Trafic, Info city road, BBSR,<br>\r\n                  Pin- 751024<br><strong>Mob -</strong> 7790053107<br><br>', 'f90c3509six.jpg', ' 0674 - 6555855', 'CHINESE', 'In Bhubaneswar our fisrt Outlet was established in July, 23 1999. Since \r\nthen it has grown to more outlets and restaurants in \r\n            Bhubaneswar, Bengaluru and statewide and plans continue to \r\nextend, that is not the end of the story... We have a passion for \r\n            the Indian way of life and want to share it with people, no \r\nmatter where theyâ€™re from, just good food for everyone.\r\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'demo', 'demo@demo.com', '7878', '78', 'demo'),
(2, 'sdf', 'muskan@gmail.comv', 'sfdf', 'dgdf', 'sgdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinein`
--
ALTER TABLE `dinein`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cartitem`
--
ALTER TABLE `cartitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dinein`
--
ALTER TABLE `dinein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
