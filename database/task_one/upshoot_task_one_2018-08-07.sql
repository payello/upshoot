# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.19)
# Database: upshoot_task_one
# Generation Time: 2018-08-07 09:50:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table motorbikes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `motorbikes`;

CREATE TABLE `motorbikes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `model_year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `motorbikes` WRITE;
/*!40000 ALTER TABLE `motorbikes` DISABLE KEYS */;

INSERT INTO `motorbikes` (`id`, `brand`, `colour`, `model_year`)
VALUES
	(1,'Yamaha','Red','2004'),
	(2,'Honda','Blue','2007'),
	(3,'Honda','Black','2014'),
	(4,'Suzuki','Red','2009'),
	(5,'Harley-Davidson','Black','2013'),
	(6,'Ducati','Red','2007');

/*!40000 ALTER TABLE `motorbikes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table owners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `owners`;

CREATE TABLE `owners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `motorbike_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `owners` WRITE;
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;

INSERT INTO `owners` (`id`, `name`, `motorbike_id`, `location`)
VALUES
	(1,'Jake',4,'51.5034722,-0.0922523'),
	(2,'Paul',2,'51.5153163,-0.1011231'),
	(3,'Mark',1,'51.516758, -0.076783'),
	(4,'Paul',3,'51.5153163,-0.1011231');

/*!40000 ALTER TABLE `owners` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
