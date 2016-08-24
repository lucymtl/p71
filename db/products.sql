-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Août 2016 à 16:03
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `digikan`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `description` varchar(1024) NOT NULL,
  `picture` varchar(124) NOT NULL COMMENT 'photo du tshirt',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `picture`) VALUES
(1, 'T-shirt trop de Poutine', 25, 'blaaaaa', 'logo_bfw.png'),
(2, 'T-shirt SOKR', 20, 'blaaaaa', 'logo_bfw.png'),
(3, 'T-shirt "Trop de Poutine" Bleu', 35, 'blaaaaaa', 'logo_bfw.png'),
(5, 'T Shirt Trop de Poutine Noir', 30, 'blaaaaa', 'logo_bfw.png'),
(6, 'T-shirt Trop de Poutine Noir modele poche', 30, 'blaaaaaa', 'logo_bfw.png'),
(8, 'T-shirt Trop de Poutine Bleu modele poche', 35, 'blaaaaa', 'logo_bfw.png'),
(9, 'T-shirt Trop de Poutine Bleu modele poche', 35, 'blaaaa', 'logo_bfw.png'),
(10, 'Coque de telephone', 25, 'blaaaaa', 'logo_bfw.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
