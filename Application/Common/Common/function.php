<?php
function getpage($count, $pagesize = 5) {  
    $p = new Think\Page($count, $pagesize);  
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');  
    $p->setConfig('prev', '上一页');  
    $p->setConfig('next', '下一页');  
    $p->setConfig('last', '末页');  
    $p->setConfig('first', '首页');  
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');  
    $p->lastSuffix = false;//最后一页不显示为总页数  
    return $p;  
}  
//处理方法
function rmdirr($dirname) {
    if (!file_exists($dirname)) {
        return false;
    }
    if (is_file($dirname) || is_link($dirname)) {
        return unlink($dirname);
    }
    $dir = dir($dirname);
    if ($dir) {
        while (false !== $entry = $dir->read()) {
            if ($entry == '.' || $entry == '..') {
                continue;
            }
            //递归
            rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
        }
    }
}

//公共函数
//获取文件修改时间
function getfiletime($file, $DataDir) {
    $a = filemtime($DataDir . $file);
    $time = date("Y-m-d H:i:s", $a);
    return $time;
}

//获取文件的大小
function getfilesize($file, $DataDir) {
    $perms = stat($DataDir . $file);
    $size = $perms['size'];
    // 单位自动转换函数
    $kb = 1024;         // Kilobyte
    $mb = 1024 * $kb;   // Megabyte
    $gb = 1024 * $mb;   // Gigabyte
    $tb = 1024 * $gb;   // Terabyte

    if ($size < $kb) {
        return $size . " B";
    } else if ($size < $mb) {
        return round($size / $kb, 2) . " KB";
    } else if ($size < $gb) {
        return round($size / $mb, 2) . " MB";
    } else if ($size < $tb) {
        return round($size / $gb, 2) . " GB";
    } else {
        return round($size / $tb, 2) . " TB";
    }
}

/**
 * [getPic description]
 * 获取文本中首张图片地址
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
  function getPic($content){
        if(preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.(gif|jpg|jpeg|bmp|png))\\2/i", $content, $matches)) {
            
         return   $str=$matches[3][0];
         if (preg_match('/\/Uploads\/images/', $str)) {
              return $str1=substr($str,7);
       }
    }
}



/**
 * 公用的方法
 */

function  showPopup($status,$message,$data=array()) {
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );


    echo json_encode($result);
    //exit(json_encode($result));
}
function getMd5Password($password) {
    return md5($password . C('MD5_PRE'));
}
function getMenuType($type) {
    return $type == 1 ? '后台菜单' : '前端导航';
}
function status($status) {
    if($status == 0) {
        $str = '关闭';
    }elseif($status == 1) {
        $str = '正常';
    }elseif($status == -1) {
        $str = '删除';
    }
    return $str;
}
function getAdminMenuUrl($nav) {
    $url = '/admin.php?c='.$nav['c'].'&a='.$nav['a'];
    if($nav['f']=='index') {
        $url = '/admin.php?c='.$nav['c'];
    }
    return $url;
}
function getActive($navc){
    $c = strtolower(CONTROLLER_NAME);
    if(strtolower($navc) == $c) {
        return 'class="active"';
    }
    return '';
}
function showKind($status,$data) {
    header('Content-type:application/json;charset=UTF-8');
    if($status==0) {
        exit(json_encode(array('error'=>0,'url'=>$data)));
    }
    exit(json_encode(array('error'=>1,'message'=>'上传失败')));
}
function getLoginUsername() {
    return $_SESSION['adminUser']['username'] ? $_SESSION['adminUser']['username']: '';
}
function getCatName($navs, $id) {
    foreach($navs as $nav) {
        $navList[$nav['menu_id']] = $nav['name'];
    }
    return isset($navList[$id]) ? $navList[$id] : '';
}
function getCopyFromById($id) {
    $copyFrom = C("COPY_FROM");
    return $copyFrom[$id] ? $copyFrom[$id] : '';
}
function isThumb($thumb) {
    if($thumb) {
        return '<span style="color:red">有</span>';
    }
    return '无';
}

