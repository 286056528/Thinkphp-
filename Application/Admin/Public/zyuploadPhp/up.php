<?php

$uploaddir = './uploads';
$name = $_FILES['file']['name'];
$uploadfile = $uploaddir . $name;
$type = strtolower(substr(strrchr($name, '.'), 1));
//获取文件类型
$typeArr = array("jpg","png","gif");
if (!in_array($type, $typeArr)) {
    echo "请上传jpg,png或gif类型的图片！";
    exit;
}
print "<pre>";
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir.$_FILES['file']['name'])) {
    print "文件上传成功<br/>";
    print_r($uploaddir.$_FILES['file']['name']);
    print_r($_FILES);
} else {
    print "Possible file upload attack!  Here's some debugging info:\n";
    print_r($_FILES);
}
print "</pre>";
?>