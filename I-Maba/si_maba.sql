-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 10:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_maba`
--

-- --------------------------------------------------------

--
-- Table structure for table `absenpkkmb`
--

CREATE TABLE `absenpkkmb` (
  `IdPresensi` int(15) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `IdKegiatan` varchar(50) NOT NULL,
  `RangkumanMateri` varchar(500) NOT NULL,
  `TanggalKegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absenpkkmb`
--

INSERT INTO `absenpkkmb` (`IdPresensi`, `NIM`, `Nama`, `IdKegiatan`, `RangkumanMateri`, `TanggalKegiatan`) VALUES
(13, '6304201238', 'Dwinda Nur Fadillah', '001', 'Ini rangkuman materi pkkmb', '31 Agustus 2022');

-- --------------------------------------------------------

--
-- Table structure for table `audit_history`
--

CREATE TABLE `audit_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mahasiswa_id` varchar(30) NOT NULL,
  `action` varchar(128) DEFAULT NULL,
  `action_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `Nama` varchar(30) NOT NULL,
  `NIM` varchar(30) NOT NULL,
  `JenisKelamin` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `NoHp` varchar(30) NOT NULL,
  `IdJur` varchar(30) NOT NULL,
  `IdProdi` varchar(30) NOT NULL,
  `Semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `IdJur` varchar(10) NOT NULL,
  `Jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`IdJur`, `Jurusan`) VALUES
('3311', 'Teknik Informatika'),
('3312', 'Teknik Mesin'),
('3313', 'Teknik Perkapalan'),
('3314', 'Teknik Elektro'),
('3315', 'ADM Niaga'),
('3316', 'Bahasa'),
('3317', 'Maritim'),
('3318', 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `IdKelas` varchar(10) NOT NULL,
  `Angkatan` varchar(15) DEFAULT NULL,
  `Kelas` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`IdKelas`, `Angkatan`, `Kelas`) VALUES
('2211', '2020', 'A'),
('2212', '2020', 'B'),
('2213', '2020', 'C'),
('2214', '2020', 'A'),
('2215', '2020', 'B'),
('2216', '2020', 'A'),
('2217', '2020', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'dwinda', '58e6d6729f7f5bb026fef135debedd13');

-- --------------------------------------------------------

--
-- Table structure for table `ormawa`
--

CREATE TABLE `ormawa` (
  `IdOrmawa` varchar(10) NOT NULL,
  `NamaOrmawa` varchar(30) DEFAULT NULL,
  `PendaftaranOrmawa` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ormawa`
--

INSERT INTO `ormawa` (`IdOrmawa`, `NamaOrmawa`, `PendaftaranOrmawa`) VALUES
('1111', 'MPM', 'belum dibuka'),
('1112', 'BEM', 'belum dibuka'),
('1113', 'HMJ TEKNIK MESIN', 'belum dibuka'),
('1114', 'HMJ TEKNIK PERKAPALAN', 'belum dibuka'),
('1115', 'HMJ TEKNIK ELEKTRO', 'belum dibuka'),
('1116', 'HMJ ADM NIAGA', 'belum dibuka'),
('1117', 'HMJ BAHASA', 'belum dibuka'),
('1118', 'HMJ TEKNIK INFORMATIKA', 'belum dibuka'),
('1119', 'HMJ KEMARITIMAN', 'belum dibuka'),
('1120', 'HMJ TEKNIK SIPIL', 'belum dibuka'),
('1121', 'UKM KESENIAN', 'belum dibuka'),
('1122', 'UKM RADIO', 'belum dibuka'),
('1123', 'UKM EC.COM', 'belum dibuka'),
('1124', 'UKM JURNALISTIK', 'belum dibuka'),
('1125', 'UKM KSR', 'belum dibuka'),
('1126', 'UKMI AL-ISHLAH', 'belum dibuka'),
('1127', 'UKM PRAMUKA', 'belum dibuka'),
('1128', 'UKM KRISTEN', 'belum dibuka'),
('1129', 'UKM OLAHRAGA', 'belum dibuka'),
('1130', 'UKM MAPALA', 'belum dibuka'),
('1131', 'FORMADIKSI', 'belum dibuka');

-- --------------------------------------------------------

--
-- Table structure for table `pkkmb`
--

CREATE TABLE `pkkmb` (
  `IdKegiatan` varchar(10) NOT NULL,
  `NamaKegiatan` varchar(100) DEFAULT NULL,
  `JadwalKegiatan` varchar(30) DEFAULT NULL,
  `KetKegiatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkkmb`
--

INSERT INTO `pkkmb` (`IdKegiatan`, `NamaKegiatan`, `JadwalKegiatan`, `KetKegiatan`) VALUES
('001', 'Kegiatan Orientasi Kampus', '31 Agustus 2022', 'Belum dilaksanakan'),
('002', 'Latihan Dasar Kedisiplinan, Kepemimpinan dan Bela Negara', '01 September 2022', 'Belum dilaksanakan'),
('003', 'Bimbingan Keagamaan', '02 September 2022', 'Belum dilaksanakan'),
('004', 'Training Motivasi', '03 September 2022', 'Belum dilaksanakan'),
('005', 'Pengenalan Jurusan dan Ormawa', '04 September 2022', 'Belum dilaksanakan');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `IdJur` varchar(10) DEFAULT NULL,
  `IdProdi` varchar(10) NOT NULL,
  `Prodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`IdJur`, `IdProdi`, `Prodi`) VALUES
