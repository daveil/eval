/*
SQLyog Ultimate v9.10 
MySQL - 5.5.5-10.1.13-MariaDB : Database - eval
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `letter_grades` */

DROP TABLE IF EXISTS `letter_grades`;

CREATE TABLE `letter_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min_grade` decimal(5,2) DEFAULT NULL,
  `max_grade` decimal(5,2) DEFAULT NULL,
  `equivalent` char(2) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `letter_grades` */

insert  into `letter_grades`(`id`,`min_grade`,`max_grade`,`equivalent`,`description`,`created`,`modified`) values (1,'8.60','10.00','O','Outstanding','2016-08-06 08:36:43',NULL);
insert  into `letter_grades`(`id`,`min_grade`,`max_grade`,`equivalent`,`description`,`created`,`modified`) values (2,'6.60','8.59','VS','Very Satisfactory','2016-08-06 08:38:10','2016-08-06 08:38:10');
insert  into `letter_grades`(`id`,`min_grade`,`max_grade`,`equivalent`,`description`,`created`,`modified`) values (3,'4.60','6.59','S','Satisfactory','2016-08-06 08:38:32','2016-08-06 08:38:32');
insert  into `letter_grades`(`id`,`min_grade`,`max_grade`,`equivalent`,`description`,`created`,`modified`) values (4,'2.60','4.59','U','Unsatisfactory','2016-08-06 08:38:57','2016-08-06 08:39:14');
insert  into `letter_grades`(`id`,`min_grade`,`max_grade`,`equivalent`,`description`,`created`,`modified`) values (5,'2.59','0.00','P','Poor','2016-08-06 08:39:36','2016-08-06 08:39:36');

/*Table structure for table `lrns` */

DROP TABLE IF EXISTS `lrns`;

CREATE TABLE `lrns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lrn` varchar(15) DEFAULT NULL,
  `encoded_by` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lrns` */
ALTER TABLE `students` ADD COLUMN `lrn` VARCHAR(15) NULL AFTER `slug`; 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
