-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2024 at 11:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prepa-lea-2024-portfolio-dylan-baton`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `nom_prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nom_prenom`, `email`, `telephone`, `message`) VALUES
(32, 'paul walker', 'paul.walker@skyline.com', '888-888-8888', 'test'),
(33, 'andrea russet', 'andrea.russet@gmail.fr', '555-555-5555', 'beau gosse'),
(34, 'margot robbie', 'margot.robbie@jet.com', '333-333-3333', 'test'),
(35, 'Martin Luther King', 'martin.luther@king.com', '111-111-1111', 'test'),
(36, 'paul walker', 'paul.walker@skyline.com', '555-555-5555', 'gtd-trt'),
(37, 'baton', 'dieuxdesdieux@olympe.fr', '555-555-5555', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id` int NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_realisation_liste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description_realisation_liste` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id`, `titre`, `description`, `image`, `image_realisation_liste`, `description_realisation_liste`) VALUES
(1, 'un petit tour au japon', 'un petit site qui vont montre quelques trucs du japon', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/image-projet-japon.png\r\n', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/image-projet-japon-2.png', 'bonjour comment tu va moi jr vais bien'),
(2, 'site de location de véhicules noir', 'voitures', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/image-projet-location.png', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/image-projet-location-2.png', 'vroum vroum'),
(3, 'ferrari 458', 'ferrari', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/ferrari-488-jaune.png', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/ferrari-458.png', 'La Ferrari 458 Italia est une voiture de sport produite par le constructeur italien Ferrari. Les deux premiers chiffres de son nom indiquent la cylindrée du moteur (4,5 litres) et le dernier, le nombre de cylindres (8). Le nom « Italia », succédant à « Modena » et « Maranello », rappelle les origines géographiques de la marque.\r\n\r\nLa 458 Italia est propulsée par un moteur V8 atmosphérique de 4,5 litres dont la puissance spécifique atteint 127 chevaux par litre (95 kW par litre), une valeur très élevée pour un moteur atmosphérique. Très travaillée aérodynamiquement pour atteindre des vitesses élevées, elle est dotée d\'aides électroniques à la conduite.\r\n\r\nRemplaçante de la Ferrari F430, elle est officiellement présentée au salon de l\'automobile de Francfort 2009.\r\n\r\nSa production a duré six ans, elle est remplacée en 2015 par la Ferrari 488.'),
(12, 'new york', 'new york la nuit', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/new-york.png', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/new-york-jour.png', 'new york le jour'),
(13, 'annecy', 'une belle photo d\'annecy', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/annecy.png', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/annecy-2.png', 'un château a annecy'),
(14, 'pagani zonda r', 'une magnifique pagani zonda r en carbone bleu ', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/pagani-zonda-r.png', '../prepa-lea-2024-portfolio-dylan-baton/images/projet/pagani-zonda-r-2.png', 'pagani zonda r carbone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
