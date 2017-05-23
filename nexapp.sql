/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : nexapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-23 21:41:26
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bab
-- ----------------------------
INSERT INTO `bab` VALUES ('1', 'Sinonim', '6');
INSERT INTO `bab` VALUES ('2', 'Aljabar', '8');
INSERT INTO `bab` VALUES ('8', 'Statistika', '8');
INSERT INTO `bab` VALUES ('9', 'bahasa Inggris', '11');

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
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` longtext,
  `meta_deskripsi` text NOT NULL,
  `basic` int(11) DEFAULT NULL,
  `meta_keyword` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'NexApp', 'hello.nex2017@gmail.com', '087', 'Universitas 17 Agustus 1945 Surabaya', '<p><span class=\"wysiwyg-color-red\">Kami ingin pendidikan</span> terbaik dapat di akses siapa saja. Dapatkan akses penuh NexApp ke ratusan jam video pembelajaran dan ribuan soal-soal latihan dengan harga terjangkau!</p>', 'icon_120_x_120-01.png', 'nexapp_id', 'NexApp', 'Untitled-1_(1).png', '																																																																																																																																																																																																																																																																																																												Web Development and Design sdsd\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											', '5', '																																																																																																																																																																																																																																																																																																												Web Development and Design dssd\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES ('6', 'Bahasa Indonesia', '2', '121', '51');
INSERT INTO `mapel` VALUES ('8', 'Matematika', '3', '120', '40');
INSERT INTO `mapel` VALUES ('9', 'Bahasa Indonesia', '3', '120', '50');
INSERT INTO `mapel` VALUES ('10', 'Matematika', '2', '120', '40');
INSERT INTO `mapel` VALUES ('11', 'Bahasa Inggris', '2', '120', '50');
INSERT INTO `mapel` VALUES ('12', 'Bahasa Inggris', '3', '120', '50');
INSERT INTO `mapel` VALUES ('13', 'IPA', '2', '120', '50');
INSERT INTO `mapel` VALUES ('14', 'IPA', '3', '120', '50');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of materi
-- ----------------------------
INSERT INTO `materi` VALUES ('5', 'addasd', 'asdasd', '8');
INSERT INTO `materi` VALUES ('6', 'Short Messages ', '', '9');

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
INSERT INTO `member` VALUES ('2068', 'asdasd', 'cakcode@gmail.com', '234234', 'Pria', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'asdas', '2017-05-23 11:20:16', '::1', 'premium', '1', '0');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of soal
-- ----------------------------
INSERT INTO `soal` VALUES ('1', 'hallod', 'test a', 'test b', 'test c', 'test d', 'C', 'asdd', '2');
INSERT INTO `soal` VALUES ('2', 'ini soal statistika', 'ini a', 'ini b', 'ini c', 'ini', 'B', 'asd', '8');
INSERT INTO `soal` VALUES ('3', 'ini soal statistik 2', 'asd', 'gfh', 'asd', 'xcv', 'B', 'xcvxcvxc', '8');
INSERT INTO `soal` VALUES ('4', 'aljabar', 'cv', 'xcv', 'vbn', 'cvbcv', 'D', 'dzsfrsdf', '2');
INSERT INTO `soal` VALUES ('5', '<img src=\"https://fshzaaiqbalmandaku.files.wordpress.com/2014/10/wedhuss.jpg?w=1400\" title=\"Image: https://fshzaaiqbalmandaku.files.wordpress.com/2014/10/wedhuss.jpg?w=1400\">indo', 'asda', 'asds', 'asdd', 'asds', 'A', 'asd', '1');
INSERT INTO `soal` VALUES ('6', '<table><tbody><tr><td><p>Linda, I need your help to handle the meeting of Book Fair Committee because I can’t come today. Please meet our principal and tell him that the meeting is scheduled at&nbsp;9 a.m. After that, ask Reni, the master of ceremony, to start on time. One more thing, don’t forget to confirm about the snack and drink for the coffee break to Mrs. Wijaya. Thank you.</p><p>&nbsp;</p><p>Wenda</p><p><b>What\r\nis Wenda’s purpote to send this message ?</b></p></td></tr></tbody></table>', 'To tell about the Book Fair ', 'To promote the Book Fair', 'To remind Linda about the meeting', 'To ask Linda to handle the meeting', 'D', '<p><b><i>Pembahasan :</i></b></p>\r\n\r\n<p><span>Lihat kalimat pertama,\r\nWenda meminta bantuan Linda untuk mengurus rapat dalam rangka pameran buku (<i>Book Fair</i>).</span></p>\r\n\r\n<p><i>Jawab\r\n: d</i></p>', '9');
INSERT INTO `soal` VALUES ('7', '<p>Linda, I need your help to\r\nhandle the meeting of Book Fair Committee because I can’t come today. Please\r\nmeet our principal and tell him that the meeting is scheduled at 9 a.m. After\r\nthat, ask Reni, the master of ceremony, to start on time. One more thing, don’t\r\nforget to confirm about the snack and drink for the coffee break to Mrs.\r\nWijaya. Thank you. </p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<span>Wenda&nbsp;<br></span><br><b>Who\r\nis the addressee of the message?</b><br>', 'Mrs. Wijaya ', 'Reni', 'Linda', 'Wenda', 'C', '<p><b><i>Pembahasan :</i></b></p>\r\n\r\n<p>Memo tersebut ditujukan\r\nuntuk Linda, seperti yang telah disebutkan pada awal kalimat. </p>\r\n\r\n<p><i>Jawaban\r\n: c</i></p>', '9');
INSERT INTO `soal` VALUES ('8', '<p>Arfi, I’m sorry I can’t\r\ncome to your house to night to do the wall magazine project as we have planned.\r\nMy grandmother has just come and she wants we to accompany her to my aunt’s\r\nhose. I will meet you at school tomorrow.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<span>Evan&nbsp;<br></span><br><p><span><b>What\r\nis Evan and Arfi’s plan ?</b></span></p>', 'To say sorry ', 'To do the wall magazine project together ', 'To meet Arfi’s aunt ', 'To accompany his grandmother', 'B', '<p>Seperti yang diketahui\r\ndalam pesan tersebut bahwa rencana Evan dan Arfi’s adalah mengerjakan tugas\r\nmajalah dinding bersama. </p>\r\n\r\n<i><span>Jawaban : b</span></i><br>', '9');
INSERT INTO `soal` VALUES ('9', '<p>Arfi, I’m sorry I can’t\r\ncome to your house to night to do the wall magazine project as we have planned.\r\nMy grandmother has just come and she wants we to accompany her to my aunt’s\r\nhose. I will meet you at school tomorrow.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<span>Evan&nbsp;<br></span><p><span><b>What\r\nis Evan’s purpose to write the message ?</b></span></p>', 'a.	To meet Arfi at school tomorrow ', 'b.	To tell Arfi that he cannot come to his house ', 'c.	To tell Arfi that he can do the project by himself ', 'd.	To persuade Arfi to come with him to aunt’s house ', 'B', '<p>Tujuan Evan menulis pesan\r\npendek tersebut adalah untuk memberi tahu Arfi bahwa ia tidak bisa datang ke rumahnya\r\nuntuk mengerjakan tugas bersama.</p>\r\n\r\n<p><i><span>Jawaban\r\n: b</span></i></p>', '9');
