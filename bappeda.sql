-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2014 at 04:42 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `kartu_kk` varchar(10) NOT NULL,
  `kartu_ak` varchar(10) NOT NULL,
  `buku_nikah` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_art`
--

INSERT INTO `tbl_art` (`id_art`, `id_rt`, `nik`, `nama_art`, `hubungan_krt`, `jk`, `tmp_lahir`, `tgl_lahir`, `status_kawin`, `gol_darah`, `kartu_kk`, `kartu_ak`, `buku_nikah`, `gambar`) VALUES
(1, 1, '1109100350', 'Ni Nyoman Witari', 'Istri', 'Perempuan', 'Tabanan', '23 Juni 1968', 'Menikah', 'B', 'Tidak', 'Ya', 'Ya', 'b2f7d382428756b34762a115c3108587.png'),
(2, 2, '1109100351', 'Wayan Gede Suma Wijaya', 'Anak', 'Laki-Laki', 'Denpasar', '4 Februari 1991', 'Jomblo', 'B', 'Ya', 'Ya', 'Tidak', ''),
(3, 2, '1109100352', 'Wayan Darmi', 'Kakak', 'Perempuan', 'Denpasar', '08 Agustus 1954', 'Janda', 'B', 'Ya', 'Ya', 'Tidak', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_art_perorangan`
--

