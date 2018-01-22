<?php
/**
 * 当前时间
 * @param string $format
 * @return false|string
 */
function getNowAsString($format = 'Y-m-d H:i:s')
{
    return date($format, time());
}

/**
 * 加密
 * @param $str
 * @param string $salt
 * @return string
 */
function saltMd5($str, $salt = 'bbs')
{
    return md5($str . $salt);
}

/*  获取文件名函数。
    *   参数：变量值
    *   返回值：string
    *   适用范围：文件名;
*/
function getfname($str){
    $pm = explode('/',$str);
    $count1 = count($pm)-1;
    return $pm[$count1];
}

/*   删除文件目录函数。
     *    参数：路径，是否删除目录
     *    返回值：boolean
     *    适用范围：文件删除
*/
function delDirAndFile($path, $delDir = FALSE) {
    //$path= iconv('utf-8' , 'gbk' ,$path);
    $handle = opendir($path);
    if ($handle) {
        while (($item = readdir($handle)) !== false ) {
            if ($item != "." && $item != "..")
                is_dir("$path/$item") ? delDirAndFile("$path/$item", $delDir) : unlink("$path/$item");
        }
        closedir($handle);
        if ($delDir) return rmdir($path);
    }else {
        if (file_exists($path)) {
            return unlink($path);
        } else {
            return FALSE;
        }
    }
}

/**
 * 根据名称缩写返回全称
 * @param $str
 * @param string $salt
 * @return string
 */
function getByName($str){
    switch ($str) {
        case 'tzgg':
            return ["通知公告","NOTICE ANNOUNCEMENT"];
            break;
        case 'fwzl':
            return ["服务指南","SERVICE INFORMATION"];
            break;
        case 'gzzd':
            return ["规章制度","RULES REGULATIONS"];
            break;
        case 'xwzx':
            return ["新闻资讯","NEWS INFORMATION"];
            break;
        case 'aqgl':
            return ["安全管理","SECURITY MANAGEMENT"];
            break;
          case 'ztbd':
            return ["专题报道","SPECIAL REPORT"];
            break;
          case 'whjs':
            return ["文化建设","CULTURAL DEVELOPEMENT"];
            break;
         case 'xgxz':
            return ["相关下载","RELATED DOWNLOADS"];
            break;
         case 'sgdt':
            return ["宿管动态","DYNAMIC DORM"];
            break;
         case 'xyxw':
            return ["校园新闻","CAMPUS NEWS"];
            break;
        case 'xsgz':
            return ["学生工作新闻","STUDENT WORK NEWS"];
            break;
        case 'xggy':
            return ["相关公寓工作新闻","RELATED APARTMENT NEWS"];
            break;
         case 'xszt':
            return ["新生专题","NEW TOPIC"];
            break;
         case 'byszt':
            return ["毕业生专题","GRADUATE TOPICS"];
            break;
         case 'whyzt':
            return ["文化月专题","CULTURAL MONTH"];
            break;
         case 'hbzt':
            return ["环保专题","ENVIRONMENTAL TOPIC"];
            break;
         case 'xfzs':
            return ["消防知识","FIRE KNOWLEDGE"];
            break;
         case 'ydgl':
            return ["用电管理","MANAGEMENT USE"];
            break;
         case 'zagl':
            return ["治安管理","SECURITY MANAGEMENT"];
            break;
         case 'crbzs':
            return ["传染病知识","INFECTIOUS KNOWLEDGE"];
            break;
        default:
            # code...
            break;
    }
}

/**
 * 根据名称返回其包含的子项
 * @param $str
 * @return array
 */
function getsub($str){
    switch ($str) {
        case 'xwzx':
            return [["sgdt","宿管动态"],["xyxw","校园新闻"],["xsgz","学生工作新闻"],["xggy","相关公寓工作新闻"]];
            break;
        case 'ztbd':
            return [["xszt","新生专题"],["byszt","毕业生专题"],["whyzt","文化月专题"],["hbzt","环保专题"]];
            break;
        case 'aqgl':
            return [["xfzs","消防知识"],["ydgl","用电管理"],["zagl","治安管理"],["crbzs","传染病知识"]];
            break;
        default:
            # code...
            break;
    }
}

/*        datetime 类型 转化 date类型
     *    参数：datetime类型的数组
     *    返回值：String
     *    适用范围：日期的修改
*/
function modifyDate(&$arr,$str="aTime"){
    $count1 = count($arr);
    for($i=0;$i<$count1;$i++){
        $date = strtotime($arr[$i][$str]);
        $date = date('Y-m-d',$date);
        $arr[$i][$str] = $date;
    }
}

