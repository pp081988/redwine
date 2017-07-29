/*
SQLyog Professional v12.08 (32 bit)
MySQL - 10.1.19-MariaDB : Database - redwine
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin_forum_food_option` */

DROP TABLE IF EXISTS `admin_forum_food_option`;

CREATE TABLE `admin_forum_food_option` (
  `id` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `open` char(5) DEFAULT NULL,
  `remark` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin_forum_food_option` */

insert  into `admin_forum_food_option`(`id`,`pId`,`name`,`open`,`remark`) values (1,0,'各國菜式','true',NULL),(11,1,'中國菜','true',''),(21,1,'法國菜','true',''),(111,11,'甜點','true',''),(112,11,'麵點','true',''),(211,21,'甜品','true',''),(1121,112,'小籠包','true',''),(1122,112,'叉燒包','true',''),(11211,1121,'蒸制','true',''),(11221,1122,'蒸的','true',''),(112111,11211,'又甜又咸','true',''),(112211,11221,'咸的','true','');

/*Table structure for table `admin_product_category` */

DROP TABLE IF EXISTS `admin_product_category`;

CREATE TABLE `admin_product_category` (
  `id` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `open` char(5) DEFAULT NULL,
  `remark` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_category` */

insert  into `admin_product_category`(`id`,`pId`,`name`,`open`,`remark`) values (1,0,'產品分類','true',NULL),(11,1,'酒類','true',NULL),(21,1,'食物','true',NULL),(111,11,'紅酒',NULL,''),(112,11,'白酒',NULL,''),(113,11,'甜酒',NULL,''),(114,11,'啤酒',NULL,''),(115,11,'威士忌',NULL,''),(116,11,'白蘭地',NULL,''),(117,11,'清酒',NULL,''),(211,21,'牛','true',''),(2111,211,'牛腿',NULL,''),(2112,211,'菲力',NULL,''),(2113,211,'牛头','true','');

/*Table structure for table `admin_product_food` */

DROP TABLE IF EXISTS `admin_product_food`;

CREATE TABLE `admin_product_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL COMMENT '菜品名',
  `origin` char(30) DEFAULT NULL COMMENT '国家(产地)',
  `type` char(30) DEFAULT NULL COMMENT '菜式',
  `method` char(150) DEFAULT NULL COMMENT '煮法',
  `taste` char(50) DEFAULT NULL COMMENT '味道',
  `keyword` char(100) DEFAULT NULL COMMENT '关键字',
  `images` char(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category_pId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_food` */

insert  into `admin_product_food`(`id`,`name`,`origin`,`type`,`method`,`taste`,`keyword`,`images`,`category_id`,`category_pId`) values (2,'孜然牛腿排','中国',NULL,NULL,NULL,'孜然,牛腿',',1501308621231.jpg,1501308621352.jpg,1501308621572.jpg',2111,211),(3,'菲力牛排','西欧','牛排','煎制','好吃','菲力,牛排',',1501309191786.jpg,1501309191312.jpg',2112,211);

/*Table structure for table `admin_product_wine` */

DROP TABLE IF EXISTS `admin_product_wine`;

CREATE TABLE `admin_product_wine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL COMMENT '酒名',
  `origin` char(50) DEFAULT NULL COMMENT '产地',
  `winery` char(50) DEFAULT NULL COMMENT '酒庄',
  `winery_site` char(50) DEFAULT NULL COMMENT '酒庄网址',
  `grape` char(30) DEFAULT NULL COMMENT '葡萄',
  `year` char(10) DEFAULT NULL COMMENT '年份',
  `best_year` char(10) DEFAULT NULL COMMENT '最佳年份',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `food` int(11) DEFAULT NULL COMMENT '配对食物',
  `supplier` char(50) DEFAULT NULL COMMENT '供应商',
  `supplier_site` char(50) DEFAULT NULL COMMENT '供应商网址',
  `keyword` char(100) DEFAULT NULL COMMENT '关键字',
  `images` char(255) DEFAULT NULL COMMENT '图片',
  `category_id` int(11) DEFAULT NULL COMMENT '分类id',
  `category_pId` int(11) DEFAULT NULL COMMENT '分类父id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_wine` */

insert  into `admin_product_wine`(`id`,`name`,`origin`,`winery`,`winery_site`,`grape`,`year`,`best_year`,`price`,`food`,`supplier`,`supplier_site`,`keyword`,`images`,`category_id`,`category_pId`) values (1,'afsf','asfsa','fsadfasf','asf','afsdf','asdfsdf','asdfsadf',3,5,'asfasdf','sdfasdf','asf',',1501073427620.png,1501073427338.png',111,11),(2,'asdfsfadfs','asdfasfd','fsdfs','dfsadfasd','sadf','sadfasfas','dfsadfsadf',1,3,'afsadf','asdfsadf','asdfsdf',',1501073519833.png',111,11),(3,'sdfa','dsfasf','sadfsadf','fdsdfasdfa','sdfasdf','sdf','asd',0,0,'','','','',111,11),(6,'胜多负少大红酒','中国','莱克思酒庄','www.lslfj.com','瑟吉欧','1990年','2020年',6,6,'萨福克有限公司','www.sfk00.com','塑料科',',1501153188340.jpg,1501153188102.jpg,1501153188723.jpg,1501153188479.jpg,1501153188456.jpg',111,11);

/*Table structure for table `admin_users` */

DROP TABLE IF EXISTS `admin_users`;

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `username` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `salt` char(50) NOT NULL,
  `authority` int(3) NOT NULL COMMENT '100:超级管理员',
  `logins` int(10) NOT NULL COMMENT '登录次数',
  `last_login_ip` char(16) DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_users` */

insert  into `admin_users`(`id`,`create_time`,`username`,`password`,`salt`,`authority`,`logins`,`last_login_ip`,`last_login_time`) values (1,'2017-07-12 15:28:26','admin','8d7129b9d8615a6fcc84c144ee9a93ee','$1$Z2..u95.$IPItn5mwkpQD3I7DNUim.1',100,36,'::1','2017-07-29 06:55:32');

/*Table structure for table `site_activate` */

DROP TABLE IF EXISTS `site_activate`;

CREATE TABLE `site_activate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `activate_key` char(50) DEFAULT NULL,
  `is_vaild` int(1) NOT NULL COMMENT '1已激活，0未激活',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `site_activate` */

insert  into `site_activate`(`id`,`username`,`activate_key`,`is_vaild`) values (1,'chaoniubi','0bd73a89f6392aa9b3ec91d33ead080f',1),(2,'wuniu88','911a77c9d805ba03013230cf8ac13d27',0);

/*Table structure for table `site_activicity` */

DROP TABLE IF EXISTS `site_activicity`;

CREATE TABLE `site_activicity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `article_title` char(100) DEFAULT NULL COMMENT '主标题',
  `article_title2` char(100) DEFAULT NULL COMMENT '简略标题',
  `article_type` int(2) DEFAULT NULL COMMENT '文章類型',
  `article_sort` int(3) DEFAULT NULL COMMENT '排序值',
  `keywords` char(100) DEFAULT NULL COMMENT '關鍵詞',
  `abstract` varchar(600) DEFAULT NULL COMMENT '文章摘要',
  `author` char(20) DEFAULT NULL COMMENT '文章作者',
  `allowcomments` int(1) NOT NULL COMMENT '允許評論',
  `thumbnails` char(50) DEFAULT NULL COMMENT '縮略圖',
  `editorCont` text COMMENT '文章內容',
  `creator` char(20) NOT NULL COMMENT '创建者',
  `display` int(1) NOT NULL COMMENT '发布状态',
  `comment` text COMMENT '评论表id',
  `like_num` int(11) NOT NULL,
  `dislike_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `site_activicity` */

insert  into `site_activicity`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (12,'2017-07-15 09:11:37',NULL,'达人搞也鬼','阿拉山口低级房',0,0,'撒旦法','阿斯顿发送到发水电费撒旦法撒旦法','',0,'imgUpload/activicity/1500102697441.jpg','<p>阿斯顿发斯蒂芬是的</p><p><br></p><p>撒旦法撒旦法</p><p><br></p><p>是东方饭店！！！！</p><p><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;​撒旦法撒旦法1，撒旦法撒旦法&nbsp;<br></p><p><br></p><p>的说法发生地方双方都！！</p>','admin',1,NULL,0,0),(13,'2017-07-15 10:52:17',NULL,'asdfasdf11','sdf',0,0,'asd','asfsdf','',1,'','<p>asdfsdfsdf</p>','admin',2,NULL,0,0),(14,'2017-07-15 12:46:44',NULL,'再次搞也鬼','胜多负少大',0,0,'撒旦法','阿道夫撒东方闪电','',0,'imgUpload/activicity/1500115604518.jpg','<p>啊水电费撒旦法是</p>','admin',1,NULL,1,0),(15,'2017-07-15 13:27:29',NULL,'哈哈哈哈啊辽阔的设计费 ！','撒旦法酸辣粉机是就',0,0,'撒旦法','水电费撒旦法撒旦法','',0,'imgUpload/activicity/1500118049641.jpg','<p>沙发胜多负少</p><p><br></p><p>爱上的撒的</p>','admin',1,NULL,0,0),(16,'2017-07-15 13:28:06',NULL,'么么么么木MM！！','--沙发斯蒂芬撒旦法阿士大夫胜多负少大暗示打的费',1,0,'暗示','撒旦法爱上的阿士大夫地方','',0,'imgUpload/activicity/1500118086775.jpg','<p>爱上的啥发送到是</p>','admin',1,NULL,0,0),(17,'2017-07-20 14:26:00',NULL,'P2P与银行理财类产品有何不同','P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。',0,0,'P2P;理财','P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。\r\n \r\n总结起来，P2P互联网金融和银行理财类产品有五大不同。','炒鸡网',1,'imgUpload/activicity/1500531960787.jpg','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>总结起来，P2P互联网金融和银行理财类产品有五大不同：</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第一：规范的P2P基本都保本，而银行理财类产品除非直接写明保本，否则都不保本。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P实行先行赔付，这几乎是所有互联网金融公司的宣传口号。当天金融在线等P2P（P2N）公司一旦碰到贷款违约都是先行赔付。不过目前的情况是，银行理财产品的亏损率和P2P相比要低的多。2014年到期的理财产品中51只产品出现亏损，占全部到期产品的0.03%，最终亏损产品本的平均偿还率是85.95%。但是也有高风险的情况，根据《钱江晚报》报道，某投资者称其2007年在渣打银行买了10万的理财产品，2012年12月31日到期，账面亏损约50%。2012年2月15日，《三湘都市报》报道文章“坑爹啊，兴业银行理财9个月，23万只剩15万元”。类似的报道还有不少，也有诉讼到法院的，但是没有投资者成功维权的案例。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"自由财富流程\" src=\"/ueditor/php/upload/image/20170720/1500531955126526.png\" style=\"border: 0px; height: 300px; width: 500px;\" _src=\"/ueditor/php/upload/image/20170720/1500531955126526.png\"></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第二：贷款主体和贷款规模不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P的贷款方以小微企业和个人为主，贷款金额较小，少的几万元，多的几百万元，过千万的情况不太多；而银行理财产品的融资方以大企业和地方政府融资平台为主，融资金额少则几千万元，多则上亿元。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"银行理财流程\" src=\"/ueditor/php/upload/image/20170720/1500531955123729.jpg\" style=\"border: 0px; height: 300px; width: 500px;\" _src=\"/ueditor/php/upload/image/20170720/1500531955123729.jpg\"></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第三：投资门槛不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">在P2P平台上投资最低可以100元起步，而购买银行理财产品最低门槛5万元，也有很多是100万元起的。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第四：便捷程度不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">在P2P互联网金融产品的发行一般只需要几周，甚至1—2天就能搞定。而银行理财产品的发行流程一般需要2—3个月，而且发行前十天要向银监会报备。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第五：抵押品不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P互联网金融目前80%的抵押品都是住宅，可以说通过P2P盘活了存量房产。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">另外，从风险程度上来看，银行理财产品的风险分为五个等级：谨慎型、稳健型、平衡型、进取型、激进型。</p><p><br></p>','admin',1,NULL,1,0),(18,'2017-07-20 15:45:10','2017-07-20 15:48:38','达人搞乜鬼啦！！！！！！','啊水电费撒旦法撒旦法阿斯顿发送到',0,0,'大顺丰速递方法','阿道夫阿斯顿发生大第三方阿发是否','爱上的',1,'imgUpload/activicity/1500536882582.jpg','<p>阿斯顿发艾斯德斯</p><p><br></p><p>asd飞s的</p><p>sa 是的a</p><p><br></p><p><br></p><p><br></p><p>是的暗室逢灯水电费沙发爱上的发的asf爱上的阿斯顿发dsf暗示ds</p><p>暗示是的</p>','admin',1,',15',1,0),(19,'2017-07-21 10:15:29',NULL,'阿斯顿发斯蒂芬是的撒','啊啊啊阿萨德',0,0,'暗示','阿萨德阿萨德','啊啊试试',1,'imgUpload/activicity/1500603329219.jpg','<p>暗示法三的暗示</p>','admin',1,',4,5,6,7,8,9,10,11,12,13,14,16,17',1,0),(20,'2017-07-23 13:30:37',NULL,'撒旦法撒旦法','水电费',1,0,'阿斯顿发斯蒂芬','阿士大夫是的','阿士大夫是的',0,'','<p>水电费是的</p>','admin',0,NULL,0,0),(21,'2017-07-23 13:31:03',NULL,'沙发上的','水电费手上的',0,0,'撒飞洒的','沙发胜多负少东方闪电','暗示法三',0,'','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500809461100801.swf\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0);

/*Table structure for table `site_comment` */

DROP TABLE IF EXISTS `site_comment`;

CREATE TABLE `site_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` int(11) NOT NULL,
  `content` char(255) NOT NULL,
  `username` char(20) NOT NULL,
  `thumbs_up` int(11) NOT NULL,
  `thumbs_up_user` text,
  `reply` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`create_time`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `site_comment` */

insert  into `site_comment`(`id`,`create_time`,`content`,`username`,`thumbs_up`,`thumbs_up_user`,`reply`) values (4,1500728081,'safsd','wolaice',0,'',NULL),(5,1500790409,'狙击镜','chaoniubi',1,',3,',NULL),(6,1500790413,'狙击镜','chaoniubi',0,'',NULL),(7,1500798029,'56654','chaoniubi',1,',3,',NULL),(12,1500895864,'asfdf','chaoniubi',0,NULL,'wolaice'),(13,1500896030,'asfsdfdfsfsfdf','chaoniubi',0,NULL,'wolaice'),(14,1500896519,'OK','chaoniubi',1,',1,',NULL),(15,1500897784,'哈哈！','chaoniubi',1,',1,',NULL),(16,1500962473,'','chaoniubi',0,NULL,NULL),(17,1500962480,'','chaoniubi',0,NULL,NULL);

/*Table structure for table `site_forum` */

DROP TABLE IF EXISTS `site_forum`;

CREATE TABLE `site_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `site_forum` */

/*Table structure for table `site_introduction` */

DROP TABLE IF EXISTS `site_introduction`;

CREATE TABLE `site_introduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `article_title` char(100) DEFAULT NULL COMMENT '主标题',
  `article_title2` char(100) DEFAULT NULL COMMENT '简略标题',
  `article_type` int(2) DEFAULT NULL COMMENT '文章類型',
  `article_sort` int(3) DEFAULT NULL COMMENT '排序值',
  `keywords` char(100) DEFAULT NULL COMMENT '關鍵詞',
  `abstract` varchar(600) DEFAULT NULL COMMENT '文章摘要',
  `author` char(20) DEFAULT NULL COMMENT '文章作者',
  `allowcomments` int(1) NOT NULL COMMENT '允許評論',
  `thumbnails` char(50) DEFAULT NULL COMMENT '縮略圖',
  `editorCont` text COMMENT '文章內容',
  `creator` char(20) NOT NULL COMMENT '创建者',
  `display` int(1) NOT NULL COMMENT '发布状态',
  `comment` text COMMENT '评论表id',
  `like_num` int(11) NOT NULL,
  `dislike_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `site_introduction` */

insert  into `site_introduction`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (2,'2017-07-15 14:18:56',NULL,'塞纳河畔左岸的咖啡！','阿历克斯就废了',0,0,'撒旦法','暗室逢灯盛世嫡妃发送','',1,'imgUpload/introduction/1500121136396.jpg','<p>阿士大夫萨芬是&nbsp;</p><p>sadf是d撒旦法</p>','admin',1,NULL,0,0),(3,'2017-07-15 17:33:16',NULL,'123123123132','121',0,0,'','sadfsdf','',0,'imgUpload/introduction/1500132796107.jpg','<p>sadfsdfasdfsdf</p>','admin',1,NULL,0,0),(4,'2017-07-21 11:30:39',NULL,'asdfsdf sdasdf','adfsfsdfsdf',0,0,'asdf','asdfsadfsdf','asdfa',1,'','<p>asdfasfsd</p>','admin',1,NULL,0,0);

/*Table structure for table `site_tellyou` */

DROP TABLE IF EXISTS `site_tellyou`;

CREATE TABLE `site_tellyou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `article_title` char(100) DEFAULT NULL COMMENT '主标题',
  `article_title2` char(100) DEFAULT NULL COMMENT '简略标题',
  `article_type` int(2) DEFAULT NULL COMMENT '文章類型',
  `article_sort` int(3) DEFAULT NULL COMMENT '排序值',
  `keywords` char(100) DEFAULT NULL COMMENT '關鍵詞',
  `abstract` varchar(600) DEFAULT NULL COMMENT '文章摘要',
  `author` char(20) DEFAULT NULL COMMENT '文章作者',
  `allowcomments` int(1) NOT NULL COMMENT '允許評論',
  `thumbnails` char(50) DEFAULT NULL COMMENT '縮略圖',
  `editorCont` text COMMENT '文章內容',
  `creator` char(20) NOT NULL COMMENT '创建者',
  `display` int(1) NOT NULL COMMENT '发布状态',
  `comment` text COMMENT '评论表id',
  `like_num` int(11) NOT NULL,
  `dislike_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `site_tellyou` */

/*Table structure for table `site_users` */

DROP TABLE IF EXISTS `site_users`;

CREATE TABLE `site_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `username` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `salt` char(50) NOT NULL,
  `email` char(20) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `sex` char(5) NOT NULL,
  `age` char(5) NOT NULL,
  `years_of_drinking` char(5) NOT NULL,
  `logins` int(10) NOT NULL,
  `avatar` char(50) DEFAULT NULL COMMENT '头像',
  `like_column` text,
  `dislike_column` text,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `site_users` */

insert  into `site_users`(`id`,`create_time`,`username`,`password`,`salt`,`email`,`phone`,`sex`,`age`,`years_of_drinking`,`logins`,`avatar`,`like_column`,`dislike_column`) values (1,'2017-07-10 04:06:48','chaoniubi','cf9170fa0debae888066eb1569df032c','$1$fe4.6I1.$Zv118ZIodqA1Mp4/LOU9j0','459291532@qq.com','','male','2','4',20,NULL,'|0,18|0,14|0,17|0,19',''),(2,'2017-07-15 13:34:36','wuniu88','e64a50c2477e700af074969ca42254c9','$1$np1.kE4.$vtjFvW24lP/.P6fU/o2vT.','123@jbshsj.com','','male','1','4',1,NULL,NULL,NULL),(3,'2017-07-22 12:14:59','wolaice','ab33bcc24ed792a349a501cf5b609230','$1$Bm4.0t3.$va99t..wJpPoduJ27GTqL.','','12345678','male','1','3',5,'images\\userAvatar\\wolaice.jpg',NULL,NULL);

/*Table structure for table `site_video` */

DROP TABLE IF EXISTS `site_video`;

CREATE TABLE `site_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `article_title` char(100) DEFAULT NULL COMMENT '主标题',
  `article_title2` char(100) DEFAULT NULL COMMENT '简略标题',
  `article_type` int(2) DEFAULT NULL COMMENT '文章類型',
  `article_sort` int(3) DEFAULT NULL COMMENT '排序值',
  `keywords` char(100) DEFAULT NULL COMMENT '關鍵詞',
  `abstract` varchar(600) DEFAULT NULL COMMENT '文章摘要',
  `author` char(20) DEFAULT NULL COMMENT '文章作者',
  `allowcomments` int(1) NOT NULL COMMENT '允許評論',
  `thumbnails` char(50) DEFAULT NULL COMMENT '縮略圖',
  `editorCont` text COMMENT '文章內容',
  `creator` char(20) NOT NULL COMMENT '创建者',
  `display` int(1) NOT NULL COMMENT '发布状态',
  `comment` text COMMENT '评论表id',
  `like_num` int(11) NOT NULL,
  `dislike_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `site_video` */

insert  into `site_video`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (1,'2017-07-23 14:06:59',NULL,'sadff','sadf',0,0,'asdf','asfdf','sdff',1,'','<p><img width=\"420\" height=\"280\" _url=\"http://player.ku6.com/inside/rcSaYwdgyhNW-IJfX2qYmw../v.swf\" class=\"edui-faked-video\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0),(2,'2017-07-23 14:58:23',NULL,'是飞洒暗示法','阿士大夫',0,0,'阿斯顿发斯蒂芬','阿士大夫撒大是大非','提供商电饭锅',1,'imgUpload/video/1500814703752.png','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500814692125063.swf\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0),(4,'2017-07-23 16:02:08',NULL,'男子遇交警查车情绪激动突然尬舞 然后逃掉了_标清','阿士大夫发',0,0,'阿士大夫','爱上的发的发','水电费',1,'imgUpload/video/1500818528482.jpg','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500818509731884.mp4\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
