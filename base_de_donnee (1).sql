-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 juil. 2022 à 16:27
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base_de_donnee`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Login` varchar(40) NOT NULL,
  `Mot de passe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Login`, `Mot de passe`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Structure de la table `administratif`
--

CREATE TABLE `administratif` (
  `N°` int(11) NOT NULL,
  `PPR` int(11) NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Cadre` varchar(40) NOT NULL,
  `Grade` varchar(40) NOT NULL,
  `Date_N` date NOT NULL,
  `Date_A_A` date NOT NULL,
  `Date_R` date NOT NULL,
  `Date_A_G` date NOT NULL,
  `Echlon` int(11) NOT NULL,
  `Indice` int(11) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `Mot_de_passe` varchar(40) NOT NULL,
  `Etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administratif`
--

INSERT INTO `administratif` (`N°`, `PPR`, `Nom`, `Prenom`, `CIN`, `Email`, `Cadre`, `Grade`, `Date_N`, `Date_A_A`, `Date_R`, `Date_A_G`, `Echlon`, `Indice`, `Position`, `image`, `Mot_de_passe`, `Etat`) VALUES
(3, 12, 'HADDOU', 'KHALID', 'PA17', 'khalidhaddou123456@gmail.com', 'PES', 'PES-A', '2001-03-02', '2022-06-22', '2022-06-29', '2022-06-28', 3, 810, 'En activité', 'HADDOU - 2022.06.28 - 11.07.52am.jpg', 'c20ad4d76fe97759aa27a0c99bff6710', 1),
(1, 1237890, 'ELMGHARI', 'Yassin', '', 'ELMGHARI.95@gmail.com', 'AD', 'ADD', '1995-09-02', '2016-09-01', '2016-09-01', '2016-09-01', 5, 450, 'En activité', 'ELMGHARI - 2022.06.26 - 02.20.56pm.jpg', '0a546f3e45fe388b275c283facf95e36', 0),
(2, 1256279, 'KAMIL', 'Soumia', 'P123456', 'Soumia98@gmail.com', '  ccc', '  rrr', '1998-03-11', '2018-01-01', '2018-01-01', '2018-01-01', 12, 34, 'En activité', 'KAMIL - 2022.06.27 - 01.54.33pm.png', 'add93527487d62ca69ab378c7116e256', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ensiengant`
--

CREATE TABLE `ensiengant` (
  `N°` int(11) NOT NULL,
  `PPR` int(11) NOT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `Prenom` varchar(40) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Cadre` varchar(50) NOT NULL,
  `Grade` varchar(50) NOT NULL,
  `Date_N` date NOT NULL,
  `Date_A_A` date NOT NULL,
  `Date_R` date NOT NULL,
  `Date_A_G` date NOT NULL,
  `Echlon` int(11) NOT NULL,
  `Indice` int(11) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `Mot_de_passe` varchar(40) NOT NULL,
  `Etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ensiengant`
--

INSERT INTO `ensiengant` (`N°`, `PPR`, `Nom`, `Prenom`, `CIN`, `Email`, `Cadre`, `Grade`, `Date_N`, `Date_A_A`, `Date_R`, `Date_A_G`, `Echlon`, `Indice`, `Position`, `image`, `Mot_de_passe`, `Etat`) VALUES
(0, 444, NULL, '', '12', 'ou.omar88@gmail.com', '', '', '0003-12-03', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', NULL, '2cdc89bfd73915d1eb96804780569cdd', 0),
(2, 1234, 'oukhouya', 'omar', 'PA12', 'ou.omar88@gmail.com', 'PES', 'PES-A', '2002-03-02', '2022-06-22', '2022-06-29', '2022-06-28', 5, 810, 'En activité', 'oukhouya - 2022.06.28 - 01.09.24pm.jpg', '46c4f44bd1f2cbb53c7c34c2a15b6c3d', 1),
(3, 12345, 'HADDOU', 'KHALID', 'PA17', 'khalidhaddou123456@gmail.com', 'PES', 'PES-A', '2001-03-02', '2022-06-22', '2022-06-29', '2022-06-28', 3, 450, 'En activité', 'HADDOU - 2022.06.28 - 11.07.52am.jpg', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(0, 123456, NULL, '', 'PA175583', 'ou.omar88@gmail.com', '', '', '2022-12-31', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', NULL, 'df4380aaec36616b3f71c2c0be6cae2f', 0),
(1, 1254835, 'BENALI', 'Abdelkader', 'U12300123', 'benali@gamail.com', 'PE', 'PES-A', '1972-06-03', '2003-06-02', '2003-06-02', '2003-06-27', 3, 800, 'En activité', 'BENALI - 2022.06.27 - 11.52.39pm.jpg', 'd12b5f516fe0bb4639b6b73c02da89ba', 1),
(0, 123456789, NULL, '', 'PA175583', 'YOUSF@gmail.com', '', '', '2022-06-25', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', NULL, 'a5a9eff10f38557cef0ba3c874ce7f42', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Login`);

--
-- Index pour la table `administratif`
--
ALTER TABLE `administratif`
  ADD PRIMARY KEY (`PPR`);

--
-- Index pour la table `ensiengant`
--
ALTER TABLE `ensiengant`
  ADD PRIMARY KEY (`PPR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
