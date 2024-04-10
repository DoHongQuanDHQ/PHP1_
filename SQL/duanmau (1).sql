-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 09:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(3, 'tinh12345', '12345', 'tinh54040@gmail.com', 'Ha Noi', '0383379990', 0),
(5, 'tinhx', 'qwer', 'tinhnv23123@gmail.com', 'Ha Noi', '000333222', 1),
(6, 'tung', 'Tungks123', 'tunght23@gmail.com', 'ngõ 2 Kiều mai', '0358609355', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp 2. Chuyển khoản \r\n3.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang chờ \r\n2.Đang giao hàng \r\n3.Đã giao hàng\r\n',
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(83, 5, 'tinhx', 'Ha Noi', 'tinhnv23123@gmail.com', '000333222', 1, '07:44:05am 10/10/2022', 2200, 0, '', '', ''),
(84, 5, 'Nguyễn Văn Tĩnh', 'Ha Noi', 'tinhnv23123@gmail.com', '000333222', 1, '07:44:50am 10/10/2022', 2200, 0, '', '', ''),
(85, 3, 'tinh12345', 'Ha Noi', 'tinh54040@gmail.com', '0383379990', 1, '01:20:07pm 10/10/2022', 1000, 0, '', '', ''),
(86, 6, 'tung', 'ngõ 2 Kiều mai', 'tunght23@gmail.com', '0358609355', 1, '09:49:15am 12/05/2023', 1200, 0, '', '', ''),
(87, 6, 'tung', 'ngõ 2 Kiều mai', 'tunght23@gmail.com', '0358609355', 1, '09:49:49am 12/05/2023', 1700, 0, '', '', ''),
(88, 6, 'tung', 'ngõ 2 Kiều mai', 'tunght23@gmail.com', '0358609355', 1, '09:53:31am 12/05/2023', 1700, 0, '', '', ''),
(89, 6, 'tung', 'ngõ 2 Kiều mai', 'tunght23@gmail.com', '0358609355', 1, '09:54:31am 12/05/2023', 2950, 0, '', '', ''),
(90, 6, 'tung', 'ngõ 2 Kiều mai', 'tunght23@gmail.com', '0358609355', 1, '09:58:18am 12/05/2023', 2950, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(7, 'Đẹp', 3, 20, '10:10:47am 05/10/2022'),
(8, 'Đắt', 3, 20, '10:22:00am 05/10/2022'),
(9, 'Good', 3, 20, '10:44:20am 05/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(109, 5, 20, 'Apple watch se.png', 'Apple Watch SE', 1000, 1, 1000, 83),
(110, 5, 21, 'iphone 13promax.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 83),
(111, 5, 20, 'Apple watch se.png', 'Apple Watch SE', 1000, 1, 1000, 84),
(112, 5, 21, 'iphone 13promax.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 84),
(113, 3, 20, 'Apple watch se.png', 'Apple Watch SE', 1000, 1, 1000, 85),
(114, 6, 21, 'iphone-13-pro-max-gold-650x650.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 86),
(115, 6, 21, 'iphone-13-pro-max-gold-650x650.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 87),
(116, 6, 19, 'airpro.webp', 'Airpod pro ', 500, 1, 500, 87),
(117, 6, 21, 'iphone-13-pro-max-gold-650x650.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 88),
(118, 6, 19, 'airpro.webp', 'Airpod pro ', 500, 1, 500, 88),
(119, 6, 21, 'iphone-13-pro-max-gold-650x650.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 89),
(120, 6, 19, 'airpro.webp', 'Airpod pro ', 500, 1, 500, 89),
(121, 6, 23, 'iphoe12prm.png', 'Iphone 12 Pro Max', 1250, 1, 1250, 89),
(122, 6, 21, 'iphone-13-pro-max-gold-650x650.png', 'Iphone 13 Pro Max', 1200, 1, 1200, 90),
(123, 6, 19, 'airpro.webp', 'Airpod pro ', 500, 1, 500, 90),
(124, 6, 23, 'iphoe12prm.png', 'Iphone 12 Pro Max', 1250, 1, 1250, 90);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(14, 'Tai nghe'),
(15, 'Điện thoại'),
(16, 'Laptop'),
(21, 'Đồng hồ'),
(23, 'Phụ kiện đi kèm');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `view` int(10) NOT NULL,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(18, 'Iphone 14 Pro Max ', 2100, 'iphone14prm.jpg', ' Bảo vệ toàn diện 3 trong 1 360 °: Gói bảo vệ 3 trong 1 này được thiết kế cho iPhone 14 Pro Max để cung cấp khả năng bảo vệ 360 độ hoàn toàn cho điện thoại của bạn; Nó bao gồm một trường hợp cung cấp khả năng chống rơi 15ft, một tấm bảo vệ màn hình bằng k', 50, 15),
(19, 'Airpod pro ', 500, 'airpro.webp', 'Khử tiếng ồn chủ động cho âm thanh đắm chìm\r\nChế độ minh bạch để nghe và kết nối với thế giới xung quanh bạn\r\nBa kích cỡ của các đầu mút silicon mềm, thuôn nhọn để vừa vặn có thể tùy chỉnh\r\nChống mồ hôi và nước\r\nEQ thích ứng tự động điều chỉnh nhạc phù hợ', 34, 14),
(20, 'Apple Watch SE', 1000, 'Apple watch se.png', ' \r\nNhãn hiệu	Quả táo\r\nTên Model	Apple Watch SE\r\nPhong cách	GPS\r\nMàu sắc	Vỏ nhôm Starlight với dây đeo thể thao Starlight\r\nKích thước màn hình	44 Milimét\r\nTính năng đặc biệt	Theo dõi giấc ngủ, Theo dõi hoạt động, Điều khiển bằng giọng nói, GPS, Theo dõi nh', 80, 21),
(21, 'Iphone 13 Pro Max', 1200, 'iphone-13-pro-max-gold-650x650.png', '    \r\nNhãn hiệu	Quả táo\r\nTên Model	IPhone 12 Pro\r\nNhà cung cấp dịch vụ không dây	Đã mở khóa\r\nHệ điều hành	IOS 12\r\nCông nghệ di động	5G\r\nDung lượng bộ nhớ	256 GB\r\nMàu sắc	Vàng\r\nCông nghệ mạng không dây	GSM, CDMA\r\nloại trình kết nối	Tia chớp\r\nYếu tố hình th', 45, 15),
(23, 'Iphone 12 Pro Max', 1250, 'iphoe12prm.png', ' Iphone 12 Pro Max \r\nColor: Gold', 0, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_products` (`idpro`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_user` (`iduser`),
  ADD KEY `cart_products` (`idpro`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_products` FOREIGN KEY (`idpro`) REFERENCES `products` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_products` FOREIGN KEY (`idpro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`iduser`) REFERENCES `account` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
