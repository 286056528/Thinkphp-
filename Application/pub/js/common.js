$(function(){ 
    var $hei=$(window).height();
	$('.banner').height($hei).addClass('active').css('line-height',$hei+'px');
	
	$(window).resize(function(){
		var $hei=$(window).height();
	$('.banner').height($hei).css('line-height',$hei+'px');
	});
	
			var $lead=$('#head');
		$banner=$('.banner');
		$banner.one('mousewheel',scrolling);
		function scrolling(event){
			if(event.deltaY<0) {$('html, body').animate({scrollTop:$hei}, 'slow');}
			else{$('html, body').animate({scrollTop:0}, 'slow');}
			setTimeout(function(){
			$banner.one('mousewheel',scrolling);
			},500);
		};	
	
	      $(window).scroll(function(){ 
		  var $sco=$(this).scrollTop();
		  if($sco>$hei){ 
		  $lead.addClass('active');
		  }else{ $lead.removeClass('active');}
		 });
	

});