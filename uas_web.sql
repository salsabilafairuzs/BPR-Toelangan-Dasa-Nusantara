-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 01:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `judul`, `isi`, `tanggal`, `foto`) VALUES
(1, 1, 'Anak Muda Susah Menabung? Pakai Tips Ini Ya', 'Generasi Milenial dan Generasi Z seringkali identik dengan generasi yang sulit menabung. Beberapa faktor penyebabnya adalah prinsip hidup YOLO (You Only Live Once) dan FOMO (Fear Of Missing Out) di mana anak-anak muda seringkali mengejar tren. \r\nSebenarnya, prinsip hidup seperti ini sah-sah saja, asalkan Anda punya manajemen finansial yang sudah baik, salah satunya adalah dengan punya tabungan dan investasi. Berikut ini tips untuk anak muda yang susah menabung. ', '2022-11-23 07:40:49', 'image 1.png'),
(2, 1, '4 Tips Sederhana Mengelola Keuangan Keluarga', 'Pengelolaan keuangan keluarga memang tricky. Apalagi untuk pasangan yang sudah punya anak. Hal ini dikarenakan ada banyak kebutuhan yang harus dipenuhi mulai dari kebutuhan diri sendiri, pasangan, anak, bahkan kebutuhan orang tua. \r\n\r\n<br><br>\r\nMasih bingung kelola uang keluarga harus mulai dari mana?\r\n<br><br>\r\n4 tips ini bisa diterapkan supaya kelola keuangan keluarga semakin mudah. \r\n\r\n \r\n<br><br>\r\n1. Buat Anggaran Belanja Bulanan <br><br>\r\nLangkah sederhana yang bisa Anda mulai untuk mengelola keuangan keluarga adalah dengan membuat anggaran belanja bulanan. Mulai dari kebutuhan yang utama hingga kebutuhan tersier. Kelihatannya sederhana, tapi anggaran bulanan ini harus diikuti dengan catatan pengeluaran. Tujuannya untuk mengevaluasi apakah pengeluaran kita sudah terkontrol atau malah boncos. Dengan mengetahui kondisi ini, kita jadi bisa mengelola kembali keuangan kita.\r\n\r\n \r\n<br><br>\r\n2. Manfaatkan Promo Agar Lebih Hemat <br><br>\r\nSolusi hemat di zaman sekarang sudah dipermudah dengan banyaknya promo-promo menarik dari platform belanja digital. Melalui platform digital kita bisa menemukan produk sejenis dengan harga yang lebih bersaing. Jika kita pandai mencari promo, pengeluaran bisa jadi lebih hemat sehingga keuangan jadi lebih longgar.\r\n\r\n \r\n<br><br>\r\n3. Tentukan Anggaran Dana Cadangan <br><br>\r\nSetelah menulis anggaran kebutuhan, Anda juga perlu membuat anggaran dana cadangan. Anggaran ini bertujuan untuk memenuhi kebutuhan dadakan seperti memperbaiki atap bocor, jika anggota keluarga ada yang sakit, dan berbagai kebutuhan darurat lainnya.\r\n\r\n \r\n<br><br>\r\n4. Buat Rekening Khusus Dana Cadangan <br><br>\r\nKarena sifatnya darurat, sebaiknya dana cadangan yang sudah terkumpul disimpan di rekening yang berbeda. Kalau di tabungan biasa, ada kemungkinan Anda akan tidak sengaja mengambilnya untuk keperluan lain yang sifatnya impulsif. Anda bisa mengalihkan dana Anda ke deposito. Saat ini ada pilihan menarik untuk produk deposito, terutama deposito online. Karena deposito online memungkinkan Anda untuk punya rekening tapi tidak perlu repot ke bank.', '2022-12-10 13:56:44', 'kelola keuangan keluarga.jpg'),
(3, 1, '3 Tips Hemat Liburan Akhir Tahun di Bali', 'Sebentar lagi libur akhir tahun tiba. Sudah tahu mau berlibur ke mana pada akhir tahun ini? Yuk ke Bali aja! \r\n\r\n <br><br>\r\n\r\nSudah bukan rahasia lagi bahwa Bali menjadi salah satu destinasi liburan yang paling diminati oleh banyak orang baik itu wisatawan domestik maupun wisatawan mancanegara. Anda juga salah satunya kan? Nah, bagi Anda yang mau menghabiskan liburan akhir tahun di Bali, ada tips hemat yang bisa Anda ikuti. Apa saja? Yuk cek di sini. \r\n\r\n \r\n<br><br>\r\n1. Tetapkan Budget selama Liburan \r\n<br><br>\r\nMenetapkan budget pengeluaran selama liburan adalah hal mendasar yang perlu dilakukan. Menetapkan budget ini membantu Anda agar pengeluaran selama liburan tidak berlebih atau membengkak.\r\n\r\nUntuk Anda yang memang tinggal di Bali, mengatur budget ini juga penting, lho! Biasanya di masa-masa akhir tahun ini ada banyak sekali promo dan diskon yang sayang kalau dilewatkan. Jika sudah memiliki budget, Anda tidak perlu pusing dan sudah siap liburan!\r\n\r\n \r\n<br><br>\r\n2. Siapkan Dana Darurat\r\n<br><br>\r\nSisihkan sebagian Anda untuk dana darurat selama liburan. Setidaknya, dana darurat ini jumlahnya sekitar 10 - 20% dari budget yang sudah Anda tetapkan. Dana darurat ini diperuntukkan untuk kebutuhan yang tak terduga atau kebutuhan yang tidak Anda list sebelumnya. \r\n\r\n \r\n<br><br>\r\n3. Cari Promo\r\n<br><br>\r\nBiasanya pada akhir tahun ada banyak sekali penawaran promo mulai dari diskon hotel hingga kuliner. Pastinya promo ini bisa membantu Anda lebih hemat selama liburan. \r\n\r\nUntuk Anda yang ingin berburu diskonan selama liburan akhir tahun bisa download langsung aplikasi LestariDiskon untuk dapatkan berbagai diskon mulai dari diskon makanan, hotel, villa, dan aktivitas lainnya. ', '2022-12-16 09:21:18', '3 Tips Hemat Liburan Akhir Tahun di Bali .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_laporan`
--

CREATE TABLE `jenis_laporan` (
  `id_jenis_laporan` int(11) NOT NULL,
  `jenis_laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jenis_laporan`
--

INSERT INTO `jenis_laporan` (`id_jenis_laporan`, `jenis_laporan`) VALUES
(2, 'Laporan Publikasi'),
(3, 'laporan Tata Kelola (GCG)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` int(11) NOT NULL,
  `jenis_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `jenis_produk`) VALUES
(2, 'Deposito'),
(3, 'Tabungan'),
(4, 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id_kritik_saran`, `nama`, `email`, `pesan`, `subjek`, `pekerjaan`) VALUES
(2, 'Ardi Putra', 'ardiputra@gmail.om', 'Aman dijamin LPS dan diawasi OJK seperti bank pada umumnya', 'Testimoni', 'Wiraswasta'),
(3, 'Yanto S', 'yantos@gmail.com', 'Fasilitas kredit sangat membantu usaha kami', 'Testimoni', 'Guru'),
(4, 'Adel', 'adeliafitri972@gmail.com', 'Saya puas dengan pelayanan di  bank ini', 'Testimoni', 'Mahasiswa'),
(5, 'Salsabila ', 'salsa@gmail.com', 'Pelayanan disini sungguh memuaskan, aman, dan terpercaya', 'Testimoni', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_jenis_laporan` int(11) NOT NULL,
  `nama_laporan` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_jenis_laporan`, `nama_laporan`, `tahun`, `file`) VALUES
(1, 3, 'Laporan Tata Kelola 2019', 2019, 'laporan tata kelola 2019.pdf'),
(3, 2, 'Laporan Keuangan Bulan Desember 2019', 2019, 'Laporan publikasi desember 2019.pdf'),
(5, 2, 'Laporan Keuangan Bulan Desember 2020', 2020, 'Laporan publikasi desember 2020.pdf'),
(6, 3, 'Laporan Tata Kelola 2020', 2020, 'laporan tata kelola 2020.pdf'),
(7, 3, 'Laporan Tata Kelola 2021', 2021, 'laporan tata kelola 2021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `keunggulan` text NOT NULL,
  `syarat` text NOT NULL,
  `fitur` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_jenis_produk`, `nama_produk`, `deskripsi`, `keunggulan`, `syarat`, `fitur`, `file`) VALUES
(1, 3, 'Tabungan Tanaman', 'Dapatkan keuntungan, kenyamanan dan hadiah menarik dengan berbagai solusi simpanan Anda\r\n', '<ul>\r\n<li>Bunga bersaing</li>\r\n<li>Biaya administrasi bulanan ringan </li>\r\n<li>Dijamin pemerintah (LPS)</li>\r\n<li>Pelayanan extra dengan jemput bola </li>\r\n</ul>', '<ol>\r\n<li>Membawa bukti identitas diri yang masih berlaku, yaitu:</li>\r\n<ul>\r\n<li>Perorangan : KTP (WNI), KITAS/Passport (WNA)</li>\r\n<li>Badan Usaha : SIUP, NIB, NPWP</li>\r\n</ul>\r\n<li>Setoran dan saldo minimal Rp.10.000,- </li>\r\n</ol>', '', 'spesimen tabungan.pdf'),
(2, 2, 'Deposito', 'Deposito Berjangka dapat menjadi pilihan yang tepat untuk investasi anda', '<ul>\r\n<li>Syarat Mudah</li>\r\n<li>Pilihan Jangka waktu 1,3,6 dan 12 bulan</li>\r\n<li>Memiliki Fasilitas ARO (Automatic Rail Over)</li>\r\n<li>Deposito dapat digunakan sebagai jaminan kredit (ketentuan berlaku)</li>\r\n</ul>', '<ol>\r\n<li>Membawa bukti identitas diri yang masih berlaku, yaitu:</li>\r\n<ul>\r\n<li>Perorangan : KTP (WNI), KITAS/Passport (WNA)</li>\r\n<li>Badan Usaha : SIUP, NIB, NPWP</li>\r\n</ul>\r\n<li>Mengisi dan menandatangani formulir aplikasi data penempatan deposito</li>\r\n<li>Penempatan awal ringan minimal Rp.5.000.000,-</li>\r\n</ol>\r\n', '<ul>\r\n<li>Dapat dibuka atas nama 2 orang pribadi (joint account)</li>\r\n<li>Tersedia dalam tenor 1, 3, 6, 9, dan 12 bulan</li>\r\n<li>Bebas biaya materai</li>\r\n<li>Bebas memperpanjang deposito secara otomatis </li>\r\n<li>Bunga dihitung berdasarkan jumlah hari penempatan</li>\r\n<li>Dapat dijadikan jaminan kredit</li>\r\n</ul>', 'aplikasi deposito.pdf'),
(3, 4, 'Kredit', 'Solusi pinjaman untuk usaha Anda yang dapat disesuaikan dengan kebutuhan anda', '<ul>\r\n<li>Pinjaman mulai dari 500.000,- s/d 200.000.000,-</li>\r\n<li>Jangka waktu pinjaman mulai dari 6 bulan s/d 60 bulan</li>\r\n<li>Angsuran tetap sesuai kemampuan anda</li>\r\n<li>Terlindungi Asuransi Jiwa Kredit</li>\r\n</ul>', '<ul>\r\n<li>Fotocopy KTP, KK / Surat Nikah</li>\r\n<li>Surat Keterangan Usaha</li>\r\n<li>Bukti Kepemilikan Jaminan</li>\r\n<li>Fasilitas Kredit Untuk Sertifikasi Massal Swadaya (SMS)</li>\r\n<li>Modal Kerja</li>\r\n<li>Rekan PTP / PG (Pabrik Gula)</li>\r\n</ul>', '<ol>\r\n<li>Suku bunga kredit kompetitif dengan bank lainnya</li>\r\n<li>Jangka waktu kredit maksimal 1 tahun sejak akad (bisa diperpanjang)</li>\r\n<li>Plafon kredit hingga Rp 200.000.000,-</li>\r\n<li>Presentase Pembiayaan (Loan to Value) hingga 60% dari nilai agunan berdasarkan penilaian bank</li>\r\n<li> Perlindungan asuransi jiwa kredit</li>\r\n</ol>', 'permohonan umum 1.pdf'),
(4, 3, 'Tabungan Sidoel', 'Dapatkan keuntungan, kenyamanan dan hadiah menarik dengan berbagai solusi simpanan Anda', '<ul>\r\n<li>Bebas Biaya administratsi bulanan</li>\r\n<li>Program kolektif berupa reward kolektor per rekening baru dan setiap penabungan kolektif lanjutan</li>\r\n</ul>\r\n\r\n', '<ul>\r\n<li>Penabung adalah perorangan dan WNI berusia sampai dengan 16 tahun (usia sekolah)</li>\r\n<li>Melampirkan fotokopi kartu pelajar / akte kelahiran</li>\r\n<li>Menyerahkan Surat Pernyataan Orang Tua sebagai wali / pengampu</li>\r\n<li>Setoran Awal dan saldo minimal Rp. 2.000</li>\r\n<li>Penyetoran selanjutnya minimal Rp. 1.000</li>\r\n</ul>\r\n\r\n', '', 'spesimen tabungan.pdf'),
(5, 3, 'Simpanan Pelajar', 'Dapatkan keuntungan, kenyamanan dan hadiah menarik dengan berbagai solusi simpanan Anda', '<ul>\r\n<li>Bunga bersaing</li>\r\n<li>Biaya administrasi bulanan ringan </li>\r\n<li>Dijamin pemerintah (LPS)</li>\r\n<li>Pelayanan extra dengan jemput bola </li>\r\n</ul>', '<ol>\r\n<li>Membawa bukti identitas diri yang masih berlaku, yaitu:</li>\r\n<ul>\r\n<li>Perorangan : KTP (WNI), KITAS/Passport (WNA)</li>\r\n<li>Badan Usaha : SIUP, NIB, NPWP</li>\r\n</ul>\r\n<li>Setoran dan saldo minimal Rp.10.000,-</li>\r\n</ol>', '', 'spesimen tabungan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `profil`, `isi`, `tanggal`) VALUES
(1, 'Sejarah Singkat', 'BPR Toelangan Dasa Nusantara merupakan perusahaan yang bergerak di bidang jasa keuangan atau perbankan. Bank ini berdiri dan beroperasi sejak tahun 1991. Dengan dukungan masyarakat bank ini dapat berkembang menciptakan produk finansial yang dirancang sesuai kebutuhan masyarakat, seperti tabungan sidoel dan simpanan pelajar yang dikeluarkan pada tahun 2015.', '2022-11-21 12:44:18'),
(3, 'Visi', 'Terwujudnya industri BPR yang sehat, kuat, produktif dan dipercaya untuk melayani UMKM dan masyarakat khususnya di wilayah sekitar guna mendorong perekonomian daerah.', '2022-11-21 13:02:52'),
(5, 'Misi', 'Bersama menciptakan kesempatan tumbuh dan berkembang untuk membantu usaha mikro, menengah serta bekerjasama dengan lembaga keuangan mikro (LKM)\r\n\r\n\r\nBPR Toelangan Dasa Nusantara didirikan dengan maksud melalui aktivitasnya dan mendorong pertumbuhan perekonomian agar tercapai taraf hidup rakyat menjadi sejahtera\r\n\r\n\r\nMenyalurkan kredit usaha mikro, kecil dan menengah serta bekerjasama dengan lembaga keuangan mikro (LKM) dalam rangka memajukan perekonomian agar bangkit dari keterpurukan terjangan pandemi Covid-19\r\n\r\n\r\nTranformasi digitalisasi perbankan menuju era industri 5.0', '2022-11-30 03:05:55'),
(6, 'Cepat', 'Pengajuan Anda langsung diproses, kami berkomitmen memberikan Anda kepastian dalam 3 hari kerja\r\n', '2022-11-30 16:38:48'),
(7, 'Aman', 'Kami dikelola oleh tim profesional dengan pengalaman yang solid, terdaftar dan diawasi OJK, serta dijamin LPS\r\n', '2022-11-30 16:39:07'),
(8, 'Peduli', 'Kami berkomitmen untuk melayani Anda dengan sepenuh hati. Konsultasikan kebutuhan Anda saat ini\r\n', '2022-11-30 16:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `tag`) VALUES
(1, 'investasi'),
(3, 'Ekonomi'),
(4, 'tabungan');

-- --------------------------------------------------------

--
-- Table structure for table `tag_berita`
--

CREATE TABLE `tag_berita` (
  `id_tag_berita` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tag_berita`
--

INSERT INTO `tag_berita` (`id_tag_berita`, `id_berita`, `id_tag`) VALUES
(4, 1, 3),
(5, 1, 4),
(17, 2, 3),
(18, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Adelia Fitri Kristanti', 'adelia@gmail.com', 'adelia', '738f395106b983b401eb7982c81bfcf7', 'Superadmin', 'Star Photo&Video-min.jpg'),
(7, 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', ''),
(8, 'Salsabila Fairuz Shofi', 'salsabila@gmail.com', 'salsabila', 'fe1e33bb1f71656d0d06d68e0dd2f8f0', 'Superadmin', 'WhatsApp Image 2022-12-07 at 19.38.51.jpeg'),
(9, 'Hany Safitri', 'hany@gmail.com', 'hany', 'f88e6e106ca9911db8034f61df7f7f23', 'Superadmin', 'WhatsApp Image 2022-12-07 at 20.24.14.jpeg'),
(10, 'Salma Apriliana Saraswati', 'salma@gmail.com', 'salma', 'f6852b2a3ac0cd7e69c801f69eddb57a', 'Superadmin', 'WhatsApp Image 2022-12-07 at 19.39.00.jpeg'),
(11, 'Anugrah Bintang PS', 'anugerah@gmail.com', 'anugerah', 'd41d8cd98f00b204e9800998ecf8427e', 'Superadmin', 'WhatsApp Image 2022-12-09 at 10.02.38.jpeg'),
(12, 'Raudya Rifky Adzikra', 'raudya@gmail.com', 'raudya', 'd41d8cd98f00b204e9800998ecf8427e', 'Superadmin', 'WhatsApp Image 2022-12-14 at 14.54.58.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jenis_laporan`
--
ALTER TABLE `jenis_laporan`
  ADD PRIMARY KEY (`id_jenis_laporan`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_jenis_laporan` (`id_jenis_laporan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tag_berita`
--
ALTER TABLE `tag_berita`
  ADD PRIMARY KEY (`id_tag_berita`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_laporan`
--
ALTER TABLE `jenis_laporan`
  MODIFY `id_jenis_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag_berita`
--
ALTER TABLE `tag_berita`
  MODIFY `id_tag_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_jenis_laporan`) REFERENCES `jenis_laporan` (`id_jenis_laporan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`);

--
-- Constraints for table `tag_berita`
--
ALTER TABLE `tag_berita`
  ADD CONSTRAINT `tag_berita_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`),
  ADD CONSTRAINT `tag_berita_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
