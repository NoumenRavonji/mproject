-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2016 at 02:56 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignation`
--

CREATE TABLE IF NOT EXISTS `assignation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `developer_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D2A03CE0166D1F9C` (`project_id`),
  KEY `IDX_D2A03CE064DD9267` (`developer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `assignation`
--

INSERT INTO `assignation` (`id`, `developer_id`, `project_id`) VALUES
(24, 2, 9),
(25, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`) VALUES
(3, 'E-TIka'),
(4, 'Mr Faly'),
(5, 'TELMA'),
(6, 'Dago Nova'),
(7, 'LALAO'),
(8, 'MARC');

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_entree` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `nom`, `competence`, `date_entree`) VALUES
(2, 'Sitraka Rav', 'Développement Web - PHP ,Symfony', '2016-02-12 00:00:00'),
(3, 'Vincent', 'C#, .NET', '2016-02-12 00:00:00'),
(4, 'Jean Marc', 'CMS: Wordpress, Drupal', '2016-02-12 00:00:00'),
(5, 'Rachel', 'Administrateur Réseaux, PHP, Javascript', '2016-02-12 00:00:00'),
(6, 'Manda', 'PHP,  CakePHP, Js', '2016-02-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignation_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_livraison` datetime NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2FB3D0EE6A86CF55` (`assignation_id`),
  KEY `IDX_2FB3D0EE19EB6921` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `assignation_id`, `client_id`, `nom`, `date_livraison`, `type`, `langages`, `etat`) VALUES
(9, 24, 6, 'Mario game', '2016-03-12 01:15:00', 'Jeux Video', 'C#', 'en cours'),
(10, NULL, 5, 'GAP', '2016-12-12 01:18:00', 'SiteWeb - Gestion de publicité', 'php, html, css, javascript', 'en cours'),
(11, 25, 3, 'Projet test 1', '2016-04-12 01:21:00', 'projet test', 'php, html, css, javascript', '0'),
(13, NULL, 3, 'Node.js Video app', '2016-04-12 01:23:00', 'Video Web App', 'node.js,  javascript', 'en cours'),
(14, NULL, 7, 'Fanadramana', '2016-02-12 11:17:00', 'fanandramana', 'PHP', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignation`
--
ALTER TABLE `assignation`
  ADD CONSTRAINT `FK_D2A03CE0166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D2A03CE064DD9267` FOREIGN KEY (`developer_id`) REFERENCES `developer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_2FB3D0EE19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2FB3D0EE6A86CF55` FOREIGN KEY (`assignation_id`) REFERENCES `assignation` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
