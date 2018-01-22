<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            无标题文档
        </title>
        <link href="/apartment/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/apartment/Public/admin/css/select.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript" src="/apartment/Public/admin/js/jquery.js">
        </script>
        <script type="text/javascript" src="/apartment/Public/admin/js/jquery.idTabs.min.js">
        </script>
        <script type="text/javascript" src="/apartment/Public/admin/js/select-ui.min.js">
        </script>
        <script type="text/javascript">
            $(document).ready(function(e) {
                $(".select1").uedSelect({
                    width: 345
                });
                $(".select2").uedSelect({
                    width: 167
                });
                $(".select3").uedSelect({
                    width: 100
                });
            });
        </script>
    </head>
    
    <body>
        <div class="formbody">
            <form action="/apartment/index.php?s=/Admin/article/publish.html" method="post" enctype="multipart/form-data" onsubmit="return sub()">
                  <div id="usual1" class="usual">
                <div id="tab1" class="tabson">
                    <ul class="forminfo">
                        <li>
                            <label>
                                文章标题
                                <b>
                                    *
                                </b>
                            </label>
                            <input name="aTitle" type="text" class="dfinput" placeholder="请填写文章标题" style="width:518px;"
                            required="required" />
                        </li>
                        <li>
                            <label>
                                文章作者
                            </label>
                            <input name="author" type="text" class="dfinput" placeholder="请填写作者名称" style="width:518px;"
                            />
                        </li>
                        <li>
                            <label>
                                文章来源
                            </label>
                            <input name="source" type="text" class="dfinput" placeholder="请填写文章来源" style="width:518px;"
                            />
                        </li>
                        <li>
                            <label>
                                选择模块
                                <b>
                                    *
                                </b>
                            </label>
                            <div class="vocation">
                                <select class="select1" id="option1" name="category">
                                    <option value="tzgg" 
                                    <?php if(($_SESSION['publish']) == "tzgg"): ?>selected<?php endif; ?>>
                                        通知公告
                                    </option>
                                    <option value="sgdt"
                                    <?php if(($_SESSION['publish']) == "sgdt"): ?>selected<?php endif; ?>>
                                        宿管动态
                                    </option>
                                    <option value="xyxw"
                                    <?php if(($_SESSION['publish']) == "xyxw"): ?>selected<?php endif; ?>>
                                        校园新闻
                                    </option>
                                    <option value="xsgz"
                                    <?php if(($_SESSION['publish']) == "xsgz"): ?>selected<?php endif; ?>>
                                        学生工作新闻
                                    </option>
                                    <option value="xggy"
                                    <?php if(($_SESSION['publish']) == "xggy"): ?>selected<?php endif; ?>>
                                        相关公寓新闻
                                    </option>
                                    <option value="whjs"
                                    <?php if(($_SESSION['publish']) == "whjs"): ?>selected<?php endif; ?>>
                                        文化建设
                                    </option>
                                    <option value="gzzd"
                                    <?php if(($_SESSION['publish']) == "gzzd"): ?>selected<?php endif; ?>>
                                        规章制度
                                    </option>
                                    <option value="xfzs"
                                    <?php if(($_SESSION['publish']) == "xfzs"): ?>selected<?php endif; ?>>
                                        消防知识
                                    </option>
                                    <option value="ydgl"
                                    <?php if(($_SESSION['publish']) == "ydgl"): ?>selected<?php endif; ?>>
                                        用电管理
                                    </option>
                                    <option value="zagl"
                                    <?php if(($_SESSION['publish']) == "zagl"): ?>selected<?php endif; ?>>
                                        治安管理
                                    </option>
                                    <option value="crbzs"
                                    <?php if(($_SESSION['publish']) == "crbzs"): ?>selected<?php endif; ?>>
                                        传染病知识
                                    </option>
                                    <option value="fwzl"
                                    <?php if(($_SESSION['publish']) == "fwzl"): ?>selected<?php endif; ?>>
                                        服务指南
                                    </option>
                                    <option value="xszt"
                                      <?php if(($_SESSION['publish']) == "xszt"): ?>selected<?php endif; ?>>
                                        新生专题
                                    </option>
                                    <option value="byszt"
                                    <?php if(($_SESSION['publish']) == "byszt"): ?>selected<?php endif; ?>>
                                        毕业生专题
                                    </option>
                                    <option value="whyzt"
                                    <?php if(($_SESSION['publish']) == "whyzt"): ?>selected<?php endif; ?>>
                                        文化月专题
                                    </option>
                                    <option value="hbzt"
                                    <?php if(($_SESSION['publish']) == "hbzt"): ?>selected<?php endif; ?>>
                                        环保专题
                                    </option>
                                     <option value="xgxz"
                                    <?php if(($_SESSION['publish']) == "xgxz"): ?>selected<?php endif; ?>>
                                        相关下载
                                    </option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <label>
                                 文章封面
                            </label>
                            <input type="file" name="myfile" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <font style="font-size:18px; color:red;font-weight:bold;">
                                是否在首页展示：
                                <input type="radio" name="isnav"  value="1" />
                                是
                                <input type="radio" name="isnav" value="0"/>
                                否
                            </font>
                            <li>
                                <label>
                                    文章内容
                                    <b>
                                        *
                                    </b>
                                </label>
                                <script id="content7" name="aContent" type="text/plain" style="width: 80%;display: inline-block;">
                                </script>
                                <script type="text/javascript" src="/apartment/Public/admin/edu/ueditor.config.js"></script>
                                <!-- 编辑器源码文件 -->
                                <script type="text/javascript" src="/apartment/Public/admin/edu/ueditor.all.min.js"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('content7', {
                                        autoHeight: true,
                                        autoWidth: true
                                    });

                        </script>
                            </li>
                            <li>
                                <label>
                                    &nbsp;
                                </label>
                                <input type="submit" class="btn" value="确认发布" />
                            </li>
                    </ul>
                </div>
            </div>
            </form>
        </div>
    </body>
    <script type="text/javascript">
        function sub() {
                    //alert(ue.setContent('233'));
                    if(!ue.hasContents()) {
                        alert("文章内容不能为空！");
                        return false;
                    }
              }
    </script>
      <script type="text/javascript">
        $("#usual1 ul").idTabs();
    </script>
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
</html>