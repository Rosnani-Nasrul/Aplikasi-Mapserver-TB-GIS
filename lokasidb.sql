SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lokasidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
 `id` varchar(3) NOT NULL AUTO_INCREMENT,
 `nama` Varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
`kelamin` varchar(8) NOT NULL,
`user` varchar(25) NOT NULL,
`password` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

 Dumping data for table `admin`

SERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`)  VALUES
(1, 'Rosnani Nasrul', 'ros@gmail.com', 'wanita', 'ros', '12345'),
(2, 'Nur Mulyana Mustari', 'uly@gmail.com', 'wanita', 'uly', '12345'),

-- --------------------------------------------------------
