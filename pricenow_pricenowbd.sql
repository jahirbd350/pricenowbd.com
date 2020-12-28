-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.10.5:3306
-- Generation Time: Dec 28, 2020 at 09:41 AM
-- Server version: 10.3.14-MariaDB
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
-- Database: `pricenow_pricenowbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(500) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Acer', 'acer_logo.png', '1', '2020-06-28 01:19:30', '2020-06-28 13:17:44'),
(2, 'Alcatel', 'alcatel_logo.png', '1', '2020-06-28 01:20:20', NULL),
(3, 'Apple', 'apple_logo.png', '1', '2020-06-28 01:20:36', NULL),
(4, 'Asus', 'asus_logo.png', '1', '2020-06-28 01:20:51', NULL),
(5, 'BlackBerry', 'blackberry_logo.png', '1', '2020-06-28 01:21:07', NULL),
(6, 'BLU', 'blu_logo.png', '1', '2020-06-28 01:21:21', NULL),
(7, 'Gionee', 'gionee_logo_.png', '1', '2020-06-28 01:24:38', NULL),
(8, 'Google', 'google_logo.png', '1', '2020-06-28 01:25:15', NULL),
(9, 'HTC', 'htc_logo.png', '1', '2020-06-28 01:25:28', NULL),
(10, 'Honor', 'honor_Logo.png', '1', '2020-06-28 01:25:40', NULL),
(11, 'Huawei', 'huawei_logo.png', '1', '2020-06-28 01:26:04', NULL),
(12, 'Infinix', 'infinix_logo.png', '1', '2020-06-28 01:27:22', NULL),
(13, 'Lava', 'lava_logo.png', '1', '2020-06-28 01:29:27', NULL),
(14, 'Lenovo', 'lenovo_logo.png', '1', '2020-06-28 01:29:43', NULL),
(15, 'LG', 'LG_Logo.png', '1', '2020-06-28 01:29:53', NULL),
(16, 'Micromax', 'micromax_logo.png', '1', '2020-06-28 01:30:14', NULL),
(17, 'Microsoft', 'microsoft_logo.png', '1', '2020-06-28 01:37:33', NULL),
(18, 'Motorola', 'motorola_logo.png', '1', '2020-06-28 01:41:08', NULL),
(19, 'Nokia', 'nokia_logo.png', '1', '2020-06-28 05:22:59', NULL),
(20, 'OnePlus', 'OnePlus_logo.png', '1', '2020-06-28 05:24:56', NULL),
(21, 'Oppo', 'oppo_logo.png', '1', '2020-06-28 05:25:12', NULL),
(22, 'RealMe', 'realme_logo.png', '1', '2020-06-28 05:26:03', NULL),
(23, 'Samsung', 'samsung_logo.png', '1', '2020-06-28 05:26:23', NULL),
(24, 'Sony', 'sony_logo.png', '1', '2020-06-28 05:26:37', NULL),
(25, 'Tecno', 'tecno_logo.png', '1', '2020-06-28 05:26:51', NULL),
(26, 'Vivo', 'vivo_logo.png', '1', '2020-06-28 05:27:06', NULL),
(27, 'Xiaomi', 'xiaomi_logo.png', '1', '2020-06-28 05:27:20', NULL),
(28, 'ZTE', 'zte_logo.png', '1', '2020-06-28 05:27:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `main_image` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_name`, `model_name`, `main_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'S20 Plus', 'samsung_galaxy_s20_plus_main.png', 1, '2020-06-28 22:24:22', '2020-06-29 18:31:38'),
(2, 'Samsung', 'S20', 'samsung_galaxy_s20_main.png', 1, '2020-06-28 22:25:18', NULL),
(3, 'Samsung', 'S10 Plus', 'samsung_galaxy_s10_plus_main.png', 1, '2020-06-28 22:25:37', NULL),
(4, 'Samsung', 'S10 Lite', 'samsung_galaxy_s10_lite_main.png', 1, '2020-06-28 22:25:58', NULL),
(5, 'Samsung', 'S6 Active', 'samsung_galaxy_s6_active_main.png', 1, '2020-07-06 01:48:47', NULL),
(6, 'Samsung', 'S7', 'samsung_galaxy_s7_main.png', 1, '2020-07-06 01:49:28', NULL),
(7, 'Samsung', 'S7 Active', 'samsung_galaxy_s7_active_main.png', 1, '2020-07-06 01:50:33', NULL),
(8, 'Samsung', 'S7 Edge', 'samsung_galaxy_s7_edge_main.png', 1, '2020-07-06 01:50:57', NULL),
(9, 'Samsung', 'S8', 'samsung_galaxy_s8_main.png', 1, '2020-07-06 01:51:29', NULL),
(10, 'Samsung', 'S8 Plus', 'samsung_galaxy_s8_plus_main.png', 1, '2020-07-06 01:52:52', NULL),
(11, 'Samsung', 'S9', 'samsung_galaxy_s9_main.png', 1, '2020-07-06 01:55:18', NULL),
(12, 'Samsung', 'S9 Plus', 'samsung_galaxy_s9_plus_main.png', 1, '2020-07-06 01:55:44', NULL),
(13, 'Samsung', 'S10', 'samsung_galaxy_s10_main.png', 1, '2020-07-06 01:56:20', NULL),
(14, 'Samsung', 'S10 5G', 'samsung_galaxy_s10_5g_main.png', 1, '2020-07-06 01:56:43', NULL),
(15, 'Samsung', 'S10 E', 'samsung_galaxy_s10_e_main.png', 1, '2020-07-06 01:57:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(200) NOT NULL,
  `price_usd` int(11) DEFAULT NULL,
  `price_bdt_official` int(11) DEFAULT NULL,
  `price_bdt_unofficial` int(11) DEFAULT NULL,
  `images` varchar(500) NOT NULL,
  `technology` varchar(200) NOT NULL,
  `2g_bands` varchar(200) NOT NULL,
  `3g_bands` varchar(200) NOT NULL,
  `4g_bands` varchar(200) NOT NULL,
  `5g_bands` varchar(200) NOT NULL,
  `speed` varchar(200) NOT NULL,
  `announced` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `dimensions` varchar(500) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `build` varchar(200) NOT NULL,
  `sim` varchar(100) NOT NULL,
  `display_type` varchar(200) NOT NULL,
  `display_size` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `display_protection` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `chipset` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `gpu` varchar(100) NOT NULL,
  `card_slot` varchar(100) NOT NULL,
  `internal` varchar(100) NOT NULL,
  `camera_quad` varchar(100) NOT NULL,
  `camera_features` varchar(100) NOT NULL,
  `camera_video` varchar(100) NOT NULL,
  `selfie_dual` varchar(100) NOT NULL,
  `features` varchar(100) NOT NULL,
  `selfie_video` varchar(100) NOT NULL,
  `loudspeaker` varchar(100) NOT NULL,
  `audio_jack` varchar(100) NOT NULL,
  `wlan` varchar(100) NOT NULL,
  `bluetooth` varchar(100) NOT NULL,
  `gps` varchar(100) NOT NULL,
  `nfc` varchar(10) NOT NULL,
  `radio` varchar(100) NOT NULL,
  `usb` varchar(100) NOT NULL,
  `sensors` varchar(100) NOT NULL,
  `charging` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `models` varchar(100) NOT NULL,
  `sar` varchar(20) NOT NULL,
  `sar_eu` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `test_performance` varchar(100) NOT NULL,
  `test_display` varchar(100) NOT NULL,
  `test_camera` varchar(100) NOT NULL,
  `test_loudspeaker` varchar(100) NOT NULL,
  `test_battery_life` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`id`, `brand`, `model`, `price_usd`, `price_bdt_official`, `price_bdt_unofficial`, `images`, `technology`, `2g_bands`, `3g_bands`, `4g_bands`, `5g_bands`, `speed`, `announced`, `status`, `dimensions`, `weight`, `build`, `sim`, `display_type`, `display_size`, `resolution`, `display_protection`, `os`, `chipset`, `cpu`, `gpu`, `card_slot`, `internal`, `camera_quad`, `camera_features`, `camera_video`, `selfie_dual`, `features`, `selfie_video`, `loudspeaker`, `audio_jack`, `wlan`, `bluetooth`, `gps`, `nfc`, `radio`, `usb`, `sensors`, `charging`, `colors`, `models`, `sar`, `sar_eu`, `price`, `test_performance`, `test_display`, `test_camera`, `test_loudspeaker`, `test_battery_life`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'S20 Ultra', 153, 18983, 397321, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-06-06 14:04:46', '2020-06-06 14:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `profile_pic`, `password`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Md Jahirul Islam', 'jahirbd350@gmail.com', '', 'J@hir467350', 'admin', '2020-06-15 18:33:43', '2020-06-15 07:54:10'),
(2, 'Md Moklesur Rahman', 'mintu556@gmail.com', '', 'Mintu556', 'admin', '2020-06-25 07:06:57', '2020-06-25 07:06:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
