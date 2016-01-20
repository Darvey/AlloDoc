-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2016 at 09:28 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `docapp`
--
USE docapp;

-- --------------------------------------------------------

--
-- Table structure for table `horaire`
--

CREATE TABLE IF NOT EXISTS `horaire` (
`h_id` int(12) NOT NULL,
  `h_m_id` int(8) NOT NULL,
  `h_date` date NOT NULL,
  `h_time` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `horaire`
--

INSERT INTO `horaire` (`h_id`, `h_m_id`, `h_date`, `h_time`) VALUES
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
-- Table structure for table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
`m_id` int(8) NOT NULL,
  `m_nom` varchar(30) NOT NULL,
  `m_prenom` varchar(30) NOT NULL,
  `m_ville` varchar(30) CHARACTER SET utf8 NOT NULL,
  `m_cp` int(6) NOT NULL,
  `m_adresse` varchar(100) NOT NULL,
  `m_telephone` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`m_id`, `m_nom`, `m_prenom`, `m_ville`, `m_cp`, `m_adresse`, `m_telephone`) VALUES
(1, 'Pasteur', 'Louis', 'Besançon', 25000, '7 rue des granges', 345657899),
(2, 'Rousseau', 'Jean-Jaques', 'Paris', 75005, '5eme arrondissement\r\nrue Thomas Hobbes', 345667788);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
`p_id` int(8) NOT NULL,
  `p_nom` varchar(30) NOT NULL,
  `p_prenom` varchar(30) NOT NULL,
  `p_ville` varchar(30) NOT NULL,
  `p_mail` text NOT NULL,
  `p_mdp` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horaire`
--
ALTER TABLE `horaire`
 ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horaire`
--
ALTER TABLE `horaire`
MODIFY `h_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
MODIFY `m_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `p_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
