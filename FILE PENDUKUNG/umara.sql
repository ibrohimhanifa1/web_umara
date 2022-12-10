-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 04:38 PM
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
-- Database: `umara`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Candra Wijaya', 'candraw71@gmail.com', '$2y$10$6JZtzyHHtOD3UllQ694.beWfNmsAILyqMEX1UDFc6/8rqHr0ihQ0y');

-- --------------------------------------------------------

--
-- Table structure for table `wawasan`
--

CREATE TABLE `wawasan` (
  `id` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wawasan`
--

INSERT INTO `wawasan` (`id`, `tipe`, `judul`, `sub_judul`, `isi`, `created_at`) VALUES
(1, 'Wawasan', 'Digivoks', 'Test', '<p>kihfieowfe</p>\r\n\r\n<p><strong>eogjeoi</strong></p>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<h1><strong>khew</strong></h1>\r\n', '2022-10-16 20:37:00'),
(6, 'Tips', 'Seminar Sukses Kuliah di Luar Negeri', 'Test', '<p>tesss</p>\r\n', '2022-10-16 21:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wawasan`
--
ALTER TABLE `wawasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wawasan`
--
ALTER TABLE `wawasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
