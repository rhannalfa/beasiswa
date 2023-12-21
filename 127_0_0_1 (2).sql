-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 08:24 AM
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
-- Database: `db_beasiswa`
--
CREATE DATABASE IF NOT EXISTS `db_beasiswa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_beasiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `data_beasiswa`
--

CREATE TABLE `data_beasiswa` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor` varchar(13) NOT NULL,
  `semester` enum('Semester 1','Semester 2','Semester 3','Semester 4','Semester 5','Semester 6','Semester 7','Semester 8') NOT NULL,
  `nilai` float NOT NULL,
  `pilihan_beasiswa` enum('Akademik','Non Akademik') NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_beasiswa`
--

INSERT INTO `data_beasiswa` (`nama`, `email`, `nomor`, `semester`, `nilai`, `pilihan_beasiswa`, `berkas`, `id`) VALUES
('Medi Noviana', 'user@role.test', '0897612678456', 'Semester 5', 3.08, 'Akademik', 'WhatsApp Image 2021-05-21 at 16.25.36.jpeg', 14),
('raihan', 'raihanalf9c@gmail.com', '0857970376666', 'Semester 1', 3.49, 'Akademik', 'Screenshot_20221121_133300.png', 17),
('Rapli', 'Rapli@gmail.com', '08952340987', 'Semester 2', 3.46, 'Non Akademik', 'Gambar Ikon Keranjang Belanja Keranjang Png Ilustrasi Gratis, Clipart Keranjang Belanja, Perdagangan Elektronik, Pemasaran Internet PNG Transparan Clipart dan File PSD untuk Unduh Gratis.jpg', 18),
('Jane', 'jane@gmail.com', '085798762343', 'Semester 3', 3.39, 'Akademik', 'vecteezy_graduation-studying-graduated-learning-education_8519932.jpg', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
