<?php 
require './common/conn.php';
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/book-half.svg">
    <link rel="" href="css/my.css">
<!--    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/">-->

    <title>“精品课程网站”后台管理系统</title>
	<!-- <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/examples/dashboard/dashboard.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/assets/js/ie-emulation-modes-warning.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		#myBtn {
		    display: none; /* 默认隐藏 */
		    position: fixed; 
		    bottom: 20px; 
		    right: 30px; 
		    z-index: 99; 
		    border: none;
		    outline: none; 
			/*background-color: #E6E6E6; /* 设置背景颜色，你可以设置自己想要的颜色或图片 */
		    color: black; /* 文本颜色 */
		    cursor: pointer; 
		    padding: 5px; 
		    border-radius: 30px; /* 圆角 */
		}
	</style>
  </head>

  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">																	<!-- 上方导航条 -->
      <div class="container-fluid">
        <div class="navbar-header">
<!--          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--            <span class="sr-only">Toggle navigation</span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--          </button>-->
          <a class="navbar-brand" href="#">“精品课程网站”后台管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">退出</a></li>
            <li><a href="index.php">网站首页</a></li>
            <li><a href="#">帮助</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="搜索...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
																															<!-- 左侧导航栏 -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#d1"><h4>课程管理</h4></a></li>
            <li><a href="#d1">课程简介</a></li>
            <li><a href="#d2">课程大纲</a></li>
            <li><a href="#d3">主题讲座</a></li>
            <li><a href="#d4">教学梯队</a></li>
            <li><a href="#d5">获奖情况</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#d6"><h4>账号管理</h4></a></li>
            <li><a href="#d6">用户管理</a></li>
            <li><a href="#d7">管理员管理</a></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">												<!-- 右侧begin -->
		  <h1 class="page-header" id="d1"><span class="glyphicon glyphicon-cog btn-lg" aria-hidden="true"></span>  课程管理</h1>
		  
		  <div  id="d1"></div><br>
		  																													<!-- d1 课程简介 -->
		  <h2 class="sub-header">课程简介</h2>
          <div class="row placeholders">
           <div class="col-xs-6 col-sm-3 placeholder">																		<!-- d1圆形📕图案-->
              <img src="images/book.png" width="200" height="200" class="img-thumbnail" alt="Generic placeholder thumbnail">
              <h4>设计模式</h4>
              <span class="text-muted">（Design pattern）</span>
            </div>

            <div class="col-xs-6 col-sm-8 placeholder">																		<!-- d1右侧文本框 -->
				<textarea class="form-control"  rows="10" name="introduction" disabled >
					<?php 
						$sql="SELECT* FROM `introduction`";
						$result = mysqli_query($link, $sql);
						$row = mysqli_fetch_assoc($result);
						echo "{$row['content']}"; 
					?>
				</textarea>
				<button type="button" class="btn btn-info" style="float: right;" data-toggle="modal" 
						data-target="#introduction-window">修改</button>
																													   <!-- d1修改简介弹出框 -->
																													
				<form action="modify/modify_1.php" method="post">
					<div class="modal fade" id="introduction-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">修改课程简介</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
	    							<textarea rows="10" cols="70" name="content"><?php echo "{$row['content']}";?></textarea>
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    			</div>
    			</form>
            </div>
          </div>

 		  <br><div  id="d2"></div><br>
          																													<!-- d2 课程大纲 -->
		  <h2 class="sub-header">课程大纲</h2><br><br>
		  
			<form>
			<?php 
				$sql="SELECT* FROM `outline`";
				$result = mysqli_query($link, $sql);
				$row = mysqli_fetch_assoc($result);
			?>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <div class="col-sm-4"><label for="name">课程名称</label></div>
			      <div class="col-sm-8"><input type="text" class="form-control" name="name" value="<?=$row['name']?>" disabled></div>
			    </div>
			    <div class="form-group col-md-8">
			      <div class="col-sm-2"><label for="en_name">英文名称</label></div>
			      <div class="col-sm-4"><input type="text" class="form-control" name="en_name" value="<?=$row['en_name']?>" disabled></div>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <div class="col-sm-4"><label for="time">课程学时</label></div>
			      <div class="col-sm-8"><input type="text" class="form-control" name="time" value="<?=$row['period']?>" disabled></div>
			    </div>
			    <div class="form-group col-md-8">
			      <div class="col-sm-2"><label for="credits">课程学分</label></div>
			      <div class="col-sm-4"><input type="text" class="form-control" name="credits" value="<?=$row['credit']?>" disabled></div>
			    </div>
			  </div>
			  <div class="form-row">					
				  <div class="form-group col-md-4">
				    <div class="col-sm-4"><label for="type">课程性质</label></div>
				    <div class="col-sm-8"><input type="radio" name="type" value="必修" checked disabled>必修&emsp;&emsp;
										  <input type="radio" name="type" value="选修" disabled>选修
				 	</div>
				  </div>
				  <div class="form-group col-md-8">
				  	<div class="col-sm-2"><label for="type">适用专业</label></div>
				     <div class="col-sm-8 form-check">
				        <input class="form-check-input" type="checkbox" name="subject" checked disabled>软件工程1&emsp;
						<input class="form-check-input" type="checkbox" name="subject" checked disabled>软件工程2&emsp;
						<input class="form-check-input" type="checkbox" name="subject" disabled>软件工程3&emsp;
				    </div>
				  </div>
			  </div>
			  <div class="form-group col-md-12">
			      <div class="col-sm-2"><label for="target">课程教学任务与目标</label></div>
			      <div class="col-sm-7"><textarea type="text" rows="8" class="form-control" name="target" disabled><?php echo "{$row['target']}";?></textarea></div>
			  </div>
			  <div class="form-group col-md-12">
			      <div class="col-sm-2"><label for="content">课程内容及基本要求</label></div>
			      <div class="col-sm-7"><textarea type="text" rows="8" class="form-control" name="content"  disabled><?php echo "{$row['content']}";?></textarea></div>
			  </div>
			  &emsp;&emsp;
			  <button type="button" class="btn btn-info" style="float: center;" data-toggle="modal" data-target="#outline-window">修改</button>
			</form>
																															
																														<!-- d2 修改课程大纲 -->
				<form action="modify/modify_2.php" method="post">
					<div class="modal fade" id="outline-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">修改课程大纲</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
	    							<div class="form-row">
									    <div class="form-group col-md-6">
									      <div class="col-sm-5"><label for="name">课程名称</label></div>
									      <div class="col-sm-7"><input type="text" class="form-control" name="name" value="<?=$row['name']?>"></div>
									    </div>
									    <div class="form-group col-md-6">
									      <div class="col-sm-5"><label for="en_name">英文名称</label></div>
									      <div class="col-sm-7"><input type="text" class="form-control" name="en_name" value="<?=$row['en_name']?>"></div>
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <div class="col-sm-5"><label for="period">课程学时</label></div>
									      <div class="col-sm-7"><input type="text" class="form-control" name="period" value="<?=$row['period']?>"></div>
									    </div>
									    <div class="form-group col-md-6">
									      <div class="col-sm-5"><label for="credit">课程学分</label></div>
									      <div class="col-sm-7"><input type="text" class="form-control" name="credit" value="<?=$row['credit']?>"></div>
									    </div>
									  </div>
									  <div class="form-row">					
										  <div class="form-group col-md-12">
										    <div class="col-sm-2"><label for="nature">课程性质</label></div>
										    <div class="col-sm-8">&emsp;&emsp;<input type="radio" name="nature" value="必修" checked>必修&emsp;&emsp;
																  <input type="radio" name="nature" value="选修">选修
										 	</div>
										  </div>
										  <div class="form-group col-md-12">
										  	<div class="col-sm-2"><label for="subject">适用专业</label></div>
										     <div class="col-sm-8 form-check">&emsp;&emsp;
										        <input class="form-check-input" type="checkbox" name="subject" checked>软件工程1&emsp;
										        <input class="form-check-input" type="checkbox" name="subject" checked>软件工程2&emsp;
										        <input class="form-check-input" type="checkbox" name="subject" >软件工程3&emsp;
										    </div>
										  </div>
									  </div>
									  <div class="form-group col-md-12">
									      <div class="col-sm-4"><label for="target">课程教学任务与目标</label></div>
									      <div class="col-sm-8"><textarea type="text" rows="6" class="form-control" name="target"><?php echo "{$row['target']}";?></textarea></div>
									  </div>
									  <div class="form-group col-md-12">
									      <div class="col-sm-4"><label for="content">课程内容及基本要求</label></div>
									      <div class="col-sm-8"><textarea type="text" rows="6" class="form-control" name="content"><?php echo "{$row['content']}";?></textarea></div>
									  </div>
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    			</div>
    			</form>
    			
    			
    			
		  

		  <br><div  id="d3"></div><br>
		  																													<!-- d3 主题讲座 -->
		  <h2 class="sub-header">主题讲座</h2>
		  <div class="table-responsive">
		    <table class="table table-striped">
		      <thead>
		        <tr>
		  			<th>ID</th>
		  			<th>讲座名称</th>
		  			<th>讲座时间</th>
		  			<th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
				<?php
						$sql="SELECT* FROM `lecture`";//sql语句，查询数据表信息
						$result = mysqli_query($link, $sql);
						// mysqli_num_rows获取结果中行的数量
						$newsNum = mysqli_num_rows($result);
						for($i=0;$i<$newsNum;$i++){
							//mysqli_fetch_assoc获取一行结果并以关联数组返回
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['name']}</td>";
							echo "<td>{$row['date']}</td>";
							echo "<td>
									<a href='javascript:del_lecture({$row['id']})'>
										<button type='button' class='btn btn-danger btn-sm'>删除</button>
									</a>
									<a href='javascript:getID(this)'>
										<button type='button' class='btn btn-info btn-primary btn-sm' data-toggle='modal' data-target='#lecture-window'>修改</button>
									</a>
								 </td>";
							echo "</tr>";
						}
				?>
		      </tbody>
		    </table>
		    <div class="add">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-3-window">增加讲座信息</button>
			</div>
		  </div>        
        
        																													<!-- d3 增加讲座 -->
																													
			<form action="add/add_3.php" method="post">
				<div class="modal fade" id="add-3-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    						<h4 class="modal-title" id="myModalLabel">增加讲座信息</h4>
    					</div>
    					
    					<div class="modal-body">
    						<form class="form-inline" role="form">
	    						<div class="form-group row">
								    <label for="name" class="col-sm-2 col-form-label">讲座名称</label>
								    <div class="col-sm-10">
								       <input type="text" class="form-control" name="name" placeholder="请输入讲座名称">
								    </div>
								</div>
								<div class="form-group row">
								    <label for="date" class="col-sm-2 col-form-label">举办时间</label>
								    <div class="col-sm-10">
								       <input type="date" class="form-control" name="date">
								    </div>
								</div>
    						</form>
    					</div>
    					
    					<div class="modal-footer">
   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
    		                <button type="submit" class="btn btn-primary">保存</button>
    					</div>
    				</div>
    			</div>
    			</div>
    		</form>
        																													<!-- d3 修改讲座 -->
																													
			<form action="modify/modify_3.php" method="post">
				<div class="modal fade" id="lecture-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    						<h4 class="modal-title" id="myModalLabel">修改讲座信息</h4>
    					</div>
    					
    					<div class="modal-body">
    						<form class="form-inline" role="form">
	    						<div class="form-group row">
								    <label for="name" class="col-sm-2 col-form-label">讲座名称</label>
								    <div class="col-sm-10">
								       <input type="text" class="form-control" name="name" placeholder="请输入讲座名称">
								    </div>
								</div>
								<div class="form-group row">
								    <label for="date" class="col-sm-2 col-form-label">举办时间</label>
								    <div class="col-sm-10">
								       <input type="date" class="form-control" name="date">
								    </div>
								</div>
    						</form>
    					</div>
    					
    					<div class="modal-footer">
   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
    		                <button type="submit" class="btn btn-primary">保存</button>
    					</div>
    				</div>
    			</div>
    			</div>
    		</form>
    	
    	  <br><div  id="d4"></div><br>
		  																													<!-- d4 教学梯队 -->
		  
          <h2 class="sub-header">教学梯队</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>姓名</th>
                  <th>性别</th>
                  <th>职称</th>
                  <th>学科专业</th>
				  <th>教学工作</th>
				  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php
						$sql="SELECT* FROM `teachers`";//sql语句，查询数据表信息
						$result = mysqli_query($link, $sql);
						// mysqli_num_rows获取结果中行的数量
						$newsNum = mysqli_num_rows($result);
						for($i=0;$i<$newsNum;$i++){
							//mysqli_fetch_assoc获取一行结果并以关联数组返回
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['t_id']}</td>";
							echo "<td>{$row['name']}</td>";
							echo "<td>{$row['sex']}</td>";
							echo "<td>{$row['titles']}</td>";
							echo "<td>{$row['subject']}</td>";
							echo "<td>{$row['job']}</td>";
							echo "<td>
									<a href='javascript:del_teacher({$row['t_id']})'>
										<button type='button' class='btn btn-danger btn-sm'>删除</button>
									</a>
									<a href='javascript:getteacher(this)'>
										<button type='button' class='btn btn-info btn-primary btn-sm' data-toggle='modal' data-target='#teacher-window'>修改</button>
									</a>
								 </td>";
							echo "</tr>";
						}
					?>
              </tbody>
            </table>
            <div class="add">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-4-window">增加教师信息</button>
			</div>
          </div>
      																													  <!-- d4 增加教师框 --> 			
		<form action="add/add_4.php" method="post" onSubmit="return beforeSubmit(this);"> 
			<div class="modal fade" id="add-4-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    				
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">增加教师信息</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
		    						<div class="form-group row">
									    <label for="name" class="col-sm-2 col-form-label">姓名</label>
									    <div class="col-sm-10">
									    	<input type="text" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）"
												pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
									   	</div>
									</div>
									<div class="form-group row">
									    <label for="sex" class="col-sm-2 col-form-label">性别</label>
									    <div class="col-sm-10">
									    	<input type="radio" name="sex" value="男">男&emsp;&emsp;
											<input type="radio" name="sex" value="女">女
									   	</div>
									</div>
	    							<div class="form-group row">
									    <label for="titles" class="col-sm-2 col-form-label">职称</label>
									    <div class="col-sm-10">
									    	<input type="text" class="form-control" name="titles" placeholder="请输入该教师职称">
									   	</div>
									</div>
									<div class="form-group row">
									    <label for="subject" class="col-sm-2 col-form-label">学科专业</label>
									    <div class="col-sm-10">
									    	<input type="text" class="form-control" name="subject" placeholder="请输入该教师所属学科专业">
									   	</div>
									</div>
									<div class="form-group row">
									    <label for="job" class="col-sm-2 col-form-label">教学工作</label>
									    <div class="col-sm-10">
									    	<input type="text" class="form-control" name="job" placeholder="请输入该教师在教学中担任的工作">
									   	</div>
									</div>							
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    	</div>
	    </form>    			

    																													  <!-- d4 修改教师框 -->
    	<form action="modify/modify_4.php" method="post">
			<div class="modal fade" id="teacher-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    						<h4 class="modal-title" id="myModalLabel">修改教师信息</h4>
    					</div>
    					
    					<div class="modal-body">
    						<form class="form-inline" role="form">
		    					<div class="form-group row">
								    <label for="name" class="col-sm-2 col-form-label">姓名</label>
								    <div class="col-sm-10">
								    	<input type="text" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）"
											pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
								   	</div>
								</div>
								<div class="form-group row">
								    <label for="sex" class="col-sm-2 col-form-label">性别</label>
								    <div class="col-sm-10">
								    	<input type="radio" name="sex" value="男">男&emsp;&emsp;
										<input type="radio" name="sex" value="女">女
								   	</div>
								</div>
	    						<div class="form-group row">
								    <label for="titles" class="col-sm-2 col-form-label">职称</label>
								    <div class="col-sm-10">
								    	<input type="text" class="form-control" name="titles" placeholder="请输入该教师职称">
								   	</div>
								</div>
								<div class="form-group row">
								    <label for="subject" class="col-sm-2 col-form-label">学科专业</label>
								    <div class="col-sm-10">
								    	<input type="text" class="form-control" name="subject" placeholder="请输入该教师所属学科专业">
								   	</div>
								</div>
								<div class="form-group row">
								    <label for="job" class="col-sm-2 col-form-label">教学工作</label>
								    <div class="col-sm-10">
								    	<input type="text" class="form-control" name="job" placeholder="请输入该教师在教学中担任的工作">
								   	</div>
								</div>							
	    					</form>
    					</div>
    					
    					<div class="modal-footer">
   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
    		                <button type="submit" class="btn btn-primary">保存</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</form>    	
    	
		  <br><div  id="d5"></div><br>
          																												  <!-- d5    获奖情况 -->
		  
		  <h2 class="sub-header">获奖情况</h2>
		  <div class="table-responsive">
		    <table class="table table-striped">
		      <thead>
		        <tr>
		  			<th>ID</th>
		  			<th>获奖名称</th>
		  			<th>获奖人/团队</th>
					<th>简介</th>
					<th>图片地址</th>
		  			<th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		        <?php
						$sql="SELECT* FROM `prize`";//sql语句，查询数据表信息
						$result = mysqli_query($link, $sql);
						// mysqli_num_rows获取结果中行的数量
						$newsNum = mysqli_num_rows($result);
						for($i=0;$i<$newsNum;$i++){
							//mysqli_fetch_assoc获取一行结果并以关联数组返回
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['p_id']}</td>";
							echo "<td>{$row['name']}</td>";
							echo "<td>{$row['winner']}</td>";
							echo "<td>{$row['content']}</td>";
							echo "<td>{$row['picture']}</td>";
							echo "<td>
									<a href='javascript:del_prize({$row['p_id']})'>
										<button type='button' class='btn btn-danger btn-sm'>删除</button>
									</a>
									<a href='javascript:getprize(this)'>
										<button type='button' class='btn btn-info btn-primary btn-sm' data-toggle='modal' data-target='#prize-window'>修改</button>
									</a>
								 </td>";
							echo "</tr>";
						}
					?>
		      </tbody>
		    </table>
		    <div class="add">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-5-window">增加获奖信息</button>
			</div>
		  </div>    	
    																													  <!-- d5 增加奖项框 -->
		<form action="add/add_5.php" method="post" onSubmit="return beforeSubmit(this);"> 
			<div class="modal fade" id="add-5-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    				
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">增加奖项</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
	    						  <div class="form-group row">
								    <label for="name" class="col-sm-3 col-form-label">获奖名称</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" name="name" placeholder="请输入奖项名称">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="winner" class="col-sm-3 col-form-label">获奖人/团队</label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" name="winner" placeholder="请输入获奖人姓名或团队名称">
								    </div>
								  </div>	
								  <div class="form-group row">
								    <label for="content" class="col-sm-3 col-form-label">简介</label>
								    <div class="col-sm-9">
								      <textarea type="text" class="form-control" name="content" cols="30" rows="5" placeholder="请输入奖项简介"></textarea>
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="content" class="col-sm-3 col-form-label">获奖证书</label>
								    <div class="col-sm-9">
								      <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/jpeg, image/gif, image/jpg" name="picture">
								    </div>
								  </div>
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    	</div>
   	 	</form>    			    	
    	
    	  <br><br><br><br>
		  <h1 class="page-header" id="d6"><span class="glyphicon glyphicon-cog btn-lg" aria-hidden="true"></span>  账号管理</h1>
		  
		  <div  id="d6"></div><br>
		  																												  <!-- d6   用户管理 -->
		  
		  <h2 class="sub-header">用户管理</h2>
		  <div class="table-responsive">
		    <table class="table table-striped">
		      <thead>
		        <tr>
					<th>ID</th>
					<th>姓名</th>
					<th>密码</th>
					<th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		        <?php
						$sql="SELECT* FROM `user`";//sql语句，查询数据表信息
						$result = mysqli_query($link, $sql);
						
						// mysqli_num_rows获取结果中行的数量
						$newsNum = mysqli_num_rows($result);
						for($i=0;$i<$newsNum;$i++){
							//mysqli_fetch_assoc获取一行结果并以关联数组返回
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['name']}</td>";
							echo "<td>{$row['password']}</td>";
							echo "<td>
									<a href='javascript:del_user({$row['id']})'>
										<button type='button' class='btn btn-danger btn-sm'>删除</button>
									</a>
									<a href='javascript:getuser(this)'>
										<button type='button' class='btn btn-info btn-primary btn-sm' data-toggle='modal' data-target='#user-window'>修改</button>
									</a>
								 </td>";
							echo "</tr>";
						}
						
					?>
		        
		      </tbody>
		    </table>
			<div class="add">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-6-window">增加用户信息</button>
			</div>
		  </div> 			
      						 																							  <!-- d6 增加用户框 --> 			
		<form action="add/add_6.php" method="post" onSubmit="return beforeSubmit(this);"> 
			<div class="modal fade" id="add-6-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    				
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">增加用户</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
	    							<div class="form-group row">
								    	<label for="name" class="col-sm-2 col-form-label">姓名</label>
								 	    <div class="col-sm-10">
								 	    	<input type="name" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）" pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
								  	 	</div>
								  	</div>
								  	<div class="form-group row">
								    	<label for="password" class="col-sm-2 col-form-label">密码</label>
								   		<div class="col-sm-10">
								      		<input type="password" class="form-control" name="password" placeholder="请输入6位密码" value="123456">
								    	</div>
								  	</div>			
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    	</div>
   	 	</form>    			

    																													  <!-- d6 修改用户框 -->
    	<form action="modify/modify_6.php" method="post">
			<div class="modal fade" id="user-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    						<h4 class="modal-title" id="myModalLabel">修改用户信息</h4>
    					</div>
    					
    					<div class="modal-body">
    						<form class="form-inline" role="form">
	    						<div class="form-group row">
							    	<label for="name" class="col-sm-2 col-form-label">姓名</label>
							 	    <div class="col-sm-10">
							 	    	<input type="name" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）" pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
							  	 	</div>
							  	</div>
							  	<div class="form-group row">
							    	<label for="password" class="col-sm-2 col-form-label">密码</label>
							   		<div class="col-sm-10">
							      		<input type="password" class="form-control" name="password" placeholder="请输入6位密码" value="123456">
							    	</div>
							  	</div>
    						</form>
    					</div>
    					
    					<div class="modal-footer">
   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
    		                <button type="submit" class="btn btn-primary">保存</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</form>
        
		  <br><div  id="d7"></div><br>
		  																												  <!-- d7 管理员管理 -->
			  
		 <h2 class="sub-header">管理员管理</h2> 
		 <div class="table-responsive">
		    <table class="table table-striped">
		      <thead>
		        <tr>
					<th>ID</th>
					<th>姓名</th>
					<th>密码</th>
					<th>操作</th>
		        </tr>
		      </thead>
		      <tbody>
		        <?php
						$sql="SELECT* FROM `admin`";//sql语句，查询数据表信息
						$result = mysqli_query($link, $sql);
						
						// mysqli_num_rows获取结果中行的数量
						$newsNum = mysqli_num_rows($result);
						for($i=0;$i<$newsNum;$i++){
							//mysqli_fetch_assoc获取一行结果并以关联数组返回
							$row = mysqli_fetch_assoc($result);
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['name']}</td>";
							echo "<td>{$row['password']}</td>";
							echo "<td>
									<a href='javascript:del_admin({$row['id']})'>
										<button type='button' class='btn btn-danger btn-sm'>删除</button>
									</a>
									<a href='javascript:getadmin(this)'>
										<button type='button' class='btn btn-info btn-primary btn-sm' data-toggle='modal' data-target='#admin-window'>修改</button>
									</a>
								 </td>";
							echo "</tr>";
						}
						
					?>
		        
		      </tbody>
		    </table>
		    <div class="add">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-7-window">增加管理员信息</button>
			</div>
		  </div>		  
      						 																							  <!-- d7 增加管理员框 --> 			
		<form action="add/add_7.php" method="post" onSubmit="return beforeSubmit(this);"> 
			<div class="modal fade" id="add-7-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    			<div class="modal-dialog">
	    				<div class="modal-content">
	    				
	    					<div class="modal-header">
	    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    						<h4 class="modal-title" id="myModalLabel">增加管理员</h4>
	    					</div>
	    					
	    					<div class="modal-body">
	    						<form class="form-inline" role="form">
	    							<div class="form-group row">
								    	<label for="name" class="col-sm-2 col-form-label">姓名</label>
								 	    <div class="col-sm-10">
								 	    	<input type="name" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）" pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
								  	 	</div>
								  	</div>
								  	<div class="form-group row">
								    	<label for="password" class="col-sm-2 col-form-label">密码</label>
								   		<div class="col-sm-10">
								      		<input type="password" class="form-control" name="password" placeholder="请输入6位密码" value="123456">
								    	</div>
								  	</div>			
	    						</form>
	    					</div>
	    					
	    					<div class="modal-footer">
	   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
	    		                <button type="submit" class="btn btn-primary">保存</button>
	    					</div>
	    				</div>
	    			</div>
	    	</div>
   	 	</form>    			
   	 																													<!-- d7 修改管理员框 -->
    	<form action="modify/modify_7.php" method="post">
			<div class="modal fade" id="admin-window" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog">
    				<div class="modal-content">
    					<div class="modal-header">
    						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    						<h4 class="modal-title" id="myModalLabel">修改管理员信息</h4>
    					</div>
    					
    					<div class="modal-body">
    						<form class="form-inline" role="form">
	    						<div class="form-group row">
							    	<label for="name" class="col-sm-2 col-form-label">姓名</label>
							 	    <div class="col-sm-10">
							 	    	<input type="name" class="form-control" name="name" placeholder="请填写2-20位汉字（允许出现 · ）" pattern="^[\u4E00-\u9FA5\uf900-\ufa2d·s]{2,20}$" ><span class="validity name"/></span>
							  	 	</div>
							  	</div>
							  	<div class="form-group row">
							    	<label for="password" class="col-sm-2 col-form-label">密码</label>
							   		<div class="col-sm-10">
							      		<input type="password" class="form-control" name="password" placeholder="请输入6位密码" value="123456">
							    	</div>
							  	</div>
    						</form>
    					</div>
    					
    					<div class="modal-footer">
   			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
    		                <button type="submit" class="btn btn-primary">保存</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</form>
        
        
        
        
        
        
        <button onclick="topFunction()" id="myBtn" title="回顶部"><img src="images/top5.png" width="40" height="40"></button>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/assets/js/vendor/jquery.min.js"><\/script>')</script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/dist/js/bootstrap.min.js"></script>-->
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/assets/js/vendor/holder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.4/assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	//删除讲座信息
	    function del_lecture (id) {
			if (confirm("确定删除这条信息吗？")){
				window.location = "delete/delete_3.php?id="+id;
			}
		}
	    function getID(ths) {
	    	$("#lecture-window").modal('show');
			var $td = $(ths).parents('td').parents('tr').children('td');
			var id = $td.eq(0).text();
			var name = $td.eq(1).text();
	    	$("#id_3").val(id);
	    	$("#name_3").val(name);
		} 
	    function del_teacher (id) {
			if (confirm("确定删除这条信息吗？")){
				window.location = "delete/delete_4.php?id="+id;
			}
		}
	    function del_prize (id) {
			if (confirm("确定删除这条信息吗？")){
				window.location = "delete/delete_5.php?id="+id;
			}
		}
	    function del_user (id) {
			if (confirm("确定删除这条信息吗？")){
				window.location = "delete/delete_6.php?id="+id;
			}
		}
	    function del_admin (id) {
			if (confirm("确定删除这条信息吗？")){
				window.location = "delete/delete_7.php?id="+id;
			}
		}

		 // 当网页向下滑动 1000px 出现"返回顶部" 按钮
		 window.onscroll = function() {scrollFunction()};
		  
		 function scrollFunction() {console.log(121);
		     if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
		         document.getElementById("myBtn").style.display = "block";
		     } else {
		         document.getElementById("myBtn").style.display = "none";
		     }
		 }
		  
		 // 点击按钮，返回顶部
		 function topFunction() {
		     document.body.scrollTop = 0;
		     document.documentElement.scrollTop = 0;
		 }
	 		
    </script>
  </body>
</html>  