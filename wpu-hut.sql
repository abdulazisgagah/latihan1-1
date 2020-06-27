-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2020 pada 14.20
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu-hut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pizza`
--

INSERT INTO `pizza` (`id`, `kategori`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'pizza', 'Meat Lover', 'Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.', 49500, 'meat-lover.jpg'),
(2, 'pizza', 'Super Supreme', 'Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah dan paprika hijau.', 49500, 'supreme.jpg'),
(3, 'pizza', 'Tuna Melt', 'Irisan daging ikan tuna, butiran jagung, saus mayonnaise.', 49500, 'tuna-melt.jpg'),
(4, 'pizza', 'American Favourite', 'Pepperoni sapi, daging sapi cincang, jamur.', 49500, 'american-favourite.jpg'),
(5, 'pasta', 'Beef Spaghetti', 'Pepperoni sapi, daging sapi cincang, jamur.', 43000, 'beef-spaghetti.jpg'),
(6, 'pasta', 'Beef Lasagna', 'Dipanggang, daging sapi cincang. krim putih lembut di tiap lapisan.', 48000, 'beef-lasagna.jpg'),
(7, 'pasta', 'Creamy Beef Fettuccine', 'Daging sapi asap dan jamur, ditumis dengan saus krim lembut.', 43000, 'creamy-beef-fettuccine.jpg'),
(8, 'nasi', 'Meatballs Beef Mushroom', 'Bola daging sapi dengan saus daging sapi cincang dan jamur.', 40000, 'meatballs-beef-mushroom.jpg'),
(9, 'nasi', 'Black Pepper Chicken ', 'Ayam dengan saus lada hitam.', 40000, 'black-pepper-chicken.jpg'),
(10, 'nasi', 'Oriental Chicken', 'Daging ayam berpadu dengan saus oriental.', 40000, 'oriental-chicken.jpg'),
(11, 'minuman', 'Choco Mint', '', 24000, 'choco-mint.jpg'),
(12, 'minuman', 'Toffee Coffee', '', 24000, 'toffee-coffee.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
