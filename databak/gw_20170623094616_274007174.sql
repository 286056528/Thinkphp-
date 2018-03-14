/* This file is created by MySQLReback 2017-06-23 09:46:16 */
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_auth` */
 INSERT INTO `gw_auth` VALUES ('1','fa fa-volume-up','新闻管理','0','','','0','0'),('2','','新闻添加','1','News','add','1-2','1'),('3','','新闻列表','1','News','showlist','1-3','1'),('4','fa fa-user-plus','权限管理','0','','','','0'),('5','','角色管理','4','Role','showlist','4-5','1'),('6','','管理员列表','4','Manager','showlist','4-6','1'),('7','','权限管理','4','Authority','showlist','4-7','1'),('8','fa fa-edit','账号管理','0','','','','0'),('9','','账号列表','8','Account','showlist','8-9','1'),('10','fa fa-navicon','内容管理','0','','','','0'),('11','','首页导航栏','10','Content','showlist','10-11','1'),('12','','图片类别','10','Content','category','10-12','1'),('13','','留言管理','10','LMessage','showlist','10-13','1'),('14','fa fa-newspaper-o','介绍管理','0','','','','0'),('15','','企业介绍','14','Introduce','showlist','14-15','1'),('16','','新闻列表2','1','News','showlist1','1-16','1'),('17','','账号添加','8','Account','add','8-17','1'),('18','','人员介绍','14','Introduce','contacts','14-18','1'),('19','fa fa-cogs','网站管理','0','','','','0'),('20','','数据库备份','19','Bak','index','19-20','1');/* MySQLReback Separation */
 /* 创建表结构 `gw_category` */
 DROP TABLE IF EXISTS `gw_category`;/* MySQLReback Separation */ CREATE TABLE `gw_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(64) NOT NULL DEFAULT '',
  `cat_time` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;/* MySQLReback Separation */
 /* 插入数据 `gw_category` */
 INSERT INTO `gw_category` VALUES ('1','首页轮播图','1496999246'),('2','产品图','1496999357');/* MySQLReback Separation */
 /* 创建表结构 `gw_lmessage` */
 DROP TABLE IF EXISTS `gw_lmessage`;/* MySQLReback Separation */ CREATE TABLE `gw_lmessage` (
  `lm_id` int(11) NOT NULL AUTO_INCREMENT,
  `lm_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '名字',
  `lm_phone` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '电话',
  `lm_content` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `lm_time` int(11) NOT NULL COMMENT '时间',
  `lm_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  PRIMARY KEY (`lm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_lmessage` */
 INSERT INTO `gw_lmessage` VALUES ('1','赵丽颖','13525252525','我决定了，加入你们公司，为你们代言！！','1485326985','赵丽颖工作室');/* MySQLReback Separation */
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
 INSERT INTO `gw_nav` VALUES ('1','0','惊不惊喜？','','0','1497928023'),('2','1','意不意外？','yiwai.com','1','1497928023'),('3','1','刺不刺激？','ciji.com','1','1497925023'),('4','0','开不开心？','','0','1497928423'),('5','0','厉不厉害？','','0','1497927023'),('6','6','没想到吧？','meixiangdao.com','1','1498121014'),('7','5','你幸福吗？','nixinfuma.com','1','1498123391'),('8','0','我很快乐','','0','1498123404');/* MySQLReback Separation */
 /* 创建表结构 `gw_news` */
 DROP TABLE IF EXISTS `gw_news`;/* MySQLReback Separation */ CREATE TABLE `gw_news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `news_type` int(1) NOT NULL COMMENT '1为图文|2为文字',
  `news_title` varchar(200) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL COMMENT '标题',
  `news_author` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '作者',
  `news_content` longtext CHARACTER SET utf8 NOT NULL COMMENT '内容',
  `news_intrinsic` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '原有图片地址',
  `news_thumb` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '缩略图',
  `news_time` int(10) NOT NULL COMMENT '时间',
  `news_open` int(1) NOT NULL DEFAULT '1' COMMENT '是否发布',
  `news_top` int(10) NOT NULL COMMENT '置顶',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('6','0','青花瓷','周杰伦','<pre class=\"best-text mb-10\" style=\"margin: 0.5em 0px; padding: 0.4em 0.6em; border-radius: 8px; background: rgb(248, 248, 248); color: rgb(0, 0, 0); font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; min-height: 55px;\">&nbsp;&nbsp;&nbsp;&nbsp;素胚勾勒出青花笔锋浓转淡，
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
 INSERT INTO `gw_news` VALUES ('7','0','地球的另一个你','陈佳','<p>01<br/>&nbsp; 我坐在巴黎一家咖啡厅靠窗的位置，来这家咖啡厅大多是情侣，因为这位置很好，能看得见巴黎那座带有神秘又神圣的铁塔，店名也很有意思“Another of the earth you 地球的另一个你”。</p><p>&nbsp; 我好奇问店里的老板，为什么取这么有意思的名字？老板的回答让我有些惊讶，他说这家咖啡厅并不是自己的，他只是帮别人看着，真正的老板上一个月回中国了，他说要寻找一个梦里的女孩。</p><p>&nbsp; 老板耸了耸肩表示不理解，然后问我相信梦里有个你一直在寻找的人吗？我对他只是笑了笑，转头望着巴黎的铁塔，天空飘起了鹅毛小雪。</p><p>&nbsp; 我也不知道从什么时候起，在路上走着走着，突然会回过头去，总有一种很奇妙的感觉，好像在寻找着某一个人，然而后边什么也没有，凝视了很久，轻轻叹了一口气继续向前走。</p><p>&nbsp;梦里也经常出现同一个人，明明记得他的样子，醒来下一秒钟却又不记得了，一次两次还好，连续半年都如此，暑假时我跑回了老家。</p><p>&nbsp; “外祖母，你说我是不是生病了？为什么会做那么奇怪的梦？”我苦恼的皱着眉，外祖母却哈哈哈大笑，让人摸不着头脑。</p><p>&nbsp; “丫头，你相信世界有一种很奇妙的引力吗？它能使两个陌生的人，让他们灵魂产生共鸣，产生的共鸣越浓烈，那表示你们都在寻找着对方，或许某一天你们就相遇了，相反如果你没把这事放在心上，他也没把这事放心上，那你们的共鸣就越来越淡，最后断了联系，各自有着各自的生活。”外祖母用手掌摩擦着她的拐杖，混浊的眼睛有着莫名情绪。</p><p>&nbsp; “我还是不懂...”我挠了挠后脑勺，外祖母讲的话越来越深奥了。</p><p>&nbsp;“呵呵呵...没关系，你只要知道你没生病，而梦里的那个人，就是你一直在寻找的那个人，他也同样寻找着你，那就足够了。”外祖母没再多解释，起身走出了大厅。</p><p>&nbsp; “那个人是男的还是女的啊？”我屁颠屁颠跟在外祖母后面，嘴里还嚼着青葡萄。</p><p>&nbsp; “丫头，这就只有你自己知道了，你梦里的那个人是长什么样的，你比我更清楚吧？虽然你记不清的样貌，但轮廓形态你还是记得吧？”外祖母转过身用食指点了点我的脑袋，看见我这吃样，不禁扑哧笑了出来。</p><p>&nbsp; 老家的风景特别美，山清水秀，鸟语花香，不像城里到处车水马龙，空气质量差，所以一到寒暑假我都往老家跑。</p><p>&nbsp; 旁晚时分我爬上小山坡，坐在一棵树杈上看夕阳，我是家里的独生子女，爸妈平时工作很忙，我总是觉得孤独，自从梦里总出现那个男孩，我突然像找到了一个伴，现实中做不到的事，就在梦里做吧。</p><p>&nbsp;你信不信在地球另一边，有个你一直在寻找的人，他也同样寻找着你?<br/>02<br/>&nbsp;我的梦有些稀奇古怪，是个充满魔幻的世界，例如僵尸、妖魔鬼怪、空中飞人、火山爆发、宇宙空间等，只有说不出来的，没有想象不到的，我曾一度认为所有人都会做这样的梦，直到上了高中、大学，才明白并非如此。</p><p>&nbsp; 我在梦里曾无数次问他：”你能告诉我你的名字吗？“</p><p>&nbsp; 他的身影渐渐模糊，直到最后消失不见，我从梦中醒来，望着窗外的晨光，心里五味杂陈。</p><p>&nbsp; 上大学的时候，家里发生了变故，我辍学了一年，他也仿佛消失在我的世界一般，再也没出现过在我的梦中。</p><p>&nbsp; 很长一段时间我都有些不习惯，从梦中醒来，发现枕头都是湿的，然而随着时间的推移，我几乎不记得有这么一个人，曾经出现过在我梦里。</p><p>&nbsp; 大二寒假的时候我再次回到老家，外祖母前年去世了，她的灵位摆在大厅正门，一进门就能看见她的黑白照，她和蔼可亲的面容清晰可见，时间真是一把杀猪刀。</p><p>&nbsp;我住在外祖母的房间，她的房间整洁干净，她常用的拐杖放在角落，她临走时对舅舅说希望这拐杖不要与她一起火化或丢掉，舅舅便把外祖母的拐杖搁在老家。</p><p>&nbsp;外祖母的东西很多都被清理了，我解衣入睡时不小心把手机摔在了地上，我弯腰要拿起来，发现床底下有一个铁盒子，我好奇的弯下身把铁盒子拿了出来。</p><p>&nbsp;铁盒子铺满了灰尘，这是外祖母那时代的铁盒子，上面刻有牡丹花纹，铁盒子有些沉，不过这铁盒子并没有上锁。</p><p>&nbsp;我打开铁盒子，里面有一本有些泛黄的本子和一些首饰，外祖母年轻的时候是个知青，后来不知什么原因嫁给了外祖父，外祖父只是个老实巴交的农民，也没读过多少书，娶了个有知识有文化的媳妇，能说不高兴吗？</p><p>&nbsp;在我记忆里，外祖父和外祖母相处模式有些奇怪，至于怎么奇怪我也说不清楚，外祖母对我们是和蔼可亲的样子，对外祖父却是及其冷淡。</p><p>&nbsp;打开本子的第一页，上面记载的是1959年，外祖母刚满17岁，在一个县城教书，这天她骑着一辆破旧的自行车，慢悠悠往学校骑去，然而一个熟悉的背影让她愣住了，无论身影轮廓都和梦里的一模一样，她以为自己出现幻觉了，使劲揉了揉眼睛。</p><p>&nbsp;背对她的青年似乎也感受到了什么，回过头与外祖母对视，那一刻他们擦出了火花，一致认为他/她就是自己梦中要寻找的人。</p><p>&nbsp; 翻开第二页，发现中间被撕掉了很多页，直接记载1960年，外祖母在火车站为他送行，望着火车渐行渐远，外祖母忍不住蹲下身子哭了，这一别便是永不相见。</p><p>&nbsp; 后面都是记载外祖母如何如何想念他，后来又嫁给外祖父，后面便是空白一片，弄得我一头雾水。</p><p>&nbsp;在最后一页，外祖母还写了一段话：世界有一种很奇妙的引力，它能使两个陌生的人，让他们灵魂产生共鸣，产生的共鸣越浓烈，那表示都在寻找着对方，或许某一天会相遇，相反如果没把这事放在心上，他也没把这事放心上，那灵魂的共鸣就越来越淡，最后断了联系，各自有着各自的生活。</p><p>&nbsp;那晚又梦到了他，他问我怎么了？为何好长一段时间都没有梦到我，我并没有回答，只是静静凝视着他，问他相信在地球的某个角落，有个你一直在寻找的人吗？比如我和他？</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','','/ueditor/php/upload/image/mugelogo.png','1496998669','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('8','0','赤兔之死','原文','<p>&nbsp;</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; 建安二十六年，公元221年，关羽走麦城，兵败遭擒，拒降，为孙权所害。其坐骑赤兔马为孙权赐予马忠。<br/>
	<br/>
	　　一日，马忠上表：赤兔马绝食数日，不久将亡。孙权大惊，急访江东名士伯喜。此人乃伯乐之后，人言其精通马语。<br/>
	<br/>
	　　马忠引伯喜回府，至槽间，但见赤兔马伏于地，哀嘶不止。众人不解，惟伯喜知之。伯喜遣散诸人，抚其背叹道：“昔日曹操做《龟虽寿》，‘老骥伏枥，志在千里。烈士暮年，壮心不已’，吾深知君念关将军之恩，欲从之于地下。然当日吕奉先白门楼殒命，亦未见君如此相依，为何今日这等轻生，岂不负君千里之志哉？”</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"/ueditor/php/upload/image/20170609/1496999230810417.png\" title=\"1496999230810417.png\" alt=\"blob.png\"/>
	<br/>
	　　赤兔马哀嘶一声，叹道：“予尝闻，‘鸟之将死，其鸣也哀；人之将死，其言也善。’今幸遇先生，吾可将肺腑之言相告。吾生于西凉，后为董卓所获，此人飞扬跋扈，杀少帝，卧龙床，实为汉贼，吾深恨之。”<br/>
	<br/>
	　　伯喜点头，曰：“后闻李儒献计，将君赠予吕布，吕布乃天下第一勇将，众皆言，‘人中吕布，马中赤兔。’想来当不负君之志也。”赤兔马叹曰：“公言差矣。吕布此人最是无信，为荣华而杀丁原，为美色而刺董卓，投刘备而夺其徐州，结袁术而斩其婚使。‘人无信不立’，与此等无诚信之人齐名，实为吾平生之大耻！后吾归于曹操，其手下虽猛将如云，却无人可称英雄。吾恐今生只辱于奴隶人之手，骈死于槽枥之间。后曹操将吾赠予关将军；吾曾于虎牢关前见其武勇，白门楼上见其恩义，仰慕已久。关将军见吾亦大喜，拜谢曹操。操问何故如此，关将军答曰：‘吾知此马日行千里，今幸得之，他日若知兄长下落，可一日而得见矣。’其人诚信如此。常言道：‘鸟随鸾凤飞腾远，人伴贤良品质高。’吾敢不以死相报乎？”伯喜闻之，叹曰：“人皆言关将军乃诚信之士，今日所闻，果真如此。”<br/>
	<br/>
	　　赤兔马泣曰：“吾尝慕不食周粟之伯夷、叔齐之高义。玉可碎而不可损其白，竹可破而不可毁其节。士为知己而死，人因诚信而存，吾安肯食吴粟而苟活于世间？”言罢，伏地而亡。伯喜放声痛哭，曰：“物犹如此，人何以堪？”后奏于孙权。权闻之亦泣：“吾不知云长诚信如此，今此忠义之士为吾所害，吾有何面目见天下苍生？”后孙权传旨，将关羽父子并赤兔马厚葬。</p>','','/ueditor/php/upload/image/mugelogo.png','1496999246','1','0'),('9','0','天才陈赫','陈赫','<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 天霸动霸歘！！！<br/></p><p><br/></p><p><br/></p><p>&nbsp;<img src=\"/ueditor/php/upload/image/20170620/1497939190406176.jpg\" title=\"1497939190406176.jpg\" alt=\"timg.jpg\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497939233','1','0'),('10','0','678','678678','<p>67867867<img src=\"/ueditor/php/upload/image/20170620/1497939812806415.png\" title=\"1497939812806415.png\" alt=\"OA系统功能模块.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497939834','1','0'),('11','0','678678','678678','<p>这里写你的初始化内容<img src=\"/ueditor/php/upload/image/20170620/1497940134118010.png\" title=\"1497940134118010.png\" alt=\"QQ截图20170426144422.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497944733','1','0'),('12','0','789','789789','<p>000<img src=\"/ueditor/php/upload/image/20170620/1497944778777928.png\" title=\"1497944778777928.png\" alt=\"QQ图片20170424134303.png\"/></p>','','/ueditor/php/upload/image/mugelogo.png','1497944782','1','0'),('14','0','435345','345345','<p>这里写你的初始化内容345345ertertertertere</p>','','/ueditor/php/upload/image/mugelogo.png','1497949780','1','0'),('15','0','456','456','<p>这里写你的初始化内容</p>','','/ueditor/php/upload/image/mugelogo.png','1498008683','1','0'),('17','0','54','7878','<p>这里写你的初始化内容<img src=\"/ueditor/php/upload/image/20170621/1498028298745525.jpg\" title=\"1498028298745525.jpg\" alt=\"timg.jpg\"/></p>','/ueditor/php/upload/image/20170621/1498028298745525.jpg','/ueditor/php/upload/image/20170621/1498028298745525.jpgxiaotu.png','1498028301','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('18','0','的风格大方','电饭锅电饭锅','<p>这里写你的初始化内容<img src=\"/BScode1/public/uploads/image/20170621/1498028753117265.png\" title=\"1498028753117265.png\" alt=\"0.png\"/></p>','/BScode1/public/uploads/image/20170621/1498028753117265.png','/BScode1/public/uploads/image/20170621/1498028753117265.pngxiaotu.png','1498028757','1','0');/* MySQLReback Separation */
 /* 插入数据 `gw_news` */
 INSERT INTO `gw_news` VALUES ('19','0','45645','6456456','<p>这里写你的初始化内容</p>','/BScode1/public/uploads/image/mugelogo.png','/BScode1/public/uploads/image/mugelogo.png','1498028872','1','0');/* MySQLReback Separation */
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;/* MySQLReback Separation */
 /* 插入数据 `gw_pics` */
 INSERT INTO `gw_pics` VALUES ('4','1','123','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/2017-04-16T08-29-40.545Z.png

','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497838880'),('5','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/0.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497839066'),('8','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/20170416111617.jpg0.0540s ','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841314'),('9','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/zhoujiel.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841614'),('10','1','','D:/wamp/www/BScode1/Application/Admin/Controller/../Public/uploads/0.png','','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1497841660'),('11','1','123123','./Public/uploads/pic/20170426144422.png','1231231','./Public/uploads/pic/20170426144422.pngxiaotu.png','1','0','1498101347'),('12','2','测试一下这个','./Public/uploads/pic/0000000.png','22156165165166','./Public/uploads/pic/0000000.pngxiaotu.png','1','0','1498102335');/* MySQLReback Separation */
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