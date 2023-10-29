-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 12:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datakaryawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `Id` int(10) NOT NULL,
  `username` text NOT NULL,
  `Nik` int(10) NOT NULL,
  `Nama_Karyawan` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Tanggal_Masuk` date NOT NULL,
  `Divisi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datakaryawan`
--

INSERT INTO `datakaryawan` (`Id`, `username`, `Nik`, `Nama_Karyawan`, `Jabatan`, `Tanggal_Masuk`, `Divisi`, `gambar`) VALUES
(3, 'a', 123, 'Wilsob', 'Staff', '2023-10-11', 'Umum', 'image/2023-10-29 a.1691056760677.png'),
(4, 'b', 2, 'iffandi', 'HRD', '2023-10-03', 'SDM', 'image/2023-10-29 b.img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_komentar` text NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_komentar`, `komentar`) VALUES
(1, '234', 'ayam'),
(2, '4', 'dthfyudtufu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(3, 'a', '$2y$10$HmRG/KzNovJJY4tNzUEm/.fibIQFgrfyVvQthcg8Ztn6y18P8tboO'),
(4, 'b', '$2y$10$8go.0SY/RB6v9peG.9pHGOyAYrJMLUI9kLSllG60OBG2qYOmuoGZO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_komentar` (`id_komentar`) USING HASH;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
