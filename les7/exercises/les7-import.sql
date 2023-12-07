-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 okt 2023 om 11:19
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Aanpassingen voor tabel `albums`
--
ALTER TABLE `albums` DROP COLUMN `artist`;
ALTER TABLE `albums` ADD `artist_id` int(11) UNSIGNED NOT NULL AFTER `name`;

-- Add new album
INSERT INTO `albums` (`name`, `artist_id`, `genre`, `year`, `tracks`)
VALUES ('19', 11, 'Pop', 2008, 12);

--
-- Tabelstructuur voor tabel `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
                           `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                           `name` varchar(50) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `artists`
--

INSERT INTO `artists` (`id`, `name`)
VALUES (1, 'Angels & Airwaves'),
       (2, 'Dream Theater'),
       (3, 'Kendrick Lamar'),
       (4, 'Harrie Jekkers'),
       (5, 'Beyoncé'),
       (6, 'Limp Bizkit'),
       (7, 'Arctic Monkeys'),
       (8, 'Kygo'),
       (9, 'Harry Styles'),
       (10, 'Ed Sheeran'),
       (11, 'Adele'),
       (12, 'Queen'),
       (13, 'The Weeknd'),
       (14, '30 Seconds To Mars'),
       (15, 'Dua Lipa'),
       (16, 'Hardwell'),
       (17, 'Muse'),
       (18, 'Billie Eilish'),
       (19, 'Joe Satriani');

--
-- Connect albums to artists
--
UPDATE `albums` SET `artist_id` = 9 WHERE `albums`.`id` = 1;
UPDATE `albums` SET `artist_id` = 10 WHERE `albums`.`id` = 2;
UPDATE `albums` SET `artist_id` = 13 WHERE `albums`.`id` = 3;
UPDATE `albums` SET `artist_id` = 11 WHERE `albums`.`id` = 4;
UPDATE `albums` SET `artist_id` = 7 WHERE `albums`.`id` = 5;
UPDATE `albums` SET `artist_id` = 15 WHERE `albums`.`id` = 6;
UPDATE `albums` SET `artist_id` = 18 WHERE `albums`.`id` = 7;
UPDATE `albums` SET `artist_id` = 5 WHERE `albums`.`id` = 8;
UPDATE `albums` SET `artist_id` = 3 WHERE `albums`.`id` = 9;
UPDATE `albums` SET `artist_id` = 17 WHERE `albums`.`id` = 10;
UPDATE `albums` SET `artist_id` = 2 WHERE `albums`.`id` = 11;
UPDATE `albums` SET `artist_id` = 16 WHERE `albums`.`id` = 12;
UPDATE `albums` SET `artist_id` = 6 WHERE `albums`.`id` = 13;
UPDATE `albums` SET `artist_id` = 4 WHERE `albums`.`id` = 14;
UPDATE `albums` SET `artist_id` = 1 WHERE `albums`.`id` = 15;
UPDATE `albums` SET `artist_id` = 19 WHERE `albums`.`id` = 16;
UPDATE `albums` SET `artist_id` = 8 WHERE `albums`.`id` = 17;
UPDATE `albums` SET `artist_id` = 14 WHERE `albums`.`id` = 18;
UPDATE `albums` SET `artist_id` = 12 WHERE `albums`.`id` = 19;
UPDATE `albums` SET `artist_id` = 11 WHERE `albums`.`id` = 20;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `albums`
--
ALTER TABLE `albums`
    ADD KEY `artist_id` (`artist_id`);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `albums`
--
ALTER TABLE `albums`
    ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;


    COMMIT;

