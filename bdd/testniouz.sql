-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 07:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testniouz`
--

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_nom` varchar(75) NOT NULL,
  `mem_prenom` varchar(100) NOT NULL,
  `mem_mail` varchar(150) NOT NULL,
  `mem_mdp` varchar(15) NOT NULL COMMENT 'mdp crypté',
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`mem_id`, `mem_nom`, `mem_prenom`, `mem_mail`, `mem_mdp`) VALUES
(3, 'RAKOTO', 'Rija', 'rija@gmail.com', 'rijaeddy'),
(4, 'RAKOTO', 'Rado', 'rado@gmail.com', '$1$Z80.uN1.$0cx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
