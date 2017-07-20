/*
SQLyog Enterprise - MySQL GUI v6.16
MySQL - 5.0.45-community-nt : Database - book
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `book`;

USE `book`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `bookId` int(10) NOT NULL auto_increment,
  `bookName` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `bookClass` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `bookAuthor` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `addTime` datetime NOT NULL,
  `bookPic` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL default 'default.jpg',
  PRIMARY KEY  (`bookId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `books` */

insert  into `books`(`bookId`,`bookName`,`bookClass`,`bookAuthor`,`addTime`,`bookPic`) values (2,'angular','框架','马超','2017-07-20 11:52:18','53f595f7N7977f3c4149932825587021500522738.jpg'),(3,'angular高级设计','框架','关羽','2017-07-20 11:53:09','55c451d0N67f83d76149932828394501500522789.jpg'),(4,'css高级设计','css','张辽','2017-07-20 11:53:47','540ecdd0Ne197e923149932892824241500522827.jpg'),(5,'JavaScript高级设计','js','刘备','2017-07-20 11:54:28','552e74bfN1350cd93149932831045071500522868.jpg'),(6,'react native','框架','张飞','2017-07-20 11:54:53','571ed7d0Nd2f1f686149932833775131500522893.jpg'),(7,'photoshop','ps','吕蒙','2017-07-20 11:55:33','5809cb4fNa1911fd9149932836424751500522933.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(10) NOT NULL auto_increment,
  `userName` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `qx` varchar(100) NOT NULL default 'vip',
  PRIMARY KEY  (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`userId`,`userName`,`pwd`,`qx`) values (2,'susan','202cb962ac59075b964b07152d234b70','vip'),(3,'tom','202cb962ac59075b964b07152d234b70','vip');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
