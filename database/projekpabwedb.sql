-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 02:59 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projekpabwedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL,
  `id_katalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `hal` varchar(4) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_edit` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_katalog`, `id_kategori`, `judul`, `pengarang`, `penerbit`, `hal`, `gambar`, `harga`, `deskripsi`, `tanggal`, `tanggal_edit`) VALUES
(14, 6, 5, 'Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka', '444', '20180111203708.jpg', '100000', 'Buku ini menceritakan seorang remaja pria yang baru lulus SMA yang selama enam tahun tinggal di Amsterdam bersama neneknya', '2018-01-12', '0000-00-00'),
(15, 6, 7, 'Ilmu Pengetahuan Sosial untuk Sekolah Menengah Kejuruan ', 'Nur Wahyu Rachmadi', 'Pusat Perbukuan Departemen Pendidikan Nasional', '200', '20180111204019.jpg', '80000', 'Buku Ilmu Pengetahuan Sosial', '2018-01-12', '0000-00-00'),
(17, 7, 7, 'Logika Informatika', 'Dra. Ery Dewayani', 'Graha Ilmu', '220', '20180111204653.jpg', '72000', 'Buku ini meliputi himpunan dan sub-himpunan, operasi-operasi dasar himpunan, relasi,teori, sistem bilangan dan komplemen.', '2018-01-12', '0000-00-00'),
(18, 6, 7, 'Pendidikan Kewarganegaraan 12', 'Abdul Saleh', 'Abdoel PRESS', '80', '20180111204907.jpg', '80500', 'Perkuat karakter anak bangsa dengan pendidikan karakter PKN\r\n', '2018-01-12', '0000-00-00'),
(19, 6, 7, 'KIMIA', 'AR', 'Erlangga', '200', '20180111205024.jpg', '80500', 'Buku Kimia untuk SMP', '2018-01-12', '0000-00-00'),
(20, 7, 9, 'Dasar Dasar Kewirausahaan', 'Dewi Lestari', 'Pustaka suci', '340', '20180111205149.jpg', '58000', 'Pemahaman dasar kewirausahaan', '2018-01-12', '0000-00-00'),
(21, 7, 8, 'Deception Point', 'Smith Lewis', 'Pustaka Indah', '500', '20180111205406.jpg', '300000', 'Philosophy yang cocok untuk zaman ini', '2018-01-12', '0000-00-00'),
(22, 6, 6, 'PHP Windows', 'Budi', 'Erlangga', '300', '20180111205530.jpg', '100000', 'Pengenalan PHP Windows bagi kalangan pemula', '2018-01-12', '0000-00-00'),
(23, 7, 6, 'Algoritma C++', 'Ahmad Fauzi', 'Gramedia', '220', '20180111205725.jpg', '100000', 'Pengenalan Algoritma C++ bagi pemula', '2018-01-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cus` int(11) NOT NULL,
  `nama_cus` varchar(40) NOT NULL,
  `email_cus` varchar(40) NOT NULL,
  `password_cus` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `nama_cus`, `email_cus`, `password_cus`) VALUES
