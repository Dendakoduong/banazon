-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 10:11 AM
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
-- Database: `banazondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `firstname`, `lastname`, `company`, `address`, `postal`, `city`, `country`, `phone`) VALUES
(3, 18, 'Home', 'Van A', 'Nguyen', NULL, '265 Giang Vo Street, Cat Linh Ward, Dong Da District', '100000', 'Hanoi', 'VN', '+84 (098) 123-4567'),
(4, 18, 'Office', 'Van A', 'Nguyen', 'Banazon, Inc.', '1F Thai Ha Street, Dong Da District', '100000', 'Hanoi', 'VN', '+84 (098) 123-4567');

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`) VALUES
(1, 'Viettel Post', 'Estimated time: 1-3 days. Shipping insurance included', 400),
(2, 'Vietnam Post', 'Estimated time: 2-4 days. Shipping insurance included', 200),
(3, 'Giaohangtietkiem.vn', 'Estimated time: 4-7 days. Shipping insurance included', 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'iPhone'),
(3, 'iPad'),
(4, 'MacBook'),
(5, 'Watch'),
(6, 'AirPods'),
(7, 'iMac'),
(8, 'Accessories'),
(9, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220216090224', '2022-02-16 09:02:53', 195),
('DoctrineMigrations\\Version20220216094827', '2022-02-16 09:48:41', 54),
('DoctrineMigrations\\Version20220218171218', '2022-02-18 17:12:29', 198),
('DoctrineMigrations\\Version20220219105301', '2022-02-19 10:53:16', 221),
('DoctrineMigrations\\Version20220220215719', '2022-02-20 21:57:28', 237),
('DoctrineMigrations\\Version20220222211707', '2022-02-22 21:17:36', 172),
('DoctrineMigrations\\Version20220226160703', '2022-02-26 16:07:11', 356),
('DoctrineMigrations\\Version20220227163839', '2022-02-27 16:38:48', 677),
('DoctrineMigrations\\Version20220227195406', '2022-03-06 19:10:19', 59),
('DoctrineMigrations\\Version20220320164349', '2022-03-20 17:43:57', 34),
('DoctrineMigrations\\Version20220321141846', '2022-03-21 15:18:54', 55),
('DoctrineMigrations\\Version20220329100058', '2022-03-29 12:01:11', 128),
('DoctrineMigrations\\Version20220401085112', '2022-04-01 10:51:23', 128),
('DoctrineMigrations\\Version20220401092032', '2022-04-01 11:20:39', 28);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `btn_title` varchar(255) NOT NULL,
  `btn_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `content`, `btn_title`, `btn_url`, `image`) VALUES
(3, 'iPhone 14 Pro series', 'From $999', 'Buy', 'products/iphone-14-pro-purple-128gb', 'a68821f2a12a21014f6c9fd6a7c37facea3d2806.png'),
(4, 'iPhone 14 series', 'From $799', 'Buy', 'products/iphone-14-blue-128gb', '735c8e897a82f15c45987ba1e1d9bdc9b23d8849.png'),
(5, 'MacBook Air 15” model with M2 chip', 'Strikingly thin and fast so you can work, play, or create anywhere. Starting at $1299', 'Buy', 'products/macbook-air-15-m2-2023-starlight-base', '2687f0ffb721b263f4c52530c563ce2d78e540c1.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `carrier_name` varchar(255) NOT NULL,
  `carrier_price` varchar(255) NOT NULL,
  `delivery` longtext NOT NULL,
  `reference` varchar(255) NOT NULL,
  `stripe_session` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `carrier_name`, `carrier_price`, `delivery`, `reference`, `stripe_session`, `state`) VALUES
(124, 18, '2023-07-19 13:39:09', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230719133909-64b7cb5dc9f59', 'cs_test_b1yTAcPx2PrXBPRgjqHQtUmYlV0VglHc1OvgHmHSkPcxj9aZs0ky8EV0nm', 1),
(125, 18, '2023-07-19 14:53:33', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230719145333-64b7dccd477ab', 'cs_test_b1BOHkUbeELYTUDwP6l0NTbU7WMPA5ly5M331xMR3XKKkwKQrzAV1l6zwd', 2),
(126, 18, '2023-07-19 19:46:21', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230719194621-64b8216dcf1fc', 'cs_test_b1XLCRSUiiIrcBeknVgmpTQAbqEIqeYc754dgLMPZ93oouCDAi58qvNnNI', 3),
(127, 18, '2023-07-20 17:32:30', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230720173230-64b9538eb5b40', 'cs_test_b1BgEyWx1GuOSajkBFTWdjBc0r8PLkjjwtkDbWNwOihqq2WS1qt45fGrZZ', 1),
(128, 18, '2023-07-20 17:59:34', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230720175934-64b959e61419d', 'cs_test_b1kX8O3vzqOywenXr9N4GDLad2PcLmKCxD4PPQvJ5pijY3jnhA83kb6UAv', 0),
(129, 18, '2023-07-23 09:52:20', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230723095220-64bcdc343c137', 'cs_test_b1tXEMnuPYDf7aRtzJmrex29XrxY4SFBnW3ccYbay4y3t9XZVTa3TutpD9', 1),
(130, 18, '2023-07-24 06:05:01', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230724060501-64bdf86d8ee28', NULL, 0),
(131, 18, '2023-07-24 06:14:04', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230724061404-64bdfa8cbda78', 'cs_test_b1IF18KoR9fVBC6tbHQMuGvZyTVESnYXvcHSV0pYle7DV9ZNb55HOu7Nlm', 0),
(132, 18, '2023-07-25 17:41:41', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN', '20230725174141-64bfed35c6b8d', NULL, 0),
(133, 18, '2023-07-27 04:47:19', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN<br>', '20230727044719-64c1dab7233b7', 'cs_test_b1nYyjhGoSl3gtitQ6v080V0HJunFhCAOGsqpjMMXOEGyaNmClRPeOavLd', 1),
(134, 18, '2023-07-27 04:54:16', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230727045416-64c1dc58ac718', 'cs_test_b1AB5sRxM5tCUJQUXhzsn59fzJNSfQNiLXFRF4KIleRZejl8BIQkYGbJok', 1),
(135, 18, '2023-07-29 04:54:14', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>265 Giang Vo Street, Cat Linh Ward, Dong Da District<br>100000<br>Hanoi, VN<br>', '20230729045414-64c47f56404af', 'cs_test_b19F9AzjUlD7aUfr7QKEI8y81xBmb5PEX2jlUNecVNK6AsaUccFlqRI1vc', 1),
(136, 18, '2023-08-02 10:02:45', 'Giaohangtietkiem.vn', '100', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230802100245-64ca0da5ab49c', NULL, 0),
(137, 18, '2023-08-02 10:04:03', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230802100403-64ca0df3f1681', NULL, 0),
(138, 18, '2023-08-02 10:06:13', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230802100613-64ca0e7555bf2', NULL, 0),
(139, 18, '2023-08-02 10:06:18', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230802100618-64ca0e7a2504c', NULL, 0),
(140, 18, '2023-08-02 10:07:06', 'Viettel Post', '400', 'Van A Nguyen<br>+84 (098) 123-4567<br>1F Thai Ha Street, Dong Da District<br>100000<br>Hanoi, VN<br>Banazon, Inc.', '20230802100706-64ca0eaa192a6', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `binded_order_id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `binded_order_id`, `product`, `quantity`, `price`, `total`) VALUES
(172, 124, 'iPhone 14', 1, 79900, 79900),
(173, 125, 'iPhone 14', 1, 79900, 79900),
(174, 125, 'MacBook Pro 13 M2 (2022)', 1, 129900, 129900),
(175, 126, 'Apple Watch Series 8 (Aluminium)', 1, 49900, 49900),
(176, 127, 'Airpods Pro (2022)', 1, 24900, 24900),
(177, 128, 'Apple Watch Series 8 (Aluminium)', 1, 49900, 49900),
(178, 129, 'iPad Gen 10 (2022)', 1, 44900, 44900),
(179, 130, 'MacBook Air 13 M2 (2022)', 2, 109900, 219800),
(180, 131, 'MacBook Air 13 M2 (2022)', 2, 109900, 219800),
(181, 132, 'MacBook Air 13 M2 (2022)', 1, 109900, 109900),
(182, 133, 'Polishing Cloth', 1, 1900, 1900),
(183, 134, 'MacBook Air 13 M2 (2022)', 1, 109900, 109900),
(184, 135, 'iPhone 14', 1, 79900, 79900),
(185, 136, 'MacBook Pro 13 M2 (2022)', 1, 129900, 129900),
(186, 137, 'MacBook Pro 13 M2 (2022)', 2, 129900, 259800),
(187, 138, 'MacBook Pro 13 M2 (2022)', 2, 129900, 259800),
(188, 139, 'MacBook Pro 13 M2 (2022)', 2, 129900, 259800),
(189, 140, 'MacBook Pro 13 M2 (2022)', 2, 129900, 259800);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` double NOT NULL,
  `is_in_home` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `image`, `subtitle`, `description`, `price`, `is_in_home`) VALUES
(2, 4, 'MacBook Air 13 M2 (2022)', 'apple-macbook-air-m2-2022-base', '66407ce3575bc43840b521d5ea9ca6c9ca6139a5.jpg', 'Gold/8-Core CPU/8-Core GPU/8GB/256GB', 'The MacBook Air M2 (2022) 13 inch model is the ultimate laptop for everyday use, with a sleek and lightweight design, a powerful performance, and a long battery life. The M2 chip is the second generation of Apple Silicon, which has an 8-core CPU, an 8-core GPU, and a 16-core Neural Engine. The MacBook Air also has a brilliant Retina display, a backlit Magic Keyboard with a Touch ID sensor, and a Force Touch trackpad that offers precise control and feedback. With up to 20 hours of wireless web browsing, you can work and play all day without worrying about running out of power. This is the perfect laptop for anyone who wants a fast, reliable, and portable device.', 109900, 1),
(3, 4, 'MacBook Pro 13 M2 (2022)', 'apple-macbook-pro-13-inch-m2-2022-base', '908b1aa6f2a884ded4a64ec5834968cf132210d2.jpg', 'Space Gray/8-core CPU/10-core GPU/8GB/256GB', 'The MacBook Pro M2 2022 13 inch is the first laptop to feature the next-generation Apple Silicon, which delivers blazing performance and efficiency. The M2 chip has an 8-core CPU, a 10-core GPU, and a 16-core Neural Engine, making it ideal for tasks like video editing, photo processing, gaming, and machine learning. The MacBook Pro also has a stunning Retina display, a Touch Bar for easy access to shortcuts and controls, a Magic Keyboard with a Touch ID sensor, and a long-lasting battery that offers up to 22 hours of wireless web browsing. Whether you are a creative professional, a student, or a casual user, the MacBook Pro M2 2022 13 inch is the perfect companion for your work and play.', 129900, 1),
(4, 3, 'iPad Gen 10 (2022)', 'ipad-gen-10-2022-pink-64gb-wifi', 'c64321c868e55478a8fda5ce7371fe86b531c2e5.jpg', 'Pink/64GB/Wi-Fi', 'With the iPad 10th generation, Apple brings a series of revolutionary innovations such as expanding the screen to 10.9 inches, completely renewing the design language, offering a variety of bright colors and using the A14 Bionic chip, which is extremely powerful. It has a USB-C port and Touch ID fingerprint sensor integrated in the power button. It also supports the Apple Pencil (1st generation) and the Magic Keyboard Folio accessories, which can enhance your productivity and creativity.', 44900, 1),
(5, 2, 'iPhone 14', 'iphone-14-blue-128gb', '114088a763fd9c0c3ae5c2306014007b966167f3.jpg', 'Blue/128GB', 'iPhone 14 is the latest and greatest smartphone from Apple, featuring a stunning 6.1-inch display, a powerful A15 Bionic chip, and a pro-level camera system. Whether you want to capture amazing photos and videos in low light, make emergency calls via satellite, or enjoy smooth gaming and AR experiences, iPhone 14 has it all. Plus, with a ceramic shield screen, crash detection, and a long-lasting battery.', 79900, 1),
(6, 2, 'iPhone 14 Pro', 'iphone-14-pro-purple-128gb', '4ddb92c0f42c344fcb2f9596f38817ef3e3e9cfa.jpg', 'Purple/128GB', 'The iPhone 14 Pro is the latest smartphone from Apple, featuring a stunning 6.1-inch Super Retina XDR display with Always-On and ProMotion technologies, a powerful A16 Bionic chip, and a revolutionary Dynamic Island that replaces the notch and shows useful information. The iPhone 14 Pro also boasts a 48-megapixel camera system that delivers amazing photos and videos in any lighting condition, with features like Night mode, Cinematic mode, ProRes video, and Macro photography. The iPhone 14 Pro is the best iPhone yet for anyone who wants the ultimate performance, display, and camera experience from Apple.', 99900, 1),
(7, 5, 'Apple Watch Series 8 (Aluminium)', 'apple-watch-series-8-gps-cellular-gold-41mm', '26ad0ac8f3ae238bd09ccc572319923b56a0e381.jpg', 'Starlight/41mm/GPS + Cellular', 'Apple Watch Series 8 GPS + Cellular 41mm, which is a smartwatch that can connect to your iPhone and the internet without needing a SIM card. It has a silver aluminum case and a white sport band, which are both durable and comfortable to wear. The watch has a large, edge-to-edge Always-On Retina display that shows detailed watch faces and notifications, even when your wrist is down. The watch also has a crack-resistant front crystal that protects the screen from damage. The Apple Watch Series 8 has many features that can help you monitor your health and fitness.', 49900, 1),
(13, 4, 'MacBook Air 15 M2 (2023)', 'macbook-air-15-m2-2023-starlight-base', '83b79cf43e8e846a9503ca3f3b213f5c1cd21c3b.jpg', 'Starlight/8-Core CPU/10-Core GPU/8GB/256GB', 'The MacBook Air 15 inch M2 is a new model of Apple’s thin and light laptop that features a larger screen and a powerful processor. It has a 15.3-inch LED-backlit IPS display with a resolution of 2880x1864 pixels, a brightness of 500 nits, and support for wide color and True Tone technology. It is powered by the Apple M2 chip, which is a 5-nm processor with 8 cores, a 10-core GPU, a 16-core Neural Engine, and up to 24GB of unified memory. It has a 256GB SSD storage, a Touch ID sensor, a Magic Keyboard, a Force Touch trackpad, and a battery life of up to 18 hours. It also has two Thunderbolt 4 ports, a 3.5 mm headphone jack, Wi-Fi 6, Bluetooth 5.0, and a 720p FaceTime HD camera. This is the ultimate laptop for productivity, creativity, and entertainment.', 129900, 0),
(14, 6, 'Airpods Pro (2022)', 'airpods-pro-gen-2', 'c6a7aaea1b7d9afa0726d03c12c0cce7cf212333.jpg', '2nd Generation/MagSafe Charge', 'Up to 2x more Active Noice Cancellation compared to AirPods Pro (1st Generation).\r\nSpatial Audio works with movies, TV, and video in supported apps.\r\niPhone with TrueDepth camera required to create personalized profile.\r\nBattery life varies by use and configuration.\r\nPrecision Finding requires a U1‑equipped iPhone; availability varies by region.\r\nAirPods Pro and charging case are sweat and water resistant for non-water sports and exercise, and they are IPX4 rated. Sweat and water resistance are not permanent conditions.\r\nWorks with iPhone 8 or later and iPod touch (7th generation) with the latest version of iOS; and 12.9-inch iPad Pro (2nd generation or later), 11-inch iPad Pro, 10.5-inch iPad Pro, iPad (5th generation or later), iPad Air (3rd generation or later), and iPad mini (5th generation or later) with the latest version of iPadOS.', 24900, 0),
(15, 9, 'Polishing Cloth', 'polishing-cloth', 'ca29e4ca25441a5e7cf47d13cfe3b9fc4fe1e62c.jpg', 'White', 'Made with soft, non-abrasive material, the Polishing Cloth cleans any Apple display, including nano-texture glass, safely and effectively.', 1900, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(1, 'user@gmail.com', '{\"1\":\"ROLE_USER\"}', '$2y$13$j/0OF8.Vg4.WbYA8BG5OS.dgGzR5MJLJr4onbNYWyteMSqO7k6VIa', 'Bill', 'Gates'),
(18, 'admin@gmail.com', '{\"1\":\"ROLE_USER\",\"2\":\"ROLE_ADMIN\"}', '$2y$13$BvGaVWSsSsxCI.KOEXpf7uLCTLy2CY7qKrlDLQ44HMcSh8vlM8qKC', 'Mark', 'Zuckerberg'),
(30, 'peterparker@gmail.com', '[\"ROLE_MOD\"]', '$2y$13$6IiflKINpP7y7tYRL/BvAO/FpyWH/0pbfEx/M9Ck24445xeD3kJGq', 'Peter', 'Parker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D4E6F81A76ED395` (`user_id`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_845CA2C17C78A4E3` (`binded_order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C17C78A4E3` FOREIGN KEY (`binded_order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
