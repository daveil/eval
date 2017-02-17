/*
SQLyog Ultimate v9.10 
MySQL - 5.6.30-cll-lve : Database - eval
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (1,'Lesson Planning and Delivery','lesson-planning-and-delivery','I-A',45,0,'2016-07-03 11:26:48','2016-10-02 09:37:06');
insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (2,'Technical Assistance','technical-assistance','I-B',20,0,'2016-07-03 11:28:24','2016-10-02 09:38:35');
insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (3,'Learner\'s Achievement','learner-s-achievement','I-C',10,0,'2016-07-03 11:28:47','2016-08-01 18:33:04');
insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (4,'School, Home and Community Involvement','school--home-and-community-involvement','I-D',5,0,'2016-07-03 11:29:21','2016-08-01 18:33:04');
insert  into `categories`(`id`,`name`,`slug`,`code`,`precentage`,`for_masters`,`created`,`modified`) values (5,'Professional and Personal Characteristics','professional-and-personal-characteristics','II',20,0,'2016-07-03 11:31:47','2016-08-01 18:33:04');

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `contents` */

insert  into `contents`(`id`,`title`,`link`,`content`,`created`,`modified`) values (1,'About Us','about-us','<h2 align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;\r\nfont-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0D0D0D;mso-bidi-font-style:italic\">sfsdfsdfCOMPANY PROFILE<o:p></o:p></span></h2><h2><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\">THE MISSION</span></u></i><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></h2><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-style:italic\">&nbsp;&nbsp;&nbsp;&nbsp; We are entrusted to uphold and alleviate\r\nthe healthcare services in our country by providing excellent services in the\r\nsale and distribution of pharmaceutical products, hospital consumables and\r\nequipment. </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We acknowledge our people\r\nin the company as our most important resource and we are committed to their\r\npersonal development and career growth. </span><span style=\"font-size:11.0pt;\r\nfont-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We adhere to the highest\r\nethical standards in handling our business activities, which we trust is the\r\nreal foundation of true personal and career growth within the organization. </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:Arial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:\r\nitalic\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is also the\r\nbasis&nbsp;for&nbsp;the faith&nbsp;&nbsp; and&nbsp;&nbsp; honor&nbsp;&nbsp;\r\nwe&nbsp;&nbsp; wish to&nbsp;support&nbsp;always in all our undertakings with\r\nour co-workers in the company, our customers and other people, whose concern\r\nalso pertains to healthcare services to our country. <o:p></o:p></span></p><p class=\"MsoBodyText\" style=\"text-align:justify\"><b><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\">&nbsp;</span></u></i></b></p><p class=\"MsoBodyText\" style=\"text-align:justify\"><b><i><u><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\">VISION </span></u></i></b><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\n&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\nthe chosen distributor </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\nthe worthy distributor </span><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;\r\nmso-bidi-font-family:&quot;Times New Roman&quot;;color:#0D0D0D\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align:center\"><span style=\"font-size:11.0pt;font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:\r\nArial;color:#0D0D0D;mso-bidi-font-weight:bold;mso-bidi-font-style:italic\">To be\r\na globally accepted service-oriented organization <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;text-indent:.5in\"><b><span style=\"mso-bidi-font-family:Arial;\r\ncolor:#0D0D0D\">South East Star Enterprises</span></b><span style=\"mso-bidi-font-family:\r\nArial;color:#0D0D0D\"> is in the business of Distribution, Importation and\r\nPromotion of generic and branded medicines, medical and hospital supplies and\r\nequipment for over 25 years. Other product has expanded and evolved to serve\r\nvarious fields of medicines such as Anesthesia, Radiology, Surgery, and\r\nLaboratory Departments.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;text-indent:.5in\"><b><span style=\"mso-bidi-font-family:Arial;\r\ncolor:#0D0D0D\">South Star Enterprises</span></b><span style=\"mso-bidi-font-family:\r\nArial;color:#0D0D0D\"> a local company that operates in Southern Luzon with its\r\nmain office at Apitong Avenue Mt. View Subdivision, Tanauan City, Batangas.&nbsp;<o:p></o:p></span></p>','2016-07-29 19:31:13','2016-10-23');
insert  into `contents`(`id`,`title`,`link`,`content`,`created`,`modified`) values (2,'History of Lipa City','history','<div id=\"content\"><div class=\"row\"><div class=\"col-lg-8 col-lg-offset-2\" style=\"margin-left: 223.156px; width: 892.656px;\"><h2 align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">COMPANY PROFILEasadasd<o:p></o:p></span></h2><h2><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">THE MISSION</span></u></i><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></h2><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp; We are entrusted to uphold and alleviate the healthcare services in our country by providing excellent services in the sale and distribution of pharmaceutical products, hospital consumables and equipment.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We acknowledge our people in the company as our most important resource and we are committed to their personal development and career growth.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We adhere to the highest ethical standards in handling our business activities, which we trust is the real foundation of true personal and career growth within the organization.</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p style=\"text-align: justify;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is also the basis&nbsp;for&nbsp;the faith&nbsp;&nbsp; and&nbsp;&nbsp; honor&nbsp;&nbsp; we&nbsp;&nbsp; wish to&nbsp;support&nbsp;always in all our undertakings with our co-workers in the company, our customers and other people, whose concern also pertains to healthcare services to our country.<o:p></o:p></span></p><p class=\"MsoBodyText\" style=\"text-align: justify;\"><b><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">&nbsp;</span></u></i></b></p><p class=\"MsoBodyText\" style=\"text-align: justify;\"><b><i><u><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">VISION</span></u></i></b><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be the chosen distributor</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be the worthy distributor</span><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\"><o:p></o:p></span></p><p class=\"MsoBodyText\" align=\"center\" style=\"text-align: center;\"><span style=\"font-size: 11pt; font-family: Calibri, sans-serif; color: rgb(13, 13, 13);\">To be a globally accepted service-oriented organization<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><b><span style=\"color: rgb(13, 13, 13);\">South East Star Enterprises</span></b><span style=\"color: rgb(13, 13, 13);\">&nbsp;is in the business of Distribution, Importation and Promotion of generic and branded medicines, medical and hospital supplies and equipment for over 25 years. Other product has expanded and evolved to serve various fields of medicines such as Anesthesia, Radiology, Surgery, and Laboratory Departments.<o:p></o:p></span></p><p></p><p class=\"MsoNormal\" style=\"text-align: justify; text-indent: 0.5in;\"><b><span style=\"color: rgb(13, 13, 13);\">South Star Enterprises</span></b><span style=\"color: rgb(13, 13, 13);\">&nbsp;a local company that operates in Southern Luzon with its main office at Apitong Avenue Mt. View Subdivision, Tanauan City, Batangas.&nbsp;<o:p></o:p></span></p><div><span style=\"color: rgb(13, 13, 13);\"><br></span></div></div></div></div>','2016-07-30 11:34:38','2016-10-23');

