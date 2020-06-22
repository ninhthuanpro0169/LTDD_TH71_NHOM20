-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2020 lúc 04:30 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihinhdulich`
--

CREATE TABLE `loaihinhdulich` (
  `id` int(11) NOT NULL,
  `tenloaidulich` varchar(200) NOT NULL,
  `hinhanhloaidulich` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihinhdulich`
--

INSERT INTO `loaihinhdulich` (`id`, `tenloaidulich`, `hinhanhloaidulich`) VALUES
(1, 'Sinh Thái - Nghỉ Dưỡng', 'https://pix10.agoda.net/hotelImages/4144565/-1/8dd590fab43763aa75868f893e1e0bef.jpg?s=1024x768'),
(2, 'Khám Phá - Mạo Hiểm', 'https://i0.wp.com/lh3.googleusercontent.com/-_OtSOj0vST0/WODQQ6--RBI/AAAAAAAABQY/zHtLQRA7yhI/s0/58e0d03817f19.jpg'),
(3, 'Tham Quan - Văn Hóa', 'https://www.dulichcongvu.com/uploads/VIET%20NAM/QUANG%20NAM/di-du-lich-ve-pho-co-hoi-an-mua-trung-thu-133-1442668425-55fd5f89722d9.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaihinhdulich`
--
ALTER TABLE `loaihinhdulich`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaihinhdulich`
--
ALTER TABLE `loaihinhdulich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
