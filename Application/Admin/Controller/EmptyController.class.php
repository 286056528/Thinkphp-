<?php

namespace Admin\Controller;

use Think\Controller;

/**
* 
*/
class EmptyController extends  \Components\AdminController
{
	
     public	function _empty()  
	{
		
		 $this->display('Public/404');
	}
}