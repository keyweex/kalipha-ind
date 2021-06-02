-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 juin 2021 à 16:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_kalipha`
--

-- --------------------------------------------------------

--
-- Structure de la table `kalipha`
--

DROP TABLE IF EXISTS `kalipha`;
CREATE TABLE IF NOT EXISTS `kalipha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `kalipha`
--

INSERT INTO `kalipha` (`id`, `pseudo`, `email`, `password`, `ip`, `date_inscription`) VALUES
(1, 'keyweex', 'bastin@gmail.com', '$2y$12$8pDYN0.5RqJNEbX6EewEHuInUrQE9TmgCHXjiEGmaRJYVydQUDsJ2', '::1', '2021-05-31 00:49:10'),
(2, 'zebi', 'zebi@gmail.com', '$2y$12$XyNwUmjBzWMwTQ3YNdIo6OejT4yzHfg09ZcmODip59vpNURxZrYJ.', '::1', '2021-05-31 08:58:23'),
(3, 'loli', 'loli@gmail.com', '$2y$12$2mpXasQtvj8bmnUolTbAFeVEGG68Hk/ej4ffKSJ3Zms8loumVnWge', '::1', '2021-05-31 09:48:51'),
(4, 'test', 'test@gmail.com', '$2y$12$87nqC3vOmta8Sc1FFnpy.OR0dC3RmboAn7ApF01ts/W9JGTJbtCsW', '::1', '2021-05-31 10:47:55'),
(5, 'test1', 'test1@gmail.com', '$2y$12$H1/kWvWw.kO6Zwuvmyl1T.IbYcscFNQD4yeqjyyUCfmaGj6bPGtSy', '::1', '2021-05-31 12:34:21'),
(6, 'mr.simon', 'mr.simon@gmail.com', '$2y$12$Y.lxMaJrTqZLLdQsnRFGp.3pHBp7KOTyy0K24mxbM85Bi3D2qwr4u', '::1', '2021-05-31 15:17:52'),
(7, 'wesh', 'wesh@gmail.com', '$2y$12$z2ebUugt6G9BpASifOlpe.7OjT.d4oHMuQSEcF2RNG5JygR3FXFTy', '::1', '2021-06-01 18:29:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
