<?php

namespace Admin\Controller;
use Think\Controller;
class introduceController extends  \Components\AdminController{



 //图文修改
  public  function editrjgn(){

   $list=M('rjtype')->select();
   $this->assign('list',$list);
   if (IS_POST) {
      $data['rj_title']=$_POST['rj_title'];
      $data['rj_id']=$_POST['rj_id'];
      $data['rjtype_id']=$_POST['rjtype_id'];
      $data['rj_content']=$_POST['rj_content'];
      $data['rj_pic']=$_POST['rj_pic'];
      $data['rj_time']=time();
      
     //删除原有文件
      $id['rj_id']=$_POST['rj_id'];
      $row=M('rjgn')->where($id)->find();
      if (!$data['rj_pic']) {
        $rj_pic= $row['rj_pic'];
        unlink($pic_src);
       } 
      
      $sql=M('rjgn')->save($data);
      if ($sql) {
        return showPopup(1,'修改成功');
      }
      else{
        return showPopup(0,'修改失败');
      }

    }

   if (IS_GET) {
        $rjgn['rj_id']=$_GET['rj_id'];

        $row=M('rjgn')->where($rjgn)->join('gw_rjtype ON gw_rjtype.rjtype_id=gw_rjgn.rjtype_id ')->find(); 
        
        $rj_title= $row['rj_title'];  
        $rj_time= $row['rj_time'];
        $rj_content= $row['rj_content'];
        $rj_id= $row['rj_id'];
         $rjtype_id= $row['rjtype_id'];
         $this->assign('rjtype_id',$rjtype_id);
        $this->assign('rj_id',$rj_id);
        $this->assign('rj_title',$rj_title);
        $this->assign('rj_time',$rj_time);
        $this->assign('rj_content',$rj_content);
      

        $this->display();
       }

  }

 public function _empty(){

         $this->display('Public/404');
    }
 public function addrjgn(){
   $list=M('rjtype')->select();
   $this->assign('list',$list);
   $this->display();

 }

 public function deleterj(){
    $inc['rj_id']=$_POST['value'];
    $sql=M('rjgn')->where($inc)->find();
    $rj_pic= $sql['rj_pic'];
    unlink($pic_src);
    $row=M('rjgn')->where($inc)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }
   

 }

//软件功能详细情况
 public function  detailsrjgn(){
 
        $rjgn['rj_id']=$_GET['rj_id'];
        $row=M('rjgn')->where($rjgn)->find(); 
        $rj_title= $row['rj_title'];  
        $rj_time= $row['rj_time'];
        $rj_content= $row['rj_content'];
        $rj_pic= $row['rj_pic'];

        $this->assign('rj_title',$rj_title);
        $this->assign('rj_time',$rj_time);
        $this->assign('rj_content',$rj_content);
        $this->assign('rj_pic',$rj_pic);

        $this->display();

   }
public function addrjgnme(){   
      $data['rjtype_id']=$_POST['rjtype_id'];
      $data['rj_title']=$_POST['rj_title'];
  	  $data['rj_content']=$_POST['rj_content'];
    	$data['rj_pic']=$_POST['rj_pic'];
    	$data['rj_time']=time();
  		$row=M('rjgn')->add($data);
  		if ($row) {
  			return showPopup(1,'添加成功');
  		}
  		else{
  			return showPopup(0,'添加失败');
  		}
  }


public function rjgn(){   
  	$list=M('rjgn')->join('gw_rjtype ON gw_rjgn.rjtype_id = gw_rjtype.rjtype_id')->select();
    $this->assign('list',$list);
    $this->display();
  }


 public function saveinc(){

    
    $data['loc_id']=$_POST['loc_id'];
        $data['inc_id']=$_POST['inc_id'];
  	    $data['inc_title']=$_POST['inc_title'];
    	$data['inc_content']=$_POST['content'];
    	$data['inc_time']=time();
  		$row=M('inc')->save($data);
  		if ($row) {
  			return showPopup(1,'修改成功');
  		}
  		else{
  			return showPopup(0,'修改失败');
  		}
  }

  public function editintro(){
        $inc['inc_id']=$_GET['inc_id'];
        $inc_id=$_GET['inc_id'];
        $row=M('inc')->where($inc)->find(); 
        $inc_title= $row['inc_title'];  
        $inc_content= $row['inc_content'];

        $list=M('location')->select();
        $this->assign('list',$list);
        $this->assign('inc_id',$inc_id);
        $this->assign('inc_title',$inc_title);
        $this->assign('inc_content',$inc_content);
        $this->display();
  }




  public function showlist(){
  	$list=M('inc')->join('gw_location ON gw_inc.loc_id = gw_location.loc_id')->select();

    $this->assign('list',$list);
    $this->display();
  }


  public function addinc(){
  	    $data['loc_id']=$_POST['loc_id'];
  	    $data['inc_title']=$_POST['inc_title'];
    	$data['inc_content']=$_POST['content'];
  		$data['inc_time']=time();
  		$row=M('inc')->add($data);
  		if ($row) {
  			return showPopup(1,'添加成功');
  		}
  		else{
  			return showPopup(0,'添加失败');
  		}
  	
  

  }
  public  function deleteinc(){
    $inc['inc_id']=$_POST['value'];
    $row=M('inc')->where($inc)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }
   

   }
   //修改企业介绍
   public function  details(){
     if(IS_GET){
     	$inc['inc_id']=$_GET['inc_id'];
        $row=M('inc')->where($inc)->find(); 
        $inc_title= $row['inc_title'];  
        $inc_time= $row['inc_time'];
        $inc_content= $row['inc_content'];
        $loc_id= $row['loc_id'];
        $loc['loc_id']=$loc_id;
      
        $sql=M('location')->where($loc)->find(); 
         
        $loc_name=$sql['loc_name'];
        $loc_loc=$sql['loc_loc'];
        $this->assign('loc_loc',$loc_loc);
        $this->assign('loc_name',$loc_name);
        $this->assign('inc_title',$inc_title);
        $this->assign('inc_time',$inc_time);
        $this->assign('inc_content',$inc_content);
        //$this->display();
        
     }
      $this->display();

   }

   public function add(){
   	  $list=M('location')->select();
    $this->assign('list',$list);
    $this->display();
   }
 
  
}