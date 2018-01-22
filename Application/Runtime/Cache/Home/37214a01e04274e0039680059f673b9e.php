<?php if (!defined('THINK_PATH')) exit(); header('Access-Control-Allow-Origin:http://code.z01.com'); ?>
<!DOCTYPE html>
<!--中心简介-->
<html lang="zh"> 

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="user-scalable=yes, width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title><?php echo C('site.name');?></title>
		<link rel="stylesheet" type="text/css" href="/apartment/Public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/apartment/Public/css/font-awesome.min.css" />
		<script type="text/javascript" src="/apartment/Public/js/jquery-1-4-2.min.js"></script>
		<link rel="shortcut icon" href="/apartment/Public/img/logo.png">
		<style type="text/css">
			#goldBar {
			    float: left;
			    position: absolute;
			    height: 100px;
			    width: 10px;
			    z-index: 10001;
			    background: none repeat scroll 0px 0px;
			}
			.leftContent {
				width: 70%;
				float: left;
				min-height: 400px;
				background: #fff;
			}
			.sidebarRight .columnHeader h1 {
				font-size: 18px;
			}
			.mainItem{
				width: 75px;
			}
		</style>
	</head>

	<body>
		<header>
			<div class="header_wrapper">
				<div id="goldBar">
					
				</div>	
				<div class="topWrap">
					<div class="mainWrap">
						<div style="width: 1024px;margin: 0px auto;">
						   	<a href="<?php echo U('/');?>">
							<div class="logo" style="margin-left:0px">
								<img src="/apartment/Public/img/sdjzu_logo.png" />
							</div>
							<div class="cnname">
								学生公寓中心
								<div class="egname text-center">
									Student Accommodation Center
								</div>
							</div>
						</a>
						</div>
					</div>
					<ul id="menu">
					<li>
						<a href="<?php echo U('/');?>" class="mainItem" style="margin-left: 20px;">本站首页</a>
					</li>
					<!-- <li>
						<a href="introduction.html" class="mainItem">中心简介</a>
					</li> -->
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'tzgg'));?>" class="mainItem">通知公告</a>
					</li>
					<li>
						<a href="<?php echo U('Index/otherList2',array('category'=>'xwzx'));?>" class="mainItem">新闻资讯
							<!-- <span class="fa fa-caret-down"></span> -->
						</a>
						<!-- <div class="submenu" style="display: none;">
							<div class="menubox">
								<ul>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'sgdt'));?>">宿管动态</a>
									</li>
									<li>
									   <a href="<?php echo U('Index/otherList1',array('category'=>'xyxw'));?>">校园新闻</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'xsgz'));?>">学生工作新闻</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'xggy'));?>">相关公寓工作新闻</a>
									</li>
								</ul>
							</div>
						</div> -->
					</li>
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'whjs'));?>" class="mainItem">文化建设</a>
					</li>
					<li>
						<a href="<?php echo U('Index/otherList2',array('category'=>'ztbd'));?>" class="mainItem">专题报道
							<!-- <span class="fa fa-caret-down"></span> -->
						</a>
						<!-- <div class="submenu" style="display: none;">
							<div class="menubox">
								<ul>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'xszt'));?>">新生专题</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'byszt'));?>">毕业生专题</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'whyzt'));?>">文化月专题</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'hbzt'));?>">环保专题</a>
									</li>
								</ul>
							</div>
						</div> -->
					</li>
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'gzzd'));?>" class="mainItem">规章制度</a>
					</li>
					<li>
						<a href="<?php echo U('Index/otherList2',array('category'=>'aqgl'));?>" class="mainItem">安全管理
							<!-- <span class="fa fa-caret-down"></span> -->
						</a>
						<!-- <div class="submenu" style="display: none;">
							<div class="menubox">
								<ul>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'xfzs'));?>">消防知识</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'ydgl'));?>">用电管理</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'zagl'));?>">治安管理</a>
									</li>
									<li>
										<a href="<?php echo U('Index/otherList1',array('category'=>'crbzs'));?>">传染病知识</a>
									</li>
								</ul>
							</div>
						</div> -->
					</li>
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'fwzl'));?>" class="mainItem">服务指南</a>
					</li>
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'xgxz'));?>" class="mainItem">相关下载</a>
					</li>
				</ul>
				</div>
			</div>
		</header> 
		<div class="container_wrapper clearfix">
	<div class="banner">
	</div>
	<div class="leftContent" style="padding-left: 30px;position: relative;">
		<div class="page-header" style="border-bottom:1px inset #2a66a8;margin: 10px 0px;">
			<h2 class="text-center" style="margin:10px 0px 10px 0px;"><?php echo ($list['aTitle']); ?></h2>
			<p class="text-center text-info" style="padding-bottom: 10px;">发布：<?php echo ($list['aTime']); ?>&nbsp;&nbsp;|&nbsp;&nbsp;作者：<?php echo ((isset($list['author']) && ($list['author'] !== ""))?($list['author']):"无"); ?>&nbsp;&nbsp;|&nbsp;&nbsp;来源：<?php echo ((isset($list['source']) && ($list['source'] !== ""))?($list['source']):"公寓中心"); ?>&nbsp;&nbsp;|&nbsp;&nbsp;游览次数：<?php echo ($list['hits']); ?>次</p>
		</div>
		<?php echo (htmlspecialchars_decode($list['aContent'])); ?>
		<div style="text-align: right;margin-bottom: 5px;">
			<a href="javascript:window.opener=null;window.open('','_self');window.close();" style="padding:5px;">
				【关闭】
			</a>
		</div>
	</div>
	<div class="sidebarRight fr" style="margin-right: 10px;">
		<div class="columnHeader">
			<h1>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">联系我们&nbsp;<span style="font-size: 14px;">contact us</span></font>
				</font>
			</h1>
		</div>
		<div class="content">
			<p>您可以通过以下方式联系我们：</p>
			<p style="font-size: 20px;color: rgb(255, 204, 0);" class="mt_20"><i class="fa fa-phone"></i>联系电话</p>
			<p style="font-size: 20px;" class="mt_20">17865311972</p>
			<p style="font-size: 20px;color: rgb(255, 204, 0);" class="mt_20"><i class="fa fa-address-book"></i>联系地址</p>
			<p style="font-size: 20px;" class="mt_20">榴园212</p>
			<p style="font-size: 20px;color: rgb(255, 204, 0);" class="mt_20"><i class="fa fa-qq"></i>QQ</p>
			<p style="font-size: 20px;" class="mt_20">761684652	</p>
		</div>
	</div>
</div>
		<div style="background-color: #2a66a8;height: 115px;">
		<div class="footer" style="padding-bottom: 10px;">
			<ul>友情链接：
				<li>
					<a href="http://www.sdjzu.edu.cn/" target="_blank">建大官网</a>
				</li>
				<li>
					<a href="http://xwzx2016.sdjzu.edu.cn/xsgzc/" target="_blank">学生工作处</a>
				</li>
				<li>
					<a href="http://xwzx2016.sdjzu.edu.cn/tsg/" target="_blank">建大图书馆</a>
				</li>
				<li>
					<a href="http://urpe.sdjzu.edu.cn/loginPortalUrlForIndexLogin.portal" target="_blank">数字校园</a>
				</li>
			</ul>
			<p style="text-align: center;color: #fff;">山东建筑大学学生公寓中心&copy;2017 版权所有 All rights reserved </p>
		</div>
	    </div>
	</body>

</html>