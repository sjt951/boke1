<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class LoginController extends Controller{
	/**
	 * 默认方法
	 */
	public function Login(){
		// 检测是否重复登陆
        if(!empty($_SESSION['user'])){
             $this->error('请勿重复登录','index.php');
        }
    	if(IS_POST){
            if(isset($_POST['auto'])){
                setcookie(session_name(),session_id(),time() + 3600 * 24 * 7, '/');
            }else{
                setcookie(session_name(),session_id(),0,'/');
            }
            // 处理信息
            $username = htmlspecialchars($_POST['account']);
            $password = md5($_POST['pwd']);
            // 验证密码   通过用户名找密码
            $pw = M()->query("SELECT * FROM hd_user WHERE username='{$username}'");
            // 密码是否正确
            if($pw == array())$this->error('账号不存在','index.php');
            if($pw[0]['lock']==1)$this->error('账号已被锁定','index.php');
            if($password == ($pw[0]['passwd'])){
                $_SESSION['user'] = $username;
                $_SESSION['uid'] = $pw[0]['uid'];
                $this->success('登陆成功');
            }else{
                $this->error('密码错误'); 
            }
	}
}
    public function out(){
        session_unset();
        session_destroy();
        $this->success('退出成功','index.php');
    }
}






