-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2023 pada 05.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `tanggal_berkas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id`, `judul`, `tanggal_berkas`) VALUES
(7, 'bg.png', '2022-06-08 01:59:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_soal`
--

CREATE TABLE `daftar_soal` (
  `id_soal` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `type_soal` enum('Skala Likert','Teks Singkat') NOT NULL,
  `sangat_setuju` int(11) NOT NULL DEFAULT 4,
  `setuju` int(11) NOT NULL DEFAULT 3,
  `tidak_setuju` int(11) NOT NULL DEFAULT 2,
  `sangat_tidak_setuju` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_soal`
--

INSERT INTO `daftar_soal` (`id_soal`, `paket_id`, `soal`, `type_soal`, `sangat_setuju`, `setuju`, `tidak_setuju`, `sangat_tidak_setuju`) VALUES
(149, 31, 'Berikan nilai pada tampilan syncnau', 'Skala Likert', 4, 3, 2, 1),
(150, 31, 'Apakah syncnau memudahkan proses pembelajaran?', 'Skala Likert', 4, 3, 2, 1),
(151, 31, 'Syncnau dapat membantu anda dalam menyelesaikan tugas dan lainnya', 'Skala Likert', 4, 3, 2, 1),
(152, 31, 'Syncnau versi terbaru lebih user friendly', 'Skala Likert', 4, 3, 2, 1),
(153, 31, 'Mudah untuk melihat jadwal didalam syncnau', 'Skala Likert', 4, 3, 2, 1),
(154, 31, 'Berikan nilai untuk fitur absensi syncnau', 'Skala Likert', 4, 3, 2, 1),
(155, 31, 'Berikan nilai untuk fitur ujian pada syncnau', 'Skala Likert', 4, 3, 2, 1),
(157, 31, 'Apakah perlu penambahan fitur syncnau? berikan nilai anda', 'Skala Likert', 4, 3, 2, 1),
(158, 31, 'Berikan nilai terbaik anda untuk sistem ini', 'Skala Likert', 4, 3, 2, 1),
(161, 31, 'Syncnau sangat mudah digunakan', 'Skala Likert', 4, 3, 2, 1),
(163, 41, 'Beri nilai OASE', 'Skala Likert', 4, 3, 2, 1),
(164, 42, 'Berikan Tampilan OASE', 'Skala Likert', 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `prodi` enum('TI','TKOM','AK','FARM','SPMI','TIK','ELKTR','ASP','PRWT','PER','DKV','BID','MSN') NOT NULL,
  `sebagai` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `id_paket_jawaban` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `id_identitas`, `nama_lengkap`, `prodi`, `sebagai`, `gender`, `id_paket_jawaban`, `jawaban`, `label`) VALUES
(193, '20090154', 'Vita Karenina', 'TI', 'Mahasiswa', 'P', 31, 'Kadang jadwal tidak ada, tapi sejauh ini oke', 'Kurang'),
(195, '20090143', 'Zulfatun Nisa', 'TI', 'Mahasiswa', 'P', 31, 'Sudah bagusss', 'Baik'),
(197, '20031042', 'Dian Ayu', 'AK', 'Mahasiswa', 'P', 31, 'Diharapkan pada syncnau kedepannya tidak terjadi trouble saat ujian, dikarenakan waktu ujian jadi terhambat ', 'Kurang'),
(200, '23092001', 'Satrio Ramadhan', 'TI', 'Mahasiswa', 'L', 31, 'sejauh ini sudah cukup baik, hanya kalo bisa tampilan biar ngga kaku, biar tampilannya lebih modern', 'Kurang'),
(202, '20090118', 'Salsa Dwi N', 'TI', 'Mahasiswa', 'P', 31, 'Bagus', 'Baik'),
(203, '20090157', 'Fattarizky Akbar F.', 'TI', 'Mahasiswa', 'L', 31, 'Memudahkan pembelajaran', 'Baik'),
(204, '20090104', 'Laeli', 'TI', 'Mahasiswa', 'P', 31, 'sudah bagus, namun kalai di handphone kurang bagus tampilannya', 'Kurang'),
(206, '19111012', 'Ipan Setiawan', 'ASP', 'Mahasiswa', 'L', 31, 'pada sistem absensi, saya sudah absen tp nama tidak muncul, harus log in ulang\r\nTerima kasih', 'Kurang'),
(207, '16062000', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Syncnau bagusss', 'Baik'),
(208, '22092003', 'Zidni Rifqi', 'TI', 'Mahasiswa', 'L', 31, 'Cukup', 'Baik'),
(210, '22092004', 'Rizqi Khoeruzzaman', 'TI', 'Mahasiswa', 'L', 31, 'perlu adanya pengembangan pada sistem presensi tidak hanya menggunakan code QR', 'Baik'),
(211, '20090131', 'RR. Anisa Ayu N.', 'TI', 'Mahasiswa', 'P', 31, 'Belum pernah mengalami trouble saat menggunakan syncnau ', 'Baik'),
(223, '16062000', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Sudah bagus syncnau memudahkan', 'Baik'),
(224, '16062000', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Lebih bagus sekarang, overall mantap lah syncnau', 'Baik'),
(225, '19090102', 'Susi Nurindahsari', 'TI', 'Mahasiswa', 'P', 31, 'Sudah bagus ????????. Semangat ????????', 'Baik'),
(227, '16062000', 'Moh. Fiqih', 'TIK', 'Super Admin', 'L', 31, 'Syncnau Bagus', 'Baik'),
(228, '14151617', 'Dosen', 'TI', 'Dosen', 'L', 31, 'Secret', 'Baik'),
(232, '22092002', 'Moh. Fiqih Erinsyah', 'TI', 'Mahasiswa', 'L', 42, 'OASE keren', 'Baik'),
(233, '22092002', 'Moh. Fiqih Erinsyah', 'TI', 'Mahasiswa', 'L', 42, 'Oase Bagus', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `prodi` enum('TI','TKOM','AK','FARM','SPMI','TIK','ASP','PER','MSN','ELKTR','PRWT','DKV','BID') NOT NULL,
  `sebagai` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa') NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `id_paket_jawaban` int(11) NOT NULL,
  `id_soal_kuesioner` int(11) NOT NULL,
  `type_soal` enum('Skala Likert','Teks Singkat') NOT NULL,
  `jawaban` text NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id`, `id_identitas`, `nama_lengkap`, `prodi`, `sebagai`, `gender`, `id_paket_jawaban`, `id_soal_kuesioner`, `type_soal`, `jawaban`, `datecreated`) VALUES
(889, 22092002, 'Moh. Fiqih Erinsyah', 'TI', 'Mahasiswa', 'L', 42, 164, 'Skala Likert', '4', '2023-08-04 01:08:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manajerial`
--

CREATE TABLE `manajerial` (
  `id_m` int(11) NOT NULL,
  `nama_apl` enum('Oase','Syncnau') NOT NULL,
  `versi_apl` varchar(256) NOT NULL,
  `tgl_publish` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `penyedia_apl` enum('TIK','Vendor') NOT NULL,
  `link_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `manajerial`
--

INSERT INTO `manajerial` (`id_m`, `nama_apl`, `versi_apl`, `tgl_publish`, `penyedia_apl`, `link_berkas`) VALUES
(71, 'Syncnau', '1', '2022-07-22 16:52:00', 'TIK', 'https://drive.google.com/drive/my-drive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_soal`
--

CREATE TABLE `paket_soal` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(256) NOT NULL,
  `aplikasi` enum('Syncnau','Oase') NOT NULL,
  `versi_apl_paket` varchar(256) NOT NULL,
  `tgl_kuesioner` datetime NOT NULL,
  `responden` varchar(50) NOT NULL,
  `jumlah_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_soal`
--

INSERT INTO `paket_soal` (`id_paket`, `nama_paket`, `aplikasi`, `versi_apl_paket`, `tgl_kuesioner`, `responden`, `jumlah_soal`) VALUES
(31, 'Kuesioner Syncnau', 'Syncnau', '1.1', '2023-04-04 23:52:00', 'Tendik', 10),
(42, 'Kuesioner OASE 2023', 'Oase', '1', '2023-07-31 19:18:00', 'Mahasiswa', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `sebagai` varchar(25) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `bintang` varchar(10) NOT NULL,
  `feedback` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `id_identitas`, `nama_lengkap`, `sebagai`, `prodi`, `bintang`, `feedback`, `datetime`) VALUES
(11, '20090154', 'Vita Karenina', 'Mahasiswa', 'TI', '4', 'okelahh', '2023-07-22 06:21:29'),
(12, '20090146', 'Nisa Ashfiyani', 'Mahasiswa', 'TI', '5', 'Bagus banged lhoooo', '2023-07-22 06:36:55'),
(13, '20031042', 'Dian Ayu', 'Mahasiswa', 'AK', '5', 'Sangat mendukung', '2023-07-22 06:38:44'),
(15, '23092001', 'Satrio Ramadhan', 'Mahasiswa', 'TI', '5', 'kerenn', '2023-07-22 06:46:32'),
(16, '20090118', 'Salsa Dwi N', 'Mahasiswa', 'TI', '4', 'Mantappp', '2023-07-22 06:50:29'),
(17, '20090143', 'Zulfatun Nisa', 'Mahasiswa', 'TI', '5', 'Kerennn', '2023-07-22 06:51:54'),
(18, '20090157', 'Fattarizky Akbar F.', 'Mahasiswa', 'TI', '4', 'Sangat menarik perhatian', '2023-07-22 07:09:22'),
(19, '20090104', 'Laeli', 'Mahasiswa', 'TI', '5', 'Bagus, nanti tampilannya di bagusin lagi yaa', '2023-07-22 07:24:54'),
(20, '19111012', 'Ipan Setiawan', 'Mahasiswa', 'ASP', '4', 'Terima kasih sudah membuat sistem e-repo', '2023-07-22 08:08:59'),
(21, '16062000', 'Moh. Fiqih', 'Super Admin', 'TIK', '5', 'Semoga bermanfaat sistemnya', '2023-07-22 08:20:11'),
(22, '22092003', 'Zidni Rifqi', 'Mahasiswa', 'TI', '5', 'Baik', '2023-07-22 09:53:20'),
(23, '22092004', 'Rizqi Khoeruzzaman', 'Mahasiswa', 'TI', '4', '-', '2023-07-23 01:21:15'),
(24, '20090131', 'RR. Anisa Ayu N.', 'Mahasiswa', 'TI', '5', 'Tampilan simple dan menarik, sangat memudahkan pengguna ', '2023-07-23 07:43:26'),
(25, '20090083', 'Muhammad Zulfikri', 'Mahasiswa', 'TI', '5', 'Sudah cukup bagus untuk dijadikan platform evaluasi ', '2023-07-23 10:49:52'),
(26, '19090102', 'Susi Nurindahsari', 'Mahasiswa', 'TI', '5', 'Tampilannya bagus, mudah digunakan', '2023-07-24 07:59:29'),
(27, '16062000', 'Moh. Fiqih', 'Super Admin', 'TIK', '5', 'Baguss', '2023-07-28 06:58:24'),
(28, '14151617', 'Dosen', 'Dosen', 'TI', '4', 'Bagus', '2023-07-28 07:19:58'),
(29, '20090118', 'Salsa Dwi N', 'Mahasiswa', 'TI', '5', 'Bagus', '2023-07-31 12:20:07'),
(30, '22092002', 'Moh. Fiqih Erinsyah', 'Mahasiswa', 'TI', '5', 'Bagus', '2023-08-04 01:09:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shared_link`
--

CREATE TABLE `shared_link` (
  `id` int(11) NOT NULL,
  `link_kuesioner` text NOT NULL,
  `nama_kuesioner` varchar(50) NOT NULL,
  `responden` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `id_identitas` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id`, `id_identitas`, `nama_lengkap`, `prodi`) VALUES
(2, '22092002', 'Fiqih', 'TI'),
(3, '22092002', 'Fiqih', 'TI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username_id` int(11) NOT NULL,
  `user_password` text NOT NULL,
  `user_namalengkap` varchar(50) NOT NULL,
  `user_foto` varchar(256) NOT NULL,
  `user_level` enum('Super Admin','Pengevaluasi','Dosen','Mahasiswa','Tendik') NOT NULL,
  `user_prodi` enum('TI','ASP','TKOM','AK','FARM','PER','BID','MSN','DKV','PRWT','ELKTR','TIK','BAA','TENDIK','ADMIN') NOT NULL,
  `user_gender` enum('L','P') NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('Aktif','Nonaktif') NOT NULL,
  `hash_key` varchar(255) DEFAULT NULL,
  `hash_expiry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `username_id`, `user_password`, `user_namalengkap`, `user_foto`, `user_level`, `user_prodi`, `user_gender`, `user_created`, `user_edited`, `user_status`, `hash_key`, `hash_expiry`) VALUES
('230318024647', 'dosen@gmail.com', 14151617, '$2y$10$1BmIHERKxYna8PxU7l7GtuczMddsWhNSRjB1yGpHzGxpQD2u42bXm', 'Dosen', '2aa88be5ccb5c84ac6b5ab1bbde81052.png', 'Dosen', 'TI', 'L', '2023-03-18 08:46:47', NULL, 'Aktif', NULL, NULL),
('230407050455', 'mohfiqiherinsyah@gmail.com', 16062000, '$2y$10$tCWDjO0aR6G/CcqP5thyi.YDOm2mKoerB3bxJKcf64KIP/tXccdny', 'Moh. Fiqih', '3178547fc6e54f70d1ccad650e4c5b5b.jpg', 'Super Admin', 'TIK', 'L', '2023-04-07 10:04:55', NULL, 'Aktif', '$2y$10$Vq9e3S68qwydYuNB8YFUOO7/qiploButbK9Ddq3u1lVcQcPs4rrHC', '2023-07-26 15:10'),
('230720034259', 'vitakarenina06@gmail.com', 20090154, '$2y$10$UMfTJhTRGD.4TdvHz.XXTOdXVb/Ps4MdR6YHcF..8QulqvYJbmUka', 'Vita Karenina', '', 'Mahasiswa', 'TI', 'P', '2023-07-20 10:42:59', NULL, 'Aktif', NULL, NULL),
('230720040906', 'mfiqiherinsyah90@gmail.com', 22092002, '$2y$10$wHlKJfMGmSWJJ6futk69COh2GeEEizJeMShqftzlvBN3FhdXtgGWu', 'Moh. Fiqih Erinsyah', '6a79f5742c66a6aa3dfd8c9147267fe5.jpg', 'Mahasiswa', 'TI', 'L', '2023-07-20 11:09:06', NULL, 'Aktif', NULL, NULL),
('230721150909', 'salsa@gmail.com', 20090118, '$2y$10$azUdrm.n8wGKDGfbxc56qeggJq5nYCIOueP74zWCxEglEosa3oxMm', 'Salsa Dwi N', '3fd4d87655ab3ed2a14a6049d2604cf5.jpeg', 'Mahasiswa', 'TI', 'P', '2023-07-21 22:09:09', NULL, 'Aktif', NULL, NULL),
('230721151020', 'icha@gmail.com', 20090131, '$2y$10$i/ZzZwvredSTWcH5hyIhPuU.HyFPyhPcr8N3MJ8nbdyto1BluLmnq', 'RR. Anisa Ayu N.', '', 'Mahasiswa', 'TI', 'P', '2023-07-21 22:10:20', NULL, 'Aktif', NULL, NULL),
('230721151122', 'zulfa@gmail.com', 20090143, '$2y$10$Qm53GlfI7WfTvCfJfQ.Ao.Np5kEEDubqffJvKC6FJWmPKADy44VxO', 'Zulfatun Nisa', '', 'Mahasiswa', 'TI', 'P', '2023-07-21 22:11:22', NULL, 'Aktif', NULL, NULL),
('230721151204', 'nisa@gmail.com', 20090146, '$2y$10$Ar7ATSv4y4vGkTgPLvV7XePIbWmYH1QvBoBZgSkaAqt25GY4mMO02', 'Nisa Ashfiyani', '', 'Mahasiswa', 'TI', 'P', '2023-07-21 22:12:04', NULL, 'Aktif', NULL, NULL),
('230721151251', 'zidni@gmail.com', 22092003, '$2y$10$0UXInt9AAzPRXt5awG82X.oGDd00Cn9j2bmtLSuDiKXsuFDhkVE26', 'Zidni Rifqi', '', 'Mahasiswa', 'TI', 'L', '2023-07-21 22:12:51', NULL, 'Aktif', NULL, NULL),
('230721151511', 'rizqi@gmail.com', 22092004, '$2y$10$7smtjvjDbLcQB3wyKFb2nu/V1l1ktVCBodyPiydGxdiBZv8xsMjr6', 'Rizqi Khoeruzzaman', '', 'Mahasiswa', 'TI', 'L', '2023-07-21 22:15:11', NULL, 'Aktif', NULL, NULL),
('230721151718', 'zulfikri@gmail.com', 20090083, '$2y$10$qKsTDsCc8PrgaJARDmRxOe/GzxXp5Cw.gxbXcu3PcqwnZ1z3oflBu', 'Muhammad Zulfikri', '', 'Mahasiswa', 'TI', 'L', '2023-07-21 22:17:18', NULL, 'Aktif', NULL, NULL),
('230721154905', 'ipansetiawan@gmail.com', 19111012, '$2y$10$cxVc/TpsnPrq6SQ78yDeRekF7KsYW4weVRgTcXtAI276.C0T0JZTC', 'Ipan Setiawan', '', 'Mahasiswa', 'ASP', 'L', '2023-07-21 22:49:05', NULL, 'Aktif', NULL, NULL),
('230721154949', 'dianayu@gmail.com', 20031042, '$2y$10$aXOW6E9oh3XTkX/jPlck9urSdBuubbwp7cAWXIJR0jXEKbQSe0xqW', 'Dian Ayu', '', 'Mahasiswa', 'AK', 'P', '2023-07-21 22:49:49', NULL, 'Aktif', NULL, NULL),
('230722055015', 'laeli@gmail.com', 20090104, '$2y$10$YNyz83NNTKzBYVl9jAdAn.EmvSKWEiTh0jfDVxD.q.Kl2O8IdV3GK', 'Laeli', '', 'Mahasiswa', 'TI', 'P', '2023-07-22 12:50:15', NULL, 'Aktif', NULL, NULL),
('230722055149', 'fatar@gmail.com', 20090157, '$2y$10$Yg1IjKak/lZts8bcIG/VDugySvtRfMqxZpT0IX7oBSG8FemMaA1qa', 'Fattarizky Akbar F.', '', 'Mahasiswa', 'TI', 'L', '2023-07-22 12:51:50', NULL, 'Aktif', NULL, NULL),
('230722063049', 'susi@gmail.com', 19090102, '$2y$10$FGLp31VufR5m7myHLMxmN.T9JM6Rw.b7Ec4D/e9X8nY3ilsQNk9ZS', 'Susi Nurindahsari', '', 'Mahasiswa', 'TI', 'P', '2023-07-22 13:30:49', NULL, 'Aktif', NULL, NULL),
('230722063624', 'satrio@gmail.com', 23092001, '$2y$10$dXSjv56dN2px2z2z2Ncc3.nKZrQnlt83dNZPJRvc6nG2eLcx2wDxW', 'Satrio Ramadhan', '', 'Mahasiswa', 'TI', 'L', '2023-07-22 13:36:24', NULL, 'Aktif', NULL, NULL),
('230731113841', 'baa@gmail.com', 23092003, '$2y$10$JK7RfMW4xFSrljR9lx833OpqDBzo151mtFIP1AJiJKJdxjl/vrxH2', 'BAA', '', 'Pengevaluasi', 'BAA', 'L', '2023-07-31 18:38:42', NULL, 'Aktif', NULL, NULL),
('230731114044', 'tendik@gmail.com', 23092004, '$2y$10$tT.ZTZ3UMdSM6RkpFXwd/ORnJcNwYZIAdWPg.jbaSFPlJgpDr0JAi', 'Tendik', '', 'Tendik', 'TENDIK', 'L', '2023-07-31 18:40:44', NULL, 'Aktif', NULL, NULL),
('230731115417', 'admin@gmail.com', 23092002, '$2y$10$4TkVbbXZid0BDpApnT4vEuqDPZmlqxcVQioo/1XQFiSR/eDaxSUQK', 'Admin TI', '', '', 'ADMIN', 'L', '2023-07-31 18:54:17', NULL, 'Aktif', NULL, NULL),
('230814105703', 'proditi_tendik@gmail.com', 1122334455, '$2y$10$l3yR7jk3D8NdR41E2RxtNunXCqnwlJZWt.fAM/OOTV1eJR2P4eRfW', 'Prodi TI', '', 'Tendik', 'TENDIK', 'L', '2023-08-14 17:57:03', NULL, 'Aktif', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_soal`
--
ALTER TABLE `daftar_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD UNIQUE KEY `soal` (`soal`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket` (`id_paket_jawaban`);

--
-- Indeks untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket` (`id_paket_jawaban`),
  ADD KEY `soal` (`id_soal_kuesioner`),
  ADD KEY `type` (`id_identitas`);

--
-- Indeks untuk tabel `manajerial`
--
ALTER TABLE `manajerial`
  ADD PRIMARY KEY (`id_m`);

--
-- Indeks untuk tabel `paket_soal`
--
ALTER TABLE `paket_soal`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shared_link`
--
ALTER TABLE `shared_link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username_id` (`username_id`),
  ADD KEY `user_nama` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `daftar_soal`
--
ALTER TABLE `daftar_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=890;

--
-- AUTO_INCREMENT untuk tabel `manajerial`
--
ALTER TABLE `manajerial`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `paket_soal`
--
ALTER TABLE `paket_soal`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `shared_link`
--
ALTER TABLE `shared_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `username_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122334456;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD CONSTRAINT `id_paket` FOREIGN KEY (`id_paket_jawaban`) REFERENCES `paket_soal` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD CONSTRAINT `paket` FOREIGN KEY (`id_paket_jawaban`) REFERENCES `paket_soal` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soal` FOREIGN KEY (`id_soal_kuesioner`) REFERENCES `daftar_soal` (`id_soal`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `type` FOREIGN KEY (`id_identitas`) REFERENCES `user` (`username_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
