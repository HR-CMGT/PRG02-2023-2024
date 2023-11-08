-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 30 nov 2021 om 11:57
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";

--
-- Database: `music_collection`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `albums`
--

CREATE TABLE `albums`
(
    `id`     int(11) UNSIGNED NOT NULL,
    `name`   varchar(50)  NOT NULL,
    `artist` varchar(50)  NOT NULL,
    `genre`  varchar(20)  NOT NULL,
    `year`   smallint(6) UNSIGNED NOT NULL,
    `tracks` tinyint(4) UNSIGNED NOT NULL,
    `image`  varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `albums`
--

INSERT INTO `albums` (`id`, `name`, `artist`, `genre`, `year`, `tracks`, `image`)
VALUES (1, 'Live @ Rome Olympic Stadium', 'Muse', 'Rock', 2014, 13, ''),
       (2, 'Systematic Chaos', 'Dream Theater', 'Progressive Rock', 2007, 8, 'systematic_chaos.jpg'),
       (3, 'United We Are', 'Hardwell', 'House', 2016, 14, 'united_we_are.jpg'),
       (4, 'Greatest Hits', 'Robbie Williams', 'Pop', 2010, 57, 'greatest_hits.jpg'),
       (5, 'Gold Cobra', 'Limp Bizkit', 'Rock / Rap', 2011, 16, 'gold_cobra.jpg'),
       (6, 'Mijn Ikken', 'Harrie Jekkers', 'Nederpop', 2006, 12, 'mijn_ikken.jpg'),
       (7, 'Love Part 1', 'Angels & Airwaves', 'Rock', 2011, 11, 'love_part_1.jpg'),
       (8, 'Unstoppable Momentum', 'Joe Satriani', 'Rock', 2013, 11, 'unstoppable_momentum.jpg'),
       (9, 'Cut Your Teeth', 'Kygo', 'Chillstep', 2014, 3, 'cut_your_teeth.jpg'),
       (10, 'This Is War', '30 Seconds To Mars', 'Rock', 2009, 12, 'this_is_war.jpg'),
       (13, 'The Greatest Hits', 'Queen', 'Rock', 1980, 12, 'picture.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `albums`
--
ALTER TABLE `albums`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `albums`
--
ALTER TABLE `albums`
    MODIFY `id` int (11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
