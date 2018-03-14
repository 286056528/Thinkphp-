<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>表单构建</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/Application/Admin/Public/favicon.ico">
    <link href="/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/Application/Admin/Public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/Application/Admin/Public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

    <style>
        .droppable-active {
            background-color: #ffe !important;
        }

        .tools a {
            cursor: pointer;
            font-size: 80%;
        }

        .form-body .col-md-6,
        .form-body .col-md-12 {
            min-height: 400px;
        }

        .draggable {
            cursor: move;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">

        <div class="row" >
            <div class="col-sm-6" >
                <div class="ibox float-e-margins">
                 
                    <div class="ibox-content">
                        <div class="alert alert-info">
                          请在此输入需要添加的账号！
                        </div>
                    
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">用户昵称：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="mg_nickname" id="mg_nickname" class="form-control" placeholder="请输入昵称">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">登录账号名：</label>
                                <div class="col-sm-9">
                         <input type="text" name="mg_name" id="mg_name" onblur="checkname()" class="form-control" placeholder="请输入账号名">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">登录登录密码：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="mg_pwd" id="mg_pwd" class="form-control" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">请选择角色：</label>
                                <div class="col-sm-9">
                                    <select id="sel" class="form-control" style="height: 98%" name="">
                                        <?php if(is_array($rolelist)): $i = 0; $__LIST__ = $rolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vo["role_id"]); ?>"><?php echo ($vo["role_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                          
                         
                            <div class="hr-line-dashed"></div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button id="adduser" style="margin: 15px 0 0 0" class="btn btn-primary"  type="button" onclick="adduser()">提交</button>
                                    <button id="adduser"style="margin: 15px 0 0 0" class="btn btn-primary" type="button" onclick="back()">返回</button>
                                </div>
                            </div>
                
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    
        </div>

    </div>

    <!-- 全局js -->
    <script src="/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/Application/Public/layer/layer.js"></script>
    <script src="/Application/Public/dialog.js"></script>
    <!-- 自定义js -->
    <script src="/Application/Admin/Public/js/content.js?v=1.0.0"></script>

    <!-- jQuery UI -->
    <script src="/Application/Admin/Public/js/jquery-ui-1.10.4.min.js"></script>

    <!-- From Builder -->


    <script>
      function back(){
         history.go(-1);
     }
    function checkname(){
        var mg_nickname  =$("#mg_nickname").val();
        var mg_name  =$("#mg_name").val();
        var url = "<?php echo U('checkuser');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"mg_nickname":mg_nickname,"mg_name":mg_name},
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
               return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message,"<?php echo U('showlist');?>");
            }
            if(result.status == 3) {
            }
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })


    }



    
      function adduser(){
              var mg_nickname  =$("#mg_nickname").val();
              var mg_name  =$("#mg_name").val();
              var mg_pwd  =$("#mg_pwd").val();
              var mg_role_id = $("#sel option:selected").val();
          
        // 执行异步请求  $.post    
           var url = "<?php echo U('adduser');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"mg_nickname":mg_nickname,"mg_name":mg_name,"mg_pwd":mg_pwd,"mg_role_id":mg_role_id},
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
               return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message,"<?php echo U('showlist');?>");
            }
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })
    }
    </script>

    
    
</body>

</html>