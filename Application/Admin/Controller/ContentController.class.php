<?php

namespace Admin\Controller;
use Think\Controller;
class ContentController extends  \Components\AdminController{


//添加相册图片
public function  pictosql(){
    $data['pic_src']=$_POST['pic_src'];
    $old=$data['pic_src'];
    $xiaotu=$old."xiaotu.png";
    $image = new \Think\Image(); 
    $image->open($old);//
    // 生成一个缩放后填充大小80*50的缩略图并保存
    $unlink=$image->thumb(80, 50,\Think\Image::IMAGE_THUMB_FILLED)->save($xiaotu);

        $data['pic_thumb']=$xiaotu;
        $data['pic_cat_id']=$_POST['cat_id'];
    $data['pic_title']=$_POST['pic_title'];

    $data['pic_status']=1;
    $data['pic_time']=time();
    $sql=M('pics')->add($data);
    if ($sql) {
      return showPopup(1,'添加成功');  
    }
    else{
      return showPopup(0,'添加失败');  
    }
  }

//相册类别里的图片
public function  details(){
       $pic_id['pic_cat_id']=$_GET['cat_id'];
       $cat_id['cat_id']=$_GET['cat_id'];
       $cat_sql=M('category')->where($cat_id)->find();
       $cat_name=$cat_sql['cat_name'];
       $list=M('pics')->where($pic_id)->select(); 
       $this->assign('cat_id',$cat_id['cat_id']);
       $this->assign('cat_name',$cat_name);
       $this->assign('list',$list);

       $this->display();
   }


 public function deletecoo(){
    $cooperation['coo_id']=$_POST['value'];
 
    $row=M('cooperation')->where($cooperation)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }

 }

//我要合作
  public function coo(){
    $cooperation=M('cooperation');
    $list=M('cooperation')->select();
    $this->assign('list',$list);
    $this->display();
  }




   public function _empty(){

         $this->display('Public/404');
    }
 public function savecall(){
    $data['call_id']=$_POST['call_id'];
    $data['call_call']=$_POST['call_call'];
    $data['call_home']=$_POST['call_home'];
    $data['call_time']=time();

    $row=M('call')->save($data);
    if($row){      
      return showPopup(1,'修改成功');  
    }
    else{
      
      return showPopup(0,'修改失败');  
    }

 }

public function editcall(){
  $call_id['call_id']=$_GET['call_id'];
  $row=M('call')->where($call_id)->find();
  $call_call=$row['call_call'];
  $call_home=$row['call_home'];
  $call_id=$row['call_id'];
  $this->assign('call_id',$call_id);
  $this->assign('call_call',$call_call);
  $this->assign('call_home',$call_home);
  $this->display();

}
//联系方式
public function call(){
    $list=M('call')->select();
    $this->assign('list',$list);
    $this->display();

}








  //增加类别
  public function addcat(){
  	if (IS_POST) {
  		$data['cat_name']=$_POST['addcat_name'];
  		$data['cat_time']=time();
  		$row=M('category')->add($data);
  		if ($row) {
  			return showPopup(1,'添加成功');
  		}
  		else{
  			return showPopup(0,'添加失败');
  		}
  	}
    $this->display();
  }

	public function showlist(){
	$nav=M('nav');
	$list=M('nav')->select();
    $list0=M('nav')->where(" nav_level=0 ")->select();
    $list1=M('nav')->where(" nav_level=1 ")->select();
    $this->assign('list',$list);
    $this->assign('list0',$list0);
    $this->assign('list1',$list1);
    $this->display();
	}
	public function category(){
	 $auth=M('category');
     $list=$auth->select();
     $this->assign('list',$list);
     $this->display();
	}
	//图片上传处理
	public function picadd(){

		$data['pic_title']=$_POST['pic_title'];
 		$upload_dir = str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/";//
		$name = $_FILES['file']['name'];//上传文件在客户端计算机上的真实名称
		$file_ext=pathinfo($name,PATHINFO_EXTENSION);
		$zhuanma = date("YmdHis");
		$zhuanma .= rand(10,99);
		//$uploadfile =$upload_dir."../Public/uploads/".$name;
		$uploadfile ="./Public/uploads/pic/".$name;
		$type = strtolower(substr(strrchr($name, '.'), 1));
		//获取文件类型
		$typeArr = array("jpg","png","gif");
		if (!in_array($type, $typeArr))
		 {
		 	 echo "请上传jpg,png或gif类型的图片！";
             exit;
		 }
		if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)) {

			print_r($uploadfile);
         
		} else {
             echo "文件上传失败";
		}

	}

    public function add(){
    	$cat_id=$_GET['cat_id'];
    	$this->assign('cat_id',$cat_id);
    	$this->display();

    }

	//存入上传信息并生成显示小图
	
	//改变状态
     public function changestatus(){
		$pic_id['pic_id']=$_POST['value'];
        $row=M('pics')->where($pic_id)->find();
		$pic_status['pic_status']=$row['pic_status'];

		if($pic_status['pic_status']==1){
			$pic_status['pic_status']=0;
			$info=M('pics')->where($pic_id)->save($pic_status);
			return showPopup(1,'修改成功');  
		}
		elseif ($pic_status['pic_status']==0) {
			$pic_status['pic_status']=1;
			$info=M('pics')->where($pic_id)->save($pic_status);
			return showPopup(1,'修改成功');  
		}
	}   
	//删除图片
public function deletepic(){
		   $pic_id['pic_id']=$_POST['value'];
        $sql=M('pics')->where($pic_id)->find();
        $pic_src=$sql['pic_src'];
        $pic_thumb=$sql['pic_thumb'];
        unlink($pic_src);
        unlink($pic_thumb);
        $row=M('pics')->where($pic_id)->delete();
		if($row){
			
			return showPopup(1,'删除成功');  
		}
		else{
			
			return showPopup(0,'删除失败');  
		}

	}   


//添加导航
public function addnav(){
	if (IS_POST) {
		$data['nav_title']=$_POST['nav_title'];
		$data['nav_url']=$_POST['nav_url'];
		$data['nav_parent']=$_POST['nav_parent'];
		$data['nav_time']=time();
		$data['nav_level']=0;
		if (!$data['nav_parent']==0) {
			$data['nav_level']=1;
		}
		$sql=M('nav')->add($data);
        if ($sql) {
        	 return showPopup(1,'添加成功');
        }
        else{
        	return showPopup(1,'添加失败');
        }

	}
	$list=M('nav')->where('nav_level=0')->select();
	$this->assign('list',$list);
	$this->display();

}

//修改首页导航
 public function edit(){
  if (IS_POST) {
   $data['nav_url']=$_POST['nav_url'];
   $data['nav_title']=$_POST['nav_title'];
   $data['nav_id']=$_POST['nav_id'];
   $data['nav_parent']=$_POST['nav_parent'];
   $data['nav_level']=0;
		if (!$data['nav_parent']==0) {
			$data['nav_level']=1;
		}
   $sql=M('nav')->save($data);
   if ($sql) {
        	 return showPopup(1,'修改成功');
        }
        else{
        	return showPopup(1,'修改失败');
        }

 	}
 	$list=M('nav')->where('nav_level=0')->select();
	$this->assign('list',$list);
   $nav_id['nav_id']=$_GET['nav_id'];
   $sql=M('nav')->where($nav_id)->find();
   $nav_url=$sql['nav_url'];
   $nav_title=$sql['nav_title'];
   $nav_id=$_GET['nav_id'];
   $this->assign('nav_url',$nav_url);
   $this->assign('nav_title',$nav_title);
   $this->assign('nav_id',$nav_id);
   $this->display();
 }
   
}