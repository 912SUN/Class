
<?php
	//�������ݿ�
	require '../common/conn.php';					
	
	// ��ȡ���ӵ�
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['sex'])){
		$sex = $_POST['sex'];
	}
	if(isset($_POST['titles'])){
		$titles = $_POST['titles'];
	}
	if(isset($_POST['subject'])){
		$subject = $_POST['subject'];
	}
	if(isset($_POST['job'])){
		$job = $_POST['job'];
	}
	
	//���ݿ�Ϸ�����֤
	if (( strlen ( $name ) < 1  || strlen ( $name ) > 20 )||(!preg_match( '/^[\u4E00-\u9FA5\uf900-\ufa2d��s]{2,20}$/' , $name ))) {
  		echo "<script>alert('�û���λ������������������д��');</script>" ;
  		//�ж��û�������
	} 
	
	//����sql����������
	$sql = "insert  into `teachers` (name,sex,titles,subject,job) values('$name','$sex','$titles','$subject','$job')";	
	
	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d4'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d4"); 
?>









