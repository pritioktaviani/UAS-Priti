-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 04:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_priti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `yt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nohp`, `email`, `fb`, `ig`, `yt`) VALUES
(1, '0098502390', 'pritioktaviani09@gmail.com', 'priti oktavianipppp', '@priti_otaviani22', 'priti oktaviani');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE `tbl_pendidikan` (
  `id` int(11) NOT NULL,
  `tk` varchar(255) NOT NULL,
  `sd` varchar(255) NOT NULL,
  `smp` varchar(255) NOT NULL,
  `sma` varchar(255) NOT NULL,
  `univ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`id`, `tk`, `sd`, `smp`, `sma`, `univ`) VALUES
(1, 'TK BKB Kemas  55555', 'SD Pulasaren 4 51225125', 'SMPN 4 Cirebon 5353', 'SMA 7 Cirebon 4444', 'Universitas CIC23 ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengalaman`
--

CREATE TABLE `tbl_pengalaman` (
  `id` int(11) NOT NULL,
  `peng_1` text NOT NULL,
  `peng_2` text NOT NULL,
  `peng_3` text NOT NULL,
  `peng_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengalaman`
--

INSERT INTO `tbl_pengalaman` (`id`, `peng_1`, `peng_2`, `peng_3`, `peng_4`) VALUES
(1, 'Mengikuti Casual Hotel Kota Cirebon', 'Menjadi Anggota Forum Anak Kota Cirebon', 'asfgasgag23TG23T', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `tgl_lhr` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `hobi` text NOT NULL,
  `alamat` text NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `nama`, `jk`, `umur`, `tgl_lhr`, `status`, `hobi`, `alamat`, `tentang`) VALUES
(1, 'Priti Oktaviani yyyyyyyy', 'Perempuan YYYYY', '20 ', 'Cirebon 22 Oktober 2001 ', 'Mahasiswa YYYY ', '- Bernyanyi- Bermain Bola YYYY', 'Jalan Jagasatru Gg.Mastam No.144 yyyyyy', 'Saya adalah anak kedua dari 2 saudara dan satu-satunya anak perempuan dikeluarga ini.Saya adalah salah satu mahasiswa Universitas CIC Kota Cirebon dan mengambil Jurusan Sistem Informasi  YYYYYYYY');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'priti', '1b486c123e83e26e5ac601d41850460f', 'priti oktaviani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengalaman`
--
ALTER TABLE `tbl_pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
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
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengalaman`
--
ALTER TABLE `tbl_pengalaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
