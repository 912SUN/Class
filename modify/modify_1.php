<?php		
	require '../common/conn.php';
	
	if(isset($_POST['content'])){
		$content = $_POST['content'];
	}
	
	//数据库合法性验证
	if ( strlen ( $content ) < 1  || strlen ( $content ) > 500 ) {
  		echo "<script>alert('简介内容不合法，请重新填写！');</script>" ;
  		//判断输入内容是否超过数据库限制
	} 
	
	//创建sql语句插入数据
	$sql = "UPDATE `introduction` SET content='$content' WHERE id='1'";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d1'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d1"); 
?>









