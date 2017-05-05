-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 10:22 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `filegambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `judul`, `file`, `tanggal`, `filegambar`) VALUES
(1, 'df', 'telkom.jpg', '2015-04-30', 'uploads/te'),
(2, 'kauin', 'logo-janganasal.png', '2015-04-30', ''),
(3, 'fdf', 'Jangan_Lupa_Tinggalkan_Komentar_Kalian_Ya.docx', '2015-04-30', ''),
(4, 'fgf', 'FormReg_T.PNG', '2015-04-30', ''),
(5, 'yuyu', 'eny2.jpg', '2015-04-30', ''),
(6, 'liokok', 'Nurfathan_alhakimi.jpg', '2015-04-30', ''),
(7, 'fdfdewew', 'APA_OE.jpg', '2015-04-30', 'uploads/APA_OE.jpg'),
(8, 'ewewerwwe', 'cara-membuat-laptop-menjadi-hotspot-windows8.pdf', '2015-05-17', ''),
(9, 'we', 's.png', '2015-05-17', ''),
(10, 'wr23', '14-1_012.jpg', '2015-05-17', ''),
(11, 'fffffffff', '01d52b8d6d1c697a8f97ee37cdc5e6bd.jpg', '2015-05-17', ''),
(12, 'dsds', '14-1_007.gif', '2015-05-17', ''),
(13, 'hshsj', 'images_099.jpg', '2015-05-18', ''),
(14, 'mmok', 'Free-Download-anime-wallpapers.jpg', '2015-05-18', ''),
(15, 'mmok', 'Free-Download-anime-wallpapers1.jpg', '2015-05-18', ''),
(20, 'mmok', 'Free-Download-anime-wallpapers6.jpg', '2015-05-18', ''),
(21, 'mds,m', 'tokisaki_kurumi_wallpaper_by_karciadastardly99-d66ie31.jpg', '2015-05-18', ''),
(22, '121', 'anime_boy_render_3_by_sakura_mina-d6tvbvv.png', '2015-06-23', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
