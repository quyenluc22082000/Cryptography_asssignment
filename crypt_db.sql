-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 06, 2021 at 05:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` varchar(255) NOT NULL,
  `userId` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `action` varchar(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `username`, `userIp`, `action`, `loginTime`) VALUES
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-03 17:44:45'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:52:25'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:53:32'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:54:47'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:55:36'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:56:08'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:58:11'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:58:45'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:59:06'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 02:59:53'),
('', 9, 'mew', 0x3a3a31, 'Logout', '2021-06-04 03:00:31'),
('', 9, 'admin', 0x3a3a31, 'Login', '2021-06-04 03:09:59'),
('', 9, 'admin', 0x3a3a31, 'Logout', '2021-06-04 03:11:15'),
('', 9, 'mew2', 0x3a3a31, 'Login', '2021-06-04 03:11:22'),
('', 9, 'mew2', 0x3a3a31, 'Login', '2021-06-04 03:12:07'),
('', 9, 'mew2', 0x3a3a31, 'Login', '2021-06-04 03:15:04'),
('', 9, 'mew2', 0x3a3a31, 'Logout', '2021-06-04 03:15:50'),
('', 9, 'manager', 0x3a3a31, 'Login', '2021-06-04 03:15:55'),
('', 9, 'manager', 0x3a3a31, 'Login', '2021-06-04 03:17:04'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:17:47'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:18:56'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:19:53'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:20:11'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:20:23'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:25:24'),
('', 9, 'mew', 0x3a3a31, 'Logout', '2021-06-04 03:25:29'),
('', 9, 'admin', 0x3a3a31, 'Login', '2021-06-04 03:25:34'),
('', 9, 'manager', 0x3a3a31, 'Login', '2021-06-04 03:30:55'),
('', 9, 'mew2', 0x3a3a31, 'Login', '2021-06-04 03:31:08'),
('', 9, 'mew2', 0x3a3a31, 'Logout', '2021-06-04 03:31:26'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:33:30'),
('', 9, 'mew2', 0x3a3a31, 'Login', '2021-06-04 03:34:15'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:40:23'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:41:04'),
('', 9, 'mew', 0x3a3a31, 'Logout', '2021-06-04 03:41:16'),
('', 9, 'manager', 0x3a3a31, 'Login', '2021-06-04 03:42:21'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:47:44'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:48:13'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:48:28'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:49:06'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 03:59:18'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 04:03:43'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 04:04:25'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 04:04:54'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 04:05:25'),
('', 9, 'mew', 0x3a3a31, 'Login', '2021-06-04 04:05:45'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:01:17'),
('', 0, 'mew', 0x3a3a31, 'Logout', '2021-06-04 07:01:27'),
('', 0, '', 0x3a3a31, 'Logout', '2021-06-04 07:01:27'),
('', 0, 'manager2', 0x3a3a31, 'Login', '2021-06-04 07:01:39'),
('', 0, 'manager2', 0x3a3a31, 'Logout', '2021-06-04 07:01:51'),
('', 0, 'admin', 0x3a3a31, 'Login', '2021-06-04 07:06:32'),
('', 0, 'admin', 0x3a3a31, 'Logout', '2021-06-04 07:06:43'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:19:21'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:31:51'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:32:06'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:32:24'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:33:01'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:33:37'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:33:57'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:34:12'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:35:57'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:36:37'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:37:22'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:37:32'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:37:41'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:38:32'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:39:21'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:39:32'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-04 07:40:10'),
('', 0, 'mew', 0x3a3a31, 'Login', '2021-06-06 01:48:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
