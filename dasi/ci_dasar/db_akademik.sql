-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 10:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `filefoto` varchar(255) NOT NULL,
  `umur` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `filefoto`, `umur`) VALUES
(1, 12312, 'jojo', '', 323),
(2, 32323, 'oidosi', '', 32),
(3, 1232, 'sdfsdgfsd', '', 34),
(4, 1212, 'Tamabhas ks', '', 32),
(5, 2147483647, 'lilis ayumsari', '', 20),
(6, 1232, 'ldfkgkl', '', 21),
(7, 2333, 'dsmdk', '', 9090),
(9, 21213, 'sdfks;dlf;sdlkj;', '', 32),
(10, 1, 'Ali', '', 24),
(11, 2, 'Budi', '', 22),
(12, 12345, 'Dana', 'dds', 12),
(20, 0, '', 'upload/$vnamafile', 0),
(21, 0, '', 'upload/$vnamafile', 0),
(22, 103, 'Caca', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `mklh`
--

CREATE TABLE IF NOT EXISTS `mklh` (
  `kdmk` varchar(5) NOT NULL,
  `namamk` varchar(100) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mklh`
--

INSERT INTO `mklh` (`kdmk`, `namamk`, `sks`) VALUES
('MK01', 'Algoritma', 4),
('MK02', 'Basis Data', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nim` int(20) NOT NULL,
  `kdmk` varchar(5) NOT NULL,
  `index` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nim`, `kdmk`, `index`) VALUES
(1, 'MK01', 'B'),
(1, 'MK02', 'C'),
(2, 'MK01', 'A'),
(1, 'MK02', 'B');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
