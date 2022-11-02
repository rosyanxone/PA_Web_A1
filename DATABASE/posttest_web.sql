-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 07:23 AM
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
-- Database: `posttest_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(27, 'gempar', '$2y$10$.dRvDLmIj6LVQm6i.EJi8OWQDtC/XcFXEy2gj/wlxtplB5ZmqpeUm', 'Gempar Panggih Dwi Putra'),
(28, 'admin', '$2y$10$GkJ6K26eigIAFMIvqfxwJepf2X0lVRgnf1GcenDzao3HJkD52tarC', 'Admin Tampan dan Berani');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(10) NOT NULL,
  `token` int(10) NOT NULL,
  `idbeli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahbeli` int(10) NOT NULL,
  `nometer` int(10) NOT NULL,
  `totalkwh` float NOT NULL,
  `idtarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `jumlahbeli`, `nometer`, `totalkwh`, `idtarif`) VALUES
('PEM1', '2022-10-24', 100000, 234678, 0, 'T1'),
('PEM2', '2022-10-24', 123456, 435754, 0, 'T1'),
('PEM3', '2022-10-24', 435000, 321746, 0, 'T2'),
('PEM6', '2022-10-24', 459000, 234678, 0, 'T1'),
('PEM7', '2022-10-26', 345900, 236790, 0, 'T2'),
('PEM8', '2022-10-26', 340690, 450456, 0, 'T1');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `idtarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `foto`, `username`, `password`, `nama`, `idtarif`) VALUES
('PEL1', 'download.jpg', 'gempar', 'gempar', 'Gempar Panggih Dwi P', 'T4'),
('PEL2', '4zlg07vi1pc61.png', 'saki', 'saki', 'Ayase Saki', 'T2'),
('PEL3', '577303.jpg', 'arisato', 'arisato', 'Minato Arisato', 'T1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbeli` (`idbeli`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtarif` (`idtarif`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtarif` (`idtarif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idbeli`) REFERENCES `pembelian` (`id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`idtarif`) REFERENCES `tarif` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idtarif`) REFERENCES `tarif` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
