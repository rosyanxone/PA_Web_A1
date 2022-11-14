-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `iduser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `pesan`, `iduser`) VALUES
(21, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'Websitenya Keren.', 'userT2OF');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `daya` varchar(20) NOT NULL,
  `tarifperkwh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `foto`, `daya`, `tarifperkwh`) VALUES
('TR/8Q-F2', '5.png', '3500VA', '1656'),
('TR/92-F3', '4.png', '2200VA', '1500'),
('TR/B4-F9', '3.png', '1300VA', '1444'),
('TR/U1-F9', '2.png', '900VA', '1352'),
('TR/VF-F9', '1.png', '450VA', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(15) NOT NULL,
  `iduser` varchar(10) NOT NULL,
  `tanggal` varchar(16) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `nometer` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `totalkwh` float NOT NULL,
  `idtarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `iduser`, `tanggal`, `nominal`, `nometer`, `token`, `totalkwh`, `idtarif`) VALUES
('userOIVW-HL73', 'userOIVW', 'Mon, 14 Nov 2022', '300000', '39183913121', '6171-4632-8768-7945', 221.89, 'TR/U1-F9'),
('userOIVW-KMAD', 'userOIVW', 'Mon, 14 Nov 2022', '100000', '9218390481', '1790-4225-1458-7740', 69.25, 'TR/B4-F9'),
('userT2OF-4BI3', 'userT2OF', 'Mon, 14 Nov 2022', '200000', '49582904', '2341-2278-9841-1761', 138.5, 'TR/B4-F9'),
('userT2OF-LOLN', 'userT2OF', 'Mon, 14 Nov 2022', '150000', '93893891', '2642-2642-2642-2642', 103.88, 'TR/B4-F9'),
('userZ7JU-O2G6', 'userZ7JU', 'Mon, 14 Nov 2022', '400000', '923813901', '9972-0586-4111-3241', 277.01, 'TR/B4-F9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `telepon`, `alamat`, `foto`, `level`) VALUES
('user7NLP', 'admin', '$2y$10$NZ7cKFbi02wsRqweFHmpyuHPHAvV1hPgzlgy5IferkQ8C2rndIh7C', 'admin', '08123456789', 'alamat', '', 'admin'),
('userOIVW', 'gilang', '$2y$10$ZigGEqRlIxny/33.IgMd2ODc1V8qNe2aiDVbmGgfbCvQn297yxSwG', 'Gilang Ahmad', '0891919123', 'Jl Antasari No. 3', 'gilang-OIVW.jpg', 'user'),
('userT2OF', 'rosyan', '$2y$10$8G7o9HNytjL9NeZPW8PW9OSkYyE7.BtnzF1RxkGI5jlUgPhOJNJga', 'Rausyanfikr Adi Karmayoga', '0813515805245', 'Jl. Abdul W Gg 555', 'default-pic.jpg', 'user'),
('userU2G5', 'joko', '$2y$10$Y2ILzdCZd8SxfD24L1gt4OMuEWVT4LqDEDLn/oyePiFfAeN6hlOgm', 'Joko Anwar', '1111111', 'alamat', 'default-pic.jpg', 'user'),
('userZ7JU', 'asep', '$2y$10$QNGBWdWpOSAZ9m94lsKthueOrNTMMWZ3Pc0/PDORK1e2e60dxJc82', 'Asep', '2221123', 'Jl. Anggur Apel', 'asep-Z7JU.JPG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `iduser_2` (`iduser`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idtarif` (`idtarif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontak`
--
ALTER TABLE `kontak`
  ADD CONSTRAINT `kontak_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idtarif`) REFERENCES `tarif` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
