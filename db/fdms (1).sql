-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 09:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_location`
--

CREATE TABLE `emp_location` (
  `emp_location_id` int(11) NOT NULL,
  `emp_lat` varchar(100) NOT NULL,
  `emp_lang` varchar(100) NOT NULL,
  `User_request_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_location`
--

INSERT INTO `emp_location` (`emp_location_id`, `emp_lat`, `emp_lang`, `User_request_id`) VALUES
(1, '15.4435584', '75.0256128', 3),
(2, '15.4418807', '75.0148041', 5),
(3, '12.9564672', '77.594624', 4),
(4, '12.9564672', '77.594624', 12),
(5, '12.9564672', '77.594624', 12),
(6, '15.434584', '74.9766846', 15),
(7, '12.9794048', '77.6208384', 16),
(8, '15.4346007', '74.9767174', 17),
(9, '15.4345921', '74.9766837', 18),
(10, '15.4345958', '77.5389184', 13),
(11, '15.9400832', '77.5389184', 19),
(12, '15.434584', '74.9766749', 20),
(13, '15.4345877', '74.9766874', 21),
(14, '15.4345837', '74.9766722', 22),
(15, '12.959744', '77.6142848', 23),
(16, '12.959744', '77.6142848', 24),
(17, '12.9695744', '77.6077312', 27),
(18, '1', '1', 25);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_detail`
--

CREATE TABLE `fuel_detail` (
  `Fuel_id` int(10) NOT NULL,
  `Fuel_name` varchar(15) NOT NULL,
  `Fuel_type` varchar(15) NOT NULL,
  `Fuel_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_detail`
--

INSERT INTO `fuel_detail` (`Fuel_id`, `Fuel_name`, `Fuel_type`, `Fuel_amount`) VALUES
(3, 'petrol', 'P3', 100),
(11, 'Diesel', 'D1', 99.8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `username`, `Password`, `type`) VALUES
(1, 'admin', '123123', 'admin'),
(8, 'sandeepr@gmail.com', 'sandeep', 'user'),
(11, 'TN37CS7864', 'TN37CS7864', 'employee'),
(12, 'UP25CN2319', 'UP25CN2319', 'employee'),
(13, 'akash12@gmail.com', '123', 'user'),
(17, 'jy5174717@gmail.com', 'J2j@yadav', 'user'),
(18, 'santhu@gmail.com', '123456', 'user'),
(24, 'ss1122@gmail.com', '123456', 'user'),
(25, 'sahana@gmail.com', '123123', 'user'),
(30, 'jagadishyadavlms@gmail.com', 'J2j@yadav', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Payment_id` int(10) NOT NULL,
  `User_request_id` int(15) NOT NULL,
  `Payment_amount` float NOT NULL,
  `Payment_transaction_no` varchar(100) NOT NULL,
  `Payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Payment_id`, `User_request_id`, `Payment_amount`, `Payment_transaction_no`, `Payment_date`) VALUES
(1, 19, 1125, '67079', '2024-10-10'),
(2, 23, 1323, '6707a496788d6', '2024-10-10'),
(3, 21, 1412, '6707a8ddeecc0', '2024-10-10'),
(4, 18, 1320, '6707c56ff1075', '2024-10-10'),
(5, 24, 1520, '671ca9b9cac5a', '2024-10-26'),
(6, 27, 531, '671cae20dc4d7', '2024-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_id` int(15) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `User_address` varchar(20) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_id`, `User_name`, `User_address`, `Email_id`, `Contact_no`) VALUES
(1, 'sandeep', 'Dharwad,Kud', 'sandeepr@gmail.com', '9900123456'),
(2, 'Akash', 'Dharwad', 'akash12@gmail.com', '9480775684'),
(6, 'jagadish', 'appanadoddi', 'jy5174717@gmail.com', '9900572501'),
(7, 'santhu', 'bengaluru', 'santhu@gmail.com', '9876543210'),
(13, 'sandeep', 'apd', 'ss1122@gmail.com', '9900887766'),
(14, 'sahana', 'dharwad', 'sahana@gmail.com', '1234567890'),
(19, 'jagadish', 'appanadoddi', 'jagadishyadavlms@gmail.com', '9900572501');

-- --------------------------------------------------------

--
-- Table structure for table `user_request_details`
--

CREATE TABLE `user_request_details` (
  `User_request_id` int(15) NOT NULL,
  `User_id` int(15) NOT NULL,
  `Vehicle_id` int(15) NOT NULL,
  `User_lang` varchar(300) NOT NULL,
  `User_latt` varchar(300) NOT NULL,
  `Fuel_id` int(15) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Total_amount` float NOT NULL,
  `Request_status` varchar(15) NOT NULL,
  `Request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_request_details`
--

INSERT INTO `user_request_details` (`User_request_id`, `User_id`, `Vehicle_id`, `User_lang`, `User_latt`, `Fuel_id`, `Quantity`, `Total_amount`, `Request_status`, `Request_date`) VALUES
(18, 2, 1, '74.9766865', '15.4345946', 3, 12, 120, 'PAID', '2024-10-03'),
(19, 1, 1, '77.5389184', '15.9400832', 3, 11, 25, 'PAID', '2024-10-05'),
(20, 13, 1, '74.9766749', '15.434584', 11, 2, 30, 'ACCEPTED', '2024-10-07'),
(21, 7, 1, '74.9766719', '15.434583', 3, 13, 112, 'DELEVERED', '2024-10-07'),
(22, 14, 1, '74.9766703', '15.434583', 3, 6, 50, 'ACCEPTED', '2024-10-07'),
(23, 1, 1, '77.6142848', '12.959744', 3, 12, 123, 'DELEVERED', '2024-10-10'),
(24, 1, 1, '77.6142848', '12.959744', 11, 15, 23, 'PAID', '2024-10-10'),
(25, 2, 1, '77.6142848', '12.959744', 3, 12, 10, 'ACCEPTED', '2024-10-10'),
(27, 1, 1, '77.6077312', '12.9695744', 11, 5, 32, 'PAID', '2024-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `Vehicle_id` int(15) NOT NULL,
  `Vehicle_no` varchar(15) NOT NULL,
  `Driver_name` varchar(20) NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Vehicle_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`Vehicle_id`, `Vehicle_no`, `Driver_name`, `Contact_no`, `Vehicle_photo`) VALUES
(1, 'TN37CS7864', 'Raghavendra', '7892340322', '1.jpg'),
(2, 'UP25CN2319', 'Vinod kumar', '8088619902', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_location`
--
ALTER TABLE `emp_location`
  ADD PRIMARY KEY (`emp_location_id`);

--
-- Indexes for table `fuel_detail`
--
ALTER TABLE `fuel_detail`
  ADD PRIMARY KEY (`Fuel_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `user_request_details`
--
ALTER TABLE `user_request_details`
  ADD PRIMARY KEY (`User_request_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`Vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_location`
--
ALTER TABLE `emp_location`
  MODIFY `emp_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fuel_detail`
--
ALTER TABLE `fuel_detail`
  MODIFY `Fuel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `User_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_request_details`
--
ALTER TABLE `user_request_details`
  MODIFY `User_request_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `Vehicle_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
