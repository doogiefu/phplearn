<?php
$str = '[url]1.jpg[/url][url]2.jpg[/url]';
$s = preg_replace("#\[url\](?<WORD>\d\.jpg)\[\/url\]#", "<img src='/imgs/avatar/$1'>", $str);

$m = "#(?<=<div>).*(?=<\/div>)#";
preg_match($m, '<div>logo</div>', $matches);

$str = "php���";
if(preg_match("#^[\x{4e00}-\x{9fa5}]+$#u", $str)){
	echo "���ַ���ȫ������";
}else{
	echo "not totally";
}

//var_dump($matches);

?>
