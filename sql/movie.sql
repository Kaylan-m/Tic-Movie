-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 01:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `showtime` time(6) NOT NULL,
  `seat` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `full_name`, `email`, `phone`, `address`, `movie`, `showtime`, `seat`, `date`) VALUES
(22, 'Kayla Nahda Muadzah', 'kayla_nahda@yahoo.com', '081293291011', 'Puri gading, alam raya 1', 'KKN Di Desa Penari', '14:33:00.000000', 4, '2023-06-24'),
(23, 'Yesis Safsuwita', 'ysafsuwita@gmail.com', '081293291011', 'Puri gading, alam raya 1', 'Doctor Strange in the Multiverse of Madness', '14:30:00.000000', 5, '2023-06-18'),
(24, 'Dara Arafah', 'Daraa@gmail.com', '08412648612', 'Jalan Cendrawasih', 'Keluarga Cemara 2', '06:35:00.000000', 4, '2023-06-23'),
(25, 'Muadzah Kayla', 'kaylanahdaa@yahoo.com', '081293291011', 'Puri gading, alam raya 1', 'Doctor Strange in the Multiverse of Madness', '22:31:00.000000', 1, '2026-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