/*Table structure for table `evaluation_details` */

DROP TABLE IF EXISTS `evaluation_details`;

CREATE TABLE `evaluation_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluation_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `evaluation_details` */

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `evaluation_results` */

/*Table structure for table `evaluations` */

DROP TABLE IF EXISTS `evaluations`;

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `equivalent` char(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `evaluations` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `lrns` */

insert  into `lrns`(`id`,`lrn`,`encoded_by`,`created`,`modified`) values (1,'123456789','admin','2017-01-05 13:19:32','2017-01-05 13:19:32');

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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (1,1,'Formulates/adopts objective of the lesson plan.','formulates-adopts-objective-of-the-lesson-plan-','2016-07-03 11:32:30','2016-08-01 18:10:40');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (2,2,'Provides assistance to teachers in improving their competence.','provides-assistance-to-teachers-in-improving-their-competence-','2016-07-03 11:33:18','2016-08-01 18:10:40');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (3,3,'Improve\'s Learner\'s achievement level over pretest.','improve-s-learner-s-achievement-level-over-pretest-','2016-07-03 12:05:51','2016-08-01 18:10:40');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (4,4,'Organize and maintains functional homeroom PTA.','organize-and-maintains-functional-homeroom-pta-','2016-07-03 12:06:30','2016-08-01 18:10:40');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (5,5,'Decisiveness.\r\n','decisiveness-','2016-07-03 12:06:47','2016-08-01 18:10:40');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (8,1,'Selects content and prepares appropriate instructional materials/teaching aid','','2016-09-15 20:59:18','2016-09-15 20:59:18');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (9,1,'Elects teaching methods/strategies','','2016-09-16 06:33:48','2016-09-16 06:33:48');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (10,4,'Conducts Homeroom /PTA meeting report learners\' progress.','','2016-09-16 07:29:59','2016-09-16 07:29:59');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (11,4,'Disseminate school policies/plans/programs/accomplishments to the school clientele','','2016-09-16 07:32:48','2016-09-16 07:32:48');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (12,1,'Relates new lesson with previous knowledge/skills','','2016-09-18 12:59:56','2016-09-18 12:59:56');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (13,1,'Provides appropriate motivation','','2016-09-18 13:01:39','2016-09-18 13:01:39');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (14,1,'Present and develops lessons','','2016-09-18 13:03:10','2016-09-18 13:03:10');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (15,1,'Conveys idea clearly','','2016-09-18 13:06:59','2016-09-18 13:06:59');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (16,1,'Utilizes the art of questioning to develop higher level of thinking','','2016-09-18 13:16:16','2016-09-18 13:16:16');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (17,1,'Ensures pupils/students participation','','2016-09-18 13:19:16','2016-09-18 13:19:16');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (18,1,'Addresses individuals differences ','','2016-09-18 13:28:28','2016-09-18 13:28:28');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (19,1,'Shows mastery of the subject matter','','2016-09-18 13:30:36','2016-09-18 13:30:36');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (20,1,'Diagnoses learner\'s needs','','2016-09-18 13:31:50','2016-09-18 13:31:50');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (21,1,'Evaluates learning outcomes','','2016-09-18 13:34:22','2016-09-18 13:34:22');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (22,1,'Assess location to determine desired outcomes with the allotted time ','','2016-09-18 13:48:00','2016-09-18 13:48:00');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (23,1,'Maintains clean and orderly classroom','','2016-09-18 13:55:23','2016-09-18 13:55:23');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (24,1,'Maintains classroom conducive to learning','','2016-09-18 13:56:41','2016-09-18 13:56:41');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (25,2,'Prepares prototype instructional materials use ','','2016-09-21 19:08:31','2016-09-21 19:08:31');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (26,2,'Assist in conduct of in-service training /conferences','','2016-09-21 19:13:58','2016-09-21 19:13:58');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (27,2,'Serves as demonstration teacher on innovative teachings techniques, classroom management, materials development','','2016-09-21 19:15:23','2016-09-21 19:15:23');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (28,4,'Participates in community projects and in civic organizations','','2016-09-21 19:19:52','2016-09-21 19:19:52');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (29,4,'Encourage involvement of parents in school program and activities','','2016-09-21 19:25:50','2016-09-21 19:25:50');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (30,5,'Honesty and integrity','','2016-09-21 19:28:17','2016-09-21 19:28:17');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (32,5,'Dedication/Commitment','','2016-09-21 19:30:24','2016-09-21 19:30:24');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (33,5,'Initiative/Resourcefulness','','2016-09-21 19:39:46','2016-09-21 19:39:46');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (34,5,'Courtesy','','2016-09-21 19:40:12','2016-09-21 19:40:12');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (35,5,'Human Relations','','2016-09-21 19:40:31','2016-09-21 19:40:31');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (37,5,'Leadership','','2016-09-21 19:41:17','2016-09-21 19:41:17');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (38,5,'Stress Tolerance','','2016-09-21 19:41:35','2016-09-21 19:41:35');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (39,5,'Fairness/Justice','','2016-09-21 19:41:56','2016-09-21 19:41:56');
insert  into `questions`(`id`,`category_id`,`question`,`slug`,`created`,`modified`) values (40,5,'Proper Attire/Good Grooming','','2016-09-21 19:42:25','2016-09-21 19:42:25');

/*Table structure for table `schedules` */

DROP TABLE IF EXISTS `schedules`;

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `start_sched` datetime DEFAULT NULL,
  `end_sched` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `schedules` */

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sections` */

insert  into `sections`(`id`,`name`,`created`,`modified`) values (1,'10-kepler','2017-01-05 14:08:02','2017-01-05 14:08:02');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `lrn` varchar(15) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `section_id` int(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `students` */

/*Table structure for table `teachers` */

DROP TABLE IF EXISTS `teachers`;

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `is_master` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `teachers` */

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`last_name`,`first_name`,`middle_name`,`is_admin`,`created`,`modified`) values (1,'admin','6b813144ff4dbaff951e3c76fcd09cd1bc160379','Admin','Admin','',1,'2016-08-01 13:05:53','2016-08-03 14:50:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
