<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
  

	   //文章详情页
     public function details(){
   

         $news_id['news_id']=$_GET['news_id'];
        $row=M('news')->where($news_id)->find(); 
        $news_title= $row['news_title'];  
        $news_author= $row['news_author'];
        $news_time= $row['news_time'];
        $news_content= $row['news_content'];
   
        $this->assign('news_title',$news_title);
        $this->assign('news_author',$news_author);
        $this->assign('news_time',$news_time);
        $this->assign('news_content',$news_content);
  
        $this->display();
     }
     public function showlist(){
     		//查询出所有文章
        $m = M('news');        
        $list = $m->where('news_open=1')->select();  

      $this->assign('list',$list);
      $this->display();
     }
    
}