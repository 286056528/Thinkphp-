<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
		<title>木鸽科技</title>
		<link rel="shortcut icon" href="/BScode222/Application/pub/img/ico.png" />	
		<link rel="stylesheet" href="/BScode222/Application/pub/css/my.css" />
		<link rel="stylesheet" href="/BScode222/Application/pub/css/style.css" />
		<link rel="stylesheet" href="/BScode222/Application/pub/css/mypage.css" />
	</head>
	<body>
	  <div class="head" id="head"> 
           <a href="#" class="logo"><img src="/BScode222/Application/pub/img/logo1.png" alt="" /></a>
           <a href="#" class="logo sp"><img src="/BScode222/Application/pub/img/logo2.png" alt="" /></a>
		      <ul class="guide"> 
		        <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/BScode222/index.php/Home/<?php echo ($vo["nav_url"]); ?>"><?php echo ($vo["nav_title"]); ?></a> 
                  <p>
                    <?php if(is_array($list5)): $i = 0; $__LIST__ = $list5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo['nav_id'] == $vo2['nav_parent']): ?><a href="/BScode222/index.php/Home/<?php echo ($vo2["nav_url"]); ?>"><?php echo ($vo2["nav_title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                  </p>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul>                                                          
	   </div>

	   <div class="banner" style="background:url(/BScode222/Application/pub/img/new5.jpg) no-repeat center center;background-size:cover;"><img src="/BScode222/Application/pub/img/p5.png" alt="" /></div>
	   

	   <div class="bg" style="background:#eaeaea;padding-top:4%;" > 
			<div class="container" > 
					<div class="ncont"> 
						    <div class="nhead" style="position:absolute;top:0;left:0;width:31%;"> 
						   	  <dt>媒体报道</dt>
						   	  <dd>MEDIA REPORTS</dd>
						    </div>			
						   <div id="waterfall" >
						      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="cell"><a href="/BScode222/index.php/Home/News/details/news_id/<?php echo ($vo["news_id"]); ?>" class="fi"><img src="<?php echo ($vo["news_intrinsic"]); ?>" alt="" /></a>
												<dt><?php echo ($vo["news_title"]); ?></dt>
										<dd><?php echo (mb_strcut($vo["news_abstract"],0,100,'utf-8')); ?>...</dd>
												<p><?php echo (date("Y-m-d ",$vo["news_time"])); ?> <<a href="/BScode222/index.php/Home/News/details/news_id/<?php echo ($vo["news_id"]); ?>">查看更多 >></a></p>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>	   							
							</div>     	
						   
						   <div class="take"> 
						        <a href="javascript:;" id="take">已无更多···</a>
						   </div>
				    </div>						   
			</div>
		    <div class="clear" style="padding-bottom:5%;"></div>
	   </div>	
			

<!--底部栏开始-->
  <iframe style="width: 100%;height: 360px;margin: -8px 0 -3px 0;" src="<?php echo U('foot/foot');?>"></iframe>
<!--底部栏结束-->
		<script type="text/javascript" src="/BScode222/Application/pub/js/jquery.js"></script>
		<script type="text/javascript" src="/BScode222/Application/pub/js/modernizr.js"></script>
		<script type="text/javascript" src="/BScode222/Application/pub/js/scroll.js"></script>			
        <script type="text/javascript" src="/BScode222/Application/pub/js/waterfall.js"></script>	  
        <script type="text/javascript" src="/BScode222/Application/pub/js/common.js"></script>	  
        <script type="text/javascript">
$(function(){ 
	var opt={
getResource:function(index,render){
	  if(index>=7){
	  	index=index%7+1;
       }
	  var html='';
	  var htmls='';	 
$.ajaxSetup({  
    async : false  
           });  

$.getJSON("json.json",'1',function(data){

$.each(data,function(e,info){

   htmls +='<div class="cell"><a href="#" class="fi"><img src="/BScode222/Application/pub/img/'+info["src"]+'" alt="" /></a>'+
								       '<dt>'+info["title"]+'</dt>'+
										'<dd>'+info["title2"]+'</dd>'+
										'<p>'+info["title3"]+'<a href="#">MORE >></a></p>'+
								'</div>';
				})
  				 return htmls;
			})

    html+=htmls; 		
	  return $(html); 		
  },
  auto_imgHeight:true,
  insert_type:1
}

$('#waterfall').waterfall(opt);		 
		 
		 });
	
      </script>

	</body>
</html>