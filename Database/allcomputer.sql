-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 14.11
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allcomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `diskon`, `stok`, `gambar`) VALUES
(1, 'MSI', 'MSI GH-CI90', 'Laptop', 8500000, 9000000, 5, 'LAPTOP.jpg'),
(2, 'KOMPUTER', 'MOBO ASUS E325 (FULL AKSESORIS)', 'KOMPUTER', 4500000, 5000000, 48, 'KOMPUTER.jpg'),
(3, 'RAM ', 'KINGSTONE', 'SparePart Komputer ', 350000, 400000, 5, 'RAM.jpg'),
(4, 'VGA ', 'RTX 2080 TI', 'SparePart Komputer ', 25500000, 27687364, 10, 'VGA.jpg'),
(6, 'Keyboard Acer', 'Kayboard Acer E324F', 'SparePart Laptop', 240000, 340000, 18, 'keyboard.jpg'),
(50, 'ROG', 'ROG G55PGO', 'laptop', 34000000, 45000000, 13, 'rog.jpg'),
(69, 'ROG', 'ROG G55PGO', 'sparepart laptop', 34000000, 45000000, 10, 'WhatsApp_Image_2020-12-22_at_14_41_22.jpeg'),
(72, 'ROG', 'ROG G55PGO', 'komputer', 34000000, 45000000, 10, 'WhatsApp_Image_2020-12-22_at_14_41_223.jpeg'),
(73, 'ORG', 'cscdsv', 'komputer', 2423532, 34353, 231, ''),
(74, '', '', 'komputer', 0, 0, 0, ''),
(75, '', '', 'komputer', 0, 0, 0, ''),
(76, 'ROG', 'ROG G55PGO', 'komputer', 34000000, 45000000, 10, ''),
(77, '', '', 'komputer', 0, 0, 0, ''),
(78, '', '', 'komputer', 0, 0, 0, ''),
(79, '', '', 'komputer', 0, 0, 0, ''),
(80, '', '', 'komputer', 0, 0, 0, ''),
(81, '', '', 'komputer', 0, 0, 0, ''),
(82, '', '', 'komputer', 0, 0, 0, ''),
(83, '', '', 'komputer', 0, 0, 0, ''),
(84, '', '', 'komputer', 0, 0, 0, ''),
(85, '', '', 'komputer', 0, 0, 0, ''),
(86, '', '', 'komputer', 0, 0, 0, ''),
(87, '', '', 'komputer', 0, 0, 0, ''),
(88, '', '', 'komputer', 0, 0, 0, ''),
(89, '', '', 'komputer', 0, 0, 0, ''),
(90, '', '', 'komputer', 0, 0, 0, ''),
(91, '', '', 'komputer', 0, 0, 0, ''),
(92, '', '', 'komputer', 0, 0, 0, ''),
(93, '', '', 'komputer', 0, 0, 0, ''),
(94, '', '', 'komputer', 0, 0, 0, ''),
(95, '', '', 'komputer', 0, 0, 0, ''),
(96, '', '', 'komputer', 0, 0, 0, ''),
(97, 'ROG', 'ROG G55PGO', 'komputer', 34000000, 45000000, 20, ''),
(98, '', '', 'komputer', 0, 0, 0, ''),
(99, '', '', 'komputer', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_servis`
--

CREATE TABLE `tb_servis` (
  `jenis_elektronik` varchar(100) NOT NULL,
  `riwayat_rusak` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'fiqrian', 'fiqri', 'fiqri', 2),
(3, 'LORD', 'lord', 'lord', 2),
(4, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(5, 'putra', 'putra', 'putra', 2),
(6, 'akun', 'akun', 'akun', 2),
(7, 'nama', 'nama', 'nama', 2),
(8, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(9, 'fiqrian', 'fiqrian', 'asu', 2),
(10, 'fiqrian', 'ggg', 'ggg', 2),
(11, 'lorem', 'lorem', 'lorem', 2),
(12, 'daftar', 'daftar', 'daftar', 2),
(13, 'anda', 'anda', 'anda', 2),
(14, 'fiqrian', 'admin', 'admin', 2),
(15, 'xxx', 'xxx', 'xxx', 2),
(16, 'XXXXX', 'xxx', 'xxx', 2),
(17, 'sudah', 'sudah', 'sudah', 2),
(18, 'XXXXX', 'XXXXX', 'XXXX', 2),
(19, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(20, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(21, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(22, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(23, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(24, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(25, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(26, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(27, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(28, 'kaca', 'kaca', 'kaca', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
