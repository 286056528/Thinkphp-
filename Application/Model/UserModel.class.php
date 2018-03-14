<?php
namespace Model;
use Think\Model;
class UserModel extends Model{
    protected $_map=array(
        'name'  =>  'username',
        'pwd'  =>  'password',
        'email'  =>  'user_email'
    );
    
    protected $_auto=array( 
    //自动完成 array(完成字段1,完成规则,[完成条件,附加规则]),
        //具体内容查阅手册
        array('nation','中国'),
        array('password','md5',1,'function'),
        array('username','getName',1,'callback'),
        array('update_time','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
    );
    function getName($value){
        return '尊敬的:_'.$value;
    }
}