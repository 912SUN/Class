<?php
// ����ɾ��������ҳ�� 
	require '../common/conn.php';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	//ɾ��ָ������  
	$sql="DELETE FROM `user` WHERE id={$id}"; 
	//����һ�������
	$result = mysqli_query($link,$sql);
	if($_result){
		echo 'ɾ���ɹ���';
	}else{
		echo 'ɾ��ʧ��';
	}
	// ɾ������ת����ҳ
	header("Location:../main.php#d6");  
?>