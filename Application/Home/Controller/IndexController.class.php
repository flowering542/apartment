<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends Controller {
    
    // 显示主页
    public function index(){
       //通知公告
       $article = D('Article');
       $arr = ['tzgg','fwzl','gzzd'];
       $tzgg = $article->getLimit1($arr[0],7);
       $fwzl = $article->getLimit1($arr[1],7);
       $gzzd = $article->getLimit1($arr[2],7);
       //新闻资讯
       $str1 = "category='sgdt' or category='xyxw' or category='xsgz' or category='xggy'";
       $xwzx = $article->getLimit2($str1,7);
       //安全管理
       $str2 = "category='xfzs' or category='ydgl' or category='zagl' or category='crbzs'";
       $aqgl = $article->getLimit2($str2,7);
       //图片新闻
       $str3 = "image is not null AND isnav=1 AND image <> ''";
       $tpxw = $article->getLimit3($str3,7);
       //专题报道
       $str4 = "image is not null AND (category='xszt' or category='byszt' or category='whyzt' or category='hbzt')";
       $ztbd = $article->getLimit3($str4,3);
       //文化建设
       $str5 = "(image is not null) AND (category='whjs')";
       $whjs = $article->getLimit3($str5,8);
        C('LAYOUT_NAME', 'simple');
       $this->assign('tzgg',$tzgg);
       $this->assign('fwzl',$fwzl);
       $this->assign('gzzd',$gzzd);
       $this->assign('xwzx',$xwzx);
       $this->assign('aqgl',$aqgl);
       $this->assign('tpxw',$tpxw);
       $this->assign('ztbd',$ztbd);
       $this->assign('whjs',$whjs);
       $this->display();
    }
    
    public function _empty(){
        $this->error("请正确输入网站...");
    }
    //中心简介
    public function introduction(){
    	$this->display("introduction");
    }

    //其他列表页(没有子列表的)
    public function otherList1($page=1){
        $num = 20;
        if(!empty(I('get.category'))){
            session('fy',I('get.category'));
            $category = I('get.category');
        }
        else{
             $category = session('fy');
        }
        list($pageCount,$page,$list,$count) = D('Article')->getList($category,$num,$page);
        modifyDate($list);
        $getname = getByName($category);
        C('site.name', $getname[0]);
        $this->assign('mc',$getname);
        $this->assign('list',$list);
        $this->assign('pageCount',$pageCount);
        $this->assign('page',$page);
        $this->assign('count',$count);
       $this->display("list1");
    }

    //其他列表页(带子列表的)
    public function otherList2($page=1){
       $num = 20;
       $str = "";
       $arr = "";
        if(!empty(I('get.category'))){
             session('fy',I('get.category'));
             $category = I('get.category');
             $arr = getsub($category);
             $str = "category='".$arr[0][0]."' or category='".$arr[1][0]."' or category='".$arr[2][0]."' or category='".$arr[3][0]."'";
               list($pageCount,$page,$list,$count) = D('Article')->getSubList($str,$num,$page);
            }
        else{
             $category = session('fy');
             $arr = getsub($category);
             $str = I('get.sub');
             list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
        }
         modifyDate($list);
        $getname = getByName($category);
        C('site.name', $getname[0]);
        $this->assign('arr',$arr);
        $this->assign('mc',$getname);
        $this->assign('list',$list);
        $this->assign('pageCount',$pageCount);
        $this->assign('page',$page);
        $this->assign('count',$count);
       $this->display("list2");
    }

    public function details(){
     try{
         $aId = I('get.article');
         $article = D('Article');
         $res = $article->view($aId,true);
         C('site.name',$res['aTitle']);
         $this->assign('list',$res);
         $this->display();
        }catch(Exception $e){
                $this->error($e->getMessage());  
        }
       
    }
}