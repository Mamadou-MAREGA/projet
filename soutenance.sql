-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 23 nov. 2019 à 02:00
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soutenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(2, 'hamshakour93@gmail.com', '$2y$10$H6cdZ6LpP44US0U9J6/LgOfZ4Hmb/ztsoKlbxJ.Fp7lz4YU2sWR4q');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idCl` int(8) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `tel` int(30) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `codep` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idCl`, `nom`, `prenom`, `adress`, `adress2`, `mail`, `pass`, `pass1`, `tel`, `ville`, `pays`, `codep`) VALUES
(1, 'MAREGA', 'Mamadou', '16 Place Bertie Albretch', 'apartement 283', 'maregamamadoumarega95@gmail.com', '$2y$10$VPyjbsHv0sZevp3gXjuRo.KfEkh4LkSFAWBbgF4K.nOcp.aVwW0Hq', '$2y$10$cklNgrAKzbRBapAeYI.W9urJvL.fW4lEb00Vor.eNRRPhAfsrk8dG', 773580514, 'Montreuil', 'France', 93100);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idCom` int(8) NOT NULL,
  `dateCom` date NOT NULL,
  `quantite` int(8) NOT NULL,
  `montant` float NOT NULL,
  `idCl` int(8) NOT NULL,
  `idP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idP` int(8) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `designation` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idP`, `photo`, `nom`, `marque`, `categorie`, `prix`, `designation`, `photo_url`) VALUES
(2, '361129-dell-latitude-13-education-series.jpg', 'Dell Latitude', 'Dell', 'Processeuri3', 1200, 'Dell Latitude Education Ram 8  et 1To DD			    	\r\n			    ', 'image/361129-dell-latitude-13-education-series.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idCl`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `idCl` (`idCl`),
  ADD KEY `idP` (`idP`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idP`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idCl` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idP` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idCl`) REFERENCES `client` (`idCl`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idP`) REFERENCES `produit` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
