/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : ay_fenda

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-05-15 14:51:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fd_ask
-- ----------------------------
DROP TABLE IF EXISTS `fd_ask`;
CREATE TABLE `fd_ask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask_content` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `vip_id` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `answer_content` varchar(255) DEFAULT NULL,
  `like_num` int(11) NOT NULL DEFAULT '0',
  `listen_num` int(11) NOT NULL DEFAULT '0',
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `duration` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `answer_flag` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_ask
-- ----------------------------
INSERT INTO `fd_ask` VALUES ('1', '为什么想赚钱的人有那么多？为什么大多数人还是没赚到钱呢？', '10', '1', '1509902055', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '12', '23', '1', '2', null, '0.00', '2');
INSERT INTO `fd_ask` VALUES ('2', '现实生存发展（钱）和内心找一个平衡。平衡你就快乐。失衡，很多很多很多人都没衡。身份定位，我的问题一直是这里。我一直不认可不支持自己的身份定位  ？', '5', '1', '1509902055', '1509079941860871.mp3', '121', '0', '1', '2', null, '0.00', '1');
INSERT INTO `fd_ask` VALUES ('3', '您好。本不打算叨扰您，但是还是要小说一句。终于发现，以前学来的 听来的 看来的 经历来的 …都不是无用之功。人习惯找不到自己，其实也许只是时机不够到 ？', '15', '1', '1509902055', '1509079941860871.mp3', '1215', '232', '1', '2', null, '0.00', '1');
INSERT INTO `fd_ask` VALUES ('4', '去一直想去的大公司面试了两轮，第三轮说面试官出差回来再面，等了半个月打电话问说人事去校招了，十一后回来！我裸辞北京房租挺贵的。心里不平衡又着急又想去，我该怎么办', '7', '2', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '2', '116', '1', '2', null, '45.00', '2');
INSERT INTO `fd_ask` VALUES ('5', '如何看待一个公司，绝大部分人不是上班的，可以理解成“闲”', '24', '2', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '3', '8', '1', '2', null, '45.00', '2');
INSERT INTO `fd_ask` VALUES ('6', '部门上级男和下级「女」通奸。部门上级家属也知道此事，下级女也去男方家里闹过。公司总经理和分管副总都知道此事没有做出动作。下级女和我有直接竞争，现在对我不是很利', '8', '3', '1507779575', '1509079941860871.mp3', '4', '7', '1', '2', null, '188.00', '1');
INSERT INTO `fd_ask` VALUES ('7', '我从传统公司跳槽到互联网小公司，只有我一个运营（APP，新媒体），有很多事情都是自己摸索在做，领导又是非运营出身，也有很多不懂。目前有点吃力又迷茫，是否该跳槽？', '6', '3', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '6', '5', '1', '2', null, '188.00', '2');
INSERT INTO `fd_ask` VALUES ('8', '摄影工作室 销售就我1个 销售这块只有我懂 有个系统干货培训不错 我要推荐给我老板听吗？怕他们学会销售和管理以后 会找人来替代我 系统是可复制迁移 我工资拿高 ', '23', '3', '1507779575', '1509079941860871.mp3', '46', '7', '1', '2', null, '188.00', '1');
INSERT INTO `fd_ask` VALUES ('9', '杨老师，你认为孩子马虎的习惯可以改过来么？应该怎么改？有什么好的方法么？', '6', '4', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '49', '26', '1', '2', null, '78.00', '2');
INSERT INTO `fd_ask` VALUES ('10', '大二工业工程专业(知识面广但不精)学生。对本专业比较感兴趣，但以此为生又不甘心。所以对于是否考研感到迷茫(若以此为生必考，若不呢？若不，考研感觉浪费时间)。求解', '11', '4', '1507779575', '1509079941860871.mp3', '61', '10', '1', '2', null, '78.00', '1');
INSERT INTO `fd_ask` VALUES ('11', '经常会在一些场合不会说话，描述一次你曾经不会说话的经历吧？', '3', '5', '1507779575', '1509079941860871.mp3', '0', '6', '1', '2', null, '99.00', '1');
INSERT INTO `fd_ask` VALUES ('12', '在满负荷工作的情况下，如何挤时间看书？', '12', '10', '1507779575', '1509079941860871.mp3', '2', '3', '1', '2', null, '53.00', '1');
INSERT INTO `fd_ask` VALUES ('13', '想请教阁下，用户在快问的一个领域下提问（产生了一个订单），假设这个领域下有800个专家。分答是如分配这个订单的呢？（难道800个人凭运气抢单吗？）很好奇，哈哈', '13', '11', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '16', '157', '1', '2', null, '46.00', '2');
INSERT INTO `fd_ask` VALUES ('14', '我有强迫症。注意很是不集中。无法专注。阅读总是分心。找不到灵感。请您教我一些阅读的方法，如何做到高效，专注？', '4', '11', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '4', '156', '1', '2', null, '46.00', '2');
INSERT INTO `fd_ask` VALUES ('15', '我终于悟到了是。为什么一直让你们解除拉黑，因为我想让你们亲自看看，我是怎样一步一步变的厉害 变的很厉害，变的比你们厉害的 ，仅此而已', '5', '11', '1507779575', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '8', '14', '1', '2', null, '46.00', '2');
INSERT INTO `fd_ask` VALUES ('16', '如何系统的学习股市？', '11', '12', '1507779575', '1509079941860871.mp3', '4', '46', '1', '2', null, '100.00', '1');
INSERT INTO `fd_ask` VALUES ('17', '马上端午节，有一些什么技巧过节，可以过的开心、又有收获？', '14', '13', '1507779575', '1509079941860871.mp3', '6', '5', '0', '2', null, '65.00', '1');
INSERT INTO `fd_ask` VALUES ('18', '大学开始就只做自己喜欢的事。上社会自然想这样，可很难做到，能做的不爱做，一边做一边痛苦。是否应该放弃内心，追求利益最大化', '21', '14', '1507779575', null, '48', '165', '1', '3', null, '54.00', '0');
INSERT INTO `fd_ask` VALUES ('19', '人必须要解决的事情，永远也无法回避的事情是什么（每个阶段都有最重要和次重要的事，但什么事是贯穿始终的），仔细思考举例回答', '5', '14', '1507779575', null, '6', '16', '1', '3', null, '54.00', '0');
INSERT INTO `fd_ask` VALUES ('20', '人的命运是怎么一回事情？ 如果把它缩小成一天，每一天真实的过好就行，那人就可以掌控命运。但还有思维不同人思维塑造不同命运', '24', '14', '1507779575', null, '1', '156', '1', '3', null, '54.00', '0');
INSERT INTO `fd_ask` VALUES ('21', '本人性别男，看了您一点儿成长史，总结来说就一句话，在自己喜欢的事情上顺便拿点钱，是这样子不 ？', '26', '15', '1507779575', null, '3', '45', '1', '3', null, '54.00', '0');
INSERT INTO `fd_ask` VALUES ('22', '32岁，在一家国企做销售八年，各领导对我都很好，2月刚调动到家乡任职，现遇到一个平台和收入都很好的职位，很心动，却同时觉得对企业和领导感情观上过不去，希望指导', '27', '16', '1507779575', null, '8', '16', '1', '3', null, '74.00', '0');
INSERT INTO `fd_ask` VALUES ('23', '您好！毕业后在外企做技术9年，去年考了MBA想寻求销售或管理类工作。不料今年失业，工作未定，学校也已开学。不知道还有没有必要去读？我该如何规划？因必须立马决策！', '9', '0', '1507779575', null, '6', '64', '1', '3', null, '0.00', '0');
INSERT INTO `fd_ask` VALUES ('24', '女，26，父母兄长希望我在老家找个稳定工作上班，我想出去闯一闯。现在沟通不畅僵持不下。我该怎么办？', '7', '0', '1507779575', null, '0', '66', '1', '3', null, '0.00', '0');
INSERT INTO `fd_ask` VALUES ('25', '浙江嘉兴的金色江湾、金洲海尚和中南君悦府这3个楼盘，哪个更有升值潜力？', '56', '39', '1508402211', '1509079941860871.mp3', '0', '1', '0', '2', null, '3.15', '1');
INSERT INTO `fd_ask` VALUES ('26', 'sdfdsf', '55', '17', '1508402211', '', '0', '0', '1', '3', null, '78.00', '0');
INSERT INTO `fd_ask` VALUES ('27', 'fdsfds', '55', '3', '1508486712', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '0', '0', '1', '3', null, '188.00', '0');
INSERT INTO `fd_ask` VALUES ('29', '你好吗', '55', '9', '1508561620', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '0', '1', '1', '3', null, '30.00', '0');
INSERT INTO `fd_ask` VALUES ('30', '号吗', '55', '12', '1508561900', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1', '1', '1', '2', null, '100.00', '2');
INSERT INTO `fd_ask` VALUES ('31', '辅导费', '55', '19', '1508562099', '1509079941860871.mp3', '1', '1', '1', '2', null, '23.00', '1');
INSERT INTO `fd_ask` VALUES ('32', '感情问题', '58', '39', '1508684207', '1509079941860871.mp3', '2', '2', '1', '2', null, '3.15', '1');
INSERT INTO `fd_ask` VALUES ('33', 'haha', '58', '39', '1508809320', '1509079941860871.mp3', '1', '1', '0', '2', null, '3.15', '1');
INSERT INTO `fd_ask` VALUES ('34', '你是杨幂吗', '55', '41', '1508809451', '1509079941860871.mp3', '0', '0', '0', '2', null, '3.14', '1');
INSERT INTO `fd_ask` VALUES ('35', 'b数？没有！我膨胀', '55', '41', '1508991675', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '0', '0', '0', '4', null, '3.14', '2');
INSERT INTO `fd_ask` VALUES ('36', '无心插柳柳成荫', '55', '41', '1509005879', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '0', '0', '1', '2', null, '3.14', '2');
INSERT INTO `fd_ask` VALUES ('37', '小程序动画？？？', '63', '20', '1522403207', null, '0', '0', '1', '1', null, '21.00', '0');
INSERT INTO `fd_ask` VALUES ('38', 'Vue和jQuery使用哪个好呢', '63', '3', '1523237358', null, '0', '0', '1', '1', null, '188.00', '0');

-- ----------------------------
-- Table structure for fd_ask_buy
-- ----------------------------
DROP TABLE IF EXISTS `fd_ask_buy`;
CREATE TABLE `fd_ask_buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_ask_buy
-- ----------------------------
INSERT INTO `fd_ask_buy` VALUES ('1', '1', '1');
INSERT INTO `fd_ask_buy` VALUES ('2', '1', '3');
INSERT INTO `fd_ask_buy` VALUES ('3', '1', '4');
INSERT INTO `fd_ask_buy` VALUES ('4', '1', '6');
INSERT INTO `fd_ask_buy` VALUES ('5', '1', '7');
INSERT INTO `fd_ask_buy` VALUES ('6', '2', '1');
INSERT INTO `fd_ask_buy` VALUES ('7', '2', '3');
INSERT INTO `fd_ask_buy` VALUES ('8', '2', '2');
INSERT INTO `fd_ask_buy` VALUES ('9', '2', '6');
INSERT INTO `fd_ask_buy` VALUES ('10', '2', '11');
INSERT INTO `fd_ask_buy` VALUES ('11', '2', '12');
INSERT INTO `fd_ask_buy` VALUES ('12', '2', '14');
INSERT INTO `fd_ask_buy` VALUES ('13', '2', '18');
INSERT INTO `fd_ask_buy` VALUES ('14', '3', '20');
INSERT INTO `fd_ask_buy` VALUES ('15', '3', '12');
INSERT INTO `fd_ask_buy` VALUES ('16', '3', '14');
INSERT INTO `fd_ask_buy` VALUES ('17', '3', '23');
INSERT INTO `fd_ask_buy` VALUES ('18', '4', '29');
INSERT INTO `fd_ask_buy` VALUES ('19', '4', '11');
INSERT INTO `fd_ask_buy` VALUES ('20', '4', '12');
INSERT INTO `fd_ask_buy` VALUES ('21', '4', '3');
INSERT INTO `fd_ask_buy` VALUES ('22', '5', '1');
INSERT INTO `fd_ask_buy` VALUES ('23', '5', '5');
INSERT INTO `fd_ask_buy` VALUES ('24', '5', '6');
INSERT INTO `fd_ask_buy` VALUES ('25', '6', '7');
INSERT INTO `fd_ask_buy` VALUES ('26', '6', '10');
INSERT INTO `fd_ask_buy` VALUES ('27', '6', '12');
INSERT INTO `fd_ask_buy` VALUES ('28', '7', '14');
INSERT INTO `fd_ask_buy` VALUES ('29', '8', '5');
INSERT INTO `fd_ask_buy` VALUES ('30', '9', '3');
INSERT INTO `fd_ask_buy` VALUES ('31', '9', '7');
INSERT INTO `fd_ask_buy` VALUES ('32', '10', '8');
INSERT INTO `fd_ask_buy` VALUES ('33', '11', '10');
INSERT INTO `fd_ask_buy` VALUES ('34', '12', '13');
INSERT INTO `fd_ask_buy` VALUES ('35', '13', '15');
INSERT INTO `fd_ask_buy` VALUES ('36', '14', '19');
INSERT INTO `fd_ask_buy` VALUES ('37', '15', '22');
INSERT INTO `fd_ask_buy` VALUES ('38', '16', '24');
INSERT INTO `fd_ask_buy` VALUES ('40', '6', '55');
INSERT INTO `fd_ask_buy` VALUES ('41', '7', '55');
INSERT INTO `fd_ask_buy` VALUES ('42', '8', '55');
INSERT INTO `fd_ask_buy` VALUES ('46', '5', '55');
INSERT INTO `fd_ask_buy` VALUES ('45', '4', '55');
INSERT INTO `fd_ask_buy` VALUES ('47', '9', '55');
INSERT INTO `fd_ask_buy` VALUES ('48', '13', '55');
INSERT INTO `fd_ask_buy` VALUES ('49', '4', '58');
INSERT INTO `fd_ask_buy` VALUES ('50', '5', '58');
INSERT INTO `fd_ask_buy` VALUES ('51', '7', '58');
INSERT INTO `fd_ask_buy` VALUES ('52', '5', '59');
INSERT INTO `fd_ask_buy` VALUES ('53', '6', '59');
INSERT INTO `fd_ask_buy` VALUES ('54', '4', '59');
INSERT INTO `fd_ask_buy` VALUES ('55', '11', '59');
INSERT INTO `fd_ask_buy` VALUES ('56', '31', '59');
INSERT INTO `fd_ask_buy` VALUES ('57', '15', '55');
INSERT INTO `fd_ask_buy` VALUES ('58', '10', '55');
INSERT INTO `fd_ask_buy` VALUES ('59', '32', '55');
INSERT INTO `fd_ask_buy` VALUES ('60', '31', '55');
INSERT INTO `fd_ask_buy` VALUES ('61', '7', '63');
INSERT INTO `fd_ask_buy` VALUES ('62', '5', '63');

-- ----------------------------
-- Table structure for fd_ask_like
-- ----------------------------
DROP TABLE IF EXISTS `fd_ask_like`;
CREATE TABLE `fd_ask_like` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_ask_like
-- ----------------------------
INSERT INTO `fd_ask_like` VALUES ('6', '6', '55');
INSERT INTO `fd_ask_like` VALUES ('7', '4', '55');
INSERT INTO `fd_ask_like` VALUES ('9', '9', '55');
INSERT INTO `fd_ask_like` VALUES ('10', '31', '55');
INSERT INTO `fd_ask_like` VALUES ('11', '30', '55');
INSERT INTO `fd_ask_like` VALUES ('12', '32', '55');
INSERT INTO `fd_ask_like` VALUES ('13', '32', '58');
INSERT INTO `fd_ask_like` VALUES ('14', '33', '55');
INSERT INTO `fd_ask_like` VALUES ('15', '5', '63');
INSERT INTO `fd_ask_like` VALUES ('16', '7', '63');

-- ----------------------------
-- Table structure for fd_ask_listen
-- ----------------------------
DROP TABLE IF EXISTS `fd_ask_listen`;
CREATE TABLE `fd_ask_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_ask_listen
-- ----------------------------
INSERT INTO `fd_ask_listen` VALUES ('5', '6', '55');
INSERT INTO `fd_ask_listen` VALUES ('6', '7', '55');
INSERT INTO `fd_ask_listen` VALUES ('7', '8', '55');
INSERT INTO `fd_ask_listen` VALUES ('8', '4', '55');
INSERT INTO `fd_ask_listen` VALUES ('9', '5', '55');
INSERT INTO `fd_ask_listen` VALUES ('38', '9', '55');
INSERT INTO `fd_ask_listen` VALUES ('39', '31', '55');
INSERT INTO `fd_ask_listen` VALUES ('40', '30', '55');
INSERT INTO `fd_ask_listen` VALUES ('41', '32', '55');
INSERT INTO `fd_ask_listen` VALUES ('42', '25', '55');
INSERT INTO `fd_ask_listen` VALUES ('43', '32', '58');
INSERT INTO `fd_ask_listen` VALUES ('44', '13', '55');
INSERT INTO `fd_ask_listen` VALUES ('45', '33', '55');
INSERT INTO `fd_ask_listen` VALUES ('46', '29', '55');

-- ----------------------------
-- Table structure for fd_banji
-- ----------------------------
DROP TABLE IF EXISTS `fd_banji`;
CREATE TABLE `fd_banji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banji_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_banji
-- ----------------------------
INSERT INTO `fd_banji` VALUES ('1', '全栈周末班');
INSERT INTO `fd_banji` VALUES ('2', '白云学院全栈班');
INSERT INTO `fd_banji` VALUES ('3', 'Python人工智能班');

-- ----------------------------
-- Table structure for fd_cap
-- ----------------------------
DROP TABLE IF EXISTS `fd_cap`;
CREATE TABLE `fd_cap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` char(11) DEFAULT NULL,
  `cap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_cap
-- ----------------------------

-- ----------------------------
-- Table structure for fd_comment
-- ----------------------------
DROP TABLE IF EXISTS `fd_comment`;
CREATE TABLE `fd_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `content` text,
  `sort` tinyint(3) NOT NULL DEFAULT '1',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `like_num` int(11) NOT NULL DEFAULT '0',
  `smalltalk_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_comment
-- ----------------------------

-- ----------------------------
-- Table structure for fd_comment_like
-- ----------------------------
DROP TABLE IF EXISTS `fd_comment_like`;
CREATE TABLE `fd_comment_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `comment_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_comment_like
-- ----------------------------

-- ----------------------------
-- Table structure for fd_daka
-- ----------------------------
DROP TABLE IF EXISTS `fd_daka`;
CREATE TABLE `fd_daka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `input` varchar(255) DEFAULT NULL,
  `textarea3` varchar(255) DEFAULT NULL,
  `imageUrl` varchar(255) DEFAULT NULL,
  `dakaTime` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_daka
-- ----------------------------
INSERT INTO `fd_daka` VALUES ('3', null, '5555', null, '1524121337', '1', '2');
INSERT INTO `fd_daka` VALUES ('4', null, '22', null, '1524452353', '1', '2');
INSERT INTO `fd_daka` VALUES ('5', null, '65666', null, '1524479723', '1', '2');
INSERT INTO `fd_daka` VALUES ('6', null, '43', null, '1524622698', '10', '2');

-- ----------------------------
-- Table structure for fd_daka_theme
-- ----------------------------
DROP TABLE IF EXISTS `fd_daka_theme`;
CREATE TABLE `fd_daka_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) DEFAULT NULL,
  `xiangqin` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `starTime` int(13) DEFAULT NULL,
  `endTime` int(13) DEFAULT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_daka_theme
