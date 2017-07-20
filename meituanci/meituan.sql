/*
Navicat MySQL Data Transfer

Source Server         : zxzx
Source Server Version : 50027
Source Host           : localhost:3306
Source Database       : meituan

Target Server Type    : MYSQL
Target Server Version : 50027
File Encoding         : 65001

Date: 2017-07-20 11:22:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_business`
-- ----------------------------
DROP TABLE IF EXISTS `t_business`;
CREATE TABLE `t_business` (
  `business_id` int(11) NOT NULL auto_increment,
  `business_name` varchar(255) character set utf8 default NULL,
  `business_address` varchar(255) character set utf8 default NULL,
  `business_tel` varchar(255) default NULL,
  PRIMARY KEY  (`business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_business
-- ----------------------------
INSERT INTO `t_business` VALUES ('1', '鲜芋仙', '道外区东直路118号百盛购物中心太平桥店1层', '0451-88888888');
INSERT INTO `t_business` VALUES ('2', '肯德基', '东北林业大学', '010-666242');
INSERT INTO `t_business` VALUES ('3', '乐巢  ', '天鹅广场', '1544884645');

-- ----------------------------
-- Table structure for `t_collect`
-- ----------------------------
DROP TABLE IF EXISTS `t_collect`;
CREATE TABLE `t_collect` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `is_delete` int(1) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_collect
-- ----------------------------
INSERT INTO `t_collect` VALUES ('12', '1', '1', '1');
INSERT INTO `t_collect` VALUES ('14', '1', '1', '1');
INSERT INTO `t_collect` VALUES ('15', '1', '1', '1');
INSERT INTO `t_collect` VALUES ('16', '1', '1', '1');
INSERT INTO `t_collect` VALUES ('17', '1', '1', '1');
INSERT INTO `t_collect` VALUES ('18', '1', '1', '0');

-- ----------------------------
-- Table structure for `t_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_comment`;
CREATE TABLE `t_comment` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `content` varchar(255) character set utf8 default NULL,
  `time` datetime default NULL,
  `score` int(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_comment
-- ----------------------------
INSERT INTO `t_comment` VALUES ('1', '1', '1', ' 金刚不坏jkjiihui', '2017-07-13 16:03:19', '4');
INSERT INTO `t_comment` VALUES ('2', '2', '1', '很好   喜欢的 不得了', '2017-07-18 16:04:18', '5');
INSERT INTO `t_comment` VALUES ('3', '1', '2', '他应该有工会技能就你家客厅与幅度日北京户口可更换', '2017-07-18 16:04:29', '1');

-- ----------------------------
-- Table structure for `t_comment_img`
-- ----------------------------
DROP TABLE IF EXISTS `t_comment_img`;
CREATE TABLE `t_comment_img` (
  `id` int(11) NOT NULL auto_increment,
  `path` varchar(255) default NULL,
  `comment_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_comment_img
-- ----------------------------
INSERT INTO `t_comment_img` VALUES ('1', 'img/item1.jpg', '1');
INSERT INTO `t_comment_img` VALUES ('2', 'img/item2.jpg', '1');
INSERT INTO `t_comment_img` VALUES ('3', 'img/item3.png', '2');
INSERT INTO `t_comment_img` VALUES ('4', 'img/item4.png', '1');

-- ----------------------------
-- Table structure for `t_order`
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `order_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `order_price` varchar(10) collate utf8_bin default NULL,
  `num` int(11) default NULL COMMENT '数量',
  PRIMARY KEY  (`order_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `t_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`user_id`),
  CONSTRAINT `t_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `t_product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of t_order
-- ----------------------------
INSERT INTO `t_order` VALUES ('1', '1', '1', '5', '2');
INSERT INTO `t_order` VALUES ('12', '14', '1', '6', '3');
INSERT INTO `t_order` VALUES ('13', '14', '1', '6', '3');

-- ----------------------------
-- Table structure for `t_product`
-- ----------------------------
DROP TABLE IF EXISTS `t_product`;
CREATE TABLE `t_product` (
  `product_id` int(11) NOT NULL auto_increment,
  `product_name` varchar(255) collate utf8_bin default NULL,
  `price` varchar(10) character set utf8 default NULL,
  `description` varchar(255) collate utf8_bin default NULL,
  `discount_price` varchar(10) collate utf8_bin default NULL,
  `img` varchar(255) collate utf8_bin default NULL,
  `business_id` int(11) default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of t_product
-- ----------------------------
INSERT INTO `t_product` VALUES ('1', '鲜芋仙', '8', '[11店通用]10元代金券1份', '6', 'img/xianyuxian.jpg', '1');
INSERT INTO `t_product` VALUES ('2', 'KFC', '15', '[12店通用]10元代金券1份', '10', 'img/kfc.jpg', '2');
INSERT INTO `t_product` VALUES ('3', '乐巢限量ktv', '99', '[13店通用]10元代金券1份', '19.5', 'img/lechao.jpg', '3');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(255) collate utf8_bin default NULL COMMENT '用户名称',
  `password` varchar(255) collate utf8_bin default NULL COMMENT '密码',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'admin', '12345');
INSERT INTO `t_user` VALUES ('14', 'zxzx', '111');
