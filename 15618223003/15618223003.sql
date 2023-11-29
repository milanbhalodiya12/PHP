-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 06:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15618223003`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_sku` varchar(50) NOT NULL,
  `product_barcode` varchar(50) NOT NULL,
  `product_weight` decimal(10,0) NOT NULL,
  `product_dimension` varchar(50) NOT NULL,
  `product_quantity` int(50) NOT NULL,
  `product_variants` varchar(25) NOT NULL,
  `shipping_info` varchar(20) NOT NULL,
  `seo_info` varchar(255) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_features` text NOT NULL,
  `product_benefits` text NOT NULL,
  `related_product` varchar(255) NOT NULL,
  `product_review` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_filenames` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(25) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `education_qualification` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `first_name`, `middle_name`, `last_name`, `email`, `mobile`, `password`, `city`, `state`, `country`, `education_qualification`, `gender`) VALUES
(6, 'Milan', 'Dineshbhai', 'Bhalodiya', 'milan.mca111@gmail.com', '9023697542', 'Milan', 'Morbi', 'Gujarat', 'India', 'MCA', 'male'),
(7, 'Milan', 'Dineshbhai', 'JKDSBF', 'jsdgfhb@gmailcom', '6345653456', 'HBHJSVS', 'JDSBGFHGSD', 'jhyfgh', 'hvjvj', 'vhghgvg', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(255) NOT NULL,
  `file_name` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `file_name`) VALUES
(1, 'upload/180289.jpg'),
(2, 'upload/Practicle_ex_6-final.html'),
(3, 'upload/Practicle_ex_6-final.html'),
(4, 'upload/Practicle_ex_6-final.html'),
(5, 'upload/Practicle_ex_6-final.html'),
(6, 'upload/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
