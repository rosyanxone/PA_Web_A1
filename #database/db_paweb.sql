-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 12:56 PM
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
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `pesan`) VALUES
(1, 'Rosyan', 'rosyan@gmail.com', '1233334', 'afefaefaefa'),
(2, 'Rausyan', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'afaefaef'),
(3, 'Asep', 'vannyputriandrini@gmail.com', '081351580524', 'afaefeafaefef'),
(4, 'Asep', 'vannyputriandrini@gmail.com', '081351580524', 'afaefeafaefef'),
(5, 'Asep', 'vannyputriandrini@gmail.com', '081351580524', 'afaefeafaefef'),
(12, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(13, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(14, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(15, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(16, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(17, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(18, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(19, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed'),
(20, 'Rausyanfikr Adi Karmayoga', 'rausyanfikrkarmayoga@gmail.com', '081351580524', 'ABCDeed');

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
('TR/8Q-F2', '5.png', '3500VA', '1444'),
('TR/SD-F9', '3.png', '1300VA', '1444'),
('TR/U1-F9', '2.png', '900VA', '1352'),
('TR/YY-F9', '1.png', '450VA', '1200');

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

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `iduser`, `tanggal`, `nominal`, `nometer`, `totalkwh`, `idtarif`) VALUES
('userT2OF-PHJE0', 'userT2OF', '2022-11-17', '170000', '567234421', 95.67, 'TR/YY-F9');

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
('userC8U2', 'udin', '$2y$10$WKT18TIrEZ1mKD6AK88RK.pfGy9zviUcj/jjmP/XC6FD2RVWxqT7K', 'Sarifudin', '081919911', 'Jl. Cepmek Km Nanya', 'udin-C8U2.png', 'user'),
('userT2OF', 'rosyan', '$2y$10$knaBTcpVb7rm8N/Bpg4uxe1uKJWdq4dIeMDAkpsJHBa7XInWKzHW.', 'Rausyanfikr Adi Karmayoga', '081351580524', 'Jl. Abdul W', 'default-pic.jpg', 'user'),
('userU2G5', 'joko', '$2y$10$Y2ILzdCZd8SxfD24L1gt4OMuEWVT4LqDEDLn/oyePiFfAeN6hlOgm', 'Joko Anwar', '1111111', 'alamat', 'default-pic.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

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
