-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 12 juin 2018 à 09:50
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
(1, 'prenom', 'nom', 'nomprenom@gmail.com', 123456789, '00 rue blabla 77000 meaux', 23, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `titre` text NOT NULL,
  `status` int(5) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `date_limit` date NOT NULL,
  `details` text NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `userId`, `titre`, `status`, `owner`, `date`, `date_limit`, `details`, `tag`) VALUES
(1, 1, 'ticket ticket', 0, 'owner', '2018-06-11', '2018-06-13', 'azertyazertyazertyazertyazertyazerty', 'tag');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'alexis', 'leleu', 'test@test.fr', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `userOder`
--

CREATE TABLE `userOder` (
  `id_order` int(11) NOT NULL,
  `product` text NOT NULL,
  `user_Id` int(11) NOT NULL,
  `seller` text NOT NULL,
  `delivery` text NOT NULL,
  `expedition` text NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `userOder`
--

INSERT INTO `userOder` (`id_order`, `product`, `user_Id`, `seller`, `delivery`, `expedition`, `date`, `price`) VALUES
(1, 'QC-35', 1, 'BOSE', '40 rue de l\'adresse 40000 Lyon', 'paris CEDEX 4035', '2018-06-13', 380);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `userOder`
--
ALTER TABLE `userOder`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `userOder`
--
ALTER TABLE `userOder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
