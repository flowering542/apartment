<?php
namespace Admin\Controller;
use Think\Controller;


class CheckController extends Controller
{	
	function _initialize()      //管理员权限
	{
		if(!session('?user.username')){
              $this->error('请先登录', U('/Admin/index'));
		 }
    }
}