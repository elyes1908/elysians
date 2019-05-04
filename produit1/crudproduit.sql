-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 04 Mai 2019 à 14:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `crudproduit`
--

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
('12025', 'corps'),
('12036', 'visage'),
('996', 'cheveux');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` text NOT NULL,
  `solde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `solde`) VALUES
('5', 1439);

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `num` bigint(12) NOT NULL,
  `montant` int(11) NOT NULL,
  `validite` int(1) NOT NULL DEFAULT '0',
  `dateAjout` date NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `code`
--

INSERT INTO `code` (`num`, `montant`, `validite`, `dateAjout`) VALUES
(123456789000, 150, 1, '2019-04-18'),
(123456789012, 300, 1, '2019-04-29'),
(222222222222, 30, 1, '2019-04-10'),
(333333333333, 60, 1, '2019-04-10'),
(444444444444, 99, 1, '2019-04-10'),
(987456321012, 200, 1, '2019-04-29');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'Mohamed Mohamed', 'mohamed.mohamed@gmail.com', '24159753', 'laaouina , tunis , tunisie', '2019-03-29 14:21:44', '2019-03-29 14:21:44', '1');

-- --------------------------------------------------------

--
-- Structure de la table `date_test`
--

CREATE TABLE IF NOT EXISTS `date_test` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `deb` date NOT NULL,
  `fin` date NOT NULL,
  `cap` int(11) NOT NULL,
  `des` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `date_test`
--

