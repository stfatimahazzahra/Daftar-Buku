-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 05:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rplx`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_buku`
--

CREATE TABLE `table_buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `halaman` int(11) DEFAULT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `diterbitkan` varchar(100) DEFAULT NULL,
  `isbn` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_buku`
--

INSERT INTO `table_buku` (`id`, `judul`, `halaman`, `pengarang`, `genre`, `penerbit`, `diterbitkan`, `isbn`) VALUES
(1, 'Laskar Pelangi', 529, 'Andrea Hirata', 'Roman', 'Bentang Pustaka (Yogyakarta)', '2005', '979-3062-79-7'),
(2, 'Perahu Kertas', 444, 'Dewi Lestari', 'Drama', 'Bentang Pustaka (Yogyakarta)', '2009', '978-979-1227-78-0'),
(4, 'Matahari', 390, 'Tere Liye', 'Fiksi Petualangan, Fantasi', 'Gramedia Pustaka Utama (Jakarta)', '25 Juli 2016', '978-602-033-211-6'),
(5, 'Ayat-Ayat Cinta', 418, 'Habiburrahman El Shirazy', 'Religi, Roman', 'Republika Pesantren Basmala Indonesia', '2003', '979-3604-02-6'),
(6, 'Cantik Itu Luka', 537, 'Eka Kurniawan', 'Fiksi, Fiksi Sejarah, Realisme', 'Penerbit Jendela, Gramedia Pustaka Utama (Jakarta)', '2002', '978-062-031-258-3'),
(7, 'Tenggelamnya Kapal Van Der Wijck', 224, 'Hamka', 'Novel', 'Centrale Courant', '1938', '978-979-418-055-6'),
(8, 'Koala Kumal', 247, 'Raditya Dika', 'Komedi', 'Gagas Media', '2014', '979-780-769-X'),
(9, 'Anak Rantau', 370, 'Ahmad Fuadi', 'Fiksi', 'PT Falcon', 'Agustus 2017', '978-602-60514-9-3'),
(10, 'Dear Nathan', 520, 'Erisca Febriani', 'Romance, Shcool life', 'Best Media', '2016', '9786026940148'),
(11, 'Bumi Manusia', 535, 'Pramoedya Ananta Toer', 'Drama Histori', 'Hasta Mitra', '1980', '979-97312 3-2'),
(12, 'Negeri 5 Menara', 416, 'Ahmad Fuadi', 'Edukasi,Religi,Roman', 'Gramedia(Jakarta)', 'Juli 2009', '978-979-22-4861-6'),
(13, 'Sang Pemimpi', 292, 'Andrea Hirata', 'Roman', 'Yogyakarta:Bentang Pustaka', 'Juli 2006', '979-3062-92-4'),
(14, 'Anak Semua Bangsa', 539, 'Pramoedya Ananta Toer', 'Historical Drama', 'Hasta Mitra', '2006', '979-93712-4-0'),
(15, 'Filosofi Kopi', 134, 'Dewi Lestari', 'Roman', 'Jakarta:Trude Books &amp; GagasMedia', '2006', '979-96257-3-4'),
(16, 'Habis Gelap Terbitlah Terang', 204, 'Kartini, Armijn Pane(Penerjemah)', 'Biografi', 'Balai Pustaka', '2005', '979-497-036-7'),
(17, 'Dilan:Dia Adalah Dilanku Tahun 1990', 333, 'Pidi Baiq', 'Roman', 'Pastel Books', '2014', '978-602-7870-86-4'),
(18, 'The Architecture Of Love', 304, 'Ika Natassa', 'Fiksi', 'Gramedia Pustaka Utama', 'Juni 2016', '978-602-03-2926-0'),
(19, 'Rumah Kaca', 646, 'Pramoedya Ananta Toer', 'Fiksi Historis', 'Lentera Dipantara', '1998', '979-97312-6-7'),
(20, 'Tentang Kamu', 524, 'Tere Liye', 'Fiksi, Romantis', 'Republika', 'Oktober 2016', '978-602-082-234-1'),
(21, 'Ronggeng Dukuh Paruk', 406, 'Ahmad Tohari', 'Fiksi Indonesia', 'Gramedia Pustaka Utama', '2003', '978-979-22-7728-9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_buku`
--
ALTER TABLE `table_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_buku`
--
ALTER TABLE `table_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
