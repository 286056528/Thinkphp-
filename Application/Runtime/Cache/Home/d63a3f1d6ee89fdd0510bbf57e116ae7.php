<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>About</title>

<link href="/xiaoxukunboke/Application/Home/public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/xiaoxukunboke/Application/Home/public/css/style.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/xiaoxukunboke/Application/Home/public/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="/xiaoxukunboke/Application/Home/public/css/common.css" />
<link rel="stylesheet" type="text/css" href="/xiaoxukunboke/Application/Home/public/css/style4.css" />
<script type="text/javascript" src="/xiaoxukunboke/Application/Home/public/js/modernizr.custom.79639.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>邮箱：10000@qq.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>1840000000</li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			 <div class="logo">
					 <h1><a href="index.html">BOLG<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span>博客</span></a></h1>
			 </div>
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li ><a href="/xiaoxukunboke/index.php/Home/index/index">主页</a></li>
								 <li class="active"><a href="/xiaoxukunboke/index.php/Home/Aboutmuge/showlist">关于我</a></li>
								 <li class="dropdown">
									<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">博客<b class="caret"></b></a>
									 <ul class="dropdown-menu">
										<li><a href="/xiaoxukunboke/index.php/Home/News/showlist">文章列表</a></li>
										
									</ul> 
								 </li>					
								 <li><a href="/xiaoxukunboke/index.php/Home/Contact/xiangce">相册</a></li>
								 <li><a href="/xiaoxukunboke/index.php/Home/Contact/showlist">联系我</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="/xiaoxukunboke/Application/Home/public/js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->
<div class="about"> 
		<div class="container">
			<h2>About Me</h2>
			<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo2["rjtype_id"] == 1): ?><div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="/xiaoxukunboke/<?php echo ($vo2["rj_pic"]); ?>" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 about-text-right">
					<h4><?php echo ($vo2["rj_title"]); ?></h4>
					<br/>
					    <?php echo ($vo2["rj_content"]); ?>
				</div>
				<div class="clearfix"> </div>
			</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			<div class="abt-btm-grids">

			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["loc_id"] == 2): ?><div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>1</span></figure>
					   </div>
					  <div class="heading">								
						  <h4><?php echo ($vo["inc_title"]); ?></h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					<?php echo ($vo["inc_content"]); ?>
				 </div>	
			 </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["loc_id"] == 3): ?><div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>2</span></figure>
					   </div>
					  <div class="heading">								
						  <h4><?php echo ($vo["inc_title"]); ?></h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					<?php echo ($vo["inc_content"]); ?>
				 </div>	
			 </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["loc_id"] == 4): ?><div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>1</span></figure>
					   </div>
					  <div class="heading">								
						  <h4><?php echo ($vo["inc_title"]); ?></h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					<?php echo ($vo["inc_content"]); ?>
				 </div>	
			 </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["loc_id"] == 5): ?><div class="col-md-3 abt-sec span_1_of_4">
				 <div class="num-heading">
					   <div class="number">
							<figure><span>1</span></figure>
					   </div>
					  <div class="heading">								
						  <h4><?php echo ($vo["inc_title"]); ?></h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					<?php echo ($vo["inc_content"]); ?>
				 </div>	
			 </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			 
			 <div class="clearfix"></div>
		 </div>	
		 <!--teamstarts--> 
			
			<!--teamend--> 

		</div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr">
				 <h4>地址</h4>
				 <p>四川省成都市都江堰市青城山镇东软大道1号</p>
					 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>邮箱</h3>
				 <ul class="ftr-list">
					 <li><a href="#">10000@qq.com</a></li>
					 <li><a href="#">10000@sina.com</a></li>
					 <li><a href="#">10000@139.com</a></li>
					 <li><a href="#">10000@buzhidao.com</a></li>
				
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <h3>电话以及传真</h3>
				 <ul class="ftr-list">
					 <li><a href="#">028-16515616516</a></li>
					 <li><a href="#">1388888888</a></li>
					 <li><a href="#">0239-5455654</a></li>					 
				
				 </ul>				 
			 </div>			 	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>


</body>
</html>