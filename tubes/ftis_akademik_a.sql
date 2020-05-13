-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 08:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftis_akademik_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program_studi` varchar(5) NOT NULL,
  `tingkat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `nama`, `program_studi`, `tingkat`) VALUES
('AIF181100', 'Dasar-dasar Pemrograman', 'IF', '2'),
('AIF181101', 'Pemodelan untuk Komputasi', 'IF', '1'),
('AIF181104', 'Logika Informatika', 'IF', '2'),
('AIF181106', 'Matriks dan Ruang Vektor', 'IF', '2'),
('AIF181202', 'Arsitektur dan Organisasi Komputer', 'IF', '2'),
('AIF182100', 'Analisis dan Desain Perangkat Lunak', 'IF', '4'),
('AIF182101 ', 'Algoritma dan Struktur Data', 'IF', '3'),
('AIF182106', 'Desain dan Analisis Algoritma', 'IF', '4'),
('AIF182112', 'Pemrograman Kompetitif ', 'IF', '6p'),
('AIF182204', 'Pemrograman Berbasis Web', 'IF', '4'),
('AIF182210', 'Pengantar Jaringan Komputer', 'IF', '4'),
('AIF182302', 'Manajemen Informasi dan Basis Data', 'IF', '4'),
('AIF182308', 'Pengantar Sistem Informasi', 'IF', '4'),
('AIF183002', 'Penulisan Ilmiah', 'IF', '6'),
('AIF183106', 'Proyek Informatika', 'IF', '6'),
('AIF183114', 'Algoritma Kriptografi', 'IF', '6p'),
('AIF183120', 'Pemrograman Permainan Komputer', 'IF', '6p'),
('AIF183123', 'Topik Khusus Informatika 1', 'IF', '6p'),
('AIF183143 ', 'Pemodelan Formal', 'IF', '6p'),
('AIF183153', 'Metode Numerik', 'IF', '4'),
('AIF183204', 'Jaringan Komputer', 'IF', '6'),
('AIF183232', 'Pemrograman Berbasis Web Lanjut', 'IF', '6p'),
('AIF183236', 'Sertifikasi Administrasi Jaringan Komputer 2', 'IF', '6p'),
('AIF183238', 'Topik Khusus Sistem Terdistribusi 2', 'IF', '6'),
('AIF183240 ', 'Sertifikasi Cyber Ops', 'IF', '8p'),
('AIF183300', 'Teknologi Basis Data', 'IF', '6'),
('AIF183308', 'Proyek Sistem Informasi 1', 'IF', '6'),
('AIF183342', 'Kewirausahaan Berbasis Teknologi', 'IF', '8'),
('AIF183348 ', 'Sistem Kecerdasan Bisnis', 'IF', '7p'),
('AIF184000 ', 'Etika Profesi', 'IF', '8/8'),
('AIF184106 ', 'Analisis Data Permainan Komputer', 'IF', '6p'),
('AIF184109', 'Pembelajaran Mesin', 'IF', '8'),
('AIF184116', 'Sistem Multi Agen', 'IF', '8p'),
('AIF184222', 'Sertifikasi Administrasi Jaringan Komputer 4', 'IF', '8p'),
('AIF184332 ', 'Teknologi Big Data dan Cloud Computing', 'IF', '7p'),
('AIF184341 ', 'Penambangan Data', 'IF', '8'),
('AIF184351 ', 'Analisis Big Data', 'IF', '8'),
('AMS 183204', 'Geometri', 'MA', 'p'),
('AMS 183303', 'Pengantar Ekonomi', 'MA', 'p'),
('AMS 183401', 'Matematika Keuangan', 'MA', 'p keu-akt'),
('AMS 184302', 'Teori Risiko', 'MA', 'p'),
('AMS181202', 'Kalkulus 2', 'MA', '2'),
('AMS181204', 'Matematika Diskret', 'MA', '2'),
('AMS181206', 'Aljabar Matriks', 'MA', '2'),
('AMS181802', 'Pemrograman Komputer', 'MA', '2'),
('AMS181902', 'Bahasa Inggris', 'MA', '2'),
('AMS182202', 'Aljabar Linear', 'MA', '4'),
('AMS182502', 'Statistika Matematika', 'MA', '4'),
('AMS182702', 'Persamaan Diferensial Biasa', 'MA', '4'),
('AMS182704', 'Komputasi Matematika', 'MA', '4'),
('AMS182706', 'Metoda Matematika', 'MA', '4'),
('AMS183202', 'Analisis Real', 'MA', '6'),
('AMS183300', 'Pengantar Matematika Asuransi', 'MA', 'p keu-akt'),
('AMS183302', 'Teori Suku Bunga Lanjut', 'MA', 'p keu-akt'),
('AMS183502', 'Model-Model Persediaan', 'MA', 'p Industr'),
('AMS184400', 'Kapita Selekta Keuangan', 'MA', ''),
('AMS184503', 'Statistika Multivariat', 'MA', 'p Industr'),
('PHY181021', 'Fisika Dasar 2', 'FI', '2'),
('PHY181022', 'Fisika Matematika 2', 'FI', '2'),
('PHY181023', 'Mekanika 1', 'FI', '2'),
('PHY181024', 'Fisika Komputasi', 'FI', '2'),
('PHY182021', 'Fisika Matematika 4', 'FI', '4'),
('PHY182022', 'Gelombang', 'FI', '4'),
('PHY182023', 'Listrik Magnet', 'FI', '4'),
('PHY182024', 'Fisika Thermal', 'FI', '4'),
('PHY182025', 'Fisika Instrumentasi', 'FI', '4'),
('PHY183022', 'Struktur Materi', 'FI', '6'),
('PHY183023', 'Optika', 'FI', '6'),
('PHY183024', 'Teknik Presentasi', 'FI', '6'),
('PHY183106', 'Mekanika Kuantum', 'FI', '6'),
('PHY183204', 'Fisika Polimer', 'FI', 'p materi'),
('PHY183207', 'Spektroskopi', 'FI', 'p materi'),
('PHY183304', 'Kapita Selekta Fisika Medis', 'FI', 'p medis'),
('PHY183405 ', 'Machine Learning dalam Fisika', 'FI', 'p intrum'),
('PHY183601', 'Matematika Dasar', 'FI', '6'),
('PHY183607 ', 'Pengantar Astronomi', 'FI', 'p teori'),
('PHY184003', 'Etika Profesi', 'FI', '8/8'),
('SAB315', 'Kewirausahaan', 'FI', '7');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `koordinator` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id`, `kode`, `dosen_id`, `semester_id`, `koordinator`) VALUES
(1, 'AIF181100', 21, 2, 1),
(2, 'AIF181100', 29, 2, 0),
(3, 'AIF181100', 48, 2, 0),
(4, 'AIF181101', 48, 2, 1),
(5, 'AIF181104', 33, 2, 1),
(6, 'AIF181104', 34, 2, 0),
(7, 'AIF181106', 34, 2, 1),
(8, 'AIF181106', 30, 2, 0),
(9, 'AIF181202', 14, 2, 1),
(10, 'AIF182100', 37, 2, 1),
(11, 'AIF182100', 22, 2, 1),
(12, 'AIF182101 ', 21, 2, 1),
(13, 'AIF182106', 26, 2, 1),
(14, 'AIF182112', 26, 2, 1),
(15, 'AIF182204', 41, 2, 1),
(16, 'AIF182210', 14, 2, 1),
(17, 'AIF182302', 13, 2, 1),
(18, 'AIF182308', 45, 2, 1),
(19, 'AIF183002', 29, 2, 1),
(20, 'AIF183106', 37, 2, 1),
(21, 'AIF183114', 33, 2, 1),
(22, 'AIF183120', 21, 2, 1),
(23, 'AIF183120', 25, 2, 0),
(24, 'AIF183123', 30, 2, 1),
(25, 'AIF183143 ', 12, 2, 1),
(26, 'AIF183153', 34, 2, 1),
(27, 'AIF183204', 14, 2, 1),
(28, 'AIF183204', 4, 2, 0),
(29, 'AIF183232', 37, 2, 1),
(30, 'AIF183236', 4, 2, 1),
(31, 'AIF183238', 33, 2, 1),
(32, 'AIF183238', 43, 2, 0),
(33, 'AIF183240 ', 4, 2, 1),
(34, 'AIF183300', 21, 2, 1),
(35, 'AIF183300', 48, 2, 0),
(36, 'AIF183300', 27, 2, 0),
(37, 'AIF183308', 48, 2, 1),
(38, 'AIF183342', 13, 2, 1),
(39, 'AIF183342', 36, 2, 0),
(40, 'AIF183348 ', 13, 2, 1),
(41, 'AIF183348 ', 31, 2, 0),
(42, 'AIF184000 ', 5, 2, 1),
(43, 'AIF184106 ', 21, 2, 1),
(44, 'AIF184106 ', 25, 2, 0),
(45, 'AIF184109', 30, 2, 1),
(46, 'AIF184116', 12, 2, 1),
(47, 'AIF184222', 4, 2, 1),
(48, 'AIF184332 ', 13, 2, 1),
(49, 'AIF184332 ', 18, 2, 0),
(50, 'AIF184341 ', 13, 2, 1),
(51, 'AIF184341 ', 27, 2, 0),
(52, 'AIF184351 ', 13, 2, 1),
(53, 'AMS 183204', 40, 2, 1),
(54, 'AMS 183303', 3, 2, 1),
(55, 'AMS 183401', 28, 2, 1),
(56, 'AMS 184302', 9, 2, 1),
(57, 'AMS181202', 15, 2, 1),
(58, 'AMS181202', 9, 2, 0),
(59, 'AMS181202', 7, 2, 0),
(60, 'AMS181204', 2, 2, 1),
(61, 'AMS181206', 8, 2, 1),
(62, 'AMS181206', 46, 2, 0),
(63, 'AMS181206', 6, 2, 0),
(64, 'AMS181802', 8, 2, 1),
(65, 'AMS181802', 32, 2, 0),
(66, 'AMS181802', 28, 2, 0),
(67, 'AMS181802', 6, 2, 0),
(68, 'AMS181902', 8, 2, 1),
(69, 'AMS181902', 19, 2, 0),
(70, 'AMS182202', 8, 2, 1),
(71, 'AMS182202', 6, 2, 0),
(72, 'AMS182502', 9, 2, 1),
(73, 'AMS182702', 23, 2, 1),
(74, 'AMS182704', 16, 2, 1),
(75, 'AMS182706', 40, 2, 1),
(76, 'AMS182706', 7, 2, 0),
(77, 'AMS183202', 40, 2, 1),
(78, 'AMS183300', 32, 2, 1),
(79, 'AMS183302', 16, 2, 1),
(80, 'AMS183502', 10, 2, 1),
(81, 'AMS184400', 8, 2, 1),
(82, 'AMS184400', 35, 2, 0),
(83, 'AMS184503', 1, 2, 1),
(84, 'PHY181021', 39, 2, 1),
(85, 'PHY181022', 47, 2, 1),
(86, 'PHY181023', 38, 2, 1),
(87, 'PHY181024', 42, 2, 1),
(88, 'PHY182021', 38, 2, 1),
(89, 'PHY182022', 47, 2, 1),
(90, 'PHY182022', 11, 2, 0),
(91, 'PHY182023', 38, 2, 1),
(92, 'PHY182024', 42, 2, 1),
(93, 'PHY182025', 24, 2, 1),
(94, 'PHY183022', 44, 2, 1),
(95, 'PHY183023', 20, 2, 1),
(96, 'PHY183024', 39, 2, 1),
(97, 'PHY183106', 47, 2, 1),
(98, 'PHY183204', 5, 2, 1),
(99, 'PHY183207', 44, 2, 1),
(100, 'PHY183304', 17, 2, 1),
(101, 'PHY183405 ', 24, 2, 1),
(102, 'PHY183601', 47, 2, 1),
(103, 'PHY183607 ', 42, 2, 1),
(104, 'PHY184003', 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `kode` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`kode`, `nama`, `kapasitas`) VALUES
('lab', 'lab', 70),
('r10316', 'r10316', 35),
('r10317', 'r10317', 35),
('r10323', 'r10323', 35),
('r9120', 'r9120', 35),
('r9121', 'r9121', 35),
('r9122', 'r9122', 35);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `tahun_ajar` varchar(10) NOT NULL,
  `berjalan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `jenis`, `tahun_ajar`, `berjalan`) VALUES
