-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 02:08 PM
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
-- Database: `6414_zadatak2_uto`
--
CREATE DATABASE IF NOT EXISTS `6414_zadatak2_uto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `6414_zadatak2_uto`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `vreme_kupovine` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_korisnika` int(11) NOT NULL,
  `ukupna_cena` decimal(9,0) NOT NULL,
  `adresa_isporuke` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(10) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `cena` decimal(9,0) NOT NULL,
  `tip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `barkod_proizvoda` varchar(10) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_korpe` (`id_korpe`),
  ADD KEY `barkod_proizvoda` (`barkod_proizvoda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`barkod_proizvoda`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
