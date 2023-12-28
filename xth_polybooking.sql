-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 10:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.12

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
  `ngay_dat` date NOT NULL,
  `ngay_to_chuc` date NOT NULL,
  `thoi_gian_bat_dau` time NOT NULL,
  `su_kien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu_admin` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ly_do_huy` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong` int(10) UNSIGNED DEFAULT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT 0,
  `id_bo_mon` tinyint(3) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_phong` int(10) UNSIGNED NOT NULL,
  `id_ca_hoc` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `ngay_dat`, `ngay_to_chuc`, `thoi_gian_bat_dau`, `su_kien`, `ghi_chu_admin`, `ly_do_huy`, `so_luong`, `booking_status`, `id_bo_mon`, `id_user`, `id_phong`, `id_ca_hoc`, `created_at`, `updated_at`) VALUES
(1, '2023-11-19', '2023-11-19', '07:30:00', 'Event 1', NULL, NULL, NULL, 0, 1, 3, 1, 8, '2023-11-17 17:59:54', '2023-11-18 04:27:52'),
(2, '2023-11-19', '2023-11-19', '07:30:00', 'Event 2', NULL, NULL, NULL, 0, 1, 3, 2, 7, '2023-11-17 17:59:54', '2023-11-18 19:14:25'),
(3, '2023-11-19', '2023-11-19', '07:30:00', 'Event 3', NULL, NULL, NULL, 0, 1, 3, 3, 1, '2023-11-17 17:59:54', '2023-11-18 04:32:17'),
(4, '2023-11-19', '2023-11-19', '07:30:00', 'Event 4', NULL, NULL, NULL, 0, 1, 3, 4, 1, '2023-11-17 17:59:54', '2023-11-18 19:14:51'),
(5, '2023-11-19', '2023-11-19', '07:30:00', 'Event 5', NULL, NULL, NULL, 0, 1, 3, 5, 1, '2023-11-17 17:59:54', '2023-11-18 04:16:13'),
(6, '2023-11-19', '2023-11-20', '07:30:00', 'demo booking room', NULL, NULL, 100, 1, 1, 3, 2, 7, '2023-11-18 19:06:52', '2023-11-19 02:53:45'),
(10, '2023-11-19', '2023-11-22', '10:38:00', 'demo booking room cntt', 'Kẹt phòng', NULL, 100, 3, 1, 3, 2, 7, '2023-11-19 03:38:19', '2023-11-19 03:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `bo_mon`
--

CREATE TABLE `bo_mon` (
  `id_bo_mon` tinyint(3) UNSIGNED NOT NULL,
  `ten_bo_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bo_mon`
--

INSERT INTO `bo_mon` (`id_bo_mon`, `ten_bo_mon`, `created_at`, `updated_at`) VALUES
(1, 'CNTT', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, 'Quản trị kinh doanh', '2023-11-17 17:57:51', '2023-11-17 17:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `ca_hoc`
--

CREATE TABLE `ca_hoc` (
  `id_ca_hoc` tinyint(3) UNSIGNED NOT NULL,
  `ten_ca_hoc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_ca_hoc` tinyint(1) NOT NULL,
  `thoi_gian_bat_dau` time NOT NULL,
  `thoi_gian_ket_thuc` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ca_hoc`
--

