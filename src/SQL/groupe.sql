-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 nov. 2017 à 14:55
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
-- Base de données :  `recap`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(75) DEFAULT NULL,
  `nb_fiche` int(11) DEFAULT NULL,
  `password_groupe` varchar(75) DEFAULT NULL,
  `nb_membre` int(11) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `compte_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Groupe_id_Compte` (`compte_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `titre`, `nb_fiche`, `password_groupe`, `nb_membre`, `date_creation`, `user_id`) VALUES
(1, '1ère S Lycée Luzarche', 3, 'passgroupe', 3, '2017-11-11 00:00:00', 1),
(2, 'Activité culturelle', 6, 'groupe2', 2, '2017-11-13 00:00:00', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `FK_Groupe_id_Compte` FOREIGN KEY (`compte_id`) REFERENCES `compte` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
