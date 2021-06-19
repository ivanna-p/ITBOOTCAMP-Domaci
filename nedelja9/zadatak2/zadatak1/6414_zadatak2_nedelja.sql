-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 06:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6414_zadatak2_nedelja`
--
CREATE DATABASE IF NOT EXISTS `6414_zadatak1_nedelja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `6414_zadatak1_nedelja`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL,
  `barkod_proizvodi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `kolicina`, `cena`, `datum`, `barkod_proizvodi`) VALUES
(1, 3, '400.00', '2021-06-16', '193'),
(2, 1, '120.00', '2021-06-16', '234'),
(3, 5, '600.00', '2021-06-16', '888'),
(4, 5, '3252.70', '2021-06-17', '555'),
(5, 2, '1329.90', '2021-06-17', '344'),
(6, 23, '1064.80', '2021-06-17', '888'),
(7, 4, '3859.90', '2021-06-17', '193'),
(8, 5, '5555.00', '2021-05-01', '344'),
(9, 4, '879.00', '2021-05-01', '344'),
(10, 2, '7777.00', '2021-05-01', '555');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) NOT NULL,
  `naziv` varchar(15) NOT NULL,
  `cena` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('193', 'Jabuke', '100'),
('234', 'Banane', '120'),
('344', 'Breskve', '200'),
('555', 'Jagode', '300'),
('888', 'Bademi', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod_proizvodi` (`barkod_proizvodi`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod_proizvodi`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
