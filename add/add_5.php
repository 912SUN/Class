
<?php
	//连接数据库
	require '../common/conn.php';					
	
	// 获取增加的
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['winner'])){
		$winner = $_POST['winner'];
	}
	if(isset($_POST['content'])){
		$content = $_POST['content'];
	}
	if(isset($_POST['picture'])){
		$picture = $_POST['picture'];
	}
	
	//创建sql语句插入数据
	$sql = "insert  into `prize` (name,winner,content,picture) values('$name','$winner','$content','$picture')";	
	
	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d5'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d5"); 
?>









