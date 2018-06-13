-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 13 juin 2018 à 13:51
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `crm_api`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` int(14) NOT NULL,
  `address` text NOT NULL,
  `age` int(3) NOT NULL,
  `dateBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `firstname`, `lastname`, `email`, `phone`, `address`, `age`, `dateBirth`) VALUES
(1, 'prenom', 'nom', 'nomprenom@gmail.com', 123456789, '00 rue blabla 77000 meaux', 23, '0000-00-00'),
(2, 'alexis', 'leleu', 'alexis.77fr@outlook.fr', 600000000, '43 rue jean jaures ', 21, '2018-06-11'),
(4, 'quentin', 'ledcuc', 'quentin@test.fr', 600000000, 'zgezefverzef', 21, '2018-06-11'),
(5, 'quentin', 'legendar', 'azert@test.fr', 600000000, 'zgezefverzef', 21, '2018-06-11'),
(6, 'zef', 'lagojd', 'azzezezert@test.fr', 600000000, 'zgezefverzef', 21, '2018-06-11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
