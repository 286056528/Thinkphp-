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
    <link rel="stylesheet" href="/xiaoxukunboke/Application/Admin/Public/zyuploadPhp/zyupload/skins/zyupload-1.0.0.min.css " type="text/css">

  
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
            <div class="col-sm-10" >
                <div class="ibox float-e-margins">
                 
                    <div class="ibox-content">
                        <div class="alert alert-info">
                          请在此选择需要添加的图片。只能选择一张！！
                        </div>
                    
                            <div class="form-group draggable">
                                <label class="col-sm-2 control-label">标题：</label>
                                <div class="col-sm-9">
                                    <input type="text" name="rj_title" id="rj_title" class="form-control"  value="<?php echo ($rj_title); ?>" placeholder="标题：">

                                </div>
                            </div>
                               <div class="form-group draggable">
                                <label class="col-sm-2 control-label">位置：</label>
                                <div class="col-sm-9">
                                    <select id="rjtype_id" class="form-control" style="height: 98%" name="">
                                         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["rjtype_id"] == $rjtype_id): ?><option selected="selected"  value="<?php echo ($vo["rjtype_id"]); ?>"><?php echo ($vo["rjtype_name"]); ?></option>
                                        <?php else: ?>
                                        <option  value="<?php echo ($vo["rjtype_id"]); ?>"><?php echo ($vo["rjtype_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-2 control-label">内容：</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="rj_content" id="rj_content" class="form-control"  ><?php echo ($rj_content); ?></textarea>
                                     <input type="hidden" name="rj_id" value="<?php echo ($rj_id); ?>" id="rj_id">

                                </div>
                            </div>
                          
                        <div style="display:none; width: 500px;height: 50px" id="picsrc">
                         </div>
                         <label class="col-sm-3 control-label">请选择需要修改的图片：</label>
                         <div id="zyupload" style="padding:  160px 0 0 0" class="zyupload"></div>   
                         
                         <div class="hr-line-dashed" style="margin: 200px 0 0 0"></div>
                            <div class="form-group draggable">
                                <div class="col-sm-12 col-sm-offset-3">
                                    <button id="editrjgn" class="btn btn-primary" type="button" onclick="editrjgn()">提交</button>&nbsp;&nbsp;
     <button class="btn btn-sm btn-primary" onclick="history.go(-1)" >返回</button>
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
     <script type="text/javascript" src="/xiaoxukunboke/Application/Admin/Public/zyuploadPhp/zyupload/zyupload-1.0.0.min.js"></script>


    <!-- From Builder -->


    <script>
  
$(function(){
                // 初始化插件
                $("#zyupload").zyUpload({
                    width            :   "100%",                 // 宽度
                    height           :   "300px",                 // 宽度
                    itemWidth        :   "140px",                 // 文件项的宽度
                    itemHeight       :   "115px",                 // 文件项的高度
                    url              :   "<?php echo U('Content/picadd');?>",              // 上传文件的路径
                    fileType         :   ["jpg","png","txt","js"],// 上传文件的类型
                    fileSize         :   51200000,                // 上传文件的大小
                    multiple         :   true,                    // 是否可以多个文件上传
                    dragDrop         :   true,                    // 是否可以拖动上传文件
                    tailor           :   true,                    // 是否可以裁剪图片
                    del              :   true,                    // 是否可以删除文件
                    finishDel        :   false,                   // 是否在上传文件完成后删除预览
                    /* 外部获得的回调接口 */
                    onSelect: function(selectFiles, allFiles){    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                        console.info("当前选择了以下文件：");
                        console.info(selectFiles);
                    },
                    onDelete: function(file, files){              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                        console.info("当前删除了此文件：");
                        console.info(file.name);
                    },
                    onSuccess: function(file,response){          // 文件上传成功的回调方法
                    //response=$.parseJSON(response);
                    if(response){ 
                       
                    $('#picsrc').html(response);//将图片赋值到DIV中
                       }
                    },
                    onFailure: function(file, response){          // 文件上传失败的回调方法
                       console.info("此文件上传失败：");
                       console.info(file.name);
                    // return dialog.error('图片上传失败');
                    },
                    onComplete: function(response){               // 上传完成的回调方法
                        console.info("文件上传完成");
                        console.info(response);
                    }
                });
                
            });
 
        
    function editrjgn(){
        
        var rj_pic = document.getElementById("picsrc").innerText;
        var rj_title  =$("#rj_title").val();
        var rj_content  =$("#rj_content").val();
        var rj_id  =$("#rj_id").val();
        var rjtype_id = $("#rjtype_id option:selected").val();
        
        
        var url = "<?php echo U('editrjgn');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"rj_id":rj_id,"rjtype_id":rjtype_id,"rj_title":rj_title,"rj_pic":rj_pic,"rj_content":rj_content},
            dataType:'json',

            success:function(result) {
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                 return dialog.success(result.message,"<?php echo U('rjgn');?>");
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