(1, 'Ganjil', '2019/2020', 0),
(2, 'Genap', '2019/2020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `mengajar_id` int(11) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `tata_cara` varchar(20) NOT NULL,
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `ruang` varchar(15) DEFAULT NULL,
  `shift` int(11) DEFAULT NULL,
  `kebutuhan_pengawas` int(11) NOT NULL,
  `jumlahPeserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id`, `mengajar_id`, `tipe`, `tata_cara`, `mulai`, `selesai`, `ruang`, `shift`, `kebutuhan_pengawas`, `jumlahPeserta`) VALUES
(10, 1, 'uts', 'Kelas - Open Book', '2020-05-14 04:04:00', NULL, 'lab', 1, 3, 2),
(11, 8, 'uts', 'Kelas - Open Book', '2020-05-14 04:04:00', NULL, 'r10317', 1, 3, 2),
(12, 1, 'uts', 'Kelas - Open Book', '2020-05-14 04:00:00', '0000-00-00 00:00:00', 'lab', 1, 2, 3),
(13, 1, 'uts', 'Kelas - Open Book', '2020-05-14 04:00:00', '2020-05-14 04:00:00', 'lab', 1, 2, 22),
(14, 1, 'uts', 'Kelas - Open Book', '2020-05-14 04:00:00', '2020-05-14 08:00:00', 'lab', 1, 3, 2),
(15, 1, 'uts', 'Kelas - Open Book', '2020-05-14 04:00:00', '2020-05-14 05:00:00', 'lab', 1, 2, 22);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `pengawas_id` int(20) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `pengawas_id`, `token`, `last_login`) VALUES
('Vosetrick4', 'c00303d026dcf0ed0c2ccbd9e22e48', 'mahasiswa', 0, NULL, NULL),
('ASDasd123', '037f0b1dd44302fed8eba67c8ae2d5', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDasd123', 'mahasiswa', 0, NULL, NULL),
('admin', 'admin', 'admin', 0, NULL, NULL),
('Alfaza07', 'Alfaza07', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDAsd123', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDasd123', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDasd123', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDasd123', 'mahasiswa', 0, NULL, NULL),
('ASDASD123', 'ASDasda123', 'mahasiswa', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruang` (`ruang`),
  ADD KEY `mengajar_id` (`mengajar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
