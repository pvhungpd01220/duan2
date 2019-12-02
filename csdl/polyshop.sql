-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 05:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id8198011_polyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi-tiet`
--

CREATE TABLE IF NOT EXISTS `chi-tiet` (
  `id-don-hang` int(20) NOT NULL,
  `id-product` int(20) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(4) NOT NULL,
  `username` varchar(65) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(65) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '123', ''),
(2, 'vanhung', '1234', 'Phạm Văn Hùng');

-- --------------------------------------------------------

--
-- Table structure for table `nhan-vien`
--

CREATE TABLE IF NOT EXISTS `nhan-vien` (
  `id_nhan_vien` int(11) NOT NULL,
  `tai_khoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `gioi_tinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan-vien`
--

INSERT INTO `nhan-vien` (`id_nhan_vien`, `tai_khoan`, `pass`, `ho_ten`, `emai`, `dia_chi`, `sdt`, `gioi_tinh`) VALUES
(0, 'hungpvpd01220', '12345678', 'Phạm Văn Hùng', 'hungpvpd01220@fpt.edu.vn', ' quận Liên Chiểu, Thành Phố Đà Nẵng', 905667090, 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien3`
--

CREATE TABLE IF NOT EXISTS `nhanvien3` (
`id` int(11) NOT NULL,
  `tai_khoan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien3`
--

INSERT INTO `nhanvien3` (`id`, `tai_khoan`, `pass`, `ho_ten`, `email`, `sdt`, `dia_chi`) VALUES
(4, 'admin', '12345678', 'Phạm Văn Hùng', 'hungpvpd01220@gmail.com', 905667090, ' QUẬN LIÊN CHIỂU, THÀNH PHỐ ĐÀ NẴNG');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `id-don-hang` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `addres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `ngay-mua` date NOT NULL,
  `tinh-trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`pro_id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL DEFAULT '0',
  `imageURL` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `kieudang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chucnang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `xuatxu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `price`, `imageURL`, `detail`, `kieudang`, `chucnang`, `xuatxu`, `baohanh`) VALUES
(36, 'EF-317D-7AVDR', 120000, '11.jpg', 'Thiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Dây inox (stainless steel)', 'Llịch ngày, thứ, giờ 24', 'Nhật Bản', 'Máy: 1 năm - Pin: 1,5 năm'),
(35, 'EF-336L-7AVDF', 567000, '12.jpg', 'Thiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Mineral Glass, dây da', 'lịch ngày, thứ, giờ 24', 'Nhật Bản', 'Máy: 1 năm - Pin: 1,5 năm'),
(32, 'FQC0S006W0', 145000, '14.jpg', '- Bảo hành một năm\r\n- Chống nước\r\nMặt kính khoáng cứng cáp, chống trầy xước\r\nĐiều chỉnh bằng nút nhấn và xoay dễ sử dụng\r\nDây đeo da bền bỉ, chắc chắn\r\nKiểu dáng sang trọng\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Thép không gỉ (All Stainless Steel)', 'Lịch, ngày, chống nước', 'Nhật Bản', 'Quốc Tế: Máy: 1 năm, Pin: 1 năm'),
(33, 'FSZ3N007W0', 100000, '6.jpg', 'Mặt kính khoáng cứng cáp, chống trầy xước\r\nĐiều chỉnh bằng nút nhấn và xoay dễ sử dụng\r\nDây đeo da bền bỉ, chắc chắn\r\nKiểu dáng sang trọng\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Thép không gỉ (All Stainless Steel), nữ', 'Lịch ngày', 'Nhật Bản', 'Quốc Tế: Máy: 1 năm, Pin: 1 năm'),
(34, 'SEL05004W0', 1200000, '16.jpg', 'Mặt kính Mineral cứng cáp, chống chịu va đập\r\nVỏ máy và dây đeo bằng thép Inox chống gỉ\r\nHiển thị ngày tiện lợi\r\nKiểu dáng nam tính khỏe khoắn', 'Thép không gỉ, nam', 'Lịch ngày, lên giây phụ, kim báo năng lượng', 'Nhật Bản', 'Quốc Tế: Máy: 1 năm'),
(50, 'SEL05002B0', 1450000, '17.jpg', 'Thiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Nam. Kích thước: 38.5mm  ', 'Lịch ngày, lên giây phụ, kim báo năng lượng', 'Nhật Bản', 'Quốc Tế: Máy: 1 năm'),
(52, 'EFR-533L-8AVUDF', 432000, '10.jpg', 'Thiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Nam', 'Lịch ngày, thể thao chronograph', 'Nhật Bản', 'Máy: 1 năm - Pin: 1,5 năm'),
(53, 'OPA58035MS_GL trắng', 1900000, '18.jpg', 'Thiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,\r\nThiết kế độc đáo,Loại máy Quartz, Chất liệu mặt trước: Kính cứng, Chất liệu mặt sau: Thép không gỉ, Chất liệu vỏ: hợp kim, Xuất xứ: Trung Quốc, Đường kính quay số: 40 mm,\r\nDài dây: 24 cm Trọng lượng: 30g,\r\nChống nước: 3ATM,\r\nMàu sắc: Đen,', 'Thép không gỉ hay còn gọi là inox , nam', '3 ATM (được rửa tay, đi mưa nhẹ)', 'Nhật Bản', 'Máy: 2 năm, Pin: 2 năm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien3`
--
ALTER TABLE `nhanvien3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pro_id`), ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nhanvien3`
--
ALTER TABLE `nhanvien3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
