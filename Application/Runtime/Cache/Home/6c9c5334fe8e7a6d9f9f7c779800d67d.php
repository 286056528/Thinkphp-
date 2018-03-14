<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
		<title>木鸽科技</title>
		<link rel="shortcut icon" href="/Application/pub/img/ico.png" />		
		<link rel="stylesheet" href="/Application/pub/css/my.css" />
		<link rel="stylesheet" href="/Application/pub/css/style.css" />
	</head>
	<body>
	    <div class="head" id="head"> 
           <a href="#" class="logo"><img src="/Application/pub/img/logo1.png" alt="" /></a>
           <a href="#" class="logo sp"><img src="/Application/pub/img/logo2.png" alt="" /></a>
		   <ul class="guide"> 
		        <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/<?php echo ($vo["nav_url"]); ?>"><?php echo ($vo["nav_title"]); ?></a> 
                  <p>
                    <?php if(is_array($list5)): $i = 0; $__LIST__ = $list5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo['nav_id'] == $vo2['nav_parent']): ?><a href="/index.php/Home/<?php echo ($vo2["nav_url"]); ?>"><?php echo ($vo2["nav_title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                  </p>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul>                                                         
	   </div>

	   <div class="banner" style="background:url(/Application/pub/img/sove.jpg) no-repeat center center;background-size:cover;"><img src="/Application/pub/img/p7.png" alt="" /></div>
	   
	   
	   <div class="bg" style="background:url(/Application/pub/img/baby.jpg) no-repeat center center;background-size:cover;"> 
			<div class="cont2" style="width:90%;"> 
			    <div class="home"> 
				    <dt><?php echo ($inc_title); ?></dt>
					<dd>MANAGE SOFTWARE CUSTOMIZATION</dd>
					<?php echo ($inc_content); ?>
				</div>

				<div class="scont"> 
					<div class="soves"> 
						<dl class="sove">
							 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div class="sinfo">
										<dt><?php echo ($vo["rj_title"]); ?></dt>
										<dd><?php echo ($vo["rj_content"]); ?></dd>
									</div>
									<img src="/<?php echo ($vo["rj_pic"]); ?>" alt="" />
									<b></b>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>							
						 </dl>
						 
						<dl class="sove sp">
							  <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li><img src="/<?php echo ($vo1["rj_pic"]); ?>" alt="" />
									<div class="sinfo">
										<dt><?php echo ($vo1["rj_title"]); ?></dt>
										<dd><?php echo ($vo1["rj_content"]); ?></dd>
									</div>
									<b></b>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>									
						 </dl>				
					</div>
					<div class="clear" style="background:url(/Application/pub/img/way.png) repeat-x;height:8px;"></div>				
				</div>

			</div>
		    <div class="clear" style="padding-bottom:6%;"></div>
	   </div>

	   


<!--底部栏开始-->
	 
	     <iframe style="width: 100%;height: 360px;margin: -8px 0 -3px 0;" src="<?php echo U('foot/foot');?>"></iframe>				 
	
<!--底部栏结束-->
		<script type="text/javascript" src="/Application/pub/js/jquery.js"></script>
		<script type="text/javascript" src="/Application/pub/js/modernizr.js"></script>
		<script type="text/javascript" src="/Application/pub/js/scroll.js"></script>
        <script type="text/javascript" src="/Application/pub/js/common.js"></script>	  
        <script type="text/javascript">
	$(function(){
	  var $wsi=$('.sove').find('li').eq('0').find('img').height();
	  var $hwi=$('.sove').find('li').eq('0').width();
	  $('.sinfo').height($wsi).width($hwi);
     $(window).resize(function(){
	  var $wsi=$('.sove').find('li').eq('0').find('img').height();
	  var $hwi=$('.sove').find('li').eq('0').width();
	  $('.sinfo').height($wsi).width($hwi);
	 });
				
		
	});
      </script>

	</body>
</html>