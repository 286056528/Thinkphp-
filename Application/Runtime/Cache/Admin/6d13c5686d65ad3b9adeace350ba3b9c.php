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

        <div class="row">
            <div class="col-sm-9">
                <div class="ibox float-e-margins">
                 
                    <div class="ibox-content">
                        <div class="alert alert-info">
                          请在此添加权限，“定义为一级菜单”为一级列表。非开发人员请勿轻易修改！！如果一级没有链接请勿填写！！
                        </div>
                      
                            <div class="form-group draggable">
                                <label class="col-sm-2 control-label">导航名称：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nav_title" id="nav_title"  class="form-control" placeholder="请输入名称">
                                </div>
                            </div>
                              <div class="form-group draggable">
                                <label class="col-sm-2 control-label">导航链接：</label>
                                <div class="col-sm-9">
                                    <input type="text" id="nav_url" class="form-control" placeholder="请输入导航链接">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-2 control-label">请选择父级：</label>
                                <div class="col-sm-9">
                                    <select id="sel" class="form-control" style="height: 98%"  name="nav_parent">
                                        <option value="0" >定义为一级菜单</option>
                                          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["nav_id"]); ?>"><?php echo ($vo["nav_title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                          
                          
                         
                            <div class="hr-line-dashed"></div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3" style="margin: 20px 0 0 10px">
                                    <button class="btn btn-primary" type="submit" onclick="addnav()">提交</button>
                                    <button class="btn btn-sm btn-primary" style="margin-left: 10px"onclick="history.go(-1);" >返回</button>
                
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


     function addnav(){
        // 执行异步请求  $.post   
         var nav_title = $("#nav_title").val(); 
         var nav_url = $("#nav_url").val(); 
         var nav_parent = $("#sel option:selected").val(); 
         var url = "<?php echo U('addnav');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"nav_title":nav_title,"nav_url":nav_url,"nav_parent":nav_parent},
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