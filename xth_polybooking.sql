-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 08:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xth_polybooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `ngay_dat` datetime NOT NULL,
  `ngay_to_chuc` date NOT NULL,
  `thoi_gian_bat_dau` time NOT NULL,
  `thoi_gian_ket_thuc` time NOT NULL,
  `su_kien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu_admin` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong` int(10) UNSIGNED DEFAULT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT 0,
  `id_bo_mon` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_phong` int(10) UNSIGNED NOT NULL,
  `id_ca_hoc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_mon`
--

CREATE TABLE `bo_mon` (
  `id_bo_mon` int(10) UNSIGNED NOT NULL,
  `ten_bo_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ca_hoc`
--

CREATE TABLE `ca_hoc` (
  `id_ca_hoc` int(10) UNSIGNED NOT NULL,
  `ten_ca_hoc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian_bat_dau` time NOT NULL,
  `thoi_gian_ket_thuc` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `co_so`
--

CREATE TABLE `co_so` (
  `id_co_so` int(10) UNSIGNED NOT NULL,
  `ten_co_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loai_phong` int(10) UNSIGNED NOT NULL,
  `ten_loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(10) UNSIGNED NOT NULL,
  `ten_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phong_status` tinyint(1) NOT NULL DEFAULT 0,
  `id_loai_phong` int(10) UNSIGNED NOT NULL,
  `id_co_so` int(10) UNSIGNED NOT NULL,
  `id_tang` int(10) UNSIGNED NOT NULL,
  `id_toa_nha` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tang`
--

CREATE TABLE `tang` (
  `id_tang` int(10) UNSIGNED NOT NULL,
  `ten_tang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toa_nha` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toa_nha`
--

CREATE TABLE `toa_nha` (
  `id_toa_nha` int(10) UNSIGNED NOT NULL,
  `ten_toa_nha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_co_so` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `booking_id_bo_mon_foreign` (`id_bo_mon`),
  ADD KEY `booking_id_user_foreign` (`id_user`),
  ADD KEY `booking_id_phong_foreign` (`id_phong`),
  ADD KEY `booking_id_ca_hoc_foreign` (`id_ca_hoc`);

--
-- Indexes for table `bo_mon`
--
ALTER TABLE `bo_mon`
  ADD PRIMARY KEY (`id_bo_mon`),
  ADD UNIQUE KEY `bo_mon_ten_bo_mon_unique` (`ten_bo_mon`);

--
-- Indexes for table `ca_hoc`
--
ALTER TABLE `ca_hoc`
  ADD PRIMARY KEY (`id_ca_hoc`),
  ADD UNIQUE KEY `ca_hoc_ten_ca_hoc_unique` (`ten_ca_hoc`);

--
-- Indexes for table `co_so`
--
ALTER TABLE `co_so`
  ADD PRIMARY KEY (`id_co_so`),
  ADD UNIQUE KEY `co_so_ten_co_so_unique` (`ten_co_so`),
  ADD UNIQUE KEY `co_so_dia_chi_unique` (`dia_chi`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loai_phong`),
  ADD UNIQUE KEY `loai_phong_ten_loai_phong_unique` (`ten_loai_phong`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `phong_id_loai_phong_foreign` (`id_loai_phong`),
  ADD KEY `phong_id_co_so_foreign` (`id_co_so`),
  ADD KEY `phong_id_tang_foreign` (`id_tang`),
  ADD KEY `phong_id_toa_nha_foreign` (`id_toa_nha`);

--
-- Indexes for table `tang`
--
ALTER TABLE `tang`
  ADD PRIMARY KEY (`id_tang`),
  ADD UNIQUE KEY `tang_ten_tang_unique` (`ten_tang`),
  ADD KEY `tang_id_toa_nha_foreign` (`id_toa_nha`);

--
-- Indexes for table `toa_nha`
--
ALTER TABLE `toa_nha`
  ADD PRIMARY KEY (`id_toa_nha`),
  ADD UNIQUE KEY `toa_nha_ten_toa_nha_unique` (`ten_toa_nha`),
  ADD KEY `toa_nha_id_co_so_foreign` (`id_co_so`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_so_dien_thoai_unique` (`so_dien_thoai`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_id_bo_mon_foreign` FOREIGN KEY (`id_bo_mon`) REFERENCES `bo_mon` (`id_bo_mon`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_id_ca_hoc_foreign` FOREIGN KEY (`id_ca_hoc`) REFERENCES `ca_hoc` (`id_ca_hoc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_id_phong_foreign` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_id_co_so_foreign` FOREIGN KEY (`id_co_so`) REFERENCES `co_so` (`id_co_so`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phong_id_loai_phong_foreign` FOREIGN KEY (`id_loai_phong`) REFERENCES `loai_phong` (`id_loai_phong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phong_id_tang_foreign` FOREIGN KEY (`id_tang`) REFERENCES `tang` (`id_tang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phong_id_toa_nha_foreign` FOREIGN KEY (`id_toa_nha`) REFERENCES `toa_nha` (`id_toa_nha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tang`
--
ALTER TABLE `tang`
  ADD CONSTRAINT `tang_id_toa_nha_foreign` FOREIGN KEY (`id_toa_nha`) REFERENCES `toa_nha` (`id_toa_nha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `toa_nha`
--
ALTER TABLE `toa_nha`
  ADD CONSTRAINT `toa_nha_id_co_so_foreign` FOREIGN KEY (`id_co_so`) REFERENCES `co_so` (`id_co_so`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
