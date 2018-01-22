<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>通知公告</title>
<link href="/apartment/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/apartment/Public/admin/js/jquery.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
          $(".click").click(function(){ 
          $(".tip").fadeIn(200);
          });
          
          $(".tiptop a").click(function(){
          $(".tip").fadeOut(200);
        });

          $(".sure").click(function(){
          $(".tip").fadeOut(100);
        });

          $(".cancel").click(function(){
          $(".tip").fadeOut(100);
        });

        });
</script>


</head>


<body>

    <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">通知公告</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">   
    <table class="tablelist">
        <thead>
            <tr>
                <th>序号<i class="sort"><img src="/apartment/Public/admin/images/px.gif" /></i></th>
                <th>标题</th>
                <th>作者</th>
                <th>来源</th>
                <th>时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($i+($page-1)*10); ?></td>
                    <td><?php echo ($vo['aTitle']); ?></td>
                    <td><?php echo ((isset($vo['author']) && ($vo['author'] !== ""))?($vo['author']):"无"); ?></td>
                    <td><?php echo ((isset($vo['source']) && ($vo['source'] !== ""))?($vo['source']):"无"); ?></td>
                    <td><?php echo ($vo['aTime']); ?></td>
                    <td>
                        <a href="<?php echo U('Article/republish',array('articleId'=>$vo['articleId']));?>" class="tablelink">查看</a>
                        <a href="<?php echo U('Article/delList',array('articleId'=>$vo['articleId']));?>" class="tablelink" onclick="return del()">删除
                        </a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
   
    <div class="pagin">
        <div class="message">共<i class="blue"><?php echo ($count); ?></i>条记录，当前显示第&nbsp;<i class="blue"><?php echo ((isset($page) && ($page !== ""))?($page):1); ?>&nbsp;</i>页</div>
        <?php if(!empty($list)): ?><ul class="paginList">
                 <?php if($page > 1): ?><li class="paginItem">
                        <a href="<?php echo U('Article/tzgg',array('page'=>$page-1));?>">
                            <span class="pagepre"></span>
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="paginItem"><a href="#" disabled="disabled"> <span class="pagepre"></span></a></li><?php endif; ?>
                 <?php $__FOR_START_32021__=1;$__FOR_END_32021__=$pageCount+1;for($i=$__FOR_START_32021__;$i < $__FOR_END_32021__;$i+=1){ ?><li class="paginItem"><a href='<?php echo U("Article/tzgg?page=$i");?>'><?php echo ($i); ?></a></li>
                    <?php if($i >= 20): ?><li class="paginItem more"><a href='#'>...</a></li>
                       <?php break; endif; } ?>
                 <?php if($page < $pageCount): ?><li class="paginItem">
                        <a href="<?php echo U('Article/tzgg',array('page'=>$page+1));?>"><span class="pagenxt"></span></a>
                    </li>
                    <?php else: ?>
                    <li class="paginItem"><a href="#"  disabled="disabled"><span class="pagenxt"></span></a></li><?php endif; ?>
            </ul><?php endif; ?>
    </div>
   
    
    </div>
    
    <script type="text/javascript">
      $('.tablelist tbody tr:odd').addClass('odd');
    </script>
     <script type="text/javascript">
        function active(){
            $(".paginList").children().eq((<?php echo ((isset($_GET['page']) && ($_GET['page'] !== ""))?($_GET['page']):1); ?>)).addClass('current');
        }
        active();
        function del(){
            return confirm("你确定删除吗？");
        }
         function back(){
             return confirm("确定退出吗？");
        }
    </script>
</body>
</html>