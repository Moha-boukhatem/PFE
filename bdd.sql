-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 sep. 2020 à 12:19
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe`
--
CREATE DATABASE IF NOT EXISTS `pfe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pfe`;

-- --------------------------------------------------------

--
-- Structure de la table `chef_département`
--

DROP TABLE IF EXISTS `chef_département`;
CREATE TABLE IF NOT EXISTS `chef_département` (
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chef_département`
--

INSERT INTO `chef_département` (`email`, `mot_de_passe`) VALUES
('idir27@gmail.com', 'dddd');

-- --------------------------------------------------------

--
-- Structure de la table `chef_section`
--

DROP TABLE IF EXISTS `chef_section`;
CREATE TABLE IF NOT EXISTS `chef_section` (
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  `id_chefS` int(50) NOT NULL,
  PRIMARY KEY (`id_chefS`),
  UNIQUE KEY `id` (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chef_section`
--

INSERT INTO `chef_section` (`nom`, `prénom`, `email`, `mot_de_passe`, `poste`, `id_chefS`) VALUES
('med', 'idir', 'idirmed27@gmail.com', 'dddd', 'chef section', 0);

-- --------------------------------------------------------

--
-- Structure de la table `code_emplyé`
--

DROP TABLE IF EXISTS `code_emplyé`;
CREATE TABLE IF NOT EXISTS `code_emplyé` (
  `code` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `code_emplyé`
--

INSERT INTO `code_emplyé` (`code`, `label`) VALUES
('1111', '1'),
('2222', '2'),
('3333', '3'),
('4444', '4');

-- --------------------------------------------------------

--
-- Structure de la table `demande_travail`
--

DROP TABLE IF EXISTS `demande_travail`;
CREATE TABLE IF NOT EXISTS `demande_travail` (
  `id_type` varchar(50) NOT NULL,
  `id_localisation` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_employe` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_travail`
--

INSERT INTO `demande_travail` (`id_type`, `id_localisation`, `description`, `id`, `id_employe`) VALUES
('2-hydrolique', '2-salle', 'dddd', 53, 4),
('1-éléctricité', '1-chambre', '1', 52, 3),
('1-éléctricité', '1-chambre', 'aaa', 51, 3);

-- --------------------------------------------------------

--
-- Structure de la table `demande_travailcs`
--

DROP TABLE IF EXISTS `demande_travailcs`;
CREATE TABLE IF NOT EXISTS `demande_travailcs` (
  `id_dtcs` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` varchar(50) NOT NULL,
  `id_localisation` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `id_chefS` int(11) NOT NULL,
  PRIMARY KEY (`id_dtcs`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande_travailcs`
--

INSERT INTO `demande_travailcs` (`id_dtcs`, `id_type`, `id_localisation`, `description`, `id_chefS`) VALUES
(1, '2-hydrolique', '2-salle', 'vvvvvvvvv', 0),
(2, '2-hydrolique', '2-salle', 'uuuuuuuuuuuuuuu', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id_employe` int(50) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `poste` varchar(50) NOT NULL,
  PRIMARY KEY (`id_employe`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id_employe`, `nom`, `prénom`, `email`, `mot_de_passe`, `code`, `poste`) VALUES
(6, 'd', 'd', 'd', 'd', 'd', 'd'),
(5, 'd', 'd', 'd', 'd', 'd', 'd'),
(4, 'd', 'd', 'd', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
CREATE TABLE IF NOT EXISTS `equipement` (
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `label_localisation` varchar(50) NOT NULL,
  `id_localisation` varchar(50) NOT NULL,
  PRIMARY KEY (`id_localisation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`label_localisation`, `id_localisation`) VALUES
('chambre', '1'),
('salle', '2');

-- --------------------------------------------------------

--
-- Structure de la table `ordre_travaille`
--

DROP TABLE IF EXISTS `ordre_travaille`;
CREATE TABLE IF NOT EXISTS `ordre_travaille` (
  `id_o` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_o`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ordre_travaille`
--

INSERT INTO `ordre_travaille` (`id_o`, `objet`, `description`) VALUES
(3, 'rien', 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `outillage`
--

DROP TABLE IF EXISTS `outillage`;
CREATE TABLE IF NOT EXISTS `outillage` (
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_chefS` int(50) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rapport`
--

INSERT INTO `rapport` (`id_r`, `titre`, `description`, `id_chefS`) VALUES
(1, 'rien', 'ssssssss', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `label_type` varchar(50) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`label_type`, `id_type`) VALUES
('éléctricité', '1'),
('hydrolique', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
