-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 03:19 PM
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
('mentee1', '1', 'jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11jawaban11', 'jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22jawaban22', 'jawaban3jawaban3jawaban3jawaban3jawaban3jawaban3', 'jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4jawaban4', 'jawaban5jawaban5jawaban5jawaban5jawaban5jawaban5', 'jawaban6jawaban6jawaban6jawaban6jawaban6jawaban6', 'jawaban7jawaban7jawaban7jawaban7jawaban7jawaban7jawaban7', 'jawaban8jawaban8jawaban8', '', '', '', '', '', '', '', '', '', '', '', 0001),
('mentee1', '2', 'namamentee1', '0001', 'project 1', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'b. Sudah baik, tetapi masih ada kekurangan', '11', '12', '13', '14', '15', '16', 0002),
('mentee1', '3', 'Sangat Setuju', 'Sangat Setuju', 'Sangat Setuju', 'Sangat Setuju', 'Setuju', 'Setuju', 'Setuju', 'Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Tidak Setuju', 'Sangat Tidak Setuju', '', '', '', 0003),
('mentee1', '4', '30-07-2018', 'budi', 'maman', '1', '2', '3', '4', '5', '6', '7', '', '', '', '', '', '', '', '', '', 0004);

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
  `jawaban11` varchar(1000) NOT NULL,
  `jawaban12` varchar(1000) NOT NULL,
  `jawaban13` varchar(1000) NOT NULL,
  `jawaban14` varchar(1000) NOT NULL,
  `jawaban15` varchar(1000) NOT NULL,
  `jawaban16` varchar(1000) NOT NULL,
  `jawaban17` varchar(1000) NOT NULL,
  `jawaban18` varchar(1000) NOT NULL,
  `jawaban19` varchar(1000) NOT NULL,
  `id_form_mentor` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_form_mentor`
--

INSERT INTO `data_form_mentor` (`username`, `nomor_form`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `jawaban11`, `jawaban12`, `jawaban13`, `jawaban14`, `jawaban15`, `jawaban16`, `jawaban17`, `jawaban18`, `jawaban19`, `id_form_mentor`) VALUES
('mentor1', 1, '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', 0002),
('mentor1', 2, 'Sangat Setuju', 'Sangat Setuju', 'Sangat Setuju', 'Sangat Setuju', 'Setuju', 'Setuju', 'Setuju', 'Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Tidak Setuju', 'Tidak Setuju', '', '', '', '', '', '', '', 0003),
('mentor1', 4, '2018-07-10', 'budi', 'maman', '1', '2', '3', '4', '5', '6', '', '', '', '', '', '', '', '', '', '', 0005),
('mentor1', 4, '20-07-2018', 'budi', 'maman', '1', '2', '3', '4', '5', '6', '', '', '', '', '', '', '', '', '', '', 0006);

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
(1, 'Pengenalan Diri', 'selesai', 'Sunday, 29-07-2018, 13:47:24', 'mentee1', 1),
(2, 'Form 2', 'selesai', 'Sunday, 29-07-2018, 13:50:30', 'mentee1', 2),
(3, 'Kuesioner Mentee', 'selesai', 'Sunday, 29-07-2018, 13:51:03', 'mentee1', 3),
(4, 'Evaluasi Mentee', 'selesai', 'Sunday, 29-07-2018, 13:53:26', 'mentee1', 4);

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

--
-- Dumping data for table `history_mentor`
--

INSERT INTO `history_mentor` (`nomor_form`, `judul_form`, `status`, `tanggal`, `username`, `id_history_mentor`) VALUES
(2, 'Kuesioner', 'selesai', 'Wednesday, 2018-07-25, 15:57:22', 'mentor1', 1),
(1, 'Personal Detail', 'selesai', 'Sunday, 29-07-2018, 14:38:44', 'mentor1', 3),
(3, 'Form 3', 'selesai', 'Sunday, 29-07-2018, 14:44:54', 'mentor1', 4),
(2, 'Kuesioner', 'selesai', 'Sunday, 29-07-2018, 14:54:15', 'mentor1', 5),
(3, 'Form 3', 'selesai', 'Sunday, 29-07-2018, 14:55:05', 'mentor1', 6),
(4, 'Evaluasi', 'selesai', 'Sunday, 29-07-2018, 14:55:22', 'mentor1', 7),
(4, 'Evaluasi', 'selesai', 'Sunday, 29-07-2018, 14:56:53', 'mentor1', 8),
(4, 'Evaluasi', 'selesai', 'Sunday, 29-07-2018, 14:58:09', 'mentor1', 9),
(0, 'Logbook', 'selesai', 'Sunday, 2018-07-29, 14:58:50', 'mentor1', 10);

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

--
-- Dumping data for table `logbook_mentor`
--

INSERT INTO `logbook_mentor` (`username`, `nama_file`, `tanggal`, `id_file`) VALUES
('mentor1', 'tes upload logbook.txt', 'Sunday, 2018-07-29, 14:58:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil_mentee`
--

