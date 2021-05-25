<?php 
$link=mysqli_connect('localhost','root','root','class');
if (!$link) {//判断连接状态
	die("数据库连接失败: " . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');//设置客户端默认字符集
?>