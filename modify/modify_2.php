<?php		
	require '../common/conn.php';
	
	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['en_name'])){
		$en_name = $_POST['en_name'];
	}
	if(isset($_POST['period'])){
		$period = $_POST['period'];
	}
	if(isset($_POST['credit'])){
		$credit = $_POST['credit'];
	}
	if(isset($_POST['nature'])){
		$nature = $_POST['nature'];
	}
	if(isset($_POST['subject'])){
		$subject = $_POST['subject'];
	}
	if(isset($_POST['target'])){
		$target = $_POST['target'];
	}
	if(isset($_POST['content'])){
		$content = $_POST['content'];
	}
	
//	//��ݿ�Ϸ�����֤
//	if ( strlen ( $content ) < 1  || strlen ( $content ) > 500 ) {
//  		echo "<script>alert('������ݲ��Ϸ�����������д��');</script>" ;
//  		//�ж����������Ƿ񳬹���ݿ�����
//	} 
	
	//����sql���������
	$sql = "UPDATE `outline` SET name='$name',en_name='$en_name',period='$period',credit='$credit',nature='$nature',subject='$subject',target='$target',content='$content' WHERE id='1'";

	if(!(mysqli_query($link,$sql))){
		 echo "<script>alert('no');window.location.href='main.php#d2'</script>";
	}else{
	 	echo "<script>alert('yes')</script>";
	}
	header("Location:../main.php#d2"); 
?>









