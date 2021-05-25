
<?php
	//连接数据库
	require '../common/conn.php';					
	
	// 获取增加的
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['date'])){
		$date = $_POST['date'];
	}

	//创建sql语句插入数据
	$sql = "insert  into `lecture` (name,date) values('$name','$date')";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d3'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d3"); 
?>









