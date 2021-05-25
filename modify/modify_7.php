<?php		
	require '../common/conn.php';
	
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
	
	//创建sql语句插入数据
	$sql = "UPDATE `admin` SET id='$id',name='$name',password='$date' WHERE id='$id'";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d7'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d7"); 
?>