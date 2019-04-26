-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Avril 2019 à 12:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

CREATE TABLE IF NOT EXISTS `affectation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soin` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `soin` (`soin`),
  KEY `date` (`date`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idC` varchar(255) NOT NULL,
  `nomC` varchar(255) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idC`, `nomC`) VALUES
('213548', 'ytre'),
('5568', 'visage'),
('965', 'corps'),
('996', 'cheveux');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `cin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `nbHeures` int(11) NOT NULL,
  `tarifHoraire` int(11) NOT NULL,
  PRIMARY KEY (`cin`),
  KEY `specialite` (`specialite`),
  KEY `nom` (`nom`),
  KEY `tarifHoraire` (`tarifHoraire`),
  KEY `nbHeures` (`nbHeures`),
  KEY `prenom` (`prenom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `specialite`, `image`, `nbHeures`, `tarifHoraire`) VALUES
(1321480, 'elyes', 'tarmiz', 'corps', 'yts,h,y', 3, 15);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  UNIQUE KEY `user_id` (`pid`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(12) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`reference`, `nom`, `categorie`, `prix`, `quantite`, `image`) VALUES
('11', 'mm', 'cheveux', 8, 55, 'b5.jpg'),
('12', 'mm', 'cheveux', 8, 55, 'b5.jpg'),
('123', 'fefe', 'Homme', 20, 20, 'crud (1).sql'),
('13', 'mm', 'cheveux', 8, 55, 'b5.jpg'),
('14', 'mml', 'cheveux', 78, 10, 'b2.jpg'),
('15', 'mm', 'cheveux', 1, 11, '8.jpg'),
('17', 'lll', 'cheveux', 55, 55, 'b1.jpg'),
('19', 'lll', 'cheveux', 55, 55, 'b1.jpg'),
('2', 'lllllll', 'cheveux', 55, 55, '11.jpg'),
('20', 'lgfbg', 'cheveux', 11, 11, 'b2.jpg'),
('21', 'mm', 'cheveux', 55, 55, 'b2.jpg'),
('22', 'pmmm', 'cheveux', 11, 11, 'b2.jpg'),
('3', 'lllllll', 'cheveux', 55, 55, '11.jpg'),
('4', 'lllllll', 'cheveux', 55, 55, '11.jpg'),
('5', 'lllllll', 'cheveux', 55, 55, '11.jpg'),
('54', 'mdd', 'cheveux', 252, 22, ''),
('55', 'pm', 'cheveux', 54, 45, 'b3.jpg'),
('6', 'mm', 'cheveux', 7, 788, 'b3.jpg'),
('7', 'll', 'cheveux', 2, 22, 'b1.jpg'),
('8', 'mmm', 'cheveux', 7, 77, ''),
('9', 'll', 'cheveux', 2, 22, 'b1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE IF NOT EXISTS `rendezvous` (
  `IDrdv` int(11) NOT NULL,
  `nomClient` varchar(200) NOT NULL,
  `prenomClient` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `soin` varchar(255) NOT NULL,
  PRIMARY KEY (`IDrdv`),
  KEY `nomClient` (`nomClient`),
  KEY `prenomClient` (`prenomClient`),
  KEY `date` (`date`),
  KEY `soin` (`soin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rendezvous`
--

INSERT INTO `rendezvous` (`IDrdv`, `nomClient`, `prenomClient`, `date`, `soin`) VALUES
(0, 'amall', 'amal', '2019-04-04', 'corps'),
(1, 'amal', 'amal', '2019-04-04', 'visage');

-- --------------------------------------------------------

--
-- Structure de la table `soins`
--

CREATE TABLE IF NOT EXISTS `soins` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `soins`
--

INSERT INTO `soins` (`id`, `nom`, `type`, `image`, `prix`) VALUES
(6, 'Tarree', 'corps', 'swekey.sample.conf', 45),
(12, 'Tarmie', 'visage', 'swekey.sample.conf', 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55564 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1999, 'abdou', 'abdessalem.smirani@esprit.tn', '123', '2019-04-20 10:46:09', 'client'),
(55562, 'smirani', 'abdessalemsmirani1998@gmail.com', '123', '0000-00-00 00:00:00', 'client'),
(55561, 'abdou1999', 'abdessalemsmirani1998@gmail.com', '0123', '0000-00-00 00:00:00', 'client'),
(55560, 'abdessalem', 'abdessalemsmirani1998@gmail.com', '0000', '2019-04-19 23:00:00', 'client'),
(55563, 'elyes', 'elyes.tarmiz@esprit.tn', 'elyes', '2019-04-13 23:00:00', 'admin');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `affectation`
--
ALTER TABLE `affectation`
  ADD CONSTRAINT `affectation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `rendezvous` (`IDrdv`),
  ADD CONSTRAINT `affectation_ibfk_2` FOREIGN KEY (`soin`) REFERENCES `rendezvous` (`soin`),
  ADD CONSTRAINT `affectation_ibfk_3` FOREIGN KEY (`date`) REFERENCES `rendezvous` (`date`),
  ADD CONSTRAINT `affectation_ibfk_4` FOREIGN KEY (`nom`) REFERENCES `employe` (`nom`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`specialite`) REFERENCES `soins` (`type`);

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`soin`) REFERENCES `soins` (`type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
