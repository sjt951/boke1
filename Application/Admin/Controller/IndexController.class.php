<?php 
namespace Admin\Controller;
use Hdphp\Library\Controller;
/**
 * 后台默认控制器
 */
class IndexController extends AuthController{
	/**
	 * 默认方法
	 */
	public function index(){
		//获得周几***********
		$arr = array(
			'Monday' => '一',
			'Tuesday'=> '二',
			'Wednesday' => '三',
			'Thursday' => '四',
			'Friday' => '五',
			'Saturday' => '六',
			'Sunday' => '七',
		);
		$date = getdate();
		$weekday = $arr[$date['weekday']];
		$this->assign('weekday',$weekday);
		$this->display();
	}
	
	public function welcome(){
	    $this->display();
	}
}






