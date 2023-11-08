-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 12:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_collection`
--
CREATE DATABASE IF NOT EXISTS `music_collection` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `music_collection`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `year` smallint(6) UNSIGNED NOT NULL,
  `tracks` tinyint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `artist`, `genre`, `year`, `tracks`) VALUES
(1, 'Harry\'s House', 'Harry Styles', 'Pop', 2022, 13),
(2, '=', 'Ed Sheeran', 'Pop', 2021, 14),
(3, 'The Highlights', 'The Weeknd', 'R&B', 2021, 18),
(4, '30', 'Adele', 'Pop', 2021, 12),
(5, 'AM', 'Arctic Monkeys', 'Rock', 2013, 12),
(6, 'Future Nostalgia', 'Dua Lipa', 'Pop', 2020, 11),
(7, 'Happier Than Ever', 'Billie Eilish', 'Pop', 2021, 16),
(8, 'Renaissance', 'Beyoncé', 'R&B', 2022, 16),
(9, 'Mr. Morale & The Big Steppers', 'Kendrick Lamar', 'Rap', 2022, 19),
(10, 'Live @ Rome Olympic Stadium', 'Muse', 'Rock', 2014, 13),
(11, 'Systematic Chaos', 'Dream Theater', 'Progressive Rock', 2007, 8),
(12, 'United We Are', 'Hardwell', 'House', 2016, 14),
(13, 'Gold Cobra', 'Limp Bizkit', 'Rock', 2011, 16),
(14, 'Mijn Ikken', 'Harrie Jekkers', 'Nederpop', 2006, 12),
(15, 'Love Part 1', 'Angels & Airwaves', 'Rock', 2011, 11),
(16, 'Unstoppable Momentum', 'Joe Satriani', 'Rock', 2013, 11),
(17, 'Cut Your Teeth', 'Kygo', 'Chillstep', 2014, 3),
(18, 'This Is War', '30 Seconds To Mars', 'Rock', 2009, 12),
(19, 'The Greatest Hits', 'Queen', 'Rock', 1980, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
