<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
  

   public   function _empty(){
        
         $this->display('Public/404');
    }
    //接收提交信息
  public function addcoo(){

        $data['coo_company']=$_POST['coo_company'];
        $data['coo_qq']=$_POST['coo_qq'];
        $data['coo_name']=$_POST['coo_name'];
        $data['coo_phone']=$_POST['coo_phone'];
        $data['coo_time']=time();
        $row=M('cooperation')->add($data);
        if ($row) {
            return showPopup(1,'添加成功');
        }
        else{
            return showPopup(0,'添加失败');
        }
  }
    public function index(){
  
   
        
   /*图文介绍*/
  $list2=M('rjgn')->where('rjtype_id=1')->select();
  $this->assign('list2',$list2);

    /*首页文字介绍*/ 
  $list=M('inc')->select();
  $this->assign('list',$list);
  $this->display();
  
 }

  






}