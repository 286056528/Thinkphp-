<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends \Components\AdminController
{
	
	
	public function index(){
       	$manager=M('Manager')->find(session('mg_id'));//获取当前的管理员
       	$nickname=$manager['mg_nickname'];
		$role=M('role')->find($manager['mg_role_id']);//通过角色的id获取当前的角色信息
		$auth_ids=$role['role_auth_ids'];//角色权限集合
       if ($manager['mg_role_id']==0) {
       	$zuobian1=M('auth')->where(" auth_level=0 ")->select();
       	$zuobian2=M('auth')->where(" auth_level=1 ")->select();
       }else{
        $zuobian1=M('auth')->where("auth_level=0 and auth_id in ($auth_ids) ")->select();
        $zuobian2=M('auth')->where("auth_level=1 and auth_id in ($auth_ids) ")->select();
       }
        $this->assign('nickname',$nickname);
		$this->assign('zuobian1',$zuobian1);
		$this->assign('zuobian2',$zuobian2);
		//var_dump($zuobian);
		$this->display();
	}

	
	public function showlist(){
		//$obj=R('Role/showlist');
	$rolelist=M('role')->select();
	$list=M('auth')->select();

	$this->assign('rolelist',$rolelist);
  	$this->assign('list',$list);
    $this->display();

	}

}