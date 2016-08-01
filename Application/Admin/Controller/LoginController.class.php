<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 登陆控制器
 */
class LoginController extends Controller{
	/**
	 * 默认方法
	 */
	// public function index(){
	// 	if(IS_POST){
	// 	    $_SESSION['aname'] = 'admin';
	// 		$_SESSION['aid'] = 1;
	// 	    $this->success('登陆成功','./index.php?m=Admin');
	// 	}
	// 	$this->display();
	// }
	
	public function code(){
		$code = new \Hdphp\Tool\Code;
		$code->show();
	}
	public function index(){
		// 检测是否重复登陆
        if(!empty($_SESSION['aname'])){
             $this->error('请勿重复登录','index.php');
        }
		if(IS_POST){
			// 处理信息
            $username = htmlspecialchars($_POST['userName']);
            $password = md5($_POST['psd']);
            // 验证密码   通过用户名找密码
            $pw = M()->query("SELECT * FROM hd_admin WHERE username='{$username}'");
            // 密码是否正确
            if($pw == array())$this->error('账号不存在','index.php');
            if($password == ($pw[0]['passwd'])){
                $_SESSION['aname'] = $username;
                $_SESSION['aid'] = $pw[0]['aid'];
                $this->success('登陆成功','index.php?m=Admin');
            }else{
                $this->error('密码错误'); 
            }
		}
		$this->display();
	}
	// 退出方法
    public function out(){
    	// 删除session  退出成功
        session_unset();
        session_destroy();
        $this->success('退出成功','index.php?m=Admin&c=Login');
    }	
}






