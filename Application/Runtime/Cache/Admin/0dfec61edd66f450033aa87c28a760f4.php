<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            欢迎登录后台管理系统
        </title>
        <link href="/apartment/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="/apartment/Public/img/logo.png">
        <script language="JavaScript" src="/apartment/Public/admin/js/jquery.js">
        </script>
       <!--  <script src="/apartment/Public/admin/js/cloud.js" type="text/javascript"> -->
       <!--  </script> -->
        <script language="javascript">
            $(function() {
                $('.loginbox').css({
                    'position': 'absolute',
                    'left': ($(window).width() - 692) / 2
                });
                $(window).resize(function() {
                    $('.loginbox').css({
                        'position': 'absolute',
                        'left': ($(window).width() - 692) / 2
                    });
                })
            });
        </script>
        <style type="text/css">
                .err{border: 1px solid #d9d9d9;box-shadow: 1px 2px 1px #d9d9d9;border-radius: 3px;margin-top: 10px;width: 340px;height: 20px;line-height: 20px;display: none;text-align: center;}
                .err strong{
                    color:green;
                }
                 .err b{
                    color:#cc2e2e;
                }
        </style>
    </head>
    
    <body style="background-color:#1c77ac; background-image:url(/apartment/Public/admin/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
        <div id="mainBody">
            <div id="cloud1" class="cloud">
            </div>
            <div id="cloud2" class="cloud">
            </div>
        </div>
        <div class="logintop">
            <span>
                欢迎登录后台管理界面平台
            </span>
            <ul>
                <li>
                    <a href="<?php echo U('/Index/index');?>">
                        回首页
                    </a>
                </li>
                <li>
                    <a href="#">
                        帮助
                    </a>
                </li>
                <li>
                    <a href="#">
                        关于
                    </a>
                </li>
            </ul>
        </div>
        <div class="loginbody">
            <span class="systemlogo">
            </span>
            <div class="loginbox">
                <form  onsubmit="return sub()">
                <ul>
                    <li>
                        <input name="username" type="text" class="loginuser" placeholder="账号" required="required" />
                    </li>
                    <li>
                        <input name="password" type="password" class="loginpwd" placeholder="密码" required="required"/>
                    </li>
                    <li>
                        <input  type="submit" class="loginbtn" value="登录" onclick="mit()" 
                        />
                        <label>
                            <input type="checkbox"/>
                            记住账号
                        </label>
                    <!-- <label>
                            <a href="#">
                                忘记密码？
                            </a>
                        </label> -->
                        <p class="err"></p>
                    </li>
                </ul>
                </form>
            </div>
        </div>
        <div class="loginbm">
            版权所有 2017
        </div>
    </body>
   <script type="text/javascript">
        window.onload = function(){ 
        if(window.parent.length>0) 
         window.parent.location=location; 
      } 
      function sub(){
          return false;
      }
      $(function(){
           $('.loginpwd').focus(function(){
                 $('.err').hide().html("");
           })
      })
   </script>
   <script type="text/javascript">
      var url2 = "<?php echo U('Index/login');?>"
      function mit(){
           var user = $('form').serialize();
           if($('.loginuser').val() == '' || $('.loginpwd').val() == ''){
              return;
           }
           else{
               $.post(url2,user,function(data){
                    if(data === "ok"){
                        $('.err').show().html("<strong>登录成功,正在跳转...</strong>");
                        document.location.href = "<?php echo U('Article/index');?>";
                    }
                    else{
                       // alert("账号或密码输入有误！");
                       $('.err').show().html("<b>账号或密码输入有误！</b>");
                        $('.loginpwd').val('');
                    }
               })
           }
          
      }
      $(function(){
          if(localStorage.getItem("username")){
            $('input[type="checkbox"]').attr("checked","checked");
            $('.loginuser').val(localStorage.getItem("username"));
            $('input[type="submit"]').click(function(){
                     var myradio = $('input[type="checkbox"]').is(':checked');
                     if(myradio){
                        localStorage.setItem("username", $('.loginuser').val());
                     }
                     else{
                         localStorage.removeItem("username");
                         localStorage.clear();
                     }
                 })
          }
          else{  
                 $('input[type="submit"]').click(function(){
                     var myradio = $('input[type="checkbox"]').is(':checked');
                     if(myradio){
                        localStorage.setItem("username", $('.loginuser').val());
                     }
                     else{
                         localStorage.removeItem("username");
                         localStorage.clear();
                     }
                 })
          }
         
      })
   </script>
</html>