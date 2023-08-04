-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 11:39 AM
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
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `employeeID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`employeeID`, `Name`, `Address`, `Salary`) VALUES
(1, 'Cary MacAlpine', '14th Floor', 5315),
(2, 'Rivi Solleme', '9th Floor', 8091),
(3, 'Laughton Grovier', 'PO Box 30864', 8300),
(4, 'Iseabal Meacher', 'Room 1746', 4040),
(5, 'Adrien Corzon', '19th Floor', 4580),
(6, 'Dunn Quincee', '13th Floor', 4227),
(7, 'Corney Cadden', 'PO Box 5633', 3272),
(8, 'Nikoletta Mendes', 'Room 1443', 7997),
(9, 'Jeremiah Moulding', 'PO Box 28989', 5916),
(10, 'Ermengarde Bulbrook', 'Suite 75', 8293),
(11, 'Burnaby Oulet', 'PO Box 36237', 7715),
(12, 'Daffi Cleife', 'PO Box 73404', 4486),
(13, 'Ambrosi Harrell', 'Apt 1492', 5622),
(14, 'Hansiain Bows', 'Suite 19', 3282),
(15, 'Ninnetta Narraway', 'Suite 63', 5097),
(16, 'Tanitansy Benck', 'Room 1432', 4030),
(17, 'Ivie Libbey', '5th Floor', 8683),
(18, 'Gordon Petris', 'Room 790', 5733),
(19, 'Rosamund Dunan', 'PO Box 83025', 4347),
(20, 'Maxy Haysey', 'Room 492', 8883),
(21, 'Michael Carsberg', '2nd Floor', 6696),
(22, 'Darda Pinwill', 'Room 1467', 5736),
(23, 'Orsa Breslane', 'Apt 857', 5803),
(24, 'Tito Enns', 'Apt 671', 5182),
(25, 'Johan Philippard', 'Suite 65', 7500),
(26, 'Mitchell Pennetta', 'Apt 1919', 3020),
(27, 'Buck Isard', 'Suite 2', 8047),
(28, 'Gabi Benoy', 'Apt 481', 3099),
(29, 'Dannel Readings', '16th Floor', 8025),
(30, 'Clement Dupoy', '12th Floor', 5314),
(31, 'Alano Goodlett', 'Suite 43', 8019),
(32, 'Vitia Cortnay', 'Room 1601', 4215),
(33, 'Jordan Dax', 'Suite 41', 4702),
(34, 'Rey Reneke', '20th Floor', 5839),
(35, 'Gussy MacNeish', 'PO Box 83753', 6773),
(36, 'Reggis Lunge', 'PO Box 72741', 6489),
(37, 'D\'arcy Breagan', 'Room 1831', 3027),
(38, 'Alexine Polson', 'PO Box 81589', 6491),
(39, 'Aleece Harnwell', 'Apt 1906', 4199),
(40, 'Appolonia Reedshaw', '7th Floor', 5637),
(41, 'Vergil Gibard', 'PO Box 20685', 7074),
(42, 'Lorelle O\'Kieran', 'Suite 90', 3900),
(43, 'Nataline Cleveland', 'Room 816', 5154),
(44, 'Cindi Karadzas', 'Suite 65', 8969),
(45, 'Seka Hesbrook', '6th Floor', 7291),
(46, 'Lanie Alfonsini', '13th Floor', 4931),
(47, 'Danyette O\'Hallagan', '3rd Floor', 8581),
(48, 'Odey Volcker', 'Suite 72', 4519),
(49, 'Tobiah Raithby', 'PO Box 90010', 7461),
(50, 'Hettie Ardley', 'Apt 274', 6941);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
