-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2014 at 06:30 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_art_perorangan`
--

CREATE TABLE IF NOT EXISTS `tbl_art_perorangan` (
  `id_art_perorangan` int(10) NOT NULL AUTO_INCREMENT,
  `id_art` int(10) NOT NULL,
  `no_urut_ibu_kandung` int(11) NOT NULL,
  `kehadiran_wawancara` int(11) NOT NULL,
  `keluhan_panas` int(11) NOT NULL,
  `keluhan_batuk` int(11) NOT NULL,
  `keluhan_pilek` int(11) NOT NULL,
  `keluhan_asma` int(11) NOT NULL,
  `keluhan_diare` int(11) NOT NULL,
  `keluhan_sakit_kepala` int(11) NOT NULL,
  `keluhan_sakit_gigi` int(11) NOT NULL,
  `keluhan_lainnya` int(11) NOT NULL,
  `implikasi_keluhan` int(11) NOT NULL,
  `lama_implikasi` int(11) NOT NULL,
  `masih_implikasi` int(11) NOT NULL,
  `pengobatan_sendiri` int(11) NOT NULL,
  `jenis_pengobatan_sendiri` int(11) NOT NULL,
  `pengobatan_jalan` int(11) NOT NULL,
  `berobat_jalan_rs_pemerintah` int(11) NOT NULL,
  `berobat_jalan_rs_swasta` int(11) NOT NULL,
  `berobat_jalan_poliklinik` int(11) NOT NULL,
  `berobat_jalan_puskesmas` int(11) NOT NULL,
  `berobat_jalan_nakes` int(11) NOT NULL,
  `berobat_jalan_batra` int(11) NOT NULL,
  `berobat_jalan_dukun` int(11) NOT NULL,
  `berobat_jalan_lainnya` int(11) NOT NULL,
  `rawat_inap` int(11) NOT NULL,
  `rawat_inap_rs_pemerintah` int(11) NOT NULL,
  `rawat_inap_rs_swasta` int(11) NOT NULL,
  `rawat_inap_puskesmas` int(11) NOT NULL,
  `rawat_inap_nakes` int(11) NOT NULL,
  `rawat_inap_batra` int(11) NOT NULL,
  `rawat_inap_lainnya` int(11) NOT NULL,
  `jamkesmas` int(11) NOT NULL,
  `jamkesda` int(11) NOT NULL,
  `jampersal` int(11) NOT NULL,
  `bpjs` int(11) NOT NULL,
  `umur_balita` int(11) NOT NULL,
  `penolong_kelahiran_1` int(11) NOT NULL,
  `penolong_kelahiran_2` int(11) NOT NULL,
  `imunisasi_bcg` int(11) NOT NULL,
  `imunisasi_dpt` int(11) NOT NULL,
  `imunisasi_polio` int(11) NOT NULL,
  `imunisasi_campak` int(11) NOT NULL,
  `imunisasi_hepatitis_b` int(11) NOT NULL,
  `asi` int(11) NOT NULL,
  `lama_pemberian_asi` int(11) NOT NULL,
  `diberi_asi_saja` int(11) NOT NULL,
  `asi_24_jam` int(11) NOT NULL,
  `pemeriksaan_kehamilan` int(11) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_1` int(11) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_2` int(11) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_3` int(11) NOT NULL,
  `partisipasi_sekolah` int(11) NOT NULL,
  `berhenti_sekolah` int(11) NOT NULL,
  `pendidikan_tertinggi` int(11) NOT NULL,
  `penyelenggara_pendidikan` int(11) NOT NULL,
  `tingkat_tertinggi` int(11) NOT NULL,
  `ijazah_tertinggi` int(11) NOT NULL,
  `membaca_menulis` int(11) NOT NULL,
  `bekerja` int(11) NOT NULL,
  `sekolah` int(11) NOT NULL,
  `mengurus_rt` int(11) NOT NULL,
  `lainnya` int(11) NOT NULL,
  `kegiatan_terbanyak` int(11) NOT NULL,
  `tidak_bekerja_sementara` int(11) NOT NULL,
  `mencari_pekerjaan` int(11) NOT NULL,
  `membuat_usaha` int(11) NOT NULL,
  `alasan_tidak_bekerja` int(11) NOT NULL,
  `jika_ada_tawaran` int(11) NOT NULL,
  `hari_kerja` int(11) NOT NULL,
  `jumlah_jam_kerja_seminggu` int(11) NOT NULL,
  `lapangan_usaha` int(11) NOT NULL,
  `jenis_pekerjaan` int(11) NOT NULL,
  `jabatan_pekerjaan` int(11) NOT NULL,
  `gaji` int(11) NOT NULL,
  `umur_saat_nikah` int(11) NOT NULL,
  `jumlah_tahun_nikah` int(11) NOT NULL,
  `anak_lahir_hidup_laki` int(11) NOT NULL,
  `anak_lahir_hidup_perempuan` int(11) NOT NULL,
  `anak_lahir_masih_hidup_laki` int(11) NOT NULL,
  `anak_lahir_masih_hidup_perempuan` int(11) NOT NULL,
  `anak_meninggal_laki` int(11) NOT NULL,
  `anak_meninggal_perempuan` int(11) NOT NULL,
  `alat_kb` int(11) NOT NULL,
  `alat_kb_dipakai` int(11) NOT NULL,
  PRIMARY KEY (`id_art_perorangan`)
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
-- Table structure for table `tbl_kematian`
--

