-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 11:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_namalengkap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_foto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` enum('Super Admin','Administrator','User','') COLLATE utf8_unicode_ci NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_created`, `user_edited`, `user_status`) VALUES
('220603173621', 'fiqih', '$2y$10$ckX7YIT40msaISmeTuRsQOh3d7igcaYromH/r0s5.VcxrTPvsUBj2', 'Moh. Fiqih Erinsyah', 'dc652556f91922ebeacd3333aa65e8ad.jpg', 'Super Admin', '2022-06-03 22:36:21', NULL, '1'),
('220724103852', 'admin', '$2y$10$9yD1MrrKqy1/la1HHozjLurI9IHYYn6IyxwbtECPPh9aIqyxLXxDS', 'admin', '', 'Administrator', '2022-07-24 15:38:52', NULL, '1'),
('220724103901', 'user', '$2y$10$/EheZ8S54U60CoYkl8Pr5ea6aOe.iwPiOJ0DL8pKLuO72RvCzqbM2', 'user', '', 'User', '2022-07-24 15:39:01', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_nama` (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
