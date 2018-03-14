$(function(){ 
var $play=$('#gallery'),
       $da1=$play.width(),
       $da2=$play.find('li').height(),
	   $dis=$da2+0.05*$da1;
	   
	   
	 $('.gallery').height(4*$da2+0.25*$da1);
	    $(window).resize(function(){ 
       $da1=$play.width();
       $da2=$play.find('li').height();
	    $dis=$da2+0.05*$da1;
	    $('.gallery').height(4*$da2+0.25*$da1);	
		return  $dis;
		});
		
	var e=0;
	$('#ttop').click(function(){
		var num=$play.find('li').size();
		   e--;e=e%(num-3);
        $play.animate({top:$dis*e+'px'}, 'normal');
	});
	
	$('#tbom').click(function(){
		var num=$play.find('li').size();;
	    e++;e=(e-num+3)%(num-3);
       $play.animate({top:$dis*e+'px'}, 'normal');         
	});	
		
   $play.find('li').click(function(){ 
   var html='<img src="img/cover.jpg"  class="ma" alt="" />\
					<div class="explain">\
					   <img src="img/he1.png" alt="" />\
					   <p>家由莱全屋定制家具是一家集定制衣柜、定制橱柜、整体客厅定制为一体的超级家具制造商。一直致力于高端欧式家具的研发与制造。</p>\
					</div>';		
	$('#cover').html(html).hide().fadeIn();
					
   });
		
		
		
		
});