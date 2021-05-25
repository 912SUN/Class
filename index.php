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
		<title>Java设计模式精品课程网站首页</title>
		<link rel="stylesheet" href="css/index/top.css">
		<link rel="stylesheet" href="css/index/lunbo.css">
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
		<div class="login">
			<ul class="lg" style="float:right;">
				
				<li style="float:right;"><a href="/Class/introduction.php">&nbsp;&#124;&nbsp;帮助&nbsp;&nbsp;</a></li>
				<li style="float:right;"><a href="/Class/login.php">管理员登录</a></li>
			</ul>
		</div>
		<div id ="fold">
			<ul class="ul">
				<li id="bq"><a href="index.php">首页</a></li>
				<li><a href="introduction.php">课程简介</a></li>
				<li><a href="outline.php">教学大纲</a></li>
				<li><a href="#">专题讲座</a></li>
				<li><a href="teacher.php">教师梯队</a></li>
				<li><a href="#">获奖情况</a></li>
			</ul>
		</div>
		
		
		
		<!-- 轮播图片 -->
		<div class="banner">
		  <ul class="hot">
		    <!--轮播图片-->
		    <li><a href="#"><img src="images/index/1.jpg" style="width: 1200px;height:400px"></a></li>
		    <li><a href="#"><img src="images/index/2.jpg" style="width: 1200px;height:400px"></a></li>
		    <li><a href="#"><img src="images/index/3.gif" style="width: 1200px;height:400px"></a></li>
		    <li><a href="#"><img src="images/index/4.jpg" style="width: 1200px;height:400px"></a></li>
		    <li><a href="#"><img src="images/index/5.jpg" style="width: 1200px;height:400px"></a></li>
		  </ul>
		  <!--小圆点-->
		  <ul class="dot"><li class="on"></li><li></li><li></li><li></li><li></li></ul>
		  <!-- 左右翻页箭头-->
		  <div class="arrow"><span class="prev">&lt;</span><span class="next">&gt;</span></div>
		</div>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/lunbo.js"></script>
		
		<!-- 底部 -->
		<!-- 列表页 -->
		
			<div class="left">
				<div class="module"><div frag="面板4"><div frag="窗口4"><div class="module-tit"><div class="module-tit-bt">课程简介  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</div><div class="more" frag="按钮" type="更多"><div class="more"><a href="/Class/introduction.php" class="w4_more"><div frag="按钮内容">更多>></div></a></div></div><div class="clear"></div></div><div class="module-notic-nr"><div id="wp_news_w4"> 
				<ul class="wp_article_list"> 
				     <li class="list_item i1"> 
				          <li style="padding-left:30px;">&nbsp; &nbsp;
				          <?php $sql="SELECT content FROM `introduction`";//sql语句，查询数据表信息
								$result = mysqli_query($link, $sql);
								// mysqli_num_rows获取结果中行的数量
								//$newsNum = mysqli_num_rows($result);
								$row = mysqli_fetch_assoc($result);
								echo $row['content'];
								$result->free(); //释放结果集
							?></li>
				     </li> 
				</ul> 
				</div> 
				<div class="clear"></div></div></div></div></div>
				<div class="left-min"><div class="module-lt"><div frag="面板5"><div frag="窗口5"><div class="module-tit"><div class="module-tit-bt">课程目标</div><div class="more" frag="按钮" type="更多"><div class="more"><a href="/Class/outline.php" class="w5_more"><div frag="按钮内容">更多>></div></a></div></div><div class="clear"></div></div><div class="module-nr"><div id="wp_news_w5"> 
					<ul class="wp_article_list">
					     <li class="list_item i1"> 
								<li><a style="text-overflow: -o-ellipsis-lastline;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 5;/*这里的5表示只显示5行*/-webkit-box-orient: vertical;">&nbsp; &nbsp;
									<?php $sql="SELECT target FROM `outline`";//sql语句，查询数据表信息
									$result = mysqli_query($link, $sql);
									// mysqli_num_rows获取结果中行的数量
									//$newsNum = mysqli_num_rows($result);
									$row = mysqli_fetch_assoc($result);
									echo $row['target'];
									$result->free(); //释放结果集
								?>
									
								</a></li>


						 </li> 
					</ul> 
				</div> 
				<div class="clear"></div></div></div></div></div><div class="module-rt"><div frag="面板6"><div frag="窗口6"><div class="module-tit"><div class="module-tit-bt">专题讲座</div><div class="more" frag="按钮" type="更多"><div class="more"><a href="/21/list.htm" class="w6_more"><div frag="按钮内容">更多>></div></a></div></div><div class="clear"></div></div><div class="module-nrzf"><div id="wp_news_w6"> 
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wp_article_list_table"> 
				<tbody>
				<?php $sql="SELECT * FROM `lecture`";//sql语句，查询数据表信息
								$result = mysqli_query($link, $sql);
								// mysqli_num_rows获取结果中行的数量
								$newsNum = mysqli_num_rows($result);
								
								for($i=0;$i<$newsNum;$i++){
									$row = mysqli_fetch_assoc($result);
									echo "<tr><td><table><tbody><tr><td>&nbsp;";
									echo "<a href='' target='_self'>";
									echo $row['name'];
									echo "</a>";
									echo "<span class='zcfgt'>";
									echo $row['date'];
									echo "</span>";
									
									echo "</td></tr></tbody></table></td></tr>";
								}
								
								$result->free(); //释放结果集
				?>
				
				</tbody></table></div> 
				<div class="clear"></div></div></div></div></div><div class="clear"></div></div>
				<div class="module"><div frag="面板7"><div frag="窗口7"><div class="module-tit"><div class="module-tit-bt">课程展示</div><div class="more" frag="按钮" type="更多"><div class="more"><a href="/22/list.htm" class="w7_more"><div frag="按钮内容">更多>></div></a></div></div><div class="clear"></div></div><div class="module-pic"><div id="topw7" class="imgscroll2_top" style="width:900px;height:100%;overflow:hidden;">
				    <table id="tabw7" border="0" cellpadding="0" cellspacing="0">
				        <tbody><tr>
				            <td id="beginw7">
				                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="imgscroll2_tpl ">
				                    <tbody><tr class=" ">
				                        <td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java设计模式">
				                                    
				                                        <img alt="Java设计模式" src="images/index/book1.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java Web设计模式之道">
				                                    
				                                        <img alt="Java Web设计模式之道" src="./images/index/book2.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java实战">
				                                    
				                                        <img alt="Java实战" src="./images/index/book3.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java核心技术精讲">
				                                    
				                                        <img alt="Java核心技术精讲" src="./images/index/book4.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java开发技术">
				                                    
				                                        <img alt="Java开发技术" src="./images/index/book5.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td>
				                    </tr>
				                </tbody></table>
				            </td>
				            <td id="endw7">
				                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="imgscroll2_tpl ">
				                    <tbody><tr class=" ">
				                        <td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java设计模式">
				                                    
				                                        <img alt="Java设计模式" src="images/index/book1.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java Web设计模式之道">
				                                    
				                                        <img alt="Java Web设计模式之道" src="images/index/book2.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java实战">
				                                    
				                                        <img alt="Java实战" src="images/index/book3.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank"  title="Java核心技术精讲">
				                                    
				                                        <img alt="Java核心技术精讲" src="images/index/book4.jpg" width="235px" height="178px">
				                                </a>
				                            </div>
				                        </td><td nowrap="nowrap" class=" imgscroll2_td ">
				                            <div class="imgscroll2_img">
				                                <a tailtagoutput="false" target="_blank" title="Java开发技术">
				                                    
				                                        <img alt="Java开发技术" src="images/index/book5.jpg" width="235px" height="178px">
				                                    
				                                </a>
				                            </div>
				                        </td>
				                    </tr>
				                </tbody></table>
				            </td>
				        </tr>
				    </tbody></table>
				</div>
				
				<script language="javascript">
				    var topw7 = document.getElementById("topw7");
				    var beginw7 = document.getElementById("beginw7");
				    var endw7 = document.getElementById("endw7");
				    var tabw7 = document.getElementById("tabw7");
				    //复制内容
				    endw7.innerHTML = beginw7.innerHTML;
				    //调整table的宽度
				    tabw7.style.width = topw7.offsetWidth * 2;
				    //循环函数
				    function marqueew7() {
				        if (endw7.offsetWidth - topw7.scrollLeft <= 0) {
				            topw7.scrollLeft -= beginw7.offsetWidth;
				        } else {
				            topw7.scrollLeft += 1;
				        }
				    }
				    //定时器
				    var mymarw7 = setInterval(marqueew7, 50);
				    //鼠标移入
				    topw7.onmouseover = function() {
				        clearInterval(mymarw7);
				    };
				    //鼠标移出
				    topw7.onmouseout = function() {
				        mymarw7 = setInterval(marqueew7, 50);
				    };
				</script><div class="clear"></div></div></div></div></div>
			</div>
			<div class="right">
			<div class="lane"><div class="fourtitle"><div class="wkczb"><a href="/Class/introduction.php"><img src="./images/index/tbq.png" height="23" width="26">课程简介</a></div><div class="kcsb"><a href="/Class/outline.php"><img src="./images/index/tbq.png" height="23" width="26">教学大纲</a></div><div class="jxsp"><a href="/0a/6c/c11a2668/page.htm" target="_self" _href="/0a/6c/c11a2668/page.htm" textvalue="只支持选中一个链接时生效"><img src="./images/index/tbq.png" height="23" width="26">教学梯队</a></div><div class="wzsq"><a href="/47/list.htm"><img src="./images/index/tbq.png" height="23" width="26">获奖情况</a></div></div><div class=" clear"></div></div><div class="module-scroll"><div class="scroll"><div class="navbar-example scroll-tit"><span><a href="javascript:void(0)" class="titleone" id="titlefirst">按学校查看 </a></span><span><a href="javascript:void(0)" class="titletwo" id="titlesecond">按年份查看 </a></span><div class="clear"></div></div><div class=" clear"></div></div><div class="scroll-list scrollspy-example"><div class="one"><div frag="面板8"><div frag="窗口8"><div id="wp_nav_w8"> 
			
			 
			<ul class="wp_nav" data-nav-config="{vertical: {active: '1', col: '1' }, drop_v: 'down', drop_w: 'right', dir: 'y', opacity_main: '-1', opacity_sub: '-1', dWidth: '0'}" style="height: auto;">
			      
			     <li class="nav-item i1" style="display: block; width: 100%; float: none;"> 
			         <a href="/qb/list.htm" title="全部" target="_self" style="display: block; width: auto;"><span class="item-name">全部</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			     
			     
			      
			     <li class="nav-item i32" style="display: block; width: 100%; float: none;"> 
			         <a href="https://www.cqnu.edu.cn/" title="重庆师范大学" target="_self" style="display: block; width: auto;"><span class="item-name">重庆师范大学</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			     <li class="nav-item i33" style="display: block; width: 100%; float: none;"> 
			         <a href="https://www.cqu.edu.cn/" title="重庆大学" target="_self" style="display: block; width: auto;"><span class="item-name">重庆大学</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			     <li class="nav-item i34" style="display: block; width: 100%; float: none;"> 
			         <a href="https://www.cqut.edu.cn/" title="重庆理工大学" target="_self" style="display: block; width: auto;"><span class="item-name">重庆理工大学</span></a><i class="mark"></i> 
			          
			     </li> 
				 <li class="nav-item i34" style="display: block; width: 100%; float: none;">
				     <a href="http://www.cqupt.edu.cn/" title="重庆邮电大学" target="_self" style="display: block; width: auto;"><span class="item-name">重庆邮电大学</span></a><i class="mark"></i> 
				      
				 </li> 
				 <li class="nav-item i34" style="display: block; width: 100%; float: none;">
				     <a href="https://www.tsinghua.edu.cn/" title="清华大学" target="_self" style="display: block; width: auto;"><span class="item-name">清华大学</span></a><i class="mark"></i> 
				      
				 </li>
				 <li class="nav-item i34" style="display: block; width: 100%; float: none;">
				     <a href="http://scu.edu.cn/" title="四川大学" target="_self" style="display: block; width: auto;"><span class="item-name">四川大学</span></a><i class="mark"></i> 
				      
				 </li>
				 <li class="nav-item i34" style="display: block; width: 100%; float: none;">
				     <a href="https://www.nenu.edu.cn/" title="东北师范大学" target="_self" style="display: block; width: auto;"><span class="item-name">东北师范大学</span></a><i class="mark"></i> 
				      
				 </li>
				 <li class="nav-item i34" style="display: block; width: 100%; float: none;">
				     <a href="http://www.ynu.edu.cn/" title="云南大学" target="_self" style="display: block; width: auto;"><span class="item-name">云南大学</span></a><i class="mark"></i> 
				      
				 </li>
			     <li class="nav-item i34" style="display: block; width: 100%; float: none;">
			         <a href="https://www.jlu.edu.cn/" title="吉林大学" target="_self" style="display: block; width: auto;"><span class="item-name">吉林大学</span></a><i class="mark"></i> 
			          
			     </li>
			     <li class="nav-item i34" style="display: block; width: 100%; float: none;">
			         <a href="http://www.gzu.edu.cn/" title="贵州大学" target="_self" style="display: block; width: auto;"><span class="item-name">贵州大学</span></a><i class="mark"></i> 
			          
			     </li> 
			     <li class="nav-item i34" style="display: block; width: 100%; float: none;">
			         <a href="http://www.hit.edu.cn/" title="哈尔滨工业大学" target="_self" style="display: block; width: auto;"><span class="item-name">哈尔滨工业大学</span></a><i class="mark"></i> 
			          
			     </li> 
			</ul> 
			 
			 
			 </div></div></div></div><div class="two" style="display: none;"><div frag="面板9"><div frag="窗口9"><div id="wp_nav_w9"> 
			
			 
			<ul class="wp_nav" data-nav-config="{vertical: {active: '1', col: '1' }, drop_v: 'down', drop_w: 'right', dir: 'y', opacity_main: '-1', opacity_sub: '-1', dWidth: '0'}" style="height: auto;">
			      
			     <li class="nav-item i1 " style="display: block; width: 100%; float: none;"> 
			         <a href="/2019ngjjpkc/list.htm" title="2019年各级精品课程" target="_self" style="display: block; width: auto;"><span class="item-name">2019年各级精品课程</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			    
			     <li class="nav-item i16 " style="display: block; width: 100%; float: none;"> 
			         <a href="/2004ngjjpkc/list.htm" title="2004年各级精品课程" target="_self" style="display: block; width: auto;"><span class="item-name">2004年各级精品课程</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			     <li class="nav-item i17 " style="display: block; width: 100%; float: none;"> 
			         <a href="/2003ngjjpkc/list.htm" title="2003年各级精品课程" target="_self" style="display: block; width: auto;"><span class="item-name">2003年各级精品课程</span></a><i class="mark"></i> 
			          
			     </li> 
			      
			</ul> 
			 
			 
			 </div></div></div></div></div></div><div class="module-links"><div frag="面板10"><div frag="窗口10"><div class="module-tit"><div class="module-tit-bt">相关链接</div><div class="more" frag="按钮" type="更多"><div class="more"><a href="/23/list.htm" class="w10_more"><div frag="按钮内容"></div></a></div></div><div class="clear"></div></div><div class="module-links-nr"><div id="wp_news_w10"> 
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wp_article_list_table"> 
			<tbody><tr> 
			<td> 
			<table><tbody><tr><td><a href="http://jpkcmake.fudan.edu.cn/" target="_blank" title="新版精品课程制作管理入口">新版精品课程制作管理入口</a></td></tr></tbody></table></td> 
			</tr> 
			<tr> 
			<td> 
			<table><tbody><tr><td><a href="http://www.moe.gov.cn/" target="_blank" title="教育部">教育部</a></td></tr></tbody></table></td> 
			</tr> 
			<tr> 
			<td> 
			<table><tbody><tr><td><a href="http://www.ecampus.fudan.edu.cn/" target="_blank" title="WWS大学信息办">WWS大学信息办</a></td></tr></tbody></table></td> 
			</tr> 
			<tr> 
			<td> 
			<table><tbody><tr><td><a href="https://www.fudan.edu.cn/" target="_blank" title="WWS大学">WWS大学</a></td></tr></tbody></table></td> 
			</tr> 
			<tr> 
			<td> 
			<table><tbody><tr><td><a href="http://www.jwc.fudan.edu.cn/" target="_blank" title="WWS大学教务处">WWS大学教务处</a></td></tr></tbody></table></td> 
			</tr> 
			<tr> 
			<td> 
			<table><tbody><tr><td><a href="http://jpkc.fudan.edu.cn" target="_blank" title="WWS精品课程网站管理人员">WWS精品课程网站管理人员</a></td></tr></tbody></table></td> 
			</tr> 
			</tbody></table></div> 
			<div class="clear"></div></div></div></div></div></div>
			
		
		
		
		<div class="di" >	<!-- 底部介绍内容 -->
			<!-- <a href="#"><img src="images/1.jpg" style="width: 150px; height: 80px;"></a> -->
			<li><a href="#">关于我们</a></li>
			<li><a href="http://127.0.0.1:8848/good/top.html">广告服务</a></li>
			<li><a href="#">开发助手</a></li>
			<li><a href="#">📞110-120-10086</a></li>
			<li><a href="#">📧@meiyou.com</a></li>
		</div>
		</div>
		<script>
			$(document).ready(function(){
				 $(".di>li:first").click(function()
				        {
				            window.location.href = "http://127.0.0.1:8848/good/top.html";
				        })
				      
			})
		</script>
	</body>
</html>
