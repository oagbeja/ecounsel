/*
SQLyog - Free MySQL GUI v5.02
Host - 5.0.51b-community-nt : Database - ecounsel
*********************************************************************
Server version : 5.0.51b-community-nt
*/


create database if not exists `ecounsel`;

USE `ecounsel`;

/*Table structure for table `conversation` */

DROP TABLE IF EXISTS `conversation`;

CREATE TABLE `conversation` (
  `cid` int(10) NOT NULL auto_increment,
  `ctext` varchar(1000) default NULL,
  `id` int(10) default NULL,
  `vdate` datetime default NULL,
  `status` char(1) default 'S' COMMENT 'S for student C for Counsellor',
  `coun` int(10) default '1' COMMENT 'counsellor identity default should be 1 since we are having one counsellor',
  `newmsg` char(1) default NULL COMMENT 'Y or N ',
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `conversation` */

insert into `conversation` values 
(1,'hhhhh',1,'0000-00-00 00:00:00','S',1,''),
(2,'hhhhh',1,'0000-00-00 00:00:00','C',1,''),
(3,'msmmfmfs',1,'0000-00-00 00:00:00','S',1,''),
(4,',dldlsldld',1,'0000-00-00 00:00:00','S',1,''),
(5,'dldldl',1,'0000-00-00 00:00:00','S',1,''),
(6,'cccccc',1,'0000-00-00 00:00:00','S',1,''),
(7,'cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc',1,'0000-00-00 00:00:00','C',1,''),
(8,'cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc cccccc',1,'0000-00-00 00:00:00','S',1,''),
(9,'hello',1,'2015-07-22 23:39:26','C',1,NULL),
(10,'hi',1,'2015-07-23 00:13:46','C',1,NULL),
(11,'nnnmn',1,'2015-07-23 00:14:07','C',1,NULL),
(12,'nnnnnn',1,'2015-07-23 00:14:25','C',1,NULL),
(13,'kkvkvzkvkcvkv ckkckzklczk',1,'2015-07-23 00:18:01','C',1,NULL),
(14,',,c,c,c,c,c,c,c,',1,'2015-07-23 00:18:12','C',1,NULL),
(15,',x,x,x,x,x',1,'2015-07-23 00:19:15','C',1,NULL),
(16,'hoos',2,'2015-07-23 00:25:40','C',1,NULL),
(17,'how are you',1,'2015-07-23 00:26:30','S',1,NULL),
(18,'fn',1,'2015-07-23 00:26:49','C',1,NULL),
(19,'are you sure',1,'2015-07-23 00:27:08','S',1,NULL),
(20,'bros',1,'2015-07-23 00:30:50','S',1,NULL),
(21,'how u dey',1,'2015-07-23 00:33:05','S',1,NULL),
(22,'fn bro',1,'2015-07-23 00:33:25','C',1,NULL),
(23,'hello',1,'2015-07-23 00:36:03','C',1,NULL),
(24,'ho',1,'2015-07-23 00:36:51','S',1,NULL),
(25,'how u dey',1,'2015-07-23 00:37:05','C',1,NULL),
(26,'fn',1,'2015-07-23 00:37:36','S',1,NULL),
(27,'hi',1,'2015-07-23 00:40:30','S',1,NULL),
(28,'fn',1,'2015-07-23 00:40:40','C',1,NULL),
(29,'thank u',1,'2015-07-23 00:40:55','S',1,NULL),
(30,'hi',1,'2015-07-23 00:55:22','C',1,NULL),
(31,'hi',1,'2015-07-23 00:55:42','C',1,NULL),
(32,'nnnmn',1,'2015-07-23 00:56:10','C',1,NULL),
(33,'I want to study computer science but don\'t have physic as requirement',4,'2015-07-23 12:46:45','S',1,NULL),
(34,'You can go for Access Programme',4,'2015-07-23 12:47:29','S',1,NULL),
(35,'What is Access programme?',4,'2015-07-23 12:49:55','S',1,NULL),
(36,'Gudday sir',4,'2015-07-24 15:14:51','C',1,NULL),
(37,'Gudday sir',4,'2015-07-24 15:18:56','S',1,NULL),
(38,'Gudday sir',4,'2015-07-24 15:19:12','S',1,NULL),
(39,'Guddday sir',4,'2015-07-24 15:19:47','S',1,NULL),
(40,'Hw do u do?',4,'2015-07-24 15:21:37','S',1,NULL),
(41,'ok and u?',4,'2015-07-24 15:21:53','C',1,NULL),
(42,'hw may i help u?',4,'2015-07-24 15:24:21','S',1,NULL),
(43,'i want to know abt noun',4,'2015-07-24 15:24:48','C',1,NULL),
(44,'Gudday sir, hw is work?',4,'2015-07-24 15:30:12','S',1,NULL),
(45,'fine and ur?',4,'2015-07-24 15:30:23','C',1,NULL),
(46,'ok',4,'2015-07-24 15:30:31','S',1,NULL),
(47,'hw may i help u?',4,'2015-07-24 15:30:45','C',1,NULL),
(48,'sir, i am a prospective students, i want to be a student in noun to study computer science but i dnt hv physics as prt of d requirement',4,'2015-07-24 15:31:54','S',1,NULL),
(49,'ok, u can still be admitted but hv to undergo a prg in noun call Access Proramme',4,'2015-07-24 15:32:43','C',1,NULL),
(50,'sir, pls explain more to me',4,'2015-07-24 15:32:58','S',1,NULL),
(51,'Access prg is a prg u run for a yr bcos u are deficient in a required subject',4,'2015-07-24 15:34:06','C',1,NULL);

/*Table structure for table `criteria` */

DROP TABLE IF EXISTS `criteria`;

CREATE TABLE `criteria` (
  `critid` int(5) NOT NULL auto_increment,
  `critdesc` varchar(100) default NULL,
  `progid` int(5) default NULL,
  PRIMARY KEY  (`critid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `criteria` */

insert into `criteria` values 
(1,'Comp1',1),
(2,'comp2',1),
(9,'2.	B.Sc. Communication Tech',4),
(10,'3.	B. Sc. Computer Sc',4),
(15,'Bsc. Maths/ Comp Sc',10),
(25,'',4),
(24,'comp3',1);

/*Table structure for table `criteriasubject` */

DROP TABLE IF EXISTS `criteriasubject`;

CREATE TABLE `criteriasubject` (
  `critsubid` int(5) NOT NULL auto_increment,
  `critid` int(2) default NULL,
  `subjid` int(5) default NULL,
  `gradeid` int(2) default NULL,
  `mandate` char(1) default NULL,
  PRIMARY KEY  (`critsubid`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

/*Data for the table `criteriasubject` */

insert into `criteriasubject` values 
(1,1,1,6,'C'),
(2,1,2,6,'C'),
(3,1,3,6,'E'),
(4,1,4,6,'C'),
(5,1,5,6,'C'),
(6,1,6,6,'E'),
(7,1,7,6,'E'),
(8,1,9,6,'E'),
(9,1,11,6,'E'),
(10,2,1,6,'C'),
(11,2,2,8,'C'),
(12,2,3,6,'E'),
(13,2,4,6,'C'),
(14,2,5,6,'C'),
(15,2,6,6,'E'),
(16,2,7,6,'E'),
(17,2,9,6,'E'),
(18,2,11,6,'E'),
(19,3,1,8,'C'),
(20,3,2,6,'C'),
(21,3,7,6,'E'),
(22,3,8,6,'E'),
(23,3,12,6,'C'),
(24,3,14,6,'E'),
(25,3,16,6,'E'),
(26,3,17,6,'E'),
(27,4,1,8,'C'),
(28,4,16,5,'E'),
(29,4,2,6,'C'),
(30,4,7,6,'C'),
(31,4,12,6,'C'),
(32,4,17,6,'E'),
(33,5,2,6,'C'),
(34,5,1,6,'C'),
(35,5,13,6,'E'),
(36,5,6,6,'E'),
(37,5,8,6,'E'),
(38,6,2,6,'C'),
(39,6,1,6,'C'),
(40,6,13,6,'E'),
(41,6,6,6,'E'),
(42,6,8,6,'E'),
(43,7,1,6,'C'),
(44,7,3,9,'E'),
(45,7,11,9,'E'),
(46,7,6,9,'E'),
(47,7,2,9,'E'),
(48,7,4,9,'E'),
(49,7,5,9,'E'),
(50,7,9,9,'E'),
(51,7,7,9,'E'),
(52,8,2,6,'C'),
(53,8,1,6,'C'),
(54,8,3,6,'E'),
(55,8,11,6,'E'),
(56,8,4,6,'E'),
(57,8,5,7,'C'),
(58,8,7,6,'E'),
(59,8,6,6,'E'),
(60,8,9,4,'E'),
(61,9,2,6,'C'),
(62,9,1,6,'C'),
(63,9,3,6,'E'),
(64,9,11,6,'E'),
(65,9,4,6,'E'),
(66,9,5,6,'C'),
(67,9,7,6,'E'),
(68,9,6,6,'E'),
(69,9,8,6,'E'),
(70,10,2,6,'C'),
(71,10,1,6,'C'),
(72,10,3,6,'E'),
(73,10,11,6,'E'),
(74,10,4,6,'E'),
(75,10,5,6,'C'),
(76,10,7,6,'E'),
(77,10,6,6,'E'),
(78,10,8,6,'E'),
(79,11,12,6,'C'),
(80,11,6,6,'E'),
(81,11,2,6,'C'),
(82,11,13,6,'E'),
(83,11,1,8,'C'),
(84,11,8,6,'E'),
(85,11,16,6,'E'),
(86,11,3,6,'E'),
(87,11,7,6,'E'),
(88,12,12,6,'C'),
(89,12,6,6,'E'),
(90,12,2,6,'C'),
(91,12,13,6,'E'),
(92,12,1,6,'E'),
(93,12,8,6,'E'),
(94,12,16,6,'E'),
(95,12,3,6,'E'),
(96,12,7,6,'E'),
(97,13,2,6,'C'),
(98,13,1,6,'C'),
(99,13,5,6,'E'),
(100,13,7,6,'E'),
(101,13,11,6,'E'),
(102,13,4,6,'E'),
(103,13,3,6,'E'),
(104,13,6,6,'E'),
(105,13,9,6,'E'),
(106,14,2,6,'C'),
(107,14,1,6,'C'),
(108,14,5,6,'E'),
(109,14,7,6,'E'),
(110,14,11,6,'E'),
(111,14,4,6,'C'),
(112,14,3,6,'C'),
(113,14,6,6,'E'),
(114,14,9,6,'E'),
(115,15,2,6,'C'),
(116,15,1,6,'C'),
(117,15,5,6,'C'),
(118,15,7,6,'E'),
(119,15,11,6,'E'),
(120,15,4,6,'C'),
(121,15,3,6,'C'),
(122,15,6,6,'E'),
(123,15,8,6,'E'),
(124,16,2,6,'C'),
(125,16,1,6,'C'),
(126,16,5,6,'C'),
(127,16,7,6,'E'),
(128,16,11,6,'E'),
(129,16,4,6,'E'),
(130,16,3,6,'E'),
(131,16,6,6,'E'),
(132,16,9,6,'E'),
(133,17,2,6,'C'),
(134,17,12,6,'C'),
(135,17,17,6,'E'),
(136,17,16,6,'E'),
(137,17,8,6,'E'),
(138,17,14,6,'E'),
(139,17,3,6,'E'),
(140,17,6,6,'E'),
(141,17,13,6,'E'),
(142,18,2,6,'C'),
(143,18,12,6,'C'),
(144,18,1,8,'C'),
(145,18,16,6,'E'),
(146,18,8,6,'E'),
(147,18,14,6,'E'),
(148,18,3,6,'E'),
(149,18,6,6,'E'),
(150,18,13,6,'E'),
(151,19,2,6,'C'),
(152,19,12,6,'E'),
(153,19,1,8,'C'),
(154,19,16,6,'E'),
(155,19,8,6,'C'),
(156,19,14,6,'E'),
(157,19,3,6,'E'),
(158,19,6,6,'E'),
(159,19,13,6,'E'),
(160,20,2,6,'C'),
(161,20,12,6,'E'),
(162,20,1,8,'C'),
(163,20,16,6,'E'),
(164,20,8,6,'E'),
(165,20,14,6,'E'),
(166,20,3,6,'E'),
(167,20,6,6,'E'),
(168,20,13,6,'E'),
(169,21,2,6,'C'),
(170,21,12,6,'E'),
(171,21,1,8,'C'),
(172,21,16,6,'E'),
(173,21,8,6,'E'),
(174,21,14,6,'E'),
(175,21,3,6,'E'),
(176,21,6,6,'E'),
(177,21,13,6,'E'),
(178,22,2,6,'C'),
(179,22,12,6,'E'),
(180,22,1,8,'C'),
(181,22,16,6,'E'),
(182,22,8,6,'E'),
(183,22,14,6,'E'),
(184,22,3,6,'E'),
(185,22,6,6,'E'),
(186,22,13,6,'E'),
(187,23,2,6,'C'),
(188,23,12,6,'E'),
(189,23,1,8,'C'),
(190,23,17,6,'C'),
(191,23,8,6,'E'),
(192,23,14,6,'E'),
(193,23,3,6,'E'),
(194,23,6,6,'E'),
(195,23,13,6,'E'),
(196,24,1,6,'C'),
(197,24,5,6,'C'),
(198,24,2,6,'C'),
(199,24,22,6,'E'),
(200,24,18,6,'E'),
(201,24,20,6,'E'),
(202,24,23,6,'E'),
(203,25,1,6,'C'),
(204,25,5,6,'C'),
(205,25,2,6,'C'),
(206,25,22,6,'E'),
(207,25,18,6,'E'),
(208,25,20,6,'E'),
(209,25,23,6,'E');

/*Table structure for table `grade` */

DROP TABLE IF EXISTS `grade`;

CREATE TABLE `grade` (
  `gradeid` int(1) NOT NULL auto_increment,
  `gradedesc` varchar(3) default NULL,
  PRIMARY KEY  (`gradeid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `grade` */

insert into `grade` values 
(1,'A1'),
(2,'B2'),
(3,'B3'),
(4,'C4'),
(5,'C5'),
(6,'C6'),
(7,'D7'),
(8,'E8'),
(9,'F9');

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` bigint(10) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `pwd` varchar(100) default NULL,
  `chatting_now` char(1) default 'N' COMMENT 'Y or N',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert into `profile` values 
(1,'agbe','123456','N'),
(2,'janer','love','N'),
(3,'jane1','123456','N'),
(4,'ada','jesus','N');

/*Table structure for table `programme` */

DROP TABLE IF EXISTS `programme`;

CREATE TABLE `programme` (
  `progid` int(5) NOT NULL auto_increment,
  `progdesc` varchar(100) default NULL,
  `maxsitting` int(5) default NULL,
  `minsubjects` int(5) default NULL,
  PRIMARY KEY  (`progid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `programme` */

insert into `programme` values 
(1,'B.Sc. Computer Science ',2,5),
(2,'Law',2,5),
(3,'B.Sc. Agric Ext & Mgt ',2,5),
(4,'B.Sc. Communication Technology ',2,5),
(5,'B.Sc. Env. Sciences and Res. Management',2,5),
(6,'B.Sc. Community Health ',2,5),
(7,'B.Sc. Chemistry',2,5),
(8,'B.Sc. Biology',2,5),
(9,'B.Sc. Mathematics',2,5),
(10,'B.Sc. Mathematics/Computer Science',2,5),
(11,'B.sc. PHYSICS Programme',2,5),
(12,'B.A. English ',2,5),
(13,'BSc. Mass Communication ',2,5),
(14,'BSc. Political Science ',2,5),
(15,'BSc. Criminology and Security Studies',2,5),
(16,'BSc. Peace Studies and Conflict ',2,5),
(17,'BA. Christian Theology ',2,5),
(18,'BA. Islamic Studies ',2,5),
(19,'Accounting',2,5),
(20,'Banking and Finance ',2,5),
(21,'Business Administration',2,5),
(22,'Cooperatives Management ',2,5),
(23,'Entrepreneurship Development               ',2,5),
(24,'Hospitality Management                                                        ',2,5),
(25,'Marketing',2,5),
(26,'Public Administration',2,5);

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `subjid` int(4) NOT NULL auto_increment,
  `subjdesc` varchar(100) default NULL,
  PRIMARY KEY  (`subjid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert into `subject` values 
(1,'Mathematics'),
(2,'English'),
(3,'Biology'),
(4,'Chemistry'),
(5,'Physics'),
(6,'Economics'),
(7,'Geography'),
(8,'Government'),
(9,'Furthermaths'),
(10,'Food and Nutrition'),
(11,'Agric Science'),
(12,'Literature in English'),
(13,'Commerce'),
(14,'History'),
(15,'Accounting'),
(16,'C.R.K'),
(17,'I.R.K'),
(18,'Building Eng. Drawing '),
(19,'Basic Electricity '),
(20,'Information & Communication Technology '),
(21,'Electrical Science '),
(22,'Arithmetic'),
(23,'Social Science');
