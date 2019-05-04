-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 14:29
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
-- Base de données :  `crud1`
--

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `cin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `datenaiss` date NOT NULL,
  `marque` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `numfournitures` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`cin`, `nom`, `prenom`, `datenaiss`, `marque`, `email`, `numfournitures`) VALUES
(80699, 'pooll', 'nizaaappaaaaaaaar', '2019-04-08', 'Schwarzkmmophaaaaa', 'nizar.benhmida@esprit.tn', '0'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999'),
(16, 'ya7ya', 'tahri', '2019-04-04', 'LG', 'nassim@email.com', '0'),
(33, 'okpokp', 'tahri', '2019-04-02', 'Nivea', 'nizar.benhmida@esprit.tn', '0'),
(33, 'okpokp', 'tahri', '2019-04-02', 'Nivea', 'nizar.benhmida@esprit.tn', '0'),
(11, 'Nizar', 'karimeee', '2019-04-11', 'Schwarzkoph', 'nassim@email.com', '0'),
(388787, 'haizhiaz', 'karimaeaze', '2019-04-22', 'ARVEA', 'nassim566@email.com', '0'),
(8965523, 'Ben yyyyyy', 'Hatemaazzaz', '2019-04-18', 'Channel', 'nizarbenhmida001@gmail.com', '0'),
(8965523, 'Ben yyyyyy', 'Hatemaazzaz', '2019-04-18', 'Channel', 'nizarbenhmida001@gmail.com', '0'),
(877, 'Nizar', 'tahri', '2019-04-04', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(7455, 'ahmed', 'lab', '2019-04-24', 'LG', 'nassim@email.com', '0'),
(10, 'abdesslem', 'smirani', '2019-06-17', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(10, 'azzazuhhu', 'Testman', '2019-04-16', 'ARVEA', 'nizarbenhmida001@gmail.com', '0'),
(89756, 'Nizar', 'Nizar', '2019-04-03', 'Arvea', 'nizarbenhmida001@gmail.com', '0'),
(8975699, 'Nizar', 'Nizar', '2019-04-03', 'Arvea', 'nizar.benhmida@esprit.tn', '0'),
(10, 'Nizar', 'tahri', '2019-05-06', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(10, 'Nizar', 'tahri', '2019-05-06', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(10, 'Nizar', 'tahri', '2019-05-06', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(10, 'Nizar', 'tahri', '2019-05-06', 'LG', 'nizarbenhmida001@gmail.com', '0'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999'),
(6, 'Nizar', 'tahri', '2019-05-27', 'ARVEAaaa', 'nizarbenhmida001@gmail.com', '9999');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(924849, 'Arvea'),
(6, 'pipppo'),
(78, 'Nivea'),
(714, 'LG'),
(966, 'Clear'),
(10, 'Channel'),
(7899, 'Arveaa');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(12) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `marque` text NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `nom`, `categorie`, `prix`, `quantite`, `image`, `marque`) VALUES
('1', 'dddd', 'corps', 55, 55, '8.jpg', ''),
('1256', 'lllll', 'corps', 145, 555, 'b3.jpg', ''),
('7887878', 'pommade', 'cosmetique', 30000, 29, 'aa', 'Arvea'),
('87878', 'hihihhi', 'zazazazaz', 888, 1, 'aaaa', 'arvea');

-- --------------------------------------------------------

--
-- Structure de la table `stat`
--

DROP TABLE IF EXISTS `stat`;
CREATE TABLE IF NOT EXISTS `stat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salaire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stat`
--

INSERT INTO `stat` (`id`, `salaire`) VALUES
(1, 750),
(2, 950),
(6, 780),
(5, 560),
(7, 560),
(8, 780),
(9, 520),
(10, 250),
(11, 520),
(12, 250);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1709 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123', '2016-04-12 20:57:17', 'Admin'),
(2, 'Amina', 'amina@esprit.tn', 'bbb', '2016-04-12 21:21:42', 'Client'),
(1708, 'Nizar', 'nizar.benhmida@esprit.tn', '1708', '2019-04-29 01:38:48', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
