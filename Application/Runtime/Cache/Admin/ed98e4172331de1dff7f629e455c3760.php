<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 基础表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/xiaoxukunboke/Application/Admin/Public/favicon.ico"> 
    <link href="/xiaoxukunboke/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
           
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>导航栏列表</h5>

                        <div class="ibox-tools">

                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">选项1</a>
                                </li>
                                <li><a href="#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content">
                          <div class="row">
                            
                            <div class="col-sm-3">
    
                            <a class="btn btn-sm btn-primary" href="/xiaoxukunboke/index.php/Admin/Content/addnav">添加导航</a>

                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>等级</th>
                                    <th>名称</th>
                                    <th>链接</th>
                                    <th>创建时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vo["nav_id"]); ?></td>
                                 <td>
                                 <?php if($vo["nav_level"] == 1): ?>&nbsp;&nbsp;&nbsp;<span class="label label-default">序号 <?php echo ($vo["nav_parent"]); ?> - 二级导航</span>
                                 
                                 <?php else: ?>
                                  <span class="label label-primary">一级导航</span><?php endif; ?>
                                 </td>
                                 <td><?php echo ($vo["nav_title"]); ?></td>

                                
                                 <td><?php echo ($vo["nav_url"]); ?></td>
                                 <td><?php echo (date("Y-m-d H:i:s",$vo["nav_time"])); ?></td>
                               <td><a value="<?php echo ($vo["nav_id"]); ?>"  class="btn btn-sm btn-primary" href="/xiaoxukunboke/index.php/Admin/Content/edit/nav_id/<?php echo ($vo["nav_id"]); ?>">修改</a></td> 
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- 全局js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/layer/layer.min.js"></script>


    <!-- Peity -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
   <!--  <script src="/xiaoxukunboke/Application/Admin/Public/js/demo/peity-demo.js"></script> -->

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });

function addauth(){
layer.open({
  type: 2,
  title: '请填写修改内容',
  area: ['700px', '530px'],
  anim: 1, //0-6的动画形式，-1不开启
  fixed: false, //不固定
  maxmin: true,
  content: 'addAuth.html'
});
}



    </script>

    
    

</body>

</html>