CREATE TABLE IF NOT EXISTS `tbl_kematian` (
  `id_kematian` int(11) NOT NULL,
  `id_rt` int(10) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `sebab_kematian` text NOT NULL,
  `masa_kehamilan` varchar(5) NOT NULL,
  `persalinan` varchar(5) NOT NULL,
  `nifas` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kematian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan_keluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_keterangan_keluarga` (
  `id_keterangan_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kepala_rt` varchar(150) NOT NULL,
  `jenis_kelamin_rt` varchar(20) NOT NULL,
  `jumlah_keluarga` int(10) NOT NULL,
  `jumlah_anggota_keluarga` int(10) NOT NULL,
  `jenis_lantai_bangunan` varchar(100) NOT NULL,
  `jenis_dinding_bangunan` varchar(100) NOT NULL,
  `fasilitas_buang_air` varchar(100) NOT NULL,
  `sumber_air` varchar(100) NOT NULL,
  `sumber_penerangan` varchar(100) NOT NULL,
  `jenis_bahan_bakar_memasak` varchar(100) NOT NULL,
  `frekuensi_membeli_daging_seminggu` varchar(100) NOT NULL,
  `frekuensi_makan_perhari` varchar(100) NOT NULL,
  `kuantitas_membeli_pakaian_pertahun` varchar(100) NOT NULL,
  `kemampuan_berobat` varchar(100) NOT NULL,
  `pekerjaan_kepala_rt` varchar(100) NOT NULL,
  `pendidikan_kepala_rt` varchar(100) NOT NULL,
  `tabungan` varchar(5) NOT NULL,
  `emas` varchar(5) NOT NULL,
  `televisi` varchar(5) NOT NULL,
  `ternak` varchar(5) NOT NULL,
  `sepeda_motor` varchar(5) NOT NULL,
  `art_balita` varchar(50) NOT NULL,
  `art_7_18` varchar(50) NOT NULL,
  `art_7_18_sd` varchar(50) NOT NULL,
  `art_7_18_smp` varchar(50) NOT NULL,
  `art_7_18_sma` varchar(50) NOT NULL,
  `art_7_18_tidak_sekolah` varchar(50) NOT NULL,
  `art_10_49` varchar(50) NOT NULL,
  `kredit_usaha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_keterangan_keluarga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran_makanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pengeluaran_makanan` (
  `id_pengeluaran_rt` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `beras` int(11) NOT NULL,
  `padi_lainnya` int(11) NOT NULL,
  `umbi_umbian` int(11) NOT NULL,
  `ikan_segar` int(11) NOT NULL,
  `ikan_diawetkan` int(11) NOT NULL,
  `daging` int(11) NOT NULL,
  `telur` int(11) NOT NULL,
  `susu` int(11) NOT NULL,
  `sayur` int(11) NOT NULL,
  `kacang` int(11) NOT NULL,
  `buah` int(11) NOT NULL,
  `minyak_lemak` int(11) NOT NULL,
  `bahan_minuman` int(11) NOT NULL,
  `bumbu_bumbuan` int(11) NOT NULL,
  `mie` int(11) NOT NULL,
  `konsumsi_lainnya` int(11) NOT NULL,
  `makanan_jadi` int(11) NOT NULL,
  `minuman_non_alkohol` int(11) NOT NULL,
  `minuman_alkohol` int(11) NOT NULL,
  `rokok` int(11) NOT NULL,
  `tembakau_lainnya` int(11) NOT NULL,
  PRIMARY KEY (`id_pengeluaran_rt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran_non_makanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pengeluaran_non_makanan` (
  `id_pengeluaran_non_makanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `sewa_rumah` int(11) NOT NULL,
  `pemeliharaan_rumah` int(11) NOT NULL,
  `rekening_rt` int(11) NOT NULL,
  `rekening_elektrik` int(11) NOT NULL,
  `pakaian` int(11) NOT NULL,
  `barang_tahan_lama` int(11) NOT NULL,
  `pbb` int(11) NOT NULL,
  `retribusi` int(11) NOT NULL,
  `askes` int(11) NOT NULL,
  `pajak_lainnya` int(11) NOT NULL,
  `keperluan_pesta` int(11) NOT NULL,
  `sumber_penghasilan_utama_rt` int(11) NOT NULL,
  `kode_status_pekerjaan` int(11) NOT NULL,
  PRIMARY KEY (`id_pengeluaran_non_makanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan`
--

CREATE TABLE IF NOT EXISTS `tbl_perumahan` (
  `id_perumahan` int(10) NOT NULL AUTO_INCREMENT,
  `id_rt` int(10) NOT NULL,
  `status_penguasaan_bangunan` varchar(100) NOT NULL,
  `luas_lantai` varchar(50) NOT NULL,
  `sumber_air_minum` varchar(75) NOT NULL,
  `jarak_sumber_air_sepiteng` varchar(75) NOT NULL,
  `penggunaan_tempat_buang_air` varchar(75) NOT NULL,
  PRIMARY KEY (`id_perumahan`)
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tik`
--

CREATE TABLE IF NOT EXISTS `tbl_tik` (
  `id_tik` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `jumlah_no_handphone` varchar(50) NOT NULL,
  `komputer` varchar(50) NOT NULL,
  `internet` varchar(50) NOT NULL,
  `jumlah_pengguna_internet` varchar(50) NOT NULL,
  `internet_warnet` varchar(50) NOT NULL,
  `jumlah_pengguna_internet_warnet` varchar(50) NOT NULL,
  `internet_kantor_sekolah` varchar(50) NOT NULL,
  `jumlah_pengguna_internet_kantor_sekolah` varchar(50) NOT NULL,
  `internet_lainnya` varchar(50) NOT NULL,
  `jumlah_pengguna_internet_lainnya` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