('3311', '4411', 'Rekayasa Perangkat Lunak'),
('3311', '4412', 'Teknik Informatika'),
('3311', '4413', 'Keamanan Sistem Informasi'),
('3312', '4422', 'Teknik Mesin'),
('3312', '4423', 'Teknik Mesin Produksi dan Pera'),
('3313', '4433', 'Teknik Perkapalan'),
('3313', '4434', 'Teknik Rekayasa Arsitektur Per'),
('3314', '4444', 'Teknik Elektronika'),
('3314', '4445', 'Teknik Listrik'),
('3315', '4455', 'Bisnis Digital'),
('3315', '4456', 'Administrasi Bisnis Internasio'),
('3315', '4457', 'Akuntansi Keuangan Publik'),
('3316', '4466', 'Bahasa Inggris'),
('3316', '4467', 'Bahasa Bisnis Untuk Komunikasi'),
('3317', '4477', 'Nautika'),
('3317', '4478', 'Ketatalaksanaan Pelayaran Niag'),
('3318', '4488', 'Teknik Sipil'),
('3318', '4489', 'Teknik Perancangan Jalan dan J');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `email`, `password`, `is_admin`) VALUES
(1, 'Nurfadillah', 'Dwinda', 'dwinda@gmail.com', 'k4AXDX87vLHmzXC18klyPqt84vp6HlrPd+cnU4IggndUq8Vrikonz/pbdrXQUJlz', 0),
(2, 'Admin', 'Winda', 'nur@gmail.com', 'C9VcMJhFKQCiK9WHQ2cM0DxbuRbpHt2o5/K8078ci5XQGkGg/Zfv5HCpG6wGwrR1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absenpkkmb`
--
ALTER TABLE `absenpkkmb`
  ADD PRIMARY KEY (`IdPresensi`);

--
-- Indexes for table `audit_history`
--
ALTER TABLE `audit_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_USER_ID` (`user_id`),
  ADD KEY `FK_MAHASISWA_ID` (`mahasiswa_id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`IdJur`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`IdKelas`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa`
--
ALTER TABLE `ormawa`
  ADD PRIMARY KEY (`IdOrmawa`);

--
-- Indexes for table `pkkmb`
--
ALTER TABLE `pkkmb`
  ADD PRIMARY KEY (`IdKegiatan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`IdProdi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absenpkkmb`
--
ALTER TABLE `absenpkkmb`
  MODIFY `IdPresensi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `audit_history`
--
ALTER TABLE `audit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_history`
--
ALTER TABLE `audit_history`
  ADD CONSTRAINT `FK_MAHASISWA_ID` FOREIGN KEY (`mahasiswa_id`) REFERENCES `biodata` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER_ID` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
