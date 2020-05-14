-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 11:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpcanon`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarekspedisi`
--

CREATE TABLE `daftarekspedisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarekspedisi`
--

INSERT INTO `daftarekspedisi` (`id`, `nama`, `tipe`) VALUES
(1, 'Rahma Putra Cargo', 'Jasa Pengiriman'),
(2, 'Muda Taruna Jaya', 'Jasa Ekspedisi');

-- --------------------------------------------------------

--
-- Table structure for table `daftarkirim`
--

CREATE TABLE `daftarkirim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarkirim`
--

INSERT INTO `daftarkirim` (`id`, `nama`, `jenis`, `tarif`, `waktu`) VALUES
(1, 'Epson', 'Bahan Elektronik', '200000', '17-09-2019'),
(2, 'voltage', 'Bahan alat rumah tangga', '100000', '02-02-2020');

-- --------------------------------------------------------

--
-- Table structure for table `daftarmitra`
--

CREATE TABLE `daftarmitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `lead` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarmitra`
--

INSERT INTO `daftarmitra` (`id`, `nama`, `alamat`, `kategori`, `lead`) VALUES
(1, 'Vitkom', 'Jl. Pintu Air 10', 'Bahan Kesehatan', '3'),
(2, 'voltage', 'Jl. Merdeka', 'Bahan Bangunan', '2');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `nama`, `lokasi`, `alamat`) VALUES
(1, 'Gudang Penyimpanan Bahan Baku', 'Tangerang', 'Jl. Pintu Air Rt.03/08'),
(2, 'Gudang Penyimpanan Bahan Setengah Jadi', 'Jakarta', 'Jl. Daan Mogot No.21');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lama_bekerja` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `tunjangan` varchar(50) NOT NULL,
  `potongan` varchar(50) NOT NULL,
  `cuti` varchar(50) NOT NULL,
  `absen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `ttl`, `jabatan`, `alamat`, `lama_bekerja`, `gaji`, `tunjangan`, `potongan`, `cuti`, `absen`) VALUES
(1, 'Ardhy Noviska L', '17-09-1990', 'Manager', 'Jl. Kemerdekaan No.51', '>5 tahun', '5000000', '2000000', '50000', '2', '1'),
(2, 'Dedy Baharsyah', '19-01-1995', 'Karyawan', 'Jl. Pintu Air No.31', '<2 tahun', '2500000', '500000', '100000', '3', '1'),
(3, 'Ekawati', '1999-05-08', 'CS', 'Jl. Pintu Seribu', '&lt;3 tahun', '4000000', '1000000', '500000', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `kategori`, `lokasi`, `alamat`) VALUES
(1, 'inspirasi', 'bahan dapur', 'Tangerang', 'Jl. Pintu Air Kinjin'),
(2, 'voltage', 'bahan alat bangunan', 'Jakarta', 'Jl. Pembangunan 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `description`) VALUES
(1, 'buah', 'Buah-buahan yang segar'),
(2, 'sayur', 'Sayur-sayuran yang segar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(3) NOT NULL,
  `product_id` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `id_role` int(3) NOT NULL,
  `hargajual` varchar(128) NOT NULL,
  `hargabeli` varchar(128) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES
(0, '5eb281e1463c0', 'Anggur Sumatera 2', 'TPLD004', 1, '40000', '30000', 'Anggur Ungu asal Sumatera', 'Anggur.jpg'),
(3, '5eb282618b9ea', 'Wortel Surabaya', 'TPLD005', 2, '20000', '15000', 'Wortel Orange asal Surabaya', '5eb282618b9ea.jpg'),
(6, '5eb67ab420635', 'Bayam', 'TPLE11', 2, '100000', '80000', 'Wortel Bayam asal Aceh', '5eb67ab420635.jpg'),
(7, '5eb67b0ac694d', 'Alpukat', 'TPLD012', 1, '40000', '20000', 'Alpukat asal Lampung', '5eb67b0ac694d.jpg'),
(8, '2015141678123', 'Apel Bandung', 'TPLED10', 1, '4000', '2000', 'Buah Apel Hijau asal Bandung', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarkirim`
--
ALTER TABLE `daftarkirim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarmitra`
--
ALTER TABLE `daftarmitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftarkirim`
--
ALTER TABLE `daftarkirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftarmitra`
--
ALTER TABLE `daftarmitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
