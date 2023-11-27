-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 07:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `refer`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unm` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `tier` varchar(10) NOT NULL DEFAULT 'NO TIER',
  `ref_cd` varchar(10) NOT NULL,
  `p_ref_cd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unm`, `fname`, `mono`, `email`, `pass`, `points`, `tier`, `ref_cd`, `p_ref_cd`) VALUES
(1, 'Darshit_Limbad', 'Darshit Limbad', 2147483647, 'darshitlimbad555@gmail.com', 'darshit', 999999, 'CROWN', 'WIZ82839', NULL),
(11, 'hello_world', 'helooooo', 2147483647, 'hello@gma.com', 'pass', 150, 'NO TIER', 'WIZ197612', NULL),
(12, 'test_test', 'test', 2147483647, 'test@gmail.com', 'test', 1400, 'BRONZE', 'WIZ961235', 'WIZ197612');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref_cd` (`ref_cd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
