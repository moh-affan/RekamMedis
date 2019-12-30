-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2019 pada 08.09
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekammedis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling_gizi`
--

CREATE TABLE `konseling_gizi` (
  `ID_KONSELINGGIZI` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_GIZI` date DEFAULT NULL,
  `UMUR_GIZI` varchar(10) DEFAULT NULL,
  `DIAGNOSA_GIZI` varchar(10) DEFAULT NULL,
  `BB_GIZI` varchar(10) DEFAULT NULL,
  `TB_GIZI` varchar(10) DEFAULT NULL,
  `LAB_GIZI` varchar(10) DEFAULT NULL,
  `KLINIS_GIZI` varchar(10) DEFAULT NULL,
  `PANTANGAN_GIZI` varchar(10) DEFAULT NULL,
  `DIET_GIZI` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_akupuntur`
--

CREATE TABLE `poli_akupuntur` (
  `ID_POLIAKUPUNTUR` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_AKUPUNTUR` date DEFAULT NULL,
  `UMUR_AKUPUNTUR` varchar(10) DEFAULT NULL,
  `KELUHAN1_AKUPUNTUR` varchar(20) DEFAULT NULL,
  `KELUHAN2_AKUPUNTUR` varchar(20) DEFAULT NULL,
  `DIAGMEDIS_AKUPUNTUR` varchar(20) DEFAULT NULL,
  `DIAGNOSA_AKUPUNTUR` varchar(20) DEFAULT NULL,
  `TINDAKAN_AKUPUNTUR` varchar(20) DEFAULT NULL,
  `KONSELING_AKUPUNTUR` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_gigi`
--

CREATE TABLE `poli_gigi` (
  `ID_POLIGIGI` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_GIGI` date DEFAULT NULL,
  `UMUR_GIGI` varchar(10) DEFAULT NULL,
  `ANAMNESA_GIGI` varchar(20) DEFAULT NULL,
  `TINDAKAN_GIGI` varchar(20) DEFAULT NULL,
  `PENGOBATAN_GIGI` varchar(20) DEFAULT NULL,
  `DIAGNOSA_GIGI` varchar(10) DEFAULT NULL,
  `KODEICX_GIGI` varchar(10) DEFAULT NULL,
  `JENISKASUS_GIGI` varchar(10) DEFAULT NULL,
  `KONSELING_GIGI` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli_gigi`
--

INSERT INTO `poli_gigi` (`ID_POLIGIGI`, `ID_PASIEN`, `TANGGAL_GIGI`, `UMUR_GIGI`, `ANAMNESA_GIGI`, `TINDAKAN_GIGI`, `PENGOBATAN_GIGI`, `DIAGNOSA_GIGI`, `KODEICX_GIGI`, `JENISKASUS_GIGI`, `KONSELING_GIGI`) VALUES
(1, 2, '2019-11-07', '21', 'sdasda', 'asdasda', 'asdada', 'adasdad', 'adsdas', 'dadasd', 'asdasda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_kia`
--

