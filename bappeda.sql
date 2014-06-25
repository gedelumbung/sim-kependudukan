-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2014 at 05:50 AM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.13-2+deb.sury.org~saucy+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bappeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_art`
--

CREATE TABLE IF NOT EXISTS `tbl_art` (
  `id_art` int(10) NOT NULL AUTO_INCREMENT,
  `id_rt` int(10) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_art` varchar(150) NOT NULL,
  `hubungan_krt` varchar(10) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tmp_lahir` varchar(10) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `status_kawin` varchar(75) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `kartu_kk` int(10) NOT NULL,
  `kartu_ak` int(10) NOT NULL,
  `buku_nikah` int(10) NOT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desa_kelurahan`
--

CREATE TABLE IF NOT EXISTS `tbl_desa_kelurahan` (
  `id_desa_kelurahan` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `id_kabupaten` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_desa_kelurahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE IF NOT EXISTS `tbl_kabupaten` (
  `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE IF NOT EXISTS `tbl_kecamatan` (
  `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `id_kabupaten` int(10) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `id_provinsi` int(10) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Sulawesi Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rt`
--

CREATE TABLE IF NOT EXISTS `tbl_rt` (
  `id_rt` int(10) NOT NULL AUTO_INCREMENT,
  `nama_krt` varchar(150) NOT NULL,
  `suku_krt` varchar(150) NOT NULL,
  `jumlah_art` int(5) NOT NULL,
  `jumlah_anak` int(5) NOT NULL,
  `jumlah_art_meninggal` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_rt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
