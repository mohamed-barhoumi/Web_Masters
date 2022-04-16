-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 avr. 2022 à 15:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jawek_sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `rating` double DEFAULT NULL,
  `commentaire` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F91ABF0DAE07E97` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `back_test`
--

DROP TABLE IF EXISTS `back_test`;
CREATE TABLE IF NOT EXISTS `back_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionCategory` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `nameCategory`, `descriptionCategory`) VALUES
(1, 'tennis', 'pro'),
(2, 'Football', 'matériel'),
(3, 'BasketteBall', 'Materiel'),
(4, 'nattation', 'aaa'),
(5, 'foot', 'materiel');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `coash`
--

DROP TABLE IF EXISTS `coash`;
CREATE TABLE IF NOT EXISTS `coash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coash`
--

INSERT INTO `coash` (`id`, `nom`, `prenom`, `image`, `numero`) VALUES
(1, 'Daas', 'Wajdi', 'c33c82e5eb72b38d4422bc9eae614361.jpeg', 98653214);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evenement_id` int(11) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreation` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BCFD02F13` (`evenement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `evenement_id`, `userid`, `contenu`, `datecreation`, `name`) VALUES
(1, 1, 5, 'fdjkfkdf', '2022-03-07 12:02:49', 'boubou'),
(2, 3, 1, 'okkkkk', '2022-03-08 09:45:04', 'hhjkkl');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maitre_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbrplace` int(11) NOT NULL,
  `nbinscrit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B26681ECF133C25` (`maitre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `maitre_id`, `description`, `image`, `prix`, `datedebut`, `datefin`, `titre`, `nbrplace`, `nbinscrit`) VALUES
(1, 1, 'gffg', '28d2b61bfd9b71a3ae04aac6bd18f894.jpeg', 50, '2022-03-12 00:00:00', '2022-03-12 14:00:00', 'Yoga', 50, 18),
(3, 1, 'dshjdfljkfdljfd', 'f02431669a5b1de92f9f7a5e8cac893c.jpeg', 25, '2022-05-10 06:00:00', '2022-05-10 10:00:00', 'Course à pied', 100, 50),
(4, 1, 'dfkjdffkfdlklkfdklklfdklfd', 'cb68c9fb74a82b685fd82b4230a43147.jpeg', 50, '2022-03-13 08:00:00', '2022-03-13 11:00:00', 'Cyclisme', 70, 21),
(5, 1, 'dfkjdffkfdlklkfdklklfdklfd', '5c174d42e202b04f52f1dd8535d0e208.jpeg', 60, '2022-03-16 08:00:00', '2022-03-16 11:00:00', 'kayak', 30, 17);

-- --------------------------------------------------------

--
-- Structure de la table `front_test`
--

DROP TABLE IF EXISTS `front_test`;
CREATE TABLE IF NOT EXISTS `front_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20211008085416', '2022-02-14 20:22:59'),
('20211011095155', '2022-02-14 20:22:59'),
('20220214202336', '2022-02-14 20:23:46'),
('20220220201310', '2022-02-20 20:14:16'),
('20220220220447', '2022-02-20 22:05:05'),
('20220220221526', '2022-02-20 22:15:57'),
('20220221175930', '2022-02-21 18:01:21'),
('20220221180257', '2022-02-21 18:03:04'),
('20220221184739', '2022-02-21 18:47:59'),
('20220222010904', '2022-02-22 01:09:21'),
('20220306210902', '2022-03-06 21:09:36'),
('20220307113456', '2022-03-07 11:35:32'),
('20220307234720', '2022-03-07 23:48:41'),
('20220308100256', '2022-03-08 10:03:12');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29A5EC2712469DE2` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `id_category`, `name`, `price`, `quantity`, `image`, `description`) VALUES
(2, 1, 'raquette', 200, 12, '371efeb22edc251554c9c2bab3ddd3bd.jpeg', 'raquette pro'),
(3, 2, 'ball', 50, 30, '5127f80e86fe4db7ddcf26b258bfb8df.jpeg', 'aaaa'),
(4, 3, 'ball', 55, 60, '989235794a2ffbf1321cc613039a7c59.jpeg', 'leather BasketteBall');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CE60640419EB6921` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `client_id`, `subject`, `message`, `email`) VALUES
(1, NULL, 'stock', 'pas de stock', 'bouthayna.daas@esprit.tn'),
(2, NULL, 'stock', 'manque de stock', 'feryel.hajji@esprit.tn'),
(3, NULL, 'stock', 'chhc', 'feryel.hajji@esprit.tn'),
(4, NULL, 'stock', 'chhc', 'feryel.hajji@esprit.tn'),
(5, NULL, 'stock', 'ddjjd', 'feryel.hajji@esprit.tn'),
(6, NULL, 'stock', 'dhhd', 'bouthayna.daas@esprit.tn');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF0DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BCFD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_B26681ECF133C25` FOREIGN KEY (`maitre_id`) REFERENCES `coash` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC2712469DE2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_CE60640419EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
