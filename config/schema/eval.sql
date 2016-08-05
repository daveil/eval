/*
SQLyog Ultimate v9.10 
MySQL - 5.6.17 : Database - eval
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`eval` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `eval`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `precentage` int(11) DEFAULT NULL,
  `for_masters` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (1,'Lesson Planning and Delivery','lesson-planning-and-delivery','I-A',40,1,'2016-07-03 11:26:48','2016-08-01 18:33:04'),(2,'Technical Assitance','technical-assitance','I-B',15,1,'2016-07-03 11:28:24','2016-08-01 18:33:04'),(3,'Leaner\'s Achivement','leaner-s-achivement','I-C',10,1,'2016-07-03 11:28:47','2016-08-01 18:33:04'),(4,'School, Home and Community Involvement','school--home-and-community-involvement','I-D',5,0,'2016-07-03 11:29:21','2016-08-01 18:33:04'),(5,'Professional and Personal Characteristics','professional-and-personal-characteristics','II',20,0,'2016-07-03 11:31:47','2016-08-01 18:33:04'),(6,'Sample','sample','IV',50,1,'2016-07-22 17:59:52','2016-08-01 18:33:04'),(7,'Sample again','sample-again','V',10,1,'2016-07-22 18:01:43','2016-08-01 18:33:04');

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contents` */

insert  into `contents`(`id`,`title`,`content`,`created`,`modified`) values (1,'About Us','<h2 align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;\r\nfont-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0D0D0D;mso-bidi-font-style:italic\">COMPANY PROFILE<o:p></o:p></span></h2><h2><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\">THE MISSION</span></u></i><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></h2><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-style:italic\">&nbsp;&nbsp;&nbsp;&nbsp; We are entrusted to uphold and alleviate\r\nthe healthcare services in our country by providing excellent services in the\r\nsale and distribution of pharmaceutical products, hospital consumables and\r\nequipment. </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We acknowledge our people\r\nin the company as our most important resource and we are committed to their\r\npersonal development and career growth. </span><span style=\"font-size:11.0pt;\r\nfont-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We adhere to the highest\r\nethical standards in handling our business activities, which we trust is the\r\nreal foundation of true personal and career growth within the organization. </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is also the\r\nbasis&nbsp;for&nbsp;the faith&nbsp;&nbsp; and&nbsp;&nbsp; honor&nbsp;&nbsp;\r\nwe&nbsp;&nbsp; wish to&nbsp;support&nbsp;always in all our undertakings with\r\nour co-workers in the company, our customers and other people, whose concern\r\nalso pertains to healthcare services to our country. <o:p></o:p></span></p><p class=\"MsoBodyText\" style=\"text-align:justify\"><b><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\">&nbsp;</span></u></i></b></p><p class=\"MsoBodyText\" style=\"text-align:justify\"><b><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\">VISION </span></u></i></b><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\nthe chosen distributor </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\nthe worthy distributor </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\na globally accepted service-oriented organization <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;text-indent:.5in\"><b><span style=\"mso-bidi-font-family:Arial;\r\ncolor:#0D0D0D\">South East Star Enterprises</span></b><span style=\"mso-bidi-font-family:\r\nArial;color:#0D0D0D\"> is in the business of Distribution, Importation and\r\nPromotion of generic and branded medicines, medical and hospital supplies and\r\nequipment for over 25 years. Other product has expanded and evolved to serve\r\nvarious fields of medicines such as Anesthesia, Radiology, Surgery, and\r\nLaboratory Departments.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;text-indent:.5in\"><b><span style=\"mso-bidi-font-family:Arial;\r\ncolor:#0D0D0D\">South Star Enterprises</span></b><span style=\"mso-bidi-font-family:\r\nArial;color:#0D0D0D\"> a local company that operates in Southern Luzon with its\r\nmain office at Apitong Avenue Mt. View Subdivision, Tanauan City, Batangas.&nbsp;<o:p></o:p></span></p>','2016-07-29 19:31:13','2016-07-29'),(2,'About Us','<div id=\"content\"><div class=\"row\"><div class=\"col-lg-8 col-lg-offset-2\" style=\"margin-left: 223.156px; width: 892.656px;\"><h2 align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">COMPANY PROFILEasadasd<o:p></o:p></span></h2><h2><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">THE MISSION</span></u></i><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></h2><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp; We are entrusted to uphold and alleviate the healthcare services in our country by providing excellent services in the sale and distribution of pharmaceutical products, hospital consumables and equipment.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We acknowledge our people in the company as our most important resource and we are committed to their personal development and career growth.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We adhere to the highest ethical standards in handling our business activities, which we trust is the real foundation of true personal and career growth within the organization.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is also the basis&nbsp;for&nbsp;the faith&nbsp;&nbsp; and&nbsp;&nbsp; honor&nbsp;&nbsp; we&nbsp;&nbsp; wish to&nbsp;support&nbsp;always in all our undertakings with our co-workers in the company, our customers and other people, whose concern also pertains to healthcare services to our country.<o:p></o:p></span></p><p class=\"MsoBodyText\" style=\"text-align: justify;\"><b><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;</span></u></i></b></p><p class=\"MsoBodyText\" style=\"text-align: justify;\"><b><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">VISION</span></u></i></b><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be the chosen distributor</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be the worthy distributor</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be a globally accepted service-oriented organization<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><b><span style=\"color: rgb(13, 13, 13);\">South East Star Enterprises</span></b><span style=\"color: rgb(13, 13, 13);\">&nbsp;is in the business of Distribution, Importation and Promotion of generic and branded medicines, medical and hospital supplies and equipment for over 25 years. Other product has expanded and evolved to serve various fields of medicines such as Anesthesia, Radiology, Surgery, and Laboratory Departments.<o:p></o:p></span></p><p></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><b><span style=\"color: rgb(13, 13, 13);\">South Star Enterprises</span></b><span style=\"color: rgb(13, 13, 13);\">&nbsp;a local company that operates in Southern Luzon with its main office at Apitong Avenue Mt. View Subdivision, Tanauan City, Batangas.&nbsp;<o:p></o:p></span></p><div><span style=\"color: rgb(13, 13, 13);\"><br></span></div></div></div></div>','2016-07-30 11:34:38','2016-07-30');

