<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>登录</title>
<!--		<link rel="stylesheet" href="css/login/login.css">-->
		<!-- 引入 jquery、Bootstrap -->
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<!--		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>-->
		<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
		<style type="text/css">
        html{
            height: 100%;
        }
        body{
            background-image: url(./bg.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100%;
        }
        .col-center-block {
        	height:270px;
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 17%;
            text-align: center;
            max-width: 333px;
            border: 1px solid rgba(165, 172, 186, .2);
			border-radius: 5px;
			background: rgba(254, 254, 254, 0.3);
			/*盒阴影：水平和垂直偏移量都为0、阴影模糊半径13px、阴影扩展半径3px、黑色透明度50%*/
			box-shadow: 0 0 10px 3px rgba(92, 96, 104, .4);
			overflow: hidden;/*隐藏溢出内容*/
        }
        .edit {
            margin-top: 10px;
        }
        .textcolor{
           color: white;
        }
 
        /*model显示居中*/
        .modal_wrapper{
            display: table;
            height: 100%;
            margin: 0px auto;
        }
        .modal-dialog{
            display: table-cell;
            vertical-align: middle;
        }
    </style>
	</head>

	<body style="background: url(./images/login/bg.jpg) no-repeat center fixed;background-size: cover;">
<!--		<div id="fold">-->
<!--			<ul class="lg">-->
<!--				<li><a href="/Class/index.php">首页</a></li>-->
<!--				<li>&nbsp;|&nbsp;</li>-->
<!--				<li><a href="/Class/introduction.php">帮助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
<!--			</ul>-->
<!--		</div>-->
		<!-- 登录表单 -->
		
		<!-- 两个输入框 -->
    <div class="container">
        <div class="row row-centered">
            <div class="col-xs-6 col-md-4 col-center-block">
                <h3 class="textcolor">后台管理系统</h3><br>
                <form action="./login.php" method="post">
                    <!-- 输入id -->
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="userid" name="userid" placeholder="请输入用户名"/>
                    </div>
                    <!-- 输入密码 -->
                    <div class="edit input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码"/>
                    </div>
                    <br/>
 
                    <button type="submit" class="btn btn-success btn-block" name="submit" value="登录">登录</button>
 
                    <a type="submit" class="btn btn-primary btn-block" href="/Class/index.php">退出</a>
                </form>
            </div>
        </div>
    </div>
    <?php
/**
 * 登陆
 * Created by Cory_XuBoYu.
 * User: Administrator
 * Date: 2017/12/28
 * Time: 15:19
 */

if (isset($_POST["submit"]) && $_POST["submit"] == "登录") {

    $id = $_POST["userid"];
    $psw = $_POST["password"];
    if ($id == "" || $psw == ""){
        //弹出对话框后返回到先前页面
        echo "<script>alert('请输入用户名或密码！'); </script>";
       
    }else {
        //连接数据库
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "class";
        // 创建连接
       // $conn = new mysqli($servername, $username, $password,$dbname);
        $conn=mysqli_connect('localhost','root','root','class');
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        //设定字符集,解决数据库插入可能出现乱码，设置编码为GBK
        //构造sql查询语句
        $sql = "select name,password from admin where name = '$id' and password = '$psw'";
        //执行SQL语句
        $result = $conn->query($sql);
        //统计执行结果影响的行数
        $num = $result->num_rows;
        //如果已经存在该用户
        if ($num){
            //将数据以索引的方式存储在数组中
            $row = mysqli_fetch_array($result);
            //echo $row[0];
            echo "<script>alert('登陆成功！');window.location.href='main.php';</script>";
        }else{
            //弹出对话框后返回到先前页面
            echo "<script>alert('用户名或者密码不正确！');</script>";
        }
    }
}
?>
	</body>
</html>
