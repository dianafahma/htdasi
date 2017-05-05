-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2016 pada 11.53
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `kode_barang` varchar(6) NOT NULL DEFAULT '',
  `nama_barang` varchar(120) DEFAULT NULL,
  `gambar_i` varchar(255) DEFAULT NULL,
  `harga_barang` float DEFAULT NULL,
  `stok_barang` int(5) DEFAULT NULL,
  `kode_sup` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`kode_barang`, `nama_barang`, `gambar_i`, `harga_barang`, `stok_barang`, `kode_sup`) VALUES
('B001', 'Buku Gambar Exlusif', 'asset/images/8.jpg', 34000, 30, 'AB001'),
('PK001', 'mkmk', 'asset/images/9.jpg', 443000, 54, 'AC002'),
('PP001', 'Apalah', 'asset/images/11.jpg', 2500, 45, 'AB001'),
('B01', 'Pensil', NULL, 4000, 24, ''),
('B02', 'Buku', NULL, 3000, 21, ''),
('B03', 'Pena', NULL, 8000, 18, ''),
('B04', 'Spidol', NULL, 1000, 15, ''),
('BB05', 'Pensil', NULL, 4000, 30, ''),
('BB02', 'Buku', NULL, 3000, 20, ''),
('BB03', 'Pena', NULL, 8000, 10, ''),
('BB04', 'Spidol', NULL, 1000, 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `no_pesan` varchar(6) NOT NULL,
  `kode_barang` varchar(6) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `jumlah` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `no_pesan`, `kode_barang`, `harga`, `jumlah`) VALUES
(1, '', 'B001', 12000, 3),
(2, '', 'B001', 21000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesans`
--

CREATE TABLE `pesans` (
  `no_pesan` varchar(6) NOT NULL,
  `kode_barang` varchar(6) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `jumlah` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesans`
--

INSERT INTO `pesans` (`no_pesan`, `kode_barang`, `harga`, `jumlah`) VALUES
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B01', 4000, 2),
('PSN01', 'B02', 3000, 3),
('PSN01', 'B02', 3000, 3),
('PSN01', 'B02', 3000, 3),
('PSN01', 'B03', 8000, 4),
('PSN01', 'B03', 8000, 4),
('PSN01', 'B03', 8000, 4),
('PSN01', 'B04', 1000, 5),
('PSN01', 'B04', 1000, 5),
('PSN01', 'B04', 1000, 5),
('PSN01', 'BB01', 4000, 2),
('PSN01', 'BB01', 4000, 2),
('PSN01', 'BB01', 4000, 2),
('PSN01', 'BB02', 3000, 3),
('PSN01', 'BB02', 3000, 3),
('PSN01', 'BB02', 3000, 3),
('PSN01', 'BB03', 8000, 4),
('PSN01', 'BB03', 8000, 4),
('PSN01', 'BB03', 8000, 4),
('PSN01', 'BB04', 1000, 5),
('PSN01', 'BB04', 1000, 5),
('PSN01', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 5),
('PSN02', 'BB05', 4000, 2),
('PSN02', 'BB02', 3000, 3),
('PSN02', 'BB03', 8000, 4),
('PSN02', 'BB04', 1000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode_sup` varchar(6) NOT NULL,
  `nama_supplier` varchar(199) DEFAULT NULL,
  `kontak` varchar(35) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kode_sup`, `nama_supplier`, `kontak`, `alamat`) VALUES
('AB001', 'Abadi Jaya PT', '0228787878', 'Bandungan, Bandung, Jawa Barat'),
('AC002', 'Angkasa Ceria', '099949499', 'Gedongan, Jatijajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeldatakaryawan`
--

CREATE TABLE `tabeldatakaryawan` (
  `NIP` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trx` int(11) NOT NULL,
  `tgl_trx` date DEFAULT NULL,
  `nama_pemesan` varchar(50) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `tgl_trx`, `nama_pemesan`, `hp`, `email`, `alamat`, `total`) VALUES
(1, '2016-01-04', 'Koko', '0808080888', 'jj@gmail.com', 'dasddas', 210000),
(65, NULL, 'Danu', '09888333', 'danu@mail.com', 'Maguwo', 0),
(66, NULL, 'Danu', '09888333', 'danu@mail.com', 'Maguwo', 0),
(67, NULL, 'Danu', '09888333', 'danu@mail.com', 'Maguwo', 0),
(68, NULL, 'Danu', '09888333', 'danu@mail.com', 'Maguwo', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tw_produk`
--

CREATE TABLE `tw_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_keterangan` text NOT NULL,
  `produk_harga` float NOT NULL,
  `produk_jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tw_produk`
--

INSERT INTO `tw_produk` (`produk_id`, `produk_nama`, `produk_keterangan`, `produk_harga`, `produk_jumlah`) VALUES
(1, 'Susu Bendera', 'Produk Susu Bendera, Salah satu susu dengan gizi yang baik', 8600, 5),
(2, 'Top Coffee', 'Ini baru kopinya orang Indonesia. Bongkar... Bongkar...', 3000, 8),
(3, 'Pasta Gigi Pepsodent', 'Pasta gigi terbaik di seluruh alam semesta.', 4500, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_sup`);

--
-- Indexes for table `tabeldatakaryawan`
--
ALTER TABLE `tabeldatakaryawan`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trx`);

--
-- Indexes for table `tw_produk`
--
ALTER TABLE `tw_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `tw_produk`
--
ALTER TABLE `tw_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
