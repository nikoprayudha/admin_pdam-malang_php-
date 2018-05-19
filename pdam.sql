-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2017 pada 18.49
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` varchar(20) NOT NULL,
  `id_pemetaan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `status_kerusakan` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `id_pemetaan`, `status`, `status_kerusakan`, `keterangan`, `id_pegawai`) VALUES
('RSK2', 'B03', 'Tersedia', 'Sedang', 'Sudah saya perbaiki boskuhh , gampang kok , semua senang', 'A03'),
('RSK3', 'B03', 'Tersedia', 'Parah', 'Udah saya perbaiki , cuma kebocoran biasah kok , jangan sedih', 'A04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `telepon`, `username`, `password`, `profesi`) VALUES
('A01', 'Johan Diaz BG', 'laki-laki', 'Malang', '1997-06-14', 'Jl.Sawojajar Malang', '09845335363', 'johan', 'johan', 'Administrator'),
('A02', 'Niko Ary Prayudha', 'laki-laki', 'Batu', '1997-11-07', 'Jl.Gondorejo , Kota Batu', '089970325520', 'niko', 'niko', 'Administrator'),
('A03', 'Sukron Mauludin', 'laki-laki', 'Malang', '2016-12-30', 'Jl.Pakisaji raya , Kab Malang', '085223355666', 'sukron', 'sukron', 'Teknisi'),
('A04', 'Alifandi Wiratama', 'laki-laki', 'Tulunganggung', '1997-12-15', 'Jl.Semanggi Barat , Mojolangu , Kota Malang', '083256789653', 'alifandi', 'alifandi', 'Teknisi'),
('A05', 'Farif Chrisandi', 'laki-laki', 'Malang', '1996-12-29', 'Jl.Bululawang , Kab Malang', '085223355666', 'farif', 'farif', 'Teknisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemetaan`
--

CREATE TABLE `pemetaan` (
  `id_pemetaan` varchar(20) NOT NULL,
  `id_wilayah` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `kode_pipa` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemetaan`
--

INSERT INTO `pemetaan` (`id_pemetaan`, `id_wilayah`, `lokasi`, `kode_pipa`, `status`, `alamat`) VALUES
('B01', '1', 'KEC KLOJEN', 'KCK0897', 'Tersedia', 'Jl.Surabaya - Jl.Celaket'),
('B02', '2', 'KEC LOWOKWARU', 'LWK0873', 'Tersedia', 'Jl.Cengger Ayam - Jl.Tlogomas '),
('B03', '3', 'KEC BLIMBING', 'BLB0875', 'Rusak', 'Jl.Kedungkandang - jl.hamid rusdi'),
('B04', '4', 'KEC SUKUN', 'SUK7640', 'Tersedia', 'Jl.Ciptomulyo - Jl.Candi '),
('B05', '5', 'KEC KEDUNGKANDANG', 'KDK6420', 'Rusak', 'Jl.Mayjen Sungkono - Jl.Cemoro Kandang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengatur`
--

CREATE TABLE `pengatur` (
  `id_pengatur` varchar(20) NOT NULL,
  `id_pemetaan` varchar(20) NOT NULL,
  `tandon` varchar(20) NOT NULL,
  `pintu_air` varchar(20) NOT NULL,
  `meter_air` int(3) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengatur`
--

INSERT INTO `pengatur` (`id_pengatur`, `id_pemetaan`, `tandon`, `pintu_air`, `meter_air`, `id_pegawai`) VALUES
('AB01', 'B01', 'SWJ1A', 'A', 40, 'A01'),
('AB02', 'B02', 'LWK2B', 'A', 40, 'A02'),
('AB03', 'B03', 'KDK3A', 'A', 40, 'A02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` varchar(20) NOT NULL,
  `kode_wilayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `kode_wilayah`) VALUES
('1', 'KLJ01234'),
('2', 'LWK0456'),
('3', 'BLB0789'),
('4', 'SKU9019'),
('5', 'KDK1100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`),
  ADD KEY `id_pemetaan` (`id_pemetaan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemetaan`
--
ALTER TABLE `pemetaan`
  ADD PRIMARY KEY (`id_pemetaan`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `pengatur`
--
ALTER TABLE `pengatur`
  ADD PRIMARY KEY (`id_pengatur`),
  ADD KEY `id_pemetaan` (`id_pemetaan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD CONSTRAINT `kerusakan_ibfk_1` FOREIGN KEY (`id_pemetaan`) REFERENCES `pemetaan` (`id_pemetaan`),
  ADD CONSTRAINT `kerusakan_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemetaan`
--
ALTER TABLE `pemetaan`
  ADD CONSTRAINT `pemetaan_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengatur`
--
ALTER TABLE `pengatur`
  ADD CONSTRAINT `pengatur_ibfk_1` FOREIGN KEY (`id_pemetaan`) REFERENCES `pemetaan` (`id_pemetaan`),
  ADD CONSTRAINT `pengatur_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
