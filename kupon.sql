-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 09:25 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `god`
--

-- --------------------------------------------------------

--
-- Table structure for table `kupon`
--

CREATE TABLE IF NOT EXISTS `kupon` (
  `kupon_code` varchar(30) NOT NULL,
  `kode_beli` varchar(100) NOT NULL,
  `total_kupon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kupon`
--

INSERT INTO `kupon` (`kupon_code`, `kode_beli`, `total_kupon`) VALUES
('Resource id #102R75V', '14981', '10000'),
('Resource id #1052UYGR8K', '5390', '10000'),
('Resource id #1064SZX', '14981', '10000'),
('Resource id #106PWBH', '14981', '10000'),
('Resource id #108HZABLK7', '8097', '10000'),
('Resource id #10BLX857GZ', '5390', '15000'),
('Resource id #10BPGKU', '14981', '10000'),
('Resource id #10BRFTPQGZ', '8097', '15000'),
('Resource id #10GT1L5J7F', '14981', '10000'),
('Resource id #10J78VEUDP', '5390', '10000'),
('Resource id #10JCVPZ', '14981', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kupon`
--
ALTER TABLE `kupon`
  ADD PRIMARY KEY (`kupon_code`), ADD KEY `kode_beli` (`kode_beli`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kupon`
--
ALTER TABLE `kupon`
ADD CONSTRAINT `kupon_ibfk_1` FOREIGN KEY (`kode_beli`) REFERENCES `selesai` (`kode_beli`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
