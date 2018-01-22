<?php
/**
 * Project: 公寓中心
 * User: xuhailong
 * Date: 2017/10/5 0015
 * Time: 10:13
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class ArticleController extends CheckController{

	public function index(){
	    $this->display();
	}

	public function top(){
	    $this->display();
	}

	public function left(){
	    $this->display();
	}

	public function _empty(){
        $this->error("请输入正确的网站...");
    }

	public function publish(){
		if(IS_POST){
			try{
                $article = D('Article');
				$data = $article->create();
				if(!empty($_FILES['myfile']['tmp_name'])){
					 $d = $article->uploadFile();
				    $data['image'] = $d;
				}
				$article->post($data);
				session('publish',$data['category']);
				$this->success("发布成功！");
			}
			catch(Exception $e){
                $this->error($e->getMessage());  
			}
		}
		else{
			$this->display();
		}
	   
	}

	public function delList(){
		$articleId = I('get.articleId');
		$article = D('Article');
		$res = $article->where(array('articleId'=>$articleId))->delete();
		if($res === false){
            $this->error('删除失败！');
		}
	    $re = $_SERVER['HTTP_REFERER'];
	    if(isset($re)){
	    	redirect($re);
	    } else{
	    	$this->redirect('Article/index');
	    }
		
	}

	public function republish(){
		if(IS_GET){
		   $articleId = I('get.articleId');
		   $article = D('Article');
		   $re = $_SERVER['HTTP_REFERER'];
		   session('qian',$re);
		   // dump($re = $_SERVER['HTTP_REFERER']);
		   $res = $article->where(array('articleId'=>$articleId))->find();
           $this->assign('list',$res);
		   $this->display();
		}
		else if(IS_POST){
			try{
				 $article = D('Article');
				 $data = $article->create();
				if(!empty($_FILES['myfile']['tmp_name'])){
						 $d = $article->uploadFile();
					    $data['image'] = $d;
					}
				$article->post($data,$data['articleId']);
				if(empty(session('qian'))){
                   $this->success("修改成功！",U('Article/index'));
				}
				else{$this->success("修改成功！",session('qian'));}
			}
			catch(Exception $e){
                $this->error($e->getMessage());  
			}
		}
	
	}

	public function delImage($image=null){
		  $articleId = I('get.articleId');
		  $article = D('Article');
		  $res = $article->where(array('articleId'=>$articleId))->setField('image','');
          if($res === false){$this->error('删除失败！');}
		  $path = "./Public".$image;
		  $b = delDirAndFile($path,false);
          $this->ajaxReturn($b);
	}

	 //宿管动态
	public function sgdt($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xyxw($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xsgz($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xggy($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function tzgg($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function whjs($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function gzzd($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xfzs($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function ydgl($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function zagl($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function crbzs($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function fwzl($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xszt($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function byszt($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function whyzt($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function hbzt($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

	public function xgxz($page=1){
		$num = 10;  //一页多少条
		$str = ACTION_NAME;
		list($pageCount,$page,$list,$count) = D('Article')->getList($str,$num,$page);
		$this->assign('list',$list);
		$this->assign('pageCount',$pageCount);
		$this->assign('page',$page);
		$this->assign('count',$count);
		$this->display();
	}

}