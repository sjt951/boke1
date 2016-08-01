<?php 
namespace Home\Controller;
use Hdphp\Library\Controller;
/**
 * 默认控制器
 */
class RegisterController extends Controller{
	/**
	 * 默认方法
	 */
	public function Register(){
		if(IS_POST){
            $username = htmlspecialchars($_POST['username']);
            $password = md5($_POST['password']);
            $code = strtoupper($_POST['code']);
			if($_SESSION['code']!=$code){
				$this->error('验证码错误');
			}
			// 是否能找到用户名
                if(M()->exec("SELECT username FROM hd_user where username='{$username}'")){
                    $this->error('用户名已存在'); 
                }
                // 存入新用户
			    M()->exec("INSERT INTO hd_user SET username='{$username}',passwd='{$password}'");
			$this->success('注册成功');
		}
	}

    public function checkUser(){
        // 得到用户输入的用户名
        $username = $_POST['u'];
        // 检测是否重复
        if(M()->exec("SELECT username FROM hd_user where username='{$username}'")){
            echo "0";
        }else{
            echo "1";
        }
    }
}
