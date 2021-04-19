-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 08:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `kontak` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(123) NOT NULL,
  `facebook` varchar(123) NOT NULL,
  `instagram` varchar(123) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longitude` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `kontak`, `alamat`, `email`, `facebook`, `instagram`, `latitude`, `longitude`) VALUES
(2, '123 0192412', 'Lioka, Kec. Towuti, Kabupaten Luwu Timur, Sulawesi Selatan 92982', 'email@gmail.com', 'facebook@facebook.com', '@instagram', '-2.6365280804380347', '121.35587097146427');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(123) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maskin`
--

CREATE TABLE `maskin` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(120) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `pekerjaan` varchar(123) NOT NULL,
  `tanggungan` varchar(123) NOT NULL,
  `luas_rumah` varchar(128) NOT NULL,
  `latitude` varchar(123) NOT NULL,
  `longitude` varchar(123) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maskin`
--

INSERT INTO `maskin` (`id`, `no_kk`, `nama`, `alamat`, `jenis_kelamin`, `pekerjaan`, `tanggungan`, `luas_rumah`, `latitude`, `longitude`, `gambar`) VALUES
(1, '7324035707840002', 'Yuliana', 'jl. nangka dusun sora rt sora                                                            \r\n', 'Perempuan', 'irt', 'Cicilan Motor', '12 x 5 m', '-2.638253593361955', '121.35940194699583', '1.png'),
(2, '7324036406820001', 'Wanti', 'Jl. nangka dusun sora rt sora                                                            \r\n', 'Perempuan', 'irt', '-', '13 x 5 m', '-2.638425072776404', '121.35939120883843', '2.png'),
(4, '7324037012690001', 'Rosmiati', 'jl. nangka dusun sora rt sora', 'Perempuan', 'irt', 'Cicilan Motor', '14 x 7 m', '-2.6380285265945944', '121.36025916794712', '3.png'),
(5, '7324034812620001', 'Surianti', 'jl. nangka dusun sora rt sora                                                               \r\n', 'Perempuan', 'irt', 'Cicilan Motor', '13 x 5 m', '-2.638200006040085', '121.3600891937286', '4.png'),
(6, '7324034901530001', 'Dorkas', 'jl. nangka dusun sora rt sora                                                                 \r\n', 'Laki-Laki', 'Petani', 'Pinjaman Koperasi', '15 x 6 m', '-2.63807675519102', '121.36045428641874', '5.png'),
(7, '7324036012450001', 'Bungadia', 'jl. macan dusun polapo rt polapi', 'Laki-Laki', 'Petani', 'Pinjaman Koprasi', '12 x 5 m', '-2.6389609457941394', '121.35693217545983', '6.png'),
(8, '7324031606870001', 'Illham', 'jl. macan dusun polapi rt polapi', 'Laki-Laki', 'Petani', 'Cicilan Motor', '14 x 7 m', '-2.6388966410441927', '121.36117070887423', '7.png'),
(9, '7324030508840005', 'Mustaking', 'jl. a yani dusun polapi rt polapi', 'Laki-Laki', 'Petani', 'Pinjaman Uang Bank', '13 x 5 m', '-2.639186012392689', '121.36115227130888', '8.png'),
(10, '7324035105780001', 'Rusmiati', ' jl. a yani dusun polapo rt polapi', 'Perempuan', 'irt', 'Cicilan Motor', '12 x 5 m', '-2.6390145330831984', '121.36177508443676', '9.png'),
(11, '7324035105960001', 'Marwa', 'jl. a yani dusun polapi rt polapi', 'Perempuan', 'irt', 'Cicilan Uang Bank', '13 x 5 m', '-2.6388966410441927', '121.36144220155803', '10.png'),
(12, '7324036410830002', 'Riana', 'jl. a yani dusun polapi rt polapi', 'Perempuan', 'irt', 'Cicilan Motor', '12 x 5 m', '-2.6389287934195798', '121.36131334366954', '11.png'),
(13, '7324036701740001', 'Nely', 'JL. nangka dusun sora rt sura', 'Perempuan', 'Irt', 'Cicilan motor', '13 x 5 m', '-2.6403542145590118', '121.36222608704657', '12.png'),
(14, '7324034902830001', 'Kartina', 'JL. nangka dusun sora rt sora', 'Perempuan', 'Irt', 'cicilan motor', '14 x 7 m', '-2.640327420943648', '121.36204007550184', '13.png'),
(15, '7324034107430002', 'Patimang', 'JL. nangka dusun sora rt sora', 'Laki-Laki', 'Petani', 'cicilan motor', '12 x 5 m', '-2.6402577575410024', '121.36172139364984', '14.png'),
(16, '7324037112830006', 'Yani', 'Jl. lengkeng dusun sora', 'Perempuan', 'irt', 'Cicilan motor', '14 x 6 m', '-2.639893364294281', '121.36117374762364', '15.png'),
(17, '7324030107640009', 'Lampe', 'JL. lengkeng dusun sora', 'Laki-Laki', 'Petani', 'Cicilan Motor', '15 x 7 m', '-2.6397754723386435', '121.36063683975479', '16.png'),
(18, '7324030912900001', 'Ruslan', 'JL. LENGKENG DUSUN SORA ', 'Laki-Laki', 'Petani', 'Cicilan Koperasi', '12 x 6 m', '-2.640043408585281', '121.36042207660725', '17.png'),
(19, '7206026309810001', 'Selfiani', 'Jl. a yani dusun polapi rt polpai', 'Laki-Laki', 'Petani', 'Cicilan bank', '15 x 6 m', '-2.639078837827026', '121.36031311040959', '18.png'),
(20, '7324035406880001', 'Maryam', 'JL. nangka dusun sora', 'Perempuan', 'Irt', 'Cicilan bank', '15 x 7 m', '-2.6396950914533805', '121.36016248724549', '19.png'),
(21, '6471025306800003', 'Prasiska', 'jl. nangka dusun sora', 'Perempuan', 'irt', 'Cicilan Motor', '16 x 7 m', '-2.6399147991941114', '121.35981908992103', '20.png'),
(22, '7324037112860010', 'Rismawati', 'JL. a yani dusun polapo rt polapi                 ', 'Perempuan', 'irt', 'Cicilan bank', '17 x 8 m', '-2.63867157439324', '121.35959523848923', '21.png'),
(23, '7324037009950001', 'Juwita', 'JL. a yani dusun polapi rt polapi', 'Perempuan', 'irt', 'Cicilan motor', '15 x 8 m', '-2.6388430537500445', '121.3588006148434', '22.png'),
(24, '7324035001850001', 'Nurlina', 'JL. Nangka dusun sora', 'Perempuan', 'irt', 'Cicilan bank', '16 x 7 m', '-2.6383500505354935', '121.35923014113845', '23.png'),
(25, '7324035806770001', 'Hasnawati', 'JL. Nangka dusun sura', 'Perempuan', 'irt', 'Cicilan motor', '17 x 6 m', '-2.638237517165636', '121.35903585692473', '24.png'),
(26, '7324036105690001', 'Rita', 'JL. Pepaya dusun sora ', 'Perempuan', 'irt', 'Cicilan motor', '15 x 6 m', '-2.6386072696283445', '121.35816706355817', '25.png'),
(27, '7601041507810003', 'Bahtiar', 'Jl. Singa dusun polapi rt polapi                                                     \r\n', 'Laki-Laki', 'Petani', 'Cicilan motor', '14 x 6 m', '-2.6390091743543955', '121.35700289629318', '26.png'),
(28, '7324114506800001', 'Nelsin', 'Jl. pepaya dusun sora', 'Perempuan', 'irt', 'Cicilan bank', '15 x 7 m', '-2.638253593361955', '121.3575117936039', '27.png'),
(29, '7324034203400001', 'We\'ana', 'Jl. pepaya dusun sora', 'Perempuan', 'irt', 'Cicilan bank', '15 x 8 m', '-2.638457225163979', '121.35847847012207', '28.png'),
(30, '7324033112540009', 'Limbu', 'Jl. pepaya dusun sora\r\n', 'Laki-Laki', 'irt', 'Cicilan motor', '13 x 6 m', '-2.6381142663202977', '121.35713620044996', '29.png'),
(31, '7324036404590001', 'ida', 'Jl. pepaya dusun sora                                                                               \r\n', 'Perempuan', 'irt', 'Cicilan motor', '14 x 7 m', '-2.63821072350465', '121.35690625287678', '30.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `no_hp` varchar(123) NOT NULL,
  `isi` text NOT NULL,
  `alamat` varchar(231) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_administrasi`
