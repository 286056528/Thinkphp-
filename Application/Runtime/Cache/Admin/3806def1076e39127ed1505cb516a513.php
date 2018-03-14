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
                        <h5>添加介绍</h5>

                        <div class="ibox-tools">

                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
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
                        <div class="alert alert-info">
                          此处添加皆为首页信息！！ 非系统人员请勿随意添加
                        </div>
                    
                            <div class="form-group draggable">
                                <label class="col-sm-1 control-label">标题：</label>
                                <div class="col-sm-12">
                                    <input type="text" name="inc_title" id="inc_title" class="form-control" value="<?php echo ($inc_title); ?>" >
                                     <input type="hidden" name="inc_id" id="inc_id" class="form-control" value="<?php echo ($inc_id); ?>" >
                                </div>
                            </div>
                         
                            <div class="form-group draggable">
                                <label class="col-sm-1 control-label">位置：</label>
                                <div class="col-sm-12">
                                    <select id="loc_id" class="form-control" style="height: 98%" name="">
                                         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vo["loc_id"]); ?>"><?php echo ($vo["loc_loc"]); echo ($vo["loc_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                             

                  
                        <div class="form-group draggable">
                                <label class="col-sm-1 control-label">内容：</label>
                                <div class="col-sm-12" style="height: 900px;width: 100%">
                                        <script id="container" style="height: 80%" name="content" type="text/plain"><?php echo ($inc_content); ?></script>
                                     <button id="saveinc"style="margin: 20px 0px 10px 0px" class="btn btn-primary" type="button" onclick="saveinc()">提交</button>
                                     <button class="btn btn-sm btn-primary" style="margin: 20px 0px 10px 0px"onclick="history.go(-1);" >返回</button>
                                
                                </div>
                        </div>

                
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <!-- 全局js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/xiaoxukunboke/Application/Public/layer/layer.js"></script>
    <script src="/xiaoxukunboke/Application/Public/dialog.js"></script>
    <!-- Peity -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/iCheck/icheck.min.js"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/xiaoxukunboke/Application/Public/UEditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/xiaoxukunboke/Application/Public/UEditor/ueditor.all.min.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');

        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });

    </script>

    <script type="text/javascript">
        function saveinc(){	
        var inc_id=$("#inc_id").val(); 	
        var loc_id = $("#loc_id option:selected").val();
        var inc_title=$("#inc_title").val(); 
        var content = ue.getContent();
        
       // var content = ue.getContentTxt()
        var url = "<?php echo U('saveinc');?>";

            $.ajax({
            type:'post',
            url:url,
            data:{"inc_id":inc_id,"loc_id":loc_id,"inc_title":inc_title,"content":content},
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