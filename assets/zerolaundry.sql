-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2022 pada 04.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zerolaundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tlp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama_member`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(28, 'Thomas', 'Gunung Badag', 'Perempuan', '098562736712'),
(31, 'Aceng', 'Munjul', 'Laki-Laki', '098562736712'),
(32, 'Asep', 'Munjul', 'Laki-Laki', '098562736712'),
(33, 'Ilham God', 'Munjul', 'Perempuan', '098562736712'),
(41, 'Nanang', 'Bogor', 'Laki-Laki', '089655189349'),
(42, 'Baba', 'Bandung', 'Perempuan', '08135013'),
(43, 'Bilek', 'Padang', 'Perempuan', '012704012'),
(44, 'Mamank', 'Bekasi', 'Perempuan', '018278041'),
(45, 'Katak Bizher', 'Jakarta', 'Perempuan', '01973412'),
(46, 'Gusti', 'Bandung', 'Laki-Laki', '01787841532'),
(47, 'Rehan Wangsaff', 'Bogor', 'Laki-Laki', '55646563733'),
(49, 'GON', 'Bandung', 'Laki-Laki', '934619364653'),
(50, 'Raja Satir', 'Medan', 'Perempuan', '1023748107'),
(51, 'Udin', 'Bandung', 'Laki-Laki', '912849123'),
(52, 'Xie njie', 'China', 'Perempuan', '0172401241'),
(53, 'Excalibur', 'Jelekong', 'Perempuan', '01972491024'),
(54, 'Kenneth', 'Bandung', 'Laki-Laki', '0753130857342'),
(55, 'Windi', 'Bekasi', 'Perempuan', '49818346961'),
(56, 'Emily', 'Bekasi', 'Perempuan', '918634672924'),
(57, 'Paul', 'Bandung', 'Laki-Laki', '9126439233'),
(58, 'Mark Zukerberg', 'Bandung', 'Laki-Laki', '23768343784'),
(59, 'Jeff Boz', 'Bogor', 'Perempuan', '013707017453'),
(60, 'Bill Gates', 'Padang', 'Laki-Laki', '837948132'),
(61, 'Wicis Literali', 'Jaksel', 'Laki-Laki', '1928641892'),
(62, 'Dudung', 'Bandung', 'Perempuan', '12603580935'),
(63, 'Bilek', 'Cimahi', 'Laki-Laki', '107458728939'),
(64, 'GWEJ', 'Konoha', 'Perempuan', '02375798324'),
(65, 'Atha', 'Pasar Baru', 'Perempuan', '02394723823'),
(66, 'Megalodon', 'Megalodon', 'Perempuan', '08270819812'),
(67, 'Firman', 'Myoboku', 'Laki-Laki', '8713841784'),
(68, 'Gino', 'Bandung', 'Perempuan', '1956187705223'),
(71, 'Bangsz', 'Cimahi', 'Laki-Laki', '012783012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama_outlet`, `alamat`, `tlp`) VALUES
(1, 'Laundry Suka Maju Mundur', 'Manggahang', '089655758386'),
(2, 'Laundry Sari Mekar', 'Pasar Rabu', '098562736712'),
(3, 'Laundry Jaya Abadi', 'Bekasi', '098562736712'),
(4, 'Washingless Laundry', 'Jeroan Manggang', '098562736712'),
(50, 'Skypiea Laundry', 'Jakarta', '028378341814'),
(51, 'Laundry Sakti', 'AL-Torran', '0127481232');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('Kiloan','Satuan') NOT NULL,
  `nama_paket` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 3, 'Satuan', 'Cuci Lambat', 30000),
(2, 2, 'Kiloan', 'Cuci Cepat', 40000),
(4, 2, 'Kiloan', 'Nyantu', 30000),
(5, 1, 'Kiloan', 'Paket Menggokil', 99999),
(6, 3, 'Satuan', 'Sepatu Murah', 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `harga_awal` double NOT NULL,
  `tgl` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_outlet`, `kode_invoice`, `id_member`, `harga_awal`, `tgl`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `status`, `id_user`, `total_harga`) VALUES
(70, 3, 'INVC-5867750841', 71, 99999, '2022-04-09', '2022-04-10', 10000, 15, 'diambil', 16, 95000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `passconf` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('Admin','Owner','Kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `passconf`, `id_outlet`, `role`) VALUES
(3, 'Yosel', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 2, 'Admin'),
(6, 'windah', 'windah', 'd64bbae37412587ff6e42585a3d72dd2', '', 1, 'Kasir'),
(8, 'Rehan Wangsaff', 'kasir', 'c7911af3adbd12a035b289556d96470a', '', 3, 'Kasir'),
(9, 'Ayonima', 'owner', '72122ce96bfec66e2396d2e25225d70a', '', 4, 'Owner'),
(10, 'Wawan', 'wawan', '0a000f688d85de79e3761dec6816b2a5', '', 3, 'Admin'),
(13, 'Dimen', 'Dimen', '5a547e9905b4d1b415757153ccbe08c2', '', 2, 'Kasir'),
(14, 'Nofi', 'Nofi', '1f0c8a99be2ba901a453fa553f91f558', '', 3, 'Admin'),
(15, 'Agrean', 'Agrean', 'e7d80987e16d139b383a4b8460f17cba', '', 2, 'Kasir'),
(16, 'Yosua', 'yosel', '0a810b127cc9448c08522476682769ca', '', 2, 'Owner'),
(17, 'Gweh Bilek', 'bilek', 'd362802ec83a41fd229db3901707572d', '', 3, 'Admin'),
(18, 'Steve', 'steve', 'caf1a3dfb505ffed0d024130f58c5cfa', '321', 3, 'Admin'),
(19, 'Arata', 'kasir', 'c7911af3adbd12a035b289556d96470a', 'kasir', 2, 'Kasir'),
(20, 'Bilek', 'bilek', 'caf1a3dfb505ffed0d024130f58c5cfa', '321', 2, 'Owner'),
(21, 'Ojan', 'owner', 'caf1a3dfb505ffed0d024130f58c5cfa', '321', 2, 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relasi member dengan transaksi` (`id_member`),
  ADD KEY `relasi user dengan transaksi` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_paket` (`harga_awal`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `relasi member dengan transaksi` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi user dengan transaksi` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
