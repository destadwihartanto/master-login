-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2021 pada 08.47
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_master`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'nurul huda hakim ', 'huda', 'laklaksuk@gmail.com', 'user.png', '$2y$10$V04XXM/7I55flFVHXXAQMOWdjvFiu0AiSPerQVC0gsftx3yWwKIzK', 1, 0, '23/07/2021 05:32:14 AM'),
(18, 'm adriansyah ', 'adrian', 'adriansyah@gmail.com', 'user.png', '$2y$10$qKjVV8tLtdr757RyUyeySumDi0uiS4fZz.iZmD8kCViOeKib7MFqe', 12, 0, '23/07/2021 05:31:59 AM'),
(19, 'Desta Dwi Hartanto', 'desta', 'desta051297@gmail.com', 'Welcome_Scan.jpg', '$2y$10$pMlPNmoWROIAyfjsjbNPrO1Xt1WdAugd2OhKmyJcAQpdnGaruNlI6', 1, 1, '16/07/2021 19:24:54 PM'),
(20, 'yunika', 'uye', 'yuniwil@gmail.com', 'default.jpg', '$2y$10$l9xbVneng7CLf2IONh8JpOjOxhcxn7wiRlQbH3/YsVdma6635C1sG', 12, 1, '22/07/2021 12:27:40 PM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(92, 1, 1),
(94, 1, 14),
(95, 1, 17),
(98, 1, 19),
(99, 1, 23),
(102, 1, 31),
(103, 1, 7),
(105, 1, 20),
(106, 1, 21),
(107, 1, 24),
(108, 1, 25),
(109, 1, 26),
(110, 1, 27),
(111, 1, 28),
(112, 1, 29),
(113, 1, 30),
(114, 1, 32),
(115, 1, 33),
(116, 1, 34),
(117, 12, 6),
(118, 12, 23),
(119, 12, 24),
(120, 12, 31),
(121, 12, 32),
(122, 12, 7),
(123, 12, 20),
(124, 12, 21),
(125, 12, 25),
(126, 12, 26),
(127, 12, 27),
(128, 12, 28),
(129, 12, 29),
(130, 12, 30),
(131, 12, 33),
(132, 12, 34),
(140, 1, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(50) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `title`, `url`, `icon`, `is_main_menu`, `is_active`) VALUES
(1, 'Dashboard', 'dashboard', 'fa fa-fw fa-dashboard', 0, 1),
(6, 'Home', 'home', 'fa fa-fw fa-home', 0, 1),
(7, 'Utility', '#', 'fa fa-fw fa-cogs', 0, 1),
(14, 'Menu Management', 'menu', '', 22, 1),
(17, 'Role Management', 'role', '', 22, 1),
(19, 'User Management', 'user', '', 22, 1),
(20, 'Password', 'password', 'fa fa-fw fa-wrench', 7, 1),
(21, 'My Profile', 'profile', '', 7, 1),
(22, 'Management', '#', 'fa fa-fw fa-sliders', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'superadmin'),
(12, 'admin'),
(13, 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
