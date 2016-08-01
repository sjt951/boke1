<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 登陆控制器
 */
class RuleController extends AuthController{
	/**
	 * 默认方法
	 */
	public function point(){
		$this->display('rule_point.html');
	}
	public function level(){
		$this->display('rule_level.html');
	}
}






