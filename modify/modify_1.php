<?php		
	require '../common/conn.php';
	
	if(isset($_POST['content'])){
		$content = $_POST['content'];
	}
	
	//���ݿ�Ϸ�����֤
	if ( strlen ( $content ) < 1  || strlen ( $content ) > 500 ) {
  		echo "<script>alert('������ݲ��Ϸ�����������д��');</script>" ;
  		//�ж����������Ƿ񳬹����ݿ�����
	} 
	
	//����sql����������
	$sql = "UPDATE `introduction` SET content='$content' WHERE id='1'";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d1'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d1"); 
?>









