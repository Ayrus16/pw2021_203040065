-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040065`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `img`, `nama`, `brand`, `warna`, `harga`) VALUES
(1, 'airmaxgrey.jpg', 'Air Max Axis Thunder Grey', 'Nike', 'White, Blue, Black', 119),
(2, 'jordanuniv.jpg', 'Jordan 1 Retro High', 'Nike', 'White, Blue, Black', 170),
(4, 'vapormxw.jfif', 'Air VaporMax Flyknit 2', 'Nike', 'Blue', 190),
(5, 'yeezyboostgrey.jpg', 'Yeezy Boost 700 Wave Runner', 'Adidas', 'Grey', 300),
(6, 'nmdpyl.jpg', 'NMD Hu Pharrell Solar Pack Red', 'Adidas', 'Red, Yellow', 250),
(7, 'nmdhmoreo.jpg', 'Human Race NMD Pharrell Oreo', 'Adidas', 'Black, White', 250),
(8, 'ultrablack.jpg', 'Ultra Boost 1.0 SNS X Social Status', 'Adidas', 'Black, White', 200),
(9, 'nkbbblak.jpg', 'Nike Adapt BB Black Pure Platinum (US Charger)', 'Nike', 'Black, White', 350),
(10, 'nkoff.jpg', 'Air Presto Off-White White (2018)', 'Nike', 'White', 160),
(20, 'yeezyblckrd.jpg', 'Yeezy Boost 350 V2', 'Adidas', 'Black, Red', 220),
(30, 'sadc', 'ini coba', 'Adidas', 'blue', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', '$2y$10$UcEaksa.oheyGFsKHMGhMe0e9cGuslE5eWBmLaf3vhWIgW5VYAN5q'),
(3, 'asd', '$2y$10$9t8Gp3Kzs/XiWerhDT8XaO8GQMh/m9tvYySebyIQOVg6CeYvhAgAO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
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
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
