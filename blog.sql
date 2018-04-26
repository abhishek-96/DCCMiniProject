-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 11:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `username` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`username`, `comment`) VALUES
('vinay.hp@somaiya.edu', 'hello how are you'),
('', ''),
('vinay.hp@somaiya.edu', 'fgmfmf'),
('vinay.hp@somaiya.edu', 'dffmdsfmdsmfdlsm'),
('vinay.hp@somaiya.edu', 'vdfvdfvdfv'),
('vinay.hp@somaiya.edu', 'ghtrhtrhtr'),
('vinay.hp@somaiya.edu', 'hthghnghgh'),
('vinay.hp@somaiya.edu', 'ghfghfgbdfgdf'),
('vinay.hp@somaiya.edu', 'This project is developed by Vinay and Abhishek.'),
('vinay.hp@somaiya.edu', 'vinay pandya abhishek'),
('vinay.hp@somaiya.edu', 'Testing123'),
('vinay.hp@somaiya.edu', 'Testing2345\n'),
('vinay.hp@somaiya.edu', 'fdgdfgdfgv'),
('vinay.hp@somaiya.edu', 'dvdfgdfvdf'),
('vinay.hp@somaiya.edu', 'kmndfmldfmv'),
('vinay.hp@somaiya.edu', 'dsfsdsd'),
('vinay.hp@somaiya.edu', 'abhishek'),
('vinay.hp@somaiya.edu', 'vinay'),
('vinay.hp@somaiya.edu', 'hgghgfhgfyjgv');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'vinay.hp@somaiya.edu', '1234'),
(2, 'a.mahajani@somaiya.edu', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
