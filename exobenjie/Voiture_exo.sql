-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2018 at 10:54 AM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Voiture_exo`
--

-- --------------------------------------------------------

--
-- Table structure for table `conso`
--

CREATE TABLE `conso` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `maximum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conso`
--

INSERT INTO `conso` (`id`, `nom`, `maximum`) VALUES
(1, 'A', 4.2),
(2, 'B', 5.5),
(3, 'C', 6.7),
(4, 'D', 8),
(5, 'E', 9.3),
(6, 'F', 10.5),
(7, 'G', 100);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(1, 'Ferrari'),
(2, 'Lamborghini'),
(3, 'Citroën'),
(4, 'Ford'),
(5, 'Chevrolet'),
(6, 'Land Rover'),
(7, 'BMW'),
(8, 'Bentley');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Citadine'),
(2, 'Berline'),
(3, 'Cabriolet'),
(4, 'Supercar'),
(5, 'Muscle car'),
(6, 'Luxe'),
(7, '4x4'),
(8, 'Hypercar'),
(9, 'Break');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `puissance` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `vitesse_max` int(11) NOT NULL,
  `acceleration` float NOT NULL,
  `consommation` float NOT NULL,
  `marque` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`id`, `modele`, `puissance`, `poids`, `image`, `vitesse_max`, `acceleration`, `consommation`, `marque`, `type`) VALUES
(1, 'C3', 100, 1090, 'c3.png', 181, 11.1, 3.7, 3, 1),
(2, 'LaFerrari', 963, 1350, 'laferrari.png', 349, 2.6, 14.2, 1, 8),
(3, 'Huracan', 640, 1382, 'huracan.png', 328, 2.8, 13.7, 2, 4),
(4, 'Mustang', 421, 1740, 'mustang.png', 239, 5.6, 12.4, 4, 3),
(5, 'Impala', 195, 1655, 'impala.png', 165, 13.1, 18, 5, 5),
(6, 'Evoque', 150, 1520, 'evoque.png', 180, 10.7, 5, 6, 7),
(7, 'M3', 343, 1495, 'm3.png', 289, 5.2, 11.9, 7, 2),
(8, 'Continental', 560, 2425, 'continental.png', 318, 5.2, 16.6, 8, 6),
(9, 'C4 picasso', 156, 1296, 'picasso.png', 209, 10.6, 6, 3, 9),
(10, 'Centenario', 770, 1520, 'centenario.png', 350, 2.8, 10.7, 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conso`
--
ALTER TABLE `conso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `marque` (`marque`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conso`
--
ALTER TABLE `conso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
