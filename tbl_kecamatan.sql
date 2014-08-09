-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 09 Agu 2014 pada 16.23
-- Versi Server: 5.5.35
-- Versi PHP: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bappeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE IF NOT EXISTS `tbl_kecamatan` (
  `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `id_kabupaten` int(10) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `id_provinsi`, `id_kabupaten`, `kecamatan`) VALUES
(1, 1, 1, 'Allu'),
(2, 1, 1, 'Anreapi'),
(3, 1, 1, 'Balanipa'),
(4, 1, 1, 'Binuang'),
(5, 1, 1, 'Bulo'),
(6, 1, 1, 'Campalagian'),
(7, 1, 1, 'Limboro'),
(8, 1, 1, 'Luyo / Lujo'),
(9, 1, 1, 'Mapilli'),
(10, 1, 1, 'Matakali'),
(11, 1, 1, 'Matangnga'),
(12, 1, 1, 'Polewali'),
(13, 1, 1, 'Tapango'),
(14, 1, 1, 'Tinambung'),
(15, 1, 1, 'Tubbi Taramanu / Tutallu'),
(16, 1, 1, 'Wonomulyo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
