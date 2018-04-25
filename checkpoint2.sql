-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 05:59 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkpoint2`
--

-- --------------------------------------------------------

--
-- Table structure for table `character`
--

CREATE TABLE `character` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_planet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `character`
--

INSERT INTO `character` (`id`, `name`, `size`, `area`, `id_movie`, `id_planet`) VALUES
(1, 'Orray', 2, 'desert', 2, 6),
(2, 'Massiff', 1, 'Desert', 2, 6),
(3, 'Wampa', 3, 'Cave', 5, 7),
(4, 'Tauntaun', 2, 'Ice desert', 5, 7),
(5, 'Happabore', 4, 'Desert', 7, 8),
(6, 'Luggabeast', 2, 'Desert', 7, 8),
(7, 'Wookie', 2, 'Forest', 3, 9),
(8, 'Mandalorien', 2, 'City', 2, 3),
(9, 'Kaady', 2, 'plain', 1, 10),
(10, 'Sando', 200, 'Water', 1, 10),
(11, 'Bantha', 3, 'Desert', 4, 12),
(12, 'Dewback', 2, 'Desert', 4, 12),
(13, 'Varactyl', 4, 'Cave', 3, 13),
(14, 'Ewok', 1, 'forest', 6, 14),
(15, 'Porg', 1, 'Cliff', 8, 15);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`) VALUES
(1, 'Episode I : the Phantom Menace'),
(2, 'Episode II : Attack of the Clones'),
(3, 'Episode III : Revenge of the Sith'),
(4, 'Episode IV : A New Hope'),
(5, 'Episode V : The Empire Strikes Back'),
(6, 'Episode VI : Return of the Jedi'),
(7, 'Episode VII : The Force Awakens'),
(8, 'Episode VIII : The Last Jedi');

-- --------------------------------------------------------

--
-- Table structure for table `planet`
--

CREATE TABLE `planet` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planet`
--

INSERT INTO `planet` (`id`, `name`) VALUES
(3, 'Mandalore'),
(4, 'Coruscant'),
(5, 'Dagobah'),
(6, 'Geonosis'),
(7, 'Hoth'),
(8, 'Jakku'),
(9, 'Kashyyyk'),
(10, 'Naboo'),
(12, 'Tatooine'),
(13, 'Utapau'),
(14, 'Endor'),
(15, 'Ahch-To');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_planet` (`id_planet`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character`
--
ALTER TABLE `character`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `planet`
--
ALTER TABLE `planet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `character`
--
ALTER TABLE `character`
  ADD CONSTRAINT `character_ibfk_1` FOREIGN KEY (`id_planet`) REFERENCES `planet` (`id`),
  ADD CONSTRAINT `character_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
