-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 09:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pearlmedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Abiel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_darurat`
--

CREATE TABLE `tb_darurat` (
  `id_darurat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `rs_tujuan` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_darurat`
--

INSERT INTO `tb_darurat` (`id_darurat`, `id`, `lokasi`, `rs_tujuan`, `deskripsi`, `jumlah`, `tanggal_pelaporan`, `status`) VALUES
(1, 1, 'Tambang A, kecamatan Subang', 'RS Tegalrejo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 1, '2023-01-04', 2),
(2, 3, 'Kecamatan B, Sulawesi Selatan', 'RS Siloam', 'Dibutuhkan Medis segera', 2, '2023-01-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_isi`
--

CREATE TABLE `tb_isi` (
  `id_keranjang` int(11) NOT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `nama_obat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_order` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_medical`
--

CREATE TABLE `tb_medical` (
  `id_checkup` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_medical`
--

INSERT INTO `tb_medical` (`id_checkup`, `id`, `tanggal_pelaksanaan`, `lokasi`, `jumlah`, `status`) VALUES
(1, 2, '2023-01-10', 'Kalimantan Selatan', 200, 1),
(2, 1, '2023-01-02', 'Riau', 100, 1),
(3, 3, '2022-12-07', 'Jakarta Timur', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ordervaksin`
--

CREATE TABLE `tb_ordervaksin` (
  `id_ordervaksin` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `id_vaksin` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id`, `email`, `passsword`, `nama_perusahaan`, `bidang`, `alamat`, `status`, `deskripsi`) VALUES
(1, 'petronas@mail.com', 'password', 'Petronas Nasional', 'Tambang/Minyak', 'Jl. ABABA', 2, 'Perusahaan Minyak dari Malaysia'),
(2, 'sigurros@mail.com', '', 'PT Sigur Ros Oil', 'Tambang/Minyak', 'JL. B', 1, 'Lorem Ipsum'),
(3, 'caleus@gmail.com', '', 'PT Caleus Energi', 'Energi', 'Tower A', 1, 'Perusahaan Energi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_darurat`
--
ALTER TABLE `tb_darurat`
  ADD PRIMARY KEY (`id_darurat`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_medical`
--
ALTER TABLE `tb_medical`
  ADD PRIMARY KEY (`id_checkup`);

--
-- Indexes for table `tb_ordervaksin`
--
ALTER TABLE `tb_ordervaksin`
  ADD PRIMARY KEY (`id_ordervaksin`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_darurat`
--
ALTER TABLE `tb_darurat`
  MODIFY `id_darurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_medical`
--
ALTER TABLE `tb_medical`
  MODIFY `id_checkup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ordervaksin`
--
ALTER TABLE `tb_ordervaksin`
  MODIFY `id_ordervaksin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
