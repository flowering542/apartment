<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {

    public function index(){
        $this->display("Login/login");
    }

    public function login(){
        if(IS_AJAX){
			    $username = I('post.username');
				$tPwd1 = md5(I('post.password'));
				$admin = M('Admin');
			    $password = $admin->where(array('username'=>$username))->getField('password');
			    if($password === $tPwd1){
                    // $nickname = $admin->where(array('username'=>$username,'password'=>$tPwd1))->getField('nickname');
                    session('user.username',$username);
			    	//session('user.nickname',$nickname);
			    	$this->ajaxReturn("ok");
			    }
			    $this->ajaxReturn("no");
        }
    	 
    }

    public function checkyzm(){
        $Verify = new Verify;
        if( $Verify->check($_POST['yzm'])){
        	$this->ajaxReturn("yzmok");
        }
        else{
        	$this->ajaxReturn("yzmno");
        }
      //  return $Verify->check($yzm);
    }

    public function yzm(){
        ob_clean();
        $verify=new Verify();  //创建验证码
        $verify->length=4;     //验证码的长度
        $verify->fontSize=16;  //验证码字体的大小
        $verify->useNoise = false;  //是否有污点
        //$verify->useCurve = false; //曲线的混淆
        $verify->codeSet="0123456789";
        $verify->entry();  //生成
    }

     public function login_out(){
        session('[destroy]');
        $this->redirect('./index/');
    } 


}