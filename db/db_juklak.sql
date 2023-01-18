-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 01:05 AM
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
-- Database: `db_juklak`
--

-- --------------------------------------------------------

--
-- Table structure for table `juklak`
--

CREATE TABLE `juklak` (
  `id_juklak` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `slug` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_juklak` varchar(255) NOT NULL,
  `create_by` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `updated` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id_logbook` int(11) NOT NULL,
  `jam` time NOT NULL,
  `tgl` date NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `log_pekerjaan` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` varchar(12) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id_logbook`, `jam`, `tgl`, `petugas`, `log_pekerjaan`, `note`, `status`, `created`, `updated`, `modified`) VALUES
(1, '17:24:13', '2023-01-04', 'Irwan', 'perbaikan pc parkir mobil keluar', 'port com5 tiba-tiba tidak terbaca', 'done', '2023-01-04 18:25:40', 0, '2023-01-07 19:10:55'),
(7, '21:49:00', '2023-01-06', 'Hanif', 'test update', 'keluar notif pop up di outlooknya', 'done', '2023-01-06 21:50:48', 0, '2023-01-09 23:39:00'),
(8, '08:01:00', '2023-01-07', 'Irwan', 'Instalasi kamera cctv di emergency staire case lt. 38 dan lt. 19', '-', 'done', '2023-01-07 08:02:34', 0, '2023-01-09 23:49:16'),
(9, '09:12:00', '2023-01-07', 'Hanif', 'setting email outlook pak ago ampera', 'keluar terus notif popup', 'done', '2023-01-07 09:13:03', 0, '2023-01-09 23:49:12'),
(10, '22:30:00', '2023-01-06', 'Purnomo', 'Supervisi vendor Arsys untuk pekerjaan lot counting', '', 'done', '2023-01-07 09:14:30', 0, '2023-01-09 23:39:10'),
(15, '15:20:00', '2023-01-07', 'Irwan', 'supervisi penarikan kabel FO dari GSK to Network di Data Center', '-', 'done', '2023-01-07 15:21:15', 0, '2023-01-09 23:39:09'),
(16, '23:40:00', '2023-01-09', 'Irwan', 'monitoring temperatur rak it', '', 'done', '2023-01-09 23:40:39', 0, '2023-01-12 07:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juklak`
--
ALTER TABLE `juklak`
  ADD PRIMARY KEY (`id_juklak`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id_logbook`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `juklak`
--
ALTER TABLE `juklak`
  MODIFY `id_juklak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id_logbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
