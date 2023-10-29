-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2023 at 05:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disfar`
--

-- --------------------------------------------------------

--
-- Table structure for table `edukasi_ternaks`
--

CREATE TABLE `edukasi_ternaks` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_edukasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_edukasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_edukasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edukasi_ternaks`
--

INSERT INTO `edukasi_ternaks` (`id`, `jenis_edukasi`, `isi_edukasi`, `foto_edukasi`, `created_at`, `updated_at`) VALUES
(3, 'Pakan Ternak Kambing', 'Jenis Makanan:\n\nPastikan Anda memberi kambing makanan yang sesuai dengan usia dan tujuan pemeliharaan (daging atau susu).\nBiasanya, kambing diberi rumput segar, hijauan, jerami, pakan khusus kambing, dan makanan tambahan seperti jagung, kedelai, dan sisa makanan yang cocok.\nJadwal Pemberian Makanan:\n\nKambing sebaiknya diberi makan dua hingga tiga kali sehari, tergantung pada kebutuhan dan jenis kambingnya.\nKuantitas Makanan:\n\nKuantitas makanan yang diberikan harus cukup untuk memenuhi kebutuhan nutrisi kambing. Ini dapat bervariasi berdasarkan usia, berat, dan jenis kambing.', '20231019anams.jpg', '2023-10-19 09:10:58', '2023-10-19 09:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_10_114430_create_profil_kambings_table', 1),
(6, '2023_10_10_114445_create_edukasi_ternaks_table', 1),
(7, '2023_10_10_114512_create_riwayat_kesehatan_kambings_table', 1),
(8, '2023_10_10_114538_create_riwayat_reproduksi_kambings_table', 1),
(9, '2023_10_10_114556_create_penjualan_ternak_kambings_table', 1);

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
-- Table structure for table `penjualan_ternak_kambings`
--

CREATE TABLE `penjualan_ternak_kambings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `umur` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelebihan_kekurangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kisaran_harga_jual` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terjual` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan_ternak_kambings`
--

