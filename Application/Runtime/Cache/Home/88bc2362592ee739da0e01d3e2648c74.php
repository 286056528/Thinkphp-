<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Reviews</title>

<link href="/xiaoxukunboke/Application/Home/public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/xiaoxukunboke/Application/Home/public/css/style.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/xiaoxukunboke/Application/Home/public/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'> -->
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>邮箱：10000@qq.com</a></li>
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
								 <li ><a href="/xiaoxukunboke/index.php/Home/Aboutmuge/showlist">关于我</a></li>
								 <li class="dropdown">
									<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">博客<b class="caret"></b></a>
									 <ul class="dropdown-menu">
										<li class="active"><a href="/xiaoxukunboke/index.php/Home/News/showlist">文章列表</a></li>
										
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
<div class="review">
	 <div class="container">
		 <h2>文章</h2>
		 <div class="review-sec">
			 <div class="review-grids">


			 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top: 10px"  class="col-md-6 revw">
					 <div class="rft-grid">
						 <div class="col-md-5 rft-pic">
							 <a href="/xiaoxukunboke/index.php/Home/News/details/news_id/<?php echo ($vo["news_id"]); ?>">
							 <img src="<?php echo ($vo["news_intrinsic"]); ?>" class="img-responsive" alt=""/>
							 </a>
						 </div>
						 <div class="col-md-7 rft-pic-info">
						<h4><a href="/xiaoxukunboke/index.php/Home/News/details/news_id/<?php echo ($vo["news_id"]); ?>"><?php echo ($vo["news_title"]); ?></a></h4>
							 <p><?php echo ($vo["news_abstract"]); ?></p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
				 </div><?php endforeach; endif; else: echo "" ;endif; ?>
				 
				 
				 <div class="clearfix"></div>
			 </div>
			 
		 </div>
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