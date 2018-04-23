-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2017 pada 03.47
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `obatherbal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(2, 'rieke', 'rieke', 'rieke'),
(3, 'merry', 'merry', 'merry'),
(4, 'kookie', 'kookie', 'kookie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_admin`) VALUES
(1, 'Obat Herbal Penyakit Luar', 0),
(2, 'Obat Herbal Penyakit Dalam', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `guna_obat` text NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` time NOT NULL,
  `foto` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`kd_obat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kd_obat`, `nama_obat`, `guna_obat`, `tanggal`, `pukul`, `foto`, `id_kategori`, `id_admin`) VALUES
(7, 'Daun Pacar Cina', 'Daun pacar cina dihasilkan dari pohon kecil yang bisa tumbuh hingga ketinggian 6 meter. Pacar cina banyak ditanam dengan sengaja di pekarangan rumah atau tumbuh liar di lahan-lahan yang mendapat cukup sinar matahari. Daunnya yang mempunyai bentuk bulat telur sungsang dan lonjong ini mempunyai sifat kimia berupa rasa pedas, manis, dan netral. Daun pacar cina mengandung garam-garam mineral, alkaloid, minyak atsiri, dan damar. Bagian daun, bunga, dan batang pada tanaman pacar cina (yang lebih sering bagian daunnya) bisa dioleh menjadi tanaman obat keluarga untuk menyembuhkan beberapa penyakit seperti luka memar, bisul, dan haid berlebihan. Bagian bunganya bisa untuk mengatasi perut kembung, batuk, pusing, dan sulit menelan.', '2017-07-21', '21:30:15', 'Daun-Pacar-Cina1.jpg', 1, 0),
(8, 'Daun Saga', 'Daun saga merupakan tanaman perdu yang mempunyai rasa manis. Bagian biji daun saga merupakan bagian yang benar-benar tidak boleh dikonsumsi karena mengandung zat beracun yang apabila tertelan sangat berisiko terhadap kematian. Tumbuhan daun saga banyak tumbuh liar di hutan. Pertumbuhannya optimal pada daerah dataran rendah hingga ketinggian 1000 meter dari permukaan laut. Pada bagian daunnya banyak terkandung senyawa saponin dan flavonoid. Daun saga berkhasiat untuk mengobati beberapa gangguan kesehatan seperti sariawan, batuk pada bayi, batuk kering, batuk berdahak, tenggorokan gatal, amandel, radang mata, radang tenggorokan, panas dalam, gangguan jantung, hipertensi, dan bronkitis. Daun saga juga diketahui mampu membantu membuat bayi tidur lebih nyenyak dan tidak rewel.', '2017-07-21', '21:32:05', 'Daun-Saga.jpg', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
