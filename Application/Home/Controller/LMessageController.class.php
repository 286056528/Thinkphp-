<?php
namespace Home\Controller;
use Think\Controller;
class LMessageController extends Controller {
     public function showlist(){
      $this->display();
     }
     //获取留言信息
    public function addLM(){
      $data['lm_name']=$_POST['lm_name'];
      $data['lm_phone']=$_POST['lm_phone'];
      $data['lm_content']=$_POST['lm_content'];
      $data['lm_time']=time();
      $sql=M('')->add($data);

    }
    
}