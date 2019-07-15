-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 03:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_slamet`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aturan` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `aturan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Sehubungan kurang tertibnya para calon pendaki melaksanakan semua tahapan dalam booking online terutama pada saat upload bukti pembayaran, maka pembayaran dan upload bukti pembayaran pada link konfirmasi wajib dilakukan maksimal 1x24 jam setelah menerima kode booking.', NULL, '2019-07-09 00:27:07', '2019-07-09 00:27:07'),
(3, 'Pastikan alamat email benar karena konfirmasi booking pendakian akan dikirim ke alamat email yang anda gunakan untuk pendaftaran booking online, apabila tidak ada pesan pemberitahuan pada kotak masuk gmail harap periksa pada spam.', NULL, '2019-07-09 00:27:36', '2019-07-09 00:27:36'),
(4, 'PEMBAYARAN DAN UPLOAD BUKTI PEMBAYARAN PADA LINK KONFIRMASI YANG TIDAK DILAKUKAN DALAM WAKTU 1X24 JAM, MENGAKIBATKAN HANGUSNYA KODE BOOKING ANDA.', NULL, '2019-07-09 00:28:20', '2019-07-09 00:28:20'),
(5, 'BARANG SIAPA MELAKUKAN TINDAK PIDANA PENIPUAN/PEMALSUAN TIDAK AKAN DIBERIKAN IJIN UNTUK MENDAKI ATAU BERPARIWISATA (BLACK LIST).', NULL, '2019-07-09 00:28:34', '2019-07-09 00:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `judul`, `image`, `konten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Gunung Slamet', '951481549.jpg', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet (3.428 meter dpl.) adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah. Gunung Slamet merupakan gunung tertinggi di Jawa Tengah serta kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Kawah IV merupakan kawah terakhir yang masih aktif sampai sekarang, dan terakhir aktif hingga pada level siaga medio-2009.<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet cukup populer sebagai sasaran pendakian meskipun medannya dikenal sulit. Di kaki gunung ini terletak kawasan wisata Baturraden yang menjadi andalan Kabupaten Banyumas karena hanya berjarak sekitar 15 km dari Purwokerto.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Sejarawan Belanda, J. Noorduyn berteori bahwa nama \"Slamet\" adalah relatif baru, yaitu setelah masuknya Islam ke Jawa (kata itu merupakan pinjaman dari bahasa Arab). Ia mengemukakan pendapat bahwa yang disebut sebagai Gunung Agung dalam naskah berbahasa Sunda mengenai petualangan Bujangga Manik adalah Gunung Slamet, berdasarkan pemaparan lokasi yang disebutkan.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet memiliki cerita legenda yang turun temurun. Nama slamet diambil dari bahasa Jawa yang artinya selamat. Nama ini diberikan karena dipercaya gunung ini tidak pernah meletus besar dan memberi rasa aman bagi warga sekitar. Menurut kepercayaan warga sekitar, bila Gunung Slamet sampai meletus besar maka Pulau Jawa akan terbelah menjadi dua bagian.</p></p>\n', NULL, '2019-07-14 09:02:55', '2019-07-14 09:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1341585296.jpg', NULL, '2019-07-14 09:29:40', '2019-07-14 09:29:40'),
(2, '265869667.jpg', NULL, '2019-07-14 09:29:53', '2019-07-14 09:29:53'),
(3, '1349221739.jpg', NULL, '2019-07-14 09:30:18', '2019-07-14 09:30:18'),
(4, '142585096.jpg', NULL, '2019-07-14 09:30:33', '2019-07-14 09:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pendakian`
--

CREATE TABLE `jadwal_pendakian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pendakian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendakian` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_pendakian`
--

INSERT INTO `jadwal_pendakian` (`id`, `kode_pendakian`, `tanggal_pendakian`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'GS1563187144', '2019-07-30', NULL, '2019-07-15 03:39:54', '2019-07-15 03:39:54'),
(2, 'GS1563194067', '2019-07-27', NULL, '2019-07-15 05:36:33', '2019-07-15 05:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE `kuota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `kuota` int(3) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id`, `tanggal`, `kuota`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2019-07-30', 20, NULL, '2019-07-14 08:47:01', '2019-07-14 08:47:01'),
(2, '2019-07-27', 1, NULL, '2019-07-15 05:09:36', '2019-07-15 06:03:39'),
(3, '2019-07-28', 25, NULL, '2019-07-15 05:10:01', '2019-07-15 05:10:01'),
(4, '2019-07-29', 20, NULL, '2019-07-15 05:10:16', '2019-07-15 05:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aktivitas` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_03_072632_create_users_table', 1),
(2, '2019_07_03_162148_create_blogs_table', 1),
(3, '2019_07_03_162245_create_aturans_table', 1),
(4, '2019_07_03_163323_create_kuotas_table', 1),
(5, '2019_07_03_163341_create_galeris_table', 1),
(6, '2019_07_05_142634_create_sejarahs_table', 1),
(7, '2019_07_07_050237_create_jadwal_pendakians_table', 1),
(8, '2019_07_07_050333_create_pendakis_table', 1),
(9, '2019_07_09_101003_create_log_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaki`
--

CREATE TABLE `pendaki` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pendakian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_id` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_id` enum('KTP','NIK','KK','Kartu Pelajar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` enum('Lokal','Mancanegara') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` enum('Belum/Tidak Bekerja','Pelajar/Mahasiswa','Wiraswasta','Karyawan Swasta','Buruh','Lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Ketua','Anggota') COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` int(50) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaki`
--

INSERT INTO `pendaki` (`id`, `kode_pendakian`, `nama`, `alamat`, `no_hp`, `email`, `jenis_kelamin`, `no_id`, `jenis_id`, `kebangsaan`, `pekerjaan`, `status`, `biaya`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'GS1563187144', 'Akshay Waled', 'Tegal', '085741336588', 'afrizaf3@gmail.com', 'Laki-Laki', '16090045', 'Kartu Pelajar', 'Mancanegara', 'Pelajar/Mahasiswa', 'Ketua', 100000, NULL, '2019-07-15 03:39:56', '2019-07-15 03:39:56'),
(2, 'GS1563194067', 'Afriza Fadilah', 'Tegal', '085741336588', 'afrizaf3@gmail.com', 'Laki-Laki', '16090045', 'Kartu Pelajar', 'Lokal', 'Pelajar/Mahasiswa', 'Ketua', 20000, NULL, '2019-07-15 05:36:33', '2019-07-15 05:36:33'),
(3, 'GS1563194067', 'Fitri', 'Tegal', '088922367651', 'fitri@gmail.com', 'Perempuan', '16090045', 'Kartu Pelajar', 'Lokal', 'Pelajar/Mahasiswa', 'Anggota', 20000, NULL, '2019-07-15 05:37:18', '2019-07-15 05:37:18'),
(4, 'GS1563194067', 'Ahmad abdul', 'Tegal', '085671729800', 'ahdul@gmail.com', 'Laki-Laki', '132312213412', 'NIK', 'Lokal', 'Karyawan Swasta', 'Anggota', 20000, NULL, '2019-07-15 05:43:29', '2019-07-15 05:43:29'),
(5, 'GS1563194067', 'Risnawati', 'Tegal', '082265762234', 'risnaww@gmail.com', 'Perempuan', '3213345789889', 'KK', 'Lokal', 'Belum/Tidak Bekerja', 'Anggota', 20000, NULL, '2019-07-15 05:44:37', '2019-07-15 05:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `konten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet (3.428 meter dpl.) adalah sebuah gunung berapi kerucut yang terdapat di Pulau Jawa, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah. Gunung Slamet merupakan gunung tertinggi di Jawa Tengah serta kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Kawah IV merupakan kawah terakhir yang masih aktif sampai sekarang, dan terakhir aktif hingga pada level siaga medio-2009.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet cukup populer sebagai sasaran pendakian meskipun medannya dikenal sulit. Di kaki gunung ini terletak kawasan wisata Baturraden yang menjadi andalan Kabupaten Banyumas karena hanya berjarak sekitar 15 km dari Purwokerto.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Sejarawan Belanda, J. Noorduyn berteori bahwa nama \"Slamet\" adalah relatif baru, yaitu setelah masuknya Islam ke Jawa (kata itu merupakan pinjaman dari bahasa Arab). Ia mengemukakan pendapat bahwa yang disebut sebagai Gunung Agung dalam naskah berbahasa Sunda mengenai petualangan Bujangga Manik adalah Gunung Slamet, berdasarkan pemaparan lokasi yang disebutkan.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 15px; letter-spacing: 0.5px; text-align: justify;\">Gunung Slamet memiliki cerita legenda yang turun temurun. Nama slamet diambil dari bahasa Jawa yang artinya selamat. Nama ini diberikan karena dipercaya gunung ini tidak pernah meletus besar dan memberi rasa aman bagi warga sekitar. Menurut kepercayaan warga sekitar, bila Gunung Slamet sampai meletus besar maka Pulau Jawa akan terbelah menjadi dua bagian.</p>', NULL, '2019-07-09 17:30:44', '2019-07-09 17:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Afriza', 'afrizaf3@gmail.com', NULL, '$2y$10$IcMeTqnfyRec.oqzAOsH1.Hb0yakhi8u5YxAhOzdiivutyOFRAgd.', NULL, NULL, '2019-07-06 23:09:51', '2019-07-06 23:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pendakian`
--
ALTER TABLE `jadwal_pendakian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jadwal_pendakian_kode_pendakian_unique` (`kode_pendakian`);

--
-- Indexes for table `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaki`
--
ALTER TABLE `pendaki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_pendakian`
--
ALTER TABLE `jadwal_pendakian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendaki`
--
ALTER TABLE `pendaki`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
