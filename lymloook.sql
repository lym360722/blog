/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.7.21 : Database - lymloook
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lymloook` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lymloook`;

/*Table structure for table `bg_about_me` */

DROP TABLE IF EXISTS `bg_about_me`;

CREATE TABLE `bg_about_me` (
  `me_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `image` longtext NOT NULL COMMENT '关于我轮播图',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`me_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_about_me` */

/*Table structure for table `bg_arti_image` */

DROP TABLE IF EXISTS `bg_arti_image`;

CREATE TABLE `bg_arti_image` (
  `arti_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `image` longtext NOT NULL COMMENT '我的文章大图',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`arti_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_arti_image` */

/*Table structure for table `bg_article` */

DROP TABLE IF EXISTS `bg_article`;

CREATE TABLE `bg_article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `content` longtext NOT NULL COMMENT '文章内容',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_article` */

/*Table structure for table `bg_classify` */

DROP TABLE IF EXISTS `bg_classify`;

CREATE TABLE `bg_classify` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_classify` */

/*Table structure for table `bg_comment` */

DROP TABLE IF EXISTS `bg_comment`;

CREATE TABLE `bg_comment` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL COMMENT '文章ID',
  `u_id` int(11) NOT NULL COMMENT '评论人ID',
  `content` varchar(500) NOT NULL COMMENT '评论内容',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_comment` */

/*Table structure for table `bg_home_image` */

DROP TABLE IF EXISTS `bg_home_image`;

CREATE TABLE `bg_home_image` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `image` longtext NOT NULL COMMENT '首页轮播图',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_home_image` */

/*Table structure for table `bg_leave_message` */

DROP TABLE IF EXISTS `bg_leave_message`;

CREATE TABLE `bg_leave_message` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `content` varchar(500) NOT NULL COMMENT '留言内容',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_leave_message` */

/*Table structure for table `bg_recreation` */

DROP TABLE IF EXISTS `bg_recreation`;

CREATE TABLE `bg_recreation` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `image` longtext NOT NULL COMMENT '图片（base64格式）',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_recreation` */

/*Table structure for table `bg_talk` */

DROP TABLE IF EXISTS `bg_talk`;

CREATE TABLE `bg_talk` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `content` longtext NOT NULL COMMENT '说说内容',
  `image` longtext NOT NULL COMMENT '说说配图',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_talk` */

/*Table structure for table `bg_user` */

DROP TABLE IF EXISTS `bg_user`;

CREATE TABLE `bg_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `user_name` varchar(100) NOT NULL DEFAULT '' COMMENT '姓名',
  `pwd` varchar(200) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` varchar(200) NOT NULL DEFAULT '' COMMENT '昵称',
  `account` varchar(200) NOT NULL DEFAULT '' COMMENT '账号',
  `phone` int(11) NOT NULL DEFAULT '0' COMMENT '电话号码',
  `sex` tinyint(4) NOT NULL DEFAULT '2' COMMENT '性别',
  `age` int(11) NOT NULL DEFAULT '0' COMMENT '年龄',
  `place` varchar(400) NOT NULL DEFAULT '' COMMENT '籍贯',
  `signature` varchar(500) NOT NULL DEFAULT '' COMMENT '个性签名',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bg_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
