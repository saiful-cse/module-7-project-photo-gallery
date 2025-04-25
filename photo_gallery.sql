-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2025 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `filename`, `upload_date`) VALUES
(4, 'Top view of Malaysia KL Tower', 'I visited at 2023', '680b4597bb1e7487675251_4063024510653777_6685156773447731497_n.jpg', '2025-04-25 08:19:35'),
(5, 'Singapore Merlin Part', ' Visited at 2022', '680b45bb89f6c487205544_4062894504000111_8121440774238254674_n.jpg', '2025-04-25 08:20:11'),
(6, 'Sopnotori Part View', ' Visited at 2022', '680b45df9db48488059494_4064373940518834_5740897230980706291_n (1).jpg', '2025-04-25 08:20:47'),
(7, 'Malaysia Central Mosque', ' Visited at 2024', '680b460ac83ea486951705_4057163544573207_5359230412466447622_n.jpg', '2025-04-25 08:21:30'),
(8, 'Infront of Negra Mosque Kuala Lumpur', ' Visited at 2023', '680b46431d536486760359_4057163551239873_1082753364107374137_n.jpg', '2025-04-25 08:22:27'),
(9, 'Enjoy with Friends ', ' Meet at 2019', '680b466ea7c44463057339_3918697471753149_565158646482001224_n.jpg', '2025-04-25 08:23:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