/**
+----------------------------------------------------------
 * 字符串截取，支持中文和其他编码
+----------------------------------------------------------
 * @static
 * @access public
+----------------------------------------------------------
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
+----------------------------------------------------------
 * @return string
+----------------------------------------------------------
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{
    $len = substr($str);
    if(function_exists("mb_substr")){
        if($suffix)
            return mb_substr($str, $start, $length, $charset)."...";
        else
            return mb_substr($str, $start, $length, $charset);
    }
    elseif(function_exists('iconv_substr')) {
        if($suffix && $len>$length)
            return iconv_substr($str,$start,$length,$charset)."...";
        else
            return iconv_substr($str,$start,$length,$charset);
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix) return $slice."…";
    return $slice;
}

 
  ////获得访客浏览器类型
  /*取出客户端IP地址及所在地区*/



 function GetBrowser(){
     $sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串  
     if (stripos($sys, "Firefox/") > 0) {  
         preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);  
         $exp[0] = "Firefox";  
         $exp[1] = $b[1];  //获取火狐浏览器的版本号  
     } elseif (stripos($sys, "Maxthon") > 0) {  
         preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);  
         $exp[0] = "傲游";  
         $exp[1] = $aoyou[1];  
     } elseif (stripos($sys, "MSIE") > 0) {  
         preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);  
         $exp[0] = "IE";  
         $exp[1] = $ie[1];  //获取IE的版本号  
     } elseif (stripos($sys, "OPR") > 0) {  
             preg_match("/OPR\/([\d\.]+)/", $sys, $opera);  
         $exp[0] = "Opera";  
         $exp[1] = $opera[1];    
     } elseif(stripos($sys, "Edge") > 0) {  
         //win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配  
         preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);  
         $exp[0] = "Edge";  
         $exp[1] = $Edge[1];  
     } elseif (stripos($sys, "Chrome") > 0) {  
             preg_match("/Chrome\/([\d\.]+)/", $sys, $google);  
         $exp[0] = "Chrome";  
         $exp[1] = $google[1];  //获取google chrome的版本号  
     } elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){  
         preg_match("/rv:([\d\.]+)/", $sys, $IE);  
             $exp[0] = "IE";  
         $exp[1] = $IE[1];  
     }else {  
        $exp[0] = "未知浏览器";  
        $exp[1] = "";   
     }  
     return $exp[0].'('.$exp[1].')';  
  }
   
  ////获得访客浏览器语言
  function GetLang(){
   if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $lang = substr($lang,0,5);
    if(preg_match("/zh-cn/i",$lang)){
     $lang = "简体中文";
    }elseif(preg_match("/zh/i",$lang)){
     $lang = "繁体中文";
    }else{
        $lang = "English";
    }
    return $lang;
     
   }else{return "获取浏览器语言失败！";}
  }
   
   ////获取访客操作系统

