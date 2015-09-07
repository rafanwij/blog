-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2015 at 05:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icc`
--

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE IF NOT EXISTS `msuser` (
`userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`userId`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`postId` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postContent` varchar(50000) NOT NULL,
  `postDate` datetime NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `postActivity` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postTitle`, `postContent`, `postDate`, `imagePath`, `postActivity`) VALUES
(1, 'Berita Pertama', 'Saat aku sudah dipercayai olehnya, ayah pun melonggarkan peraturannya. Maka kadang aku melanggar kepercayaannya. Ayahlah yang setia menunggu aku diruang tamu dengan rasa sangat risau, bahkan sampai menyuruh ibu untuk mengontak beberapa temannya untuk menanyakan keadaanku, dimana, dan sedang apa aku diluar sana.Setelah aku dewasa, walau ibu yang mengantar aku ke sekolah untuk belajar, tapi tahukah aku, bahwa ayahlah yang berkata: Ibu, temanilah anakmu, aku pergi mencari nafkah dulu buat kita bersama.Disaat aku merengek memerlukan ini – itu, untuk keperluan kuliahku, ayah hanya mengerutkan dahi, tanpa menolak, beliau memenuhinya, dan cuma berpikir, kemana aku harus mencari uang tambahan, padahal gajiku pas-pasan dan sudah tidak ada lagi tempat untuk meminjam.Saat aku berjaya. Ayah adalah orang pertama yang berdiri dan bertepuk tangan untukku. Ayahlah yang mengabari sanak saudara, anakku sekarang sukses. Walau kadang aku cuma bisa membelikan baju koko itupun cuma setahun sekali. Ayah akan tersenyum dengan bangga. Dalam sujudnya ayah juga tidak kalah dengan doanya ibu, cuma bedanya ayah simpan doa itu dalam hatinya.Sampai ketika nanti aku menemukan jodohku, ayahku akan sangat berhati – hati mengizinkannya. Dan akhirnya, saat ayah melihatku duduk diatas pelaminan bersama pasanganku, ayah pun tersenyum bahagia.Lantas pernahkah aku memergoki, bahwa ayah sempat pergi ke belakang dan menangis? Ayah menangis karena ayah sangat bahagia. Dan beliau pun berdoa, “Ya Alloh, tugasku telah selesai dengan baik. Bahagiakanlah putra putri kecilku yang manis bersama pasangannya.”Tahukah kalian, bahwa ayahlah yang pertama kali mempunyai rambut uban.', '2015-09-06 21:48:56', '', 'A'),
(2, 'Berita Kedua', 'Lantas pernahkah aku memergoki, bahwa ayah sempat pergi ke belakang dan menangis? Ayah menangis karena ayah sangat bahagia. Dan beliau pun berdoa, “Ya Alloh, tugasku telah selesai dengan baik. Bahagiakanlah putra putri kecilku yang manis bersama pasangannya.”\r\nTahukah kalian, bahwa ayahlah yang pertama kali mempunyai rambut uban.\r\n\r\nKuakhiri tulisanku dengan sebuah bait lagu:\r\nDimana, akan kucari\r\nAku menangis seorang diri\r\nHatiku, selalu ingin bertemu\r\nUntukmu, aku bernyanyi\r\n\r\nLihatlah, hari berganti\r\nNamun tiada seindah dulu\r\nDatanglah, aku ingin bertemu\r\nUntukmu, aku bernyanyi\r\n\r\nUntuk ayah tercinta, aku ingin bernyanyi\r\nDengan airmata di pipiku\r\nAyah, dengarkanlah\r\nAku ingin berjumpa\r\nWalau, hanya dalam mimpi.', '2015-09-06 22:05:26', '', 'A'),
(3, 'Berita Ketiga', 'pendek aja', '2015-09-07 00:11:09', '', 'A'),
(4, 'Berita Keempat', 'pendek juga', '2015-09-07 00:11:09', '', 'A'),
(5, 'Berita Kelima', 'pendek 1', '2015-09-07 00:22:34', '', 'A'),
(6, 'Berita Keenam', 'pendek 2', '2015-09-07 00:22:34', '', 'A'),
(7, 'Berita Ketujuh', 'pendek 3', '2015-09-07 00:22:34', '', 'A'),
(8, 'Berita Kedelapan', 'pendek 4', '2015-09-07 00:22:34', '', 'A'),
(9, 'Berita Kesembilan', 'pendek 5', '2015-09-07 00:22:34', '', 'A'),
(10, 'Berita Kesepuluh', 'pendek 6', '2015-09-07 00:22:34', '', 'A'),
(11, 'Berita Kesebelas', 'pendek 7', '2015-09-07 00:22:34', '', 'A'),
(12, 'Berita Keduabelas', 'pendek 8', '2015-09-07 00:22:34', '', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
 ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`postId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msuser`
--
ALTER TABLE `msuser`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
