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
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) DEFAULT NULL,
  `contenu` varchar(700) DEFAULT NULL,
  `date_com` date DEFAULT NULL,
  `id_fiche` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_commentaire_id_Fiche` (`id_fiche`),
  KEY `FK_commentaire_id_Membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_membre`, `contenu`, `date_com`, `id_fiche`) VALUES
(1, 1, 'Très bonne fiche, Le cours à été très interessant.', '2017-11-11', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_commentaire_id_Fiche` FOREIGN KEY (`id_fiche`) REFERENCES `fiche` (`id`),
  ADD CONSTRAINT `FK_commentaire_id_Membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
