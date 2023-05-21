-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 mai 2023 à 10:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `data`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_resa`
--

DROP TABLE IF EXISTS `tb_resa`;
CREATE TABLE IF NOT EXISTS `tb_resa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Couverts` float NOT NULL,
  `Date` date NOT NULL,
  `Allergique` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `btnradio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tb_resa`
--

INSERT INTO `tb_resa` (`id`, `Nom`, `Prenom`, `Couverts`, `Date`, `Allergique`, `message`, `btnradio`) VALUES
(4, 'test', 'test', 1, '2023-05-11', '', '', '12h15'),
(5, 'fgfg', 'cvcxv', 2, '2023-05-11', '', '', '12h45'),
(7, 'Benyahia', 'ilyes', 4, '2023-05-11', '', '', '13h00'),
(8, 'testSoir', 'testSoir', 2, '2023-05-15', '', '', 'on'),
(9, 'testSoir', 'testSoir', 2, '2023-05-17', '', '', '19h00'),
(10, 'test', 'test', 5, '2023-05-13', '', '', '20h30'),
(11, 'test', 'test', 5, '2023-05-13', '', '', '20h30'),
(12, 'test', 'test', 0, '2023-05-11', 'non', '', '12h15'),
(34, 'TEST', 'TEST', 2, '2023-05-16', 'oui', 'TEST', '12h00'),
(17, 'test', '', 0, '2023-05-11', 'oui', '', '20h00'),
(18, 'test', '', 0, '2023-05-11', 'oui', '', '20h00'),
(19, 'test', 'test', 2, '2023-05-11', 'oui', 'test', '19h30'),
(20, 'Benyahia', 'ilyes', 4, '2023-05-11', 'non', 'Aucune allergie', '20h00'),
(21, 'test', 'test', 1, '2023-05-11', 'oui', 'test', '19h30'),
(22, 'ilyes', 'Benyahia', 1, '2023-05-11', 'oui', 'test', '21h00'),
(23, 'Benyahia', 'ilyes', 4, '2023-05-11', 'oui', 'test allergie', '19h45'),
(24, 'ilyes', 'Benyahia', 0, '2023-05-25', 'oui', 'test allergie', '20h45'),
(25, 'ilyes', 'Benyahia', 0, '2023-05-25', 'oui', 'test allergie', '20h45'),
(26, 'ilyes', 'Benyahia', 0, '2023-05-25', 'oui', 'test allergie', '20h45'),
(27, 'ilyes', 'Benyahia', 0, '2023-05-25', 'oui', 'test allergie', '20h45'),
(28, 'ilyes', 'Benyahia', 0, '2023-05-25', 'oui', 'test allergie', '20h45'),
(29, 'client', 'client', 5, '2023-05-30', 'non', 'Aucun', '19h30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
