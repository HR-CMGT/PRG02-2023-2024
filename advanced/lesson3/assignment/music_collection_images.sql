# ************************************************************
# Sequel Ace SQL dump
# Version 20042
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.5.5-10.4.21-MariaDB)
# Database: music_collection_images
# Generation Time: 2022-12-05 19:22:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `year` varchar(4) NOT NULL,
  `tracks` int(3) NOT NULL,
  `image` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;

INSERT INTO `albums` (`id`, `name`, `artist`, `genre`, `year`, `tracks`, `image`)
VALUES
	(1,'Live At Rome Olympic Stadium','Muse','Rock','2013',13,'live_at_rome_olympic_stadium.jpg'),
	(2,'Systematic Chaos','Dream Theater','Progressive Rock','2007',8,'systematic_chaos.jpg'),
	(3,'United We Are','Hardwell','House','2015',14,'united_we_are.jpg'),
	(4,'Greatest Hits','Robbie Williams','Pop','2010',57,'greatest_hits.jpg'),
	(5,'Gold Cobra','Limp Bizkit','Rock / Rap','2011',16,'gold_cobra.jpg'),
	(6,'Mijn Ikken','Harrie Jekkers','Nederpop','2005',12,'mijn_ikken.jpg'),
	(7,'Love Part 1','Angels & Airwaves','Rock','2011',11,'love_part_1.jpg'),
	(8,'Unstoppable Momentum','Joe Satriani','Rock','2013',11,'unstoppable_momentum.jpg'),
	(9,'Cut Your Teeth','Kygo','Chillstep','2014',3,'cut_your_teeth.jpg'),
	(10,'This Is War','30 Seconds To Mars','Rock','2009',15,'this_is_war.jpg');

/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
