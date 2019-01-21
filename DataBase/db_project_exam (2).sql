-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 яну 2019 в 10:35
-- Версия на сървъра: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_exam`
--

-- --------------------------------------------------------

--
-- Структура на таблица `blue-ray`
--

CREATE TABLE `blue-ray` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `blue-ray`
--

INSERT INTO `blue-ray` (`id`, `name`, `release_date`, `category`, `available`) VALUES
(1, 'Avatar', '17.12.2009', 'Si-Fi', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `from_who` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `contact`
--

INSERT INTO `contact` (`id`, `from_who`, `message`, `email`) VALUES
(1, 'bambukof', 'asdasdasd', 'neshto@siposhta.com'),
(2, 'bambukof', 'test test test', 'asdf@abv.bg'),
(3, 'bambukof', 'tajsioerjtajitoiajset', 'kolio@email.com'),
(4, 'bambukof', 'stana li', 'neshto@siposhta.com'),
(5, 'adasha', 'adasha kaza che nqma da stane', 'adasha@abv.bg');

-- --------------------------------------------------------

--
-- Структура на таблица `dvd`
--

CREATE TABLE `dvd` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `dvd`
--

INSERT INTO `dvd` (`id`, `name`, `release_date`, `category`, `available`) VALUES
(2, 'Warcraft', '24.05.2016', 'Fantasy', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `rented`
--

CREATE TABLE `rented` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `rented` varchar(50) NOT NULL,
  `date_from` date NOT NULL,
  `date_until` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(80) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`) VALUES
(1, 'admin', '123456', 'neshto@siposhta.com', 'Nikola', 'Bambukof'),
(44, 'krisko', '1234567', 'ohcilatko@abv.bg', 'Kristiyan', 'Drakonow'),
(46, 'testov', '123456789', 'testomail@mail.com', 'testov', 'testov');

-- --------------------------------------------------------

--
-- Структура на таблица `vhs`
--

CREATE TABLE `vhs` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `release_date` varchar(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `available` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blue-ray`
--
ALTER TABLE `blue-ray`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vhs`
--
ALTER TABLE `vhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blue-ray`
--
ALTER TABLE `blue-ray`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vhs`
--
ALTER TABLE `vhs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
