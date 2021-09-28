-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 09:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike_normal`
--

CREATE TABLE `bike_normal` (
  `Product_id` int(11) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Bike_condition` varchar(100) NOT NULL,
  `Rent_Cost` varchar(50) NOT NULL,
  `Availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_normal`
--

INSERT INTO `bike_normal` (`Product_id`, `National_id`, `Phone_number`, `Model`, `Bike_condition`, `Rent_Cost`, `Availability`) VALUES
(10001, 2345678, '01765968783', 'Roadmaster Prime', '1010 KM and good CONDITION', '200 per day', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `bike_premium`
--

CREATE TABLE `bike_premium` (
  `Product_id` int(11) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Bike_condition` varchar(100) NOT NULL,
  `Rent_Cost` varchar(50) NOT NULL,
  `Availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_premium`
--

INSERT INTO `bike_premium` (`Product_id`, `National_id`, `Phone_number`, `Model`, `Bike_condition`, `Rent_Cost`, `Availability`) VALUES
(20001, 3456789, '01799618574', 'RTR 4V', '508 KM and good CONDITION', '500 per day', 'Yes'),
(20002, 1234567, '01748541038', 'R15 V3', '409 KM and good CONDITION', '800 per day', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `car_normal`
--

CREATE TABLE `car_normal` (
  `Product_id` int(11) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Bike_condition` varchar(100) NOT NULL,
  `Rent_Cost` varchar(50) NOT NULL,
  `Availability` varchar(10) NOT NULL,
  `Seat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_normal`
--

INSERT INTO `car_normal` (`Product_id`, `National_id`, `Phone_number`, `Model`, `Bike_condition`, `Rent_Cost`, `Availability`, `Seat`) VALUES
(30001, 2345678, '01765968783', 'Toyota Corola', '2010 KM and good CONDITION', '2000 per day', 'Yes', 4),
(30002, 2345678, '01765968783', 'Toyota NOAH', '2410 KM and good CONDITION', '3500 per day', 'Yes', 8);

-- --------------------------------------------------------

--
-- Table structure for table `car_premium`
--

CREATE TABLE `car_premium` (
  `Product_id` int(11) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Bike_condition` varchar(100) NOT NULL,
  `Rent_Cost` varchar(50) NOT NULL,
  `Availability` varchar(10) NOT NULL,
  `Seat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_premium`
--

INSERT INTO `car_premium` (`Product_id`, `National_id`, `Phone_number`, `Model`, `Bike_condition`, `Rent_Cost`, `Availability`, `Seat`) VALUES
(40001, 3456789, '01799618574', 'Hyundai Tucson', '1510 KM and good CONDITION', '3000 per day', 'Yes', 4),
(40002, 1234567, '01748541038', 'Toyota 86 GT', '1200 KM and good CONDITION', '3500 per day', 'Yes', 4);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `National_id` int(11) NOT NULL,
  `Product_id` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Postal_code` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`National_id`, `Product_id`, `Email`, `Phone_number`, `Adress`, `Postal_code`, `Username`) VALUES
(5666666, 40001, 'abid.hasan@northsouth.edu', '01799618573', 'Sherpur', 2100, 'abidhasan01');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `user_name` varchar(25) NOT NULL,
  `pasward` varchar(20) NOT NULL,
  `nationa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`user_name`, `pasward`, `nationa_id`) VALUES
('abidhasan01', 'aaaaa', 5666666),
('lanisasiddika', 'iiiii', 4555555),
('PranabRoy', 'ppppp', 2333333),
('ShaharierSathil', 'sssss', 3456789),
('TasbiuslOlive', 'ttttt', 1222222);

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `Owner_id` int(15) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`Owner_id`, `National_id`, `Username`) VALUES
(1, 2345678, 'PranabRoy'),
(2, 3456789, 'ShaharierSathil'),
(3, 1234567, 'TasbiuslOlive'),
(4, 4555555, 'lanisasiddika');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `First_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `User_name` varchar(25) NOT NULL,
  `National_id` int(11) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Adreess` varchar(30) NOT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Age` int(5) DEFAULT NULL,
  `Pasward` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`First_name`, `last_name`, `User_name`, `National_id`, `Phone_Number`, `Email`, `Adreess`, `Sex`, `Age`, `Pasward`) VALUES
('Bulbul', 'Hasan', 'Bulbulhasan', 1011111, '01987418916', 'Bulbulhasan55@gmail.com', 'Sherpur', 'Male', 22, 'bbbbb'),
('Tanzila', 'Rahman', 'Tanzilarahman', 1112121, '01987418917', 'TanzilaRahman55@gmail.com', 'Sherpur', 'Male', 19, 'ttttt'),
('Tasbiul', 'Olive', 'TasbiuslOlive', 1234567, '01748541038', 'tasbiul.hasan@northsouth.edu', 'Faridpur', 'male', 22, 'ttttt'),
('Pranab', 'Roy', 'PranabRoy', 2345678, '01765968783', 'pranab.roy@northsouth.edu', 'Bramanbaria', 'male', 22, 'ppppp'),
('Iqbal', 'Hossain', 'iqbalHoosain', 3444444, '01835047468', 'iqbal.hossain@northsouth.edu', 'Nowakhali', 'Male', 22, 'lllll'),
('Shaharier', 'Sathil', 'ShaharierSathil', 3456789, '01799618574', 'Shaharier.hoque@northsouth.edu', 'Sherpur', 'male', 22, 'sssss'),
('Lanisa', 'Siddika', 'lanisasiddika', 4555555, '01758953525', 'laniisaa.siddika@northsouth.edu', 'Comilla', 'Female', 22, 'iiiii'),
('Abid', 'Hasan', 'abidhasan01', 5666666, '01799618573', 'abid.hasan@northsouth.edu', 'Sherpur', 'Male', 22, 'aaaaa'),
('Rudnan', 'Ahmeed', 'Rudnanahmmed01', 6777777, '01799526405', 'rudnantanzim@gmail.com', 'Sherpur', 'Male', 17, '2580'),
('Adiba', 'Abonee', 'AdibaAbonee', 7888888, '01799526405', 'adbibadtasnim69@gmail.com', 'Sherpur', 'Female', 21, 'Addd'),
('Bishal', 'Azmain', 'BishalAzmain', 8999999, '01625689143', 'bishalazmail84@gmail.com', 'Kisorgong', 'Male', 22, 'bbbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_normal`
--
ALTER TABLE `bike_normal`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `bike_premium`
--
ALTER TABLE `bike_premium`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `car_normal`
--
ALTER TABLE `car_normal`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `car_premium`
--
ALTER TABLE `car_premium`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`National_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`Owner_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`National_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
