<?php
namespace Home\Controller;
use Think\Controller;
class AboutmugeController extends Controller {
     public function showlist(){
     	 //获取关于我们中图片文字介绍
  $list2=M('rjgn')->where('rjtype_id=1')->select();
  $this->assign('list2',$list2);


  //获取1234的文字信息
    $list=M('inc')->select();
  $this->assign('list',$list);

      $this->display();
     }
    
}