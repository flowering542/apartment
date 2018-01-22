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

class EmptyController  extends Controller{

	public function index(){
		 $this->error("请正确输入网站...");
	}

}