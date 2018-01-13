-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 nov. 2017 à 14:36
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
-- Structure de la table `fiche_tag`
--

DROP TABLE IF EXISTS `fiche_tag`;
CREATE TABLE IF NOT EXISTS `fiche_tag` (
  `tag_id` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL,
  PRIMARY KEY (`tag_id`,`id_fiche`),
  KEY `FK_fiche_tag_id_Fiche` (`id_fiche`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche_tag`
--

INSERT INTO `fiche_tag` (`tag_id`, `id_fiche`) VALUES
(2, 1),
(1, 2),
(4, 3),
(7, 3),
(6, 4),
(6, 5),
(6, 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fiche_tag`
--
ALTER TABLE `fiche_tag`
  ADD CONSTRAINT `FK_fiche_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `FK_fiche_tag_id_Fiche` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
