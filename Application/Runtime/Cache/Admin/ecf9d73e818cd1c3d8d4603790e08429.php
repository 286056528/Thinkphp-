<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 文章页面</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/xiaoxukunboke/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight article">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                  
                        <div class="text-center article-title">
                            <h1>
                               <!-- 标题 -->
                                   <?php echo ($news_title); ?>
                        
                         </h1><br/><br/><br/>
                         <div class="pull-right">
                            <span class="btn btn-white btn-xs" >作者：</span>
                            <span class="btn btn-white btn-xs" ><?php echo ($news_author); ?></span><br/><br/>
                            <span class="btn btn-white btn-xs" ><?php echo (date("Y 年 m 月 d 日  H:i:s",$news_time)); ?></span>
                        </div><br/><br/><br/>
                        </div>
                        <?php echo ($news_content); ?> 
                      <!--  内容 
                       <img style="width: 240px;height: 200px" src="<?php echo ($news_thumb); ?>"> -->  
                        <hr>
 
                        <div class="row">
                            <div class="col-lg-12">


                            </div>
                        </div>
                            <button class="btn btn-sm btn-primary" style="margin: 20px 0px 10px 0px"onclick="history.go(-1);" >返回</button>
             
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 全局js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/content.js?v=1.0.0"></script>


    
    

</body>

</html>