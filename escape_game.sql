-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 déc. 2024 à 10:53
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `escape_game`
--

-- --------------------------------------------------------

--
-- Structure de la table `defi1`
--

DROP TABLE IF EXISTS `defi1`;
CREATE TABLE IF NOT EXISTS `defi1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `defi1`
--

INSERT INTO `defi1` (`id`, `login`, `mdp`, `code`) VALUES
(1, 'admin', 'bla bla bla', 'code : S15M18, bien joué !'),
(2, 'test', 'bla bla bla', 'Mauvaise réponse !'),
(3, 'user', 'bla bla bla', 'Mauvaise réponse !'),
(4, 'guest', 'bla bla bla', 'Mauvaise réponse !');

-- --------------------------------------------------------

--
-- Structure de la table `defi2`
--

DROP TABLE IF EXISTS `defi2`;
CREATE TABLE IF NOT EXISTS `defi2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` text,
  `mail` text,
  `commentaire` text NOT NULL,
  `date` datetime NOT NULL,
  `code` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `defi2`
--

INSERT INTO `defi2` (`id`, `pseudo`, `mail`, `commentaire`, `date`, `code`) VALUES
(10, 'dédé', 'test@test.fr', 'lol', '2024-12-03 14:17:03', NULL),
(9, 'test', 'test@test.fr', 'poire', '2024-12-03 14:16:51', NULL),
(5, 'test', 'test@test.fr', 'bonjour', '2024-12-03 14:06:01', NULL),
(6, 'test', 'test@test.fr', 'salut salut', '2024-12-03 14:10:34', NULL),
(14, 'test', 'test@test.fr', 'd', '2024-12-03 14:19:32', NULL),
(15, 'test', 'test@test.fr', 'b', '2024-12-03 14:38:47', NULL),
(16, 'test', 'test@test.fr', '<script>ale()</script>', '2024-12-03 14:39:06', NULL),
(38, '<script>al()</script>', 'test@test.fr', 'youhouu', '2024-12-03 14:51:43', NULL),
(37, 'test', 'test@test.fr', 'd', '2024-12-03 14:51:30', NULL),
(36, 'finish', 'test@test.fr', 'ça marche !', '2024-12-03 14:51:21', NULL),
(21, 'dédé', 'test2@test.fr', 'd', '2024-12-03 14:43:29', NULL),
(22, 'test', 'test@test.fr', 'oui', '2024-12-03 14:43:38', NULL),
(35, '<script>al()</script>', 'test@test.fr', 'dd', '2024-12-03 14:51:06', NULL),
(30, 'dédé', 'test@test.fr', '<script> LOL', '2024-12-03 14:48:26', NULL),
(28, 'test', 'test@test.fr', 'd', '2024-12-03 14:47:54', NULL),
(29, 'dédé', 'test@test.fr', 'c', '2024-12-03 14:48:00', NULL),
(27, 'test', 'test@test.fr', 'd', '2024-12-03 14:46:51', NULL),
(31, 'test', 'test@test.fr', 'd', '2024-12-03 14:49:22', NULL),
(32, '<script>al()</script>', 'test@test.fr', 'd', '2024-12-03 14:49:33', NULL),
(33, 'test', 'test@test.fr', 'd', '2024-12-03 14:49:55', NULL),
(34, '<script>al()</script>', 'test@test.fr', 'dd', '2024-12-03 14:50:27', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `mail` text NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `pseudo`, `mail`, `date_inscription`) VALUES
(1, 'test', 'test@test.fr', '2024-12-10'),
(2, 'test2', 'test2@test.fr', '2024-12-10'),
(3, 'test2', 'test2@test.fr', '2024-12-10'),
(4, 'test3', 'test3@test.fr', '2024-12-10'),
(5, 'test4', 'test4@test.fr', '2024-12-10'),
(6, 'test4', 'test4@test.fr', '2024-12-10'),
(7, 'test4', 'test4@test.fr', '2024-12-10'),
(8, 'test4', 'test4@test.fr', '2024-12-10'),
(9, 'test4', 'test4@test.fr', '2024-12-10'),
(10, 'test4', 'test4@test.fr', '2024-12-10'),
(11, 'test4', 'test4@test.fr', '2024-12-10'),
(12, 'testFonction', 'testFonction@test.fr', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

DROP TABLE IF EXISTS `partie`;
CREATE TABLE IF NOT EXISTS `partie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_joueur` int NOT NULL,
  `date_partie` date NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `parties_sans_utilisateur`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `parties_sans_utilisateur`;
CREATE TABLE IF NOT EXISTS `parties_sans_utilisateur` (
`date_partie` date
,`score` int
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `utilisateurs_sans_mail`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `utilisateurs_sans_mail`;
CREATE TABLE IF NOT EXISTS `utilisateurs_sans_mail` (
);

-- --------------------------------------------------------

--
-- Structure de la vue `parties_sans_utilisateur`
--
DROP TABLE IF EXISTS `parties_sans_utilisateur`;

DROP VIEW IF EXISTS `parties_sans_utilisateur`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `parties_sans_utilisateur`  AS SELECT `partie`.`date_partie` AS `date_partie`, `partie`.`score` AS `score` FROM `partie` ORDER BY `partie`.`date_partie` DESC LIMIT 0, 3 ;

-- --------------------------------------------------------

--
-- Structure de la vue `utilisateurs_sans_mail`
--
DROP TABLE IF EXISTS `utilisateurs_sans_mail`;

DROP VIEW IF EXISTS `utilisateurs_sans_mail`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `utilisateurs_sans_mail`  AS SELECT `joueur`.`pseudo` AS `pseudo`, `joueur`.`date_inscription` AS `date_inscription`, `joueur`.`score` AS `score` FROM `joueur` LIMIT 0, 3 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
