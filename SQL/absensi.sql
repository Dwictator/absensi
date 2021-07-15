-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 07:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `password`, `created_date`) VALUES
(55, 'asdas@asdadasc.com', 'asdas@asdadasc.com', '$2y$10$eBwe36vmo6/qC9zd3zTxzOSNNJqxLn3m3SeSEy.4FeLKGwTS4lqBS', '2021-07-15 16:37:14'),
(56, 'ssssss', 'asdas@asdadasc.cow', '$2y$10$Bs4OCjiH0DBAftZWxcThge54RB1JhvBCqMOTMoE2xjEvTV7ZcNZFe', '2021-07-15 16:48:36'),
(57, 'sdfsd', 'asdsa@ada.cas', '$2y$10$/TWGmmbspYpksU1trXTCq.4Oa2l4RzAQ/Ind3wr8y9tYYnDA.L2RW', '2021-07-15 16:49:28'),
(58, 'asds', 'asd@asd.cow', '$2y$10$igxV4zrXxrcns7MkvpCCheyWg9ZgAha8vGHNEXisDmRTIsXEa16aS', '2021-07-15 16:50:02'),
(59, 'zxc', 'sad@adsa.asd', '$2y$10$I.9O0QIbDE9aWv2Q1FoF9uJrosRSvoywfulbOt1Li2A4veRPhQWSS', '2021-07-15 16:50:17'),
(60, 'asdads', 'fghjkl@lkjv.ckjh', '$2y$10$d0y/61dephByy0wbN.OmDuMwUBtIxJlE7yX2QWU9JGX4/IC1YGcf6', '2021-07-15 17:02:25'),
(61, 'Rizky Dwi Saputra', 'rizky@gmail.com', '$2y$10$zB4bS5WSh.MOkaqDIJEJSOxeTHuSEV6/rB92jIcaWmjCJQz/GJR2S', '2021-07-15 17:09:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
