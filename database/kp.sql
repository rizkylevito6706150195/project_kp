-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 05:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_form_mentee`
--

CREATE TABLE `data_form_mentee` (
  `username` varchar(100) NOT NULL,
  `nomor_form` varchar(100) NOT NULL,
  `jawaban1` varchar(1000) NOT NULL,
  `jawaban2` varchar(1000) NOT NULL,
  `jawaban3` varchar(1000) NOT NULL,
  `jawaban4` varchar(1000) NOT NULL,
  `jawaban5` varchar(1000) NOT NULL,
  `jawaban6` varchar(1000) NOT NULL,
  `jawaban7` varchar(1000) NOT NULL,
  `jawaban8` varchar(1000) NOT NULL,
  `jawaban9` varchar(1000) NOT NULL,
  `jawaban10` varchar(1000) NOT NULL,
  `jawaban11` varchar(1000) NOT NULL,
  `jawaban12` varchar(1000) NOT NULL,
  `jawaban13` varchar(1000) NOT NULL,
  `jawaban14` varchar(1000) NOT NULL,
  `jawaban15` varchar(1000) NOT NULL,
  `jawaban16` varchar(1000) NOT NULL,
  `jawaban17` varchar(1000) NOT NULL,
  `jawaban18` varchar(1000) NOT NULL,
  `jawaban19` varchar(1000) NOT NULL,
  `id_form_mentee` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_form_mentee`
--

INSERT INTO `data_form_mentee` (`username`, `nomor_form`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `jawaban11`, `jawaban12`, `jawaban13`, `jawaban14`, `jawaban15`, `jawaban16`, `jawaban17`, `jawaban18`, `jawaban19`, `id_form_mentee`) VALUES
('namamentee1', '1', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', 0001),
('mentee1', '2', 'namamentee1', '111', 'project 1', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a. Sudak baik / perlu dipertahankan', '11', '12', '13', '14', '15', '16', 0006),
('mentee1', '4', '2018-07-01', 'indra', 'yanto', '1', '2', '3', '4', '5', '6', '7', '', '', '', '', '', '', '', '', '', 0007),
('mentee1', '3', 'Sangat Setuju', 'Sangat Setuju', 'Setuju', 'Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Setuju', 'Sangat Setuju', 'Setuju', 'Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Tidak Setuju', '', '', '', 0008);

-- --------------------------------------------------------

--
-- Table structure for table `data_form_mentor`
--

CREATE TABLE `data_form_mentor` (
  `username` varchar(100) NOT NULL,
  `nomor_form` int(100) NOT NULL,
  `jawaban1` varchar(1000) NOT NULL,
  `jawaban2` varchar(1000) NOT NULL,
  `jawaban3` varchar(1000) NOT NULL,
  `jawaban4` varchar(1000) NOT NULL,
  `jawaban5` varchar(1000) NOT NULL,
  `jawaban6` varchar(1000) NOT NULL,
  `jawaban7` varchar(1000) NOT NULL,
  `jawaban8` varchar(1000) NOT NULL,
  `jawaban9` varchar(1000) NOT NULL,
  `jawaban10` varchar(1000) NOT NULL,
  `id_form_mentor` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_mentee`
--

CREATE TABLE `history_mentee` (
  `nomor_form` int(100) NOT NULL,
  `judul_form` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_history_mentee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_mentee`
--

INSERT INTO `history_mentee` (`nomor_form`, `judul_form`, `status`, `tanggal`, `username`, `id_history_mentee`) VALUES
(1, 'Form data diri', 'selesai', 'Monday, 2018-07-23, 20:24:48', 'mentee1', 1),
(2, 'Form 2', 'selesai', 'Monday, 2018-07-23, 22:46:29', 'mentee1', 7),
(4, 'Evaluasi Mentee', 'selesai', 'Monday, 2018-07-23, 22:54:32', 'mentee1', 9),
(3, 'Kuesioner Mentee', 'selesai', 'Monday, 2018-07-23, 23:08:08', 'mentee1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `history_mentor`
--

CREATE TABLE `history_mentor` (
  `nomor_form` int(100) NOT NULL,
  `judul_form` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_history_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logbook_mentor`
--

CREATE TABLE `logbook_mentor` (
  `username` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `id_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nippos` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `jabatan_saat_ini` varchar(100) NOT NULL,
  `kantor` varchar(100) NOT NULL,
  `tgl_mulai_bekerja` varchar(100) NOT NULL,
  `jabatan_yang_pernah_diduduki` varchar(500) NOT NULL,
  `pendidikan_jurusan` varchar(100) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_mentor` varchar(200) NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`username`, `nama`, `nippos`, `tempat_tanggal_lahir`, `jabatan_saat_ini`, `kantor`, `tgl_mulai_bekerja`, `jabatan_yang_pernah_diduduki`, `pendidikan_jurusan`, `alamat_email`, `no_hp`, `nama_mentor`, `id`) VALUES
('mentee1', 'namamentee1', '111', 'jakarta', 'manajer', 'pt pos bandung', '2018-07-20', 'manajer', 's1 administrasi bisnis', 'tes@gmail.com', '111', 'indra', 0001);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `pin`, `level`, `id`) VALUES
('mentee1', '1', 'mentee1@gmail.com', 0, 'user_mentee', 0002),
('mentor1', '1', 'mentor1@gmail.com', 1234, 'user_mentor', 0003),
('superadmin', '1', 'superadmin@gmail.com', 1234, 'superadmin', 0004),
('adminpusat1', '1', 'adminpusat1@gmail.com', 0, 'admin_pusat', 0005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_form_mentee`
--
ALTER TABLE `data_form_mentee`
  ADD PRIMARY KEY (`id_form_mentee`);

--
-- Indexes for table `data_form_mentor`
--
ALTER TABLE `data_form_mentor`
  ADD PRIMARY KEY (`id_form_mentor`);

--
-- Indexes for table `history_mentee`
--
ALTER TABLE `history_mentee`
  ADD PRIMARY KEY (`id_history_mentee`);

--
-- Indexes for table `history_mentor`
--
ALTER TABLE `history_mentor`
  ADD PRIMARY KEY (`id_history_mentor`);

--
-- Indexes for table `logbook_mentor`
--
ALTER TABLE `logbook_mentor`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_form_mentee`
--
ALTER TABLE `data_form_mentee`
  MODIFY `id_form_mentee` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_form_mentor`
--
ALTER TABLE `data_form_mentor`
  MODIFY `id_form_mentor` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history_mentee`
--
ALTER TABLE `history_mentee`
  MODIFY `id_history_mentee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `history_mentor`
--
ALTER TABLE `history_mentor`
  MODIFY `id_history_mentor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logbook_mentor`
--
ALTER TABLE `logbook_mentor`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