/*Table structure for table `evaluation_details` */

DROP TABLE IF EXISTS `evaluation_details`;

CREATE TABLE `evaluation_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluation_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `evaluation_details` */

insert  into `evaluation_details`(`id`,`evaluation_id`,`question_id`,`score`) values (1,1,1,10),(2,1,6,10),(3,1,2,10),(4,1,3,10),(5,1,4,10),(6,1,5,10),(7,1,7,10),(8,2,1,10),(9,2,6,10),(10,2,2,10),(11,2,3,10),(12,2,4,10),(13,2,5,10),(14,2,7,NULL);

/*Table structure for table `evaluation_results` */

DROP TABLE IF EXISTS `evaluation_results`;

CREATE TABLE `evaluation_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluation_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `equivalent` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `evaluation_results` */

insert  into `evaluation_results`(`id`,`evaluation_id`,`category_id`,`total`,`score`,`equivalent`) values (1,1,1,20,'4.00',NULL),(2,1,2,10,'1.50',NULL),(3,1,3,10,'1.00',NULL),(4,1,4,10,'0.50',NULL),(5,1,5,10,'2.00',NULL),(6,1,6,10,'5.00',NULL),(7,1,7,NULL,NULL,NULL),(8,2,1,20,'4.00',NULL),(9,2,2,10,'1.50',NULL),(10,2,3,10,'1.00',NULL),(11,2,4,10,'0.50',NULL),(12,2,5,10,'2.00',NULL),(13,2,6,NULL,NULL,NULL),(14,2,7,NULL,NULL,NULL);

/*Table structure for table `evaluations` */

DROP TABLE IF EXISTS `evaluations`;

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `evaluations` */

insert  into `evaluations`(`id`,`student_id`,`teacher_id`,`score`,`created`) values (1,3,1,'14.00','2016-08-01 17:13:44'),(2,3,3,'9.00','2016-08-01 18:49:19');

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `question` text,
  `slug` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (1,1,'Formulates/adopts objective of the lesson plan.','formulates-adopts-objective-of-the-lesson-plan-','2016-07-03 11:32:30','2016-08-01 18:10:40'),(2,2,'Provides assistance to teachers in improving their competence.','provides-assistance-to-teachers-in-improving-their-competence-','2016-07-03 11:33:18','2016-08-01 18:10:40'),(3,3,'Improve\'s Learner\'s achievement level over pretest.','improve-s-learner-s-achievement-level-over-pretest-','2016-07-03 12:05:51','2016-08-01 18:10:40'),(4,4,'Organize and maintains functional homeroom PTA.','organize-and-maintains-functional-homeroom-pta-','2016-07-03 12:06:30','2016-08-01 18:10:40'),(5,5,'Decisiveness.\r\n','decisiveness-','2016-07-03 12:06:47','2016-08-01 18:10:40'),(6,1,'Sample question','sample-question','2016-07-22 17:58:31','2016-08-01 18:10:40'),(7,6,'e23423','e23423','2016-07-22 18:00:38','2016-08-01 18:10:40');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`id`,`last_name`,`first_name`,`middle_name`,`slug`,`age`,`section`,`gender`,`created`,`modified`) values (1,'Dela Cruz','Juan','M','juan-dela-cruz',8,'G7 BLUE','m','2016-07-03 11:23:38','2016-08-01 18:42:37');

/*Table structure for table `teachers` */

DROP TABLE IF EXISTS `teachers`;

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `is_master` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `teachers` */

insert  into `teachers`(`id`,`last_name`,`first_name`,`middle_name`,`gender`,`is_master`,`created`,`modified`) values (1,'Rizal','Joselito','P','m',1,'2016-07-03 11:24:00','2016-07-22 17:05:26'),(3,'Dela Cruz','Juan','Miguel','M',0,'2016-07-22 17:11:33','2016-07-22 17:11:33');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`last_name`,`first_name`,`middle_name`,`is_admin`,`created`,`modified`) values (1,'superuser','a5e1adcd5a46a857b4895010d85854996b02ee18','User','Super','',1,'2016-08-01 13:05:53','2016-08-03 14:50:38'),(3,'Kendal','6b813144ff4dbaff951e3c76fcd09cd1bc160379','Jenner','Kendal',' ',0,'2016-08-01 16:12:21','2016-08-01 16:12:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
