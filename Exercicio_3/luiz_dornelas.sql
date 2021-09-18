-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.123
-- Generation Time: 18-Set-2021 às 12:07
-- Versão do servidor: 5.7.32-35-log
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atividade3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `luiz_dornelas`
--

CREATE TABLE `luiz_dornelas` (
  `id` int(11) NOT NULL,
  `equipamento` varchar(50) CHARACTER SET utf8 NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `luiz_dornelas`
--

INSERT INTO `luiz_dornelas` (`id`, `equipamento`, `modelo`, `marca`) VALUES
(1, 'Mouse', 'M711', 'Redragon'),
(2, 'Headset', 'Zeus 2', 'Redragon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luiz_dornelas`
--
ALTER TABLE `luiz_dornelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luiz_dornelas`
--
ALTER TABLE `luiz_dornelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
