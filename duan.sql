-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2016 at 03:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `duan`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
`ID` int(11) NOT NULL,
  `TenMatHang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhThuc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiMatHang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `TenMatHang`, `HinhThuc`, `Gia`, `LoaiMatHang`, `Tinh`, `NgayCapNhat`) VALUES
(415, 'Bắp cải trắng loại 1  ', ' bán lẻ ', '6.500', 'Nông sản', 'Hà Nội', '2016-01-17'),
(416, 'Bưởi Năm Roi loại 1  ', ' bán buôn ', '18.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(417, 'Cà chua thường loại 1  ', ' bán lẻ ', '9.500', 'Nông sản', 'Hà Nội', '2016-01-17'),
(418, 'Cam Sành loại 1  ', ' bán buôn ', '28.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(419, 'Dưa hấu loại 1  ', ' bán buôn ', '12.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(420, 'Dứa loại 1  ', ' bán buôn ', '9.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(421, 'Gạo Bắc Thơm số 7  ', ' bán buôn ', '11.800', 'Nông sản', 'Hà Nội', '2016-01-17'),
(422, 'Gạo nếp cái hoa vàng  ', ' bán buôn ', '22.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(423, 'Gạo tẻ thường Khang dân  ', ' bán buôn ', '9.500', 'Nông sản', 'Hà Nội', '2016-01-17'),
(424, 'Gạo tẻ thường Q5  ', ' bán buôn ', '9.500', 'Nông sản', 'Hà Nội', '2016-01-17'),
(425, 'Gạo Xi23  ', ' bán buôn ', '9.900', 'Nông sản', 'Hà Nội', '2016-01-17'),
(426, 'Hồng xiêm loại 1 ', ' bán buôn ', '42.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(427, 'Khoai tây ta loại 1  ', ' bán lẻ ', '8.800', 'Nông sản', 'Hà Nội', '2016-01-17'),
(428, 'Lê trắng TQ loại 1  ', ' bán buôn ', '22.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(429, 'Su hào củ loại 1  ', ' bán buôn ', '3.800', 'Nông sản', 'Hà Nội', '2016-01-17'),
(430, 'Táo Trung Quốc loại 1  ', ' bán buôn ', '20.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(431, 'Trứng gà ta  ', ' bán buôn ', '27.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(432, 'Xoài cát thường  ', ' bán buôn ', '25.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(433, 'Xoài Thái loại 1  ', ' bán buôn ', '35.000', 'Nông sản', 'Hà Nội', '2016-01-17'),
(434, 'Gà Công nghiệp hơi  ', ' bán buôn ', '27.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(435, 'Gà Công nghiệp nguyên con làm sẵn  ', ' bán buôn ', '38.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(436, 'Gà mái nguyên con làm sẵn  ', ' bán buôn ', '90.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(437, 'Gà mái ta hơi  ', ' bán buôn ', '85.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(438, 'Gà trống nguyên con làm sẵn  ', ' bán buôn ', '95.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(439, 'Gà trống ta hơi  ', ' bán buôn ', '88.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(440, 'Lợn hơi lai  ', ' bán buôn ', '42.500', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(441, 'Lợn hơi siêu nạc  ', ' bán buôn ', '52.500', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(442, 'Lợn mẹ đen ', ' bán buôn ', '40.500', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(443, 'Muối thô  ', ' bán buôn ', '3.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(444, 'Muối tinh  ', ' bán buôn ', '3.300', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(445, 'Ngan hơi  ', ' bán buôn ', '57.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(446, 'Ngan thịt  ', ' bán buôn ', '68.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(447, 'Quýt chum loại 1  ', ' bán buôn ', '10.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(448, 'Vịt hơi  ', ' bán buôn ', '39.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(449, 'Vịt thịt  ', ' bán buôn ', '57.000', 'Thực phẩm', 'Hà Nội', '2016-01-17'),
(450, 'Cá rô phi 0,5 kg/con  ', ' bán lẻ ', '40.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(451, 'Cá rô phi 1kg/con  ', ' bán lẻ ', '45.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(452, 'Cá Trắm 1kg – 2kg/con  ', ' bán lẻ ', '60.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(453, 'Gà trống nguyên con làm sẵn  ', ' bán buôn ', '150.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(454, 'Muối trắng  ', ' bán lẻ ', '3.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(455, 'Thịt bò thăn  ', ' bán lẻ ', '250.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(456, 'Thịt lợn ba chỉ  ', ' bán buôn ', '90.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(457, 'Thịt lợn mông  ', ' bán lẻ ', '95.000', 'Thực phẩm', 'Thái Nguyên', '2016-01-17'),
(458, 'Dầu hoả ', 'chưa cập nhật', '21.670', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(459, 'Điêzen 0,25S ', 'chưa cập nhật', '21.450', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(460, 'Gas Ngọn lửa thần 13kg', 'chưa cập nhật', '380.000', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(461, 'Gas Ngọn lửa thần bình 12kg', 'chưa cập nhật', '380.000', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(462, 'Gas Petrolimex bình 12kg', 'chưa cập nhật', '380.000', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(463, 'Gas Petrolimex bình 13kg', 'chưa cập nhật', '410.000', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(464, 'Shell gas bình 12kg', 'chưa cập nhật', '380.000', 'Năng Lượng', 'Hà Nội', '2016-01-17'),
(465, 'Xăng A92', 'chưa cập nhật', '23.710', 'Năng Lượng', 'Hà Nội', '2016-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=466;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