(14, 'arsantya', 'arsantyasaragih@yahoo.co.id', 'arsantya123'),
(15, 'oriani', 'orianisihaloho@hotmail.com', 'oriani'),
(16, 'arsan', 'arsan@hotmail.com', 'arsan'),
(17, 'wilda', 'wilda@hotmail.com', 'wilda'),
(18, 'oriani', 'oriani@hotmail.com', 'oriani'),
(19, 'ani', 'ani@hotmail.com', 'ani'),
(20, 'hel', 'hel@hotmail.com', 'hel'),
(21, 'z', 'z@hotmail.com', 'z'),
(22, 'hf', 'hf@mail.com', 'hf'),
(23, 'n', 'n@mail.com', 'n'),
(24, 'ori', 'ori@mail.com', 'ori'),
(25, 'me', 'me@hotmail.com', 'me'),
(26, 'adam', 'adam@hotmail.com', 'adam'),
(27, 'os', 'os@hotmail.com', 'os'),
(28, 'an', 'an@hotmail.com', 'an'),
(29, 'ss', 'ss@hotmail.com', 'ss'),
(30, 'so', 'ada@hotmail.com', 'ada123'),
(31, 'ju', 'ju@hotmail.com', 'ju123'),
(32, 'ai', 'ai@gmail.com', 'ai'),
(33, 'hermina agnes', 'minamiyong@blabla', 'hrmnagns'),
(34, '', 'desykristinasiahaan@gmail.com', 'desy'),
(35, 'her', 'her@gmail.com', 'her123'),
(36, 'okta', 'okta@hotmai.com', 'okta'),
(37, 'll', 'll@hotmail.com', 'll'),
(38, 'love', 'love@hotmail.com', 'love'),
(42, 'joes', 'joes@hotmail.com', 'joes'),
(43, 'liu', 'liu@hotmail.com', 'liu');

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE IF NOT EXISTS `diskon` (
  `id_buku_diskon` int(11) NOT NULL,
  `id_katalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `hal` varchar(4) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_edit` date NOT NULL,
  `diskon` varchar(4) NOT NULL,
  `harga_diskon` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_buku_diskon`, `id_katalog`, `id_kategori`, `judul`, `pengarang`, `penerbit`, `hal`, `gambar`, `harga`, `deskripsi`, `tanggal`, `tanggal_edit`, `diskon`, `harga_diskon`) VALUES
(20, 0, 6, 'PHP', 'Ayuningsih', 'Sumber Pustaka', '220', '20180111210613.jpg', '150000', 'Buku pengenalan PHP ', '2018-01-12', '0000-00-00', '20', 120000),
(21, 0, 7, 'Sistem Operasi', 'Lala', 'Pusat Perbukuan Departemen Pendidikan Nasional', '100', '20180111210927.jpg', '20000', 'Pengenalan bidang studi SIstem Operasi', '2018-01-12', '0000-00-00', '20', 16000),
(22, 0, 5, 'Komik Anak Sekolah Gokil', 'Smith Lewis', 'DAR! Mizan', '30', '20180111211437.jpg', '30000', 'Komik terlucu sepanjang masa', '2018-01-12', '0000-00-00', '50', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE IF NOT EXISTS `katalog` (
  `id_katalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `katalog` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_kategori`, `katalog`) VALUES
(5, 5, 'Anak'),
(6, 5, 'Remaja'),
(7, 5, 'Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(5, 'Fiction'),
(6, 'Technology'),
(7, 'Text Book'),
(8, 'Philosophy'),
(9, 'Self-Increase');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `total_harga` varchar(12) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `qty_total` varchar(10) NOT NULL,
  `status_beli` enum('order','lunas') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `kode_beli`, `id_cus`, `id_buku`, `qty`, `harga`, `total_harga`, `total_bayar`, `qty_total`, `status_beli`) VALUES
(24, '32356', 9, 4, '2', '20000', '40000', '', '', 'order'),
(26, '22884', 15, 1, '1', '56000', '56000', '', '', 'order'),
(27, '14285', 15, 2, '1', '80500', '80500', '', '', 'order'),
(28, '26754', 16, 5, '2', '50000', '100000', '', '', 'order'),
(29, '24679', 17, 1, '2', '56000', '112000', '', '', 'order'),
(30, '30337', 15, 1, '1', '56000', '56000', '', '', 'order'),
(31, '28397', 17, 1, '2', '56000', '112000', '', '', 'order'),
(34, '5568', 19, 2, '2', '80500', '161000', '', '', 'order'),
(35, '6338', 29, 0, '1', '60000', '60000', '', '', 'order'),
(36, '4233', 42, 2, '2', '80500', '161000', '', '', 'order'),
(37, '7253', 27, 15, '2', '80000', '160000', '', '', 'order');

-- --------------------------------------------------------

--
-- Table structure for table `kupon`
--

CREATE TABLE IF NOT EXISTS `kupon` (
  `kupon_code` varchar(30) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `total_kupon` varchar(20) DEFAULT NULL,
  `id_cus` varchar(50) NOT NULL,
  `id_use_for` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kupon`
--

INSERT INTO `kupon` (`kupon_code`, `kode_beli`, `total_kupon`, `id_cus`, `id_use_for`) VALUES
('63KM2PRS', '10015', '15000', '27', NULL),
('65SCNV9J', '10015', '15000', '27', NULL),
('fjsksk', '2635', '15000', '43', '22101'),
('Resource id #104XE68CK9', '29101', '15000', '18', NULL),
('Resource id #104Z23KARY', '22101', '15000', '43', NULL),
('Resource id #1061SUGYP3', '22101', '15000', '43', NULL),
('Resource id #10H26AYVXR', '22101', '15000', '43', NULL),
('Resource id #10LC24BDE8', '22101', '15000', '43', NULL),
('Resource id #10SF98UW54', '22101', '15000', '43', NULL),
('Resource id #10Z1MU5A48', '22101', '15000', '43', NULL),
('X3DAM125', '10015', '15000', '27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_beli` int(11) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `total_harga` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `qty_total` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `kode_beli`, `id_cus`, `id_buku`, `qty`, `harga`, `total_harga`, `total_bayar`, `qty_total`) VALUES
(16, '23131', 11, 2, '3', '80500', '241500', '', ''),
(17, '23131', 11, 1, '1', '56000', '56000', '', ''),
(18, '12786', 11, 1, '11', '56000', '616000', '', ''),
(19, '30870', 12, 2, '3', '80500', '241500', '', ''),
(20, '30870', 12, 3, '1', '90000', '90000', '', ''),
(21, '21850', 11, 2, '3', '80500', '241500', '', ''),
(25, '32356', 9, 4, '2', '20000', '40000', '', ''),
(26, '24594', 15, 6, '1', '40000', '40000', '', ''),
(27, '11725', 15, 1, '1', '56000', '56000', '', ''),
(28, '22884', 15, 1, '1', '56000', '56000', '', ''),
(29, '14285', 15, 2, '1', '80500', '80500', '', ''),
(30, '26754', 16, 5, '2', '50000', '100000', '', ''),
(31, '29101', 17, 1, '1', '56000', '56000', '', ''),
(32, '19682', 17, 1, '2', '56000', '112000', '', ''),
(33, '24679', 17, 1, '2', '56000', '112000', '', ''),
(34, '4042', 18, 1, '2', '56000', '112000', '', ''),
(35, '30337', 15, 1, '1', '56000', '56000', '', ''),
(36, '28397', 17, 1, '2', '56000', '112000', '', ''),
(37, '29796', 18, 1, '2', '56000', '112000', '', ''),
(38, '19401', 19, 1, '2', '56000', '112000', '', ''),
(39, '20424', 20, 7, '1', '100000', '100000', '', ''),
(40, '5568', 19, 2, '2', '80500', '161000', '', ''),
(41, '26030', 21, 6, '2', '40000', '80000', '', ''),
(42, '19581', 22, 5, '2', '50000', '100000', '', ''),
(43, '19581', 22, 6, '3', '40000', '120000', '', ''),
(44, '25514', 26, 2, '2', '80500', '161000', '', ''),
(45, '25514', 26, 7, '2', '100000', '200000', '', ''),
(46, '10015', 27, 0, '2', '80000', '160000', '', ''),
(47, '10015', 27, 0, '1', '60000', '60000', '', ''),
(48, '8275', 28, 0, '1', '60000', '60000', '', ''),
(49, '6338', 29, 0, '1', '60000', '60000', '', ''),
(50, '4275', 30, 5, '2', '50000', '100000', '', ''),
(51, '22128', 31, 5, '1', '50000', '50000', '', ''),
(52, '19705', 32, 2, '1', '80500', '80500', '', ''),
(53, '18205', 35, 5, '1', '50000', '50000', '', ''),
(54, '21490', 36, 2, '2', '80500', '161000', '', ''),
(55, '10819', 37, 5, '2', '50000', '100000', '', ''),
(56, '16482', 38, 2, '2', '80500', '161000', '', ''),
(57, '30195', 39, 2, '2', '80500', '161000', '', ''),
(58, '29360', 40, 5, '2', '50000', '100000', '', ''),
(59, '25777', 41, 5, '2', '50000', '100000', '', ''),
(60, '4233', 42, 2, '2', '80500', '161000', '', ''),
(61, '22101', 43, 5, '2', '50000', '100000', '', ''),
(62, '30513', 18, 18, '1', '80500', '80500', '', ''),
(63, '7253', 27, 15, '2', '80000', '160000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `tarif` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`, `tarif`) VALUES
(1, 'Sumatera Utara', '11000'),
(2, 'Sumatera Barat', '12500'),
(3, 'Sumatera Selatan', '18000'),
(4, 'Jakarta', '48500');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_review` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `judul`, `review`) VALUES
(1, '', ''),
(2, 'perahu', 'baguss'),
(3, 'Dasar Dasar Kewirausahaan', 'jkdjflsdfdls');

-- --------------------------------------------------------

--
-- Table structure for table `selesai`
--

CREATE TABLE IF NOT EXISTS `selesai` (
  `kode_beli` varchar(100) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `qty_total` varchar(10) NOT NULL,
  `bayar` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `tgl_order` text NOT NULL,
  `status_beli` enum('order','lunas') NOT NULL,
  `status_pengiriman` enum('belum dikirim','dikirim','diterima') NOT NULL,
  `total_kupon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selesai`
--

INSERT INTO `selesai` (`kode_beli`, `id_cus`, `qty_total`, `bayar`, `total_bayar`, `tgl_order`, `status_beli`, `status_pengiriman`, `total_kupon`) VALUES
('', 0, '', '', '', '', 'order', 'belum dikirim', ''),
('10015', 27, '', '', '232500', '2018-01-10', 'lunas', 'diterima', ''),
('10819', 37, '2', '100000', '111000', '2018-01-11', 'order', 'belum dikirim', ''),
('14285', 15, '', '', '', '', 'order', 'belum dikirim', ''),
('16482', 38, '2', '161000', '172000', '2018-01-11', 'order', 'belum dikirim', ''),
('18205', 35, '', '', '61000', '2018-01-11', 'order', 'belum dikirim', ''),
('19401', 19, '2', '112000', '123000', '2018-01-08', 'lunas', 'diterima', ''),
('19581', 22, '5', '220000', '231000', '2018-01-08', 'order', 'belum dikirim', ''),
('19682', 17, '', '', '68182', '2017-12-18', 'order', 'belum dikirim', ''),
('19705', 32, '1', '80500', '91500', '2018-01-11', 'order', 'belum dikirim', ''),
('20424', 20, '1', '100000', '112500', '2018-01-08', 'order', 'belum dikirim', ''),
('21490', 36, '2', '161000', '172000', '2018-01-11', 'order', 'belum dikirim', ''),
('22101', 43, '2', '100000', '111000', '2018-01-11', 'order', 'belum dikirim', ''),
('22128', 31, '1', '50000', '68000', '2018-01-11', 'order', 'belum dikirim', ''),
('22884', 15, '', '', '', '', 'order', 'belum dikirim', ''),
('24594', 15, '', '', '', '', 'order', 'belum dikirim', ''),
('24679', 17, '', '', '', '', 'order', 'belum dikirim', ''),
('25514', 26, '4', '361000', '373500', '2018-01-09', 'order', 'belum dikirim', ''),
('25777', 41, '2', '100000', '111000', '2018-01-11', 'order', 'belum dikirim', ''),
('26030', 21, '', '', '91000', '2018-01-08', 'order', 'belum dikirim', ''),
('26754', 16, '2', '100000', '', '', 'order', 'belum dikirim', ''),
('28397', 17, '', '', '', '', 'order', 'belum dikirim', ''),
('29101', 17, '', '', '', '', 'order', 'dikirim', ''),
('29360', 40, '2', '100000', '111000', '2018-01-11', 'order', 'belum dikirim', ''),
('30195', 39, '2', '161000', '172000', '2018-01-11', 'order', 'belum dikirim', ''),
('30337', 15, '', '', '', '', 'order', 'dikirim', ''),
('30513', 18, '', '', '', '', 'order', 'belum dikirim', ''),
('30870', 12, '1', '90000', '101000', '2017-02-25', 'lunas', 'diterima', ''),
('4233', 42, '2', '161000', '', '', 'order', 'belum dikirim', ''),
('4275', 30, '2', '100000', '118000', '2018-01-11', 'order', 'belum dikirim', ''),
('5568', 19, '2', '161000', '', '', 'order', 'belum dikirim', ''),
('6338', 29, '1', '60000', '', '', 'order', 'belum dikirim', ''),
('7253', 27, '2', '160000', '', '', 'order', 'belum dikirim', ''),
('8275', 28, '1', '60000', '71000', '2018-01-10', 'order', 'belum dikirim', '');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE IF NOT EXISTS `stok` (
  `id_stok` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `stok` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_buku`, `stok`) VALUES
(16, 14, '100'),
(17, 15, '98'),
(19, 17, '100'),
(20, 18, '100'),
(21, 19, '100'),
(22, 20, '100'),
(23, 21, '20'),
(24, 22, '50'),
(25, 23, '100');

-- --------------------------------------------------------

--
-- Table structure for table `stok_diskon`
--

CREATE TABLE IF NOT EXISTS `stok_diskon` (
  `id_stok_diskon` int(11) NOT NULL,
  `id_buku_diskon` int(11) NOT NULL,
  `stok_diskon` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_diskon`
--

INSERT INTO `stok_diskon` (`id_stok_diskon`, `id_buku_diskon`, `stok_diskon`) VALUES
(1, 22, '100'),
(2, 20, '100'),
(3, 21, '100');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE IF NOT EXISTS `superuser` (
  `id_su` int(11) NOT NULL,
  `nama_su` varchar(40) NOT NULL,
  `email_su` varchar(40) NOT NULL,
  `password_su` varchar(40) NOT NULL,
  `level` enum('owner','admin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`id_su`, `nama_su`, `email_su`, `password_su`, `level`) VALUES
(2, 'admin', 'arsantyasaragih37@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE IF NOT EXISTS `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `kode_beli` varchar(110) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `no_rumah` varchar(5) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `tarif` varchar(15) NOT NULL,
  `total_kupon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `kode_beli`, `nama_penerima`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `desa`, `rw`, `rt`, `no_rumah`, `no_telp`, `tarif`, `total_kupon`) VALUES
(1, '2994', 'Atokillah', 'Jawa Tengah', 'xx', 'xxx', 'xxxx', 'xxxxx', '5', '6', '32', '082453456754', '12500', ''),
(2, '10472', 'Fulan', 'Jawa Tengah', 'xx', 'xxxx', 'xxxxx', 'xxxxxx', '2', '5', '27', '081252258465', '12500', ''),
(3, '21628', 'Fulan bin Fulan', 'Jawa Barat', 'ciamis', 'ciamos', '87654', 'cibadut', '9', '6', '24', '081234567678', '18000', ''),
(4, '19201', 'Zaki', 'Jawa Tengah', 'xx', 'xxx', 'xxx', 'xx', '6', '7', '43', '08123456634', '12500', ''),
(5, '27569', 'zakia', 'Kalimantan Barat', 'x', 'x', 'x', 'x', '6', '7', '25', '085676554123', '48500', ''),
(6, '21866', 'siti zulaikha', 'Jawa Barat', 'xx', 'xx', 'xx', 'xx', '6', '4', '47', '086576542341', '18000', ''),
(7, '23131', 'Siti Zulaikha', 'Jawa Tengah', 'xxx', 'xx', 'xx', 'xx', '6', '5', '76', '085678765345', '12500', ''),
(8, '12786', 'bang boby', 'Jawa Tengah', 'x', 'x', 'x', 'x', '4', '2', '12', '085853480591', '12500', ''),
(9, '30870', 'AHMAD', 'Jawa Timur', 'nganjuk', 'baron', '64394', 'jekek', '09', '02', '22', '085853480591', '11000', ''),
(10, '11725', '', '--pilih provinsi--', '', '', '', '', '', '', '', '', '', ''),
(11, '19682', 'wilda', 'Kalimantan Barat', 'a', 'b', '1234', 'c', '12', '13', '14', '0892324', '48500', ''),
(12, '29796', 'oriani', 'Sumatera Utara', 'simalungun', 'a', 'b', 'c', '01', '02', '6', '081377055148', '11000', ''),
(13, '19401', 'ani', 'Sumatera Utara', 'a', 'b', '123', 'baaa', '09', '98', '08', '089638045574', '11000', ''),
(14, '20424', 'hel', 'Sumatera Barat', '02', '09', '344', '09', '99', '90', '8', '08963804574', '12500', ''),
(15, '26030', 'z', 'Sumatera Utara', 'simalungun', 'siantar', '21136', '09', '80', '08', '08', '081370', '11000', ''),
(16, '19581', 'hf', 'Sumatera Utara', 'simalungun', 'siantar', '21135', '30', '35', '20', '77', '089638045574', '11000', ''),
(17, '25514', 'adam', 'Sumatera Barat', 'simalungun', '01', '21136', '03', '3', '3', '8', '089638045574', '12500', ''),
(18, '10015', 'as', 'Sumatera Barat', '23', '12', '21136', 'nn', '98', '89', '98', '08976', '12500', ''),
(19, '8275', 'an', 'Sumatera Utara', 'an', 'an', '21136', '89', '77', '67', '77', '0896', '11000', ''),
(20, '4275', 'ADA', 'Sumatera Utara', 'Deli Serdang', 'Lubuk Pakam', '20518', 'Pasar', '67', '76', '22', '085297141476', '11000', ''),
(21, '4275', '', '--pilih provinsi--', '', '', '', '', '', '', '', '', '', ''),
(22, '4275', 'QQQ', 'Sumatera Barat', '', '', '', '', '', '', '', '', '12500', ''),
(23, '4275', 'YY', 'Sumatera Selatan', '', '', '', '', '', '', '', '', '18000', ''),
(24, '22128', 'aaa', 'Sumatera Selatan', '', '', '', '', '', '', '', '', '18000', ''),
(25, '19705', 'hahah', 'Sumatera Utara', 'simalungun', 'lama', '21136', '09', '77', '67', '77', '089638045574', '11000', ''),
(26, '18205', 'HERMINA', 'Sumatera Utara', 'Deli Serdang', 'Lubuk Pakam', '20518', 'Pasar Melintang', '66', '76', '22', '085297141476', '11000', ''),
(27, '21490', 'okta', 'Sumatera Utara', 'ok', 'ko', '21136', '8', '6', '6', '7', '089638045574', '11000', ''),
(28, '10819', 'll', 'Sumatera Utara', 'oo', 'po', '21136', '7', '6', '3', '4', '0896', '11000', ''),
(29, '16482', 'love', 'Sumatera Utara', 'aa', 'rr', '56788', 'rfr', '8', '8', '8', '567890', '11000', ''),
(30, '30195', 'he', 'Sumatera Utara', 'gh', 'gh', '678', 'hj', '7', '7', '789', '67890', '11000', ''),
(31, '29360', 'bo', 'Sumatera Utara', 'bot', 'ku', '21136', 'hu', '2', '5', '6', '0896', '11000', ''),
(32, '25777', 'zoela', 'Sumatera Utara', 'ro', 'to', '21136', '8', '5', '3', '6', '0896380', '11000', ''),
(33, '22101', 'liu', 'Sumatera Utara', 'ty', 'lo', '2453', 'gut', '4', '2', '8', '089638045574', '11000', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_buku_diskon`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `kupon`
--
ALTER TABLE `kupon`
  ADD PRIMARY KEY (`kupon_code`), ADD KEY `kode_beli` (`kode_beli`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`kode_beli`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `stok_diskon`
--
ALTER TABLE `stok_diskon`
  ADD PRIMARY KEY (`id_stok_diskon`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id_su`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_buku_diskon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `stok_diskon`
--
ALTER TABLE `stok_diskon`
  MODIFY `id_stok_diskon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id_su` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
