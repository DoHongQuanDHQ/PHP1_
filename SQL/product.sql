-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 29, 2024 lúc 07:57 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ass1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `view` int NOT NULL,
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(18, 'Iphone 14 Pro Max ', 2100, 'iphone14prm.jpg', ' Bảo vệ toàn diện 3 trong 1 360 °: Gói bảo vệ 3 trong 1 này được thiết kế cho iPhone 14 Pro Max để cung cấp khả năng bảo vệ 360 độ hoàn toàn cho điện thoại của bạn; Nó bao gồm một trường hợp cung cấp khả năng chống rơi 15ft, một tấm bảo vệ màn hình bằng k', 50, 15),
(19, 'Airpod pro ', 500, 'airpro.webp', 'Khử tiếng ồn chủ động cho âm thanh đắm chìm\r\nChế độ minh bạch để nghe và kết nối với thế giới xung quanh bạn\r\nBa kích cỡ của các đầu mút silicon mềm, thuôn nhọn để vừa vặn có thể tùy chỉnh\r\nChống mồ hôi và nước\r\nEQ thích ứng tự động điều chỉnh nhạc phù hợ', 34, 14),
(20, 'Apple Watch SE', 1000, 'Apple watch se.png', ' \r\nNhãn hiệu	Quả táo\r\nTên Model	Apple Watch SE\r\nPhong cách	GPS\r\nMàu sắc	Vỏ nhôm Starlight với dây đeo thể thao Starlight\r\nKích thước màn hình	44 Milimét\r\nTính năng đặc biệt	Theo dõi giấc ngủ, Theo dõi hoạt động, Điều khiển bằng giọng nói, GPS, Theo dõi nh', 80, 21),
(21, 'Iphone 13 Pro Max', 1200, 'iphone-13-pro-max-gold-650x650.png', '    \r\nNhãn hiệu	Quả táo\r\nTên Model	IPhone 12 Pro\r\nNhà cung cấp dịch vụ không dây	Đã mở khóa\r\nHệ điều hành	IOS 12\r\nCông nghệ di động	5G\r\nDung lượng bộ nhớ	256 GB\r\nMàu sắc	Vàng\r\nCông nghệ mạng không dây	GSM, CDMA\r\nloại trình kết nối	Tia chớp\r\nYếu tố hình th', 45, 15),
(23, 'Iphone 12 Pro Max', 1250, 'iphoe12prm.png', ' Iphone 12 Pro Max \r\nColor: Gold', 0, 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
