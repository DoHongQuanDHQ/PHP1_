-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2024 at 08:47 AM
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
-- Database: `asmgd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `img_news` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `img_news`, `intro`, `detail`, `view`) VALUES
(3, '2024', 'coc_tay_stoneisland.jpeg', 'Tết cùng Store island', 'Tết Nhâm Thìn đang đến trong không gian tràn ngập không khí lễ hội. Trong những ngày Tết lạnh giá này, việc chọn lựa set đồ phù hợp không chỉ giúp bạn ấm áp mà còn tôn lên phong cách thời trang của mình. ', '800000000'),
(4, '2024', '434158381_790924333088412_5324523742961893114_n.jpg', 'Tết cùng Store island', '© Mọi vấn đề bản quyền vui lòng liên hệ qua mail : Contact@betamusic.vn © Bản quyền thuộc về Beta Music © Copyright by Beta Music. Do not Reup', '3112'),
(12, '2025', 'thu_dong_stoneisland.jpg', 'Áo hót đi gót chen 2025', '© Mọi vấn đề bản quyền vui lòng liên hệ qua mail : Contact@betamusic.vn © Bản quyền thuộc về Beta Music © Copyright by Beta Music. Do not Reup', '111'),
(13, '2026', '6aa871a627b585eb1dbd1e9f29b6bd64.jpg_720x720q80.jpg', 'Giày', 'mau-giay-sneaker-hot-nhat-nam-2022', '111050'),
(14, '2020', 'images (3).jpg', 'Giày hot 2020', 'Hàng dễ vỡ', '111050'),
(15, 'bala ban da', 'images (10).jpg', 'Giày', 'mau-giay-sneaker-hot-nhat-nam-2022', '800000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