CREATE TABLE `profil_mentee` (
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
  `periode_awal` varchar(100) NOT NULL,
  `periode_akhir` varchar(100) NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_mentee`
--

INSERT INTO `profil_mentee` (`username`, `nama`, `nippos`, `tempat_tanggal_lahir`, `jabatan_saat_ini`, `kantor`, `tgl_mulai_bekerja`, `jabatan_yang_pernah_diduduki`, `pendidikan_jurusan`, `alamat_email`, `no_hp`, `nama_mentor`, `periode_awal`, `periode_akhir`, `id`) VALUES
('mentee1mentee1mentee1', 'namamentee1mentee1mentee1mentee1mentee1mentee1', '0001000100010001', 'jakartajakartajakartajakartajakarta', 'manajermanajermanajer', 'bandungbandungbandung', '10-07-2018', 'manajermanajermanajermanajermanajer', 's1 informatikas1 informatika', 'mentee1@gmail.com', '08211223344', 'budibudibudibudibudibudi', '10-07-2018', '30-07-2018', 0001);

-- --------------------------------------------------------

--
-- Table structure for table `profil_mentor`
--

CREATE TABLE `profil_mentor` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nippos` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `kantor` varchar(100) NOT NULL,
  `jabatan_yang_sedang_ditempati` varchar(100) NOT NULL,
  `tgl_mulai_bekerja` varchar(100) NOT NULL,
  `jabatan_yang_pernah_ditempati` varchar(500) NOT NULL,
  `pendidikan_jurusan` varchar(100) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `nama_mentee` varchar(200) NOT NULL,
  `periode_awal` varchar(100) NOT NULL,
  `periode_akhir` varchar(100) NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_mentor`
--

INSERT INTO `profil_mentor` (`username`, `nama`, `nippos`, `tempat_tanggal_lahir`, `kantor`, `jabatan_yang_sedang_ditempati`, `tgl_mulai_bekerja`, `jabatan_yang_pernah_ditempati`, `pendidikan_jurusan`, `alamat_email`, `no_hp`, `nama_mentee`, `periode_awal`, `periode_akhir`, `id`) VALUES
('mentor1', 'namamentor1', '001', 'jakarta', 'bandung', 'chairman', '20-07-2018', 'CEO', 's2 informatika', 'mentor1@gmail.com', '08222333444', 'maman', '25-07-2018', '30-07-2018', 0001);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `pin`, `level`, `id`) VALUES
('mentee1', '1', 'mentee1@gmail.com', '1234', 'user_mentee', 0002),
('mentor1', '1', 'mentor1@gmail.com', '1234', 'user_mentor', 0003),
('superadmin', '1', 'superadmin@gmail.com', '1234', 'superadmin', 0004),
('adminpusat1', '1', 'adminpusat1@gmail.com', '1234', 'admin_pusat', 0005),
('tegar', 'temaulana', 'temaulana@gmail.com', '1234', 'user_mentee', 0007),
('adminregional1', '1', 'adminregional1@gmail.com', '', 'admin_regional', 0012);

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
-- Indexes for table `profil_mentee`
--
ALTER TABLE `profil_mentee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_mentor`
--
ALTER TABLE `profil_mentor`
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
  MODIFY `id_form_mentee` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_form_mentor`
--
ALTER TABLE `data_form_mentor`
  MODIFY `id_form_mentor` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `history_mentee`
--
ALTER TABLE `history_mentee`
  MODIFY `id_history_mentee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `history_mentor`
--
ALTER TABLE `history_mentor`
  MODIFY `id_history_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `logbook_mentor`
--
ALTER TABLE `logbook_mentor`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_mentee`
--
ALTER TABLE `profil_mentee`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_mentor`
--
ALTER TABLE `profil_mentor`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
