-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2022 pada 07.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tanah`
--

CREATE TABLE `data_tanah` (
  `id_tanah` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `jenis_tanah` varchar(255) NOT NULL,
  `status_hak_tanah` varchar(255) NOT NULL,
  `status_sertifikat` varchar(255) NOT NULL,
  `status_sengketa` varchar(255) NOT NULL,
  `kordinat_a` varchar(255) NOT NULL,
  `kordinat_b` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_tanah`
--

INSERT INTO `data_tanah` (`id_tanah`, `nama_pemilik`, `luas_tanah`, `jenis_tanah`, `status_hak_tanah`, `status_sertifikat`, `status_sengketa`, `kordinat_a`, `kordinat_b`, `keterangan`) VALUES
(2, 'la ode hamlik daratu putra', '2000', 'sawah', 'Sertifikat Hak Milik', 'Bersertifikat', 'Bersengketa', 'titik 1', 'titik 2', 'bersengketa dengan la ode daratu '),
(3, 'laode hamlii', '2000', 'saawah', 'Sertifikat Hak Guna Usaha (HGU)', 'Tidak Bersertifikat', 'Tidak Bersengketa', 'CDC', 'CDC', 'DSSDSDS'),
(4, 'laode hamlii', '2000', 'saawah', 'Sertifikat Hak Guna Usaha (HGU)', 'Tidak Bersertifikat', 'Tidak Bersengketa', 'CDC', 'CDC', 'DSSDSDS'),
(5, 'laode hamlii', '2000', 'saawah', 'Sertifikat Hak Guna Usaha (HGU)', 'Tidak Bersertifikat', 'Tidak Bersengketa', 'CDC', 'CDC', 'DSSDSDS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `isi_informasi` longtext NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `isi_informasi`, `foto`) VALUES
(1, 'sertifikat ', 'sdc', '93a229626c3aa8d26e2b7725b46827e3.JPG'),
(2, 'jskadbnjas', 'jkdsnsajd', 'nobita_poses__2d__by_kaylor2013_ddwfcpl-fullview.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebijakan`
--

CREATE TABLE `kebijakan` (
  `id_kebijakan` int(11) NOT NULL,
  `judul_kebijakan` varchar(255) NOT NULL,
  `isi_kebijakan` longtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `jabatan`, `foto`) VALUES
(29, 'laode', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'kepala kantor', 'b3203d46169943909de66caa356ef133.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_tanah`
--
ALTER TABLE `data_tanah`
  ADD PRIMARY KEY (`id_tanah`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `kebijakan`
--
ALTER TABLE `kebijakan`
  ADD PRIMARY KEY (`id_kebijakan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_tanah`
--
ALTER TABLE `data_tanah`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `id_kebijakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
