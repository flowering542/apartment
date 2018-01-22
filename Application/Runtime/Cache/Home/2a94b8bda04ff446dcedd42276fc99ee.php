<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="user-scalable=yes, width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>首页-学生公寓中心</title>
		<link rel="stylesheet" type="text/css" href="/apartment/Public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/apartment/Public/css/font-awesome.min.css" />
		<script type="text/javascript" src="/apartment/Public/js/jquery-1-4-2.min.js"></script>
		<script type="text/javascript" src="/apartment/Public/js/jquery-ui.min.js"></script>
		<script type="text/JavaScript" src="/apartment/Public/js/jquery.mousewheel.js"></script>
		<link rel="shortcut icon" href="/apartment/Public/img/logo.png">
		<!-- Load the CloudCarousel JavaScript file -->
		<script type="text/JavaScript" src="/apartment/Public/js/cloud-carousel.1.0.5.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

				// This initialises carousels on the container elements specified, in this case, carousel1.
				$("#carousel1").CloudCarousel({
					reflHeight: 20,
					reflGap: 2,
					titleBox: $('#da-vinci-title'),
					altBox: $('#da-vinci-alt'),
					buttonLeft: $('#slider-left-but'),
					buttonRight: $('#slider-right-but'),
					yRadius: 10,
					xPos: 600,
					yPos: 32,
					speed: 0.15,
					autoRotate: 'right',
					autoRotateDelay: 2000
				});
			});
		</script>
		<style type="text/css">
			.content>ul>li{
				width: 100%;
				word-break:keep-all;/* 不换行 */
				white-space:nowrap;/* 不换行 */
				overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */
				text-overflow:ellipsis;/* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
				}
			.mainItem{
				width: 80px;
			}
		</style>
	</head>

	<body>
		<div id="templatemo_slider">
			<!-- This is the container for the carousel. -->
			<div id="carousel1" style="margin: 20px auto 0px;width:1200px; height:300px;background:none;overflow:scroll; margin-top: 20px">
				<!-- All images with class of "cloudcarousel" will be turned into carousel items -->
				<!-- You can place links around these images -->
				<a href="<?php echo U('/');?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/1.jpg" alt="山东建筑大学学生公寓中心" title="山东建筑大学学生公寓中心" width="440" height="240" />
				</a>
				<a href="<?php echo U('Index/otherList2',array('category'=>'ztbd'));?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/2.jpg" alt="我们正青春" title="我们正青春" width="440" height="240" />
				</a>
				<a href="<?php echo U('Index/otherList1',array('category'=>'whyzt'));?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/3.jpg" alt="宿舍文化节" title="宿舍文化节" width="440" height="240" />
				</a>
				<a href="<?php echo U('Index/otherList2',array('category'=>'aqgl'));?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/4.jpg" alt="管理筑基" title="管理筑基" width="440" height="240" />
				</a>
				<a href="<?php echo U('Index/otherList1',array('category'=>'whjs'));?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/5.jpg" alt="文化引领" title="文化引领" width="440" height="240" />
				</a>
				<a href="<?php echo U('Index/otherList1',array('category'=>'tzgg'));?>" rel="lightbox">
					<img class="cloudcarousel" src="/apartment/Public/img/6.jpg" alt="特色发展" title="特色发展" width="440" height="240" />
				</a>
			</div>
			<!-- Define left and right buttons. -->
			<center>
				<input id="slider-left-but" type="button" value="" />
				<input id="slider-right-but" type="button" value="" />
			</center>
		</div>
		<header>
			<div class="header_wrapper" style="height: 40px;">
				<ul id="menu">
					<li>
						<a href="<?php echo U('/');?>" class="mainItem" style="margin-left: 30px;">本站首页</a>
					</li>
				<!-- 	<li>
						<a href="introduction.html" class="mainItem">中心简介</a>
					</li> -->
					<li>
						<a href="<?php echo U('Index/otherList1',array('category'=>'tzgg'));?>" class="mainItem">通知公告</a>
					</li>
					<li>
						<a href="<?php echo U('Index/otherList2',array('category'=>'xwzx'));?>" class="mainItem">新闻资讯
							<!-- <span class="fa fa-caret-down"></span> -->
						</a>
					<!-- 	<div class="submenu" style="display: none;">
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
		</header>
		
<div class="container_wrapper">
	<div class="content_1024 clearfix">
		<div class="leftContent_index" style="margin-left: 10px;">
			<div id="container" style="width: 350px;height: 231px;">
				<div id="list" style="left: -350px;">
					<?php if(is_array($tpxw)): $i = 0; $__LIST__ = $tpxw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><img src="/apartment/Public<?php echo ($vo['image']); ?>" title="<?php echo ($vo['aTitle']); ?>" alt="1" width="350" height="230"/></a><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div id="buttons">
					<span index="1" class="on"></span>
					<span index="2"></span>
					<span index="3"></span>
					<span index="4"></span>
					<span index="5"></span>
				</div>
				<a href="javascript:;" id="prev" class="arrow">&lt;</a>
				<a href="javascript:;" id="next" class="arrow">&gt;</a>
			</div>
		</div>
		<div class="panel fl default" style="width: 398px;margin-left: 10px;">
			<div class="columnHeader">
				<h1><a href="#"><i class="fa fa-bullhorn"></i>&nbsp;通知公告</a></h1>
				<span><a href="<?php echo U('Index/otherList1',array('category'=>'tzgg'));?>" target="_blank"><img src="/apartment/Public/img/more.jpg" width="40" height="9"></a></span>
			</div>
			<div class="content" style="height: 187px;border: 1px #ccc solid;">
				<ul>
					<?php if(is_array($tzgg)): $i = 0; $__LIST__ = $tzgg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>>></span>
						  <a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><?php echo ($vo['aTitle']); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="panel fl default" style="margin-right: 10px;margin-left: 10px;">
			<div class="columnHeader">
				<h1><a href="#"><i class="fa fa-edit"></i>&nbsp;服务指南</a></h1>
				<span><a href="<?php echo U('Index/otherList1',array('category'=>'fwzl'));?>" target="_blank"><img src="/apartment/Public/img/more.jpg" width="40" height="9"></a></span>
			</div>
			<div class="content" style="height: 187px;border: 1px #ccc solid;">
				<ul>
					<?php if(is_array($fwzl)): $i = 0; $__LIST__ = $fwzl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>>></span>
						  <a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><?php echo ($vo['aTitle']); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="content_1024 mt_10">
		<div class="panel fl default" style="margin-left: 10px;width: 356px;">
			<div class="columnHeader">
				<h1><a href="#"><i class="fa fa-newspaper-o"></i>&nbsp;新闻资讯</a></h1>
				<span><a href="<?php echo U('Index/otherList2',array('category'=>'xwzx'));?>" target="_blank"><img src="/apartment/Public/img/more.jpg" width="40" height="9"></a></span>
			</div>
			<div class="content" style="height: 187px;border: 1px #ccc solid;">
				<ul>
					<?php if(is_array($xwzx)): $i = 0; $__LIST__ = $xwzx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>>></span>
						  <a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><?php echo ($vo['aTitle']); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="panel fl default" style="width: 397px;margin-left: 10px;">
			<div class="columnHeader">
				<h1><a href="#"><i class="fa fa-book"></i>&nbsp;规章制度</a></h1>
				<span><a href="<?php echo U('Index/otherList1',array('category'=>'gzzd'));?>" target="_blank"><img src="/apartment/Public/img/more.jpg" width="40" height="9"></a></span>
			</div>
			<div class="content" style="height: 187px;border: 1px #ccc solid;">
				<ul>
					<?php if(is_array($gzzd)): $i = 0; $__LIST__ = $gzzd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>>></span>
						  <a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><?php echo ($vo['aTitle']); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div class="panel fl default" style="margin-left: 10px;">
			<div class="columnHeader">
				<h1><a href="#"><i class="fa fa-users"></i>&nbsp;安全管理</a></h1>
				<span><a href="<?php echo U('Index/otherList2',array('category'=>'aqgl'));?>" target="_blank"><img src="/apartment/Public/img/more.jpg" width="40" height="9"></a></span>
			</div>
			<div class="content" style="height: 187px;border: 1px #ccc solid;">
				<ul>
					<?php if(is_array($aqgl)): $i = 0; $__LIST__ = $aqgl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span>>></span>
						  <a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank"><?php echo ($vo['aTitle']); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="content_1024 clearfix mt_20">
		<div class="content_title clearfix">
			<div class="fl mt_20">
				<span class="whjs_tit">专题报道</span>
				<span class="whjs_tit_grey">Special Report</span>
			</div>
			<div class="fr more_div">
				<a href="<?php echo U('Index/otherList2',array('category'=>'ztbd'));?>" target="_blank">更多&nbsp;</a><i class="fa fa-angle-right"></i>
			</div>
		</div>
		<div class="cultural_list clearfix">
			<?php if(is_array($ztbd)): $i = 0; $__LIST__ = $ztbd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="box">
					<img class="scrollLoading" data-url="/apartment/Public<?php echo ($vo['image']); ?>" src="/apartment/Public/carouselengine/lightbox-loading.gif">
					<p>
						<?php echo ($vo['aTitle']); ?>...
					</p>

					<br />
					<a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" target="_blank">查看详情</a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="content_1024 clearfix mt_20">
		<div class="content_title clearfix">
			<div class="fl mt_20">
				<span class="whjs_tit">文化建设</span>
				<span class="whjs_tit_grey">Cultural Developement</span>
			</div>
			<div class="fr more_div">
				<a href="<?php echo U('Index/otherList1',array('category'=>'whjs'));?>" target="_blank">更多&nbsp;</a><i class="fa fa-angle-right"></i>
			</div>
		</div>
		<div class="cultural_list clearfix  mt_20">
			<!-- Insert to your webpage where you want to display the carousel -->
			<div id="amazingcarousel-container-1">
				<div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:920px;margin:0px auto 0px;">
					<div class="amazingcarousel-list-container">
						<ul class="amazingcarousel-list">
							<?php if(is_array($whjs)): $i = 0; $__LIST__ = $whjs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="amazingcarousel-item">
								<div class="amazingcarousel-item-container">
									<div class="amazingcarousel-image">
										<a href="<?php echo U('Index/details',array('article'=>$vo['articleId']));?>" title="<?php echo ($vo['aTitle']); ?>" target="_blank"><img alt="01" class="scrollLoading" data-url="/apartment/Public<?php echo ($vo['image']); ?>" src="/apartment/Public/carouselengine/lightbox-loading.gif" width="240px" height="180px" /></a>
									</div>
									<div class="amazingcarousel-title" style="text-align: center;color:black;font-size: 14px;"><?php echo ($vo['aTitle']); ?></div>
									<div class="amazingcarousel-description"></div>
								</div>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="amazingcarousel-nav"></div>
				</div>
			</div>
			<!-- End of body section HTML codes -->
		</div>
	</div>
</div>
		<div style="background-color: #2a66a8;height: 130px;">
			<div class="footer">
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
	<script type="text/javascript">
		$(function() {
			var container = $('#container');
			var list = $('#list');
			var buttons = $('#buttons span');
			var prev = $('#prev');
			var next = $('#next');
			var index = 1;
			var len = 5;
			var interval = 3000;
			var timer;

			function animate(offset) {
				var left = parseInt(list.css('left')) + offset;
				if(offset > 0) {
					offset = '+=' + offset;
				} else {
					offset = '-=' + Math.abs(offset);
				}
				list.animate({
					'left': offset
				}, 300, function() {
					if(left > -200) {
						list.css('left', -350 * len);
					}
					if(left < (-350 * len)) {
						list.css('left', -350);
					}
				});
			}

			function showButton() {
				buttons.eq(index - 1).addClass('on').siblings().removeClass('on');
			}

			function play() {
				timer = setTimeout(function() {
					next.trigger('click');
					play();
				}, interval);
			}

			function stop() {
				clearTimeout(timer);
			}

			next.bind('click', function() {
				if(list.is(':animated')) {
					return;
				}
				if(index == 5) {
					index = 1;
				} else {
					index += 1;
				}
				animate(-350);
				showButton();
			});

			prev.bind('click', function() {
				if(list.is(':animated')) {
					return;
				}
				if(index == 1) {
					index = 5;
				} else {
					index -= 1;
				}
				animate(350);
				showButton();
			});

			buttons.each(function() {
				$(this).bind('click', function() {
					if(list.is(':animated') || $(this).attr('class') == 'on') {
						return;
					}
					var myIndex = parseInt($(this).attr('index'));
					var offset = -350 * (myIndex - index);

					animate(offset);
					index = myIndex;
					showButton();
				})
			});

			container.hover(stop, play);

			play();

		});
	</script>
	<!-- Insert to your webpage before the </head> -->
	<script src="/apartment/Public/carouselengine/amazingcarousel.js"></script>
	<link rel="/apartment/Public/stylesheet" type="text/css" href="carouselengine/initcarousel-1.css">
	<script src="/apartment/Public/carouselengine/initcarousel-1.js"></script>
	<!-- End of head section HTML codes -->
	<script type="text/javascript">
		(function($) { 
       // alert($.fn.scrollLoading); 
       $.fn.scrollLoading = function(options) { 
         var defaults = { 
           attr: "data-url"
         }; 
         var params = $.extend({}, defaults, options || {}); 
         params.cache = []; 
         $(this).each(function() { 
           var node = this.nodeName.toLowerCase(), 
             url = $(this).attr(params["attr"]); 
           if(!url) { 
             return; 
           } 
           var data = { 
             obj: $(this), 
             tag: node, 
             url: url 
           }; 
           params.cache.push(data); 
         }); 
 
         var loading = function() { 
           var st = $(window).scrollTop(), 
             sth = st + $(window).height(); 
           $.each(params.cache, function(i, data) { 
             var o = data.obj, 
               tag = data.tag, 
               url = data.url; 
             if(o) { 
               post = o.position().top; 
               posb = post + o.height(); 
               if((post > st && post < sth) || (posb > st && posb < sth)) { 
                 if(tag === "img") { 
                   o.attr("src", url); 
                 } else { 
                   o.load(url); 
                 } 
                 data.obj = null; 
               } 
             } 
           }); 
           return false; 
         }; 
 
         loading(); 
         $(window).bind("scroll", loading); 
       }; 
     })(jQuery);
      $(document).ready(function () { 
   //实现图片慢慢浮现出来的效果 
	   $("img").load(function () { 
	     //图片默认隐藏  
	     $(this).hide(); 
	     //使用fadeIn特效  
	     $(this).fadeIn("5000"); 
	   }); 
	   // 异步加载图片，实现逐屏加载图片 
	   $(".scrollLoading").scrollLoading();  
	 });
	</script>
</html>