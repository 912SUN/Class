<?php		
	require '../common/conn.php';
	
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	}
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['date'])){
		$date = $_POST['date'];
	}
	
	//创建sql语句插入数据
	$sql = "UPDATE `lecture` SET id='$id',name='$name',date='$date' WHERE id='$id'";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d1'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d1"); 
?>









