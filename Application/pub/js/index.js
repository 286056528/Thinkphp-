$(function(){ 
     var $obj=$('#rotate').find('li');
	 
	 $obj.click(function(){
		 var index=$(this).index();
		 $obj.attr('class','');
		switch(index){ 
		case 0:
		$obj.eq(0).addClass('ac3');
		$obj.eq(1).addClass('ac4');
		$obj.eq(2).addClass('ac5');
		$obj.eq(3).addClass('ac1');
		$obj.eq(4).addClass('ac2');
		break;
		case 1:
		$obj.eq(0).addClass('ac2');
		$obj.eq(1).addClass('ac3');
		$obj.eq(2).addClass('ac4');
		$obj.eq(3).addClass('ac5');
		$obj.eq(4).addClass('ac1');
		break;		
		case 2:
		$obj.eq(0).addClass('ac1');
		$obj.eq(1).addClass('ac2');
		$obj.eq(2).addClass('ac3');
		$obj.eq(3).addClass('ac4');
		$obj.eq(4).addClass('ac5');
		break;			
		case 3:
		$obj.eq(0).addClass('ac5');
		$obj.eq(1).addClass('ac1');
		$obj.eq(2).addClass('ac2');
		$obj.eq(3).addClass('ac3');
		$obj.eq(4).addClass('ac4');
		break;		
		case 4:
		$obj.eq(0).addClass('ac4');
		$obj.eq(1).addClass('ac5');
		$obj.eq(2).addClass('ac1');
		$obj.eq(3).addClass('ac2');
		$obj.eq(4).addClass('ac3');
		break;					
		}  
	 });

	 
	 $('#toggle').click(function(){ 
	     $(this).toggleClass('active');
	     $('#section-btn').toggleClass('active');	 
	 });
	 $('#del').click(function(){ 
	     $('#contact').removeClass('active');	 
	 });
	 $('#hinfo').click(function(){ 
	     $('#contact').addClass('active');	 
	 });	 
	 
	 
	 

});