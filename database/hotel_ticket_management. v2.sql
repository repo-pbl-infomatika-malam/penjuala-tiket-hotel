-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 23, 2023 at 03:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_ticket_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_room` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `room_number` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type_room` enum('standard','deluxe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_room`, `room_name`, `description`, `room_number`, `image`, `price`, `type_room`) VALUES
(14, 'Harris Room With Breakfast', 'ACAir minum kemasan cuma-cumaPembuat kopi / tehMinibarKulkasTelevisiDeskBrankas dalam kamarBlackout drapes / curtains', 2147483647, '6586a366f1af3.jpg', 'RP. 3.000.000', ''),
(15, 'Deluxe Garden View', 'AC\r\nAir minum kemasan cuma-cuma\r\nPembuat kopi / teh\r\nKulkas\r\nTelevisi\r\nDesk', 2147483647, '6586a3968d171.jpg', 'RP. 2.159.850', 'deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `tranksaksi`
--

CREATE TABLE `tranksaksi` (
  `id_booking` int(11) NOT NULL,
  `id_room` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status` enum('tunggu konfirmasi','berhasil','kadaluwarsa','gagal') NOT NULL,
  `nomer_invoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tranksaksi`
--

INSERT INTO `tranksaksi` (`id_booking`, `id_room`, `id_user`, `tanggal_transaksi`, `total_harga`, `status`, `nomer_invoice`) VALUES
(6589, 14, 4, '2023-12-23 19:18:16', 'RP. 300000', 'berhasil', '6586d008516ac'),
(6590, 14, 4, '2023-12-23 19:18:17', 'RP. 300000', 'berhasil', '6586d0096c933'),
(6591, 14, 4, '2023-12-23 19:18:18', 'RP. 300000', 'gagal', '6586d00a6badf'),
(6592, 14, 4, '2023-12-23 19:18:19', 'RP. 300000', 'kadaluwarsa', '6586d00b1b910'),
(6593, 14, 4, '2023-12-23 19:18:19', 'RP. 300000', 'berhasil', '6586d00bcdf15'),
(6594, 14, 4, '2023-12-23 19:18:27', 'RP. 300000', 'gagal', '6586d013814b3'),
(6597, 15, 4, '2023-12-23 20:38:00', 'RP. 2.159.850', 'berhasil', '6586e2b828fd9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` enum('buyer','seller') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `role`, `email`, `password`, `address`, `phone_number`) VALUES
(3, 'admin', 'seller', 'admin@admin', 'admin', '', ''),
(4, 'john dhe', 'buyer', 'test@test.co', '$2y$10$A39DVL6u5d70kLgceU3OCOXSoOQ0FFb6gGvdpMdVnHfECc8hVSFCi', 'Jalan mana aja, bengkong, batam', '0812 10293 1239');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6598;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tranksaksi`
--
ALTER TABLE `tranksaksi`
  ADD CONSTRAINT `tranksaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tranksaksi_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `kamar` (`id_room`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
