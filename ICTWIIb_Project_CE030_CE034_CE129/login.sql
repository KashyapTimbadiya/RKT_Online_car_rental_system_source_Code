-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 06:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_car`
--

CREATE TABLE `buy_car` (
  `id` int(5) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `main_id` int(11) NOT NULL,
  `same_id` int(11) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `low_price` int(50) NOT NULL,
  `high_price` int(50) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `bhp` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `mileage` varchar(255) NOT NULL,
  `feature1` varchar(255) NOT NULL,
  `feature2` varchar(255) NOT NULL,
  `feature3` varchar(255) NOT NULL,
  `feature4` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`main_id`, `same_id`, `temp_id`, `car_name`, `low_price`, `high_price`, `engine`, `bhp`, `seat`, `mileage`, `feature1`, `feature2`, `feature3`, `feature4`, `image`) VALUES
(1, 3, 1, 'Renault Duster', 8000, 9000, '1330 cc - 1498 cc', '104.55 - 153.866 Bhp', 5, '16.42 kmpl', 'Power Windows Front', 'Anti Lock Braking System', 'Driver Airbag', 'Power Steering', 'photos/upload_car/duster.jpeg'),
(2, 3, 2, 'Renault KWID', 7000, 8000, '799 cc - 999 cc', '53.26-67.0 Bhp', 5, '20.71 - 22.3 kmpl', 'Power Windows Front', 'Anti Lock Braking System', 'Wheel Covers', 'Fog Lights-Front', 'photos/upload_car/kwid.jpg'),
(3, 1, 1, 'Hyundai i20', 8000, 9000, '998 cc - 1493 cc', '81.86-118.36Bhp', 5, '20.28kmpl', 'Power Windows Front', 'Power Steering', 'Anti Lock Breaking System', 'Fog Lights-Front', 'photos/upload_car/i20.jpeg'),
(4, 1, 2, 'Hyundai Xcent Prime', 6000, 7000, '1197 cc', '65.39 - 81.86 Bhp', 5, '15.38 kmpl', 'Power Windows Front', 'Passenger Airbag', 'Wheel Covers', 'Anti Lock Breaking System', 'photos/upload_car/xcent.webp'),
(5, 2, 1, 'Maruti Alto 800', 5000, 7000, '796 cc', '40.36 - 47.33 Bhp', 5, '22.05 kmpl', 'Power  steering', 'Passenger Airbag', 'Anti Lock Breaking System', 'Wheel Covers', 'photos/upload_car/alto.jpg'),
(6, 2, 2, 'Maruti Eeco', 7000, 8500, '1196 cc', '61.7 - 72.42 Bhp\r\n', 7, '16.11 kmpl', 'Power Windows Front', 'Anti Lock Braking System', 'Wheel Covers', 'Driver Airbag', 'photos/upload_car/eeco.jpeg'),
(7, 6, 1, 'Honda City 4th Generation', 7000, 9000, '1497 cc', '117.6 Bhp', 5, '17.04 kmpl', 'Power Windows Front', 'Anti Lock Braking System', 'Driver Airbag', 'Fog Lights-Front', 'photos/upload_car/honda city.jpeg'),
(8, 6, 2, 'Honda Jazz', 7500, 8500, '1199 cc', '88.51 Bhp', 5, '16.6 - 17.1kmpl', 'Power Steering', 'Anti Lock Braking System', 'Fog Lights-Front', 'Passenger Airbag', 'photos/upload_car/jazz.png'),
(9, 5, 1, 'Tata Altroz', 5000, 7000, '1199 cc - 1497 cc', '84.88 - 108.49 Bhp', 5, '19.05 kmpl', 'Power Windows Front', 'Passenger Airbag', 'Wheel Covers', 'Driver Airbag', 'photos/upload_car/altroz.jpeg'),
(10, 5, 2, 'Tata Yodha Pickup', 7000, 8000, '2596 cc', '85.0 - 85.82 Bhp', 2, '13.42 kmpl', 'Power Steering', 'Anti Lock Braking System', 'Driver Airbag', 'Air conditioner', 'photos/upload_car/yodha pickup.jpeg'),
(11, 4, 1, 'Toyato Fortuner', 15000, 18000, '2694 cc - 2755 cc', '163.6 - 201.15 Bhp', 7, '15.26 kmpl', 'Power Windows Front', 'Passenger Airbag', 'Anti Lock Braking System', 'Driver Airbag', 'photos/upload_car/fortuner.webp'),
(12, 4, 2, 'Toyato Yaris', 7000, 9000, '1496 cc', '105.94 Bhp', 5, '17.1-17.8 kmpl', 'Power Windows Front', 'Power Steering', 'Anti Lock Braking System', 'Air conditioner', 'photos/upload_car/yaris.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `image`) VALUES
(1, 'huyndai', 'photos/upload_company/huyndai.jpg'),
(2, 'maruti', 'photos/upload_company/maruti.png'),
(3, 'renault', 'photos/upload_company/renault.jpg'),
(4, 'toyato', 'photos/upload_company/toyota.jpg'),
(5, 'tata', 'photos/upload_company/tata.jpg'),
(6, 'honda', 'photos/upload_company/honda.png');

-- --------------------------------------------------------

--
-- Table structure for table `rent_car`
--

CREATE TABLE `rent_car` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `journey_date` date NOT NULL DEFAULT current_timestamp(),
  `state` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_car`
--

INSERT INTO `rent_car` (`id`, `first_name`, `last_name`, `journey_date`, `state`, `payment_method`) VALUES
(1, 'Kashyap', 'Timbadiya', '2021-07-06', 'Gujrat', 'PhonePe'),
(2, 'kishan', 'Timbadiya', '2021-07-20', 'Rajasthan', 'PhonePe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email_id`, `mobile_no`, `address`, `date`) VALUES
(1, 'Kashyap', '12345678', 'kashyaptimbadiya2@gmail.com', 2147483647, 'rajkot', '2021-07-07 00:00:00'),
(2, 'kishan', '12345678', 'kashyaptimbadiya2@gmail.com', 2147483647, 'rajkot', '2021-06-29 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_car`
--
ALTER TABLE `buy_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`main_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_car`
--
ALTER TABLE `rent_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_car`
--
ALTER TABLE `buy_car`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_car`
--
ALTER TABLE `rent_car`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
