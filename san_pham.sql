-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_sp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_dm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh_sp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `ma_dm`, `hinhanh_sp`) VALUES
('cerave1', 'Sữa rửa mặt Cerave 1', 'dm_3', 'upload/dm_3/cerave1.png'),
('cerave2', 'Sữa rửa mặt Cerave 2', 'dm_3', 'upload/dm_3/cerave2.png'),
('cerave3', 'Sữa rửa mặt Cerave 3', 'dm_3', 'upload/dm_3/cerave3.png'),
('cerave4', 'Sữa rửa mặt Cerave 4', 'dm_3', 'upload/dm_3/cerave4.png'),
('cerave5', 'Sữa rửa mặt Cerave 5', 'dm_3', 'upload/dm_3/cerave5.png'),
('clear1', 'Đầu gội đầu Clear 1', 'dm_1', 'upload/dm_1/clear1.png'),
('clear2', 'Đầu gội đầu Clear 2', 'dm_1', 'upload/dm_1/clear2.png'),
('clear3', 'Đầu gội đầu Clear 3', 'dm_1', 'upload/dm_1/clear3.png'),
('kumargic1', 'Kem trị thâm mắt Kumargic 1', 'dm_4', 'upload/dm_4/kumargic1.png'),
('prevention1', 'Kem chống nắng Prevention 1', 'dm_2', 'upload/dm_2/prevention1.png'),
('prevention2', 'Kem chống nắng Prevention 2', 'dm_2', 'upload/dm_2/prevention2.png'),
('prevention3', 'Kem chống nắng Prevention 3', 'dm_2', 'upload/dm_2/prevention3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_dm` (`ma_dm`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_dm`) REFERENCES `danh_muc` (`ma_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
