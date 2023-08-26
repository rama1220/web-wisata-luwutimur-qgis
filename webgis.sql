-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 02:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori_wisata`
--

CREATE TABLE `m_kategori_wisata` (
  `id_kategori_wisata` int(11) NOT NULL,
  `kd_kategori_wisata` varchar(10) DEFAULT 'NULL',
  `nm_kategori_wisata` varchar(50) NOT NULL,
  `marker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kategori_wisata`
--

INSERT INTO `m_kategori_wisata` (`id_kategori_wisata`, `kd_kategori_wisata`, `nm_kategori_wisata`, `marker`) VALUES
(10, '01', 'wisata', 'gunung12.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_kecamatan`
--

CREATE TABLE `m_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kd_kecamatan` varchar(10) NOT NULL,
  `nm_kecamatan` varchar(30) NOT NULL,
  `geojson_kecamatan` varchar(30) NOT NULL,
  `warna_kecamatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kecamatan`
--

INSERT INTO `m_kecamatan` (`id_kecamatan`, `kd_kecamatan`, `nm_kecamatan`, `geojson_kecamatan`, `warna_kecamatan`) VALUES
(94, '73.24.05', 'angkona', 'angkona.geojson', '#24ce22'),
(95, '73.24.07', 'Burau', 'burau.geojson', '#dbbdbd'),
(96, '73.24.10', 'Kalaena', 'kalaena.geojson', '#3db51c'),
(97, '73.24.04', 'Malili', 'malili.geojson', '#806ddf'),
(98, '73.24.01', 'Mangkutana', 'mangkutana.geojson', '#c72acf'),
(99, '73.24.02', 'Nuha', 'nuha.geojson', '#2ba148'),
(100, '73.24.08', 'Tomoni', 'tomoni.geojson', '#60a5c7'),
(101, '73.24.09', 'Tomoni Timur', 'tomoni_timur.geojson', '#f0dd0a'),
(102, '73.24.03', 'Towuti', 'towuti.geojson', '#2431f0'),
(103, '73.24.11', 'Wasuponda', 'wasuponda.geojson', '#46850f'),
(104, '73.24.06', 'Wotu', 'wotu.geojson', '#ff94d8');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(20) NOT NULL,
  `kt_sandi` varchar(150) NOT NULL,
  `level` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `kt_sandi`, `level`) VALUES
(1, 'admin', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'Admin'),
(2, 'user', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `t_wisata`
--

CREATE TABLE `t_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kategori_wisata` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_wisata`
--

INSERT INTO `t_wisata` (`id_wisata`, `id_kecamatan`, `id_kategori_wisata`, `lokasi`, `foto`, `keterangan`, `lat`, `lng`, `tanggal`) VALUES
(119, 95, 10, 'PANTAI LEMO', 'luwu23.jpg', 'Pemadangan pantai dengan laut lepasnya tetap menjadi daya tarik alami bagi pengunjung. Objek wisata pantai ini tergolong primadona warga karena tetap ramai dikunjungi, apalagi pada momen-momen tertentu seperti hari libur atau jelang dan sesudah hari raya Islam seperti lebaran Idul Fitri atau Idul Adha. Di lokasi ini pengunjung dapat merasakan teduh dan segarnya angin sepoi-sepoi yang bersemayam dari jejeran pohon Nyiur di sepanjang pantai.', -2.637000, 120.723167, '2023-03-23'),
(120, 103, 10, 'AIR TERJUN MATA BUNTU', 'luwu14.jpg', 'Air Terjun Mata Buntu biasa disebut juga dengan Air terjun Maruruno. Berada di lereng Gunung Lembeonga membuatnya dipenuhi dengan pepohonan yang sangat rindang.\r\n\r\nKeunikan dari Air Terjun Mata Buntu ialah karena memiliki aliran air yang sangat cantik dan indah. Bentuk aliran air terjunnya berundak-undak, menurut warga sekitar kira-kira ada 33 undakan dengan 6 undakan yang tinggi.', -2.563993, 121.251831, '2023-03-23'),
(121, 97, 10, 'DANAU MATANO', 'luwu34.jpg', 'Danau Matano adalah sebuah danau tektonik dengan ukuran panjang 28 kilometer dan lebar 8 kilometer di Sulawesi Selatan, tepatnya berada di ujung timur provinsi Sulawesi Selatan, berbatasan dengan Sulawesi Tengah. Danau ini berada sekitar 50 km dari kota Malili (Ibu kota Kabupaten Luwu Timur). Danau ini memiliki kedalaman sejauh 625 meter (1.969 kaki). Permukaan air danau berada pada ketinggian 382 meter di atas permukaan laut sehingga kedalaman air danau dari permukaan laut adalah 243 meter (cryptodepression).', -2.497982, 121.274704, '2023-03-23'),
(122, 99, 10, 'PANTAI SALONSA', 'Aktivitas-Seru-di-Pantai-Salonsa.jpg', 'Pantai Salonsa yang terletak di Magani, Nuhu Kabupaten Luwu Timur, Sulawesi Selatan merupakan salah satu destinasi wisata yang ada di daerah tersebut. Sulawesi Selatan nyatanya memang cukup dikenal dengan berbagai wisata bahari yang ada. Pantai Salonsa dan Pantai Ida merupakan salah satu destinasi wisata yang cukup menarik untuk anda kunjungi.', -2.507526, 121.335976, '2023-03-23'),
(123, 95, 10, 'PANTAI UJUNG SUSO', 'PANTAI-UJUNG-SUSO.jpg', 'Di Luwu Timur, ada juga loh pantai yang memiliki nuansa Bali sangat kental. Yah, pantai itu bernama Pantai Ujung Suso, di Desa Mabonta, Kecamatan Burau, Luwu Timur.\r\n\r\nDi pantai ini, anda akan melihat patung Dewa Ganesha yang cukup besar dan tinggi. Patung Dewa Ganesha dan gapura khas Bali ini juga yang menjadi daya tarik Pantai Ujung Suso, spot keren untuk wisatawan yang ingin berfoto.\r\n\r\nKeberadaan patung ini bukan tanpa alasan. Pantai Ujung Suso menjadi salah satu tempat umat Hindu di Luwu Timur untuk beribadah atau melaksanakan upacara tertentu.\r\n\r\nSekilas, saat berada di pantai ini, pengunjung akan merasakan sensasi seperti sedang berada di pulau Dewata, Bali.', -2.636860, 120.745377, '2023-03-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_kategori_wisata`
--
ALTER TABLE `m_kategori_wisata`
  ADD PRIMARY KEY (`id_kategori_wisata`);

--
-- Indexes for table `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `t_wisata`
--
ALTER TABLE `t_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_kategori_wisata`
--
ALTER TABLE `m_kategori_wisata`
  MODIFY `id_kategori_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_wisata`
--
ALTER TABLE `t_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
