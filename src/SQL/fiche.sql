-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 nov. 2017 à 14:03
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
-- Structure de la table `fiche`
--

DROP TABLE IF EXISTS `fiche`;
CREATE TABLE IF NOT EXISTS `fiche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(100) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `duree` varchar(25) DEFAULT NULL,
  `difficulte` varchar(50) DEFAULT NULL,
  `note` smallint(6) DEFAULT NULL,
  `auteur` int(11) DEFAULT NULL,
  `nb_ressource` int(11) DEFAULT NULL,
  `nb_commentaire` int(11) DEFAULT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Fiche_id_Groupe` (`groupe_id`),
  KEY `FK_Fiche_auteur` (`auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche`
--

INSERT INTO `fiche` (`id`, `theme`, `titre`, `description`, `date_creation`, `duree`, `difficulte`, `note`, `auteur`, `nb_ressource`, `nb_commentaire`, `groupe_id`) VALUES
(1, 'Cours de Mathématique', 'Le théoreme de Thales', 'Si les rapports et sont égaux, alors les droites (DE) et (BC) sont parallèles. La démonstration de cette réciproque se déduit du théorème. En effet, considérons un point E\' du segment [AC] tel que (DE\') soit parallèle à (BC). Alors les points A, E\' et C sont alignés dans cet ordre', '2017-11-11', '1h45', 'moyen', 4, 1, 2, 3, 1),
(2, 'Cours de Philosophie', 'Le prince de Machiavel', 'En se réveillant un matin après des rêves agités, Gregor Samsa se retrouva, dans son lit, métamorphosé en un monstrueux insecte. Il était sur le dos, un dos aussi dur qu’une carapace, et, en relevant un peu la tête, il vit, bombé, brun, cloisonné par des arceaux plus rigides, son abdomen sur le haut duquel la couverture, prête à glisser tout à fait, ne tenait plus qu’à peine. Ses nombreuses pattes, lamentablement grêles par comparaison avec la corpulence qu’il avait par ailleurs, grouillaient désespérément sous ses yeux.« Qu’est-ce qui m’est arrivé ? » pensa-t-il.', '2017-11-10', '1h30', 'facile', 3, 1, 5, 4, 1),
(3, 'Cours de Physique', 'La physique quantique', 'Elle marque une rupture avec la physique dite «classique ». Elle décrit le monde de l?infiniment petit à l?échelle des atomes et des particules.', '2017-11-11', '2h00', 'Difficile', 4, 1, 2, 1, 1),
(4, 'Cours de théâtre', 'Le paraître', 'Tous mes sens sont émus d\'une volupté douce et pure, comme l\'haleine du matin dans cette saison délicieuse. Seul, au milieu d\'une contrée qui semble fait exprès pour un coeur tel que mien, j\'y goûte à longs traits l\'ivresse de la vie. Je suis si heureux, mon ami, si absorbé dans le sentiment de ma paisible existence, que mon art en souffre. Incapable de dessiner le mointre trait, la plus faible ébauche, jamais pourtant je ne fus si grand peintre. Quand mon vallon chéri se couvre autour de moi d\'une légère vapeur;', '2017-11-14', '1h10', 'Moyen', 4, 1, 2, 1, 2),
(5, 'Cours de Grec', 'La mythologie', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. ', '2017-11-14', '2h00', 'Difficile', 4, 1, 1, 1, 2),
(6, 'Cours de musique', 'La 5ème Symphonie de Beethoven', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. ', '2017-11-13', '1h30', 'Facile', 5, 1, 1, 1, 2),
(7, 'Cours de Yoga', 'Ouverture des chakras', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. ', '2017-11-13', '2h30', 'Moyen', 5, 1, 2, 1, 2),
(8, 'Cours de Français', 'Les fourberies de Scapin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. ', '2017-11-13', '3h00', 'Moyen', 2, 1, 1, 2, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD CONSTRAINT `FK_Fiche_id_groupe` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `FK_Fiche_auteur` FOREIGN KEY (`auteur`) REFERENCES `membre` (`compte_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
