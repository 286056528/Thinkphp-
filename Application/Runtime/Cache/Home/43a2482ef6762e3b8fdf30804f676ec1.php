<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
		<title>木鸽科技</title>
		<link rel="shortcut icon" href="/muge/Application/pub/img/ico.png" />		
		<link rel="stylesheet" href="/muge/Application/pub/css/my.css" />
		<link rel="stylesheet" href="/muge/Application/pub/css/style.css" />
	</head>
	<body>
	   <div class="head" id="head"> 
           <a href="#" class="logo"><img src="/muge/Application/pub/img/logo1.png" alt="" /></a>
           <a href="#" class="logo sp"><img src="/muge/Application/pub/img/logo2.png" alt="" /></a>
		      <ul class="guide"> 
		        <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/muge/index.php/Home/<?php echo ($vo["nav_url"]); ?>"><?php echo ($vo["nav_title"]); ?></a> 
                  <p>
                    <?php if(is_array($list5)): $i = 0; $__LIST__ = $list5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo['nav_id'] == $vo2['nav_parent']): ?><a href="/muge/index.php/Home/<?php echo ($vo2["nav_url"]); ?>"><?php echo ($vo2["nav_title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                  </p>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
		   </ul>                                                       
	   </div>

	   <div class="banner" style="background:url(/muge/Application/pub/img/bge.jpg) no-repeat center center;background-size:cover;"><img src="/muge/Application/pub/img/p2.png" alt="" /></div>
	   
	   
	   <div class="bg" style="background:url(/muge/Application/pub/img/dem.jpg) no-repeat center center;background-size:cover;"> 
			<div class="cont2"> 
			    <div class="home"> 
				    <dt>近期案例</dt>
					<dd>RECENT CASES</dd>
				</div>
				
	<div class="cover" id="cover"> 
	<img id="casepic"  src="/muge/Application/pub/img/cover.jpg"  class="ma" alt="" />
					<div class="explain"> 
	<img id="caselogo" src="/muge/Application/pub/img/he1.png" alt="" />
					   <p id="case_content">家由莱全屋定制家具是一家集定制衣柜、定制橱柜、整体客厅定制为一体的超级家具制造商。一直致力于高端欧式家具的研发与制造。</p>
					</div>
	</div>
				
				<div class="gallery"> 
					 <dl id="gallery"> 
                           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li>
					        <label>
					        <img id="<?php echo ($vo1["case_id"]); ?>" onclick="changesrc(this.id)" src="/muge/<?php echo ($vo1["case_url"]); ?>" class="sp" alt="" />
					        </label>
					        <p style="background:url(/muge/<?php echo ($vo1["logo_url"]); ?>) no-repeat center center;">
					        </p>
					        </li><?php endforeach; endif; else: echo "" ;endif; ?>
					        
					 </dl>		
                     <a href="javascript:;" class="ttop" id="ttop" ></a>					 
                     <a href="javascript:;" class="tbom" id="tbom"></a>					 
				</div>

			</div>
		    <div class="clear" style="padding-bottom:8%;"></div>
	   </div>

	   


<!--底部栏开始-->
  <iframe style="width: 100%;height: 360px;margin: -8px 0 -3px 0;" src="<?php echo U('foot/foot');?>"></iframe>
<!--底部栏结束-->
		<script type="text/javascript" src="/muge/Application/pub/js/jquery.js"></script>
		<script type="text/javascript" src="/muge/Application/pub/js/modernizr.js"></script>
		<script type="text/javascript" src="/muge/Application/pub/js/scroll.js"></script>
        <script type="text/javascript" src="/muge/Application/pub/js/common.js"></script>	  
        <script type="text/javascript" src="/muge/Application/pub/js/pro.js"></script>	  
        <script type="text/javascript">

	 function changesrc(id){
         //  alert(value);
        // 执行异步请求  $.post    
       var url = "<?php echo U('changesrc');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"id":id},
            dataType:'json',

            success:function(result) {
                
                var logo=result.data.logo_url;
                 var casepic=result.data.case_url;
                 var case_content=result.data.case_content;
     document.getElementById('cover').innerHTML='<img id="casepic"  src="/muge/'+casepic+'"  class="ma" alt="" /><div class="explain"><img id="caselogo" src="/muge/'+logo+'" alt="" /><p id="case_content">'+case_content+'</p></div>'
          
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })

    }
      </script>

	</body>
</html>