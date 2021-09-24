-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 05:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eh_laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar_1` varchar(125) NOT NULL,
  `gambar_2` varchar(125) NOT NULL,
  `gambar_3` varchar(125) NOT NULL,
  `gambar_4` varchar(125) NOT NULL,
  `gambar_5` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `gambar2` varchar(125) DEFAULT NULL,
  `gambar3` varchar(125) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `tempat_kejadian` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`id_pengaduan`, `user_id`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `kewarganegaraan`, `alamat`, `keterangan`, `gambar`, `gambar2`, `gambar3`, `status`, `tanggal_kejadian`, `tempat_kejadian`, `created_at`, `updated_at`) VALUES
(2, 4, 'Tangerang', '2021-09-03', 'Perempuan', 'web developer', 'indonesia', 'pauhaji tangerang', 'kehilangan dompet dan masih banyak lagi dah pokonya', 'download.jpg-1630555057.jpg', NULL, NULL, 1, '2021-09-02', 'dekat', '2021-09-02 03:57:37', '2021-09-02 03:57:37'),
(3, 5, 'Tangerang', '2021-09-06', 'Laki - laki', 'buruh tani', 'indonesia', 'sepatan timur kabupaten tangerang', 'kehilangan beberapa padi dan yang lainya', 'Sampel+KPI+Bidang+IT+–+Information+Technology.jpg-1630822727.jpg', NULL, NULL, 1, '2021-09-05', 'sama', '2021-09-05 06:18:47', '2021-09-05 06:18:47'),
(5, 4, 'tangerang', '2021-09-09', 'Laki - laki', 'buruh', 'indonesia', 'tangerang', 'kehilangan bou', 'pa1.png-1631247764.png', 'pa.png-1631247764.png', 'logo_polri.png-1631247764.png', 0, '2021-09-09', 'kedaung sepatan', '2021-09-10 04:22:44', '2021-09-10 04:22:44'),
(6, 5, 'Tangerang 1', '2021-09-20', 'Laki - laki', 'web developer', 'indonesia', 'tanah merah', 'kehilangan hati', 'ss.jpg-1631438732.jpg', 'aldi.png-1631438732.png', ' ', 0, '2021-09-12', 'pasar', '2021-09-12 09:25:32', '2021-09-12 09:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `password`, `role_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'muhamad aldi setiiawan', 'aldi', '$2y$10$Ogm0d91CJyCDlT4sAuD48.ZGizymLoiMwNcww.PenaGX95BFg8Txu', 'PETUGAS', NULL, '2021-08-28 23:35:59', '2021-08-28 23:35:59'),
(3, 'aldo skut', 'aldo', '$2y$10$.Jvi9lg.ZrlVN.y5aRBlF.3O0mLaj4I4qEHMvaD/sECGU1V9epg22', 'USER', NULL, NULL, NULL),
(4, 'dila', 'dila02', '$2y$10$2XA2/86HNv0oxRLtjo0Qt.fXYnxf5BcLvKqRsdvMfZBXdVJQ.jALm', 'USER', NULL, NULL, NULL),
(5, 'verdian maulana', 'verdian', '$2y$10$idkupb6QGAVBzTWcR9ynDeXyEe8k13pn4UTzKCcuL4/7olE4JL17K', 'USER', NULL, NULL, NULL),
(6, 'aldo skut', 'ada', '$2y$10$...x9B8pgYsqkdp4Sh5Ib.2bTPWXjv4FEiksMPZ3WikBUL9W9tbsi', 'USER', NULL, NULL, NULL),
(7, 'ada', 'adad', '$2y$10$WcT.1vBSYv3lO/iapIacGO.JWgGkdtIHZVHN7chyVKVVDYE6qktfa', 'USER', NULL, NULL, NULL),
(8, 'muhamad aldo skuy', 'aldo29', '$2y$10$KeEmtDEXFDY2Wou29dO1Due5JCf2PH/guGXAUCH/O9aB6jHQE4eZC', 'PETUGAS', NULL, NULL, NULL),
(10, 'dua', 'satu', '$2y$10$TcT3qtgWZ1gk.84kyxLFU.Dn0kaESTqE.PyvU6CXfsGc0LZG/b94.', 'PETUGAS', NULL, NULL, NULL),
(11, 'siti lutfiah', 'sa', '$2y$10$4aZnFLaFqKCqkjEmgVl4MudumrX8y8vrfh7daBwBwvWwbwr6GXyuO', 'PETUGAS', NULL, NULL, NULL),
(13, 'dua', 'dua', '$2y$10$1pEdd1x/SdmylFRgfzcUaOSvFojCRbQObthrRcus7i4o.SnM80N2C', 'PETUGAS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
