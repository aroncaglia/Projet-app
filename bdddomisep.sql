-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Juin 2017 à 10:29
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdddomisep`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneurs`
--

CREATE TABLE `actionneurs` (
  `Type` varchar(30) NOT NULL,
  `Date_installation` date NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Commande` varchar(30) NOT NULL,
  `id_actionneurs` int(11) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL,
  `Id_Fonction` int(11) NOT NULL,
  `Id_piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actionneurs`
--

INSERT INTO `actionneurs` (`Type`, `Date_installation`, `Etat`, `Commande`, `id_actionneurs`, `Id_utilisateur`, `Id_Fonction`, `Id_piece`) VALUES
('Alarme', '0000-00-00', 1, '', 1, 0, 0, 0),
('Volet', '0000-00-00', 0, '', 7, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `actionneurs_liste`
--

CREATE TABLE `actionneurs_liste` (
  `Type` varchar(255) NOT NULL,
  `Id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actionneurs_liste`
--

INSERT INTO `actionneurs_liste` (`Type`, `Id`) VALUES
('Alarme', 1),
('Volet', 2),
('Climatisation', 3);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'Admin', 'admindomisep@hotmail.fr', 'G8B'),
(2, 'admin', 'admin@hotmail.fr', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6');

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `Id_donnees_recues` int(11) NOT NULL,
  `id_capteur` int(5) NOT NULL,
  `Date_Installation` date NOT NULL,
  `Tps_actualisation` tinyint(5) NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Debit` int(5) NOT NULL,
  `seuil_critique` int(5) NOT NULL,
  `Mode_utilisation` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `Fonction` varchar(30) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `capteurs`
--

INSERT INTO `capteurs` (`Id_donnees_recues`, `id_capteur`, `Date_Installation`, `Tps_actualisation`, `Etat`, `Debit`, `seuil_critique`, `Mode_utilisation`, `Fonction`, `Nom`, `id`) VALUES
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-11 10:46:17.829075', 'Temperature', '', 19),
(0, 7, '0000-00-00', 0, 0, 0, 0, '2017-06-11 15:23:14.445629', 'Temperature', '', 21),
(0, 7, '0000-00-00', 0, 0, 0, 0, '2017-06-11 15:46:39.059206', 'Presence', '', 22),
(0, 7, '0000-00-00', 0, 0, 0, 0, '2017-06-11 15:53:35.694842', 'CO2', '', 23),
(0, 7, '0000-00-00', 0, 0, 0, 0, '2017-06-11 16:34:06.740113', 'Presence', '', 24),
(0, 8, '0000-00-00', 0, 0, 0, 0, '2017-06-12 07:43:08.427733', 'Temperature', '', 25),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-13 14:12:11.199644', 'Presence', '', 26),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-13 14:14:00.730378', 'Presence', '', 27),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-13 14:14:09.594089', 'Fumee', '', 28),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-13 14:14:21.444489', 'CO2', '', 29),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-13 14:15:02.054903', 'Humidite', '', 30),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-14 07:33:38.088101', 'CO2', '', 31),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-14 08:19:33.793020', 'Temperature', '', 32),
(0, 2, '0000-00-00', 0, 0, 0, 0, '2017-06-14 08:27:46.512351', 'Fumee', '', 33);

-- --------------------------------------------------------

--
-- Structure de la table `capteurs_liste`
--

CREATE TABLE `capteurs_liste` (
  `Fonction` varchar(30) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `capteurs_liste`
--

INSERT INTO `capteurs_liste` (`Fonction`, `id`) VALUES
('Temperature', 1),
('Presence', 2),
('Fumee', 3),
('Humidite', 4),
('CO2', 5);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`Nom`, `Prenom`, `Adresse`, `Ville`, `Pays`, `mail`, `comments`) VALUES
('Ron', 'adr', 'Res prim', 'Paris', 'France', 'test@hotmail.fr', 'Coucou c un test');

-- --------------------------------------------------------

--
-- Structure de la table `donnees_recues`
--

CREATE TABLE `donnees_recues` (
  `Date_donnees` date NOT NULL,
  `Heure` time(6) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Type_donnee` varchar(30) NOT NULL,
  `Valeur` int(5) NOT NULL,
  `Id` int(11) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL,
  `Id_capteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `Nom_fonction` varchar(30) NOT NULL,
  `Etat` tinyint(1) NOT NULL,
  `Valeur` int(5) NOT NULL,
  `Id` int(11) NOT NULL,
  `Id_mode` int(11) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `Nbrmais` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `Nbrmais`) VALUES
(1, 'APP', 'lol@hotmail.fr', 'fe05138da9ea159d100f463f88d5297681f8dfdd', 1),
(2, 'APP1', 'aze@hotmail.fr', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6', 2),
(3, 'adrieÃ©', 'adri@hotmail.fr', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6', 1),
(4, 'Adri', 'lol1@hotmail.fr', 'c935745342117f46a4c2a2ac5080939a539d5072', 2),
(5, 'adri', 'azer@hotmail.fr', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6', 2),
(6, 'Adri3', 'ade@hotmail.com', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6', 2),
(7, 'adrr', 'adrienxwz@hotmail.fr', 'ae8a3ea7df816437cdd9a5b239273cee3f7abdb6', 2),
(8, 'APP3', 'adriee@hotmail.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 2),
(9, 'APP4', 'app@hotmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 2),
(10, 'APP4', 'app3@hotmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 2);

-- --------------------------------------------------------

--
-- Structure de la table `modes`
--

CREATE TABLE `modes` (
  `Id` int(11) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Superficie` int(3) NOT NULL,
  `Nombre_capteurs` int(2) NOT NULL,
  `Id` int(11) NOT NULL,
  `Id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(5) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Ville` varchar(15) NOT NULL,
  `Rue` varchar(40) NOT NULL,
  `Numero_rue` int(5) DEFAULT NULL,
  `code_postal` int(5) DEFAULT NULL,
  `Telephone` int(10) DEFAULT NULL,
  `mail` varchar(60) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Statut` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Pseudo`, `Nom`, `Prenom`, `Ville`, `Rue`, `Numero_rue`, `code_postal`, `Telephone`, `mail`, `motdepasse`, `Type`, `Statut`) VALUES
(2, 'yaberkane', 'Aberkane', 'Yoann', 'Clamart', 'Gabrielle', 23, 92140, 668563800, 'yoann.aberkane@isep.fr', '142', '', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actionneurs`
--
ALTER TABLE `actionneurs`
  ADD PRIMARY KEY (`id_actionneurs`);

--
-- Index pour la table `actionneurs_liste`
--
ALTER TABLE `actionneurs_liste`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `capteurs`
--
ALTER TABLE `capteurs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `capteurs_liste`
--
ALTER TABLE `capteurs_liste`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `donnees_recues`
--
ALTER TABLE `donnees_recues`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modes`
--
ALTER TABLE `modes`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actionneurs_liste`
--
ALTER TABLE `actionneurs_liste`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `capteurs`
--
ALTER TABLE `capteurs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `capteurs_liste`
--
ALTER TABLE `capteurs_liste`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `donnees_recues`
--
ALTER TABLE `donnees_recues`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `modes`
--
ALTER TABLE `modes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
