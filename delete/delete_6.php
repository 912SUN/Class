<?php
// 处理删除操作的页面 
	require '../common/conn.php';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	//删除指定数据  
	$sql="DELETE FROM `user` WHERE id={$id}"; 
	//创建一个结果集
	$result = mysqli_query($link,$sql);
	if($_result){
		echo '删除成功！';
	}else{
		echo '删除失败';
	}
	// 删除完跳转回首页
	header("Location:../main.php#d6");  
?>