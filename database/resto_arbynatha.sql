-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 11.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto_arbynatha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah_menu` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori_menu` int(11) NOT NULL,
  `nama_kategori_menu` varchar(30) NOT NULL,
  `photo_kategori_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori_menu`, `nama_kategori_menu`, `photo_kategori_menu`) VALUES
(1, 'Breakfast', 'breakfast.jpg'),
(2, 'Lunch', 'lunch.jpg'),
(3, 'Snack', 'snack1.jpg'),
(4, 'Dessert', 'penutup.jpg'),
(5, 'Drink', 'drink.jpg'),
(6, 'Lainnya', 'nasi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_kategori_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `deskripsi_menu` varchar(255) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `status_menu` enum('tersedia','habis') NOT NULL,
  `photo_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kategori_menu`, `nama_menu`, `deskripsi_menu`, `harga_menu`, `status_menu`, `photo_menu`) VALUES
(1, 1, 'Nasi Goreng', 'Menu sarapan Nasi goreng', 25000, 'tersedia', 'nasi goreng.jpg'),
(2, 1, 'Bubur Ayam', 'Menu Sarapan Bubur Ayam', 20000, 'tersedia', 'bubur ayam.jpg'),
(3, 1, 'Soto Betawi', 'Menu sarapan Soto khas betawi', 25000, 'tersedia', 'soto betawi.png'),
(4, 1, 'Lontong Sayur', 'Menu sarapan Lontong Sayur', 25000, 'tersedia', 'lontong sayur.jpg'),
(5, 2, 'Salad Ayam panggang', 'Menu makan siang Salad Ayam panggang', 35000, 'tersedia', 'salad ayam panggang.jpg'),
(6, 2, 'Ayam Goreng', 'Menu makan siang Ayam goreng', 30000, 'tersedia', 'ayam goreng.jpg'),
(7, 2, 'Bakmi goreng', 'Menu makan siang dengan Bakmi goreng', 25000, 'tersedia', 'bakmi goreng.jpeg'),
(8, 2, 'Ikan Nila goreng', 'Menu makan siang Ikan Nila goreng', 35000, 'tersedia', 'ikan nila goreng.jpg'),
(9, 3, 'Tahu krispi', 'Menu snack', 15000, 'tersedia', 'tahu krispi.jpg'),
(10, 3, 'Singkong Goreng', 'Menu snack Singkong goreng', 15000, 'tersedia', 'singkong goreng.jpg'),
(11, 3, 'Chicken roll', 'Menu snack Chicken roll', 15000, 'tersedia', 'chicken roll.jpg'),
(12, 3, 'Pisang goreng', 'Menu snack pisang goreng', 15000, 'tersedia', 'pisang goreng.jpg'),
(13, 4, 'puding coklat karamel', 'menu dessert puding coklat karamel', 25000, 'tersedia', 'puding coklat karamel.jpg'),
(14, 4, 'Waffle Belgia', 'menu snack waffle belgia', 25000, 'tersedia', 'waffle belgia.jpeg'),
(15, 4, 'Pancake', 'menu snack pancake', 25000, 'tersedia', 'pancake.jpg'),
(16, 5, 'Thai tea', 'minuman thai tea', 15000, 'tersedia', 'thai tea.jpg'),
(17, 5, 'Es teh', 'minuman es teh', 15000, 'tersedia', 'esteh.jpg'),
(18, 5, 'Es jeruk', 'minuman es jeruk', 15000, 'tersedia', 'esjeruk.jpg'),
(19, 5, 'Es coklat', 'minuman es coklat', 15000, 'tersedia', 'escoklat.jpg'),
(20, 6, 'Nasi', 'menu tambahan', 5000, 'tersedia', 'nasi.jpg'),
(21, 6, 'Lontong', 'menu tambahan', 7000, 'tersedia', 'lontong.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id_role_user` int(11) NOT NULL,
  `nama_role_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id_role_user`, `nama_role_user`) VALUES
(1, 'admin'),
(2, 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `waktu_transaksi` datetime NOT NULL,
  `nomor_transaksi` varchar(30) NOT NULL,
  `grand_total_harga` int(11) NOT NULL DEFAULT 0,
  `nama_pembeli` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_transaksi` enum('selesai','onproses') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `waktu_transaksi`, `nomor_transaksi`, `grand_total_harga`, `nama_pembeli`, `id_user`, `status_transaksi`) VALUES
(1, '2023-10-27 02:56:26', '1', 75000, 'arbynatha', 2, 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_role_user`, `nama_user`, `username`, `password`, `photo_user`) VALUES
(1, 1, 'administartor aplikasi', 'admin', '$2y$10$k1kCo0NQEMMH3kkYly0wyOdLiM2KCsLsKroKcMx6qgCMQHBlomzUW', 'ronaldo.jpg'),
(2, 2, 'arbynatha', 'kasir', '$2y$10$ueJOz92ITxk0fK2Y5MSgDOrq.6GIQxhc/oCyege0ZNxTPgMPh1mv2', 'download.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `transaksi` (`id_transaksi`),
  ADD KEY `barang` (`id_menu`);

--
-- Indeks untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kategori_menu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `kategori` (`id_kategori_menu`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_user` (`id_role_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `barang` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `kategori_menu` FOREIGN KEY (`id_kategori_menu`) REFERENCES `kategori_menu` (`id_kategori_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user` FOREIGN KEY (`id_role_user`) REFERENCES `role_user` (`id_role_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
