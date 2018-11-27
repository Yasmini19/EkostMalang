-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 11:39 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infokost`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_kost`
--

CREATE TABLE `booking_kost` (
  `id_booking` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  `fk_id_kost` int(5) NOT NULL,
  `tgl_booking` date NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_kost`
--

INSERT INTO `booking_kost` (`id_booking`, `fk_id_user`, `fk_id_kost`, `tgl_booking`, `harga`) VALUES
(1, 5, 1, '2018-10-18', 475000),
(2, 5, 1, '2018-10-30', 475000),
(3, 5, 1, '2018-10-11', 475000),
(4, 5, 1, '2018-10-24', 475000);

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id_kost` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_kost` varchar(40) NOT NULL,
  `jenis_kost` varchar(9) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` decimal(8,0) NOT NULL,
  `alamat_kost` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id_kost`, `id_user`, `nama_kost`, `jenis_kost`, `fasilitas`, `harga`, `alamat_kost`, `stok`, `foto`, `longitude`, `latitude`, `no_tlp`) VALUES
(1, 6, 'Kost Bougenville 2', 'laki-laki', 'kamar mandi luar, dapur,almari,tempat tidur', '475000', 'jl simpang remujung no 3 Malang', 10, '9.jpg', '10', '3', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','pemilik','penyewa','rt') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama`, `alamat`, `email`, `no_tlp`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'Malang', 'admin@gmail.com', '09866434', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'Phad', 'Caruban', 'p@gmail.com', '0989865646', 'phad', 'c92514decd7adfb46b43fbddf113ebba', 'pemilik'),
(5, 'yasmini', 'malang', 'yasmini45@gmail.com', '087654987456', 'yasmini', '0bad1b8571cd7ad70fb02939a1f9b6fb', 'penyewa'),
(6, 'fairus', 'malang', 'fairusafif23@mail.com', '089654787890', 'fairus', 'add20bd46f6dde19c79729450804ba6a', 'pemilik'),
(7, 'adam kurnia', 'Malang', 'adamkurnia35@gmail.com', '087789098789', 'adam', '1d7c2923c1684726dc23d2901c4d8157', 'penyewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_kost`
--
ALTER TABLE `booking_kost`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id_kost`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_kost`
--
ALTER TABLE `booking_kost`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id_kost` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
