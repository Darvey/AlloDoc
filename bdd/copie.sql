-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 19 Janvier 2016 à 13:31
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `docapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `HORAIRE`
--

CREATE TABLE `HORAIRE` (
  `h_id` int(12) NOT NULL,
  `h_m_id` int(8) NOT NULL,
  `h_date` date NOT NULL,
  `h_time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `HORAIRE`
--

INSERT INTO `HORAIRE` (`h_id`, `h_m_id`, `h_date`, `h_time`) VALUES
(1, 1, '2015-11-27', '13:00:00'),
(2, 2, '2015-11-24', '08:30:00'),
(3, 2, '2015-11-25', '14:30:00'),
(4, 1, '2015-11-27', '07:30:00'),
(10, 1, '2015-11-28', '09:00:00'),
(13, 1, '2015-11-28', '09:20:00'),
(14, 1, '2015-11-24', '11:20:00'),
(15, 1, '2015-11-24', '14:30:00'),
(17, 1, '2015-11-24', '16:00:00'),
(18, 1, '2015-11-24', '16:20:00');

-- --------------------------------------------------------

--
-- Structure de la table `MEDECIN`
--

CREATE TABLE `MEDECIN` (
  `m_id` int(8) NOT NULL,
  `m_nom` varchar(30) NOT NULL,
  `m_prenom` varchar(30) NOT NULL,
  `m_ville` varchar(30) CHARACTER SET utf8 NOT NULL,
  `m_cp` int(6) NOT NULL,
  `m_adresse` varchar(100) NOT NULL,
  `m_telephone` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `MEDECIN`
--

INSERT INTO `MEDECIN` (`m_id`, `m_nom`, `m_prenom`, `m_ville`, `m_cp`, `m_adresse`, `m_telephone`) VALUES
(1, 'Pasteur', 'Louis', 'Besançon', 25000, '7 rue des granges', 345657899),
(2, 'Rousseau', 'Jean-Jaques', 'Paris', 75005, '5eme arrondissement\r\nrue Thomas Hobbes', 345667788);

-- --------------------------------------------------------

--
-- Structure de la table `PATIENT`
--

CREATE TABLE `PATIENT` (
  `p_id` int(8) NOT NULL,
  `p_nom` varchar(30) NOT NULL,
  `p_prenom` varchar(30) NOT NULL,
  `p_ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `HORAIRE`
--
ALTER TABLE `HORAIRE`
  ADD PRIMARY KEY (`h_id`);

--
-- Index pour la table `MEDECIN`
--
ALTER TABLE `MEDECIN`
  ADD PRIMARY KEY (`m_id`);

--
-- Index pour la table `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `HORAIRE`
--
ALTER TABLE `HORAIRE`
  MODIFY `h_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `MEDECIN`
--
ALTER TABLE `MEDECIN`
  MODIFY `m_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `PATIENT`
--
ALTER TABLE `PATIENT`
  MODIFY `p_id` int(8) NOT NULL AUTO_INCREMENT;
