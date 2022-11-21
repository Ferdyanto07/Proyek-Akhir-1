-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 02:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projectbajudistroferdy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bajudistro`
--

CREATE TABLE `bajudistro` (
  `id` int(11) NOT NULL,
  `nama_baju` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar_baju` varchar(255) NOT NULL,
  `product_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bajudistro`
--

INSERT INTO `bajudistro` (`id`, `nama_baju`, `deskripsi`, `kategori`, `harga`, `gambar_baju`, `product_status`) VALUES
(1, 'Faith Industries Tshirt ', '- Printed Tshirt - Cotton Combed 24', 'Tshirt', 200, '425-baju mistilltein seed.jpg', 0),
(2, 'Faith Industries Tshirt \"Black Swordsman\"', '- Printed Tshirt - Cotton Combed 24', 'Tshirt', 200, '809-baju black swordsman.jpg', 0),
(3, 'Faith Industries Tshirt ', '- Printed Tshirt - Cotton Combed 24', 'Tshirt', 200, '620-baju malenia.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bajudistro`
--
ALTER TABLE `bajudistro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bajudistro`
--
ALTER TABLE `bajudistro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
