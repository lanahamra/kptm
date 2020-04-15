-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 11:30 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `ast_harta`
--

CREATE TABLE `ast_harta` (
  `ast_hrt_id` int(30) NOT NULL,
  `ast_kump_id` varchar(30) NOT NULL,
  `ast_hrt_nama` varchar(30) NOT NULL,
  `ast_hrt_keterangan` varchar(30) NOT NULL,
  `ast_hrt_nosiri` varchar(30) NOT NULL,
  `ast_kat_id` varchar(30) NOT NULL,
  `ast_pst_id` varchar(30) NOT NULL,
  `ast_kla_id` varchar(30) NOT NULL,
  `ast_lok_id` varchar(30) NOT NULL,
  `ast_pen_lok_id` varchar(30) NOT NULL,
  `ast_hrt_tahun` varchar(30) NOT NULL,
  `ast_hrt_po` varchar(30) NOT NULL,
  `ast_hrt_po_dt` date NOT NULL,
  `ast_hrt_do` varchar(30) NOT NULL,
  `ast_hrt_do_dt` date NOT NULL,
  `ast_hrt_inbois` varchar(30) NOT NULL,
  `ast_hrt_inbois_dt` date NOT NULL,
  `ast_hrt_baucer` varchar(30) NOT NULL,
  `ast_hrt_baucer_dt` date NOT NULL,
  `ast_hrt_kuantiti` varchar(30) NOT NULL,
  `ast_hrt_harga` varchar(30) NOT NULL,
  `ast_hrt_harga_total` varchar(30) NOT NULL,
  `ast_hrt_hargagst` varchar(30) NOT NULL,
  `ast_hrt_jumhargagst` varchar(30) NOT NULL,
  `ast_hrt_dt` date NOT NULL,
  `ast_peng_id` varchar(30) NOT NULL,
  `ast_pbkl_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_harta`
--

INSERT INTO `ast_harta` (`ast_hrt_id`, `ast_kump_id`, `ast_hrt_nama`, `ast_hrt_keterangan`, `ast_hrt_nosiri`, `ast_kat_id`, `ast_pst_id`, `ast_kla_id`, `ast_lok_id`, `ast_pen_lok_id`, `ast_hrt_tahun`, `ast_hrt_po`, `ast_hrt_po_dt`, `ast_hrt_do`, `ast_hrt_do_dt`, `ast_hrt_inbois`, `ast_hrt_inbois_dt`, `ast_hrt_baucer`, `ast_hrt_baucer_dt`, `ast_hrt_kuantiti`, `ast_hrt_harga`, `ast_hrt_harga_total`, `ast_hrt_hargagst`, `ast_hrt_jumhargagst`, `ast_hrt_dt`, `ast_peng_id`, `ast_pbkl_id`) VALUES
(1, 'ACD', 'AIRCOND', 'AIRCOND PEJABAT', '0001', 'AIM', 'HQ', 'AP', '', '', '2020', '4354', '2020-04-21', '5633', '2020-04-13', '2222', '2020-04-10', '1111', '2020-04-02', '12', '112', '1112', '3.99', '1115.99', '2020-04-05', '777', '222'),
(2, 'FAX', 'fax', 'fax', '0002', 'AIM', 'AS', 'AP', '', '', '2020', '4366', '0000-00-00', '', '2020-04-25', '7659090', '2020-04-19', '6543053', '2020-04-04', '12', '100', '99', '3.99', '1020', '0000-00-00', '', '2387'),
(3, 'KER', 'kereta', 'kereta', '003', 'AIM', 'AS', 'AP', '', '', '2020', '4383', '0000-00-00', '', '2020-05-01', '7659090', '2020-04-06', '6555431', '2020-03-30', '12', '899', '99', '3.99', '1110', '0000-00-00', '', '12'),
(4, 'PRT', 'printer', 'printer lecturer lounge', 'printer', 'IVC', 'HQ', 'KP', '', '', '2020', '4321', '2020-03-29', '6578', '2020-04-03', '7654321', '2020-06-17', '32887', '2020-04-04', '1', '100', '10', '3.99', '1000', '0000-00-00', '', '01');

-- --------------------------------------------------------

--
-- Table structure for table `ast_jabatn`
--

CREATE TABLE `ast_jabatn` (
  `ast_jbtn_id` int(30) NOT NULL,
  `ast_jbtn_nama` varchar(30) NOT NULL,
  `ast_jbtn_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_jabatn`
--

INSERT INTO `ast_jabatn` (`ast_jbtn_id`, `ast_jbtn_nama`, `ast_jbtn_status`) VALUES
(1, 'BAHAGIAN AKADEMIK', 'Y'),
(2, 'BAHAGIAN HAL EHWAL PELAJAR', 'Y'),
(3, 'JABATAN PERANCANGAN KORPORAT', 'Y'),
(4, 'JABATAN LOGISTIK & ASET', 'Y'),
(5, 'JABATAN SUMBER MANUSIA', 'Y'),
(6, 'PEJABAT PRESIDEN', 'Y'),
(7, 'SEKSYEN URUS SETIA', 'Y'),
(8, 'JABATAN AUDIT DALAM', 'Y'),
(9, 'JABATAN KEWANGAN', 'Y'),
(10, 'JABATAN PENDIDIKAN BERTERUSAN', 'Y'),
(11, 'JABATAN TEKNOLOGI MAKLUMAT', 'Y'),
(12, 'BAHAGIAN PENYELIDIKAN, INOVASI', 'Y'),
(13, 'PEJABAT PENGURUSAN PROJEK', 'Y'),
(14, 'SEKSYEN UNDANG-UNDANG', 'Y'),
(15, 'SEKSYEN JAMINAN KUALITI', 'Y'),
(16, 'PEJABAT PENGERUSI', 'Y'),
(17, 'FAKULTI PENDIDIKAN, KEMANUSIAA', 'Y'),
(18, 'FAKULTI PENGKOMPUTERAN, INFORM', 'Y'),
(19, 'FAKULTI PERNIAGAAN, PERAKAUNAN', 'Y'),
(20, 'INSTITUT PENGAJIAN PROFESIONAL', 'Y'),
(21, 'INSTITUT PENGAJIAN SISWAZAH', 'Y'),
(22, 'JABATAN BAHASA INGGERIS', 'Y'),
(23, 'JABATAN KEJURAWATAN', 'Y'),
(24, 'JABATAN KEJURUTERAAN AWAM', 'Y'),
(25, 'JABATAN KEJURUTERAAN ELEKTRIK ', 'Y'),
(26, 'JABATAN KHIDMAT PENGURUSAN', 'Y'),
(27, 'JABATAN KLINIKAL', 'Y'),
(28, 'JABATAN MATEMATIK & SAINS KOMP', 'Y'),
(29, 'JABATAN MULTIMEDIA', 'Y'),
(30, 'JABATAN PENGAJIAN UMUM', 'Y'),
(31, 'JABATAN PENGURUSAN PERNIAGAAN', 'Y'),
(32, 'JABATAN PENGURUSAN PERNIAGAAN ', 'Y'),
(33, 'JABATAN PERAKAUNAN', 'Y'),
(34, 'JABATAN SAINS', 'Y'),
(35, 'PEJABAT BURSAR', 'Y'),
(36, 'PEJABAT NAIB CANSELOR', 'Y'),
(37, 'PEJABAT PENDAFTAR', 'Y'),
(38, 'PEJABAT PENGARAH', 'Y'),
(39, 'PEJABAT PERPUSTAKAAN', 'Y'),
(40, 'PEJABAT TIMBALAN NAIB CANSELOR', 'Y'),
(41, 'PEJABAT TIMBALAN NAIB CANSELOR', 'Y'),
(42, 'PEJABAT TIMBALAN NAIB CANSELOR', 'Y'),
(43, 'SEKSYEN KOMUNIKASI KORPORAT', 'Y'),
(44, 'JABATAN MATEMATIK', 'Y'),
(45, 'JABATAN KEMAHIRAN', 'Y'),
(46, 'JABATAN PENGAJIAN KOMUNIKASI', 'Y'),
(47, 'JABATAN PENGAJIAN PROFESIONAL', 'Y'),
(48, 'JABATAN SAINS KOMPUTER', 'Y'),
(49, 'SEKSYEN LAPORAN AKAUN', 'Y'),
(50, 'SEKTOR PENJADUALAN & PEPERIKSA', 'Y'),
(51, 'PEJABAT PENGURUSAN PROJEK', 'Y'),
(52, 'SEKSYEN PENTADBIRAN SISTEM & R', 'Y'),
(53, 'SEKSYEN LATIHAN / PEMBANGUNAN ', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_kategori`
--

CREATE TABLE `ast_kategori` (
  `ast_kat_id` varchar(30) NOT NULL,
  `ast_kat_nama` varchar(30) NOT NULL,
  `ast_kat_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_kategori`
--

INSERT INTO `ast_kategori` (`ast_kat_id`, `ast_kat_nama`, `ast_kat_status`) VALUES
('AIM', 'Harta Tetap AIM', 'Y'),
('FTF', 'Harta Tetap KPTM', 'Y'),
('HTA', 'Harta Tetap ATAP', 'Y'),
('HTC', 'Harta Tetap FOC', 'Y'),
('HTL', 'HARTA TETAP LEASING', 'N'),
('HTM', 'Harta Tetap Am', 'Y'),
('IVA', 'Inventori Am', 'Y'),
('IVC', 'Inventori FOC', 'Y'),
('IVL', 'Inventori Leasing', 'Y'),
('IVM', 'Inventori Am', 'Y'),
('YPM', 'Harta Tetap YPM', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_kategori_lupus`
--

CREATE TABLE `ast_kategori_lupus` (
  `ast_kat_pel_id` varchar(30) NOT NULL,
  `ast_kat_pel_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_kategori_pergerakan`
--

CREATE TABLE `ast_kategori_pergerakan` (
  `ast_kat_per_id` varchar(30) NOT NULL,
  `ast_kat_per_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_kategori_ssm`
--

CREATE TABLE `ast_kategori_ssm` (
  `ast_kat_ssm_id` varchar(30) NOT NULL,
  `ast_kat_ssm_nama` varchar(30) NOT NULL,
  `ast_kat_ssm_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_kehilangan`
--

CREATE TABLE `ast_kehilangan` (
  `ast_hrt_id` varchar(30) NOT NULL,
  `ast_staf_id` varchar(30) NOT NULL,
  `ast_keh_nlap` varchar(30) NOT NULL,
  `ast_keh_balai` varchar(30) NOT NULL,
  `ast_keh_dt_lap` date NOT NULL,
  `ast_keh_tempat` varchar(30) NOT NULL,
  `ast_keh_sebab` text NOT NULL,
  `ast_keh_catatan` text NOT NULL,
  `ast_peng_id` varchar(30) NOT NULL,
  `ast_keh_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_klasifikasi`
--

CREATE TABLE `ast_klasifikasi` (
  `ast_kla_id` varchar(30) NOT NULL,
  `ast_kla_nama` varchar(30) NOT NULL,
  `ast_kla_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_klasifikasi`
--

INSERT INTO `ast_klasifikasi` (`ast_kla_id`, `ast_kla_nama`, `ast_kla_status`) VALUES
('AP', 'Peralatan Pejabat', 'Y'),
('BN', 'Bangunan Pegangan Pajakan', 'Y'),
('KD', 'Kenderaan Bermotor', 'Y'),
('KP', 'Peralatan Komputer', 'Y'),
('MS', 'Alatan Makmal Sains', 'Y'),
('PP', 'Perkakasan Perabot', 'Y'),
('PS', 'Perisian', 'Y'),
('TB', 'TANAH PEGANGAN BEBAS', 'Y'),
('TP', 'Tanah Pegangan Pajakan', 'Y'),
('US', 'Pengubahsuaian', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_kumpulan`
--

CREATE TABLE `ast_kumpulan` (
  `ast_kump_id` varchar(30) NOT NULL,
  `ast_kump_nama` varchar(30) NOT NULL,
  `ast_kump_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_kumpulan`
--

INSERT INTO `ast_kumpulan` (`ast_kump_id`, `ast_kump_nama`, `ast_kump_status`) VALUES
('ACD', 'ACCESS DOOR', 'Y'),
('AMS', 'ALATAN MAKMAL SAINS', 'Y'),
('BDG', 'BINDING', 'Y'),
('BEG', 'BEG', 'Y'),
('BST', 'BROCHURE STAND', 'Y'),
('CCT', 'CCTV', 'Y'),
('CPC', 'CAPTION COKMAR', 'Y'),
('DPS', 'DISPENSER', 'Y'),
('FAX', 'FAX', 'Y'),
('FLC', 'FLITE CASE', 'Y'),
('HPO', 'ALATAN PEJABAT', 'Y'),
('HRD', 'HARD DISK', 'Y'),
('KAR', 'KARPET', 'Y'),
('KDR', 'KENDERAAN', 'Y'),
('KER', 'KERETA', 'N'),
('KNT', 'KAUNTER', 'Y'),
('KOM', 'KOMPUTER', 'Y'),
('PER', 'PERABOT', 'Y'),
('PGN', 'PIGEON HOLE', 'Y'),
('PGS', 'PENGUBAHSUAIAN', 'Y'),
('PNU', 'PENYAMAN UDARA', 'Y'),
('PRT', 'PRINTER', 'Y'),
('PSN', 'PERISIAN', 'Y'),
('PUD', 'POP UP DISPLAY', 'Y'),
('RAC', 'RACK', 'Y'),
('SIG', 'SIGNAGE', 'Y'),
('SIS', 'SISTEM', 'Y'),
('STP', 'SISTEM PENGGERA', 'Y'),
('TV', 'TELEVISYEN', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_lokasi`
--

CREATE TABLE `ast_lokasi` (
  `ast_lok_id` varchar(30) NOT NULL,
  `ast_lok_nama` varchar(30) NOT NULL,
  `ast_lok_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_lokasi`
--

INSERT INTO `ast_lokasi` (`ast_lok_id`, `ast_lok_nama`, `ast_lok_status`) VALUES
('BKL', 'Bengkel', 'Y'),
('CET', 'Bilik Percetakan', 'Y'),
('FOY', 'Foyer/Dataran', 'Y'),
('GEL', 'Gelanggang Sukan', 'Y'),
('HAL', 'Dewan', 'Y'),
('HOS', 'Asrama/Hostel', 'Y'),
('KAF', 'Kafeteria', 'Y'),
('KAW', 'Kawasan Kolej', 'Y'),
('KUL', 'Bilik Kuliah/Tutorial', 'Y'),
('LAB', 'Makmal Sains/Kejuruteraan/Baha', 'Y'),
('LIB', 'Perpustakaan', 'Y'),
('LLN', 'Lain-lain', 'Y'),
('MET', 'Bilik Mesyuarat/Bincang', 'Y'),
('MKP', 'Makmal Komputer', 'Y'),
('MPP', 'Bilik Majlis/Perwakilan Pelaja', 'Y'),
('MUZ', 'Bilik Muzik', 'Y'),
('PEJ', 'Pejabat', 'Y'),
('PLT', 'Pusat Latihan', 'Y'),
('POP', 'Pusat Mengawal', 'Y'),
('PPB', 'Pendidikan Berterusan', 'Y'),
('PSY', 'Pejabat/Ruang Pensyarah', 'Y'),
('QTR', 'Kaunters', 'Y'),
('REC', 'Kaunter Telefonis', 'Y'),
('REP', 'Bilik Rehat Pelajar', 'Y'),
('RES', 'Bilik Rehat Staf', 'Y'),
('SEV', 'Bilik Server', 'Y'),
('SOR', 'Stor', 'Y'),
('SRU', 'Surau', 'Y'),
('STD', 'Studio', 'Y'),
('STO', 'Studio', 'Y'),
('STR', 'Stor', 'Y'),
('SUR', 'Surau', 'Y'),
('SVR', 'Bilik Server', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_negeri`
--

CREATE TABLE `ast_negeri` (
  `ast_neg_id` varchar(30) NOT NULL,
  `ast_neg_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_negeri`
--

INSERT INTO `ast_negeri` (`ast_neg_id`, `ast_neg_nama`) VALUES
('1', 'W.P. KUALA LUMPUR'),
('2', 'SELANGOR'),
('3', 'PAHANG'),
('4', 'JOHOR');

-- --------------------------------------------------------

--
-- Table structure for table `ast_pelupusan`
--

CREATE TABLE `ast_pelupusan` (
  `ast_hrt_id` varchar(30) NOT NULL,
  `ast_kat_pel_id` varchar(30) NOT NULL,
  `ast_pel_tempoh` varchar(30) NOT NULL,
  `ast_pel_sebab` text NOT NULL,
  `ast_pel_ajk` varchar(30) NOT NULL,
  `ast_pel_tarikhlupus` date NOT NULL,
  `ast_peng_id` varchar(30) NOT NULL,
  `ast_pel_dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_pembaikan`
--

CREATE TABLE `ast_pembaikan` (
  `ast_hrt_id` varchar(30) NOT NULL,
  `ast_staf_id` varchar(30) NOT NULL,
  `ast_pbkn_ic` varchar(30) NOT NULL,
  `ast_pbkn_alamat` text NOT NULL,
  `ast_pbkn_alamat2` text NOT NULL,
  `ast_pbkn_poskod` varchar(30) NOT NULL,
  `ast_pbkn_negeri` varchar(30) NOT NULL,
  `ast_pbkn_kenderaan` varchar(30) NOT NULL,
  `ast_peng_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_pembekal`
--

CREATE TABLE `ast_pembekal` (
  `ast_pbkl_id` varchar(30) NOT NULL,
  `ast_pbkl_nama` varchar(30) NOT NULL,
  `ast_pbkl_alamat` varchar(30) NOT NULL,
  `ast_pbkl_poskod` varchar(30) NOT NULL,
  `ast_neg_id` varchar(30) NOT NULL,
  `ast_pbkl_tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_pembekal`
--

INSERT INTO `ast_pembekal` (`ast_pbkl_id`, `ast_pbkl_nama`, `ast_pbkl_alamat`, `ast_pbkl_poskod`, `ast_neg_id`, `ast_pbkl_tel`) VALUES
('01', 'choi', 'seoul', '11011', 'busan', '90119018'),
('1100', 'hamra', 'cheras ampang', '47810', '', '0199555900'),
('1150', 'hamra', 'cheras', '47810', 'bharu', '0199555900'),
('12', 'aiman', 'mutiara dmnsr', '47810', 'selangor', '0199555900'),
('2387', 'faziah', 'cheras ampang', '47811', 'kelantan', '0199992993'),
('3744', 'adam', 'damansara', '47810', 'baru', '0199992993'),
('4377', 'nabilah', 'cheras ampang', '47810', '321', '0199992900');

-- --------------------------------------------------------

--
-- Table structure for table `ast_penempatan`
--

CREATE TABLE `ast_penempatan` (
  `ast_hrt_id` int(30) NOT NULL,
  `ast_staf_id` varchar(30) NOT NULL,
  `ast_pmptn_dt_serahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_penempatan_lokasi`
--

CREATE TABLE `ast_penempatan_lokasi` (
  `ast_pen_lok_id` int(11) NOT NULL,
  `ast_pen_lok_nama` int(11) NOT NULL,
  `ast_pen_lok_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_pengguna`
--

CREATE TABLE `ast_pengguna` (
  `ast_peng_id` varchar(30) NOT NULL,
  `ast_peng_nama` varchar(30) NOT NULL,
  `ast_peng_kat` varchar(30) NOT NULL,
  `ast_peng_role` int(11) NOT NULL,
  `ast_peng_status` varchar(30) NOT NULL,
  `ast_peng_site` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_permohonan`
--

CREATE TABLE `ast_permohonan` (
  `ast_pbk_id` varchar(30) NOT NULL,
  `ast_per_po` varchar(30) NOT NULL,
  `ast_per_po_dt` date NOT NULL,
  `ast_kat_id` varchar(30) NOT NULL,
  `ast_per_nama` varchar(30) NOT NULL,
  `ast_per_keterangan` varchar(30) NOT NULL,
  `ast_per_kuantiti` varchar(30) NOT NULL,
  `ast_per_harga` varchar(30) NOT NULL,
  `ast_per_jum` varchar(30) NOT NULL,
  `ast_per_hargagst` varchar(30) NOT NULL,
  `ast_per_jumhargagst` varchar(30) NOT NULL,
  `ast_per_dt_keyin` date NOT NULL,
  `ast_peng_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_pindahan`
--

CREATE TABLE `ast_pindahan` (
  `ast_hrt_id` varchar(30) NOT NULL,
  `ast_staf_id` varchar(30) NOT NULL,
  `ast_pin_nama` varchar(30) NOT NULL,
  `ast_pin_cawangan` varchar(30) NOT NULL,
  `ast_pin_dt` date NOT NULL,
  `ast_kat_per_id` varchar(30) NOT NULL,
  `ast_pin_harga` varchar(30) NOT NULL,
  `ast_pin_susutnilai` varchar(30) NOT NULL,
  `ast_pin_bukubersih` varchar(30) NOT NULL,
  `ast_pen_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ast_pusat`
--

CREATE TABLE `ast_pusat` (
  `ast_pst_id` varchar(30) NOT NULL,
  `ast_pst_nama` varchar(30) NOT NULL,
  `ast_pst_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ast_pusat`
--

INSERT INTO `ast_pusat` (`ast_pst_id`, `ast_pst_nama`, `ast_pst_status`) VALUES
('AS', 'KPTM Alor Setar', 'Y'),
('BG', 'KPTM BANGI', 'Y'),
('BP', 'KPTM Batu Pahat', 'Y'),
('HQ', 'KPTM IBU PEJABAT', 'Y'),
('IP', 'KPTM Ipoh', 'Y'),
('KB', 'KPTM Kota Bharu', 'Y'),
('KL', 'KPTM KUALA LUMPUR', 'Y'),
('KN', 'KPTM KUANTAN', 'Y'),
('KS', 'KPTM Kesedar', 'Y'),
('SS', 'KPTM Semporna', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ast_staf`
--

CREATE TABLE `ast_staf` (
  `ast_staf_id` varchar(30) NOT NULL,
  `ast_staf_nama` varchar(30) NOT NULL,
  `ast_staf_jawatan` varchar(30) NOT NULL,
  `ast_staf_ketua` varchar(30) NOT NULL,
  `ast_jab_id` varchar(30) NOT NULL,
  `ast_staf_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ast_harta`
--
ALTER TABLE `ast_harta`
  ADD UNIQUE KEY `ast_hrt_id` (`ast_hrt_id`);

--
-- Indexes for table `ast_jabatn`
--
ALTER TABLE `ast_jabatn`
  ADD PRIMARY KEY (`ast_jbtn_id`);

--
-- Indexes for table `ast_kategori`
--
ALTER TABLE `ast_kategori`
  ADD PRIMARY KEY (`ast_kat_id`);

--
-- Indexes for table `ast_kategori_ssm`
--
ALTER TABLE `ast_kategori_ssm`
  ADD PRIMARY KEY (`ast_kat_ssm_id`);

--
-- Indexes for table `ast_klasifikasi`
--
ALTER TABLE `ast_klasifikasi`
  ADD PRIMARY KEY (`ast_kla_id`);

--
-- Indexes for table `ast_kumpulan`
--
ALTER TABLE `ast_kumpulan`
  ADD PRIMARY KEY (`ast_kump_id`);

--
-- Indexes for table `ast_lokasi`
--
ALTER TABLE `ast_lokasi`
  ADD PRIMARY KEY (`ast_lok_id`);

--
-- Indexes for table `ast_negeri`
--
ALTER TABLE `ast_negeri`
  ADD PRIMARY KEY (`ast_neg_id`);

--
-- Indexes for table `ast_pelupusan`
--
ALTER TABLE `ast_pelupusan`
  ADD UNIQUE KEY `ast_kat_pel_id` (`ast_kat_pel_id`),
  ADD UNIQUE KEY `ast_peng_id` (`ast_peng_id`);

--
-- Indexes for table `ast_pembekal`
--
ALTER TABLE `ast_pembekal`
  ADD PRIMARY KEY (`ast_pbkl_id`),
  ADD UNIQUE KEY `ast_neg_id` (`ast_neg_id`);

--
-- Indexes for table `ast_penempatan`
--
ALTER TABLE `ast_penempatan`
  ADD UNIQUE KEY `ast_staf_id` (`ast_staf_id`);

--
-- Indexes for table `ast_pengguna`
--
ALTER TABLE `ast_pengguna`
  ADD PRIMARY KEY (`ast_peng_id`);

--
-- Indexes for table `ast_permohonan`
--
ALTER TABLE `ast_permohonan`
  ADD UNIQUE KEY `ast_pbk_id` (`ast_pbk_id`),
  ADD UNIQUE KEY `ast_kat_id` (`ast_kat_id`),
  ADD UNIQUE KEY `ast_peng_id` (`ast_peng_id`);

--
-- Indexes for table `ast_pindahan`
--
ALTER TABLE `ast_pindahan`
  ADD UNIQUE KEY `ast_staf_id` (`ast_staf_id`),
  ADD UNIQUE KEY `ast_pen_id` (`ast_pen_id`),
  ADD UNIQUE KEY `ast_kat_per_id` (`ast_kat_per_id`);

--
-- Indexes for table `ast_pusat`
--
ALTER TABLE `ast_pusat`
  ADD PRIMARY KEY (`ast_pst_id`);

--
-- Indexes for table `ast_staf`
--
ALTER TABLE `ast_staf`
  ADD PRIMARY KEY (`ast_staf_id`),
  ADD UNIQUE KEY `ast_jab_id` (`ast_jab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ast_harta`
--
ALTER TABLE `ast_harta`
  MODIFY `ast_hrt_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ast_jabatn`
--
ALTER TABLE `ast_jabatn`
  MODIFY `ast_jbtn_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
