-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 11:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_ristro`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '0123456789'),
(6, 'admin2', 'admin2@gmail.com', 'admin2', '9988776655');

-- --------------------------------------------------------

--
-- Table structure for table `myregister`
--

CREATE TABLE `myregister` (
  `id` int(7) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(25) NOT NULL,
  `alt_phone` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myregister`
--

INSERT INTO `myregister` (`id`, `name`, `email`, `password`, `phone`, `address`, `country`, `alt_phone`, `dob`) VALUES
(102, 'Durgama Yadav', 'durgama@gmail.com', 'durgama', '0123456789', 'New Gomtinagar', 'INDIA', '9876543210', '1999-06-01'),
(103, 'Mohd Faisal Naeem', 'faisalnaeem7668@gmail.com', 'faisal', '7668636289', 'MODEL HOUSES, G .B. MARG', 'INDIA', '1122334455', '1999-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(7) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Packages` varchar(50) NOT NULL,
  `Peoples` varchar(2) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ngo` varchar(10) NOT NULL,
  `Spl_Request` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `Address`, `Contact`, `Packages`, `Peoples`, `Date`, `Time`, `Email`, `Ngo`, `Spl_Request`) VALUES
(9, 'New Gomtinagar', '9876543210', 'Freshers/Farewell Party Combo(Non-Veg)', '10', '2020-06-15', '4:00 PM-7:00 PM', 'durgama@gmail.com', 'Yes', 'FOOD SHOULD BE SERVED HOT...THANK YOU'),
(10, 'MODEL HOUSES , G. B. MARG , LUCKNOW', '1122334455', 'Wedding Party(Veg)', '20', '2020-06-01', '8:00 PM-11:00 PM', 'FAISALNAEEM7668@GMAIL.COM', 'YES', 'WAITERS SHOULD BE PROPERLY DRESSED UP.....THANK YOU....');

-- --------------------------------------------------------

--
-- Table structure for table `post_rating`
--

CREATE TABLE `post_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_rating`
--

INSERT INTO `post_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(12, 1, 2, 7, '2020-05-23 09:41:19', '2020-05-23 10:05:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tablecustom`
--

CREATE TABLE `tablecustom` (
  `id` int(5) NOT NULL,
  `Event` varchar(30) NOT NULL,
  `No_Of_Peoples` int(3) NOT NULL,
  `No_Of_Chairs` int(3) NOT NULL,
  `Table_Size` varchar(10) NOT NULL,
  `Table_Cover_Colour` varchar(20) NOT NULL,
  `Table_Decoration` varchar(30) NOT NULL,
  `Crockery` varchar(30) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Language_Known` varchar(40) NOT NULL,
  `Dress_Code` varchar(40) NOT NULL,
  `No_Of_Waiters` int(5) NOT NULL,
  `Themes` varchar(50) NOT NULL,
  `Music` varchar(40) NOT NULL,
  `Welcome_Hosts` varchar(40) NOT NULL,
  `Welcome_Drinks` varchar(35) NOT NULL,
  `No_Of_Host` int(5) NOT NULL,
  `Welcome_Gifts` varchar(30) NOT NULL,
  `Entr_Decoration` varchar(30) NOT NULL,
  `Breaksp` varchar(65) NOT NULL,
  `Lunchsp` varchar(65) NOT NULL,
  `Dinnersp` varchar(70) NOT NULL,
  `Drink` varchar(70) NOT NULL,
  `Dessertsp` varchar(70) NOT NULL,
  `Wine` varchar(70) NOT NULL,
  `Nonveg` varchar(70) NOT NULL,
  `Veg` varchar(70) NOT NULL,
  `Breakfast` varchar(70) NOT NULL,
  `Lunch` varchar(70) NOT NULL,
  `Snack` varchar(70) NOT NULL,
  `Dinner` varchar(70) NOT NULL,
  `Dessert` varchar(70) NOT NULL,
  `Beverage` varchar(70) NOT NULL,
  `Soup` varchar(70) NOT NULL,
  `Tea` varchar(70) NOT NULL,
  `Cake` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `Pizza` varchar(60) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Spl_Request` varchar(500) NOT NULL,
  `Ngo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablecustom`
--

INSERT INTO `tablecustom` (`id`, `Event`, `No_Of_Peoples`, `No_Of_Chairs`, `Table_Size`, `Table_Cover_Colour`, `Table_Decoration`, `Crockery`, `Gender`, `Language_Known`, `Dress_Code`, `No_Of_Waiters`, `Themes`, `Music`, `Welcome_Hosts`, `Welcome_Drinks`, `No_Of_Host`, `Welcome_Gifts`, `Entr_Decoration`, `Breaksp`, `Lunchsp`, `Dinnersp`, `Drink`, `Dessertsp`, `Wine`, `Nonveg`, `Veg`, `Breakfast`, `Lunch`, `Snack`, `Dinner`, `Dessert`, `Beverage`, `Soup`, `Tea`, `Cake`, `Pizza`, `Address`, `Contact`, `Email`, `Date`, `Time`, `Spl_Request`, `Ngo`) VALUES
(46, 'Farewell Party', 10, 10, '10 ft', 'Violet', 'Balloons', 'Melamine', 'Both in equal ratio', 'English & Hindi Both', 'Regular', 4, 'Back To School', 'According To Event', 'Both in equal ratio', 'None', 4, 'Welcome Cards', 'Baloons', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'Fried Rice', 'Cheese Balls', 'None', 'Rajbhoj', 'Lemon Soda', 'Tomato Corn Soup', 'Cappuccino', 'Red Velvet 4 kg', 'Regular Tea', 'NEW GOMTINAGAR', '9876543210', 'durgama@gmail.com', '2020-06-15', '4:00PM-7:00PM', 'PLEASE ARRANGE A SEPARATE FOR THE CAKE....THANK YOU....', 'Yes'),
(47, 'Wedding Reception Party', 25, 25, '4 ft', 'Red', 'Candles', 'Ceramic', 'Both in equal ratio', 'English & Hindi Both', 'Properly Suited', 8, 'According To Event', 'Instrumental', 'Both in equal ratio', 'None', 6, 'Flower Sticks', 'Lighting', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'Coconut Vegetarian Korma', 'None', 'None', 'Spring Rolls', 'Subz Dewani Handi', 'Gajar Ka Halwa', 'Sandali Sharbat', 'Spinich Soup', 'Dalgona Coffee', 'Strawberry 4 kg', 'None', 'LUCKNOW', '1122334455', 'FAISALNAEEM7668@GMAIL.COM', '2020-06-01', '4:00PM-7:00PM', 'NO THANK YOU....', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myregister`
--
ALTER TABLE `myregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_rating`
--
ALTER TABLE `post_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tablecustom`
--
ALTER TABLE `tablecustom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `myregister`
--
ALTER TABLE `myregister`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_rating`
--
ALTER TABLE `post_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tablecustom`
--
ALTER TABLE `tablecustom`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
