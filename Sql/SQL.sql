-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2020 lúc 02:55 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `name`, `role`) VALUES
(7, 'admin', '202cb962ac59075b964b07152d234b70', 'Trương Ngọc Tuấn', 0),
(10, 'user', '202cb962ac59075b964b07152d234b70', 'Trương Ngọc Tuấn', 1),
(11, 'khachhang', '202cb962ac59075b964b07152d234b70', 'Tuấn Ngọc Trương', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_sp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gia`
--

INSERT INTO `danh_gia` (`id`, `email`, `ten_kh`, `noi_dung`, `id_sp`) VALUES
(9, 'kinhdoanhchaua@yahoo.com', 'Trương Ngọc Tuấn', 'aaa', 4),
(10, 'asdsa@d.c', 'Trương Ngọc Tuấn', 'hahahaha', 4),
(12, 'asdsa@d.c', 'Trương Ngọc Tuấn', 'ugasghdghgs', 5),
(13, 'asdsa@d.c', 'Trương Ngọc Tuấn', 'ugasghdghgs', 5),
(14, 'háhd', 'Trương Ngọc Tuấn', 'absjgdas', 5),
(15, 'háhd', 'Trương Ngọc Tuấn', 'absjgdas', 5),
(16, 'háhd', 'Trương Ngọc Tuấn', 'absjgdas', 5),
(17, 'háhd', 'Trương Ngọc Tuấn', 'absjgdas', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(11) NOT NULL,
  `ten_danh_muc` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `anh`) VALUES
(2, 'Dell', 'dell.png'),
(3, 'Lenovo', 'lenovo.png'),
(4, 'Macbook', 'mac.png'),
(5, 'Gaming', 'gm.png'),
(6, 'HP', 'hp.png'),
(7, 'Asus', 'asus.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `ten_kh` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `so_luong` int(50) NOT NULL,
  `tong_tien` int(50) NOT NULL,
  `loai_sp` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngay_mua` date NOT NULL,
  `trang_thai` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_sp` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `dia_chi` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `ten_sp`, `ten_kh`, `so_luong`, `tong_tien`, `loai_sp`, `ngay_mua`, `trang_thai`, `anh_sp`, `dia_chi`, `sdt`) VALUES
(1, 'Laptop Hp 250 G7', 'Tuấn Ngọc Trương', 10, 143000000, 'HP', '2020-12-02', 'Đã giao hàng', 'hp250g7.jpg', 'Thanh Hóa', 968122758),
(2, 'Dell Latitude E5450 ', 'Trương Ngọc Tuấn', 16, 102400000, 'Dell', '2020-12-03', 'Đã xác nhận', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', '36', 123456789),
(3, 'Dell Latitude E5450 ', 'Trương Ngọc Tuấn', 16, 102400000, 'Dell', '2020-12-03', 'Đã xác nhận', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', '36', 123456789),
(4, 'Dell Latitude E5450 ', 'Trương Ngọc Tuấn', 16, 102400000, 'Dell', '2020-12-03', 'Đã xác nhận', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', '36', 123456789),
(6, 'Dell Latitude E5450 ', 'Trương Ngọc Tuấn', 16, 102400000, 'Dell', '2020-12-03', 'Chờ Xác nhận', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', '36', 123456789),
(7, 'Laptop Hp 250 G7', 'Trương Ngọc Tuấn', 3, 0, 'HP', '2020-12-03', 'Chờ Xác nhận', 'hp250g7.jpg', 'Quảng Xương', 738956638);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_sp` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_sp` int(50) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `id_user` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `so_luong` int(10) NOT NULL,
  `tong_tien` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id`, `ten_sp`, `anh_sp`, `gia_sp`, `id_sp`, `id_user`, `so_luong`, `tong_tien`) VALUES
