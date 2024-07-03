-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 juin 2024 à 15:09
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `seraphinparysfilrougemotdepasse`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `codec` int NOT NULL COMMENT 'Identifiant du client',
  `nom` varchar(35) NOT NULL COMMENT 'Nom du client',
  `prenom` varchar(35) NOT NULL COMMENT 'Prénom du client',
  `adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse du client',
  `cp` varchar(5) NOT NULL COMMENT 'Code postal ',
  `ville` varchar(25) NOT NULL COMMENT 'Ville',
  `telephone` varchar(25) DEFAULT NULL COMMENT 'Téléphone principal du client',
  `motdepasse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`codec`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `telephone`, `motdepasse`, `email`) VALUES
(17, 'TARINAUX', 'Lucien', '12 rue de la Justice', '51100', 'REIMS', '03.26.25.48.87', '$2b$10$BW7x1o4bnk9jKsPEwJqDOe5rVIWyMQsRVN5WQ.dpnDOSAGW43/t1a', 'joris36.lacassaigne@gmail.com'),
(46, 'MARTUSE', ' Marie', '103 avenue Lear', '51100', 'REIMS', '03.26.03.25.26', '', NULL),
(47, 'RABIN', ' Sandrine', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.14.15.25', '', NULL),
(48, 'SILLARD', ' Laurence', '15 rue Pasentiers', '51100', 'REIMS', '03.26.11.11.25', '', NULL),
(49, 'COTOY', ' Sylvie', '12 rue des écus', '51100', 'REIMS', '03.26.10.25.75', '', NULL),
(50, 'HELLOU', ' Bernard', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.12.25.42', '', NULL),
(51, 'HENTION', ' Martine', '50 allÃ©e des bons enfants', '51100', 'REIMS', '03.26.12.25.86', '', NULL),
(52, 'SIBAT', ' Evelyne', '14 rue de la Baltique', '51100', 'REIMS', '03.26.12.23.33', '', NULL),
(53, 'MARIN', ' Dominique', '24 rue de la Baltique', '51100', 'REIMS', '03.26.10.10.23', '', NULL),
(54, 'DURDUX', ' Monique', '15 allée des Béarnais', '51150', 'VITRY LE FRANCOIS', '03.26.42.42.33', '', NULL),
(55, 'CANILLE', ' Walter', '14 rue Lanterneau', '51100', 'REIMS', '03.26.12.12.87', '', NULL),
(56, 'BOUQUET', ' Antoinette', '1, rue de la Méditerranée', '51140', 'ROMAIN', '03.26.78.89.54', '', NULL),
(57, 'GAUTON', ' Nadine', '5 place des Oiseaux', '51200', 'FISMES', '03.26.53.56.55', '', NULL),
(58, 'LEGROS', ' Christian', '18 place des Oiseaux', '51200', 'FISMES', '03.26.44.55.66', '', NULL),
(59, 'DUMOITIERS', ' Lucille', '12 place Centrale', '02320', 'LONGUEVAL', '03.26.86.43.25', '', NULL),
(60, 'BOUCHE', ' Carole', '4, rue Brulé', '51200', 'FISMES', '03.26.33.96.85', '', NULL),
(61, 'Renaud', ' Olivier', '8 rue de la république', '36000', 'Déols', '', '', NULL),
(63, 'Didier', ' Oui', '14 rue de l\'impasse', '87000', 'Ailleurs', '06 99 99 99 01', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numero` int NOT NULL COMMENT 'Numéro de la commande',
  `codev` int NOT NULL COMMENT 'Indiquer le vendeur',
  `codec` int NOT NULL COMMENT 'Indiquer le client',
  `dateLivraison` datetime DEFAULT NULL COMMENT 'Indiquer la date de livraison',
  `dateCommande` datetime DEFAULT NULL COMMENT 'Indiquer la date de commande',
  `totalHT` double DEFAULT '0' COMMENT 'Total facture hors taxes',
  `totalTVA` double DEFAULT '0' COMMENT 'Total tva',
  `etat` tinyint UNSIGNED DEFAULT '0' COMMENT '0 stock non actualisé 1 stock MAJ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numero`, `codev`, `codec`, `dateLivraison`, `dateCommande`, `totalHT`, `totalTVA`, `etat`) VALUES
(10178, 15, 47, '1998-09-05 00:00:00', '2008-09-05 00:00:00', 177, 9.75, 1),
(10179, 15, 47, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 192, 10.5, 1),
(10180, 15, 48, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 98, 5.4, 1),
(10181, 15, 49, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 175, 9.6, 1),
(10182, 15, 50, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 116, 6.4, 1),
(10183, 15, 51, '1998-10-11 00:00:00', '2008-10-11 00:00:00', 118, 6.5, 1),
(10184, 15, 52, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 102, 5.6, 1),
(10185, 15, 53, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 19, 1.05, 1),
(10186, 15, 54, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 101, 5.555, 1),
(10187, 15, 55, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 65, 3.575, 1),
(10188, 17, 56, '1998-10-12 00:00:00', '2008-10-12 00:00:00', 121, 6.655, 1),
(10189, 17, 57, '1998-10-10 00:00:00', '2008-10-10 00:00:00', 110, 6.05, 1),
(10190, 17, 58, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 123, 6.765, 1),
(10191, 17, 59, '1998-10-13 00:00:00', '2008-10-13 00:00:00', 107.5, 5.9125, 1),
(10192, 17, 60, '1998-11-10 00:00:00', '2008-11-10 00:00:00', 237, 13.035, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id_membre` int NOT NULL,
  `nom_membre` varchar(50) DEFAULT NULL,
  `prenom_membre` varchar(50) DEFAULT NULL,
  `avatar_membre` varchar(250) DEFAULT NULL,
  `poste_membre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_membre`, `nom_membre`, `prenom_membre`, `avatar_membre`, `poste_membre`) VALUES
(1, 'Lerat', 'Remi', 'public/img/remi.jpg', 'Directeur'),
(2, 'Ramsey', 'Gordon', 'public/img/ramsey.jpg', 'Responsable qualité'),
(3, 'Von Schwetz', 'Vanellope', 'public/img/vanellope.jpg', 'Vendeur'),
(4, 'Exo', 'Dreadon', 'public/img/dreadon.jpg', 'Comptable'),
(5, 'Le', 'Parrain', 'public/img/parrain.jpg', 'Magasinier');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `codei` int NOT NULL,
  `designation` varchar(50) NOT NULL,
  `produit` int NOT NULL,
  `quantite` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`codei`, `designation`, `produit`, `quantite`) VALUES
(1, 'Lait', 1004, 1),
(2, 'Lait', 1007, 1),
(3, 'Lait', 1015, 1),
(4, 'Lait', 1016, 1),
(5, 'Lait', 1017, 1),
(6, 'Lait', 3002, 1),
(7, 'Lait', 3004, 1),
(8, 'Lait', 3010, 2),
(9, 'Lait', 3016, 2),
(10, 'Lait', 3017, 2),
(11, 'Lait', 4002, 2),
(12, 'Lait', 4004, 3),
(13, 'Lait', 4010, 3),
(14, 'Lait', 4011, 3),
(15, 'Lait', 4012, 3),
(16, 'Lait', 4013, 4),
(17, 'Lait', 4015, 4),
(18, 'Lait', 4016, 4),
(19, 'Lait', 4019, 4),
(20, 'Lait', 4020, 5),
(21, 'Lait', 4022, 5),
(22, 'Lait', 4025, 5),
(23, 'Lait', 4026, 5),
(24, 'Lait', 4027, 6),
(25, 'Lait', 4029, 6),
(26, 'Lait', 4030, 6),
(27, 'Lait', 4031, 6),
(28, 'Lait', 4032, 7),
(29, 'Lait', 4033, 7),
(30, 'Lait', 4034, 7),
(31, 'Lait', 4036, 7),
(32, 'Lait', 4037, 8),
(33, 'Lait', 4039, 8),
(34, 'Lait', 4042, 8),
(35, 'Lait', 4045, 8),
(36, 'Lait', 4052, 9),
(37, 'Lait', 4053, 9),
(38, 'Lait', 4054, 9),
(39, 'Lait', 4055, 9),
(40, 'Lait', 4057, 10),
(42, 'Beurre', 1004, 150),
(43, 'Beurre', 1007, 150),
(44, 'Beurre', 1015, 150),
(45, 'Beurre', 1016, 150),
(46, 'Beurre', 1017, 150),
(47, 'Beurre', 3002, 200),
(48, 'Beurre', 3004, 200),
(49, 'Beurre', 3010, 200),
(50, 'Beurre', 3016, 200),
(51, 'Beurre', 3017, 200),
(52, 'Beurre', 4002, 200),
(53, 'Beurre', 4004, 200),
(54, 'Beurre', 4010, 200),
(55, 'Beurre', 4011, 200),
(56, 'Beurre', 4012, 225),
(57, 'Beurre', 4013, 225),
(58, 'Beurre', 4015, 225),
(59, 'Beurre', 4016, 225),
(60, 'Beurre', 4019, 225),
(61, 'Beurre', 4020, 225),
(62, 'Beurre', 4022, 225),
(63, 'Beurre', 4025, 225),
(64, 'Beurre', 4026, 225),
(65, 'Beurre', 4027, 225),
(66, 'Beurre', 4029, 225),
(67, 'Beurre', 4030, 225),
(68, 'Beurre', 4031, 225),
(69, 'Beurre', 4032, 225),
(70, 'Beurre', 4033, 250),
(71, 'Beurre', 4034, 250),
(72, 'Beurre', 4036, 250),
(73, 'Beurre', 4037, 250),
(74, 'Beurre', 4039, 250),
(75, 'Beurre', 4042, 250),
(76, 'Beurre', 4045, 250),
(77, 'Beurre', 4052, 250),
(78, 'Beurre', 4053, 250),
(79, 'Beurre', 4054, 250),
(80, 'Beurre', 4055, 250),
(81, 'Beurre', 4057, 250),
(83, 'Farine', 1004, 400),
(84, 'Farine', 1007, 400),
(85, 'Farine', 1015, 400),
(86, 'Farine', 1016, 400),
(87, 'Farine', 1017, 400),
(88, 'Farine', 3002, 400),
(89, 'Farine', 3004, 400),
(90, 'Farine', 3010, 400),
(91, 'Farine', 3016, 400),
(92, 'Farine', 3017, 400),
(93, 'Farine', 4002, 400),
(94, 'Farine', 4004, 400),
(95, 'Farine', 4010, 400),
(96, 'Farine', 4011, 500),
(97, 'Farine', 4012, 500),
(98, 'Farine', 4013, 500),
(99, 'Farine', 4015, 500),
(100, 'Farine', 4016, 500),
(101, 'Farine', 4019, 500),
(102, 'Farine', 4020, 500),
(103, 'Farine', 4022, 500),
(104, 'Farine', 4025, 500),
(105, 'Farine', 4026, 500),
(106, 'Farine', 4027, 500),
(107, 'Farine', 4029, 500),
(108, 'Farine', 4030, 500),
(109, 'Farine', 4031, 500),
(110, 'Farine', 4032, 500),
(111, 'Farine', 4033, 500),
(112, 'Farine', 4034, 600),
(113, 'Farine', 4036, 600),
(114, 'Farine', 4037, 600),
(115, 'Farine', 4039, 600),
(116, 'Farine', 4042, 600),
(117, 'Farine', 4045, 600),
(118, 'Farine', 4052, 600),
(119, 'Farine', 4053, 600),
(120, 'Farine', 4054, 600),
(121, 'Farine', 4055, 600),
(122, 'Farine', 4057, 600),
(124, 'Oeuf', 1004, 4),
(125, 'Oeuf', 1007, 4),
(126, 'Oeuf', 1015, 4),
(127, 'Oeuf', 1016, 4),
(128, 'Oeuf', 1017, 1),
(129, 'Oeuf', 3002, 1),
(130, 'Oeuf', 3004, 1),
(131, 'Oeuf', 3010, 1),
(132, 'Oeuf', 3016, 1),
(133, 'Oeuf', 3017, 1),
(134, 'Oeuf', 4002, 5),
(135, 'Oeuf', 4004, 5),
(136, 'Oeuf', 4010, 5),
(137, 'Oeuf', 4011, 5),
(138, 'Oeuf', 4012, 2),
(139, 'Oeuf', 4013, 2),
(140, 'Oeuf', 4015, 2),
(141, 'Oeuf', 4016, 2),
(142, 'Oeuf', 4019, 2),
(143, 'Oeuf', 4020, 2),
(144, 'Oeuf', 4022, 6),
(145, 'Oeuf', 4025, 6),
(146, 'Oeuf', 4026, 6),
(147, 'Oeuf', 4027, 6),
(148, 'Oeuf', 4029, 6),
(149, 'Oeuf', 4030, 6),
(150, 'Oeuf', 4031, 6),
(151, 'Oeuf', 4032, 3),
(152, 'Oeuf', 4033, 3),
(153, 'Oeuf', 4034, 3),
(154, 'Oeuf', 4036, 3),
(155, 'Oeuf', 4037, 3),
(156, 'Oeuf', 4039, 3),
(157, 'Oeuf', 4042, 3),
(158, 'Oeuf', 4045, 3),
(159, 'Oeuf', 4052, 3),
(160, 'Oeuf', 4053, 3),
(161, 'Oeuf', 4054, 3),
(162, 'Oeuf', 4055, 3),
(163, 'Oeuf', 4057, 3),
(165, 'Chocolat', 1004, 300),
(167, 'Chocolat', 1015, 300),
(168, 'Pépites de chocolat', 1016, 300),
(169, 'Chocolat', 1017, 300),
(170, 'Chocolat', 3002, 300),
(171, 'Chocolat', 3004, 300),
(172, 'Chocolat', 3010, 300),
(173, 'Chocolat', 3016, 300),
(174, 'Chocolat', 3017, 300),
(175, 'Chocolat', 4002, 300),
(176, 'Pépites de chocolat', 4004, 300),
(177, 'Chocolat', 4010, 300),
(178, 'Chocolat', 4011, 300),
(179, 'Chocolat', 4012, 400),
(180, 'Chocolat', 4013, 400),
(181, 'Chocolat', 4015, 400),
(182, 'Chocolat', 4016, 400),
(183, 'Pépites de chocolat', 4019, 400),
(184, 'Chocolat', 4020, 400),
(185, 'Chocolat', 4022, 400),
(186, 'Chocolat', 4025, 400),
(187, 'Chocolat', 4026, 400),
(188, 'Chocolat', 4027, 400),
(189, 'Chocolat', 4029, 400),
(190, 'Chocolat', 4030, 400),
(191, 'Chocolat', 4031, 400),
(192, 'Chocolat', 4032, 400),
(193, 'Pépites de chocolat', 4033, 400),
(194, 'Chocolat', 4034, 500),
(195, 'Chocolat', 4036, 500),
(196, 'Chocolat', 4037, 500),
(197, 'Chocolat', 4039, 500),
(198, 'Chocolat', 4042, 500),
(199, 'Chocolat', 4045, 500),
(200, 'Chocolat', 4052, 500),
(201, 'Chocolat', 4053, 500),
(202, 'Chocolat', 4054, 500),
(203, 'Pépites de chocolat', 4055, 500),
(204, 'Chocolat', 4057, 500),
(207, 'Levure', 1007, 20),
(208, 'Levure', 1015, 20),
(209, 'Levure', 1016, 20),
(210, 'Levure', 1017, 20),
(211, 'Levure', 3002, 20),
(212, 'Levure', 3004, 20),
(213, 'Levure', 3010, 20),
(214, 'Levure', 3016, 20),
(215, 'Levure', 3017, 20),
(216, 'Levure', 4002, 20),
(217, 'Levure', 4004, 20),
(218, 'Levure', 4010, 20),
(219, 'Levure', 4011, 20),
(220, 'Levure', 4012, 20),
(221, 'Levure', 4013, 20),
(222, 'Levure', 4015, 20),
(223, 'Levure', 4016, 20),
(224, 'Levure', 4019, 20),
(225, 'Levure', 4020, 25),
(226, 'Levure', 4022, 25),
(227, 'Levure', 4025, 25),
(228, 'Levure', 4026, 25),
(229, 'Levure', 4027, 25),
(230, 'Levure', 4029, 25),
(231, 'Levure', 4030, 25),
(232, 'Levure', 4031, 25),
(233, 'Levure', 4032, 25),
(234, 'Levure', 4033, 25),
(235, 'Levure', 4034, 25),
(236, 'Levure', 4036, 25),
(237, 'Levure', 4037, 25),
(238, 'Levure', 4039, 25),
(239, 'Levure', 4042, 25),
(240, 'Levure', 4045, 25),
(241, 'Levure', 4052, 30),
(242, 'Levure', 4053, 30),
(243, 'Levure', 4054, 30),
(244, 'Levure', 4055, 30),
(245, 'Levure', 4057, 30),
(247, 'Sucre', 1004, 200),
(248, 'Sucre', 1007, 200),
(249, 'Sucre', 1015, 200),
(250, 'Sucre', 1016, 200),
(251, 'Sucre', 1017, 200),
(252, 'Sucre', 3002, 200),
(253, 'Sucre', 3004, 200),
(254, 'Sucre', 3010, 200),
(255, 'Sucre', 3016, 200),
(256, 'Sucre', 3017, 200),
(257, 'Sucre', 4002, 200),
(258, 'Sucre', 4004, 200),
(259, 'Sucre', 4010, 200),
(260, 'Sucre', 4011, 250),
(261, 'Sucre', 4012, 250),
(262, 'Sucre', 4013, 250),
(263, 'Sucre', 4015, 250),
(264, 'Sucre', 4016, 250),
(265, 'Sucre', 4019, 250),
(266, 'Sucre', 4020, 250),
(267, 'Sucre', 4022, 250),
(268, 'Sucre', 4025, 250),
(269, 'Sucre', 4026, 250),
(270, 'Sucre', 4027, 250),
(271, 'Sucre', 4029, 250),
(272, 'Sucre', 4030, 300),
(273, 'Sucre', 4031, 300),
(274, 'Sucre', 4032, 300),
(275, 'Sucre', 4033, 300),
(276, 'Sucre', 4034, 300),
(277, 'Sucre', 4036, 300),
(278, 'Sucre', 4037, 300),
(279, 'Sucre', 4039, 300),
(280, 'Sucre', 4042, 300),
(281, 'Sucre', 4045, 300),
(282, 'Sucre', 4052, 350),
(283, 'Sucre', 4053, 350),
(284, 'Sucre', 4054, 350),
(285, 'Sucre', 4055, 350),
(286, 'Sucre', 4057, 350);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `numero` int NOT NULL COMMENT 'Numéro de commande',
  `numero_ligne` smallint NOT NULL COMMENT 'Numéro de ligne',
  `reference` int NOT NULL COMMENT 'Référence du produit',
  `quantite_demandee` smallint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`numero`, `numero_ligne`, `reference`, `quantite_demandee`) VALUES
(10178, 1, 4015, 1),
(10178, 2, 4025, 1),
(10178, 3, 4031, 1),
(10178, 4, 4036, 1),
(10178, 5, 4004, 1),
(10178, 6, 4053, 1),
(10178, 7, 4042, 1),
(10179, 1, 4031, 1),
(10179, 2, 4032, 1),
(10179, 3, 4037, 1),
(10179, 4, 4002, 1),
(10179, 5, 4054, 1),
(10179, 6, 4057, 1),
(10179, 7, 1007, 2),
(10180, 1, 4053, 1),
(10180, 2, 4055, 1),
(10180, 3, 3016, 1),
(10181, 1, 4020, 1),
(10181, 2, 4026, 1),
(10181, 3, 4045, 1),
(10181, 4, 4002, 2),
(10181, 5, 4012, 2),
(10181, 6, 4054, 1),
(10182, 1, 4034, 1),
(10182, 2, 4012, 1),
(10182, 3, 4055, 1),
(10182, 4, 4057, 1),
(10183, 1, 4025, 1),
(10183, 2, 4027, 1),
(10183, 3, 4029, 1),
(10183, 4, 4039, 1),
(10183, 5, 4013, 1),
(10184, 1, 4025, 1),
(10184, 2, 4031, 2),
(10184, 3, 4004, 1),
(10185, 1, 4002, 1),
(10186, 1, 1016, 1),
(10186, 2, 3002, 2),
(10187, 1, 4015, 1),
(10187, 2, 4010, 1),
(10187, 3, 4011, 1),
(10188, 1, 1016, 2),
(10188, 2, 4052, 1),
(10188, 3, 1004, 1),
(10189, 1, 1017, 1),
(10189, 2, 4016, 1),
(10189, 3, 4031, 1),
(10189, 4, 4033, 1),
(10190, 1, 3010, 1),
(10190, 2, 4015, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` int NOT NULL COMMENT 'Référence du produit',
  `designation` varchar(30) NOT NULL COMMENT 'Désignation du produit',
  `quantite` int DEFAULT '0' COMMENT 'Poids du produit ou nombre de pièces',
  `descriptif` varchar(1) NOT NULL DEFAULT 'G' COMMENT 'Unité de mesure G pour gramme et P pour Pièce',
  `prixUnitaireHT` double DEFAULT '0' COMMENT 'Prix unitaire hors taxes',
  `stock` smallint DEFAULT '0' COMMENT 'Etat du stock',
  `poidsPiece` int DEFAULT '0' COMMENT 'Poids d''une pièce en grammes pour les articles vendus par pièce'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `designation`, `quantite`, `descriptif`, `prixUnitaireHT`, `stock`, `poidsPiece`) VALUES
(1004, 'FEU DE JOIE LIQUEUR ASSORT.', 500, 'G', 23, 50, 0),
(1007, 'TENDRE FRUIT', 500, 'G', 18, 120, 0),
(1015, 'CARACAO', 500, 'G', 24.5, 50, 0),
(1016, 'COKTAIL', 500, 'G', 33, 40, 0),
(1017, 'ORFIN', 500, 'G', 32, 40, 0),
(3002, 'CARRE PECTO', 500, 'G', 29, 40, 0),
(3004, 'ZAN ALESAN', 25, 'P', 15, 50, 20),
(3010, 'PATES GRISES', 500, 'G', 35, 100, 0),
(3016, 'CARAMEL AU LAIT', 500, 'G', 20, 100, 0),
(3017, 'VIOLETTE TRADITION', 500, 'G', 25, 100, 0),
(4002, 'SUCETTE BOULE FRUIT', 25, 'P', 14, 100, 40),
(4004, 'SUCETTE BOULE POP', 25, 'P', 21, 50, 40),
(4010, 'CARAMBAR', 40, 'P', 18, 20, 15),
(4011, 'CARANOUGA', 40, 'P', 18, 100, 15),
(4012, 'CARAMBAR FRUIT', 40, 'P', 19.5, 100, 0),
(4013, 'CARAMBAR COLA', 40, 'P', 18, 50, 15),
(4015, 'SOURIS REGLISSE', 500, 'G', 24, 50, 0),
(4016, 'SOURIS CHOCO', 500, 'G', 24, 50, 0),
(4019, 'SCHTROUMPFS VERTS', 500, 'G', 24, 50, 0),
(4020, 'CROCODILE', 500, 'G', 21, 50, 0),
(4022, 'PERSICA', 500, 'G', 28, 20, 0),
(4025, 'COLA CITRIQUE', 500, 'G', 21, 50, 0),
(4026, 'COLA LISSE', 500, 'G', 25, 50, 0),
(4027, 'BANANE', 1000, 'G', 23, 20, 0),
(4029, 'OEUF SUR LE PLAT', 500, 'G', 25, 20, 0),
(4030, 'FRAISIBUS', 500, 'G', 25, 50, 0),
(4031, 'FRAISE TSOIN-TSOIN', 500, 'G', 25, 40, 0),
(4032, 'METRE REGLISSE ROULE', 500, 'G', 19, 50, 0),
(4033, 'MAXI COCOBAT', 1000, 'G', 19, 20, 0),
(4034, 'DENTS VAMPIRE', 500, 'G', 22, 50, 0),
(4036, 'LANGUE COLA CITRIQUE', 500, 'G', 21, 40, 0),
(4037, 'OURSON CANDI', 1000, 'G', 21, 50, 0),
(4039, 'SERPENT ACIDULE', 500, 'G', 21, 20, 0),
(4042, 'TETINE CANDI', 500, 'G', 20, 40, 0),
(4045, 'COLLIER PECCOS', 15, 'P', 21, 50, 50),
(4052, 'TWIST ASSORTIS', 500, 'G', 22, 50, 0),
(4053, 'OURSON GUIMAUVE', 500, 'G', 35, 10, 0),
(4054, 'BOULE COCO MULER', 500, 'G', 34, 10, 0),
(4055, 'COCOMALLOW', 500, 'G', 33, 10, 0),
(4057, 'CRIC-CRAC', 500, 'G', 33, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE `salon` (
  `codes` int NOT NULL DEFAULT '0' COMMENT 'Code du salon',
  `nom` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Nom du salon',
  `adresse` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Adresse du salon',
  `cp` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Code postal du salon',
  `ville` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Ville du salon',
  `telephone` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL COMMENT 'Téléphone du salon',
  `datedebut` datetime DEFAULT NULL COMMENT 'Indiquer la date de debut',
  `datefin` datetime DEFAULT NULL COMMENT 'Indiquer la date de fin',
  `lien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salon`
--

INSERT INTO `salon` (`codes`, `nom`, `adresse`, `cp`, `ville`, `telephone`, `datedebut`, `datefin`, `lien`) VALUES
(0, 'Martin matin', '2 rue de la mere', '36000', 'chateauroux', '0525855885', '2024-05-25 00:00:00', '2024-05-30 00:00:00', 'https://maps.app.goo.gl/k1JL2WJaZc8KWSaz8'),
(17, 'Salon de la Gouramndise', '15 rue de la Justice', '18000', 'BOURGES', '03.26.25.48.85', '2024-01-15 00:00:00', '2024-01-18 00:00:00', 'https://maps.app.goo.gl/28YFWQnTQL2S7VmX7'),
(46, 'Petit Futé', '103 avenue 	Marcel Lemoine', '36000', 'CHATEAUROUX', '03.26.03.25.26', '2024-04-15 00:00:00', '2024-04-20 00:00:00', 'https://maps.app.goo.gl/h6UKeLiDZFwJyDeBA'),
(47, 'Etaing', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.14.15.25', '2024-03-01 00:00:00', '2024-03-03 00:00:00', 'https://maps.app.goo.gl/FSMQRi1uFTrF6frf9'),
(49, 'Salon Art et Degustation', '12 rue des écus', '88000', 'VOSGES', '03.26.10.25.75', '2024-12-15 00:00:00', '2024-12-31 00:00:00', 'https://maps.app.goo.gl/rm1gLaoQheALn761A'),
(50, 'IFAG', '21 rue de la Méditerranée', '51100', 'REIMS', '03.26.12.25.42', '2024-04-18 00:00:00', '2024-05-01 00:00:00', 'https://maps.app.goo.gl/EobdffNUzzy5yR949'),
(51, 'ChocoClic', '50 allée des bons enfants', '45000', 'ORLEANS', '03.26.80.25.89', '2024-05-15 00:00:00', '2024-05-20 00:00:00', 'https://maps.app.goo.gl/s44niqK1RZ3AKpxj6'),
(52, 'Showroom Virtuel', '14 rue de la Baltique', '59000', 'LILLE', '03.26.12.50.33', '2024-02-15 00:00:00', '2024-02-18 00:00:00', 'https://maps.app.goo.gl/oBcU2XYqCgVeUzfi7'),
(55, 'Village du monde', '15 rue Pasentiers', '75100', 'Paris', '03.26.13.18.25', '2024-09-22 00:00:00', '2024-09-28 00:00:00', 'https://maps.app.goo.gl/CWb9USSfs1JJevPKA');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `codes` int NOT NULL COMMENT 'Identifiant du service',
  `nom` varchar(35) NOT NULL COMMENT 'titre du service',
  `description` varchar(256) DEFAULT NULL COMMENT 'description du service',
  `etat` varchar(10) NOT NULL DEFAULT 'Actif' COMMENT 'Etat du service'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`codes`, `nom`, `description`, `etat`) VALUES
(72, 'Vente à domicile', 'Livraison de vos gourmandises à domicile', 'Inactif'),
(73, 'Vente à emporter', 'Vente à emporter sans frais de vos gourmandises', 'Actif'),
(74, 'Soldes', 'Journée spéciales fortes réductions', 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE `vendeur` (
  `codev` int NOT NULL COMMENT 'Identifiant du vendeur',
  `prenom` varchar(35) NOT NULL COMMENT 'Prénom du vendeur',
  `nom` varchar(35) NOT NULL COMMENT 'Nom et Prénom',
  `adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse du vendeur',
  `cp` varchar(5) NOT NULL COMMENT 'Code postal',
  `ville` varchar(25) NOT NULL COMMENT 'Ville',
  `telephone` varchar(25) DEFAULT NULL COMMENT 'Téléphone principal du vendeur',
  `login` varchar(255) NOT NULL COMMENT 'Login du vendeur',
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`codev`, `prenom`, `nom`, `adresse`, `cp`, `ville`, `telephone`, `login`, `motdepasse`) VALUES
(15, 'Sylvain', 'FILLARD ', '77 rue du l\'Adriatique', '51100', 'REIMS', '03.26.12.25.25', 'sfillard', 'cbe7613845cfcd815bd481b8c625c7c8'),
(17, 'Marc', 'BAUDOT', '16 rue de Reims', '51000', 'CHALONS EN CHAMPAGNE', '03.26.10.58.59', 'mbaudot', 'cbe7613845cfcd815bd481b8c625c7c8'),
(18, 'John ', 'DOE', '12 rue de l\'Anonyme', '51100', 'NOWHERE', '06.07.08.09.10', 'jdoe', 'cbe7613845cfcd815bd481b8c625c7c8');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`codec`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `clientcommande` (`codec`),
  ADD KEY `vendeurcommande` (`codev`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`codei`),
  ADD KEY `produit` (`produit`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`numero`,`numero_ligne`),
  ADD KEY `commandeligne_commande` (`numero`),
  ADD KEY `produitligne_commande` (`reference`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`codes`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`codes`);

--
-- Index pour la table `vendeur`
--
ALTER TABLE `vendeur`
  ADD PRIMARY KEY (`codev`),
  ADD UNIQUE KEY `vendeur_login_uindex` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `codec` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du client', AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numero` int NOT NULL AUTO_INCREMENT COMMENT 'Num?ro de la commande', AUTO_INCREMENT=10193;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_membre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `codei` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `reference` int NOT NULL AUTO_INCREMENT COMMENT 'Référence du produit', AUTO_INCREMENT=4058;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `codes` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du service', AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `vendeur`
--
ALTER TABLE `vendeur`
  MODIFY `codev` int NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du vendeur', AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`codec`) REFERENCES `client` (`codec`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`codev`) REFERENCES `vendeur` (`codev`);

--
-- Contraintes pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`produit`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`numero`) REFERENCES `commande` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
