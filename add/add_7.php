
<?php
	//连接数据库
	require '../common/conn.php';					
	
	// 获取增加的
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
	
	//数据库合法性验证
	if (( strlen ( $name ) < 1  || strlen ( $name ) > 20 )||(!preg_match( '/^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$/' , $name ))) {
  		echo "<script>alert('用户名位数不正常，请重新填写！');</script>" ;
  		//判断用户名长度
	} 
	
	//创建sql语句插入数据
	$sql = "insert  into `admin` (name,password) values('$name','$password')";	
	
	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d7'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d7"); 
?>









