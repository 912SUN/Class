<?php 
$link=mysqli_connect('localhost','root','root','class');
if (!$link) {//�ж�����״̬
	die("���ݿ�����ʧ��: " . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');//���ÿͻ���Ĭ���ַ���
?>