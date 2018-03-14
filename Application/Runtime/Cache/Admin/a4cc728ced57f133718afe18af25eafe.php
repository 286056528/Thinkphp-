<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
		#l-map{height:500px;width:100%;}
		#r-result{width:100%;}
	</style>
	
	<title>获取信息窗口的信息</title>
</head>
<body>
<input type="hidden" value="<?php echo ($map_content); ?>" id="content">
<input type="hidden" value="<?php echo ($map_x); ?>" id="map_x">
<input type="hidden" value="<?php echo ($map_y); ?>" id="map_y">

	<div  id="l-map"></div>
	    <script src="/muge/Application/Admin/Public/js/jquery.min.js?v=2.1.4"></script>
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=rreobsIE0gSOhoS7f7XZhFg80fdEKqbu"></script>


<script type="text/javascript">
 $(document).ready(function () {
	// 百度地图API功能
	var sContent =$("#content").val(); 
	var map_x =$("#map_x").val(); 
	var map_y =$("#map_y").val(); 
	var map = new BMap.Map("l-map");

	var point = new BMap.Point(map_x,map_y);
	map.centerAndZoom(point, 15);
    map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
	var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
	map.openInfoWindow(infoWindow,point); //开启信息窗口
 });
</script>
</body>
</html>