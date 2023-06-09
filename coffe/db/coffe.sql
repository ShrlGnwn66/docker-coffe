-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Generation Time: Jun 09, 2023 at 08:00 AM
-- Server version: 8.0.33
-- PHP Version: 8.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor_kursi` int NOT NULL,
  `pesanan_kopi` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jumlah_pesanan` int NOT NULL,
  `subtotal` decimal(50,0) NOT NULL,
  `waktu_pesanan` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int NOT NULL,
  `gambar_produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `gambar_produk`) VALUES
(1, 'Espresso', 20000, 'https://blogger.googleusercontent.com/img/a/AVvXsEj0qdNgEM2inWE-_Nv2PJLv831tmkoVViBvRT34whMbIvf7K5QwRmeyA4vO6pQB2VpLRbzuV7PD0sy6I2JHsYVWWUf-XYtYWY7hy3iTjfbdRio920HzOH-Uu0XnGcV3pCn_iKgY6hQ38DFR9B0ECipnMZCYYqfzB5sC7_8cLCY9iypjqoN0fCL5D79Kjg'),
(2, 'Americano', 16000, 'https://blogger.googleusercontent.com/img/a/AVvXsEhhsGWJEdyiwbZgNIkUsp4flJu8RhprdOgFecLeAJAvcIcdDmQxxHHmVm5tfXQvrPDmhN9tlrlPoC8YSCuHeBX4pq0psmbV-ohHrKLxvJ_4LPA4eL8CJEpXrcq1FwLWNIf66hH8klDy2xgKNgL7TVyT3nFLOoEE67wus7Xb-J8QU50id8mH0dUu7fGyxg'),
(3, 'Cappuccino', 18000, 'https://blogger.googleusercontent.com/img/a/AVvXsEj83tVMn26wGEMY8RQ5OoitfmUrmo38nTUlafooy1JZyRgm6bCTP_4i5BRP8JkaotuPPUcU8Bho_sG-aGdyvKd-wxx_CJiBJqtp8KCJ-lU-XgOyApat7-SZhrH1yds87RJ7yyl2rBZF8SPaVTG8Oe5EN2ITT0fTTBf2yYnMudPhWaG0ZpPJHk-cA_KPSw'),
(4, 'Coffee Latte', 20000, 'https://blogger.googleusercontent.com/img/a/AVvXsEhFBckcyo_GM9obr8TDUMWE3RppNrhXqx6wH6BVe7kygVJYc6cxZSc5mkoc_7rmSLXxlUL4QhUC1n5NzcPWD35fn7s2a6DFmtiJ8su-albWOFcLMnMHO4Y-srv19txVq4gTnmmY4HFKt771qPbAFQfuAHPJIiX68lU_xzdG6c1THtrz2Url1rZ82HdOKw'),
(5, 'Frappe', 12000, 'https://blogger.googleusercontent.com/img/a/AVvXsEidqxVXv_uoriKpy1vecK8jwKdpI_-eRK-FV0qSzksAqQhYrj_Tpb5LTsgW757fO_sfv63kbqXTE3seJloVE8uVOndM_qr-rbx-FE8j41HlnolLp9SK4dCOz4m4zjVqkGQKmxALGc0YvzJqDLPveEWYoGDTxTnp2TonuWHaH6Jch-7mJz8CUbtB0opcnw'),
(6, 'Mocha', 15000, 'https://blogger.googleusercontent.com/img/a/AVvXsEjgg_Zk61GMJRh1t_79KSzNO3asJCGBbmqng2qe33jQAsL-iSLOq0yEOlda0XtYBZwBFjBb6ERH4sU7yw4smQv8Z1w2-dqdg4dSXLKdZbLEcfccdQINlz8WJVUM_ZFP1DzsW_et2hMfZRXNOdQT1GPtmULYBRGXTF-8AAK4_56RLdOuMQp3PSrEm4cTxA');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `waktu` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