INSERT INTO `ca_hoc` (`id_ca_hoc`, `ten_ca_hoc`, `loai_ca_hoc`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `created_at`, `updated_at`) VALUES
(1, 'Ca 1', 1, '07:15:00', '09:15:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, 'Ca 2', 1, '09:25:00', '11:25:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(3, 'Ca 3', 1, '12:00:00', '14:00:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(4, 'Ca 4', 1, '14:10:00', '16:10:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(5, 'Ca 5', 1, '16:20:00', '18:20:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(6, 'Ca 6', 1, '18:30:00', '20:30:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(7, 'Buổi sáng', 2, '07:00:00', '12:00:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(8, 'Buổi chiều', 2, '13:00:00', '18:00:00', '2023-11-17 17:57:51', '2023-11-17 17:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `co_so`
--

CREATE TABLE `co_so` (
  `id_co_so` tinyint(3) UNSIGNED NOT NULL,
  `ten_co_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `co_so`
--

INSERT INTO `co_so` (`id_co_so`, `ten_co_so`, `dia_chi`, `created_at`, `updated_at`) VALUES
(1, 'Cơ sở Nguyễn Kiệm', '778/B1 đường Nguyễn Kiệm, Phường 4, Q. Phú Nhuận, Tp. HCM', NULL, NULL),
(2, 'Cơ sở CV Phần Mềm Quang Trung, Quận 12, TP.HCM', 'Công viên phần mềm Quang Trung, phường Tân Chánh Hiệp, quận 12, TP Hồ Chí Minh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loai_phong` tinyint(3) UNSIGNED NOT NULL,
  `ten_loai_phong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_phong`
--

INSERT INTO `loai_phong` (`id_loai_phong`, `ten_loai_phong`, `created_at`, `updated_at`) VALUES
(1, 'Phòng học', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, 'Hội trường', '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(3, 'Xưởng thực hành', '2023-11-17 17:57:51', '2023-11-17 17:57:51');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_29_172338_create_bo_mon_table', 1),
(6, '2023_09_29_172420_create_ca_hoc_table', 1),
(7, '2023_09_29_172434_create_loai_phong_table', 1),
(8, '2023_09_29_172445_create_co_so_table', 1),
(9, '2023_09_29_172454_create_toa_nha_table', 1),
(10, '2023_09_29_172502_create_tang_table', 1),
(11, '2023_09_29_172511_create_phong_table', 1),
(12, '2023_09_29_172520_create_booking_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `id_loai_phong` tinyint(3) UNSIGNED NOT NULL,
  `id_co_so` tinyint(3) UNSIGNED NOT NULL,
  `id_tang` tinyint(3) UNSIGNED NOT NULL,
  `id_toa_nha` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id_phong`, `ten_phong`, `id_loai_phong`, `id_co_so`, `id_tang`, `id_toa_nha`, `created_at`, `updated_at`) VALUES
(1, 'Xưởng thực hành bộ môn CNTT', 3, 2, 1, 1, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, 'Hội trường', 2, 2, 2, 2, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(3, '01', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(4, '02', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(5, '03', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(6, '04', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(7, '05', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(8, '06', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(9, '07', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(10, '08', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(11, '09', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(12, '10', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(13, '11', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(14, '12', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(15, '13', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(16, '14', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(17, '15', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(18, '16', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(19, '17', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(20, '18', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(21, '19', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(22, '20', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(23, '21', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(24, '22', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(25, '23', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(26, '24', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(27, '25', 1, 2, 3, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(28, '01', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(29, '02', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(30, '03', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(31, '04', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(32, '05', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(33, '06', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(34, '07', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(35, '08', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(36, '09', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(37, '10', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(38, '11', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(39, '12', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(40, '13', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(41, '14', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(42, '15', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(43, '16', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(44, '17', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(45, '18', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(46, '19', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(47, '20', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(48, '21', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(49, '22', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(50, '23', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(51, '24', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(52, '25', 1, 2, 4, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(53, '01', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(54, '02', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(55, '03', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(56, '04', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(57, '05', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(58, '06', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(59, '07', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(60, '08', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(61, '09', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(62, '10', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(63, '11', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(64, '12', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(65, '13', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(66, '14', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(67, '15', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(68, '16', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(69, '17', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(70, '18', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(71, '19', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(72, '20', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(73, '21', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(74, '22', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(75, '23', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(76, '24', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(77, '25', 1, 2, 5, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(78, '01', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(79, '02', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(80, '03', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(81, '04', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(82, '05', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(83, '06', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(84, '07', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(85, '08', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(86, '09', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(87, '10', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(88, '11', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(89, '12', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(90, '13', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(91, '14', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(92, '15', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(93, '16', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(94, '17', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(95, '18', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(96, '19', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(97, '20', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(98, '21', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(99, '22', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(100, '23', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(101, '24', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(102, '25', 1, 2, 6, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(103, '01', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(104, '02', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(105, '03', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(106, '04', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(107, '05', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(108, '06', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(109, '07', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(110, '08', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(111, '09', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(112, '10', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(113, '11', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(114, '12', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(115, '13', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(116, '14', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(117, '15', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(118, '16', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(119, '17', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(120, '18', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(121, '19', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(122, '20', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(123, '21', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(124, '22', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(125, '23', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(126, '24', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(127, '25', 1, 2, 7, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(128, '01', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(129, '02', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(130, '03', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(131, '04', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(132, '05', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(133, '06', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(134, '07', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(135, '08', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(136, '09', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(137, '10', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(138, '11', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(139, '12', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(140, '13', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(141, '14', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(142, '15', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(143, '16', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(144, '17', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(145, '18', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(146, '19', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(147, '20', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(148, '21', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(149, '22', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(150, '23', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(151, '24', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(152, '25', 1, 2, 8, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(153, '01', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(154, '02', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(155, '03', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(156, '04', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(157, '05', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(158, '06', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(159, '07', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(160, '08', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(161, '09', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(162, '10', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(163, '11', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(164, '12', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(165, '13', 1, 2, 9, 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(166, '14', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(167, '15', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(168, '16', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(169, '17', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(170, '18', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(171, '19', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(172, '20', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(173, '21', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(174, '22', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(175, '23', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(176, '24', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(177, '25', 1, 2, 9, 3, '2023-11-17 17:57:52', '2023-11-17 17:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `tang`
--

CREATE TABLE `tang` (
  `id_tang` tinyint(3) UNSIGNED NOT NULL,
  `ten_tang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_toa_nha` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tang`
--

INSERT INTO `tang` (`id_tang`, `ten_tang`, `id_toa_nha`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, '1', 2, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(3, '1', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(4, '2', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(5, '3', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(6, '8', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(7, '9', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(8, '10', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(9, '11', 3, '2023-11-17 17:57:51', '2023-11-17 17:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `toa_nha`
--

CREATE TABLE `toa_nha` (
  `id_toa_nha` tinyint(3) UNSIGNED NOT NULL,
  `ten_toa_nha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_co_so` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toa_nha`
--

INSERT INTO `toa_nha` (`id_toa_nha`, `ten_toa_nha`, `id_co_so`, `created_at`, `updated_at`) VALUES
(1, 'F', 2, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(2, 'P', 2, '2023-11-17 17:57:51', '2023-11-17 17:57:51'),
(3, 'T', 2, '2023-11-17 17:57:51', '2023-11-17 17:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `so_dien_thoai`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thiên Phúc', '0776349260', 'ttphuc141195@gmail.com', '2023-11-17 17:57:52', '$2y$10$oTVbaGbO0R2XfD4o9zR9j./dUreDDrUa/KuSYyP2nJKI.60sFOebe', 1, NULL, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(2, 'Admin', '0123456789', 'admin@fe.edu.vn', '2023-11-17 17:57:52', '$2y$10$R3fKpUB7qVOwYg4TbGbQVuJ78yjD6jmhFlkIflaYYEyYxOkGUywm6', 0, NULL, '2023-11-17 17:57:52', '2023-11-17 17:57:52'),
(3, 'Trần Thị Mỹ Tâm', '0383749441', 'tranthimytam0721@gmail.com', '2023-11-17 17:57:52', '$2y$10$A0Yka1GSHvuud5n3AtNjmO9BB05Koc6ABhhDoELK99jC6ljdLMAPa', 1, NULL, '2023-11-17 17:57:52', '2023-11-17 17:57:52');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loai_phong`),
  ADD UNIQUE KEY `loai_phong_ten_loai_phong_unique` (`ten_loai_phong`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bo_mon`
--
ALTER TABLE `bo_mon`
  MODIFY `id_bo_mon` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ca_hoc`
--
ALTER TABLE `ca_hoc`
  MODIFY `id_ca_hoc` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `co_so`
--
ALTER TABLE `co_so`
  MODIFY `id_co_so` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id_loai_phong` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tang`
--
ALTER TABLE `tang`
  MODIFY `id_tang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `toa_nha`
--
ALTER TABLE `toa_nha`
  MODIFY `id_toa_nha` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_id_bo_mon_foreign` FOREIGN KEY (`id_bo_mon`) REFERENCES `bo_mon` (`id_bo_mon`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_id_ca_hoc_foreign` FOREIGN KEY (`id_ca_hoc`) REFERENCES `ca_hoc` (`id_ca_hoc`) ON DELETE CASCADE ON UPDATE CASCADE,
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
