-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:27 PM
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
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `iduser` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahbeli` int(10) NOT NULL,
  `nometer` int(10) NOT NULL,
  `totalkwh` float NOT NULL,
  `idtarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`iduser`, `tanggal`, `jumlahbeli`, `nometer`, `totalkwh`, `idtarif`) VALUES
('PEM1', '2022-10-24', 100000, 234678, 0, 'T1'),
('PEM2', '2022-10-24', 123456, 435754, 0, 'T1'),
('PEM3', '2022-10-24', 435000, 321746, 0, 'T2'),
('PEM6', '2022-10-24', 459000, 234678, 0, 'T1'),
('PEM7', '2022-10-26', 345900, 236790, 0, 'T2'),
('PEM8', '2022-10-26', 340690, 450456, 0, 'T1'),
('USR 2', '2022-11-02', 150000, 9289028, 0, 'T1'),
('USR 3', '2022-11-02', 120000, 221243233, 0, 'T1'),
('USR 4', '2022-11-02', 150000, 392405, 103.878, 'T2'),
('USR 9', '2022-11-02', 200000, 9893938, 138.5, 'T3');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` varchar(10) NOT NULL,
  `daya` varchar(20) NOT NULL,
  `tarifperkwh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `daya`, `tarifperkwh`) VALUES
('T1', '900VA', '1352'),
('T2', '1300VA', '1444'),
('T3', '2200VA', '1444'),
('T4', '5500VA', '1444');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(15) NOT NULL,
  `iduser` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `nometer` varchar(255) NOT NULL,
  `totalkwh` float NOT NULL,
  `idtarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `telepon`, `alamat`, `level`) VALUES
('userL8722', 'asep', '$2y$10$yFXWUoYnPpPvseHA6alEpef7rdFbMOayllezsMKcZteTEjiYdJCKu', 'Asep', '2221123', 'Jalan bauh', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `password`, `nama`, `telepon`, `alamat`, `level`) VALUES
(29, 'rosyan', '$2y$10$lrED2bhwQ5WebmVp2HXABeYIC16MIz6qTqzajsBtLBo6yfiNxTsi2', 'rosyan', '122112', 'alamat', 'admin'),
(30, 'asep', '$2y$10$Y3YdqCNDBoaob5Ul6sdB1.l/T.JKM7LVAa6ojIdsZu9Yef7JHXJZK', 'Asep', '1111111111', 'alamat', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `idtarif` (`idtarif`);

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
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`idtarif`) REFERENCES `tarif` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idtarif`) REFERENCES `tarif` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
