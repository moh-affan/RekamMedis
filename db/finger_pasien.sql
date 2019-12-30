/*
 Navicat Premium Data Transfer

 Source Server         : lokal maria
 Source Server Type    : MariaDB
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : rekammedis

 Target Server Type    : MariaDB
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 29/12/2019 21:04:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for finger_pasien
-- ----------------------------
DROP TABLE IF EXISTS `finger_pasien`;
CREATE TABLE `finger_pasien`  (
  `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `PASIEN_ID` int(11) NOT NULL,
  `FP` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  INDEX `fk_pasien`(`PASIEN_ID`) USING BTREE,
  CONSTRAINT `fk_pasien` FOREIGN KEY (`PASIEN_ID`) REFERENCES `tb_pasien` (`ID_PASIEN`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