INSERT INTO `date_test` (`id`, `titre`, `deb`, `fin`, `cap`, `des`, `image`) VALUES
(1, 'Beauty color Africa', '2019-05-08', '2019-05-29', 0, 'amal', ''),
(2, 'Beauty influence', '2019-05-02', '2019-05-24', 37, 'La beautÃ© d''une tunisienne', 'ch1.jpg'),
(3, 'POP your beauty', '2019-04-11', '2019-04-25', 10, 'votre festival de beautÃ© et bien etre !', 'pop.jpg'),
(4, 'Fruity Beauty', '2019-04-29', '2019-04-30', 9, 'juicy, colorful, fruity, lip care collection!', 'LipsEvent_Invite.jpg'),
(120, 'beauty influence', '2019-04-29', '2019-04-30', 14, 'a', '56260445_848121498871538_5251554004281851904_n.jpg'),
(555, 'essai', '2019-05-01', '2019-05-16', 37, 'essai', '8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `cin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `dis` datetime NOT NULL,
  `nbHeures` float NOT NULL,
  `tarifHoraire` float NOT NULL,
  `salaire` float NOT NULL,
  PRIMARY KEY (`cin`),
  KEY `specialite` (`specialite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `specialite`, `image`, `dis`, `nbHeures`, `tarifHoraire`, `salaire`) VALUES
(1, '1', '1', 'corps', '1', '0000-00-00 00:00:00', 1, 1, 1),
(11660278, 'tarmiz', 'sofiene', 'corps', 'pc.jpg', '0000-00-00 00:00:00', 5, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

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
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`cin`, `nom`, `prenom`, `datenaiss`, `marque`, `email`, `numfournitures`) VALUES
(8975699, 'abdou', 'testtt', '2019-04-03', 'Arvea', 'a.a@esprit.tn', 'nizar.benhmida@esprit.tn'),
(125, 'jkkkl', 'jjjjjjj', '2013-03-01', 'hgfds', 'a.aaaaa@dd.com', '1023185');

-- --------------------------------------------------------

--
-- Structure de la table `google_users`
--

CREATE TABLE IF NOT EXISTS `google_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=26 ;

--
-- Contenu de la table `google_users`
--

INSERT INTO `google_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(24, 'FERCHICHI Louay', 'louay.ferchichi@esprit.tn', NULL, NULL, NULL, NULL, '115290186124217458731'),
(25, 'Louay Ferchichi', 'ferchichi.louay.l.f@gmail.com', NULL, NULL, NULL, NULL, '117734424701835484260');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marque`
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
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `motdepasse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `pseudo`, `mail`, `motdepasse`, `image`) VALUES
(1, 'loulou', 'elyes.tarmiz@esprit.tn', '9adcb29710e807607b683f62e555c22dc5659713', ''),
(2, 'amal', 'amal.essid@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(3, 'loulouu', 'elyees.tarmiz@esprit.tn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '56260445_848121498871538_5251554004281851904_n.jpg'),
(4, 'amal', 'amal.essid@esprit.tn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '55564438_2072805179683467_6413279551895371776_n.jpg'),
(5, 'elyes', 'elyes.elyes@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '48385806_355047051895098_2596577858105114624_n.jpg'),
(10, 'chadha', 'chadhachadha2000@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '55564438_2072805179683467_6413279551895371776_n.jpg'),
(12, 'marwa', 'marwa@yahoo.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '56260445_848121498871538_5251554004281851904_n.jpg'),
(13, 'fedi', 'fedi@fedi.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '56260445_848121498871538_5251554004281851904_n.jpg'),
(14, 'ff', 'f.s@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40.jpg'),
(15, 'll', 'll.ll@gmail.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ba11.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mobile_numbers`
--

CREATE TABLE IF NOT EXISTS `mobile_numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=Verified, 0=Not verified',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `mobile_numbers`
--

INSERT INTO `mobile_numbers` (`id`, `mobile_number`, `verification_code`, `verified`) VALUES
(1, '29229225', '64579', 0),
(2, '58444563', '58493', 0),
(3, '56161414', '24128', 0);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(12, 1, 450.00, '2019-04-30 00:00:00', '2019-04-30 00:00:00', 1),
(13, 1, 150.00, '2019-04-22 14:25:53', '2019-04-22 14:25:53', 1),
(14, 1, 194.00, '2019-04-25 14:40:16', '2019-04-25 14:40:16', 1),
(15, 1, 44.00, '2019-04-25 15:02:31', '2019-04-25 15:02:31', 1),
(16, 1, 44.00, '2019-04-25 15:29:44', '2019-04-25 15:29:44', 1),
(17, 1, 150.00, '2019-04-25 15:30:56', '2019-04-25 15:30:56', 1),
(18, 1, 400.00, '2019-04-26 10:48:18', '2019-04-26 10:48:18', 1),
(22, 1, 55.00, '2019-04-28 00:00:00', '2019-04-28 00:00:00', 1),
(23, 1, 110.00, '2019-05-01 15:29:18', '2019-05-01 15:29:18', 1),
(24, 1, 60.00, '2019-05-01 16:20:44', '2019-05-01 16:20:44', 1);

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Contenu de la table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(13, 12, 2, 1),
(14, 13, 2, 1),
(15, 14, 1, 1),
(16, 14, 2, 1),
(17, 15, 1, 1),
(18, 16, 1, 1),
(19, 17, 2, 1),
(20, 18, 1256, 2),
(21, 18, 1, 2),
(28, 22, 1, 1),
(29, 23, 1, 2),
(30, 24, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

CREATE TABLE IF NOT EXISTS `participe` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `participe`
--

INSERT INTO `participe` (`id`, `user_id`) VALUES
(2, 2),
(2, 55560),
(555, 55560);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'Produit 1', 'aqwzsxedcrfvtgbyhnujikolmpmaqwzsxedcrfvtgby\r\n\r\nhhhdsfdsfdsfdff', 44.00, '2019-03-29 14:20:44', '2019-03-29 14:20:44', '1'),
(2, 'Produit 2 ', 'aqwzsxedcrfvtgbyhnujikolmpmaqwzsxedcrfvtgby\r\n\r\nhhhdsfdsfdsfdff', 150.00, '2019-03-29 14:20:44', '2019-03-29 14:20:44', '1');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(12) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `prix_solde` int(10) unsigned DEFAULT NULL,
  `id_promo` int(10) unsigned DEFAULT NULL,
  `fin_p` date DEFAULT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`reference`, `nom`, `categorie`, `marque`, `prix`, `quantite`, `image`, `prix_solde`, `id_promo`, `fin_p`) VALUES
('1', 'test', 'corps', 'Arvea', 20, 12, '8.jpg', 12, 25, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `id_promo` int(11) NOT NULL,
  `deb_p` date NOT NULL,
  `fin_p` date NOT NULL,
  `taux` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `promo`
--

INSERT INTO `promo` (`id_promo`, `deb_p`, `fin_p`, `taux`, `image`) VALUES
(25, '2019-04-29', '2019-05-30', 40, '40.jpg'),
(200, '2019-04-25', '2019-05-25', 20, ''),
(201, '2019-05-02', '2019-05-30', 25, '8.jpg'),
(250, '2019-05-03', '2019-05-14', 50, '');

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_produit` varchar(11) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`,`id_produit`),
  KEY `id_user_2` (`id_user`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `rate`
--

INSERT INTO `rate` (`id`, `id_user`, `id_produit`, `etat`) VALUES
(41, 55560, '1', -1);

-- --------------------------------------------------------

--
-- Structure de la table `soins`
--

CREATE TABLE IF NOT EXISTS `soins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=858 ;

--
-- Contenu de la table `soins`
--

INSERT INTO `soins` (`id`, `nom`, `type`, `image`, `prix`) VALUES
(55, 'ii', '', 'ggg', 0),
(550, 'ii', '', 'ggg', 77),
(857, 'rth', '', 'ch1.jpg', 20);

-- --------------------------------------------------------

--
-- Structure de la table `stat`
--

CREATE TABLE IF NOT EXISTS `stat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salaire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `stat`
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
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'corps'),
(2, 'visage');

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
  `pts_fid` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55564 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`, `pts_fid`) VALUES
(2, 'abdou', 'abdessalem.smirani@esprit.tn', '123', '2019-04-20 10:46:09', 'client', 0),
(120, 'admin', 'admin.admin@admin.tn', '123', '2019-04-24 12:01:24', 'admin', 0),
(55560, 'abdessalem', 'abdessalemsmirani1998@gmail.com', '0000', '2019-04-19 23:00:00', 'client', 0),
(55561, 'abdou1999', 'abdessalemsmirani1998@gmail.com', '0123', '0000-00-00 00:00:00', 'client', 0),
(55562, 'louay', 'louay@espr.vv', '123', '0000-00-00 00:00:00', 'ckieo', 0),
(55563, 'karim', 'abdessalemsmirani1998@gmail.com', '123', '2019-04-27 23:00:00', 'clien', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`specialite`) REFERENCES `type` (`nom`);

--
-- Contraintes pour la table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
