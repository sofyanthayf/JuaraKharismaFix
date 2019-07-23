-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2019 at 06:14 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1-log
-- PHP Version: 7.1.11-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kharisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `camaba`
--

CREATE TABLE IF NOT EXISTS `camaba` (
  `id_camaba` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `verified_date` datetime NOT NULL,
  `referensi` varchar(30) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`id_camaba`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `camaba`
--

INSERT INTO `camaba` (`id_camaba`, `nama`, `alamat`, `no_hp`, `asal_sekolah`, `status`, `verified_date`, `referensi`, `created_on`, `last_update`) VALUES
(8, 'baco', 'baco', '893859583', 'baco', 1, '2019-07-23 15:55:39', 'f808b-ac1d4-4bdbb', '2019-07-23 07:55:39', '2019-07-23 15:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `string_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `click` int(11) NOT NULL,
  `role` varchar(2) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `string_id`, `nama`, `nim`, `username`, `password`, `click`, `role`, `created_on`, `last_update`) VALUES
(1, 'xxxx-xxxx-xxxx', 'admin', '', 'ahyar', 'c45bd1bfcb8fb1169566f39fa91ade3d', 0, '1', '0000-00-00 00:00:00', '2019-07-23 07:44:26'),
(7, 'f808b-ac1d4-4bdbb', 'panji', '52014049', 'panji', 'd6b16b990a41b83f81a58d38ad7265f1', 7, '2', '2019-07-23 15:53:48', '2019-07-23 09:09:54'),
(8, '977f2-5de5b-5931b', 'Renaldi Pranata', '09230491', 'renaldi', '27a73c8bea563852b321c3503596e705', 0, '2', '2019-07-23 15:54:09', '2019-07-23 07:54:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
