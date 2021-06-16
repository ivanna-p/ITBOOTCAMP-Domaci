-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 01:53 PM
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
-- Database: `6414_zadatak1`
--
CREATE DATABASE IF NOT EXISTS `6414_zadatak1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `6414_zadatak1`;

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `razred` varchar(5) NOT NULL,
  `odeljenje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko', 'Stojic', 'III', 5),
('14-2020', 'Janko', 'Veselinovic', 'II', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `djak` varchar(50) NOT NULL,
  `predmet` int(20) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`djak`, `predmet`, `ocena`) VALUES
('13-2020', 3, 5),
('13-2020', 4, 4),
('14-2020', 3, 2),
('14-2020', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id_predmeta` int(11) NOT NULL,
  `naziv_predmeta` varchar(20) NOT NULL,
  `profesor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id_predmeta`, `naziv_predmeta`, `profesor`) VALUES
(3, 'matematika', 'MT'),
(4, 'srpski', 'SR'),
(5, 'srpski', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD KEY `djak` (`djak`),
  ADD KEY `predmet` (`predmet`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id_predmeta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id_predmeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_1` FOREIGN KEY (`djak`) REFERENCES `djaci` (`broj_knjizice`),
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`predmet`) REFERENCES `predmeti` (`id_predmeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
