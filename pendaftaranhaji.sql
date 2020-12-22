-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2020 pada 15.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaranhaji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `tanggal`, `penulis`, `isi`) VALUES
(8, '278997963_tips-dan-cara-jitu-cari-perumahan-murah.jpg', 'We provide food for you, there are various variants ranging from light to heavy meals.', '22/02/2021', 'reza', 'Debat kedua Pilwalkot Makassar beberapa kali diwarnai aksi saling sindir di antara pasangan calon. Cawalkot Ramdhan (Danny) Pomanto menyinggung lawannya Munafri Arifuddin (Appi) terkait pembangunan perumahan yang membuat banjir, Danny pun diingatkan moder'),
(9, '1425000129_gambar-kopi-wallpaper-hd.jpg', 'Sindir Appi soal Perumahan Bikin Banjir, Danny Diingatkan Tak Serang Pribadi', '22/22/2222', 'andre', '\"Deng Ical, yang ditanya itu bagaimana pelanggaran, tapi tadi yang dijawab lain. Artinya bagaimana pelanggaran-pelanggaran ini harus ditangani, bagaimana kebijakan seorang wali kota terhadap pelanggaran-pelanggaran ini,\" kata Danny mengawali paparannya.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomervalidasi` varchar(255) NOT NULL,
  `nomerktp` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keluarahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `golongandarah` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `xxkk` varchar(255) NOT NULL,
  `xxakte` varchar(255) NOT NULL,
  `xxfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nomervalidasi`, `nomerktp`, `ttl`, `namaayah`, `umur`, `jeniskelamin`, `alamat`, `keluarahan`, `kecamatan`, `kodepos`, `kota`, `nohp`, `pekerjaan`, `status`, `golongandarah`, `tinggi`, `berat`, `xxkk`, `xxakte`, `xxfoto`) VALUES
(3, 'agus yogandi', '000000011', '001100110011', 'bekasi, 17- 08 - 1998', 'ayah', '22', 'Laki - Laki', 'kp babakan', 'mustikasari', 'mustikasjaya', '17157', 'Kota Bekasi', '123123123123', 'mahasiswa', 'belum menikah', 'o', '173', '75', '1849694195_qr v1.0.1.png', '474994493_qr v1.0.1.png', '1783205960_qr v1.0.1.png'),
(5, 'M Adhi Maulana', '0101010101', '0987654321', 'jember 23-02-1990', 'riyanto mahmud', '30', 'Laki - Laki', 'kp. coba', 'coba coba', 'cobain deh', '123456', 'Jakarta', '1234567890', 'tukang pukul', 'duda', 'golongan karya', 'setinggi gaya lu', 'seberat beban hidup', '1037327497_wallhaven-lmkgjq.jpg', '177350986_621a16e1-sunset-lombok.jpg', '1421687957_qr v1.0.1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
