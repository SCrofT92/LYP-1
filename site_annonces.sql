-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 sep. 2018 à 17:38
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
-- Base de données :  `site_annonces`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `systeme` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `stockage` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `couleur` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `accessoires` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `prix` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci,
  `images2` text COLLATE utf8_unicode_ci,
  `date` date NOT NULL,
  `author` int(11) NOT NULL DEFAULT '0',
  `enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `marque`, `model`, `systeme`, `stockage`, `couleur`, `accessoires`, `texte`, `prix`, `images`, `images2`, `date`, `author`, `enabled`) VALUES
(26, 'ACER ', 'Z6', 'ANDROID', '8GB', '', '', 'ACER-Z6-LIQUID-GOLD-DUAL-SIM-4G-5-8GB-8-2MP', '8', 'annonce_26.jpg', '0', '2018-07-07', 4, 1),
(29, 'HUAWEI', 'P10', 'Windows', '32Go', '', '', 'Huawei-P10-Lite-White', '12', 'annonce_29.jpg', '0', '2018-07-07', 4, 1),
(30, 'NOKIA', '6', 'Windows', '64Go', '', '', 'Nokia-6-Black-Precommande', '12', 'annonce_30.jpg', '0', '2018-07-07', 4, 1),
(31, 'SAMSUNG', 'A520', 'Windows', '32GB', '', '', 'SAMSUNG-A520-GALAXY-A5-2017-GOLD-4G-5-2-32GB-16-16MP', '12', 'annonce_31.jpg', '0', '2018-07-07', 4, 1),
(32, 'HONOR', '9', 'AndroÃ¯d', '32Go', '', '', 'Smartphone-Honor-9-Lite-Double-SIM-32-Go-Bleu', '7', 'annonce_32.jpg', '0', '2018-07-07', 4, 1),
(33, 'WIKO', 'View2 Pro', 'AndroÃ¯d', '64Go', '', '', 'Wiko View2 Pro Double SIM 64 Go Anthracite', '10', 'annonce_33.jpg', '0', '2018-07-07', 4, 1),
(34, 'SAMSUNG', 'Galaxy A8', 'Windows', '32Go', 'Rouge', 'chargeur, ecouteurs', 'Smartphone-Samsung-Galaxy-A8-Double-SIM-32-Go-Noir-Carbone', '12', 'annonce_34.jpg', '0', '2018-07-07', 4, 1),
(35, 'HUAWEI', 'Meizu PRO 7', 'AndroÃ¯d', '64Go', '', '', 'Smartphone-Meizu-PRO-7-Double-SIM-64-Go-Or', '12', 'annonce_35.jpg', '0', '2018-07-07', 4, 1),
(36, 'NOKIA', 'Sirocco 8', 'Windows', '128Go', '', '', 'Smartphone-Nokia-8-Sirocco-128-Go-Noir', '14', 'annonce_36.jpg', '0', '2018-07-07', 4, 1),
(37, 'HUAWEI', 'P9 Lite', 'AndroÃ¯d', '16Go', '', '', 'Smartphone-Huawei-P9-Lite-Double-SIM-16-Go-Or', '10', 'annonce_37.jpg', '0', '2018-07-07', 4, 1),
(48, 'Smartphone', 'Honor-9', 'windows', '32', 'noir', 'chargeur', 'Smartphone-Honor-9-Lite-Double-SIM-32-Go-Bleu', '10', 'annonce_1_48.jpg', 'annonce_2_48.jpg', '2018-07-17', 4, 1),
(53, 'nokia', 'N8', 'android', '32', 'noir', 'chargeur, Ã©couteur', 'fdsfds', '3', 'annonce_1_53.jpg', 'annonce_2_53.jpg', '2018-09-14', 4, 1),
(54, 'ASUS', 'Z3', 'android', '64', 'bleu', 'chargeur', '', '6', 'annonce_1_54.jpg', 'annonce_2_54.jpg', '2018-09-15', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mails` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(10) NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `mail`, `adresse`, `cp`, `ville`, `tel`, `mdp`, `lat`, `lon`) VALUES
(4, 'CrofT', 'Sandy', 'Admin', 'Sandycroft83@gmail.com', '10 rue Vaudetard', 92130, 'ISSY LES MOULINEAUX', 770515878, '$2y$10$EDsfbjlpuUi1Jca5ZVZtAuA8Eax32qXds1xSGpFw2PfiLKKEUc4zS', 48.8258, 2.27758),
(12, 'Schmidt', 'Maria', 'Partel', 'Schmidt.m@hotmail.fr', '31 avenue de Corbeil', 77000, 'Melun', 695562349, '$2y$10$aaaaaaaaaaaaaaaaaaaaaOSwCJT/0RUn9gg37zjPtUYnTum8K7sLy', 48.5471, 2.6464);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
