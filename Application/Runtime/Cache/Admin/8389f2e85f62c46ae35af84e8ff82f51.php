<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/apartment/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/apartment/Public/admin/js/jquery.js"></script>
<link rel="shortcut icon" href="/apartment/Public/img/logo.png">


</head>

<body style="background:url(/apartment/Public/admin/images/topbg.gif) repeat-x;">

    <div class="topleft">
     <a href="javascript:void(0)" target="_parent"><img src="/apartment/Public/admin/images/biaoti.png" title="系统首页" /></a>
    </div>
        
            
    <div class="topright">    
    <ul>
    <li><span><img src="/apartment/Public/admin/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="<?php echo U('/Admin/Index');?>" target="_parent" onclick="return confirm('确定退出吗？')">退出</a></li>
    </ul>
     
    <div class="user">
     <span><?php echo ((isset($_SESSION['user']['username']) && ($_SESSION['user']['username'] !== ""))?($_SESSION['user']['username']):"admin"); ?></span>
    </div>    
    
    </div>
</body>
</html>