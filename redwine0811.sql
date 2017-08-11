/*
SQLyog Professional v12.08 (32 bit)
MySQL - 10.1.13-MariaDB : Database - redwine
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

insert  into `admin_product_category`(`id`,`pId`,`name`,`open`,`remark`) values (1,0,'產品分類','true',NULL),(11,1,'酒類','true',NULL),(21,1,'食物','true',NULL),(111,11,'紅酒',NULL,''),(112,11,'白酒',NULL,''),(113,11,'甜酒',NULL,''),(114,11,'啤酒',NULL,''),(115,11,'威士忌',NULL,''),(116,11,'白蘭地',NULL,''),(117,11,'清酒',NULL,''),(211,21,'牛','false',''),(212,21,'羊','false',''),(213,21,'豬','true',''),(214,21,'家禽','true',''),(215,21,'海鮮','true',''),(216,21,'小食','true',''),(217,21,'甜品','true',''),(218,21,'頭盤','true',''),(219,21,'街頭食品','true',''),(220,21,'各國菜式','true',''),(2111,211,'Tongue','true','牛舌'),(2112,211,'Cheek','true','牛臉'),(2113,211,'Neck','true','頸部'),(2114,211,'Chuck','true','颈部到肩部'),(2115,211,'Brisket','true','胸肉'),(2116,211,'Foreshank','true','牛前腿上部'),(2117,211,'Backribs','true','背部排骨'),(2118,211,'Shortribs','true','牛小排'),(2119,211,'Shellsteak','true','带骨腰脊牛排'),(2120,211,'Flank','true','側邊肉'),(2121,212,'Tongue','true','羊舌'),(2122,212,'Cheek','true','羊面部'),(2123,212,'Neck','true','羊頸部'),(2124,212,'Shoulder','true','羊肩膀'),(2125,212,'Foreshank','true','羊前腿上部'),(2126,212,'Rack','true','羊骨支架'),(2127,212,'Breast','true','羊乳房'),(2128,212,'Loin','true','羊腰部'),(2129,212,'Leg','true','羊大腿'),(2130,212,'Hindshank','true','羊后腱子'),(2131,213,'Ear','true','豬耳'),(2132,213,'Snout','true','豬鼻'),(2133,213,'Jowl','true','豬下顎'),(2134,213,'Shoulder','true','豬肩部'),(2135,213,'Riblet','true',''),(2136,213,'Fronthock','true','豬前腿'),(2137,213,'Trotter','true','豬蹄'),(2138,213,'Fatback','true','豬背'),(2139,213,'Loin','true','豬腰部'),(2140,213,'Spareribs','true','豬排骨'),(2112121,211,'Tenderloin','true','里脊肉'),(2112122,211,'Sirloin','true','里脊肉'),(2112123,211,'TRI-TIP','true','三角肉'),(2112124,211,'Rump','true','牛臀肉'),(2112125,211,'Hindshank','true','后腱子肉'),(2132141,213,'Belly','true','豬肚子'),(2132142,213,'Leg','true','豬大腿'),(2132143,213,'Shank','true','豬小腿'),(2132144,213,'Foot','true','豬腳');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_food` */

insert  into `admin_product_food`(`id`,`name`,`origin`,`type`,`method`,`taste`,`keyword`,`images`,`category_id`,`category_pId`) values (5,'牛舌炒番薯','中國','不知道','炒制','鹹的','牛舌,番薯',',1501926919422.jpg',2111,211),(6,'sadfsdaf','sadfasd','fsdfasdf','asdfsad','sdfasdf','asdfasdf','',2111,211),(7,'asdfasdfsadf','sadfasdf','safdasdf','asdfasdf','asdf','Fqrd','',2111,211),(8,'asfsadfasdfQWE','AEFS','SADF','asdfasdfASDFSA','DFASDFASDF','SDFASDF','',2111,211),(9,'asdfasdfas','fdsadfasdf','dfsdf','fsdf','dfs','dfsadfasdf','',2111,211),(10,'甜到酸糖果','阿根廷','糖果','未知','又甜又酸','啊',',1502181503719.jpg,1502181503289.png',217,21),(11,'芝士焗海马','香港特区','高级菜','焗好','辣鸡','好的',',1502244184495.png,1502244184180.png',215,21),(12,'按了束带结发','日本','水电费','额女王','盛大','阿斯顿发',',1502244829689.png',220,21),(13,'羊舌的爱','香港特区','靠近的时间发','卡机','来思考','阿里斯顿',',1502247521180.png',2121,212);