--

CREATE TABLE `p_administrasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_administrasi`
--

INSERT INTO `p_administrasi` (`id`, `judul`, `gambar`, `deskripsi`) VALUES
(2, 'Peta Administrasi', 'administrasi.jpg', '<center><h4>Sumber Peta</h4></center> <p>Peta Administrasi Kabupaten Luwu Timur. <br>Dem Sulawesi Selatan.<br>Peta administrasi ini di sesuaikan dengan keadadaan yang sebenarnya. Di gambar dengan menggunakan aplikasi yang telah dipersiapkan.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `p_maskin`
--

CREATE TABLE `p_maskin` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_persebaran`
--

CREATE TABLE `p_persebaran` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_persebaran`
--

INSERT INTO `p_persebaran` (`id`, `judul`, `gambar`, `deskripsi`) VALUES
(3, 'Peta Persebaran Masyarakat Miskin', 'Peta_persebaran_masyarakat_miskin_fix.jpg', 'Sumber Peta\r\n1. Rupa bumi Indonesia (RBI)\r\n2. Dem Sulawesi Selatan\r\nPeta persebaran ini memperlihatkan kondisi persebaran wilayah masyarakat miskin yang ada di desa Lioka'),
(4, 'Peta Administrasi Desa Lioka', 'Peta_administrasi_fix.jpg', 'Sumber Peta\r\n1. Rupa Bumi Indonesia (RBI)\r\n2. Dem Sulawesi-Selatan\r\nPeta administrasi adalah peta yang menampilkan wilayah desa Lioka secara keseluruhan.');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul`, `isi`, `penulis`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'undoubtable Evil');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `judul` varchar(123) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `judul`, `gambar`, `penulis`) VALUES
(2, 'What is Lorem Ipsum?', 'Lighthouse.jpg', 'Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `judul`, `isi`, `penulis`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `judul` varchar(123) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `judul`, `isi`, `penulis`) VALUES
(3, 'Tujuan WebGis', 'Mengembangkan peta digital berbasis WebGis untuk memudahkan pencarian data dan informasi tentang jaringan jalan, Fasilitas transportasi, aluran pematusan dan sarana prasarana pemadam kebakaran. Memutakhirkan data dan menyusun mekanismenya yang bisa diterapkan.', 'Citra'),
(4, 'Manfaat dari WebGIS', 'Tersedianya peta atau informasi yang berbasis WebGIS yang tersusun dengan baik, akurat, mudah dibaca, dan mudah dimengerti oleh awam sekalipun, baik berupa data maupun peta skematik.\r\nMendukung perencanaan makro jaringan jalan, transportasi, sistem drai.', 'Citra');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(231) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(123) NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `user_level` varchar(123) NOT NULL,
  `user_aktif` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `no_hp`, `jenis_kelamin`, `user_level`, `user_aktif`, `gambar`, `Alamat`, `pendidikan`) VALUES
(4, 'Citra Ayu Lestari', 'citra@gmail.com', '$2y$10$CP/yg6RIQhGRHNidHRm6nu7cLRSLw5W3QzE27ScU0gJRDq0McySOe', '08238126123', ' Perempuan', 'Admin', 1, '11.png', 'Kecamatan Towuti Kabupaten Luwu Timur', 'S1 Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `judul` varchar(123) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `judul`, `isi`, `penulis`) VALUES
(7, 'Visi Dan Misi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ', 'since');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maskin`
--
ALTER TABLE `maskin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_administrasi`
--
ALTER TABLE `p_administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_maskin`
--
ALTER TABLE `p_maskin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_persebaran`
--
ALTER TABLE `p_persebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maskin`
--
ALTER TABLE `maskin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_administrasi`
--
ALTER TABLE `p_administrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_maskin`
--
ALTER TABLE `p_maskin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_persebaran`
--
ALTER TABLE `p_persebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
