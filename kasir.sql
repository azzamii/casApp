-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 16.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kodebarang` varchar(20) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `hargabeli` int(30) NOT NULL,
  `hargajual` int(30) NOT NULL,
  `stok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kodebarang`, `namabarang`, `hargabeli`, `hargajual`, `stok`) VALUES
('B01', 'baju', 150000, 200000, 189),
('B02', 'mukena', 175000, 500000, 120),
('B03', 'sarung', 65000, 190000, 200),
('B04', 'kaos', 50000, 60000, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `kodebarang` varchar(20) NOT NULL,
  `jumlah_masuk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangmasuk`
--

INSERT INTO `barangmasuk` (`kodebarang`, `jumlah_masuk`) VALUES
('b01', 80),
('b01', 800),
('b01', 1000),
('B01', 6),
('B01', 6),
('B01', 6),
('B01', 50),
('B02', 4),
('B01', 60),
('B01', 55);

--
-- Trigger `barangmasuk`
--
DELIMITER $$
CREATE TRIGGER `stokmasuk` AFTER INSERT ON `barangmasuk` FOR EACH ROW BEGIN
UPDATE barang SET stok = stok + new.jumlah_masuk
WHERE kodebarang = new.kodebarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `nohp_supplier` varchar(20) NOT NULL,
  `alamat_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `nohp_supplier`, `alamat_supplier`) VALUES
('a001', 'alia', '08889', 'malang'),
('s002', 'koko', '086278', 'ubuda'),
('S123', 'lia', '0987654321', 'jkta'),
('S2385', 'Budia', '072629', 'malang'),
('S654', 'coki', '666', 'cirebon'),
('S879', 'andi', '098658', 'wakatobi'),
('S928', 'Ronaldo', '02623', 'madrid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD CONSTRAINT `barangmasuk_ibfk_1` FOREIGN KEY (`kodebarang`) REFERENCES `barang` (`kodebarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
