/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : nexapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-06 16:58:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '2a42613437652b16f9f978848f2dbc31');

-- ----------------------------
-- Table structure for bab
-- ----------------------------
DROP TABLE IF EXISTS `bab`;
CREATE TABLE `bab` (
  `id_bab` int(11) NOT NULL AUTO_INCREMENT,
  `nm_bab` varchar(255) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bab`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bab
-- ----------------------------
INSERT INTO `bab` VALUES ('1', 'Sinonim', '6');
INSERT INTO `bab` VALUES ('2', 'Aljabar', '8');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext,
  `workshop` text NOT NULL,
  `description` longtext,
  `icon` longtext,
  `logo` longtext,
  `image` varchar(255) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'NexApp', 'info@cakcode.co.id', '+6231 5664645', '+6231 5630872', 'Universitas 17 Agustus 1945 Surabaya', '', '<p>Web Development and Design</p>\r\n', 'cak.png', 'cak.png', 'Asset_1.png', 'Web Development and Design', 'Web Development and Design');

-- ----------------------------
-- Table structure for jenjang
-- ----------------------------
DROP TABLE IF EXISTS `jenjang`;
CREATE TABLE `jenjang` (
  `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,
  `nm_jenjang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenjang
-- ----------------------------
INSERT INTO `jenjang` VALUES ('1', 'SD');
INSERT INTO `jenjang` VALUES ('2', 'SMP');
INSERT INTO `jenjang` VALUES ('3', 'SMA');

-- ----------------------------
-- Table structure for mapel
-- ----------------------------
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nm_mapel` varchar(255) DEFAULT NULL,
  `id_jenjang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES ('6', 'Bahasa Indonesia', ' 2');
INSERT INTO `mapel` VALUES ('8', 'Matematika', '3');
