-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 16.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baby_needs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'aldo', 'aldo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi1` text NOT NULL,
  `deskripsi2` text NOT NULL,
  `deskripsi3` text NOT NULL,
  `deskripsi4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori`, `nama`, `umur`, `harga`, `foto`, `stok`, `tanggal_upload`, `deskripsi1`, `deskripsi2`, `deskripsi3`, `deskripsi4`) VALUES
(4, 'carseat', 'wpwoij', '3', 100002, '2.PNG', 10, '2022-06-14 13:12:11', 'q', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'k.'),
(5, 'stroller', 'Stroller Baby Does BabyDoes Hola CH311', '1.5', 100000, '3.PNG', 10, '2022-06-14 13:12:17', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.'),
(6, 'stroller', 'Stroller Baby Does BabyDoes Hola CH311', '2', 100000, '4.PNG', 10, '2022-06-14 13:12:23', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.', 'Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH. Stroller Baby Does BabyDoes Hola CH311 merupakan stroller yang dapat digunakan dari bayi baru lahir hingga berat anak maksimum 20kg dan pada tipe Hola CH ini handle/gagang tidak bisa bolak balik berbeda dengan tipe Hola R CH.'),
(10, 'carseat', 'Stroller Baby Does BabyDoes Hola CH311', '3', 100000, 'carseat4.jpg', 10, '2022-06-29 13:55:27', ' cgdsvcgdsvcsd', ' cgdsvcgdsvcsd', ' cgdsvcgdsvcsd', ' cgdsvcgdsvcsd'),
(11, 'babybox', 'Stroller Baby Does BabyDoes Hola CH311', '4', 100000, 'baby_box4.jpg', 10, '2022-06-29 13:56:55', 'shbcduscu', '', '', ''),
(12, 'babybathub', 'Stroller Baby Does BabyDoes Hola CH311', '1', 100000, 'baby_bathtub4.jpg', 10, '2022-06-29 13:59:37', 'nuisdfuidsuifhsu', 'dfvhdsbhubcvs', 'sqvwywdwqdw', 'sfjsdcghds hc hjds'),
(13, 'stroller', 'Stroller Baby Does BabyDoes Hola CH311', '0.5', 100000, 'baby_box4.jpg', 10, '2022-06-29 14:00:32', 'wqewqewq', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `metode` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `ktp` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl_diambil` date DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_produk`, `tipe`, `amount`, `metode`, `nama`, `alamat`, `nomor`, `email`, `note`, `ktp`, `status`, `tgl_diambil`, `tgl_dikembalikan`) VALUES
(21, 1, 5, '4 Minggu', 250000, 'Bayar di Kantor', 'aldo', 'banyu urip, banyu urip, sawahan, Surabaya, 60254', '08124566', 'aldopradana3@gmail.com', 'bagus', 'skuterin.png', 'Silahkan Ambil Di Kantor', '2022-06-29', '2022-07-28'),
(22, 2, 5, '1 Minggu', 100000, 'Bank Transfer', 'aldo', 'kapas madya, simokerto, pogot, Sidoarjo, 60755', '08124566', 'bellananda321@gmail.com', 'bagus', 'dewzsjo-0581130f-c95f-40d2-a1dd-618c9572670a.png', 'Menunggu Pembayaran', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `nohp`, `email`, `password`) VALUES
(1, 'aldo p', 'Banyu Urip', '081234', 'aldopradana3@gmail.com', 'aldo123'),
(2, 'ALDO PRADANA ARIANDO', 'Kapas Madya', '0986', 'aldopradana79@yahoo.com', 'aldo123'),
(5, 'josep', 'jagir', '0987754', 'josep@gmail.com', 'josep123'),
(6, 'joespyanto', 'klitih', '081234', 'josepyanto@yahoo.com', 'josepyanto');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
