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
                        <h5>权限列表</h5>

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
    
                            <button type="button" id="addauth" onclick="addauth()" class="btn btn-sm btn-primary">添加权限</button>

                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>数字头像</th>
                                    <th>权限名称</th>
                                    <th>控制器名</th>
                                    <th>方法名</th>
                                    <th>全路径</th>
                                    <th>权限等级</th>
                               <!--      <th>操作</th> -->
                                </tr>
                            </thead>
                            <tbody>
                             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($i); ?></td>
                                 <td><?php echo ($vo["auth_pic"]); ?></td>
                                 <td><?php echo ($vo["auth_name"]); ?></td>
                                 <td><?php echo ($vo["auth_c"]); ?></td>
                                 <td><?php echo ($vo["auth_a"]); ?></td>
                                 <td><?php echo ($vo["auth_path"]); ?></td>
                                 <td><?php echo ($vo["auth_level"]); ?></td>
                                 <!-- <td><a href="/xiaoxukunboke/index.php/Admin/Authority/updateAuth/auth_id/<?php echo ($vo['auth_id']); ?>">修改</a></td> -->
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