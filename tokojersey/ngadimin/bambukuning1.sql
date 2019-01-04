-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 12:16 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bambukuning1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `password`) VALUES
(1, 'administrator', 'kamarujung.blogspot.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(4) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Jersey'),
(6, 'Sepatu Olahraga'),
(4, 'sepatu lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(4) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'lampung');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
  `id_ongkir` int(5) NOT NULL AUTO_INCREMENT,
  `kota` varchar(20) DEFAULT NULL,
  `onkos` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_ongkir`),
  KEY `kota` (`kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `kota`, `onkos`) VALUES
(1, '1', '20.000');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `harga` varchar(10) DEFAULT NULL,
  `stock` varchar(10) DEFAULT NULL,
  `berat` varchar(10) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `dibeli` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `kategori` (`kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori`, `nama_produk`, `deskripsi`, `harga`, `stock`, `berat`, `tgl_masuk`, `gambar`, `dibeli`) VALUES
(23, '1', 'ac milan', 'size l', '75.000', '4', '1', '2013-12-07', 'AC-Milan-Home-Strip-2012.jpg', '1'),
(22, '1', 'dortmund', 'size l', '70.000', '9', '1', '2013-12-07', '5601_borussia-dortmund-home-jersey-2012-13_01_l.jpg', '2'),
(7, '1', 'jersey chelsea', 'size l, m , xl', '80.000', '8', '1', '2013-12-02', '319874_323921581059871_530074792_n.jpg', '3'),
(8, '1', 'jersey bayern munich', 'size s, m , l, xl', '79.000', '9', '1', '2013-12-02', 'munchen.jpg', '5'),
(26, '1', 'ManchesterUnited', 'size l, xl', '90.000', '4', '1', '2013-12-08', 'jersey-bola_l-60283-101975.jpg', '3'),
(10, '1', 'jersey barcelona', 'size s, m , l, xl', '89.000', '5', '1', '2013-12-02', 'nike_fc_barcelona_jersey_1036075final.jpg', '2'),
(11, '1', 'jersey real madrid', 'size s, m , l, xl', '100.000', '4', '1', '2013-12-02', 'g81098_f.jpg', '3'),
(21, '1', 'paris saint germaint', 'size xl, l,m', '80.000', '4', '1', '2013-12-07', 'PSG 13-14 Home Kit.jpg', '1'),
(13, '1', 'jersey liverpool', 'size s, m , l, xl', '190.000', '9', '1', '2013-12-02', 'Liverpool 13 14 Home Kit.jpg', '3'),
(15, '1', 'jersey manc city', 'size s, m , l, xl', '120.000', '4', '1', '2013-12-02', 'city.jpg', '3'),
(16, '1', 'jerysey as roma', 'size xl, m, l', '90.000', '4', '1', '2013-12-03', 'as-roma-home-1.jpg', '2'),
(20, '1', 'jersey arsenal', 'size xl', '80.000', '4', '1', '2013-12-07', 'New-Arsenal-Jersey-2012.jpg', '2'),
(24, '1', 'jersey inter', 'size l', '80.000', '4', '1', '2013-12-08', 'inter.jpg', '1'),
(25, '1', 'Fiorentina', 'size m, s, l, xl, ', '80.000', '4', '1', '2013-12-08', 'fiorentina.jpg', '2'),
(27, '1', 'Valencia', 'size xl,l,m', '80.000', '4', '1', '2013-12-08', 'new_valencia_away_kit_2013.png', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
