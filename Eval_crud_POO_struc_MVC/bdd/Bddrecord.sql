-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.5.8-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour record
CREATE DATABASE IF NOT EXISTS `record` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `record`;

-- Listage de la structure de la table record. artist
CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

-- Listage des données de la table record.artist : ~13 rows (environ)
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` (`id`, `artist_name`, `artist_url`) VALUES
	(1, 'Neil Young', NULL),
	(2, 'YES', NULL),
	(3, 'Rolling Stones', NULL),
	(4, 'Queens of the Stone Age', NULL),
	(5, 'Serge Gainsbourg', NULL),
	(6, 'AC/DC', NULL),
	(7, 'Marillion', NULL),
	(8, 'Bob Dylan', NULL),
	(9, 'Fleshtones', NULL),
	(10, 'The Clash', NULL),
	(11, 'fezrt', NULL),
	(67, 'pokemon', NULL),
	(73, 'art', NULL);
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;

-- Listage de la structure de la table record. disc
CREATE TABLE IF NOT EXISTS `disc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disc_title` varchar(255) DEFAULT NULL,
  `disc_year` int(11) DEFAULT NULL,
  `disc_picture` varchar(255) DEFAULT NULL,
  `disc_label` varchar(255) DEFAULT NULL,
  `disc_genre` varchar(255) DEFAULT NULL,
  `disc_price` decimal(6,2) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_disc_artist` (`artist_id`),
  CONSTRAINT `FK_disc_artist` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

-- Listage des données de la table record.disc : ~17 rows (environ)
/*!40000 ALTER TABLE `disc` DISABLE KEYS */;
INSERT INTO `disc` (`id`, `disc_title`, `disc_year`, `disc_picture`, `disc_label`, `disc_genre`, `disc_price`, `artist_id`) VALUES
	(1, 'Fugazi', 1984, 'Fugazi.jpeg', 'EMI', 'Prog', 14.99, 1),
	(2, 'Songs for the Deaf', 2002, 'Songs for the Deaf.jpeg', 'Interscope Records', 'Rock/Stoner', 12.99, 2),
	(3, 'Harvest Moon', 1992, 'Harvest Moon.jpeg', 'Reprise Records', 'Rock', 4.20, 1),
	(4, 'Initials BB', 1968, 'Initials BB.jpeg', 'Philips', ' Chanson, Pop Rock', 12.99, 5),
	(5, 'After the Gold Rush', 1970, 'After the Gold Rush.jpeg', ' Reprise Records', 'Country Rock', 20.00, 1),
	(6, 'Broken Arrow', 1996, 'Broken Arrow.jpeg', 'Reprise Records', ' Country Rock, Classic Rock', 15.00, 1),
	(7, 'Highway To Hell', 1979, 'Highway To Hell.jpeg', 'Atlantic', 'Hard Rock', 15.00, 6),
	(8, 'Drama', 1980, 'Drama.jpeg', 'Atlantic', 'Prog', 15.00, 2),
	(9, 'Year of the Horse', 1997, 'Year of the Horse.jpeg', 'Reprise Records', 'Country Rock, Classic Rock', 7.50, 1),
	(10, 'Ragged Glory', 1990, 'Ragged Glory.jpeg', 'Reprise Records', 'Country Rock, Grunge', 11.00, 1),
	(11, 'Rust Never Sleeps', 1979, 'Rust Never Sleeps.jpeg', 'Reprise Records', 'Classic Rock, Arena Rock', 15.00, 1),
	(12, 'Exile on main street', 1972, 'Exile on main street.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', 33.00, 1),
	(13, 'London Calling', 1971, 'London Calling.jpeg', 'CBS', 'Punk, New Wave', 33.00, 10),
	(14, 'Beggars Banquet', 1968, 'Beggars Banquet.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', 33.00, 1),
	(15, 'Laboratory of sound', 1995, 'Laboratory of sound.jpeg', 'Rebel Rec.', 'Rock', 33.00, 9),
	(16, 'tyu', 2021, 'Laboratory of sound.jpeg', 'dsfrrrrrrrrr', 'sdfdf', 90.01, 11),
	(164, 'Bulbi', 2020, 'Pikachu.jpg', 'Pokemosing', 'pokemdr', 4.11, 1);
/*!40000 ALTER TABLE `disc` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
