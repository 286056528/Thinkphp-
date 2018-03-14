<?php

namespace Admin\Controller;
use Think\Controller;
class LMessageController extends  \Components\AdminController{
	
	public function showlist(){
	$auth=M('lmessage');
    $list=$auth->select();
 
    $this->assign('list',$list);
    $this->display();

	}
	public function details(){
		$lm_id['lm_id']=$_GET['lm_id'];
        $row=M('lmessage')->where($lm_id)->find(); 
        $lm_title= $row['lm_title'];  
        $lm_name= $row['lm_name'];
        $lm_phone= $row['lm_phone'];
        $lm_time= $row['lm_time'];
        $lm_content= $row['lm_content'];

        $this->assign('lm_title',$lm_title);
        $this->assign('lm_name',$lm_name);
        $this->assign('lm_phone',$lm_phone);
        $this->assign('lm_time',$lm_time);
        $this->assign('lm_content',$lm_content);

        $this->display();
	}
    public function deletelm(){
  
    $lmessage['lm_id']=$_POST['value'];
 
    $row=M('lmessage')->where($lmessage)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }


 }
	
	
}