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
-- Struktur dari tabel `tbl_desa_kelurahan`
--

CREATE TABLE IF NOT EXISTS `tbl_desa_kelurahan` (
  `id_desa_kelurahan` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `id_kabupaten` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_desa_kelurahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `tbl_desa_kelurahan`
--

INSERT INTO `tbl_desa_kelurahan` (`id_desa_kelurahan`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `desa_kelurahan`) VALUES
(1, 1, 1, 1, 'Alu'),
(2, 1, 1, 1, 'Kalumammang'),
(3, 1, 1, 1, 'Mombi'),
(4, 1, 1, 1, 'Pao Pao'),
(5, 1, 1, 1, 'Pupu Uring'),
(6, 1, 1, 1, 'Saragian'),
(7, 1, 1, 2, 'Anreapi'),
(8, 1, 1, 2, 'Duampanua'),
(9, 1, 1, 2, 'Kelapa Dua '),
(10, 1, 1, 2, 'Kunyi'),
(11, 1, 1, 2, 'Pappandangan'),
(12, 1, 1, 3, 'Bala'),
(13, 1, 1, 3, 'Balanipa'),
(14, 1, 1, 3, 'Galung Tulu'),
(15, 1, 1, 3, 'Lambanan'),
(16, 1, 1, 3, 'Lego'),
(17, 1, 1, 3, 'Mosso'),
(18, 1, 1, 3, 'Pambusuang'),
(19, 1, 1, 3, 'Sabang Subik'),
(20, 1, 1, 3, 'Tammangalle'),
(21, 1, 1, 3, 'Tammejarra'),
(22, 1, 1, 4, 'Mammi'),
(23, 1, 1, 4, 'Amassangan'),
(24, 1, 1, 4, 'Batetangnga'),
(25, 1, 1, 4, 'Mirring'),
(26, 1, 1, 4, 'Tonyaman'),
(27, 1, 1, 4, 'Kuajang'),
(28, 1, 1, 4, 'Paku'),
(29, 1, 1, 5, 'Bulo'),
(30, 1, 1, 5, 'Daala Timur'),
(31, 1, 1, 5, 'Karombang'),
(32, 1, 1, 5, 'Lenggo'),
(33, 1, 1, 5, 'Pulliwa'),
(34, 1, 1, 5, 'Tapambanua'),
(35, 1, 1, 6, 'Bonde'),
(36, 1, 1, 6, 'Botto'),
(37, 1, 1, 6, 'Katumbangan'),
(38, 1, 1, 6, 'Katumbangan Lemo'),
(39, 1, 1, 6, 'Kenje'),
(40, 1, 1, 6, 'Laliko'),
(41, 1, 1, 6, 'Lampoko'),
(42, 1, 1, 6, 'Lapeo'),
(43, 1, 1, 6, 'Lemo'),
(44, 1, 1, 6, 'Ongko'),
(45, 1, 1, 6, 'Panyampa'),
(46, 1, 1, 6, 'Pappang'),
(47, 1, 1, 6, 'Parrape'),
(48, 1, 1, 6, 'Sumarang'),
(49, 1, 1, 6, 'Suruang'),
(50, 1, 1, 7, 'Lembang Lembang'),
(51, 1, 1, 7, 'Limboro'),
(52, 1, 1, 7, 'Napo'),
(53, 1, 1, 7, 'Pendulangan'),
(54, 1, 1, 7, 'Renggeang'),
(55, 1, 1, 7, 'Salarri'),
(56, 1, 1, 7, 'Samasundu'),
(57, 1, 1, 7, 'Tandasura'),
(58, 1, 1, 7, 'Tangan Baru'),
(59, 1, 1, 7, 'Todang Todang'),
(60, 1, 1, 8, 'Baru'),
(61, 1, 1, 8, 'Batu Panga'),
(62, 1, 1, 8, 'Batupanga Daala');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
