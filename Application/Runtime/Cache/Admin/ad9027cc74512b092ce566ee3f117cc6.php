<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>表单构建</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/xiaoxukunboke/Application/Admin/Public/favicon.ico">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

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
                          请在修改需要类别名称！
                        </div>
                    
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">类别：</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo ($showtype_name); ?>" name="showtype_name" id="showtype_name" class="form-control" placeholder="请输入类别名">
                                     <input type="hidden" value="<?php echo ($showtype_id); ?>"  id="showtype_id" class="form-control" >

                                </div>
                            </div>
                              <div class="form-group draggable">
                                <label class="col-sm-3 control-label">请选择展现方式：</label>
                                <div class="col-sm-9">
                                    <select id="sel" class="form-control" style="height: 98%" name="">
                                        
                                        <option  value="1">图文</option>
                                        <option  value="2">仅文字</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="hr-line-dashed"></div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button id="adduser" style="margin: 15px 0 0 0" class="btn btn-primary"  type="button" onclick="saveshowtype()">提交</button>
                                    <button id="adduser"style="margin: 15px 0 0 0" class="btn btn-primary" type="button" onclick="history.go(-1);">返回</button>
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
    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/content.js?v=1.0.0"></script>

    <!-- jQuery UI -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/jquery-ui-1.10.4.min.js"></script>

    <!-- From Builder -->


    <script>
   
    
      function saveshowtype(){
              var showtype_id  =$("#showtype_id").val();
              var showtype_name  =$("#showtype_name").val();
              var news_type = $("#sel option:selected").val();
        // 执行异步请求  $.post    
           var url = "<?php echo U('edittype');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"news_type":news_type,"showtype_id":showtype_id,"showtype_name":showtype_name},
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
               return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message,"<?php echo U('showtype');?>");
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