-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 07:16 PM
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
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_telp` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Nama`, `Alamat`, `No_telp`, `Email`, `Password`) VALUES
(1, 'Raul', 'Jl. Umban Sari No. 01', '081234567890', 'raul@gmail.com', 'raul'),
(2, 'Caylen', 'Jl. Sekolah', '081234569900', 'cay@gmail.com', 'caylen'),
(3, 'Qalbi', 'Jl. Umban Sari', '081277894567', 'qalbi@gmail.com', 'qalbi'),
(4, 'Syahda', 'Jl. Tegal Sari', '081277893456', 'syahda@gmail.com', 'syahda');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `ID_obat` char(4) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `stok_obat` int(11) DEFAULT NULL,
  `harga_obat` int(11) DEFAULT NULL,
  `ID_supplier` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_obat`, `nama_obat`, `stok_obat`, `harga_obat`, `ID_supplier`) VALUES
('O121', 'Mylanta Cair (50ml)', 9, 17000, 'S001'),
('O122', 'Panadol Merah', 7, 12000, 'S003'),
('O123', 'Redoxon Vitamin C', 15, 50000, 'S001'),
('O124', 'Konidin Batuk Pilek (30ml)', 23, 10000, 'S002'),
('O125', 'Sanmol Paracetamol Sirup', 4, 19000, 'S001'),
('O126', 'Komix Kid Batuk (Sachet)', 10, 3000, 'S002'),
('O127', 'Panadol Biru', 10, 8000, 'S003'),
('O128', 'Tolak Angin', 18, 8000, 'S002'),
('O129', 'Betadine (15ml)', 10, 18000, 'S003'),
('O130', 'Panadol Hijau', 17, 15000, 'S003');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `ID_penjualan` char(5) NOT NULL,
  `tanggal_jual` date DEFAULT NULL,
  `jumlah_terjual` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `ID_staff` char(4) DEFAULT NULL,
  `ID_obat` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`ID_penjualan`, `tanggal_jual`, `jumlah_terjual`, `total_bayar`, `ID_staff`, `ID_obat`) VALUES
('P121', '2017-11-12', 2, 100000, 'S234', 'O123'),
('P122', '2017-11-13', 1, 10000, 'S236', 'O124'),
('P123', '2018-11-20', 1, 17000, 'S236', 'O121'),
('P124', '2018-09-02', 1, 3000, 'S235', 'O126'),
('P125', '2019-08-03', 2, 6000, 'S234', 'O126'),
('P126', '2019-12-31', 4, 36000, 'S235', 'O129'),
('P127', '2020-04-02', 2, 24000, 'S237', 'O122'),
('P128', '2020-10-08', 1, 15000, 'S234', 'O130'),
('P129', '2021-03-14', 2, 38000, 'S236', 'O125'),
('P130', '2021-08-06', 4, 36000, 'S237', 'O128'),
('P131', '2022-06-02', 3, 9000, 'S234', 'O126'),
('P132', '2022-07-06', 2, 34000, 'S235', 'O121');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID_staff` char(4) NOT NULL,
  `nama_staff` varchar(50) DEFAULT NULL,
  `no_hp_staff` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID_staff`, `nama_staff`, `no_hp_staff`) VALUES
('S234', 'Dina', '081278901234'),
('S235', 'Bunga', '089688903456'),
('S236', 'Hamzah', '081234567890'),
('S237', 'Mawar', '089688903456');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `ID_supplier` char(4) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `alamat_supplier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`ID_supplier`, `nama_supplier`, `alamat_supplier`) VALUES
('S001', 'PT.Jaya', 'Jl.Mawar'),
('S002', 'PT.Adi', 'Jl.Melati'),
('S003', 'PT.Merdeka', 'Jl. Melati');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ID_obat`),
  ADD KEY `ID_supplier` (`ID_supplier`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`ID_penjualan`),
  ADD KEY `fk_staff` (`ID_staff`),
  ADD KEY `fk_obat` (`ID_obat`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_staff`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`ID_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`ID_supplier`) REFERENCES `supplier` (`ID_supplier`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`ID_obat`) REFERENCES `obat` (`ID_obat`),
  ADD CONSTRAINT `fk_staff` FOREIGN KEY (`ID_staff`) REFERENCES `staff` (`ID_staff`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
