<?php 
namespace Admin\Controller;
USE  Think\Controller;
USE  Think\image;
class NewsController extends  \Components\AdminController{
 public function _empty(){

         $this->display('Public/404');
    }
//三天出来太紧了，没有注释，想看的自己看吧
  public function edittype(){
   if (IS_POST) {
    $data['showtype_id']=$_POST['showtype_id'];
    $data['showtype_name']=$_POST['showtype_name'];
    $data['type']=$_POST['news_type'];
    $msg1['news_type']=$_POST['news_type'];
    $msg2['news_showtype_id']=$_POST['showtype_id'];
    $sql=M('news')-> where($msg2)->setField('news_type',$msg1['news_type']);

    $row=M('showtype')->save($data);
    if($row){
      
      return showPopup(1,'修改成功');  
    }
    else{
      
      return showPopup(0,'修改失败');  
    }
 }
 $showtypeg['showtype_id']=$_GET['showtype_id'];

 $sql=M('showtype')->where($showtypeg)->find();
 $showtype_id=$sql['showtype_id'];
 $showtype_name=$sql['showtype_name'];
 $this->assign('showtype_id',$showtype_id);
 $this->assign('showtype_name',$showtype_name);
 $this->display();

  }


//删除类别
 public function deletest(){
  
    $showtype_id['showtype_id']=$_POST['value'];

    $row=M('showtype')->where($showtype_id)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }


 }
 public function addshowtype(){
   $data['showtype_name']=$_POST['showtype_name'];
   $data['showtype_time']=time();
   $sql=M('showtype')->add($data);
   if ($sql) {
      return showPopup('1','添加新闻类别成功');
   }
   else{
    return showPopup('0','添加失败');
   }

 }

 //取得
  public function showtype(){
    $name=M('showtype');
    $list=$name->select();

   $this->assign('list',$list);
   $this->display();
  }



  public function showlist(){
   $name=M('News');
   $list=$name->join('gw_showtype ON gw_news.news_showtype_id = gw_showtype.showtype_id')->order('news_id desc')->select();
 
   $this->assign('list',$list);
   $this->display();
  }
  
  public  function add(){
     $list=M('showtype')->select();
    $this->assign('list',$list);
    $this->display();
  }

 public function addcontents(){
    $name=M('News');
    $content['news_abstract']=$_POST['news_abstract'];
    $content['news_showtype_id']=$_POST['showtype'];
    $content['news_type']=$_POST['news_type'];
    $content['news_content']=stripslashes($_POST['content']);
     

    $content['news_title']=$_POST['news_title'];
    $content['news_author']=$_POST['news_author'];
    $content['news_time']=time();
    $content['news_open']=1;
    $info=getPic($content['news_content']);//使用函数 返回匹配地址 如果不为空则生成缩略图
   
    if ($info==null) {
        $info="/muge/public/uploads/image/mugelogo.png";
        $content['news_thumb']=$info;
    }
    else{
   
    $infos="..".$info;
    $image = new \Think\Image(); 
    $xiaotu="..".$info."xiaotu.png";
    $thumbtu=$info."xiaotu.png";
    $a=$image->open($infos);//
    // 生成一个缩放后填充大小150*150的缩略图并保存为thumb
    $unlink=$image->thumb(80, 50,\Think\Image::IMAGE_THUMB_FILLED)->save($xiaotu);
    $content['news_thumb']=$thumbtu;
    }
    $content['news_intrinsic']=$info;
    $row=$name->add($content);
    if($row){
      return showPopup('1','添加新闻成功');
    }
    else{
    return showPopup('1','添加新闻成功');
    }
 }
 public function changeopen(){
    $news_id['news_id']=$_POST['value'];
        $row=M('news')->where($news_id)->find();

    $news_open['news_open']=$row['news_open'];

    if($news_open['news_open']==1){
      $news_open['news_open']=0;
      $info=M('news')->where($news_id)->save($news_open);
      return showPopup(1,'修改成功');  
    }
    elseif ($news_open['news_open']==0) {
      $news_open['news_open']=1;
      $info=M('news')->where($news_id)->save($news_open);
      return showPopup(1,'修改成功');  
    }
  }
  public function article(){
    $news_id['news_id']=$_GET['news_id'];
        $row=M('news')->where($news_id)->find(); 
        $news_title= $row['news_title'];  
        $news_author= $row['news_author'];
        $news_time= $row['news_time'];
        $news_content= $row['news_content'];
        $news_thumb= $row['news_thumb'];
        $this->assign('news_title',$news_title);
        $this->assign('news_author',$news_author);
        $this->assign('news_time',$news_time);
        $this->assign('news_content',$news_content);
        $this->assign('news_thumb',$news_thumb);
        $this->display();

  }
  //删除新闻
   public function deletenp(){
  
    $news['news_id']=$_POST['value'];
    $sql=M('news')->where($news)->find();
    $news_intrinsic=$sql['news_intrinsic'];
    $thumb=$sql['thumb'];
    $default="/ueditor/php/upload/image/mugelogo.png";
    if($news_intrinsic==$default){
      unlink($news_intrinsic);
      unlink( $thumb);
    }

    $row=M('news')->where($news)->delete();
    if($row){
      
      return showPopup(1,'删除成功');  
    }
    else{
      
      return showPopup(0,'删除失败');  
    }


 }
}