-- ----------------------------
INSERT INTO `fd_daka_theme` VALUES ('2', '21天读书养成计划', '时候大家时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么时候大家今后你就看么么么今后你就看么么么', '64', '1524430800', '1524790800', '/static/api/img/1526266889650714.jpeg');
INSERT INTO `fd_daka_theme` VALUES ('1', '21天读书', '活动开始剩5天23小时33分', '63', '1525654800', '1525741200', '/uploads/20180326\\6acdf763160b0b9764f197b0e8f8143d.jpg');

-- ----------------------------
-- Table structure for fd_headline
-- ----------------------------
DROP TABLE IF EXISTS `fd_headline`;
CREATE TABLE `fd_headline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` bigint(16) NOT NULL DEFAULT '0',
  `vip_id` int(11) NOT NULL DEFAULT '0',
  `heading_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_headline
-- ----------------------------
INSERT INTO `fd_headline` VALUES ('1', '2018年Q1编程语言排名：JavaScript第一，苹果Swift首进前十', 'IT之家3月9日消息', '<p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\"><a class=\"s_tag\" href=\"https://www.ithome.com/\" target=\"_blank\" style=\"outline: 0px; color: rgb(39, 42, 48); padding-bottom: 2px; height: 26px; box-shadow: 0px 0px; border: 0px; cursor: text;\">IT之家</a>3月9日消息&nbsp;RedMonk是一家专注软件开发者的行业分析公司，其总部位于美国，从2011年开始其就开始统计行业编程语言排名。</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">进入2018年3月，RedMonk发布了2018年初编程语言排行榜，榜单显示JavaScript依然是最受欢迎的编程语言，仅发布了四年的编程语言苹果Swift已经进入了榜单前十，与苹果Objective-C语言并列。</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\"><a href=\"http://img.ithome.com/newsuploadfiles/2018/3/20180309_210053_334.png\" target=\"_blank\" style=\"outline: 0px; color: rgb(210, 34, 34); padding-bottom: 2px; height: 26px; box-shadow: 0px 1px; border: 0px;\"><img src=\"https://img.ithome.com/newsuploadfiles/2018/3/20180309_210053_334.png@s_2,w_600,h_425\" w=\"600\" h=\"425\" class=\"lazy\" title=\"2018年Q1编程语言排名：JavaScript第一，苹果Swift首进前十\" data-original=\"https://img.ithome.com/newsuploadfiles/2018/3/20180309_210053_334.png@s_2,w_600,h_425\" width=\"600\" height=\"425\" style=\"border: 0px; vertical-align: bottom; max-width: 728px; background: url(&quot;//img.ithome.com/images/logo.svg&quot;) center center no-repeat rgb(231, 231, 231); display: inline;\"></a></p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">▲点击查看大图</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">RedMonk的编程语言排名综合了GitHub和Stack Overflow的排名数据，更能直接体现开发者对各种编程语言的兴趣程度。</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\"><span style=\"font-weight: 700;\">下面是排名位列前20的编程语言</span>：</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">1.JavaScript&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">2.Java&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">3.Python&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">4.PHP&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">5.C＃</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">6.C ++&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">7.CSS&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">8.Ruby&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">9.C&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">10.Swift 10.Objective-C&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">12.Shell 12.R&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">14.TypeScript 14.Scala&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">16.Go&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">17.PowerShell&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">18.Perl&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">19.Haskell&nbsp;</p><p style=\"padding-top: 10px; padding-bottom: 10px; color: rgb(66, 66, 66); font-size: 1pc; line-height: 30px; font-family: &quot;Microsoft Yahei&quot;, &quot;PingFang SC&quot;, &quot;HanHei SC&quot;, Arial; text-align: justify;\">20.Lua</p>', '1523266631', '2', '/static/api/img/1523266631515634.jpeg');

-- ----------------------------
-- Table structure for fd_headline_read
-- ----------------------------
DROP TABLE IF EXISTS `fd_headline_read`;
CREATE TABLE `fd_headline_read` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_headline_read
-- ----------------------------

-- ----------------------------
-- Table structure for fd_homework
-- ----------------------------
DROP TABLE IF EXISTS `fd_homework`;
CREATE TABLE `fd_homework` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_id` int(11) DEFAULT NULL,
  `work_name` varchar(255) DEFAULT NULL,
  `work_require` varchar(255) DEFAULT NULL,
  `tc_content1` text,
  `tc_content2` text,
  `tc_danxuan` int(2) DEFAULT NULL,
  `tc_duoxuan` varchar(255) DEFAULT NULL,
  `tc_panduan` int(2) DEFAULT NULL,
  `tc_tiankong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_homework
-- ----------------------------
INSERT INTO `fd_homework` VALUES ('1', '1', null, null, '<div>以下关于HTML标签使用方法说明不正确的是？</div><div>&nbsp; &lt;p align: “left/right/center(对齐方式)” &gt;xxx&lt;/p&gt; &nbsp; 描述信息或某些文字段落</div><div>&nbsp; &lt;video src=”视频资源路径” &nbsp;control（使用默认的播放器控件） &gt;&lt;/video&gt;</div><div>&nbsp; &lt;h1&gt;xxx&lt;/h1&gt; &nbsp;用于标题的显示</div><div>&nbsp; &lt;div id=”xx” &nbsp;class=”xx”&gt;xx&lt;/div&gt; &nbsp;容器 &nbsp;用于与css联合布局</div>', '', '2', '[]', '0', '[{\"input1\":\"\"}]');
INSERT INTO `fd_homework` VALUES ('2', '1', null, null, '<div>以下不属于Css样式字体样式是？</div><div><br></div><div>color:rgb(x,x,x)/#xxxxx(#xxx)/red</div><div>font-bold：字体粗细</div><div>font-family：设置字体的类型</div><div>font-size：字体大小</div>', '', '2', '[]', '0', '[{\"input1\":\"\"}]');
INSERT INTO `fd_homework` VALUES ('3', '1', null, null, '以下说法不正确的是？<div>a、我很帅</div><div>b、你很帅</div><div>c、都帅</div>', '', '1', '[]', '0', '[{\"input1\":\"\"}]');
INSERT INTO `fd_homework` VALUES ('4', '1', null, null, '', '', '0', '[]', '0', '[{\"input1\":\"\"}]');
INSERT INTO `fd_homework` VALUES ('5', '1', null, null, '大家好', '很好', '0', '[]', '0', '[{\"input1\":\"\"}]');
INSERT INTO `fd_homework` VALUES ('6', '1', null, null, '你好', '是', '0', '[]', '0', '[{\"input1\":\"\"}]');

-- ----------------------------
-- Table structure for fd_homework_rel
-- ----------------------------
DROP TABLE IF EXISTS `fd_homework_rel`;
CREATE TABLE `fd_homework_rel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `homework_add_id` varchar(255) DEFAULT NULL,
  `tc_id` int(11) DEFAULT NULL,
  `tc_title` varchar(255) DEFAULT NULL,
  `now_time` int(11) DEFAULT NULL,
  `s_time` int(11) DEFAULT NULL,
  `e_time` int(11) DEFAULT NULL,
  `banji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_homework_rel
-- ----------------------------
INSERT INTO `fd_homework_rel` VALUES ('1', '1,2', '1', '第七周作业', '1524881025', '1524362671', '1524967474', '2');
INSERT INTO `fd_homework_rel` VALUES ('2', '2,1,3', '1', '第七周作业', '1524536560', '1524536570', '1525054972', '2');
INSERT INTO `fd_homework_rel` VALUES ('3', '5,6', '1', '5月8日', '1525774450', '1525774461', '1527675265', '2');

-- ----------------------------
-- Table structure for fd_homework_result
-- ----------------------------
DROP TABLE IF EXISTS `fd_homework_result`;
CREATE TABLE `fd_homework_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `hw_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `progress` tinyint(2) DEFAULT '0',
  `hao_time` int(11) DEFAULT NULL,
  `correct` tinyint(2) DEFAULT NULL,
  `s_homework` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_homework_result
-- ----------------------------
INSERT INTO `fd_homework_result` VALUES ('1', '2', '2', '1524538130', null, 'a:3:{i:0;i:2;i:1;i:2;i:2;i:1;}', '100', '7', '33', '[1,1,1]');
INSERT INTO `fd_homework_result` VALUES ('2', '2', '1', '1524538273', null, 'a:2:{i:0;i:2;i:1;i:1;}', '100', '4', '50', '[1,2]');
INSERT INTO `fd_homework_result` VALUES ('3', '1', '2', '1525774374', null, 'a:3:{i:0;i:2;i:1;i:1;i:2;i:2;}', '100', '8', '33', '[1,2,3]');
INSERT INTO `fd_homework_result` VALUES ('4', '2', '3', '1525774626', null, 'a:2:{i:0;i:3;i:1;i:3;}', '100', '10', '0', '[\"\\u55d6\\u55d6\\u55d6<div style=\\\"display:none\\\" class=\\\"@@@\\\"><\\/div>\",\"\\u963f\\u65af\\u8fbe\\u65af\\u7684<div style=\\\"display:none\\\" class=\\\"@@@\\\"><\\/div>\"]');

-- ----------------------------
-- Table structure for fd_hongbao
-- ----------------------------
DROP TABLE IF EXISTS `fd_hongbao`;
CREATE TABLE `fd_hongbao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `a_time` int(11) DEFAULT NULL,
  `h_total` tinyint(2) DEFAULT NULL,
  `add_money` float(2,2) DEFAULT NULL,
  `h_money` float(2,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_hongbao
-- ----------------------------
INSERT INTO `fd_hongbao` VALUES ('1', '8', '1524127154', '1', null, '4');
INSERT INTO `fd_hongbao` VALUES ('2', '1', '1524209578', '1', null, '5');
INSERT INTO `fd_hongbao` VALUES ('3', '9', '1524210798', '1', null, '3');
INSERT INTO `fd_hongbao` VALUES ('4', '1', '1524448790', '2', null, '7');
INSERT INTO `fd_hongbao` VALUES ('5', '1', '1524535815', '3', null, '9');
INSERT INTO `fd_hongbao` VALUES ('6', '1', '1524621834', '4', null, '6');
INSERT INTO `fd_hongbao` VALUES ('7', '10', '1524622711', '1', null, '3');
INSERT INTO `fd_hongbao` VALUES ('8', '1', '1524711835', '5', null, '2');
INSERT INTO `fd_hongbao` VALUES ('9', '1', '1524884533', '6', null, '8');
INSERT INTO `fd_hongbao` VALUES ('10', '11', '1524901157', '1', null, '8');
INSERT INTO `fd_hongbao` VALUES ('11', '12', '1525231920', '1', null, '1');
INSERT INTO `fd_hongbao` VALUES ('12', '12', '1525336124', '2', null, '9');
INSERT INTO `fd_hongbao` VALUES ('13', '1', '1525400666', '7', null, '1');
INSERT INTO `fd_hongbao` VALUES ('14', '13', '1525677957', '1', null, '5');
INSERT INTO `fd_hongbao` VALUES ('15', '14', '1525680386', '1', null, '7');
INSERT INTO `fd_hongbao` VALUES ('16', '14', '1525774091', '2', null, '4');

-- ----------------------------
-- Table structure for fd_jiaoxue_xuqiu
-- ----------------------------
DROP TABLE IF EXISTS `fd_jiaoxue_xuqiu`;
CREATE TABLE `fd_jiaoxue_xuqiu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` double(7,2) DEFAULT '1.00',
  `xuqiu_content` varchar(255) DEFAULT NULL,
  `has_time` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `addtime` int(13) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_jiaoxue_xuqiu
-- ----------------------------
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('1', '12.00', 'wewr', '', '63', '1524309075', null, '1');
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('2', '13.00', '21123', '', '63', '1524309112', null, '1');
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('3', '12.00', 'eweqe', '', '63', '1524309163', null, '1');
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('4', '12.00', '21312', '3231', '63', '1524309194', null, '1');
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('5', '800.00', '前端中级课程', '暑假', '1', '1524449180', '1', '2');
INSERT INTO `fd_jiaoxue_xuqiu` VALUES ('6', '6.00', 'PS修图', '暑假都有空', '1', '1524451580', '1', '2');

-- ----------------------------
-- Table structure for fd_mobilehdp
-- ----------------------------
DROP TABLE IF EXISTS `fd_mobilehdp`;
CREATE TABLE `fd_mobilehdp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_path` varchar(255) DEFAULT NULL,
  `cate` char(100) DEFAULT NULL,
  `link_url` varchar(255) DEFAULT NULL,
  `click_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_mobilehdp
-- ----------------------------
INSERT INTO `fd_mobilehdp` VALUES ('6', '/uploads/20180411\\e5ce9be18e61a39c8d07a6fa38c42ec0.png', 'shop', null, null);
INSERT INTO `fd_mobilehdp` VALUES ('2', '/uploads/20180416\\1a8161551ca9d3b0828ead3fec134981.jpg', 'home', '/job/index', null);
INSERT INTO `fd_mobilehdp` VALUES ('3', '/uploads/20180416\\ff6a27092131ec47cce6c07e856aa495.jpg', 'home', '/oldindex', null);
INSERT INTO `fd_mobilehdp` VALUES ('4', '/uploads/20180411\\7f3ab78dc068ce761613608471e9b767.jpg', 'promote', null, null);
INSERT INTO `fd_mobilehdp` VALUES ('5', '/uploads/20180411\\7d9cf27d08638c37d0ab7c204a7fc3ba.jpg', 'promote', null, null);
INSERT INTO `fd_mobilehdp` VALUES ('7', '/uploads/20180411\\fc99bcf9c1b953beb5947ccc95011a50.png', 'daka', null, null);
INSERT INTO `fd_mobilehdp` VALUES ('8', '/uploads/20180416\\c03a43af9243fa24a66e1d93b108717a.jpg', 'home', '/oldindex', null);

-- ----------------------------
-- Table structure for fd_order
-- ----------------------------
DROP TABLE IF EXISTS `fd_order`;
CREATE TABLE `fd_order` (
  `id` int(11) NOT NULL,
  `out_trade_no` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `order_type` tinyint(1) DEFAULT '1' COMMENT '1:开通;2:基地',
  `is_pay` tinyint(1) DEFAULT '0' COMMENT '0:未支付;1:打算支付;2:已支付',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_order
-- ----------------------------
INSERT INTO `fd_order` VALUES ('0', '5875484671525400675', '1525400675', '2', '1');

-- ----------------------------
-- Table structure for fd_question
-- ----------------------------
DROP TABLE IF EXISTS `fd_question`;
CREATE TABLE `fd_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer_id` varchar(255) DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_question
-- ----------------------------
INSERT INTO `fd_question` VALUES ('1', 'null和undefined的区别', '1', '1', '1111111111111', 'sssssssssssss', '11111111111111111', 'dddddddddddddd');
INSERT INTO `fd_question` VALUES ('2', 'JSON 的了解', '2', '1', '222222222222222', 'xxxxxxxxxxxxxxx', 'ddddddddddddddddd', '222222222222222');
INSERT INTO `fd_question` VALUES ('3', '变量被赋值时', '3', '2', 'aaaaaaaaaaaaa', '3333333333333333333', 'sssssssssssssssss', '3333333333333');
INSERT INTO `fd_question` VALUES ('4', '变量被声明了', '1', '2', '4444444444', 'fffffffffff', 'vvvvvvvvvvv', '33333333333');

-- ----------------------------
-- Table structure for fd_quickask
-- ----------------------------
DROP TABLE IF EXISTS `fd_quickask`;
CREATE TABLE `fd_quickask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quickask_cate_id` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '10',
  `is_anonymous` tinyint(1) NOT NULL DEFAULT '1',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `duration` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_quickask
-- ----------------------------
INSERT INTO `fd_quickask` VALUES ('1', '1', '大家好', '3', '1', '1', '1523351449', null, '4');

-- ----------------------------
-- Table structure for fd_quickask_answer
-- ----------------------------
DROP TABLE IF EXISTS `fd_quickask_answer`;
CREATE TABLE `fd_quickask_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `quickask_id` int(11) NOT NULL DEFAULT '0',
  `vip_id` int(11) NOT NULL DEFAULT '0',
  `is_select` tinyint(3) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `listen_num` int(11) NOT NULL DEFAULT '0',
  `like_num` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `price` decimal(10,2) DEFAULT NULL,
  `answer_flag` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_quickask_answer
-- ----------------------------

-- ----------------------------
-- Table structure for fd_quickask_cate
-- ----------------------------
DROP TABLE IF EXISTS `fd_quickask_cate`;
CREATE TABLE `fd_quickask_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT NULL,
  `cate_img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_quickask_cate
-- ----------------------------
INSERT INTO `fd_quickask_cate` VALUES ('1', '前端开发', '专业 及时解答', 'ask_quickly_cate1.jpg', '1');
INSERT INTO `fd_quickask_cate` VALUES ('2', '设计或职场', '多角度策划', 'ask_quickly_cate2.jpg', '1');

-- ----------------------------
-- Table structure for fd_quickask_like
-- ----------------------------
DROP TABLE IF EXISTS `fd_quickask_like`;
CREATE TABLE `fd_quickask_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quickask_answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_quickask_like
-- ----------------------------

-- ----------------------------
-- Table structure for fd_quickask_listen
-- ----------------------------
DROP TABLE IF EXISTS `fd_quickask_listen`;
CREATE TABLE `fd_quickask_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quickask_answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_quickask_listen
-- ----------------------------

-- ----------------------------
-- Table structure for fd_reject
-- ----------------------------
DROP TABLE IF EXISTS `fd_reject`;
CREATE TABLE `fd_reject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vip_id` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_reject
-- ----------------------------
INSERT INTO `fd_reject` VALUES ('1', '37', '你不专业');

-- ----------------------------
-- Table structure for fd_reject_tovip
-- ----------------------------
DROP TABLE IF EXISTS `fd_reject_tovip`;
CREATE TABLE `fd_reject_tovip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_reject_tovip
-- ----------------------------

-- ----------------------------
-- Table structure for fd_reply
-- ----------------------------
DROP TABLE IF EXISTS `fd_reply`;
CREATE TABLE `fd_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `comment_id` int(11) NOT NULL DEFAULT '0',
  `content` text,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_reply
-- ----------------------------
INSERT INTO `fd_reply` VALUES ('1', '19', '2', '老师，想请教下，考研类专业课书籍如何学习，因为有些东西需要背诵，然后书籍比较教科书，请教这类书的学习方法，感谢。', '0', '1');
INSERT INTO `fd_reply` VALUES ('2', '18', '2', '老师，我也想请教关于专业书籍阅读的问题，谢谢！', '0', '1');
INSERT INTO `fd_reply` VALUES ('3', '1', '2', '也欢迎大家关注我的微信公众号「章鱼读书」，我会经常分享自己的读书方法、读书笔记和精选书单。', '0', '1');
INSERT INTO `fd_reply` VALUES ('4', '17', '2', '陈老师的本次小讲干货十足，针对现在人们功利阅读而引起的三个误区，提出了每个误区的药方。感触比较深的是仙丹试阅读和集邮试阅读。\r\n仙丹试阅读是因为自身焦虑而制定的不切实际的学习目的，从而导致过早放弃。这里的药方就是找到自己的问题，从自身身份出发，来确定读书方向。\r\n像我是UI设计的职业，孩子的母亲，因此会对艺术、人机交互、儿童教育、理财等方面的知识有需求。\r\n集邮试阅读目前正式我进入的一个误区，给自己计划了一年要读几十本书，为了完成计划，而囫囵吞枣一遍，到头来什么也没有记住。\r\n我个人觉得对对付这种误区，最紧要要做计划，定出每个阶段通过读书要达到自身状态都某种变化，真是应用到自己的生活中。', '0', '1');
INSERT INTO `fd_reply` VALUES ('5', '1', '2', '对于应试类的学习，我的建议是一方面紧紧抓住真题，一方面充分了解自己当前的能力，然后最经济地去查漏补缺。', '19', '1');
INSERT INTO `fd_reply` VALUES ('6', '19', '2', '谢谢老师', '1', '1');
INSERT INTO `fd_reply` VALUES ('7', '19', '5', '老师，想请教下，考研类专业课书籍如何学习，因为有些东西需要背诵，然后书籍比较教科书，请教这类书的学习方法，感谢。', '0', '1');
INSERT INTO `fd_reply` VALUES ('8', '18', '5', '老师，我也想请教关于专业书籍阅读的问题，谢谢！', '0', '1');
INSERT INTO `fd_reply` VALUES ('9', '1', '5', '也欢迎大家关注我的微信公众号「章鱼读书」，我会经常分享自己的读书方法、读书笔记和精选书单。', '0', '1');
INSERT INTO `fd_reply` VALUES ('10', '17', '5', '陈老师的本次小讲干货十足，针对现在人们功利阅读而引起的三个误区，提出了每个误区的药方。感触比较深的是仙丹试阅读和集邮试阅读。\r\n仙丹试阅读是因为自身焦虑而制定的不切实际的学习目的，从而导致过早放弃。这里的药方就是找到自己的问题，从自身身份出发，来确定读书方向。\r\n像我是UI设计的职业，孩子的母亲，因此会对艺术、人机交互、儿童教育、理财等方面的知识有需求。\r\n集邮试阅读目前正式我进入的一个误区，给自己计划了一年要读几十本书，为了完成计划，而囫囵吞枣一遍，到头来什么也没有记住。\r\n我个人觉得对对付这种误区，最紧要要做计划，定出每个阶段通过读书要达到自身状态都某种变化，真是应用到自己的生活中。', '0', '1');
INSERT INTO `fd_reply` VALUES ('11', '1', '5', '对于应试类的学习，我的建议是一方面紧紧抓住真题，一方面充分了解自己当前的能力，然后最经济地去查漏补缺。', '19', '1');
INSERT INTO `fd_reply` VALUES ('12', '19', '5', '谢谢老师', '1', '1');
INSERT INTO `fd_reply` VALUES ('13', '16', '11', '网络课程哪里可以报名？', '16', '1');
INSERT INTO `fd_reply` VALUES ('14', '4', '11', '可以关注公众号：文魁大脑', '4', '1');
INSERT INTO `fd_reply` VALUES ('15', '5', '13', '真心点赞，哈哈，看到对您有用，感觉好开心。', '0', '1');
INSERT INTO `fd_reply` VALUES ('16', '24', '13', '现在阅读起来也比以前开心，心里有那么一点觉得读书好像不是什么洪水猛兽，不是那么痛苦的事情了。而且理解起来也不会困难因为我听你的话找的都是很简单的励志类心理啊等简单的来读。', '5', '1');
INSERT INTO `fd_reply` VALUES ('17', '5', '13', '不错，赞，逐渐要升级哦，突破舒适区才能精进。', '24', '1');
INSERT INTO `fd_reply` VALUES ('18', '24', '13', '我有一个小故事想和你分享，几天前我认识的一个新词（独立完整的自尊体系）不过对于博览群书的你来说应该不算新词，巧的是今天上楼梯晒衣裤踩到一条裤子的裤腿，我妈看见了臭骂几句，以前或许我会顶回去但现在我没那么做因为独立完整的自尊体系派上用场了，我放好其他衣裤洗了踩到的那条然后全部一起晒了。（加戏:做完这些我对妈说:你真无聊不就是不小心踩到了嘛我洗一下就好了犯得着让自己生气骂我嘛）', '5', '1');
INSERT INTO `fd_reply` VALUES ('19', '6', '16', '好好学习应该没有签名版了。。', '15', '1');
INSERT INTO `fd_reply` VALUES ('20', '15', '16', '成甲哥哥 我也想要你的签名。。', '6', '1');
INSERT INTO `fd_reply` VALUES ('21', '6', '16', '成甲哥哥 我也想要你的签名。。', '15', '1');
INSERT INTO `fd_reply` VALUES ('22', '15', '16', 'l', '6', '1');
INSERT INTO `fd_reply` VALUES ('23', '8', '19', '受教！', '0', '1');
INSERT INTO `fd_reply` VALUES ('24', '9', '19', '左右脑同时开发，受教了', '0', '1');
INSERT INTO `fd_reply` VALUES ('25', '7', '20', '体力不好。锻炼去吧', '0', '1');
INSERT INTO `fd_reply` VALUES ('26', '7', '21', '很不错', '0', '1');
INSERT INTO `fd_reply` VALUES ('27', '30', '22', '第一天练习，我只能数到30个枣。', '0', '1');
INSERT INTO `fd_reply` VALUES ('28', '29', '22', '声音发抖是紧张原因导致还是其它？', '0', '1');
INSERT INTO `fd_reply` VALUES ('29', '9', '26', '1、离成功很近了一步。但依然要保持平常心。关注准备工作而非结果。既然上次问过hr，不妨再联系对方，问需要有什么准备以及注意的，在终试之前把hr变成你的帮手。2、对方不和你谈薪资不用主动问。等对方意向明确后再谈。3、如果对方愿意表达，就向他多请教下未来行业的趋势，：）', '0', '1');
INSERT INTO `fd_reply` VALUES ('30', '9', '27', '我建议直言相告，也听听他的建议，或许有你想不到的信息。', '23', '1');
INSERT INTO `fd_reply` VALUES ('31', '23', '27', '谢谢老师，能否再追问您一下。之前有问过要带我走的高层要是别人问及跳去哪儿了？可以说“不方便回答”。那面对直属领导问及的时候，是否也这么回复，还是向您说的如实说，又或者编个理由呢？', '9', '1');
INSERT INTO `fd_reply` VALUES ('32', '10', '28', '我相信，我们很多的知识产品「买买买」，实际上都是焦虑使然，实际上就是信息松鼠病，甚至会激发我们的懒癌。\r\n\r\n只有我们真正能将这个小讲中「简单」的方法坚持做，重复做，简单做，落实到行动的改变，我觉得彼此的时间和金钱花费才是有意义的。\r\n\r\n知识本身不是力量，在做事中学知识并将自己内化的知识运用起来，用起来的知识，才是有力量的。\r\n\r\n所以，这个小讲有什么不同？凡是购买此小讲的朋友，加我个人微信「Howie_Serious」，然后发送小讲购买截图，我会拉一个微信群「小能熊番茄小队」，一起打卡！会有小助手监督！持续3天不打卡，提醒后不改正会被踢出，只有交总结报告才能回归。\r\n\r\n期待各位的加入~', '4', '1');
INSERT INTO `fd_reply` VALUES ('33', '4', '28', '.', '10', '1');
INSERT INTO `fd_reply` VALUES ('34', '10', '29', '我也是在带娃是更好地反观自己与时间的关系。上帝创造的都是好的，别让孩子在我们手里失去了专注、耐心、对知识的好奇。一起好好陪伴孩子成长，用自己的成长来做示范，因为行动才有说服力。共勉', '8', '1');
INSERT INTO `fd_reply` VALUES ('35', '8', '29', '是的，孩子天生具有专注力，他们的好奇心和成就感也需要家长去呵护和呼应。设定番茄，让亲子活动也体味一种无杂念的沉浸，高质量的陪伴大致如此吧', '10', '1');
INSERT INTO `fd_reply` VALUES ('36', '12', '35', '感谢你订阅我的小讲。\r\n\r\n希望它可以帮你更好的打理财富，过上有钱有闲的生活。有任何问题，也欢迎给我留言。学习愉快，加油', '0', '1');
INSERT INTO `fd_reply` VALUES ('37', '12', '36', '感谢你订阅我的小讲。\r\n\r\n希望这个系列小讲能帮你更科学，更合理地打理自己的财富。有任何问题，欢迎向我提问。加油～', '0', '1');
INSERT INTO `fd_reply` VALUES ('38', '1', '46', '公子，沪深300和中证500有好多家公司都有，具体也可以通过基金比较或者筛选器来选择吗？', '1', '1');
INSERT INTO `fd_reply` VALUES ('39', '16', '46', '是的啊，筛选器就是帮助你在同类型基金中找到合适的。', '16', '1');
INSERT INTO `fd_reply` VALUES ('40', '16', '47', '这个交易基金的过程中，你犯了几个错误：第一受朋友推荐而买基金，但自己没有了解过基金本身，这会导致你不能判断出自己投资的风险；第二在股市大热的时候进场，任何基金都是昂贵的，也就是说无论你怎么买都买贵了，那么未来亏损的概率就大；第三选择一次性投入，就导致没有后续资金帮你拉低成本。你现在要做的事情是把这三个错误纠正过来。', '0', '1');
INSERT INTO `fd_reply` VALUES ('41', '16', '47', '沪深300和中证500早目前来看，坚持定投是最合适的方式，尤其是大盘估值并不好，用定投的方式将你的亏损进一步减少。', '0', '1');
INSERT INTO `fd_reply` VALUES ('42', '16', '48', '第一，你吧基金跟银行理财比不合适，这根本是两码事，长期看，基金的盈利面要比银行理财高很多。第二，收割盈利是自己的决定，比如你胆子小，也不会估值，也不知道如何判断大趋势，那么有20%的盈利觉得落袋为安为好，那就赎回盈利的部分，定投继续。但如果你懂得做投资的大趋势，就是在股市牛市跑起来的时候再去赎回，那么盈利肯定要比这个20%高很多，但与此同时，这个过程会有很多波动和回调，这需要有强大的内心支撑。所以，高回报都要付出一个长期坚持的代价的。', '2', '1');
INSERT INTO `fd_reply` VALUES ('43', '2', '48', '请问，基金定投需要对该只基金重仓股票研究到什么程度呢？假如说必须要深入研究，那我岂不是还不如直接买股票。', '16', '1');
INSERT INTO `fd_reply` VALUES ('44', '17', '49', '每天都想吃甜品，完全抑制不住呀，咋办', '3', '1');
INSERT INTO `fd_reply` VALUES ('45', '3', '49', '虽然说身体有积累脂肪的趋势，可是我每天摄入的能量不是应该刚好只够我每日的消耗吗？还是说，我只是以为自己没多吃。。。。。', '17', '1');
INSERT INTO `fd_reply` VALUES ('46', '17', '50', '这个问题我在分答里回答好几遍啦哈哈！每个人都有发表自己看法的权利，百家争鸣是好事，但前提是我们能区分书中的证据是否靠谱valid。谷物大脑里的有趣观点再独特，也只是一家之言，某个个体科学家的看法，它还不够资格、不配上升到标准指南级别指导普罗大众。有趣的角度真的挺好，但恐怕也只不过是个角度而已。指南级别才是很多很多的科学家共同研究讨论决定的，营养师或者医师的个人经验个人观点，和集思广益相比，又何足挂齿呢^_^', '0', '1');
INSERT INTO `fd_reply` VALUES ('47', '4', '50', '不吃主食，人类社会没有那么多的资源被分配。主食满足了人类所需能量消耗，也在一定程度上平衡和其它稀缺资源冲突。', '0', '1');
INSERT INTO `fd_reply` VALUES ('48', '17', '51', '第一，考虑代替，比如用水果代替果味甜点，用稠酸奶或者冻酸奶代替奶味甜点等等；第二，如果实在忍不住了，就吃吧！但每次支持一小份，好好品味美味，配上一杯茶/咖啡，慢慢吃一块，会比狼吞虎咽更容易停下来。第三，跟朋友分享吧！大家一起吃，卡路里一起分担，脂肪更淡了，友谊却更浓了呢！^_^', '0', '1');
INSERT INTO `fd_reply` VALUES ('49', '5', '51', '主要还是靠不吃', '0', '1');
INSERT INTO `fd_reply` VALUES ('50', '6', '51', '卡路里一起分担真的好吗哈哈哈', '0', '1');
INSERT INTO `fd_reply` VALUES ('51', '17', '52', '每天都想吃甜品，完全抑制不住呀，咋办', '0', '1');
INSERT INTO `fd_reply` VALUES ('52', '3', '52', '虽然说身体有积累脂肪的趋势，可是我每天摄入的能量不是应该刚好只够我每日的消耗吗？还是说，我只是以为自己没多吃。。。。。', '0', '1');
INSERT INTO `fd_reply` VALUES ('53', '17', '53', '这个问题我在分答里回答好几遍啦哈哈！每个人都有发表自己看法的权利，百家争鸣是好事，但前提是我们能区分书中的证据是否靠谱valid。谷物大脑里的有趣观点再独特，也只是一家之言，某个个体科学家的看法，它还不够资格、不配上升到标准指南级别指导普罗大众。有趣的角度真的挺好，但恐怕也只不过是个角度而已。指南级别才是很多很多的科学家共同研究讨论决定的，营养师或者医师的个人经验个人观点，和集思广益相比，又何足挂齿呢^_^', '0', '1');
INSERT INTO `fd_reply` VALUES ('54', '4', '53', '不吃主食，人类社会没有那么多的资源被分配。主食满足了人类所需能量消耗，也在一定程度上平衡和其它稀缺资源冲突。', '0', '1');
INSERT INTO `fd_reply` VALUES ('55', '17', '54', '第一，考虑代替，比如用水果代替果味甜点，用稠酸奶或者冻酸奶代替奶味甜点等等；第二，如果实在忍不住了，就吃吧！但每次支持一小份，好好品味美味，配上一杯茶/咖啡，慢慢吃一块，会比狼吞虎咽更容易停下来。第三，跟朋友分享吧！大家一起吃，卡路里一起分担，脂肪更淡了，友谊却更浓了呢！^_^', '0', '1');
INSERT INTO `fd_reply` VALUES ('56', '5', '54', '主要还是靠不吃', '0', '1');
INSERT INTO `fd_reply` VALUES ('57', '6', '54', '卡路里一起分担真的好吗哈哈哈', '0', '1');
INSERT INTO `fd_reply` VALUES ('58', '7', '56', '同问', '0', '1');
INSERT INTO `fd_reply` VALUES ('59', '8', '56', '什么是自由？你的心属于自己，世界上没有任何东西能控制你时，才叫自由。注意，这个自由，不是金钱的自由，也不是规则给你的自由。规则永远不可能让你自由。因为，人的欲望永无止境。你会随着自己的欲望，追求不同的游戏规则，永远都没有尽头。', '0', '1');
INSERT INTO `fd_reply` VALUES ('60', '22', '57', '讨好者是不是帮别人做了事情才开心，拒绝别人就难受', '0', '1');
INSERT INTO `fd_reply` VALUES ('61', '22', '57', '处处照顾别人的感受，思想不独立', '0', '1');
INSERT INTO `fd_reply` VALUES ('62', '9', '59', '对', '0', '1');
INSERT INTO `fd_reply` VALUES ('63', '10', '62', '虽然是小小的女听众，我说说我的看法吧。安全感是个很玄乎的东西，就像老师说的自由一样，每个人的定义都不一样。可能是你陪她的时间少，让她没有安全感，也可能是你经济基础不够扎实让她没有安全感，也可能你的某些性格让她没办法完全信任你等等，你如果真想满足她要的安全感，你得问你女朋友，把安全感这个需求具体化，你才可能考虑能不能满足她。如果她自己都不能具体的表达出来，那你是很难满足的，不过有足够耐心也可以做到诱导她去想清楚，去表达需求的，个人拙见，祝好啦～', '0', '1');
INSERT INTO `fd_reply` VALUES ('64', '55', '100', '你是狗吧！', '0', '1');
INSERT INTO `fd_reply` VALUES ('65', '55', '107', '333', '0', '1');

-- ----------------------------
-- Table structure for fd_shangcheng
-- ----------------------------
DROP TABLE IF EXISTS `fd_shangcheng`;
CREATE TABLE `fd_shangcheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crea_name` varchar(255) DEFAULT NULL,
  `crea_img1` varchar(255) DEFAULT NULL,
  `crea_img2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_shangcheng
-- ----------------------------
INSERT INTO `fd_shangcheng` VALUES ('1', '计算', '/uploads/xiaotupian/20180403\\579e95f484fd691085c085993e5fb716.svg', '/uploads/xiaotupian/20180403\\465b52acc84d91716dc0c95ee1f2b229.svg');
INSERT INTO `fd_shangcheng` VALUES ('2', '项目', '/uploads/xiaotupian/20180403\\efbeec65b7d5710ac430578f0e2c9325.svg', '/uploads/xiaotupian/20180403\\acd6c5d4e2b8d4b0e1cf2faf399b3121.svg');
INSERT INTO `fd_shangcheng` VALUES ('3', '数据库', '/uploads/xiaotupian/20180403\\d731680f173d90b188a4a729d821556d.svg', '/uploads/xiaotupian/20180403\\6e1b855da982a7f7fe6666ce6d9cbc7f.svg');
INSERT INTO `fd_shangcheng` VALUES ('4', '网络', '/uploads/xiaotupian/20180403\\6a5a22825368be7e8ca87a89bb7bf7a4.svg', '/uploads/xiaotupian/20180403\\6f7763ce506f08b003f6a9f1adc98f7a.svg');
INSERT INTO `fd_shangcheng` VALUES ('5', '互联网中间件', '/uploads/xiaotupian/20180403\\f2aad0379645a768faa2e257dceb0d7b.svg', '/uploads/xiaotupian/20180403\\392edfb689223887e881dd03b3dcb99e.svg');
INSERT INTO `fd_shangcheng` VALUES ('6', '域名与网站', '/uploads/xiaotupian/20180403\\bdca6000eec5eee67b95a23294724700.svg', '/uploads/xiaotupian/20180403\\060260ecb5be4429c8f3bf9eebf985b7.svg');
INSERT INTO `fd_shangcheng` VALUES ('7', '安全', '/uploads/xiaotupian/20180403\\c42ac325d87e8c2897aabc1ac2ea2be6.svg', '/uploads/xiaotupian/20180403\\5a4bff8da9ca07e37a7d431ba679b21c.svg');
INSERT INTO `fd_shangcheng` VALUES ('8', '视频', '/uploads/xiaotupian/20180403\\fcacbb2d229f9f83a8f00869cdef71de.svg', '/uploads/xiaotupian/20180403\\3a685fba200c57532535340a7a29f628.svg');
INSERT INTO `fd_shangcheng` VALUES ('9', '大数据', '/uploads/xiaotupian/20180403\\1f76c323caa7b0a0f9b46c77d820cad1.svg', '/uploads/xiaotupian/20180403\\e35f2e48e5134175f5ed587c043ee87f.svg');

-- ----------------------------
-- Table structure for fd_shangcheng_chanpin
-- ----------------------------
DROP TABLE IF EXISTS `fd_shangcheng_chanpin`;
CREATE TABLE `fd_shangcheng_chanpin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cread_id` int(11) DEFAULT NULL,
  `chanpin_name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `chanpin_info` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_shangcheng_chanpin
-- ----------------------------
INSERT INTO `fd_shangcheng_chanpin` VALUES ('1', '1', '云服务器', '安全稳定，高弹性的计算服务', '云服务器（Cloud Virtual Machine，CVM）为您提供安全可靠的弹性计算服务。 只需几分钟，您就可以在云端获取和启用 CVM，来实现您的计算需求。随着业务需求的变化，您可以实时扩展或缩减计算资源。 CVM 支持按实际使用的资源计费，可以为您节约计算成本。使用 CVM 可以极大降低您的软硬件采购成本，简化 IT 运维工');
INSERT INTO `fd_shangcheng_chanpin` VALUES ('12', '1', 'GPU与服务器', '硬件加速计算服务', 'GPU 云服务器（GPU Cloud Computing）是基于 GPU 应用的计算服务，具有实时高速的并行计算和浮点计算能力，适应用于 3D 图形应用程序、视频解码、深度学习、科学计算等应用场景。我们提供和标准云服务器一致的管理方式，有效解放您的计算压力，提升产品的计算处理效率与竞争力。');
INSERT INTO `fd_shangcheng_chanpin` VALUES ('13', '2', '老人社区', 'Vue+Mysql', '66666666666666');

-- ----------------------------
-- Table structure for fd_shangcheng_shangpin
-- ----------------------------
DROP TABLE IF EXISTS `fd_shangcheng_shangpin`;
CREATE TABLE `fd_shangcheng_shangpin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `shangpin_name` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `shangpin_info` text,
  `shangpin_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_shangcheng_shangpin
-- ----------------------------
INSERT INTO `fd_shangcheng_shangpin` VALUES ('1', '1', '电商', 'www.tmall.com', '很好', '1524876973467989.jpeg');

-- ----------------------------
-- Table structure for fd_slider
-- ----------------------------
DROP TABLE IF EXISTS `fd_slider`;
CREATE TABLE `fd_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_img` varchar(255) DEFAULT NULL,
  `smalltalk_id` int(11) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_slider
-- ----------------------------
INSERT INTO `fd_slider` VALUES ('1', 'slider1.jpg', '1', '1');
INSERT INTO `fd_slider` VALUES ('2', 'slider2.png', '2', '1');
INSERT INTO `fd_slider` VALUES ('3', 'slider3.jpg', '3', '1');

-- ----------------------------
-- Table structure for fd_smalltalk
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk`;
CREATE TABLE `fd_smalltalk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smalltalk_cate_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `vip_id` int(11) NOT NULL DEFAULT '0',
  `smalltalk_img` varchar(255) DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL DEFAULT '1',
  `summary` text,
  `special_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `join_num` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `ke_type` char(50) DEFAULT NULL COMMENT 'hot:热门;best:推荐;new:新上',
  `preview_video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk
-- ----------------------------
INSERT INTO `fd_smalltalk` VALUES ('1', '1', 'Vue由浅入深', '2', 'static/api/img/152326686631178.jpeg', '1', '1', 'Vue从入门到基础，由浅入深....', '0', '1', '0', '0', '1', 'http://7xkx5a.com1.z0.glb.clouddn.com/node_mh.mp4');
INSERT INTO `fd_smalltalk` VALUES ('2', '1', 'js', '1', '/static/api/img/1523270824881627.jpeg', '1', '1', 'dds', '0', '1', '0', '0', '3', 'http://7xkx5a.com1.z0.glb.clouddn.com/node_mh.mp4');

-- ----------------------------
-- Table structure for fd_smalltalk_audio
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk_audio`;
CREATE TABLE `fd_smalltalk_audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `audio_name` varchar(255) DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `smalltalk_content_id` int(11) NOT NULL DEFAULT '0',
  `shiting` tinyint(1) NOT NULL DEFAULT '0',
  `like_num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk_audio
-- ----------------------------

-- ----------------------------
-- Table structure for fd_smalltalk_audio_listen
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk_audio_listen`;
CREATE TABLE `fd_smalltalk_audio_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smalltalk_audio_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk_audio_listen
-- ----------------------------

-- ----------------------------
-- Table structure for fd_smalltalk_buy
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk_buy`;
CREATE TABLE `fd_smalltalk_buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smalltalk_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk_buy
-- ----------------------------

-- ----------------------------
-- Table structure for fd_smalltalk_cate
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk_cate`;
CREATE TABLE `fd_smalltalk_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk_cate
-- ----------------------------
INSERT INTO `fd_smalltalk_cate` VALUES ('1', '前端', '1');
INSERT INTO `fd_smalltalk_cate` VALUES ('2', '设计', '1');
INSERT INTO `fd_smalltalk_cate` VALUES ('3', '后台', '1');
INSERT INTO `fd_smalltalk_cate` VALUES ('4', 'AI', '1');

-- ----------------------------
-- Table structure for fd_smalltalk_content
-- ----------------------------
DROP TABLE IF EXISTS `fd_smalltalk_content`;
CREATE TABLE `fd_smalltalk_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `smalltalk_id` int(11) NOT NULL DEFAULT '0',
  `ke_content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_smalltalk_content
-- ----------------------------
INSERT INTO `fd_smalltalk_content` VALUES ('1', '什么是MVVM？', '1', null);
INSERT INTO `fd_smalltalk_content` VALUES ('2', '2323', '2', null);

-- ----------------------------
-- Table structure for fd_special
-- ----------------------------
DROP TABLE IF EXISTS `fd_special`;
CREATE TABLE `fd_special` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `special_img` varchar(255) DEFAULT NULL,
  `vip_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_special
-- ----------------------------
INSERT INTO `fd_special` VALUES ('1', '理财实操课：手把手教你赚钱每一步', '简七主讲', 'special1.jpg', '2');
INSERT INTO `fd_special` VALUES ('2', '十年十倍，你也能用的量化选股方法', '金伟民（持有封基）主讲', 'special4.jpg', '3');
INSERT INTO `fd_special` VALUES ('3', '学点沟通心理，收获更好的人际关系', '简里里主讲', 'special2.jpg', '2');
INSERT INTO `fd_special` VALUES ('4', '零基础理财攻略：从0存款到100万', '三公子主讲', 'special3.jpg', '4');
INSERT INTO `fd_special` VALUES ('5', '轻松吃出好身材', '仰望尾迹云主讲', 'special3.jpg', '5');
INSERT INTO `fd_special` VALUES ('6', '三招，买到高升值潜力房产', '孙不熟，孟祥远，王佳', 'special3.jpg', '6');
INSERT INTO `fd_special` VALUES ('7', '未来一年，实现月薪翻倍', '温言，春雨', 'special3.jpg', '7');
INSERT INTO `fd_special` VALUES ('8', '守住钱，女性婚姻更幸福', '于琦主讲', 'special3.jpg', '8');
INSERT INTO `fd_special` VALUES ('9', '职场高效读书法', '朱晓华主讲', 'special3.jpg', '9');
INSERT INTO `fd_special` VALUES ('10', '男生脱单秘籍：解放你的左右手', '成真，傅踢踢', 'special3.jpg', '10');
INSERT INTO `fd_special` VALUES ('11', '女生真爱攻略：找到你的真命天子', '陆琪，寇乃馨', 'special3.jpg', '11');
INSERT INTO `fd_special` VALUES ('12', '大公司如何了解用户', '王泽蕴主讲', 'special3.jpg', '12');
INSERT INTO `fd_special` VALUES ('13', '4步练出好声音', '李蕾主讲', 'special3.jpg', '13');
INSERT INTO `fd_special` VALUES ('14', '职场进阶沟通术', 'Major/老梅，李忠秋', 'special3.jpg', '14');

-- ----------------------------
-- Table structure for fd_tovip
-- ----------------------------
DROP TABLE IF EXISTS `fd_tovip`;
CREATE TABLE `fd_tovip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `real_name` varchar(255) DEFAULT NULL,
  `identity` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '3.14',
  `head_img` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `vip_cate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_tovip
-- ----------------------------
INSERT INTO `fd_tovip` VALUES ('4', '54', '分答用户', '狗仔', '八卦', '3.14', null, null, '1');
INSERT INTO `fd_tovip` VALUES ('6', '55', '分答用户1', '演员小李子', '爱演', '3.14', '1507794407675941.jpeg', null, '2');
INSERT INTO `fd_tovip` VALUES ('9', '57', '迪丽热', '演员', '我是胖迪', '3.14', '1508073668803649.jpeg', null, '1');
INSERT INTO `fd_tovip` VALUES ('11', '58', '杨幂', '段子手', '你是狗吧', '3.14', '1508673220171243.jpeg', null, '1');
INSERT INTO `fd_tovip` VALUES ('12', '56', '广东杨幂', '搞笑', '你是狗吧', '3.14', '1508676701135502.jpeg', null, '1');
INSERT INTO `fd_tovip` VALUES ('13', '59', 'haha', 'dfdf', 'dfdf', '3.14', 'headbg.png', null, '1');
INSERT INTO `fd_tovip` VALUES ('14', '60', '范爷', '演员', '吹水', '3.14', '150959577674594.jpeg', null, '1');
INSERT INTO `fd_tovip` VALUES ('15', '63', '小驴汤米', '资深专家', '11111', '1.00', 'headbg.png', null, '4');
INSERT INTO `fd_tovip` VALUES ('16', '1', 'Smith', '全栈经理', '我很温柔', '1.00', '152326529934864.png', null, '2');
INSERT INTO `fd_tovip` VALUES ('17', '2', '一元用户', '前端经理', '很牛！', '1.00', 'headbg.png', null, '1');
INSERT INTO `fd_tovip` VALUES ('18', '3', '大牛', '123', '123', '1.00', 'headbg.png', null, '5');

-- ----------------------------
-- Table structure for fd_tutor_details_like
-- ----------------------------
DROP TABLE IF EXISTS `fd_tutor_details_like`;
CREATE TABLE `fd_tutor_details_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `tagid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_tutor_details_like
-- ----------------------------
INSERT INTO `fd_tutor_details_like` VALUES ('1', '59', '10');
INSERT INTO `fd_tutor_details_like` VALUES ('2', '59', '5');
INSERT INTO `fd_tutor_details_like` VALUES ('3', '59', '5');
INSERT INTO `fd_tutor_details_like` VALUES ('4', '59', '11');
INSERT INTO `fd_tutor_details_like` VALUES ('5', '63', '12');
INSERT INTO `fd_tutor_details_like` VALUES ('6', '59', '2');
INSERT INTO `fd_tutor_details_like` VALUES ('7', '59', '13');
INSERT INTO `fd_tutor_details_like` VALUES ('8', '59', '3');
INSERT INTO `fd_tutor_details_like` VALUES ('9', '59', '9');
INSERT INTO `fd_tutor_details_like` VALUES ('10', '59', '6');
INSERT INTO `fd_tutor_details_like` VALUES ('11', '59', '14');
INSERT INTO `fd_tutor_details_like` VALUES ('12', '63', '10');
INSERT INTO `fd_tutor_details_like` VALUES ('13', '63', '11');
INSERT INTO `fd_tutor_details_like` VALUES ('14', '63', '3');
INSERT INTO `fd_tutor_details_like` VALUES ('15', '63', '5');
INSERT INTO `fd_tutor_details_like` VALUES ('16', '63', '2');
INSERT INTO `fd_tutor_details_like` VALUES ('17', '63', '14');
INSERT INTO `fd_tutor_details_like` VALUES ('18', '63', '9');
INSERT INTO `fd_tutor_details_like` VALUES ('19', '63', '6');
INSERT INTO `fd_tutor_details_like` VALUES ('20', '63', '13');
INSERT INTO `fd_tutor_details_like` VALUES ('21', '59', '15');
INSERT INTO `fd_tutor_details_like` VALUES ('22', '59', '16');
INSERT INTO `fd_tutor_details_like` VALUES ('23', '59', '17');
INSERT INTO `fd_tutor_details_like` VALUES ('24', '6', '18');
INSERT INTO `fd_tutor_details_like` VALUES ('25', '6', '19');
INSERT INTO `fd_tutor_details_like` VALUES ('26', '6', '20');
INSERT INTO `fd_tutor_details_like` VALUES ('27', '1', '18');
INSERT INTO `fd_tutor_details_like` VALUES ('28', '1', '19');
INSERT INTO `fd_tutor_details_like` VALUES ('29', '1', '20');

-- ----------------------------
-- Table structure for fd_tutor_details_tags
-- ----------------------------
DROP TABLE IF EXISTS `fd_tutor_details_tags`;
CREATE TABLE `fd_tutor_details_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `zan` int(13) DEFAULT '1',
  `tags` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_tutor_details_tags
-- ----------------------------
INSERT INTO `fd_tutor_details_tags` VALUES ('1', null, null, '1', '大神1212121212');
INSERT INTO `fd_tutor_details_tags` VALUES ('2', '56', '43', '2', '广告歌');
INSERT INTO `fd_tutor_details_tags` VALUES ('3', '56', '43', '2', '广告歌');
INSERT INTO `fd_tutor_details_tags` VALUES ('4', '56', '39', '1', '广告歌');
INSERT INTO `fd_tutor_details_tags` VALUES ('5', '56', '43', '2', '啊啊啊');
INSERT INTO `fd_tutor_details_tags` VALUES ('7', '59', '42', '1', '');
INSERT INTO `fd_tutor_details_tags` VALUES ('8', '59', '42', '1', '广告歌');
INSERT INTO `fd_tutor_details_tags` VALUES ('17', '59', '3', '1', '4444');
INSERT INTO `fd_tutor_details_tags` VALUES ('16', '59', '3', '1', '333');
INSERT INTO `fd_tutor_details_tags` VALUES ('15', '59', '3', '1', 'aaaa');
INSERT INTO `fd_tutor_details_tags` VALUES ('12', '63', '3', '1', 'ccc');
INSERT INTO `fd_tutor_details_tags` VALUES ('13', '59', '43', '2', '222');
INSERT INTO `fd_tutor_details_tags` VALUES ('14', '59', '43', '2', '2222');
INSERT INTO `fd_tutor_details_tags` VALUES ('18', '6', '1', '2', '专业');
INSERT INTO `fd_tutor_details_tags` VALUES ('20', '6', '1', '2', '有进步');

-- ----------------------------
-- Table structure for fd_type
-- ----------------------------
DROP TABLE IF EXISTS `fd_type`;
CREATE TABLE `fd_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_type` varchar(255) DEFAULT NULL,
  `re` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_type
-- ----------------------------
INSERT INTO `fd_type` VALUES ('1', '最新', null);
INSERT INTO `fd_type` VALUES ('2', '热门', null);
INSERT INTO `fd_type` VALUES ('3', '推荐', null);

-- ----------------------------
-- Table structure for fd_user
-- ----------------------------
DROP TABLE IF EXISTS `fd_user`;
CREATE TABLE `fd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT '一元用户',
  `phone` varchar(255) DEFAULT '',
  `head_img` varchar(255) DEFAULT NULL,
  `total_income` decimal(11,2) DEFAULT '0.00',
  `total_profit` decimal(11,2) DEFAULT '0.00',
  `create_time` varchar(255) DEFAULT '0',
  `status` tinyint(3) DEFAULT '1',
  `xingming` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `zhuanye` varchar(255) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `banji_id` int(11) DEFAULT NULL,
  `is_pay` tinyint(1) DEFAULT '0' COMMENT '0:未支付;1:打算支付;2:已支付',
  `out_trade_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_user
-- ----------------------------
INSERT INTO `fd_user` VALUES ('1', 'Smith', '13366667777', '152326529934864.png', '0.09', '0.09', '1525677929', '3', '小蒲', '长沙理工', '大一', '计算机', null, '2', '1', '1452407341525343542');
INSERT INTO `fd_user` VALUES ('2', '一元用户', '13388889999', 'headbg.png', '0.00', '0.00', '1525677929', '3', '游经理', null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('3', '大牛', '13366669999', 'headbg.png', '0.00', '0.00', '1525677929', '3', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('4', '一元用户', '13399996666', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('5', '一元用户', '13366666666', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('6', '一元用户', '13377778888', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('7', '一元用户', '13399999999', 'headbg.png', '0.03', '0.03', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('8', '一元用户', '13355556665', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('9', '一元用户', '13388888888', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('10', '一元用户', '13376767676', 'headbg.png', '0.01', '0.01', '1525677929', '1', null, null, null, null, null, '2', '0', null);
INSERT INTO `fd_user` VALUES ('11', '一元用户', '13354541212', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, '2', '2', null);
INSERT INTO `fd_user` VALUES ('12', '一元用户', '13366678999', 'headbg.png', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '1', '12902712231525336143');
INSERT INTO `fd_user` VALUES ('13', '一元用户4', '13355554444', '1525678028447052.jpeg', '0.00', '0.00', '1525677929', '1', null, null, null, null, null, null, '0', null);
INSERT INTO `fd_user` VALUES ('14', '一元用户sss', '13343434334', '1525683431579503.jpeg', '0.00', '0.00', '1525678053', '1', 's', null, null, null, null, '2', '1', '10565309441525774115');

-- ----------------------------
-- Table structure for fd_user_credit_log
-- ----------------------------
DROP TABLE IF EXISTS `fd_user_credit_log`;
CREATE TABLE `fd_user_credit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `credit` int(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `do_type` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_user_credit_log
-- ----------------------------
INSERT INTO `fd_user_credit_log` VALUES ('1', '10', '1523851319', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('2', '10', '1524016375', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('3', '10', '1524038899', '7', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('4', '10', '1524120140', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('5', '10', '1524124431', '8', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('6', '3', '1524127159', '8', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('7', '2', '1524209573', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('8', '1', '1524209581', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('9', '2', '1524209628', '9', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('10', '1', '1524210801', '9', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('11', '2', '1524448787', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('12', '3', '1524448796', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('13', '1', '1524452353', '1', 'daka');
INSERT INTO `fd_user_credit_log` VALUES ('14', '2', '1524535813', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('15', '3', '1524535819', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('16', '2', '1524559456', '7', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('17', '2', '1524621833', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('18', '2', '1524621840', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('19', '2', '1524622676', '10', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('20', '1', '1524622698', '10', 'daka');
INSERT INTO `fd_user_credit_log` VALUES ('21', '2', '1524711833', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('22', '1', '1524711842', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('23', '2', '1524884524', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('24', '3', '1524884537', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('25', '2', '1524901155', '11', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('26', '2', '1525231918', '12', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('27', '2', '1525336122', '12', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('28', '2', '1525340683', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('29', '2', '1525400662', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('30', '1', '1525400669', '1', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('31', '2', '1525677526', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('32', '2', '1525677930', '13', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('33', '1', '1525677964', '13', 'choujiang');
INSERT INTO `fd_user_credit_log` VALUES ('34', '2', '1525678053', '14', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('35', '2', '1525774086', '14', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('36', '2', '1525774219', '1', 'sign');
INSERT INTO `fd_user_credit_log` VALUES ('37', '2', '1526267791', '1', 'sign');

-- ----------------------------
-- Table structure for fd_user_jidi
-- ----------------------------
DROP TABLE IF EXISTS `fd_user_jidi`;
CREATE TABLE `fd_user_jidi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `xm` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `is_pay` tinyint(1) DEFAULT '0' COMMENT '0:未支付;1:打算支付;2:已支付',
  `money` int(11) DEFAULT '800',
  `school` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `out_trade_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_user_jidi
-- ----------------------------
INSERT INTO `fd_user_jidi` VALUES ('4', '1', '54', '1525343456', '0', '800', 'ww', '', null);

-- ----------------------------
-- Table structure for fd_vip
-- ----------------------------
DROP TABLE IF EXISTS `fd_vip`;
CREATE TABLE `fd_vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `real_name` varchar(255) DEFAULT NULL,
  `identity` varchar(255) DEFAULT NULL,
  `price` decimal(11,2) NOT NULL DEFAULT '10.00',
  `become_time` varchar(255) NOT NULL DEFAULT '0',
  `is_real` tinyint(3) NOT NULL DEFAULT '0',
  `sort` tinyint(3) NOT NULL DEFAULT '1',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `vip_cate_id` int(11) NOT NULL,
  `listen_num` int(11) NOT NULL DEFAULT '0',
  `introduce` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `head_img` varchar(255) DEFAULT NULL,
  `answer_num` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_vip
-- ----------------------------
INSERT INTO `fd_vip` VALUES ('1', 'Smith', '全栈经理s2', '1.00', '1523265419', '2', '1', '1', '2', '0', '我很温柔', '1', '1524477949181636.jpeg', '0');
INSERT INTO `fd_vip` VALUES ('2', '游经理', '前端经理', '1.00', '1523266454', '2', '1', '1', '1', '0', '很牛！', '2', 'headbg.png', '0');
INSERT INTO `fd_vip` VALUES ('3', '大牛', '123', '1.00', '1523350468', '0', '1', '1', '5', '0', '123', '3', 'headbg.png', '0');

-- ----------------------------
-- Table structure for fd_vip_cate
-- ----------------------------
DROP TABLE IF EXISTS `fd_vip_cate`;
CREATE TABLE `fd_vip_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_vip_cate
-- ----------------------------
INSERT INTO `fd_vip_cate` VALUES ('1', '前端', '1');
INSERT INTO `fd_vip_cate` VALUES ('2', '后台', '1');
INSERT INTO `fd_vip_cate` VALUES ('4', 'AI', '1');
INSERT INTO `fd_vip_cate` VALUES ('5', '设计', '1');

-- ----------------------------
-- Table structure for fd_vip_listen
-- ----------------------------
DROP TABLE IF EXISTS `fd_vip_listen`;
CREATE TABLE `fd_vip_listen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vip_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fd_vip_listen
-- ----------------------------
