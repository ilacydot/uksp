-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2023 at 03:18 PM
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
-- Database: `daftarobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_obat`
--

CREATE TABLE `list_obat` (
  `namaobat` varchar(30) NOT NULL,
  `satuan` varchar(18) DEFAULT NULL,
  `stok_obat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_obat`
--

INSERT INTO `list_obat` (`namaobat`, `satuan`, `stok_obat`) VALUES
('alkohol', 'tablet', 4),
('asam mefenamat', 'tablet', 80),
('B complex', 'tablet', 40),
('diapet', 'tablet', 210),
('hansaplast', 'kotak', 10),
('kapas', 'pack', 3),
('kassa steril', 'kotak', 175),
('nacl', 'botol', 2),
('paracetamol', 'tablet', 800),
('plaster coklat', 'gulung', 8),
('plaster putih', 'gulung', 2),
('promaag', 'tablet', 70),
('tolak angin', 'saset', 97),
('vitamin c', 'tablet', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_obat`
--
ALTER TABLE `list_obat`
  ADD PRIMARY KEY (`namaobat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
