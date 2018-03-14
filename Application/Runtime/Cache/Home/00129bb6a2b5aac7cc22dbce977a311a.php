<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
		<title>木鸽科技</title>
		<link rel="shortcut icon" href="/Application/pub/img/ico.png" />		
		<link rel="stylesheet" href="/Application/pub/css/my.css" />
		<link rel="stylesheet" href="/Application/pub/css/style.css" />
		<link rel="stylesheet" href="/Application/pub/css/mypage.css" />
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

	   <div class="banner" style="background:url(/Application/pub/img/new5.jpg) no-repeat center center;background-size:cover;"><img src="/Application/pub/img/p5.png" alt="" /></div>
	   
	 
	   <div class="bg" style="background:url(/Application/pub/img/pad.jpg) no-repeat center center;background-size:cover;padding-top:4%;" > 
			<div class="container" > 
					<div class="ncont" style="margin-bottom: 80px"> 
                          <dl class="pear"> 
                           <?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li ><a href="#" class="fo"> <img  src="<?php echo ($vo["news_intrinsic"]); ?>" alt="" /></a>
								  <dt><?php echo ($vo["news_title"]); ?></dt>
								  <dd><?php echo (mb_strcut($vo["news_abstract"],0,100,'utf-8')); ?>...</dd>
								  <p><?php echo (date("Y-m-d ",$vo["news_time"])); ?> <a href="/index.php/Home/News/details/news_id/<?php echo ($vo["news_id"]); ?>">查看更多 >></a></p>
								 </li><?php endforeach; endif; else: echo "" ;endif; ?>
						        											 
						  </dl>
					 <div  style="width: 35%;float:right;">
					    <div class="nhead" style="float:right;"> 
						   	  <dt>行业动态</dt>
						   	  <dd>INDUSTRY NEWS</dd>
						    </div>
						    <div class="ncover" style="left:auto;right:0;"> 
								  <a href="/index.php/Home/News/details/news_id/<?php echo ($news_id); ?>" class="fo"> <img style="margin-top: 120px"  src="<?php echo ($news_intrinsic); ?>" alt="" /></a>
								  <dt><?php echo ($news_title); ?></dt>
								  <dd><?php echo (mb_strcut($news_abstract,0,100,'utf-8')); ?>...</dd>
								  <p><?php echo (date("Y-m-d ",$news_time)); ?> <a href="/index.php/Home/News/details/news_id/<?php echo ($news_id); ?>">查看更多 >></a></p>
						    </div>

                         </div>     

							<div class="clear">
								
							</div>
			         </div>				   
			     <div   style="position: absolute;left: 45%;">
								<?php echo ($page); ?> 
				 </div>		  
				
			</div>
		   <div class="clear" style="padding-bottom:10%;"></div> 
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
	
		 });
	
      </script>

	</body>
</html>