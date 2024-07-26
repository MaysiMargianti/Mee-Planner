-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 06:59 PM
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
-- Database: `db_meal_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Name`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@meeplanner.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nutrisi_info`
--

CREATE TABLE `nutrisi_info` (
  `nutrisi_id` bigint(20) NOT NULL,
  `protein` varchar(100) NOT NULL,
  `calories` varchar(100) NOT NULL,
  `carbo` varchar(100) NOT NULL,
  `recipe_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pantry`
--

CREATE TABLE `pantry` (
  `pantry_id` bigint(20) NOT NULL,
  `ingredient_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pantry`
--

INSERT INTO `pantry` (`pantry_id`, `ingredient_name`, `start_date`, `exp_date`, `user_id`) VALUES
(122, 'haloooo', '2024-07-16', '2024-08-03', 1),
(125, 'hahahahahah', '2024-07-27', '2024-08-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` bigint(20) NOT NULL,
  `recipe_name` varchar(550) NOT NULL,
  `category` varchar(25) NOT NULL,
  `instructions` text NOT NULL,
  `img_recipe` text NOT NULL,
  `Ingredient` text NOT NULL,
  `cook_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `category`, `instructions`, `img_recipe`, `Ingredient`, `cook_time`) VALUES
(1, 'Salad Buah', 'Salad', 'LWQDKNQWOEJOEF', 'resep_salad buah.jpg', 'qldwwkqldkq', '10 menit'),
(2, 'Nasi Goreng', 'Nasi', 'qwkjdbqwjd', 'nasgor.jpg', 'elknewfnef', '15 menit'),
(4, 'rendang', 'Daging', 'dwjqnndwj', 'Rendang1.jpg', 'kdklnqw', '20 menit');

-- --------------------------------------------------------

--
-- Table structure for table `save_recipe`
--

CREATE TABLE `save_recipe` (
  `save id` bigint(20) NOT NULL,
  `recipe_id` bigint(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `save_recipe`
--

INSERT INTO `save_recipe` (`save id`, `recipe_id`, `user_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `admin_id`) VALUES
(1, 'haruto', 'haruto@gmail.com', 'haruto', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `nutrisi_info`
--
ALTER TABLE `nutrisi_info`
  ADD PRIMARY KEY (`nutrisi_id`),
  ADD UNIQUE KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `pantry`
--
ALTER TABLE `pantry`
  ADD PRIMARY KEY (`pantry_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `save_recipe`
--
ALTER TABLE `save_recipe`
  ADD PRIMARY KEY (`save id`),
  ADD UNIQUE KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nutrisi_info`
--
ALTER TABLE `nutrisi_info`
  MODIFY `nutrisi_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pantry`
--
ALTER TABLE `pantry`
  MODIFY `pantry_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `save_recipe`
--
ALTER TABLE `save_recipe`
  MODIFY `save id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nutrisi_info`
--
ALTER TABLE `nutrisi_info`
  ADD CONSTRAINT `nutrisi_info_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);

--
-- Constraints for table `pantry`
--
ALTER TABLE `pantry`
  ADD CONSTRAINT `pantry_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