CREATE TABLE IF NOT EXISTS `tbl_art_perorangan` (
  `id_art_perorangan` int(10) NOT NULL AUTO_INCREMENT,
  `id_art` int(10) NOT NULL,
  `no_urut_ibu_kandung` varchar(150) NOT NULL,
  `kehadiran_wawancara` varchar(150) NOT NULL,
  `kurang_gizi` varchar(50) NOT NULL,
  `keluhan_panas` varchar(150) NOT NULL,
  `keluhan_batuk` varchar(150) NOT NULL,
  `keluhan_pilek` varchar(150) NOT NULL,
  `keluhan_asma` varchar(150) NOT NULL,
  `keluhan_diare` varchar(150) NOT NULL,
  `keluhan_sakit_kepala` varchar(150) NOT NULL,
  `keluhan_sakit_gigi` varchar(150) NOT NULL,
  `keluhan_lainnya` varchar(150) NOT NULL,
  `implikasi_keluhan` varchar(150) NOT NULL,
  `lama_implikasi` varchar(150) NOT NULL,
  `masih_implikasi` varchar(150) NOT NULL,
  `pengobatan_sendiri` varchar(150) NOT NULL,
  `jenis_pengobatan_sendiri` varchar(150) NOT NULL,
  `pengobatan_jalan` varchar(150) NOT NULL,
  `berobat_jalan_rs_pemerintah` varchar(150) NOT NULL,
  `berobat_jalan_rs_swasta` varchar(150) NOT NULL,
  `berobat_jalan_poliklinik` varchar(150) NOT NULL,
  `berobat_jalan_puskesmas` varchar(150) NOT NULL,
  `berobat_jalan_nakes` varchar(150) NOT NULL,
  `berobat_jalan_batra` varchar(150) NOT NULL,
  `berobat_jalan_dukun` varchar(150) NOT NULL,
  `berobat_jalan_lainnya` varchar(150) NOT NULL,
  `rawat_inap` varchar(150) NOT NULL,
  `rawat_inap_rs_pemerintah` varchar(150) NOT NULL,
  `rawat_inap_rs_swasta` varchar(150) NOT NULL,
  `rawat_inap_puskesmas` varchar(150) NOT NULL,
  `rawat_inap_nakes` varchar(150) NOT NULL,
  `rawat_inap_batra` varchar(150) NOT NULL,
  `rawat_inap_lainnya` varchar(150) NOT NULL,
  `jamkesmas` varchar(150) NOT NULL,
  `jamkesda` varchar(150) NOT NULL,
  `jampersal` varchar(150) NOT NULL,
  `bpjs` varchar(150) NOT NULL,
  `umur_balita` varchar(150) NOT NULL,
  `penolong_kelahiran_1` varchar(150) NOT NULL,
  `penolong_kelahiran_2` varchar(150) NOT NULL,
  `imunisasi_bcg` varchar(150) NOT NULL,
  `imunisasi_dpt` varchar(150) NOT NULL,
  `imunisasi_polio` varchar(150) NOT NULL,
  `imunisasi_campak` varchar(150) NOT NULL,
  `imunisasi_hepatitis_b` varchar(150) NOT NULL,
  `asi` varchar(150) NOT NULL,
  `lama_pemberian_asi` varchar(150) NOT NULL,
  `diberi_asi_saja` varchar(150) NOT NULL,
  `asi_24_jam` varchar(150) NOT NULL,
  `pemeriksaan_kehamilan` varchar(150) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_1` varchar(150) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_2` varchar(150) NOT NULL,
  `pemeriksaan_kehamilan_trisemester_3` varchar(150) NOT NULL,
  `partisipasi_sekolah` varchar(150) NOT NULL,
  `berhenti_sekolah` varchar(150) NOT NULL,
  `pendidikan_tertinggi` varchar(150) NOT NULL,
  `penyelenggara_pendidikan` varchar(150) NOT NULL,
  `tingkat_tertinggi` varchar(150) NOT NULL,
  `ijazah_tertinggi` varchar(150) NOT NULL,
  `membaca_menulis` varchar(150) NOT NULL,
  `bekerja` varchar(150) NOT NULL,
  `sekolah` varchar(150) NOT NULL,
  `mengurus_rt` varchar(150) NOT NULL,
  `lainnya` varchar(150) NOT NULL,
  `kegiatan_terbanyak` varchar(150) NOT NULL,
  `tidak_bekerja_sementara` varchar(150) NOT NULL,
  `mencari_pekerjaan` varchar(150) NOT NULL,
  `membuat_usaha` varchar(150) NOT NULL,
  `alasan_tidak_bekerja` varchar(150) NOT NULL,
  `jika_ada_tawaran` varchar(150) NOT NULL,
  `hari_kerja` varchar(150) NOT NULL,
  `jumlah_jam_kerja_seminggu` varchar(150) NOT NULL,
  `lapangan_usaha` varchar(150) NOT NULL,
  `jenis_pekerjaan` varchar(150) NOT NULL,
  `jabatan_pekerjaan` varchar(150) NOT NULL,
  `gaji` varchar(150) NOT NULL,
  `umur_saat_nikah` varchar(150) NOT NULL,
  `jumlah_tahun_nikah` varchar(150) NOT NULL,
  `anak_lahir_hidup_laki` varchar(150) NOT NULL,
  `anak_lahir_hidup_perempuan` varchar(150) NOT NULL,
  `anak_lahir_masih_hidup_laki` varchar(150) NOT NULL,
  `anak_lahir_masih_hidup_perempuan` varchar(150) NOT NULL,
  `anak_meninggal_laki` varchar(150) NOT NULL,
  `anak_meninggal_perempuan` varchar(150) NOT NULL,
  `alat_kb` varchar(150) NOT NULL,
  `memakai_alat_kb` varchar(150) NOT NULL,
  `alat_kb_dipakai` varchar(150) NOT NULL,
  PRIMARY KEY (`id_art_perorangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_art_perorangan`
--

INSERT INTO `tbl_art_perorangan` (`id_art_perorangan`, `id_art`, `no_urut_ibu_kandung`, `kehadiran_wawancara`, `kurang_gizi`, `keluhan_panas`, `keluhan_batuk`, `keluhan_pilek`, `keluhan_asma`, `keluhan_diare`, `keluhan_sakit_kepala`, `keluhan_sakit_gigi`, `keluhan_lainnya`, `implikasi_keluhan`, `lama_implikasi`, `masih_implikasi`, `pengobatan_sendiri`, `jenis_pengobatan_sendiri`, `pengobatan_jalan`, `berobat_jalan_rs_pemerintah`, `berobat_jalan_rs_swasta`, `berobat_jalan_poliklinik`, `berobat_jalan_puskesmas`, `berobat_jalan_nakes`, `berobat_jalan_batra`, `berobat_jalan_dukun`, `berobat_jalan_lainnya`, `rawat_inap`, `rawat_inap_rs_pemerintah`, `rawat_inap_rs_swasta`, `rawat_inap_puskesmas`, `rawat_inap_nakes`, `rawat_inap_batra`, `rawat_inap_lainnya`, `jamkesmas`, `jamkesda`, `jampersal`, `bpjs`, `umur_balita`, `penolong_kelahiran_1`, `penolong_kelahiran_2`, `imunisasi_bcg`, `imunisasi_dpt`, `imunisasi_polio`, `imunisasi_campak`, `imunisasi_hepatitis_b`, `asi`, `lama_pemberian_asi`, `diberi_asi_saja`, `asi_24_jam`, `pemeriksaan_kehamilan`, `pemeriksaan_kehamilan_trisemester_1`, `pemeriksaan_kehamilan_trisemester_2`, `pemeriksaan_kehamilan_trisemester_3`, `partisipasi_sekolah`, `berhenti_sekolah`, `pendidikan_tertinggi`, `penyelenggara_pendidikan`, `tingkat_tertinggi`, `ijazah_tertinggi`, `membaca_menulis`, `bekerja`, `sekolah`, `mengurus_rt`, `lainnya`, `kegiatan_terbanyak`, `tidak_bekerja_sementara`, `mencari_pekerjaan`, `membuat_usaha`, `alasan_tidak_bekerja`, `jika_ada_tawaran`, `hari_kerja`, `jumlah_jam_kerja_seminggu`, `lapangan_usaha`, `jenis_pekerjaan`, `jabatan_pekerjaan`, `gaji`, `umur_saat_nikah`, `jumlah_tahun_nikah`, `anak_lahir_hidup_laki`, `anak_lahir_hidup_perempuan`, `anak_lahir_masih_hidup_laki`, `anak_lahir_masih_hidup_perempuan`, `anak_meninggal_laki`, `anak_meninggal_perempuan`, `alat_kb`, `memakai_alat_kb`, `alat_kb_dipakai`) VALUES
(1, 1, '00', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', '00-0000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Intravag/tissue/kondom wanita'),
(2, 2, '00', 'Ya', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '00-0000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `tbl_desa_kelurahan`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi_tambahan_survey`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi_tambahan_survey` (
  `id_informasi_tambahan_survey` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `drainase` varchar(150) DEFAULT NULL,
  `bentuk_drainase` varchar(150) DEFAULT NULL,
  `fungsi_drainase` varchar(150) DEFAULT NULL,
  `kualitas_drainase` varchar(150) DEFAULT NULL,
  `klasifikasi_drainase` varchar(150) DEFAULT NULL,
  `penanganan_limbah_rt` varchar(150) DEFAULT NULL,
  `status_jalan_rumah` varchar(150) DEFAULT NULL,
  `bentuk_fisik_permukaan_jalan` varchar(150) DEFAULT NULL,
  `kualitas_jalan` varchar(150) DEFAULT NULL,
  `fungsi_jalan` varchar(150) DEFAULT NULL,
  `nama_jalan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_informasi_tambahan_survey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_informasi_tambahan_survey`
--

INSERT INTO `tbl_informasi_tambahan_survey` (`id_informasi_tambahan_survey`, `id_rt`, `drainase`, `bentuk_drainase`, `fungsi_drainase`, `kualitas_drainase`, `klasifikasi_drainase`, `penanganan_limbah_rt`, `status_jalan_rumah`, `bentuk_fisik_permukaan_jalan`, `kualitas_jalan`, `fungsi_jalan`, `nama_jalan`) VALUES
(1, 2, 'Ada', '', '', '', '', '', 'Jalan Lainnya', '', '', 'Kolektor sekunder', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE IF NOT EXISTS `tbl_kabupaten` (
  `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(10) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `id_provinsi`, `kabupaten`) VALUES
(1, 1, 'Polewali Mandar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kebersihan_survey`
--

CREATE TABLE IF NOT EXISTS `tbl_kebersihan_survey` (
  `id_kebersihan_survey` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `tps` varchar(150) DEFAULT NULL,
  `bentuk_tps` varchar(150) DEFAULT NULL,
  `pemilihan_sampah` varchar(150) DEFAULT NULL,
  `tps_alternatif` varchar(150) DEFAULT NULL,
  `layanan_tps_keliling` varchar(150) DEFAULT NULL,
  `intensitas_pengangkutan_sampah` varchar(150) DEFAULT NULL,
  `alasan_tidak_berlangganan` varchar(150) DEFAULT NULL,
  `keanggotaan_urusan_sampah` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_kebersihan_survey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_kebersihan_survey`
--

INSERT INTO `tbl_kebersihan_survey` (`id_kebersihan_survey`, `id_rt`, `tps`, `bentuk_tps`, `pemilihan_sampah`, `tps_alternatif`, `layanan_tps_keliling`, `intensitas_pengangkutan_sampah`, `alasan_tidak_berlangganan`, `keanggotaan_urusan_sampah`) VALUES
(1, 2, 'Memiliki', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_kecamatan`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kematian`
--

CREATE TABLE IF NOT EXISTS `tbl_kematian` (
  `id_kematian` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id_kematian`, `id_rt`, `nama`, `tahun`, `jenis_kelamin`, `umur`, `sebab_kematian`, `masa_kehamilan`, `persalinan`, `nifas`) VALUES
(2, 2, 'Nengah Sudana', 2001, 'Laki-Laki', '35', 'Sakit', '-', '-', '-'),
(3, 2, 'ss', 222, 'Laki-Laki', 'ss', 'ss', 'ss', 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan_keluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_keterangan_keluarga` (
  `id_keterangan_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
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
  `art_10_49` varchar(100) NOT NULL,
  `kredit_usaha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_keterangan_keluarga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_keterangan_keluarga`
--

INSERT INTO `tbl_keterangan_keluarga` (`id_keterangan_keluarga`, `id_rt`, `nama_kepala_rt`, `jenis_kelamin_rt`, `jumlah_keluarga`, `jumlah_anggota_keluarga`, `jenis_lantai_bangunan`, `jenis_dinding_bangunan`, `fasilitas_buang_air`, `sumber_air`, `sumber_penerangan`, `jenis_bahan_bakar_memasak`, `frekuensi_membeli_daging_seminggu`, `frekuensi_makan_perhari`, `kuantitas_membeli_pakaian_pertahun`, `kemampuan_berobat`, `pekerjaan_kepala_rt`, `pendidikan_kepala_rt`, `tabungan`, `emas`, `televisi`, `ternak`, `sepeda_motor`, `art_balita`, `art_7_18`, `art_7_18_sd`, `art_7_18_smp`, `art_7_18_sma`, `art_7_18_tidak_sekolah`, `art_10_49`, `kredit_usaha`) VALUES
(1, 2, 'I Nengah Sudana', 'Laki-Laki', 4, 4, 'Semen/Keramik/Kayu kualitas tinggi', 'Tembok/Kayu kualitas tinggi', 'Sendiri', 'Air kemasan/ledeng/pompa/sumur atau mata air terlindung', 'Listrik (PLN/NON PLN)', 'Gas/Listrik', 'Dua Kali dan lebih', 'Tiga Kali dan lebih', 'Dua stel dan lebih', 'Ya', 'Jasa', 'SLTA ke atas', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya, 1 Orang', 'Tidak', '0', '0', '0', '0', 'Ada, lebih dari 1 orang dan salah satunya sedang ber-KB', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lahan_pertanian`
--

CREATE TABLE IF NOT EXISTS `tbl_lahan_pertanian` (
  `id_lahan_pertanian` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `lahan_pertanian` varchar(150) DEFAULT NULL,
  `milik_sendiri_pencacahan_luas_sawah` varchar(150) DEFAULT NULL,
  `milik_sendiri_pencacahan_lahan_kering` varchar(150) DEFAULT NULL,
  `milik_sendiri_setahun_lalu_luas_sawah` varchar(150) DEFAULT NULL,
  `milik_sendiri_setahun_lalu_lahan_kering` varchar(150) DEFAULT NULL,
  `pihak_lain_pencacahan_luas_sawah` varchar(150) DEFAULT NULL,
  `pihak_lain_pencacahan_lahan_kering` varchar(150) DEFAULT NULL,
  `pihak_lain_setahun_lalu_luas_sawah` varchar(150) DEFAULT NULL,
  `pihak_lain_setahun_lalu_lahan_kering` varchar(150) DEFAULT NULL,
  `sendiri_pihak_lain_pencacahan_luas_sawah` varchar(150) DEFAULT NULL,
  `sendiri_pihak_lain_pencacahan_lahan_kering` varchar(150) DEFAULT NULL,
  `sendiri_pihak_lain_setahun_lalu_luas_sawah` varchar(150) DEFAULT NULL,
  `sendiri_pihak_lain_setahun_lalu_lahan_kering` varchar(150) DEFAULT NULL,
  `dikuasai_pencacahan_luas_swah` varchar(150) DEFAULT NULL,
  `dikuasai_pencacahan_lahan_kering` varchar(150) DEFAULT NULL,
  `dikuasai_setahun_lalu_luas_swah` varchar(150) DEFAULT NULL,
  `dikuasai_setahun_lalu_lahan_kering` varchar(150) DEFAULT NULL,
  `pertanian_pencacahan_luas_sawah` varchar(150) DEFAULT NULL,
  `pertanian_pencacahan_lahan_kering` varchar(150) DEFAULT NULL,
  `pertanian_setahun_lalu_luas_sawah` varchar(150) DEFAULT NULL,
  `pertanian_setahun_lalu_lahan_kering` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_lahan_pertanian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_lahan_pertanian`
--

INSERT INTO `tbl_lahan_pertanian` (`id_lahan_pertanian`, `id_rt`, `lahan_pertanian`, `milik_sendiri_pencacahan_luas_sawah`, `milik_sendiri_pencacahan_lahan_kering`, `milik_sendiri_setahun_lalu_luas_sawah`, `milik_sendiri_setahun_lalu_lahan_kering`, `pihak_lain_pencacahan_luas_sawah`, `pihak_lain_pencacahan_lahan_kering`, `pihak_lain_setahun_lalu_luas_sawah`, `pihak_lain_setahun_lalu_lahan_kering`, `sendiri_pihak_lain_pencacahan_luas_sawah`, `sendiri_pihak_lain_pencacahan_lahan_kering`, `sendiri_pihak_lain_setahun_lalu_luas_sawah`, `sendiri_pihak_lain_setahun_lalu_lahan_kering`, `dikuasai_pencacahan_luas_swah`, `dikuasai_pencacahan_lahan_kering`, `dikuasai_setahun_lalu_luas_swah`, `dikuasai_setahun_lalu_lahan_kering`, `pertanian_pencacahan_luas_sawah`, `pertanian_pencacahan_lahan_kering`, `pertanian_setahun_lalu_luas_sawah`, `pertanian_setahun_lalu_lahan_kering`) VALUES
(1, 2, 'Ya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pengeluaran_makanan`
--

INSERT INTO `tbl_pengeluaran_makanan` (`id_pengeluaran_rt`, `id_rt`, `beras`, `padi_lainnya`, `umbi_umbian`, `ikan_segar`, `ikan_diawetkan`, `daging`, `telur`, `susu`, `sayur`, `kacang`, `buah`, `minyak_lemak`, `bahan_minuman`, `bumbu_bumbuan`, `mie`, `konsumsi_lainnya`, `makanan_jadi`, `minuman_non_alkohol`, `minuman_alkohol`, `rokok`, `tembakau_lainnya`) VALUES
(1, 2, 10000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000, 300000);

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
  `sabun_kosmetik` int(11) NOT NULL,
  `biaya_kesehatan` int(11) NOT NULL,
  `biaya_pendidikan` int(11) NOT NULL,
  `jasa_lainnya` int(11) NOT NULL,
  `pakaian` int(11) NOT NULL,
  `barang_tahan_lama` int(11) NOT NULL,
  `pbb` int(11) NOT NULL,
  `retribusi` int(11) NOT NULL,
  `askes` int(11) NOT NULL,
  `pajak_lainnya` int(11) NOT NULL,
  `keperluan_pesta` int(11) NOT NULL,
  `sumber_penghasilan_utama_rt` text NOT NULL,
  `kode_status_pekerjaan` int(11) NOT NULL,
  `sewa_rumah_setahun` int(11) NOT NULL,
  `pemeliharaan_rumah_setahun` int(11) NOT NULL,
  `rekening_rt_setahun` int(11) NOT NULL,
  `rekening_elektrik_setahun` int(11) NOT NULL,
  `sabun_kosmetik_setahun` int(11) NOT NULL,
  `biaya_kesehatan_setahun` int(11) NOT NULL,
  `biaya_pendidikan_setahun` int(11) NOT NULL,
  `jasa_lainnya_setahun` int(11) NOT NULL,
  `pakaian_setahun` int(11) NOT NULL,
  `barang_tahan_lama_setahun` int(11) NOT NULL,
  `pbb_setahun` int(11) NOT NULL,
  `retribusi_setahun` int(11) NOT NULL,
  `askes_setahun` int(11) NOT NULL,
  `pajak_lainnya_setahun` int(11) NOT NULL,
  `keperluan_pesta_setahun` int(11) NOT NULL,
  PRIMARY KEY (`id_pengeluaran_non_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pengeluaran_non_makanan`
--

INSERT INTO `tbl_pengeluaran_non_makanan` (`id_pengeluaran_non_makanan`, `id_rt`, `sewa_rumah`, `pemeliharaan_rumah`, `rekening_rt`, `rekening_elektrik`, `sabun_kosmetik`, `biaya_kesehatan`, `biaya_pendidikan`, `jasa_lainnya`, `pakaian`, `barang_tahan_lama`, `pbb`, `retribusi`, `askes`, `pajak_lainnya`, `keperluan_pesta`, `sumber_penghasilan_utama_rt`, `kode_status_pekerjaan`, `sewa_rumah_setahun`, `pemeliharaan_rumah_setahun`, `rekening_rt_setahun`, `rekening_elektrik_setahun`, `sabun_kosmetik_setahun`, `biaya_kesehatan_setahun`, `biaya_pendidikan_setahun`, `jasa_lainnya_setahun`, `pakaian_setahun`, `barang_tahan_lama_setahun`, `pbb_setahun`, `retribusi_setahun`, `askes_setahun`, `pajak_lainnya_setahun`, `keperluan_pesta_setahun`) VALUES
(1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_perumahan`
--

INSERT INTO `tbl_perumahan` (`id_perumahan`, `id_rt`, `status_penguasaan_bangunan`, `luas_lantai`, `sumber_air_minum`, `jarak_sumber_air_sepiteng`, `penggunaan_tempat_buang_air`) VALUES
(1, 2, 'Milik Sendiri', '10m x 15m', 'Leding', '> 10 M', 'Sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan_survey`
--

CREATE TABLE IF NOT EXISTS `tbl_perumahan_survey` (
  `id_perumahan_survey` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `jenis_rumah` varchar(150) DEFAULT NULL,
  `konstruksi_rumah` varchar(150) DEFAULT NULL,
  `kepemilikan_rumah` varchar(150) DEFAULT NULL,
  `fungsi_rumah` varchar(150) DEFAULT NULL,
  `tahun_pembuatan_rumah` varchar(150) DEFAULT NULL,
  `jumlah_lantai` varchar(150) DEFAULT NULL,
  `luas_lantai_1` varchar(150) DEFAULT NULL,
  `luas_lantai_2` varchar(150) DEFAULT NULL,
  `luas_lantai_3` varchar(150) DEFAULT NULL,
  `luas_pekarangan` varchar(150) DEFAULT NULL,
  `bagian_terluas_atap` varchar(150) DEFAULT NULL,
  `kondisi_atap_rumah` varchar(150) DEFAULT NULL,
  `bagian_terluas_dinding` varchar(150) DEFAULT NULL,
  `kondisi_dinding_rumah` varchar(150) DEFAULT NULL,
  `bagian_terluas_lantai` varchar(150) DEFAULT NULL,
  `kondisi_lantai_rumah` varchar(150) DEFAULT NULL,
  `jumlah_kepemilikan_rumah_lainnya` varchar(150) DEFAULT NULL,
  `alamat_rumah_lainnya` text NOT NULL,
  `kepemilikan_imb` varchar(150) DEFAULT NULL,
  `penertiban_imb` varchar(150) DEFAULT NULL,
  `kepemilikan_surat_tanah` varchar(150) DEFAULT NULL,
  `jarak_sempadan_jalan` varchar(150) DEFAULT NULL,
  `jarak_sempadan_sungai` varchar(150) DEFAULT NULL,
  `jarak_sempadan_pantai` varchar(150) DEFAULT NULL,
  `jarak_sempadan_irigasi` varchar(150) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_perumahan_survey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_perumahan_survey`
--

INSERT INTO `tbl_perumahan_survey` (`id_perumahan_survey`, `id_rt`, `jenis_rumah`, `konstruksi_rumah`, `kepemilikan_rumah`, `fungsi_rumah`, `tahun_pembuatan_rumah`, `jumlah_lantai`, `luas_lantai_1`, `luas_lantai_2`, `luas_lantai_3`, `luas_pekarangan`, `bagian_terluas_atap`, `kondisi_atap_rumah`, `bagian_terluas_dinding`, `kondisi_dinding_rumah`, `bagian_terluas_lantai`, `kondisi_lantai_rumah`, `jumlah_kepemilikan_rumah_lainnya`, `alamat_rumah_lainnya`, `kepemilikan_imb`, `penertiban_imb`, `kepemilikan_surat_tanah`, `jarak_sempadan_jalan`, `jarak_sempadan_sungai`, `jarak_sempadan_pantai`, `jarak_sempadan_irigasi`, `gambar`) VALUES
(1, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', 'Baik', 'Semen', 'Baik', '', 'Denpasar', '', '', 'SKT Camat', '', '', '', '', '5e960336df275d0ad30de2a8a6c8ca86.png'),
(2, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ffff', '', '', '', '', '', '', '', 'c22de10c720d761a200aca0f735b9b58.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `id_provinsi` int(10) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Sulawesi Barat'),
(2, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rt`
--

CREATE TABLE IF NOT EXISTS `tbl_rt` (
  `id_rt` int(10) NOT NULL AUTO_INCREMENT,
  `id_desa_kelurahan` int(11) NOT NULL,
  `nama_krt` varchar(150) NOT NULL,
  `suku_krt` varchar(150) NOT NULL,
  `jumlah_art` int(5) NOT NULL,
  `jumlah_anak` int(5) NOT NULL,
  `jumlah_art_meninggal` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  PRIMARY KEY (`id_rt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_rt`
--

INSERT INTO `tbl_rt` (`id_rt`, `id_desa_kelurahan`, `nama_krt`, `suku_krt`, `jumlah_art`, `jumlah_anak`, `jumlah_art_meninggal`, `tahun`) VALUES
(1, 2, 'Gede Suma Wijaya', 'Bali', 3, 1, 0, 2013),
(2, 2, 'Nengah Sudana', 'Bali', 4, 1, 1, 2014),
(3, 6, 'Masbulloh', 'Bali', 9, 3, 1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanitasi_penerangan_survey`
--

CREATE TABLE IF NOT EXISTS `tbl_sanitasi_penerangan_survey` (
  `id_sanitasi_penerangan_survey` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `kepemilikan_jamban` varchar(150) DEFAULT NULL,
  `jumlah_kepemilikan_jamban` varchar(150) DEFAULT NULL,
  `jenis_jamban` varchar(150) DEFAULT NULL,
  `jamban_alternatif` varchar(150) DEFAULT NULL,
  `sumber_penerangan` varchar(150) DEFAULT NULL,
  `sumber_air_bersih` varchar(150) DEFAULT NULL,
  `kualitas_air_bersih` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_sanitasi_penerangan_survey`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_sanitasi_penerangan_survey`
--

INSERT INTO `tbl_sanitasi_penerangan_survey` (`id_sanitasi_penerangan_survey`, `id_rt`, `kepemilikan_jamban`, `jumlah_kepemilikan_jamban`, `jenis_jamban`, `jamban_alternatif`, `sumber_penerangan`, `sumber_air_bersih`, `kualitas_air_bersih`) VALUES
(1, 2, 'Tidak Memiliki', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosial_ekonomi`
--

CREATE TABLE IF NOT EXISTS `tbl_sosial_ekonomi` (
  `id_sosial_ekonomi` int(11) NOT NULL AUTO_INCREMENT,
  `id_rt` int(11) NOT NULL,
  `kategori_miskin` varchar(150) DEFAULT NULL,
  `kartu_kesehatan` varchar(150) DEFAULT NULL,
  `memperoleh_kartu_kesehatan` varchar(150) DEFAULT NULL,
  `rawat_jalan_inap_kartu_kesehatan_3_bulan` varchar(150) DEFAULT NULL,
  `biaya_rawat_jalan_inap` varchar(150) DEFAULT NULL,
  `melahirkan_kehamilan_kartu_kesehatan_3_bulan` varchar(150) DEFAULT NULL,
  `biaya_melahirkan_kehamilan` varchar(150) DEFAULT NULL,
  `keperluan_kb_kartu_kesehatan_3_bulan` varchar(150) DEFAULT NULL,
  `biaya_keperluan_kb` varchar(150) DEFAULT NULL,
  `beras_murah` varchar(150) DEFAULT NULL,
  `jumlah_beras_murah` varchar(150) DEFAULT NULL,
  `harga_beras_murah` varchar(150) DEFAULT NULL,
  `kredit_usaha` varchar(150) DEFAULT NULL,
  `jumlah_kredit_usaha` varchar(150) DEFAULT NULL,
  `bunga_kredit_usaha` varchar(150) DEFAULT NULL,
  `sumber_kredit_usaha` varchar(150) DEFAULT NULL,
  `art_sebagai_tki` varchar(150) DEFAULT NULL,
  `tki_perawat_jumlah` varchar(150) DEFAULT NULL,
  `tki_perawat_tahun` varchar(150) DEFAULT NULL,
  `tki_pembantu_jumlah` varchar(150) DEFAULT NULL,
  `tki_pembantu_tahun` varchar(150) DEFAULT NULL,
  `tki_supir_jumlah` varchar(150) DEFAULT NULL,
  `tki_supir_tahun` varchar(150) DEFAULT NULL,
  `tki_tukang_bangunan_jumlah` varchar(150) DEFAULT NULL,
  `tki_tukang_bangunan_tahun` varchar(150) DEFAULT NULL,
  `tki_buruh_perkebunan_jumlah` varchar(150) DEFAULT NULL,
  `tki_buruh_perkebunan_tahun` varchar(150) DEFAULT NULL,
  `tki_buruh_pabrik_jumlah` varchar(150) DEFAULT NULL,
  `tki_buruh_pabrik_tahun` varchar(150) DEFAULT NULL,
  `beasiswa_pemerintah_jps` varchar(150) DEFAULT NULL,
  `beasiswa_pemerintah_non_jps` varchar(150) DEFAULT NULL,
  `beasiswa_gn_ota` varchar(150) DEFAULT NULL,
  `beasiswa_swasta` varchar(150) DEFAULT NULL,
  `beasiswa_sekolah` varchar(150) DEFAULT NULL,
  `beasiswa_perorangan` varchar(150) DEFAULT NULL,
  `beasiswa_lainnya` varchar(150) DEFAULT NULL,
  `beasiswa_sd_jumlah` varchar(150) DEFAULT NULL,
  `beasiswa_sd_tahun` varchar(150) DEFAULT NULL,
  `beasiswa_smp_jumlah` varchar(150) DEFAULT NULL,
  `beasiswa_smp_tahun` varchar(150) DEFAULT NULL,
  `beasiswa_sma_jumlah` varchar(150) DEFAULT NULL,
  `beasiswa_sma_tahun` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_sosial_ekonomi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_sosial_ekonomi`
--

INSERT INTO `tbl_sosial_ekonomi` (`id_sosial_ekonomi`, `id_rt`, `kategori_miskin`, `kartu_kesehatan`, `memperoleh_kartu_kesehatan`, `rawat_jalan_inap_kartu_kesehatan_3_bulan`, `biaya_rawat_jalan_inap`, `melahirkan_kehamilan_kartu_kesehatan_3_bulan`, `biaya_melahirkan_kehamilan`, `keperluan_kb_kartu_kesehatan_3_bulan`, `biaya_keperluan_kb`, `beras_murah`, `jumlah_beras_murah`, `harga_beras_murah`, `kredit_usaha`, `jumlah_kredit_usaha`, `bunga_kredit_usaha`, `sumber_kredit_usaha`, `art_sebagai_tki`, `tki_perawat_jumlah`, `tki_perawat_tahun`, `tki_pembantu_jumlah`, `tki_pembantu_tahun`, `tki_supir_jumlah`, `tki_supir_tahun`, `tki_tukang_bangunan_jumlah`, `tki_tukang_bangunan_tahun`, `tki_buruh_perkebunan_jumlah`, `tki_buruh_perkebunan_tahun`, `tki_buruh_pabrik_jumlah`, `tki_buruh_pabrik_tahun`, `beasiswa_pemerintah_jps`, `beasiswa_pemerintah_non_jps`, `beasiswa_gn_ota`, `beasiswa_swasta`, `beasiswa_sekolah`, `beasiswa_perorangan`, `beasiswa_lainnya`, `beasiswa_sd_jumlah`, `beasiswa_sd_tahun`, `beasiswa_smp_jumlah`, `beasiswa_smp_tahun`, `beasiswa_sma_jumlah`, `beasiswa_sma_tahun`) VALUES
(1, 2, 'Ya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '2011', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_tik`
--

INSERT INTO `tbl_tik` (`id_tik`, `id_rt`, `telepon`, `handphone`, `jumlah_no_handphone`, `komputer`, `internet`, `jumlah_pengguna_internet`, `internet_warnet`, `jumlah_pengguna_internet_warnet`, `internet_kantor_sekolah`, `jumlah_pengguna_internet_kantor_sekolah`, `internet_lainnya`, `jumlah_pengguna_internet_lainnya`) VALUES
(1, 2, 'Tidak', 'Ya', '3', 'Ya', 'Ya', '1', 'Tidak', '0', 'Tidak', '0', 'Ya', '1'),
(2, 3, 'Ya', 'Tidak', '4', 'Ya', 'Ya', '3', 'Ya', '1', 'Tidak', '0', 'Tidak', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_user_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_user_cms`
--

INSERT INTO `tbl_user_cms` (`id`, `username`, `password`, `nama`, `email`, `status`) VALUES
(1, 'gede', '$2a$10$NskiH9hitZ7EWCDMou1UD.NRqkup7.uisd/t6./lOZ12Jikg7QWF.', 'Administrator', 'dev@dua-rasa.com', 'administrasi'),
(2, 'admin', '$2a$10$M0Z3.tA3.fv/KIUN0Ck6OO8bX7e7d.ZE7EGRE8.H0ig5qlUUVT9jO', 'Gede Lumbung', 'gede@mail.com', 'laboratorium'),
(3, 'agus', '$2a$10$GRREBP6D4gGOwcXmhvlwe.LBbbdH405KAxnJP6.IiqAGgPEFF0M8O', 'Agus Ganteng', 'agus@mail.com', 'radiologi'),
(4, 'fisioterapi', '$2a$10$lfk1b0qhMQvyZWrn5yc/yu/If8ysN3jPrg49JvJJu6tRi4T0Sl9TK', 'Fisioterapi User', 'fisioterapi@mail.com', 'fisioterapi'),
(5, 'registrasi', '$2a$10$cBlgSna.FFQztovwPkKy8uW2U0ZrwKd/HFPxMPtIYeGPcUIYSNt1.', 'registrasi', 'registrasi@mail.com', 'registrasi'),
(6, 'ugd', '$2a$10$Wm18mXxJfU1k5GjqLkJgCeiIejAIHLKii8UaeuXQCt4y4XxpPe3Tu', 'ugd', 'ugd@mail.com', 'ugd'),
(7, 'apotik', '$2a$10$FGmZkJSrn6eu.p2FN4/OG.au8.Y8N91vcYgMDGNBn6utkZevF7cqS', 'apotik', 'apotik@mail.com', 'apotik');
