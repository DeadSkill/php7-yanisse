-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 avr. 2018 à 21:56
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `idEquipe` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`idEquipe`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `nom`) VALUES
(26, 'apex clan'),
(25, 'nowyourage');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `idJoueur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `idEquipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`idJoueur`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `nom`, `idEquipe`) VALUES
(1, 'Caca', NULL),
(2, 'Caca', NULL),
(3, 'Zgeg', NULL),
(4, 'aaaaaaaa', 1),
(5, 'JUIF', 2),
(6, 'polo', 1),
(7, 'plmlml', 4),
(8, 'sdsd', 5),
(9, 'jul', 16),
(10, 'aaaa', 12),
(11, 'random', 24),
(12, 'apex gost', 26),
(13, 'rage dsg', 25);

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

DROP TABLE IF EXISTS `matchs`;
CREATE TABLE IF NOT EXISTS `matchs` (
  `idParty` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipe1` int(11) NOT NULL,
  `idEquipe2` int(11) NOT NULL,
  `idGagnant` int(11) NOT NULL,
  `idPerdant` int(11) NOT NULL,
  PRIMARY KEY (`idParty`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matchs`
--

INSERT INTO `matchs` (`idParty`, `idEquipe1`, `idEquipe2`, `idGagnant`, `idPerdant`) VALUES
(18, 23, 11, 23, 11),
(19, 23, 11, 11, 23),
(20, 23, 11, 11, 23),
(21, 23, 11, 23, 11),
(22, 23, 11, 11, 23),
(23, 23, 24, 24, 23),
(24, 24, 11, 11, 24),
(25, 23, 11, 11, 23),
(26, 23, 11, 23, 11),
(27, 23, 24, 24, 23),
(28, 23, 24, 24, 23),
(29, 25, 26, 25, 26),
(30, 25, 26, 26, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
