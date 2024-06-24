-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 24 Jun 2024 pada 12.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmbbb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `email`, `password`) VALUES
(5, 'PMB ITH', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'PMB ITH2', 'admin2@gmail.com', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `count`
--

CREATE TABLE `count` (
  `prodi` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `jumlah_lulus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `count`
--

INSERT INTO `count` (`prodi`, `kapasitas`, `jumlah_lulus`) VALUES
('Ilmu Komputer', 120, 4),
('Matematika', 50, 0),
('Sistem Informasi', 80, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `counter`
--
-- Kesalahan membaca struktur untuk tabel pmbbb.counter: #1932 - Table 'pmbbb.counter' doesn't exist in engine
-- Kesalahan membaca data untuk tabel pmbbb.counter: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `pmbbb`.`counter`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `counterr`
--

CREATE TABLE `counterr` (
  `id` int(128) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `kapasitass` int(255) NOT NULL,
  `jumlah_luluss` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `counterr`
--

INSERT INTO `counterr` (`id`, `prodi`, `kapasitass`, `jumlah_luluss`) VALUES
(1, 'Ilmu Komputer', 120, 0),
(2, 'Sistem Informasi', 80, 0),
(3, 'Matematika', 50, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalurpendaftaran`
--

CREATE TABLE `jalurpendaftaran` (
  `id` int(100) NOT NULL,
  `namajurusan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jalurpendaftaran`
--

INSERT INTO `jalurpendaftaran` (`id`, `namajurusan`) VALUES
(1, 'PRESTASI'),
(2, 'UTBK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(100) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'Ilmu Komputer'),
(2, 'Sistem Informasi'),
(3, 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nilai_akhir` int(100) NOT NULL,
  `jurusan_1` varchar(100) NOT NULL,
  `jurusan_2` varchar(100) NOT NULL,
  `jurusan_3` varchar(128) NOT NULL,
  `nilai_utbk` varchar(486) NOT NULL,
  `jalur` varchar(128) NOT NULL,
  `upload_sertifikat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `jurusan_rekomendasi` varchar(100) DEFAULT NULL,
  `stat` varchar(100) NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_user`, `nama_lengkap`, `sekolah_asal`, `nisn`, `nilai_akhir`, `jurusan_1`, `jurusan_2`, `jurusan_3`, `nilai_utbk`, `jalur`, `upload_sertifikat`, `tempat_lahir`, `tanggal_lahir`, `kelurahan`, `kecamatan`, `provinsi`, `jurusan_rekomendasi`, `stat`, `tgl_daftar`) VALUES
(120, 40, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', '2', '', '', '', 'pp', 'pp', 'pp', '', 'Ditolak', '2024-06-16 04:39:14'),
(121, 41, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', '2', '', '', '', 'oo', 'oo', 'oo', '', 'Ditolak', '2024-06-16 04:40:26'),
(122, 42, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'utbk', '', '', '', '', '', '', '', 'Ditolak', '2024-06-16 04:42:21'),
(123, 43, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-16 04:51:47'),
(124, 45, '', '', '', 0, 'sistem informasi', 'ilmu komputer', '', '', 'prestasi', '', '', '', 'pp', '', '', '', 'Ditolak', '2024-06-16 07:53:50'),
(125, 46, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '[\"uploads/666e7f887b656_x2.png\"]', '', '', 'p;lpp', '', '', '', 'Ditolak', '2024-06-16 08:00:40'),
(126, 47, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', 'uploads/666e822e8c2b8.png', '', '', 'pp', 'pp', '', '', 'Ditolak', '2024-06-16 08:11:58'),
(127, 48, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', 'pp', '', 'Ditolak', '2024-06-16 08:36:53'),
(128, 49, 'jj', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', 'uploads/666e8aacc47a3.png', '', '', '', '', '', '', 'Ditolak', '2024-06-16 08:48:12'),
(129, 50, 'ppoo', '', 'pp', 0, 'sistem informasi', 'ilmu komputer', '', '', 'utbk', '', 'pp', '', '', '', '', '', 'Ditolak', '2024-06-16 09:28:45'),
(135, 57, 'hj', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'utbk', '', '', '', '', '', '', '', 'Ditolak', '2024-06-17 18:40:14'),
(136, 58, 'ppkj', '', 'pp', 0, 'sistem informasi', 'ilmu komputer', '', '', 'utbk', '', '', '', '', '', '', '', 'Ditolak', '2024-06-18 02:28:05'),
(151, 63, 'nh', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-18 05:03:50'),
(153, 64, 'ni', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-18 05:27:42'),
(155, 67, 'km', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-18 11:06:35'),
(156, 68, '', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-18 11:37:06'),
(164, 61, 'jk', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', 'uploads/66715f7b5eefc.png', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-18 17:20:43'),
(169, 73, 'kn', 'kn', '', 0, 'matematika', 'ilmu komputer', '', '', 'utbk', '', '', '', '', '', '', '', 'Ditolak', '2024-06-19 16:29:28'),
(172, 77, 'ku', '', '', 0, 'sistem informasi', 'ilmu komputer', '', '', 'utbk', '', '', '', 'p', '', '', '', 'Ditolak', '2024-06-21 19:47:16'),
(173, 78, 'ky', '', '', 0, 'sistem informasi', 'matematika', '', '', 'prestasi', '', '', '', 'p', '', '', '', 'Ditolak', '2024-06-21 19:47:52'),
(174, 79, 'pl', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-21 19:52:04'),
(176, 80, 'lu', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-21 20:01:12'),
(181, 39, 'kk', '', '', 0, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-21 20:39:59'),
(182, 71, 'fm', '', '', 99, 'ilmu komputer', 'ilmu komputer', '', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-21 20:40:31'),
(190, 84, 'MUHAMMAD ANUGRAH', 'SMA 1', '9898', 99, 'ilmu komputer', 'sistem informasi', '', '', 'prestasi', 'uploads/66758bb081211.jpg', 'PAREPARE', '2024-06-21', 'LAKESSI', 'SOREANG', 'SULSEL', 'ilmu komputer', 'Ditolak', '2024-06-21 21:18:24'),
(194, 53, 'lo', '', '', 0, 'ilmu komputer', 'sistem informasi', '', '', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-21 21:55:23'),
(207, 86, 'lb', '', '', 99, 'ilmu komputer', 'sistem informasi', 'matematika', '', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-22 17:56:54'),
(218, 76, 'po', 'sma 1', '90', 98, 'Ilmu Komputer', 'Sistem Informasi', 'Matematika', '900', 'UTBK', '', '', '', '', '', '', '', '', '2024-06-22 13:25:41'),
(227, 92, 'kv', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '400', 'utbk', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-22 19:25:55'),
(232, 93, 'ggg', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '', 'utbk', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-23 17:27:46'),
(236, 94, 'kb', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '380', 'prestasi', '', '', '', '', '', '', 'ilmu komputer', 'Ditolak', '2024-06-23 17:41:36'),
(266, 96, 'kkl', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '900', 'prestasi', '', '', '', '', '', '', '', 'Ditolak', '2024-06-23 21:51:09'),
(277, 95, 'kc', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '310', 'utbk', '', '', '', '', '', '', '', 'Menunggu Keputusan', '2024-06-23 22:48:50'),
(278, 75, 'lpp', '', '', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '620', 'prestasi', 'uploads/667844072e49d.png', '', '', '', '', '', '', 'Menunggu Keputusan', '2024-06-23 22:49:27'),
(280, 99, 'Disky Fahrul rifaih', 'smk 3 pinrang', '12931094190', 90, 'ilmu komputer', 'sistem informasi', 'matematika', '510', 'utbk', '', 'Pareapre', '2024-06-24', 'Mangga', 'Jeruk', 'Kalimantan Timur', '', 'Menunggu Keputusan', '2024-06-24 17:13:56'),
(281, 100, 'Tisa S', 'SMA 3 Palu', '121', 90, 'sistem informasi', 'matematika', 'ilmu komputer', '860', 'prestasi', 'uploads/6679477f9a6ba.png', 'Palu', '2024-06-24', 'Ketupat', 'Pasir', 'Papua', '', 'Menunggu Keputusan', '2024-06-24 17:16:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terima`
--
-- Kesalahan membaca struktur untuk tabel pmbbb.terima: #1932 - Table 'pmbbb.terima' doesn't exist in engine
-- Kesalahan membaca data untuk tabel pmbbb.terima: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `pmbbb`.`terima`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `terimaa`
--

CREATE TABLE `terimaa` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `terimaa`
--

INSERT INTO `terimaa` (`id`, `id_user`, `nama_lengkap`, `nisn`, `sekolah_asal`, `jurusan`) VALUES
(0, 0, 'nuge', '988', 'sma 1', 'Ilmu Komputer'),
(0, 53, 'lo', '', '', 'ilmu komputer'),
(0, 53, 'lo', '', '', 'ilmu komputer'),
(0, 53, 'lo', '', '', 'ilmu komputer'),
(0, 53, 'lo', '', '', 'sistem informasi'),
(0, 53, 'lo', '', '', 'ilmu komputer'),
(0, 53, 'lo', '', '', 'sistem informasi'),
(0, 81, 'llm', '', '', 'ilmu komputer'),
(0, 83, 'MUHAMMAD ANUGRAH', '79789', 'SMA 1', ''),
(0, 82, 'FIRMAN SAPUTRA', '95829', 'SMK 2', 'sistem informasi'),
(0, 85, 'fadelhasyim', '', 'smk 2', ''),
(0, 86, 'DIKI', '', '', 'sistem informasi'),
(0, 86, 'lb', '', '', 'matematika'),
(0, 87, 'ritnes', '', '', 'matematika'),
(0, 38, 'nn', '', '', 'matematika'),
(0, 88, 'kmm', '', '', 'matematika'),
(0, 88, 'kmm', '', '', 'ilmu komputer'),
(0, 88, 'kmm', '', '', ''),
(0, 88, 'kmm', '', '', 'ilmu komputer'),
(0, 88, 'kmm', '', '', 'ilmu komputer'),
(0, 89, 'kontol', '0090', '', 'sistem informasi'),
(0, 90, 'lh', '', '', 'ilmu komputer'),
(0, 90, '', '', '', 'ilmu komputer'),
(0, 90, 'lh', '', '', 'ilmu komputer'),
(0, 90, 'lh', '', '', 'sistem informasi'),
(0, 86, 'lb', '', '', 'ilmu komputer'),
(0, 74, 'lp', '', '', 'sistem informasi'),
(0, 74, 'lp', '', '', 'matematika'),
(0, 74, 'lp', '', '', 'ilmu komputer'),
(0, 74, 'lp', '', '', 'ilmu komputer'),
(0, 74, 'lp', '', '', 'sistem informasi'),
(0, 75, 'lpp', '', '', 'ilmu komputer'),
(0, 75, 'lpp', '', '', 'ilmu komputer'),
(0, 75, 'lpp', '', '', 'ilmu komputer'),
(0, 75, 'lpp', '', '', ''),
(0, 75, 'lpp', '', '', 'ilmu komputer'),
(0, 75, 'lpp', '90', '', 'sistem informasi'),
(0, 75, '', '', '', 'sistem informasi'),
(0, 75, 'lpp', '', '', 'ilmu komputer'),
(0, 91, 'kg', '', '', 'sistem informasi'),
(0, 91, '', '', '', 'sistem informasi'),
(0, 92, 'kv', '', '', ''),
(0, 92, 'kv', '', '', 'ilmu komputer'),
(0, 92, 'kv', '', '', 'ilmu komputer'),
(0, 92, '', '', '', ''),
(0, 92, 'kv', '', '', 'ilmu komputer'),
(0, 92, '', '', '', ''),
(0, 92, 'kv', '', '', 'ilmu komputer'),
(0, 93, 'agung', '', 'sma 1', 'ilmu komputer'),
(0, 93, 'gg', '', '', 'sistem informasi'),
(0, 93, 'gg', '', '', 'ilmu komputer'),
(0, 93, 'gg', '', '', ''),
(0, 94, 'kbb', '90', '', ''),
(0, 94, 'kkb', '', '', 'ilmu komputer'),
(0, 94, 'kb', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'Tidak Diketahui'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', 'Tidak Diketahui'),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'Tidak Diketahui'),
(0, 95, 'kc', '', '', 'Tidak Diketahui'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 97, 'jh', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', 'Tidak Diketahui'),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', ''),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', ''),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 96, 'kkl', '', '', ''),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'sistem informasi'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', ''),
(0, 96, 'kkl', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', ''),
(0, 95, 'kc', '', '', ''),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'sistem informasi'),
(0, 95, 'kc', '', '', ''),
(0, 95, 'kc', '', '', 'matematika'),
(0, 75, 'lppp', '90', '', 'sistem informasi'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 95, 'kc', '', '', 'ilmu komputer'),
(0, 98, 'ff', '', '', 'ilmu komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nisn`, `username`, `email`, `password`) VALUES
(26, 'nuge', 'nuge', 'pp', 'pp@gmail.com', '202cb962ac59075b964b07152d234b70'),
(27, 'fadel', '737', 'fasdell', 'fadelll@gmail.com', '202cb962ac59075b964b07152d234b70'),
(28, 'firman', '990', 'fr', 'fn@gmail.com', 'e034fb6b66aacc1d48f445ddfb08da98'),
(29, 'ith', '200', 'ithh', 'ithhh@gmail.com', 'e034fb6b66aacc1d48f445ddfb08da98'),
(31, 'anugrah', '899', 'r7', 'r7@gmail.com', 'r7'),
(32, 'io', 'io', 'io', 'io@gmail.com', 'f98ed07a4d5f50f7de1410d905f1477f'),
(33, 'nugi', '7899', 'nugi', 'nugi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(34, 'frr', '89', 'frr', 'frr@gmail.com', '202cb962ac59075b964b07152d234b70'),
(35, 'gh', '988', 'gh', 'gh@gmail.com', '19b19ffc30caef1c9376cd2982992a59'),
(36, 'rina', '1219324385241919', 'rina', 'rina@gmail.com', '3aea9516d222934e35dd30f142fda18c'),
(37, 'jl', '08080909', 'jl', 'jl@gmail.com', '54768df6eeb13e17b9524dbd9bb44a24'),
(38, 'nn', 'nn', 'nn', 'nn@gmail.com', 'eab71244afb687f16d8c4f5ee9d6ef0e'),
(39, 'kk', '900', 'kk', 'kk@gmail.com', 'dc468c70fb574ebd07287b38d0d0676d'),
(40, 'll', 'll', 'll', 'll@gmail.com', '5b54c0a045f179bcbbbc9abcb8b5cd4c'),
(41, 'mm', 'mm', 'mm', 'mm@gmail.com', 'b3cd915d758008bd19d0f2428fbb354a'),
(42, 'oo', 'ooo', 'oo', 'oo@gmail.com', 'e47ca7a09cf6781e29634502345930a7'),
(43, 'vv', 'vv', 'vv', 'vv@gmail.com', 'c4055e3a20b6b3af3d10590ea446ef6c'),
(44, 'zz', 'zz', 'zz', 'zz@gmail.com', '25ed1bcb423b0b7200f485fc5ff71c8e'),
(45, 'qq', 'qq', 'qq', 'qq@gmail.com', '099b3b060154898840f0ebdfb46ec78f'),
(46, 'ii', 'ii', 'ii', 'ii@gmail.com', '7e98b8a17c0aad30ba64d47b74e2a6c1'),
(47, 'ko', 'ko', 'ko', 'ko@gmail.com', 'ed73f6b46391b95e1d03c6818a73b8b9'),
(48, 'ki', 'ki', 'ki', 'ki@gmail.com', '988287f7a1eb966ffc4e19bdbdeec7c3'),
(49, 'jj', 'jj', 'jj', 'jj@gmail.com', 'bf2bc2545a4a5f5683d9ef3ed0d977e0'),
(50, 'hh', 'hh', 'hh', 'hh@gmail.com', '5e36941b3d856737e81516acd45edc50'),
(51, 'qw', 'qw', 'qw', 'qw@gmail.com', '006d2143154327a64d86a264aea225f3'),
(52, 'qe', 'qe', 'qe', 'qe@gmail.com', '4d6e7051b02397d7733ea9a222fdb8e0'),
(53, 'lo', 'lo', 'lo', 'lo@gmail.com', '7ce8636c076f5f42316676f7ca5ccfbe'),
(54, 'kl', 'kl', 'kl', 'kl@gmail.com', '16ec114932520d2b9c18a28121d515af'),
(55, 'lk', 'lk', 'lk', 'lk@gmail.com', 'd0fa06cd93335c8cae357ffe5cd1c4e9'),
(56, 'haykal', '7372022039', 'hy', 'hy@gmail.com', '035ed2311b96d2a65ec6a6fe71046c14'),
(57, 'hj', 'hj', 'hj', 'hj@gmail.com', '1f28e49f34e2406fdb6d6158eebd793b'),
(58, 'kj', 'kj', 'kj', 'kj@gmail.com', '771f01104d905386a134a676167edccc'),
(59, 'kh', 'kh', 'kh', 'kh@gmail.com', 'fa46ec0b4924e8c2194a53ef61b94039'),
(60, 'jn', 'jn', 'jn', 'jn@gmail.com', '17cedeccc3a6555b9a5826e4d726eae3'),
(61, 'jk', 'jk', 'jk', 'jk@gmail.com', '051a9911de7b5bbc610b76f4eda834a0'),
(62, 'nm', 'nm', 'nm', 'nm@gmail.com', '93122a9e4abcba124d5a7d4beaba3f89'),
(63, 'nh', 'nh', 'nh', 'nh@gmail.com', '86e41e046990daf7e850f49eb2d5a64d'),
(64, 'ni', 'ni', 'ni', 'ni@gmail.com', 'e6c151d449e1db05b1ffb5ad5ec656cf'),
(65, 'nj', 'nj', 'nj', 'nj@gmail.com', '36b1c5be249ad6a533dcfa9654e73396'),
(66, 'nk', 'nk', 'nk', 'nk@gmail.com', '7220d65820839700b6c9ae74f87b48e0'),
(67, 'km', 'km', 'km', 'km@gmail.com', '9b05de73d43f8c4ec1110c6bcc5312bc'),
(68, 'mn', 'mn', 'mn', 'mn@gmail.com', '412566367c67448b599d1b7666f8ccfc'),
(69, 'ol', 'ol', 'ol', 'ol@gmail.com', '9d5da4f31eddc5eea1c1222da1d7ff12'),
(70, 'muh anugrahh', '737203310704001', 'nugee', 'nugee@gmail.com', 'b46e63e39eb2ad93369b4584995d6172'),
(71, 'fm', '834884', 'fm', 'fm@gmail.com', '0ab34ca97d9946591bf89817789cb5de'),
(72, 'ml', 'ml', 'ml', 'ml@gmail.com', '9830e1f81f623b33106acc186b93374e'),
(73, 'mb', 'mb', 'mb', 'mb@gmail.com', 'a9ddcf51419881bdee445181e32ede58'),
(74, 'lp', 'lp', 'lp', 'lp@gmail.com', '351325a660b25474456af5c9a5606c4e'),
(75, 'lpp', 'lpp', 'lpp', 'lpp@gmail.com', 'd4cbf60909942c7e9410233637f061a6'),
(76, 'lj', 'lj', 'lj', 'lj@gmail.com', 'a25ce144a2d07d0dc3319bf4d9033ccd'),
(77, 'ku', 'ku', 'ku', 'ku@gmail.com', '19e2adc1d3d62258a2e756cc95311b79'),
(78, 'ky', 'ky', 'ky', 'ky@gmail.com', '9e854e5865924fe3d61fe89d56220808'),
(79, 'pl', 'pl', 'pl', 'pl@gmail.com', '288404204e3d452229308317344a285d'),
(80, 'iu', 'iu', 'iu', 'iu@gmail.com', '9a281eea0823964dfb2915823c248417'),
(81, 'llm', 'llm', 'llm', 'llm@gmail.com', 'dae1be85dab3650eb56b87c4e3390387'),
(82, 'firman saputraaa', '89898', 'fs', 'fs@gmail.com', 'bc7b36fe4d2924e49800d9b3dc4a325c'),
(83, 'muhammad anugrah', '9879', 'nuge', 'muhmmdanugrahh31@gmail.com', '202cb962ac59075b964b07152d234b70'),
(84, 'nugee', '7989', 'ng', 'ng@gmail.com', 'e034fb6b66aacc1d48f445ddfb08da98'),
(85, 'fadelhsayim', '123', 'fd', 'fd@gmail.com', '36eba1e1e343279857ea7f69a597324e'),
(86, 'diki', 'lb', 'lb', 'lb@gmail.com', '26403ec6d537fa31f63e294b44831734'),
(87, 'ritnes', '80', 'rt', 'rt@gmail.com', '822050d9ae3c47f54bee71b85fce1487'),
(88, 'kmm', 'kmm', 'kmm', 'kmm@gmail.com', '9332256b50468e6c9c462f45f52600e4'),
(89, 'nii', 'nii', 'nii', 'nii@gmail.com', '428c5fcf495396df04a459e317b70ca2'),
(90, 'lh', 'lh', 'lh', 'lh@gmail.com', '8ecc6960abbf70f7a5a70d9bfaae585c'),
(91, 'kg', 'kg', 'kg', 'kg@gmail.com', 'ebe86682666f2ab3da0843ed3097e4b3'),
(92, 'kv', 'kv', 'kv', 'kv@gmail.com', '82d09147453d572bc287f74aad062cfa'),
(93, 'gg', 'gg', 'gg', 'gg@gmail.com', '73c18c59a39b18382081ec00bb456d43'),
(94, 'kb', 'kb', 'kb', 'kb@gmail.com', 'ba34ea40525a4379add785228e37fe86'),
(95, 'kc', 'kc', 'kc', 'kc@gmail.com', '190a4568b24548e0dc8592f61f0a8cd2'),
(96, 'kkl', 'kkl', 'kkl', 'kkl@gmail.com', 'bbcaf69f03af48b8eba44eac0f536af7'),
(97, 'jh', 'jh', 'jh', 'jh@gmail.com', '373633ec8af28e5afaf6e5f4fd87469b'),
(98, 'ff', 'ff', 'ff', 'ff@gmail.com', '633de4b0c14ca52ea2432a3c8a5c4c31'),
(99, 'disky fahrul rifaih', '12931094190', 'dsk', 'dsk@gmail.com', '6398a5d89dcecbbcb7ae7e1a7f5bf809'),
(100, 'tias s', '121', 'tst', 'tst@gmail.com', '9301c2a72c0f099d0313099f1cd54799');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`prodi`);

--
-- Indeks untuk tabel `counterr`
--
ALTER TABLE `counterr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jalurpendaftaran`
--
ALTER TABLE `jalurpendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `counterr`
--
ALTER TABLE `counterr`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jalurpendaftaran`
--
ALTER TABLE `jalurpendaftaran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
