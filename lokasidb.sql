-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2011 at 09:48 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `endemikdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(3) NOT NULL AUTO_INCREMENT,
 `nama` Varchar(255) COLLATE latin1_genral_ci NOT NULL,
 `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
`kelamin` varchar(8) COLLATE latin1_geeral_ci NOT NULL,
`user` int(25) COLLATE latin1_general_ci NOT NULL,
`password` varchar(255) COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY (`nama`)
)
ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latn1_general_ci AUTO_INCREMENT=3 ;

 Dumping data for table `admn`

SERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`,
