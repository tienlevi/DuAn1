-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 08:42 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd18331_duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `create_at` varchar(255) NOT NULL,
  `update_at` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sp ổn', 1, 6, '08:55:26am 27/11/2023'),
(2, 'Hiện tại em đang học lập trình web, sang kỳ 2 em muốn đổi sang UDPM thì có phải học lại các môn kỳ 1 không ạ?', 3, 6, '08:55:57am 27/11/2023'),
(3, 'Thái Quỳnh Cover ( Chẳng phải là tôi đâu ) |', 3, 1, '08:56:33am 27/11/2023'),
(4, '66666666666', 1, 1, '04:25:41pm 28/11/2023'),
(5, '1', 4, 1, '04:29:53pm 28/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(2, 'Quần', '3.jpg\r\n'),
(3, 'Giày', 'tải xuống.webp'),
(5, 'Áo', '1.jpg'),
(8, 'Găng tay', '376557342_2848229115344164_8205673028501367355_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `khachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `thoigiandathang` varchar(255) NOT NULL,
  `phuongthucthanhtoan` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `khachhang`, `diachi`, `sdt`, `email`, `thoigiandathang`, `phuongthucthanhtoan`, `soluong`, `trangthai`, `ghichu`) VALUES
(1, 'tienlienha123', 'Thanh Trì - Hà Nội', '09283812', 'tiennguyen@gmail.com', '04:47:41pm 24/11/2023', 1, 3, 0, 'Địa chỉ 554 thanh trì'),
(2, 'muller', 'Đan Phượng - Hà Nội', '0987231231', 'muller@gmail.com', '04:48:30pm 24/11/2023', 0, 1, 1, 'Hàng dễ hỏng'),
(3, 'muller', 'Đan Phượng - Hà Nội', '0987231231', 'muller@gmail.com', '04:52:11pm 24/11/2023', 0, 1, 0, ''),
(4, 'muller', 'Đan Phượng - Hà Nội', '0987231231', 'muller@gmail.com', '04:14:49am 25/11/2023', 1, 2, 0, 'Hàng dễ hỏng'),
(5, 'muller', 'Đan Phượng - Hà Nội', '0987231231', 'muller@gmail.com', '04:15:11am 25/11/2023', 1, 0, 0, 'Hàng dễ hỏng'),
(6, 'muller', 'Đan Phượng - Hà Nội', '0987231231', 'muller@gmail.com', '01:43:10pm 27/11/2023', 0, 2, 0, ''),
(7, 'tienlienha123', 'Thanh Trì - Hà Nội', '09283812', 'tienlevi@gmail.com', '04:12:53pm 28/11/2023', 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iddonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `iduser`, `idpro`, `name`, `img`, `giatien`, `soluong`, `iddonhang`) VALUES
(1, 1, 4, 'Quần bò', '15.jpg', 200000, 1, 1),
(2, 1, 1, 'Áo Adidas', '1.jpg', 140000, 1, 1),
(3, 1, 5, 'Áo sơ mi', '24.jpg', 140000, 1, 1),
(10, 1, 3, 'Giày đen', 'tải xuống.webp', 299000, 1, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `idvaitro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `password`, `email`, `diachi`, `sdt`, `trangthai`, `idvaitro`) VALUES
(1, 'tienlienha123', 'tien2004', 'tienlevi@gmail.com', 'Thanh Trì - Hà Nội', '09283812', 0, 1),
(2, 'klose', '12345', 'dot@gmail.com', 'Hà Nội', '09', 1, 3),
(3, 'muller', '12345', 'muller@gmail.com', 'Đan Phượng - Hà Nội', '0987231231', 0, 2),
(4, 'rooney', '11111', 'rooney@gmail.com', 'Hà Nội', '09837213111', 0, 2),
(7, 'nguyen', 'a', 'chuling@gmail.com', 'a', '0987231231', 0, 2),
(8, 'captaintien', 'captaintien', 'aaa@gmail.com', 'Hà Nội', '09281', 0, 2),
(10, 'aug', 'usaaaaaaaa', 'tienntph33298@fpt.edu.vn', 'Hà Nộii', '09281', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `giatien` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text NOT NULL,
  `iddm` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ngaytao` varchar(255) NOT NULL,
  `mucgiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `giatien`, `img`, `mota`, `iddm`, `luotxem`, `ngaytao`, `mucgiamgia`) VALUES
(1, 'Áo Adidas', 140000, '1.jpg', 'Theo nguồn tin từ Ả Rập, Man City sẵn sàng bán Kevin De Bruyne cho Al Nassr vào mùa hè tới.', 1, 0, '12:27:03pm 22/11/2023', 0),
(2, 'Quần xám', 140000, '3.jpg', 'tìm 2 chi vision 29e2 - 97781 ban nay phát em kẹo đoạn gần cây xăng trần quang khải ạ', 2, 0, '12:27:47pm 22/11/2023', 0),
(3, 'Giày đen', 299000, 'tải xuống.webp', 'tìm 2 chi vision 29e2 - 97781 ban nay phát em kẹo đoạn gần cây xăng trần quang khải ạ', 0, 0, '12:32:10pm 22/11/2023', 0),
(4, 'Quần bò', 200000, '15.jpg', 'LÀM GÌ THÌ LÀM - NHỚ XEM MU', 2, 0, '04:35:58pm 24/11/2023', 0),
(5, 'Áo sơ mi', 140000, '24.jpg', 'LÀM GÌ THÌ LÀM - NHỚ XEM Chelsea', 1, 0, '04:36:38pm 24/11/2023', 0),
(6, 'Áo polo xanh', 140000, '33.jpg', 'awdawdawdawdasdawd', 1, 0, '04:38:16pm 24/11/2023', 0),
(7, 'Giày adidas', 140000, 'shopping.webp', 'Theo nguồn tin từ Ả Rập, Man City sẵn sàng bán Kevin De Bruyne cho Al Nassr vào mùa hè tới.', 3, 0, '0', 6),
(8, 'Giày adidas', 140000, 'shopping.webp', 'Theo nguồn tin từ Ả Rập, Man City sẵn sàng bán Kevin De Bruyne cho Al Nassr vào mùa hè tới.', 3, 0, '06:05:24pm 28/11/2023', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `tenvaitro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `tenvaitro`) VALUES
(1, 'Admin'),
(2, 'Nhân viên\r\n'),
(3, 'Khách hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
