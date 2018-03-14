/**
 * 登录业务类
 * @author  佚名
 */
var login = {
    check : function() {
        // 获取登录页面中的用户名 和 密码
        var admin_user =$("#admin_user").val();
        var admin_psd =$("#admin_psd").val();
        var url = "{:U('login/logincheck')}";

        // var data = {'admin_user':admin_user,'admin_psd':admin_psd};
        // 执行异步请求  $.post
            // alert('1');
            $.ajax({
            type:"post",
            url:url,
            data:{admin_user:admin_user,admin_psd:admin_psd},
           // dataType:'json',

            success:function(result) {
        
            if(result.status == 0) {

               return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message,"{:U('Manager/index')}");
            }
         
            },
            error: function(jqXHR){     
               alert("发生错误：" + jqXHR.status);  
            },
        })
     /*   $.post(url,data,function(result){
              alert('1');
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, 'Manager/index');
            }

        },"json");*/

    }
}