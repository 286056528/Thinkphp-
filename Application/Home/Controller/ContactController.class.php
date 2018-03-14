<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {

    //页面留言 加入到数据库
   public function addlm(){
     	 $data['lm_name']=$_POST['lm_name'];
        $data['lm_content']=$_POST['lm_content'];
        $data['lm_phone']=$_POST['lm_phone'];
        $data['lm_time']=time();
        $row=M('lmessage')->add($data);
        if ($row) {
            return showPopup(1,'添加成功');
        }
        else{
            return showPopup(0,'添加失败');
        }


   }

  //展示页面
     public function showlist(){
      $this->display();
     }

     //展示相册所有图片
     public function xiangce(){
    $list=M('pics')->where('pic_status=1')->select();
    
    $this->assign('list',$list);

      $this->display();
     }
    
}