INSERT INTO `penjualan_ternak_kambings` (`id`, `user_id`, `umur`, `jenis`, `kelebihan_kekurangan`, `kisaran_harga_jual`, `no_wa`, `lampiran_foto`, `terjual`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'kambing jawa', 'tidak ada', '1200000', '08225681313', 'kambing2.jpeg', 'terjual', '2023-10-15 22:14:43', '2023-10-15 22:14:43'),
(2, 2, '1', 'kambing gibas', 'tidak ada', '1800000', '08225681313', 'kambing1.jpeg', NULL, '2023-10-15 22:14:43', '2023-10-15 22:14:43'),
(3, 1, '1', 'kambing tawa', 'tidak ada', '11', '082257661154', '20231029vector-users-icon.jpg', NULL, '2023-10-29 05:45:50', '2023-10-29 05:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_kambings`
--

CREATE TABLE `profil_kambings` (
  `id` bigint UNSIGNED NOT NULL,
  `nomor_ternak` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kambing` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_ternak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ternak` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_ternak` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesehatan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_kambings`
--

INSERT INTO `profil_kambings` (`id`, `nomor_ternak`, `jenis_kambing`, `jenis_kelamin_ternak`, `jenis_ternak`, `jumlah_ternak`, `umur`, `kesehatan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20232', 'kribos', 'alami', 'jual_beli(cempe)', '11', '1', 'sehat2', 2, '2023-10-15 22:15:06', '2023-10-15 22:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kesehatan_kambings`
--

CREATE TABLE `riwayat_kesehatan_kambings` (
  `id` bigint UNSIGNED NOT NULL,
  `profil_kambing_id` bigint UNSIGNED NOT NULL,
  `penyakit_sering_diderita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obat_digunakan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit_pernah_diderita` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sering_sakit` enum('sering','jarang','tidak_pernah') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tidak_pernah',
  `penanganan` enum('panggil_drh','panggil_mantri','diobati_sendiri') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'diobati_sendiri',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_kesehatan_kambings`
--

INSERT INTO `riwayat_kesehatan_kambings` (`id`, `profil_kambing_id`, `penyakit_sering_diderita`, `obat_digunakan`, `penyakit_pernah_diderita`, `sering_sakit`, `penanganan`, `created_at`, `updated_at`) VALUES
(1, 1, 'gatal', 'obat kaki', 'stress', 'jarang', 'panggil_mantri', '2023-10-23 07:59:38', '2023-10-23 07:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_reproduksi_kambings`
--

CREATE TABLE `riwayat_reproduksi_kambings` (
  `id` bigint UNSIGNED NOT NULL,
  `profil_kambing_id` bigint UNSIGNED NOT NULL,
  `melahirkan` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sehat_aman` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ya',
  `kawin_ternak` enum('buatan','alamai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'alamai',
  `tanggal_kawin` date NOT NULL,
  `tanggal_melahirkan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_reproduksi_kambings`
--

INSERT INTO `riwayat_reproduksi_kambings` (`id`, `profil_kambing_id`, `melahirkan`, `sehat_aman`, `kawin_ternak`, `tanggal_kawin`, `tanggal_melahirkan`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'ya', 'alamai', '2023-10-10', '2023-10-31', '2023-10-23 00:17:38', '2023-10-23 00:17:38'),
(2, 1, '1', 'ya', 'alamai', '2023-10-15', '2023-10-31', '2023-10-29 05:47:48', '2023-10-29 05:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akun` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `token_lupapassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `dusun`, `alamat`, `nohp`, `email`, `email_verified_at`, `password`, `role`, `status_akun`, `foto`, `token_lupapassword`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, '081123', 'admin@gmail.com', NULL, '$2y$10$JiDfmPTZtlm2ESjs3wp3.uqplONrK4JXWf6lPRbStv56.pNyOoHHG', 'admin', '1', 'default.jpg', NULL, NULL, '2023-10-15 22:14:42', '2023-10-15 22:14:42'),
(2, 'anam peternak', 'peternak', 'Dusun Gedor', 'BANYUWANGI KOTA', '08618000000', 'mifmelati@gmail.com', NULL, '$2y$10$zroSMCfYsdF3ST8OQUxyuOzaBAPj2yCuJcV41RVOCVEEHExtWnqRq', 'peternak', '1', '20231026vector-users-icon.jpg', '', NULL, '2023-10-15 22:14:42', '2023-10-26 10:43:27'),
(3, 'melati', 'melati22', 'Dusun Wonosuko', NULL, '0231313131', 'anam@gmail.com', NULL, '$2y$10$FmXKDC98m/9d5V.l2/8FPuJq27mPRNDnGyDQ12lU1GWIB3bkxSlI.', 'peternak', '1', 'default.jpg', NULL, NULL, '2023-10-15 22:30:02', '2023-10-23 08:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edukasi_ternaks`
--
ALTER TABLE `edukasi_ternaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `penjualan_ternak_kambings`
--
ALTER TABLE `penjualan_ternak_kambings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_ternak_kambings_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil_kambings`
--
ALTER TABLE `profil_kambings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profil_kambings_user_id_foreign` (`user_id`);

--
-- Indexes for table `riwayat_kesehatan_kambings`
--
ALTER TABLE `riwayat_kesehatan_kambings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_kesehatan_kambings_profil_kambing_id_foreign` (`profil_kambing_id`);

--
-- Indexes for table `riwayat_reproduksi_kambings`
--
ALTER TABLE `riwayat_reproduksi_kambings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_reproduksi_kambings_profil_kambing_id_foreign` (`profil_kambing_id`);

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
-- AUTO_INCREMENT for table `edukasi_ternaks`
--
ALTER TABLE `edukasi_ternaks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penjualan_ternak_kambings`
--
ALTER TABLE `penjualan_ternak_kambings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_kambings`
--
ALTER TABLE `profil_kambings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat_kesehatan_kambings`
--
ALTER TABLE `riwayat_kesehatan_kambings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat_reproduksi_kambings`
--
ALTER TABLE `riwayat_reproduksi_kambings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan_ternak_kambings`
--
ALTER TABLE `penjualan_ternak_kambings`
  ADD CONSTRAINT `penjualan_ternak_kambings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profil_kambings`
--
ALTER TABLE `profil_kambings`
  ADD CONSTRAINT `profil_kambings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `riwayat_kesehatan_kambings`
--
ALTER TABLE `riwayat_kesehatan_kambings`
  ADD CONSTRAINT `riwayat_kesehatan_kambings_profil_kambing_id_foreign` FOREIGN KEY (`profil_kambing_id`) REFERENCES `profil_kambings` (`id`);

--
-- Constraints for table `riwayat_reproduksi_kambings`
--
ALTER TABLE `riwayat_reproduksi_kambings`
  ADD CONSTRAINT `riwayat_reproduksi_kambings_profil_kambing_id_foreign` FOREIGN KEY (`profil_kambing_id`) REFERENCES `profil_kambings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
