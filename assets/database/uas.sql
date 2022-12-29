-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 04:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `room` varchar(128) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `name` varchar(128) NOT NULL,
  `id_name` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `room`, `start_date`, `finish_date`, `name`, `id_name`, `status`) VALUES
(28, 'Standard Room', '2021-12-05', '2021-12-09', 'Arnoldus Yitzhak Petra Manoppo', 12, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(255) NOT NULL,
  `l_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name`, `description`, `l_description`, `image`, `active`, `count`) VALUES
(17, 'Super King', 'Barbarian king', 'Killer Queen', '', 0, 0),
(66, 'Single Bed', 'Wifi, Air Hangat, Makan Pagi', 'Ukuran kamarnya yang tidak terlalu besar ini banyak dipilih oleh para backpacker atau solo traveler, karena cukup murah dan cocok untuk dihuni satu orang.', 'single.jpg', 1, 10),
(67, 'Twin Bed', 'Wifi, Air Hangat, Makan Pagi', 'Jenis kamar hotel ini cocok dipilih untuk keluarga, saudara, atau teman yang berjumlah dua orang.', 'Twin.jpg', 1, 11),
(68, 'Double Room', 'Wifi, Air Hangat, Makan Pagi', 'Double room adalah jenis kamar hotel dengan kasur besar seperti king size.  Kamar jenis ini cocok banget buat pasangan suami istri.  Selain terasa nyaman, fasilitasnya juga terbilang lengkap jika dibandingkan tipe kamar sebelumnya.', 'Double.jpg', 1, 11),
(69, 'Family Room', 'Wifi, Air Hangat, Makan Pagi', 'Seperti namanya, kamar yang satu ini diperuntukan bagi keluarga atau teman-teman.  satu kasur besar berukuran king size serta satu kasur berukuran lebih kecil.  kamar lebih luas dari tipe lain.', 'Family.jpg', 1, 4),
(70, 'Standard Room', 'Wifi, Air Hangat, Makan Pagi', 'Kamar standar dengan bed ukuran standar', 'Standard.jpg', 1, 4),
(71, 'Deluxe Room', 'Wifi, Air Hangat, Makan Pagi', 'Lebih mewah dibandingkan standard room dengan view pemandangan Kota.', 'Deluxe.jpg', 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Petra', 'petramanoppo@gmail.com', 'default.jpg', '$2y$10$im.3./xcKhtAQN5nSGkon.FnwxKDCElw3agYBAzgb81NGWOzFdp2G', 1, 1, 1638281602),
(2, 'Ayam', 'petra@gmail.com', 'default.jpg', '$2y$10$cT2yWcMjhzsXAWD.EXdmqusgg4dJd2wl0Uoid3r5tVU6QAAH.PDvi', 1, 1, 1638281650),
(10, 'Leo', 'leo@gmail.com', 'default.jpg', '$2y$10$ok.q/Ne4fzXu3.2jH4vSa.ziJCu2dZajvkI2qNRa96TUkMJmiL9Gy', 2, 1, 1638412278),
(11, 'Kure', 'kure@gmail.com', 'default.jpg', '$2y$10$Du5gMk0crIyk1OukOyUdxeM4wUk1JE6BGO9xZjHRBoREBVmB8CuZK', 2, 1, 1638416323),
(12, 'Arnoldus Yitzhak Petra Manoppo', 'arnoldus@gmail.com', 'default.jpg', '$2y$10$kK3qUNdWLTcIaTaLJryaoujeNwBWIDzHuDba4peFw0E72wgMJiKby', 3, 1, 1638450309),
(14, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$5rK9lHygzFZZWwJDszJKg.j/l6GeNppv7Or9s8vd5y6WrWgTy1Uva', 1, 1, 1638676460),
(15, 'Management', 'management@gmail.com', 'default.jpg', '$2y$10$AJIF5hGULmS.73x0.cuIk.l/VbA//7SoLOvmZK2jYwGFltnF/FmSS', 2, 1, 1638676520),
(16, 'petruk', 'test@gmail.com', 'default.jpg', '$2y$10$km/9XI8Dvvjm0KUAU2Pw.OkdjLcduIJZTosIfVKTxAvG0t9aBOIEq', 3, 1, 1638687422);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Management'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Management'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Room Listing', 'admin', 'fas fa-bed', 1),
(2, 1, 'User Listing', 'admin/userlisting', 'fas fa-users', 1),
(3, 1, 'Request Listing', 'admin/request', 'fas fa-check-square', 1),
(4, 2, 'Room Listing', 'management', 'fas fa-bed', 1),
(5, 2, 'Request Listing', 'management/request', 'fas fa-check-square', 1),
(6, 3, 'Room Listing', 'user', 'fas fa-bed', 1),
(7, 3, 'Booking Page', 'user/bookingpage', 'fas fa-hotel', 1),
(8, 3, 'Booking List', 'user/bookinglist', 'fas fa-list', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
