<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - 数据表格</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="/xiaoxukunboke/Application/Admin/Public/shortcut icon" href="favicon.ico"> 
    <link href="/xiaoxukunboke/Application/Admin/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/xiaoxukunboke/Application/Admin/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/xiaoxukunboke/Application/Admin/Public/css/animate.css" rel="stylesheet">
    <link href="/xiaoxukunboke/Application/Admin/Public/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>留言列表</h5>
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
                       
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                     <th>序号</th>
                                    <th>名字</th>
                                    <th>电话</th>
                                    <th>内容</th>
                                    <th>留言时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($vo1["lm_name"]); ?></td>
                        <td><?php echo ($vo1["lm_phone"]); ?></td>
                        <td><?php echo (mb_strcut($vo1["lm_content"],0,80,'utf-8')); ?>...</td>
                        <td><?php echo (date("Y-m-d H:i:s",$vo1["lm_time"])); ?></td>
                       
                        <td> 
                        <a value="<?php echo ($vo1["lm_id"]); ?>"  class="btn btn-sm btn-primary" href="/xiaoxukunboke/index.php/Admin/LMessage/details/lm_id/<?php echo ($vo1["lm_id"]); ?>">详情</a>
                        <button  value="<?php echo ($vo1["lm_id"]); ?>"  class="btn btn-sm btn-primary" onclick="deletelm(this.value)">删除</button> 
                      
                        </td>
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
    <script src="/xiaoxukunboke/Application/Public/layer/layer.js"></script>
    <script src="/xiaoxukunboke/Application/Public/dialog.js"></script>


    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/xiaoxukunboke/Application/Admin/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="/xiaoxukunboke/Application/Admin/Public/js/content.js?v=1.0.0"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').dataTable();

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });
  function deletelm(value){
         //  alert(value);
        // 执行异步请求  $.post    
           var url = "<?php echo U('deletelm');?>";
            $.ajax({
            type:'post',
            url:url,
            data:{"value":value},
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