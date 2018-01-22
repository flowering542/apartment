<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>控制中心</title>
		<!--Loading Bootstrap-->
		<link rel="stylesheet" type="text/css" href="/apartment/Public/teacher/css/bootstrap.min.css" />
		<!--Loading font-awesome-->
		<link rel="stylesheet" type="text/css" href="/apartment/Public/teacher/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="/apartment/Public/teacher/css/main.css" />
		<style type="text/css">
			table thead tr th,
			table tbody tr td {
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div class="container-fluid">
			<h3 class="page-header">控制中心</h3>
			<!--begin dashbord stats-->
			<div class="row ">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="dashboard-stat turquoise">
						<div class="visual">
							<i class="fa fa-globe fa-spin"></i>
						</div>
						<div class="details">
							<!--显示待批改试卷数量-->
							<div class="number">
								1
							</div>
							<div class="desc">
								待批改试卷
							</div>
						</div>
						<!--跳转到待批改试卷-->
						<a href="<?php echo U('Exam/waitExam');?>" class="more green_sea">待批改试卷<i class="fa fa-sign-in"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="dashboard-stat emerland">
						<div class="visual">
							<i class="fa fa-sun-o fa-spin"></i>
						</div>
						<div class="details">
							<!--显示试卷数量-->
							<div class="number">
								1
							</div>
							<div class="desc">
								试卷
							</div>
						</div>
						<!--跳转到新建试卷-->
						<a href="<?php echo U('Exam/setExam');?>" class="more nephritis">新建试卷<i class="fa fa-sign-in"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="dashboard-stat peter_river">
						<div class="visual">
							<i class="fa fa-star-o fa-spin"></i>
						</div>
						<div class="details">
							<!--显示题库中试题的数量-->
							<div class="number">
								14
							</div>
							<div class="desc">
								试题
							</div>
						</div>
						<!--跳转到试题列表-->
						<a href="<?php echo U('Teacher/questionList');?>" class="more belize_hole">管理试卷试题<i class="fa fa-sign-in"></i></a>
					</div>
				</div>
			</div>
			<!--近期考试安排-->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
					<div class="panel panel-success">
						<div class="panel-heading">
							<h4><i class="fa fa-table"></i>&nbsp;近期考试安排</h4>
						</div>
						<div class="panel-body">
							<form action="">
								<div class="table-responsive">
									<table class="table table-hover table-striped">
										<thead>
											<tr>
												<th>序号</th>
												<th>考试码</th>
												<th>考试名称</th>
												<th>考试科目</th>
												<th>考试开始时间</th>
												<th>考试时长</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>0914</td>
												<td>web考试</td>
												<td>Web开发</td>
												<td>2017-09-14</td>
												<td>2小时</td>
											</tr>
										</tbody>
									</table>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/apartment/Public/teacher/js/jquery-3.2.1.min.js"></script>
		<script src="/apartment/Public/teacher/js/bootstrap.min.js"></script>
	</body>

</html>