<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

        <link rel="shortcut icon"  href="/xiaoxukunboke/Application/pub/img/ico.png" />     
        <link rel="stylesheet"  href="/xiaoxukunboke/Application/pub/css/my.css" />
        <link rel="stylesheet"  href="/xiaoxukunboke/Application/pub/css/style.css" />
</head>
<body style="background-color: #512C2C">

  <div class="foot"> 
                     <div class="branch" > 
                         <img src="/xiaoxukunboke/Application/pub/img/logo.png" alt="" />
                         <div class="code"> 
                             <img src="/xiaoxukunboke/<?php echo ($rj_pic); ?>" alt="" />
                             <dt>微信公众号</dt>
                             <dd><?php echo ($rj_content); ?><br />技术管理：木鸽科技</dd>
                         </div>
                     </div>

                

                     <ul class="site"> 
                      <volist name="list4" id="vo">
                         <li><dt><a target="_parent" href="<?php echo U('index/index');?>" >首页</a></dt>
                                <p> 
                                     <a target="_parent" href="<?php echo U('index/index');?>">智能ERP</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">核心技术</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">软件功能</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">合作伙伴</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">案例展示</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">新闻资讯</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">木鸽简介</a>
                                     <a target="_parent" href="<?php echo U('index/index');?>">联系方式</a>
                                </p>
                         </li>
                         <li><dt><a target="_parent" href="<?php echo U('aboutmuge/showlist');?>" >关于木鸽</a></dt> 
                                <p> 
                                     <a target="_parent" href="<?php echo U('aboutmuge/showlist');?>">公司简介</a>
                                     <a target="_parent" href="<?php echo U('aboutmuge/showlist');?>">研发团队</a>
                                     <a target="_parent" href="<?php echo U('aboutmuge/showlist');?>">专家名录</a>
                                </p>                         
                         </li>
                         <li><dt><a target="_parent" href="<?php echo U('ERP/showlist');?>" >ERP系统</a></dt>
                                <p> 
                                     <a target="_parent" href="<?php echo U('ERP/showlist');?>">ERP系统</a>
                                     <a target="_parent" href="<?php echo U('ERP/showlist');?>">核心功能展示</a>
                                </p>     
                         </li>
                         <li><dt><a target="_parent" href="<?php echo U('solution/showlist');?>" >解决方案</a></dt>
                         </li>
                         <li><dt><a target="_parent" href="<?php echo U('news/showlist');?>" >新闻资讯</a></dt>
                                  <p> 
                                     <a target="_parent" href="<?php echo U('news/showlist');?>">公司新闻</a>
                                     <a target="_parent" href="<?php echo U('news/industry');?>">行业动态</a>
                                     <a target="_parent" href="<?php echo U('news/meida');?>">媒体报道</a>
                                </p>    </li>
                         <li><dt><a target="_parent" href="<?php echo U('partner/showlist');?>" >合作伙伴</a></dt></li>
                         <li><dt><a target="_parent" href="<?php echo U('case/showlist');?>" >近期案例</a></dt></li>
                         <li><dt><a target="_parent" href="<?php echo U('contact/showlist');?>" >联系我们</a></dt></li>
                     </ul>
                     <div class="clear"></div>                   
                 </div>

                 <script type="text/javascript" src="/xiaoxukunboke/Application/pub/js/jquery.js"></script>
        <script type="text/javascript" src="/xiaoxukunboke/Application/pub/js/modernizr.js"></script>
        <script type="text/javascript" src="/xiaoxukunboke/Application/pub/js/scroll.js"></script>
        <script type="text/javascript" src="/xiaoxukunboke/Application/pub/js/common.js"></script>   
        <script type="text/javascript" src="/xiaoxukunboke/Application/pub/js/index.js"></script>
</body>
</html>