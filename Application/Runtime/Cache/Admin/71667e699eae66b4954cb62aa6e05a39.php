<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title> 后台登陆</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/xiaoxukunboke/Application/Admin/Public/favicon.ico"> <link href="/xiaoxukunboke/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse" style="background: #016C6A;">
                <ul class="nav" id="side-menu">
                     <li class="nav-header" style="background: #016C6A;">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="/xiaoxukunboke/Application/Admin/Public/#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                       <!--  <i class="fa fa-area-chart">123</i>  -->
                                     
                                        <strong class="font-bold" >后台管理</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">后台管理
                        </div>
                    </li>
                    <li class="line dk"></li>
                   <!--  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                       <span class="ng-scope">分类</span>
                   </li> -->
                    <li>
                        <a class="J_menuItem" href="index_v1.html">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li class="line dk"></li>
                    <!-- 循环开始 -->
                    <?php if(is_array($zuobian1)): $i = 0; $__LIST__ = $zuobian1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li>
                        <a href="javascript:void(0);">
                            <i class="<?php echo ($vo1["auth_pic"]); ?>"></i>
                            <span class="nav-label"><?php echo ($vo1["auth_name"]); ?></span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                        <!--  子菜单开始 -->
                        <?php if(is_array($zuobian2)): $i = 0; $__LIST__ = $zuobian2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo2['auth_pid'] == $vo1['auth_id']): ?><li>
                                <a class="J_menuItem" href="/xiaoxukunboke/index.php/Admin/<?php echo ($vo2["auth_c"]); ?>/<?php echo ($vo2["auth_a"]); ?>"><?php echo ($vo2["auth_name"]); ?></a>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
                        <!--  子菜单结束 -->
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>  
                   <!-- 循环结束 -->
                   
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom" >
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;">
                    <div class="navbar-header" style="width: 49%;">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><!-- 左上角按钮 -->
                    <i class="fa fa-bars"></i>
                     </a>

                    </div>
                     
                    <ul class="nav navbar-top-links navbar-right">
                      
                       
                        <li class="dropdown">
                          <a href="/xiaoxukunboke/Application/Admin/Public/" data-toggle="dropdown">
                              <img alt="image" style=" width: 45px;height: 45px; border-radius: 50%" src="/xiaoxukunboke/Application/Admin/Public/img/a1.jpg"><span style="margin-left:10px "><?php echo ($nickname); ?></span> <span class="fa fa-angle-down"style="margin-left:10px "></span>

                          </a>
                        <ul class="dropdown-menu dropdown-alerts" style="width: 150px">
                              
                                <li>
                                
                                    <a href="javascript:void(0)" onclick="loginout()">
                                        <div>
                                            <i class="fa fa-close fa-fw"></i>退出登录
                                          
                                        </div>
                                    </a>

                                </li>
                            </ul>
                        </li> 
                  
                    </ul>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="index_v1.html?v=4.0" frameborder="0" data-id="index_v1.html" seamless></iframe
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/layer/layer.min.js"></script>
  
    <script src="/xiaoxukunboke/Application/Public/dialog.js"></script>

    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="/xiaoxukunboke/Application/Admin/Public/js/index.js"></script>

    <!-- 第三方插件 -->
   <!--  <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/pace/pace.min.js"></script> -->
<div style="text-align:center;">

</div>
</body>

<script type="text/javascript">
     function loginout(){
        var url = "<?php echo U('login/loginout');?>";

        // 执行异步请求  $.post         
            $.ajax({
            type:'post',
            url:url,
            data: '',
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
               return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.confirm(result.message,"<?php echo U('login/login');?>");
            }
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })
    }
</script>

</html>