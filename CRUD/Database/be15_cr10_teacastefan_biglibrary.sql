-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 04:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr10_teacastefan_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be15_cr10_teacastefan_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr10_teacastefan_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `bookshop`
--

CREATE TABLE `bookshop` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `short_description` varchar(55) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `author_first_name` varchar(55) DEFAULT NULL,
  `author_last_name` varchar(55) DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_address` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookshop`
--

INSERT INTO `bookshop` (`id`, `image`, `name`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `price`) VALUES
(140, '6235f26056d15.jpg', 'MALLEUS', 'kills a heretic with a cool sword and stuff', 'book', 'Dan', 'Abnett', 'Games Workshop', 'Games Workshop Group PLC,  Willow Road, Lenton, Notting', '2002-05-05', 14),
(141, '6235e6db45212.jpg', 'hammer and Eagle', 'Didnt read it lol', 'book', 'Dan', 'fucking Abnett', 'Games Workshop', 'GWgasse66', '1999-11-11', 16),
(142, '6235eed2d0a3b.jpg', 'Fight club', 'A Guy be fighting with himself for the whole time ,lol,', 'book', 'Chuck', 'Palahniuck', 'Ear ache records', 'earachehell322', '2006-06-06', 12),
(144, '6235f01ccf348.jpg', 'XENOS', 'EIsenhorn 1st book', 'book', 'Dan', 'Abnett', 'Games Workshop', 'GWgasse66', '1998-11-11', 16),
(145, '6235f0b7730ad.jpg', 'Sisters of Battle', 'Women in Heavy Armor', 'book', 'some', 'guy', 'Games Workshop', 'GWgasse66', '2006-06-06', 20),
(146, '6235f12826ce8.jpg', 'Master and Margharita', 'Love story, SATan, Jesus, actually a really cool book', 'book', 'MIkhail', 'Bulgakov', 'speeeedpublisher', 'Usssrgasse66', '1977-11-11', 9),
(147, '6235f19e921ad.jpg', '1984', 'Comunism and shit, maybe what the end of capitalism wil', 'book', 'George', 'Orwell', 'propagandapublishing', 'nopropagandastreet656', '1984-12-15', 7),
(148, '6235f1dccc8dd.jpg', 'Khorne codex', 'some random shit about Khorne', 'book', 'Games', 'Workshop', 'Games Workshop', 'GWgasse66', '2010-12-12', 12),
(149, '6235f2392c664.jpg', 'The art of Loving', 'the fucking title is not enough???', 'book', 'Erich', 'Fromm', 'fritzpublishing', 'amadeusstrasse54', '1966-12-01', 19),
(150, '6235f29e62ea4.jpg', 'HERETICUS', 'last book, sad bob', 'book', 'Dan', 'Abnett', 'Games Workshop', 'GWgasse66', '1999-12-09', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookshop`
--
ALTER TABLE `bookshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookshop`
--
ALTER TABLE `bookshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