/*Table structure for table `admin_product_matching` */

DROP TABLE IF EXISTS `admin_product_matching`;

CREATE TABLE `admin_product_matching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `wine_name` text,
  `food_name` text,
  `wine_id` text,
  `food_id` text,
  `suggest_type` int(11) DEFAULT NULL COMMENT '建議類型',
  `suggest_name` char(50) DEFAULT NULL,
  `matching` int(11) DEFAULT NULL,
  `content` text,
  `creator` char(20) DEFAULT NULL,
  `like_num` int(11) DEFAULT NULL,
  `dislike_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_matching` */

insert  into `admin_product_matching`(`id`,`create_time`,`wine_name`,`food_name`,`wine_id`,`food_id`,`suggest_type`,`suggest_name`,`matching`,`content`,`creator`,`like_num`,`dislike_num`) values (1,NULL,NULL,',菲力炒饭,菲力牛排','',',4,3',0,'啊水电费撒旦法撒旦法',5,'<p>as的飞洒的方式的</p><p>asdfasdfsadfsdf</p><p><br></p><p><br></p><p><br></p><p>as打法撒旦法撒旦法！</p>',NULL,NULL,NULL),(2,'2017-08-04 09:38:34',NULL,',菲力炒饭,菲力牛排,孜然牛腿排','',',4,3,2',1,'蓝色的凤姐克里斯快递费将订金',5,'<p>卡手机丢了卡萨就废了世纪东方立刻接村民V领开双刀</p><p><br></p><p><br></p><p>爱上的发的发第三方</p>',NULL,NULL,NULL),(3,'2017-08-04 10:49:07','老干妈白酒,胜多负少大红酒','孜然牛腿排',',7,6',',7',1,'peter.pang',5,'<p>来自德国总部的推荐，绝对值得信任。</p>',NULL,NULL,NULL),(4,'2017-08-06 09:04:28','老干妈白酒,胜多负少大红酒','牛舌炒番薯',',7,6',',5',0,'来看撒酒疯',5,'<p>阿道夫撒东方闪电发</p><p>sadfsfsafs地方</p><p><br></p><p><br></p><p><br></p><p><br></p><p>阿士大夫是的发的啥</p>','admin',NULL,NULL),(7,'2017-08-06 10:22:19','asdfsfadfs','牛舌炒番薯',',2',',5',1,'asdfsdf',5,'<p>asdf</p>','admin',NULL,NULL),(8,'2017-08-08 11:03:00','阿萨德级酒','牛舌炒番薯',',8',',5',0,'拉斯科交党费',5,'<p>是的发送发的三dsad</p><p>fs</p><p>dfsd</p><p>fdas</p><p>f</p><p>dsf</p>','admin',NULL,NULL),(9,'2017-08-08 16:43:38','老干妈白酒,胜多负少大红酒','甜到酸糖果',',7,6',',10',0,'爱的色放',5,'<p>啊是发生地方</p>','admin',NULL,NULL),(10,'2017-08-08 16:43:51','asdfsfadfs,afsf','甜到酸糖果',',2,1',',10',1,'打法撒旦法的',5,'<p>阿斯顿发斯蒂芬是打法</p>','admin',NULL,NULL),(11,'2017-08-09 10:03:45','老干妈白酒','芝士焗海马',',7',',11',1,'高级知识分子',5,'<p>阿斯顿发斯蒂芬发</p>','admin',NULL,NULL),(13,'2017-08-09 10:28:14','sdfa,asdfsfadfs','按了束带结发',',3,2',',12',0,'阿发的发',5,'<p><br></p>','admin',NULL,NULL),(14,'2017-08-09 10:59:32','阿萨德级酒,老干妈白酒','羊舌的爱',',8,7',',13',0,'as的飞洒的',5,'<p>啊水电费撒旦法</p>','admin',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `admin_product_wine` */

insert  into `admin_product_wine`(`id`,`name`,`origin`,`winery`,`winery_site`,`grape`,`year`,`best_year`,`price`,`food`,`supplier`,`supplier_site`,`keyword`,`images`,`category_id`,`category_pId`) values (1,'afsf','asfsa','fsadfasf','asf','afsdf','asdfsdf','asdfsadf',3,5,'asfasdf','sdfasdf','asf',',1501073427620.png,1501073427338.png',111,11),(2,'asdfsfadfs','asdfasfd','fsdfs','dfsadfasd','sadf','sadfasfas','dfsadfsadf',1,3,'afsadf','asdfsadf','asdfsdf',',1501073519833.png',111,11),(3,'sdfa','dsfasf','sadfsadf','fdsdfasdfa','sdfasdf','sdf','asd',0,0,'','','','',111,11),(6,'胜多负少大红酒','中国','莱克思酒庄','www.lslfj.com','瑟吉欧','1990年','2020年',6,6,'萨福克有限公司','www.sfk00.com','塑料科',',1501153188340.jpg,1501153188102.jpg,1501153188723.jpg,1501153188479.jpg,1501153188456.jpg',111,11),(7,'老干妈白酒','中国','贵州手榴弹空间酒庄','www.sldkj.com','没有','2017','2019',6,NULL,'贵州临时卡地方集团股份有限公司','www.sfadfasdfsdf.com','手榴弹,拉斯科低级房',',1501813088179.jpg,1501813088175.jpg,1501813088520.jpg,1501152760851.jpg',112,11),(8,'阿萨德级酒','死老砍','阿斯顿发斯蒂芬','www.lkjsf.com','数据库','1991','2010',5,NULL,'阿斯顿发送到','www.slkjwklj.com','是否',',1502161312886.jpg,1502161312433.jpg,1502161312874.jpg,1502161312512.jpg',111,11);

/*Table structure for table `admin_users` */

DROP TABLE IF EXISTS `admin_users`;

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `admin_username` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `salt` char(50) NOT NULL,
  `authority` int(3) NOT NULL COMMENT '100:超级管理员',
  `logins` int(10) NOT NULL COMMENT '登录次数',
  `last_login_ip` char(16) DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`admin_username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin_users` */

insert  into `admin_users`(`id`,`create_time`,`admin_username`,`password`,`salt`,`authority`,`logins`,`last_login_ip`,`last_login_time`) values (1,'2017-07-12 15:28:26','admin','8d7129b9d8615a6fcc84c144ee9a93ee','$1$Z2..u95.$IPItn5mwkpQD3I7DNUim.1',100,58,'::1','2017-08-11 09:46:07');

/*Table structure for table `admin_users_del` */

DROP TABLE IF EXISTS `admin_users_del`;

CREATE TABLE `admin_users_del` (
  `id` int(11) NOT NULL,
  `del_time` datetime NOT NULL,
  `username` char(50) NOT NULL,
  `contact` char(50) NOT NULL,
  `admin_username` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin_users_del` */

