/* This file is created by MySQLReback 2017-06-27 16:54:21 */
 /* 创建表结构 `gw_auth` */
 DROP TABLE IF EXISTS `gw_auth`;/* MySQLReback Separation */ CREATE TABLE `gw_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_pic` varchar(20) DEFAULT NULL COMMENT '模块头像',
  `auth_name` varchar(20) NOT NULL COMMENT '名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '模块',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '级别',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_auth` */
 INSERT INTO `gw_auth` VALUES ('1','fa fa-volume-up','新闻管理','0','','','0','0'),('2','','新闻添加','1','News','add','1-2','1'),('3','','新闻列表','1','News','showlist','1-3','1'),('4','fa fa-user-plus','权限管理','0','','','','0'),('5','','角色管理','4','Role','showlist','4-5','1'),('6','','管理员列表','4','Manager','showlist','4-6','1'),('7','','权限管理','4','Authority','showlist','4-7','1'),('8','fa fa-edit','账号管理','0','','','','0'),('9','','账号列表','8','Account','showlist','8-9','1'),('10','fa fa-navicon','内容管理','0','','','','0'),('11','','首页导航栏','10','Content','showlist','10-11','1'),('12','','图片管理','10','Content','category','10-12','1'),('13','','留言管理','10','LMessage','showlist','10-13','1'),('14','fa fa-newspaper-o','介绍管理','0','','','','0'),('15','','文字介绍','14','Introduce','showlist','14-15','1'),('16','','新闻类别','1','News','showtype','1-16','1'),('17','','账号添加','8','Account','add','8-17','1'),('18','','专家名录','14','Introduce','contacts','14-18','1'),('19','fa fa-cogs','网站管理','0','','','','0'),('20','','数据库备份','19','Bak','index','19-20','1'),('21','','系统登录日志','19','Bak','loginlog','19-21','1'),('22','','图文介绍','14','Introduce','rjgn','14-22','1'),('23','','地图设置','10','Content','map','10-23','1'),('24','','联系方式','10','Content','call','10-24','1');/* MySQLReback Separation */
 /* 创建表结构 `gw_call` */
 DROP TABLE IF EXISTS `gw_call`;/* MySQLReback Separation */ CREATE TABLE `gw_call` (
  `call_id` int(1) NOT NULL AUTO_INCREMENT,
  `call_call` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `call_home` varchar(100) CHARACTER SET utf8 NOT NULL,
  `call_time` int(11) NOT NULL,
  PRIMARY KEY (`call_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_call` */
 INSERT INTO `gw_call` VALUES ('1','023-62479105','巴南万达广场B区T9栋29楼','1498535983');/* MySQLReback Separation */
 /* 创建表结构 `gw_category` */
 DROP TABLE IF EXISTS `gw_category`;/* MySQLReback Separation */ CREATE TABLE `gw_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(64) NOT NULL DEFAULT '',
  `cat_time` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_category` */
 INSERT INTO `gw_category` VALUES ('1','首页轮播图','1496999246'),('2','阿里云','1496999357'),('3','家由莱全屋家具定制','1496999357'),('4','重庆工程学院','1496999357'),('5','好家传媒','1496999666'),('6','优珥格家具设计','1498369661');/* MySQLReback Separation */
 /* 创建表结构 `gw_inc` */
 DROP TABLE IF EXISTS `gw_inc`;/* MySQLReback Separation */ CREATE TABLE `gw_inc` (
  `inc_id` int(5) NOT NULL AUTO_INCREMENT,
  `loc_id` int(2) NOT NULL,
  `inc_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `inc_content` text CHARACTER SET utf8 NOT NULL,
  `inc_time` int(11) NOT NULL,
  PRIMARY KEY (`inc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_inc` */
 INSERT INTO `gw_inc` VALUES ('4','1','智能ERP','<p>&nbsp;一键实现产品自主设计、生产对接、流程监控、工人管理、序列号管理、仓位分配、成本核算等多项功能，让您工作轻松惬意。</p>','1498543535'),('5','2','核心技术','<p>&nbsp;集虚拟现实技术VR、ERP和OA于一体，专注研发智能家具加工工艺自动化系统，为企业实现办公自动化、效益最大化提供专业化优质服务。</p>','1498542958'),('6','3','软件功能','<p>重庆木鸽信息技术有限公司是一家专业从事定制家居行业专业ERP系统、C/S、B/S及平台类项目等互联网项目开发的高科技企业</p>','1498543321'),('7','4','合作伙伴详细名称','<p>阿里云、E动云、好家传媒、优珥格家具设计、重庆工程学院···</p>','1498544034'),('8','5','案例展示详细名称','<p>窝居、卡尔玛、尖峰、家由莱全屋家具定制、林之品冠木门···</p>','1498543437'),('9','7','木鸽首页简介','<p>重庆木鸽信息技术有限公司是一家专业从事定制家居行业专业ERP系统、C/S、B/S 及平台类项目等互联网项目开发的高科技企业。公司组织专业软件研发精英团队，集虚拟现实技术VR、ERP和OA于一体，专注研发智能家具加工工艺自动化系统，为企业实现办公自动化、效益最大化提供专业化优质服务。</p>','1498543620');/* MySQLReback Separation */
 /* 创建表结构 `gw_lmessage` */
 DROP TABLE IF EXISTS `gw_lmessage`;/* MySQLReback Separation */ CREATE TABLE `gw_lmessage` (
  `lm_id` int(11) NOT NULL AUTO_INCREMENT,
  `lm_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '名字',
  `lm_phone` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '电话',
  `lm_content` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `lm_time` int(11) NOT NULL COMMENT '时间',
  `lm_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  PRIMARY KEY (`lm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_lmessage` */
 INSERT INTO `gw_lmessage` VALUES ('2','赵丽颖','900800700','我姜田勇宣誓加入木鸽科技。从此爱岗敬业，争先创优，绝对不在上班期间随地大小便','1496999357','加入木鸽');/* MySQLReback Separation */
 /* 创建表结构 `gw_location` */
 DROP TABLE IF EXISTS `gw_location`;/* MySQLReback Separation */ CREATE TABLE `gw_location` (
  `loc_id` int(2) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '名字',
  `loc_loc` varchar(5) COLLATE utf8_bin NOT NULL COMMENT '对应编号',
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='首页定位';/* MySQLReback Separation */
 /* 插入数据 `gw_location` */
 INSERT INTO `gw_location` VALUES ('1','智能ERP','01'),('2','核心技术','02'),('3','软件功能','03'),('4','合作商家','04'),('5','案例展示','05'),('6','新闻资讯','06'),('7','木鸽简介','07'),('8','联系方式','08');/* MySQLReback Separation */
 /* 创建表结构 `gw_log` */
 DROP TABLE IF EXISTS `gw_log`;/* MySQLReback Separation */ CREATE TABLE `gw_log` (
  `log_id` int(6) NOT NULL AUTO_INCREMENT,
  `log_ipdz` varchar(40) COLLATE utf8_bin NOT NULL COMMENT 'IP地址',
  `log_ipadds` varchar(120) CHARACTER SET utf8 NOT NULL COMMENT '真实地址',
  `log_browser` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '浏览器',
  `log_os` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '操作系统',
  `log_mg_id` int(4) NOT NULL COMMENT '用户id',
  `log_lang` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '浏览语言',
  `log_time` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='登录日志';/* MySQLReback Separation */
 /* 插入数据 `gw_log` */
 INSERT INTO `gw_log` VALUES ('1','::1','中国-重庆-重庆','Chrome','Windows','3','简体中文','1498196249'),('3','127.0.0.1','中国-重庆-重庆','Firefox','Windows','3','简体中文','1498354405'),('4','127.0.0.1','中国-重庆-重庆','Firefox','Windows','3','简体中文','1498354687'),('5','::1','中国-重庆-重庆','Chrome','Unknown','3','简体中文','1498355388'),('6','::1','中国-重庆-重庆','Chrome','Windows 7','3','简体中文','1498355587'),('7','::1','中国-重庆-重庆','Chrome(56.0.2924.87)','Windows 7','3','简体中文','1498355654'),('8','127.0.0.1','中国-重庆-重庆','Firefox(54.0)','Windows 7','3','简体中文','1498355877'),('9','127.0.0.1','中国-重庆-重庆','Firefox(54.0)','Windows 7','3','简体中文','1498439297'),('10','::1','中国-重庆-重庆','Chrome(56.0.2924.87)','Windows 7','3','简体中文','1498439641'),('11','127.0.0.1','中国-重庆-重庆','Firefox(54.0)','Windows 7','3','简体中文','1498525504');/* MySQLReback Separation */
 /* 创建表结构 `gw_manager` */
 DROP TABLE IF EXISTS `gw_manager`;/* MySQLReback Separation */ CREATE TABLE `gw_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_nickname` varchar(20) DEFAULT NULL COMMENT '用户呢称',
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(100) NOT NULL,
  `mg_time` int(10) unsigned NOT NULL COMMENT '时间',
  `mg_role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  `mg_open` int(1) NOT NULL DEFAULT '1' COMMENT '账号开启',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_manager` */
 INSERT INTO `gw_manager` VALUES ('1','周迅','zhouxun','d93a5def7511da3d0f2d171d9c344e91','1323212345','2','1'),('2','范冰冰','fanbingbing','d93a5def7511da3d0f2d171d9c344e91','1312345324','1','1'),('3','刘亦菲','admin','d93a5def7511da3d0f2d171d9c344e91','1323456543','0','1'),('4','baby','baby','d93a5def7511da3d0f2d171d9c344e91','1496900199','1','1'),('5','佟丽娅','tongliya','d93a5def7511da3d0f2d171d9c344e91','1496900286','1','1'),('6','古力娜扎','nazha','d93a5def7511da3d0f2d171d9c344e91','1496900373','1','1'),('46','baby','baby','bdd7aa3440c5d4bb95127588721f7bad','1496900666','1','1'),('47','迪丽热巴','reba','6116afedcb0bc31083935c1c262ff4c9','1497927364','1','1'),('48','宋茜','songqian','6116afedcb0bc31083935c1c262ff4c9','1497927932','2','1'),('49','张馨予','zhangxinyu','6116afedcb0bc31083935c1c262ff4c9','1497928001','1','1'),('50','景甜','jingtian','6116afedcb0bc31083935c1c262ff4c9','1497928023','1','1'),('51','唐嫣','tangyan','6116afedcb0bc31083935c1c262ff4c9','1497928044','1','1'),('52','刘涛','liutao','6116afedcb0bc31083935c1c262ff4c9','1497928073','2','1');/* MySQLReback Separation */
 /* 创建表结构 `gw_map` */
 DROP TABLE IF EXISTS `gw_map`;/* MySQLReback Separation */ CREATE TABLE `gw_map` (
  `map_id` int(1) NOT NULL AUTO_INCREMENT,
  `map_x` varchar(255) COLLATE utf8_bin NOT NULL,
  `map_y` varchar(255) COLLATE utf8_bin NOT NULL,
  `map_content` varchar(200) CHARACTER SET utf8 NOT NULL,
  `map_time` int(11) NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_map` */
 INSERT INTO `gw_map` VALUES ('1','106.550595','29.403296','木鸽科技','1498470028');/* MySQLReback Separation */
 /* 创建表结构 `gw_nav` */
 DROP TABLE IF EXISTS `gw_nav`;/* MySQLReback Separation */ CREATE TABLE `gw_nav` (
  `nav_id` int(3) NOT NULL AUTO_INCREMENT,
  `nav_parent` int(3) NOT NULL,
  `nav_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nav_url` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '链接',
  `nav_level` int(1) NOT NULL DEFAULT '0',
  `nav_time` int(11) NOT NULL,
  PRIMARY KEY (`nav_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='导航栏表';/* MySQLReback Separation */
 /* 插入数据 `gw_nav` */
 INSERT INTO `gw_nav` VALUES ('1','0','首页','','0','1497928023'),('2','1','意不意外？','yiwai.com','1','1497928023'),('3','1','刺不刺激？','ciji.com','1','1497925023'),('4','0','开不开心？','','0','1497928423'),('5','0','厉不厉害？','','0','1497927023'),('6','5','没想到吧？','meixiangdao.com','1','1498121014'),('7','5','你幸福吗？','nixinfuma.com','1','1498123391'),('8','0','我很快乐','','0','1498123404');/* MySQLReback Separation */
 /* 创建表结构 `gw_news` */
 DROP TABLE IF EXISTS `gw_news`;/* MySQLReback Separation */ CREATE TABLE `gw_news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `news_type` int(1) NOT NULL COMMENT '1为图文|2为文字',
  `news_showtype_id` int(3) NOT NULL COMMENT '展示类别id',
  `news_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL COMMENT '标题',
  `news_author` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '作者',
  `news_content` longtext CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `news_intrinsic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '原有图片地址',
  `news_thumb` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '缩略图',
  `news_time` int(10) NOT NULL COMMENT '时间',
  `news_open` int(1) NOT NULL DEFAULT '1' COMMENT '是否发布',
  `news_top` int(10) NOT NULL COMMENT '置顶',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('6','1','1','青花瓷','周杰伦','<pre class=\"best-text mb-10\" style=\"margin: 0.5em 0px; padding: 0.4em 0.6em; border-radius: 8px; background: rgb(248, 248, 248); color: rgb(0, 0, 0); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; min-height: 55px;\">&nbsp;&nbsp;&nbsp;&nbsp;素胚勾勒出青花笔锋浓转淡，
&nbsp;&nbsp;&nbsp;&nbsp;瓶身描绘的牡丹一如你初妆
&nbsp;&nbsp;&nbsp;&nbsp;冉冉檀香透过窗心事我了然，
　&nbsp;&nbsp;宣纸上走笔至此搁一半，
　　釉色渲染仕女图韵味被私藏，
　　而你嫣然的一笑如含苞待放，
　　月色被打捞起晕开了结局，
　　如传世的青花瓷自顾自美丽你眼带笑意，
　　色白花青的锦鲤跃然於碗底，
　　临摹宋体落款时却惦记著你，
　　你隐藏在窑烧里千年的秘密，
　　极细腻犹如绣花针落地，
　　帘外芭蕉惹骤雨门环惹铜绿，
　　而我路过那江南小镇惹了你，
　　在泼墨山水画里你从墨色深处被隐去</pre><p>&nbsp; &nbsp; &nbsp; <img src=\"/ueditor/php/upload/image/20170609/1496988546992614.png\" title=\"1496988546992614.png\" alt=\"zhoujiel.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1496988571','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('7','1','1','地球的另一个你','陈佳','<p>01<br/>&nbsp; 我坐在巴黎一家咖啡厅靠窗的位置，来这家咖啡厅大多是情侣，因为这位置很好，能看得见巴黎那座带有神秘又神圣的铁塔，店名也很有意思“Another of the earth you 地球的另一个你”。</p><p>&nbsp; 我好奇问店里的老板，为什么取这么有意思的名字？老板的回答让我有些惊讶，他说这家咖啡厅并不是自己的，他只是帮别人看着，真正的老板上一个月回中国了，他说要寻找一个梦里的女孩。</p><p>&nbsp; 老板耸了耸肩表示不理解，然后问我相信梦里有个你一直在寻找的人吗？我对他只是笑了笑，转头望着巴黎的铁塔，天空飘起了鹅毛小雪。</p><p>&nbsp; 我也不知道从什么时候起，在路上走着走着，突然会回过头去，总有一种很奇妙的感觉，好像在寻找着某一个人，然而后边什么也没有，凝视了很久，轻轻叹了一口气继续向前走。</p><p>&nbsp;梦里也经常出现同一个人，明明记得他的样子，醒来下一秒钟却又不记得了，一次两次还好，连续半年都如此，暑假时我跑回了老家。</p><p>&nbsp; “外祖母，你说我是不是生病了？为什么会做那么奇怪的梦？”我苦恼的皱着眉，外祖母却哈哈哈大笑，让人摸不着头脑。</p><p>&nbsp; “丫头，你相信世界有一种很奇妙的引力吗？它能使两个陌生的人，让他们灵魂产生共鸣，产生的共鸣越浓烈，那表示你们都在寻找着对方，或许某一天你们就相遇了，相反如果你没把这事放在心上，他也没把这事放心上，那你们的共鸣就越来越淡，最后断了联系，各自有着各自的生活。”外祖母用手掌摩擦着她的拐杖，混浊的眼睛有着莫名情绪。</p><p>&nbsp; “我还是不懂...”我挠了挠后脑勺，外祖母讲的话越来越深奥了。</p><p>&nbsp;“呵呵呵...没关系，你只要知道你没生病，而梦里的那个人，就是你一直在寻找的那个人，他也同样寻找着你，那就足够了。”外祖母没再多解释，起身走出了大厅。</p><p>&nbsp; “那个人是男的还是女的啊？”我屁颠屁颠跟在外祖母后面，嘴里还嚼着青葡萄。</p><p>&nbsp; “丫头，这就只有你自己知道了，你梦里的那个人是长什么样的，你比我更清楚吧？虽然你记不清的样貌，但轮廓形态你还是记得吧？”外祖母转过身用食指点了点我的脑袋，看见我这吃样，不禁扑哧笑了出来。</p><p>&nbsp; 老家的风景特别美，山清水秀，鸟语花香，不像城里到处车水马龙，空气质量差，所以一到寒暑假我都往老家跑。</p><p>&nbsp; 旁晚时分我爬上小山坡，坐在一棵树杈上看夕阳，我是家里的独生子女，爸妈平时工作很忙，我总是觉得孤独，自从梦里总出现那个男孩，我突然像找到了一个伴，现实中做不到的事，就在梦里做吧。</p><p>&nbsp;你信不信在地球另一边，有个你一直在寻找的人，他也同样寻找着你?<br/>02<br/>&nbsp;我的梦有些稀奇古怪，是个充满魔幻的世界，例如僵尸、妖魔鬼怪、空中飞人、火山爆发、宇宙空间等，只有说不出来的，没有想象不到的，我曾一度认为所有人都会做这样的梦，直到上了高中、大学，才明白并非如此。</p><p>&nbsp; 我在梦里曾无数次问他：”你能告诉我你的名字吗？“</p><p>&nbsp; 他的身影渐渐模糊，直到最后消失不见，我从梦中醒来，望着窗外的晨光，心里五味杂陈。</p><p>&nbsp; 上大学的时候，家里发生了变故，我辍学了一年，他也仿佛消失在我的世界一般，再也没出现过在我的梦中。</p><p>&nbsp; 很长一段时间我都有些不习惯，从梦中醒来，发现枕头都是湿的，然而随着时间的推移，我几乎不记得有这么一个人，曾经出现过在我梦里。</p><p>&nbsp; 大二寒假的时候我再次回到老家，外祖母前年去世了，她的灵位摆在大厅正门，一进门就能看见她的黑白照，她和蔼可亲的面容清晰可见，时间真是一把杀猪刀。</p><p>&nbsp;我住在外祖母的房间，她的房间整洁干净，她常用的拐杖放在角落，她临走时对舅舅说希望这拐杖不要与她一起火化或丢掉，舅舅便把外祖母的拐杖搁在老家。</p><p>&nbsp;外祖母的东西很多都被清理了，我解衣入睡时不小心把手机摔在了地上，我弯腰要拿起来，发现床底下有一个铁盒子，我好奇的弯下身把铁盒子拿了出来。</p><p>&nbsp;铁盒子铺满了灰尘，这是外祖母那时代的铁盒子，上面刻有牡丹花纹，铁盒子有些沉，不过这铁盒子并没有上锁。</p><p>&nbsp;我打开铁盒子，里面有一本有些泛黄的本子和一些首饰，外祖母年轻的时候是个知青，后来不知什么原因嫁给了外祖父，外祖父只是个老实巴交的农民，也没读过多少书，娶了个有知识有文化的媳妇，能说不高兴吗？</p><p>&nbsp;在我记忆里，外祖父和外祖母相处模式有些奇怪，至于怎么奇怪我也说不清楚，外祖母对我们是和蔼可亲的样子，对外祖父却是及其冷淡。</p><p>&nbsp;打开本子的第一页，上面记载的是1959年，外祖母刚满17岁，在一个县城教书，这天她骑着一辆破旧的自行车，慢悠悠往学校骑去，然而一个熟悉的背影让她愣住了，无论身影轮廓都和梦里的一模一样，她以为自己出现幻觉了，使劲揉了揉眼睛。</p><p>&nbsp;背对她的青年似乎也感受到了什么，回过头与外祖母对视，那一刻他们擦出了火花，一致认为他/她就是自己梦中要寻找的人。</p><p>&nbsp; 翻开第二页，发现中间被撕掉了很多页，直接记载1960年，外祖母在火车站为他送行，望着火车渐行渐远，外祖母忍不住蹲下身子哭了，这一别便是永不相见。</p><p>&nbsp; 后面都是记载外祖母如何如何想念他，后来又嫁给外祖父，后面便是空白一片，弄得我一头雾水。</p><p>&nbsp;在最后一页，外祖母还写了一段话：世界有一种很奇妙的引力，它能使两个陌生的人，让他们灵魂产生共鸣，产生的共鸣越浓烈，那表示都在寻找着对方，或许某一天会相遇，相反如果没把这事放在心上，他也没把这事放心上，那灵魂的共鸣就越来越淡，最后断了联系，各自有着各自的生活。</p><p>&nbsp;那晚又梦到了他，他问我怎么了？为何好长一段时间都没有梦到我，我并没有回答，只是静静凝视着他，问他相信在地球的某个角落，有个你一直在寻找的人吗？比如我和他？</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','','/ueditor/php/upload/image/mugelogo.png','1496998669','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('8','1','1','赤兔之死','原文','<p>&nbsp;</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; 建安二十六年，公元221年，关羽走麦城，兵败遭擒，拒降，为孙权所害。其坐骑赤兔马为孙权赐予马忠。<br/>
	<br/>
	　　一日，马忠上表：赤兔马绝食数日，不久将亡。孙权大惊，急访江东名士伯喜。此人乃伯乐之后，人言其精通马语。<br/>
	<br/>
	　　马忠引伯喜回府，至槽间，但见赤兔马伏于地，哀嘶不止。众人不解，惟伯喜知之。伯喜遣散诸人，抚其背叹道：“昔日曹操做《龟虽寿》，‘老骥伏枥，志在千里。烈士暮年，壮心不已’，吾深知君念关将军之恩，欲从之于地下。然当日吕奉先白门楼殒命，亦未见君如此相依，为何今日这等轻生，岂不负君千里之志哉？”</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"/ueditor/php/upload/image/20170609/1496999230810417.png\" title=\"1496999230810417.png\" alt=\"blob.png\"/>
	<br/>
	　　赤兔马哀嘶一声，叹道：“予尝闻，‘鸟之将死，其鸣也哀；人之将死，其言也善。’今幸遇先生，吾可将肺腑之言相告。吾生于西凉，后为董卓所获，此人飞扬跋扈，杀少帝，卧龙床，实为汉贼，吾深恨之。”<br/>
	<br/>
	　　伯喜点头，曰：“后闻李儒献计，将君赠予吕布，吕布乃天下第一勇将，众皆言，‘人中吕布，马中赤兔。’想来当不负君之志也。”赤兔马叹曰：“公言差矣。吕布此人最是无信，为荣华而杀丁原，为美色而刺董卓，投刘备而夺其徐州，结袁术而斩其婚使。‘人无信不立’，与此等无诚信之人齐名，实为吾平生之大耻！后吾归于曹操，其手下虽猛将如云，却无人可称英雄。吾恐今生只辱于奴隶人之手，骈死于槽枥之间。后曹操将吾赠予关将军；吾曾于虎牢关前见其武勇，白门楼上见其恩义，仰慕已久。关将军见吾亦大喜，拜谢曹操。操问何故如此，关将军答曰：‘吾知此马日行千里，今幸得之，他日若知兄长下落，可一日而得见矣。’其人诚信如此。常言道：‘鸟随鸾凤飞腾远，人伴贤良品质高。’吾敢不以死相报乎？”伯喜闻之，叹曰：“人皆言关将军乃诚信之士，今日所闻，果真如此。”<br/>
	<br/>
	　　赤兔马泣曰：“吾尝慕不食周粟之伯夷、叔齐之高义。玉可碎而不可损其白，竹可破而不可毁其节。士为知己而死，人因诚信而存，吾安肯食吴粟而苟活于世间？”言罢，伏地而亡。伯喜放声痛哭，曰：“物犹如此，人何以堪？”后奏于孙权。权闻之亦泣：“吾不知云长诚信如此，今此忠义之士为吾所害，吾有何面目见天下苍生？”后孙权传旨，将关羽父子并赤兔马厚葬。</p>','','/ueditor/php/upload/image/mugelogo.png','1496999246','1','0'),('9','1','1','天才陈赫','陈赫','<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 天霸动霸歘！！！<br/></p><p><br/></p><p><br/></p><p>&nbsp;<img src=\"/ueditor/php/upload/image/20170620/1497939190406176.jpg\" title=\"1497939190406176.jpg\" alt=\"timg.jpg\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497939233','1','0'),('11','1','1','678678','678678','<p>这里写你的初始化内容<img src=\"/ueditor/php/upload/image/20170620/1497940134118010.png\" title=\"1497940134118010.png\" alt=\"QQ截图20170426144422.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497944733','1','0'),('12','1','1','789','789789','<p>000<img src=\"/ueditor/php/upload/image/20170620/1497944778777928.png\" title=\"1497944778777928.png\" alt=\"QQ图片20170424134303.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497944782','1','0'),('14','1','1','435345','345345','<p>这里写你的初始化内容345345ertertertertere</p>','','/ueditor/php/upload/image/mugelogo.png','1497949780','1','0'),('15','1','1','456','456','<p>这里写你的初始化内容</p>','','/ueditor/php/upload/image/mugelogo.png','1498008683','1','0'),('17','1','1','54','7878','<p>这里写你的初始化内容<img src=\"/ueditor/php/upload/image/20170621/1498028298745525.jpg\" title=\"1498028298745525.jpg\" alt=\"timg.jpg\"/></p>','/ueditor/php/upload/image/20170621/1498028298745525.jpg','/ueditor/php/upload/image/20170621/1498028298745525.jpgxiaotu.png','1498028301','1','0'),('18','1','1','的风格大方','电饭锅电饭锅','<p>这里写你的初始化内容<img src=\"/BScode1/public/uploads/image/20170621/1498028753117265.png\" title=\"1498028753117265.png\" alt=\"0.png\"/></p>','/BScode1/public/uploads/image/20170621/1498028753117265.png','/BScode1/public/uploads/image/20170621/1498028753117265.pngxiaotu.png','1498028757','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('19','1','1','45645','6456456','<p>这里写你的初始化内容</p>','/BScode1/public/uploads/image/mugelogo.png','/BScode1/public/uploads/image/mugelogo.png','1498028872','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('20','1','2','桂纶镁','桂纶镁','<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;桂纶镁（Kwai Lun Mei），1983年12月25日出生于台湾省，华语影视女演员。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; 2002年，还是学生的桂纶镁便出演了个人的首部电影作品《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E8%93%9D%E8%89%B2%E5%A4%A7%E9%97%A8\">蓝色大门</a>》。2005年，桂纶镁主演了文艺片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E7%BB%8F%E8%BF%87/10359121\">经过</a>》。2007年，凭借主演<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E5%91%A8%E6%9D%B0%E4%BC%A6\">周杰伦</a>的导演处女作《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E4%B8%8D%E8%83%BD%E8%AF%B4%E7%9A%84%E7%A7%98%E5%AF%86\">不能说的秘密</a>》被观众熟知。2008年，因主演喜剧片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E5%A5%B3%E4%BA%BA%E4%B8%8D%E5%9D%8F\">女人不坏</a>》而赢得更多发展机会。2012年，桂纶镁凭借爱情片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E5%A5%B3%E6%9C%8B%E5%8F%8B%C2%B7%E7%94%B7%E6%9C%8B%E5%8F%8B\">女朋友·男朋友</a>》获得<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E7%AC%AC49%E5%B1%8A%E5%8F%B0%E6%B9%BE%E7%94%B5%E5%BD%B1%E9%87%91%E9%A9%AC%E5%A5%96\">第49届台湾电影金马奖</a>和<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E7%AC%AC55%E5%B1%8A%E4%BA%9A%E5%A4%AA%E5%BD%B1%E5%B1%95\">第55届亚太影展</a>双料最佳女主角<sup>[1]</sup><a class=\"sup-anchor\">&nbsp;</a>。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; 2013年，凭借剧情片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E5%9C%A3%E8%AF%9E%E7%8E%AB%E7%91%B0/7984067\">圣诞玫瑰</a>》第二次获得金马奖最佳女主角提名<sup>[2]</sup><a class=\"sup-anchor\">&nbsp;</a>。2014年，其主演的悬疑片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E7%99%BD%E6%97%A5%E7%84%B0%E7%81%AB\">白日焰火</a>》获得柏林影展<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E9%87%91%E7%86%8A%E5%A5%96\">金熊奖</a>，她个人则凭借该片连续第三次获得台湾电影金马奖最佳女主角提名<sup>[3]</sup><a class=\"sup-anchor\">&nbsp;</a>。2015年，桂纶镁首次担任台湾电影金马奖评委<sup>[4]</sup><a class=\"sup-anchor\">&nbsp;</a>。2016年，桂纶镁主演了奇幻片《<a target=\"_blank\" href=\"http://baike.baidu.com/item/%E7%BE%8E%E5%A5%BD%E7%9A%84%E6%84%8F%E5%A4%96/19474261\">美好的意外</a>》</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"/BScode1/public/uploads/image/20170623/1498209050627704.jpg\" title=\"1498209050627704.jpg\" alt=\"guilunmei.jpg\"/><br/></p>','/BScode1/public/uploads/image/20170623/1498209050627704.jpg','/BScode1/public/uploads/image/20170623/1498209050627704.jpgxiaotu.png','1498209080','1','0'),('21','1','3','第三方士大夫','水电费','<p>这里写你的初始化内容水电费水电费是</p>','/BScode1/public/uploads/image/mugelogo.png','/BScode1/public/uploads/image/mugelogo.png','1498210384','1','0');/* MySQLReback Separation */
 /* 创建表结构 `gw_pics` */
 DROP TABLE IF EXISTS `gw_pics`;/* MySQLReback Separation */ CREATE TABLE `gw_pics` (
  `pic_id` int(1) NOT NULL AUTO_INCREMENT,
  `pic_cat_id` int(1) NOT NULL COMMENT '类别',
  `pic_title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '图片标题',
  `pic_src` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '路径',
  `pic_url` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '图片链接地址',
  `pic_thumb` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '图片缩略图',
  `pic_status` int(1) NOT NULL COMMENT '状态',
  `pic_order` int(3) NOT NULL COMMENT '排序',
  `pic_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_pics` */
 INSERT INTO `gw_pics` VALUES ('4','1','123','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/2017-04-16T08-29-40.545Z.png

','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497838880'),('5','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/0.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497839066'),('8','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/20170416111617.jpg0.0540s ','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841314'),('9','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/zhoujiel.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841614'),('10','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/0.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841660'),('11','1','123123','./Public/uploads/pic/20170426144422.png','1231231','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1498101347'),('14','2','我喜欢这图-----中的美女','./Public/uploads/pic/0000000.png','1236546','./Public/uploads/pic/0000000.pngxiaotu.png','1','0','1498211716'),('15','6','sdf','./Public/uploads/pic/guilunmei.jpg','sdfsdf','./Public/uploads/pic/guilunmei.jpgxiaotu.png','1','0','1498531178');/* MySQLReback Separation */
 /* 创建表结构 `gw_rjgn` */
 DROP TABLE IF EXISTS `gw_rjgn`;/* MySQLReback Separation */ CREATE TABLE `gw_rjgn` (
  `rj_id` int(4) NOT NULL AUTO_INCREMENT,
  `rjtype_id` varchar(2) CHARACTER SET utf8 NOT NULL COMMENT '类别',
  `rj_pic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rj_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rj_content` text CHARACTER SET utf8 NOT NULL,
  `rj_time` int(11) NOT NULL,
  PRIMARY KEY (`rj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='软件功能介绍';/* MySQLReback Separation */
 /* 创建表结构 `gw_rjtype` */
 DROP TABLE IF EXISTS `gw_rjtype`;/* MySQLReback Separation */ CREATE TABLE `gw_rjtype` (
  `rjtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `rjtype_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`rjtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_rjtype` */
 INSERT INTO `gw_rjtype` VALUES ('1','首页软件功能图文'),('2','专家介绍');/* MySQLReback Separation */
 /* 创建表结构 `gw_role` */
 DROP TABLE IF EXISTS `gw_role`;/* MySQLReback Separation */ CREATE TABLE `gw_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '模块-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_role` */
 INSERT INTO `gw_role` VALUES ('1','经理','1,2,3,4,5,6,7','news-add,news-del,Role-showlist,Manager-showlist,Authority-showlist'),('2','主管','1,2,3','news-add,news-del');/* MySQLReback Separation */
 /* 创建表结构 `gw_showtype` */
 DROP TABLE IF EXISTS `gw_showtype`;/* MySQLReback Separation */ CREATE TABLE `gw_showtype` (
  `showtype_id` int(3) NOT NULL AUTO_INCREMENT,
  `showtype_name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '类型',
  `type` int(2) NOT NULL DEFAULT '1' COMMENT '1为图文|2为文字',
  `showtype_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`showtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_showtype` */
 INSERT INTO `gw_showtype` VALUES ('1','公司新闻','1','1496988571'),('2','行业新闻','1','1496988571'),('3','媒体新闻','1','1498201711');/* MySQLReback Separation */
 /* 创建表结构 `gw_user` */
 DROP TABLE IF EXISTS `gw_user`;/* MySQLReback Separation */ CREATE TABLE `gw_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) NOT NULL DEFAULT '' COMMENT '邮箱',
  `user_sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别',
  `user_qq` varchar(32) NOT NULL DEFAULT '' COMMENT 'qq',
  `user_tel` varchar(32) NOT NULL DEFAULT '' COMMENT '手机',
  `user_xueli` tinyint(4) NOT NULL DEFAULT '1' COMMENT '学历',
  `user_hobby` varchar(32) NOT NULL DEFAULT '' COMMENT '爱好',
  `user_introduce` text COMMENT '简介',
  `user_time` int(11) DEFAULT NULL,
  `last_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8 COMMENT='会员表';/* MySQLReback Separation */
 /* 插入数据 `gw_user` */
 INSERT INTO `gw_user` VALUES ('133','jack','abc','jack@qq.com','3','1234987','13245653478','4','','I am jack','','0'),('161','linken','123456','linken@163.com','1','23892','13298749839','4','1,2,4','I am linken','','0'),('162','xiaoming','abc','xm@163.com','1','29733982','132987394','4','','I am xisaoming','','0'),('167','tom','123','tom','3','2973298','13456378272','3','','I am tom','','0'),('168','linken','1234','','1','','','1','','','','0'),('169','sfsfsfdsf','','','1','','','1','','','','0'),('170','','hel','','1','','','1','','','','0'),('171','','23','','1','','','1','','','','0'),('172','','helololo','','1','','','1','','','','0'),('173','','hello123','','1','','','1','','','','0'),('175','wuhao','123456','wuhao@163.com','1','7326362','13456378272','5','1,3,4','I am wuhao','','0');/* MySQLReback Separation */