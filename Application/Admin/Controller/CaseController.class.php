<?php
namespace Admin\Controller;
use Think\Controller;
class CaseController extends \Components\AdminController
{
  
 
 
 //图文修改
  public  function editcase(){

 $list=M('logo')->select();
 $this->assign('list',$list);
   if (IS_POST) {
      $data['logo_id']=$_POST['logo_id'];
      $data['case_id']=$_POST['case_id'];
      $data['case_url']=$_POST['case_url'];
      $data['case_content']=$_POST['case_content'];
      $data['rj_time']=time();
      
     //删除原有文件
      $id['case_id']=$_POST['case_id'];
      $row=M('case')->where($id)->find();
      if (!$data['case_url']) {
        $case_url= $row['case_url'];
        unlink($case_url);
       } 
      
      $sql=M('case')->save($data);
      if ($sql) {
        return showPopup(1,'修改成功');
      }
      else{
        return showPopup(0,'修改失败');
      }

    }

   if (IS_GET) {
        $case['case_id']=$_GET['case_id'];
        $row=M('case')->where($case)->find(); 
        $logo_id= $row['logo_id'];  
        $case_content= $row['case_content'];
        $case_id= $row['case_id'];
        $this->assign('case_id',$case_id);
        $this->assign('logo_id',$logo_id);
        $this->assign('case_content',$case_content);

        $this->display();
       }

  }




   public function deletecase(){
    $inc['case_id']=$_POST['value'];
    $sql=M('case')->where($inc)->find();
    $case_url= $sql['case_url'];
    unlink($pic_src);
    $row=M('case')->where($inc)->delete();

    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }

   }
    public function addcase(){

   $data['case_url']=$_POST['case_url'];
   $data['case_content']=$_POST['case_content'];
   $data['logo_id']=$_POST['logo_id'];
   $data['case_time']=time();
   $sql=M('case')->add($data);
   if ($sql) {
      return showPopup('1','添加成功');
   }
   else{
    return showPopup('0','添加失败');
   }

    }
    public function addlogome(){ 	
   $data['logo_name']=$_POST['logo_name'];
   $data['logo_url']=$_POST['logo_url'];
   $data['logo_time']=time();
   $sql=M('logo')->add($data);
   if ($sql) {
      return showPopup('1','LOGO类别成功');
   }
   else{
    return showPopup('0','添加失败');
   }
    }

	public function addlogo(){
    $this->display();
	}
	public function add(){
    $list=M('logo')->select();
  	$this->assign('list',$list);

    $this->display();
	}
	public function showlist(){
	$list=M('case')->join('gw_logo ON gw_logo.logo_id = gw_case.logo_id')->select();
  	$this->assign('list',$list);
    $this->display();

	}

}