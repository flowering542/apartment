<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/apartment/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/apartment/Public/admin/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop">&nbsp;&nbsp;&nbsp;主菜单导航</div>
    
    <dl class="leftmenu">
     <dd>
		<div class="title">
			<li class="active"><span><img src="/apartment/Public/admin/images/leftico01.png" /></span><cite></cite><a href="<?php echo U('article/publish');?>" target="rightFrame">发布信息</a><i></i> </li>
		</div>
	</dd>   
    <dd>
    <div class="title">
    <span><img src="/apartment/Public/admin/images/leftico01.png" /></span>新闻资讯 
    </div>
    	<ul class="menuson">
        <li><cite></cite><a href="<?php echo U('sgdt');?>" target="rightFrame">宿管动态</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('xyxw');?>" target="rightFrame">校园新闻</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('xsgz');?>" target="rightFrame">学生工作新闻</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('xggy');?>" target="rightFrame">相关公寓新闻</a><i></i></li>
        </ul>    
    </dd>
    <dd>
		<div class="title">
			<a href="<?php echo U('tzgg');?>" target="rightFrame"><span><img src="/apartment/Public/admin/images/leftico01.png" /></span>通知公告</a>
		</div>
	</dd>    
    <dd>
		<div class="title">
			<a href="<?php echo U('whjs');?>" target="rightFrame"><span><img src="/apartment/Public/admin/images/leftico01.png" /></span>文化建设</a>
		</div>
	</dd> 
	<dd>
		<div class="title">
			<a href="<?php echo U('gzzd');?>" target="rightFrame"><span><img src="/apartment/Public/admin/images/leftico01.png" /></span>规章制度</a>
		</div>
	</dd> 
	
    <dd>
    <div class="title">
    <span><img src="/apartment/Public/admin/images/leftico02.png" /></span>安全管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('xfzs');?>" target="rightFrame">消防知识</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('ydgl');?>" target="rightFrame">用电管理</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('zagl');?>" target="rightFrame">治安管理</a><i></i></li>
		<li><cite></cite><a href="<?php echo U('crbzs');?>" target="rightFrame">传染病知识</a><i></i></li>
        </ul>     
    </dd> 
    
    
    <dd>
	<div class="title"><a href="<?php echo U('fwzl');?>" target="rightFrame"><span><img src="/apartment/Public/admin/images/leftico03.png" /></span>服务指南</a></div>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="/apartment/Public/admin/images/leftico04.png" /></span>专题报道</div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('xszt');?>" target="rightFrame">新生专题</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('byszt');?>" target="rightFrame">毕业生专题</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('whyzt');?>" target="rightFrame">文化月专题</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('hbzt');?>" target="rightFrame">环保专题</a><i></i></li>
    </ul>
    
    </dd> 

      <dd>
	<div class="title"><a href="<?php echo U('xgxz');?>" target="rightFrame"><span><img src="/apartment/Public/admin/images/leftico03.png" /></span>相关下载</a></div>    
    </dd>    
    
    </dl>
</body>
</html>