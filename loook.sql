/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.7.21 : Database - loook
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`loook` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `loook`;

/*Table structure for table `announcement` */

DROP TABLE IF EXISTS `announcement`;

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '站点公告表',
  `title` varchar(255) NOT NULL COMMENT '公告标题',
  `content` longtext NOT NULL COMMENT '公告内容',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcement` */

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章表',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `label_id` int(11) NOT NULL COMMENT '外键，关联标签表',
  `category_id` int(11) NOT NULL COMMENT '外键，关联分类表',
  `is_top` tinyint(4) NOT NULL COMMENT '是否置顶',
  `author_id` int(11) NOT NULL COMMENT '作者id',
  `author_name` varchar(255) NOT NULL COMMENT '作者\r\n名字',
  `read_num` int(11) NOT NULL COMMENT '阅读统计',
  `img_id` int(11) NOT NULL COMMENT '外键，关联图片',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `article` */

/*Table structure for table `article_comment` */

DROP TABLE IF EXISTS `article_comment`;

CREATE TABLE `article_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章评论表',
  `comment` longtext NOT NULL COMMENT '评论内容',
  `article_id` int(11) NOT NULL COMMENT '外键，关联文章表',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `article_comment` */

/*Table structure for table `article_contnet` */

DROP TABLE IF EXISTS `article_contnet`;

CREATE TABLE `article_contnet` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章详细内容表',
  `article` longtext NOT NULL COMMENT '文章内容',
  `article_id` int(11) NOT NULL COMMENT '外键，关联文章表',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `article_contnet` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类表',
  `name` varchar(255) NOT NULL COMMENT '分类名称',
  `is_navigation` tinyint(4) NOT NULL COMMENT '是否是导航',
  `careate_time` int(11) NOT NULL COMMENT '创建时间',
  `delete_time` int(11) NOT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `category` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片表',
  `base64_img` longtext NOT NULL COMMENT '图片base64格式存储',
  `careate_time` int(11) NOT NULL COMMENT '创建时间',
  `delete_time` int(11) NOT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `images` */

/*Table structure for table `index_banner` */

DROP TABLE IF EXISTS `index_banner`;

CREATE TABLE `index_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '轮播图表',
  `category_id` int(11) NOT NULL COMMENT '外键，关联分类表',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `careate_time` int(11) NOT NULL COMMENT '创建时间',
  `delete_time` int(11) NOT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `index_banner` */

/*Table structure for table `index_banner_item` */

DROP TABLE IF EXISTS `index_banner_item`;

CREATE TABLE `index_banner_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '首页轮播图关联图片表',
  `banner_id` int(11) NOT NULL COMMENT '外键，关联banner表',
  `img_id` int(11) NOT NULL COMMENT '外键，关联image表',
  `careate_time` int(11) NOT NULL COMMENT '创建时间',
  `delete_time` int(11) NOT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `index_banner_item` */

/*Table structure for table `lable` */

DROP TABLE IF EXISTS `lable`;

CREATE TABLE `lable` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章标签表',
  `namne` varchar(255) NOT NULL COMMENT '标签名',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `lable` */

/*Table structure for table `leave_word` */

DROP TABLE IF EXISTS `leave_word`;

CREATE TABLE `leave_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言表',
  `leave_name` varchar(255) NOT NULL COMMENT '留言人',
  `content` longtext NOT NULL COMMENT '留言内容',
  `careate_time` int(11) NOT NULL COMMENT '创建时间',
  `delete_time` int(11) NOT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `status` tinyint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `leave_word` */

/*Table structure for table `links` */

DROP TABLE IF EXISTS `links`;

CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '友情链接表',
  `linkname` varchar(255) NOT NULL COMMENT '链接名称',
  `link_url` varchar(255) NOT NULL COMMENT '链接地址',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `links` */

/*Table structure for table `min_image` */

DROP TABLE IF EXISTS `min_image`;

CREATE TABLE `min_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '小窗风景如画表',
  `base64_img` longtext NOT NULL COMMENT 'base64图片',
  `careate_time` int(11) NOT NULL,
  `delete_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `min_image` */

/*Table structure for table `myblog` */

DROP TABLE IF EXISTS `myblog`;

CREATE TABLE `myblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站表',
  `blog_name` varchar(255) NOT NULL COMMENT '博客名称',
  `record` varchar(255) NOT NULL COMMENT '备案号',
  `weixin` longtext NOT NULL COMMENT '微信公众号',
  `wechat` longtext NOT NULL COMMENT '微信小程序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `myblog` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