CREATE TABLE `poli_kia` (
  `ID_POLIKIA` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_KIA` date DEFAULT NULL,
  `JAM_KIA` varchar(10) DEFAULT NULL,
  `ANAMNESA_KIA` varchar(10) DEFAULT NULL,
  `DIAGNOSA_KIA` varchar(20) DEFAULT NULL,
  `KETERANGAN_KIA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_p2m`
--

CREATE TABLE `poli_p2m` (
  `ID_POLIP2M` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_P2M` date DEFAULT NULL,
  `UMUR_P2M` varchar(10) DEFAULT NULL,
  `PENYAKIT_P2M` varchar(20) DEFAULT NULL,
  `LINGKUNGAN_P2M` varchar(20) DEFAULT NULL,
  `SARAN_P2M` varchar(20) DEFAULT NULL,
  `TINDANKAN_P2M` varchar(20) DEFAULT NULL,
  `KETERANGAN_P2M` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_umum`
--

CREATE TABLE `poli_umum` (
  `ID_POLIUMUM` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_UMUM` date DEFAULT NULL,
  `UMUR_UMUM` varchar(10) DEFAULT NULL,
  `ANAMNESA_UMUM` varchar(20) DEFAULT NULL,
  `PFISIK_UMUM` varchar(20) DEFAULT NULL,
  `DIAGNOSA_UMUM` varchar(20) DEFAULT NULL,
  `TINDAKAN_UMUM` varchar(20) DEFAULT NULL,
  `KODEICX_UMUM` varchar(10) DEFAULT NULL,
  `JENISKASUS_UMUM` varchar(20) DEFAULT NULL,
  `KONSELING_UMUM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli_umum`
--

INSERT INTO `poli_umum` (`ID_POLIUMUM`, `ID_PASIEN`, `TANGGAL_UMUM`, `UMUR_UMUM`, `ANAMNESA_UMUM`, `PFISIK_UMUM`, `DIAGNOSA_UMUM`, `TINDAKAN_UMUM`, `KODEICX_UMUM`, `JENISKASUS_UMUM`, `KONSELING_UMUM`) VALUES
(1, 1, '2019-10-11', '22', 'dsda', 'sdads', 'sdada', 'sdad', 'sdsada', 'sdfdfg', 'fgdfgdgd'),
(2, 2, '2019-10-24', '22', 'dkahdas', 'dadad', 'fsfsfd', 'fgfgdfdfsdfsfe', 'dsffsf', 'sfrf', 'fsdfsfsef'),
(4, 1, '2019-11-07', '23', 'sasdasa', 'fffssaddsa', 'asdsad', 'asdsada', 'dassaas', 'dsassda', 'dsaasd'),
(5, 2, '2019-11-07', '22', 'dsasds', 'sadsada', 'dsasd', 'dssasadsa', 'sadsadsa', 'dsasads', 'sdsaasd'),
(6, 15, '2019-11-11', '23', 'perut dan dada nyeri', '-', '-', '-', '-', '-', '-'),
(7, 23, '2019-11-11', '23', 'pusing', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanitasi_klinis`
--

CREATE TABLE `sanitasi_klinis` (
  `ID_SANITASIKLINIS` int(11) NOT NULL,
  `ID_PASIEN` int(11) DEFAULT NULL,
  `TANGGAL_KLINIS` date DEFAULT NULL,
  `UMUR_KLINIS` varchar(10) DEFAULT NULL,
  `PENYAKIT_KLINIS` varchar(10) DEFAULT NULL,
  `MASALAHLINGKUNGAN_KLINIS` varchar(20) DEFAULT NULL,
  `SARAN_KLINIS` varchar(10) DEFAULT NULL,
  `TINDAKKAN_KLINIS` varchar(10) DEFAULT NULL,
  `KETERANGAN_KLINIS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `ID_PASIEN` int(11) NOT NULL,
  `NAMA_PASIEN` varchar(20) DEFAULT NULL,
  `NIK` varchar(30) DEFAULT NULL,
  `ALAMAT_PASIEN` varchar(50) DEFAULT NULL,
  `AGAMA` varchar(20) DEFAULT NULL,
  `PEKERJAAN` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR_PASIEN` date DEFAULT NULL,
  `METODE_PEMBAYARAN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`ID_PASIEN`, `NAMA_PASIEN`, `NIK`, `ALAMAT_PASIEN`, `AGAMA`, `PEKERJAAN`, `JENIS_KELAMIN`, `TANGGAL_LAHIR_PASIEN`, `METODE_PEMBAYARAN`) VALUES
(1, 'asman', '098863374664', 'Sampang', 'ISLAM', 'wiraswasta', 'Laki-laki', '1996-09-14', 'tunai'),
(2, 'robit', '032923813131', 'jember', 'islam', 'wiraswasta', 'Laki-laki', '2019-09-21', 'tunai'),
(4, 'verol', '08098775563432', 'sumenep', 'islam', 'wiraswasta', 'Laki-laki', '2019-10-26', 'tunai'),
(5, 'istiana', '942390482347234234', 'arusbaya', 'islam', 'mahasiswa', 'Perempuan', '1999-08-13', 'tunai'),
(6, 'asman', '098863374664', 'socah', 'ISLAM', 'wiraswasta', 'Perempuan', '1996-09-14', 'tunai'),
(7, 'asman', '098863374664', 'socah', 'ISLAM', 'wiraswasta', 'Perempuan', '1996-09-14', 'tunai'),
(8, 'robit', '032923813131', 'jember', 'islam', 'wiraswasta', 'Perempuan', '2019-09-21', 'tunai'),
(9, 'asman', '098863374664', 'socah', 'ISLAM', 'wiraswasta', 'Perempuan', '1996-09-14', 'tunai'),
(10, 'anasssss', '366755653', 'sumenep', 'islam', 'mahasiswa', 'Laki-laki', '2019-10-18', 'tunai'),
(11, 'Bagus', '98908383230830928', 'Kamal', 'Islam', 'wiraswasta', 'Laki-laki', '1992-09-30', 'tunai'),
(12, 'yaqin', '093173493240', 'sumenep', 'islam', 'lsald', 'Laki-laki', '2019-10-11', 'tunai'),
(13, '', 's', '', '', '', 'Pilih Jenis Kelamin', '0000-00-00', ''),
(14, 'dadasd', '', '', '', '', 'Pilih Jenis Kelamin', '0000-00-00', ''),
(15, 'khozaimi', '03293273284234023', 'jaakdaslda', 'asdasda', 'adasdas', 'Laki-laki', '2019-11-22', 'TUNAI'),
(16, 'Qoddes', '029312093123', 'Pamekasan Kota', 'islam', 'mahasiswa', 'Laki-laki', '1995-07-18', 'BPJS'),
(17, 'saksalsa', 'asalskla', 'jsasja', 'Islam', 'sjaslja', 'Laki-laki', '2019-11-08', 'ASKES'),
(18, 'ahasas', 'ashdaskd', 'sahdasd', 'Islam', 'sadkasdas', 'Laki-laki', '2019-11-09', 'TUNAI'),
(19, 'nasdasmda', 'asdnasdk', 'sadmnasd', 'Kristen', 'sdasndasdk', 'Laki-laki', '2019-11-08', 'ASKES'),
(20, 'asasas', 'asalskla', 'dasdas', 'Islam', 'asasa', 'Laki-laki', '2019-11-14', 'BPJS'),
(21, 'sdasdas', 'sdsadasd', 'sdasdasd', 'Islam', 'sdasdasd', 'Pilih Jenis Kelamin', '2019-11-01', 'ASKES'),
(22, 'ewewe', '4343434', 'ewrewr', 'Islam', 'rwerwer', 'Laki-laki', '2019-11-01', 'JPS'),
(23, 'dfsfsdf', 'sdfsfsd', 'fsdfsdf', 'Kristen', 'dsfsdfsdf', 'Laki-laki', '2019-11-09', 'JPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_USER` varchar(10) NOT NULL,
  `USERNAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `LEVEL` varchar(10) DEFAULT NULL,
  `NAMA_LENGKAP` varchar(50) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `NO_TLP` varchar(20) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `USERNAME`, `PASSWORD`, `LEVEL`, `NAMA_LENGKAP`, `STATUS`, `TANGGAL_LAHIR`, `NO_TLP`, `ALAMAT`) VALUES
('01', 'admin', 'admin', 'admin', 'yaqin', 'pegawai', '1995-03-23', '082337754194', 'Sumenep'),
('02', 'dokter', 'dokter', 'dokter', 'sarif hidayatullahh', 'dokter', '1924-01-24', '087332993823', 'alamat'),
('03', 'yaqin', 'yaqin', 'dokter', 'ainul yaqin', 'dokter', '1995-03-23', '0878888921212', 'Sumenep'),
('04', 'ifah', 'ifah', 'dokter', 'RA. Zharifah Hambami', 'dokter', '1998-11-09', '081335190541', 'Sumenep');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konseling_gizi`
--
ALTER TABLE `konseling_gizi`
  ADD PRIMARY KEY (`ID_KONSELINGGIZI`),
  ADD KEY `FK_KONSELIN_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `poli_akupuntur`
--
ALTER TABLE `poli_akupuntur`
  ADD PRIMARY KEY (`ID_POLIAKUPUNTUR`),
  ADD KEY `FK_POLI_AKU_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `poli_gigi`
--
ALTER TABLE `poli_gigi`
  ADD PRIMARY KEY (`ID_POLIGIGI`),
  ADD KEY `FK_POLI_GIG_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `poli_kia`
--
ALTER TABLE `poli_kia`
  ADD PRIMARY KEY (`ID_POLIKIA`),
  ADD KEY `FK_POLI_KIA_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `poli_p2m`
--
ALTER TABLE `poli_p2m`
  ADD PRIMARY KEY (`ID_POLIP2M`),
  ADD KEY `FK_POLI_P2M_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `poli_umum`
--
ALTER TABLE `poli_umum`
  ADD PRIMARY KEY (`ID_POLIUMUM`),
  ADD KEY `FK_POLI_UMU_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `sanitasi_klinis`
--
ALTER TABLE `sanitasi_klinis`
  ADD PRIMARY KEY (`ID_SANITASIKLINIS`),
  ADD KEY `FK_SANITASI_RELATIONS_TB_PASIE` (`ID_PASIEN`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`ID_PASIEN`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konseling_gizi`
--
ALTER TABLE `konseling_gizi`
  MODIFY `ID_KONSELINGGIZI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poli_akupuntur`
--
ALTER TABLE `poli_akupuntur`
  MODIFY `ID_POLIAKUPUNTUR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poli_gigi`
--
ALTER TABLE `poli_gigi`
  MODIFY `ID_POLIGIGI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `poli_kia`
--
ALTER TABLE `poli_kia`
  MODIFY `ID_POLIKIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poli_p2m`
--
ALTER TABLE `poli_p2m`
  MODIFY `ID_POLIP2M` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poli_umum`
--
ALTER TABLE `poli_umum`
  MODIFY `ID_POLIUMUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sanitasi_klinis`
--
ALTER TABLE `sanitasi_klinis`
  MODIFY `ID_SANITASIKLINIS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `ID_PASIEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konseling_gizi`
--
ALTER TABLE `konseling_gizi`
  ADD CONSTRAINT `FK_KONSELIN_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `poli_akupuntur`
--
ALTER TABLE `poli_akupuntur`
  ADD CONSTRAINT `FK_POLI_AKU_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `poli_gigi`
--
ALTER TABLE `poli_gigi`
  ADD CONSTRAINT `FK_POLI_GIG_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `poli_kia`
--
ALTER TABLE `poli_kia`
  ADD CONSTRAINT `FK_POLI_KIA_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `poli_p2m`
--
ALTER TABLE `poli_p2m`
  ADD CONSTRAINT `FK_POLI_P2M_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `poli_umum`
--
ALTER TABLE `poli_umum`
  ADD CONSTRAINT `FK_POLI_UMU_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);

--
-- Ketidakleluasaan untuk tabel `sanitasi_klinis`
--
ALTER TABLE `sanitasi_klinis`
  ADD CONSTRAINT `FK_SANITASI_RELATIONS_TB_PASIE` FOREIGN KEY (`ID_PASIEN`) REFERENCES `tb_pasien` (`ID_PASIEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
