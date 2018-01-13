-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 nov. 2017 à 14:37
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
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(75) DEFAULT NULL,
  `routeDoc` varchar(300) DEFAULT NULL,
  `id_fiche` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Ressource_id_Fiche` (`id_fiche`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`id`, `titre`, `routeDoc`, `fiche_id`) VALUES
(1, 'Ressource 1 ', './web/doc.pdf', 2),
(2, 'Ressource 2', '/img/', 1),
(3, 'Ressource 3', '/img/', 1),
(4, 'Ressource 4', '/img/', 2),
(5, 'Ressource 5', '/img/', 2),
(6, 'Ressource 6', '/img/', 3),
(7, 'Ressource 7', '/img/', 3),
(8, 'Ressource 8', '/img/', 4),
(9, 'Ressource 9', '/img/', 4),
(10, 'Ressource 10', '/img/', 5),
(11, 'Ressource 11', '/img/', 5),
(12, 'Ressource 12', '/img/', 6),
(13, 'Ressource 13', '/img/', 6),
(14, 'Ressource 14', '/img/', 7),
(15, 'Ressource 15', '/img/', 8);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_Ressource_id_Fiche` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
