-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Avril 2020 à 01:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `loccar`
--

-- --------------------------------------------------------

--
-- Structure de la table `automobile`
--

CREATE TABLE IF NOT EXISTS `automobile` (
  `IMM` varchar(100) NOT NULL,
  `MARQUE` varchar(100) NOT NULL,
  `PRIX_LOC` double NOT NULL,
  `PHOTO` varchar(200) NOT NULL,
  PRIMARY KEY (`IMM`),
  KEY `IMM` (`IMM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `automobile`
--

INSERT INTO `automobile` (`IMM`, `MARQUE`, `PRIX_LOC`, `PHOTO`) VALUES
('A123456', 'AUDI', 300, 'images/AUDI-A2.jpg'),
('B100001', 'FIAT', 450, 'images/fiat.jpg'),
('BEL99988', 'Peugeot 3008', 1000, 'images/Peugeot3008 1.jpg'),
('C10002', 'NISSAN', 800, 'images/nissanq.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `nom_utilisateur` varchar(200) NOT NULL,
  `mot_de_passe` varchar(200) NOT NULL,
  `my_photo` varchar(200) NOT NULL,
  PRIMARY KEY (`nom_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom_utilisateur`, `mot_de_passe`, `my_photo`) VALUES
('chahid', '123456789', 'images/chahid.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