(17, 'Laptop MSI GF63', '5858_pro_poster_5858.jpg', 19900000, 9, 'user', 6, 119400000),
(23, 'Dell Latitude E5450 ', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', 6400000, 5, 'admin', 19, 102400000),
(27, 'Macbook Pro 16', '1589805390_1.jpeg', 50500000, 13, 'admin', 4, 202000000),
(28, 'Dell Latitude E5450 ', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', 6400000, 5, 'admin', 19, 102400000),
(32, 'Laptop Hp 250 G7', 'hp250g7.jpg', 14300000, 4, 'khachhang', 7, 100100000),
(43, 'Laptop Lenovo Legion 5', '5586_mau_noi_bat_lenovo_legion_5_2020__2_.png', 22690000, 6, 'khachhang', 2, 45380000),
(44, ' Laptop Asus ROG ZEPHYRUS', '5890_zephyrus_s_gx502_11_compressed_1.jpg', 58990000, 8, 'khachhang', 1, 0),
(45, 'Laptop Asus X509FJ EJ053T', '4624_x509fj_ej053t_3.jpg', 13290000, 7, 'khachhang', 3, 0),
(46, 'Macbook Pro 16', '1589805390_1.jpeg', 50500000, 13, 'khachhang', 4, 202000000),
(47, 'Laptop Hp 250 G7', 'hp250g7.jpg', 14300000, 4, 'admin', 7, 100100000),
(48, 'Dell Latitude E5450 ', '5937_3952_mau_noi_bat_dell_latitude_e5450.png', 6400000, 5, '', 4, 0),
(49, 'Laptop Hp 250 G7', 'hp250g7.jpg', 14300000, 4, '', 7, 100100000),
(50, 'Laptop MSI GF63', '5858_pro_poster_5858.jpg', 19900000, 9, 'khachhang', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_sp` int(50) NOT NULL,
  `loai_sp` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `so_luong` int(50) NOT NULL,
  `anh_sp` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `mo_ta` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `trang_thai` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_sp`, `gia_sp`, `loai_sp`, `so_luong`, `anh_sp`, `mo_ta`, `trang_thai`, `view`) VALUES
(4, 'Laptop Hp 250 G7', 14300000, 'HP', 112, 'hp250g7.jpg', 'Đánh giá chi tiết HP 250 G7 258M8PA - Intel Core i5      Được đánh giá rất cao về thiết kế di động, chắc chắn cùng với đó là một giá thành tầm trung cực tốt trang bị cho mình một cấu hình mạnh mẹ. Xứng đáng là một trong những chiếc laptop văn phòng hot nhất tại thời điểm hiện tại.        Cấu hình khỏe với Chip Intel i5 đời 10  Thiết kế chắc chắn, bền bỉ, tính ổn định cao Màn hình 15.6 inch Full HD Bảo hành 12 tháng chính hãng HP Mới 100% Fullbox, giá tốt nhất thị trường', 'Còn hàng', 29),
(5, 'Dell Latitude E5450 ', 6400000, 'Dell', 84, '5937_3952_mau_noi_bat_dell_latitude_e5450.png', 'Bộ xử lý: Intel Core i3 5010U  Bộ nhớ trong: 4GB DDR3L Ổ đĩa cứng: SSD 120GB Cạc màn hình: Intel HD Graphics 5500 Màn hình: 14 inch HD Cổng kết nối: 3 x USB 3.0; VGA; HDMI; LAN/RJ45; 3.5mm Audio Jack; Multi Card Reader Kích thước: 334.9 x 231 x 22.85mm   Trọng lượng: 1.81kg', 'Còn hàng', 63),
(6, 'Laptop Lenovo Legion 5', 22690000, 'Lenovo', 162, '5586_mau_noi_bat_lenovo_legion_5_2020__2_.png', 'Lenovo Legion 5 15ARH05 được xem là chiếc laptop gaming đáng trải nghiệm nhất trong năm 2020. Chiếc máy này đảm bảo sẽ gây ấn tượng mạnh trước các game thủ với khả năng chiến game mạnh mẽ trên mọi đấu trường. Bởi có độ hoàn thiện tốt mọi mặt như:     - Bộ vi xử lý AMD Series 4000 mới nhất kết hợp cùng card đồ họa rời GTX 1650 4GB   - Màn hình 15.6 inch với tần số quét 144Hz có độ phủ màu đạt đến 100% sRGB  - Hệ thống tản nhiệt cực tốt với 2 quạt lớn cùng 67 cánh quạt nhỏ và 4 khe tản chia đều 2 bên giúp nhiệt độ máy luôn được ổn định   ', 'Còn hàng', 15),
(7, 'Laptop Asus X509FJ EJ053T', 13290000, 'Asus', 124, '4624_x509fj_ej053t_3.jpg', 'Cho dù là công việc hay giải trí, ASUS X509FJ EJ053T là chiếc máy tính xách tay hướng tới người dùng văn phòng hoặc các bạn sinh viên yêu thích sự hiện đại, tinh tế, mang đến cho người dùng những trải nghiệm tuyệt vời nhất.  Thiết kế lịch lãm, gọn nhẹ, dễ dàng di chuyển  Màn hình NanoEdge của máy có góc nhìn rộng 178° và lớp phủ chống lóa mờ cực đẹp.  Bộ vi xử lý mạnh mẽ Chip Intel® Core™ i5 thế hệ thứ 8.  Mới 100% Fullbox, bảo hành chính hãng 24 tháng, giá tốt nhất trên thị trường', 'Còn hàng', 10),
(8, ' Laptop Asus ROG ZEPHYRUS', 58990000, 'Asus', 54, '5890_zephyrus_s_gx502_11_compressed_1.jpg', 'ROG ZEPHYRUS S - Chiếc laptop làm hài lòng mọi game thủ, định nghĩa lại khả năng chiến game trên laptop mỏng nhẹ     Cấu hình siêu khủng với chip i7 thế hệ thứ 10 kết hợp cùng card RTX 2070, không tựa game nào có thể làm khó chiếc máy này Màn hình IPS 15.6 inch Full HD với tần số quét lên đến 300Hz, chuẩn màu 100%sRGB mọi khung hình đều cực mượt và rõ nét Tản nhiệt vượt trội với công nghệ độc quyền của ROG, nhiệt độ luôn ổn định', 'Còn hàng', 2),
(9, 'Laptop MSI GF63', 19900000, 'Gaming', 43, '5858_pro_poster_5858.jpg', 'Ngoài cấu hình khỏe trong tầm giá đưa ra, dòng laptop gaming nhà MSI còn nổi bật bởi sự mỏng nhẹ và xóa bỏ định kiến laptop mỏng thì tản nhiệt kém bởi nhiệt độ và hiệu suất máy luôn ổn định:     Cấu hình chip i5 9300H kết hợp cùng card GTX 1650Ti cho khả năng chiến game mạnh mẽ, làm thiết kế đồ họa, edit, render video cực tốt Màn hình lớn 15.6 inch Full HD với tần số quét 144Hz cực nhanh nhạy và chính xác Thiết kế mỏng nhẹ, tính cơ động cao, thuận tiện khi di chuyển', 'Còn hàng', 17),
(10, 'Laptop MSI Bravo 17', 23400000, 'Gaming', 53, '5808_msi_bravo_17_a4ddr_7.jpg', 'Bạn đã quá quen thuộc với các dòng máy gaming có thiết kế hầm hố và mạnh mẽ của MSI. Nhưng lần này MSI cho ra mắt dòng sản phẩm laptop gaming MSI Bravo 17 A4DDR 200VN với nhiều điểm thiết kế vô cùng nổi bật như:      Cấu hình cực khỏe với vi xử lý AMD Ryzen 5 series 4000 mới ra cùng card đồ họa RX 5500M Tần số quét lên tới 144Hz tái hiện hình ảnh game vô cùng mượt mà trong không gian hiển thị lớn  Ngoại hình gọn nhẹ, họa tiết tối giản nhưng vẫn tạo sự nổi bật  Mang đến cho người dùng một cảm hứng tự tin và mạnh mẽ để có thể bước vào mọi đấu trường. ', 'Còn hàng', 13),
(11, 'Laptop Dell Inspiron', 10090000, 'Dell', 124, '5261_dell_inspiron_n3593c_p75f013.jpg', '   Là sản phẩm đến từ Dell - 1 trong những thương hiệu sản xuất máy tính, laptop hàng đầu thế giới đến từ Mỹ, Dell Inspiron N3593C P75F013 là lựa chọn hấp dẫn cho các bạn học sinh, sinh viên, dân văn phòng bởi hiệu năng mạnh mẽ trong tầm giá, xử lý mượt các thao tác trên các ứng dụng văn phòng.   ', 'Còn hàng', 1),
(12, 'Macbook Air 2017 ', 19700000, 'Macbook', 47, 'apple-macbook-air-2017-21-1024x683.jpg', 'Bộ xử lý CPU:	Intel, Core i5 Broadwell, 1.80 GHz Bộ nhớ RAM:	8GB of 1,600MHz LPDDR3 RAM Màn hình:	13-inch, 1,440-x-900-pixel display Card màn hình:	Intel HD Graphics 6000 Ổ cứng:	128GB PCIe-based flash storage Kích thước và trọng lượng:	1.7 x 32.5 x 22.7 cm - 1.35 kg Camera:	720p FaceTime HD camera Cổng kết nối:	2 x USB 3; 1 x Thunderbolt 2; 1 x SDXC card slot; 1 x 3.5mm headphone jack Pin và sạc:	54-watt-hour battery', 'Còn hàng', 2),
(13, 'Macbook Pro 16', 50500000, 'Macbook', 65, '1589805390_1.jpeg', 'Hãng sản xuất	Apple Xuất sứ	Chính hãng Màn hình Dòng sản phẩm	Macbook Pro Độ lớn màn hình	16‑inch (diagonal) LED‑backlit display with IPS technology Độ phân giải	3072×1920 Mainboard Motherboard Chipset	2.6GHz 6‑core Intel Core i7, Turbo Boost up to 4.5GHz, with 12MB shared L3 cache CPU Loại CPU	Intel Core i7, Tốc độ CPU	2.6GHz up to 4.5GHz Processor Model	Intel Memory Memory Type	16GB of 2666MHz DDR4 onboard memory HDD Loại ổ cứng	512GB SSD Graphic Video Chipset	AMD Radeon Pro 5300M with 4GB of GDDR6 memory and automatic graphics switching Intel UHD Graphics 630 Wifi	Mạng không dây Wi-Fi 802.11ac Tương thích với chuẩn 802.11a / b / g / n Cổng USB	Four Thunderbolt 3 (USB-C) ports with support for: Charging DisplayPort Thunderbolt (up to 40Gb/s) USB 3.1 Gen 2 (up to 10Gb/s) Kích thước Trọng lượng (kg)	2kg Kích cỡ (mm)	35.79 x 24.59 x 1.62 cm', 'Còn hàng', 19),
(14, 'Laptop HP Spectre', 31990000, 'HP', 75, 'hp.jpg', 'Với sự ra mắt của HP Spectre X360 13 aw0013dx, HP thêm một lần nữa làm người dùng hài lòng bởi sự cao cấp, sang trọng cùng hiệu năng làm việc tuyệt vời của chiếc laptop này. HP Spectre X360 13 aw0013dx chắc chắn sẽ là siêu phẩm dành cho người dùng doanh nhân, quản lý hay dân sale thường phải đi gặp khách hàng, đối tác ', 'Còn hàng', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `anh_slide` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `anh_slide`) VALUES
(1, 'banner1.jpg'),
(5, 'banner2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
