<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 嵌套列表</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/muge/Application/Admin/Public/favicon.ico">
    <link href="/muge/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/muge/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/muge/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/muge/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        
        <div class="row">
            <div class="col-sm-12">
      
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>新增角色</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="alert alert-info">
                          
                          请填写新角色名称同时为新角色勾选权限！勾选子选项时请同时勾选父选项！！
                        </div> 
                <div class="dd-handle" >
                  <label class="control-label">请添加角色名称:</label>
                <!-- <span class="label label-info"><i class="fa fa-edit"></i></span>   --> 
            <input type="text" id="role_name"class="form-control" onblur="checkrname()" > 
                </div> 
                
                        <div class="dd" id="nestable2">


                        <div class="ibox-content">
                         
                        <div class="dd" id="nestable2">
                            <ol class="dd-list">
                            <!-- 开始 -->

                        <?php if(is_array($info1)): foreach($info1 as $key=>$vo1): ?><li class="dd-item" data-id="1">
                                    <div class="dd-handle">
                                        <span class="label label-info">
                                        <i class="<?php echo ($vo1["auth_pic"]); ?>"></i></span>
                        <input type="checkbox" name="auth[]" value="<?php echo ($vo1["auth_id"]); ?>" />
                        
                                 <?php echo ($vo1["auth_name"]); ?>
                        </div>
                        <?php if(is_array($info2)): foreach($info2 as $key=>$vo2): if($vo2['auth_pid'] == $vo1['auth_id']): ?><ol class="dd-list">
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <span class="label label-info">
                                                <i class="<?php echo ($vo2["auth_pic"]); ?>"></i></span>
                    <input type="checkbox" name="auth[]" value="<?php echo ($vo2["auth_id"]); ?>" />
                                  <?php echo ($vo2["auth_name"]); ?>
                                            </div>
                                        </li>
                                      
                                    </ol><?php endif; endforeach; endif; ?>
                     </li><?php endforeach; endif; ?>
              <!--   结束 -->

                            </ol>

                        </div>

     <input type="hidden" id="role_id" value="<?php echo ($role_id); ?>" />                 
     <button class="btn btn-sm btn-primary" style="margin: 20px 0px 10px 0px"onclick="dis()" >提交</button>&nbsp;&nbsp;
     <button class="btn btn-sm btn-primary" style="margin: 20px 0px 10px 0px"onclick="back()" >返回</button>
     
   
                    </div>
                </div>
                     <!--    中间段结束 -->
                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- 全局js -->
    <script src="/muge/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/muge/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/muge/Application/Public/layer/layer.js"></script>
    <script src="/muge/Application/Public/dialog.js"></script>


    <!-- 自定义js -->
    <script src="/muge/Application/Admin/Public/js/content.js?v=1.0.0"></script>


    <!-- Nestable List -->
    <!-- <script src="/muge/Application/Admin/Public/js/plugins/nestable/jquery.nestable.js"></script> -->
    <script>
 function checkrname(){
              var role_name=$("#role_name").val();
              // var role_id  =$("#role_id").val();
          
        // 执行异步请求  $.post    
          var url = "<?php echo U('checkrn');?>";

            $.ajax({
            type:'post',
            url:url,
            data:{"role_name":role_name,},
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
               return dialog.error(result.message);
            }
            if(result.status == 1) {
            }
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })
    }
        
    
      function back(){
        history.go(-1);
      }
      function dis(){
              var role_name=$("#role_name").val();
              // var role_id  =$("#role_id").val();
              obj = document.getElementsByName("auth[]");
              auth = [];
              for(k in obj)
              {
              if(obj[k].checked)
              auth.push(obj[k].value);
                   }
          
        // 执行异步请求  $.post    
           var url = "<?php echo U('add');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"auth":auth,"role_name":role_name,},
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