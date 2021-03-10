/*
 Navicat Premium Data Transfer

 Source Server         : LOKAL
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : tes_sekawan

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 10/03/2021 11:30:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL,
  `employee_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `employee_salary` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `employee_age` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Tiger Nixon', '320800', '61', '');
INSERT INTO `user` VALUES (2, 'Garrett Winters', '170750', '63', '');
INSERT INTO `user` VALUES (3, 'Ashton Cox', '86000', '66', '');
INSERT INTO `user` VALUES (4, 'Cedric Kelly', '433060', '22', '');
INSERT INTO `user` VALUES (5, 'Airi Satou', '162700', '33', '');
INSERT INTO `user` VALUES (6, 'Brielle Williamson', '372000', '61', '');
INSERT INTO `user` VALUES (7, 'Herrod Chandler', '137500', '59', '');
INSERT INTO `user` VALUES (8, 'Rhona Davidson', '327900', '55', '');
INSERT INTO `user` VALUES (9, 'Colleen Hurst', '205500', '39', '');
INSERT INTO `user` VALUES (10, 'Sonya Frost', '103600', '23', '');
INSERT INTO `user` VALUES (11, 'Jena Gaines', '90560', '30', '');
INSERT INTO `user` VALUES (12, 'Quinn Flynn', '342000', '22', '');
INSERT INTO `user` VALUES (13, 'Charde Marshall', '470600', '36', '');
INSERT INTO `user` VALUES (14, 'Haley Kennedy', '313500', '43', '');
INSERT INTO `user` VALUES (15, 'Tatyana Fitzpatrick', '385750', '19', '');
INSERT INTO `user` VALUES (16, 'Michael Silva', '198500', '66', '');
INSERT INTO `user` VALUES (17, 'Paul Byrd', '725000', '64', '');
INSERT INTO `user` VALUES (18, 'Gloria Little', '237500', '59', '');
INSERT INTO `user` VALUES (19, 'Bradley Greer', '132000', '41', '');
INSERT INTO `user` VALUES (20, 'Dai Rios', '217500', '35', '');
INSERT INTO `user` VALUES (21, 'Jenette Caldwell', '345000', '30', '');
INSERT INTO `user` VALUES (22, 'Yuri Berry', '675000', '40', '');
INSERT INTO `user` VALUES (23, 'Caesar Vance', '106450', '21', '');
INSERT INTO `user` VALUES (24, 'Doris Wilder', '85600', '23', '');

SET FOREIGN_KEY_CHECKS = 1;
