<?php
$link=mysqli_connect('localhost','root','root','class');
if (!$link) {//判断连接状态
	die("连接失败: " . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');//设置客户端默认字符集
$sql="SELECT * FROM `outline`";//sql语句，查询数据表信息
$result = mysqli_query($link, $sql);
// mysqli_num_rows获取结果中行的数量
$newsNum = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>教学大纲</title>
		<link rel="stylesheet" href="css/index/top.css">
		<link rel="stylesheet" href="css/index/lunbo.css">
		<link rel="stylesheet" href="css/introduction/below.css">
<!--		<link rel="stylesheet" href="css/teacher/global.css">-->
		<link href="css/index/bottom.css" rel="stylesheet">
	</head>
	<body>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/top.js"></script>
		<!-- <script src="https://cdn.bootcdn.net/ajax/libs/jquery/2.2.4/jquery.js"></script> -->
		<script src="js/top.js"></script>
		<script src="js/lunbo.js"></script>
		<!-- 顶部 -->
		
		<div class="tp">
			<!-- <div class="logo" >
				<a href="#"><img src="./css/logo1.jpg" style="width: 800px; height: 80px;"></a>
			</div> -->
			<p style="font-size: 43px;color: white;margin-left: 600px;padding-top: 25px;font-weight: bold;letter-spacing: 8px;">Java设计模式精品课程</p>
		
		<div id ="fold">
			<ul class="ul">
				<li id="bq"><a href="/Class/index.php">首页</a></li>
				<li><a href="/Class/introduction.php">课程简介</a></li>
				<li><a href="/Class/ooutline.php">教学大纲</a></li>
				<li><a href="#">专题讲座</a></li>
				<li><a href="/Class/teacher.php">教师梯队</a></li>
				<li><a href="#">获奖情况</a></li>
			</ul>
		</div>
		<div class="pic">
			<img src="./images/outline/outline.gif"style="margin-top:100px;width: 1200px; height: 290px;">
		</div>
		<div id="wrap">

<!--main_left的左边区域开始-->
    <div class="main_left">
			 
      <div class="box_left_con" style="height:340px; margin-top:0px;">
         <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;教学团队</h5>
         <center style="margin-top:5px;"><img src="./images/teacher/teacher.png" ></center>
		 
		 
		 <p style="color:black;margin:3px 3px; line-height:16px; font-size:13px;letter-spacing:0px;padding-top:0px;">&nbsp;&nbsp;Java设计模式教学队伍6人全部具有博士学位。具有高级职称者4人， 40岁至60岁1人，30岁至40岁4人，20岁至30岁1人。年龄结构合理，发展平稳且可持续性好，具有很强的战斗力，形成了骨干教师承担教学重任，青年教师...<a style="color:#0000FF" href="/Class/teacher.php">更多</a></p>  
	 </div>	 	 

			<div class="box_left_con" style="margin-top:0px">
                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java设计模式</h5>
				  <p style="margin:5px 5px;">
		<!--<object data="http://jpkc.xidian.edu.cn/jsjtxw/templets/images/111.swf" type="application/x-shockwave-flash" style="width:240px; height:220px;">
        <param name="movie" value="http://jpkc.xidian.edu.cn/jsjtxw/templets/images/111.swf" />
		</object> 
		-->
		<img src="./images/index/book1.jpg" style="padding:10px 5px;width:230px;height:230px;">
</p>
			</div>

   </div>
    <!--main_left区域结束-->
	
	
    <!--main_right的左边区域开始-->
    <div class="main_right" style=" border:1px solid #ccc; min-height:875px; ">

       <div class="middle_left_box1" style="width:920px;height: 875px;margin-left:2px; border:1px solid #CCCCCC;margin-top:5px;">
        <h5 style=" width:916px;background:#ededed;"><a>当前位置：</a> <a href="/Class/index.php">主页</a> &gt; <a href="/Class/outline.php">教学大纲</a></h5>
        <div style="margin-top:0px; margin-left:10px; margin-right:10px; ">
           <p style="text-align: center">
	<span style="font-size: 16px"><br><span style="font-weight: bold;">《<?php echo $row['name'];?>》</span><strong>教学大纲</strong></span></p>
<p>
	&nbsp;</p>
课程名称：<?php echo $row['name'];?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;英文名称：<?php echo $row['en_name'];?><br>
学&nbsp;&nbsp;时：<?php echo $row['period'];?> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;学&nbsp; &nbsp; 分：<?php echo $row['credit'];?><br>
课程性质：<?php echo $row['nature'];?><br>
适用专业：<?php echo $row['subject'];?><br>

<br>
一、课程的教学<strong>目标与任务</strong><br>
&nbsp;&nbsp;<?php echo $row['target'];?><br>
二、课程的教学<strong>内容和要求</strong><br>
<?php echo $row['content'];?><br>



         </div>
       </div>
    
  </div>
    <!--main_right的区域结束-->
	

<!--main_right的区域结束--> 
<div class="clear"></div>
<!--中间结束-->
</div>
<!-- 底部信息内容 -->
		<div class="di">	
<!--			 <a href="#"><img src="images/1.jpg" style="width: 150px; height: 80px;"></a> -->
			<li><a href="#">关于我们</a></li>
			<li><a href="#">广告服务</a></li>
			<li><a href="#">开发助手</a></li>
			<li><a href="#">📞110-120-10086</a></li>
			<li><a href="#">📧@meiyou.com</a></li>
		</div>
		
		</div>
		
	</body>
</html>
	