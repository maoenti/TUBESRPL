-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 08:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `id_project` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `end_date` date DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date_project` date NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`id_project`, `id_owner`, `status`, `end_date`, `title`, `location`, `category`, `date_project`, `description`) VALUES
(1, 1, 0, NULL, 'Dynamic', 'Bandung', 'Event', '2021-05-07', 'asdasda'),
(2, 1, 0, NULL, 'Qurban', 'Bandung Tenggara', 'Event', '2021-05-26', 'Hola Aasjdasdjhashkd asoidasodah aslkdl'),
(3, 1, 0, NULL, 'Kumpul Keluarga', 'Soreang', 'Silaturahmi', '2021-05-17', 'Monti family gathering');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `username`, `password`) VALUES
(1, 'iqbalzain99@upi.edu', 'iqbal', '1234'),
(3, 'montiGantengz@gmail.com', 'monti', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
