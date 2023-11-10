-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 10, 2023 lúc 05:45 PM
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
-- Cơ sở dữ liệu: `vidu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `finance`
--

CREATE TABLE `finance` (
  `id` int(5) NOT NULL,
  `r_price` int(20) NOT NULL,
  `r_date` varchar(20) NOT NULL,
  `r_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `finance`
--

INSERT INTO `finance` (`id`, `r_price`, `r_date`, `r_description`) VALUES
(1, -250000, '20/2/2023', 'Tien don ve sinh'),
(2, -100000, '11/3/2022', 'Tien mang'),
(3, 2000000, '29/6/2023', 'Tien phong 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `house`
--

CREATE TABLE `house` (
  `id` int(5) NOT NULL,
  `r_number` int(2) NOT NULL,
  `d_contract` varchar(20) NOT NULL,
  `deposits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `house`
--

INSERT INTO `house` (`id`, `r_number`, `d_contract`, `deposits`) VALUES
(6, 22, '12/03/2023', 758798),
(7, 55, '12/03/2024', 23443182),
(8, 443, '12/03/2024', 2344434),
(10, 88, '12/03/2024', 23443434);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `house_type`
--

CREATE TABLE `house_type` (
  `id` int(4) NOT NULL,
  `r_number` int(20) NOT NULL,
  `r_condition` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `convenient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `house_type`
--

INSERT INTO `house_type` (`id`, `r_number`, `r_condition`, `price`, `convenient`) VALUES
(1, 44, 'trống', 242434432, 'có giường đôi'),
(4, 88, 'đã thuê', 234434243, 'có giường đôi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tenants`
--

CREATE TABLE `tenants` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `r_number` int(20) NOT NULL,
  `r_amount` int(50) NOT NULL,
  `co_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tenants`
--

INSERT INTO `tenants` (`id`, `name`, `phone`, `r_number`, `r_amount`, `co_date`) VALUES
(1, 'Hoa Tran', 123456789, 36, 234423, '12/12/2033'),
(4, 'Trần Gia Hoà', 363633706, 15, 5435454, '12/01/2024'),
(5, 'Trần Gia Hoà', 363633706, 22, 2132344, '2/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'hoadeptrai', 'e10adc3949ba59abbe56e057f20f883e', 0),
(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'hoadeptrai', '250cf8b51c773f3f8dc8b4be867a9a02', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `house_type`
--
ALTER TABLE `house_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `house`
--
ALTER TABLE `house`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `house_type`
--
ALTER TABLE `house_type`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
