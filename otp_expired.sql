-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th6 09, 2021 lúc 05:36 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `crypt_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `otp_expired`
--

CREATE TABLE `otp_expired` (
  `email` varchar(255) NOT NULL,
  `expire` datetime NOT NULL,
  `otp` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `otp_expired`
--

INSERT INTO `otp_expired` (`email`, `expire`, `otp`, `is_expired`) VALUES
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 20:12:34', '415854', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 20:17:12', '335813', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 20:32:42', '751868', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 21:08:23', '320669', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:01:20', '836920', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:06:59', '757359', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:21:35', '758032', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:34:53', '967412', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:36:39', '175795', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:37:18', '896539', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:38:34', '757299', 1),
('luc.nguyenkhmt@hcmut.edu.vn', '2021-06-08 23:39:12', '312142', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