insert  into `admin_users_del`(`id`,`del_time`,`username`,`contact`,`admin_username`) values (19,'2017-08-11 10:08:16','al2398098','29173829','admin');

/*Table structure for table `site_activate` */

DROP TABLE IF EXISTS `site_activate`;

CREATE TABLE `site_activate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `activate_key` char(50) DEFAULT NULL,
  `is_vaild` int(1) NOT NULL COMMENT '1已激活，0未激活',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `site_activate` */

insert  into `site_activate`(`id`,`username`,`activate_key`,`is_vaild`) values (7,'wolaice','HJIXJH',1),(8,'chaolihai','d8d900c89dbec00b71a04958d150778d',1),(9,'superman','YLZJGE',1),(11,'asdfsdf','4WJRTZ',1),(14,'lakfml8798','ced673236d4377852eea743aa1c5efe2',0),(15,'lajk123l','d0ba25d3884e50c2748ca8463aea6b1b',0),(16,'iweur98','WCU9XP',1);

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

insert  into `site_activicity`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (12,'2017-07-15 09:11:37',NULL,'达人搞也鬼','阿拉山口低级房',0,0,'撒旦法','阿斯顿发送到发水电费撒旦法撒旦法','',0,'imgUpload/activicity/1500102697441.jpg','<p>阿斯顿发斯蒂芬是的</p><p><br></p><p>撒旦法撒旦法</p><p><br></p><p>是东方饭店！！！！</p><p><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;​撒旦法撒旦法1，撒旦法撒旦法&nbsp;<br></p><p><br></p><p>的说法发生地方双方都！！</p>','admin',1,NULL,0,0),(13,'2017-07-15 10:52:17',NULL,'asdfasdf11','sdf',0,0,'asd','asfsdf','',1,'','<p>asdfsdfsdf</p>','admin',2,NULL,0,0),(14,'2017-07-15 12:46:44',NULL,'再次搞也鬼','胜多负少大',0,0,'撒旦法','阿道夫撒东方闪电','',0,'imgUpload/activicity/1500115604518.jpg','<p>啊水电费撒旦法是</p>','admin',1,NULL,1,0),(15,'2017-07-15 13:27:29',NULL,'哈哈哈哈啊辽阔的设计费 ！','撒旦法酸辣粉机是就',0,0,'撒旦法','水电费撒旦法撒旦法','',0,'imgUpload/activicity/1500118049641.jpg','<p>沙发胜多负少</p><p><br></p><p>爱上的撒的</p>','admin',1,NULL,0,0),(16,'2017-07-15 13:28:06',NULL,'么么么么木MM！！','--沙发斯蒂芬撒旦法阿士大夫胜多负少大暗示打的费',1,0,'暗示','撒旦法爱上的阿士大夫地方','',0,'imgUpload/activicity/1500118086775.jpg','<p>爱上的啥发送到是</p>','admin',1,',24,25',1,0),(17,'2017-07-20 14:26:00',NULL,'P2P与银行理财类产品有何不同','P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。',0,0,'P2P;理财','P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。\r\n \r\n总结起来，P2P互联网金融和银行理财类产品有五大不同。','炒鸡网',1,'imgUpload/activicity/1500531960787.jpg','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P理财和银行理财类产品有什么不同呢？下面跟小编一起来看看吧。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>总结起来，P2P互联网金融和银行理财类产品有五大不同：</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第一：规范的P2P基本都保本，而银行理财类产品除非直接写明保本，否则都不保本。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P实行先行赔付，这几乎是所有互联网金融公司的宣传口号。当天金融在线等P2P（P2N）公司一旦碰到贷款违约都是先行赔付。不过目前的情况是，银行理财产品的亏损率和P2P相比要低的多。2014年到期的理财产品中51只产品出现亏损，占全部到期产品的0.03%，最终亏损产品本的平均偿还率是85.95%。但是也有高风险的情况，根据《钱江晚报》报道，某投资者称其2007年在渣打银行买了10万的理财产品，2012年12月31日到期，账面亏损约50%。2012年2月15日，《三湘都市报》报道文章“坑爹啊，兴业银行理财9个月，23万只剩15万元”。类似的报道还有不少，也有诉讼到法院的，但是没有投资者成功维权的案例。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"自由财富流程\" src=\"/ueditor/php/upload/image/20170720/1500531955126526.png\" style=\"border: 0px; height: 300px; width: 500px;\" _src=\"/ueditor/php/upload/image/20170720/1500531955126526.png\"></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第二：贷款主体和贷款规模不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P的贷款方以小微企业和个人为主，贷款金额较小，少的几万元，多的几百万元，过千万的情况不太多；而银行理财产品的融资方以大企业和地方政府融资平台为主，融资金额少则几千万元，多则上亿元。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: center; background-color: rgb(255, 255, 255);\"><img alt=\"银行理财流程\" src=\"/ueditor/php/upload/image/20170720/1500531955123729.jpg\" style=\"border: 0px; height: 300px; width: 500px;\" _src=\"/ueditor/php/upload/image/20170720/1500531955123729.jpg\"></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第三：投资门槛不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">在P2P平台上投资最低可以100元起步，而购买银行理财产品最低门槛5万元，也有很多是100万元起的。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第四：便捷程度不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">在P2P互联网金融产品的发行一般只需要几周，甚至1—2天就能搞定。而银行理财产品的发行流程一般需要2—3个月，而且发行前十天要向银监会报备。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\"><strong>第五：抵押品不同。</strong></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">P2P互联网金融目前80%的抵押品都是住宅，可以说通过P2P盘活了存量房产。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \'Microsoft YaHei\'; text-indent: 2em; font-size: 14px; line-height: 25px; white-space: normal; text-align: justify; background-color: rgb(255, 255, 255);\">另外，从风险程度上来看，银行理财产品的风险分为五个等级：谨慎型、稳健型、平衡型、进取型、激进型。</p><p><br></p>','admin',1,',27',1,0),(18,'2017-07-20 15:45:10','2017-07-20 15:48:38','达人搞乜鬼啦！！！！！！','啊水电费撒旦法撒旦法阿斯顿发送到',0,0,'大顺丰速递方法','阿道夫阿斯顿发生大第三方阿发是否','爱上的',1,'imgUpload/activicity/1500536882582.jpg','<p>阿斯顿发艾斯德斯</p><p><br></p><p>asd飞s的</p><p>sa 是的a</p><p><br></p><p><br></p><p><br></p><p>是的暗室逢灯水电费沙发爱上的发的asf爱上的阿斯顿发dsf暗示ds</p><p>暗示是的</p>','admin',1,',15',1,0),(19,'2017-07-21 10:15:29',NULL,'阿斯顿发斯蒂芬是的撒','啊啊啊阿萨德',0,0,'暗示','阿萨德阿萨德','啊啊试试',1,'imgUpload/activicity/1500603329219.jpg','<p>暗示法三的暗示</p>','admin',1,',4,5,6,7,8,9,10,11,12,13,14,16,17',1,0),(20,'2017-07-23 13:30:37',NULL,'撒旦法撒旦法','水电费',1,0,'阿斯顿发斯蒂芬','阿士大夫是的','阿士大夫是的',0,'','<p>水电费是的</p>','admin',0,NULL,0,0),(21,'2017-07-23 13:31:03',NULL,'沙发上的','水电费手上的',0,0,'撒飞洒的','沙发胜多负少东方闪电','暗示法三',0,'','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500809461100801.swf\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0);

/*Table structure for table `site_banner` */

DROP TABLE IF EXISTS `site_banner`;

CREATE TABLE `site_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime NOT NULL,
  `image` char(50) NOT NULL,
  `title` char(50) DEFAULT NULL,
  `link` char(100) DEFAULT NULL,
  `admin_username` char(20) NOT NULL,
  `is_vaild` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `site_banner` */

