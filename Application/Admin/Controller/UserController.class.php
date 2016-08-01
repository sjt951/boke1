<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 登陆控制器
 */
class UserController extends AuthController{
	/**
	 * 默认方法
	 */
	public function index(){
		// 用户信息
		$userData = M()->query("SELECT * FROM hd_user");
		$this->assign('userData',$userData);
		$this->display();
	}
	// 锁定方法
	public function lock(){
		// 获取uid 并锁定该用户
		$uid = $_GET['uid'];
		$userData = M()->exec("UPDATE hd_user SET `lock`=1 WHERE uid={$uid}");
		$this->success('锁定成功');
	}
	// 解锁方法
	public function unlock(){
		// 获取uid 并解锁该用户
		$uid = $_GET['uid'];
		$userData = M()->exec("UPDATE hd_user SET `lock`=0 WHERE uid={$uid}");
		$this->success('解锁成功');
	}
	
}






