<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
	
public function _empty(){

		 $this->display('Public/404');
	}
	
  /*  public function checkname(){

     $name=I('post.admin_user');

    if (preg_match("/[\x{4e00}-\x{9fa5}\w]+$/u", $name))  
    {}  
    else{
        
      $this->ajaxReturn("<br/><h3>含有非法字符a </h3><br/>");
    }
   }*/
    public function login(){
     
        $this->display();
    }

    public function logincheck(){

        if (IS_POST) {
                $data=array();
                $data['mg_name']=I('admin_user'); 
                $data['mg_pwd']=I('admin_psd');
                $data['mg_open']=1;
                $data['mg_pwd']=md5(sha1($data['mg_pwd']));
                 if(!$data['mg_name'])
                 {
                   return  showPopup(0,'用户名不能为空');
                  }
                 if(!$data['mg_pwd']) 
                 {
                    return showPopup(0,'密码不能为空');
    
                 }
                $row=M('manager')->where($data)->find();
                if($row){
                    
                      $lang=GetLang();// 语言
                      $ipdz=Getip(); //ip
                      $ipadds = Getaddress();//获得真是地址
                      $browser=GetBrowser();//浏览器类型
                      $os=GetOs();  //操作系统
                   $mes['log_lang']=$lang;
                    $mes['log_ipdz']=$ipdz;
                     $mes['log_ipadds']=$ipadds[0][0]."-".$ipadds[0][1]."-".$ipadds[0][2];
                      $mes['log_browser']=$browser;
                       $mes['log_os']=$os;
                        $mes['log_time']=time();
                         $mes['log_mg_id']=$row['mg_id'];
                         $sql=M('log')->add($mes);
                   session('mg_id',$row['mg_id']);
                   return  showPopup(1,'登录成功');
                }
                else{
                      // $this->ajaxReturn(1);
                  return showPopup(0,'账号或密码错误');
                   
                    }   
             }
 }

public function loginout() {
        session('mg_id', null);
        return showPopup(1,'是否确认退出？');
    }


	/*public function login(){
		 if(IS_POST){
            $obj=new \Think\Verify();
            if($obj->check(I('post.captcha','','trim')))
            {
                $data['mg_name']=I('post.admin_user');
                $data['mg_pwd']=I('post.admin_psd','',  mysql_real_escape_string);
                $row=M('manager')->where($data)->find();
                if($row){
                	session('mg_id',$row['mg_id']);
                    $this->redirect('Manager/index');
                }else {
                        $this->error('用户名或密码错误', U('login'), 4);
                    }
            }else{
                $this->error('验证码错误', U('login'), 4);
            }            
        }
        $this->display();
   

	}
	public function verifyImg(){
      
		   $config =	array(
        'fontSize'  =>  15,              // 验证码字体大小(px)
        'imageH'    =>  40,               // 验证码图片高度
        'imageW'    =>  120,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数
        'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
      
        );

		$obj=new  \Think\Verify($config);//实例化验证码
        $obj->entry();//生成验证码
	}*/


}