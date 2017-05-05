-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2016 at 07:58 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wondrous1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `jumlah`, `harga`, `stok`) VALUES
(0, '', 0, 0, 0),
(0, '', 0, 0, 0),
(0, '', 0, 0, 0),
(0, '', 0, 0, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0),
(112, 'pulpen', 5, 700, 0),
(113, 'banana', 12, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'rndynt', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `no_psn` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'pria'),
(2, 'wanita');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `nama`, `email`, `pesan`) VALUES
(45, 'asdad', 'sdfss', ' '),
(46, 'asdad', '', ' ssdfsdf'),
(47, 'asdad', '', ' '),
(48, 'asdad', '', ' sff'),
(49, 'asdad', '', ' dasdad'),
(50, 'asdad', '', ' dasdad'),
(51, 'asdad', 'sdfs', ' '),
(52, 'asda', 'dasdasds', ' '),
(53, '', 'dasdad', ' dasda'),
(54, 'asd', 'sdsf', ' '),
(55, '', 'dsvfsfasd', ' sadad'),
(56, 'dad', 'sassdd', ' '),
(57, '', 'sada', ' sdfsd'),
(58, 'ad', 'sdfs', ''),
(59, 'ad', '', ''),
(60, 'asd', 'sdfsd', ''),
(61, 'asd', 'sdfsd', ''),
(62, 'asd', 'sdfsd', ''),
(63, 'asd', 'sdfsd', ''),
(64, 'ads', 'ads', ''),
(65, 'ads', 'ads', ''),
(66, 'ads', 'ads', ''),
(67, 'sd', 'sdfd', ''),
(68, 'sd', 'sdfd', ''),
(69, 'sd', 'sdfd', ''),
(70, 'sd', 'sdfd', ''),
(71, '', '', ' '),
(72, 'asd', 'asd', ' '),
(73, 'asd', 'asd', ' sadasd'),
(74, 'sd', '', ' asd'),
(75, '', '', ' asd'),
(76, 'asdad', 'sd', ' adad'),
(77, 'asd', 'asda', ' '),
(78, 'asd', 'asda', ' adasdasdasdasdasdasd'),
(79, 'asd', 'asda', ' saddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(80, 'asd', 'asda', ' ad da asd a adfa afasfdfa ada '),
(81, 'asd', 'asda', ' sdffsdfsdfsf bbgfjghgjhth gdrfdsdf dfgdfhdds srgdgdfts dgafdsgdewrt dfgfxfsdfsdf'),
(82, 'asd', 'asda', ' a'),
(83, 'asd', 'asda', ' s'),
(84, 'asd', 'asda', ' qwer'),
(85, 'sad', 'sds', ' '),
(86, 'sad', 'sds', ' d'),
(87, 'sad', 'sds', ' xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcvxc xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvx'),
(88, 'sad', 'sds', '  xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxc'),
(89, 'sad', 'sds', '  xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv'),
(90, 'sad', 'sds', '  xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxcvxvxcv xcvxcvxcvxcvxcvxcvxcvcxvxcvxvxcvxc'),
(91, '1', 'ddfsdfs', ' sf'),
(92, 'qwerttttttttttttttttttttttttttttttttttt', 'ddfsdfs', ' ddd'),
(93, 'qwwe sfdsfdssf ', 'ddfsdfs', ' '),
(94, 'wer', '', ' '),
(95, 'werwew', 'wefw', ' fwfd'),
(96, 'werwew', 'wefw', ' fdssfsdf sdfsdfdsfwefewr ewsdswfewccwfef wfwefewfww'),
(97, 'werwew', 'wefw', ' fergregergerger wfwdfeg4tewtewf w wwr grgw wee egwe wgf rgehte g wet wtw tewer wewrwer weew twetw etw etwetwe twe twet wetwe twt wetf egggggt44r43fwfwfwre4w'),
(98, 'werwew', 'wefw', '  qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwe'),
(99, 'werwew', 'wefw', ' asdqwertyh   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop '),
(100, 'werwew', 'wefw', '   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qw'),
(101, 'werwew', 'wefw', '   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qwertyuiop   qw'),
(102, 'asd', 'rendy@admin.com', ' '),
(103, 'rf', 'rg', ' gtrgtrgrtg'),
(104, 'rf', 'rg', '  rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4g'),
(105, 'rf', 'rg', '  rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4g'),
(106, 'rfrtggg', 'rg', ' 4r rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g'),
(107, 'rfrtggg', 'rg', ' rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf43grf43g rggt4gf'),
(108, 'asadas', 'dasdasda', ' asdas'),
(109, 'asadasasdas', 'dasdasda', ' asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa'),
(110, 'asadasasdas', 'dasdasda', '  asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa'),
(111, 'asadasasdas', 'dasdasda', '  asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa'),
(112, 'asadasasdas', 'dasdasda', '  asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa '),
(113, 'asadasasdas', 'dasdasda', '  asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa '),
(114, 'asdadas', 'asdasdas', ' dasdsa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaa'),
(115, '', '', '  asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa asdsaaaaaaaaaaaaa ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `no_pemesanan` varchar(50) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `harga` float NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `category_name` varchar(100) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` float NOT NULL,
  `stok` int(5) NOT NULL,
  `stts_dibeli` int(5) NOT NULL,
  `gbr_kecil` varchar(100) NOT NULL,
  `gbr_produk_ii` varchar(100) NOT NULL,
  `gbr_produk_iii` varchar(100) NOT NULL,
  `gbr_iii` varchar(100) NOT NULL,
  `gbr_i` varchar(100) NOT NULL,
  `gbr_ii` varchar(100) NOT NULL,
  `gbr_besar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tipe_produk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`category_name`, `sub_category_id`, `kode_produk`, `nama_produk`, `harga`, `stok`, `stts_dibeli`, `gbr_kecil`, `gbr_produk_ii`, `gbr_produk_iii`, `gbr_iii`, `gbr_i`, `gbr_ii`, `gbr_besar`, `deskripsi`, `tipe_produk`) VALUES
('wanita', 9, 'ABA1', 'Jersey Top', 499900, 10, 0, 'media/list_produk/women/aba1.jpg', 'media/list_produk/women/aba1.jpg', 'media/list_produk/women/aba1.jpg', '', '', '', '', '', 'atasan'),
('wanita', 9, 'ABA2', 'NYC Top', 449900, 7, 0, 'media/list_produk/women/aba2.jpg', 'media/list_produk/women/aba2.jpg', 'media/list_produk/women/aba2.jpg', '', '', '', '', '', 'atasan'),
('wanita', 9, 'ABA3', 'Jersey Top', 249900, 10, 0, 'media/list_produk/women/aba3.jpg', 'media/list_produk/women/aba3.jpg', 'media/list_produk/women/aba3.jpg', '', '', '', '', '', 'atasan'),
('wanita', 9, 'ABA4', 'NYC Top', 449900, 10, 0, 'media/list_produk/women/aba2.jpg', 'media/list_produk/women/aba2.jpg', 'media/list_produk/women/aba2.jpg', '', '', '', '', '', 'atasan'),
('pria', 1, 'AQZ1', 'checked Shirt', 499900, 10, 0, 'media/list_produk/hm1.jpg', 'media/list_produk/hm11.jpg', 'media/list_produk/hm111.jpg', '', '', '', '', '', 'atasan'),
('pria', 1, 'AQZ2', 'Cotton Shirt', 449900, 10, 0, 'media/list_produk/hm2.jpg', 'media/list_produk/hm22.jpg', 'media/list_produk/hm222.jpg', '', '', '', '', '', 'atasan'),
('pria', 1, 'AQZ3', 'Henley Shirt', 439900, 10, 0, 'media/list_produk/hm3.jpg', 'media/list_produk/hm33.jpg', 'media/list_produk/hm333.jpg', '', '', '', '', '', ''),
('pria', 1, 'AQZ4', 'Rendy Shirt', 439900, 10, 10, 'media/list_produk/hm1.jpg', 'media/list_produk/hm11.jpg', 'media/list_produk/hm111.jpg', '', '', '', '', '', ''),
('pria', 2, 'BB1', 'Skinny Jeans', 499900, 10, 0, 'media/list_produk/bb1.jpg', 'media/list_produk/bb1.jpg', 'media/list_produk/bb1.jpg', '', '', '', '', '', ''),
('pria', 2, 'BB2', 'Slim Jeans', 599900, 10, 0, 'media/list_produk/bb2.jpg', 'media/list_produk/bb2.jpg', 'media/list_produk/bb2.jpg', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrasi`
--

CREATE TABLE `tbl_registrasi` (
  `no` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registrasi`
--

INSERT INTO `tbl_registrasi` (`no`, `nama`, `alamat`) VALUES
('JVY016-5', 'sdf', 'sfsdf'),
('LSG016-4', 'dsfsd', 'asdasd'),
('RCO016-3', 'rendy', 'banda aceh'),
('sdfsc', 'cvsdvs', 'sdfsdc'),
('sds', 'dsfsdf', 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_category_id`, `sub_category_name`, `category_id`) VALUES
(1, 'atasan', 1),
(2, 'bawahan', 1),
(3, 'sneakers & skate', 1),
(4, 'sepatu olahraga', 1),
(5, 'analog', 1),
(6, 'digital', 1),
(7, 'tas selempang', 1),
(8, 'tas punggung', 1),
(9, 'atasan', 2),
(10, 'bawahan', 2),
(11, 'sneakers', 2),
(12, 'heels', 2),
(13, 'analog', 2),
(14, 'digital', 2),
(15, 'hand bag', 2),
(16, 'dompet', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tbl_registrasi`
--
ALTER TABLE `tbl_registrasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
