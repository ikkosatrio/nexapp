/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : nexapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-21 21:34:41
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bab
-- ----------------------------
INSERT INTO `bab` VALUES ('1', 'Sinonim', '6');
INSERT INTO `bab` VALUES ('2', 'Aljabar', '8');
INSERT INTO `bab` VALUES ('8', 'Statistika', '8');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext,
  `description` longtext,
  `icon` longtext,
  `logo` longtext,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'NexApp', 'info@cakcode.co.id', '+6231 5630872', 'Universitas 17 Agustus 1945 Surabaya', '<p><b><i>Web Development and Design</i></b></p>', 'Untitled-11.png', 'Untitled-1_(1).png', '																																																																																																																																																																																																																								Web Development and Design sdsd\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											', '																																																																																																																																																																																																																								Web Development and Design dssd\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											');

-- ----------------------------
-- Table structure for jenjang
-- ----------------------------
DROP TABLE IF EXISTS `jenjang`;
CREATE TABLE `jenjang` (
  `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,
  `nm_jenjang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `waktu` int(11) DEFAULT NULL,
  `jumlah_soal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES ('6', 'Bahasa Indonesia', ' 2', '120', '50');
INSERT INTO `mapel` VALUES ('8', 'Matematika', '3', '120', '40');

-- ----------------------------
-- Table structure for materi
-- ----------------------------
DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_materi` varchar(255) DEFAULT NULL,
  `isi_materi` text,
  `id_bab` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of materi
-- ----------------------------
INSERT INTO `materi` VALUES ('5', 'addasd', 'asdasd', '8');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `password` text NOT NULL,
  `address` text NOT NULL,
  `lastlog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ipaddress` varchar(100) NOT NULL,
  `status_member` enum('basic','premium') NOT NULL DEFAULT 'basic',
  `status` int(11) NOT NULL,
  `readed` int(11) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=2076 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('2039', 'ikko', 'ikko@yuhu.com', '08', 'Pria', '123', '123', '2017-05-21 20:25:45', '', 'basic', '0', '0');
INSERT INTO `member` VALUES ('2068', 'asdasd', 'cakcode@gmail.com', '234234', 'Pria', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'asdas', '2017-05-21 16:05:39', '::1', 'premium', '1', '0');
INSERT INTO `member` VALUES ('2074', 'asdasdasd', 'ikkosatrio0@gmail.com', '0657567', 'Pria', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'asdas', '2017-05-21 15:58:30', '::1', 'basic', '0', '0');
INSERT INTO `member` VALUES ('2075', 'elka', 'elkaajib@gmail.com', '123123', 'Pria', 'e2d2fdf4f948f1f647b4cde92361996e0f9dad55', 'asek joss', '2017-05-21 16:00:05', '::1', 'basic', '0', '0');

-- ----------------------------
-- Table structure for soal
-- ----------------------------
DROP TABLE IF EXISTS `soal`;
CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `isi_soal` text,
  `pilihA` text,
  `pilihB` text,
  `pilihC` text,
  `pilihD` text,
  `jawaban` enum('A','B','C','D') DEFAULT NULL,
  `pembahasan` text,
  `id_bab` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of soal
-- ----------------------------
INSERT INTO `soal` VALUES ('1', 'hallod', 'test a', 'test b', 'test c', 'test d', 'C', 'asdd', '2');
INSERT INTO `soal` VALUES ('2', 'ini soal statistika', 'ini a', 'ini b', 'ini c', 'ini', 'B', 'asd', '8');
INSERT INTO `soal` VALUES ('3', 'ini soal statistik 2', 'asd', 'gfh', 'asd', 'xcv', 'B', 'xcvxcvxc', '8');
INSERT INTO `soal` VALUES ('4', 'aljabar', 'cv', 'xcv', 'vbn', 'cvbcv', 'D', 'dzsfrsdf', '2');
INSERT INTO `soal` VALUES ('5', '<img src=\"https://fshzaaiqbalmandaku.files.wordpress.com/2014/10/wedhuss.jpg?w=1400\" title=\"Image: https://fshzaaiqbalmandaku.files.wordpress.com/2014/10/wedhuss.jpg?w=1400\">indo', 'asda', 'asds', 'asdd', 'asds', 'A', 'asd', '1');
