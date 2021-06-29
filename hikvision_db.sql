/*
Navicat MySQL Data Transfer

Source Server         : Ihor aroba taxi
Source Server Version : 50505
Source Host           : 194.67.196.98:3306
Source Database       : hikvision

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-06-29 22:58:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `task`
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task
-- ----------------------------
INSERT INTO `task` VALUES ('1', 'Ish vaqti', '2021-04-10 09:53:57');
INSERT INTO `task` VALUES ('2', 'Motivation vaqt', '2021-04-10 09:54:17');
INSERT INTO `task` VALUES ('3', 'Kunlik ro\'yxat bilan tanishuv', '2021-04-10 09:54:47');
INSERT INTO `task` VALUES ('4', 'Focus Timerda ishlash', '2021-04-10 09:55:47');
INSERT INTO `task` VALUES ('5', 'Kitob 20-50 varoq', '2021-04-10 09:56:11');
INSERT INTO `task` VALUES ('6', 'Nasiyalarni undirish', '2021-04-10 09:56:31');
INSERT INTO `task` VALUES ('7', 'Doimiy mijozlar bilan ishlash 2 ta', '2021-04-10 09:56:56');
INSERT INTO `task` VALUES ('8', 'Ketib qolgan mijozlar bilan ishlash', '2021-04-10 09:57:14');
INSERT INTO `task` VALUES ('9', '5 ta yomon odat ', '2021-04-10 09:57:40');
INSERT INTO `task` VALUES ('10', '5 ta yaxshi odat', '2021-04-10 09:57:49');
INSERT INTO `task` VALUES ('11', 'Kundalik daftar to\'ldirish', '2021-04-10 09:58:04');
INSERT INTO `task` VALUES ('12', 'Yangi yuklardan habarlar', '2021-04-10 09:58:29');
INSERT INTO `task` VALUES ('13', 'Muammolarni yozish 2 ta', '2021-04-10 09:58:51');
INSERT INTO `task` VALUES ('14', 'Muammolarni yechish 2 ta', '2021-04-10 09:59:06');
INSERT INTO `task` VALUES ('15', 'Management bo\'yicha video 30 min', '2021-04-10 09:59:45');
INSERT INTO `task` VALUES ('16', 'Xisobotlarni qabu qilish', '2021-04-10 10:00:08');
INSERT INTO `task` VALUES ('17', 'Xisobotlarni registorga tikish', '2021-04-10 10:01:10');
INSERT INTO `task` VALUES ('18', 'Franshiza loyihasi', '2021-04-10 10:01:25');
INSERT INTO `task` VALUES ('19', 'B2C: Yangi takliflar', '2021-04-10 10:01:56');
INSERT INTO `task` VALUES ('20', 'B2C:Loyixa', '2021-04-10 10:02:23');
INSERT INTO `task` VALUES ('21', 'B2C:Yangi takliflar', '2021-04-10 10:02:49');
INSERT INTO `task` VALUES ('22', 'Raqobotchilarni o\'rganish', '2021-04-10 10:03:31');
INSERT INTO `task` VALUES ('23', 'Moliyani doskaga ko\'chirish', '2021-04-10 10:03:51');
INSERT INTO `task` VALUES ('24', 'Nasiyalarni muammolarini yechish', '2021-04-10 10:04:29');
INSERT INTO `task` VALUES ('25', 'Pullar nazorati', '2021-04-10 10:04:41');
INSERT INTO `task` VALUES ('26', 'Jami nasiyalar. Telegramdan excelga olish', '2021-04-10 10:04:44');
INSERT INTO `task` VALUES ('27', 'Telegramga 4 ta post', '2021-04-10 10:07:23');
INSERT INTO `task` VALUES ('28', 'Yangi mijozlar topish 2 ta', '2021-04-10 10:07:38');
INSERT INTO `task` VALUES ('29', 'Mijozlar tabeli 2 ta', '2021-04-10 10:09:27');
INSERT INTO `task` VALUES ('30', 'Bonus jadvalni yozib yurish', '2021-04-10 10:13:01');
INSERT INTO `task` VALUES ('31', 'Ustalarni yaqindan o\'rganish 1 ta', '2021-04-10 10:13:51');
INSERT INTO `task` VALUES ('32', 'Yangi ma\'lumot o\'rganish 1 ta', '2021-04-10 10:14:10');
INSERT INTO `task` VALUES ('33', 'Yuklar nazorati', '2021-04-10 10:14:46');
INSERT INTO `task` VALUES ('34', 'Yo\'q nasiyalarni so\'raganda yozish', '2021-04-10 10:15:12');
INSERT INTO `task` VALUES ('35', 'Kerakli yuklarni ro\'yxati', '2021-04-10 10:16:01');
INSERT INTO `task` VALUES ('36', 'Focus timerda ishlash', '2021-04-10 10:16:25');
INSERT INTO `task` VALUES ('37', 'Olxga post, 2 kunda, 1 ta', '2021-04-10 10:17:01');
INSERT INTO `task` VALUES ('38', 'Dollar kursi', '2021-04-10 10:18:18');
INSERT INTO `task` VALUES ('39', 'Pulni boshqarish youtube 20-30 min', '2021-04-10 10:19:35');
INSERT INTO `task` VALUES ('40', 'Focuk Timerdan foydalanish', '2021-04-10 10:24:38');
INSERT INTO `task` VALUES ('41', 'Pullani tashkillar san\'atini o\'rganish', '2021-04-10 10:25:02');
INSERT INTO `task` VALUES ('42', 'Kunlik savdo naqt pulda', '2021-04-10 10:25:39');
INSERT INTO `task` VALUES ('43', 'Kunlik savdo vertual', '2021-04-10 10:25:57');
INSERT INTO `task` VALUES ('44', 'Kunlik foyda', '2021-04-10 10:26:38');
INSERT INTO `task` VALUES ('45', 'Jami nasiya', '2021-04-10 10:26:48');
INSERT INTO `task` VALUES ('46', 'Kunlik nasiya', '2021-04-10 10:27:00');
INSERT INTO `task` VALUES ('47', 'Kunlik to\'langan nasiya', '2021-04-10 10:27:18');
INSERT INTO `task` VALUES ('48', 'Doimiy rasxod', '2021-04-10 10:27:48');
INSERT INTO `task` VALUES ('49', 'Rasxod', '2021-04-10 10:27:56');
INSERT INTO `task` VALUES ('50', 'Yuklar uchun pul', '2021-04-10 10:28:06');
INSERT INTO `task` VALUES ('51', 'Ibrohimov T. Olingan pul', '2021-04-10 10:28:37');
INSERT INTO `task` VALUES ('52', 'Ibrohimov I. Olingan pul', '2021-04-10 10:28:56');
INSERT INTO `task` VALUES ('53', 'Ibrohimov M. Olingan pul', '2021-04-10 10:29:15');
INSERT INTO `task` VALUES ('54', 'Uyga kirgan pul', '2021-04-10 10:29:24');
INSERT INTO `task` VALUES ('55', 'Jami pul', '2021-04-10 10:29:32');
INSERT INTO `task` VALUES ('58', 'Siz hikvision hodimisiz sizga bugungi ish vazifalarningiz eslatib turiladi', '2021-04-17 10:59:46');

-- ----------------------------
-- Table structure for `task_done`
-- ----------------------------
DROP TABLE IF EXISTS `task_done`;
CREATE TABLE `task_done` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `task_id` int(10) unsigned NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0' COMMENT '1 - bajarilgan, 0 - bajarilmagan',
  `confirmation_time` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`task_id`),
  KEY `task_id` (`task_id`),
  CONSTRAINT `task_done_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `task_done_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of task_done
-- ----------------------------
INSERT INTO `task_done` VALUES ('1', '1', '10', '1', '2021-04-16 10:30:33', '2021-04-16 15:43:55');
INSERT INTO `task_done` VALUES ('2', '1', '30', '1', '2021-04-16 14:30:33', '2021-04-16 15:49:21');
INSERT INTO `task_done` VALUES ('3', '1', '37', '1', '2021-04-16 11:29:50', '2021-04-16 15:49:21');
INSERT INTO `task_done` VALUES ('4', '1', '48', '0', '', '2021-04-16 16:18:53');
INSERT INTO `task_done` VALUES ('5', '1', '1', '1', '2021-04-17 12:43:18', '2021-04-17 12:47:18');
INSERT INTO `task_done` VALUES ('11', '1', '1', '1', '2021-04-17 12:50:45', '2021-04-17 12:50:46');
INSERT INTO `task_done` VALUES ('12', '1', '1', '0', '2021-04-17 12:50:45', '2021-04-17 12:52:11');
INSERT INTO `task_done` VALUES ('13', '1', '6', '1', '2021-04-17 12:53:08', '2021-04-17 12:53:09');
INSERT INTO `task_done` VALUES ('14', '1', '6', '0', '2021-04-17 12:53:08', '2021-04-17 12:53:13');
INSERT INTO `task_done` VALUES ('15', '5', '58', '1', '2021-04-18 10:03:14', '2021-04-18 10:03:15');
INSERT INTO `task_done` VALUES ('16', '5', '58', '0', '2021-04-18 10:03:14', '2021-04-18 10:03:17');
INSERT INTO `task_done` VALUES ('17', '1', '58', '1', '2021-04-20 09:26:13', '2021-04-20 09:26:16');
INSERT INTO `task_done` VALUES ('18', '1', '58', '0', '2021-04-20 09:26:13', '2021-04-20 09:26:17');
INSERT INTO `task_done` VALUES ('19', '1', '58', '1', '2021-04-20 09:26:13', '2021-04-20 10:14:49');
INSERT INTO `task_done` VALUES ('20', '1', '58', '1', '2021-04-20 10:19:22', '2021-04-20 10:27:54');
INSERT INTO `task_done` VALUES ('21', '1', '6', '1', '2021-04-20 10:41:03', '2021-04-20 10:41:05');
INSERT INTO `task_done` VALUES ('22', '1', '6', '0', '2021-04-20 10:41:03', '2021-04-20 10:41:47');
INSERT INTO `task_done` VALUES ('23', '1', '6', '1', '2021-04-20 10:41:03', '2021-04-20 10:44:12');
INSERT INTO `task_done` VALUES ('24', '1', '6', '0', '2021-04-20 10:41:03', '2021-04-20 10:44:14');
INSERT INTO `task_done` VALUES ('25', '1', '6', '1', '2021-04-20 10:41:03', '2021-04-20 10:46:07');
INSERT INTO `task_done` VALUES ('26', '1', '6', '0', '2021-04-20 10:41:03', '2021-04-20 10:46:12');
INSERT INTO `task_done` VALUES ('27', '1', '6', '0', '2021-04-20 10:41:03', '2021-04-20 10:46:50');
INSERT INTO `task_done` VALUES ('28', '5', '58', '1', '2021-04-18 10:03:14', '2021-04-21 21:30:39');
INSERT INTO `task_done` VALUES ('29', '5', '58', '0', '2021-04-18 10:03:14', '2021-04-21 21:30:41');
INSERT INTO `task_done` VALUES ('30', '5', '6', '1', '2021-04-21 21:30:44', '2021-04-21 21:30:46');
INSERT INTO `task_done` VALUES ('31', '5', '6', '0', '2021-04-21 21:30:44', '2021-04-21 21:30:48');
INSERT INTO `task_done` VALUES ('32', '6', '6', '0', '2021-04-21 23:42:16', '2021-04-21 23:51:36');
INSERT INTO `task_done` VALUES ('33', '1', '6', '1', '2021-04-21 23:59:45', '2021-04-21 23:59:51');
INSERT INTO `task_done` VALUES ('34', '1', '25', '0', '2021-04-22 00:11:57', '2021-04-22 00:14:32');
INSERT INTO `task_done` VALUES ('35', '1', '25', '1', '2021-04-22 00:11:57', '2021-04-22 00:14:34');
INSERT INTO `task_done` VALUES ('36', '1', '43', '0', '2021-04-22 00:11:57', '2021-04-22 09:44:41');
INSERT INTO `task_done` VALUES ('37', '1', '25', '1', '2021-04-22 00:11:46', '2021-04-22 09:44:47');
INSERT INTO `task_done` VALUES ('38', '1', '9', '1', '2021-04-22 12:00:06', '2021-04-22 12:37:41');
INSERT INTO `task_done` VALUES ('39', '1', '23', '1', '2021-04-22 11:35:40', '2021-04-22 13:03:51');
INSERT INTO `task_done` VALUES ('40', '1', '43', '0', '2021-04-22 13:05:10', '2021-04-22 13:08:24');
INSERT INTO `task_done` VALUES ('41', '1', '43', '1', '2021-04-22 13:05:10', '2021-04-22 13:09:18');
INSERT INTO `task_done` VALUES ('42', '1', '36', '1', '2021-04-22 13:06:11', '2021-04-22 13:23:23');
INSERT INTO `task_done` VALUES ('43', '1', '43', '0', '2021-04-22 13:05:10', '2021-04-22 13:26:13');
INSERT INTO `task_done` VALUES ('44', '1', '43', '0', '2021-04-22 13:05:10', '2021-04-22 13:32:44');
INSERT INTO `task_done` VALUES ('45', '1', '36', '0', '2021-04-22 13:06:11', '2021-04-22 13:32:47');
INSERT INTO `task_done` VALUES ('46', '1', '36', '1', '2021-04-22 13:06:11', '2021-04-22 13:32:59');
INSERT INTO `task_done` VALUES ('47', '1', '36', '0', '2021-04-22 13:06:11', '2021-04-22 13:37:14');
INSERT INTO `task_done` VALUES ('48', '1', '43', '0', '2021-04-22 13:05:10', '2021-04-22 13:37:30');
INSERT INTO `task_done` VALUES ('49', '1', '36', '1', '2021-04-22 13:06:11', '2021-04-22 13:40:10');
INSERT INTO `task_done` VALUES ('50', '1', '43', '1', '2021-04-22 13:05:10', '2021-04-22 13:40:37');
INSERT INTO `task_done` VALUES ('51', '1', '22', '0', '2021-04-23 14:09:01', '2021-04-23 14:11:40');
INSERT INTO `task_done` VALUES ('52', '1', '44', '0', '2021-04-23 14:14:22', '2021-04-23 14:14:30');
INSERT INTO `task_done` VALUES ('53', '1', '44', '1', '2021-04-23 14:18:50', '2021-04-23 14:19:36');
INSERT INTO `task_done` VALUES ('54', '1', '27', '0', '2021-04-23 14:24:15', '2021-04-23 14:24:23');
INSERT INTO `task_done` VALUES ('55', '1', '23', '1', '2021-04-23 14:09:01', '2021-04-23 14:35:39');
INSERT INTO `task_done` VALUES ('56', '1', '22', '1', '2021-04-23 14:43:38', '2021-04-23 14:43:47');
INSERT INTO `task_done` VALUES ('57', '1', '48', '0', '2021-04-23 14:44:40', '2021-04-23 14:44:45');
INSERT INTO `task_done` VALUES ('58', '1', '27', '1', '2021-04-23 14:45:41', '2021-04-23 14:47:11');
INSERT INTO `task_done` VALUES ('59', '1', '36', '0', '2021-04-23 14:46:42', '2021-04-23 14:51:34');
INSERT INTO `task_done` VALUES ('60', '1', '27', '1', '2021-04-23 14:51:47', '2021-04-23 14:53:26');
INSERT INTO `task_done` VALUES ('61', '1', '22', '0', '2021-04-23 14:52:49', '2021-04-23 14:54:05');
INSERT INTO `task_done` VALUES ('62', '1', '48', '1', '2021-04-23 14:53:50', '2021-04-23 14:54:08');
INSERT INTO `task_done` VALUES ('63', '1', '44', '0', '2021-04-23 14:56:53', '2021-04-23 15:02:57');
INSERT INTO `task_done` VALUES ('64', '1', '22', '1', '2021-04-23 14:57:54', '2021-04-23 15:02:58');
INSERT INTO `task_done` VALUES ('65', '1', '48', '1', '2021-04-23 14:58:56', '2021-04-23 15:02:59');
INSERT INTO `task_done` VALUES ('66', '1', '27', '0', '2021-04-23 14:59:57', '2021-04-23 15:03:00');
INSERT INTO `task_done` VALUES ('67', '1', '43', '1', '2021-04-23 15:00:58', '2021-04-23 15:03:01');
INSERT INTO `task_done` VALUES ('68', '1', '36', '0', '2021-04-23 15:00:58', '2021-04-23 15:03:05');
INSERT INTO `task_done` VALUES ('69', '1', '36', '1', '2021-04-23 15:14:03', '2021-04-23 15:30:39');
INSERT INTO `task_done` VALUES ('70', '1', '27', '1', '2021-04-23 15:15:37', '2021-04-23 15:30:40');
INSERT INTO `task_done` VALUES ('71', '1', '27', '0', '2021-04-23 15:32:55', '2021-04-23 15:40:39');
INSERT INTO `task_done` VALUES ('72', '1', '48', '1', '2021-04-23 15:34:58', '2021-04-23 15:42:04');
INSERT INTO `task_done` VALUES ('73', '1', '22', '0', '2021-04-23 15:33:57', '2021-04-23 15:42:26');
INSERT INTO `task_done` VALUES ('74', '1', '44', '0', '2021-04-23 15:36:00', '2021-04-23 21:35:05');
INSERT INTO `task_done` VALUES ('75', '1', '22', '1', '2021-04-23 21:26:30', '2021-04-23 21:35:09');
INSERT INTO `task_done` VALUES ('76', '1', '48', '1', '2021-04-23 21:26:30', '2021-04-23 21:37:25');
INSERT INTO `task_done` VALUES ('77', '1', '36', '0', '2021-04-23 21:39:27', '2021-04-23 21:39:40');
INSERT INTO `task_done` VALUES ('78', '1', '27', '1', '2021-04-23 21:40:28', '2021-04-23 21:42:52');
INSERT INTO `task_done` VALUES ('79', '1', '3', '1', '2021-04-24 00:02:46', '2021-04-24 00:26:21');
INSERT INTO `task_done` VALUES ('80', '1', '3', '0', '2021-04-24 00:02:46', '2021-04-24 00:26:22');
INSERT INTO `task_done` VALUES ('81', '1', '5', '1', '2021-04-24 00:22:10', '2021-04-24 00:27:13');
INSERT INTO `task_done` VALUES ('82', '1', '39', '0', '2021-04-24 00:02:46', '2021-04-24 00:27:16');
INSERT INTO `task_done` VALUES ('83', '1', '5', '1', '2021-04-24 00:02:46', '2021-04-24 00:28:03');
INSERT INTO `task_done` VALUES ('84', '1', '40', '1', '2021-04-24 00:02:47', '2021-04-24 00:32:00');
INSERT INTO `task_done` VALUES ('85', '1', '38', '1', '2021-04-24 00:02:46', '2021-04-24 00:32:03');
INSERT INTO `task_done` VALUES ('86', '1', '26', '1', '2021-04-24 00:04:10', '2021-04-24 00:44:29');
INSERT INTO `task_done` VALUES ('87', '1', '9', '1', '2021-04-24 00:51:23', '2021-04-24 01:20:50');

-- ----------------------------
-- Table structure for `user_task`
-- ----------------------------
DROP TABLE IF EXISTS `user_task`;
CREATE TABLE `user_task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `task_id` int(10) unsigned NOT NULL,
  `remind_time` time NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `task_id` (`task_id`),
  CONSTRAINT `user_task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_task_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_task
-- ----------------------------
INSERT INTO `user_task` VALUES ('1', '2', '1', '07:30:00', '2021-04-10', '2021-04-20', '2021-04-10 10:34:12');
INSERT INTO `user_task` VALUES ('2', '2', '2', '08:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('3', '6', '3', '23:36:40', '2021-04-10', '2021-04-30', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('4', '2', '4', '08:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('5', '2', '5', '10:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('6', '2', '5', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('7', '1', '43', '21:31:30', '2021-04-10', '2021-04-30', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('8', '1', '36', '21:39:30', '2021-04-10', '2021-04-30', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('9', '1', '27', '21:40:30', '2021-04-10', '2021-04-30', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('10', '1', '22', '21:28:00', '2021-04-10', '2021-04-30', '2021-04-10 10:41:04');
INSERT INTO `user_task` VALUES ('11', '1', '48', '21:27:00', '2021-04-10', '2021-04-30', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('12', '1', '44', '21:33:00', '2021-04-10', '2021-04-30', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('13', '1', '11', '15:36:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('14', '1', '12', '15:37:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('15', '1', '13', '15:38:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('16', '1', '13', '15:39:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('17', '1', '13', '15:40:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('18', '2', '14', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('19', '2', '14', '16:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('20', '2', '14', '18:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('21', '2', '15', '18:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('22', '2', '16', '20:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('23', '2', '17', '20:30:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('24', '2', '18', '22:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('25', '2', '18', '23:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('26', '2', '19', '11:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('27', '2', '20', '13:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('28', '2', '21', '11:30:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('29', '2', '22', '15:30:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('30', '2', '23', '20:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('31', '2', '24', '08:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('32', '2', '25', '21:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('33', '3', '1', '07:30:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('34', '3', '3', '08:10:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('35', '3', '26', '08:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('36', '3', '26', '08:40:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('37', '3', '27', '08:40:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('38', '3', '27', '08:50:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('39', '3', '5', '09:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('40', '3', '28', '10:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('41', '3', '7', '10:40:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('42', '3', '7', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('43', '3', '8', '11:20:00', '2021-04-10', '2021-04-20', '2021-04-10 10:50:22');
INSERT INTO `user_task` VALUES ('44', '3', '9', '17:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:06:41');
INSERT INTO `user_task` VALUES ('45', '3', '10', '17:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:08:01');
INSERT INTO `user_task` VALUES ('46', '3', '11', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:08:01');
INSERT INTO `user_task` VALUES ('47', '3', '29', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:08:01');
INSERT INTO `user_task` VALUES ('48', '3', '29', '16:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('49', '3', '13', '14:30:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('50', '3', '13', '15:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('51', '3', '14', '15:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('52', '3', '14', '15:20:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('53', '3', '30', '19:30:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('54', '3', '31', '15:30:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('55', '3', '31', '16:30:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('56', '3', '31', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('57', '3', '31', '16:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('58', '3', '33', '19:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('59', '3', '34', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('60', '3', '34', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('61', '3', '34', '18:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('62', '3', '35', '19:15:00', '2021-04-10', '2021-04-20', '2021-04-10 15:03:29');
INSERT INTO `user_task` VALUES ('63', '3', '36', '08:10:00', '2021-04-10', '2021-04-20', '2021-04-10 15:04:02');
INSERT INTO `user_task` VALUES ('64', '3', '36', '11:00:00', '2021-04-10', '2021-04-20', '2021-04-10 14:56:17');
INSERT INTO `user_task` VALUES ('65', '3', '36', '14:00:00', '2021-04-10', '2021-04-20', '2021-04-10 15:17:14');
INSERT INTO `user_task` VALUES ('66', '3', '37', '08:30:00', '2021-04-10', '2021-04-20', '2021-04-10 15:18:28');
INSERT INTO `user_task` VALUES ('67', '3', '37', '17:00:00', '2021-04-10', '2021-04-20', '2021-04-10 15:19:27');
INSERT INTO `user_task` VALUES ('68', '3', '24', '09:00:00', '2021-04-10', '2021-04-20', '2021-04-10 15:57:58');
INSERT INTO `user_task` VALUES ('69', '3', '24', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 15:58:32');
INSERT INTO `user_task` VALUES ('70', '3', '24', '15:05:00', '2021-04-10', '2021-04-20', '2021-04-10 15:58:58');
INSERT INTO `user_task` VALUES ('71', '3', '25', '10:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:01:42');
INSERT INTO `user_task` VALUES ('72', '3', '25', '12:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:02:05');
INSERT INTO `user_task` VALUES ('73', '3', '25', '16:10:00', '2021-04-10', '2021-04-20', '2021-04-10 16:02:30');
INSERT INTO `user_task` VALUES ('74', '4', '1', '07:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:03:13');
INSERT INTO `user_task` VALUES ('75', '4', '3', '08:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:03:47');
INSERT INTO `user_task` VALUES ('76', '4', '26', '09:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('77', '4', '38', '09:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('78', '4', '5', '09:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('79', '4', '39', '10:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:06:47');
INSERT INTO `user_task` VALUES ('80', '4', '40', '11:45:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('81', '4', '41', '11:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('82', '4', '9', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('83', '4', '10', '12:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('84', '4', '11', '10:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:09:34');
INSERT INTO `user_task` VALUES ('85', '4', '42', '19:35:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('86', '4', '43', '19:40:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('87', '4', '44', '19:45:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('88', '4', '45', '19:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('89', '4', '46', '19:28:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('90', '4', '47', '19:25:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('91', '4', '48', '19:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('92', '4', '49', '19:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('93', '4', '50', '19:40:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('94', '4', '51', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('95', '4', '52', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('96', '4', '53', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('97', '4', '54', '19:50:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('98', '4', '55', '19:55:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('99', '1', '25', '16:10:00', '2021-04-10', '2021-04-20', '2021-04-11 00:00:00');
INSERT INTO `user_task` VALUES ('100', '1', '1', '07:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:03:13');
INSERT INTO `user_task` VALUES ('101', '1', '3', '00:02:00', '2021-04-10', '2021-04-30', '2021-04-10 16:03:47');
INSERT INTO `user_task` VALUES ('102', '1', '26', '00:04:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('103', '1', '38', '00:02:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('104', '1', '5', '00:22:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('105', '1', '39', '00:25:00', '2021-04-10', '2021-04-30', '2021-04-10 16:06:47');
INSERT INTO `user_task` VALUES ('106', '1', '40', '00:32:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('107', '1', '41', '00:45:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('108', '1', '9', '00:51:00', '2021-04-10', '2021-04-30', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('109', '1', '10', '00:50:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('110', '1', '11', '00:48:00', '2021-04-10', '2021-04-20', '2021-04-10 16:09:34');
INSERT INTO `user_task` VALUES ('111', '6', '42', '00:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('112', '6', '43', '19:40:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('113', '6', '44', '19:45:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('114', '6', '45', '19:30:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('115', '5', '46', '19:28:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('116', '5', '47', '19:25:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('117', '5', '48', '19:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('118', '5', '49', '19:00:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('119', '5', '50', '19:40:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('120', '5', '51', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('121', '5', '52', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('122', '5', '53', '19:05:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('123', '5', '54', '19:50:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');
INSERT INTO `user_task` VALUES ('124', '5', '55', '19:55:00', '2021-04-10', '2021-04-20', '2021-04-10 16:04:52');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `job_title` varchar(150) NOT NULL COMMENT 'lavozimi',
  `type` int(3) NOT NULL DEFAULT 0 COMMENT '1 - admin, 0 - ishchi',
  `gender` int(3) NOT NULL DEFAULT 1 COMMENT 'jins 1 - erkak, 2 - ayol',
  `born` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `chat_id` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Ismoil', '1', 'Ismoil', 'Maxmudov', 'full stack', '1', '1', '2000-04-22 00:00:00', '', '+998972087090', '1068702247', '2021-04-07 22:04:29');
INSERT INTO `users` VALUES ('2', 'Nasibillo', '123', 'Nasibillo', 'Ibrokhimov', 'Raxbar', '1', '1', '1901-11-06 00:00:00', '', '+998995568386', '', '2021-04-07 22:11:02');
INSERT INTO `users` VALUES ('3', 'Mubashir', '', 'Mubashir', 'Ibrokhimov', 'Savdo bo\'limi bosh xisobchisi', '0', '1', '1990-03-01 15:53:41', '', '', '', '2021-04-07 22:25:34');
INSERT INTO `users` VALUES ('4', 'Isroil', '', 'Isroil', 'Ibrokhimov', 'Moliya bo\'limi bosh xisobchisi', '0', '1', '1990-03-01 15:53:41', '', '', '', '2021-04-07 22:25:34');
INSERT INTO `users` VALUES ('5', 'Ismoil humans', '123', 'Ismoil', 'Maxmudov', 'web', '0', '1', '1996-00-00 15:29:10', 'dangara tumani', '+998332087090', '1794193492', '2021-04-08 15:29:44');
INSERT INTO `users` VALUES ('6', 'Alisher', '1', 'Alisher aka', 'Jalolov', 'Senior developer', '0', '1', '0000-00-00 00:00:00', 'A. Navoiy', '+998916848100', '982176601', '2021-04-10 16:27:52');
