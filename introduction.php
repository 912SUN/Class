<?php
$link=mysqli_connect('localhost','root','root','class');
if (!$link) {//判断连接状态
	die("连接失败: " . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');//设置客户端默认字符集

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>课程简介</title>
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
				<li><a href="/Class/outline.php">教学大纲</a></li>
				<li><a href="#">专题讲座</a></li>
				<li><a href="/Class/teacher.php">教师梯队</a></li>
				<li><a href="#">获奖情况</a></li>
			</ul>
		</div>
		<div class="pic">
			<img src="./images/introduction/introduction.png"style="margin-top:100px;width: 1200px; height: 280px;">
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
    <div class="main_right" style=" border:1px solid #ccc; min-height:600px; ">

       <div class="middle_left_box1" style="width:920px;height: 585px;margin-left:2px; border:1px solid #CCCCCC;margin-top:5px;">
        <h5 style=" width:916px;background:#ededed;"><a>当前位置：</a> <a href="/Class/index.php">主页</a> &gt; <a href="/Class/outline.php">教学大纲</a></h5>
         <div style="margin-top:0px; margin-left:15px; margin-right:15px; ">
           <span style="font-size:16px;"><span style="font-size:14px;">详细介绍课程持续建设和更新情况：<br>
&nbsp;&nbsp;&nbsp; 本课程是为重庆师范大学“软件工程”本科专业开设的核心专业课程。<br>
<!--&nbsp;&nbsp;&nbsp; Java 设计模式是网络工程专业的方向课。Java设计模式重点探讨在Java程序设计中怎样使用著名的23个设计模式。本课程的目的是让学生不仅学习怎样在软件设计中使用好设计模式，更重要的是让学生通过学思想，以便更好地使用面向对象 java语言解决设计中的诸多问题。<br>-->
<!--&nbsp;&nbsp;&nbsp; 我校1958年就成立军用保密电话研制组，1960年代在陈太一院士、胡征教授的带领下开设了信息论专业，1970年代开始在肖国镇、王育民、王新梅教授的带领在开始了密码学研究。我校1988年建立密码学硕士点，1993年设立密码学博士点，是全国首批两个密码学博士点之一。2007年密码学科被评为国家级重点学科，是目前国内唯一在军外设置的军事学门类的国家级重点学科。本学科点还建有综合业务网理论与关键技术国家重点实验室。<br>-->
<!--&nbsp;&nbsp;&nbsp; 随着计算机和网络技术的发展，我校的研究领域和人才培养也从密码学扩展到整个信息安全领域，并且与我校通信等优势学科结合，取得了“宽带无线网络WAPI关键技术”等具有重大国际和国内影响的标志性成果。在人才培养方面硕果累累，我校培养的许多人才成为国内众多高校和科研机构信息安全研究的骨干支撑力量，成为国内公认的信息安全人才培养的最主要基地之一。<br>-->
<!--&nbsp;&nbsp;&nbsp; 70年代中期到现在，特别是网络技术的发展和广泛应用，根据信息安全内涵由简单到复杂的发展过程，我们将本课程的内容结合该专业相关课程内容进行了扩充，开设了《计算机通信网》课程，该课程是信息安全专业的必修课程。<br>-->
<!--&nbsp;&nbsp;&nbsp; 本课程在裴庆祺副教授的带领下创建，师资队伍一直很强，并且年龄结构一直保持合理。2005年和2007年6月，我们与兄弟院校合作编著了《网络安全——技术与实践》、《网络安全实验教程》，均由清华大学出版社出版，后者被列入普通高等教育"十一五"国家级规划教材。同时还开发了相应的实验系统，目前已成为本专业最重要的专业课程之一。<br>-->
&nbsp;&nbsp;&nbsp;<?php $sql="SELECT content FROM `introduction`";//sql语句，查询数据表信息
								$result = mysqli_query($link, $sql);
								// mysqli_num_rows获取结果中行的数量
								$newsNum = mysqli_num_rows($result);
								$row = mysqli_fetch_assoc($result);
								echo $row['content'];
								echo "<br>";
								echo "&nbsp;&nbsp;&nbsp;";
								echo $row['content'];
								echo "<br>";
								echo "&nbsp;&nbsp;&nbsp;";
								echo $row['content'];
								$result->free(); //释放结果集
							?>

</span></span><br>

         </div>
       </div>
    
  </div>
    <!--main_right的区域结束-->
	

<!--main_right的区域结束--> 
<div class="clear"></div>
<!--中间结束-->
</div>
	<!-- 底部信息内容 -->
		<div class="di" style="margin-top:-300px;">	
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
	