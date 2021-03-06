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
		<!--含二级菜单的模块对应的列表页-->
<div class="container_wrapper clearfix">
	<div class="banner">
	</div>
	<div class="leftContent" style="padding-left: 10px;">
		<div class="content_title clearfix">
			<div class="fl mt_20">
				<span class="whjs_tit"><?php echo ($mc[0]); ?></span>
				<span class="whjs_tit_grey"><?php echo ($mc[1]); ?></span>
			</div>
		</div>
		<ul class="list">
		    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" title="<?php echo ($vo['aTitle']); ?>" target="_blank"><?php echo ($vo['aTitle']); ?></a><span style="float: right;">[<?php echo ($vo['aTime']); ?>]</span>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	<?php if(!empty($list)): ?><ul class="pagination" id="page1">
			 <?php if($page > 1): ?><li>
		            <a href="<?php echo U('Index/otherList2',array('page'=>$page-1));?>">
		              «
		            </a>
		        </li>
		        <?php else: ?>
		        <li><a href="javascript:void(0)" class="btn" disabled="disabled">«</a></li><?php endif; ?>
            <?php $__FOR_START_2702__=1;$__FOR_END_2702__=$pageCount+1;for($i=$__FOR_START_2702__;$i < $__FOR_END_2702__;$i+=1){ ?><li><a href='<?php echo U("Index/otherList2?page=$i");?>'><?php echo ($i); ?></a></li>
                <?php if($i >= 20): ?><li><a href='#'>...</a></li>
                   <?php break; endif; } ?>
          <?php if($page < $pageCount): ?><li>
                    <a href="<?php echo U('Index/otherList2',array('page'=>$page+1));?>">»</a>
                </li>
                <?php else: ?>
                <li><a href="javascript:void(0)" disabled="true">»</a></li><?php endif; ?>
		</ul><?php endif; ?>
	</div>
	<div class="sidebarRight fr" style="margin-right: 10px;">
		<div class="columnHeader">
			<h1>
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">新闻类别&nbsp;<span style="font-size: 14px;">news category</span></font>
				</font>
			</h1>
		</div>
		<div class="content">
			<p>您可以选择要查看的新闻的类别进行筛选：</p>
			<ul style="margin-top: 20px;">
				<li>
					<a href="<?php echo U('Index/otherList2',array('sub'=>$arr[0][0]));?>"><?php echo ($arr[0][1]); ?></a>
				</li>
				<li>
					<a href="<?php echo U('Index/otherList2',array('sub'=>$arr[1][0]));?>"><?php echo ($arr[1][1]); ?></a>
				</li>
				<li>
					<a href="<?php echo U('Index/otherList2',array('sub'=>$arr[2][0]));?>"><?php echo ($arr[2][1]); ?></a>
				</li>
				<li>
					<a href="<?php echo U('Index/otherList2',array('sub'=>$arr[3][0]));?>"><?php echo ($arr[3][1]); ?></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
    function active(){
        $("#page1").children().eq((<?php echo ((isset($_GET['page']) && ($_GET['page'] !== ""))?($_GET['page']):1); ?>)).children().addClass('active');
        console.log($("#page1").children().eq((<?php echo ((isset($_GET['page']) && ($_GET['page'] !== ""))?($_GET['page']):1); ?>)));
    }
    active();
</script>
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