function GetOs() { 
$agent = $_SERVER['HTTP_USER_AGENT'];  
    $os = false;  
   
    if (preg_match('/win/i', $agent) && strpos($agent, '95'))  
    {  
      $os = 'Windows 95';  
    }  
    else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))  
    {  
      $os = 'Windows ME';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))  
    {  
      $os = 'Windows 98';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))  
    {  
      $os = 'Windows Vista';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))  
    {  
      $os = 'Windows 7';  
    }  
      else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))  
    {  
      $os = 'Windows 8';  
    }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))  
    {  
      $os = 'Windows 10';#添加win10判断  
    }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))  
    {  
      $os = 'Windows XP';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))  
    {  
      $os = 'Windows 2000';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))  
    {  
      $os = 'Windows NT';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))  
    {  
      $os = 'Windows 32';  
    }  
    else if (preg_match('/linux/i', $agent))  
    {  
      $os = 'Linux';  
    }  
    else if (preg_match('/unix/i', $agent))  
    {  
      $os = 'Unix';  
    }  
    else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))  
    {  
      $os = 'SunOS';  
    }  
    else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))  
    {  
      $os = 'IBM OS/2';  
    }  
    else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))  
    {  
      $os = 'Macintosh';  
    }  
    else if (preg_match('/PowerPC/i', $agent))  
    {  
      $os = 'PowerPC';  
    }  
    else if (preg_match('/AIX/i', $agent))  
    {  
      $os = 'AIX';  
    }  
    else if (preg_match('/HPUX/i', $agent))  
    {  
      $os = 'HPUX';  
    }  
    else if (preg_match('/NetBSD/i', $agent))  
    {  
      $os = 'NetBSD';  
    }  
    else if (preg_match('/BSD/i', $agent))  
    {  
      $os = 'BSD';  
    }  
    else if (preg_match('/OSF1/i', $agent))  
    {  
      $os = 'OSF1';  
    }  
    else if (preg_match('/IRIX/i', $agent))  
    {  
      $os = 'IRIX';  
    }  
    else if (preg_match('/FreeBSD/i', $agent))  
    {  
      $os = 'FreeBSD';  
    }  
    else if (preg_match('/teleport/i', $agent))  
    {  
      $os = 'teleport';  
    }  
    else if (preg_match('/flashget/i', $agent))  
    {  
      $os = 'flashget';  
    }  
    else if (preg_match('/webzip/i', $agent))  
    {  
      $os = 'webzip';  
    }  
    else if (preg_match('/offline/i', $agent))  
    {  
      $os = 'offline';  
    }  
    else  
    {  
      $os = '未知操作系统';  
    }  
    return $os;    
} 
//调用方法$os=os_infor() ; 
  /*function GetOs(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $OS = $_SERVER['HTTP_USER_AGENT'];
      if (preg_match('/win/i',$OS)) {
     $OS = 'Windows';
    }elseif (preg_match('/mac/i',$OS)) {
     $OS = 'MAC';
    }elseif (preg_match('/linux/i',$OS)) {
     $OS = 'Linux';
    }elseif (preg_match('/unix/i',$OS)) {
     $OS = 'Unix';
    }elseif (preg_match('/bsd/i',$OS)) {
     $OS = 'BSD';
    }else {
     $OS = 'Other';
    }
          return $OS; 
   }else{return "获取访客操作系统信息失败！";}  
  }*/
   
  ////获得访客真实ip

if($HTTP_X_FORWARDED_FOR!="")

$REMOTE_ADDR=$HTTP_X_FORWARDED_FOR;

$tmp_ip=explode(",",$REMOTE_ADDR);

$REMOTE_ADDR=$tmp_ip[0];

//方法一
function Getip(){
    $ip=false;
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){

        $ip = $_SERVER["HTTP_CLIENT_IP"];
}
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);

        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }

        for ($i = 0; $i < count($ips); $i++) {

            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {

                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}


//方法二
/*  function Getip()
{
  $ip=false;
  if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
  }
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
    if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
    for ($i = 0; $i < count($ips); $i++) {
      if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
        $ip = $ips[$i];
        break;
      }
    }
  }
  return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

///--------------------------
  function Getip(){
   if(!empty($_SERVER["HTTP_CLIENT_IP"])){  
      $ip = $_SERVER["HTTP_CLIENT_IP"];
   }
   if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
    $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
   }
   if($ip){
      $ips = array_unshift($ips,$ip);
   }
    
   $count = count($ips);
   for($i=0;$i<$count;$i++){  
     if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
      $ip = $ips[$i];
      break;   
      } 
   } 
   $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR'];
   if($tip=="127.0.0.1"){ //获得本地真实IP
      return get_onlineip();  
   }else{
      return $tip;
   }
  }
   
  ////获得本地真实IP
  function get_onlineip() {
      $mip = file_get_contents("http://city.ip138.com/city0.asp");
       if($mip){
           preg_match("/\[.*\]/",$mip,$sip);
           $p = array("/\[/","/\]/");
           return preg_replace($p,"",$sip[0]);
       }else{return "获取本地IP失败！";}
   }
   */
  ////根据ip获得访客所在地地名
  function Getaddress($ip=''){
   if(empty($ip)){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
      // $ip = $this->Getip();

   }
   $ipadd = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip=".$ip);//根据新浪api接口获取
   if($ipadd){
    $charset = iconv("gbk","utf-8",$ipadd);  
    preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$charset,$ipadds);
     
    return $ipadds;   //返回一个二维数组
   }else{return "addree is none";} 
  }
 