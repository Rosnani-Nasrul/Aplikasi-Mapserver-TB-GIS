SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `lokasidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
 `id` varchar(3) NOT NULL AUTO_INCREMENT,
 `nama` Varchar(255) COLLATE latin1_general_ci NOT NULL,
 `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
`kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
`user` varchar(25) COLLATE latin1_general_ci NOT NULL,
`password` varchar(255) COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

 Dumping data for table `admin`

SERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`)  VALUES
(1, 'Agus Sumarna', 'sumarna@yahoo.com', 'pria', 'agus', 'fdf169558242ee051cca1479770ebac3'),
(2, 'Siera Nevada', 'siera@yahoo.com', 'Wanita', 'siera', '47c0abc24dd9c450577173afdd173d64');

-- --------------------------------------------------------