insert  into `site_banner`(`id`,`create_time`,`image`,`title`,`link`,`admin_username`,`is_vaild`) values (3,'2017-08-11 16:15:26','imgUpload/1502439326215.jpg','sdfsdf','http://www.qq.com','admin',1),(4,'2017-08-11 16:30:35','imgUpload/1502440235345.jpg','阿斯顿发斯蒂芬','http://www.163.com','admin',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `site_comment` */

insert  into `site_comment`(`id`,`create_time`,`content`,`username`,`thumbs_up`,`thumbs_up_user`,`reply`) values (4,1500728081,'safsd','wolaice',0,'',NULL),(5,1500790409,'狙击镜','chaoniubi',1,',3,',NULL),(6,1500790413,'狙击镜','chaoniubi',0,'',NULL),(7,1500798029,'56654','chaoniubi',1,',3,',NULL),(12,1500895864,'asfdf','chaoniubi',0,NULL,'wolaice'),(13,1500896030,'asfsdfdfsfsfdf','chaoniubi',0,NULL,'wolaice'),(14,1500896519,'OK','chaoniubi',1,',1,',NULL),(15,1500897784,'哈哈！','chaoniubi',1,',1,',NULL),(16,1500962473,'','chaoniubi',0,NULL,NULL),(17,1500962480,'','chaoniubi',0,NULL,NULL),(18,1501489776,'哈哈哈哈','chaoniubi',0,NULL,NULL),(19,1501489891,'阿达法师打发第三方','chaoniubi',0,NULL,NULL),(20,1501489915,'阿斯顿发大水','chaoniubi',0,NULL,NULL),(21,1501489920,'阿斯顿发大水','chaoniubi',0,NULL,NULL),(22,1501490009,'设法','chaoniubi',0,NULL,NULL),(23,1501490044,'的如果第三个','chaoniubi',1,',1,',NULL),(24,1501492322,'阿发的发','chaoniubi',1,',1,',NULL),(25,1501492330,'啊是的发送发','chaoniubi',0,NULL,'chaoniubi'),(26,1501497922,'fgsdfg','wolaice',0,NULL,NULL),(27,1502183378,'dfafdsf','wolaice',1,',3,',NULL);

/*Table structure for table `site_forum` */

DROP TABLE IF EXISTS `site_forum`;

CREATE TABLE `site_forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间戳',
  `wine_name` char(50) NOT NULL COMMENT '酒名',
  `wine_year` int(11) DEFAULT NULL COMMENT '年份',
  `wine_category` int(11) DEFAULT NULL COMMENT '酒类',
  `wine_price` int(11) DEFAULT NULL COMMENT '价格',
  `food_category` int(11) DEFAULT NULL COMMENT '菜式国家',
  `food_type` int(11) DEFAULT NULL COMMENT '菜式',
  `food_name` int(11) DEFAULT NULL COMMENT '菜名',
  `custom_food_name` char(50) DEFAULT NULL,
  `food_method` int(11) DEFAULT NULL COMMENT '煮法',
  `food_taste` int(11) DEFAULT NULL COMMENT '味道',
  `matching` int(11) DEFAULT NULL COMMENT '匹配度',
  `theme_color` int(11) DEFAULT NULL COMMENT '主题颜色',
  `short_comment` char(100) DEFAULT NULL COMMENT '短评',
  `detail_content` text COMMENT '详细内容',
  `wine_img` char(50) NOT NULL COMMENT '酒图片',
  `food_img` char(50) NOT NULL COMMENT '食物图片',
  `username` char(20) NOT NULL COMMENT '创建者',
  `display` int(11) NOT NULL COMMENT '审核，默认0未审核，1审核并显示',
  `display_by` char(20) NOT NULL COMMENT '审核者',
  `comment` text COMMENT '评论',
  `like_num` int(11) NOT NULL,
  `dislike_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `site_forum` */

insert  into `site_forum`(`id`,`create_time`,`wine_name`,`wine_year`,`wine_category`,`wine_price`,`food_category`,`food_type`,`food_name`,`custom_food_name`,`food_method`,`food_taste`,`matching`,`theme_color`,`short_comment`,`detail_content`,`wine_img`,`food_img`,`username`,`display`,`display_by`,`comment`,`like_num`,`dislike_num`) values (14,1501495826,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,'dffgdfgs','sdfgsdfgdfgfdg','','','wolaice',1,'',',26',0,0),(15,1501642777,'胜多负少大红酒',1988,3,3,219,0,0,'蓝色的凤姐',NULL,4,5,0,'拉丝机粉喇手机铃声的分类登上飞机登上飞机。','口味毁容了经理说的傅雷家书吕雯\r\n撒发生地方刘恺威吉尔了方借款。\r\na都烦死了方借款sad联发科静安寺打两份了！！\r\n是打法打发啊上岛咖啡？！》？！》','imgUpload/1501642732171.jpg','imgUpload/1501642740314.jpg','cegemao',1,'',NULL,0,0),(16,1501644219,'立刻交党费',2011,1,2,211,2112,3,'',NULL,0,5,3,'拉斯科低级房拉束带结发考虑到师傅介绍打两份','啥懒得开发静安寺电缆附件萨克发到了\r\n\r\n是否撒旦法似懂非懂发的是\r\n阿萨法是的发送\r\nas的飞洒的方式的','imgUpload/1501644182762.jpg','imgUpload/1501644193387.jpg','cegemao',1,'',NULL,1,0),(17,1502008863,'老干妈白酒',1986,1,4,211,2111,5,'',NULL,0,5,4,'快乐十分拉萨','拉卡拉你绿色会计','imgUpload/1502008830193.jpg','imgUpload/1502008837636.jpg','wolaice',1,'',NULL,0,0),(19,1502173914,'阿萨德级酒',1988,2,2,211,2111,9,'',NULL,0,5,4,'打法撒旦法','打法撒旦法的说法发生地方','imgUpload/1502173861122.jpg','imgUpload/1502173886867.jpg','wolaice',1,'',NULL,0,0),(20,1502174642,'阿萨德级酒',2010,3,4,213,2132142,0,'猪腿炒鸡蛋',NULL,3,5,4,'拉束带结发拉就是单飞','无力而就离开女按了肯德基来思考飞牛网','imgUpload/1502174587319.jpg','imgUpload/1502174606382.jpg','wolaice',1,'',NULL,0,0),(21,1502264502,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'拉丝机福利卡死绝烦陆金所的','李文静人垃圾完了呢类似uVOA万二立刻马上的','','','wolaice',1,'',NULL,0,0);

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

insert  into `site_introduction`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (2,'2017-07-15 14:18:56',NULL,'塞纳河畔左岸的咖啡！','阿历克斯就废了',0,0,'撒旦法','暗室逢灯盛世嫡妃发送','',1,'imgUpload/introduction/1500121136396.jpg','<p>阿士大夫萨芬是&nbsp;</p><p>sadf是d撒旦法</p>','admin',1,NULL,0,0),(3,'2017-07-15 17:33:16',NULL,'123123123132','121',0,0,'','sadfsdf','',0,'imgUpload/introduction/1500132796107.jpg','<p>sadfsdfasdfsdf</p>','admin',1,NULL,0,0),(4,'2017-07-21 11:30:39',NULL,'asdfsdf sdasdf','adfsfsdfsdf',0,0,'asdf','asdfsadfsdf','asdfa',1,'','<p>asdfasfsd</p>','admin',1,',19',2,7);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `site_tellyou` */

insert  into `site_tellyou`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (1,'2017-08-09 15:09:18',NULL,'hellobaby','asdfsf',0,0,'asdf','asfasdfsadf','asdf',1,'imgUpload/tellyou/1502262558275.jpg','<p>sdfasdf</p><p><br></p><p><br></p><p>asdf</p><p>as</p><p>f</p><p>sadf</p><p>sd</p><p>fas</p><p>df</p>','admin',1,NULL,0,0);

/*Table structure for table `site_tou` */

DROP TABLE IF EXISTS `site_tou`;

CREATE TABLE `site_tou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `update_time` datetime NOT NULL,
  `admin_username` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `site_tou` */

insert  into `site_tou`(`id`,`content`,`update_time`,`admin_username`) values (1,'<p>阿斯顿发斯蒂芬</p><p><br></p><p><br></p><p>水电费是的</p><p><br></p><p><br></p><p><br></p><p>a水电费阿斯顿发是的</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>水电费撒旦法撒旦法啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>','2017-08-11 17:21:20','admin');

/*Table structure for table `site_users` */

DROP TABLE IF EXISTS `site_users`;

CREATE TABLE `site_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` datetime DEFAULT NULL,
  `username` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  `salt` char(50) NOT NULL,
  `email` char(30) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `age` int(1) DEFAULT NULL,
  `years_of_drinking` int(1) DEFAULT NULL,
  `logins` int(10) NOT NULL,
  `avatar` char(50) DEFAULT NULL COMMENT '头像',
  `like_column` text,
  `dislike_column` text,
  `deactivat` int(1) NOT NULL COMMENT '1不可登陆，0可用',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `site_users` */

insert  into `site_users`(`id`,`create_time`,`username`,`password`,`salt`,`email`,`phone`,`sex`,`age`,`years_of_drinking`,`logins`,`avatar`,`like_column`,`dislike_column`,`deactivat`) values (9,'2017-08-01 15:41:48','wolaice','b92eb2b0af08d7415412db5ff09cb892','$1$Lu5.2W/.$XO3iTOGawf42xaK6EBzDZ/','','38291739',0,1,0,0,NULL,NULL,NULL,0),(10,'2017-08-02 15:46:47','chaolihai','d5c0baaaad5cd6bd575a7233908fcbb9','$1$T12.g22.$/C3B49DSvVuigGhDXv7BT/','459291532@qq.com','',0,1,2,0,NULL,NULL,NULL,0),(11,'2017-08-10 15:50:31','superman','6b46a1407d97a5e93d57d276464dcc3e','$1$HP5.E6/.$TEEXd9Sjpz2K.Vhy99CiN0','','39482930',1,1,2,0,NULL,NULL,NULL,0),(16,'2017-08-10 16:32:45','lakfml8798','c84db919b93a3598649e71f6faaba5fd','$1$hV3.Wm..$JBV4z1NYcB.KLvWDo76hN0','lskd@lssldfj.com','',0,2,2,0,NULL,NULL,NULL,0),(18,'2017-08-10 16:33:43','iweur98','e0ecb7e7a73035884f4f1a838de83169','$1$cv/./Y..$SE3mzeNH/ZZ2qk4elaQNq/','','12384928',1,3,1,0,NULL,NULL,NULL,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `site_video` */

insert  into `site_video`(`id`,`create_time`,`update_time`,`article_title`,`article_title2`,`article_type`,`article_sort`,`keywords`,`abstract`,`author`,`allowcomments`,`thumbnails`,`editorCont`,`creator`,`display`,`comment`,`like_num`,`dislike_num`) values (1,'2017-07-23 14:06:59',NULL,'sadff','sadf',0,0,'asdf','asfdf','sdff',1,'','<p><img width=\"420\" height=\"280\" _url=\"http://player.ku6.com/inside/rcSaYwdgyhNW-IJfX2qYmw../v.swf\" class=\"edui-faked-video\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0),(2,'2017-07-23 14:58:23',NULL,'是飞洒暗示法','阿士大夫',0,0,'阿斯顿发斯蒂芬','阿士大夫撒大是大非','提供商电饭锅',1,'imgUpload/video/1500814703752.png','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500814692125063.swf\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0),(4,'2017-07-23 16:02:08',NULL,'男子遇交警查车情绪激动突然尬舞 然后逃掉了_标清','阿士大夫发',0,0,'阿士大夫','爱上的发的发','水电费',1,'imgUpload/video/1500818528482.jpg','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170723/1500818509731884.mp4\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0),(5,'2017-08-09 16:26:29',NULL,'牛就按了的会计法','莱克斯顿发',0,0,'是的','啊水电费撒旦法','阿斯顿发送到',1,'imgUpload/video/1502267189465.png','<p><img width=\"420\" height=\"280\" _url=\"/ueditor/php/upload/video/20170809/1502267185772549.mp4\" class=\"edui-upload-video  vjs-default-skin\" src=\"http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/spacer.gif\" style=\"background:url(http://localhost/redwine/lib/ueditor/1.4.3/themes/default/images/videologo.gif) no-repeat center center; border:1px solid gray;\">​</p>','admin',1,NULL,0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
